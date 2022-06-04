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

/* AppBundle:Actor:index.html.twig */
class __TwigTemplate_416cdb081c704b7348f721688bff8d66278a6d85ac5649df877103d4f544e957 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Actor:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        // line 3
        echo "\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_actor_index");
        echo "\" class=\"btn  btn-lg btn-warning btn-block\"><i class=\"material-icons\" style=\"font-size: 30px;\">refresh</i> Refresh</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<a class=\"btn btn btn-lg btn-yellow btn-block\"><i class=\"material-icons\" style=\"font-size: 30px;\">recent_actors</i> ";
        // line 11
        echo twig_escape_filter($this->env, ($context["actors_count"] ?? null), "html", null, true);
        echo " Actors</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_actor_add");
        echo "\" class=\"btn btn-rose btn-lg pull-right add-button btn-block\" title=\"\"><i class=\"material-icons\" style=\"font-size: 30px;\">add_box</i> NEW ACTOR </a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<input name=\"q\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "query", []), "get", [0 => "q"], "method"), "html", null, true);
        echo "\" type=\"text\" class=\"search-input\">
\t\t\t\t\t\t\t<button class=\"btn btn-sm search-btn\"><i class=\"material-icons\" style=\"font-size: 30px;\">search</i></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actors"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 29
            echo "\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"card card-profile card-initial\">
\t\t\t\t\t\t\t\t<div class=\"card-avatar\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["actor"], "media", []), "link", [])), "actor_thumb"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\"><b>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["actor"], "name", []), "html", null, true);
            echo "</b></h5>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_actor_edit", ["id" => $this->getAttribute($context["actor"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-success btn-xs\"><i class=\"material-icons\">edit</i></a>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_actor_delete", ["id" => $this->getAttribute($context["actor"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-rose btn-xs\"><i class=\"material-icons\">delete</i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<center><img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\"  style=\"width: auto !important;\" =\"\"></center>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\" pull-right\">
\t\t\t\t\t";
        // line 58
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["actors"] ?? null));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t";
    }

    public function getTemplateName()
    {
        return "AppBundle:Actor:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 58,  137 => 56,  124 => 49,  117 => 44,  107 => 39,  103 => 38,  99 => 37,  92 => 33,  86 => 29,  81 => 28,  70 => 20,  61 => 14,  55 => 11,  49 => 8,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Actor:index.html.twig", "/home/tunicewo/public_html/src/AppBundle/Resources/views/Actor/index.html.twig");
    }
}
