<?php

/* NewscoopNewscoopBundle:BackendPublications:index.html.twig */
class __TwigTemplate_157caa5ae8a2a296aabb62e384ec96641c5fb17a95861836176125956086d377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NewscoopNewscoopBundle::admin_layout.html.twig", "NewscoopNewscoopBundle:BackendPublications:index.html.twig", 1);
        $this->blocks = array(
            'admin_page_title_box' => array($this, 'block_admin_page_title_box'),
            'admin_title' => array($this, 'block_admin_title'),
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
    public function block_admin_page_title_box($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"toolbar row\">
    <span class=\"article-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("publications.title.list", array(), "pub"), "html", null, true);
        echo "</span>
    <div class=\"pull-right\">
        <div class=\"actions\">
            <ul class=\"navigation\" style=\"height: auto;\">
                <li>
                    <a class=\"add\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("newscoop_newscoop_publications_add");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("publications.buttons.addNew", array(), "pub"), "html", null, true);
        echo "</a>
                </li>
            </ul>
        </div>
    </div>
</div>
";
    }

    // line 19
    public function block_admin_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("publications.title.list", array(), "pub"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("admin_title", $context, $blocks);
    }

    // line 21
    public function block_admin_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/css/jquery.dynatable.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/admin-style/action_buttons.css"), "html", null, true);
        echo "\">
<style type=\"text/css\" media=\"screen\">
    #publications-table {padding: 10px;border: 1px solid #ccc;}
    #publications-table th {background: #007fb3;color: #fff;}
    #publications-table .glyphicon{font-size: 1.50em;}
    a.action-btn {margin-left: 5px; margin-bottom: 5px;}
</style>
";
    }

    // line 32
    public function block_admin_scripts($context, array $blocks = array())
    {
        // line 33
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/newscoopnewscoop/js/jquery.dynatable.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 36
    public function block_admin_content($context, array $blocks = array())
    {
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 38
            echo "        <div class=\"alerts alert-danger\">
            ";
            // line 39
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 43
            echo "        <div class=\"alerts alert-success\">
            ";
            // line 44
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
<div class=\"row publications ns_container col-md-8\">
    ";
        // line 49
        if ((twig_length_filter($this->env, (isset($context["publications"]) ? $context["publications"] : null)) > 0)) {
            // line 50
            echo "    <table id=\"publications-table\" class=\"table table-bordered table-hover table-striped\" style=\"word-wrap: break-word;table-layout: fixed;\">
        <thead>
          <tr>
            <th data-dynatable-column=\"id\" style=\"width: 60px;text-align: center\">";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("publications.table.number", array(), "pub"), "html", null, true);
            echo "</th>
            <th data-dynatable-column=\"name\">";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("publications.table.name", array(), "pub"), "html", null, true);
            echo "</th>
            <th data-dynatable-column=\"defaultAlias\">";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("publications.table.default_alias", array(), "pub"), "html", null, true);
            echo "</th>
            <th data-dynatable-column=\"defaultLanguage\">";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("publications.table.default_language", array(), "pub"), "html", null, true);
            echo "</th>
            <th data-dynatable-column=\"comments_on\" style=\"text-align: center\">";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("publications.table.comments_status", array(), "pub"), "html", null, true);
            echo "</th>
            <th data-dynatable-column=\"url_type\">";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("publications.table.url_type", array(), "pub"), "html", null, true);
            echo "</th>
            <th data-dynatable-column=\"configure\" data-dynatable-no-sort=\"true\" style=\"text-align: center\">";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("publications.table.configure", array(), "pub"), "html", null, true);
            echo "</th>
            <th data-dynatable-column=\"remove\" data-dynatable-no-sort=\"true\" style=\"text-align: center\">";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("publications.table.remove", array(), "pub"), "html", null, true);
            echo "</th>
          </tr>
        </thead>
        <tbody>

        ";
            // line 65
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["publications"]) ? $context["publications"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
                // line 66
                echo "            <tr>
                <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["publication"], "id", array()), "html", null, true);
                echo "</td>
                <td><a href=\"/admin/issues/?Pub=";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["publication"], "id", array()), "html", null, true);
                echo "\" style=\"font-weight: bold;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["publication"], "name", array()), "html", null, true);
                echo "</a></td>
                <td>";
                // line 69
                if ($this->getAttribute($this->getAttribute($context["publication"], "defaultAlias", array(), "any", false, true), "name", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["publication"], "defaultAlias", array()), "name", array()), "html", null, true);
                }
                echo "</td>
                <td>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["publication"], "language", array()), "name", array()), "html", null, true);
                echo "</td>
                <td><span class=\"glyphicon glyphicon-";
                // line 71
                if ($this->getAttribute($context["publication"], "commentsEnabled", array())) {
                    echo "ok";
                } else {
                    echo "minus";
                }
                echo "\"></span></td>
                <td>";
                // line 72
                if (($this->getAttribute($context["publication"], "urlTypeId", array()) == 1)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("template path", array(), "api"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("short names", array(), "api"), "html", null, true);
                }
                echo "</td>
                <td><a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("newscoop_newscoop_publications_edit", array("id" => $this->getAttribute($context["publication"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a></td>
                <td><a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("newscoop_newscoop_publications_remove", array("id" => $this->getAttribute($context["publication"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove-circle\"></span></a></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publication'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "        </tbody>
    </table>
    ";
        } else {
            // line 80
            echo "    <h3>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("publications.no_publications", array(), "pub"), "html", null, true);
            echo "</h3>
    <div class=\"center-block\" style=\"width: 160px;\">
        <div class=\"actions\">
            <ul class=\"navigation\" style=\"height: auto;\">
                <li>
                    <a class=\"add\" href=\"";
            // line 85
            echo $this->env->getExtension('routing')->getUrl("newscoop_newscoop_publications_add");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("publications.buttons.addNew", array(), "pub"), "html", null, true);
            echo "</a>
                </li>
            </ul>
        </div>
    </div>
    ";
        }
        // line 91
        echo "
    ";
        // line 92
        echo $this->env->getExtension('newscoop_extension')->renderTip($this->env->getExtension('translator')->trans("publications.tip1", array(), "pub"));
        echo "
</div>

<script type=\"text/javascript\">
    var dynatable = \$('#publications-table').dynatable({
        inputs: {
            paginationClass: 'pagination',
            paginationActiveClass: 'current',
            paginationDisabledClass: 'unavailable',
            paginationPrev: '&laquo;',
            paginationNext: '&raquo;',
            pageText: '";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dynatable.page", array(), "helpers"), "html", null, true);
        echo "',
            perPageText: '";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dynatable.perPageText", array(), "helpers"), "html", null, true);
        echo "',
            pageText: '";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dynatable.pageText", array(), "helpers"), "html", null, true);
        echo "',
            recordCountPageBoundTemplate: '";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dynatable.recordCountPageBoundTemplate", array(), "helpers"), "html", null, true);
        echo "',
            recordCountPageUnboundedTemplate: '";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dynatable.recordCountPageUnboundedTemplate", array(), "helpers"), "html", null, true);
        echo "',
            recordCountFilteredTemplate: '";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dynatable.recordCountFilteredTemplate", array(), "helpers"), "html", null, true);
        echo "',
            recordCountText: '";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dynatable.recordCountText", array(), "helpers"), "html", null, true);
        echo "',
            processingText: '";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dynatable.processingText", array(), "helpers"), "html", null, true);
        echo "'
        },
        features: {
            paginate: false,
            search: false,
            recordCount: false,
            perPageSelect: false
        }
    }).data('dynatable');
</script>
";
    }

    public function getTemplateName()
    {
        return "NewscoopNewscoopBundle:BackendPublications:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 110,  301 => 109,  297 => 108,  293 => 107,  289 => 106,  285 => 105,  281 => 104,  277 => 103,  263 => 92,  260 => 91,  249 => 85,  240 => 80,  235 => 77,  226 => 74,  222 => 73,  214 => 72,  206 => 71,  202 => 70,  196 => 69,  190 => 68,  186 => 67,  183 => 66,  179 => 65,  171 => 60,  167 => 59,  163 => 58,  159 => 57,  155 => 56,  151 => 55,  147 => 54,  143 => 53,  138 => 50,  136 => 49,  132 => 47,  123 => 44,  120 => 43,  116 => 42,  107 => 39,  104 => 38,  100 => 37,  97 => 36,  90 => 33,  87 => 32,  75 => 23,  70 => 22,  67 => 21,  59 => 19,  46 => 11,  38 => 6,  35 => 5,  32 => 4,  11 => 1,);
    }
}
