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
class __TwigTemplate_2ec782337a1cd717b3b41600c2a937178d80bef91e0e3f6a5d4793d792ced980 extends \Twig\Template
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
      Hello ";
        // line 25
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "payment_firstname", [], "any", false, false, false, 25);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "payment_lastname", [], "any", false, false, false, 25);
        echo ",
      ";
        // line 26
        echo ($context["text_message"] ?? null);
        echo "
      <div class=\"table-responsive\">
        <table class=\"table table-bordered\">
          <thead>
          <tr>
            <td class=\"text-left td-name\">";
        // line 31
        echo ($context["column_name"] ?? null);
        echo "</td>
            <td class=\"text-center td-qty\">";
        // line 32
        echo ($context["column_quantity"] ?? null);
        echo "</td>
            <!-- <td class=\"text-center td-price\">";
        // line 33
        echo ($context["column_price"] ?? null);
        echo "</td> -->
            <td class=\"text-center td-total\">";
        // line 34
        echo ($context["column_total"] ?? null);
        echo "</td>
          </tr>
          </thead>
          <tbody>
          ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 39
            echo "            <tr>              
              <td class=\"text-left td-name\">
                <img src=\"";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 41);
            echo "\" style=\"padding-right: 20px;\" />
                <a href=\"";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 42);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 42);
            echo "</a> 
                  ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 43)) {
                // line 44
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br />
                        <small>";
                    // line 45
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 45);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 45);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                  ";
            }
            // line 47
            echo "                  ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 47)) {
                echo " <br />
                    <small>";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 48);
                echo "</small> ";
            }
            // line 49
            echo "                  ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 49)) {
                echo " <br />
                    <span class=\"label label-info\">";
                // line 50
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 50);
                echo "</small> ";
            }
            echo "</td>
              <td class=\"text-center td-qty\">
                ";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 52);
            echo "
              </td>
              <!-- <td class=\"text-center td-price\">&#8377;  ";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 54);
            echo "</td> -->
              <td class=\"text-center td-total\">&#8377; ";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 55);
            echo "</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "          </tbody>          
        </table>
      </div>
      <div class=\"cart-total table-responsive\">
      <table class=\"table table-bordered\">
        <tfoot>
        <tr>
          <td colspan=\"\" class=\"text-right\"><strong>Total :</strong></td>
          <td class=\"text-right\">&#8377; ";
        // line 66
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "total", [], "any", false, false, false, 66);
        echo "</td>
        </tr>
        </tfoot>
      </table>
    </div>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
        // line 72
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 74
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 75
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 77
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
        return array (  263 => 77,  258 => 75,  254 => 74,  247 => 72,  238 => 66,  228 => 58,  219 => 55,  215 => 54,  210 => 52,  201 => 50,  196 => 49,  192 => 48,  187 => 47,  184 => 46,  175 => 45,  168 => 44,  166 => 43,  160 => 42,  156 => 41,  152 => 39,  148 => 38,  141 => 34,  137 => 33,  133 => 32,  129 => 31,  121 => 26,  115 => 25,  110 => 24,  104 => 22,  102 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  77 => 13,  73 => 12,  68 => 10,  62 => 8,  60 => 7,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/success.twig", "");
    }
}
