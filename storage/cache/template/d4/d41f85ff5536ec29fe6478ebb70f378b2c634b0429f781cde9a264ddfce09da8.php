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
class __TwigTemplate_43ce00f191ca7c367d2bbc5d29eeb3c66c0e52d185e74e288eb95241c6114195 extends \Twig\Template
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
      <h4>Hello ";
        // line 25
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "payment_firstname", [], "any", false, false, false, 25);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "payment_lastname", [], "any", false, false, false, 25);
        echo ",</h4>
      <h5>Your Order No. ";
        // line 26
        echo ($context["order_id"] ?? null);
        echo "</h5>
      ";
        // line 27
        echo ($context["text_message"] ?? null);
        echo "
      <div class=\"table-responsive\">
        <table class=\"table table-bordered\">
          <thead>
          <tr>
            <td class=\"text-left td-name\">";
        // line 32
        echo ($context["column_name"] ?? null);
        echo "</td>
            <td class=\"text-center td-qty\">";
        // line 33
        echo ($context["column_quantity"] ?? null);
        echo "</td>
            <!-- <td class=\"text-center td-price\">";
        // line 34
        echo ($context["column_price"] ?? null);
        echo "</td> -->
            <td class=\"text-center td-total\">";
        // line 35
        echo ($context["column_total"] ?? null);
        echo "</td>
          </tr>
          </thead>
          <tbody>
          ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 40
            echo "            <tr>              
              <td class=\"text-left td-name\">
                <img src=\"";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 42);
            echo "\" style=\"padding-right: 20px; float: left;\" />
                <div style=\"float: left;\"><a href=\"";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 43);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 43);
            echo "</a> 
                  ";
            // line 44
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
            // line 52
            echo "                  </div>
                  </td>
               
              <td class=\"text-center td-qty\">
                ";
            // line 56
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 56);
            echo "
              </td>
              <!-- <td class=\"text-center td-price\">&#8377;  ";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 58);
            echo "</td> -->
              <td class=\"text-center td-total\">&#8377; ";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 59);
            echo "</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "          </tbody>          
        </table>
      </div>
      <div class=\"cart-total table-responsive\">
      <table class=\"table table-bordered\">
        <tfoot>
        <tr>
          <td colspan=\"\" class=\"text-right\"><strong>Total :</strong></td>
          <td class=\"text-right\">&#8377; ";
        // line 70
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "total", [], "any", false, false, false, 70);
        echo "</td>
        </tr>
        </tfoot>
      </table>
    </div>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
        // line 76
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 78
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 79
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 81
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
        return array (  270 => 81,  265 => 79,  261 => 78,  254 => 76,  245 => 70,  235 => 62,  226 => 59,  222 => 58,  217 => 56,  211 => 52,  205 => 51,  200 => 50,  196 => 49,  191 => 48,  188 => 47,  179 => 46,  172 => 45,  170 => 44,  164 => 43,  160 => 42,  156 => 40,  152 => 39,  145 => 35,  141 => 34,  137 => 33,  133 => 32,  125 => 27,  121 => 26,  115 => 25,  110 => 24,  104 => 22,  102 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  77 => 13,  73 => 12,  68 => 10,  62 => 8,  60 => 7,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/success.twig", "");
    }
}
