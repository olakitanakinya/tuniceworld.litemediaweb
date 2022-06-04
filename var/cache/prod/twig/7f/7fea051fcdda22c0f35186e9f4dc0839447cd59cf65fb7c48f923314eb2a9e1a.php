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

/* AppBundle:Home:index.html.twig */
class __TwigTemplate_c4fa778515076780507cd4dafa41ecb80eefbcff05602b2fab56e3e9144467c7 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Home:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        // line 3
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"red\">
                    <i class=\"material-icons\">credit_card</i>
                </div>
                <div class=\"card-content\">
                    <h3 class=\"title\">";
        // line 11
        echo twig_escape_filter($this->env, ($context["subscription_count"] ?? null), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Subscription</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats my-statis-card\">
                <div class=\"card-header\" data-background-color=\"blue\">
                    <i class=\"material-icons\">movie</i>
                </div>
                <div class=\"card-content\">
                    <h3 class=\"title\">";
        // line 23
        echo twig_escape_filter($this->env, ($context["movies_count"] ?? null), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Movies</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats my-statis-card\">
                <div class=\"card-header\" data-background-color=\"orange\">
                    <i class=\"material-icons\">tv</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 35
        echo twig_escape_filter($this->env, ($context["series_count"] ?? null), "html", null, true);
        echo "</h3>
                    <p class=\"category\">TV Shows</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"purple\">
                    <i class=\"material-icons\">live_tv</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 47
        echo twig_escape_filter($this->env, ($context["channels_count"] ?? null), "html", null, true);
        echo "</h3>
                    <p class=\"category\">TV channels</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats my-statis-card\">
                <div class=\"card-header\" data-background-color=\"rose\">
                    <i class=\"material-icons\">view_list</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 59
        echo twig_escape_filter($this->env, ($context["category_count"] ?? null), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Categories</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"green\">
                    <i class=\"material-icons\">label</i>
                </div>
                <div class=\"card-content\">
                    <h3 class=\"title\">";
        // line 71
        echo twig_escape_filter($this->env, ($context["genre_count"] ?? null), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Genres</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"red\">
                    <i class=\"material-icons\">flag</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 83
        echo twig_escape_filter($this->env, ($context["language_count"] ?? null), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Languages</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"blue\">
                    <i class=\"material-icons\">public</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 95
        echo twig_escape_filter($this->env, ($context["country_count"] ?? null), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Countries</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"orange\">
                    <i class=\"material-icons\">recent_actors</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 107
        echo twig_escape_filter($this->env, ($context["actor_count"] ?? null), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Actors</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"purple\">
                    <i class=\"material-icons\">slideshow</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 119
        echo twig_escape_filter($this->env, ($context["slide_count"] ?? null), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Slides</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"rose\">
                    <i class=\"material-icons\">remove_red_eye</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 131
        echo twig_escape_filter($this->env, ($context["movie_views"] ?? null), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Movies Views</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"green\">
                    <i class=\"material-icons\">cloud_download</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 143
        echo twig_escape_filter($this->env, ($context["movie_downloads"] ?? null), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Movies Downloads</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"red\">
                    <i class=\"material-icons\">share</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 155
        echo twig_escape_filter($this->env, ($context["movie_shares"] ?? null), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Movies Shares</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"blue\">
                    <i class=\"material-icons\">remove_red_eye</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 167
        echo twig_escape_filter($this->env, ($context["serie_views"] ?? null), "html", null, true);
        echo "</h3>
                    <p class=\"category\">TV Shows Views</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"orange\">
                    <i class=\"material-icons\">cloud_download</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 179
        echo twig_escape_filter($this->env, ($context["serie_downloads"] ?? null), "html", null, true);
        echo "</h3>
                    <p class=\"category\">TV Shows Downloads</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"purple\">
                    <i class=\"material-icons\">share</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 191
        echo twig_escape_filter($this->env, ($context["serie_shares"] ?? null), "html", null, true);
        echo "</h3>
                    <p class=\"category\">TV Shows Shares</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"rose\">
                    <i class=\"material-icons\">remove_red_eye</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 203
        echo twig_escape_filter($this->env, ($context["channel_views"] ?? null), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Channels Views</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"green\">
                    <i class=\"material-icons\">share</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 215
        echo twig_escape_filter($this->env, ($context["channel_shares"] ?? null), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Channels Shares</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"red\">
                    <i class=\"material-icons\">comment</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 227
        echo twig_escape_filter($this->env, ($context["comment_count"] ?? null), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Comments</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"blue\">
                    <i class=\"material-icons\">message</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 239
        echo twig_escape_filter($this->env, ($context["support_count"] ?? null), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Support and Rating</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"orange\">
                    <i class=\"material-icons\">devices_other</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 251
        echo twig_escape_filter($this->env, ($context["devices_count"] ?? null), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Installs</p>
                </div>

            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 251,  337 => 239,  322 => 227,  307 => 215,  292 => 203,  277 => 191,  262 => 179,  247 => 167,  232 => 155,  217 => 143,  202 => 131,  187 => 119,  172 => 107,  157 => 95,  142 => 83,  127 => 71,  112 => 59,  97 => 47,  82 => 35,  67 => 23,  52 => 11,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Home:index.html.twig", "/home/tunicewo/public_html/src/AppBundle/Resources/views/Home/index.html.twig");
    }
}
