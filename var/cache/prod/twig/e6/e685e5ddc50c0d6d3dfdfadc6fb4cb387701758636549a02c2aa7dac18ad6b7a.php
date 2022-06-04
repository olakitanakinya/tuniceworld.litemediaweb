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

/* AppBundle::layout.html.twig */
class __TwigTemplate_154421b24336426cdfbe86a7cd625e89335725821cd0feba05687c991dd00c9d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/apple-icon.png"), "html", null, true);
        echo "\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

    <title>Admin Panel</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name=\"viewport\" content=\"width=device-width\" />

    <!-- Bootstrap core CSS     -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!--  Material Dashboard CSS    -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/material-dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!--     Fonts and icons     -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jscolor.js"), "html", null, true);
        echo "\"></script>
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/css/emoji.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("giflib/gifplayer.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("tags/css/normalize.css"), "html", null, true);
        echo "\">
    <!--[if IE 8]><script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/es5.js"), "html", null, true);
        echo "\"></script><![endif]-->
   <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("tags/js/standalone/selectize.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("tags/css/selectize.default.css"), "html", null, true);
        echo "\">
</head>

<body>
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashbag", []), "all", [], "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 41
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 42
                echo "            <div class=\"alert alert-info alert-with-icon alert-dashborad\" data-notify=\"container\"  style=\"position: absolute;right: 20px;top: 0px;z-index: 1000;\">
                <i class=\"material-icons\" data-notify=\"icon\">notifications</i>
                <button type=\"button\" aria-hidden=\"true\" class=\"close\">
                    <i class=\"material-icons\">close</i>
                </button>
                <span data-notify=\"message\">";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]), "html", null, true);
                echo "</span>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
    <div class=\"wrapper\">
        <div class=\"sidebar\" data-active-color=\"blue\"  data-background-color=\"white\" >
              <!--
                  Tip 1: You can change the color of the sidebar using: data-color=\"purple | blue | green | orange | red\"

                  Tip 2: you can also add an image using data-image tag
              -->
              <div class=\"logo\">
                  <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/admin.png"), "html", null, true);
        echo "\" style=\"height: 100px;width: 100px;\">
                  <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_index");
        echo "\" class=\"simple-text\">

                      ADMIN PANEL
                  </a>
              </div>
              <div class=\"sidebar-wrapper\" style=\"overflow: scroll;padding-bottom:200px\">
                     <ul class=\"nav\">
                        <li ";
        // line 68
        if (twig_in_filter("app_home_index", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"";
        }
        echo ">
                            <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_index");
        echo "\">
                                <i class=\"material-icons\">dashboard</i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li ";
        // line 74
        if (twig_in_filter("app_home_notif_", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"  aria-expanded=\"true\" ";
        }
        echo ">
                            <a data-toggle=\"collapse\" href=\"#notification\" class=\"\" >
                                <i class=\"material-icons\">notifications_active</i>
                                <p>Notifications
                                    <b class=\"caret\"></b>
                                </p>
                            </a>
                            <div class=\"collapse ";
        // line 81
        if (twig_in_filter("app_home_notif_", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo "  in ";
        }
        echo "\" id=\"notification\" aria-expanded=\"true\" style=\"\">
                                <ul class=\"nav\">
                                    <li  ";
        // line 83
        if (twig_in_filter("app_home_notif_poster", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_notif_poster");
        echo "\">Movie/TV Show</a></li>
                                    <li  ";
        // line 84
        if (twig_in_filter("app_home_notif_channel", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_notif_channel");
        echo "\">TV Channel</a></li>
                                    <li  ";
        // line 85
        if (twig_in_filter("app_home_notif_category", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_notif_category");
        echo "\">Category</a></li>
                                    <li  ";
        // line 86
        if (twig_in_filter("app_home_notif_genre", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_notif_genre");
        echo "\">Genre</a></li>
                                    <li  ";
        // line 87
        if (twig_in_filter("app_home_notif_url", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_notif_url");
        echo "\">Url</a></li>
                                </ul>
                            </div>
                        </li>
                        <li ";
        // line 91
        if (twig_in_filter("app_slide_", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"";
        }
        echo ">
                            <a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_slide_index");
        echo "\">
                                <i class=\"material-icons\">slideshow</i>
                                <p>Slide</p>
                            </a>
                        </li>
                        <li ";
        // line 97
        if (twig_in_filter("app_movie_", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"";
        }
        echo ">
                            <a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_index");
        echo "\">
                                <i class=\"material-icons\">movie</i>
                                <p>Movies</p>
                            </a>
                        </li>
                        <li ";
        // line 103
        if (twig_in_filter("app_serie_", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"";
        }
        echo ">
                            <a href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_index");
        echo "\">
                                <i class=\"material-icons\">tv</i>
                                <p>TV Shows</p>
                            </a>
                        </li>
                        <li ";
        // line 109
        if (twig_in_filter("app_channel_", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"";
        }
        echo ">
                            <a href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_index");
        echo "\">
                                <i class=\"material-icons\">live_tv</i>
                                <p>TV channels</p>
                            </a>
                        </li>
                        <li ";
        // line 115
        if (twig_in_filter("app_category_", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"";
        }
        echo ">
                            <a href=\"";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_category_index");
        echo "\">
                                <i class=\"material-icons\">view_list</i>
                                <p>Channels categoriies</p>
                            </a>
                        </li>
                        <li ";
        // line 121
        if (twig_in_filter("app_country_", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"";
        }
        echo ">
                            <a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_country_index");
        echo "\">
                                <i class=\"material-icons\">public</i>
                                <p>Countries</p>
                            </a>
                        </li>
                        <li ";
        // line 127
        if (twig_in_filter("app_genre_", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"";
        }
        echo ">
                            <a href=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_genre_index");
        echo "\">
                                <i class=\"material-icons\">label</i>
                                <p>Genres </p>
                            </a>
                        </li>
                        <li ";
        // line 133
        if (twig_in_filter("app_actor_", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"";
        }
        echo ">
                            <a href=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_actor_index");
        echo "\">
                                <i class=\"material-icons\">recent_actors</i>
                                <p>Actors</p>
                            </a>
                        </li>
                        <li ";
        // line 139
        if (twig_in_filter("language", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"";
        }
        echo "  >
                            <a href=\"";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_language_index");
        echo "\">
                            <i class=\"material-icons\">flag</i>
                                <p>Subtitle languages </p>
                            </a>
                        </li>        
                        <li ";
        // line 145
        if (twig_in_filter("comment", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"";
        }
        echo "  >
                            <a href=\"";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_comment_index");
        echo "\">
                            <i class=\"material-icons\">comments</i>
                                <p>Comments</p>
                            </a>
                        </li>
                        <li ";
        // line 151
        if (twig_in_filter("support", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"";
        }
        echo "  >
                            <a href=\"";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_support_index");
        echo "\">
                            <i class=\"material-icons\">messages</i>
                                <p>Support messages</p>
                            </a>
                        </li>
                        <li ";
        // line 157
        if (twig_in_filter("pack", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"";
        }
        echo "  >
                            <a href=\"";
        // line 158
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_pack_index");
        echo "\">
                            <i class=\"material-icons\">local_mall</i>
                                <p>Subscription packs </p>
                            </a>
                        </li>
                        <li ";
        // line 163
        if (twig_in_filter("subscription_", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"";
        }
        echo "  >
                            <a href=\"";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_subscription_index");
        echo "\">
                            <i class=\"material-icons\">credit_card</i>
                                <p>Subscriptions</p>
                            </a>
                        </li>
                        
                        <li ";
        // line 170
        if (twig_in_filter("version", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"";
        }
        echo "  >
                            <a href=\"";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_version_index");
        echo "\">
                            <i class=\"material-icons\">apps</i>
                                <p>App versions</p>
                            </a>
                        </li>
                        <li ";
        // line 176
        if (twig_in_filter("user", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"";
        }
        echo "  >
                            <a href=\"";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_index");
        echo "\">
                            <i class=\"material-icons\">group</i><p>Users</p>
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_settings");
        echo "\">
                            <i class=\"material-icons\">settings</i><p>Settings</p>
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_logout");
        echo "\">
                            <i class=\"material-icons\">exit_to_app</i><p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        <div class=\"main-panel\" style=\"overflow: scroll\">
            <nav class=\"navbar navbar-transparent navbar-absolute\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">Dashboard</a>
                    </div>
                    <div class=\"collapse navbar-collapse\">

                    </div>
                </div>
            </nav>

            <div class=\"content\">
                ";
        // line 213
        $this->displayBlock('body', $context, $blocks);
        // line 216
        echo "            </div>

            <footer class=\"footer\">
            </footer>
        </div>
    </div>

</body>

    <!--   Core JS Files   -->
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/material.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!--  Notifications Plugin    -->
    <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>

    <!--  Google Maps Plugin    -->
    <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js\"></script>

    <!-- Material Dashboard javascript methods -->
    <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/material-dashboard.js"), "html", null, true);
        echo "\"></script>

    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/js/config.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/js/util.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/js/jquery.emojiarea.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/js/emoji-picker.js"), "html", null, true);
        echo "\"></script>


    <script>

      \$(function() {
        // Initializes and creates emoji set from sprite sheet
        window.emojiPicker = new EmojiPicker({
          emojiable_selector: '[data-emojiable=true]',
          assetsPath: '../lib/img/',
          popupButtonClasses: 'fa fa-smile-o'
        });
        // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields
        // You may want to delay this step if you have dynamically created input fields that appear later in the loading process
        // It can be called as many times as necessary; previously converted input fields will not be converted again
        window.emojiPicker.discover();
      });
        function setTextColor(picker) {
            document.getElementsByTagName('body')[0].style.color = '#' + picker.toString()
        }
    </script>

</html>";
    }

    // line 213
    public function block_body($context, array $blocks = [])
    {
        // line 214
        echo "                    
                ";
    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  573 => 214,  570 => 213,  543 => 243,  539 => 242,  535 => 241,  531 => 240,  527 => 239,  521 => 236,  512 => 230,  506 => 227,  502 => 226,  490 => 216,  488 => 213,  459 => 187,  451 => 182,  443 => 177,  437 => 176,  429 => 171,  423 => 170,  414 => 164,  408 => 163,  400 => 158,  394 => 157,  386 => 152,  380 => 151,  372 => 146,  366 => 145,  358 => 140,  352 => 139,  344 => 134,  338 => 133,  330 => 128,  324 => 127,  316 => 122,  310 => 121,  302 => 116,  296 => 115,  288 => 110,  282 => 109,  274 => 104,  268 => 103,  260 => 98,  254 => 97,  246 => 92,  240 => 91,  229 => 87,  221 => 86,  213 => 85,  205 => 84,  197 => 83,  190 => 81,  178 => 74,  170 => 69,  164 => 68,  154 => 61,  150 => 60,  139 => 51,  133 => 50,  124 => 47,  117 => 42,  112 => 41,  108 => 40,  101 => 36,  97 => 35,  92 => 33,  88 => 32,  82 => 29,  78 => 28,  73 => 26,  65 => 21,  59 => 18,  53 => 15,  41 => 6,  37 => 5,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle::layout.html.twig", "/home/tunicewo/public_html/src/AppBundle/Resources/views/layout.html.twig");
    }
}
