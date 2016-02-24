<?php

/* NewscoopArticlesBundle:Hook:editorialComments.html.twig */
class __TwigTemplate_842425519ef679c8b42cc4fe78218755aedb280c18ccf472610a290c1b074e42 extends Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscooparticles/css/editorial-comments.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscooparticles/app/loading-bar.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/css/bootstrap-custom-comments.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/css/bootstrap-custom.css"), "html", null, true);
        echo "\">
";
        // line 6
        echo "<script type=\"text/javascript\">
    var clientId = '";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["clientId"]) ? $context["clientId"] : $this->getContext($context, "clientId")), "html", null, true);
        echo "';
    var  token = \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('newscoop_extension')->getCsrfToken(), "html", null, true);
        echo "\";
    var  articleNumber = \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["articleNumber"]) ? $context["articleNumber"] : $this->getContext($context, "articleNumber")), "html", null, true);
        echo "\";
    var  articleLanguage = \"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["articleLanguage"]) ? $context["articleLanguage"] : $this->getContext($context, "articleLanguage")), "html", null, true);
        echo "\";
</script>
<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

<div ng-app=\"editorialCommentsApp\" class=\"tabpane articlebox\" title=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("editorial.label.title", array(), "comments"), "html", null, true);
        echo "\">
<div ng-view=\"\"></div>
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/lodash.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/bundles/newscoopnewscoop/js/angular.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"//ajax.googleapis.com/ajax/libs/angularjs/1.3.7/angular-route.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscooparticles/app/loading-bar.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/bundles/newscoopnewscoop/js/moment-with-locales.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/bundles/newscoopnewscoop/js/angular-moment.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscooparticles/app/ng-infinite-scroll.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscooparticles/app/app.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscooparticles/app/comments-ctrl.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscooparticles/app/services/comments.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bazingajstranslation/js/translator.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 28
        echo $this->env->getExtension('routing')->getUrl("bazinga_jstranslation_js", array("domain" => "comments"));
        echo "?locales=";
        echo twig_escape_filter($this->env, (isset($context["localeFromCookie"]) ? $context["localeFromCookie"] : $this->getContext($context, "localeFromCookie")), "html", null, true);
        echo "\"></script>
</div>";
    }

    public function getTemplateName()
    {
        return "NewscoopArticlesBundle:Hook:editorialComments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 28,  107 => 27,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  74 => 18,  70 => 17,  65 => 15,  60 => 13,  56 => 12,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  36 => 6,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* <link rel="stylesheet" href="{{ asset('/bundles/newscooparticles/css/editorial-comments.css') }}">*/
/* <link rel="stylesheet" href="{{ asset('/bundles/newscooparticles/app/loading-bar.css') }}">*/
/* <link rel="stylesheet" href="{{ asset('/bundles/newscoopnewscoop/css/bootstrap-custom-comments.css') }}">*/
/* <link rel="stylesheet" href="{{ asset('/bundles/newscoopnewscoop/css/bootstrap-custom.css') }}">*/
/* {% trans_default_domain "comments" %}*/
/* <script type="text/javascript">*/
/*     var clientId = '{{ clientId }}';*/
/*     var  token = "{{ default_csrf_token() }}";*/
/*     var  articleNumber = "{{ articleNumber }}";*/
/*     var  articleLanguage = "{{ articleLanguage }}";*/
/* </script>*/
/* <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/* <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/* */
/* <div ng-app="editorialCommentsApp" class="tabpane articlebox" title="{{ 'editorial.label.title'|trans }}">*/
/* <div ng-view=""></div>*/
/* <script src="{{ asset('/bundles/newscoopnewscoop/js/lodash.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('public/bundles/newscoopnewscoop/js/angular.min.js') }}"></script>*/
/* <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.7/angular-route.js"></script>*/
/* <script type="text/javascript" src="{{ asset('/bundles/newscooparticles/app/loading-bar.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('public/bundles/newscoopnewscoop/js/moment-with-locales.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('public/bundles/newscoopnewscoop/js/angular-moment.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('/bundles/newscooparticles/app/ng-infinite-scroll.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('/bundles/newscooparticles/app/app.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('/bundles/newscooparticles/app/comments-ctrl.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('/bundles/newscooparticles/app/services/comments.js') }}"></script>*/
/* <script src="{{ asset('bundles/bazingajstranslation/js/translator.min.js') }}"></script>*/
/* <script src="{{ url('bazinga_jstranslation_js', { 'domain': 'comments' }) }}?locales={{ localeFromCookie }}"></script>*/
/* </div>*/
