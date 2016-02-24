<?php

/* NewscoopNewscoopBundle::form_fields.html.twig */
class __TwigTemplate_fb7407fa1a676cac48a63ad28e0795f4d2df333c4867604023f29d5ced124961 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('radio_widget', $context, $blocks);
    }

    // line 1
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 5
            echo "        ";
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 6
                echo "            <div class=\"checkbox\">
        ";
            } else {
                // line 8
                echo "            <div class=\"radio\">
        ";
            }
            // line 10
            echo "
        ";
            // line 11
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 18
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 19
        ob_start();
        // line 20
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 21
            echo "    ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
        }
        // line 23
        echo "    <label  for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
        <input type=\"checkbox\" ";
        // line 24
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " />";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "
    </label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 29
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 30
        ob_start();
        // line 31
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 32
            echo "    ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
        }
        // line 34
        echo "    <label  for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
        <input type=\"radio\" ";
        // line 35
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " />";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "
    </label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "NewscoopNewscoopBundle::form_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  129 => 35,  124 => 34,  120 => 32,  118 => 31,  116 => 30,  113 => 29,  95 => 24,  90 => 23,  86 => 21,  84 => 20,  82 => 19,  79 => 18,  73 => 14,  64 => 11,  61 => 10,  57 => 8,  53 => 6,  50 => 5,  46 => 4,  41 => 3,  39 => 2,  36 => 1,  32 => 29,  29 => 28,  27 => 18,  24 => 17,  22 => 1,);
    }
}
