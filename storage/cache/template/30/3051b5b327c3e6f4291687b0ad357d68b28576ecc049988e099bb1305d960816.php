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

/* journal3/template/journal3/headers/mobile/header_mobile_2.twig */
class __TwigTemplate_d2dd7918b6acf57376efaa7f7ab6b50b3f27fd8a1849e44f06be00699ce4cb4d extends \Twig\Template
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
        echo "
<div class=\"mobile-header mobile-default mobile-2\" 
";
        // line 3
        if (($context["display"] ?? null)) {
            // line 4
            echo "style=\"display:none\";
";
        }
        // line 6
        echo ">
";
        // line 7
        if (($context["display"] ?? null)) {
            // line 8
            echo "<style>
  .page-title {
    display: none !important;
  }
  h3.title {
    font-size:18px !important;
    text-align: center;
    padding-bottom: 25px;
    margin-top: 10px;
  }
  h3.title::after{
    margin-left: auto;
    margin-right: auto;
  }
  .badge-success {
    background-color: #2EAF23;
  }
  body {
    padding-top: 30px !important;
  }
</style>
";
        }
        // line 30
        echo "  <div class=\"mobile-top-bar\">
    <div class=\"mobile-top-menu-wrapper\">
      ";
        // line 32
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 32), "get", [0 => "mobile_top_menu"], "method", false, false, false, 32);
        echo "
    </div>
    ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 34), "get", [0 => "mobileLangPosition"], "method", false, false, false, 34) == "top")) {
            // line 35
            echo "    <div class=\"language-currency top-menu\">
      <div class=\"mobile-currency-wrapper\">
        ";
            // line 37
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 37), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 37)) ? (($context["currency"] ?? null)) : (""));
            echo "
      </div>
      <div class=\"mobile-language-wrapper\">
        ";
            // line 40
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 40), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 40)) ? (($context["language"] ?? null)) : (""));
            echo "
      </div>
    </div>
    ";
        }
        // line 44
        echo "  </div>
  <div class=\"mobile-bar sticky-bar\">
    <div class=\"menu-trigger\">
      <button><span>Menu</span></button>
    </div>
    ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 49), "get", [0 => "mobileCustomMenuStatus1"], "method", false, false, false, 49)) {
            // line 50
            echo "    <a class=\"mobile-custom-menu mobile-custom-menu-1\" href=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 50), "get", [0 => "mobileCustomMenuLink1.href"], "method", false, false, false, 50);
            echo "\" ";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 50), "get", [0 => "mobileCustomMenuLink1.attrs"], "method", false, false, false, 50)], "method", false, false, false, 50);
            echo ">
      ";
            // line 51
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "countBadge", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 51), "get", [0 => "mobileCustomMenuLink1.name"], "method", false, false, false, 51), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "cache", [], "any", false, false, false, 51), "update", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 51), "get", [0 => "mobileCustomMenuLink1.total"], "method", false, false, false, 51)], "method", false, false, false, 51), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 51), "get", [0 => "mobileCustomMenuLink1.classes"], "method", false, false, false, 51)], "method", false, false, false, 51);
            echo "
    </a>
    ";
        }
        // line 54
        echo "    <div class=\"mobile-logo-wrapper\">
      ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 55), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 55)) {
            // line 56
            echo "        <div id=\"logo\">
          ";
            // line 57
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 57), "get", [0 => "logo_src"], "method", false, false, false, 57)) {
                // line 58
                echo "            <a href=\"";
                echo ($context["home"] ?? null);
                echo "\">
              <img src=\"";
                // line 59
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 59), "get", [0 => "logo_src"], "method", false, false, false, 59);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 59), "get", [0 => "logo2x_src"], "method", false, false, false, 59)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 59), "get", [0 => "logo_src"], "method", false, false, false, 59);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 59), "get", [0 => "logo2x_src"], "method", false, false, false, 59);
                    echo " 2x\"";
                }
                echo " width=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 59), "get", [0 => "logo_width"], "method", false, false, false, 59);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 59), "get", [0 => "logo_height"], "method", false, false, false, 59);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\"/>
            </a>
          ";
            } else {
                // line 62
                echo "            <h1><a href=\"";
                echo ($context["home"] ?? null);
                echo "\">";
                echo ($context["name"] ?? null);
                echo "</a></h1>
          ";
            }
            // line 64
            echo "        </div>
      ";
        }
        // line 66
        echo "    </div>
    ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 67), "get", [0 => "mobileCustomMenuStatus2"], "method", false, false, false, 67)) {
            // line 68
            echo "    <a class=\"mobile-custom-menu mobile-custom-menu-2\" href=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 68), "get", [0 => "mobileCustomMenuLink2.href"], "method", false, false, false, 68);
            echo "\" ";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 68), "get", [0 => "mobileCustomMenuLink2.attrs"], "method", false, false, false, 68)], "method", false, false, false, 68);
            echo ">
      ";
            // line 69
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "countBadge", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 69), "get", [0 => "mobileCustomMenuLink2.name"], "method", false, false, false, 69), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "cache", [], "any", false, false, false, 69), "update", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 69), "get", [0 => "mobileCustomMenuLink2.total"], "method", false, false, false, 69)], "method", false, false, false, 69), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 69), "get", [0 => "mobileCustomMenuLink2.classes"], "method", false, false, false, 69)], "method", false, false, false, 69);
            echo "
    </a>
    ";
        }
        // line 72
        echo "    <div class=\"mobile-cart-wrapper mini-cart\">
      ";
        // line 73
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 73), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 73)) ? (($context["cart"] ?? null)) : (""));
        echo "
    </div>
  </div>
  <div class=\"mobile-bar-group mobile-search-group\">
    <div class=\"mobile-search-wrapper full-search\">
      ";
        // line 78
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 78), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 78)) ? (($context["search"] ?? null)) : (""));
        echo "
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/headers/mobile/header_mobile_2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 78,  196 => 73,  193 => 72,  187 => 69,  180 => 68,  178 => 67,  175 => 66,  171 => 64,  163 => 62,  141 => 59,  136 => 58,  134 => 57,  131 => 56,  129 => 55,  126 => 54,  120 => 51,  113 => 50,  111 => 49,  104 => 44,  97 => 40,  91 => 37,  87 => 35,  85 => 34,  80 => 32,  76 => 30,  52 => 8,  50 => 7,  47 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/headers/mobile/header_mobile_2.twig", "C:\\xampp\\htdocs\\hexcode\\catalog\\view\\theme\\journal3\\template\\journal3\\headers\\mobile\\header_mobile_2.twig");
    }
}
