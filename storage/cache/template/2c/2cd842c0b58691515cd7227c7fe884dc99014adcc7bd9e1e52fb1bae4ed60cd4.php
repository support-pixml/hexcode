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
class __TwigTemplate_a83e8b51ece11b7ac150be38fed476d08f2f41d0e612c899eb9dd4768206507d extends \Twig\Template
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
      <div class=\"table-responsive\">
        <table class=\"table table-bordered\">
          <thead>
          <tr>
            <td class=\"text-center td-image\">";
        // line 30
        echo ($context["column_image"] ?? null);
        echo "</td>
            <td class=\"text-left td-name\">";
        // line 31
        echo ($context["column_name"] ?? null);
        echo "</td>
            <td class=\"text-center td-model\">";
        // line 32
        echo ($context["column_model"] ?? null);
        echo "</td>
            <td class=\"text-center td-qty\">";
        // line 33
        echo ($context["column_quantity"] ?? null);
        echo "</td>
            <td class=\"text-center td-price\">";
        // line 34
        echo ($context["column_price"] ?? null);
        echo "</td>
            <td class=\"text-center td-total\">";
        // line 35
        echo ($context["column_total"] ?? null);
        echo "</td>
          </tr>
          </thead>
          <tbody>

          ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 41
            echo "            <tr>
              <td class=\"text-center td-image\">";
            // line 42
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 42)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 42);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 42);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 42);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 42);
                echo "\" /></a> ";
            }
            echo "</td>
              <td class=\"text-left td-name\"><a href=\"";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 43);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 43);
            echo "</a> ";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 43)) {
                echo " <span class=\"text-danger\">***</span> ";
            }
            // line 44
            echo "                  ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 44)) {
                // line 45
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 45));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br />
                        <small>";
                    // line 46
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 46);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 46);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                  ";
            }
            // line 48
            echo "                  ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 48)) {
                echo " <br />
                    <small>";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 49);
                echo "</small> ";
            }
            // line 50
            echo "                  ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 50)) {
                echo " <br />
                    <span class=\"label label-info\">";
                // line 51
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 51);
                echo "</small> ";
            }
            echo "</td>
              <td class=\"text-center td-model\">";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 52);
            echo "</td>
              <td class=\"text-center td-qty\">
                <div class=\"input-group btn-block\">
                  <div class=\"stepper\">
                    <input type=\"text\" name=\"quantity[";
            // line 56
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 56);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 56);
            echo "\" size=\"1\" class=\"form-control\" />
                    <span>
                  <i class=\"fa fa-angle-up\"></i>
                  <i class=\"fa fa-angle-down\"></i>
                </span>
                  </div>
                  <span class=\"input-group-btn\">
                <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 63
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-update\"><i class=\"fa fa-refresh\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 64
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-remove\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 64);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
              </span>
                </div>
              </td>
              <td class=\"text-center td-price\">";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 68);
            echo "</td>
              <td class=\"text-center td-total\">";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 69);
            echo "</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 73
            echo "            <tr>
              <td></td>
              <td class=\"text-left td-voucher\">";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 75);
            echo "</td>
              <td class=\"text-left td-voucher\"></td>
              <td class=\"text-left td-voucher\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 80
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 80);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
              </span></div></td>
              <td class=\"text-right td-voucher\">";
            // line 82
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 82);
            echo "</td>
              <td class=\"text-right td-voucher\">";
            // line 83
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 83);
            echo "</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "          </tbody>
        </table>
      </div>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
        // line 90
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 92
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 93
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 95
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
        return array (  328 => 95,  323 => 93,  319 => 92,  312 => 90,  306 => 86,  297 => 83,  293 => 82,  286 => 80,  278 => 75,  274 => 73,  269 => 72,  260 => 69,  256 => 68,  247 => 64,  243 => 63,  231 => 56,  224 => 52,  216 => 51,  211 => 50,  207 => 49,  202 => 48,  199 => 47,  190 => 46,  183 => 45,  180 => 44,  172 => 43,  158 => 42,  155 => 41,  151 => 40,  143 => 35,  139 => 34,  135 => 33,  131 => 32,  127 => 31,  123 => 30,  115 => 25,  110 => 24,  104 => 22,  102 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  77 => 13,  73 => 12,  68 => 10,  62 => 8,  60 => 7,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/success.twig", "");
    }
}
