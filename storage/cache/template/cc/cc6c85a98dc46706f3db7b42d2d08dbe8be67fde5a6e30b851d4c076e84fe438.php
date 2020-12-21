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

/* journal3/template/journal3/headers/mobile/header_mobile_1.twig */
class __TwigTemplate_a661b924b9ff0e1d4a66b8ab69a78cb009027ffebcee6bf9ede9d731f3c3b5b4 extends \Twig\Template
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
        echo "<div class=\"mobile-header mobile-default mobile-1\"
";
        // line 2
        if (($context["display"] ?? null)) {
            // line 3
            echo "  style=\"display:none\";
";
        }
        // line 4
        echo ">
  <div class=\"mobile-top-bar\">
    <div class=\"mobile-top-menu-wrapper\">
      ";
        // line 7
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 7), "get", [0 => "mobile_top_menu"], "method", false, false, false, 7);
        echo "
    </div>
    ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 9), "get", [0 => "mobileLangPosition"], "method", false, false, false, 9) == "top")) {
            // line 10
            echo "    <div class=\"language-currency top-menu\">
      <div class=\"mobile-currency-wrapper\">
        ";
            // line 12
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 12), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 12)) ? (($context["currency"] ?? null)) : (""));
            echo "
      </div>
      <div class=\"mobile-language-wrapper\">
        ";
            // line 15
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 15), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 15)) ? (($context["language"] ?? null)) : (""));
            echo "
      </div>
    </div>
    ";
        }
        // line 19
        echo "  </div>
  <div class=\"mobile-bar sticky-bar\">
    <div class=\"mobile-logo-wrapper\">
      ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 22), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 22)) {
            // line 23
            echo "        <div id=\"logo\">
          ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 24), "get", [0 => "logo_src"], "method", false, false, false, 24)) {
                // line 25
                echo "            <a href=\"";
                echo ($context["home"] ?? null);
                echo "\">
              <img src=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 26), "get", [0 => "logo_src"], "method", false, false, false, 26);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 26), "get", [0 => "logo2x_src"], "method", false, false, false, 26)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 26), "get", [0 => "logo_src"], "method", false, false, false, 26);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 26), "get", [0 => "logo2x_src"], "method", false, false, false, 26);
                    echo " 2x\"";
                }
                echo " width=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 26), "get", [0 => "logo_width"], "method", false, false, false, 26);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 26), "get", [0 => "logo_height"], "method", false, false, false, 26);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\"/>
            </a>
          ";
            } else {
                // line 29
                echo "            <h1><a href=\"";
                echo ($context["home"] ?? null);
                echo "\">";
                echo ($context["name"] ?? null);
                echo "</a></h1>
          ";
            }
            // line 31
            echo "        </div>
      ";
        }
        // line 33
        echo "    </div>
    <div class=\"mobile-bar-group\">
      <div class=\"menu-trigger\"></div>
      ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 36), "get", [0 => "mobileCustomMenuStatus1"], "method", false, false, false, 36)) {
            // line 37
            echo "      <a class=\"mobile-custom-menu mobile-custom-menu-1\" href=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 37), "get", [0 => "mobileCustomMenuLink1.href"], "method", false, false, false, 37);
            echo "\" ";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 37), "get", [0 => "mobileCustomMenuLink1.attrs"], "method", false, false, false, 37)], "method", false, false, false, 37);
            echo ">
        ";
            // line 38
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "countBadge", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 38), "get", [0 => "mobileCustomMenuLink1.name"], "method", false, false, false, 38), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "cache", [], "any", false, false, false, 38), "update", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 38), "get", [0 => "mobileCustomMenuLink1.total"], "method", false, false, false, 38)], "method", false, false, false, 38), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 38), "get", [0 => "mobileCustomMenuLink1.classes"], "method", false, false, false, 38)], "method", false, false, false, 38);
            echo "
      </a>
      ";
        }
        // line 41
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 41), "get", [0 => "mobileCustomMenuStatus2"], "method", false, false, false, 41)) {
            // line 42
            echo "      <a class=\"mobile-custom-menu mobile-custom-menu-2\" href=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 42), "get", [0 => "mobileCustomMenuLink2.href"], "method", false, false, false, 42);
            echo "\" ";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 42), "get", [0 => "mobileCustomMenuLink2.attrs"], "method", false, false, false, 42)], "method", false, false, false, 42);
            echo ">
        ";
            // line 43
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "countBadge", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 43), "get", [0 => "mobileCustomMenuLink2.name"], "method", false, false, false, 43), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "cache", [], "any", false, false, false, 43), "update", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 43), "get", [0 => "mobileCustomMenuLink2.total"], "method", false, false, false, 43)], "method", false, false, false, 43), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 43), "get", [0 => "mobileCustomMenuLink2.classes"], "method", false, false, false, 43)], "method", false, false, false, 43);
            echo "
      </a>
      ";
        }
        // line 46
        echo "      <div class=\"mobile-search-wrapper mini-search\">
        ";
        // line 47
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 47), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 47)) ? (($context["search"] ?? null)) : (""));
        echo "
      </div>
      <div class=\"mobile-cart-wrapper mini-cart\">
        ";
        // line 50
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 50), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 50)) ? (($context["cart"] ?? null)) : (""));
        echo "
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/headers/mobile/header_mobile_1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 50,  165 => 47,  162 => 46,  156 => 43,  149 => 42,  146 => 41,  140 => 38,  133 => 37,  131 => 36,  126 => 33,  122 => 31,  114 => 29,  92 => 26,  87 => 25,  85 => 24,  82 => 23,  80 => 22,  75 => 19,  68 => 15,  62 => 12,  58 => 10,  56 => 9,  51 => 7,  46 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/headers/mobile/header_mobile_1.twig", "C:\\xampp\\htdocs\\hexcode\\catalog\\view\\theme\\journal3\\template\\journal3\\headers\\mobile\\header_mobile_1.twig");
    }
}
