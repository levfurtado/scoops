<?php

/* NewscoopNewscoopBundle::tooltip.html.twig */
class __TwigTemplate_51799d37ff7d2b294b12710cdcca3e30457434d447c23cb5046a3621beb5ec61 extends Twig_Template
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
        echo "<style type=\"text/css\" media=\"screen\">
.coverMessageButton {
    overflow:hidden;
    text-align:left;
    text-transform:uppercase;
    font-size:11px;
    font-weight:600;
    padding-left:22px;
    cursor:pointer;
    margin-bottom:10px;
    line-height:16px;
}

.coverMessageButton:before {
    content:\"\";
    display:inline-block;
    height:1px;
    position:relative;
    vertical-align:middle;
    width:100%;
    top:-2px;
    right:.6em;
    margin-left:-100%;
    background-color:#ccc;
}

.coverMessageButton:after {
    background-color:#ccc;
    content:\"\";
    display:inline-block;
    height:1px;
    position:relative;
    vertical-align:middle;
    width:100%;
    top:-2px;
    left:.6em;
    margin-right:-100%;
}

.coverMessageButton .glyphicon {
    font-size:12px;
    margin-right:4px;
}

.coverMessage {
    margin-top:-19px;
    display:none;
    font-size:13px;
    line-height:18px;
    border-color:#ccc;
    border-style:solid;
    border-width:0 1px 1px;
    padding:20px;
}

.coverMessage.open {
    display:block;
}
@font-face {
  font-family: 'Glyphicons Halflings';
  src: url('../../../../public/bundles/newscoopnewscoop/fonts/glyphicons-halflings-regular.eot');
  src: url('../../../../public/bundles/newscoopnewscoop/fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('../../../../public/bundles/newscoopnewscoop/fonts/glyphicons-halflings-regular.woff') format('woff'), url('../../../../public/bundles/newscoopnewscoop/fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('../../../../public/bundles/newscoopnewscoop/fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
}
.glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: normal;
  line-height: 1;

  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.glyphicon-question-sign:before {
  content: \"\\e085\";
}
</style>
<div class=\"coverMessageButton\"><span class=\"glyphicon glyphicon-question-sign\"></span>
    ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("importantmessage"), "html", null, true);
        echo "
</div>
<div class=\"coverMessage\">
";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["tipMessage"]) ? $context["tipMessage"] : null), "html", null, true);
        echo "
";
        // line 85
        if ((isset($context["tipCode"]) ? $context["tipCode"] : null)) {
            echo "<pre>";
            echo twig_escape_filter($this->env, (isset($context["tipCode"]) ? $context["tipCode"] : null), "html", null, true);
            echo "</pre>";
        }
        // line 86
        echo "</div>
<script type=\"text/javascript\">
    \$('.coverMessageButton').click(function(e){
        e.preventDefault();
        \$('.coverMessage').toggle();
    })
</script>";
    }

    public function getTemplateName()
    {
        return "NewscoopNewscoopBundle::tooltip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 86,  111 => 85,  107 => 84,  101 => 81,  19 => 1,);
    }
}
