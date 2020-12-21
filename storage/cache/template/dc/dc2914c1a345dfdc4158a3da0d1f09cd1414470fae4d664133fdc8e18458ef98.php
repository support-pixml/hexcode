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
class __TwigTemplate_7694af154ddd611963dfe0d10b39b805477d0dd295ccb0829c43f90f69bc34d7 extends \Twig\Template
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
    <table class=\"table \">
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
                echo "\" width=\"150px\" height=\"auto\" class=\"img-responsive\" style=\"margin-left: auto; margin-right: auto;\" />
    ";
            } else {
                // line 27
                echo "      <h1 class=\"text-center\">";
                echo ($context["name"] ?? null);
                echo "</h1>
    ";
            }
            // line 29
            echo "    <br />
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td>";
            // line 33
            echo ($context["text_order_detail"] ?? null);
            echo "</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><b>";
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
                echo "</b> #";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 40);
                echo "<br />
            ";
            }
            // line 42
            echo "            <b>";
            echo ($context["text_order_id"] ?? null);
            echo "</b> #";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 42);
            echo "<br />
            <b>";
            // line 43
            echo ($context["text_payment_method"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 43);
            echo "<br />
            ";
            // line 44
            if (twig_get_attribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 44)) {
                // line 45
                echo "            <b>";
                echo ($context["text_shipping_method"] ?? null);
                echo "</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 45);
                echo "<br />
            ";
            }
            // line 46
            echo "</td>
        </tr>
      </tbody>
    </table>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td style=\"width: 50%;\"><b>";
            // line 53
            echo ($context["text_payment_address"] ?? null);
            echo "</b></td>
          <td style=\"width: 50%;\"><b>";
            // line 54
            echo ($context["text_shipping_address"] ?? null);
            echo "</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><address>
            ";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_address", [], "any", false, false, false, 60);
            echo "
            </address></td>
          <td><address>
            ";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_address", [], "any", false, false, false, 63);
            echo "
            </address></td>
        </tr>
      </tbody>
    </table>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td colspan=\"3\"><b>";
            // line 71
            echo ($context["column_product"] ?? null);
            echo "</b></td>
          <!-- <td><b>";
            // line 72
            echo ($context["column_model"] ?? null);
            echo "</b></td> -->
          <td class=\"text-right\"><b>";
            // line 73
            echo ($context["column_quantity"] ?? null);
            echo "</b></td>
          <!-- <td class=\"text-right\"><b>";
            // line 74
            echo ($context["column_price"] ?? null);
            echo "</b></td> -->
          <td class=\"text-right\"><b>";
            // line 75
            echo ($context["column_total"] ?? null);
            echo "</b></td>
        </tr>
      </thead>
      <tbody>
        ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "product", [], "any", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 80
                echo "        <tr>
          <td colspan=\"3\">";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 81);
                echo "
            ";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 82));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 83
                    echo "            <br />
            &nbsp;<small> - ";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 84);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 84);
                    echo "</small>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "</td>
          <!-- <td>";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 86);
                echo "</td> -->
          <td class=\"text-right\">";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 87);
                echo "</td>
          <!-- <td class=\"text-right\">";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 88);
                echo "</td> -->
          <td class=\"text-right\">";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 89);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "voucher", [], "any", false, false, false, 92));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 93
                echo "        <tr>
          <td>";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 94);
                echo "</td>
          <td></td>
          <td class=\"text-right\">1</td>
          <td class=\"text-right\">";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 97);
                echo "</td>
          <td class=\"text-right\">";
                // line 98
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 98);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 101));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 102
                echo "        <tr>
          <td class=\"text-right\" colspan=\"4\"><b>";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 103);
                echo "</b></td>
          <td class=\"text-right\">";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 104);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
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
            echo "    <table class=\"table\">
      <tbody>
        <tr>
          <td class=\"text-left\" style=\"width: 50%;\"><address>
            <strong>";
            // line 127
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_name", [], "any", false, false, false, 127);
            echo "</strong><br />
            ";
            // line 128
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_address", [], "any", false, false, false, 128);
            echo "
            </address></td>
          <td class=\"text-right\" style=\"width: 50%;\"><b>";
            // line 130
            echo ($context["text_telephone"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_telephone", [], "any", false, false, false, 130);
            echo "<br />
            ";
            // line 131
            if (twig_get_attribute($this->env, $this->source, $context["order"], "store_fax", [], "any", false, false, false, 131)) {
                // line 132
                echo "            <b>";
                echo ($context["text_fax"] ?? null);
                echo "</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "store_fax", [], "any", false, false, false, 132);
                echo "<br />
            ";
            }
            // line 134
            echo "            <b>";
            echo ($context["text_email"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_email", [], "any", false, false, false, 134);
            echo "<br />
          <b>";
            // line 135
            echo ($context["text_website"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_url", [], "any", false, false, false, 135);
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
        // line 145
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
        return array (  397 => 145,  379 => 135,  372 => 134,  364 => 132,  362 => 131,  356 => 130,  351 => 128,  347 => 127,  341 => 123,  333 => 118,  325 => 113,  320 => 110,  318 => 109,  314 => 107,  305 => 104,  301 => 103,  298 => 102,  293 => 101,  284 => 98,  280 => 97,  274 => 94,  271 => 93,  266 => 92,  257 => 89,  253 => 88,  249 => 87,  245 => 86,  242 => 85,  232 => 84,  229 => 83,  225 => 82,  221 => 81,  218 => 80,  214 => 79,  207 => 75,  203 => 74,  199 => 73,  195 => 72,  191 => 71,  180 => 63,  174 => 60,  165 => 54,  161 => 53,  152 => 46,  144 => 45,  142 => 44,  136 => 43,  129 => 42,  121 => 40,  119 => 39,  113 => 38,  105 => 33,  99 => 29,  93 => 27,  83 => 25,  81 => 24,  74 => 20,  68 => 16,  64 => 15,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_invoice.twig", "");
    }
}
