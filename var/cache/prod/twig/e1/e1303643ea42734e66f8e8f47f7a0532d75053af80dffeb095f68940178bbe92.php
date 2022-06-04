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

/* WebBundle::layout.html.twig */
class __TwigTemplate_e7bd7d037a2772a093721d53f3fdce691b266096648d3c6659b0a28627f9b901 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
\t\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Home:header", ["keywords" => ($context["keywords"] ?? null), "og_image" => ($context["og_image"] ?? null), "og_description" => ($context["og_description"] ?? null), "subtitle" => ($context["subtitle"] ?? null), "og_type" => ($context["og_type"] ?? null)]));
        echo "
\t\t<!-- Bootstrap -->
\t\t";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "\t\t<meta property=\"og:url\" content=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route_params"], "method")), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
\t\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("web/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t<!--[if lt IE 9]>
\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->
\t\t<script src=\"https://kit.fontawesome.com/017eaf7e3f.js\" crossorigin=\"anonymous\"></script>
\t</head>
\t<body alt=\"";
        // line 22
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "schemeAndHttpHost", []) . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "baseUrl", [])), "html", null, true);
        echo "\" class=\"";
        echo ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "get", [0 => "theme"], "method") == "light")) ? ("light-mode") : ("dark-mode"));
        echo "\">
\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashbag", []), "all", [], "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 24
            echo "\t        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 25
                echo "\t\t\t\t<div class=\"alert  alert-home\"   >
\t\t            <i class=\"fas fa-bell\"></i>
\t\t            <button type=\"button\" aria-hidden=\"true\" class=\"close\">
\t\t                <i class=\"fas fa-times\"></i>
\t\t            </button>
\t\t            <span data-notify=\"message\">";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]), "html", null, true);
                echo "</span>
\t\t        </div>
\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row main-row\">
\t\t\t\t<div class=\"sidebar\">
\t\t\t\t\t<h2 class=\"page-header logo-app\">
\t\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Home:logo"));
        echo "
\t\t\t\t\t</h2>
\t\t\t\t\t<div class=\"nav-bar-container\" >
\t\t\t\t\t\t<nav class=\"navbar bg-light left-navbar\"  >
\t\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t\t\t";
        // line 44
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 45
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "subscribed", [])) {
                // line 46
                echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"btn  btn-subscription\"><i class=\"fas fa-crown\"></i> You are premuim<p/>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 48
                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_subscription_subscribe");
                echo "\" class=\"btn  btn-subscription\"><i class=\"fas fa-star\"></i> Subscribe now !</a>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t\t\t\t\t";
        } else {
            // line 51
            echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_subscription_subscribe");
            echo "\" class=\"btn  btn-subscription\"><i class=\"fas fa-star\"></i> Subscribe now !</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\t\t\t\t\t\t<li class=\"nav-item ";
        if (twig_in_filter("web_home_index", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " active ";
        }
        echo "\"><a  class=\"nav-link\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_home_index");
        echo "\"> <i class=\"fas fa-home\"></i> Home</a></li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item ";
        // line 54
        if (twig_in_filter("wep_movie_index", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " active ";
        }
        echo "\"><a class=\"nav-link\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_movie_index", ["genre" => "all", "order" => "newest"]), "html", null, true);
        echo "\"><i class=\"fas fa-film\"></i>  Movies</a></li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item ";
        // line 55
        if (twig_in_filter("wep_serie_index", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " active ";
        }
        echo "\"><a class=\"nav-link\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_serie_index", ["genre" => "all", "order" => "newest"]), "html", null, true);
        echo "\"><i class=\"fas fa-desktop\"></i> Tv Shows</a></li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item ";
        // line 56
        if (twig_in_filter("wep_channel_index", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " active ";
        }
        echo "\"><a class=\"nav-link\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_channel_index", ["category" => "all", "country" => "all", "order" => "newest"]), "html", null, true);
        echo "\"><i class=\"fas fa-bullseye\"></i> Tv Channels</a></li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item ";
        // line 57
        if (twig_in_filter("wep_home_mylist", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " active ";
        }
        echo "\"><a class=\"nav-link ";
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " open-login ";
        }
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_home_mylist");
        echo "\"><i class=\"fas fa-folder\"></i>  My list</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<nav class=\"navbar bg-light left-navbar bottom-navbar\">
\t\t\t\t\t\t\t";
        // line 62
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "get", [0 => "theme"], "method") == "light")) {
            // line 63
            echo "\t\t\t\t\t\t\t\t<a  id=\"lightmode\" href=\"#\" style=\"display:none\"><i class=\"fas fa-sun\"></i></a>
\t\t\t\t\t\t\t\t<a  id=\"darkmode\" href=\"#\" ><i class=\"fas fa-moon\"></i> </a>
\t\t\t\t\t\t\t";
        } else {
            // line 66
            echo "\t\t\t\t\t\t\t\t<a  id=\"lightmode\" href=\"#\" ><i class=\"fas fa-sun\"></i></a>
\t\t\t\t\t\t\t\t<a  id=\"darkmode\" href=\"#\" style=\"display:none\"><i class=\"fas fa-moon\"></i> </a>
\t\t\t\t\t\t\t";
        }
        // line 69
        echo "\t\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_home_contact");
        echo "\"><i class=\"fas fa-envelope\"></i> Contact us</a></li class=\"nav-item\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_home_faq");
        echo "\"><i class=\"fas fa-question-circle\"></i> FAQ & Support</a></li class=\"nav-item\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_home_privacy");
        echo "\"><i class=\"fas fa-lock\"></i> Privacy Policy</a></li class=\"nav-item\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_home_refund");
        echo "\"><i class=\"fas fa-dollar-sign\"></i> Refund Policy</a></li class=\"nav-item\">
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"close-menu-left-btn\"></div>
\t\t\t\t\t<div class=\"main\">
\t\t\t\t\t\t\t<div class=\"xs-header\" >
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary float-left menu-left-btn\"><i class=\"fas fa-bars\"></i></button>
\t\t\t\t\t\t\t\t";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Home:logo"));
        echo "
\t\t\t\t\t\t\t\t";
        // line 82
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 83
            echo "\t\t\t\t\t\t\t\t\t<div class=\"btn-group  float-right \" >
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"for-desktop\"> ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "name", []), "html", null, true);
            echo " </span> <img src=\"";
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "type", []) == "link")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "url", [])) : ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "link", [])), "user_image_mini"))), "html", null, true);
            echo "\"></button></button>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-login\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 86
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"><i class=\"fas fa-user\"></i> My Profile</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 87
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_myprofile_edit");
            echo "\"><i class=\"fas fa-user-edit\"></i> Edit Profile</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 88
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_subscriptions");
            echo "\"><i class=\"fas fa-star\"></i>Subscriptions</a>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 89
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "type", []) == "email")) {
                // line 90
                echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
                echo "\"><i class=\"fas fa-user-lock\"></i> Change password</a>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 92
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 93
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fas fa-sign-out-alt\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", [], "FOSUserBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        } else {
            // line 97
            echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-primary float-right open-login\"><i class=\"fas fas fa-user\"></i></button>
\t\t\t\t\t\t\t\t";
        }
        // line 99
        echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-primary float-right search-btn\"><i class=\"fas fa-search\"></i></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row top-nav\">
\t\t\t\t\t\t\t<div class=\"col-sm-3 col-md-3 \" >
\t\t\t\t\t\t\t\t<div class=\"tab-title\">";
        // line 103
        $this->displayBlock('title', $context, $blocks);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-6 search-form\" >
\t\t\t\t\t\t\t\t<form action=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_home_search");
        echo "\" class=\"navbar-form\" role=\"search\">
\t\t\t\t\t\t\t\t\t<div class=\"search-group\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Movies,Tv Shows , Tv Channels , Actors ...\" name=\"q\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"submit\">Search</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary float-right for-phone search-btn-close\"><i class=\"fas fa-times\"></i></button>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-3 col-md-3 account-action for-desktop\">
\t\t\t\t\t\t\t\t";
        // line 117
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 118
            echo "\t\t\t\t\t\t\t\t\t<div class=\"btn-group  float-right \" >
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"for-desktop\"> ";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "name", []), "html", null, true);
            echo " </span> <img src=\"";
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "type", []) == "link")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "url", [])) : ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "link", [])), "user_image_mini"))), "html", null, true);
            echo "\"></button></button>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-login\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 121
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"><i class=\"fas fa-user\"></i> My Profile</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 122
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_myprofile_edit");
            echo "\"><i class=\"fas fa-user-edit\"></i> Edit Profile</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 123
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_subscriptions");
            echo "\"><i class=\"fas fa-star\"></i>Subscriptions</a>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 124
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "type", []) == "email")) {
                // line 125
                echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
                echo "\"><i class=\"fas fa-user-lock\"></i> Change password</a>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 127
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fas fa-sign-out-alt\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", [], "FOSUserBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        } else {
            // line 132
            echo "\t\t\t\t\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t\t\t\t\t<a  href=\"";
            // line 133
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" class=\"btn btn-link\" > ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit"), "html", null, true);
            echo "  </a>
\t\t\t\t\t\t\t\t\t\t<a  href=\"";
            // line 134
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"btn btn-primary open-login\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit"), "html", null, true);
            echo "  </a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 137
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t";
        // line 140
        $this->displayBlock('body', $context, $blocks);
        // line 141
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 145
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Home:gplay"));
        echo "
\t\t\t
\t\t\t";
        // line 147
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 148
            echo "\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FOSUserBundle:Security:box"));
            echo "
\t\t\t";
        }
        // line 150
        echo "\t\t\t
\t\t\t<!-- Include all compiled plugins (below), or include individual files as needed -->
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
\t\t\t
\t\t\t<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("web/js/app.js"), "html", null, true);
        echo "\" ></script>
\t\t</body>
\t</html>";
    }

    // line 10
    public function block_head($context, array $blocks = [])
    {
    }

    // line 103
    public function block_title($context, array $blocks = [])
    {
    }

    // line 140
    public function block_body($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "WebBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 140,  415 => 103,  410 => 10,  403 => 156,  395 => 150,  389 => 148,  387 => 147,  382 => 145,  376 => 141,  374 => 140,  369 => 137,  361 => 134,  355 => 133,  352 => 132,  343 => 128,  340 => 127,  334 => 125,  332 => 124,  328 => 123,  324 => 122,  320 => 121,  313 => 119,  310 => 118,  308 => 117,  294 => 106,  288 => 103,  282 => 99,  278 => 97,  269 => 93,  266 => 92,  260 => 90,  258 => 89,  254 => 88,  250 => 87,  246 => 86,  239 => 84,  236 => 83,  234 => 82,  230 => 81,  219 => 73,  215 => 72,  211 => 71,  207 => 70,  204 => 69,  199 => 66,  194 => 63,  192 => 62,  176 => 57,  168 => 56,  160 => 55,  152 => 54,  143 => 53,  137 => 51,  134 => 50,  128 => 48,  124 => 46,  121 => 45,  119 => 44,  111 => 39,  104 => 34,  98 => 33,  89 => 30,  82 => 25,  77 => 24,  73 => 23,  67 => 22,  55 => 13,  49 => 11,  47 => 10,  42 => 8,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle::layout.html.twig", "/home/tunicewo/public_html/src/WebBundle/Resources/views/layout.html.twig");
    }
}
