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

/* journal3/template/journal3/headers/mobile/header_mobile_3.twig */
class __TwigTemplate_38498b2ce25f1af93845641f376916733990d6a0cbb24946e25b42fd4962c529 extends \Twig\Template
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
        echo "<div class=\"mobile-header mobile-3\">
  <div class=\"mobile-top-bar\">
    <div class=\"mobile-top-menu-wrapper\">
      ";
        // line 4
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 4), "get", [0 => "mobile_top_menu"], "method", false, false, false, 4);
        echo "
    </div>
    ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 6), "get", [0 => "mobileLangPosition"], "method", false, false, false, 6) == "top")) {
            // line 7
            echo "    <div class=\"language-currency top-menu\">
      <div class=\"mobile-currency-wrapper\">
        ";
            // line 9
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 9), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 9)) ? (($context["currency"] ?? null)) : (""));
            echo "
      </div>
      <div class=\"mobile-language-wrapper\">
        ";
            // line 12
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 12), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 12)) ? (($context["language"] ?? null)) : (""));
            echo "
      </div>
    </div>
    ";
        }
        // line 16
        echo "  </div>
  <div class=\"mobile-logo-wrapper mobile-bar\">
    ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 18), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 18)) {
            // line 19
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 19), "get", [0 => "mobileCustomMenuStatus1"], "method", false, false, false, 19)) {
                // line 20
                echo "      <a class=\"mobile-custom-menu mobile-custom-menu-1\" href=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 20), "get", [0 => "mobileCustomMenuLink1.href"], "method", false, false, false, 20);
                echo "\" ";
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 20), "get", [0 => "mobileCustomMenuLink1.attrs"], "method", false, false, false, 20)], "method", false, false, false, 20);
                echo ">
        ";
                // line 21
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "countBadge", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 21), "get", [0 => "mobileCustomMenuLink1.name"], "method", false, false, false, 21), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "cache", [], "any", false, false, false, 21), "update", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 21), "get", [0 => "mobileCustomMenuLink1.total"], "method", false, false, false, 21)], "method", false, false, false, 21), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 21), "get", [0 => "mobileCustomMenuLink1.classes"], "method", false, false, false, 21)], "method", false, false, false, 21);
                echo "
      </a>
      ";
            }
            // line 24
            echo "      <div id=\"logo\">
        ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 25), "get", [0 => "logo_src"], "method", false, false, false, 25)) {
                // line 26
                echo "          <a href=\"";
                echo ($context["home"] ?? null);
                echo "\">
            <img src=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 27), "get", [0 => "logo_src"], "method", false, false, false, 27);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 27), "get", [0 => "logo2x_src"], "method", false, false, false, 27)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 27), "get", [0 => "logo_src"], "method", false, false, false, 27);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 27), "get", [0 => "logo2x_src"], "method", false, false, false, 27);
                    echo " 2x\"";
                }
                echo " width=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 27), "get", [0 => "logo_width"], "method", false, false, false, 27);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 27), "get", [0 => "logo_height"], "method", false, false, false, 27);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\"/>
          </a>
        ";
            } else {
                // line 30
                echo "          <h1><a href=\"";
                echo ($context["home"] ?? null);
                echo "\">";
                echo ($context["name"] ?? null);
                echo "</a></h1>
        ";
            }
            // line 32
            echo "      </div>
      ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 33), "get", [0 => "mobileCustomMenuStatus2"], "method", false, false, false, 33)) {
                // line 34
                echo "      <a class=\"mobile-custom-menu mobile-custom-menu-2\" href=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 34), "get", [0 => "mobileCustomMenuLink2.href"], "method", false, false, false, 34);
                echo "\" ";
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 34), "get", [0 => "mobileCustomMenuLink2.attrs"], "method", false, false, false, 34)], "method", false, false, false, 34);
                echo ">
        ";
                // line 35
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "countBadge", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 35), "get", [0 => "mobileCustomMenuLink2.name"], "method", false, false, false, 35), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "cache", [], "any", false, false, false, 35), "update", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 35), "get", [0 => "mobileCustomMenuLink2.total"], "method", false, false, false, 35)], "method", false, false, false, 35), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 35), "get", [0 => "mobileCustomMenuLink2.classes"], "method", false, false, false, 35)], "method", false, false, false, 35);
                echo "
      </a>
      ";
            }
            // line 38
            echo "    ";
        }
        // line 39
        echo "  </div>
  <div class=\"mobile-bar-group mobile-search-group sticky-bar\">
    <div class=\"menu-trigger\">
      <button><span>Menu</span></button>
    </div>
    <div class=\"mobile-search-wrapper full-search\">
      ";
        // line 45
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 45), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 45)) ? (($context["search"] ?? null)) : (""));
        echo "
    </div>
    <div class=\"mobile-cart-wrapper mini-cart\">
      ";
        // line 48
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 48), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 48)) ? (($context["cart"] ?? null)) : (""));
        echo "
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/headers/mobile/header_mobile_3.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 48,  157 => 45,  149 => 39,  146 => 38,  140 => 35,  133 => 34,  131 => 33,  128 => 32,  120 => 30,  98 => 27,  93 => 26,  91 => 25,  88 => 24,  82 => 21,  75 => 20,  72 => 19,  70 => 18,  66 => 16,  59 => 12,  53 => 9,  49 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/headers/mobile/header_mobile_3.twig", "C:\\xampp\\htdocs\\hexcode\\catalog\\view\\theme\\journal3\\template\\journal3\\headers\\mobile\\header_mobile_3.twig");
    }
}
