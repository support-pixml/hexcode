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

/* sale/order_invoice.twig */
class __TwigTemplate_68878289912bf11cdc407bc64f18d26ab72de16190bad1d03b3a3728d60225e9 extends \Twig\Template
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
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td class=\"text-center text-uppercase\"><h3><strong>";
            // line 20
            echo ($context["text_invoice"] ?? null);
            echo "</strong></h3></td>
        </tr>
      </thead>
    </table>
    ";
            // line 24
            if (($context["logo"] ?? null)) {
                // line 25
                echo "      <img src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive\" />
    ";
            } else {
                // line 27
                echo "      <h1>";
                echo ($context["name"] ?? null);
                echo "</h1>
    ";
            }
            // line 29
            echo "    <h1>";
            echo ($context["name"] ?? null);
            echo "</h1>
    <br />
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td>";
            // line 34
            echo ($context["text_order_detail"] ?? null);
            echo "</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><b>";
            // line 39
            echo ($context["text_date_added"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 39);
            echo "<br />
            ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 40)) {
                // line 41
                echo "            <b>";
                echo ($context["text_invoice_no"] ?? null);
                echo "</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 41);
                echo "<br />
            ";
            }
            // line 43
            echo "            <b>";
            echo ($context["text_order_id"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 43);
            echo "<br />
            <b>";
            // line 44
            echo ($context["text_payment_method"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 44);
            echo "<br />
            ";
            // line 45
            if (twig_get_attribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 45)) {
                // line 46
                echo "            <b>";
                echo ($context["text_shipping_method"] ?? null);
                echo "</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 46);
                echo "<br />
            ";
            }
            // line 47
            echo "</td>
        </tr>
      </tbody>
    </table>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td style=\"width: 50%;\"><b>";
            // line 54
            echo ($context["text_payment_address"] ?? null);
            echo "</b></td>
          <td style=\"width: 50%;\"><b>";
            // line 55
            echo ($context["text_shipping_address"] ?? null);
            echo "</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><address>
            ";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_address", [], "any", false, false, false, 61);
            echo "
            </address></td>
          <td><address>
            ";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_address", [], "any", false, false, false, 64);
            echo "
            </address></td>
        </tr>
      </tbody>
    </table>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td><b>";
            // line 72
            echo ($context["column_product"] ?? null);
            echo "</b></td>
          <td><b>";
            // line 73
            echo ($context["column_model"] ?? null);
            echo "</b></td>
          <td class=\"text-right\"><b>";
            // line 74
            echo ($context["column_quantity"] ?? null);
            echo "</b></td>
          <td class=\"text-right\"><b>";
            // line 75
            echo ($context["column_price"] ?? null);
            echo "</b></td>
          <td class=\"text-right\"><b>";
            // line 76
            echo ($context["column_total"] ?? null);
            echo "</b></td>
        </tr>
      </thead>
      <tbody>
        ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "product", [], "any", false, false, false, 80));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 81
                echo "        <tr>
          <td>";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 82);
                echo "
            ";
                // line 83
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 83));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 84
                    echo "            <br />
            &nbsp;<small> - ";
                    // line 85
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 85);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 85);
                    echo "</small>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "</td>
          <td>";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 87);
                echo "</td>
          <td class=\"text-right\">";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 88);
                echo "</td>
          <td class=\"text-right\">";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 89);
                echo "</td>
          <td class=\"text-right\">";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 90);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "voucher", [], "any", false, false, false, 93));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 94
                echo "        <tr>
          <td>";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 95);
                echo "</td>
          <td></td>
          <td class=\"text-right\">1</td>
          <td class=\"text-right\">";
                // line 98
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 98);
                echo "</td>
          <td class=\"text-right\">";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 99);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 102));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 103
                echo "        <tr>
          <td class=\"text-right\" colspan=\"4\"><b>";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 104);
                echo "</b></td>
          <td class=\"text-right\">";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 105);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "      </tbody>
    </table>
    ";
            // line 110
            if (twig_get_attribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 110)) {
                // line 111
                echo "    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td><b>";
                // line 114
                echo ($context["text_comment"] ?? null);
                echo "</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 119);
                echo "</td>
        </tr>
      </tbody>
    </table>
    ";
            }
            // line 124
            echo "    <table class=\"table\">
      <tbody>
        <tr>
          <td class=\"text-left\" style=\"width: 50%;\"><address>
            <strong>";
            // line 128
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_name", [], "any", false, false, false, 128);
            echo "</strong><br />
            ";
            // line 129
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_address", [], "any", false, false, false, 129);
            echo "
            </address></td>
          <td class=\"text-right\" style=\"width: 50%;\"><b>";
            // line 131
            echo ($context["text_telephone"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_telephone", [], "any", false, false, false, 131);
            echo "<br />
            ";
            // line 132
            if (twig_get_attribute($this->env, $this->source, $context["order"], "store_fax", [], "any", false, false, false, 132)) {
                // line 133
                echo "            <b>";
                echo ($context["text_fax"] ?? null);
                echo "</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "store_fax", [], "any", false, false, false, 133);
                echo "<br />
            ";
            }
            // line 135
            echo "            <b>";
            echo ($context["text_email"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_email", [], "any", false, false, false, 135);
            echo "<br />
          <b>";
            // line 136
            echo ($context["text_website"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_url", [], "any", false, false, false, 136);
            echo "</td>
        </tr>
        <tr>
          <td style=\"width: 50%;\"></td>
          <td style=\"width: 50%;\"></td>
        </tr>
      </tbody>
    </table>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "sale/order_invoice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 146,  382 => 136,  375 => 135,  367 => 133,  365 => 132,  359 => 131,  354 => 129,  350 => 128,  344 => 124,  336 => 119,  328 => 114,  323 => 111,  321 => 110,  317 => 108,  308 => 105,  304 => 104,  301 => 103,  296 => 102,  287 => 99,  283 => 98,  277 => 95,  274 => 94,  269 => 93,  260 => 90,  256 => 89,  252 => 88,  248 => 87,  245 => 86,  235 => 85,  232 => 84,  228 => 83,  224 => 82,  221 => 81,  217 => 80,  210 => 76,  206 => 75,  202 => 74,  198 => 73,  194 => 72,  183 => 64,  177 => 61,  168 => 55,  164 => 54,  155 => 47,  147 => 46,  145 => 45,  139 => 44,  132 => 43,  124 => 41,  122 => 40,  116 => 39,  108 => 34,  99 => 29,  93 => 27,  83 => 25,  81 => 24,  74 => 20,  68 => 16,  64 => 15,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_invoice.twig", "");
    }
}
