<?php

/* NewscoopNewscoopBundle:SystemPref:index.html.twig */
class __TwigTemplate_71e03cc2ae9c9e31b1335259384b44fdc29935b549cc731cf3c3de581d44405d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NewscoopNewscoopBundle::admin_layout.html.twig", "NewscoopNewscoopBundle:SystemPref:index.html.twig", 1);
        $this->blocks = array(
            'admin_title' => array($this, 'block_admin_title'),
            'admin_page_title_content' => array($this, 'block_admin_page_title_content'),
            'admin_stylesheets' => array($this, 'block_admin_stylesheets'),
            'admin_scripts' => array($this, 'block_admin_scripts'),
            'admin_content' => array($this, 'block_admin_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NewscoopNewscoopBundle::admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "NewscoopNewscoopBundle::forms.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_admin_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.title", array(), "system_pref"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("admin_title", $context, $blocks);
    }

    // line 4
    public function block_admin_page_title_content($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.header", array(), "system_pref"), "html", null, true);
    }

    // line 6
    public function block_admin_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : null), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/bundles/newscoopnewscoop/css/bootstrap.css\">
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/css/jquery.dynatable.css"), "html", null, true);
        echo "\">
<style>
.font-fix {
    font-size: 12px;
}
th a, th a:hover{
    color: #000;
}
.cron-jobs tbody tr td, #dynatable-search-, #dynatable-record-count- {
    font-size: 12px;
}
table.cron-jobs td:nth-child(2) {
    width: 40%;
}
</style>
";
    }

    // line 24
    public function block_admin_scripts($context, array $blocks = array())
    {
        // line 25
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : null), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/bundles/newscoopnewscoop/js/popover.js\"></script>
<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/jquery.dynatable.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 28
    public function block_admin_content($context, array $blocks = array())
    {
        // line 29
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors')) {
            // line 30
            echo "    <div class=\"alerts alert-danger\">
        ";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
    </div>
";
        }
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 35
            echo "        <div class=\"alerts alert-danger\">
            ";
            // line 36
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 40
            echo "        <div class=\"alerts alert-success\">
            ";
            // line 41
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("newscoop_newscoop_systempref_index");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " novalidate>
<div class=\"system_pref\">
    <div class=\"tabbable tabs-left\">
        <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#general_settings\" data-toggle=\"tab\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.menu.general", array(), "system_pref"), "html", null, true);
        echo "</a></li>
            <li><a href=\"#cache_settings\" data-toggle=\"tab\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.menu.cache", array(), "system_pref"), "html", null, true);
        echo "</a></li>
            ";
        // line 50
        if ((isset($context["hasManagePermission"]) ? $context["hasManagePermission"] : null)) {
            // line 51
            echo "                <li><a href=\"#cronjob_settings\" data-toggle=\"tab\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.menu.cronjob", array(), "system_pref"), "html", null, true);
            echo "</a></li>
                <li><a href=\"#email_settings\" data-toggle=\"tab\">";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.menu.email", array(), "system_pref"), "html", null, true);
            echo "</a></li>
                <li><a href=\"#editor_settings\" data-toggle=\"tab\">";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.menu.editor", array(), "system_pref"), "html", null, true);
            echo "</a></li>
                <li><a href=\"#media_settings\" data-toggle=\"tab\">";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.menu.media", array(), "system_pref"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 56
        echo "            <li><a href=\"#geolocation_settings\" data-toggle=\"tab\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.menu.geolocation", array(), "system_pref"), "html", null, true);
        echo "</a></li>
            <li><a href=\"#facebook_settings\" data-toggle=\"tab\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.menu.fb", array(), "system_pref"), "html", null, true);
        echo "</a></li>
            <li><a href=\"#recaptcha_settings\" data-toggle=\"tab\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.menu.recaptcha", array(), "system_pref"), "html", null, true);
        echo "</a></li>
            ";
        // line 59
        if ((isset($context["hasManagePermission"]) ? $context["hasManagePermission"] : null)) {
            // line 60
            echo "                <li><a href=\"#other_settings\" data-toggle=\"tab\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.menu.other", array(), "system_pref"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 62
        echo "        </ul>
        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"general_settings\">
                <h3>";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.menu.general", array(), "system_pref"), "html", null, true);
        echo "</h3>
                    <dl>
                        <dt>
                            <label>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.siteonline", array(), "system_pref"), "html", null, true);
        echo "</label>
                        </dt>
                        <dd>
                            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "siteonline", array()), 'row');
        echo "
                        </dd>
                        <dt>
                            <label>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.sitetitle", array(), "system_pref"), "html", null, true);
        echo "</label>
                        </dt>
                        <dd>
                            ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'row', array("attr" => array("class" => "input_text")));
        echo "
                        </dd>
                        <dt>
                            <label>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.metakeywords", array(), "system_pref"), "html", null, true);
        echo "</label>
                        </dt>
                        <dd>
                            ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "meta_keywords", array()), 'row', array("attr" => array("class" => "input_text")));
        echo "
                        </dd>
                        <dt>
                            <label>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.metadescription", array(), "system_pref"), "html", null, true);
        echo "</label>
                        </dt>
                        <dd>
                            ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "meta_description", array()), 'row', array("attr" => array("class" => "input_text")));
        echo "
                        </dd>
                        <dt>
                            <label>";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.timezone", array(), "system_pref"), "html", null, true);
        echo "</label>
                        </dt>
                        <dd>
                            ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "timezone", array()), 'row', array("attr" => array("class" => "input_select wide")));
        echo "
                        </dd>
                        <dt>
                            <label>";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.allowrecovery", array(), "system_pref"), "html", null, true);
        echo " <small id=\"allowrecovery\">(?)</small></label>
                        </dt>
                        <dd>
                            ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "allow_recovery", array()), 'row');
        echo "
                        </dd>
                        <dt>
                            <label>";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.emailfrom", array(), "system_pref"), "html", null, true);
        echo " <small id=\"emailfrom\">(?)</small></label>
                        </dt>
                        <dd>
                            ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email_from", array()), 'row', array("attr" => array("class" => "input_text")));
        echo "
                        </dd>
                        <dt>
                            <label>";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.secretkey", array(), "system_pref"), "html", null, true);
        echo " <small id=\"secret\">(?)</small></label>
                        </dt>
                        <dd>
                            ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "secret_key", array()), 'row', array("attr" => array("class" => "input_text", "disabled" => "disabled")));
        echo "
                        </dd>
                        <dt>
                            <label>";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.sessionlifetime", array(), "system_pref"), "html", null, true);
        echo " <small id=\"lifetime\">(?)</small></label>
                        </dt>
                        <dd>
                            ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "session_lifetime", array()), 'row', array("attr" => array("class" => "input_text")));
        echo "
                            ";
        // line 120
        if ((isset($context["php_ini_max_seconds"]) ? $context["php_ini_max_seconds"] : null)) {
            // line 121
            echo "                                <span style=\"margin-top:8px;\"><= ";
            echo twig_escape_filter($this->env, (isset($context["php_ini_max_seconds"]) ? $context["php_ini_max_seconds"] : null), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.sessionlifetimemsg", array(), "system_pref"), "html", null, true);
            echo "
                                </span>
                            ";
        }
        // line 124
        echo "                        </dd>
                        <dt>
                            <label>";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.separator", array(), "system_pref"), "html", null, true);
        echo " <small id=\"separator\">(?)</small></label>
                        </dt>
                        <dd>
                            ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "separator", array()), 'row', array("attr" => array("class" => "input_text", "style" => "width: 50px")));
        echo "
                        </dd>
                        <dt>
                            <label>";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.captcha", array(), "system_pref"), "html", null, true);
        echo "</label>
                        </dt>
                        <dd>
                            ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "captcha", array()), 'row', array("attr" => array("class" => "input_text", "style" => "width: 50px")));
        echo "
                        </dd>
                        <dt>
                            <label>";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.maxupload", array(), "system_pref"), "html", null, true);
        echo "</label>
                        </dt>
                        <dd>
                            ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "max_upload_size", array()), 'row', array("attr" => array("class" => "input_text", "style" => "width: 50px")));
        echo "
                            <p>";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.maxuploadmsg", array("%max%" => (isset($context["upload_min_filesize"]) ? $context["upload_min_filesize"] : null)), "system_pref"), "html", null, true);
        echo "</p>
                        </dd>
                        ";
        // line 144
        if ((isset($context["hasManagePermission"]) ? $context["hasManagePermission"] : null)) {
            // line 145
            echo "                        <dt>
                            <label>";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.stats", array(), "system_pref"), "html", null, true);
            echo " <small id=\"stats\">(?)</small></label>
                        </dt>
                        <dd>
                            ";
            // line 149
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "automatic_collection", array()), 'row');
            echo "
                        </dd>
                        ";
        }
        // line 152
        echo "                    <dl>
            </div>
            <div class=\"tab-pane\" id=\"cache_settings\">
                <h3>";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.menu.cache", array(), "system_pref"), "html", null, true);
        echo "</h3>
                <dl>
                 ";
        // line 157
        if ((isset($context["hasManagePermission"]) ? $context["hasManagePermission"] : null)) {
            // line 158
            echo "                    <dt>
                        <label>";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.cacheengine", array(), "system_pref"), "html", null, true);
            echo " <small id=\"cacheengine\">(?)</small></label>
                    </dt>
                    <dd>
                        ";
            // line 162
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cache_engine", array()), 'row', array("attr" => array("class" => "input_select wide")));
            echo "
                    </dd>
                    <dt>
                        <label>";
            // line 165
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.cacheenginehost", array(), "system_pref"), "html", null, true);
            echo " <small id=\"cacheenginehost\">(?)</small></label>
                    </dt>
                    <dd>
                        ";
            // line 168
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cache_engine_host", array()), 'row', array("attr" => array("class" => "input_text wide")));
            echo "
                    </dd>
                    <dt>
                        <label>";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.cacheengineport", array(), "system_pref"), "html", null, true);
            echo " <small id=\"cacheengineport\">(?)</small></label>
                    </dt>
                    <dd>
                        ";
            // line 174
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cache_engine_port", array()), 'row', array("attr" => array("class" => "input_text", "style" => "width: 81px;")));
            echo "
                    </dd>

                    <div class=\"clear-database-cache\">
                        <button class=\"btn btn-xs btn-danger\" type=\"text\">";
            // line 178
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.btn.cleardatabasecache", array(), "system_pref"), "html", null, true);
            echo "</button>
                    </div>

                    <dt>
                        <label>";
            // line 182
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.cachetemplate", array(), "system_pref"), "html", null, true);
            echo " <small id=\"cachetemplate\">(?)</small></label>
                    </dt>
                    <dd>
                        ";
            // line 185
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cache_template", array()), 'row', array("attr" => array("class" => "input_select wide")));
            echo "
                    </dd>
                ";
        }
        // line 188
        echo "                    <dt>
                         <label>";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.cacheimage", array(), "system_pref"), "html", null, true);
        echo " <small id=\"cacheimage\">(?)</small></label>
                    </dt>
                    <dd>
                        ";
        // line 192
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cache_image", array()), 'row', array("attr" => array("class" => "input_select wide")));
        echo "
                    </dd>
                </dl>
            </div>
            ";
        // line 196
        if ((isset($context["hasManagePermission"]) ? $context["hasManagePermission"] : null)) {
            // line 197
            echo "            <div class=\"tab-pane\" id=\"cronjob_settings\">
                <h3>";
            // line 198
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.menu.cronjob", array(), "system_pref"), "html", null, true);
            echo "</h3>
                <ul id=\"tabsPanel\" class=\"nav nav-tabs nav-justified\">
                  <li class=\"active last\"><a href=\"#jobs-table\" data-toggle=\"tab\" class=\"font-fix\">";
            // line 200
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.cronslist", array(), "system_pref"), "html", null, true);
            echo "</a></li>
                  <li><a href=\"#jobs-settings\" data-toggle=\"tab\" class=\"font-fix\">";
            // line 201
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.cronsadvanced", array(), "system_pref"), "html", null, true);
            echo "</a></li>
              </ul>
              <div class=\"tab-content\" style=\"margin-top: -300px;\">
                <div class=\"tab-pane fade in active\" id=\"jobs-table\" style=\"margin: 0\">
                <span class=\"font-fix label label-info\">";
            // line 205
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.info", array(), "system_pref"), "html", null, true);
            echo "</span> <span class=\"font-fix\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.infodesc", array(), "system_pref"), "html", null, true);
            echo "</span><br><br>
                <table class=\"table table-striped cron-jobs\">
                ";
            // line 207
            if ((isset($context["jobs"]) ? $context["jobs"] : null)) {
                // line 208
                echo "                  <thead>
                    <tr>
                      <th data-dynatable-no-sort=\"true\" class=\"font-fix\">#</th>
                      <th class=\"font-fix\">";
                // line 211
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.cronjob", array(), "system_pref"), "html", null, true);
                echo "</th>
                      <th class=\"font-fix\">";
                // line 212
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.prevRun", array(), "system_pref"), "html", null, true);
                echo "</th>
                      <th data-dynatable-column=\"nextRunDate\" class=\"font-fix\">";
                // line 213
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.nextRun", array(), "system_pref"), "html", null, true);
                echo "</th>
                      <th data-dynatable-column=\"enabled\" data-dynatable-sorts=\"status\" class=\"font-fix\">";
                // line 214
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.enabled", array(), "system_pref"), "html", null, true);
                echo "</th>
                      <th data-dynatable-column=\"sendMail\" data-dynatable-sorts=\"notify\" class=\"font-fix\">";
                // line 215
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.cronJobNotify", array(), "system_pref"), "html", null, true);
                echo "</th>
                      <th data-dynatable-no-sort=\"true\" class=\"font-fix\">";
                // line 216
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.options", array(), "system_pref"), "html", null, true);
                echo "</th>
                    </tr>
                  </thead>
                  <tbody>
                        ";
                // line 220
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
                    // line 221
                    echo "                            <tr>
                              <td>";
                    // line 222
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 223
                    echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "name", array()), "html", null, true);
                    echo " ";
                    if ($this->getAttribute($context["job"], "detailsUrl", array())) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "detailsUrl", array()), "html", null, true);
                        echo "\" target=\"_blank\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.moredetails", array(), "system_pref"), "html", null, true);
                        echo "</a>";
                    }
                    echo "</td>
                              <td>";
                    // line 224
                    echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "prevRun", array()), "html", null, true);
                    echo "</td>
                              <td><span title=\"";
                    // line 225
                    echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "schedule", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "nextRun", array()), "html", null, true);
                    echo "</span></td>
                              <td>";
                    // line 226
                    if ($this->getAttribute($context["job"], "enabled", array())) {
                        echo "<div id=\"enabled\"><span class=\"font-fix label job-status";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
                        echo " label-success\"><span class=\"glyphicon glyphicon-thumbs-up\"></span></span></div>";
                    } else {
                        echo "<div id=\"disabled\"><span class=\"font-fix label job-status";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
                        echo " label-danger\"><span class=\"glyphicon glyphicon-thumbs-down\"></span></span></div>";
                    }
                    echo "</td>
                              <td><div class=\"notify-job\" ";
                    // line 227
                    if ($this->getAttribute($context["job"], "sendMail", array())) {
                        echo "id=\"checked\"";
                    } else {
                        echo "id=\"unchecked\"";
                    }
                    echo "><input type=\"checkbox\" class=\"cron-jobs-notify\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
                    echo "\" ";
                    if ($this->getAttribute($context["job"], "sendMail", array())) {
                        echo " checked ";
                    }
                    echo "/></div></td>
                              <td>
                                ";
                    // line 229
                    if ($this->getAttribute($context["job"], "enabled", array())) {
                        echo "<button type=\"button\" job-id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
                        echo "\" class=\"disable-cron job-options";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
                        echo " btn btn-default btn-xs\"><span class=\"glyphicon glyphicon-remove-circle\"></span> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.btn.disable", array(), "system_pref"), "html", null, true);
                        echo "</button>";
                    } else {
                        echo "<button type=\"button\" job-id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
                        echo "\" class=\"enable-cron job-options";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
                        echo " btn btn-default btn-xs\"><span class=\"glyphicon glyphicon-ok-circle\"></span> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.btn.enable", array(), "system_pref"), "html", null, true);
                        echo "</button>";
                    }
                    echo "</td>
                            </tr>
                        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 232
                echo "                  </tbody>
                ";
            } else {
                // line 234
                echo "                    <span class=\"font-fix\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.norecords", array(), "system_pref"), "html", null, true);
                echo "</span>
                ";
            }
            // line 236
            echo "                </table>
                </div>
                <div class=\"tab-pane fade\" id=\"jobs-settings\"><br>
                        <dl style=\"margin-left: -200px;\">
                            <dt>
                                <label>";
            // line 241
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.cronJobEmail", array(), "system_pref"), "html", null, true);
            echo " <small id=\"cronjobemails\">(?)</small></label>
                            </dt>
                            <dd>
                                ";
            // line 244
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cronJobNotificationEmail", array()), 'row', array("attr" => array("class" => "input_text")));
            echo "
                            </dd>
                            <dt>
                                <label>";
            // line 247
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.cronJobSenderEmail", array(), "system_pref"), "html", null, true);
            echo " <small id=\"cronjobsender\">(?)</small></label>
                            </dt>
                            <dd>
                                ";
            // line 250
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cronJobSmtpSender", array()), 'row', array("attr" => array("class" => "input_text")));
            echo "
                            </dd>
                            <dt>
                                <label>";
            // line 253
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.cronJobSenderName", array(), "system_pref"), "html", null, true);
            echo "</label>
                            </dt>
                            <dd>
                                ";
            // line 256
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cronJobSmtpSenderName", array()), 'row', array("attr" => array("class" => "input_text")));
            echo "
                            </dd>
                        </dl>
                </div>
                </div>
            </div>
            <div class=\"tab-pane\" id=\"email_settings\">
                <h3>";
            // line 263
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.menu.email", array(), "system_pref"), "html", null, true);
            echo "</h3>
                <dl>
                    <dt>
                        <label>";
            // line 266
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.smtphost", array(), "system_pref"), "html", null, true);
            echo "</label>
                    </dt>
                    <dd>
                        ";
            // line 269
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "smtp_host", array()), 'row', array("attr" => array("class" => "input_text")));
            echo "
                    </dd>
                    <dt>
                        <label>";
            // line 272
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.smtpport", array(), "system_pref"), "html", null, true);
            echo "</label>
                    </dt>
                    <dd>
                        ";
            // line 275
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "smtp_port", array()), 'row', array("attr" => array("class" => "input_text")));
            echo "
                    </dd>
                </dl>
            </div>
            <div class=\"tab-pane\" id=\"editor_settings\">
                <h3>";
            // line 280
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.menu.editor", array(), "system_pref"), "html", null, true);
            echo "</h3>
                <dl>
                    <dt>
                      <label>";
            // line 283
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.imageratio", array(), "system_pref"), "html", null, true);
            echo " <small id=\"ratio\">(?)</small></label>
                    </dt>
                    <dd>
                        ";
            // line 286
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image_ratio", array()), 'row', array("attr" => array("class" => "input_text", "style" => "width: 67px")));
            echo " %
                    </dd>
                    <dt>
                        <label>";
            // line 289
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.imagewidth", array(), "system_pref"), "html", null, true);
            echo "</label>
                    </dt>
                    <dd>
                        ";
            // line 292
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image_width", array()), 'row', array("attr" => array("class" => "input_text", "style" => "width: 67px")));
            echo " pixels
                    </dd>
                    <dt>
                        <label>";
            // line 295
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.imageheight", array(), "system_pref"), "html", null, true);
            echo "</label>
                    </dt>
                    <dd>
                        ";
            // line 298
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image_height", array()), 'row', array("attr" => array("class" => "input_text", "style" => "width: 67px")));
            echo " pixels
                    </dd>
                    <dt>
                        <label>";
            // line 301
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.zoom", array(), "system_pref"), "html", null, true);
            echo " <small id=\"zoom\">(?)</small></label>
                    </dt>
                    <dd>
                        ";
            // line 304
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zoom", array()), 'row');
            echo "
                    </dd>
                    <dt>
                        <label>";
            // line 307
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.mediaRichTextCaptions", array(), "system_pref"), "html", null, true);
            echo " <small id=\"richtext_status\">(?)</small></label>
                    </dt>
                    <dd>
                        ";
            // line 310
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mediaRichTextCaptions", array()), 'row');
            echo "
                        <div id=\"richtext_captions\">
                            <dl>
                                <dt>
                                    <label>";
            // line 314
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.mediaCaptionLength", array(), "system_pref"), "html", null, true);
            echo " <small id=\"richtext_length\">(?)</small></label>
                                </dt>
                                <dd>
                                    ";
            // line 317
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mediaCaptionLength", array()), 'row');
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.mediaCaptionLength_after", array(), "system_pref"), "html", null, true);
            echo "
                                </dd>
                            </dl>
                        </div>
                    </dd>
                </dl>
            </div>
            ";
        }
        // line 325
        echo "            <div class=\"tab-pane\" id=\"geolocation_settings\">
                <h3>";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.menu.geolocation", array(), "system_pref"), "html", null, true);
        echo "</h3>
                <dl>
                    ";
        // line 328
        if ((isset($context["mysql_client_command_path"]) ? $context["mysql_client_command_path"] : null)) {
            // line 329
            echo "                    <dt align=\"left\" width=\"400px\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.mysqlpathmsg", array(), "system_pref"), "html", null, true);
            echo "\" style=\"color:#b06000\">
                            ";
            // line 330
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.mysqlpath", array(), "system_pref"), "html", null, true);
            echo "
                    </dt>
                    <dd align=\"left\" valign=\"top\">
                        ";
            // line 333
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mysql_client_command_path", array()), 'row', array("attr" => array("class" => "input_text")));
            echo "
                    </dd>
                    ";
        }
        // line 336
        echo "                    <dt>
                        <label>";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.latitude", array(), "system_pref"), "html", null, true);
        echo "</label>
                    </dt>
                    <dd>
                        ";
        // line 340
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "center_latitude_default", array()), 'row', array("attr" => array("class" => "input_text")));
        echo "
                    </dd>
                    <dt>
                        <label>";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.longitude", array(), "system_pref"), "html", null, true);
        echo "</label>
                    </dt>
                    <dd>
                        ";
        // line 346
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "center_longitude_default", array()), 'row', array("attr" => array("class" => "input_text")));
        echo "
                    </dd>
                    <dt>
                        <label>";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.zoomlevel", array(), "system_pref"), "html", null, true);
        echo "</label>
                    </dt>
                    <dd>
                        ";
        // line 352
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_display_resolution_default", array()), 'row', array("attr" => array("class" => "input_text", "style" => "width: 81px;")));
        echo "
                    </dd>
                    ";
        // line 354
        if ((isset($context["hasManagePermission"]) ? $context["hasManagePermission"] : null)) {
            // line 355
            echo "                        <dt>
                            <label>";
            // line 356
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.defaultwidth", array(), "system_pref"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>
                            ";
            // line 359
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_view_width_default", array()), 'row', array("attr" => array("class" => "input_text", "style" => "width: 81px;")));
            echo "
                        </dd>
                        <dt>
                            <label>";
            // line 362
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.defaultheight", array(), "system_pref"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>
                            ";
            // line 365
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_view_height_default", array()), 'row', array("attr" => array("class" => "input_text", "style" => "width: 81px;")));
            echo "
                        </dd>
                    ";
        }
        // line 368
        echo "                    <dt class=\"border\">
                        <label>";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.css", array(), "system_pref"), "html", null, true);
        echo "</label>
                    </dt>
                    <dd>
                        ";
        // line 372
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_auto_cSS_file", array()), 'row', array("attr" => array("class" => "input_text")));
        echo "
                    </dd>
                    <dt>
                        <label>";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.autofocus", array(), "system_pref"), "html", null, true);
        echo "</label>
                    </dt>
                    <dd>
                        ";
        // line 378
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_auto_focus_default", array()), 'row', array("attr" => array("class" => "input_text")));
        echo "
                    </dd>
                    <dt>
                        <label>";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.zoomautofocus", array(), "system_pref"), "html", null, true);
        echo " (0-18)</label>
                    </dt>
                    <dd>
                        ";
        // line 384
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_auto_focus_max_zoom", array()), 'row', array("attr" => array("class" => "input_text", "style" => "width: 81px;")));
        echo "
                    </dd>
                    <dt>
                        <label>";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.borderautofocus", array(), "system_pref"), "html", null, true);
        echo "</label>
                    </dt>
                    <dd>
                        ";
        // line 390
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_auto_focus_border", array()), 'row', array("attr" => array("class" => "input_text", "style" => "width: 81px;")));
        echo "
                    </dd>
                    <dt class=\"border\">
                        <label>";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.mapprovider", array(), "system_pref"), "html", null, true);
        echo "</label>
                    </dt>
                    <dd>
                        ";
        // line 396
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_provider_available_google_v3", array()), 'row');
        echo "
                    </dd>
                    <dt>
                        <label>";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.mapquest", array(), "system_pref"), "html", null, true);
        echo "</label>
                    </dt>
                    <dd>
                        ";
        // line 402
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_provider_available_map_quest", array()), 'row');
        echo "
                    </dd>
                    <dt>
                        <label>";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.openstreet", array(), "system_pref"), "html", null, true);
        echo "</label>
                    </dt>
                    <dd>
                        ";
        // line 408
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_provider_available_oSM", array()), 'row');
        echo "
                    </dd>
                    <dt>
                        <label>";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.defaultmapprovider", array(), "system_pref"), "html", null, true);
        echo "</label>
                    </dt>
                    <dd>
                        ";
        // line 414
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_provider_default", array()), 'row', array("attr" => array("class" => "input_select")));
        echo "
                    </dd>
                    <dt class=\"border\">
                        <label>";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.geosearch", array(), "system_pref"), "html", null, true);
        echo "</label>
                    </dt>
                    <dd>
                        ";
        // line 420
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "geo_search_local_geonames", array()), 'row');
        echo "
                    </dd>
                    <dt>
                        <label>";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.nominatimsearch", array(), "system_pref"), "html", null, true);
        echo "</label>
                    </dt>
                    <dd>
                        ";
        // line 426
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "geo_search_mapquest_nominatim", array()), 'row');
        echo "
                    </dd>
                    <dt>
                        <label>";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.preflanguage", array(), "system_pref"), "html", null, true);
        echo "</label>
                    </dt>
                    <dd>
                        ";
        // line 432
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "geo_search_preferred_language", array()), 'row', array("attr" => array("class" => "input_select")));
        echo "
                    </dd>
                    ";
        // line 434
        if ((isset($context["hasManagePermission"]) ? $context["hasManagePermission"] : null)) {
            // line 435
            echo "                        <dt class=\"border\">
                            <label>";
            // line 436
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.markerdir", array(), "system_pref"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>
                            ";
            // line 439
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_marker_directory", array()), 'row', array("attr" => array("class" => "input_text")));
            echo "
                        </dd>
                         <dt>
                            <label>";
            // line 442
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.defaultmarker", array(), "system_pref"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>
                            ";
            // line 445
            if (twig_test_iterable((isset($context["map_marker_source_default"]) ? $context["map_marker_source_default"] : null))) {
                // line 446
                echo "                                <select name=\"preferencesform[map_marker_source_default]\" class=\"input_select\">
                                    ";
                // line 447
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["map_marker_source_default"]) ? $context["map_marker_source_default"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["mark"]) {
                    // line 448
                    echo "                                        <option value=\"";
                    echo twig_escape_filter($this->env, $context["mark"], "html", null, true);
                    echo "\" ";
                    if (((isset($context["map_marker_source_selected"]) ? $context["map_marker_source_selected"] : null) == $context["mark"])) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["mark"], "html", null, true);
                    echo "</option>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mark'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 450
                echo "                                </select>
                            ";
            } else {
                // line 452
                echo "                                <input type=\"text\" name=\"preferencesform[map_marker_source_default]\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["map_marker_source_default"]) ? $context["map_marker_source_default"] : null), "html", null, true);
                echo "\" maxlength=\"80\" size=\"40\" class=\"input_text\"/>
                            ";
            }
            // line 454
            echo "                        </dd>
                        <dt class=\"border\">
                            <label>";
            // line 456
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.popupwidth", array(), "system_pref"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>
                            ";
            // line 459
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_popup_width_min", array()), 'row', array("attr" => array("class" => "input_text", "style" => "width: 81px;")));
            echo "
                        </dd>
                         <dt>
                            <label>";
            // line 462
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.popupheight", array(), "system_pref"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>
                            ";
            // line 465
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_popup_height_min", array()), 'row', array("attr" => array("class" => "input_text", "style" => "width: 81px;")));
            echo "
                        </dd>
                    ";
        }
        // line 468
        echo "                </dl>
            </div>
            ";
        // line 470
        if ((isset($context["hasManagePermission"]) ? $context["hasManagePermission"] : null)) {
            // line 471
            echo "                <div class=\"tab-pane\" id=\"media_settings\">
                    <h3>";
            // line 472
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.menu.media", array(), "system_pref"), "html", null, true);
            echo " <label><small id=\"video\">(?)</small></label></h3>
                    <dl>
                        <dt>
                            <label>";
            // line 475
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.youtubewidth", array(), "system_pref"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>
                            ";
            // line 478
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_video_width_you_tube", array()), 'row', array("attr" => array("class" => "input_text", "style" => "width: 81px;")));
            echo "
                        </dd>
                        <dt>
                            <label>";
            // line 481
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.youtubeheight", array(), "system_pref"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>
                            ";
            // line 484
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_video_height_you_tube", array()), 'row', array("attr" => array("class" => "input_text", "style" => "width: 81px;")));
            echo "
                        </dd>
                        <dt class=\"border\">
                            <label>";
            // line 487
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.vimeowidth", array(), "system_pref"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>
                            ";
            // line 490
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_video_width_vimeo", array()), 'row', array("attr" => array("class" => "input_text", "style" => "width: 81px;")));
            echo "
                        </dd>
                        <dt>
                            <label>";
            // line 493
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.vimeoheight", array(), "system_pref"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>
                            ";
            // line 496
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_video_height_vimeo", array()), 'row', array("attr" => array("class" => "input_text", "style" => "width: 81px;")));
            echo "
                        </dd>
                        <dt class=\"border\">
                            <label>";
            // line 499
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.flashwidth", array(), "system_pref"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>
                            ";
            // line 502
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_video_width_flash", array()), 'row', array("attr" => array("class" => "input_text", "style" => "width: 81px;")));
            echo "
                        </dd>
                        <dt>
                            <label>";
            // line 505
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.flashheight", array(), "system_pref"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>
                            ";
            // line 508
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "map_video_height_flash", array()), 'row', array("attr" => array("class" => "input_text", "style" => "width: 81px;")));
            echo "
                        </dd>
                        <dt class=\"border\">
                            <label>";
            // line 511
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.flashserver", array(), "system_pref"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>
                            ";
            // line 514
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "geo_flash_server", array()), 'row', array("attr" => array("class" => "input_text")));
            echo "
                        </dd>
                        <dt>
                            <label>";
            // line 517
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.flashdir", array(), "system_pref"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>
                            ";
            // line 520
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "geo_flash_directory", array()), 'row', array("attr" => array("class" => "input_text")));
            echo "
                        </dd>
                    </dl>
                </div>
            ";
        }
        // line 525
        echo "            <div class=\"tab-pane\" id=\"facebook_settings\">
                <h3>";
        // line 526
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.menu.fb", array(), "system_pref"), "html", null, true);
        echo "</h3>
                <dl>
                    <dt>
                        <label>";
        // line 529
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.appid", array(), "system_pref"), "html", null, true);
        echo "</label>
                    </dt>
                    <dd>
                        ";
        // line 532
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "facebook_appid", array()), 'row', array("attr" => array("class" => "input_text")));
        echo "
                    </dd>
                    <dt>
                        <label>";
        // line 535
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.fbsecret", array(), "system_pref"), "html", null, true);
        echo "</label>
                    </dt>
                    <dd>
                        ";
        // line 538
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "facebook_appsecret", array()), 'row', array("attr" => array("class" => "input_text")));
        echo "
                    </dd>
                </dl>
            </div>
            ";
        // line 542
        if ((isset($context["hasManagePermission"]) ? $context["hasManagePermission"] : null)) {
            // line 543
            echo "                <div class=\"tab-pane\" id=\"other_settings\">
                    <h3>";
            // line 544
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.menu.other", array(), "system_pref"), "html", null, true);
            echo "</h3>
                    <dl>
                        <dt><label>";
            // line 546
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.usereplication", array(), "system_pref"), "html", null, true);
            echo " <small id=\"replication\">(?)</small></label></dt>
                        <dd>
                            ";
            // line 548
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "use_replication", array()), 'row');
            echo "
                        </dd>
                        <div id=\"replication_server\">
                            <dl>
                                <dt><h4>";
            // line 552
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.serverdb", array(), "system_pref"), "html", null, true);
            echo "</h4></dt>
                                <dt><label>";
            // line 553
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.replicationhost", array(), "system_pref"), "html", null, true);
            echo "</label></dt>
                                <dd>
                                    ";
            // line 555
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "use_replication_host", array()), 'row', array("attr" => array("class" => "input_text")));
            echo "
                                </dd>
                                <dt><label>";
            // line 557
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.replicationuser", array(), "system_pref"), "html", null, true);
            echo "</label></dt>
                                <dd>
                                    ";
            // line 559
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "use_replication_user", array()), 'row', array("attr" => array("class" => "input_text")));
            echo "
                                </dd>
                                <dt><label>";
            // line 561
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.replicationpw", array(), "system_pref"), "html", null, true);
            echo "</label></dt>
                                <dd>
                                    ";
            // line 563
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "use_replication_password", array()), 'row', array("attr" => array("class" => "input_text")));
            echo "
                                </dd>
                                <dt><label>";
            // line 565
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.replicationport", array(), "system_pref"), "html", null, true);
            echo "</label></dt>
                                <dd>
                                    ";
            // line 567
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "use_replication_port", array()), 'row', array("attr" => array("class" => "input_text")));
            echo "
                                </dd>
                            </dl>
                        </div>
                        <dt class=\"border\"><label>";
            // line 571
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.filter", array(), "system_pref"), "html", null, true);
            echo " <small id=\"filter\">(?)</small></label></dt>
                        <dd>
                           ";
            // line 573
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "template_filter", array()), 'row', array("attr" => array("class" => "input_text")));
            echo "
                        </dd>
                        <dt class=\"border\"><label>";
            // line 575
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.usergarbage", array(), "system_pref"), "html", null, true);
            echo " <small id=\"garbage\">(?)</small></label></dt>
                        <dd>
                           ";
            // line 577
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "userGarbageActive", array()), 'row');
            echo "
                        </dd>
                        <div id=\"user-garbage\">
                            <dl>
                                <dt><h4>";
            // line 581
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.usergarbagedaysinfo", array(), "system_pref"), "html", null, true);
            echo "</h4></dt>
                                <label>";
            // line 582
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.usergarbagedays", array(), "system_pref"), "html", null, true);
            echo "</label>
                                <dd>
                                   ";
            // line 584
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "userGarbageDays", array()), 'row', array("attr" => array("class" => "input_text", "style" => "width: 81px;")));
            echo "
                                </dd>
                            </dl>
                        </div>
                        <dt class=\"border\"><label>";
            // line 588
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.smartyUseProtocol", array(), "system_pref"), "html", null, true);
            echo " <small id=\"smartyuseprotocol-popover\">(?)</small></label></dt>
                        <dd>
                           ";
            // line 590
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "smartyUseProtocol", array()), 'row');
            echo "
                        </dd>
                    </dl>
                </div>
            ";
        }
        // line 595
        echo "            <div class=\"tab-pane\" id=\"recaptcha_settings\">
                <h3>";
        // line 596
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.menu.recaptcha", array(), "system_pref"), "html", null, true);
        echo "</h3>
                <dl>
                    <dt>
                        <label>";
        // line 599
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.recaptchapublickey", array(), "system_pref"), "html", null, true);
        echo " <small id=\"recaptchapublickey\">(?)</small></label>
                    </dt>
                    <dd>
                        ";
        // line 602
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recaptchaPublicKey", array()), 'row', array("attr" => array("class" => "input_text")));
        echo "
                    </dd>
                    <dt>
                        <label>";
        // line 605
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.recaptchaprivatekey", array(), "system_pref"), "html", null, true);
        echo " <small id=\"recaptchaprivatekey\">(?)</small></label>
                    </dt>
                    <dd>
                        ";
        // line 608
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recaptchaPrivateKey", array()), 'row', array("attr" => array("class" => "input_text")));
        echo "
                    </dd>
                    <dt>
                        <label>";
        // line 611
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.label.recaptchasecure", array(), "system_pref"), "html", null, true);
        echo " <small id=\"recaptchasecure\">(?)</small></label>
                    </dt>
                    <dd>
                        ";
        // line 614
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recaptchaSecure", array()), 'row');
        echo "
                    </dd>
                </dl>
            </div>
            <div class=\"save-button-bar\">
                <button type=\"submit\" class=\"save-button\">";
        // line 619
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.btn.save", array(), "system_pref"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
        // line 624
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
</form>
<script type=\"text/javascript\"><!--
\$( document ).ready(function() {
    \$('.cron-jobs').dynatable({
        features: {
            paginate: false,
            pushState: true
        },
        inputs: {
            paginationClass: 'pagination',
            paginationActiveClass: 'current',
            paginationDisabledClass: 'unavailable',
            paginationPrev: '&laquo;',
            paginationNext: '&raquo;',
            pageText: '";
        // line 639
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("users.table.table_messages.page", array(), "users"), "html", null, true);
        echo "',
            perPageText: '";
        // line 640
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("users.table.table_messages.perPageText", array(), "users"), "html", null, true);
        echo "',
            pageText: '";
        // line 641
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("users.table.table_messages.pageText", array(), "users"), "html", null, true);
        echo "',
            recordCountPageBoundTemplate: '";
        // line 642
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("users.table.table_messages.recordCountPageBoundTemplate", array(), "users"), "html", null, true);
        echo "',
            recordCountPageUnboundedTemplate: '";
        // line 643
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("users.table.table_messages.recordCountPageUnboundedTemplate", array(), "users"), "html", null, true);
        echo "',
            recordCountTotalTemplate: '";
        // line 644
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("users.table.table_messages.recordCountTotalTemplate", array(), "users"), "html", null, true);
        echo "',
            recordCountFilteredTemplate: '";
        // line 645
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("users.table.table_messages.recordCountFilteredTemplate", array(), "users"), "html", null, true);
        echo "',
            recordCountText: '";
        // line 646
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("users.table.table_messages.recordCountText", array(), "users"), "html", null, true);
        echo "',
            recordCountTextTemplate: '";
        // line 647
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("users.table.table_messages.recordCountTextTemplate", array(), "users"), "html", null, true);
        echo "',
            recordCountTemplate: '";
        // line 648
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("users.table.table_messages.recordCountTemplate", array(), "users"), "html", null, true);
        echo "',
            processingText: '";
        // line 649
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("users.table.table_messages.processingText", array(), "users"), "html", null, true);
        echo "'
        },
        readers: {
            enabled: function(cell, record) {
                var \$cell = \$(cell);
                var status = \$cell.find('div').get(0);
                record['status'] = status.id;

                return \$cell.html();
            },
            sendMail: function(cell, record) {
                var \$cell = \$(cell);
                var notify = \$cell.find(\"div.notify-job\").get(0);
                record['notify'] = notify.id

                return \$cell.html();
            }
        }
    });
});

    function popover(target, content) {
        target.popover({
            trigger: 'hover',
            content : content
        });
    };

    \$(function() {
        \$(\"input:radio[name=preferencesform\\\\[mediaRichTextCaptions\\\\]]\").change(function() {
            var richtext_div = \$('#richtext_captions');
            if (\$(this).val() == 'Y') {
                richtext_div.show();
            } else {
                richtext_div.hide();
            }
        });

        \$(\"input:radio[name=preferencesform\\\\[mediaRichTextCaptions\\\\]]:checked\").change();
    });

    \$(function() {
        \$('#tabsPanel a:first').tab('show');
        \$(\"input:radio[name=preferencesform\\\\[use_replication\\\\]]\").change(function() {
            var replication_div = \$('#replication_server');
            if (\$(this).val() == 'Y') {
                replication_div.show();
            } else {
                replication_div.hide();
            }
        });

        \$(\"input:radio[name=preferencesform\\\\[use_replication\\\\]]:checked\").change();
    });

    \$(function() {
        \$(\"input:radio[name=preferencesform\\\\[userGarbageActive\\\\]]\").change(function() {
            var garbageDiv = \$('#user-garbage');
            if (\$(this).val() == 'Y') {
                garbageDiv.show();
            } else {
                garbageDiv.hide();
            }
        });

        \$(\"input:radio[name=preferencesform\\\\[userGarbageActive\\\\]]:checked\").change();
    });

    \$('.clear-database-cache button').click(function(e){
        e.preventDefault();

        var that = \$(this);
        callServer('ping', [], function(json) {
            \$.ajax({
                type: 'POST',
                url: Routing.generate('newscoop_newscoop_systempref_cleardatabasecache'),
                success: function (data) {
                    flashMessage('";
        // line 726
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.success.cacheCleared", array(), "system_pref"), "html", null, true);
        echo "');
                },
                error: function (rq, status, error) {
                    flashMessage('";
        // line 729
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.error.cacheNotCleared", array(), "system_pref"), "html", null, true);
        echo "', \"error\");
                }
            });
        });
    });

    \$('button.disable-cron').live('click', function(e){
        e.preventDefault();

        var that = \$(this);
        var jobId = that.attr('job-id');
        callServer('ping', [], function(json) {
            \$.ajax({
                type: 'POST',
                url: Routing.generate('newscoop_newscoop_systempref_disablejob', {id: jobId }),
                success: function (data) {
                    var parentOptions = \$('.job-options' + jobId).parent();
                    parentOptions.html('');
                    parentOptions.append('<button type=\"button\" job-id=\"'+jobId+'\" class=\"enable-cron job-options' + jobId+' btn btn-default btn-xs\"><span class=\"glyphicon glyphicon-ok-circle\"></span> ";
        // line 747
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.btn.enable", array(), "system_pref"), "html", null, true);
        echo "</button>');
                    var parent = \$(\".job-status\" + jobId).parent();
                    parent.html('');
                    parent.append('<span class=\"font-fix label job-status'+jobId+' label-danger\"><span class=\"glyphicon glyphicon-thumbs-down\"></span></span>')
                    flashMessage('";
        // line 751
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.success.jobdisabled", array(), "system_pref"), "html", null, true);
        echo "');
                },
                error: function (rq, status, error) {
                    flashMessage('";
        // line 754
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.error.joberror", array(), "system_pref"), "html", null, true);
        echo "', \"error\");
                }
            });
        });
    });

    \$('button.enable-cron').live('click', function(e){
        e.preventDefault();

        var that = \$(this);
        var jobId = that.attr('job-id');
        callServer('ping', [], function(json) {
            \$.ajax({
                type: 'POST',
                url: Routing.generate('newscoop_newscoop_systempref_enablejob', {id: jobId }),
                success: function (data) {
                    var parentOptions = \$('.job-options' + jobId).parent();
                    parentOptions.html('');
                    parentOptions.append('<button type=\"button\" job-id=\"'+jobId+'\" class=\"disable-cron job-options' + jobId+' btn btn-default btn-xs\"><span class=\"glyphicon glyphicon-remove-circle\"></span> ";
        // line 772
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.btn.disable", array(), "system_pref"), "html", null, true);
        echo "</button>');
                    var parent = \$(\".job-status\" + jobId).parent();
                    parent.html('');
                    parent.append('<span class=\"font-fix label job-status'+jobId+' label-success\"><span class=\"glyphicon glyphicon-thumbs-up\"></span></span>')
                    flashMessage('";
        // line 776
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.success.jobenabled", array(), "system_pref"), "html", null, true);
        echo "');
                },
                error: function (rq, status, error) {
                    flashMessage('";
        // line 779
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.error.joberror", array(), "system_pref"), "html", null, true);
        echo "', \"error\");
                }
            });
        });
    });

    \$('.cron-jobs-notify').live('click', function(e){
        var jobId = \$(this).val();
        callServer('ping', [], function(json) {
            \$.ajax({
                type: 'POST',
                url: Routing.generate('newscoop_newscoop_systempref_jobnotify', {id: jobId }),
                success: function (data) {
                    flashMessage('";
        // line 792
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.success.jobnotifyswitched", array(), "system_pref"), "html", null, true);
        echo "');
                },
                error: function (rq, status, error) {
                    flashMessage('";
        // line 795
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.error.jobnotifyerror", array(), "system_pref"), "html", null, true);
        echo "', \"error\");
                }
            });
        });
    });

    popover(\$('#cacheengine'), '";
        // line 801
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.cacheengine", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#cacheenginehost'), '";
        // line 802
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.cacheenginehost", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#cacheengineport'), '";
        // line 803
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.cacheengineport", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#cachetemplate'), '";
        // line 804
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.cachetemplate", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#cacheimage'), '";
        // line 805
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.cacheimage", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#allowrecovery'), '";
        // line 806
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.recovery", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#secret'), '";
        // line 807
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.secret", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#separator'), '";
        // line 808
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.separator", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#stats'), '";
        // line 809
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.stats", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#zoom'), '";
        // line 810
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.zoom", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#richtext_status'), '";
        // line 811
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.richtext_status", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#richtext_length'), '";
        // line 812
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.richtext_length", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#ratio'), '";
        // line 813
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.ratio", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#replication'), '";
        // line 814
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.replication", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#filter'), '";
        // line 815
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.filter", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#cron'), '";
        // line 816
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.cron", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#video'), '";
        // line 817
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.video", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#emailfrom'), '";
        // line 818
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.emailfrom", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#recaptchaprivatekey'), '";
        // line 819
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.recaptcha.privatekey", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#recaptchapublickey'), '";
        // line 820
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.recaptcha.publickey", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#recaptchasecure'), '";
        // line 821
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.recaptcha.secure", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#garbage'), '";
        // line 822
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.garbage", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#lifetime'), '";
        // line 823
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.lifetime", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#smartyuseprotocol-popover'), '";
        // line 824
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.smartyuseprotocol", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#cronjobemails'), '";
        // line 825
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.cronJobEmail", array(), "system_pref"), "html", null, true);
        echo "');
    popover(\$('#cronjobsender'), '";
        // line 826
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.preferences.popover.cronJobSenderEmail", array(), "system_pref"), "html", null, true);
        echo "');
    \$(document).ready(function(){
        if (\$('.has-error').offset()) {
            var tabPane = \$(\".has-error :input\").parents('.tab-pane');
            \$.each(tabPane, function(index, value) {
                \$('.nav-tabs a[href=\"#' + \$(value).attr('id') + '\"]').tab('show');
            });

            \$(window).scrollTop(\$('.has-error').offset().top - 50);
        }
    });
//--></script>
";
    }

    public function getTemplateName()
    {
        return "NewscoopNewscoopBundle:SystemPref:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1791 => 826,  1787 => 825,  1783 => 824,  1779 => 823,  1775 => 822,  1771 => 821,  1767 => 820,  1763 => 819,  1759 => 818,  1755 => 817,  1751 => 816,  1747 => 815,  1743 => 814,  1739 => 813,  1735 => 812,  1731 => 811,  1727 => 810,  1723 => 809,  1719 => 808,  1715 => 807,  1711 => 806,  1707 => 805,  1703 => 804,  1699 => 803,  1695 => 802,  1691 => 801,  1682 => 795,  1676 => 792,  1660 => 779,  1654 => 776,  1647 => 772,  1626 => 754,  1620 => 751,  1613 => 747,  1592 => 729,  1586 => 726,  1506 => 649,  1502 => 648,  1498 => 647,  1494 => 646,  1490 => 645,  1486 => 644,  1482 => 643,  1478 => 642,  1474 => 641,  1470 => 640,  1466 => 639,  1448 => 624,  1440 => 619,  1432 => 614,  1426 => 611,  1420 => 608,  1414 => 605,  1408 => 602,  1402 => 599,  1396 => 596,  1393 => 595,  1385 => 590,  1380 => 588,  1373 => 584,  1368 => 582,  1364 => 581,  1357 => 577,  1352 => 575,  1347 => 573,  1342 => 571,  1335 => 567,  1330 => 565,  1325 => 563,  1320 => 561,  1315 => 559,  1310 => 557,  1305 => 555,  1300 => 553,  1296 => 552,  1289 => 548,  1284 => 546,  1279 => 544,  1276 => 543,  1274 => 542,  1267 => 538,  1261 => 535,  1255 => 532,  1249 => 529,  1243 => 526,  1240 => 525,  1232 => 520,  1226 => 517,  1220 => 514,  1214 => 511,  1208 => 508,  1202 => 505,  1196 => 502,  1190 => 499,  1184 => 496,  1178 => 493,  1172 => 490,  1166 => 487,  1160 => 484,  1154 => 481,  1148 => 478,  1142 => 475,  1136 => 472,  1133 => 471,  1131 => 470,  1127 => 468,  1121 => 465,  1115 => 462,  1109 => 459,  1103 => 456,  1099 => 454,  1093 => 452,  1089 => 450,  1074 => 448,  1070 => 447,  1067 => 446,  1065 => 445,  1059 => 442,  1053 => 439,  1047 => 436,  1044 => 435,  1042 => 434,  1037 => 432,  1031 => 429,  1025 => 426,  1019 => 423,  1013 => 420,  1007 => 417,  1001 => 414,  995 => 411,  989 => 408,  983 => 405,  977 => 402,  971 => 399,  965 => 396,  959 => 393,  953 => 390,  947 => 387,  941 => 384,  935 => 381,  929 => 378,  923 => 375,  917 => 372,  911 => 369,  908 => 368,  902 => 365,  896 => 362,  890 => 359,  884 => 356,  881 => 355,  879 => 354,  874 => 352,  868 => 349,  862 => 346,  856 => 343,  850 => 340,  844 => 337,  841 => 336,  835 => 333,  829 => 330,  824 => 329,  822 => 328,  817 => 326,  814 => 325,  801 => 317,  795 => 314,  788 => 310,  782 => 307,  776 => 304,  770 => 301,  764 => 298,  758 => 295,  752 => 292,  746 => 289,  740 => 286,  734 => 283,  728 => 280,  720 => 275,  714 => 272,  708 => 269,  702 => 266,  696 => 263,  686 => 256,  680 => 253,  674 => 250,  668 => 247,  662 => 244,  656 => 241,  649 => 236,  643 => 234,  639 => 232,  606 => 229,  591 => 227,  579 => 226,  573 => 225,  569 => 224,  557 => 223,  553 => 222,  550 => 221,  533 => 220,  526 => 216,  522 => 215,  518 => 214,  514 => 213,  510 => 212,  506 => 211,  501 => 208,  499 => 207,  492 => 205,  485 => 201,  481 => 200,  476 => 198,  473 => 197,  471 => 196,  464 => 192,  458 => 189,  455 => 188,  449 => 185,  443 => 182,  436 => 178,  429 => 174,  423 => 171,  417 => 168,  411 => 165,  405 => 162,  399 => 159,  396 => 158,  394 => 157,  389 => 155,  384 => 152,  378 => 149,  372 => 146,  369 => 145,  367 => 144,  362 => 142,  358 => 141,  352 => 138,  346 => 135,  340 => 132,  334 => 129,  328 => 126,  324 => 124,  315 => 121,  313 => 120,  309 => 119,  303 => 116,  297 => 113,  291 => 110,  285 => 107,  279 => 104,  273 => 101,  267 => 98,  261 => 95,  255 => 92,  249 => 89,  243 => 86,  237 => 83,  231 => 80,  225 => 77,  219 => 74,  213 => 71,  207 => 68,  201 => 65,  196 => 62,  190 => 60,  188 => 59,  184 => 58,  180 => 57,  175 => 56,  170 => 54,  166 => 53,  162 => 52,  157 => 51,  155 => 50,  151 => 49,  147 => 48,  137 => 44,  128 => 41,  125 => 40,  121 => 39,  112 => 36,  109 => 35,  105 => 34,  99 => 31,  96 => 30,  94 => 29,  91 => 28,  85 => 26,  80 => 25,  77 => 24,  57 => 8,  52 => 7,  49 => 6,  43 => 4,  35 => 3,  31 => 1,  29 => 5,  11 => 1,);
    }
}
