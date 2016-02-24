<?php

/* NewscoopNewscoopBundle::admin_menu.html.twig */
class __TwigTemplate_3fe7545af10b48e5b728f129089d1a4b15b0fd6973cb5c8f3fc2b7f4b8c79e36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"meta-bar row\">
    ";
        // line 2
        if ((isset($context["NewscoopUser"]) ? $context["NewscoopUser"] : null)) {
            // line 3
            echo "    <ul class=\"pull-right\">
        <li>";
            // line 4
            echo $this->env->getExtension('translator')->trans("Signed in: \$1", array("\$1" => (((("<strong>" . $this->getAttribute((isset($context["NewscoopUser"]) ? $context["NewscoopUser"] : null), "getFirstName", array(), "method")) . " ") . $this->getAttribute((isset($context["NewscoopUser"]) ? $context["NewscoopUser"] : null), "getLastName", array(), "method")) . "</strong>")), "home");
            echo "</li>
        <li><a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('newscoop_extension')->generateZendUrl("application", "help", "admin"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Help", array(), "home"), "html", null, true);
            echo "</a></li>
        <li><a href=\"/";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : null), "ADMIN", array(), "array"), "html", null, true);
            echo "/logout\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Logout", array(), "messages"), "html", null, true);
            echo "</a></li>
    </ul>
    ";
        }
        // line 9
        echo "</div>

";
        // line 11
        $context["menuItem"] = $this->env->getExtension('knp_menu')->get("main_modern");
        // line 12
        echo "<nav class=\"navbar navbar-default row\" role=\"navigation\">
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        ";
        // line 14
        echo $this->env->getExtension('knp_menu')->render((isset($context["menuItem"]) ? $context["menuItem"] : null), array("template" => "NewscoopNewscoopBundle:Menu:knp_menu.html.twig"));
        echo "
        <div class=\"logo\"></div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "NewscoopNewscoopBundle::admin_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  51 => 12,  49 => 11,  45 => 9,  37 => 6,  31 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
