<?php

/* NewscoopNewscoopBundle:Security:login.html.twig */
class __TwigTemplate_f49ba612b53d56c42ca447e4ede69bd4f85c8ad31993337ab80ff13fddec358c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'admin_title' => array($this, 'block_admin_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, (isset($context["localeFromCookie"]) ? $context["localeFromCookie"] : $this->getContext($context, "localeFromCookie")), "html", null, true);
        echo "\" dir=\"ltr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <meta http-equiv=\"Expires\" content=\"now\" />
    <title>";
        // line 5
        $this->displayBlock('admin_title', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/images/7773658c3ccbf03954b4dacb029b2229.ico\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "ADMIN_STYLE_URL", array(), "array"), "html", null, true);
        echo "/admin_stylesheet_new.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "ADMIN_STYLE_URL", array(), "array"), "html", null, true);
        echo "/admin_stylesheet.css\" />

    <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/js/campsite.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/js/fValidate/fValidate.config.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/js/fValidate/fValidate.core.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/js/fValidate/fValidate.lang-enUS.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/js/fValidate/fValidate.validators.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "WEBSITE_URL", array(), "array"), "html", null, true);
        echo "/js/crypt.js\"></script>
</head>
<body>
    <form name=\"login_form\" action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("admin_login_check");
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "has", array(0 => "ajax"), "method")) {
            echo "?ajax=true";
        }
        echo " \" method=\"post\">
        <div class=\"login_box\">
            ";
        // line 20
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "has", array(0 => "ajax"), "method")) {
            // line 21
            echo "            <div class=\"logobox\">
                <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "ADMIN_IMAGE_BASE_URL", array(), "array"), "html", null, true);
            echo "/sign_big.gif\" border=\"0\" alt=\"\" />
            </div>
            ";
        }
        // line 25
        echo "            <h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login"), "html", null, true);
        echo "</h2>
            <noscript>
               ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Your browser does not support Javascript or (more likely) you have Javascript disabled. Please fix this to be able to use Newscoop.", array(), "home"), "html", null, true);
        echo "
            </noscript>

            <div class=\"login_error\" style=\"color: #ff2200;\">
            ";
        // line 31
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 32
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), array(), "home"), "html", null, true);
            echo "
            ";
        }
        // line 34
        echo "            </div>

            <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"box_table login\" width=\"420\">
                <tr>
                    <td colspan=\"2\"><span class=\"light\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Please enter your user name and password", array(), "home"), "html", null, true);
        echo ":</span></td>
                </tr>
                <tr>
                    <td align=\"right\" >
                        <strong>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("User name", array(), "home"), "html", null, true);
        echo ":</strong>
                    </td>
                    <td>
                        <input type=\"text\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" name=\"_username\" size=\"32\" class=\"input_text\" alt=\"blank\" style=\"width:250px;\" emsg=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Please enter your user name.", array(), "home"), "html", null, true);
        echo "\" />
                    </td>
                </tr>
                <tr>
                    <td align=\"right\"><strong>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password"), "html", null, true);
        echo ":</strong></td>
                    <td>
                        <input type=\"password\" name=\"_password\" size=\"32\" class=\"input_text\" alt=\"blank\" style=\"width:250px;\" emsg=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Please enter your password.", array(), "home"), "html", null, true);
        echo "\" />
                        <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 52
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REDIRECT_URL"), "method") != $this->env->getExtension('routing')->getPath("admin_login")) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REDIRECT_URL"), "method") != ""))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REDIRECT_URL"), "method"), "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REDIRECT_QUERY_STRING"), "method"), "html", null, true);
        } else {
            echo "/admin";
        }
        echo "\" />
                    </td>
                </tr>
                <tr>
                    <td align=\"right\"><strong>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Remember me"), "html", null, true);
        echo ":</strong></td>
                    <td>
                        <input type=\"checkbox\" name=\"_remember_me\" class=\"input_checkbox\" />
                    </td>
                </tr>
                <tr>
                    <td align=\"right\"><strong>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Language"), "html", null, true);
        echo ":</strong></td>
                    <td>
                        <select name=\"login_language\" class=\"input_select\" style=\"width:253px;\">
                        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : $this->getContext($context, "languages")));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 66
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "code", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["language"], "code", array()) == (isset($context["defaultLanguage"]) ? $context["defaultLanguage"] : $this->getContext($context, "defaultLanguage")))) {
                echo "selected";
            }
            echo ">
                            ";
            // line 67
            if ($this->getAttribute($context["language"], "name", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "name", array()), "html", null, true);
            } elseif ($this->getAttribute($context["language"], "nativeName", array())) {
                echo "language.nativeName";
            }
            // line 68
            echo "                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                        </select>
                    </td>
                </tr>

                ";
        // line 74
        if ((isset($context["maxLoginAttemptsExceeded"]) ? $context["maxLoginAttemptsExceeded"] : $this->getContext($context, "maxLoginAttemptsExceeded"))) {
            // line 75
            echo "                <tr>
                  <td colspan=\"2\" align=\"center\">
                    <img src=\"";
            // line 77
            echo $this->env->getExtension('newscoop_extension')->getReCaptchaImage();
            echo "\" />
                  </td>
                </tr>
                <tr>
                  <td colspan=\"2\" align=\"center\">
                    ";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Type the code shown above:", array(), "home"), "html", null, true);
            echo "
                    <input name=\"captcha_code\" size=\"5\" class=\"input_text\" alt=\"blank\" emsg=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Please enter the code shown in the image.", array(), "home"), "html", null, true);
            echo "\" />
                  </td>
                </tr>
                ";
        }
        // line 87
        echo "
                <tr class=\"buttonBlock2\">
                    <td>
                    ";
        // line 90
        if ((\Zend_Registry::get('container')->getService('system_preferences_service')->get("PasswordRecovery") == "Y")) {
            // line 91
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Newscoop"]) ? $context["Newscoop"] : $this->getContext($context, "Newscoop")), "WEBSITE_URL", array(), "array"), "html", null, true);
            echo "/admin/password-recovery\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Forgot your password?", array(), "home"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 93
        echo "                    </td>
                    <td>
                        <noscript>
                          <input type=\"submit\" class=\"button\" name=\"Login\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login"), "html", null, true);
        echo "\" disabled />
                        </noscript>
                        <script type=\"text/javascript\">
                            document.write('<input type=\"submit\" class=\"button\" name=\"Login\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login"), "html", null, true);
        echo "\"/>');
                        </script>
                    </td>
                </tr>
            </table>
        </div>
    </form>

    <div class=\"footer\">
        <a href=\"http://newscoop.sourcefabric.org/\" target=\"_blank\">";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["NewscoopVersion"]) ? $context["NewscoopVersion"] : $this->getContext($context, "NewscoopVersion")), "getPackage", array(), "method"), "html", null, true);
        echo "</a>, the open content management system for professional journalists. 
        <br />
        &copy; ";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["NewscoopVersion"]) ? $context["NewscoopVersion"] : $this->getContext($context, "NewscoopVersion")), "getCopyrightYear", array(), "method"), "html", null, true);
        echo " 
        <a href=\"";
        // line 111
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

    // line 5
    public function block_admin_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "NewscoopNewscoopBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 5,  280 => 111,  276 => 110,  271 => 108,  259 => 99,  253 => 96,  248 => 93,  240 => 91,  238 => 90,  233 => 87,  226 => 83,  222 => 82,  214 => 77,  210 => 75,  208 => 74,  202 => 70,  195 => 68,  189 => 67,  180 => 66,  176 => 65,  170 => 62,  161 => 56,  148 => 52,  144 => 51,  139 => 49,  130 => 45,  124 => 42,  117 => 38,  111 => 34,  105 => 32,  103 => 31,  96 => 27,  90 => 25,  84 => 22,  81 => 21,  79 => 20,  71 => 18,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  20 => 1,);
    }
}
/* <html lang="{{ localeFromCookie }}" dir="ltr">*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />*/
/*     <meta http-equiv="Expires" content="now" />*/
/*     <title>{% block admin_title %}{{ 'Login'|trans }}{% endblock %}</title>*/
/*     <link rel="shortcut icon" href="{{ Newscoop['WEBSITE_URL'] }}/images/7773658c3ccbf03954b4dacb029b2229.ico" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ Newscoop['ADMIN_STYLE_URL'] }}/admin_stylesheet_new.css" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ Newscoop['ADMIN_STYLE_URL'] }}/admin_stylesheet.css" />*/
/* */
/*     <script type="text/javascript" src="{{ Newscoop['WEBSITE_URL'] }}/js/campsite.js"></script>*/
/*     <script type="text/javascript" src="{{ Newscoop['WEBSITE_URL'] }}/js/fValidate/fValidate.config.js"></script>*/
/*     <script type="text/javascript" src="{{ Newscoop['WEBSITE_URL'] }}/js/fValidate/fValidate.core.js"></script>*/
/*     <script type="text/javascript" src="{{ Newscoop['WEBSITE_URL'] }}/js/fValidate/fValidate.lang-enUS.js"></script>*/
/*     <script type="text/javascript" src="{{ Newscoop['WEBSITE_URL'] }}/js/fValidate/fValidate.validators.js"></script>*/
/*     <script type="text/javascript" src="{{ Newscoop['WEBSITE_URL'] }}/js/crypt.js"></script>*/
/* </head>*/
/* <body>*/
/*     <form name="login_form" action="{{ path('admin_login_check') }}{% if app.request.query.has('ajax') %}?ajax=true{% endif %} " method="post">*/
/*         <div class="login_box">*/
/*             {% if not app.request.query.has('ajax') %}*/
/*             <div class="logobox">*/
/*                 <img src="{{ Newscoop['ADMIN_IMAGE_BASE_URL'] }}/sign_big.gif" border="0" alt="" />*/
/*             </div>*/
/*             {% endif %}*/
/*             <h2>{{ "Login"|trans }}</h2>*/
/*             <noscript>*/
/*                {{ "Your browser does not support Javascript or (more likely) you have Javascript disabled. Please fix this to be able to use Newscoop."|trans({},'home') }}*/
/*             </noscript>*/
/* */
/*             <div class="login_error" style="color: #ff2200;">*/
/*             {% if error %}*/
/*                 {{ error.message|trans({},'home') }}*/
/*             {% endif %}*/
/*             </div>*/
/* */
/*             <table border="0" cellspacing="0" cellpadding="0" class="box_table login" width="420">*/
/*                 <tr>*/
/*                     <td colspan="2"><span class="light">{{ "Please enter your user name and password"|trans({},'home') }}:</span></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td align="right" >*/
/*                         <strong>{{ "User name"|trans({},'home') }}:</strong>*/
/*                     </td>*/
/*                     <td>*/
/*                         <input type="text" value="{{ last_username }}" name="_username" size="32" class="input_text" alt="blank" style="width:250px;" emsg="{{ "Please enter your user name."|trans({},'home') }}" />*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td align="right"><strong>{{ "Password"|trans }}:</strong></td>*/
/*                     <td>*/
/*                         <input type="password" name="_password" size="32" class="input_text" alt="blank" style="width:250px;" emsg="{{ "Please enter your password."|trans({},'home') }}" />*/
/*                         <input type="hidden" name="_target_path" value="{% if app.request.server.get('REDIRECT_URL') != path('admin_login') and app.request.server.get('REDIRECT_URL') != "" %}{{ app.request.server.get('REDIRECT_URL') }}?{{ app.request.server.get('REDIRECT_QUERY_STRING') }}{% else %}/admin{% endif %}" />*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td align="right"><strong>{{ "Remember me"|trans }}:</strong></td>*/
/*                     <td>*/
/*                         <input type="checkbox" name="_remember_me" class="input_checkbox" />*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td align="right"><strong>{{ "Language"|trans }}:</strong></td>*/
/*                     <td>*/
/*                         <select name="login_language" class="input_select" style="width:253px;">*/
/*                         {% for language in languages %}*/
/*                             <option value="{{ language.code }}" {% if language.code ==  defaultLanguage%}selected{% endif %}>*/
/*                             {% if language.name %}{{ language.name }}{% elseif language.nativeName %}language.nativeName{% endif %}*/
/*                             </option>*/
/*                         {% endfor %}*/
/*                         </select>*/
/*                     </td>*/
/*                 </tr>*/
/* */
/*                 {% if maxLoginAttemptsExceeded %}*/
/*                 <tr>*/
/*                   <td colspan="2" align="center">*/
/*                     <img src="{{ getReCaptchaImage()|raw }}" />*/
/*                   </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                   <td colspan="2" align="center">*/
/*                     {{ 'Type the code shown above:'|trans({},'home') }}*/
/*                     <input name="captcha_code" size="5" class="input_text" alt="blank" emsg="{{ 'Please enter the code shown in the image.'|trans({},'home') }}" />*/
/*                   </td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/* */
/*                 <tr class="buttonBlock2">*/
/*                     <td>*/
/*                     {% if getSystemPref('PasswordRecovery') == 'Y' %}*/
/*                         <a href="{{ Newscoop['WEBSITE_URL'] }}/admin/password-recovery">{{ 'Forgot your password?'|trans({},'home') }}</a>*/
/*                     {% endif %}*/
/*                     </td>*/
/*                     <td>*/
/*                         <noscript>*/
/*                           <input type="submit" class="button" name="Login" value="{{ 'Login'|trans }}" disabled />*/
/*                         </noscript>*/
/*                         <script type="text/javascript">*/
/*                             document.write('<input type="submit" class="button" name="Login" value="{{ 'Login'|trans }}"/>');*/
/*                         </script>*/
/*                     </td>*/
/*                 </tr>*/
/*             </table>*/
/*         </div>*/
/*     </form>*/
/* */
/*     <div class="footer">*/
/*         <a href="http://newscoop.sourcefabric.org/" target="_blank">{{ NewscoopVersion.getPackage() }}</a>, the open content management system for professional journalists. */
/*         <br />*/
/*         &copy; {{ NewscoopVersion.getCopyrightYear() }} */
/*         <a href="{{ NewscoopVersion.getWebURL() }}" target="_blank">{{ NewscoopVersion.getOrganization() }}</a> {{ NewscoopVersion.getPackage() }} is distributed under {{ NewscoopVersion.getLicense() }}   */
/*     </div>*/
/* </body>*/
/* */