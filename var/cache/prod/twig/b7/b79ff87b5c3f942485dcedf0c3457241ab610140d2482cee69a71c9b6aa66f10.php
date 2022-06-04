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

/* WebBundle:Actor:actor.html.twig */
class __TwigTemplate_6a1a468fce81704da1c018b759017803a76845ad01292176758714fa5beedeaa extends \Twig\Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_actor_view", ["id" => $this->getAttribute(($context["actor"] ?? null), "id", []), "slug" => $this->getAttribute(($context["actor"] ?? null), "slug", [])]), "html", null, true);
        echo "\" class=\"actor\" >
\t<img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((("uploads" . "/") . $this->getAttribute(($context["actor"] ?? null), "extension", [])) . "/") . $this->getAttribute(($context["actor"] ?? null), "image", []))), "actor_thumb_mini_web"), "html", null, true);
        echo "\"/>
\t<span>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actor"] ?? null), "name", []), "html", null, true);
        echo "</span>
</a>";
    }

    public function getTemplateName()
    {
        return "WebBundle:Actor:actor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Actor:actor.html.twig", "/home/tunicewo/public_html/src/WebBundle/Resources/views/Actor/actor.html.twig");
    }
}
