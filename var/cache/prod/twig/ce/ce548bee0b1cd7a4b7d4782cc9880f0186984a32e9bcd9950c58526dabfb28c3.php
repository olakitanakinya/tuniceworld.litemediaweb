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

/* WebBundle:Movie:view.html.twig */
class __TwigTemplate_ebad165cfef47ab1c329716f93444450d32c92e0dd119345e1566792c6af3903 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "WebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["subtitle"] = $this->getAttribute(($context["poster"] ?? null), "title", []);
        // line 3
        $context["og_description"] = $this->getAttribute(($context["poster"] ?? null), "description", []);
        // line 4
        $context["og_type"] = "video.movie";
        // line 5
        $context["og_image"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["poster"] ?? null), "poster", []), "link", [])), "poster_thumb");
        // line 6
        $context["keywords"] = $this->getAttribute(($context["poster"] ?? null), "tags", []);
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:Movie:view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "title", []), "html", null, true);
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        // line 9
        echo "\t<div class=\"row content-section\">
\t\t<div class=\"col-md-12\" >
\t\t\t<div class=\"movie-header-bg\" style=\" background-image: url('";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($this->getAttribute(($context["poster"] ?? null), "cover", []) == null)) ? ($this->getAttribute($this->getAttribute(($context["poster"] ?? null), "poster", []), "link", [])) : ($this->getAttribute($this->getAttribute(($context["poster"] ?? null), "cover", []), "link", [])))), "html", null, true);
        echo "');\">
\t\t\t\t<div class=\"movie-header\">
\t\t\t\t\t<div class=\"movie-title\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "title", []), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"movie-infos\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "year", []), "html", null, true);
        echo " • ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "classification", []), "html", null, true);
        echo " • ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "duration", []), "html", null, true);
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["poster"] ?? null), "genres", []));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            echo " • <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_movie_index", ["genre" => $this->getAttribute($context["genre"], "title", []), "order" => "views"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "title", []), "html", null, true);
            echo "</a>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"header-buttons\">
\t\t\t\t\t";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 18
            echo "\t\t\t\t\t\t<button class=\"btn-fav\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "id", []), "html", null, true);
            echo "\" >";
            if (($context["favorited"] ?? null)) {
                echo "<i class=\"fa fa-heart\"></i>";
            } else {
                echo "<i class=\"far fa-heart\"></i>";
            }
            echo "</button>
\t\t\t\t\t";
        } else {
            // line 20
            echo "\t\t\t\t\t\t<button  class=\"open-login\"> <i class=\"far fa-heart\"></i></button>
\t\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t\t<button id=\"share-btn\">
\t\t\t\t\t<i  class=\"fa fa-share \"></i>SHARE
\t\t\t\t\t<div class=\"share-buttons\">
\t\t\t\t\t\t<a href=\"mailto:?Subject=";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "title", []), "html", null, true);
        echo "&amp;Body=";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "description", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "schemeAndHttpHost", []) . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "baseUrl", [])) . "/share/") . $this->getAttribute(($context["poster"] ?? null), "id", [])) . ".html"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"http://www.facebook.com/sharer.php?u=";
        // line 28
        echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "schemeAndHttpHost", []) . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "baseUrl", [])) . "/share/") . $this->getAttribute(($context["poster"] ?? null), "id", [])) . ".html"), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url=";
        // line 31
        echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "schemeAndHttpHost", []) . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "baseUrl", [])) . "/share/") . $this->getAttribute(($context["poster"] ?? null), "id", [])) . ".html"), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"https://twitter.com/share?url=";
        // line 34
        echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "schemeAndHttpHost", []) . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "baseUrl", [])) . "/share/") . $this->getAttribute(($context["poster"] ?? null), "id", [])) . ".html"), "html", null, true);
        echo "&amp;text=";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "title", []), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"header-ratings\">
\t\t\t\t\t";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "rating", []), "html", null, true);
        echo "/5
\t\t\t\t\t";
        // line 42
        $context["rate"] = $this->getAttribute(($context["poster"] ?? null), "rating", []);
        // line 43
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 44
            echo "\t\t\t\t\t\t";
            if ((($context["rate"] ?? null) >= 1)) {
                // line 45
                echo "\t\t\t\t\t\t\t<i class=\"fas fa-star checked\"></i>
\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t";
            if (((($context["rate"] ?? null) >= 0.25) && (($context["rate"] ?? null) < 0.75))) {
                // line 48
                echo "\t\t\t\t\t\t\t<i class=\"fas fa-star-half-alt checked\"></i>
\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t\t";
            if (((($context["rate"] ?? null) >= 0.75) && (($context["rate"] ?? null) < 1))) {
                // line 51
                echo "\t\t\t\t\t\t\t<i class=\"fas fa-star checked\"></i>
\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t\t";
            if ((($context["rate"] ?? null) < 0.25)) {
                // line 54
                echo "\t\t\t\t\t\t\t<i class=\"far fa-star checked\"></i>
\t\t\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t\t\t";
            $context["rate"] = (($context["rate"] ?? null) - 1);
            // line 57
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t\t\t• ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "imdb", []), "html", null, true);
        echo " / 10 <span class=\"imdb\">IMDb</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-md-12\" >
\t\t<div class=\"dropdown\">
\t\t\t\t";
        // line 65
        if ((twig_length_filter($this->env, ($context["all_sources"] ?? null)) > 0)) {
            // line 66
            echo "\t\t\t\t\t";
            if ((twig_length_filter($this->env, ($context["sources"] ?? null)) > 0)) {
                // line 67
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_player_movie", ["id" => $this->getAttribute(($context["poster"] ?? null), "id", []), "slug" => $this->getAttribute(($context["poster"] ?? null), "slug", []), "source" => $this->getAttribute($this->getAttribute(($context["sources"] ?? null), 0, [], "array"), "id", [])]), "html", null, true);
                echo "\" class=\"btn play-btn\"><span class=\"fa fa-play\"></span> Play Movie</a>
\t\t\t\t\t";
            } else {
                // line 69
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_subscription_subscribe");
                echo "\" class=\"btn play-btn\"><i class=\"fas fa-star\"></i> Subscribe to Play!</a>
\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t";
        if (($this->getAttribute(($context["poster"] ?? null), "trailer", []) != null)) {
            // line 73
            echo "\t\t\t\t\t<button id=\"trailer-btn\" class=\"btn play-btn\"><span class=\"fa fa-bullhorn\"></span> Watch Trailer</button>
\t\t\t\t";
        }
        // line 75
        echo "\t\t\t\t";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "subtitles", [])) > 0)) {
            // line 76
            echo "\t\t\t\t\t<button id=\"subtitles-btn\" class=\"btn play-btn movie-subtitles\"  data-id=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "id", []), "html", null, true);
            echo " data-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "title", []), "html", null, true);
            echo "\"><span class=\"fa fa-cc\"></span> Subtitles</button>
\t\t\t\t";
        }
        // line 78
        echo "
\t\t\t\t";
        // line 79
        if ((twig_length_filter($this->env, ($context["all_source_downloads"] ?? null)) > 0)) {
            // line 80
            echo "\t\t\t\t\t<button id=\"downloads-btn\" class=\"btn play-btn movie-downloads\"  data-id=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "id", []), "html", null, true);
            echo " data-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "title", []), "html", null, true);
            echo "\"><span class=\"fas fa-download\"></span> Download</button>
\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t<a class=\"btn play-btn dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t<span class=\"fa fa-star\"></span> Rate Movie
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
\t\t\t\t\t<div class=\"comment-item  review-write\">
\t\t\t\t\t\t<div class='alert alert-success success-review' role='alert'>
\t\t\t\t\t\t\t<i class='fas fa-comment-alt'></i> Your Review has been added successfully!
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='alert alert-danger error-review' role='alert'>
\t\t\t\t\t\t\t<i class='fas fa-comment-alt'></i> Your Review could not be submitted
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"rate\" id=\"rate-input\" alt=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "id", []), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<input type=\"radio\" id=\"star5\" name=\"rate\" value=\"5\" />
\t\t\t\t\t\t\t<label for=\"star5\" title=\"text\">5 stars</label>
\t\t\t\t\t\t\t<input type=\"radio\" id=\"star4\" name=\"rate\" value=\"4\" />
\t\t\t\t\t\t\t<label for=\"star4\" title=\"text\">4 stars</label>
\t\t\t\t\t\t\t<input type=\"radio\" id=\"star3\" name=\"rate\" value=\"3\" />
\t\t\t\t\t\t\t<label for=\"star3\" title=\"text\">3 stars</label>
\t\t\t\t\t\t\t<input type=\"radio\" id=\"star2\" name=\"rate\" value=\"2\" />
\t\t\t\t\t\t\t<label for=\"star2\" title=\"text\">2 stars</label>
\t\t\t\t\t\t\t<input type=\"radio\" checked=\"true\" id=\"star1\" name=\"rate\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"star1\" title=\"text\">1 star</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<textarea  class=\"input-review\" placeholder=\"Write you review here\"></textarea>
\t\t\t\t\t\t";
        // line 106
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 107
            echo "\t\t\t\t\t\t\t<button alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "id", []), "html", null, true);
            echo "\" type=\"poster\"  class=\"btn btn-primary  submit-review btn-block\"><i class=\"fas fa-paper-plane\"></i> Submite Review</button>
\t\t\t\t\t\t\t<button alt=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "id", []), "html", null, true);
            echo "\" class=\"btn btn-primary  loading-review btn-block\"><i class=\"fas fa-circle-notch fa-spin\"></i>  Review Interting</button>
\t\t\t\t\t\t";
        } else {
            // line 110
            echo "\t\t\t\t\t\t\t<button  class=\"btn btn-primary btn-block open-login\"> <i class=\"fas fa-check\"></i> Login to leave a review </button>
\t\t\t\t\t\t";
        }
        // line 112
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 116
        if (($this->getAttribute(($context["settings"] ?? null), "moviebannertype", []) == "image")) {
            // line 117
            echo "\t\t\t<div class=\"col-sm-12 col-md-12 ads-element\">
\t\t\t\t<img src=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "homebanner", []), "html", null, true);
            echo "\">
\t\t\t</div>
\t\t";
        } elseif (($this->getAttribute(        // line 120
($context["settings"] ?? null), "moviebannertype", []) == "code")) {
            // line 121
            echo "\t\t\t<div class=\"col-sm-12 col-md-12\">
\t\t\t\t";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "homebanner", []), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 125
        echo "\t\t<div class=\"col-md-12 padding-top-20\" >
\t\t\t<div class=\"movie-section-title\">Overview</div>
\t\t</div>
\t\t<div class=\"col-md-12\" >
\t\t\t<p>
\t\t\t\t";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "description", []), "html", null, true);
        echo "
\t\t\t</p>
\t\t</div>
\t\t";
        // line 133
        if ((twig_length_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "roles", [])) != 0)) {
            // line 134
            echo "\t\t\t<div class=\"col-md-12 padding-top-20\" >
\t\t\t\t<div class=\"movie-section-title\">Cast</div>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["poster"] ?? null), "roles", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["cast"]) {
                // line 142
                echo "\t\t\t\t\t\t";
                echo twig_include($this->env, $context, "WebBundle:Actor:cast.html.twig", ["cast" => $context["cast"]]);
                echo "
\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cast'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 147
        echo "\t\t";
        if ((twig_length_filter($this->env, ($context["related_posters"] ?? null)) != 0)) {
            // line 148
            echo "\t\t\t<div class=\"col-md-12 padding-top-20\" >
\t\t\t\t<div class=\"movie-section-title\">For You</div>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["related_posters"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["related_poster"]) {
                // line 156
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["related_poster"], "type", []) == "movie")) {
                    // line 157
                    echo "\t\t\t\t\t\t\t";
                    echo twig_include($this->env, $context, "WebBundle:Movie:movie.html.twig", ["poster" => $context["related_poster"]]);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 159
                    echo "\t\t\t\t\t\t\t";
                    echo twig_include($this->env, $context, "WebBundle:Serie:serie.html.twig", ["poster" => $context["related_poster"]]);
                    echo "
\t\t\t\t\t\t";
                }
                // line 161
                echo "\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related_poster'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 166
        echo "\t\t";
        if ($this->getAttribute(($context["poster"] ?? null), "comment", [])) {
            // line 167
            echo "\t\t\t<div class=\"col-md-6 padding-top-20\">
\t\t\t\t<div class=\"movie-section-title\"><i class=\"fa fa-comment\"></i> ";
            // line 168
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["comments"] ?? null)), "html", null, true);
            echo " Comments</div>
\t\t\t\t<div class=\"comment-section comment-list\">
\t\t\t\t\t";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 171
                echo "\t\t\t\t\t\t<div class=\"comment-item\">
\t\t\t\t\t\t\t<a title=\"View profile\" href=\"#\" class=\"avatar-thumb\"><img  src=\"";
                // line 172
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", []), "media", []), "type", []) == "link")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", []), "media", []), "url", [])) : ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", []), "media", []), "link", [])), "actor_thumb_mini_web"))), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t<div class=\"comment-text\">
\t\t\t\t\t\t\t\t<a>";
                // line 174
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", []), "name", []), "html", null, true);
                echo "</a><span class=\"float-right\"><i class=\"fa fa-clock-o\"></i> ";
                echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["comment"], "created", []));
                echo " </span>
\t\t\t\t\t\t\t\t<p> ";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "contentclear", []), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "\t\t\t\t</div>
\t\t\t\t<div class='alert alert-success success-comment' role='alert'>
\t\t\t\t\t<i class='fas fa-comment-alt'></i> Your comment has been added successfully!
\t\t\t\t</div>
\t\t\t\t<div class='alert alert-danger error-comment' role='alert'>
\t\t\t\t\t<i class='fas fa-comment-alt'></i> Your comment could not be submitted
\t\t\t\t</div>
\t\t\t\t";
            // line 186
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 187
                echo "\t\t\t\t\t<div class=\"comment-item comment-write\">
\t\t\t\t\t\t<a title=\"View profile\" href=\"#\" class=\"avatar-thumb\"><img  src=\"";
                // line 188
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "type", []) == "link")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "url", [])) : ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "link", [])), "actor_thumb_mini_web"))), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t<div class=\"comment-text\">
\t\t\t\t\t\t\t<a>";
                // line 190
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "name", []), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<textarea  class=\"input-comment\" alt=\"poster\" placeholder=\"Write you comment here\"></textarea>
\t\t\t\t\t\t\t<button alt=\"";
                // line 192
                echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "id", []), "html", null, true);
                echo "\" class=\"btn btn-primary float-right submit-comment\"><i class=\"fas fa-paper-plane\"></i> Submite Comment</button>
\t\t\t\t\t\t\t<button alt=\"";
                // line 193
                echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "id", []), "html", null, true);
                echo "\" class=\"btn btn-primary float-right loading-comment\"><i class=\"fas fa-circle-notch fa-spin\"></i> Comment Interting</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 197
                echo "\t\t\t\t\t<button class=\"btn comment-btn-item open-login\">
\t\t\t\t\t<i class=\"fa fa-check\"></i> Login to leave a comment
\t\t\t\t\t</button>
\t\t\t\t";
            }
            // line 201
            echo "\t\t\t</div>
\t\t";
        }
        // line 203
        echo "\t\t<div class=\"col-md-6 padding-top-20\">
\t\t\t<div class=\"movie-section-title\"><i class=\"fa fa-star\"></i> ";
        // line 204
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["ratings"] ?? null)), "html", null, true);
        echo " Reviews</div>
\t\t\t<div class=\"comment-section \">
\t\t\t\t";
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ratings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
            // line 207
            echo "\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t<div class=\"review-properties\">
\t\t\t\t\t\t\tReviewed by
\t\t\t\t\t\t\t<span class=\"review-author\">";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rating"], "user", []), "name", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t<span class=\"review-rating\">";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($context["rating"], "value", []), "html", null, true);
            echo " / 5</span>
\t\t\t\t\t\t\t<span class=\"float-right\"><i class=\"fa fa-clock-o\"></i> ";
            // line 213
            echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["rating"], "created", []));
            echo " </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<article><p>";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute($context["rating"], "review", []), "html", null, true);
            echo "</p></article>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"background-close  serie-dialog\">
\t\t<div class=\"login-box \">
\t\t\t<div class=\"notif-head\">
\t\t\t\t<span class=\"notif-close\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></span>
\t\t\t\t<span class=\"notif-title\"><i class=\"fa fa-fw fa-lock\"></i>  </span>
\t\t\t</div>
\t\t\t<div class=\"notif-body\">
\t\t\t\t<div class=\"carda__body\">
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 235
        if (($this->getAttribute(($context["poster"] ?? null), "trailer", []) != null)) {
            // line 236
            echo "\t\t<div class=\"trailer-video\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["poster"] ?? null), "trailer", []), "youtubeid", []), "html", null, true);
            echo "\"></div>
\t";
        }
    }

    public function getTemplateName()
    {
        return "WebBundle:Movie:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  607 => 236,  605 => 235,  586 => 218,  577 => 215,  572 => 213,  568 => 212,  563 => 210,  558 => 207,  554 => 206,  549 => 204,  546 => 203,  542 => 201,  536 => 197,  529 => 193,  525 => 192,  520 => 190,  515 => 188,  512 => 187,  510 => 186,  501 => 179,  491 => 175,  485 => 174,  480 => 172,  477 => 171,  473 => 170,  468 => 168,  465 => 167,  462 => 166,  456 => 162,  442 => 161,  436 => 159,  430 => 157,  427 => 156,  410 => 155,  401 => 148,  398 => 147,  393 => 144,  376 => 142,  359 => 141,  350 => 134,  348 => 133,  342 => 130,  335 => 125,  329 => 122,  326 => 121,  324 => 120,  319 => 118,  316 => 117,  314 => 116,  308 => 112,  304 => 110,  299 => 108,  294 => 107,  292 => 106,  276 => 93,  263 => 82,  255 => 80,  253 => 79,  250 => 78,  242 => 76,  239 => 75,  235 => 73,  232 => 72,  229 => 71,  223 => 69,  217 => 67,  214 => 66,  212 => 65,  201 => 58,  195 => 57,  192 => 56,  188 => 54,  185 => 53,  181 => 51,  178 => 50,  174 => 48,  171 => 47,  167 => 45,  164 => 44,  159 => 43,  157 => 42,  153 => 41,  141 => 34,  135 => 31,  129 => 28,  119 => 25,  114 => 22,  110 => 20,  98 => 18,  96 => 17,  92 => 15,  73 => 14,  69 => 13,  64 => 11,  60 => 9,  57 => 8,  51 => 7,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Movie:view.html.twig", "/home/tunicewo/public_html/src/WebBundle/Resources/views/Movie/view.html.twig");
    }
}
