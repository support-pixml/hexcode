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

/* journal3/template/product/product.twig */
class __TwigTemplate_107ff6bd3b1b0630485891c5a0a101730cdd7a5c4e650b2fe9c5a4e59cd24e14 extends \Twig\Template
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
        $context["stylePrefix"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1), "isPopup", [0 => "quickview"], "method", false, false, false, 1)) ? ("quickviewPageStyle") : ("productPageStyle"));
        // line 2
        $context["direction"] = ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 2), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesPosition")], "method", false, false, false, 2) == "left") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 2), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesPosition")], "method", false, false, false, 2) == "right"))) ? ("vertical") : ("horizontal"));
        // line 3
        $context["carousel"] = ((($context["direction"] ?? null) == "vertical") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 3), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesCarousel")], "method", false, false, false, 3));
        // line 4
        $context["carouselOptions"] = ["slidesPerView" => "auto", "spaceBetween" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
($context["j3"] ?? null), "settings", [], "any", false, true, false, 6), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesSpacing")], "method", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, true, false, 6), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesSpacing")], "method", false, false, false, 6), 0)) : (0)), "direction" =>         // line 7
($context["direction"] ?? null)];
        // line 9
        $context["galleryOptions"] = ["thumbWidth" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
($context["j3"] ?? null), "settings", [], "any", false, false, false, 10), "get", [0 => "image_dimensions_popup_thumb.width"], "method", false, false, false, 10), "thumbConHeight" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
($context["j3"] ?? null), "settings", [], "any", false, false, false, 11), "get", [0 => "image_dimensions_popup_thumb.height"], "method", false, false, false, 11), "addClass" => "lg-product-images", "mode" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
($context["j3"] ?? null), "settings", [], "any", false, false, false, 13), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryMode")], "method", false, false, false, 13), "download" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["j3"] ?? null), "settings", [], "any", false, false, false, 14), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryDownload")], "method", false, false, false, 14), "fullScreen" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
($context["j3"] ?? null), "settings", [], "any", false, false, false, 15), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryFullScreen")], "method", false, false, false, 15)];
        // line 17
        $context["quickviewExpand"] = ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 17), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 17) || (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 17), "get", [0 => "globalExpandCharactersLimit"], "method", false, false, false, 17) > 0) && ($context["description"] ?? null)) && (twig_length_filter($this->env, ($context["description"] ?? null)) <= twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 17), "get", [0 => "globalExpandCharactersLimit"], "method", false, false, false, 17))))) ? ("no-expand") : (""));
        // line 18
        echo ($context["header"] ?? null);
        echo "
";
        // line 19
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 19), "isPopup", [], "method", false, false, false, 19)) {
            // line 20
            echo "<ul class=\"breadcrumb\">
  ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 22
                echo "  <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 22);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 22);
                echo "</a></li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "</ul>
";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 25), "get", [0 => "pageTitlePosition"], "method", false, false, false, 25) == "top")) {
                // line 26
                echo "  <h1 class=\"title page-title\"><span>";
                echo ($context["heading_title"] ?? null);
                echo "</span></h1>
";
            }
            // line 28
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 28);
            echo "
<div id=\"product-product\" class=\"container\">
  <div class=\"row\">";
            // line 30
            echo ($context["column_left"] ?? null);
            echo "
    <div id=\"content\" class=\"";
            // line 31
            echo ($context["class"] ?? null);
            echo "\">
      ";
        }
        // line 33
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 34
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 34), "isPopup", [0 => "options"], "method", false, false, false, 34)) {
            // line 35
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 35), "get", [0 => "pageTitlePosition"], "method", false, false, false, 35) == "default") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 35), "isPopup", [0 => "quickview"], "method", false, false, false, 35))) {
                // line 36
                echo "          <h1 class=\"title page-title\">";
                echo ($context["heading_title"] ?? null);
                echo "</h1>
        ";
            }
            // line 38
            echo "      ";
        }
        // line 39
        echo "      ";
        $context["classes"] = ((twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ["out-of-stock" => (        // line 40
($context["product_quantity"] ?? null) <= 0), "has-countdown" =>         // line 41
($context["date_end"] ?? null), "has-zero-price" =>  !        // line 42
($context["product_price_value"] ?? null), "has-extra-button" =>         // line 43
($context["product_extra_buttons"] ?? null)]], "method", false, false, false, 39) . " ") .         // line 44
($context["product_exclude_classes"] ?? null));
        // line 45
        echo "      <div class=\"product-info ";
        echo ($context["classes"] ?? null);
        echo "\">
        ";
        // line 46
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 46), "isPopup", [0 => "options"], "method", false, false, false, 46)) {
            // line 47
            echo "        <div class=\"product-left\">
          <div class=\"product-image direction-";
            // line 48
            echo ($context["direction"] ?? null);
            echo " position-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 48), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesPosition")], "method", false, false, false, 48);
            echo "\">
            <div class=\"swiper main-image\" data-options='";
            // line 49
            echo json_encode(twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "carousel", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 49), "getJs", [], "method", false, false, false, 49), 1 => (($context["stylePrefix"] ?? null) . "ImageCarouselStyle")], "method", false, false, false, 49), twig_constant("JSON_FORCE_OBJECT"));
            echo "' ";
            if (((((twig_length_filter($this->env, ($context["images"] ?? null)) > 1) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 49), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesStatus")], "method", false, false, false, 49)) && ($context["carousel"] ?? null)) && (($context["direction"] ?? null) == "vertical"))) {
                echo "style=\"width: calc(100% - ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 49), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 49);
                echo "px)\"";
            }
            echo ">
              <div class=\"swiper-container\" ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 50)) {
                echo "dir=\"rtl\"";
            }
            echo ">
                <div class=\"swiper-wrapper\">
                  ";
            // line 52
            $context["gallery"] = [];
            // line 53
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 54
                echo "                    ";
                $context["gallery"] = twig_array_merge(($context["gallery"] ?? null), [0 => ["src" => twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 54), "thumb" => twig_get_attribute($this->env, $this->source, $context["image"], "galleryThumb", [], "any", false, false, false, 54), "subHtml" => ($context["heading_title"] ?? null)]]);
                // line 55
                echo "                    <div class=\"swiper-slide\" ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 55), "isPopup", [], "method", false, false, false, 55) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 55), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryStatus")], "method", false, false, false, 55))) {
                    echo " data-gallery=\".lightgallery-product-images\" data-index=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 55);
                    echo "\" ";
                }
                echo ">
                      <img src=\"";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 56);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["image"], "image2x", [], "any", false, false, false, 56)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 56);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "image2x", [], "any", false, false, false, 56);
                    echo " 2x\"";
                }
                echo " data-largeimg=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 56);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 56), "get", [0 => "image_dimensions_thumb.width"], "method", false, false, false, 56);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 56), "get", [0 => "image_dimensions_thumb.height"], "method", false, false, false, 56);
                echo "\"/>
                    </div>
                  ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                </div>
              </div>
              <div class=\"swiper-controls\">
                <div class=\"swiper-buttons\">
                  <div class=\"swiper-button-prev\"></div>
                  <div class=\"swiper-button-next\"></div>
                </div>
                <div class=\"swiper-pagination\"></div>
              </div>
              ";
            // line 68
            if (($context["product_labels"] ?? null)) {
                // line 69
                echo "                <div class=\"product-labels\">
                  ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["product_labels"] ?? null));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 71
                    echo "                    <span class=\"product-label product-label-";
                    echo $context["id"];
                    echo " product-label-";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 71);
                    echo "\"><b>";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 71);
                    echo "</b></span>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                </div>
              ";
            }
            // line 75
            echo "            </div>
            ";
            // line 76
            if (((twig_length_filter($this->env, ($context["images"] ?? null)) > 1) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 76), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesStatus")], "method", false, false, false, 76))) {
                // line 77
                echo "              ";
                if (($context["carousel"] ?? null)) {
                    // line 78
                    echo "                <div class=\"swiper additional-images\" data-options='";
                    echo json_encode(($context["carouselOptions"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
                    echo "' ";
                    if ((($context["direction"] ?? null) == "vertical")) {
                        echo "style=\"width: ";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 78), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 78);
                        echo "px\"";
                    }
                    echo ">
                  <div class=\"swiper-container\" ";
                    // line 79
                    if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 79)) {
                        echo "dir=\"rtl\"";
                    }
                    echo ">
                    <div class=\"swiper-wrapper\">
                      ";
                    // line 81
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 82
                        echo "                        <div class=\"swiper-slide additional-image\" data-index=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 82);
                        echo "\">
                          <img src=\"";
                        // line 83
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 83);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 83)) {
                            echo "srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 83);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 83);
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\"/>
                        </div>
                      ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo "                    </div>
                  </div>
                  <div class=\"swiper-buttons\">
                    <div class=\"swiper-button-prev\"></div>
                    <div class=\"swiper-button-next\"></div>
                  </div>
                  <div class=\"swiper-pagination\"></div>
                </div>
              ";
                } else {
                    // line 95
                    echo "                <div class=\"additional-images\">
                  ";
                    // line 96
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 97
                        echo "                    <div class=\"additional-image\" data-index=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 97);
                        echo "\">
                      <img src=\"";
                        // line 98
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 98);
                        echo "\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\"/>
                    </div>
                  ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 101
                    echo "                </div>
              ";
                }
                // line 103
                echo "            ";
            }
            // line 104
            echo "          </div>
          ";
            // line 105
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 105), "isPopup", [], "method", false, false, false, 105) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 105), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryStatus")], "method", false, false, false, 105))) {
                // line 106
                echo "          <div class=\"lightgallery lightgallery-product-images\" data-images='";
                echo twig_escape_filter($this->env, json_encode(($context["gallery"] ?? null)));
                echo "' data-options='";
                echo json_encode(($context["galleryOptions"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
                echo "'></div>
          ";
            }
            // line 108
            echo "          ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 108), "isPopup", [0 => "options"], "method", false, false, false, 108)) {
                // line 109
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "image", [], "any", false, false, false, 109)) {
                    // line 110
                    echo "            <div class=\"product-blocks blocks-image\">
              ";
                    // line 111
                    echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "image", [], "any", false, false, false, 111));
                    echo "
            </div>
            ";
                }
                // line 114
                echo "          ";
            }
            // line 115
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 115), "isPopup", [0 => "quickview"], "method", false, false, false, 115) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 115), "get", [0 => "quickviewDescription"], "method", false, false, false, 115) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 115), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 115) == "image")))) {
                // line 116
                echo "            <div class=\"description ";
                echo ($context["quickviewExpand"] ?? null);
                echo "\">
              <div class=\"expand-block\">
                <div class=\"expand-content\">
                  ";
                // line 119
                echo ($context["description"] ?? null);
                echo "
                </div>
                ";
                // line 121
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 121), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 121)) {
                    // line 122
                    echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
                ";
                }
                // line 124
                echo "              </div>
            </div>
          ";
            }
            // line 127
            echo "          ";
            if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 127), "isPopup", [], "method", false, false, false, 127)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 127), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 127) == "image"))) {
                // line 128
                echo "            <div class=\"tags\">
              <span class=\"tags-title\">";
                // line 129
                echo ($context["text_tags"] ?? null);
                echo "</span>
              ";
                // line 130
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 131
                    echo "                <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 131);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 131);
                    echo "</a>
                ";
                    // line 132
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 132)) {
                        echo "<b>,</b>";
                    }
                    // line 133
                    echo "              ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 134
                echo "            </div>
          ";
            }
            // line 136
            echo "        </div>
        ";
        }
        // line 138
        echo "        <div class=\"product-right\">
          <div id=\"product\" class=\"product-details\">
          ";
        // line 140
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 140), "isPopup", [0 => "options"], "method", false, false, false, 140)) {
            // line 141
            echo "          <div class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</div>
          ";
            // line 142
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "top", [], "any", false, false, false, 142)) {
                // line 143
                echo "          <div class=\"product-blocks blocks-top\">
          ";
                // line 144
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "top", [], "any", false, false, false, 144));
                echo "
          </div>
          ";
            }
            // line 147
            echo "          ";
        }
        // line 148
        echo "
          ";
        // line 149
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 149), "isPopup", [0 => "quickview"], "method", false, false, false, 149) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 149), "get", [0 => "quickviewDescription"], "method", false, false, false, 149) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 149), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 149) == "top")))) {
            // line 150
            echo "            <div class=\"description ";
            echo ($context["quickviewExpand"] ?? null);
            echo "\">
              <div class=\"expand-block\">
                <div class=\"expand-content\">
                  ";
            // line 153
            echo ($context["description"] ?? null);
            echo "
                </div>
                ";
            // line 155
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 155), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 155)) {
                // line 156
                echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
                ";
            }
            // line 158
            echo "              </div>
            </div>
          ";
        }
        // line 161
        echo "
          ";
        // line 162
        if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 162), "isPopup", [0 => "options"], "method", false, false, false, 162) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 162), "get", [0 => (($context["stylePrefix"] ?? null) . "Stats")], "method", false, false, false, 162)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 162), "get", [0 => (($context["stylePrefix"] ?? null) . "StatsPosition")], "method", false, false, false, 162) == "default"))) {
            // line 163
            echo "            <div class=\"product-stats\">
              <ul class=\"list-unstyled\">
                ";
            // line 165
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 165), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStock")], "method", false, false, false, 165)) {
                // line 166
                echo "                  <li class=\"product-stock ";
                if ((($context["product_quantity"] ?? null) > 0)) {
                    echo "in-stock";
                } else {
                    echo "out-of-stock";
                }
                echo "\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 166), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStockText")], "method", false, false, false, 166);
                echo ":</b> <span>";
                echo ($context["stock"] ?? null);
                echo "</span></li>
                ";
            }
            // line 168
            echo "                ";
            if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 168), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 168)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 168), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 168) == "list"))) {
                // line 169
                echo "                  <li class=\"product-manufacturer\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 169), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerText")], "method", false, false, false, 169);
                echo ":</b> <a href=\"";
                echo ($context["manufacturers"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a></li>
                ";
            }
            // line 171
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 171), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductReward")], "method", false, false, false, 171) && ($context["reward"] ?? null))) {
                // line 172
                echo "                  <li class=\"product-reward\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 172), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductRewardText")], "method", false, false, false, 172);
                echo ":</b> <span>";
                echo ($context["reward"] ?? null);
                echo "</span></li>
                ";
            }
            // line 174
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 174), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModel")], "method", false, false, false, 174) && ($context["model"] ?? null))) {
                // line 175
                echo "                  <li class=\"product-model\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 175), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModelText")], "method", false, false, false, 175);
                echo ":</b> <span>";
                echo ($context["model"] ?? null);
                echo "</span></li>
                ";
            }
            // line 177
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 177), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeight")], "method", false, false, false, 177) && ($context["product_weight"] ?? null))) {
                // line 178
                echo "                  <li class=\"product-weight\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 178), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeightText")], "method", false, false, false, 178);
                echo ":</b> <span>";
                echo ($context["product_weight"] ?? null);
                echo "</span></li>
                ";
            }
            // line 180
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 180), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimension")], "method", false, false, false, 180) && ($context["product_dimension"] ?? null))) {
                // line 181
                echo "                  <li class=\"product-dimension\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 181), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimensionText")], "method", false, false, false, 181);
                echo ":</b> <span>";
                echo ($context["product_length"] ?? null);
                echo " x ";
                echo ($context["product_width"] ?? null);
                echo " x ";
                echo ($context["product_height"] ?? null);
                echo "</span></li>
                ";
            }
            // line 183
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 183), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKU")], "method", false, false, false, 183) && ($context["product_sku"] ?? null))) {
                // line 184
                echo "                  <li class=\"product-sku\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 184), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKUText")], "method", false, false, false, 184);
                echo ":</b> <span> ";
                echo ($context["product_sku"] ?? null);
                echo "</span></li>
                ";
            }
            // line 186
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 186), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPC")], "method", false, false, false, 186) && ($context["product_upc"] ?? null))) {
                // line 187
                echo "                  <li class=\"product-upc\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 187), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPCText")], "method", false, false, false, 187);
                echo ":</b> <span>";
                echo ($context["product_upc"] ?? null);
                echo "</span></li>
                ";
            }
            // line 189
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 189), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEAN")], "method", false, false, false, 189) && ($context["product_ean"] ?? null))) {
                // line 190
                echo "                  <li class=\"product-ean\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 190), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEANText")], "method", false, false, false, 190);
                echo ":</b> <span>";
                echo ($context["product_ean"] ?? null);
                echo "</span></li>
                ";
            }
            // line 192
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 192), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJAN")], "method", false, false, false, 192) && ($context["product_jan"] ?? null))) {
                // line 193
                echo "                  <li class=\"product-jan\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 193), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJANText")], "method", false, false, false, 193);
                echo ":</b> <span>";
                echo ($context["product_jan"] ?? null);
                echo "</span></li>
                ";
            }
            // line 195
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 195), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBN")], "method", false, false, false, 195) && ($context["product_isbn"] ?? null))) {
                // line 196
                echo "                  <li class=\"product-isbn\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 196), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBNText")], "method", false, false, false, 196);
                echo ":</b> <span>";
                echo ($context["product_isbn"] ?? null);
                echo "</span></li>
                ";
            }
            // line 198
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 198), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPN")], "method", false, false, false, 198) && ($context["product_mpn"] ?? null))) {
                // line 199
                echo "                  <li class=\"product-mpn\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 199), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPNText")], "method", false, false, false, 199);
                echo ":</b> <span>";
                echo ($context["product_mpn"] ?? null);
                echo "</span></li>
                ";
            }
            // line 201
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 201), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocation")], "method", false, false, false, 201) && ($context["product_location"] ?? null))) {
                // line 202
                echo "                  <li class=\"product-location\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 202), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocationText")], "method", false, false, false, 202);
                echo ":</b> <span>";
                echo ($context["product_location"] ?? null);
                echo "</span></li>
                ";
            }
            // line 204
            echo "              </ul>
              ";
            // line 205
            if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 205), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 205)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 205), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 205) == "image"))) {
                // line 206
                echo "                <div class=\"brand-image product-manufacturer\">
                  <a href=\"";
                // line 207
                echo ($context["manufacturers"] ?? null);
                echo "\">
                    ";
                // line 208
                if (($context["manufacturer_image"] ?? null)) {
                    // line 209
                    echo "                      <img src=\"";
                    echo ($context["manufacturer_image"] ?? null);
                    echo "\" ";
                    if (($context["manufacturer_image2x"] ?? null)) {
                        echo "srcset=\"";
                        echo ($context["manufacturer_image"] ?? null);
                        echo " 1x, ";
                        echo ($context["manufacturer_image2x"] ?? null);
                        echo " 2x\"";
                    }
                    echo " alt=\"";
                    echo ($context["manufacturer"] ?? null);
                    echo "\"/>
                    ";
                }
                // line 211
                echo "                    <span>";
                echo ($context["manufacturer"] ?? null);
                echo "</span>
                  </a>
                </div>
              ";
            }
            // line 215
            echo "              ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 215), "get", [0 => (($context["stylePrefix"] ?? null) . "CustomStats")], "method", false, false, false, 215)) {
                // line 216
                echo "                <div class=\"custom-stats\">
                  ";
                // line 217
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 217), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSold")], "method", false, false, false, 217)) {
                    // line 218
                    echo "                    <div class=\"product-sold\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 218), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "SoldText"), 1 => ($context["products_sold"] ?? null)], "method", false, false, false, 218);
                    echo "</b></div>
                  ";
                }
                // line 220
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 220), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductViews")], "method", false, false, false, 220)) {
                    // line 221
                    echo "                    <div class=\"product-views\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 221), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "ViewsText"), 1 => ($context["product_views"] ?? null)], "method", false, false, false, 221);
                    echo "</b></div>
                  ";
                }
                // line 223
                echo "                </div>
              ";
            }
            // line 225
            echo "            </div>
          ";
        }
        // line 227
        echo "
          ";
        // line 228
        if ((($context["review_status"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 228), "isPopup", [], "method", false, false, false, 228))) {
            // line 229
            echo "            <div class=\"rating rating-page\">
              <div class=\"rating-stars\">
                ";
            // line 231
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 232
                echo "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 233
                    echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </span>";
                } else {
                    // line 236
                    echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star fa-stack-1x\"></i>
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </span>
                  ";
                }
                // line 241
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            echo "              </div>
              <div class=\"review-links\">
                <a>";
            // line 244
            echo ($context["reviews"] ?? null);
            echo "</a>
                <b>";
            // line 245
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 245), "get", [0 => (($context["stylePrefix"] ?? null) . "RatingSeparator")], "method", false, false, false, 245);
            echo "</b>
                <a>";
            // line 246
            echo ($context["text_write"] ?? null);
            echo "</a>
              </div>
            </div>
          ";
        }
        // line 250
        echo "
          ";
        // line 251
        if ((($context["date_end"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 251), "get", [0 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 251), "isPopup", [], "method", false, false, false, 251)) ? ("quickviewCountdown") : ("countdownStatus"))], "method", false, false, false, 251))) {
            // line 252
            echo "            <div class=\"countdown-wrapper\">
              ";
            // line 253
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 253), "get", [0 => (($context["stylePrefix"] ?? null) . "CountdownText")], "method", false, false, false, 253)) {
                // line 254
                echo "              <h5 class=\"countdown-title title\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 254), "get", [0 => (($context["stylePrefix"] ?? null) . "CountdownText")], "method", false, false, false, 254);
                echo "</h5>
              ";
            }
            // line 256
            echo "              <div class=\"countdown\" data-date=\"";
            echo ($context["date_end"] ?? null);
            echo "\">
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 257
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 257), "get", [0 => "countdownDay"], "method", false, false, false, 257);
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 258
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 258), "get", [0 => "countdownHour"], "method", false, false, false, 258);
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 259
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 259), "get", [0 => "countdownMin"], "method", false, false, false, 259);
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 260
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 260), "get", [0 => "countdownSec"], "method", false, false, false, 260);
            echo "</span></div>
              </div>
            </div>
          ";
        }
        // line 264
        echo "
          ";
        // line 265
        if ((($context["price"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 265), "isPopup", [0 => "options"], "method", false, false, false, 265))) {
            // line 266
            echo "          <div class=\"product-price-group\">
           <div class=\"price-wrapper\">
             <div class=\"price-group\">
               ";
            // line 269
            if ( !($context["special"] ?? null)) {
                // line 270
                echo "                 <div class=\"product-price\">";
                echo ($context["price"] ?? null);
                echo "</div>
               ";
            } else {
                // line 272
                echo "                 <div class=\"product-price-new\">";
                echo ($context["special"] ?? null);
                echo "</div>
                 <div class=\"product-price-old\">";
                // line 273
                echo ($context["price"] ?? null);
                echo "</div>
               ";
            }
            // line 275
            echo "             </div>
             ";
            // line 276
            if (($context["tax"] ?? null)) {
                // line 277
                echo "               <div class=\"product-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</div>
             ";
            }
            // line 279
            echo "             ";
            if (($context["points"] ?? null)) {
                // line 280
                echo "               <div class=\"product-points\">";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</div>
             ";
            }
            // line 282
            echo "
             ";
            // line 283
            if (($context["discounts"] ?? null)) {
                // line 284
                echo "               <div class=\"discounts\">
                 ";
                // line 285
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 286
                    echo "                   <div class=\"product-discount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 286);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 286);
                    echo "</div>
                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 288
                echo "               </div>
             ";
            }
            // line 290
            echo "           </div>
            ";
            // line 291
            if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 291), "isPopup", [0 => "options"], "method", false, false, false, 291) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 291), "get", [0 => (($context["stylePrefix"] ?? null) . "Stats")], "method", false, false, false, 291)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 291), "get", [0 => (($context["stylePrefix"] ?? null) . "StatsPosition")], "method", false, false, false, 291) == "price"))) {
                // line 292
                echo "              <div class=\"product-stats\">
                <ul class=\"list-unstyled\">
                  ";
                // line 294
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 294), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStock")], "method", false, false, false, 294)) {
                    // line 295
                    echo "                    <li class=\"product-stock ";
                    if ((($context["product_quantity"] ?? null) > 0)) {
                        echo "in-stock";
                    } else {
                        echo "out-of-stock";
                    }
                    echo "\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 295), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStockText")], "method", false, false, false, 295);
                    echo ":</b> <span>";
                    echo ($context["stock"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 297
                echo "                  ";
                if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 297), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 297)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 297), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 297) == "list"))) {
                    // line 298
                    echo "                    <li class=\"product-manufacturer\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 298), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerText")], "method", false, false, false, 298);
                    echo ":</b> <a href=\"";
                    echo ($context["manufacturers"] ?? null);
                    echo "\">";
                    echo ($context["manufacturer"] ?? null);
                    echo "</a></li>
                  ";
                }
                // line 300
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 300), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductReward")], "method", false, false, false, 300) && ($context["reward"] ?? null))) {
                    // line 301
                    echo "                    <li class=\"product-reward\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 301), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductRewardText")], "method", false, false, false, 301);
                    echo ":</b> <span>";
                    echo ($context["reward"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 303
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 303), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModel")], "method", false, false, false, 303) && ($context["model"] ?? null))) {
                    // line 304
                    echo "                    <li class=\"product-model\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 304), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModelText")], "method", false, false, false, 304);
                    echo ":</b> <span>";
                    echo ($context["model"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 306
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 306), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeight")], "method", false, false, false, 306) && ($context["product_weight"] ?? null))) {
                    // line 307
                    echo "                    <li class=\"product-weight\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 307), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeightText")], "method", false, false, false, 307);
                    echo ":</b> <span>";
                    echo ($context["product_weight"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 309
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 309), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimension")], "method", false, false, false, 309) && ($context["product_dimension"] ?? null))) {
                    // line 310
                    echo "                    <li class=\"product-dimension\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 310), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimensionText")], "method", false, false, false, 310);
                    echo ":</b> <span>";
                    echo ($context["product_length"] ?? null);
                    echo " x ";
                    echo ($context["product_width"] ?? null);
                    echo " x ";
                    echo ($context["product_height"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 312
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 312), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKU")], "method", false, false, false, 312) && ($context["product_sku"] ?? null))) {
                    // line 313
                    echo "                    <li class=\"product-sku\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 313), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKUText")], "method", false, false, false, 313);
                    echo ":</b> <span> ";
                    echo ($context["product_sku"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 315
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 315), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPC")], "method", false, false, false, 315) && ($context["product_upc"] ?? null))) {
                    // line 316
                    echo "                    <li class=\"product-upc\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 316), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPCText")], "method", false, false, false, 316);
                    echo ":</b> <span>";
                    echo ($context["product_upc"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 318
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 318), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEAN")], "method", false, false, false, 318) && ($context["product_ean"] ?? null))) {
                    // line 319
                    echo "                    <li class=\"product-ean\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 319), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEANText")], "method", false, false, false, 319);
                    echo ":</b> <span>";
                    echo ($context["product_ean"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 321
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 321), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJAN")], "method", false, false, false, 321) && ($context["product_jan"] ?? null))) {
                    // line 322
                    echo "                    <li class=\"product-jan\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 322), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJANText")], "method", false, false, false, 322);
                    echo ":</b> <span>";
                    echo ($context["product_jan"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 324
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 324), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBN")], "method", false, false, false, 324) && ($context["product_isbn"] ?? null))) {
                    // line 325
                    echo "                    <li class=\"product-isbn\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 325), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBNText")], "method", false, false, false, 325);
                    echo ":</b> <span>";
                    echo ($context["product_isbn"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 327
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 327), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPN")], "method", false, false, false, 327) && ($context["product_mpn"] ?? null))) {
                    // line 328
                    echo "                    <li class=\"product-mpn\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 328), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPNText")], "method", false, false, false, 328);
                    echo ":</b> <span>";
                    echo ($context["product_mpn"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 330
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 330), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocation")], "method", false, false, false, 330) && ($context["product_location"] ?? null))) {
                    // line 331
                    echo "                    <li class=\"product-location\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 331), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocationText")], "method", false, false, false, 331);
                    echo ":</b> <span>";
                    echo ($context["product_location"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 333
                echo "                </ul>
                ";
                // line 334
                if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 334), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 334)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 334), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 334) == "image"))) {
                    // line 335
                    echo "                  <div class=\"brand-image product-manufacturer\">
                    <a href=\"";
                    // line 336
                    echo ($context["manufacturers"] ?? null);
                    echo "\">
                      ";
                    // line 337
                    if (($context["manufacturer_image"] ?? null)) {
                        // line 338
                        echo "                        <img src=\"";
                        echo ($context["manufacturer_image"] ?? null);
                        echo "\" ";
                        if (($context["manufacturer_image2x"] ?? null)) {
                            echo "srcset=\"";
                            echo ($context["manufacturer_image"] ?? null);
                            echo " 1x, ";
                            echo ($context["manufacturer_image2x"] ?? null);
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo ($context["manufacturer"] ?? null);
                        echo "\"/>
                      ";
                    }
                    // line 340
                    echo "                      <span>";
                    echo ($context["manufacturer"] ?? null);
                    echo "</span>
                    </a>
                  </div>
                ";
                }
                // line 344
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 344), "get", [0 => (($context["stylePrefix"] ?? null) . "CustomStats")], "method", false, false, false, 344)) {
                    // line 345
                    echo "                  <div class=\"custom-stats\">
                    ";
                    // line 346
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 346), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSold")], "method", false, false, false, 346)) {
                        // line 347
                        echo "                      <div class=\"product-sold\"><b>";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 347), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "SoldText"), 1 => ($context["products_sold"] ?? null)], "method", false, false, false, 347);
                        echo "</b></div>
                    ";
                    }
                    // line 349
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 349), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductViews")], "method", false, false, false, 349)) {
                        // line 350
                        echo "                      <div class=\"product-views\"><b>";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 350), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "ViewsText"), 1 => ($context["product_views"] ?? null)], "method", false, false, false, 350);
                        echo "</b></div>
                    ";
                    }
                    // line 352
                    echo "                  </div>
                ";
                }
                // line 354
                echo "              </div>
            ";
            }
            // line 356
            echo "          </div>
          ";
        }
        // line 358
        echo "
          ";
        // line 359
        if (($context["options"] ?? null)) {
            // line 360
            echo "          <div class=\"product-options\">
            <h3 class=\"options-title title\">";
            // line 361
            echo ($context["text_option"] ?? null);
            echo "</h3>
            ";
            // line 362
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 363
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 363) == "select")) {
                    // line 364
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 364)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 364);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 364), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushSelect")], "method", false, false, false, 364)) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 365
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 365);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 365);
                    echo "</label>
              <select name=\"option[";
                    // line 366
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 366);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 366);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 367
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 368
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 368));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 369
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 369);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 369);
                        echo "
                ";
                        // line 370
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 370)) {
                            // line 371
                            echo "                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 371);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 371);
                            echo ")
                ";
                        }
                        // line 372
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 374
                    echo "              </select>
            </div>
            ";
                }
                // line 377
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 377) == "radio")) {
                    // line 378
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 378)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 378);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 378), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushRadio")], "method", false, false, false, 378)) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 379
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 379);
                    echo "</label>
              <div id=\"input-option";
                    // line 380
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 380);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 380));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 381
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 383
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 383);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 383);
                        echo "\" />
                    ";
                        // line 384
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 384)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 384);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 384);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 384)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 384);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 384);
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 384), "get", [0 => (($context["stylePrefix"] ?? null) . "PushTooltipPosition")], "method", false, false, false, 384);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 384);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 384)) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 384);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 384);
                                echo ") ";
                            }
                            echo "\"/> ";
                        }
                        // line 385
                        echo "                    <span class=\"option-value\">
                      ";
                        // line 386
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 386);
                        echo "
                      ";
                        // line 387
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 387)) {
                            // line 388
                            echo "                        <span class=\"option-price\">
                          (";
                            // line 389
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 389);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 389);
                            echo ")
                        </span>
                      ";
                        }
                        // line 392
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 395
                    echo " </div>
            </div>
            ";
                }
                // line 398
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 398) == "checkbox")) {
                    // line 399
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 399)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 399);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 399), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushCheckbox")], "method", false, false, false, 399)) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 400
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 400);
                    echo "</label>
              <div id=\"input-option";
                    // line 401
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 401);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 401));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 402
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 404
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 404);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 404);
                        echo "\" />
                    ";
                        // line 405
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 405)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 405);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 405);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 405)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 405);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 405);
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 405), "get", [0 => (($context["stylePrefix"] ?? null) . "PushTooltipPosition")], "method", false, false, false, 405);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 405);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 405)) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 405);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 405);
                                echo ") ";
                            }
                            echo "\"/> ";
                        }
                        // line 406
                        echo "                    <span class=\"option-value\">
                      ";
                        // line 407
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 407);
                        echo "
                      ";
                        // line 408
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 408)) {
                            // line 409
                            echo "                        <span class=\"option-price\">(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 409);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 409);
                            echo ")</span>
                      ";
                        }
                        // line 411
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 414
                    echo " </div>
            </div>
            ";
                }
                // line 417
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 417) == "text")) {
                    // line 418
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 418)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 418);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 419
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 419);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 419);
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 420
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 420);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 420);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 420);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 420);
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 423
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 423) == "textarea")) {
                    // line 424
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 424)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 424);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 425
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 425);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 425);
                    echo "</label>
              <textarea name=\"option[";
                    // line 426
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 426);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 426);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 426);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 426);
                    echo "</textarea>
            </div>
            ";
                }
                // line 429
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 429) == "file")) {
                    // line 430
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 430)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 430);
                    echo "\">
              <label class=\"control-label\">";
                    // line 431
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 431);
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 432
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 432);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 433
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 433);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 433);
                    echo "\" />
            </div>
            ";
                }
                // line 436
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 436) == "date")) {
                    // line 437
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 437)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 437);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 438
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 438);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 438);
                    echo "</label>
              <div class=\"input-group date\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 440
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 440);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 440);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 440);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 446
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 446) == "datetime")) {
                    // line 447
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 447)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 447);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 448
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 448);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 448);
                    echo "</label>
              <div class=\"input-group datetime\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 450
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 450);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 450);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 450);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 456
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 456) == "time")) {
                    // line 457
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 457)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 457);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 458
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 458);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 458);
                    echo "</label>
              <div class=\"input-group time\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 460
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 460);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 460);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 460);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 466
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 467
            echo "          </div>
          ";
        }
        // line 469
        echo "
          ";
        // line 470
        if (($context["recurrings"] ?? null)) {
            // line 471
            echo "            <h3 class=\"title recurring-title\">";
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 474
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 475
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 476
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 476);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 476);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 478
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
          ";
        }
        // line 482
        echo "
          ";
        // line 483
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 483), "get", [0 => "catalogCartStatus"], "method", false, false, false, 483) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 483), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 483)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 483), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 483)) || (($context["product_extra_buttons"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 483), "isPopup", [], "method", false, false, false, 483)))) {
            // line 484
            echo "          <div class=\"button-group-page\">
            <div class=\"buttons-wrapper\">
              <div class=\"stepper-group cart-group\">
                ";
            // line 487
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 487), "get", [0 => "catalogCartStatus"], "method", false, false, false, 487)) {
                // line 488
                echo "                <div class=\"stepper\">
                  <label class=\"control-label\" for=\"product-quantity\">";
                // line 489
                echo ($context["entry_qty"] ?? null);
                echo "</label>
                  <input id=\"product-quantity\" type=\"text\" name=\"quantity\" value=\"";
                // line 490
                echo ($context["minimum"] ?? null);
                echo "\" data-minimum=\"";
                echo ($context["minimum"] ?? null);
                echo "\" class=\"form-control\"/>
                  <input id=\"product-id\" type=\"hidden\" name=\"product_id\" value=\"";
                // line 491
                echo ($context["product_id"] ?? null);
                echo "\" />
                  <span>
                  <i class=\"fa fa-angle-up\"></i>
                  <i class=\"fa fa-angle-down\"></i>
                </span>
                </div>
                ";
                // line 497
                if ((($context["stock"] ?? null) != "Out Of Stock")) {
                    echo "<a id=\"button-cart\" data-loading-text=\"<span class='btn-text'>";
                    echo ($context["button_cart"] ?? null);
                    echo "</span>\" class=\"btn btn-cart\" ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 497), "get", [0 => (($context["stylePrefix"] ?? null) . "CartDisplay")], "method", false, false, false, 497) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 497), "get", [0 => (($context["stylePrefix"] ?? null) . "CartTooltipStatus")], "method", false, false, false, 497))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-cart-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 497), "get", [0 => (($context["stylePrefix"] ?? null) . "CartTooltipPosition")], "method", false, false, false, 497);
                        echo "\" title=\"";
                        echo ($context["button_cart"] ?? null);
                        echo "\" ";
                    }
                    echo "><span class=\"btn-text\">";
                    echo ($context["button_cart"] ?? null);
                    echo "</span></a>";
                } else {
                    echo "<h4 style=\"margin-left: auto; margin-right: auto;\">";
                    echo ($context["stock"] ?? null);
                    echo "</h4>";
                }
                // line 498
                echo "                ";
            }
            // line 499
            echo "                ";
            if ((($context["product_extra_buttons"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 499), "isPopup", [], "method", false, false, false, 499))) {
                // line 500
                echo "                  <div class=\"extra-group\">
                    ";
                // line 501
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["product_extra_buttons"] ?? null));
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
                foreach ($context['_seq'] as $context["id"] => $context["extra_button"]) {
                    // line 502
                    echo "                      <a class=\"btn btn-extra btn-extra-";
                    echo $context["id"];
                    echo " btn-";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 502);
                    echo "-extra\" ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 502), "get", [0 => (((($context["stylePrefix"] ?? null) . "Extra") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 502)) . "ButtonDisplay")], "method", false, false, false, 502) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 502), "get", [0 => (($context["stylePrefix"] ?? null) . "ExtraTooltipStatus")], "method", false, false, false, 502))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"extra-tooltip pp-extra-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 502), "get", [0 => (($context["stylePrefix"] ?? null) . "ExtraTooltipPosition")], "method", false, false, false, 502);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 502);
                        echo "\" ";
                    }
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 502) == "quickbuy")) {
                        echo "data-quick-buy";
                    }
                    echo " ";
                    if (((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 502) == "link") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 502), "href", [], "any", false, false, false, 502))) {
                        echo "href=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 502), "href", [], "any", false, false, false, 502);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 502)], "method", false, false, false, 502);
                        echo " data-product_id=\"";
                        echo ($context["product_id"] ?? null);
                        echo "\"";
                    }
                    echo " data-loading-text=\"<span class='btn-text'>";
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 502);
                    echo "</span>\"><span class=\"btn-text\">";
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 502);
                    echo "</span></a>
                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['extra_button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 504
                echo "                  </div>
                ";
            }
            // line 506
            echo "              </div>

              ";
            // line 508
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 508), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 508) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 508), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 508))) {
                // line 509
                echo "              <div class=\"wishlist-compare\">
                ";
                // line 510
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 510), "isPopup", [0 => "options"], "method", false, false, false, 510)) {
                    // line 511
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 511), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 511)) {
                        // line 512
                        echo "                  <a class=\"btn btn-wishlist\" ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 512), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistDisplay")], "method", false, false, false, 512) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 512), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistTooltipStatus")], "method", false, false, false, 512))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-wishlist-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 512), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistTooltipPosition")], "method", false, false, false, 512);
                            echo "\" title=\"";
                            echo ($context["button_wishlist"] ?? null);
                            echo "\" ";
                        }
                        echo " onclick=\"parent.wishlist.add(";
                        echo ($context["product_id"] ?? null);
                        echo ");\"><span class=\"btn-text\">";
                        echo ($context["button_wishlist"] ?? null);
                        echo "</span></a>
                  ";
                    }
                    // line 514
                    echo "
                  ";
                    // line 515
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 515), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 515)) {
                        // line 516
                        echo "                  <a class=\"btn btn-compare\" ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 516), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareDisplay")], "method", false, false, false, 516) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 516), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareTooltipStatus")], "method", false, false, false, 516))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-compare-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 516), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareTooltipPosition")], "method", false, false, false, 516);
                            echo "\" title=\"";
                            echo ($context["button_compare"] ?? null);
                            echo "\" ";
                        }
                        echo " onclick=\"parent.compare.add(";
                        echo ($context["product_id"] ?? null);
                        echo ");\"><span class=\"btn-text\">";
                        echo ($context["button_compare"] ?? null);
                        echo "</span></a>
                  ";
                    }
                    // line 518
                    echo "                ";
                }
                // line 519
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 519), "isPopup", [0 => "quickview"], "method", false, false, false, 519)) {
                    // line 520
                    echo "                  <a class=\"btn btn-more-details\" href=\"";
                    echo ($context["view_more_url"] ?? null);
                    echo "\" target=\"_top\" ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 520), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsDisplay")], "method", false, false, false, 520) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 520), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsTooltipStatus")], "method", false, false, false, 520))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"more-details-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 520), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsTooltipPosition")], "method", false, false, false, 520);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 520), "get", [0 => "quickviewExtraText"], "method", false, false, false, 520);
                        echo "\" ";
                    }
                    echo "><span class=\"btn-text\">";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 520), "get", [0 => "quickviewExtraText"], "method", false, false, false, 520);
                    echo "</span></a>
                ";
                }
                // line 522
                echo "              </div>
              ";
            }
            // line 524
            echo "            </div>
          </div>
          ";
        }
        // line 527
        echo "
          ";
        // line 528
        if (((($context["minimum"] ?? null) > 1) &&  !($context["product_quantity"] ?? null))) {
            // line 529
            echo "            <div class=\"minimum alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
          ";
        }
        // line 531
        echo "
          ";
        // line 532
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 532), "isPopup", [0 => "options"], "method", false, false, false, 532)) {
            // line 533
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "details", [], "any", false, false, false, 533)) {
                // line 534
                echo "                ";
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "details", [], "any", false, false, false, 534));
                echo "
            ";
            }
            // line 536
            echo "          ";
        }
        // line 537
        echo "          </div>
          ";
        // line 538
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 538), "isPopup", [0 => "options"], "method", false, false, false, 538)) {
            // line 539
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "bottom", [], "any", false, false, false, 539)) {
                // line 540
                echo "          <div class=\"product-blocks blocks-bottom\">
            ";
                // line 541
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "bottom", [], "any", false, false, false, 541));
                echo "
          </div>
          ";
            }
            // line 544
            echo "          ";
        }
        // line 545
        echo "          ";
        if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 545), "isPopup", [], "method", false, false, false, 545)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 545), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 545) == "details"))) {
            // line 546
            echo "            <div class=\"tags\">
              <span class=\"tags-title\">";
            // line 547
            echo ($context["text_tags"] ?? null);
            echo "</span>
              ";
            // line 548
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 549
                echo "                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 549);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 549);
                echo "</a>
                ";
                // line 550
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 550)) {
                    echo "<b>,</b>";
                }
                // line 551
                echo "              ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 552
            echo "            </div>
          ";
        }
        // line 554
        echo "        </div>
      </div>
      ";
        // line 556
        if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 556), "isPopup", [0 => "quickview"], "method", false, false, false, 556)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 556), "get", [0 => "quickviewDescription"], "method", false, false, false, 556)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 556), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 556) == "default"))) {
            // line 557
            echo "        <div class=\"description ";
            echo ($context["quickviewExpand"] ?? null);
            echo "\">
          <div class=\"expand-block\">
            <div class=\"expand-content\">
              ";
            // line 560
            echo ($context["description"] ?? null);
            echo "
            </div>
            ";
            // line 562
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 562), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 562)) {
                // line 563
                echo "              <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
            ";
            }
            // line 565
            echo "          </div>
        </div>
      ";
        }
        // line 568
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 568), "isPopup", [0 => "options"], "method", false, false, false, 568)) {
            // line 569
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "default", [], "any", false, false, false, 569)) {
                // line 570
                echo "        <div class=\"product-blocks blocks-default\">
          ";
                // line 571
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "default", [], "any", false, false, false, 571));
                echo "
        </div>
        ";
            }
            // line 574
            echo "      ";
        }
        // line 575
        echo "      ";
        if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 575), "isPopup", [], "method", false, false, false, 575)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 575), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 575) == "default"))) {
            // line 576
            echo "        <div class=\"tags\">
          <span class=\"tags-title\">";
            // line 577
            echo ($context["text_tags"] ?? null);
            echo "</span>
          ";
            // line 578
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 579
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 579);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 579);
                echo "</a>
            ";
                // line 580
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 580)) {
                    echo "<b>,</b>";
                }
                // line 581
                echo "          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 582
            echo "        </div>
      ";
        }
        // line 584
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 584), "isPopup", [], "method", false, false, false, 584)) {
            // line 585
            echo "      ";
            echo ($context["content_bottom"] ?? null);
            echo "</div>
    ";
            // line 586
            echo ($context["column_right"] ?? null);
            echo "</div>
</div>
";
        }
        // line 589
        echo "<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-cart, [data-quick-buy]').on('click', function () {
  var \$btn = \$(this);
  \$.ajax({
    url: 'index.php?route=checkout/cart/add',
    type: 'post',
    data: \$(
      '#product .button-group-page input[type=\\'text\\'], #product .button-group-page input[type=\\'hidden\\'], #product .button-group-page input[type=\\'radio\\']:checked, #product .button-group-page input[type=\\'checkbox\\']:checked, #product .button-group-page select, #product .button-group-page textarea, ' +
      '#product .product-options input[type=\\'text\\'], #product .product-options input[type=\\'hidden\\'], #product .product-options input[type=\\'radio\\']:checked, #product .product-options input[type=\\'checkbox\\']:checked, #product .product-options select, #product .product-options textarea, ' +
      '#product select[name=\"recurring_id\"]'
    ),
    dataType: 'json',
    beforeSend: function () {
      \$('#button-cart').button('loading');
    },
    complete: function () {
      \$('#button-cart').button('reset');
    },
    success: function (json) {
      \$('.alert-dismissible, .text-danger').remove();
      \$('.form-group').removeClass('has-error');

      if (json['error']) {
        if (json['error']['option']) {
          for (i in json['error']['option']) {
            var element = \$('#input-option' + i.replace('_', '-'));

            if (element.parent().hasClass('input-group')) {
              element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            } else {
              element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            }
          }
        }

        if (json['error']['recurring']) {
          \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
        }

        // Highlight any found errors
        \$('.text-danger').parent().addClass('has-error');

        try {
          \$('html, body').animate({ scrollTop: \$('.form-group.has-error').offset().top - 50 }, 'slow');
        } catch (e) {
        }
      }

      if (json['success']) {
        if (\$('html').hasClass('popup-options')) {
          parent.\$(\".popup-options .popup-close\").trigger('click');
        }

        if (json['notification']) {
          parent.show_notification(json['notification']);
        } else {
          parent.\$('#content').parent().before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        parent.\$('#cart-total').html(json['total']);
        parent.\$('#cart-items').html(json['items_count']);

        if (json['items_count']) {
          parent.\$('#cart-items').removeClass('count-zero');
        } else {
          parent.\$('#cart-items').addClass('count-zero');
        }

        if (Journal['scrollToTop']) {
          parent.\$('html, body').animate({ scrollTop: 0 }, 'slow');
        }

        parent.\$('.cart-content ul').load('index.php?route=common/cart/info ul li');

        if (window.location.href.indexOf('quick_buy=true') !== -1) {
          parent.location.href = Journal['checkoutUrl'];
        }

        if (\$btn.data('quick-buy') !== undefined) {
          location = Journal['checkoutUrl'];
        }

        if (parent.window['_QuickCheckout']) {
          parent.window['_QuickCheckout'].save();
        }
      }
    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(thrownError + '\\r\\n' + xhr.statusText + '\\r\\n' + xhr.responseText);
    }
  });
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 704
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 709
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 715
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$(function () {
  \$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
  });

  \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 783
        echo ($context["product_id"] ?? null);
        echo "');

  \$('#button-review').on('click', function() {
    \$.ajax({
      url: 'index.php?route=product/product/write&product_id=";
        // line 787
        echo ($context["product_id"] ?? null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: \$(\"#form-review\").serialize(),
      beforeSend: function() {
        \$('#button-review').button('loading');
      },
      complete: function() {
        \$('#button-review').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
          \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
        }

        if (json['success']) {
          \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

          \$('input[name=\\'name\\']').val('');
          \$('textarea[name=\\'text\\']').val('');
          \$('input[name=\\'rating\\']:checked').prop('checked', false);
        }
      }
    });
  });
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});

\$(document).ready(function () {
  \$('.review-links a').on('click', function () {
    var \$review = \$('#review');
    if (\$review.length) {
      \$('a[href=\"#' + \$review.closest('.module-item').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$review.closest('.tab-pane').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$review.closest('.panel-collapse').attr('id') + '\"]').trigger('click');

      \$([document.documentElement, document.body]).animate({
        scrollTop: \$review.offset().top - 100
      }, 200);
    }
  });
});
//--></script>
";
        // line 841
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 841), "isPopup", [], "method", false, false, false, 841)) {
            // line 842
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets", 1 => ($context["breadcrumbs"] ?? null)], "method", false, false, false, 842);
            echo "
";
        }
        // line 844
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2432 => 844,  2427 => 842,  2425 => 841,  2368 => 787,  2361 => 783,  2290 => 715,  2281 => 709,  2273 => 704,  2156 => 589,  2150 => 586,  2145 => 585,  2142 => 584,  2138 => 582,  2124 => 581,  2120 => 580,  2113 => 579,  2096 => 578,  2092 => 577,  2089 => 576,  2086 => 575,  2083 => 574,  2077 => 571,  2074 => 570,  2071 => 569,  2068 => 568,  2063 => 565,  2059 => 563,  2057 => 562,  2052 => 560,  2045 => 557,  2043 => 556,  2039 => 554,  2035 => 552,  2021 => 551,  2017 => 550,  2010 => 549,  1993 => 548,  1989 => 547,  1986 => 546,  1983 => 545,  1980 => 544,  1974 => 541,  1971 => 540,  1968 => 539,  1966 => 538,  1963 => 537,  1960 => 536,  1954 => 534,  1951 => 533,  1949 => 532,  1946 => 531,  1940 => 529,  1938 => 528,  1935 => 527,  1930 => 524,  1926 => 522,  1910 => 520,  1907 => 519,  1904 => 518,  1888 => 516,  1886 => 515,  1883 => 514,  1867 => 512,  1864 => 511,  1862 => 510,  1859 => 509,  1857 => 508,  1853 => 506,  1849 => 504,  1804 => 502,  1787 => 501,  1784 => 500,  1781 => 499,  1778 => 498,  1758 => 497,  1749 => 491,  1743 => 490,  1739 => 489,  1736 => 488,  1734 => 487,  1729 => 484,  1727 => 483,  1724 => 482,  1718 => 478,  1707 => 476,  1703 => 475,  1699 => 474,  1692 => 471,  1690 => 470,  1687 => 469,  1683 => 467,  1677 => 466,  1664 => 460,  1657 => 458,  1648 => 457,  1645 => 456,  1632 => 450,  1625 => 448,  1616 => 447,  1613 => 446,  1600 => 440,  1593 => 438,  1584 => 437,  1581 => 436,  1573 => 433,  1565 => 432,  1561 => 431,  1552 => 430,  1549 => 429,  1537 => 426,  1531 => 425,  1522 => 424,  1519 => 423,  1507 => 420,  1501 => 419,  1492 => 418,  1489 => 417,  1484 => 414,  1475 => 411,  1468 => 409,  1466 => 408,  1462 => 407,  1459 => 406,  1432 => 405,  1426 => 404,  1422 => 402,  1416 => 401,  1412 => 400,  1399 => 399,  1396 => 398,  1391 => 395,  1382 => 392,  1375 => 389,  1372 => 388,  1370 => 387,  1366 => 386,  1363 => 385,  1336 => 384,  1330 => 383,  1326 => 381,  1320 => 380,  1316 => 379,  1303 => 378,  1300 => 377,  1295 => 374,  1288 => 372,  1281 => 371,  1279 => 370,  1272 => 369,  1268 => 368,  1264 => 367,  1258 => 366,  1252 => 365,  1239 => 364,  1236 => 363,  1232 => 362,  1228 => 361,  1225 => 360,  1223 => 359,  1220 => 358,  1216 => 356,  1212 => 354,  1208 => 352,  1202 => 350,  1199 => 349,  1193 => 347,  1191 => 346,  1188 => 345,  1185 => 344,  1177 => 340,  1161 => 338,  1159 => 337,  1155 => 336,  1152 => 335,  1150 => 334,  1147 => 333,  1139 => 331,  1136 => 330,  1128 => 328,  1125 => 327,  1117 => 325,  1114 => 324,  1106 => 322,  1103 => 321,  1095 => 319,  1092 => 318,  1084 => 316,  1081 => 315,  1073 => 313,  1070 => 312,  1058 => 310,  1055 => 309,  1047 => 307,  1044 => 306,  1036 => 304,  1033 => 303,  1025 => 301,  1022 => 300,  1012 => 298,  1009 => 297,  995 => 295,  993 => 294,  989 => 292,  987 => 291,  984 => 290,  980 => 288,  969 => 286,  965 => 285,  962 => 284,  960 => 283,  957 => 282,  949 => 280,  946 => 279,  938 => 277,  936 => 276,  933 => 275,  928 => 273,  923 => 272,  917 => 270,  915 => 269,  910 => 266,  908 => 265,  905 => 264,  898 => 260,  894 => 259,  890 => 258,  886 => 257,  881 => 256,  875 => 254,  873 => 253,  870 => 252,  868 => 251,  865 => 250,  858 => 246,  854 => 245,  850 => 244,  846 => 242,  840 => 241,  833 => 236,  828 => 233,  825 => 232,  821 => 231,  817 => 229,  815 => 228,  812 => 227,  808 => 225,  804 => 223,  798 => 221,  795 => 220,  789 => 218,  787 => 217,  784 => 216,  781 => 215,  773 => 211,  757 => 209,  755 => 208,  751 => 207,  748 => 206,  746 => 205,  743 => 204,  735 => 202,  732 => 201,  724 => 199,  721 => 198,  713 => 196,  710 => 195,  702 => 193,  699 => 192,  691 => 190,  688 => 189,  680 => 187,  677 => 186,  669 => 184,  666 => 183,  654 => 181,  651 => 180,  643 => 178,  640 => 177,  632 => 175,  629 => 174,  621 => 172,  618 => 171,  608 => 169,  605 => 168,  591 => 166,  589 => 165,  585 => 163,  583 => 162,  580 => 161,  575 => 158,  571 => 156,  569 => 155,  564 => 153,  557 => 150,  555 => 149,  552 => 148,  549 => 147,  543 => 144,  540 => 143,  538 => 142,  533 => 141,  531 => 140,  527 => 138,  523 => 136,  519 => 134,  505 => 133,  501 => 132,  494 => 131,  477 => 130,  473 => 129,  470 => 128,  467 => 127,  462 => 124,  458 => 122,  456 => 121,  451 => 119,  444 => 116,  441 => 115,  438 => 114,  432 => 111,  429 => 110,  426 => 109,  423 => 108,  415 => 106,  413 => 105,  410 => 104,  407 => 103,  403 => 101,  382 => 98,  377 => 97,  360 => 96,  357 => 95,  346 => 86,  317 => 83,  312 => 82,  295 => 81,  288 => 79,  277 => 78,  274 => 77,  272 => 76,  269 => 75,  265 => 73,  252 => 71,  248 => 70,  245 => 69,  243 => 68,  232 => 59,  197 => 56,  188 => 55,  185 => 54,  167 => 53,  165 => 52,  158 => 50,  148 => 49,  142 => 48,  139 => 47,  137 => 46,  132 => 45,  130 => 44,  129 => 43,  128 => 42,  127 => 41,  126 => 40,  124 => 39,  121 => 38,  115 => 36,  112 => 35,  110 => 34,  105 => 33,  100 => 31,  96 => 30,  91 => 28,  85 => 26,  83 => 25,  80 => 24,  69 => 22,  65 => 21,  62 => 20,  60 => 19,  56 => 18,  54 => 17,  52 => 15,  51 => 14,  50 => 13,  49 => 11,  48 => 10,  47 => 9,  45 => 7,  44 => 6,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/product/product.twig", "");
    }
}
