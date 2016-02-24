'use strict';

/**
* AngularJS controller for loading featured articles.
*
* @class FeaturedController
*/
angular.module('playlistsApp').controller('FeaturedController', [
    '$scope',
    'Playlist',
    'modalFactory',
    function (
        $scope,
        Playlist,
        modalFactory
    ) {

    var countDownTimeInSeconds = 11;
    $scope.sortableConfig = {
        group: 'articles',
        animation: 150,
        onAdd: function (evt/**Event*/){
         var item,
            number,
            occurences,
            isInLogList = false,
            limit;
            item = evt.model; // the current dragged article
            number = item.number;
            occurences = 0;
            angular.forEach($scope.$parent.featuredArticles, function(value, key) {
                if (value.number == number && value.language == item.language) {
                    occurences++;
                }
            });

            if (occurences > 1) {
                $scope.$parent.featuredArticles.splice(evt.newIndex, 1);
                flashMessage(Translator.trans('Item already exists in the list', {}, 'articles'), 'error');

                return true;
            }

            limit = $scope.$parent.playlist.selected.maxItems;
            // show alert with revert button
            if (limit && limit != 0 && $scope.$parent.featuredArticles.length > limit) {
                // article that shouldn't be removed, its needed to determine on
                // which position it's placed so we can remove the last one elment
                // from the list or the one before last - see removeLastArticle function
                $scope.$parent.articleNotToRemove = item;
                $scope.$parent.articleOverLimitIndex = evt.newIndex;
                $scope.$parent.articleOverLimitNumber = number;
                $scope.$parent.showLimitAlert = true;
                $scope.$parent.countDown = countDownTimeInSeconds;
                $scope.$parent.startCountDown();
            }

            isInLogList = _.some(
                Playlist.getLogList(),
                {number: number, language: item.language, _method: 'unlink'}
            );

            if (!isInLogList) {
                // this check prevents inserting duplicate article
                // when it's drag from the available articles list.
                // onSort event is executed before onEnd so in both of them it will
                // insert the same value to the log list
                isInLogList = _.some(
                    Playlist.getLogList(),
                    {number: number, language: item.language}
                );

                if (!isInLogList) {
                    // add article to log list, so we can save it later using batch save
                    item._method = 'link';
                    item._order = evt.newIndex + 1;
                    Playlist.addItemToLogList(item);
                }
            } else {
                Playlist.removeItemFromLogList(item, 'unlink');
            }
        },
        onSort: function (evt/**Event*/){
            var article = evt.model;
            var articleInList = _.find(
                $scope.$parent.featuredArticles,
                {number: article.number, language: article.language}
            );

            if (articleInList !== undefined && evt.newIndex !== evt.oldIndex) {
                Playlist.removeItemFromLogList(articleInList, 'link');
                article._order = evt.newIndex + 1;
                article._method = "link";
                Playlist.addItemToLogList(article);
            }
        }
    };

    /**
     * It reverts new article insertion over the playlist's limit
     */
    $scope.revertAction = function () {
        if ($scope.$parent.articleOverLimitIndex !== undefined) {
            $scope.$parent.featuredArticles.splice($scope.$parent.articleOverLimitIndex, 1);
            $scope.$parent.showLimitAlert = false;
            $scope.$parent.isCounting = false;
            Playlist.removeItemFromLogList($scope.$parent.articleNotToRemove, 'link');
        }
    }

    /**
     * Deletes single article from the currently loaded playlist
     *
     * @param  {Object} article Article object
     */
    $scope.deleteSingleArticle = function (article) {
        Playlist.removeSingleArticle(article.number, article.language)
        .then(function () {
            _.remove(
                $scope.$parent.featuredArticles,
                {number: article.number}
            );
            flashMessage(Translator.trans('List updated.', {}, 'articles'));
            Playlist.setCurrentPlaylistArticles($scope.$parent.featuredArticles);
        });
    };

    /**
     * Removes article from the playlist.
     * Checks if article exist in the list of available articles (on the current page)
     * if it doesn't exist put it at the first position, else don't add it -
     * purpose of it is that this article can be reused again after it will be removed
     * from the list of Featured comments, so no need to search for it again etc.
     *
     * @param  {Object} article Article object
     */
    $scope.removeArticle = function (article) {
        var availablArticles = [],
            featuredArticles = [],
            exists = false,
            isInLogList = false;

        availablArticles = $scope.$parent.tableParams.data;
        featuredArticles = $scope.$parent.featuredArticles;
        exists = _.some(
            availablArticles,
            {number: article.number, language: article.language}
        );

        if (!exists) {
            availablArticles.unshift(article);
        }

        _.remove(
            featuredArticles,
            {number: article.number, language: article.language}
        );

        // check if the article exists in the logList,
        // if user will drag article to the playlist, it will add new field called "_method"
        // set to "link" value. Then if user will remove article from the featured articles' list
        // it should remove it from the logList to not pass fake data to the server, else it will add
        // article to the logList with field "_method": "unlink" so the article can be unlinked from
        // the playlist.
        isInLogList = _.some(
            Playlist.getLogList(),
            {number: article.number, language: article.language, _method: 'link'}
        );

        if (!isInLogList) {
            // set method for the removed object so we can pass it to
            // the API endpoint and remove item using batch remove feature
            article._method = "unlink";
            Playlist.addItemToLogList(article);
        } else {
            Playlist.removeItemFromLogList(article, 'link');
        }

        Playlist.setCurrentPlaylistArticles(featuredArticles);
    }

    /**
     * Updates parent controller's playlistLimit variable, so save button
     * can be disabled when limit is incorrect, i.e. is string not number.
     * It also shows the limit modal when list limit has been changed.
     *
     * @param  {Object} scope Current scope
     */
    $scope.updateParentLimit = function (scope) {
        var newLimit = $scope.$parent.playlist.selected.maxItems,
        oldLimit = $scope.$parent.playlist.selected.oldLimit;

        $scope.$parent.playlistLimit = scope.limitForm.$valid;

        if (newLimit && newLimit != 0 && newLimit < oldLimit ||
            ((oldLimit === null || oldLimit === 0) && newLimit > oldLimit)
        ) {
            var title = Translator.trans('Info', {}, 'articles'),
                text = Translator.trans('articles.playlists.alert', {}, 'articles'),
                okText = Translator.trans('OK', {}, 'messages'),
                cancelText = Translator.trans('Cancel', {}, 'messages'),
                modal;

            modal = modalFactory.confirmLight(title, text, okText, cancelText);
            modal.result.then(function () {
                var sliced = $scope.$parent.featuredArticles.slice(0, newLimit);
                $scope.$parent.featuredArticles = sliced;
                Playlist.setCurrentPlaylistArticles(sliced);
            }, function () {
                $scope.$parent.playlist.selected.maxItems = oldLimit;
            });
        }
    }
}]);