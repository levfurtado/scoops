<?php

/* NewscoopNewscoopBundle:BackendPublications:edit.html.twig */
class __TwigTemplate_14f75e315c1b86a0a78103926b398b70ce8ccd255d58d1ea7f3ea316eaee27fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NewscoopNewscoopBundle::admin_layout.html.twig", "NewscoopNewscoopBundle:BackendPublications:edit.html.twig", 1);
        $this->blocks = array(
            'admin_page_title_box' => array($this, 'block_admin_page_title_box'),
            'admin_title' => array($this, 'block_admin_title'),
            'admin_stylesheets' => array($this, 'block_admin_stylesheets'),
            'admin_content' => array($this, 'block_admin_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NewscoopNewscoopBundle::admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "NewscoopNewscoopBundle::form_fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_admin_page_title_box($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"toolbar row\">
    <span class=\"article-title\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : null), "html", null, true);
        echo "</span>
    <div class=\"pull-right\">
        <div class=\"actions\">
            <ul class=\"navigation\" style=\"height: auto;\">
                <a class=\"list-publications pull-left action-button\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("newscoop_newscoop_publications_index");
        echo "\">
                    <span class=\"glyphicon glyphicon-arrow-left\"></span> ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("publications.buttons.listPublications", array(), "pub"), "html", null, true);
        echo "
                </a>
                <li>
                    <a class=\"add\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("newscoop_newscoop_publications_add");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("publications.buttons.addNew", array(), "pub"), "html", null, true);
        echo "</a>
                </li>
                ";
        // line 17
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "data", array()), "id", array())) {
            // line 18
            echo "                    <a class=\"list-issues pull-left action-button\" href=\"/admin/issues/?Pub=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "data", array()), "id", array()), "html", null, true);
            echo "\">
                        ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("publications.buttons.listIssues", array(), "pub"), "html", null, true);
            echo " <span class=\"glyphicon glyphicon-arrow-right\"></span>
                    </a>
                ";
        }
        // line 22
        echo "            </ul>
        </div>
    </div>
</div>
";
    }

    // line 28
    public function block_admin_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : null), "html", null, true);
        echo " - ";
        $this->displayParentBlock("admin_title", $context, $blocks);
    }

    // line 30
    public function block_admin_stylesheets($context, array $blocks = array())
    {
        // line 31
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/admin-style/action_buttons.css"), "html", null, true);
        echo "\">
<style type=\"text/css\" media=\"screen\">
    .help-block{font-size: 13px;margin-bottom: 0px;}
    .checkbox-group .checkbox {padding-top: 3px;}
    .checkbox-group .checkbox label input {margin-right: 5px;}
    .ns_container input {background-color: #fff}
</style>
";
    }

    // line 40
    public function block_admin_content($context, array $blocks = array())
    {
        // line 41
        echo "<div class=\"row publications ns_container col-md-8\">
    ";
        // line 42
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors')) {
            // line 43
            echo "    <div class=\"alerts alert-danger\">
        ";
            // line 44
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
    </div>
    ";
        }
        // line 47
        echo "
    <div>
        ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal", "role" => "form")));
        echo "
        <div id=\"general_settings\" class=\"col-sm-6\" style=\"border-right: 1px solid #ccc;\">
            <h3>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("publications.general_settings", array(), "pub"), "html", null, true);
        echo "</h3>
            <div class=\"form-group\">
                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                <div class=\"col-sm-8\">
                  ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "defaultAlias", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                <div class=\"col-sm-6\">
                  ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "defaultAlias", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                  ";
        // line 62
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "data", array()), "id", array())) {
            // line 63
            echo "                  <span class=\"help-block\">
                    <a href=\"/admin/pub/aliases.php?Pub=";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "data", array()), "id", array()), "html", null, true);
            echo "\" target=\"_blank\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("publications.form_type.label.edit_aliases", array(), "pub"), "html", null, true);
            echo ")</a>
                  </span>
                  ";
        }
        // line 67
        echo "                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "language", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                <div class=\"col-sm-6\">
                  ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "language", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                  <span class=\"help-block\">
                    <a href=\"/admin/languages/\" target=\"_blank\">(";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("publications.form_type.label.edit_languages", array(), "pub"), "html", null, true);
        echo ")</a>
                  </span>
                </div>
            </div>
            <h3>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("publications.comments_settings", array(), "pub"), "html", null, true);
        echo "</h3>
            <div class=\"form-group\">
                <div class=\"col-sm-12\">
                    <div class=\"checkbox checkbox-group\">
                        <div class=\"checkbox\">";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "commentsEnabled", array()), 'widget', array("attr" => array("class" => "public-comments")));
        echo "</div>
                        <div class=\"checkbox child\" style=\"padding-left: 40px;\">";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "public_enabled", array()), 'widget', array("attr" => array("class" => "moderated-comments-public")));
        echo "</div>
                        <div class=\"checkbox child moderated-public\" style=\"padding-left: 60px;\">";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "commentsPublicModerated", array()), 'widget', array("attr" => array("class" => "enabled-comments-public")));
        echo "</div>
                        <div class=\"checkbox child \" style=\"padding-left: 40px;\">";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "commentsSubscribersModerated", array()), 'widget', array("attr" => array("class" => "moderated-comments")));
        echo "</div>
                        <div class=\"checkbox child moderated\" style=\"padding-left: 50px;\">
                            <div class=\"form-group\">
                                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "moderator_to", array()), 'label', array("label_attr" => array("class" => "col-sm-5 control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                                <div class=\"col-sm-6\">
                                  ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "moderator_to", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                                </div>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "moderator_from", array()), 'label', array("label_attr" => array("class" => "col-sm-5 control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                                <div class=\"col-sm-6\">
                                  ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "moderator_from", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"checkbox child\" style=\"padding-left: 40px;\">";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "commentsArticleDefaultEnabled", array()), 'widget');
        echo "</div>
                        <div class=\"checkbox child\" style=\"padding-left: 40px;\">";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "commentsCaptchaEnabled", array()), 'widget');
        echo "</div>
                        <div class=\"checkbox child\" style=\"padding-left: 40px;\">";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "commentsSpamBlockingEnabled", array()), 'widget');
        echo "</div>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"seo_settings\" class=\"col-sm-6\">
            <h3>";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("publications.seo_settings", array(), "pub"), "html", null, true);
        echo "</h3>
            <div class=\"form-group\">
                ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "urlTypeId", array()), 'label', array("label_attr" => array("class" => "col-sm-5 control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                <div class=\"col-sm-6\">
                  ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "urlTypeId", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "seoChoices", array()), 'label', array("label_attr" => array("class" => "col-sm-5 control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                <div class=\"col-sm-6\">
                    <div class=\"checkbox\">
                      <label>
                        ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "seoChoices", array()), 'widget');
        echo "
                      </label>
                    </div>
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metaTitle", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                <div class=\"col-sm-8\">
                  ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metaTitle", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metaKeywords", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                <div class=\"col-sm-8\">
                  ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metaKeywords", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metaDescription", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                <div class=\"col-sm-8\">
                  ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metaDescription", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <button type=\"submit\" class=\"save-button pull-right\">";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "messages"), "html", null, true);
        echo "</button>
        ";
        // line 146
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>
</div>
<script type=\"text/javascript\">
    \$('.public-comments').click(function(){
        if(\$(this).is(':checked')) {
            \$('.checkbox-group .checkbox.child input').attr('disabled', false);
            if (!\$('.moderated-comments').is(':checked')) {
                \$('.checkbox-group .checkbox.child.moderated input').attr('disabled', true);
            }
        } else {
            \$('.checkbox-group .checkbox.child input').attr('disabled', true);
        }
    });

    if (!\$('.moderated-comments-public').is(':checked')) {
        \$('.checkbox-group .checkbox.child.moderated-public input').attr('disabled', true);
        \$('.checkbox-group .checkbox.child.moderated input').attr('disabled', true);
    }

    \$('.moderated-comments').click(function(){
        if(\$(this).is(':checked')) {
            \$('.checkbox-group .checkbox.child.moderated input').attr('disabled', false);
        } else {
            \$('.checkbox-group .checkbox.child.moderated input').attr('disabled', true);
        }

        if (\$('.enabled-comments-public').is(':checked')) {
            \$('.checkbox-group .checkbox.child.moderated input').attr('disabled', false);
        }
    });

    \$('.moderated-comments-public').click(function(){
        if(\$(this).is(':checked')) {
            \$('.checkbox-group .checkbox.child.moderated-public input').attr('disabled', false);
        } else {
            if (!\$('.moderated-comments').is('checked')) {
                \$('.checkbox-group .checkbox.child.moderated-public input').attr('disabled', true);
                \$('.checkbox-group .checkbox.child.moderated-public input').prop('checked', false);
            }
        }
    });
    \$('.enabled-comments-public').click(function(){
        if(\$(this).is(':checked')) {
            \$('.checkbox-group .checkbox.child.moderated input').attr('disabled', false);
        } else {
            \$('.checkbox-group .checkbox.child.moderated input').attr('disabled', true);
        }

        if (\$('.moderated-comments').is(':checked')) {
            \$('.checkbox-group .checkbox.child.moderated input').attr('disabled', false);
        }
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "NewscoopNewscoopBundle:BackendPublications:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 146,  332 => 145,  324 => 140,  319 => 138,  312 => 134,  307 => 132,  300 => 128,  295 => 126,  286 => 120,  279 => 116,  272 => 112,  267 => 110,  262 => 108,  253 => 102,  249 => 101,  245 => 100,  238 => 96,  233 => 94,  226 => 90,  221 => 88,  215 => 85,  211 => 84,  207 => 83,  203 => 82,  196 => 78,  189 => 74,  184 => 72,  179 => 70,  174 => 67,  166 => 64,  163 => 63,  161 => 62,  157 => 61,  152 => 59,  145 => 55,  140 => 53,  135 => 51,  130 => 49,  126 => 47,  120 => 44,  117 => 43,  115 => 42,  112 => 41,  109 => 40,  96 => 31,  93 => 30,  85 => 28,  77 => 22,  71 => 19,  66 => 18,  64 => 17,  57 => 15,  51 => 12,  47 => 11,  40 => 7,  37 => 6,  34 => 5,  30 => 1,  28 => 2,  11 => 1,);
    }
}
