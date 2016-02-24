<?php

/* NewscoopNewscoopBundle:Topics:index.html.twig */
class __TwigTemplate_a89f5d955576c653608af7ce0240adc1cd80e12eca00ab2b9c55cb9777b104e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NewscoopNewscoopBundle::admin_layout.html.twig", "NewscoopNewscoopBundle:Topics:index.html.twig", 1);
        $this->blocks = array(
            'admin_title' => array($this, 'block_admin_title'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.title", array(), "topics"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("admin_title", $context, $blocks);
    }

    // line 4
    public function block_admin_page_title_box($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        if (((isset($context["compactView"]) ? $context["compactView"] : null) == false)) {
            // line 6
            echo "      <div class=\"toolbar row\"><span class=\"article-title\">
    ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.title", array(), "topics"), "html", null, true);
            echo "
  </span></div>
  ";
        }
    }

    // line 11
    public function block_admin_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/css/angular-ui-tree.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/css/bootstrap-custom.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/css/new-design.css"), "html", null, true);
        echo "\">
<style>
.font-fix {
    font-size: 12px;
}
</style>
";
    }

    // line 21
    public function block_admin_scripts($context, array $blocks = array())
    {
        // line 22
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : null), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/bundles/newscoopnewscoop/js/popover.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/angular.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/angular-ui-tree.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/highlight.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/angular-ui-tree-filter.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/checklist-model.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/tree.js"), "html", null, true);
        echo "\"></script>
<script src=\"/js/admin.js\"></script>
";
    }

    // line 31
    public function block_admin_page_menu_bar($context, array $blocks = array())
    {
        // line 32
        echo "  ";
        if (((isset($context["compactView"]) ? $context["compactView"] : null) == false)) {
            // line 33
            echo "    ";
            $this->displayParentBlock("admin_page_menu_bar", $context, $blocks);
            echo "
  ";
        }
    }

    // line 36
    public function block_admin_content($context, array $blocks = array())
    {
        // line 37
        echo "
<div class=\"system_pref topics\" ng-app=\"treeApp\" ng-controller=\"treeCtrl\" ng-cloak>
";
        // line 39
        if ((isset($context["compactView"]) ? $context["compactView"] : null)) {
            // line 40
            echo "<div class=\"fixed-top topics-top\">
  <button class=\"button right-floated with-margin-top\" type=\"button\" ng-click=\"attachTopics('";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["articleNumber"]) ? $context["articleNumber"] : null), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, (isset($context["articleLanguage"]) ? $context["articleLanguage"] : null), "html", null, true);
            echo "')\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.btn.saveandclose", array(), "topics"), "html", null, true);
            echo "</button>
  <button class=\"button right-floated with-margin-top\" onclick=\"parent.\$.fancybox.close(); return false;\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.btn.close", array(), "topics"), "html", null, true);
            echo "</button>
  <h3>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.title", array(), "topics"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.attachtopics", array(), "topics"), "html", null, true);
            echo "</h3>
  </div>
";
        } else {
            // line 46
            echo "
";
            // line 47
            echo $this->env->getExtension('newscoop_extension')->renderTip($this->env->getExtension('translator')->trans("topics.tip", array(), "topics"));
            echo "

";
        }
        // line 50
        echo "<div class=\"container\">
<div class=\"row\" ng-init=\"dim=false; highlight=true; ";
        // line 51
        if ((isset($context["compactView"]) ? $context["compactView"] : null)) {
            echo "onFilterLanguageChange('";
            echo twig_escape_filter($this->env, (isset($context["articleLanguage"]) ? $context["articleLanguage"] : null), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, (isset($context["articleNumber"]) ? $context["articleNumber"] : null), "html", null, true);
            echo "')";
        } else {
            echo "loadTopicsTree()";
        }
        echo "\">
        <div class=\"col-sm-4\">
            <h3>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.label.addroot", array(), "topics"), "html", null, true);
        echo "</h3>
            <div class=\"alert alert-danger\" ng-show=\"addTopicForm.title.\$error.maxlength\" role=\"alert\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.toolong", array(), "topics"), "html", null, true);
        echo "</div>
            <div class=\"alert alert-danger\" ng-show=\"addTopicForm.title.\$error.minlength\" role=\"alert\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.tooshort", array(), "topics"), "html", null, true);
        echo "</div>
            <form class=\"form-inline\" name=\"addTopicForm\" ng-submit=\"addNewTopic()\" role=\"form\">
                <div class=\"row\">
                  <div class=\"col-lg-12\">
                    <div class=\"form-group\">
                      <input type=\"text\" name=\"title\" ng-model=\"formData.title\" required ng-minlength=\"1\" ng-maxlength=\"60\" class=\"form-control input-sm\" id=\"addNewTopic\" placeholder=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.label.topicname", array(), "topics"), "html", null, true);
        echo "\">
                      <button ng-disabled=\"addTopicForm.\$invalid\" type=\"submit\" class=\"btn btn-sm btn-primary\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.btn.add", array(), "topics"), "html", null, true);
        echo "</button>
                      </div>
                    </div>
                </div>
            </form>
        </div>
        <div class=\"col-sm-4\">
            <h3>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.label.search", array(), "topics"), "html", null, true);
        echo "</h3>
            <form class=\"form-inline\" name=\"searchForm\" role=\"form\">
                <input type=\"search\" class=\"form-control search input-sm\" placeholder=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.label.filterplaceholder", array(), "topics"), "html", null, true);
        echo "\"  ng-model=\"pattern\">
            </form>
        </div>
        <div class=\"col-sm-4\">
          ";
        // line 74
        if (((isset($context["compactView"]) ? $context["compactView"] : null) == false)) {
            // line 75
            echo "          <h3>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.label.filterbylang", array(), "topics"), "html", null, true);
            echo "</h3>
          <form class=\"form-inline\" name=\"filterForm\" role=\"form\">
            <select ng-model=\"langSelected\" ng-options='language.code as (language.name + \" [\" + language.code + \"]\") for language in languageList' ng-change=\"onFilterLanguageChange(langSelected)\" class=\"form-control input-sm\">
            <option value=\"\">";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.label.all", array(), "topics"), "html", null, true);
            echo "</option>
            </select>
          </form>
          ";
        }
        // line 82
        echo "        </div>
  </div>
        <div class=\"row\">
          <div class=\"col-lg-12\"> 
            <h3>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.label.tree", array(), "topics"), "html", null, true);
        echo "
            <div class=\"expand-btn pull-right\">
                <span class=\"label\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.label.expandcollapse", array(), "topics"), "html", null, true);
        echo "</span>
                <button type=\"button\" class=\"btn btn-default btn-sm\" title=\"Expand/collapse tree\" ng-click=\"expandCollapseAll(this)\"><span class=\"glyphicon glyphicon-resize-vertical\"></span></button>
              </div>
            </h3>
            <!-- Nested node template -->
            <script type=\"text/ng-template\" id=\"nodes_renderer.html\">
              <div ui-tree-handle ng-class=\"{'active': editing || addingSubtopic}\" class=\"tree-node tree-node-content angular-ui-tree-handle\" ";
        // line 94
        if ((isset($context["compactView"]) ? $context["compactView"] : null)) {
            echo "style=\"cursor:auto\" ng-style=\"{ background: node.attached ? '#E1E9EF' : '#f2f2f2' }\"";
        }
        echo ">
              <div class=\"pull-right btn-group\">
                <a data-nodrag ng-click=\"startEditing(this)\" class=\"btn btn-default btn-sm\" ng-class=\"{'active': editing}\"><span title=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.btn.edit", array(), "topics"), "html", null, true);
        echo "\" class=\"glyphicon glyphicon-pencil\"></span></a>
                <a data-nodrag ng-click=\"showNewSubtopicBox(this)\" class=\"btn btn-default btn-sm\" ng-class=\"{'active': addingSubtopic}\"><span title=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.label.addsubtopic", array(), "topics"), "html", null, true);
        echo "\" class=\"glyphicon glyphicon-plus\"></span></a>
                ";
        // line 98
        if (((isset($context["compactView"]) ? $context["compactView"] : null) == false)) {
            // line 99
            echo "                <a data-nodrag ng-click=\"removeTopicAlert(node.id)\" data-toggle=\"modal\" data-target=\"#removeAlert\" class=\"btn btn-default btn-sm\"><span title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.btn.remove", array(), "topics"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-trash\"></span></a>
                ";
        }
        // line 101
        echo "              </div>
                <div class=\"drag-bar\" ";
        // line 102
        if ((isset($context["compactView"]) ? $context["compactView"] : null)) {
            echo "style=\"display: none;\"";
        }
        echo "></div>
                <a data-nodrag ng-click=\"toggleTopic(this, node)\" class=\"pointer\"><span ng-if=\"node.__children.length > 0\" class=\"glyphicon\" ng-class=\"{'glyphicon-chevron-right': !collapsed, 'glyphicon-chevron-down': collapsed || node.hasAttachedSubtopic || showExpanded}\"></span></a>

                <div class=\"default-wrap\" ";
        // line 105
        if ( !(isset($context["compactView"]) ? $context["compactView"] : null)) {
            echo "ng-if=\"!editing\"";
        }
        echo ">
                  ";
        // line 106
        if ((isset($context["compactView"]) ? $context["compactView"] : null)) {
            echo "<input type=\"checkbox\" id=\"selectedCheckbox\" checklist-model=\"selectedTopics.ids\" checklist-value=\"node.id\" class=\"topic-marker\" />";
        }
        // line 107
        echo "                  <span ng-bind-html=\"node.title | highlight:pattern | trust\" class=\"ng-binding\" ";
        if ((isset($context["compactView"]) ? $context["compactView"] : null)) {
            echo "style=\"margin-left: 20px;\"";
        }
        echo "></span>
                  <ul ng-if=\"!editing\" class=\"list-group\" ng-model=\"node.translations\" ng-init=\"setLanguageLabel(node, '";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
        echo "')\">
                      <li class=\"list-group-item\" ng-class=\"{'active': node.activeLabel, 'fallback': languageCode != node.locale && !node.activeLabel && node.fallback}\" ng-repeat=\"node in node.translations\">
                          <span class=\"badge ng-binding\">{[{ node.locale }]}</span>
                      </li>
                  </ul>
                </div>
                <div class=\"node-add-subtopic-div\" ng-if=\"addingSubtopic\" data-nodrag style=\"cursor:auto\">
                <h3>";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.label.addsubtopic", array(), "topics"), "html", null, true);
        echo "</h3>
                  <div class=\"node-edit-div\" data-nodrag>
                    <div class=\"form-group\">
                      <form name=\"addSubTopicForm\" class=\"form-inline\" role=\"form\" novalidate>
                          <div class=\"alert alert-danger\" ng-show=\"addSubTopicForm.title.\$error.maxlength\" role=\"alert\">";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.toolong", array(), "topics"), "html", null, true);
        echo "</div>
                          <div class=\"alert alert-danger\" ng-show=\"addSubTopicForm.title.\$error.minlength\" role=\"alert\">";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.tooshort", array(), "topics"), "html", null, true);
        echo "</div>
                          <div class=\"form-group\">
                            <input type=\"text\" name=\"title\" required ng-minlength=\"1\" ng-maxlength=\"60\" class=\"form-control input-sm\" ng-model=\"node.newChild[node.id]\" placeholder=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.label.subtopicname", array(), "topics"), "html", null, true);
        echo "\">
                            <button type=\"submit\" ng-disabled=\"addSubTopicForm.\$invalid\" class=\"btn btn-sm btn-default\" ng-click=\"addNewTopic(this)\">";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.btn.add", array(), "topics"), "html", null, true);
        echo "</button>
                          </div>
                        </form>
                    </div>
                  </div>
                </div>
                <div class=\"node-edit-div\" data-nodrag ng-if=\"editing\" data-nodrag style=\"cursor:auto\">
                  <div class=\"form-group\">
                    <form name=\"editTopicForm\" class=\"form-inline\" role=\"form\" novalidate>
                      <div class=\"alert alert-danger\" ng-show=\"editTopicForm.title.\$error.maxlength\" role=\"alert\">";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.toolong", array(), "topics"), "html", null, true);
        echo "</div>
                      <div class=\"alert alert-danger\" ng-show=\"editTopicForm.title.\$error.minlength\" role=\"alert\">";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.tooshort", array(), "topics"), "html", null, true);
        echo "</div>
                        <input type=\"text\" name=\"title\" required ng-minlength=\"1\" ng-maxlength=\"60\" class=\"form-control input-sm\" placeholder=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.label.topicname", array(), "topics"), "html", null, true);
        echo "\" ng-model=\"node.title\">
                      <button type=\"submit\" ng-disabled=\"editTopicForm.\$invalid\" class=\"btn btn-sm btn-default\" ng-click=\"updateTopic(node)\">";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.btn.save", array(), "topics"), "html", null, true);
        echo "</button>
                    </form>
                  </div>
                </div>
                <div class=\"node-lang-div\" ng-if=\"editing\" data-nodrag style=\"cursor:auto\">
                    <h3>";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.label.addtranslation", array(), "topics"), "html", null, true);
        echo "</h3>
                    <form name=\"addTranslationForm\" class=\"form-inline\" role=\"form\" novalidate>
                            <div class=\"alert alert-danger\" ng-show=\"addTranslationForm.title.\$error.maxlength\" role=\"alert\">";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.toolong", array(), "topics"), "html", null, true);
        echo "</div>
                            <div class=\"alert alert-danger\" ng-show=\"addTranslationForm.title.\$error.minlength\" role=\"alert\">";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.tooshort", array(), "topics"), "html", null, true);
        echo "</div>
                            <div class=\"form-group\">
                              <select ng-model=\"languageSelected\" ng-options=\"language.name for language in languageList\" ng-change=\"onLanguageChange(languageSelected)\" class=\"form-control input-sm\" style=\"width: 160px\" required>
                                <option value=\"\">";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.label.choose", array(), "topics"), "html", null, true);
        echo "</option>
                              </select>
                              <input type=\"text\" name=\"title\" required ng-minlength=\"1\" ng-maxlength=\"60\" class=\"form-control input-sm\" ng-model=\"node.newTranslation[node.id]\" placeholder=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.label.translationstring", array(), "topics"), "html", null, true);
        echo "\">
                              <button type=\"submit\" ng-disabled=\"addTranslationForm.\$invalid\" class=\"btn btn-sm btn-default\" ng-click=\"addTranslation(node)\">";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.btn.add", array(), "topics"), "html", null, true);
        echo "</button>
                            </div>
                      </form>
                      <h3>";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.label.topictranslations", array(), "topics"), "html", null, true);
        echo "</h3>
                      <ul class=\"lang-list\" ng-model=\"node.translations\">
                          <li ng-repeat=\"node in node.translations\">
                            <div>
                              <span class=\"badge\">{[{ node.locale }]}</span>
                              {[{ node.content }]}
                              <a data-nodrag class=\"remove-translation\" ng-click=\"removeTranslation(node.id)\"><span title=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.btn.removetrans", array(), "topics"), "html", null, true);
        echo "\" class=\"glyphicon glyphicon-remove\"></span></a>
                            </div>
                          </li>
                      </ul>
                </div>
                <div class=\"button-close\" ng-show=\"editing || addingSubtopic\">
                  <a class=\"btn btn-sm btn-default\" data-nodrag ng-click=\"hideExtraOptions(this)\"><span title=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.btn.hide", array(), "topics"), "html", null, true);
        echo "\" class=\"glyphicon glyphicon-chevron-up\"></span></a>
                </div>
              </div>
              <ol ui-tree-nodes ng-model=\"node.__children\" ng-class=\"{hidden: !showExpanded && !collapsed && !pattern && !node.hasAttachedSubtopic }\" ng-if=\"collapsed || node.hasAttachedSubtopic || ex\">
                  <li ng-repeat=\"node in node.__children\" ui-tree-node ng-include=\"'nodes_renderer.html'\">

                  </li>
              </ol>
            </script>
            <div ui-tree=\"treeOptions\" ";
        // line 173
        if ((isset($context["compactView"]) ? $context["compactView"] : null)) {
            echo "data-drag-enabled=\"false\"";
        }
        echo " id=\"tree-root\">
              <ol ui-tree-nodes ng-model=\"data\">
                <li ng-repeat=\"node in data\" ui-tree-node ng-include=\"'nodes_renderer.html'\" ng-hide=\"!treeFilter(node, pattern, supportedFields, this) && !dim\" ng-class=\"{'filtered-out':!treeFilter(node, pattern, supportedFields, this) && dim}\"></li>
              </ol>
            </div>
            <!-- Modal -->
            <div class=\"modal fade\" id=\"removeAlert\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"removeAlertLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.btn.close", array(), "topics"), "html", null, true);
        echo "</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.alerts.beforedelete", array(), "topics"), "html", null, true);
        echo "</h4>
                  </div>
                  <div class=\"modal-body\" style=\"font-size: 14px;\">
                    ";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.alerts.beforedeleteinfo", array(), "topics"), "html", null, true);
        echo "
                  </div>
                  <div class=\"modal-body attached-info\" style=\"font-size: 14px; display: none;\">
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.btn.close", array(), "topics"), "html", null, true);
        echo "</button>
                    <button type=\"button\" ng-click=\"removeTopic()\" ng-disabled=\"deleteDisabled\" class=\"btn btn-danger\">";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topics.btn.remove", array(), "topics"), "html", null, true);
        echo "</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
<script>
    var token = \"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('newscoop_extension')->getCsrfToken(), "html", null, true);
        echo "\";
</script>
";
    }

    // line 206
    public function block_admin_page_footer_box($context, array $blocks = array())
    {
        // line 207
        echo "  ";
        if (((isset($context["compactView"]) ? $context["compactView"] : null) == false)) {
            // line 208
            echo "    ";
            $this->displayParentBlock("admin_page_footer_box", $context, $blocks);
            echo "
  ";
        }
    }

    public function getTemplateName()
    {
        return "NewscoopNewscoopBundle:Topics:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 208,  499 => 207,  496 => 206,  489 => 203,  476 => 193,  472 => 192,  464 => 187,  458 => 184,  454 => 183,  439 => 173,  427 => 164,  418 => 158,  409 => 152,  403 => 149,  399 => 148,  394 => 146,  388 => 143,  384 => 142,  379 => 140,  371 => 135,  367 => 134,  363 => 133,  359 => 132,  347 => 123,  343 => 122,  338 => 120,  334 => 119,  327 => 115,  317 => 108,  310 => 107,  306 => 106,  300 => 105,  292 => 102,  289 => 101,  283 => 99,  281 => 98,  277 => 97,  273 => 96,  266 => 94,  257 => 88,  252 => 86,  246 => 82,  239 => 78,  232 => 75,  230 => 74,  223 => 70,  218 => 68,  208 => 61,  204 => 60,  196 => 55,  192 => 54,  188 => 53,  175 => 51,  172 => 50,  166 => 47,  163 => 46,  155 => 43,  151 => 42,  143 => 41,  140 => 40,  138 => 39,  134 => 37,  131 => 36,  123 => 33,  120 => 32,  117 => 31,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  94 => 24,  90 => 23,  85 => 22,  82 => 21,  71 => 14,  67 => 13,  62 => 12,  59 => 11,  51 => 7,  48 => 6,  45 => 5,  42 => 4,  34 => 3,  11 => 1,);
    }
}
