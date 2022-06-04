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

/* WebBundle:Home:logo.html.twig */
class __TwigTemplate_dec4f11fde68e108d11ba28999127e8fd30b933c4c61d7a6377d7269cc078ca3 extends \Twig\Template
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
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($this->getAttribute(($context["settings"] ?? null), "logo", []) != null)) ? ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "logo", []), "link", [])) : ("web/img/logo.png"))), "html", null, true);
        echo "\">";
    }

    public function getTemplateName()
    {
        return "WebBundle:Home:logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Home:logo.html.twig", "/home/tunicewo/public_html/src/WebBundle/Resources/views/Home/logo.html.twig");
    }
}
