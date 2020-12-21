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
class __TwigTemplate_2bc31d05365239b8a39adece9692cc65815f50a12d515c0c2fcae7bd44dee6ce extends \Twig\Template
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
          <td>";
            // line 35
            echo ($context["text_order_detail"] ?? null);
            echo "</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><b>";
            // line 40
            echo ($context["text_date_added"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 40);
            echo "<br />
            ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 41)) {
                // line 42
                echo "            <b>";
                echo ($context["text_invoice_no"] ?? null);
                echo "</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 42);
                echo "<br />
            ";
            }
            // line 44
            echo "            <b>";
            echo ($context["text_order_id"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 44);
            echo "<br />
            <b>";
            // line 45
            echo ($context["text_payment_method"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 45);
            echo "<br />
            ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 46)) {
                // line 47
                echo "            <b>";
                echo ($context["text_shipping_method"] ?? null);
                echo "</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 47);
                echo "<br />
            ";
            }
            // line 48
            echo "</td>
        </tr>
      </tbody>
    </table>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td style=\"width: 50%;\"><b>";
            // line 55
            echo ($context["text_payment_address"] ?? null);
            echo "</b></td>
          <td style=\"width: 50%;\"><b>";
            // line 56
            echo ($context["text_shipping_address"] ?? null);
            echo "</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><address>
            ";
            // line 62
            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_address", [], "any", false, false, false, 62);
            echo "
            </address></td>
          <td><address>
            ";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_address", [], "any", false, false, false, 65);
            echo "
            </address></td>
        </tr>
      </tbody>
    </table>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td><b>";
            // line 73
            echo ($context["column_product"] ?? null);
            echo "</b></td>
          <td><b>";
            // line 74
            echo ($context["column_model"] ?? null);
            echo "</b></td>
          <td class=\"text-right\"><b>";
            // line 75
            echo ($context["column_quantity"] ?? null);
            echo "</b></td>
          <td class=\"text-right\"><b>";
            // line 76
            echo ($context["column_price"] ?? null);
            echo "</b></td>
          <td class=\"text-right\"><b>";
            // line 77
            echo ($context["column_total"] ?? null);
            echo "</b></td>
        </tr>
      </thead>
      <tbody>
        ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "product", [], "any", false, false, false, 81));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 82
                echo "        <tr>
          <td>";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 83);
                echo "
            ";
                // line 84
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 84));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 85
                    echo "            <br />
            &nbsp;<small> - ";
                    // line 86
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 86);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 86);
                    echo "</small>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "</td>
          <td>";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 88);
                echo "</td>
          <td class=\"text-right\">";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 89);
                echo "</td>
          <td class=\"text-right\">";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 90);
                echo "</td>
          <td class=\"text-right\">";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 91);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "voucher", [], "any", false, false, false, 94));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 95
                echo "        <tr>
          <td>";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 96);
                echo "</td>
          <td></td>
          <td class=\"text-right\">1</td>
          <td class=\"text-right\">";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 99);
                echo "</td>
          <td class=\"text-right\">";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 100);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 103));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 104
                echo "        <tr>
          <td class=\"text-right\" colspan=\"4\"><b>";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 105);
                echo "</b></td>
          <td class=\"text-right\">";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 106);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "      </tbody>
    </table>
    ";
            // line 111
            if (twig_get_attribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 111)) {
                // line 112
                echo "    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td><b>";
                // line 115
                echo ($context["text_comment"] ?? null);
                echo "</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>";
                // line 120
                echo twig_get_attribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 120);
                echo "</td>
        </tr>
      </tbody>
    </table>
    ";
            }
            // line 125
            echo "    <table class=\"table\">
      <tbody>
        <tr>
          <td class=\"text-left\" style=\"width: 50%;\"><address>
            <strong>";
            // line 129
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_name", [], "any", false, false, false, 129);
            echo "</strong><br />
            ";
            // line 130
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_address", [], "any", false, false, false, 130);
            echo "
            </address></td>
          <td class=\"text-right\" style=\"width: 50%;\"><b>";
            // line 132
            echo ($context["text_telephone"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_telephone", [], "any", false, false, false, 132);
            echo "<br />
            ";
            // line 133
            if (twig_get_attribute($this->env, $this->source, $context["order"], "store_fax", [], "any", false, false, false, 133)) {
                // line 134
                echo "            <b>";
                echo ($context["text_fax"] ?? null);
                echo "</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "store_fax", [], "any", false, false, false, 134);
                echo "<br />
            ";
            }
            // line 136
            echo "            <b>";
            echo ($context["text_email"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_email", [], "any", false, false, false, 136);
            echo "<br />
          <b>";
            // line 137
            echo ($context["text_website"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_url", [], "any", false, false, false, 137);
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
        // line 147
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
        return array (  404 => 147,  386 => 137,  379 => 136,  371 => 134,  369 => 133,  363 => 132,  358 => 130,  354 => 129,  348 => 125,  340 => 120,  332 => 115,  327 => 112,  325 => 111,  321 => 109,  312 => 106,  308 => 105,  305 => 104,  300 => 103,  291 => 100,  287 => 99,  281 => 96,  278 => 95,  273 => 94,  264 => 91,  260 => 90,  256 => 89,  252 => 88,  249 => 87,  239 => 86,  236 => 85,  232 => 84,  228 => 83,  225 => 82,  221 => 81,  214 => 77,  210 => 76,  206 => 75,  202 => 74,  198 => 73,  187 => 65,  181 => 62,  172 => 56,  168 => 55,  159 => 48,  151 => 47,  149 => 46,  143 => 45,  136 => 44,  128 => 42,  126 => 41,  120 => 40,  112 => 35,  108 => 34,  99 => 29,  93 => 27,  83 => 25,  81 => 24,  74 => 20,  68 => 16,  64 => 15,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_invoice.twig", "");
    }
}
