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
class __TwigTemplate_459cd2d89df6d0ead13fd5e435a32172603d33b2883fd9143779d27c9fe81bdb extends \Twig\Template
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
            <td class=\"text-left td-name\" colspan=\"2\">";
        // line 30
        echo ($context["column_name"] ?? null);
        echo "</td>
            <td class=\"text-center td-qty\">";
        // line 31
        echo ($context["column_quantity"] ?? null);
        echo "</td>
            <td class=\"text-center td-price\">";
        // line 32
        echo ($context["column_price"] ?? null);
        echo "</td>
            <td class=\"text-center td-total\">";
        // line 33
        echo ($context["column_total"] ?? null);
        echo "</td>
          </tr>
          </thead>
          <tbody>
          ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 38
            echo "            <tr>              
              <td class=\"text-left td-name\" colspan=\"2\"><a href=\"";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 39);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 39);
            echo "</a> 
                  ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 40)) {
                // line 41
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 41));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br />
                        <small>";
                    // line 42
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 42);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 42);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "                  ";
            }
            // line 44
            echo "                  ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 44)) {
                echo " <br />
                    <small>";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 45);
                echo "</small> ";
            }
            // line 46
            echo "                  ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 46)) {
                echo " <br />
                    <span class=\"label label-info\">";
                // line 47
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 47);
                echo "</small> ";
            }
            echo "</td>
              <td class=\"text-center td-qty\">
                ";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 49);
            echo "
              </td>
              <td class=\"text-center td-price\">";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 51);
            echo "</td>
              <td class=\"text-center td-total\">";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 52);
            echo "</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "          </tbody>          
        </table>
      </div>
      <div class=\"cart-total table-responsive\">
      <table class=\"table table-bordered\">
        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 61
            echo "        <tfoot>
        <tr>
          <td colspan=\"\" class=\"text-right\"><strong>";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 63);
            echo ":</strong></td>
          <td class=\"text-right\">";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["total"], "value", [], "any", false, false, false, 64);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        </tfoot>
      </table>
    </div>
      <!-- <div class=\"cart-total table-responsive\">
        <table class=\"table table-bordered\">
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 73
            echo "              <tr>
                <td class=\"text-right\"><strong>";
            // line 74
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 74);
            echo ":</strong></td>
                <td class=\"text-right\">";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["total"], "value", [], "any", false, false, false, 75);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        </table>
      </div> -->
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
        // line 81
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 83
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 84
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 86
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
        return array (  293 => 86,  288 => 84,  284 => 83,  277 => 81,  272 => 78,  263 => 75,  259 => 74,  256 => 73,  252 => 72,  245 => 67,  236 => 64,  232 => 63,  228 => 61,  224 => 60,  217 => 55,  208 => 52,  204 => 51,  199 => 49,  190 => 47,  185 => 46,  181 => 45,  176 => 44,  173 => 43,  164 => 42,  157 => 41,  155 => 40,  149 => 39,  146 => 38,  142 => 37,  135 => 33,  131 => 32,  127 => 31,  123 => 30,  115 => 25,  110 => 24,  104 => 22,  102 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  77 => 13,  73 => 12,  68 => 10,  62 => 8,  60 => 7,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/success.twig", "");
    }
}
