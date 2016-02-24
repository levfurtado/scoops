<?php

/* NewscoopNewscoopBundle:Playlists:index.html.twig */
class __TwigTemplate_c1834446aa0c43057c3100cf74da452843c63d6277f54a194b0a78a475e65be7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NewscoopNewscoopBundle::admin_layout.html.twig", "NewscoopNewscoopBundle:Playlists:index.html.twig", 1);
        $this->blocks = array(
            'admin_title' => array($this, 'block_admin_title'),
            'admin_page_title_content' => array($this, 'block_admin_page_title_content'),
            'admin_page_title_box' => array($this, 'block_admin_page_title_box'),
            'admin_stylesheets' => array($this, 'block_admin_stylesheets'),
            'admin_scripts' => array($this, 'block_admin_scripts'),
            'admin_page_menu_bar' => array($this, 'block_admin_page_menu_bar'),
            'admin_content' => array($this, 'block_admin_content'),
            'admin_page_footer_box' => array($this, 'block_admin_page_footer_box'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NewscoopNewscoopBundle::admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_admin_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Featured Article Lists", array(), "articles"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("admin_title", $context, $blocks);
    }

    // line 4
    public function block_admin_page_title_content($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Featured Article Lists", array(), "articles"), "html", null, true);
    }

    // line 5
    public function block_admin_page_title_box($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        if (((isset($context["editorView"]) ? $context["editorView"] : $this->getContext($context, "editorView")) == false)) {
            // line 7
            echo "      <div class=\"toolbar row\"><span class=\"article-title\">
    ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Featured Article Lists", array(), "articles"), "html", null, true);
            echo "
  </span></div>
  ";
        }
    }

    // line 12
    public function block_admin_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/css/playlists.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/css/bootstrap-custom.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/css/select.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"/js/select2/select2.css\">
<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/css/ng-table.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscooparticles/app/loading-bar.css"), "html", null, true);
        echo "\">
";
    }

    // line 20
    public function block_admin_scripts($context, array $blocks = array())
    {
        // line 21
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/angular.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 23
    public function block_admin_page_menu_bar($context, array $blocks = array())
    {
        // line 24
        echo "  ";
        if (((isset($context["editorView"]) ? $context["editorView"] : $this->getContext($context, "editorView")) == false)) {
            // line 25
            echo "    ";
            $this->displayParentBlock("admin_page_menu_bar", $context, $blocks);
            echo "
  ";
        }
    }

    // line 28
    public function block_admin_content($context, array $blocks = array())
    {
        // line 29
        echo "<div ng-app=\"playlistsApp\" ng-controller=\"PlaylistsController\" ng-cloak>
    <div class=\"system_pref\" ";
        // line 30
        if ((isset($context["editorView"]) ? $context["editorView"] : $this->getContext($context, "editorView"))) {
            echo "style=\"margin: -20px -24px; padding: 14px;\"";
        }
        echo ">
        ";
        // line 31
        if ((isset($context["editorView"]) ? $context["editorView"] : $this->getContext($context, "editorView"))) {
            // line 32
            echo "        <div class=\"toolbar\" style=\"background: #fff;box-shadow: none;margin-bottom: 13px;border: none;padding: 0;\">
            <div class=\"select-playlist-bar\" style=\"float: left;\">
                    <ui-select ng-model=\"playlist.selected\" theme=\"select2\" ng-click=\"loadAllPlaylists()\" on-select=\"setPlaylistInfoOnChange(\$item)\" style=\"min-width: 200px;\">
                            <ui-select-match placeholder=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select a list", array(), "articles"), "html", null, true);
            echo "\">{[{\$select.selected.title}]}</ui-select-match>
                            <ui-select-choices repeat=\"playlist in playlists | listsFilter: {title: \$select.search}\">
                            <div ng-bind-html=\"playlist.title | highlight: \$select.search\"></div>
                        </ui-select-choices>
                    </ui-select>
            </div>

            <div class=\"save-button-bar\">
                <button ng-disabled=\"!playlist.selected\" ng-click=\"addArticleToListFromEditor('";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["articleNumber"]) ? $context["articleNumber"] : $this->getContext($context, "articleNumber")), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, (isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "html", null, true);
            echo "')\" class=\"btn btn-default btn-xs\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add to list", array(), "articles"), "html", null, true);
            echo "</button>
                <button onclick=\"parent.\$.fancybox.close(); parent.location.reload();\" class=\"btn btn-default btn-xs\">";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Close", array(), "messages"), "html", null, true);
            echo "</button>
                <button type=\"button\" ng-disabled=\"processing || !playlist.selected\" ng-click=\"savePlaylistInEditorMode()\" name=\"save\" class=\"btn btn-xs btn-primary\"><span class=\"glyphicon glyphicon-ok\"></span> ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "messages"), "html", null, true);
            echo "</button>
            </div>
        </div>
        ";
        }
        // line 49
        echo "        ";
        if (((isset($context["editorView"]) ? $context["editorView"] : $this->getContext($context, "editorView")) == false)) {
            // line 50
            echo "        <ul class=\"list-inline first-menu\" ng-form=\"playlistForm\">
            ";
            // line 51
            if (((isset($context["editorView"]) ? $context["editorView"] : $this->getContext($context, "editorView")) == false)) {
                // line 52
                echo "            <li><button class=\"add btn btn-primary btn-sm\" ng-click=\"addNewPlaylist()\"><span class=\"glyphicon glyphicon-plus\"></span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add list", array(), "articles"), "html", null, true);
                echo "</button></li>
            <li>
            ";
            }
            // line 55
            echo "        <ui-select ng-model=\"playlist.selected\" theme=\"select2\" ng-click=\"loadAllPlaylists()\" on-select=\"setPlaylistInfoOnChange(\$item)\" style=\"min-width: 200px;\">
                <ui-select-match placeholder=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select a list", array(), "articles"), "html", null, true);
            echo "\">{[{\$select.selected.title}]}</ui-select-match>
                <ui-select-choices repeat=\"playlist in playlists | listsFilter: {title: \$select.search}\">
                <div ng-bind-html=\"playlist.title | highlight: \$select.search\"></div>
            </ui-select-choices>
        </ui-select>
    </li>
    <li ng-if=\"playlist.selected\">
        <label id=\"playlist-name-label\">";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("List Name", array(), "articles"), "html", null, true);
            echo ":</label>
    </li>
    <li ng-if=\"playlist.selected\">
        <form name=\"listNameForm\">
        <span id=\"list_name\">
            <input name=\"playlistName\" ng-minlength=\"1\" ng-maxlength=\"60\" ng-model=\"formData.title\" required value=\"{[{ formData.title }]}\" class=\"form-control\" style=\"float: left;\" id=\"playlist-name\" ng-change=\"validateListName(this)\">
        </span>
        </form>
    </li>
    <li ng-if=\"playlist.selected.id\">
        <label id=\"playlist-id-label\">";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("List ID", array(), "articles"), "html", null, true);
            echo ":</label>
    </li>
    <li ng-if=\"playlist.selected.id\">
        <span style=\"float: left;\">
            <input name=\"playlist-id\" id=\"playlistId\" value=\"{[{ playlist.selected.id }]}\" class=\"form-control\" ng-disabled=\"true\">
        </span>
    </li>
    <li style=\"float: right\" ng-if=\"playlist.selected\">
        <div class=\"save-button-bar\">
            <button type=\"button\" ng-click=\"removePlaylist()\" ng-disabled=\"processing\" class=\"btn btn-sm btn-default\"><span class=\"glyphicon glyphicon-trash\"></span> ";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Remove", array(), "messages"), "html", null, true);
            echo "</button>
            <button type=\"button\" ng-disabled=\"processing || playlistForm.\$invalid || !playlistLimit\" ng-click=\"savePlaylist()\" name=\"save\" class=\"btn btn-sm btn-primary\"><span class=\"glyphicon glyphicon-ok\"></span> ";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "messages"), "html", null, true);
            echo "</button>
        </div>
    </li>
</ul>
";
        }
        // line 88
        echo "<div class=\"context-content\">
";
        // line 89
        if (((isset($context["editorView"]) ? $context["editorView"] : $this->getContext($context, "editorView")) == false)) {
            // line 90
            echo "    <div class=\"context-block context-search plugin-context-block\">
        <h3>";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Available Articles", array(), "articles"), "html", null, true);
            echo "</h3>
        <div class=\"smartlist\">
            <div class=\"filters\">
                <div class=\"container\">
                <div class=\"heading\">
                <button class=\"btn btn-sf-invisible\" ng-click=\"showAddFilter = !showAddFilter\">
                <span class=\"glyphicon glyphicon-plus\" ng-class=\"{'glyphicon-plus': !showAddFilter,
                             'glyphicon-minus': showAddFilter}\"></span>
                <span class=\"add-text\">";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Filter", array(), "library"), "html", null, true);
            echo "</span>
                </button>
            </div>
                    <div ng-show=\"showAddFilter\" ng-controller=\"FiltersController\">
                        <div class=\"filters-left\">
                            <ul class=\"list-group\">
                                <li class=\"list-group-item\">
                                    <ui-select ng-model=\"publication.selected\" theme=\"select2\" ng-click=\"loadPublications()\" on-select=\"loadIssues(\$item)\">
                                        <ui-select-match placeholder=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Publication", array(), "messages"), "html", null, true);
            echo "...\">{[{\$select.selected.name}]}</ui-select-match>
                                        <ui-select-choices repeat=\"publication in publications\">
                                            <div ng-bind-html=\"publication.name | highlight: \$select.search\"></div>
                                        </ui-select-choices>
                                    </ui-select>
                                </li>
                              <li class=\"list-group-item\">
                                    <ui-select ng-model=\"issue.selected\" ng-disabled=\"!publication.selected\" theme=\"select2\" on-select=\"loadSections(\$item)\">
                                        <ui-select-match placeholder=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Issue", array(), "messages"), "html", null, true);
            echo "...\">{[{\$select.selected.title}]}</ui-select-match>
                                        <ui-select-choices repeat=\"issue in issues\">
                                            <div ng-bind-html=\"issue.title | highlight: \$select.search\"></div>
                                            <small>number: {[{ ::issue.number}]}, language: {[{ ::issue.language}]}</small>
                                        </ui-select-choices>
                                    </ui-select>
                              </li>
                              <li class=\"list-group-item\">
                                    <ui-select ng-model=\"section.selected\" ng-disabled=\"!issue.selected\" theme=\"select2\" on-select=\"loadByMainFilters(\$item)\">
                                        <ui-select-match placeholder=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Section", array(), "messages"), "html", null, true);
            echo "...\">{[{\$select.selected.title}]}</ui-select-match>
                                        <ui-select-choices repeat=\"section in sections\">
                                            <div ng-bind-html=\"section.title | highlight: \$select.search\"></div>
                                            <small>number: {[{ ::section.number}]}, language: {[{ ::section.language}]}</small>
                                        </ui-select-choices>
                                    </ui-select>
                              </li>
                              <li class=\"list-group-item\">
                                    <ui-select ng-model=\"articleType.selected\" theme=\"select2\" ng-click=\"loadArticleTypes()\" on-select=\"loadByArticleTypesOnSelect(\$item)\">
                                        <ui-select-match placeholder=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select type", array(), "library"), "html", null, true);
            echo "...\">{[{\$select.selected.name}]}</ui-select-match>
                                        <ui-select-choices repeat=\"articleType in articleTypes\">
                                            <div ng-bind-html=\"articleType.name | highlight: \$select.search\"></div>
                                        </ui-select-choices>
                                    </ui-select>
                              </li>
                              <li class=\"list-group-item\">
                                    <ui-select ng-model=\"author.selected\" theme=\"select2\" on-select=\"loadByAuthorsOnSelect(\$item)\">
                                        <ui-select-match placeholder=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Author", array(), "messages"), "html", null, true);
            echo "...\">{[{\$select.selected.firstName + ' ' + \$select.selected.lastName}]}</ui-select-match>
                                        <ui-select-choices repeat=\"author in authors\" refresh=\"loadAuthors(\$select.search)\" refresh-delay=\"500\">
                                            <div ng-bind-html=\"author.firstName + ' ' + author.lastName | highlight: \$select.search\"></div>
                                        </ui-select-choices>
                                    </ui-select>
                              </li>
                              <li class=\"list-group-item\">
                                    <ui-select ng-model=\"user.selected\" theme=\"select2\" ng-disabled=\"disabled\" reset-search-input=\"false\" on-select=\"loadByUsersOnSelect(\$item)\">
                                        <ui-select-match placeholder=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Users", array(), "messages"), "html", null, true);
            echo "...\">{[{\$select.selected.firstName + ' ' + \$select.selected.lastName}]}</ui-select-match>
                                        <ui-select-choices repeat=\"user in users\" refresh=\"loadUsers(\$select.search)\" refresh-delay=\"500\">
                                            <div ng-bind-html=\"user.firstName + ' ' + user.lastName | highlight: \$select.search\"></div>
                                        </ui-select-choices>
                                    </ui-select>
                              </li>
                            </ul>
                        </div>
                        <div class=\"filters-right\">
                            <ul class=\"list-group\">
                              <li class=\"list-group-item\">
                                    <input type=\"text\" ng-change=\"loadByDateOnChange(this)\" placeholder=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Publish date", array(), "library"), "html", null, true);
            echo "...\" ng-model=\"filterDate\" class=\"form-control input-sm input-filter-date date\"/>
                              </li>
                              <li class=\"list-group-item\">
                                    <input type=\"text\" ng-change=\"loadByPublishedBeforeOnChange(this)\" placeholder=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Published before", array(), "library"), "html", null, true);
            echo "...\" ng-model=\"filterPublishedBefore\" class=\"form-control input-sm input-filter-date date\"/>
                              </li>
                              <li class=\"list-group-item\">
                                    <input type=\"text\" ng-change=\"loadByPublishedAfterOnChange(this)\" placeholder=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Published after", array(), "library"), "html", null, true);
            echo "...\" ng-model=\"filterPublishedAfter\" class=\"form-control input-sm input-filter-date date\"/>
                              </li>
                              <li class=\"list-group-item\">
                                    <ui-select ng-model=\"status.selected\" theme=\"select2\" on-select=\"loadByStatusOnSelect(\$item)\">
                                        <ui-select-match placeholder=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "messages"), "html", null, true);
            echo "...\">{[{\$select.selected.name}]}</ui-select-match>
                                        <ui-select-choices repeat=\"status in statuses\">
                                            <div ng-bind-html=\"status.name | highlight: \$select.search\"></div>
                                        </ui-select-choices>
                                    </ui-select>
                              </li>
                              <li class=\"list-group-item\">
                                    <ui-select ng-model=\"topic.selected\" theme=\"select2\" on-select=\"loadByTopicOnSelect(\$item)\">
                                        <ui-select-match placeholder=\"";
            // line 178
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Topic", array(), "messages"), "html", null, true);
            echo "...\">{[{\$select.selected.title}]}</ui-select-match>
                                        <ui-select-choices repeat=\"topic in topics\" refresh=\"loadTopics(\$select.search)\" refresh-delay=\"500\">
                                            <div ng-bind-html=\"topic.title | highlight: \$select.search\"></div>
                                        </ui-select-choices>
                                    </ui-select>
                              </li>
                              <li class=\"list-group-item\">
                                    <ui-select ng-model=\"language.selected\" theme=\"select2\" ng-click=\"loadLanguages()\" on-select=\"loadByLanguageOnSelect(\$item)\">
                                        <ui-select-match placeholder=\"";
            // line 186
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Language", array(), "messages"), "html", null, true);
            echo "...\">{[{\$select.selected.name}]}</ui-select-match>
                                        <ui-select-choices repeat=\"language in languages | filter:\$select.search\">
                                            <div ng-bind-html=\"language.name | highlight: \$select.search\"></div>
                                        </ui-select-choices>
                                    </ui-select>
                              </li>
                            </ul>
                        </div>
                    </div>
                </div>
                    </div>
                    <div loading-container=\"tableParams.settings().\$loading\">
                        <table ng-table=\"tableParams\" show-filter=\"true\" class=\"table datatable dataTable\">
                            <tbody ng-sortable=\"sortableConfig\">
                                <tr ng-repeat=\"article in \$data\" class=\"move-elements\">
                                    <td class=\"query\" filter=\"{ 'query': 'text' }\" sortable=\"query\">
                                        <div class=\"context-item\">
                                            <div class=\"context-drag-topics\"><a href=\"#\" title=\"drag to sort\"></a></div>
                                            <div class=\"context-item-header\">
                                                <div class=\"context-item-date\">{[{::article.created| date:\"dd.MM.yyyy 'at' H:mm:ss\"}]}
                                                    <span class=\"label label-default\" style=\"margin-right: 5px\">
                                                            <span ng-switch on=\"article.status\">
                                                                <span ng-switch-when=\"Y\">";
            // line 208
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Published", array(), "messages"), "html", null, true);
            echo "</span>
                                                                <span ng-switch-when=\"N\">";
            // line 209
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("New", array(), "messages"), "html", null, true);
            echo "</span>
                                                                <span ng-switch-when=\"S\">";
            // line 210
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Submitted", array(), "messages"), "html", null, true);
            echo "</span>
                                                                <span ng-switch-default>";
            // line 211
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Unknown", array(), "messages"), "html", null, true);
            echo "</span>
                                                            </span></span><span class=\"label label-primary\">{[{ ::article.type}]}</span>
                                                        <span class=\"label label-default\">{[{ ::article.language}]}</span>
                                                    </div>
                                                    <a href=\"#\" style=\"text-decoration: none;\" ng-click=\"viewArticle(article)\" class=\"view-article\">";
            // line 215
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("View article", array(), "articles"), "html", null, true);
            echo "</a>
                                                </div>
                                                <div class=\"context-item-summary\">
                                                    {[{ ::article.title}]}
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <tr ng-if=\"!\$data.length\" class=\"ignore-elements\">
                                    <td>
                                        <div class=\"context-item\">
                                            ";
            // line 226
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No records found.", array(), "library"), "html", null, true);
            echo "
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 236
        echo "                <div ng-controller=\"FeaturedController\">
                    <div ng-if=\"!\$parent.isViewing\" class=\"context-block context-list plugin-context-block\" ";
        // line 237
        if ((isset($context["editorView"]) ? $context["editorView"] : $this->getContext($context, "editorView"))) {
            echo "style=\"width: 643px;\"";
        }
        echo ">
                        <div class=\"row\">
                            <div class=\"col-xs-6\"><h3 style=\"display:inline\">{[{ playlist.selected.title}]}</h3></div>
                            <div class=\"col-xs-6\" ng-if=\"playlist.selected\">
                            <form name=\"limitForm\" class=\"limit-input\">
                            <label id=\"playlist-id-label\">";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("List limit", array(), "articles"), "html", null, true);
        echo ":</label>
                            ";
        // line 243
        if (((isset($context["editorView"]) ? $context["editorView"] : $this->getContext($context, "editorView")) == false)) {
            // line 244
            echo "                                <input ng-change=\"updateParentLimit(this)\" type=\"number\" name=\"input\" ng-model=\"playlist.selected.maxItems\" min=\"0\" max=\"99\" class=\"form-control input-sm\" id=\"playlistId\">
                                <span class=\"error-custom\" ng-show=\"limitForm.input.\$error.number\">";
            // line 245
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Not valid number", array(), "articles"), "html", null, true);
            echo "!</span>
                            ";
        } else {
            // line 247
            echo "                                <span ng-if=\"playlist.selected.maxItems\" style=\"line-height: 28px;\">{[{ playlist.selected.maxItems }]}</span>
                                <span ng-if=\"!playlist.selected.maxItems\" style=\"line-height: 28px;\">0</span>
                            ";
        }
        // line 250
        echo "                            </form>
                            </div>
                        </div>
                        <div class=\"context-list-results\" >
                        <div ng-if=\"loadingSpinner\" style=\"margin-left:45%; margin-top: 100px;\" class=\"ai-circled ai-indicator ai-grey-spin\"></div>
                            <div style=\"display: block\" ng-hide=\"loadingSpinner\">
                                <form>
                                <div infinite-scroll=\"loadArticlesOnScrollDown()\" infinite-scroll-container=\"'#context_list'\" infinite-scroll-parent infinite-scroll-distance='2'>
                                    <div id=\"placeholder-wrapper\" ";
        // line 258
        if (((isset($context["editorView"]) ? $context["editorView"] : $this->getContext($context, "editorView")) == false)) {
            echo "ng-class=\"{'empty-placeholder': \$parent.featuredArticles.length == 0}\" ";
        }
        echo ">
                                    <p>";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Drag here to add to list", array(), "articles"), "html", null, true);
        echo "</p>
                                    <ul id=\"context_list\" ng-sortable=\"sortableConfig\">
                                        <li class=\"item\" ng-repeat=\"article in \$parent.featuredArticles\">
                                            <div class=\"context-item\" ";
        // line 262
        if ((isset($context["editorView"]) ? $context["editorView"] : $this->getContext($context, "editorView"))) {
            echo "style=\"width: 620px\"";
        }
        echo " >
                                                <div class=\"context-drag-topics\"><a href=\"#\" title=\"drag to sort\"></a></div>
                                                <div class=\"context-item-header\">
                                                    <div class=\"context-item-date\">{[{::article.created| date:\"dd.MM.yyyy 'at' H:mm:ss\"}]}
                                                        <span class=\"label label-default\" style=\"margin-right: 5px\">
                                                            <span ng-switch on=\"article.status\">
                                                                <span ng-switch-when=\"Y\">";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Published", array(), "messages"), "html", null, true);
        echo "</span>
                                                                <span ng-switch-when=\"N\">";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("New", array(), "messages"), "html", null, true);
        echo "</span>
                                                                <span ng-switch-when=\"S\">";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Submitted", array(), "messages"), "html", null, true);
        echo "</span>
                                                                <span ng-switch-default>";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Unknown", array(), "messages"), "html", null, true);
        echo "</span>
                                                            </span></span><span class=\"label label-primary\">{[{ ::article.type}]}</span>
                                                            <span class=\"label label-default\">{[{ ::article.language}]}</span>
                                                        </div>
                                                        <a href=\"#\" ng-click=\"removeArticle(article)\" class=\"corner-button\" style=\"display: block; padding-right: 19px;\">
                                                            <span class=\"ui-icon ui-icon-closethick\"></span>
                                                        </a>
                                                    </div>
                                                    <div class=\"context-item-summary\">
                                                        {[{ ::article.title}]}
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                <!-- alert message start -->
                                <div class=\"limit-alert-wrapper\" ng-show=\"\$parent.showLimitAlert\">
                                    <div class=\"limit-alert\">
                                        <button type=\"button\" class=\"close\" ng-click=\"removeLastInsertNew()\"><span aria-hidden=\"true\">×</span></button>
                                        <div class=\"limit-alert-content\">";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("The last article of this list has been removed.", array(), "articles"), "html", null, true);
        echo " {[{countDown}]}...</div>
                                        <div class=\"limit-alert-footer\">
                                            <button type=\"button\" ng-click=\"revertAction()\" name=\"revert\" class=\"btn btn-sm btn-default\">";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Revert", array(), "articles"), "html", null, true);
        echo "</button>
                                            <button type=\"button\" ng-click=\"removeLastInsertNew()\" name=\"revert\" class=\"btn btn-sm btn-primary\">";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ok", array(), "messages"), "html", null, true);
        echo "</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- alert message end -->
                            </div>
                        </div>
                    </div>
                    <div class=\"context-block plugin-context-block context-preview\" ng-if=\"isViewing\">
                        <div class=\"save-button-bar\">
                        <button ng-click=\"addArticleToListFromPreview()\" class=\"btn btn-default btn-xs\">";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add to list", array(), "articles"), "html", null, true);
        echo "</button>
                        <button ng-click=\"closeViewArticle()\" class=\"btn btn-default btn-xs\">";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Close", array(), "messages"), "html", null, true);
        echo "</button>
                        </div>

                        <div class=\"context-article-preview\" style=\"overflow-y:auto; height:500px;\">
                            <h3 id=\"preview-article-title\">{[{ articlePreview.title }]}</h3>
                            <div id=\"preview-article-body\" style=\"color: #444444\">
                                <h5>";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Authors", array(), "articles"), "html", null, true);
        echo "</h5>
                                <span ng-repeat=\"author in articlePreview.authors\">
                                    <p>- {[{ ::author.name }]}</p>
                                </span>
                                <span ng-repeat=\"(key, value) in articlePreview.fields\">
                                    <h5>{[{ ::key}]}</h5>
                                    <p ng-bind-html=\"value\"></p>
                                </span>
                                <h5>";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Date", array(), "articles"), "html", null, true);
        echo "</h5>
                                <p>{[{ ::articlePreview.created | date:\"dd.MM.yyyy H:mm:ss\"}]}</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
            </div>
            </div>

            <script type=\"text/javascript\">
                var clientId = '";
        // line 333
        echo twig_escape_filter($this->env, (isset($context["clientId"]) ? $context["clientId"] : $this->getContext($context, "clientId")), "html", null, true);
        echo "';
                var redirectUris = '";
        // line 334
        echo twig_escape_filter($this->env, (isset($context["redirectUris"]) ? $context["redirectUris"] : $this->getContext($context, "redirectUris")), "html", null, true);
        echo "';
                \$(document).ready(function() {
                    \$('.input-filter').attr('placeholder', \"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search", array(), "messages"), "html", null, true);
        echo "...\");
                });

            </script>
            <script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/lodash.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/sanitize.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/ui-bootstrap-modal.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscooparticles/app/ng-infinite-scroll.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscooparticles/app/loading-bar.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/select.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/ng-table.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/Sortable.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/ng-sortable.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/playlists/app.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/playlists/controllers/playlists.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/playlists/controllers/featured-articles.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/playlists/controllers/articles-filters.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/playlists/directives/loading-container.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/playlists/directives/sf-iframe.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/playlists/filters/lists-search.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/playlists/services/modal-factory.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/playlists/services/user-auth.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/playlists/services/auth-interceptor.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/playlists/services/playlists.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/playlists/services/filters-service.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 361
        echo $this->env->getExtension('routing')->getUrl("bazinga_jstranslation_js", array("domain" => "articles"));
        echo "\"></script>

";
    }

    // line 364
    public function block_admin_page_footer_box($context, array $blocks = array())
    {
        // line 365
        if (((isset($context["editorView"]) ? $context["editorView"] : $this->getContext($context, "editorView")) == false)) {
            // line 366
            echo "    ";
            $this->displayParentBlock("admin_page_footer_box", $context, $blocks);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "NewscoopNewscoopBundle:Playlists:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  719 => 366,  717 => 365,  714 => 364,  707 => 361,  703 => 360,  699 => 359,  695 => 358,  691 => 357,  687 => 356,  683 => 355,  679 => 354,  675 => 353,  671 => 352,  667 => 351,  663 => 350,  659 => 349,  655 => 348,  651 => 347,  647 => 346,  643 => 345,  639 => 344,  635 => 343,  631 => 342,  627 => 341,  623 => 340,  616 => 336,  611 => 334,  607 => 333,  592 => 321,  581 => 313,  572 => 307,  568 => 306,  555 => 296,  551 => 295,  546 => 293,  521 => 271,  517 => 270,  513 => 269,  509 => 268,  498 => 262,  492 => 259,  486 => 258,  476 => 250,  471 => 247,  466 => 245,  463 => 244,  461 => 243,  457 => 242,  447 => 237,  444 => 236,  431 => 226,  417 => 215,  410 => 211,  406 => 210,  402 => 209,  398 => 208,  373 => 186,  362 => 178,  351 => 170,  344 => 166,  338 => 163,  332 => 160,  318 => 149,  307 => 141,  296 => 133,  284 => 124,  272 => 115,  261 => 107,  250 => 99,  239 => 91,  236 => 90,  234 => 89,  231 => 88,  223 => 83,  219 => 82,  207 => 73,  194 => 63,  184 => 56,  181 => 55,  174 => 52,  172 => 51,  169 => 50,  166 => 49,  159 => 45,  155 => 44,  147 => 43,  136 => 35,  131 => 32,  129 => 31,  123 => 30,  120 => 29,  117 => 28,  109 => 25,  106 => 24,  103 => 23,  96 => 21,  93 => 20,  87 => 18,  83 => 17,  78 => 15,  74 => 14,  69 => 13,  66 => 12,  58 => 8,  55 => 7,  52 => 6,  49 => 5,  43 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'NewscoopNewscoopBundle::admin_layout.html.twig' %}*/
/* {% trans_default_domain "articles" %}*/
/* {% block admin_title %}{{ 'Featured Article Lists'|trans }} - {{ parent() }}{% endblock %}*/
/* {% block admin_page_title_content %}{{ 'Featured Article Lists'|trans }}{% endblock %}*/
/* {% block admin_page_title_box %}*/
/*   {% if editorView == false %}*/
/*       <div class="toolbar row"><span class="article-title">*/
/*     {{ 'Featured Article Lists'|trans }}*/
/*   </span></div>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* {% block admin_stylesheets %}*/
/* <link rel="stylesheet" href="{{ asset('/bundles/newscoopnewscoop/css/playlists.css') }}">*/
/* <link rel="stylesheet" href="{{ asset('/bundles/newscoopnewscoop/css/bootstrap-custom.css') }}">*/
/* <link rel="stylesheet" href="{{ asset('/bundles/newscoopnewscoop/css/select.min.css') }}">*/
/* <link rel="stylesheet" href="/js/select2/select2.css">*/
/* <link rel="stylesheet" href="{{ asset('/bundles/newscoopnewscoop/css/ng-table.min.css') }}">*/
/* <link rel="stylesheet" href="{{ asset('/bundles/newscooparticles/app/loading-bar.css') }}">*/
/* {% endblock %}*/
/* {% block admin_scripts %}*/
/* <script type="text/javascript" src="{{ asset('/bundles/newscoopnewscoop/js/angular.min.js') }}"></script>*/
/* {% endblock %}*/
/* {% block admin_page_menu_bar %}*/
/*   {% if editorView == false %}*/
/*     {{ parent() }}*/
/*   {% endif %}*/
/* {% endblock %}*/
/* {% block admin_content %}*/
/* <div ng-app="playlistsApp" ng-controller="PlaylistsController" ng-cloak>*/
/*     <div class="system_pref" {% if editorView %}style="margin: -20px -24px; padding: 14px;"{% endif %}>*/
/*         {% if editorView %}*/
/*         <div class="toolbar" style="background: #fff;box-shadow: none;margin-bottom: 13px;border: none;padding: 0;">*/
/*             <div class="select-playlist-bar" style="float: left;">*/
/*                     <ui-select ng-model="playlist.selected" theme="select2" ng-click="loadAllPlaylists()" on-select="setPlaylistInfoOnChange($item)" style="min-width: 200px;">*/
/*                             <ui-select-match placeholder="{{ 'Select a list'|trans }}">{[{$select.selected.title}]}</ui-select-match>*/
/*                             <ui-select-choices repeat="playlist in playlists | listsFilter: {title: $select.search}">*/
/*                             <div ng-bind-html="playlist.title | highlight: $select.search"></div>*/
/*                         </ui-select-choices>*/
/*                     </ui-select>*/
/*             </div>*/
/* */
/*             <div class="save-button-bar">*/
/*                 <button ng-disabled="!playlist.selected" ng-click="addArticleToListFromEditor('{{ articleNumber }}', '{{ language }}')" class="btn btn-default btn-xs">{{ 'Add to list'|trans }}</button>*/
/*                 <button onclick="parent.$.fancybox.close(); parent.location.reload();" class="btn btn-default btn-xs">{{ 'Close'|trans({}, 'messages') }}</button>*/
/*                 <button type="button" ng-disabled="processing || !playlist.selected" ng-click="savePlaylistInEditorMode()" name="save" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-ok"></span> {{ 'Save'|trans({}, 'messages') }}</button>*/
/*             </div>*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if editorView == false %}*/
/*         <ul class="list-inline first-menu" ng-form="playlistForm">*/
/*             {% if editorView == false %}*/
/*             <li><button class="add btn btn-primary btn-sm" ng-click="addNewPlaylist()"><span class="glyphicon glyphicon-plus"></span> {{ 'Add list'|trans }}</button></li>*/
/*             <li>*/
/*             {% endif %}*/
/*         <ui-select ng-model="playlist.selected" theme="select2" ng-click="loadAllPlaylists()" on-select="setPlaylistInfoOnChange($item)" style="min-width: 200px;">*/
/*                 <ui-select-match placeholder="{{ 'Select a list'|trans }}">{[{$select.selected.title}]}</ui-select-match>*/
/*                 <ui-select-choices repeat="playlist in playlists | listsFilter: {title: $select.search}">*/
/*                 <div ng-bind-html="playlist.title | highlight: $select.search"></div>*/
/*             </ui-select-choices>*/
/*         </ui-select>*/
/*     </li>*/
/*     <li ng-if="playlist.selected">*/
/*         <label id="playlist-name-label">{{ 'List Name'|trans }}:</label>*/
/*     </li>*/
/*     <li ng-if="playlist.selected">*/
/*         <form name="listNameForm">*/
/*         <span id="list_name">*/
/*             <input name="playlistName" ng-minlength="1" ng-maxlength="60" ng-model="formData.title" required value="{[{ formData.title }]}" class="form-control" style="float: left;" id="playlist-name" ng-change="validateListName(this)">*/
/*         </span>*/
/*         </form>*/
/*     </li>*/
/*     <li ng-if="playlist.selected.id">*/
/*         <label id="playlist-id-label">{{ 'List ID'|trans }}:</label>*/
/*     </li>*/
/*     <li ng-if="playlist.selected.id">*/
/*         <span style="float: left;">*/
/*             <input name="playlist-id" id="playlistId" value="{[{ playlist.selected.id }]}" class="form-control" ng-disabled="true">*/
/*         </span>*/
/*     </li>*/
/*     <li style="float: right" ng-if="playlist.selected">*/
/*         <div class="save-button-bar">*/
/*             <button type="button" ng-click="removePlaylist()" ng-disabled="processing" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash"></span> {{ 'Remove'|trans({}, 'messages') }}</button>*/
/*             <button type="button" ng-disabled="processing || playlistForm.$invalid || !playlistLimit" ng-click="savePlaylist()" name="save" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-ok"></span> {{ 'Save'|trans({}, 'messages') }}</button>*/
/*         </div>*/
/*     </li>*/
/* </ul>*/
/* {% endif %}*/
/* <div class="context-content">*/
/* {% if editorView == false %}*/
/*     <div class="context-block context-search plugin-context-block">*/
/*         <h3>{{ 'Available Articles'|trans }}</h3>*/
/*         <div class="smartlist">*/
/*             <div class="filters">*/
/*                 <div class="container">*/
/*                 <div class="heading">*/
/*                 <button class="btn btn-sf-invisible" ng-click="showAddFilter = !showAddFilter">*/
/*                 <span class="glyphicon glyphicon-plus" ng-class="{'glyphicon-plus': !showAddFilter,*/
/*                              'glyphicon-minus': showAddFilter}"></span>*/
/*                 <span class="add-text">{{ 'Filter'|trans({}, 'library') }}</span>*/
/*                 </button>*/
/*             </div>*/
/*                     <div ng-show="showAddFilter" ng-controller="FiltersController">*/
/*                         <div class="filters-left">*/
/*                             <ul class="list-group">*/
/*                                 <li class="list-group-item">*/
/*                                     <ui-select ng-model="publication.selected" theme="select2" ng-click="loadPublications()" on-select="loadIssues($item)">*/
/*                                         <ui-select-match placeholder="{{ 'Publication'|trans({}, 'messages') }}...">{[{$select.selected.name}]}</ui-select-match>*/
/*                                         <ui-select-choices repeat="publication in publications">*/
/*                                             <div ng-bind-html="publication.name | highlight: $select.search"></div>*/
/*                                         </ui-select-choices>*/
/*                                     </ui-select>*/
/*                                 </li>*/
/*                               <li class="list-group-item">*/
/*                                     <ui-select ng-model="issue.selected" ng-disabled="!publication.selected" theme="select2" on-select="loadSections($item)">*/
/*                                         <ui-select-match placeholder="{{ 'Issue'|trans({}, 'messages') }}...">{[{$select.selected.title}]}</ui-select-match>*/
/*                                         <ui-select-choices repeat="issue in issues">*/
/*                                             <div ng-bind-html="issue.title | highlight: $select.search"></div>*/
/*                                             <small>number: {[{ ::issue.number}]}, language: {[{ ::issue.language}]}</small>*/
/*                                         </ui-select-choices>*/
/*                                     </ui-select>*/
/*                               </li>*/
/*                               <li class="list-group-item">*/
/*                                     <ui-select ng-model="section.selected" ng-disabled="!issue.selected" theme="select2" on-select="loadByMainFilters($item)">*/
/*                                         <ui-select-match placeholder="{{ 'Section'|trans({}, 'messages') }}...">{[{$select.selected.title}]}</ui-select-match>*/
/*                                         <ui-select-choices repeat="section in sections">*/
/*                                             <div ng-bind-html="section.title | highlight: $select.search"></div>*/
/*                                             <small>number: {[{ ::section.number}]}, language: {[{ ::section.language}]}</small>*/
/*                                         </ui-select-choices>*/
/*                                     </ui-select>*/
/*                               </li>*/
/*                               <li class="list-group-item">*/
/*                                     <ui-select ng-model="articleType.selected" theme="select2" ng-click="loadArticleTypes()" on-select="loadByArticleTypesOnSelect($item)">*/
/*                                         <ui-select-match placeholder="{{ 'Select type'|trans({}, 'library') }}...">{[{$select.selected.name}]}</ui-select-match>*/
/*                                         <ui-select-choices repeat="articleType in articleTypes">*/
/*                                             <div ng-bind-html="articleType.name | highlight: $select.search"></div>*/
/*                                         </ui-select-choices>*/
/*                                     </ui-select>*/
/*                               </li>*/
/*                               <li class="list-group-item">*/
/*                                     <ui-select ng-model="author.selected" theme="select2" on-select="loadByAuthorsOnSelect($item)">*/
/*                                         <ui-select-match placeholder="{{ 'Author'|trans({}, 'messages') }}...">{[{$select.selected.firstName + ' ' + $select.selected.lastName}]}</ui-select-match>*/
/*                                         <ui-select-choices repeat="author in authors" refresh="loadAuthors($select.search)" refresh-delay="500">*/
/*                                             <div ng-bind-html="author.firstName + ' ' + author.lastName | highlight: $select.search"></div>*/
/*                                         </ui-select-choices>*/
/*                                     </ui-select>*/
/*                               </li>*/
/*                               <li class="list-group-item">*/
/*                                     <ui-select ng-model="user.selected" theme="select2" ng-disabled="disabled" reset-search-input="false" on-select="loadByUsersOnSelect($item)">*/
/*                                         <ui-select-match placeholder="{{ 'Users'|trans({}, 'messages') }}...">{[{$select.selected.firstName + ' ' + $select.selected.lastName}]}</ui-select-match>*/
/*                                         <ui-select-choices repeat="user in users" refresh="loadUsers($select.search)" refresh-delay="500">*/
/*                                             <div ng-bind-html="user.firstName + ' ' + user.lastName | highlight: $select.search"></div>*/
/*                                         </ui-select-choices>*/
/*                                     </ui-select>*/
/*                               </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="filters-right">*/
/*                             <ul class="list-group">*/
/*                               <li class="list-group-item">*/
/*                                     <input type="text" ng-change="loadByDateOnChange(this)" placeholder="{{ 'Publish date'|trans({}, 'library') }}..." ng-model="filterDate" class="form-control input-sm input-filter-date date"/>*/
/*                               </li>*/
/*                               <li class="list-group-item">*/
/*                                     <input type="text" ng-change="loadByPublishedBeforeOnChange(this)" placeholder="{{ 'Published before'|trans({}, 'library') }}..." ng-model="filterPublishedBefore" class="form-control input-sm input-filter-date date"/>*/
/*                               </li>*/
/*                               <li class="list-group-item">*/
/*                                     <input type="text" ng-change="loadByPublishedAfterOnChange(this)" placeholder="{{ 'Published after'|trans({}, 'library') }}..." ng-model="filterPublishedAfter" class="form-control input-sm input-filter-date date"/>*/
/*                               </li>*/
/*                               <li class="list-group-item">*/
/*                                     <ui-select ng-model="status.selected" theme="select2" on-select="loadByStatusOnSelect($item)">*/
/*                                         <ui-select-match placeholder="{{ 'Status'|trans({}, 'messages') }}...">{[{$select.selected.name}]}</ui-select-match>*/
/*                                         <ui-select-choices repeat="status in statuses">*/
/*                                             <div ng-bind-html="status.name | highlight: $select.search"></div>*/
/*                                         </ui-select-choices>*/
/*                                     </ui-select>*/
/*                               </li>*/
/*                               <li class="list-group-item">*/
/*                                     <ui-select ng-model="topic.selected" theme="select2" on-select="loadByTopicOnSelect($item)">*/
/*                                         <ui-select-match placeholder="{{ 'Topic'|trans({}, 'messages') }}...">{[{$select.selected.title}]}</ui-select-match>*/
/*                                         <ui-select-choices repeat="topic in topics" refresh="loadTopics($select.search)" refresh-delay="500">*/
/*                                             <div ng-bind-html="topic.title | highlight: $select.search"></div>*/
/*                                         </ui-select-choices>*/
/*                                     </ui-select>*/
/*                               </li>*/
/*                               <li class="list-group-item">*/
/*                                     <ui-select ng-model="language.selected" theme="select2" ng-click="loadLanguages()" on-select="loadByLanguageOnSelect($item)">*/
/*                                         <ui-select-match placeholder="{{ 'Language'|trans({}, 'messages') }}...">{[{$select.selected.name}]}</ui-select-match>*/
/*                                         <ui-select-choices repeat="language in languages | filter:$select.search">*/
/*                                             <div ng-bind-html="language.name | highlight: $select.search"></div>*/
/*                                         </ui-select-choices>*/
/*                                     </ui-select>*/
/*                               </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                     </div>*/
/*                     <div loading-container="tableParams.settings().$loading">*/
/*                         <table ng-table="tableParams" show-filter="true" class="table datatable dataTable">*/
/*                             <tbody ng-sortable="sortableConfig">*/
/*                                 <tr ng-repeat="article in $data" class="move-elements">*/
/*                                     <td class="query" filter="{ 'query': 'text' }" sortable="query">*/
/*                                         <div class="context-item">*/
/*                                             <div class="context-drag-topics"><a href="#" title="drag to sort"></a></div>*/
/*                                             <div class="context-item-header">*/
/*                                                 <div class="context-item-date">{[{::article.created| date:"dd.MM.yyyy 'at' H:mm:ss"}]}*/
/*                                                     <span class="label label-default" style="margin-right: 5px">*/
/*                                                             <span ng-switch on="article.status">*/
/*                                                                 <span ng-switch-when="Y">{{ 'Published'|trans({}, 'messages') }}</span>*/
/*                                                                 <span ng-switch-when="N">{{ 'New'|trans({}, 'messages') }}</span>*/
/*                                                                 <span ng-switch-when="S">{{ 'Submitted'|trans({}, 'messages') }}</span>*/
/*                                                                 <span ng-switch-default>{{ 'Unknown'|trans({}, 'messages') }}</span>*/
/*                                                             </span></span><span class="label label-primary">{[{ ::article.type}]}</span>*/
/*                                                         <span class="label label-default">{[{ ::article.language}]}</span>*/
/*                                                     </div>*/
/*                                                     <a href="#" style="text-decoration: none;" ng-click="viewArticle(article)" class="view-article">{{ 'View article'|trans }}</a>*/
/*                                                 </div>*/
/*                                                 <div class="context-item-summary">*/
/*                                                     {[{ ::article.title}]}*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 <tr ng-if="!$data.length" class="ignore-elements">*/
/*                                     <td>*/
/*                                         <div class="context-item">*/
/*                                             {{ 'No records found.'|trans({}, 'library')}}*/
/*                                         </div>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 <div ng-controller="FeaturedController">*/
/*                     <div ng-if="!$parent.isViewing" class="context-block context-list plugin-context-block" {% if editorView %}style="width: 643px;"{% endif %}>*/
/*                         <div class="row">*/
/*                             <div class="col-xs-6"><h3 style="display:inline">{[{ playlist.selected.title}]}</h3></div>*/
/*                             <div class="col-xs-6" ng-if="playlist.selected">*/
/*                             <form name="limitForm" class="limit-input">*/
/*                             <label id="playlist-id-label">{{ 'List limit'|trans}}:</label>*/
/*                             {% if editorView == false %}*/
/*                                 <input ng-change="updateParentLimit(this)" type="number" name="input" ng-model="playlist.selected.maxItems" min="0" max="99" class="form-control input-sm" id="playlistId">*/
/*                                 <span class="error-custom" ng-show="limitForm.input.$error.number">{{ 'Not valid number'|trans}}!</span>*/
/*                             {% else %}*/
/*                                 <span ng-if="playlist.selected.maxItems" style="line-height: 28px;">{[{ playlist.selected.maxItems }]}</span>*/
/*                                 <span ng-if="!playlist.selected.maxItems" style="line-height: 28px;">0</span>*/
/*                             {% endif %}*/
/*                             </form>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="context-list-results" >*/
/*                         <div ng-if="loadingSpinner" style="margin-left:45%; margin-top: 100px;" class="ai-circled ai-indicator ai-grey-spin"></div>*/
/*                             <div style="display: block" ng-hide="loadingSpinner">*/
/*                                 <form>*/
/*                                 <div infinite-scroll="loadArticlesOnScrollDown()" infinite-scroll-container="'#context_list'" infinite-scroll-parent infinite-scroll-distance='2'>*/
/*                                     <div id="placeholder-wrapper" {% if editorView == false %}ng-class="{'empty-placeholder': $parent.featuredArticles.length == 0}" {% endif %}>*/
/*                                     <p>{{ 'Drag here to add to list'|trans }}</p>*/
/*                                     <ul id="context_list" ng-sortable="sortableConfig">*/
/*                                         <li class="item" ng-repeat="article in $parent.featuredArticles">*/
/*                                             <div class="context-item" {% if editorView %}style="width: 620px"{% endif %} >*/
/*                                                 <div class="context-drag-topics"><a href="#" title="drag to sort"></a></div>*/
/*                                                 <div class="context-item-header">*/
/*                                                     <div class="context-item-date">{[{::article.created| date:"dd.MM.yyyy 'at' H:mm:ss"}]}*/
/*                                                         <span class="label label-default" style="margin-right: 5px">*/
/*                                                             <span ng-switch on="article.status">*/
/*                                                                 <span ng-switch-when="Y">{{ 'Published'|trans({}, 'messages') }}</span>*/
/*                                                                 <span ng-switch-when="N">{{ 'New'|trans({}, 'messages') }}</span>*/
/*                                                                 <span ng-switch-when="S">{{ 'Submitted'|trans({}, 'messages') }}</span>*/
/*                                                                 <span ng-switch-default>{{ 'Unknown'|trans({}, 'messages') }}</span>*/
/*                                                             </span></span><span class="label label-primary">{[{ ::article.type}]}</span>*/
/*                                                             <span class="label label-default">{[{ ::article.language}]}</span>*/
/*                                                         </div>*/
/*                                                         <a href="#" ng-click="removeArticle(article)" class="corner-button" style="display: block; padding-right: 19px;">*/
/*                                                             <span class="ui-icon ui-icon-closethick"></span>*/
/*                                                         </a>*/
/*                                                     </div>*/
/*                                                     <div class="context-item-summary">*/
/*                                                         {[{ ::article.title}]}*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </li>*/
/*                                         </ul>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     </form>*/
/*                                 </div>*/
/*                                 <!-- alert message start -->*/
/*                                 <div class="limit-alert-wrapper" ng-show="$parent.showLimitAlert">*/
/*                                     <div class="limit-alert">*/
/*                                         <button type="button" class="close" ng-click="removeLastInsertNew()"><span aria-hidden="true">×</span></button>*/
/*                                         <div class="limit-alert-content">{{'The last article of this list has been removed.'|trans}} {[{countDown}]}...</div>*/
/*                                         <div class="limit-alert-footer">*/
/*                                             <button type="button" ng-click="revertAction()" name="revert" class="btn btn-sm btn-default">{{'Revert'|trans}}</button>*/
/*                                             <button type="button" ng-click="removeLastInsertNew()" name="revert" class="btn btn-sm btn-primary">{{'Ok'|trans({}, 'messages')}}</button>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!-- alert message end -->*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="context-block plugin-context-block context-preview" ng-if="isViewing">*/
/*                         <div class="save-button-bar">*/
/*                         <button ng-click="addArticleToListFromPreview()" class="btn btn-default btn-xs">{{ 'Add to list'|trans }}</button>*/
/*                         <button ng-click="closeViewArticle()" class="btn btn-default btn-xs">{{ 'Close'|trans({}, 'messages') }}</button>*/
/*                         </div>*/
/* */
/*                         <div class="context-article-preview" style="overflow-y:auto; height:500px;">*/
/*                             <h3 id="preview-article-title">{[{ articlePreview.title }]}</h3>*/
/*                             <div id="preview-article-body" style="color: #444444">*/
/*                                 <h5>{{ 'Authors'|trans }}</h5>*/
/*                                 <span ng-repeat="author in articlePreview.authors">*/
/*                                     <p>- {[{ ::author.name }]}</p>*/
/*                                 </span>*/
/*                                 <span ng-repeat="(key, value) in articlePreview.fields">*/
/*                                     <h5>{[{ ::key}]}</h5>*/
/*                                     <p ng-bind-html="value"></p>*/
/*                                 </span>*/
/*                                 <h5>{{ 'Date'|trans }}</h5>*/
/*                                 <p>{[{ ::articlePreview.created | date:"dd.MM.yyyy H:mm:ss"}]}</p>*/
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div>*/
/*             </div>*/
/*             </div>*/
/* */
/*             <script type="text/javascript">*/
/*                 var clientId = '{{ clientId }}';*/
/*                 var redirectUris = '{{ redirectUris }}';*/
/*                 $(document).ready(function() {*/
/*                     $('.input-filter').attr('placeholder', "{{'Search'|trans({}, 'messages') }}...");*/
/*                 });*/
/* */
/*             </script>*/
/*             <script src="{{ asset('/bundles/newscoopnewscoop/js/lodash.min.js') }}"></script>*/
/*             <script src="{{ asset('/bundles/newscoopnewscoop/js/sanitize.js') }}"></script>*/
/*             <script src="{{ asset('/bundles/newscoopnewscoop/js/ui-bootstrap-modal.js') }}"></script>*/
/*             <script src="{{ asset('/bundles/newscooparticles/app/ng-infinite-scroll.min.js') }}"></script>*/
/*             <script src="{{ asset('/bundles/newscooparticles/app/loading-bar.js') }}"></script>*/
/*             <script src="{{ asset('/bundles/newscoopnewscoop/js/select.min.js') }}"></script>*/
/*             <script src="{{ asset('/bundles/newscoopnewscoop/js/ng-table.min.js') }}"></script>*/
/*             <script src="{{ asset('/bundles/newscoopnewscoop/js/Sortable.js') }}"></script>*/
/*             <script src="{{ asset('/bundles/newscoopnewscoop/js/ng-sortable.js') }}"></script>*/
/*             <script src="{{ asset('/bundles/newscoopnewscoop/js/playlists/app.js') }}"></script>*/
/*             <script src="{{ asset('/bundles/newscoopnewscoop/js/playlists/controllers/playlists.js') }}"></script>*/
/*             <script src="{{ asset('/bundles/newscoopnewscoop/js/playlists/controllers/featured-articles.js') }}"></script>*/
/*             <script src="{{ asset('/bundles/newscoopnewscoop/js/playlists/controllers/articles-filters.js') }}"></script>*/
/*             <script src="{{ asset('/bundles/newscoopnewscoop/js/playlists/directives/loading-container.js') }}"></script>*/
/*             <script src="{{ asset('/bundles/newscoopnewscoop/js/playlists/directives/sf-iframe.js') }}"></script>*/
/*             <script src="{{ asset('/bundles/newscoopnewscoop/js/playlists/filters/lists-search.js') }}"></script>*/
/*             <script src="{{ asset('/bundles/newscoopnewscoop/js/playlists/services/modal-factory.js') }}"></script>*/
/*             <script src="{{ asset('/bundles/newscoopnewscoop/js/playlists/services/user-auth.js') }}"></script>*/
/*             <script src="{{ asset('/bundles/newscoopnewscoop/js/playlists/services/auth-interceptor.js') }}"></script>*/
/*             <script src="{{ asset('/bundles/newscoopnewscoop/js/playlists/services/playlists.js') }}"></script>*/
/*             <script src="{{ asset('/bundles/newscoopnewscoop/js/playlists/services/filters-service.js') }}"></script>*/
/*             <script src="{{ url('bazinga_jstranslation_js', { 'domain': 'articles' }) }}"></script>*/
/* */
/* {% endblock %}*/
/* {% block admin_page_footer_box %}*/
/* {% if editorView == false %}*/
/*     {{ parent() }}*/
/* {% endif %}*/
/* {% endblock %}*/
