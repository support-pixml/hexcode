<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* journal3/template/journal3/module/master_slider.twig */
class __TwigTemplate_6c86cc55ce0e938041155f7274f5c31a261ba3f8de508462535575acbace3733 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ($context["classes"] ?? null)], "method", false, false, false, 1);
        echo "\" style=\"background-image:url('";
        echo ($context["first_image"] ?? null);
        echo "')\">
  <div class=\"journal-loading\"><i class=\"fa fa-spinner fa-spin\"></i></div>
  ";
        // line 3
        if ((($context["staticText"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["staticTextLink"] ?? null), "href", [], "any", false, false, false, 3))) {
            // line 4
            echo "    <a href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["staticTextLink"] ?? null), "href", [], "any", false, false, false, 4);
            echo "\" class=\"slider-static-text static-text-1\"><span>";
            echo ($context["staticText"] ?? null);
            echo "</span></a>
  ";
        } elseif (        // line 5
($context["staticText"] ?? null)) {
            // line 6
            echo "    <div class=\"slider-static-text static-text-1\"><span>";
            echo ($context["staticText"] ?? null);
            echo "</span></div>
  ";
        }
        // line 8
        echo "  ";
        if ((($context["static2Text"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["static2TextLink"] ?? null), "href", [], "any", false, false, false, 8))) {
            // line 9
            echo "    <a href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["static2TextLink"] ?? null), "href", [], "any", false, false, false, 9);
            echo "\" class=\"slider-static-text static-text-2\"><span>";
            echo ($context["static2Text"] ?? null);
            echo "</span></a>
  ";
        } elseif (        // line 10
($context["static2Text"] ?? null)) {
            // line 11
            echo "    <div class=\"slider-static-text static-text-2\"><span>";
            echo ($context["static2Text"] ?? null);
            echo "</span></div>
  ";
        }
        // line 13
        echo "  <img src=\"";
        echo ($context["first_image"] ?? null);
        echo "\" ";
        if (($context["first_image2x"] ?? null)) {
            echo "srcset=\"";
            echo ($context["first_image"] ?? null);
            echo " 1x, ";
            echo ($context["first_image2x"] ?? null);
            echo " 2x\"";
        }
        echo " alt=\"";
        echo ($context["first_alt"] ?? null);
        echo "\" width=\"";
        echo ($context["width"] ?? null);
        echo "\" height=\"";
        echo ($context["height"] ?? null);
        echo "\" />
  ";
        // line 15
        echo "  <div class=\"master-slider ms-skin-minimal\" data-options='";
        echo json_encode(($context["options"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
        echo "' ";
        if (($context["parallaxMode"] ?? null)) {
            echo "data-parallax=\"";
            echo ($context["parallax"] ?? null);
            echo "\"";
        }
        echo ">
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "      <div class=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 17)], "method", false, false, false, 17);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "delay", [], "any", false, false, false, 17)) {
                echo "data-delay=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "delay", [], "any", false, false, false, 17);
                echo "\"";
            }
            echo ">
        ";
            // line 18
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 18), "get", [0 => "performanceLazyLoadImagesStatus"], "method", false, false, false, 18) && ($context["lazyLoad"] ?? null))) {
                // line 19
                echo "          <img src=\"";
                echo ($context["dummy_image"] ?? null);
                echo "\" data-src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 19);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 19)) {
                    echo " data-srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 19);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 19);
                    echo " 2x\" ";
                }
                echo " alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 19);
                echo "\" width=\"";
                echo ($context["width"] ?? null);
                echo "\" height=\"";
                echo ($context["height"] ?? null);
                echo "\" class=\"lazyload\"/>
        ";
            } else {
                // line 21
                echo "          <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 21);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 21)) {
                    echo " srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 21);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 21);
                    echo " 2x\" ";
                }
                echo " alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 21);
                echo "\" width=\"";
                echo ($context["width"] ?? null);
                echo "\" height=\"";
                echo ($context["height"] ?? null);
                echo "\"/>
        ";
            }
            // line 23
            echo "
        ";
            // line 24
            if ((($context["thumbnails"] ?? null) && twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 24))) {
                // line 25
                echo "          <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 25);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 25)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 25);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 25);
                    echo " 2x\"";
                }
                echo " alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 25);
                echo "\" class=\"ms-thumb\"/>
        ";
            }
            // line 27
            echo "
        ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 28), "href", [], "any", false, false, false, 28)) {
                // line 29
                echo "          <a href=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 29), "href", [], "any", false, false, false, 29);
                echo "\" ";
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 29)], "method", false, false, false, 29);
                echo "></a>
        ";
            }
            // line 31
            echo "
        ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 32) == "video")) {
                // line 33
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "videoType", [], "any", false, false, false, 33) == "html5")) {
                    // line 34
                    echo "            <video data-autopause=\"true\" ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 34), "hasClass", [0 => "ios"], "method", false, false, false, 34)) {
                        echo "playsinline";
                    }
                    echo ">
              ";
                    // line 35
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "videoSrc", [], "any", false, false, false, 35));
                    foreach ($context['_seq'] as $context["type"] => $context["src"]) {
                        // line 36
                        echo "                <source src=\"";
                        echo $context["src"];
                        echo "\" type=\"video/";
                        echo $context["type"];
                        echo "\"/>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['type'], $context['src'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "            </video>
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 39
$context["item"], "videoType", [], "any", false, false, false, 39) == "youtube")) {
                    // line 40
                    echo "            <a href=\"https://www.youtube.com/embed/";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "videoSrc", [], "any", false, false, false, 40);
                    echo "?hd=1&wmode=opaque&controls=1&showinfo=0&autoplay=1\" data-type=\"video\"></a>
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 41
$context["item"], "videoType", [], "any", false, false, false, 41) == "vimeo")) {
                    // line 42
                    echo "            <a href=\"https://player.vimeo.com/video/";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "videoSrc", [], "any", false, false, false, 42);
                    echo "\" data-type=\"video\"></a>
          ";
                }
                // line 44
                echo "        ";
            }
            // line 45
            echo "
        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 46));
            foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                // line 47
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["subitem"], "type", [], "any", false, false, false, 47) == "text")) {
                    // line 48
                    echo "            <div class=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 48)], "method", false, false, false, 48);
                    echo "\" ";
                    echo twig_join_filter(twig_get_attribute($this->env, $this->source, $context["subitem"], "data", [], "any", false, false, false, 48), " ");
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "text", [], "any", false, false, false, 48);
                    echo "</div>
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 49
$context["subitem"], "type", [], "any", false, false, false, 49) == "hotspot")) {
                    // line 50
                    echo "            <div class=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 50)], "method", false, false, false, 50);
                    echo "\" ";
                    echo twig_join_filter(twig_get_attribute($this->env, $this->source, $context["subitem"], "data", [], "any", false, false, false, 50), " ");
                    echo "><div class=\"product-tt\">";
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "text", [], "any", false, false, false, 50);
                    echo "</div></div>
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 51
$context["subitem"], "type", [], "any", false, false, false, 51) == "shape")) {
                    // line 52
                    echo "            <img class=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 52)], "method", false, false, false, 52);
                    echo "\" ";
                    echo twig_join_filter(twig_get_attribute($this->env, $this->source, $context["subitem"], "data", [], "any", false, false, false, 52), " ");
                    echo " src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" data-src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "alt", [], "any", false, false, false, 52);
                    echo "\"/>
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 53
$context["subitem"], "type", [], "any", false, false, false, 53) == "button")) {
                    // line 54
                    echo "            <a class=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 54)], "method", false, false, false, 54);
                    echo "\" ";
                    echo twig_join_filter(twig_get_attribute($this->env, $this->source, $context["subitem"], "data", [], "any", false, false, false, 54), " ");
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "link", [], "any", false, false, false, 54), "href", [], "any", false, false, false, 54)) {
                        echo "href=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "link", [], "any", false, false, false, 54), "href", [], "any", false, false, false, 54);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, $context["subitem"], "link", [], "any", false, false, false, 54)], "method", false, false, false, 54);
                        echo " ";
                    }
                    echo "><span>";
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "text", [], "any", false, false, false, 54);
                    echo "</span></a>
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 55
$context["subitem"], "type", [], "any", false, false, false, 55) == "image")) {
                    // line 56
                    echo "            <img class=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 56)], "method", false, false, false, 56);
                    echo "\" ";
                    echo twig_join_filter(twig_get_attribute($this->env, $this->source, $context["subitem"], "data", [], "any", false, false, false, 56), " ");
                    echo " src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "image", [], "any", false, false, false, 56);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "alt", [], "any", false, false, false, 56);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "width", [], "any", false, false, false, 56);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "height", [], "any", false, false, false, 56);
                    echo "\"/>
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 57
$context["subitem"], "type", [], "any", false, false, false, 57) == "video")) {
                    // line 58
                    echo "            <div class=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 58)], "method", false, false, false, 58);
                    echo "\" ";
                    echo twig_join_filter(twig_get_attribute($this->env, $this->source, $context["subitem"], "data", [], "any", false, false, false, 58), " ");
                    echo ">
              ";
                    // line 59
                    if ((twig_get_attribute($this->env, $this->source, $context["subitem"], "videoType", [], "any", false, false, false, 59) == "html5")) {
                        // line 60
                        echo "                <video controls>
                  ";
                        // line 61
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["subitem"], "videoSrc", [], "any", false, false, false, 61));
                        foreach ($context['_seq'] as $context["type"] => $context["src"]) {
                            // line 62
                            echo "                    <source src=\"";
                            echo $context["src"];
                            echo "\" type=\"video/";
                            echo $context["type"];
                            echo "\"/>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['type'], $context['src'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 64
                        echo "                </video>
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 65
$context["subitem"], "videoType", [], "any", false, false, false, 65) == "youtube")) {
                        // line 66
                        echo "                <iframe src=\"https://www.youtube.com/embed/";
                        echo twig_get_attribute($this->env, $this->source, $context["subitem"], "videoSrc", [], "any", false, false, false, 66);
                        echo "?hd=1&wmode=opaque&controls=1&showinfo=0\"></iframe>
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 67
$context["subitem"], "videoType", [], "any", false, false, false, 67) == "vimeo")) {
                        // line 68
                        echo "                <iframe src=\"https://player.vimeo.com/video/";
                        echo twig_get_attribute($this->env, $this->source, $context["subitem"], "videoSrc", [], "any", false, false, false, 68);
                        echo "\"></iframe>
              ";
                    }
                    // line 70
                    echo "            </div>
          ";
                }
                // line 72
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/master_slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 75,  388 => 73,  382 => 72,  378 => 70,  372 => 68,  370 => 67,  365 => 66,  363 => 65,  360 => 64,  349 => 62,  345 => 61,  342 => 60,  340 => 59,  333 => 58,  331 => 57,  316 => 56,  314 => 55,  297 => 54,  295 => 53,  286 => 52,  284 => 51,  275 => 50,  273 => 49,  264 => 48,  261 => 47,  257 => 46,  254 => 45,  251 => 44,  245 => 42,  243 => 41,  238 => 40,  236 => 39,  233 => 38,  222 => 36,  218 => 35,  211 => 34,  208 => 33,  206 => 32,  203 => 31,  195 => 29,  193 => 28,  190 => 27,  174 => 25,  172 => 24,  169 => 23,  149 => 21,  127 => 19,  125 => 18,  114 => 17,  110 => 16,  99 => 15,  80 => 13,  74 => 11,  72 => 10,  65 => 9,  62 => 8,  56 => 6,  54 => 5,  47 => 4,  45 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/master_slider.twig", "");
    }
}
