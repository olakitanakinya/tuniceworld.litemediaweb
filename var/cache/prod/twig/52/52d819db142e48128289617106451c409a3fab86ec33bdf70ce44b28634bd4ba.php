<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* FOSUserBundle:Security:login_admin.html.twig */
class __TwigTemplate_9f0ce9adb8902e41bb4de4ee4b30244cc7e732688588507b043ad2c231cf20ee extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/apple-icon.png"), "html", null, true);
        echo "\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <title>Admin Panel</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name=\"viewport\" content=\"width=device-width\" />


    <!-- Bootstrap core CSS     -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!--  Material Dashboard CSS    -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/material-dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!--     Fonts and icons     -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons\" />
</head>
<body style=\"background-color: #000000 !important;\">

    <div class=\"wrapper wrapper-full-page\">
        <div class=\"full-page login-page\" filter-color=\"black\" >
            <!--   you can change the color of the filter page using: data-color=\"blue | purple | green | orange | red | rose \" -->
            <div class=\"content\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3\">
                            <form method=\"post\" action=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_check");
        echo "\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\" />
                                <div class=\"card card-login \">
                                    <br>
                                    <center><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/admin.png"), "html", null, true);
        echo "\" style=\"    height: 106px;    width: auto;\"></center>
                                    <br>
                                    
                                    ";
        // line 38
        if (($context["error"] ?? null)) {
            // line 39
            echo "                                        <div class=\"card-content\" style=\"padding-right:10px\">
                                            <div class=\"alert alert-danger\">
                                                <span>
                                                   <b>Erreur ! </b>  incorrect username or password</span>
                                            </div>
                                        </div>
                                    ";
        }
        // line 45
        echo "   
                                    <div class=\"card-content\">
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon\">
                                                <i class=\"material-icons\">email</i>
                                            </span>
                                            <div class=\"form-group label-floating\">
                                                 <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\"  required=\"required\" />
                                            </div>
                                        </div>
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon\">
                                                <i class=\"material-icons\">lock_outline</i>
                                            </span>
                                            <div class=\"form-group label-floating\">
                                                <input type=\"password\" class=\"form-control\" id=\"password\"  name=\"_password\" required=\"required\" />
                                            </div>
                                        </div>
                                        <div class=\"input-group\" style=\"padding:16px\">
                                            <label>
                                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"> ";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "
                                            </label>
                                        </div>

                                    </div>
                                    <div class=\"footer text-center\">
                                        <button type=\"submit\" class=\"btn btn-fill btn-rose\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</body>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/material.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- Material Dashboard javascript methods -->
<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/material-dashboard.js"), "html", null, true);
        echo "\"></script>
</html>



";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 87,  158 => 85,  154 => 84,  138 => 71,  129 => 65,  113 => 52,  104 => 45,  95 => 39,  93 => 38,  87 => 35,  81 => 32,  77 => 31,  60 => 17,  55 => 15,  50 => 13,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "FOSUserBundle:Security:login_admin.html.twig", "/home/tunicewo/public_html/src/UserBundle/Resources/views/Security/login_admin.html.twig");
    }
}
