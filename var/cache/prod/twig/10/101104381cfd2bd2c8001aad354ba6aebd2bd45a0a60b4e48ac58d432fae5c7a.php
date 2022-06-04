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

/* WebBundle:Home:contact.html.twig */
class __TwigTemplate_d27818c332f35e02c1a64ead0075b82fa2fa07f5f9815e2f59f8f1dd09b5b101 extends \Twig\Template
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
        return "WebBundle::login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["subtitle"] = "Contact us";
        // line 3
        $context["og_description"] = "Contact us";
        // line 4
        $context["og_type"] = "null";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = "null";
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::login.html.twig", "WebBundle:Home:contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        // line 10
        echo "            <div class=\"login-box\">
                <div class=\"notif-head\">
                    <span class=\"notif-title\"><i class=\"fas fa-envelope\"></i>  Contact us</span>
                </div>
                <div class=\"notif-body\">
                    <div class=\"carda__body pdn--al\">
                        <div class=\"row\">

                            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["method" => "post", "attr" => ["class" => "fos_user_registration_register"]]);
        echo "
                            <div class=\"form-group\">
                                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "E-mail"]]);
        echo "
                                <span class=\"validate-input\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", []), 'errors');
        echo "</span>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "subject", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Full Name"]]);
        echo "
                                <span class=\"validate-input\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "subject", []), 'errors');
        echo "</span>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "message", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Your message", "rows" => 5]]);
        echo "
                                <span class=\"validate-input\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "message", []), 'errors');
        echo "</span>
                            </div>
                        \t<span class=\"pull-right\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "send", []), 'widget', ["attr" => ["class" => "btn btn-raised btn-primary float-right"]]);
        echo "</span>
                            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>
       ";
    }

    public function getTemplateName()
    {
        return "WebBundle:Home:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 32,  97 => 31,  92 => 29,  88 => 28,  82 => 25,  78 => 24,  72 => 21,  68 => 20,  63 => 18,  53 => 10,  50 => 9,  45 => 1,  43 => 6,  41 => 5,  39 => 4,  37 => 3,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Home:contact.html.twig", "/home/tunicewo/public_html/src/WebBundle/Resources/views/Home/contact.html.twig");
    }
}
