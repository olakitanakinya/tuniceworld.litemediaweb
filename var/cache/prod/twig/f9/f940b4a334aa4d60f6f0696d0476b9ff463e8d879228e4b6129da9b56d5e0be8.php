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

/* WebBundle:Home:header.html.twig */
class __TwigTemplate_6b407be842fcb198646d89b35791f41ca2b50da0290161f3cf517e383fba5a36 extends \Twig\Template
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
        echo "\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($this->getAttribute(($context["settings"] ?? null), "favicon", []) != null)) ? ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "favicon", []), "link", [])) : ("favicon.png"))), "html", null, true);
        echo "\" />\t
\t\t<title>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "title", []), "html", null, true);
        echo " ";
        if ((($context["subtitle"] ?? null) != null)) {
            echo " - ";
            echo twig_escape_filter($this->env, ($context["subtitle"] ?? null), "html", null, true);
        }
        echo "</title>
\t\t<meta property=\"description\" content=\"";
        // line 3
        echo twig_escape_filter($this->env, (((($context["og_description"] ?? null) == "null")) ? ($this->getAttribute(($context["settings"] ?? null), "sitedescription", [])) : (($context["og_description"] ?? null))), "html", null, true);
        echo "\">
\t\t<meta property=\"keywords\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, (((($context["keywords"] ?? null) == "null")) ? ($this->getAttribute(($context["settings"] ?? null), "sitekeywords", [])) : (($context["keywords"] ?? null))), "html", null, true);
        echo "\">
\t\t<meta property=\"og:type\" content=\"";
        // line 5
        (((($context["og_type"] ?? null) == "null")) ? (print ("website")) : (print (twig_escape_filter($this->env, ($context["og_type"] ?? null), "html", null, true))));
        echo "\">
\t\t<meta property=\"og:title\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "title", []), "html", null, true);
        echo " ";
        if ((($context["subtitle"] ?? null) != null)) {
            echo " - ";
            echo twig_escape_filter($this->env, ($context["subtitle"] ?? null), "html", null, true);
        }
        echo "\">
\t\t<meta property=\"og:description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["og_description"] ?? null), "html", null, true);
        echo "\">
\t\t<meta property=\"og:site_name\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "title", []), "html", null, true);
        echo " \">
\t\t<meta property=\"og:image\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, (((($context["og_image"] ?? null) == "null")) ? ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($this->getAttribute(($context["settings"] ?? null), "logo", []) != null)) ? ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "logo", []), "link", [])) : ("web/img/logo.png"))), "slide_thumb_web")) : (($context["og_image"] ?? null))), "html", null, true);
        echo "\">
\t\t";
        // line 10
        echo $this->getAttribute(($context["settings"] ?? null), "header", []);
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebBundle:Home:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 10,  73 => 9,  69 => 8,  65 => 7,  56 => 6,  52 => 5,  48 => 4,  44 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Home:header.html.twig", "/home/tunicewo/public_html/src/WebBundle/Resources/views/Home/header.html.twig");
    }
}
