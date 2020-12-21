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

/* journal3/template/journal3/checkout/address.twig */
class __TwigTemplate_f57789449702ae34492c65385c7e3b184fa522d53f88e47e3dbed3772612f6b7 extends \Twig\Template
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
        echo "<div class=\"checkout-section ";
        echo ($context["type"] ?? null);
        echo "-address\" v-if=\"('";
        echo ($context["type"] ?? null);
        echo "' === 'payment') || (('";
        echo ($context["type"] ?? null);
        echo "' === 'shipping') && !same_address && shipping_required)\">
  <div class=\"title section-title\">";
        // line 2
        echo (((($context["type"] ?? null) == "payment")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 2), "get", [0 => "sectionTitlePaymentAddress"], "method", false, false, false, 2)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 2), "get", [0 => "sectionTitleShippingAddress"], "method", false, false, false, 2)));
        echo "</div>
  <div class=\"section-body\">
    <div class=\"radio\" v-if=\"customer_id && Object.keys(addresses).length\">
      <label>
        <input type=\"radio\" v-model=\"";
        // line 6
        echo ($context["type"] ?? null);
        echo "_address_type\" v-on:change=\"save()\" value=\"existing\"/>
        ";
        // line 7
        echo ($context["text_address_existing"] ?? null);
        echo "</label>
    </div>

    <div id=\"";
        // line 10
        echo ($context["type"] ?? null);
        echo "-existing\" v-if=\"customer_id && (";
        echo ($context["type"] ?? null);
        echo "_address_type === 'existing')\">
      <select v-model=\"order_data.";
        // line 11
        echo ($context["type"] ?? null);
        echo "_address_id\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-address\" class=\"form-control\">
        <option v-for=\"address in addresses\" v-bind:value=\"address.address_id\" v-html=\"address.firstname + ' ' + address.lastname + ' ' + address.address_1 + ' ' + address.city + ' ' + address.zone + ' ' + address.country\"></option>
      </select>
      <span class=\"text-danger\" v-if=\"error && error.";
        // line 14
        echo ($context["type"] ?? null);
        echo "_address_error\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_address_error\"></span>
    </div>

    <div class=\"radio\" v-if=\"customer_id && Object.keys(addresses).length\">
      <label>
        <input type=\"radio\" v-model=\"";
        // line 19
        echo ($context["type"] ?? null);
        echo "_address_type\" v-on:change=\"save()\" value=\"new\"/>
        ";
        // line 20
        echo ($context["text_address_new"] ?? null);
        echo "</label>
    </div>

    <div v-if=\"!customer_id || (customer_id && (";
        // line 23
        echo ($context["type"] ?? null);
        echo "_address_type === 'new'))\" style=\"display:block;\">
      <!-- <div class=\"form-group required address-firstname\" v-if=\"customer_id || (!customer_id && '";
        // line 24
        echo ($context["type"] ?? null);
        echo "' === 'shipping')\" style=\"width:48%;float:left; margin-right:11px;\"> -->
      <div class=\"form-group required address-firstname\"  style=\"width:48%;float:left; margin-right:11px;\">
        <label class=\"control-label\" for=\"input-";
        // line 26
        echo ($context["type"] ?? null);
        echo "-firstname\">";
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 27
        echo ($context["type"] ?? null);
        echo "_firstname\" type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-firstname\" class=\"form-control\" v-bind:class = \"(error && error.payment_firstname)?'has-error':''\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 28
        echo ($context["type"] ?? null);
        echo "_firstname\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_firstname\"></span>
      </div>

      <!-- <div class=\"form-group required address-lastname\" v-if=\"customer_id || (!customer_id && '";
        // line 31
        echo ($context["type"] ?? null);
        echo "' === 'shipping')\"> -->
      <div class=\"form-group required address-lastname\">
        <label class=\"control-label\" for=\"input-";
        // line 33
        echo ($context["type"] ?? null);
        echo "-lastname\">";
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 34
        echo ($context["type"] ?? null);
        echo "_lastname\" type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-lastname\" class=\"form-control\" v-bind:class = \"(error && error.payment_firstname)?'has-error':''\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 35
        echo ($context["type"] ?? null);
        echo "_lastname\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_lastname\"></span>
      </div>

      ";
        // line 39
        echo "
    <!-- <div class=\"form-group required account-firstname fname\"  v-if=\"customer_id || (!customer_id && '";
        // line 40
        echo ($context["type"] ?? null);
        echo "' !== 'shipping')\" style=\"width:48%;float:left; margin-right:11px;\">
        <label class=\"control-label\" for=\"input-firstname\">";
        // line 41
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
        <input v-model=\"order_data.payment_firstname\" type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 42
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\" v-bind:class = \"(error && error.payment_firstname)?'has-error':''\"/>
        <span class=\"text-danger\" v-if=\"error && error.payment_firstname\" v-html=\"error.payment_firstname\"></span>
      </div> -->
  
      ";
        // line 47
        echo "  
      <!-- <div class=\"form-group required account-lastname lname\"  v-if=\"customer_id || (!customer_id && '";
        // line 48
        echo ($context["type"] ?? null);
        echo "' !== 'shipping')\" >
        <label class=\"control-label\" for=\"input-lastname\">";
        // line 49
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
        <input v-model=\"order_data.payment_lastname\" type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 50
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.payment_lastname\" v-html=\"error.payment_lastname\"></span>
      </div> -->

     

      <div class=\"form-group address-company\">
        <label class=\"control-label\" for=\"input-";
        // line 57
        echo ($context["type"] ?? null);
        echo "-company\">";
        echo ($context["entry_company"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 58
        echo ($context["type"] ?? null);
        echo "_company\" type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-company\" class=\"form-control\"/>
      </div>

      <div class=\"form-group required address-address-1\">
        <label class=\"control-label\" for=\"input-";
        // line 62
        echo ($context["type"] ?? null);
        echo "-address-1\">";
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 63
        echo ($context["type"] ?? null);
        echo "_address_1\" type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-address-1\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 64
        echo ($context["type"] ?? null);
        echo "_address_1\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_address_1\"></span>
      </div>

      <div class=\"form-group required address-address-2\">
        <label class=\"control-label\" for=\"input-";
        // line 68
        echo ($context["type"] ?? null);
        echo "-address-2\">";
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 69
        echo ($context["type"] ?? null);
        echo "_address_2\" type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-address-2\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 70
        echo ($context["type"] ?? null);
        echo "_address_2\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_address_2\"></span>
      </div>

      <div class=\"form-group required address-city\" style=\"width:48%;float:left; margin-right:11px;\">
        <label class=\"control-label\" for=\"input-";
        // line 74
        echo ($context["type"] ?? null);
        echo "-city\">";
        echo ($context["entry_city"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 75
        echo ($context["type"] ?? null);
        echo "_city\" type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-city\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 76
        echo ($context["type"] ?? null);
        echo "_city\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_city\"></span>
      </div>

      <div class=\"form-group required address-postcode\" >
        <label class=\"control-label\" for=\"input-";
        // line 80
        echo ($context["type"] ?? null);
        echo "-postcode\">";
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 81
        echo ($context["type"] ?? null);
        echo "_postcode\" type=\"text\" name=\"postcode\" value=\"\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-postcode\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 82
        echo ($context["type"] ?? null);
        echo "_postcode\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_postcode\"></span>
      </div>

      <div class=\"form-group required address-country\" style=\"width:48%;float:left; margin-right:11px;\">
        <label class=\"control-label\" for=\"input-";
        // line 86
        echo ($context["type"] ?? null);
        echo "-country\">";
        echo ($context["entry_country"] ?? null);
        echo "</label>
        <select v-model=\"order_data.";
        // line 87
        echo ($context["type"] ?? null);
        echo "_country_id\" name=\"country_id\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-country\" class=\"form-control\">
          <option value=\"\">";
        // line 88
        echo ($context["text_select"] ?? null);
        echo "</option>
          <option v-for=\"country in countries\" v-bind:value=\"country.country_id\" v-html=\"country.name\"></option>
        </select>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 91
        echo ($context["type"] ?? null);
        echo "_country\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_country\"></span>
      </div>

      <div class=\"form-group required address-zone\">
        <label class=\"control-label\" for=\"input-";
        // line 95
        echo ($context["type"] ?? null);
        echo "-zone\">";
        echo ($context["entry_zone"] ?? null);
        echo "</label>
        <select v-model=\"order_data.";
        // line 96
        echo ($context["type"] ?? null);
        echo "_zone_id\" name=\"zone_id\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-zone\" class=\"form-control\">
          <option v-if=\"";
        // line 97
        echo ($context["type"] ?? null);
        echo "_zones.length > 0\" value=\"\">";
        echo ($context["text_select"] ?? null);
        echo "</option>
          <option v-if=\"";
        // line 98
        echo ($context["type"] ?? null);
        echo "_zones.length == 0\" value=\"\">";
        echo ($context["text_none"] ?? null);
        echo "</option>
          <option v-for=\"zone in ";
        // line 99
        echo ($context["type"] ?? null);
        echo "_zones\" v-bind:value=\"zone.zone_id\" v-html=\"zone.name\"></option>
        </select>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 101
        echo ($context["type"] ?? null);
        echo "_zone\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_zone\"></span>
      </div>

      <div class=\"form-group required account-telephone\">
        <label class=\"control-label\" for=\"input-telephone\">";
        // line 105
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
        <input v-model=\"order_data.telephone\" type=\"text\" name=\"telephone\" value=\"\" placeholder=\"";
        // line 106
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.telephone\" v-html=\"error.telephone\"></span>
      </div>

      ";
        // line 111
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'select'\" v-bind:id=\"'";
        // line 112
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 113
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <select v-model=\"order_data.";
        // line 114
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\">
          <option value=\"\">";
        // line 115
        echo ($context["text_select"] ?? null);
        echo "</option>
          <option v-for=\"custom_field_value in custom_field.custom_field_value\" v-bind:value=\"custom_field_value.custom_field_value_id\" v-html=\"custom_field_value.name\"></option>
        </select>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 118
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 122
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'radio'\" v-bind:id=\"'";
        // line 123
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-html=\"custom_field.name\"></label>
        <div v-bind:id=\"'input-";
        // line 125
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\">
          <div class=\"radio\" v-for=\"custom_field_value in custom_field.custom_field_value\">
            <label>
              <input type=\"radio\" v-model=\"order_data.";
        // line 128
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-bind:value=\"custom_field_value.custom_field_value_id\"/>
              <span v-html=\"custom_field_value.name\"></span></label>
          </div>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 132
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 136
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'checkbox'\" v-bind:id=\"'";
        // line 137
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-html=\"custom_field.name\"></label>
        <div v-bind:id=\"'input-";
        // line 139
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\"> ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_value", [], "any", false, false, false, 139));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
            // line 140
            echo "            <div class=\"checkbox\">
              <label>
                <input type=\"checkbox\" name=\"custom_field[";
            // line 142
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 142);
            echo "][";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 142);
            echo "][]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 142);
            echo "\"/>
                ";
            // line 143
            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 143);
            echo "</label>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo " </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 146
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 150
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'text'\" v-bind:id=\"'";
        // line 151
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 152
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <input type=\"text\" v-model=\"order_data.";
        // line 153
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 153);
        echo "\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 154
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 158
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'textarea'\" v-bind:id=\"'";
        // line 159
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 160
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <textarea v-model=\"order_data.";
        // line 161
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" rows=\"5\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\">";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 161);
        echo "</textarea>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 162
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 166
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'file'\" v-bind:id=\"'";
        // line 167
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 168
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <br/>
        <button type=\"button\" v-on:click=\"upload('";
        // line 170
        echo ($context["type"] ?? null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" v-bind:id=\"'button-account-custom-field' + custom_field.custom_field_id\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
        echo ($context["button_upload"] ?? null);
        echo "</button>
        <input type=\"hidden\" v-model=\"order_data.";
        // line 171
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" value=\"\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 172
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 176
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'date'\" v-bind:id=\"'";
        // line 177
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 178
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <div class=\"input-group date\">
          <input type=\"text\" v-model=\"order_data.";
        // line 180
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('";
        echo ($context["type"] ?? null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 180);
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"YYYY-MM-DD\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 183
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 187
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'time'\" v-bind:id=\"'";
        // line 188
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 189
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <div class=\"input-group time\">
          <input type=\"text\" v-model=\"order_data.";
        // line 191
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('";
        echo ($context["type"] ?? null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 191);
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"HH:mm\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 194
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 198
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'datetime'\" v-bind:id=\"'";
        // line 199
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 200
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <div class=\"input-group time\">
          <input type=\"text\" v-model=\"order_data.";
        // line 202
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('";
        echo ($context["type"] ?? null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 202);
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"YYYY-MM-DD HH:mm\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 205
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>
    </div>
    <div v-if=\"('";
        // line 208
        echo ($context["type"] ?? null);
        echo "' === 'payment') && shipping_required\" class=\"checkbox\">
      <label>
        <input v-model=\"same_address\" v-on:change=\"save()\" type=\"checkbox\"/>
        ";
        // line 211
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/checkout/address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  691 => 211,  685 => 208,  675 => 205,  663 => 202,  658 => 200,  654 => 199,  651 => 198,  641 => 194,  629 => 191,  624 => 189,  620 => 188,  617 => 187,  607 => 183,  595 => 180,  590 => 178,  586 => 177,  583 => 176,  573 => 172,  567 => 171,  561 => 170,  556 => 168,  552 => 167,  549 => 166,  539 => 162,  531 => 161,  527 => 160,  523 => 159,  520 => 158,  510 => 154,  502 => 153,  498 => 152,  494 => 151,  491 => 150,  481 => 146,  478 => 145,  469 => 143,  461 => 142,  457 => 140,  451 => 139,  446 => 137,  443 => 136,  433 => 132,  426 => 128,  420 => 125,  415 => 123,  412 => 122,  402 => 118,  396 => 115,  390 => 114,  386 => 113,  382 => 112,  379 => 111,  372 => 106,  368 => 105,  359 => 101,  354 => 99,  348 => 98,  342 => 97,  336 => 96,  330 => 95,  321 => 91,  315 => 88,  309 => 87,  303 => 86,  294 => 82,  286 => 81,  280 => 80,  271 => 76,  263 => 75,  257 => 74,  248 => 70,  240 => 69,  234 => 68,  225 => 64,  217 => 63,  211 => 62,  200 => 58,  194 => 57,  184 => 50,  180 => 49,  176 => 48,  173 => 47,  166 => 42,  162 => 41,  158 => 40,  155 => 39,  147 => 35,  139 => 34,  133 => 33,  128 => 31,  120 => 28,  112 => 27,  106 => 26,  101 => 24,  97 => 23,  91 => 20,  87 => 19,  77 => 14,  69 => 11,  63 => 10,  57 => 7,  53 => 6,  46 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/checkout/address.twig", "");
    }
}
