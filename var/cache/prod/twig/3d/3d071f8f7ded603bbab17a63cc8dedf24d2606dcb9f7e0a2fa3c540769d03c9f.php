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

/* AppBundle:Actor:add.html.twig */
class __TwigTemplate_edab5bbbf057ec15a946a78caf5c514768321d2966b3e7e985b2fcf9f6281a86 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Actor:add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        // line 3
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
       <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header card-header-icon\" data-background-color=\"rose\">
                    <i class=\"material-icons\">recent_actors</i>
                </div>
                <div class=\"card-content\">
                    <h4 class=\"card-title\">New Actor</h4>
                    <br>
                    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                    <form method=\"#\" action=\"#\">
                        <div class=\"col-md-4\">
                            <div class=\"fileinput fileinput-new text-center\" style=\"    width: 100%;\" data-provides=\"fileinput\">
                                <div class=\"fileinput-new thumbnail\" >
                                     <a href=\"#\" class=\"btn btn-rose btn-round btn-select\"><i class=\"material-icons\">image</i> Select image </a>
                                    <img  id=\"img-preview\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/image_placeholder.jpg"), "actor_thumb"), "html", null, true);
        echo "\"  width=\"100%\">
                                </div>
                               ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", []), 'widget', ["attr" => ["class" => "file-hidden input-file img-selector", "style" => "    display: none;"]]);
        echo "
                                <span class=\"validate-input\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", []), 'errors');
        echo "</span>
                           </div>
                       </div>
                       <div class=\"col-md-8\">
                        <div class=\"form-group label-floating is-empty\">
                            <label class=\"control-label\">Full Name</label>
                            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"validate-input\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", []), 'errors');
        echo "</span>
                        </div>
                        <div class=\"form-group label-floating is-empty\">
                            <label class=\"control-label\">Type</label>
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"validate-input\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", []), 'errors');
        echo "</span>
                        </div>
                        <div class=\"form-group label-floating is-empty\">
                            <label class=\"control-label\">Born</label>
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "born", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"validate-input\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "born", []), 'errors');
        echo "</span>
                        </div>
                       <div class=\"form-group label-floating is-empty\">
                            <label class=\"control-label\">Height</label>
                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "height", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"validate-input\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "height", []), 'errors');
        echo "</span>
                        </div>
                        <div class=\"form-group label-floating is-empty\">
                            <label class=\"control-label\">Biography</label>
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "bio", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
                            <span class=\"validate-input\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "bio", []), 'errors');
        echo "</span>
                        </div>
                        <br>
                        <span class=\"pull-right\"><a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_actor_index");
        echo "\" class=\"btn btn-fill btn-yellow\"><i class=\"material-icons\">arrow_back</i> Cancel</a>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", []), 'widget', ["attr" => ["class" => "btn btn-fill btn-success"]]);
        echo "</span>
                        </div>

                    ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Actor:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 55,  135 => 52,  129 => 49,  125 => 48,  118 => 44,  114 => 43,  107 => 39,  103 => 38,  96 => 34,  92 => 33,  85 => 29,  81 => 28,  72 => 22,  68 => 21,  63 => 19,  54 => 13,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Actor:add.html.twig", "/home/tunicewo/public_html/src/AppBundle/Resources/views/Actor/add.html.twig");
    }
}
