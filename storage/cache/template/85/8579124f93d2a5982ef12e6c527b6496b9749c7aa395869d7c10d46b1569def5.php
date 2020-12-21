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

/* journal3/template/journal3/headers/desktop/compact.twig */
class __TwigTemplate_4539afe45a163c51389d5095c142ed2408809f8ee9db588dcdd2cfdd3e3f9225 extends \Twig\Template
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
<div class=\"header header-compact header-sm\"
";
        // line 3
        if (($context["display"] ?? null)) {
            // line 4
            echo "  style=\"display:none;\"
";
        }
        // line 6
        echo ">
";
        // line 7
        if (($context["display"] ?? null)) {
            // line 8
            echo "<style>
  .header-compact {
    display:none !important;
  }
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
  .desktop body {
    padding-top: 15px !important;
  }
</style>
";
        }
        // line 33
        echo "  <div class=\"top-bar navbar-nav\">
    ";
        // line 34
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 34), "get", [0 => "desktop_top_menu"], "method", false, false, false, 34);
        echo "

    ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 36), "get", [0 => "langPosition"], "method", false, false, false, 36) == "top")) {
            // line 37
            echo "      <div class=\"language-currency top-menu\">
        <div class=\"desktop-language-wrapper\">
          ";
            // line 39
            echo ($context["language"] ?? null);
            echo "
        </div>
        <div class=\"desktop-currency-wrapper\">
          ";
            // line 42
            echo ($context["currency"] ?? null);
            echo "
        </div>
      </div>
    ";
        }
        // line 46
        echo "    <div class=\"third-menu\">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 46), "get", [0 => "desktop_top_menu_3"], "method", false, false, false, 46);
        echo "</div>
    ";
        // line 47
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 47), "get", [0 => "secondaryMenuPosition"], "method", false, false, false, 47) == "top")) {
            // line 48
            echo "      <div class=\"top-menu secondary-menu\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 48), "get", [0 => "desktop_top_menu_2"], "method", false, false, false, 48);
            echo "</div>
    ";
        }
        // line 50
        echo "  </div>
  <div class=\"mid-bar navbar-nav\">
    <div class=\"desktop-logo-wrapper\">
      <div id=\"logo\">
        ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 54), "get", [0 => "logo_src"], "method", false, false, false, 54)) {
            // line 55
            echo "          <a href=\"";
            echo ($context["home"] ?? null);
            echo "\">
            <img src=\"";
            // line 56
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 56), "get", [0 => "logo_src"], "method", false, false, false, 56);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 56), "get", [0 => "logo2x_src"], "method", false, false, false, 56)) {
                echo "srcset=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 56), "get", [0 => "logo_src"], "method", false, false, false, 56);
                echo " 1x, ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 56), "get", [0 => "logo2x_src"], "method", false, false, false, 56);
                echo " 2x\"";
            }
            echo " width=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 56), "get", [0 => "logo_width"], "method", false, false, false, 56);
            echo "\" height=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 56), "get", [0 => "logo_height"], "method", false, false, false, 56);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\"/>
          </a>
        ";
        } else {
            // line 59
            echo "          <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
        ";
        }
        // line 61
        echo "      </div>
    </div>
    <div class=\"desktop-main-menu-wrapper navbar-nav\">
      ";
        // line 64
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 64), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 64)) ? ("") : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 64), "get", [0 => "desktop_main_menu"], "method", false, false, false, 64)));
        echo "
    </div>

    <div class=\"header-cart-group\">
      ";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 68), "get", [0 => "langPosition"], "method", false, false, false, 68) == "search")) {
            // line 69
            echo "        <div class=\"language-currency top-menu\">
          <div class=\"desktop-language-wrapper\">
            ";
            // line 71
            echo ($context["language"] ?? null);
            echo "
          </div>
          <div class=\"desktop-currency-wrapper\">
            ";
            // line 74
            echo ($context["currency"] ?? null);
            echo "
          </div>
        </div>
      ";
        }
        // line 78
        echo "      ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 78), "get", [0 => "secondaryMenuPosition"], "method", false, false, false, 78) == "cart")) {
            // line 79
            echo "        <div class=\"top-menu secondary-menu\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 79), "get", [0 => "desktop_top_menu_2"], "method", false, false, false, 79);
            echo "</div>
      ";
        }
        // line 81
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 81), "get", [0 => "catalogSearchStatus"], "method", false, false, false, 81)) {
            // line 82
            echo "      <div class=\"desktop-search-wrapper mini-search\">
        ";
            // line 83
            echo ($context["search"] ?? null);
            echo "
      </div>
      ";
        }
        // line 86
        echo "      <div class=\"desktop-cart-wrapper\">
        ";
        // line 87
        echo ($context["cart"] ?? null);
        echo "
      </div>
    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/headers/desktop/compact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 87,  214 => 86,  208 => 83,  205 => 82,  202 => 81,  196 => 79,  193 => 78,  186 => 74,  180 => 71,  176 => 69,  174 => 68,  167 => 64,  162 => 61,  154 => 59,  132 => 56,  127 => 55,  125 => 54,  119 => 50,  113 => 48,  111 => 47,  106 => 46,  99 => 42,  93 => 39,  89 => 37,  87 => 36,  82 => 34,  79 => 33,  52 => 8,  50 => 7,  47 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/headers/desktop/compact.twig", "C:\\xampp\\htdocs\\hexcode\\catalog\\view\\theme\\journal3\\template\\journal3\\headers\\desktop\\compact.twig");
    }
}
