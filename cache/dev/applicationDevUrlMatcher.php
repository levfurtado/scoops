<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * applicationDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class applicationDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // admin_login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\SecurityController::loginAction',  '_route' => 'admin_login',);
                    }

                    // admin_login_check
                    if ($pathinfo === '/admin/login_check') {
                        return array('_route' => 'admin_login_check');
                    }

                }

                // admin_logout
                if (0 === strpos($pathinfo, '/admin/logout') && preg_match('#^/admin/logout(?:(?P<php>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_logout')), array (  'php' => '.php',));
                }

            }

            // fos_js_routing_js
            if (0 === strpos($pathinfo, '/admin/js/routing') && preg_match('#^/admin/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
            }

            // bazinga_jstranslation_js
            if (0 === strpos($pathinfo, '/admin/translations') && preg_match('#^/admin/translations(?:/(?P<domain>[\\w]+)(?:\\.(?P<_format>js|json))?)?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_bazinga_jstranslation_js;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bazinga_jstranslation_js')), array (  '_controller' => 'bazinga.jstranslation.controller:getTranslationsAction',  'domain' => 'messages',  '_format' => 'js',));
            }
            not_bazinga_jstranslation_js:

        }

        if (0 === strpos($pathinfo, '/oauth')) {
            if (0 === strpos($pathinfo, '/oauth/v2')) {
                // fos_oauth_server_token
                if ($pathinfo === '/oauth/v2/token') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_oauth_server_token;
                    }

                    return array (  '_controller' => 'fos_oauth_server.controller.token:tokenAction',  '_route' => 'fos_oauth_server_token',);
                }
                not_fos_oauth_server_token:

                if (0 === strpos($pathinfo, '/oauth/v2/auth')) {
                    // fos_oauth_server_authorize
                    if ($pathinfo === '/oauth/v2/auth') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_fos_oauth_server_authorize;
                        }

                        return array (  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\AuthorizeController::authorizeAction',  '_route' => 'fos_oauth_server_authorize',);
                    }
                    not_fos_oauth_server_authorize:

                    if (0 === strpos($pathinfo, '/oauth/v2/auth_login')) {
                        // oauth_login
                        if ($pathinfo === '/oauth/v2/auth_login') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_oauth_login;
                            }

                            return array (  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\OauthController::loginAction',  '_route' => 'oauth_login',);
                        }
                        not_oauth_login:

                        // oauth_login_check
                        if ($pathinfo === '/oauth/v2/auth_login_check') {
                            return array('_route' => 'oauth_login_check');
                        }

                    }

                }

            }

            // oauth_authentication_result
            if ($pathinfo === '/oauth/authentication/result') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oauth_authentication_result;
                }

                return array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\OauthController::defaultOauthRedirectAction',  '_route' => 'oauth_authentication_result',);
            }
            not_oauth_authentication_result:

        }

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/articles')) {
                // newscoop_gimme_articles_createarticle
                if (0 === strpos($pathinfo, '/api/articles/create') && preg_match('#^/api/articles/create(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_newscoop_gimme_articles_createarticle;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_createarticle')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesController::createArticleAction',));
                }
                not_newscoop_gimme_articles_createarticle:

                // newscoop_gimme_articles_createarticle_clear
                if (0 === strpos($pathinfo, '/api/articles/') && preg_match('#^/api/articles/(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_newscoop_gimme_articles_createarticle_clear;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_createarticle_clear')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesController::createArticleAction',));
                }
                not_newscoop_gimme_articles_createarticle_clear:

                // newscoop_gimme_articles_patcharticle
                if (preg_match('#^/api/articles/(?P<number>[^/]++)(?:/(?P<language>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('PATCH', 'POST'))) {
                        $allow = array_merge($allow, array('PATCH', 'POST'));
                        goto not_newscoop_gimme_articles_patcharticle;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_patcharticle')), array (  '_format' => 'json',  'language' => 'en',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesController::patchArticleAction',));
                }
                not_newscoop_gimme_articles_patcharticle:

                // newscoop_gimme_articles_getarticles
                if (preg_match('#^/api/articles(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_articles_getarticles;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_getarticles')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesController::getArticlesAction',));
                }
                not_newscoop_gimme_articles_getarticles:

            }

            // newscoop_gimme_articles_searcharticles
            if (0 === strpos($pathinfo, '/api/search/articles') && preg_match('#^/api/search/articles(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newscoop_gimme_articles_searcharticles;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_searcharticles')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesController::searchArticlesAction',));
            }
            not_newscoop_gimme_articles_searcharticles:

            if (0 === strpos($pathinfo, '/api/a')) {
                if (0 === strpos($pathinfo, '/api/articles')) {
                    // newscoop_gimme_articles_related_default_lang
                    if (preg_match('#^/api/articles/(?P<number>[^/]++)/related(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_newscoop_gimme_articles_related_default_lang;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_related_default_lang')), array (  '_format' => 'json',  'language' => NULL,  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesController::relatedArticlesAction',));
                    }
                    not_newscoop_gimme_articles_related_default_lang:

                    // newscoop_gimme_articles_related
                    if (preg_match('#^/api/articles/(?P<number>[^/]++)/(?P<language>[^/]++)/related(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_newscoop_gimme_articles_related;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_related')), array (  '_format' => 'json',  'language' => NULL,  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesController::relatedArticlesAction',));
                    }
                    not_newscoop_gimme_articles_related:

                    // newscoop_gimme_articles_getarticle
                    if (preg_match('#^/api/articles/(?P<number>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_newscoop_gimme_articles_getarticle;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_getarticle')), array (  '_format' => 'json',  'language' => NULL,  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesController::getArticleAction',));
                    }
                    not_newscoop_gimme_articles_getarticle:

                    // newscoop_gimme_articles_getarticle_language
                    if (preg_match('#^/api/articles/(?P<number>\\d+)(?:/(?P<language>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?)?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_newscoop_gimme_articles_getarticle_language;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_getarticle_language')), array (  '_format' => 'json',  'language' => NULL,  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesController::getArticleAction',));
                    }
                    not_newscoop_gimme_articles_getarticle_language:

                    // newscoop_gimme_articles_linkarticle
                    if (preg_match('#^/api/articles/(?P<number>[^/]++)(?:/(?P<language>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?)?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'LINK') {
                            $allow[] = 'LINK';
                            goto not_newscoop_gimme_articles_linkarticle;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_linkarticle')), array (  '_format' => 'json',  'language' => NULL,  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesController::linkArticleAction',));
                    }
                    not_newscoop_gimme_articles_linkarticle:

                    // newscoop_gimme_articles_linkarticle_default_lang
                    if (preg_match('#^/api/articles/(?P<number>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'LINK') {
                            $allow[] = 'LINK';
                            goto not_newscoop_gimme_articles_linkarticle_default_lang;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_linkarticle_default_lang')), array (  '_format' => 'json',  'language' => NULL,  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesController::linkArticleAction',));
                    }
                    not_newscoop_gimme_articles_linkarticle_default_lang:

                    // newscoop_gimme_articles_unlinkarticle
                    if (preg_match('#^/api/articles/(?P<number>[^/]++)(?:/(?P<language>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?)?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'UNLINK') {
                            $allow[] = 'UNLINK';
                            goto not_newscoop_gimme_articles_unlinkarticle;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_unlinkarticle')), array (  '_format' => 'json',  'language' => NULL,  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesController::unlinkArticleAction',));
                    }
                    not_newscoop_gimme_articles_unlinkarticle:

                    // newscoop_gimme_articles_unlinkarticle_default_lang
                    if (preg_match('#^/api/articles/(?P<number>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'UNLINK') {
                            $allow[] = 'UNLINK';
                            goto not_newscoop_gimme_articles_unlinkarticle_default_lang;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_unlinkarticle_default_lang')), array (  '_format' => 'json',  'language' => NULL,  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesController::unlinkArticleAction',));
                    }
                    not_newscoop_gimme_articles_unlinkarticle_default_lang:

                    // newscoop_gimme_articles_changearticlestatus
                    if (preg_match('#^/api/articles/(?P<number>[^/]++)/(?P<language>[^/]++)/(?P<status>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_newscoop_gimme_articles_changearticlestatus;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_changearticlestatus')), array (  '_format' => 'json',  'language' => 'en',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesController::changeArticleStatus',));
                    }
                    not_newscoop_gimme_articles_changearticlestatus:

                    // newscoop_gimme_articles_changearticlelockstatus
                    if (preg_match('#^/api/articles/(?P<number>[^/]++)/(?P<language>[^/]++)/lock(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_newscoop_gimme_articles_changearticlelockstatus;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_changearticlelockstatus')), array (  '_format' => 'json',  'language' => 'en',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesController::lockUnlockArticle',));
                    }
                    not_newscoop_gimme_articles_changearticlelockstatus:

                }

                if (0 === strpos($pathinfo, '/api/author')) {
                    // newscoop_gimme_authors_getauthor
                    if (preg_match('#^/api/author/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_newscoop_gimme_authors_getauthor;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_authors_getauthor')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\AuthorsController::getAuthorAction',));
                    }
                    not_newscoop_gimme_authors_getauthor:

                    if (0 === strpos($pathinfo, '/api/authors')) {
                        // newscoop_gimme_authors_getauthorbyid
                        if (preg_match('#^/api/authors/(?P<id>[\\d]+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_newscoop_gimme_authors_getauthorbyid;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_authors_getauthorbyid')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\AuthorsController::getAuthorByIdAction',));
                        }
                        not_newscoop_gimme_authors_getauthorbyid:

                        if (0 === strpos($pathinfo, '/api/authors/types')) {
                            // newscoop_gimme_authors_getauthorstypes
                            if (preg_match('#^/api/authors/types(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_newscoop_gimme_authors_getauthorstypes;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_authors_getauthorstypes')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\AuthorsController::getAuthorsTypesAction',));
                            }
                            not_newscoop_gimme_authors_getauthorstypes:

                            // newscoop_gimme_authors_getauthortype
                            if (preg_match('#^/api/authors/types/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_newscoop_gimme_authors_getauthortype;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_authors_getauthortype')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\AuthorsController::getAuthorTypeAction',));
                            }
                            not_newscoop_gimme_authors_getauthortype:

                        }

                    }

                }

            }

            // newscoop_gimme_authors_searchauthors
            if (0 === strpos($pathinfo, '/api/search/authors') && preg_match('#^/api/search/authors(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newscoop_gimme_authors_searchauthors;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_authors_searchauthors')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\AuthorsController::searchAuthorsAction',));
            }
            not_newscoop_gimme_authors_searchauthors:

            if (0 === strpos($pathinfo, '/api/a')) {
                // newscoop_gimme_authors_getarticleauthors
                if (0 === strpos($pathinfo, '/api/articles') && preg_match('#^/api/articles/(?P<number>[^/]++)/(?P<language>[^/]++)/authors(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_authors_getarticleauthors;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_authors_getarticleauthors')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\AuthorsController::getArticleAuthorsAction',));
                }
                not_newscoop_gimme_authors_getarticleauthors:

                // newscoop_gimme_authors_getarticleauthors_1
                if (0 === strpos($pathinfo, '/api/authors/article') && preg_match('#^/api/authors/article/(?P<number>[^/]++)/(?P<language>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_authors_getarticleauthors_1;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_authors_getarticleauthors_1')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\AuthorsController::getArticleAuthorsAction',));
                }
                not_newscoop_gimme_authors_getarticleauthors_1:

                // newscoop_gimme_authors_getarticleauthor
                if (0 === strpos($pathinfo, '/api/articles') && preg_match('#^/api/articles/(?P<number>[^/]++)/(?P<language>[^/]++)/authors/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_authors_getarticleauthor;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_authors_getarticleauthor')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\AuthorsController::getArticleAuthorAction',));
                }
                not_newscoop_gimme_authors_getarticleauthor:

                // newscoop_gimme_authors_getarticleauthor_1
                if (0 === strpos($pathinfo, '/api/authors') && preg_match('#^/api/authors/(?P<id>[^/]++)/article/(?P<number>[^/]++)/(?P<language>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_authors_getarticleauthor_1;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_authors_getarticleauthor_1')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\AuthorsController::getArticleAuthorAction',));
                }
                not_newscoop_gimme_authors_getarticleauthor_1:

                if (0 === strpos($pathinfo, '/api/articles')) {
                    // newscoop_gimme_authors_updatearticleauthor
                    if (preg_match('#^/api/articles/(?P<number>[^/]++)/(?P<language>[^/]++)/authors/(?P<authorId>[\\d]+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PATCH'))) {
                            $allow = array_merge($allow, array('POST', 'PATCH'));
                            goto not_newscoop_gimme_authors_updatearticleauthor;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_authors_updatearticleauthor')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\AuthorsController::updateArticleAuthorAction',));
                    }
                    not_newscoop_gimme_authors_updatearticleauthor:

                    // newscoop_gimme_authors_setarticleauthorsorder
                    if (preg_match('#^/api/articles/(?P<number>[^/]++)/(?P<language>[^/]++)/authors/order(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_newscoop_gimme_authors_setarticleauthorsorder;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_authors_setarticleauthorsorder')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\AuthorsController::setArticleAuthorsOrderAction',));
                    }
                    not_newscoop_gimme_authors_setarticleauthorsorder:

                }

            }

            if (0 === strpos($pathinfo, '/api/comments')) {
                // newscoop_gimme_comments_getcomments
                if (preg_match('#^/api/comments(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_comments_getcomments;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_comments_getcomments')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\CommentsController::getCommentsAction',));
                }
                not_newscoop_gimme_comments_getcomments:

                // newscoop_gimme_comments_getcomment
                if (preg_match('#^/api/comments/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_comments_getcomment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_comments_getcomment')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\CommentsController::getCommentAction',));
                }
                not_newscoop_gimme_comments_getcomment:

            }

            // newscoop_gimme_comments_getcommentsforarticle
            if (0 === strpos($pathinfo, '/api/articles') && preg_match('#^/api/articles/(?P<number>[^/]++)/(?P<language>[^/]++)/comments(?:/(?P<order>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?)?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newscoop_gimme_comments_getcommentsforarticle;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_comments_getcommentsforarticle')), array (  '_format' => 'json',  'order' => 'chrono',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\CommentsController::getCommentsForArticleAction',));
            }
            not_newscoop_gimme_comments_getcommentsforarticle:

            if (0 === strpos($pathinfo, '/api/comments')) {
                if (0 === strpos($pathinfo, '/api/comments/article')) {
                    // newscoop_gimme_comments_getcommentsforarticle_1
                    if (preg_match('#^/api/comments/article/(?P<number>[^/]++)/(?P<language>[^/]++)(?:/(?P<order>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?)?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_newscoop_gimme_comments_getcommentsforarticle_1;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_comments_getcommentsforarticle_1')), array (  '_format' => 'json',  'order' => 'chrono',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\CommentsController::getCommentsForArticleAction',));
                    }
                    not_newscoop_gimme_comments_getcommentsforarticle_1:

                    // newscoop_gimme_comments_getcommentsforarticle_recommended
                    if (preg_match('#^/api/comments/article/(?P<number>[^/]++)/(?P<language>[^/]++)/(?P<order>[^/]++)/recommended(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_newscoop_gimme_comments_getcommentsforarticle_recommended;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_comments_getcommentsforarticle_recommended')), array (  '_format' => 'json',  'order' => 'chrono',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\CommentsController::getCommentsForArticleAction',));
                    }
                    not_newscoop_gimme_comments_getcommentsforarticle_recommended:

                    // newscoop_gimme_comments_createcomment
                    if (preg_match('#^/api/comments/article/(?P<articleNumber>[^/]++)/(?P<languageCode>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_newscoop_gimme_comments_createcomment;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_comments_createcomment')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\CommentsController::createCommentAction',));
                    }
                    not_newscoop_gimme_comments_createcomment:

                }

                // newscoop_gimme_comments_updatecomment
                if (preg_match('#^/api/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PATCH'))) {
                        $allow = array_merge($allow, array('POST', 'PATCH'));
                        goto not_newscoop_gimme_comments_updatecomment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_comments_updatecomment')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\CommentsController::updateCommentAction',));
                }
                not_newscoop_gimme_comments_updatecomment:

                // newscoop_gimme_comments_updatecomment_1
                if (0 === strpos($pathinfo, '/api/comments/article') && preg_match('#^/api/comments/article/(?P<article>[^/]++)/(?P<language>[^/]++)/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PATCH'))) {
                        $allow = array_merge($allow, array('POST', 'PATCH'));
                        goto not_newscoop_gimme_comments_updatecomment_1;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_comments_updatecomment_1')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\CommentsController::updateCommentAction',));
                }
                not_newscoop_gimme_comments_updatecomment_1:

                // newscoop_gimme_comments_deletecomment
                if (preg_match('#^/api/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_newscoop_gimme_comments_deletecomment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_comments_deletecomment')), array (  '_format' => 'json',  'articleNumber' => NULL,  'languageCode' => NULL,  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\CommentsController::deleteCommentAction',));
                }
                not_newscoop_gimme_comments_deletecomment:

                // newscoop_gimme_comments_deletecomment_1
                if (0 === strpos($pathinfo, '/api/comments/article') && preg_match('#^/api/comments/article/(?P<articleNumber>[^/]++)/(?P<languageCode>[^/]++)/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_newscoop_gimme_comments_deletecomment_1;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_comments_deletecomment_1')), array (  '_format' => 'json',  'articleNumber' => NULL,  'languageCode' => NULL,  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\CommentsController::deleteCommentAction',));
                }
                not_newscoop_gimme_comments_deletecomment_1:

            }

            // newscoop_gimme_slideshows_getslideshowitems
            if (0 === strpos($pathinfo, '/api/slideshows') && preg_match('#^/api/slideshows/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newscoop_gimme_slideshows_getslideshowitems;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_slideshows_getslideshowitems')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\SlideshowsController::getSlideshowItemsAction',));
            }
            not_newscoop_gimme_slideshows_getslideshowitems:

            if (0 === strpos($pathinfo, '/api/articles')) {
                // newscoop_gimme_articles_slideshows_default_lang
                if (preg_match('#^/api/articles/(?P<number>[^/]++)/slideshows(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_articles_slideshows_default_lang;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_slideshows_default_lang')), array (  '_format' => 'json',  'language' => NULL,  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\SlideshowsController::getArticleSlideshowsAction',));
                }
                not_newscoop_gimme_articles_slideshows_default_lang:

                // newscoop_gimme_articles_slideshows
                if (preg_match('#^/api/articles/(?P<number>[^/]++)/(?P<language>[^/]++)/slideshows(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_articles_slideshows;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_slideshows')), array (  '_format' => 'json',  'language' => NULL,  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\SlideshowsController::getArticleSlideshowsAction',));
                }
                not_newscoop_gimme_articles_slideshows:

            }

            if (0 === strpos($pathinfo, '/api/topics')) {
                // newscoop_gimme_topics_gettopics
                if (preg_match('#^/api/topics(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_topics_gettopics;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_topics_gettopics')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\TopicsController::getTopicsAction',));
                }
                not_newscoop_gimme_topics_gettopics:

                // newscoop_gimme_topics_gettopicbyid
                if (preg_match('#^/api/topics/(?P<id>[\\d]+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_topics_gettopicbyid;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_topics_gettopicbyid')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\TopicsController::getTopicByIdAction',));
                }
                not_newscoop_gimme_topics_gettopicbyid:

                // newscoop_gimme_topics_createtopic
                if (preg_match('#^/api/topics(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_newscoop_gimme_topics_createtopic;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_topics_createtopic')), array (  '_format' => 'json',  'articleNumber' => NULL,  'languageCode' => NULL,  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\TopicsController::createTopicAction',));
                }
                not_newscoop_gimme_topics_createtopic:

            }

            // newscoop_gimme_topics_createtopic_1
            if (0 === strpos($pathinfo, '/api/articles') && preg_match('#^/api/articles/(?P<articleNumber>[^/]++)/(?P<languageCode>[^/]++)/topics(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_newscoop_gimme_topics_createtopic_1;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_topics_createtopic_1')), array (  '_format' => 'json',  'articleNumber' => NULL,  'languageCode' => NULL,  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\TopicsController::createTopicAction',));
            }
            not_newscoop_gimme_topics_createtopic_1:

            // newscoop_gimme_topics_gettopicsarticles
            if (0 === strpos($pathinfo, '/api/topics') && preg_match('#^/api/topics/(?P<id>[^/]++)/(?P<language>[^/]++)/articles(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newscoop_gimme_topics_gettopicsarticles;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_topics_gettopicsarticles')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\TopicsController::getTopicsArticlesAction',));
            }
            not_newscoop_gimme_topics_gettopicsarticles:

            // newscoop_gimme_topics_getarticlestopics
            if (0 === strpos($pathinfo, '/api/articles') && preg_match('#^/api/articles/(?P<number>[^/]++)/(?P<language>[^/]++)/topics(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newscoop_gimme_topics_getarticlestopics;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_topics_getarticlestopics')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\TopicsController::getArticlesTopicsAction',));
            }
            not_newscoop_gimme_topics_getarticlestopics:

            // newscoop_gimme_topics_getarticlestopics_1
            if (0 === strpos($pathinfo, '/api/topics/article') && preg_match('#^/api/topics/article/(?P<number>[^/]++)/(?P<language>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newscoop_gimme_topics_getarticlestopics_1;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_topics_getarticlestopics_1')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\TopicsController::getArticlesTopicsAction',));
            }
            not_newscoop_gimme_topics_getarticlestopics_1:

            // newscoop_gimme_topics_searchtopics
            if (0 === strpos($pathinfo, '/api/search/topics') && preg_match('#^/api/search/topics(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newscoop_gimme_topics_searchtopics;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_topics_searchtopics')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\TopicsController::searchTopicsAction',));
            }
            not_newscoop_gimme_topics_searchtopics:

            // newscoop_gimme_topics_deletetopic
            if (0 === strpos($pathinfo, '/api/topics') && preg_match('#^/api/topics/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_newscoop_gimme_topics_deletetopic;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_topics_deletetopic')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\TopicsController::deleteTopicAction',));
            }
            not_newscoop_gimme_topics_deletetopic:

            // newscoop_gimme_users_getusers
            if (0 === strpos($pathinfo, '/api/users') && preg_match('#^/api/users(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newscoop_gimme_users_getusers;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_users_getusers')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\UsersController::getUsersAction',));
            }
            not_newscoop_gimme_users_getusers:

            // newscoop_gimme_users_searchusers
            if (0 === strpos($pathinfo, '/api/search/users') && preg_match('#^/api/search/users(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newscoop_gimme_users_searchusers;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_users_searchusers')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\UsersController::searchUsersAction',));
            }
            not_newscoop_gimme_users_searchusers:

            if (0 === strpos($pathinfo, '/api/users')) {
                // newscoop_gimme_users_getuser
                if (preg_match('#^/api/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_users_getuser;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_users_getuser')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\UsersController::getUserAction',));
                }
                not_newscoop_gimme_users_getuser:

                if (0 === strpos($pathinfo, '/api/users/log')) {
                    // newscoop_gimme_users_login
                    if (0 === strpos($pathinfo, '/api/users/login') && preg_match('#^/api/users/login(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_newscoop_gimme_users_login;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_users_login')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\UsersController::loginAction',));
                    }
                    not_newscoop_gimme_users_login:

                    // newscoop_gimme_users_logout
                    if (0 === strpos($pathinfo, '/api/users/logout') && preg_match('#^/api/users/logout(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_newscoop_gimme_users_logout;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_users_logout')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\UsersController::logoutAction',));
                    }
                    not_newscoop_gimme_users_logout:

                }

                if (0 === strpos($pathinfo, '/api/users/re')) {
                    // newscoop_gimme_users_register
                    if (0 === strpos($pathinfo, '/api/users/register') && preg_match('#^/api/users/register(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_newscoop_gimme_users_register;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_users_register')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\UsersController::registerAction',));
                    }
                    not_newscoop_gimme_users_register:

                    // newscoop_gimme_users_restorepassword
                    if (0 === strpos($pathinfo, '/api/users/restore-password') && preg_match('#^/api/users/restore\\-password(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_newscoop_gimme_users_restorepassword;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_users_restorepassword')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\UsersController::restorePasswordAction',));
                    }
                    not_newscoop_gimme_users_restorepassword:

                }

                // newscoop_gimme_users_getuseraccesstoken
                if (0 === strpos($pathinfo, '/api/users/access_token') && preg_match('#^/api/users/access_token/(?P<clientId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_users_getuseraccesstoken;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_users_getuseraccesstoken')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\UsersController::getUserAccessTokenAction',));
                }
                not_newscoop_gimme_users_getuseraccesstoken:

            }

            if (0 === strpos($pathinfo, '/api/sections')) {
                // newscoop_gimme_sections_getsections
                if (preg_match('#^/api/sections(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_sections_getsections;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_sections_getsections')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\SectionsController::getSectionsAction',));
                }
                not_newscoop_gimme_sections_getsections:

                // newscoop_gimme_sections_getsectionsarticles
                if (preg_match('#^/api/sections/(?P<number>[^/]++)/(?P<language>[^/]++)/articles(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_sections_getsectionsarticles;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_sections_getsectionsarticles')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\SectionsController::getSectionsArticlesAction',));
                }
                not_newscoop_gimme_sections_getsectionsarticles:

            }

            if (0 === strpos($pathinfo, '/api/article')) {
                if (0 === strpos($pathinfo, '/api/articles-lists')) {
                    // newscoop_gimme_articleslist_getarticleslists
                    if (preg_match('#^/api/articles\\-lists(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_newscoop_gimme_articleslist_getarticleslists;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articleslist_getarticleslists')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesListController::getArticlesListsAction',));
                    }
                    not_newscoop_gimme_articleslist_getarticleslists:

                    // newscoop_gimme_articles_lists_getlist
                    if (preg_match('#^/api/articles\\-lists/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_newscoop_gimme_articles_lists_getlist;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_lists_getlist')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesListController::getArticlesListAction',));
                    }
                    not_newscoop_gimme_articles_lists_getlist:

                    // newscoop_gimme_articleslist_getplaylistsarticles
                    if (preg_match('#^/api/articles\\-lists/(?P<id>[^/]++)/articles(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_newscoop_gimme_articleslist_getplaylistsarticles;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articleslist_getplaylistsarticles')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesListController::getPlaylistsArticlesAction',));
                    }
                    not_newscoop_gimme_articleslist_getplaylistsarticles:

                    // newscoop_gimme_articles_lists_linkarticle
                    if (preg_match('#^/api/articles\\-lists/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'LINK') {
                            $allow[] = 'LINK';
                            goto not_newscoop_gimme_articles_lists_linkarticle;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_lists_linkarticle')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesListController::linkToPlaylistAction',));
                    }
                    not_newscoop_gimme_articles_lists_linkarticle:

                    // newscoop_gimme_articles_lists_unlinkarticle
                    if (preg_match('#^/api/articles\\-lists/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'UNLINK') {
                            $allow[] = 'UNLINK';
                            goto not_newscoop_gimme_articles_lists_unlinkarticle;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_lists_unlinkarticle')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesListController::unlinkFromPlaylistAction',));
                    }
                    not_newscoop_gimme_articles_lists_unlinkarticle:

                    // newscoop_gimme_articleslist_savebatchactions
                    if (preg_match('#^/api/articles\\-lists/(?P<id>[^/]++)/articles(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_newscoop_gimme_articleslist_savebatchactions;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articleslist_savebatchactions')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesListController::saveBatchActionsAction',));
                    }
                    not_newscoop_gimme_articleslist_savebatchactions:

                    // newscoop_gimme_articleslist_createplaylist
                    if (preg_match('#^/api/articles\\-lists(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_newscoop_gimme_articleslist_createplaylist;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articleslist_createplaylist')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesListController::createPlaylistAction',));
                    }
                    not_newscoop_gimme_articleslist_createplaylist:

                    // newscoop_gimme_articleslist_updateplaylist
                    if (preg_match('#^/api/articles\\-lists/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('PATCH', 'POST'))) {
                            $allow = array_merge($allow, array('PATCH', 'POST'));
                            goto not_newscoop_gimme_articleslist_updateplaylist;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articleslist_updateplaylist')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesListController::updatePlaylistAction',));
                    }
                    not_newscoop_gimme_articleslist_updateplaylist:

                    // newscoop_gimme_articleslist_deleteplaylist
                    if (preg_match('#^/api/articles\\-lists/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_newscoop_gimme_articleslist_deleteplaylist;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articleslist_deleteplaylist')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticlesListController::deletePlaylistAction',));
                    }
                    not_newscoop_gimme_articleslist_deleteplaylist:

                }

                if (0 === strpos($pathinfo, '/api/articleTypes')) {
                    // newscoop_gimme_articletypes_getarticletypes
                    if (preg_match('#^/api/articleTypes(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_newscoop_gimme_articletypes_getarticletypes;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articletypes_getarticletypes')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticleTypesController::getArticleTypesAction',));
                    }
                    not_newscoop_gimme_articletypes_getarticletypes:

                    // newscoop_gimme_articletypes_getarticletype
                    if (preg_match('#^/api/articleTypes/(?P<name>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_newscoop_gimme_articletypes_getarticletype;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articletypes_getarticletype')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ArticleTypesController::getArticleTypeAction',));
                    }
                    not_newscoop_gimme_articletypes_getarticletype:

                }

            }

            // newscoop_gimme_images_getimages
            if (0 === strpos($pathinfo, '/api/images') && preg_match('#^/api/images(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newscoop_gimme_images_getimages;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_images_getimages')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ImagesController::getImagesAction',));
            }
            not_newscoop_gimme_images_getimages:

            // newscoop_gimme_images_searchimages
            if (0 === strpos($pathinfo, '/api/search/images') && preg_match('#^/api/search/images(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newscoop_gimme_images_searchimages;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_images_searchimages')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ImagesController::searchImagesAction',));
            }
            not_newscoop_gimme_images_searchimages:

            // newscoop_gimme_images_getimage
            if (0 === strpos($pathinfo, '/api/images') && preg_match('#^/api/images/(?P<number>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newscoop_gimme_images_getimage;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_images_getimage')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ImagesController::getImageAction',));
            }
            not_newscoop_gimme_images_getimage:

            // newscoop_gimme_images_getimagesforarticle
            if (0 === strpos($pathinfo, '/api/articles') && preg_match('#^/api/articles/(?P<number>[^/]++)/(?P<language>[^/]++)/images(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newscoop_gimme_images_getimagesforarticle;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_images_getimagesforarticle')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ImagesController::getImagesForArticleAction',));
            }
            not_newscoop_gimme_images_getimagesforarticle:

            if (0 === strpos($pathinfo, '/api/images')) {
                // newscoop_gimme_images_createimage
                if (preg_match('#^/api/images(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_newscoop_gimme_images_createimage;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_images_createimage')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ImagesController::createImageAction',));
                }
                not_newscoop_gimme_images_createimage:

                // newscoop_gimme_images_updateimage
                if (preg_match('#^/api/images/(?P<number>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PATCH'))) {
                        $allow = array_merge($allow, array('POST', 'PATCH'));
                        goto not_newscoop_gimme_images_updateimage;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_images_updateimage')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ImagesController::updateImageAction',));
                }
                not_newscoop_gimme_images_updateimage:

                // newscoop_gimme_images_deleteimage
                if (preg_match('#^/api/images/(?P<number>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_newscoop_gimme_images_deleteimage;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_images_deleteimage')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ImagesController::deleteImageAction',));
                }
                not_newscoop_gimme_images_deleteimage:

            }

            if (0 === strpos($pathinfo, '/api/attachments')) {
                // newscoop_gimme_attachments_getattachments
                if (preg_match('#^/api/attachments(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_attachments_getattachments;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_attachments_getattachments')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\AttachmentsController::getAttachmentsAction',));
                }
                not_newscoop_gimme_attachments_getattachments:

                // newscoop_gimme_attachments_getattachment
                if (preg_match('#^/api/attachments/(?P<number>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_attachments_getattachment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_attachments_getattachment')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\AttachmentsController::getAttachmentAction',));
                }
                not_newscoop_gimme_attachments_getattachment:

                // newscoop_gimme_attachments_createattachment
                if (preg_match('#^/api/attachments(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_newscoop_gimme_attachments_createattachment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_attachments_createattachment')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\AttachmentsController::createAttachmentAction',));
                }
                not_newscoop_gimme_attachments_createattachment:

                // newscoop_gimme_attachments_updateattachment
                if (preg_match('#^/api/attachments/(?P<number>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PATCH'))) {
                        $allow = array_merge($allow, array('POST', 'PATCH'));
                        goto not_newscoop_gimme_attachments_updateattachment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_attachments_updateattachment')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\AttachmentsController::updateAttachmentAction',));
                }
                not_newscoop_gimme_attachments_updateattachment:

                // newscoop_gimme_attachments_deleteattachment
                if (preg_match('#^/api/attachments/(?P<number>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_newscoop_gimme_attachments_deleteattachment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_attachments_deleteattachment')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\AttachmentsController::deleteAttachmentAction',));
                }
                not_newscoop_gimme_attachments_deleteattachment:

            }

            if (0 === strpos($pathinfo, '/api/snippets')) {
                // newscoop_gimme_snippets_getsnippets
                if (preg_match('#^/api/snippets(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_snippets_getsnippets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_snippets_getsnippets')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\SnippetsController::getSnippetsAction',));
                }
                not_newscoop_gimme_snippets_getsnippets:

                // newscoop_gimme_snippets_getsnippet
                if (preg_match('#^/api/snippets/(?P<snippetId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_snippets_getsnippet;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_snippets_getsnippet')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\SnippetsController::getSnippetAction',));
                }
                not_newscoop_gimme_snippets_getsnippet:

            }

            if (0 === strpos($pathinfo, '/api/articles')) {
                // newscoop_gimme_snippets_getsnippet_1
                if (preg_match('#^/api/articles/(?P<articleNumber>[^/]++)/(?P<languageCode>[^/]++)/snippets/(?P<snippetId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_snippets_getsnippet_1;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_snippets_getsnippet_1')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\SnippetsController::getSnippetAction',));
                }
                not_newscoop_gimme_snippets_getsnippet_1:

                // newscoop_gimme_snippets_getsnippetsforarticle
                if (preg_match('#^/api/articles/(?P<number>[^/]++)/(?P<language>[^/]++)/snippets(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_snippets_getsnippetsforarticle;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_snippets_getsnippetsforarticle')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\SnippetsController::getSnippetsForArticleAction',));
                }
                not_newscoop_gimme_snippets_getsnippetsforarticle:

            }

            if (0 === strpos($pathinfo, '/api/snippets')) {
                // newscoop_gimme_snippets_getsnippetsforarticle_1
                if (0 === strpos($pathinfo, '/api/snippets/article') && preg_match('#^/api/snippets/article/(?P<number>[^/]++)/(?P<language>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_snippets_getsnippetsforarticle_1;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_snippets_getsnippetsforarticle_1')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\SnippetsController::getSnippetsForArticleAction',));
                }
                not_newscoop_gimme_snippets_getsnippetsforarticle_1:

                // newscoop_gimme_snippets_createsnippet
                if (preg_match('#^/api/snippets(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_newscoop_gimme_snippets_createsnippet;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_snippets_createsnippet')), array (  '_format' => 'json',  'articleNumber' => NULL,  'languageCode' => NULL,  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\SnippetsController::createSnippetAction',));
                }
                not_newscoop_gimme_snippets_createsnippet:

            }

            // newscoop_gimme_snippets_createsnippet_1
            if (0 === strpos($pathinfo, '/api/articles') && preg_match('#^/api/articles/(?P<articleNumber>[^/]++)/(?P<languageCode>[^/]++)/snippets(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_newscoop_gimme_snippets_createsnippet_1;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_snippets_createsnippet_1')), array (  '_format' => 'json',  'articleNumber' => NULL,  'languageCode' => NULL,  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\SnippetsController::createSnippetAction',));
            }
            not_newscoop_gimme_snippets_createsnippet_1:

            // newscoop_gimme_snippets_updatesnippet
            if (0 === strpos($pathinfo, '/api/snippets') && preg_match('#^/api/snippets/(?P<snippetId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PATCH'))) {
                    $allow = array_merge($allow, array('POST', 'PATCH'));
                    goto not_newscoop_gimme_snippets_updatesnippet;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_snippets_updatesnippet')), array (  '_format' => 'json',  'articleNumber' => NULL,  'languageCode' => NULL,  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\SnippetsController::updateSnippetAction',));
            }
            not_newscoop_gimme_snippets_updatesnippet:

            // newscoop_gimme_snippets_updatesnippet_1
            if (0 === strpos($pathinfo, '/api/articles') && preg_match('#^/api/articles/(?P<articleNumber>[^/]++)/(?P<languageCode>[^/]++)/snippets/(?P<snippetId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PATCH'))) {
                    $allow = array_merge($allow, array('POST', 'PATCH'));
                    goto not_newscoop_gimme_snippets_updatesnippet_1;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_snippets_updatesnippet_1')), array (  '_format' => 'json',  'articleNumber' => NULL,  'languageCode' => NULL,  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\SnippetsController::updateSnippetAction',));
            }
            not_newscoop_gimme_snippets_updatesnippet_1:

            if (0 === strpos($pathinfo, '/api/snippet')) {
                if (0 === strpos($pathinfo, '/api/snippets')) {
                    // newscoop_gimme_snippets_deletesnippet
                    if (preg_match('#^/api/snippets/(?P<snippetId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_newscoop_gimme_snippets_deletesnippet;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_snippets_deletesnippet')), array (  '_format' => 'json',  'articleNumber' => NULL,  'languageCode' => NULL,  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\SnippetsController::deleteSnippetAction',));
                    }
                    not_newscoop_gimme_snippets_deletesnippet:

                    // newscoop_gimme_snippets_deletesnippet_1
                    if (0 === strpos($pathinfo, '/api/snippets/article') && preg_match('#^/api/snippets/article/(?P<articleNumber>[^/]++)/(?P<languageCode>[^/]++)/(?P<snippetId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_newscoop_gimme_snippets_deletesnippet_1;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_snippets_deletesnippet_1')), array (  '_format' => 'json',  'articleNumber' => NULL,  'languageCode' => NULL,  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\SnippetsController::deleteSnippetAction',));
                    }
                    not_newscoop_gimme_snippets_deletesnippet_1:

                }

                if (0 === strpos($pathinfo, '/api/snippetTemplates')) {
                    // newscoop_gimme_snippettemplates_getsnippettemplates
                    if (preg_match('#^/api/snippetTemplates(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_newscoop_gimme_snippettemplates_getsnippettemplates;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_snippettemplates_getsnippettemplates')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\SnippetTemplatesController::getSnippetTemplatesAction',));
                    }
                    not_newscoop_gimme_snippettemplates_getsnippettemplates:

                    // newscoop_gimme_snippettemplates_getsinglesnippettemplate
                    if (preg_match('#^/api/snippetTemplates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_newscoop_gimme_snippettemplates_getsinglesnippettemplate;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_snippettemplates_getsinglesnippettemplate')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\SnippetTemplatesController::getSingleSnippetTemplateAction',));
                    }
                    not_newscoop_gimme_snippettemplates_getsinglesnippettemplate:

                    // newscoop_gimme_snippettemplates_deletesnippettemplate
                    if (preg_match('#^/api/snippetTemplates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_newscoop_gimme_snippettemplates_deletesnippettemplate;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_snippettemplates_deletesnippettemplate')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\SnippetTemplatesController::deleteSnippetTemplateAction',));
                    }
                    not_newscoop_gimme_snippettemplates_deletesnippettemplate:

                    // newscoop_gimme_snippettemplates_createsnippettemplate
                    if (preg_match('#^/api/snippetTemplates(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_newscoop_gimme_snippettemplates_createsnippettemplate;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_snippettemplates_createsnippettemplate')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\SnippetTemplatesController::createSnippetTemplateAction',));
                    }
                    not_newscoop_gimme_snippettemplates_createsnippettemplate:

                    // newscoop_gimme_snippettemplates_editsnippettemplate
                    if (preg_match('#^/api/snippetTemplates/(?P<snippetTemplateId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('PATCH', 'POST'))) {
                            $allow = array_merge($allow, array('PATCH', 'POST'));
                            goto not_newscoop_gimme_snippettemplates_editsnippettemplate;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_snippettemplates_editsnippettemplate')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\SnippetTemplatesController::editSnippetTemplateAction',));
                    }
                    not_newscoop_gimme_snippettemplates_editsnippettemplate:

                }

            }

            if (0 === strpos($pathinfo, '/api/articles')) {
                // newscoop_gimme_articles_get_editorial_comments
                if (preg_match('#^/api/articles/(?P<number>[^/]++)/(?P<language>[^/]++)/editorial_comments/order(?:/(?P<order>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_articles_get_editorial_comments;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_get_editorial_comments')), array (  '_format' => 'json',  'order' => 'chrono',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\EditorialCommentsApiController::getCommentsAction',));
                }
                not_newscoop_gimme_articles_get_editorial_comments:

                // newscoop_gimme_articles_get_editorial_comment
                if (preg_match('#^/api/articles/(?P<number>[^/]++)/(?P<language>[^/]++)/editorial_comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_articles_get_editorial_comment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_get_editorial_comment')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\EditorialCommentsApiController::getCommentAction',));
                }
                not_newscoop_gimme_articles_get_editorial_comment:

                // newscoop_gimme_articles_create_editorial_comment
                if (preg_match('#^/api/articles/(?P<number>[^/]++)/(?P<language>[^/]++)/editorial_comments(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_newscoop_gimme_articles_create_editorial_comment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_create_editorial_comment')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\EditorialCommentsApiController::createCommentAction',));
                }
                not_newscoop_gimme_articles_create_editorial_comment:

                // newscoop_gimme_articles_edit_editorial_comment
                if (preg_match('#^/api/articles/(?P<number>[^/]++)/(?P<language>[^/]++)/editorial_comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_newscoop_gimme_articles_edit_editorial_comment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_edit_editorial_comment')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\EditorialCommentsApiController::editCommentAction',));
                }
                not_newscoop_gimme_articles_edit_editorial_comment:

                // newscoop_gimme_articles_remove_editorial_comment
                if (preg_match('#^/api/articles/(?P<number>[^/]++)/(?P<language>[^/]++)/editorial_comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_newscoop_gimme_articles_remove_editorial_comment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_articles_remove_editorial_comment')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\EditorialCommentsApiController::removeCommentAction',));
                }
                not_newscoop_gimme_articles_remove_editorial_comment:

            }

            // newscoop_gimme_publications_getpublications
            if (0 === strpos($pathinfo, '/api/publications') && preg_match('#^/api/publications(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newscoop_gimme_publications_getpublications;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_publications_getpublications')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\PublicationsController::getPublicationsAction',));
            }
            not_newscoop_gimme_publications_getpublications:

            // newscoop_gimme_issues_getissues
            if (0 === strpos($pathinfo, '/api/issues') && preg_match('#^/api/issues(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newscoop_gimme_issues_getissues;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_issues_getissues')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\IssuesController::getIssuesAction',));
            }
            not_newscoop_gimme_issues_getissues:

            if (0 === strpos($pathinfo, '/api/users')) {
                // newscoop_gimme_usertopics_getusertopics
                if (preg_match('#^/api/users/(?P<id>[^/]++)/topics(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_gimme_usertopics_getusertopics;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_usertopics_getusertopics')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\UserTopicsController::getUserTopicsAction',));
                }
                not_newscoop_gimme_usertopics_getusertopics:

                // newscoop_gimme_usertopics_linktouser
                if (preg_match('#^/api/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'LINK') {
                        $allow[] = 'LINK';
                        goto not_newscoop_gimme_usertopics_linktouser;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_usertopics_linktouser')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\UserTopicsController::linkToUserAction',));
                }
                not_newscoop_gimme_usertopics_linktouser:

                // newscoop_gimme_usertopics_unlinkfromuser
                if (preg_match('#^/api/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'UNLINK') {
                        $allow[] = 'UNLINK';
                        goto not_newscoop_gimme_usertopics_unlinkfromuser;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_gimme_usertopics_unlinkfromuser')), array (  '_format' => 'json',  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\UserTopicsController::unlinkFromUserAction',));
                }
                not_newscoop_gimme_usertopics_unlinkfromuser:

            }

        }

        // nelmio_api_doc_index
        if (rtrim($pathinfo, '/') === '/documentation/rest-api') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_nelmio_api_doc_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'nelmio_api_doc_index');
            }

            return array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  '_route' => 'nelmio_api_doc_index',);
        }
        not_nelmio_api_doc_index:

        if (0 === strpos($pathinfo, '/a')) {
            // configure_api
            if ($pathinfo === '/admin/configure-api') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_configure_api;
                }

                return array (  '_controller' => 'Newscoop\\GimmeBundle\\Controller\\ConfigureApiController::configureAction',  '_route' => 'configure_api',);
            }
            not_configure_api:

            // newscoop_newscoop_attachments_downloadattachment
            if (0 === strpos($pathinfo, '/attachment') && preg_match('#^/attachment/(?P<id>[^/]++)/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_newscoop_attachments_downloadattachment')), array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\AttachmentsController::downloadAttachmentAction',));
            }

            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/a')) {
                    // newscoop_newscoop_authors_getauthors
                    if ($pathinfo === '/admin/authors/get') {
                        return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\AuthorsController::getAuthorsAction',  '_route' => 'newscoop_newscoop_authors_getauthors',);
                    }

                    // newscoop_newscoop_article_images_edit
                    if (0 === strpos($pathinfo, '/admin/articles') && preg_match('#^/admin/articles/(?P<language>[^/]++)/(?P<articleNumber>[^/]++)/images/(?P<imageId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_newscoop_article_images_edit')), array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\BackendArticleImagesController::editAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/dashboard')) {
                    // newscoop_newscoop_dashboard_journalist
                    if (rtrim($pathinfo, '/') === '/admin/dashboard/journalist') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'newscoop_newscoop_dashboard_journalist');
                        }

                        return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\BackendJournalistDashboardController::indexAction',  '_route' => 'newscoop_newscoop_dashboard_journalist',);
                    }

                    // newscoop_newscoop_dashboard_author_articles
                    if (rtrim($pathinfo, '/') === '/admin/dashboard/loadAuthorArticles') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'newscoop_newscoop_dashboard_author_articles');
                        }

                        return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\BackendJournalistDashboardController::loadUsersAction',  '_route' => 'newscoop_newscoop_dashboard_author_articles',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/publications')) {
                    // newscoop_newscoop_publications_index
                    if (rtrim($pathinfo, '/') === '/admin/publications') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'newscoop_newscoop_publications_index');
                        }

                        return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\BackendPublicationsController::indexAction',  '_route' => 'newscoop_newscoop_publications_index',);
                    }

                    // newscoop_newscoop_publications_edit
                    if (preg_match('#^/admin/publications/(?P<id>[^/]++)/edit/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'newscoop_newscoop_publications_edit');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_newscoop_publications_edit')), array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\BackendPublicationsController::editAction',));
                    }

                    // newscoop_newscoop_publications_add
                    if (rtrim($pathinfo, '/') === '/admin/publications/add') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'newscoop_newscoop_publications_add');
                        }

                        return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\BackendPublicationsController::createAction',  '_route' => 'newscoop_newscoop_publications_add',);
                    }

                    // newscoop_newscoop_publications_remove
                    if (preg_match('#^/admin/publications/(?P<id>[^/]++)/remove/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'newscoop_newscoop_publications_remove');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_newscoop_publications_remove')), array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\BackendPublicationsController::removeAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/comments')) {
                    // newscoop_newscoop_comments_index
                    if ($pathinfo === '/admin/comments') {
                        return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\CommentsController::indexAction',  '_route' => 'newscoop_newscoop_comments_index',);
                    }

                    if (0 === strpos($pathinfo, '/admin/comments/se')) {
                        // newscoop_newscoop_comments_search
                        if ($pathinfo === '/admin/comments/search') {
                            return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\CommentsController::indexAction',  '_route' => 'newscoop_newscoop_comments_search',);
                        }

                        // newscoop_newscoop_comments_setstatus
                        if ($pathinfo === '/admin/comments/set-status') {
                            return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\CommentsController::setStatusAction',  '_route' => 'newscoop_newscoop_comments_setstatus',);
                        }

                    }

                    // newscoop_newscoop_comments_reply
                    if (0 === strpos($pathinfo, '/admin/comments/reply') && preg_match('#^/admin/comments/reply/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_newscoop_comments_reply')), array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\CommentsController::replyAction',));
                    }

                    // newscoop_newscoop_comments_setrecommended
                    if (0 === strpos($pathinfo, '/admin/comments/set-recommended') && preg_match('#^/admin/comments/set\\-recommended/(?P<comments>[^/]++)/(?P<recommended>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_newscoop_comments_setrecommended')), array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\CommentsController::setRecommendedAction',));
                    }

                    // newscoop_newscoop_comments_update
                    if (0 === strpos($pathinfo, '/admin/comments/update') && preg_match('#^/admin/comments/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_newscoop_comments_update')), array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\CommentsController::updateAction',));
                    }

                    // newscoop_newscoop_comments_list
                    if ($pathinfo === '/admin/comments/list') {
                        return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\CommentsController::listAction',  '_route' => 'newscoop_newscoop_comments_list',);
                    }

                }

            }

        }

        // newscoop_get_img
        if ($pathinfo === '/get_img') {
            return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\ImagesController::indexAction',  '_route' => 'newscoop_get_img',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // newscoop_newscoop_language_getlanguages
            if ($pathinfo === '/admin/languages/get-all') {
                return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\LanguageController::getLanguages',  '_route' => 'newscoop_newscoop_language_getlanguages',);
            }

            if (0 === strpos($pathinfo, '/admin/p')) {
                if (0 === strpos($pathinfo, '/admin/password-')) {
                    // newscoop_newscoop_passwordrecovery_index
                    if ($pathinfo === '/admin/password-recovery') {
                        return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\PasswordRecoveryController::indexAction',  '_route' => 'newscoop_newscoop_passwordrecovery_index',);
                    }

                    // newscoop_newscoop_passwordrecovery_checktoken
                    if ($pathinfo === '/admin/password-check-token') {
                        return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\PasswordRecoveryController::checkTokenAction',  '_route' => 'newscoop_newscoop_passwordrecovery_checktoken',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/pl')) {
                    if (0 === strpos($pathinfo, '/admin/playlist')) {
                        if (0 === strpos($pathinfo, '/admin/playlists')) {
                            // newscoop_newscoop_playlists_index
                            if (rtrim($pathinfo, '/') === '/admin/playlists') {
                                if (substr($pathinfo, -1) !== '/') {
                                    return $this->redirect($pathinfo.'/', 'newscoop_newscoop_playlists_index');
                                }

                                return array (  'articleNumber' => NULL,  'language' => NULL,  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\PlaylistsController::indexAction',  '_route' => 'newscoop_newscoop_playlists_index',);
                            }

                            // newscoop_newscoop_playlists_editor
                            if (preg_match('#^/admin/playlists/(?P<articleNumber>[^/]++)/(?P<language>[^/]++)/editor\\-view/?$#s', $pathinfo, $matches)) {
                                if (substr($pathinfo, -1) !== '/') {
                                    return $this->redirect($pathinfo.'/', 'newscoop_newscoop_playlists_editor');
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_newscoop_playlists_editor')), array (  'articleNumber' => NULL,  'language' => NULL,  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\PlaylistsController::indexAction',));
                            }

                        }

                        // newscoop_newscoop_playlists_articlepreview
                        if ($pathinfo === '/admin/playlist/article-preview') {
                            return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\PlaylistsController::articlePreviewAction',  '_route' => 'newscoop_newscoop_playlists_articlepreview',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/plugins')) {
                        // newscoop_newscoop_plugins_index
                        if ($pathinfo === '/admin/plugins') {
                            return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\PluginsController::indexAction',  '_route' => 'newscoop_newscoop_plugins_index',);
                        }

                        // newscoop_newscoop_plugins_searchonpackagist
                        if ($pathinfo === '/admin/plugins/getPackagesFromPackagist') {
                            return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\PluginsController::searchOnPackagistAction',  '_route' => 'newscoop_newscoop_plugins_searchonpackagist',);
                        }

                        // newscoop_newscoop_plugins_changepluginstatus
                        if (0 === strpos($pathinfo, '/admin/plugins/chnageStatus') && preg_match('#^/admin/plugins/chnageStatus/(?P<action>enable|disable)/(?P<pluginId>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_newscoop_plugins_changepluginstatus')), array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\PluginsController::changePluginStatusAction',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/preferences')) {
                    // newscoop_newscoop_systempref_index
                    if ($pathinfo === '/admin/preferences') {
                        return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\SystemPrefController::indexAction',  '_route' => 'newscoop_newscoop_systempref_index',);
                    }

                    // newscoop_newscoop_systempref_cleardatabasecache
                    if ($pathinfo === '/admin/preferences/cache/clear') {
                        return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\SystemPrefController::clearDatabaseCacheAction',  '_route' => 'newscoop_newscoop_systempref_cleardatabasecache',);
                    }

                    if (0 === strpos($pathinfo, '/admin/preferences/job')) {
                        // newscoop_newscoop_systempref_enablejob
                        if (0 === strpos($pathinfo, '/admin/preferences/job/enable') && preg_match('#^/admin/preferences/job/enable/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_newscoop_systempref_enablejob')), array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\SystemPrefController::enableJobAction',));
                        }

                        // newscoop_newscoop_systempref_disablejob
                        if (0 === strpos($pathinfo, '/admin/preferences/job/disable') && preg_match('#^/admin/preferences/job/disable/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_newscoop_systempref_disablejob')), array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\SystemPrefController::disableJobAction',));
                        }

                        // newscoop_newscoop_systempref_jobnotify
                        if (0 === strpos($pathinfo, '/admin/preferences/job/notify') && preg_match('#^/admin/preferences/job/notify/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_newscoop_systempref_jobnotify')), array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\SystemPrefController::jobNotifyAction',));
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/topics')) {
                // newscoop_newscoop_topics_gettopics
                if ($pathinfo === '/admin/topics/get') {
                    return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\TopicsController::getTopicsAction',  '_route' => 'newscoop_newscoop_topics_gettopics',);
                }

                // newscoop_newscoop_topics_index
                if (rtrim($pathinfo, '/') === '/admin/topics') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'newscoop_newscoop_topics_index');
                    }

                    return array (  'compactView' => false,  'articleNumber' => NULL,  'language' => NULL,  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\TopicsController::indexAction',  '_route' => 'newscoop_newscoop_topics_index',);
                }

                // newscoop_newscoop_topics_index_compact
                if (0 === strpos($pathinfo, '/admin/topics/view') && preg_match('#^/admin/topics/view(?:/(?P<compactView>[^/]++)(?:/(?P<articleNumber>[^/]++)(?:/(?P<language>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_newscoop_topics_index_compact')), array (  'compactView' => false,  'articleNumber' => NULL,  'language' => NULL,  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\TopicsController::indexAction',));
                }

                // newscoop_newscoop_topics_tree
                if (rtrim($pathinfo, '/') === '/admin/topics/tree') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_newscoop_topics_tree;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'newscoop_newscoop_topics_tree');
                    }

                    return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\TopicsController::treeAction',  '_route' => 'newscoop_newscoop_topics_tree',);
                }
                not_newscoop_newscoop_topics_tree:

                // newscoop_newscoop_topics_move
                if (0 === strpos($pathinfo, '/admin/topics/move') && preg_match('#^/admin/topics/move/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_newscoop_topics_move')), array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\TopicsController::moveAction',));
                }

                if (0 === strpos($pathinfo, '/admin/topics/add')) {
                    // newscoop_newscoop_topics_add
                    if ($pathinfo === '/admin/topics/add/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_newscoop_newscoop_topics_add;
                        }

                        return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\TopicsController::addAction',  '_route' => 'newscoop_newscoop_topics_add',);
                    }
                    not_newscoop_newscoop_topics_add:

                    // newscoop_newscoop_topics_addtranslation
                    if (0 === strpos($pathinfo, '/admin/topics/add/translation') && preg_match('#^/admin/topics/add/translation/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_newscoop_newscoop_topics_addtranslation;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_newscoop_topics_addtranslation')), array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\TopicsController::addTranslation',));
                    }
                    not_newscoop_newscoop_topics_addtranslation:

                }

                // newscoop_newscoop_topics_delete
                if (0 === strpos($pathinfo, '/admin/topics/delete') && preg_match('#^/admin/topics/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_newscoop_newscoop_topics_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_newscoop_topics_delete')), array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\TopicsController::deleteAction',));
                }
                not_newscoop_newscoop_topics_delete:

                // newscoop_newscoop_topics_isattached
                if (0 === strpos($pathinfo, '/admin/topics/is-attached') && preg_match('#^/admin/topics/is\\-attached/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_newscoop_newscoop_topics_isattached;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_newscoop_topics_isattached')), array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\TopicsController::isAttachedAction',));
                }
                not_newscoop_newscoop_topics_isattached:

                // newscoop_newscoop_topics_deletetranslation
                if (0 === strpos($pathinfo, '/admin/topics/translations/delete') && preg_match('#^/admin/topics/translations/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_newscoop_newscoop_topics_deletetranslation;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_newscoop_topics_deletetranslation')), array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\TopicsController::deleteTranslationAction',));
                }
                not_newscoop_newscoop_topics_deletetranslation:

                // newscoop_newscoop_topics_edit
                if (0 === strpos($pathinfo, '/admin/topics/edit') && preg_match('#^/admin/topics/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_newscoop_newscoop_topics_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_newscoop_topics_edit')), array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\TopicsController::editAction',));
                }
                not_newscoop_newscoop_topics_edit:

                // newscoop_newscoop_topics_detachtopic
                if ($pathinfo === '/admin/topics/detach') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_newscoop_newscoop_topics_detachtopic;
                    }

                    return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\TopicsController::detachTopicAction',  '_route' => 'newscoop_newscoop_topics_detachtopic',);
                }
                not_newscoop_newscoop_topics_detachtopic:

                // newscoop_newscoop_topics_attachtopic
                if ($pathinfo === '/admin/topics/attach') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_newscoop_newscoop_topics_attachtopic;
                    }

                    return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\TopicsController::attachTopicAction',  '_route' => 'newscoop_newscoop_topics_attachtopic',);
                }
                not_newscoop_newscoop_topics_attachtopic:

            }

            if (0 === strpos($pathinfo, '/admin/users')) {
                // newscoop_newscoop_users_index
                if (rtrim($pathinfo, '/') === '/admin/users') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'newscoop_newscoop_users_index');
                    }

                    return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\UsersController::indexAction',  '_route' => 'newscoop_newscoop_users_index',);
                }

                // newscoop_newscoop_users_loadusers
                if (rtrim($pathinfo, '/') === '/admin/users/load') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'newscoop_newscoop_users_loadusers');
                    }

                    return array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\UsersController::loadUsersAction',  '_route' => 'newscoop_newscoop_users_loadusers',);
                }

            }

        }

        // newscoop_newscoop_webcoderedirect_webcoderedirect
        if (preg_match('#^/(?P<webcode>\\+[a-z0-9]{5})$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_newscoop_webcoderedirect_webcoderedirect')), array (  '_controller' => 'Newscoop\\NewscoopBundle\\Controller\\WebcodeRedirectController::webcodeRedirectAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // newscoop_zendbridge_bridge_index
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'newscoop_zendbridge_bridge_index');
                }

                return array (  '_controller' => 'Newscoop\\ZendBridgeBundle\\Controller\\BridgeController::indexAction',  '_route' => 'newscoop_zendbridge_bridge_index',);
            }

            // newscoop_zendbridge_bridge_index_1
            if (preg_match('#^/admin/(?P<rest>.+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_zendbridge_bridge_index_1')), array (  '_controller' => 'Newscoop\\ZendBridgeBundle\\Controller\\BridgeController::indexAction',));
            }

        }

        // newscoop_zendbridge_bridge_index_2
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'newscoop_zendbridge_bridge_index_2');
            }

            return array (  '_controller' => 'Newscoop\\ZendBridgeBundle\\Controller\\BridgeController::indexAction',  '_route' => 'newscoop_zendbridge_bridge_index_2',);
        }

        // newscoop_zendbridge_bridge_index_3
        if (preg_match('#^/(?P<rest>.+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newscoop_zendbridge_bridge_index_3')), array (  '_controller' => 'Newscoop\\ZendBridgeBundle\\Controller\\BridgeController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
