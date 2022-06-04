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

/* WebBundle:Movie:movie.html.twig */
class __TwigTemplate_b1dc88b199446f422d6144501232bb349633c2f60fb82e10a750f4fdbe20bb7d extends \Twig\Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_movie_view", ["id" => $this->getAttribute(($context["poster"] ?? null), "id", []), "slug" => $this->getAttribute(($context["poster"] ?? null), "slug", [])]), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "title", []), "html", null, true);
        echo "\" class=\"poster ";
        (((isset($context["class"]) || array_key_exists("class", $context))) ? (print (twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true))) : (print ("")));
        echo "\" >
\t<div>
\t\t<img width=\"170\" height=\"255\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["poster"] ?? null), "poster", []), "link", [])), "poster_thumb_web"), "html", null, true);
        echo "\" />
\t\t<div>
\t\t\t";
        // line 5
        if (($this->getAttribute(($context["poster"] ?? null), "label", []) != "")) {
            echo "<span>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "label", []), "html", null, true);
            echo "</span>";
        }
        if (($this->getAttribute(($context["poster"] ?? null), "sublabel", []) != "")) {
            echo "<p ";
            if (($this->getAttribute(($context["poster"] ?? null), "label", []) != "")) {
                echo " class=\"two\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "sublabel", []), "html", null, true);
            echo "</p>";
        }
        // line 6
        echo "\t\t</div>
\t</div>
</a>";
    }

    public function getTemplateName()
    {
        return "WebBundle:Movie:movie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  45 => 5,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Movie:movie.html.twig", "/home/tunicewo/public_html/src/WebBundle/Resources/views/Movie/movie.html.twig");
    }
}
