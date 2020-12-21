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

/* sale/order_shipping.twig */
class __TwigTemplate_efa78a4313414f9affed1d9774b47909f2cc693fb19adc3d0063da044e4e87e3 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 6
        echo ($context["base"] ?? null);
        echo "\" />
<link href=\"view/javascript/bootstrap/css/bootstrap.css\" rel=\"stylesheet\" media=\"all\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
<link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"all\" />
</head>
<body>
<div class=\"container\">
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 16
            echo "  <div style=\"page-break-after: always;\">
    ";
            // line 17
            if (($context["logo"] ?? null)) {
                // line 18
                echo "    <img src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" width=\"150px\" height=\"auto\" class=\"img-responsive\" style=\"margin-left: auto; margin-right: auto; padding:15px 0;\" />
    ";
            } else {
                // line 20
                echo "      <h1 class=\"text-center\">";
                echo ($context["name"] ?? null);
                echo "</h1>
    ";
            }
            // line 22
            echo "    <h1>";
            echo ($context["text_picklist"] ?? null);
            echo " #";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 22);
            echo "</h1>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td colspan=\"2\">";
            // line 26
            echo ($context["text_order_detail"] ?? null);
            echo "</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><address>
            <strong>";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_name", [], "any", false, false, false, 32);
            echo "</strong><br />
            ";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_address", [], "any", false, false, false, 33);
            echo "
            </address>
            <b>";
            // line 35
            echo ($context["text_telephone"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_telephone", [], "any", false, false, false, 35);
            echo "<br />
            <b>";
            // line 36
            echo ($context["text_email"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_email", [], "any", false, false, false, 36);
            echo "<br />
            <b>";
            // line 37
            echo ($context["text_website"] ?? null);
            echo "</b> <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_url", [], "any", false, false, false, 37);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_url", [], "any", false, false, false, 37);
            echo "</a></td>
          <td style=\"width: 50%;\"><b>";
            // line 38
            echo ($context["text_date_added"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 38);
            echo "<br />
            ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 39)) {
                // line 40
                echo "            <b>";
                echo ($context["text_invoice_no"] ?? null);
                echo "</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 40);
                echo "<br />
            ";
            }
            // line 42
            echo "            <b>";
            echo ($context["text_order_id"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 42);
            echo "<br />
            ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 43)) {
                // line 44
                echo "            <b>";
                echo ($context["text_shipping_method"] ?? null);
                echo "</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 44);
                echo "<br />
            ";
            }
            // line 45
            echo "</td>
        </tr>
      </tbody>
    </table>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td style=\"width: 50%;\"><b>";
            // line 52
            echo ($context["text_shipping_address"] ?? null);
            echo "</b></td>
          <td style=\"width: 50%;\"><b>";
            // line 53
            echo ($context["text_contact"] ?? null);
            echo "</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_address", [], "any", false, false, false, 58);
            echo "</td>
          <td>";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["order"], "email", [], "any", false, false, false, 59);
            echo "<br/>
            ";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["order"], "telephone", [], "any", false, false, false, 60);
            echo "</td>
        </tr>
      </tbody>
    </table>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <!-- <td><b>";
            // line 67
            echo ($context["column_location"] ?? null);
            echo "</b></td> -->
          <!-- <td><b>";
            // line 68
            echo ($context["column_reference"] ?? null);
            echo "</b></td> -->
          <td><b>";
            // line 69
            echo ($context["column_product"] ?? null);
            echo "</b></td>
          <!-- <td><b>";
            // line 70
            echo ($context["column_weight"] ?? null);
            echo "</b></td> -->
          <!-- <td><b>";
            // line 71
            echo ($context["column_model"] ?? null);
            echo "</b></td> -->
          <td class=\"text-right\"><b>";
            // line 72
            echo ($context["column_quantity"] ?? null);
            echo "</b></td>
        </tr>
      </thead>
      <tbody>
        ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "product", [], "any", false, false, false, 76));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 77
                echo "        <tr>
          <!-- <td>";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["product"], "location", [], "any", false, false, false, 78);
                echo "</td> -->
          <!-- <td>";
                // line 79
                if (twig_get_attribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 79)) {
                    // line 80
                    echo "            ";
                    echo ($context["text_sku"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 80);
                    echo "<br />
            ";
                }
                // line 82
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "upc", [], "any", false, false, false, 82)) {
                    // line 83
                    echo "            ";
                    echo ($context["text_upc"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "upc", [], "any", false, false, false, 83);
                    echo "<br />
            ";
                }
                // line 85
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "ean", [], "any", false, false, false, 85)) {
                    // line 86
                    echo "            ";
                    echo ($context["text_ean"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "ean", [], "any", false, false, false, 86);
                    echo "<br />
            ";
                }
                // line 88
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "jan", [], "any", false, false, false, 88)) {
                    // line 89
                    echo "            ";
                    echo ($context["text_jan"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "jan", [], "any", false, false, false, 89);
                    echo "<br />
            ";
                }
                // line 91
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "isbn", [], "any", false, false, false, 91)) {
                    // line 92
                    echo "            ";
                    echo ($context["text_isbn"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "isbn", [], "any", false, false, false, 92);
                    echo "<br />
            ";
                }
                // line 94
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "mpn", [], "any", false, false, false, 94)) {
                    // line 95
                    echo "            ";
                    echo ($context["text_mpn"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "mpn", [], "any", false, false, false, 95);
                    echo "<br />
            ";
                }
                // line 96
                echo "</td> -->
          <td>";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 97);
                echo "
            ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 98));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 99
                    echo "            <br />
            &nbsp;<small> - ";
                    // line 100
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 100);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 100);
                    echo "</small>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "</td>
          <!-- <td>";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 102);
                echo "</td> -->
          <!-- <td>";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 103);
                echo "</td> -->
          <td class=\"text-right\">";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 104);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "      </tbody>
    </table>
    ";
            // line 109
            if (twig_get_attribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 109)) {
                // line 110
                echo "    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td><b>";
                // line 113
                echo ($context["text_comment"] ?? null);
                echo "</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 118);
                echo "</td>
        </tr>
      </tbody>
    </table>
    ";
            }
            // line 123
            echo "  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "sale/order_shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 125,  382 => 123,  374 => 118,  366 => 113,  361 => 110,  359 => 109,  355 => 107,  346 => 104,  342 => 103,  338 => 102,  335 => 101,  325 => 100,  322 => 99,  318 => 98,  314 => 97,  311 => 96,  304 => 95,  301 => 94,  293 => 92,  290 => 91,  282 => 89,  279 => 88,  271 => 86,  268 => 85,  260 => 83,  257 => 82,  249 => 80,  247 => 79,  243 => 78,  240 => 77,  236 => 76,  229 => 72,  225 => 71,  221 => 70,  217 => 69,  213 => 68,  209 => 67,  199 => 60,  195 => 59,  191 => 58,  183 => 53,  179 => 52,  170 => 45,  162 => 44,  160 => 43,  153 => 42,  145 => 40,  143 => 39,  137 => 38,  129 => 37,  123 => 36,  117 => 35,  112 => 33,  108 => 32,  99 => 26,  89 => 22,  83 => 20,  73 => 18,  71 => 17,  68 => 16,  64 => 15,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_shipping.twig", "");
    }
}
