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

/* journal3/template/journal3/checkout/cart.twig */
class __TwigTemplate_b925822d8b545be753ba4b64b931e1f62d65184522904569f3b6984d49399ace extends \Twig\Template
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
        echo "<div class=\"checkout-section cart-section\">
  <div class=\"title section-title\">";
        // line 2
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 2), "get", [0 => "sectionTitleShoppingCart"], "method", false, false, false, 2);
        echo "</div>
  <div class=\"section-body\">
    <div class=\"alert alert-danger alert-dismissible\" v-if=\"stock_warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 4
        echo ($context["error_warning"] ?? null);
        echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    <div class=\"table-responsive\" style=\"margin-bottom: 20px;\">
      <table class=\"table table-bordered\">
        <!-- <thead>
        <tr>
          <td class=\"text-center td-image\">";
        // line 11
        echo ($context["column_image"] ?? null);
        echo "</td>
          <td class=\"text-left td-product\">";
        // line 12
        echo ($context["column_name"] ?? null);
        echo "</td>
          <td class=\"text-center td-model\">";
        // line 13
        echo ($context["column_model"] ?? null);
        echo "</td>
          <td class=\"text-center td-qty\">";
        // line 14
        echo ($context["column_quantity"] ?? null);
        echo "</td>
          <td class=\"text-right td-price\">";
        // line 15
        echo ($context["column_price"] ?? null);
        echo "</td>
          <td class=\"text-right td-total\">";
        // line 16
        echo ($context["column_total"] ?? null);
        echo "</td>
        </tr>
        </thead> -->
        <tbody>
        <tr v-for=\"(product, index) in products\">
          <td class=\"text-center td-image\">
            <!-- <a :href=\"product.href\"> -->
              <img :src=\"product.thumb\" :srcset=\"srcSet(product.thumb, product.thumb2x)\" :alt=\"product.name\" :title=\"product.name\" class=\"img-thumbnail\"/>
            <!-- </a> -->
          </td>
          <td class=\"text-left td-product\">
            <span v-html=\"product.name\"></span>&nbsp;&nbsp;x&nbsp;&nbsp; <span class=\"badge badge-success\" v-html=\"product.quantity\"></span>
            <!-- <a :href=\"product.href\" v-html=\"product.name\"></a> x<span v-html=\"product.quantity\"></span> -->
            <span v-if=\"!product.stock\" class=\"text-danger\">***</span>
            <template v-for=\"option in product.option\">
              <br/>
              <small v-html=\"option.name + ': ' + option.value\"></small>
            </template>
            <br v-if=\"product.reward\"/>
            <small v-if=\"product.reward\" v-html=\"product.reward \"></small>
            <br v-if=\"product.recurring\"/>
            <span v-if=\"product.recurring\" class=\"label label-info\">";
        // line 37
        echo ($context["text_recurring_item"] ?? null);
        echo "</span>
            <small v-if=\"product.recurring\" v-html=\"product.recurring\"></small>
          </td>
          <td class=\"text-left td-model\" v-html=\"product.model\"></td>
          <!-- <td class=\"text-left td-qty\">
            <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
              <div class=\"stepper\">
                <input type=\"text\" v-model=\"product.quantity\" v-on:change=\"updateCartItemQuantityValue(index, \$event.target.value)\" class=\"form-control\"/>
                <span>
                      <i class=\"fa fa-angle-up\" v-on:click=\"updateCartItemQuantity(index, 1)\"></i>
                      <i class=\"fa fa-angle-down\" v-on:click=\"updateCartItemQuantity(index, -1)\"></i>
                    </span>
              </div>
              <span class=\"input-group-btn\">
                    <button type=\"button\" v-on:click=\"updateCartItem(product)\" data-toggle=\"tooltip\" title=\"";
        // line 51
        echo ($context["button_update"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i></button>
                    <button type=\"button\" v-on:click=\"deleteCartItem(product)\" data-toggle=\"tooltip\" title=\"";
        // line 52
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-times-circle\"></i></button>
                  </span>
            </div>
          </td> -->
          <td class=\"text-right td-price\" v-html=\"product.price\"></td>
          <td class=\"text-right td-total\" v-html=\"product.total\"></td>
        </tr>
        <tr v-for=\"voucher in vouchers\">
          <td></td>
          <td class=\"text-left\" v-html=\"voucher.description\">></td>
          <td class=\"text-left\"></td>
          <td class=\"text-left\">
            <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
              <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\"/>
              <span class=\"input-group-btn\">
                    <button type=\"button\" v-on:click=\"deleteVoucher(voucher)\" data-toggle=\"tooltip\" title=\"";
        // line 67
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-times-circle\"></i></button>
                    </span></div>
          </td>
          <td class=\"text-right\" v-html=\"voucher.amount\"></td>
          <td class=\"text-right\" v-html=\"voucher.amount\"></td>
        </tr>
        </tbody>
      </table>
    </div>
    <div class=\"title section-title\" style=\"padding-top: 15px;\">Price Details</div>
      <table class=\"table table-bordered\">
        <tfoot v-if=\"totals.length\">
        <tr v-for=\"total in totals\">
          <td colspan=\"7\" class=\"\"><span v-html=\"total.title + ''\"></span></td>
          <td class=\"text-right\" v-html=\"total.text\"></td>
        </tr>
        </tfoot>
      </table>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 67,  120 => 52,  116 => 51,  99 => 37,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/checkout/cart.twig", "");
    }
}
