<?php

/* NewscoopNewscoopBundle::admin_layout.html.twig */
class __TwigTemplate_49d698092331246a9c135b9fee23b8b330c78c8a426ef62b8573d4130e79700c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'admin_title' => array($this, 'block_admin_title'),
            'admin_stylesheets' => array($this, 'block_admin_stylesheets'),
            'admin_scripts' => array($this, 'block_admin_scripts'),
            'admin_page_menu_bar' => array($this, 'block_admin_page_menu_bar'),
            'admin_page_title_box' => array($this, 'block_admin_page_title_box'),
            'admin_page_title_content' => array($this, 'block_admin_page_title_content'),
            'admin_content' => array($this, 'block_admin_content'),
            'admin_page_footer_box' => array($this, 'block_admin_page_footer_box'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE HTML>
<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["localeFromCookie"]) ? $context["localeFromCookie"] : $this->getContext($context, "localeFromCookie")), "html", null, true);
        echo "\" dir=\"ltr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <meta http-equiv=\"Expires\" content=\"now\" />
    <title>";
        // line 7
        $this->displayBlock('admin_title', $context, $blocks);
        echo "</title>

    <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "ADMIN_STYLE_URL", array(), "array"), "html", null, true);
        echo "/images/7773658c3ccbf03954b4dacb029b2229.ico\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "ADMIN_STYLE_URL", array(), "array"), "html", null, true);
        echo "/jquery-ui-1.8.6.custom.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "ADMIN_STYLE_URL", array(), "array"), "html", null, true);
        echo "/admin_stylesheet.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "ADMIN_STYLE_URL", array(), "array"), "html", null, true);
        echo "/admin_stylesheet_new.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "ADMIN_STYLE_URL", array(), "array"), "html", null, true);
        echo "/content.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "ADMIN_STYLE_URL", array(), "array"), "html", null, true);
        echo "/layout.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "ADMIN_STYLE_URL", array(), "array"), "html", null, true);
        echo "/ColVis.css\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/newscoopnewscoop/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/newscoopnewscoop/css/plugin.css"), "html", null, true);
        echo "\" />
    ";
        // line 18
        $this->displayBlock('admin_stylesheets', $context, $blocks);
        // line 19
        echo "
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/js/jquery/jquery-1.7.1.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/js/jquery/jquery-ui-1.8.6.custom.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/newscoopnewscoop/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/js/jquery/jquery.cookie.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/js/jquery/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/js/jquery/ColVis.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/js/admin.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/js/jquery/fg.menu.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/js/jquery/jquery.widgets.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/js/jquery/fancybox/jquery.fancybox-1.3.4.pack.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bazingajstranslation/js/translator.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("bazinga_jstranslation_js");
        echo "?locales=";
        echo twig_escape_filter($this->env, (isset($context["localeFromCookie"]) ? $context["localeFromCookie"] : $this->getContext($context, "localeFromCookie")), "html", null, true);
        echo ",en\"></script>
    ";
        // line 34
        $this->displayBlock('admin_scripts', $context, $blocks);
        // line 35
        echo "
    ";
        // line 36
        if (((isset($context["localeFromCookie"]) ? $context["localeFromCookie"] : $this->getContext($context, "localeFromCookie")) != "en")) {
            // line 37
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "WEBSITE_URL", array(), "array"), "html", null, true);
            echo "/js/jquery/i18n/jquery.ui.datepicker-";
            echo twig_escape_filter($this->env, (isset($context["localeFromCookie"]) ? $context["localeFromCookie"] : $this->getContext($context, "localeFromCookie")), "html", null, true);
            echo ".js\" type=\"text/javascript\"></script>
    ";
        }
        // line 39
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/js/jquery/jquery-ui-timepicker-addon.min.js\" type=\"text/javascript\"></script>

    <script type=\"text/javascript\"><!--
    var website_url = '";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "';
    var g_admin_url = '/";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "ADMIN", array(), "array"), "html", null, true);
        echo "';
    var g_security_token = '";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["SecurityToken"]) ? $context["SecurityToken"] : $this->getContext($context, "SecurityToken")), "html", null, true);
        echo "';
    var g_admin_img = '";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "ADMIN_IMAGE_BASE_URL", array(), "array"), "html", null, true);
        echo "';
    var popupFlash = false;

    var localizer = localizer || {
        processing: '";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Processing...", array(), "home"), "html", null, true);
        echo "',
        session_expired: '";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Session expired.", array(), "home"), "html", null, true);
        echo "',
        please: '";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Please", array(), "home"), "html", null, true);
        echo "',
        login: '";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("login", array(), "home"), "html", null, true);
        echo "',
        connection_interrupted : '";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Connection interrupted", array(), "home"), "html", null, true);
        echo "',
        try_again_later : '";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("try again later", array(), "home"), "html", null, true);
        echo "'
    };

    \$(function() {
        \$.datepicker.setDefaults( \$.datepicker.regional['";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["localeFromCookie"]) ? $context["localeFromCookie"] : $this->getContext($context, "localeFromCookie")), "html", null, true);
        echo "'] );
    });
    //--></script>

    <link rel=\"shortcut icon\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "ADMIN_STYLE_URL", array(), "array"), "html", null, true);
        echo "/images/7773658c3ccbf03954b4dacb029b2229.ico\" />

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "ADMIN_STYLE_URL", array(), "array"), "html", null, true);
        echo "/fg.menu.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "ADMIN_STYLE_URL", array(), "array"), "html", null, true);
        echo "/widgets.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/js/jquery/fancybox/jquery.fancybox-1.3.4.css\" />

    <!--[if IE 6]>
    <style type=\"text/css\">
        .fg-menu-ipod .fg-menu li { width: 95%; }
        .fg-menu-ipod .ui-widget-content { border:0; }
    </style>
    <![endif]-->

    ";
        // line 75
        if (strpos($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "HTTP_REFERER"), "method"), "login.php")) {
            // line 76
            echo "    <script type=\"text/javascript\">
    <!--
    if (opener && !opener.closed && opener.setSecurityToken) {
        opener.setSecurityToken(g_security_token);
        opener.focus();
        window.close();
    }
    //-->
    </script>
    ";
        }
        // line 86
        echo "    <script type=\"text/javascript\">
    <!--
    \$(function(){
        // BUTTONS
        \$('.fg-button-menu').hover(
            function(){ \$(this).removeClass('fg-button-ui-state-default').addClass('fg-button-ui-state-focus'); },
            function(){ \$(this).removeClass('fg-button-ui-state-focus').addClass('fg-button-ui-state-default'); }
        );
    });
    //-->
    </script>
    <script type=\"text/javascript\">
      \$(document).ready(function() {
        var sticky_limit = 0;
        \$(window).scroll(function() {
            if (\$('.sticky').size() == 0) {
                return false; // no sticky
            }

            var windowTop = \$(window).scrollTop();
            var stickyTop = \$('.sticky').offset().top;
            if (windowTop > stickyTop && sticky_limit == 0) {
                \$('.sticky').css('width', '100%').css('position', 'fixed').css('top', '0');
                sticky_limit = stickyTop;
            }
            if (sticky_limit > 0 && windowTop < sticky_limit) {
                \$('.sticky').css('position', 'relative');
                sticky_limit = 0;
            }
        });
      });

      var user_msgs = '';
      ";
        // line 119
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "session", array()), "has", array(0 => "camp_user_msgs"), "method")) {
            // line 120
            echo "      user_msgs = \"";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "session", array()), "get", array(0 => "camp_user_msgs"), "method"), 0, array(), "array"), "msg", array(), "array"), array("\"" => "'")), "html", null, true);
            echo "\";
      ";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "session", array()), "set", array(0 => "camp_user_msgs", 1 => array()), "method"), "html", null, true);
            echo "
      ";
        }
        // line 123
        echo "    </script>
</head>
<body class=\"container admin-font-size\">
";
        // line 126
        $this->displayBlock('admin_page_menu_bar', $context, $blocks);
        // line 146
        echo "
";
        // line 147
        $this->displayBlock('admin_page_title_box', $context, $blocks);
        // line 152
        echo "
<div class=\"content\">
";
        // line 154
        $this->displayBlock('admin_content', $context, $blocks);
        // line 155
        echo "</div>

";
        // line 157
        $this->displayBlock('admin_page_footer_box', $context, $blocks);
    }

    // line 7
    public function block_admin_title($context, array $blocks = array())
    {
        echo "Newscoop Admin";
    }

    // line 18
    public function block_admin_stylesheets($context, array $blocks = array())
    {
    }

    // line 34
    public function block_admin_scripts($context, array $blocks = array())
    {
    }

    // line 126
    public function block_admin_page_menu_bar($context, array $blocks = array())
    {
        // line 127
        $this->loadTemplate("NewscoopNewscoopBundle::admin_menu.html.twig", "NewscoopNewscoopBundle::admin_layout.html.twig", 127)->display($context);
        // line 128
        $context["breadcrumbsMenu"] = $this->env->getExtension('knp_menu')->get("breadcrumb");
        // line 129
        $context["breadcrumbsMenuArray"] = $this->env->getExtension('newscoop_extension')->getBreadcrumbsArray((isset($context["breadcrumbsMenu"]) ? $context["breadcrumbsMenu"] : $this->getContext($context, "breadcrumbsMenu")));
        // line 130
        if ((twig_length_filter($this->env, (isset($context["breadcrumbsMenuArray"]) ? $context["breadcrumbsMenuArray"] : $this->getContext($context, "breadcrumbsMenuArray"))) > 1)) {
            // line 131
            echo "    <div class=\"row\">
        <ol class=\"breadcrumb\">
        ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbsMenuArray"]) ? $context["breadcrumbsMenuArray"] : $this->getContext($context, "breadcrumbsMenuArray")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["menu"]) {
                // line 134
                echo "            ";
                if (($this->getAttribute($context["menu"], "label", array(), "array") != "root")) {
                    // line 135
                    echo "                ";
                    if (($this->getAttribute($context["loop"], "index0", array()) != ($this->getAttribute($context["loop"], "length", array()) - 1))) {
                        // line 136
                        echo "                    <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array(), "array"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array(), "array"), "html", null, true);
                        echo "</a></li>
                ";
                    } else {
                        // line 138
                        echo "                   <li>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array(), "array"), "html", null, true);
                        echo "</li>
                ";
                    }
                    // line 140
                    echo "            ";
                }
                // line 141
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "        </ol>
    </div>
";
        }
    }

    // line 147
    public function block_admin_page_title_box($context, array $blocks = array())
    {
        // line 148
        echo "<div class=\"toolbar row\"><span class=\"article-title\">
    ";
        // line 149
        $this->displayBlock('admin_page_title_content', $context, $blocks);
        // line 150
        echo "</span></div>
";
    }

    // line 149
    public function block_admin_page_title_content($context, array $blocks = array())
    {
    }

    // line 154
    public function block_admin_content($context, array $blocks = array())
    {
    }

    // line 157
    public function block_admin_page_footer_box($context, array $blocks = array())
    {
        // line 158
        echo "<div class=\"footer row\">
    <a href=\"http://newscoop.sourcefabric.org/\" target=\"_blank\">";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["NewscoopVersion"]) ? $context["NewscoopVersion"] : $this->getContext($context, "NewscoopVersion")), "getPackage", array(), "method"), "html", null, true);
        echo "</a>, the open content management system for professional journalists. Version: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["NewscoopVersion"]) ? $context["NewscoopVersion"] : $this->getContext($context, "NewscoopVersion")), "getRelease", array(), "method"), "html", null, true);
        echo "
    <br />
    &copy; ";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["NewscoopVersion"]) ? $context["NewscoopVersion"] : $this->getContext($context, "NewscoopVersion")), "getCopyrightYear", array(), "method"), "html", null, true);
        echo " 
    <a href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["NewscoopVersion"]) ? $context["NewscoopVersion"] : $this->getContext($context, "NewscoopVersion")), "getWebURL", array(), "method"), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["NewscoopVersion"]) ? $context["NewscoopVersion"] : $this->getContext($context, "NewscoopVersion")), "getOrganization", array(), "method"), "html", null, true);
        echo "</a> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["NewscoopVersion"]) ? $context["NewscoopVersion"] : $this->getContext($context, "NewscoopVersion")), "getPackage", array(), "method"), "html", null, true);
        echo " is distributed under ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["NewscoopVersion"]) ? $context["NewscoopVersion"] : $this->getContext($context, "NewscoopVersion")), "getLicense", array(), "method"), "html", null, true);
        echo "   
</div>
</body>
";
    }

    public function getTemplateName()
    {
        return "NewscoopNewscoopBundle::admin_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  460 => 162,  456 => 161,  449 => 159,  446 => 158,  443 => 157,  438 => 154,  433 => 149,  428 => 150,  426 => 149,  423 => 148,  420 => 147,  413 => 142,  399 => 141,  396 => 140,  390 => 138,  382 => 136,  379 => 135,  376 => 134,  359 => 133,  355 => 131,  353 => 130,  351 => 129,  349 => 128,  347 => 127,  344 => 126,  339 => 34,  334 => 18,  328 => 7,  324 => 157,  320 => 155,  318 => 154,  314 => 152,  312 => 147,  309 => 146,  307 => 126,  302 => 123,  297 => 121,  292 => 120,  290 => 119,  255 => 86,  243 => 76,  241 => 75,  229 => 66,  225 => 65,  221 => 64,  216 => 62,  209 => 58,  202 => 54,  198 => 53,  194 => 52,  190 => 51,  186 => 50,  182 => 49,  175 => 45,  171 => 44,  167 => 43,  163 => 42,  156 => 39,  148 => 37,  146 => 36,  143 => 35,  141 => 34,  135 => 33,  131 => 32,  127 => 31,  123 => 30,  119 => 29,  115 => 28,  111 => 27,  107 => 26,  103 => 25,  99 => 24,  95 => 23,  91 => 22,  87 => 21,  83 => 20,  80 => 19,  78 => 18,  74 => 17,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  37 => 7,  30 => 3,  27 => 2,);
    }
}
/* {% trans_default_domain "home" %}*/
/* <!DOCTYPE HTML>*/
/* <html lang="{{ localeFromCookie }}" dir="ltr">*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />*/
/*     <meta http-equiv="Expires" content="now" />*/
/*     <title>{% block admin_title %}Newscoop Admin{% endblock %}</title>*/
/* */
/*     <link rel="shortcut icon" href="{{ Newscoop['ADMIN_STYLE_URL'] }}/images/7773658c3ccbf03954b4dacb029b2229.ico" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ Newscoop['ADMIN_STYLE_URL'] }}/jquery-ui-1.8.6.custom.css" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ Newscoop['ADMIN_STYLE_URL'] }}/admin_stylesheet.css" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ Newscoop['ADMIN_STYLE_URL'] }}/admin_stylesheet_new.css" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ Newscoop['ADMIN_STYLE_URL'] }}/content.css" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ Newscoop['ADMIN_STYLE_URL'] }}/layout.css" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ Newscoop['ADMIN_STYLE_URL'] }}/ColVis.css" />*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('bundles/newscoopnewscoop/css/bootstrap.min.css') }}" />*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('bundles/newscoopnewscoop/css/plugin.css') }}" />*/
/*     {% block admin_stylesheets %}{% endblock %}*/
/* */
/*     <script src="{{ Newscoop['WEBSITE_URL'] }}/js/jquery/jquery-1.7.1.min.js" type="text/javascript"></script>*/
/*     <script src="{{ Newscoop['WEBSITE_URL'] }}/js/jquery/jquery-ui-1.8.6.custom.min.js" type="text/javascript"></script>*/
/*     <script src="{{ asset('bundles/newscoopnewscoop/js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ Newscoop['WEBSITE_URL'] }}/js/jquery/jquery.cookie.js" type="text/javascript"></script>*/
/*     <script src="{{ Newscoop['WEBSITE_URL'] }}/js/jquery/jquery.dataTables.min.js" type="text/javascript"></script>*/
/*     <script src="{{ Newscoop['WEBSITE_URL'] }}/js/jquery/ColVis.min.js" type="text/javascript"></script>*/
/*     <script src="{{ Newscoop['WEBSITE_URL'] }}/js/admin.js" type="text/javascript"></script>*/
/*     <script src="{{ Newscoop['WEBSITE_URL'] }}/js/jquery/fg.menu.js" type="text/javascript"></script>*/
/*     <script src="{{ Newscoop['WEBSITE_URL'] }}/js/jquery/jquery.widgets.js" type="text/javascript"></script>*/
/*     <script src="{{ Newscoop['WEBSITE_URL'] }}/js/jquery/fancybox/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>*/
/*     <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*     <script src="{{ path('fos_js_routing_js', {"callback": "fos.Router.setData"}) }}"></script>*/
/*     <script src="{{ asset('bundles/bazingajstranslation/js/translator.min.js') }}"></script>*/
/*     <script src="{{ url('bazinga_jstranslation_js') }}?locales={{ localeFromCookie }},en"></script>*/
/*     {% block admin_scripts %}{% endblock %}*/
/* */
/*     {% if localeFromCookie != 'en' %}*/
/*     <script src="{{ Newscoop['WEBSITE_URL'] }}/js/jquery/i18n/jquery.ui.datepicker-{{localeFromCookie}}.js" type="text/javascript"></script>*/
/*     {% endif %}*/
/*     <script src="{{ Newscoop['WEBSITE_URL'] }}/js/jquery/jquery-ui-timepicker-addon.min.js" type="text/javascript"></script>*/
/* */
/*     <script type="text/javascript"><!--*/
/*     var website_url = '{{ Newscoop['WEBSITE_URL'] }}';*/
/*     var g_admin_url = '/{{ Newscoop['ADMIN'] }}';*/
/*     var g_security_token = '{{ SecurityToken }}';*/
/*     var g_admin_img = '{{ Newscoop["ADMIN_IMAGE_BASE_URL"] }}';*/
/*     var popupFlash = false;*/
/* */
/*     var localizer = localizer || {*/
/*         processing: '{{ 'Processing...'|trans }}',*/
/*         session_expired: '{{ 'Session expired.'|trans }}',*/
/*         please: '{{ 'Please'|trans }}',*/
/*         login: '{{ 'login'|trans }}',*/
/*         connection_interrupted : '{{ 'Connection interrupted'|trans }}',*/
/*         try_again_later : '{{ 'try again later'|trans }}'*/
/*     };*/
/* */
/*     $(function() {*/
/*         $.datepicker.setDefaults( $.datepicker.regional['{{localeFromCookie}}'] );*/
/*     });*/
/*     //--></script>*/
/* */
/*     <link rel="shortcut icon" href="{{ Newscoop['ADMIN_STYLE_URL'] }}/images/7773658c3ccbf03954b4dacb029b2229.ico" />*/
/* */
/*     <link rel="stylesheet" type="text/css" href="{{ Newscoop['ADMIN_STYLE_URL'] }}/fg.menu.css" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ Newscoop['ADMIN_STYLE_URL'] }}/widgets.css" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ Newscoop['WEBSITE_URL'] }}/js/jquery/fancybox/jquery.fancybox-1.3.4.css" />*/
/* */
/*     <!--[if IE 6]>*/
/*     <style type="text/css">*/
/*         .fg-menu-ipod .fg-menu li { width: 95%; }*/
/*         .fg-menu-ipod .ui-widget-content { border:0; }*/
/*     </style>*/
/*     <![endif]-->*/
/* */
/*     {% if strpos(app.request.server.get('HTTP_REFERER'), 'login.php')  %}*/
/*     <script type="text/javascript">*/
/*     <!--*/
/*     if (opener && !opener.closed && opener.setSecurityToken) {*/
/*         opener.setSecurityToken(g_security_token);*/
/*         opener.focus();*/
/*         window.close();*/
/*     }*/
/*     //-->*/
/*     </script>*/
/*     {% endif %}*/
/*     <script type="text/javascript">*/
/*     <!--*/
/*     $(function(){*/
/*         // BUTTONS*/
/*         $('.fg-button-menu').hover(*/
/*             function(){ $(this).removeClass('fg-button-ui-state-default').addClass('fg-button-ui-state-focus'); },*/
/*             function(){ $(this).removeClass('fg-button-ui-state-focus').addClass('fg-button-ui-state-default'); }*/
/*         );*/
/*     });*/
/*     //-->*/
/*     </script>*/
/*     <script type="text/javascript">*/
/*       $(document).ready(function() {*/
/*         var sticky_limit = 0;*/
/*         $(window).scroll(function() {*/
/*             if ($('.sticky').size() == 0) {*/
/*                 return false; // no sticky*/
/*             }*/
/* */
/*             var windowTop = $(window).scrollTop();*/
/*             var stickyTop = $('.sticky').offset().top;*/
/*             if (windowTop > stickyTop && sticky_limit == 0) {*/
/*                 $('.sticky').css('width', '100%').css('position', 'fixed').css('top', '0');*/
/*                 sticky_limit = stickyTop;*/
/*             }*/
/*             if (sticky_limit > 0 && windowTop < sticky_limit) {*/
/*                 $('.sticky').css('position', 'relative');*/
/*                 sticky_limit = 0;*/
/*             }*/
/*         });*/
/*       });*/
/* */
/*       var user_msgs = '';*/
/*       {% if app.request.session.has('camp_user_msgs') %}*/
/*       user_msgs = "{{ app.request.session.get('camp_user_msgs')[0]['msg']|replace({'"': "'"}) }}";*/
/*       {{ app.request.session.set('camp_user_msgs', {}) }}*/
/*       {% endif %}*/
/*     </script>*/
/* </head>*/
/* <body class="container admin-font-size">*/
/* {% block admin_page_menu_bar %}*/
/* {% include "NewscoopNewscoopBundle::admin_menu.html.twig" %}*/
/* {% set breadcrumbsMenu = knp_menu_get('breadcrumb') %}*/
/* {% set breadcrumbsMenuArray = getBreadcrumbsArray(breadcrumbsMenu) %}*/
/* {% if breadcrumbsMenuArray|length > 1 %}*/
/*     <div class="row">*/
/*         <ol class="breadcrumb">*/
/*         {% for key, menu in breadcrumbsMenuArray %}*/
/*             {% if (menu['label'] != 'root') %}*/
/*                 {% if loop.index0 != loop.length-1 %}*/
/*                     <li><a href="{{ menu['uri'] }}">{{ menu['label'] }}</a></li>*/
/*                 {% else %}*/
/*                    <li>{{ menu['label'] }}</li>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         </ol>*/
/*     </div>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block admin_page_title_box %}*/
/* <div class="toolbar row"><span class="article-title">*/
/*     {% block admin_page_title_content %}{% endblock %}*/
/* </span></div>*/
/* {% endblock %}*/
/* */
/* <div class="content">*/
/* {% block admin_content %}{% endblock %}*/
/* </div>*/
/* */
/* {% block admin_page_footer_box %}*/
/* <div class="footer row">*/
/*     <a href="http://newscoop.sourcefabric.org/" target="_blank">{{ NewscoopVersion.getPackage() }}</a>, the open content management system for professional journalists. Version: {{ NewscoopVersion.getRelease() }}*/
/*     <br />*/
/*     &copy; {{ NewscoopVersion.getCopyrightYear() }} */
/*     <a href="{{ NewscoopVersion.getWebURL() }}" target="_blank">{{ NewscoopVersion.getOrganization() }}</a> {{ NewscoopVersion.getPackage() }} is distributed under {{ NewscoopVersion.getLicense() }}   */
/* </div>*/
/* </body>*/
/* {% endblock %}*/
/* */
