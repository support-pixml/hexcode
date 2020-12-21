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

/* journal3/template/common/success.twig */
class __TwigTemplate_94e1b390c9f4639645eedde7f41de45d1fd0d70fb3a36f70a06d114f6886921f extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<ul class=\"breadcrumb\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 4
            echo "  <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 4);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 4);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 7), "get", [0 => "pageTitlePosition"], "method", false, false, false, 7) == "top")) {
            // line 8
            echo "  <h1 class=\"title page-title\"><span>";
            echo ($context["heading_title"] ?? null);
            echo "</span></h1>
";
        }
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 10);
        echo "
<div id=\"common-success\" class=\"container\">
  <div class=\"row\">";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 13
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 15
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 19
            echo "    ";
        }
        // line 20
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 21), "get", [0 => "pageTitlePosition"], "method", false, false, false, 21) == "default")) {
            // line 22
            echo "        <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 24
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 25
        echo ($context["text_message"] ?? null);
        echo "
      <div id=\"cart-content\" class=\"dropdown-menu cart-content j-dropdown\">
        <ul>
          ";
        // line 28
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 29
            echo "          <li class=\"cart-products\">
            <table class=\"table\">
              ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 32
                echo "              <tr>
                <td class=\"text-center td-image\">";
                // line 33
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 34);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 34);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 34);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 34);
                    echo "\"/></a>
                  ";
                }
                // line 36
                echo "                <td class=\"text-left td-name\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 36);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 36);
                echo "</a><br /> ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 36)) {
                    // line 37
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 37));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 38
                        echo "                <span>";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 38);
                        echo "</span><small> ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 38);
                        echo "</small><br /> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 39
                    echo "                ";
                }
                // line 40
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 40)) {
                    // line 41
                    echo "                <span>";
                    echo ($context["text_recurring"] ?? null);
                    echo "</span><small> ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 41);
                    echo "</small> ";
                }
                echo "</td>
                <td class=\"text-right td-qty\">x ";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 42);
                echo "</td>
                <td class=\"text-right td-total\">";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 43);
                echo "</td>
                <td class=\"text-center td-remove\"><button type=\"button\" onclick=\"cart.remove('";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 44);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"cart-remove\"><i class=\"fa fa-times-circle\"></i></button></td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 48
                echo "              <tr>
                <td class=\"text-center\"></td>
                <td class=\"text-left\">";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 50);
                echo "</td>
                <td class=\"text-right\">x&nbsp;1</td>
                <td class=\"text-right\">";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 52);
                echo "</td>
                <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 53);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "            </table>
          </li>
          <li class=\"cart-totals\">
            <div>
              <!-- <table class=\"table table-bordered\">
                ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 62
                echo "                <tr>
                  <td class=\"text-right td-total-title\">";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 63);
                echo "</td>
                  <td class=\"text-right td-total-text\">";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 64);
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "              </table> -->
              <div class=\"cart-buttons\">
                <a class=\"btn-cart btn\" href=\"";
            // line 69
            echo ($context["cart"] ?? null);
            echo "\"><i class=\"fa\"></i><span>";
            echo ($context["text_cart"] ?? null);
            echo "</span></a>
                <a class=\"btn-checkout btn\" href=\"";
            // line 70
            echo ($context["checkout"] ?? null);
            echo "\"><i class=\"fa\"></i><span>";
            echo ($context["text_checkout"] ?? null);
            echo "</span></a>
              </div>
            </div>
          </li>
          ";
        } else {
            // line 75
            echo "          <li>
            <p class=\"text-center cart-empty\">";
            // line 76
            echo ($context["text_empty"] ?? null);
            echo "</p>
          </li>
          ";
        }
        // line 79
        echo "        </ul>
      </div>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
        // line 82
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 84
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 85
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 87
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/common/success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 87,  305 => 85,  301 => 84,  294 => 82,  289 => 79,  283 => 76,  280 => 75,  270 => 70,  264 => 69,  260 => 67,  251 => 64,  247 => 63,  244 => 62,  240 => 61,  233 => 56,  222 => 53,  218 => 52,  213 => 50,  209 => 48,  204 => 47,  193 => 44,  189 => 43,  185 => 42,  176 => 41,  173 => 40,  170 => 39,  160 => 38,  155 => 37,  148 => 36,  136 => 34,  134 => 33,  131 => 32,  127 => 31,  123 => 29,  121 => 28,  115 => 25,  110 => 24,  104 => 22,  102 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  77 => 13,  73 => 12,  68 => 10,  62 => 8,  60 => 7,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/success.twig", "");
    }
}
