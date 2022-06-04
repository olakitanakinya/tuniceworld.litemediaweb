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

/* WebBundle:Home:index.html.twig */
class __TwigTemplate_bfdc6a3b4a00dabd074c30a4c268fe791bc3d9ad1a4a35659bd2e0a1fd02efdf extends \Twig\Template
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
        $context["subtitle"] = $this->getAttribute(($context["settings"] ?? null), "subtitle", []);
        // line 3
        $context["og_description"] = $this->getAttribute(($context["settings"] ?? null), "sitedescription", []);
        // line 4
        $context["og_type"] = "website";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = $this->getAttribute(($context["settings"] ?? null), "sitekeywords", []);
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:Home:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        echo "Home";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        // line 9
        echo "\t<div class=\"row content-section\">
\t\t<div class=\"col-sm-12 col-md-12\" >
\t\t\t<div id=\"myCarousel\" class=\"carousel slide w-100\" data-ride=\"carousel\">
\t\t\t\t<ol class=\"carousel-indicators float-right\">
\t\t\t\t\t";
        // line 13
        $context["index"] = 0;
        // line 14
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slides"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 15
            echo "\t\t\t\t\t\t";
            if ((($context["index"] ?? null) == 0)) {
                // line 16
                echo "\t\t\t\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"";
                echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
                echo "\" class=\"active\"></li>
\t\t\t\t\t\t";
            } else {
                // line 18
                echo "\t\t\t\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"";
                echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
                echo "\" ></li>
\t\t\t\t\t\t";
            }
            // line 20
            echo "\t\t\t\t\t\t";
            $context["index"] = (($context["index"] ?? null) + 1);
            // line 21
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t\t</ol>
\t\t\t\t<div class=\"carousel-inner w-100\" role=\"listbox\">
\t\t\t\t\t";
        // line 24
        $context["fist"] = true;
        // line 25
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slides"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 26
            echo "\t\t\t\t\t\t";
            if (($context["fist"] ?? null)) {
                // line 27
                echo "\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t";
                // line 28
                $context["fist"] = false;
                // line 29
                echo "\t\t\t\t\t\t";
            } else {
                // line 30
                echo "\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t\t\t<div class=\"col-xxl-5 col-lg-8 col-md-12\">
\t\t\t\t\t\t\t<img height=\"370\" width=\"750\" class=\"img-fluid\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($context["slide"], "media", []), "link", []), "slide_thumb_web")), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 34
            if (($this->getAttribute($context["slide"], "type", []) == 4)) {
                // line 35
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($context["slide"], "poster", []), "type", []) == "movie")) {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_movie_view", ["id" => $this->getAttribute($this->getAttribute($context["slide"], "poster", []), "id", []), "slug" => $this->getAttribute($this->getAttribute($context["slide"], "poster", []), "slug", [])]), "html", null, true);
                    echo "\" class=\"carousel-detail\">
\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getAttribute(                // line 37
$context["slide"], "poster", []), "type", []) == "serie")) {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_serie_view", ["id" => $this->getAttribute($this->getAttribute($context["slide"], "poster", []), "id", []), "slug" => $this->getAttribute($this->getAttribute($context["slide"], "poster", []), "slug", [])]), "html", null, true);
                    echo "\" class=\"carousel-detail\">
\t\t\t\t\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h3>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "clear", []), "html", null, true);
                echo " <span><i class=\"fa fa-star\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["slide"], "poster", []), "imdb", []), "html", null, true);
                echo "/10</span></h3>
\t\t\t\t\t\t\t\t\t<p>";
                // line 42
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["slide"], "poster", []), "description", [])) > 180)) ? ((twig_slice($this->env, $this->getAttribute($this->getAttribute($context["slide"], "poster", []), "description", []), 0, 180) . "...")) : ($this->getAttribute($this->getAttribute($context["slide"], "poster", []), "description", []))), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<button ><i class=\"fa fa-play\"></i> <span>Watch Now<span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 46
$context["slide"], "type", []) == 3)) {
                // line 47
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_channel_view", ["id" => $this->getAttribute($this->getAttribute($context["slide"], "channel", []), "id", []), "slug" => $this->getAttribute($this->getAttribute($context["slide"], "channel", []), "slug", [])]), "html", null, true);
                echo "\"  class=\"carousel-detail\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "clear", []), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t\t\t\t<p>";
                // line 50
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["slide"], "channel", []), "description", [])) > 180)) ? ((twig_slice($this->env, $this->getAttribute($this->getAttribute($context["slide"], "channel", []), "description", []), 0, 180) . "...")) : ($this->getAttribute($this->getAttribute($context["slide"], "channel", []), "description", []))), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t<button ><i class=\"fa fa-play\"></i> <span>Watch Now<span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 54
$context["slide"], "type", []) == 1)) {
                // line 55
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "url", []), "html", null, true);
                echo "\"  class=\"carousel-detail\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "clear", []), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t\t\t\t<button ><i class=\"fas fa-globe\"></i> <span>Visit Now<span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 61
$context["slide"], "type", []) == 5)) {
                // line 62
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_poster_filter", ["genre" => $this->getAttribute($this->getAttribute($context["slide"], "genre", []), "title", []), "order" => "newest"]), "html", null, true);
                echo "\"  class=\"carousel-detail\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "clear", []), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t\t\t\t<button ><i class=\"fas fa-stream\"></i> <span>Explore Now<span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 68
$context["slide"], "type", []) == 2)) {
                // line 69
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_channel_index", ["category" => $this->getAttribute($this->getAttribute($context["slide"], "category", []), "title", []), "country" => "all", "order" => "newest"]), "html", null, true);
                echo "\"  class=\"carousel-detail\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "clear", []), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t\t\t\t<button ><i class=\"fas fa-stream\"></i> <span>Explore Now<span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 82
        if (($this->getAttribute(($context["settings"] ?? null), "homebannertype", []) == "image")) {
            // line 83
            echo "\t\t\t\t<div class=\"col-sm-12 col-md-12 ads-element\">
\t\t\t\t\t<img src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "homebanner", []), "html", null, true);
            echo "\">
\t\t\t\t</div>
\t\t\t";
        } elseif (($this->getAttribute(        // line 86
($context["settings"] ?? null), "homebannertype", []) == "code")) {
            // line 87
            echo "\t\t\t\t<div class=\"col-sm-12 col-md-12\">
\t\t\t\t\t";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "homebanner", []), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 91
        echo "\t\t\t<div class=\"col-sm-12 col-md-12 \">
\t\t\t\t<a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_channel_index", ["country" => "all", "category" => "all", "order" => "views"]), "html", null, true);
        echo "\" class=\"title-more\">
\t\t\t\t\t<span>Featured LiveTV</span>
\t\t\t\t\t<i class=\"fa fa-th float-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["channels"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 102
            echo "\t\t\t\t\t\t";
            echo twig_include($this->env, $context, "WebBundle:Channel:channel.html.twig", ["poster" => $context["channel"]]);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 col-md-12 \">
\t\t\t\t<a href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_actor_index");
        echo "\" class=\"title-more\">
\t\t\t\t\t<span>Popular Actors</span>
\t\t\t\t\t<i class=\"fa fa-th float-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actors"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 117
            echo "\t\t\t\t\t\t";
            echo twig_include($this->env, $context, "WebBundle:Actor:actor.html.twig", ["actor" => $context["actor"]]);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 col-md-12 \">
\t\t\t\t<a href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_poster_filter", ["genre" => "all", "order" => "rating"]), "html", null, true);
        echo "\" class=\"title-more\">
\t\t\t\t\t<span>Top Rated</span>
\t\t\t\t\t<i class=\"fa fa-th float-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bestrated"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["poster"]) {
            // line 132
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["poster"], "type", []) == "movie")) {
                // line 133
                echo "\t\t\t\t\t\t\t";
                echo twig_include($this->env, $context, "WebBundle:Movie:movie.html.twig", ["poster" => $context["poster"]]);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 135
                echo "\t\t\t\t\t\t\t";
                echo twig_include($this->env, $context, "WebBundle:Serie:serie.html.twig", ["poster" => $context["poster"]]);
                echo "
\t\t\t\t\t\t";
            }
            // line 137
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poster'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 col-md-12 \">
\t\t\t\t<a href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_poster_filter", ["genre" => "all", "order" => "views"]), "html", null, true);
        echo "\" class=\"title-more\">
\t\t\t\t\t<span>Popular</span>
\t\t\t\t\t<i class=\"fa fa-th float-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["popular"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["poster"]) {
            // line 151
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["poster"], "type", []) == "movie")) {
                // line 152
                echo "\t\t\t\t\t\t\t";
                echo twig_include($this->env, $context, "WebBundle:Movie:movie.html.twig", ["poster" => $context["poster"]]);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 154
                echo "\t\t\t\t\t\t\t";
                echo twig_include($this->env, $context, "WebBundle:Serie:serie.html.twig", ["poster" => $context["poster"]]);
                echo "
\t\t\t\t\t\t";
            }
            // line 156
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poster'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["genres"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 160
            echo "\t\t\t\t<div class=\"col-sm-12 col-md-12 \">
\t\t\t\t\t<a href=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_poster_filter", ["genre" => $this->getAttribute($context["genre"], "title", []), "order" => "newest"]), "html", null, true);
            echo "\" class=\"title-more\">
\t\t\t\t\t\t<span>";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "title", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t<i class=\"fa fa-th float-right\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t";
            // line 170
            $context["max"] = 1;
            // line 171
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["genre"], "posters", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["poster"]) {
                // line 172
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["poster"], "enabled", []) == true)) {
                    // line 173
                    echo "\t\t\t\t\t\t\t";
                    if ((($context["max"] ?? null) < 16)) {
                        // line 174
                        echo "\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["poster"], "type", []) == "movie")) {
                            // line 175
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo twig_include($this->env, $context, "WebBundle:Movie:movie.html.twig", ["poster" => $context["poster"]]);
                            echo "
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 177
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo twig_include($this->env, $context, "WebBundle:Serie:serie.html.twig", ["poster" => $context["poster"]]);
                            echo "
\t\t\t\t\t\t\t\t";
                        }
                        // line 179
                        echo "\t\t\t\t\t\t\t\t";
                        $context["max"] = (($context["max"] ?? null) + 1);
                        // line 180
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 181
                    echo "\t\t\t\t\t\t";
                }
                // line 182
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poster'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "WebBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  608 => 186,  592 => 183,  578 => 182,  575 => 181,  572 => 180,  569 => 179,  563 => 177,  557 => 175,  554 => 174,  551 => 173,  548 => 172,  530 => 171,  528 => 170,  517 => 162,  513 => 161,  510 => 160,  493 => 159,  489 => 157,  475 => 156,  469 => 154,  463 => 152,  460 => 151,  443 => 150,  431 => 141,  426 => 138,  412 => 137,  406 => 135,  400 => 133,  397 => 132,  380 => 131,  368 => 122,  363 => 119,  346 => 117,  329 => 116,  317 => 107,  312 => 104,  295 => 102,  278 => 101,  266 => 92,  263 => 91,  257 => 88,  254 => 87,  252 => 86,  247 => 84,  244 => 83,  242 => 82,  237 => 79,  229 => 76,  221 => 71,  215 => 69,  213 => 68,  206 => 64,  200 => 62,  198 => 61,  191 => 57,  185 => 55,  183 => 54,  176 => 50,  172 => 49,  166 => 47,  164 => 46,  157 => 42,  151 => 41,  148 => 40,  142 => 38,  140 => 37,  135 => 36,  132 => 35,  130 => 34,  126 => 33,  123 => 32,  119 => 30,  116 => 29,  114 => 28,  111 => 27,  108 => 26,  103 => 25,  101 => 24,  97 => 22,  91 => 21,  88 => 20,  82 => 18,  76 => 16,  73 => 15,  68 => 14,  66 => 13,  60 => 9,  57 => 8,  51 => 7,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Home:index.html.twig", "/home/tunicewo/public_html/src/WebBundle/Resources/views/Home/index.html.twig");
    }
}
