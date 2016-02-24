<?php

/* NewscoopNewscoopBundle:Plugins:index.html.twig */
class __TwigTemplate_88ef2b8161f50425d2b1b069dfe5d4f6f392d0c8fa748f595cdbf72e94eca309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NewscoopNewscoopBundle::admin_layout.html.twig", "NewscoopNewscoopBundle:Plugins:index.html.twig", 1);
        $this->blocks = array(
            'admin_title' => array($this, 'block_admin_title'),
            'admin_page_title_box' => array($this, 'block_admin_page_title_box'),
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_admin_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.manager", array(), "plugins_manager"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("admin_title", $context, $blocks);
    }

    // line 5
    public function block_admin_page_title_box($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"toolbar row\">
<span class=\"article-title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.manager", array(), "plugins_manager"), "html", null, true);
        echo "</span>

<div class=\"pull-right\">
    <div class=\"actions\">
        <ul class=\"navigation\" style=\"height: auto;\">
            <li>
                <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('newscoop_extension')->generateZendUrl("plugins", "manage.php", "admin"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.legacy_manager", array(), "plugins_manager"), "html", null, true);
        echo "</a>
            </li>
        </ul>
    </div>
</div>
</div>
";
    }

    // line 21
    public function block_admin_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/select2/select2.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : null), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/bundles/newscoopnewscoop/css/bootstrap.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : null), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/bundles/newscoopnewscoop/css/DT_bootstrap.css\">
<style type=\"text/css\">
.tabs-left > .nav-tabs {min-height: 150px;}
li:after {content: none;}
</style>
";
    }

    // line 31
    public function block_admin_scripts($context, array $blocks = array())
    {
        // line 32
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : null), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/bundles/newscoopnewscoop/js/popover.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : null), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/bundles/newscoopnewscoop/js/DT_bootstrap.js\"></script>
<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/select2/select2.js"), "html", null, true);
        echo "\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/admin-style/action_buttons.css"), "html", null, true);
        echo "\">
";
    }

    // line 38
    public function block_admin_content($context, array $blocks = array())
    {
        // line 39
        echo "
";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 41
            echo "    <script type=\"text/javascript\">
        flashMessage('";
            // line 42
            echo $context["message"];
            echo "', 'error', true);
    </script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 47
            echo "    <script type=\"text/javascript\">
        flashMessage('";
            // line 48
            echo $context["message"];
            echo "');
    </script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
<div class=\"system_pref\">
    <div class=\"tabbable tabs-left\"> 
        <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#public_plugins\" data-toggle=\"tab\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.public_plugins", array(), "plugins_manager"), "html", null, true);
        echo "</a></li>
            <li><a href=\"#private_plugins\" data-toggle=\"tab\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.private_plugins", array(), "plugins_manager"), "html", null, true);
        echo "</a></li>
        </ul>
        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"public_plugins\">
                <fieldset class=\"filters\">
                    <legend>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.install.public", array(), "plugins_manager"), "html", null, true);
        echo "</legend>

                    <div class=\"plugins-search\" style=\"width: 100%;margin-right: 20px;float: left;\">
                        <div style=\"width: 600px;\" class=\"search-for-plugins\"></div>
                    </div>

                    <div class=\"choosen-plugin-info\" style=\"margin-top: 40px; margin-bottom: 25px;\"></div>
                    <div id=\"instructions\" style=\"display: none\">
                        <ul class=\"list-group\">
                        <h5>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.install", array(), "plugins_manager"), "html", null, true);
        echo "</h5>
                        <li class=\"list-group-item\">
                            <strong>1.</strong> ";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.openterminal", array(), "plugins_manager"), "html", null, true);
        echo ": <strong>cd ";
        echo twig_escape_filter($this->env, (isset($context["newscoopPath"]) ? $context["newscoopPath"] : null), "html", null, true);
        echo "</strong> <button type=\"button\" class=\"btn btn-default btn-xs\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.copy", array(), "plugins_manager"), "html", null, true);
        echo "\" onclick=\"copyToClipboard('cd ";
        echo twig_escape_filter($this->env, (isset($context["newscoopPath"]) ? $context["newscoopPath"] : null), "html", null, true);
        echo "')\"><span class=\"glyphicon glyphicon-share\"></span></button>
                        </li>
                        <li class=\"list-group-item\">
                              <strong>2.</strong> ";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.runcommand", array(), "plugins_manager"), "html", null, true);
        echo ": <strong><span id=\"plugin-command\"></span></strong>
                              <button type=\"button\" class=\"btn btn-default btn-xs\" title=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.copy", array(), "plugins_manager"), "html", null, true);
        echo "\" onclick=\"copyToClipboard('plugin-command')\"><span class=\"glyphicon glyphicon-share\"></span></button>
                        </li>
                        <li class=\"list-group-item\">
                              <strong>3.</strong> ";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.installassets", array(), "plugins_manager"), "html", null, true);
        echo ": <strong>php application/console assets:install public/</strong>
                              <button type=\"button\" class=\"btn btn-default btn-xs\" title=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.copy", array(), "plugins_manager"), "html", null, true);
        echo "\" onclick=\"copyToClipboard('php application/console assets:install public/')\"><span class=\"glyphicon glyphicon-share\"></span></button>
                        </li>
                        <li class=\"list-group-item\">
                              <strong>4.</strong> ";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.installed", array(), "plugins_manager"), "html", null, true);
        echo "</strong>
                        </li>
                        </ul>
                    </div>
                </fieldset>
                <div class=\"clear:both;\"></div>


                <div id=\"manage-plugins\" style=\"padding: 10px 10px 30px 10px; border: 1px solid #ccc; background-color: #FFF;\">
                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"datatable table table-striped table-bordered\" id=\"pluginsTable\">
                        <thead>
                            <tr>
                                <th>";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.installed_table.name", array(), "plugins_manager"), "html", null, true);
        echo "</th>
                                <th style=\"width: 25%;\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.installed_table.description", array(), "plugins_manager"), "html", null, true);
        echo "</th>
                                <th style=\"width: 30%;\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.installed_table.enabled", array(), "plugins_manager"), "html", null, true);
        echo "</th>
                                <th>";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.installed_table.version", array(), "plugins_manager"), "html", null, true);
        echo "</th>
                                <th>";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.installed_table.license", array(), "plugins_manager"), "html", null, true);
        echo "</th>
                                <th style=\"width: 14%;\">";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.installed_table.installed_at", array(), "plugins_manager"), "html", null, true);
        echo "</th>
                                <th style=\"width: 14%;\">";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.installed_table.updated_at", array(), "plugins_manager"), "html", null, true);
        echo "</th>
                                <th style=\"width: 15%;\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.installed_table.actions", array(), "plugins_manager"), "html", null, true);
        echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allAvailablePlugins"]) ? $context["allAvailablePlugins"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
            // line 107
            echo "                            <tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "id", array()), "html", null, true);
            echo "\">
                                <td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", array()), "html", null, true);
            echo "</td>
                                <td style=\"width: 25%;\">";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "description", array()), "html", null, true);
            echo "</td>
                                <td style=\"text-align: center; width: 50px;\"><input type=\"checkbox\" ";
            // line 110
            if ($this->getAttribute($context["plugin"], "enabled", array())) {
                echo "checked=\"true\"";
            }
            echo " value=\"1\" class=\"change-status\" data-plugin-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "id", array()), "html", null, true);
            echo "\"/></td>
                                <td style=\"text-align: center\">";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "version", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "license", array()), "html", null, true);
            echo "</td>
                                <td style=\"width: 14%;\">";
            // line 113
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["plugin"], "installedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                                <td style=\"width: 14%;\">";
            // line 114
            if ($this->getAttribute($context["plugin"], "updatedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["plugin"], "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            } else {
                echo " ";
            }
            echo "</td>
                                <td style=\"width: 12%; text-align: center;\">
                                    <button data-toggle=\"modal\" data-target=\"#popupModal\" data-type=\"update\" data-command=\"php application/console plugins:update\" type=\"button\" class=\"btn btn-default btn-xs\" title=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.installed_table.update_plugin", array(), "plugins_manager"), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-repeat\"></span></button>

                                    <button type=\"button\" data-type=\"remove\" data-toggle=\"modal\" data-target=\"#popupModal\" data-command=\"php application/console plugins:remove\" class=\"btn btn-default btn-xs\" title=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.installed_table.remove_plugin", array(), "plugins_manager"), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove\"></span></button>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"tab-pane\" id=\"private_plugins\">
                ";
        // line 127
        if ((isset($context["privatePluginsPathWritable"]) ? $context["privatePluginsPathWritable"] : null)) {
            // line 128
            echo "                <fieldset class=\"filters\">
                    <legend>";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.upload.private", array(), "plugins_manager"), "html", null, true);
            echo "</legend>

                    <form method=\"post\" role=\"form\" action=\"\" enctype=\"multipart/form-data\">
                        <div class=\"form-group\">
                            ";
            // line 133
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "package", array()), 'label');
            echo "
                            ";
            // line 134
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "package", array()), 'widget');
            echo "
                        </div>
                        <div class=\"form-group\">
                            ";
            // line 137
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "upload", array()), 'label');
            echo "
                            ";
            // line 138
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "upload", array()), 'widget', array("attr" => array("class" => "btn btn-xs btn-default")));
            echo "
                        </div>
                        ";
            // line 140
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "
                    </form>
                    <!-- class=\"form-inline\" -->
                </fieldset>
                ";
        } else {
            // line 145
            echo "                <div class=\"uploaded-plugins\" style=\"margin-bottom: 50px; padding: 10px 10px 30px 10px; border: 1px solid #ccc; background-color: #FFF;\">
                <div class=\"alert alert-danger\" style=\"font-size: 14px;\" role=\"alert\">";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.private_plugins_not_writable", array("%privatePluginsPath%" => (isset($context["privatePluginsPath"]) ? $context["privatePluginsPath"] : null)), "plugins_manager"), "html", null, true);
            echo "</div>
                <p>";
            // line 147
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.private_plugins_not_writable_commands", array(), "plugins_manager"), "html", null, true);
            echo "</p>
                <pre>chgrp www-data ";
            // line 148
            echo twig_escape_filter($this->env, (isset($context["privatePluginsPath"]) ? $context["privatePluginsPath"] : null), "html", null, true);
            echo "
chmod g+w ";
            // line 149
            echo twig_escape_filter($this->env, (isset($context["privatePluginsPath"]) ? $context["privatePluginsPath"] : null), "html", null, true);
            echo "</pre>
                </div>
                ";
        }
        // line 152
        echo "
                <div class=\"uploaded-plugins\" style=\"margin-bottom: 50px; padding: 10px 10px 30px 10px; border: 1px solid #ccc; background-color: #FFF;\">
                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"datatable table table-striped table-bordered\" style=\"width: 100%\" id=\"privatePluginsTable\">
                        <thead>
                            <tr>
                                <th>";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.installed_table.name", array(), "plugins_manager"), "html", null, true);
        echo "</th>
                                <th>";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.installed_table.description", array(), "plugins_manager"), "html", null, true);
        echo "</th>
                                <th>";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.installed_table.version", array(), "plugins_manager"), "html", null, true);
        echo "</th>
                                <th>";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.installed_table.license", array(), "plugins_manager"), "html", null, true);
        echo "</th>
                                <th style=\"text-align: center;\">";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.installed_table.actions", array(), "plugins_manager"), "html", null, true);
        echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 165
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["privatePackages"]) ? $context["privatePackages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
            // line 166
            echo "                            <tr>
                                <td style=\"width: 20%;\">";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", array()), "html", null, true);
            echo "</td>
                                <td style=\"width: 35%;\">";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "description", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "version", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "license", array()), "html", null, true);
            echo "</td>
                                <td style=\"text-align: center;\">";
            // line 171
            if ( !$this->getAttribute($context["plugin"], "installed", array())) {
                echo "<button type=\"button\" data-type=\"install\" data-toggle=\"modal\" data-target=\"#popupModal\" data-command=\"php application/console plugins:install\" class=\"btn btn-default btn-xs\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.installed_table.install_plugin", array(), "plugins_manager"), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-ok-circle\"></span></button>";
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.installed_table.plugin_installed", array(), "plugins_manager"), "html", null, true);
            }
            // line 172
            echo "                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"popupModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"popupModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.close", array(), "plugins_manager"), "html", null, true);
        echo "\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"popupModalLabel\"></h4>
      </div>
      <div class=\"modal-body\">
        <ul class=\"list-group\" style=\"font-size: 12px\">
            <li class=\"list-group-item\">
                <strong>1.</strong> ";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.openterminal", array(), "plugins_manager"), "html", null, true);
        echo ": <br><strong>cd ";
        echo twig_escape_filter($this->env, (isset($context["newscoopPath"]) ? $context["newscoopPath"] : null), "html", null, true);
        echo "</strong> <button type=\"button\" class=\"btn btn-default btn-xs\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.copy", array(), "plugins_manager"), "html", null, true);
        echo "\" onclick=\"copyToClipboard('cd ";
        echo twig_escape_filter($this->env, (isset($context["newscoopPath"]) ? $context["newscoopPath"] : null), "html", null, true);
        echo "')\"><span class=\"glyphicon glyphicon-share\"></span></button>
            </li>
            <li class=\"list-group-item\">
                <strong>2.</strong> ";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.runcommand", array(), "plugins_manager"), "html", null, true);
        echo ": <br><strong><span id=\"popup-plugin-command\"></span></strong>
                <button type=\"button\" class=\"btn btn-default btn-xs\" title=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.copy", array(), "plugins_manager"), "html", null, true);
        echo "\" onclick=\"copyToClipboard('popup-plugin-command')\"><span class=\"glyphicon glyphicon-share\"></span></button>
            </li>
            <li class=\"list-group-item\">
                <strong>3.</strong> ";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.installassets", array(), "plugins_manager"), "html", null, true);
        echo ": <br><strong>php application/console assets:install public/</strong>
                <button type=\"button\" class=\"btn btn-default btn-xs\" title=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.copy", array(), "plugins_manager"), "html", null, true);
        echo "\" onclick=\"copyToClipboard('php application/console assets:install public/')\"><span class=\"glyphicon glyphicon-share\"></span></button>
            </li>
            <li class=\"list-group-item\">
                    <strong>4.</strong> ";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.done", array(), "plugins_manager"), "html", null, true);
        echo "</strong>
            </li>
        </ul>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.close", array(), "plugins_manager"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\">
    \$('#popupModal').on('show.bs.modal', function(e) {
        var command = \$(e.relatedTarget).data('command');
        var type = \$(e.relatedTarget).data('type');
        var pluginName = \$(e.relatedTarget).parent().parent().find('td:first').text();
        \$(e.currentTarget).find('#popup-plugin-command').text(command+' \"'+pluginName+'\"');
        switch(type) {
            case 'update':
                \$(e.currentTarget).find('#popupModalLabel').text(\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.update", array(), "plugins_manager"), "html", null, true);
        echo "\");
                break;
            case 'remove':
                \$(e.currentTarget).find('#popupModalLabel').text(\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.remove", array(), "plugins_manager"), "html", null, true);
        echo "\");
                break;
            case 'install':
                \$(e.currentTarget).find('#popupModalLabel').text(\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.install", array(), "plugins_manager"), "html", null, true);
        echo "\");
                break;
            default:
        }
    });
    function pluginFormat(item) {
        var markup = \"<div><h5>\"+item.name+\"</h5><p>\"+item.description+\"</p><p>";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.downloads", array(), "plugins_manager"), "html", null, true);
        echo ":<span class=\\\"badge\\\">\"+item.downloads+\"</span>, ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.favers", array(), "plugins_manager"), "html", null, true);
        echo ": <span class=\\\"badge\\\">\"+item.favers+\"</span></p></div>\";
        return markup;
    };
    function pluginFormatSelection(item) { return item.name; }
    var initData = null;
    \$(\".search-for-plugins\").select2({
        placeholder: '";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.search_for_plugins", array(), "plugins_manager"), "html", null, true);
        echo "',
        minimumInputLength: null,
        id: function(item){return {id: item.name};},
        cache: true,
        ajax: {
            url: \"/admin/plugins/getPackagesFromPackagist\",
            dataType: 'json',
            data: function (term, page) {
                return {
                    q: term,
                };
            },
            results: function (data, page) {
                return {results: data.results};
            }
        },
        initSelection: function(element, callback) {
            var value = \$(element).val();
            var initData = null;
            callServer('ping', [], function(json) {
                \$.ajax(\"/admin/plugins/getPackagesFromPackagist\", {
                    data: {},
                    dataType: \"json\"
                }).done(function(data) { initData = data; callback(data.results); });
            }); // /ping
        },
        formatResult: pluginFormat, 
        formatSelection: pluginFormatSelection,
        dropdownCssClass: \"bigdrop\", 
       escapeMarkup: function (m) { return m; } 
   })
    .on(\"select2-selecting\", function(e) {
        var item = e.object;
       \$('.choosen-plugin-info').html(\"<div><h3>\"+item.name+\"</h3><p>\"+item.description+\"</p><p>";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.downloads", array(), "plugins_manager"), "html", null, true);
        echo ":<span class=\\\"badge\\\">\"+item.downloads+\"</span>, ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.favers", array(), "plugins_manager"), "html", null, true);
        echo ": <span class=\\\"badge\\\">\"+item.favers+\"</span></p></div>\");

        \$('span#plugin-command').html('');
        \$('span#plugin-command').append('php application/console plugins:install \"' + item.name +'\"');
        \$('#instructions').show();
    });
    \$('.change-status').change(function(){
        var checked = \$(this).attr('checked');
        var pluginId = \$(this).data('pluginId');
        var status = 'disable';
        if (checked) {
            status = 'enable';
        }

        callServer('ping', [], function(json) {
            \$.ajax(\"/admin/plugins/chnageStatus/\"+status+\"/\"+pluginId, {
                data: {},
                dataType: \"json\"
            }).done(function(data) { 
                console.table(data.results);
            });
        }); // /ping
    })

    \$('#subscriptionsTable').css('font-size', '13px');
    \$('#pluginsTable').dataTable({
        \"aoColumns\" : [
            null,
            { sWidth: '25%' },
            { sWidth: '30px' },
            null,
            null,
            { sWidth: '14%' },
            { sWidth: '14%' },
            { sWidth: '15%' },
        ],
        'oLanguage': {
            'oPaginate': {
                'sFirst': '";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.datatable.label.first", array(), "plugins_manager"), "html", null, true);
        echo "',
                'sNext': '";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.datatable.label.next", array(), "plugins_manager"), "html", null, true);
        echo "',
                'sPrevious': '";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.datatable.label.previous", array(), "plugins_manager"), "html", null, true);
        echo "',
                'sLast': '";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.datatable.label.last", array(), "plugins_manager"), "html", null, true);
        echo "',
            },
            'sZeroRecords': '";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.datatable.label.norecords", array(), "plugins_manager"), "html", null, true);
        echo "',
            'sSearch': '',
            'sInfo': '";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.datatable.table.info", array(), "plugins_manager"), "html", null, true);
        echo "',
            'sEmpty': '";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.datatable.table.noentries", array(), "plugins_manager"), "html", null, true);
        echo "',
            'sInfoFiltered': '";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.datatable.table.filtering", array(), "plugins_manager"), "html", null, true);
        echo "',
            'sLengthMenu': '";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.datatable.table.menu", array(), "plugins_manager"), "html", null, true);
        echo "',
            'sInfoEmpty': '',
        },
        \"bAutoWidth\": false,
        \"bPaging\": true,
    }).fnAdjustColumnSizing();

    \$('#privatePluginsTable').css('font-size', '13px');
    \$('#privatePluginsTable').dataTable({
        \"aoColumns\" : [
            { sWidth: '20%' },
            { sWidth: '35%' },
            null,
            null,
            null,
        ],
        'oLanguage': {
            'oPaginate': {
                'sFirst': '";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.datatable.label.first", array(), "plugins_manager"), "html", null, true);
        echo "',
                'sNext': '";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.datatable.label.next", array(), "plugins_manager"), "html", null, true);
        echo "',
                'sPrevious': '";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.datatable.label.previous", array(), "plugins_manager"), "html", null, true);
        echo "',
                'sLast': '";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.datatable.label.last", array(), "plugins_manager"), "html", null, true);
        echo "',
            },
            'sZeroRecords': '";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.datatable.label.norecords", array(), "plugins_manager"), "html", null, true);
        echo "',
            'sSearch': '',
            'sInfo': '";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.datatable.table.info", array(), "plugins_manager"), "html", null, true);
        echo "',
            'sEmpty': '";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.datatable.table.noentries", array(), "plugins_manager"), "html", null, true);
        echo "',
            'sInfoFiltered': '";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.datatable.table.filtering", array(), "plugins_manager"), "html", null, true);
        echo "',
            'sLengthMenu': '";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.datatable.table.menu", array(), "plugins_manager"), "html", null, true);
        echo "',
            'sInfoEmpty': '',
        },
        \"bAutoWidth\": false,
        \"bPaging\": true,
    }).fnAdjustColumnSizing();

    \$('.datatable').each(function(){
        var datatable = \$(this);
        var search_input = datatable.closest('.dataTables_wrapper').find('div[id\$=_filter] input');
        search_input.attr('placeholder', '";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.datatable.label.search", array(), "plugins_manager"), "html", null, true);
        echo "');
        search_input.addClass('form-control input-sm');
        var length_sel = datatable.closest('.dataTables_wrapper').find('div[id\$=_length] select');
        length_sel.addClass('form-control input-sm');
    });

    function copyToClipboard(text) {
        if (text == \"plugin-command\") {
            text = \$('#'+text).text();
        }

        if (text == \"popup-plugin-command\") {
            text = \$('#'+text).text();
        }
      window.prompt(\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("newscoop.plugins_manager.clipboard", array(), "plugins_manager"), "html", null, true);
        echo "\", text);
    }

</script>

";
    }

    public function getTemplateName()
    {
        return "NewscoopNewscoopBundle:Plugins:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  777 => 374,  760 => 360,  747 => 350,  743 => 349,  739 => 348,  735 => 347,  730 => 345,  725 => 343,  721 => 342,  717 => 341,  713 => 340,  692 => 322,  688 => 321,  684 => 320,  680 => 319,  675 => 317,  670 => 315,  666 => 314,  662 => 313,  658 => 312,  615 => 274,  579 => 241,  568 => 235,  559 => 229,  553 => 226,  547 => 223,  530 => 209,  522 => 204,  516 => 201,  512 => 200,  506 => 197,  502 => 196,  490 => 193,  481 => 187,  467 => 175,  459 => 172,  451 => 171,  447 => 170,  443 => 169,  439 => 168,  435 => 167,  432 => 166,  428 => 165,  421 => 161,  417 => 160,  413 => 159,  409 => 158,  405 => 157,  398 => 152,  392 => 149,  388 => 148,  384 => 147,  380 => 146,  377 => 145,  369 => 140,  364 => 138,  360 => 137,  354 => 134,  350 => 133,  343 => 129,  340 => 128,  338 => 127,  331 => 122,  321 => 118,  316 => 116,  307 => 114,  303 => 113,  299 => 112,  295 => 111,  287 => 110,  283 => 109,  279 => 108,  274 => 107,  270 => 106,  263 => 102,  259 => 101,  255 => 100,  251 => 99,  247 => 98,  243 => 97,  239 => 96,  235 => 95,  220 => 83,  214 => 80,  210 => 79,  204 => 76,  200 => 75,  188 => 72,  183 => 70,  171 => 61,  163 => 56,  159 => 55,  153 => 51,  144 => 48,  141 => 47,  137 => 46,  134 => 45,  125 => 42,  122 => 41,  118 => 40,  115 => 39,  112 => 38,  106 => 35,  102 => 34,  98 => 33,  93 => 32,  90 => 31,  80 => 24,  76 => 23,  71 => 22,  68 => 21,  55 => 13,  46 => 7,  43 => 6,  40 => 5,  32 => 4,  11 => 1,);
    }
}
