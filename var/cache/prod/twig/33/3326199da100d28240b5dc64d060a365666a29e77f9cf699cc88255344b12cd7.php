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

/* WebBundle:Home:gplay.html.twig */
class __TwigTemplate_41892d7c8518480af5918f44fd0fcf5ef44997b852d0758432843e6cc504b002 extends \Twig\Template
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
        echo "<div class=\"gplay-box\">
\t<span><i class=\"fas fa-times-circle\"></i></span>
\t<div>
\t\t<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "media", []), "link", [])), "html", null, true);
        echo "\">
\t\t<h3>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "appname", []), "html", null, true);
        echo "</h3>
\t\t<p>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "appdescription", []), "html", null, true);
        echo "</p>
\t</div>
\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "googleplay", []), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn\"><i class=\"fas fa-download\"></i> Download</a>
</div>";
    }

    public function getTemplateName()
    {
        return "WebBundle:Home:gplay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  43 => 6,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Home:gplay.html.twig", "/home/tunicewo/public_html/src/WebBundle/Resources/views/Home/gplay.html.twig");
    }
}
