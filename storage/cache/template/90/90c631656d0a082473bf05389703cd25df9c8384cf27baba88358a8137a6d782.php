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
class __TwigTemplate_7e5e14dadc879aeb1581d288c5c888d9f4f01393d64bbe5d04b2f899ed2320c3 extends \Twig\Template
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
      <div class=\"form-group required address-firstname\" v-if=\"customer_id || (!customer_id && '";
        // line 24
        echo ($context["type"] ?? null);
        echo "' === 'shipping')\" style=\"width:48%;float:left; margin-right:11px;\">
        <label class=\"control-label\" for=\"input-";
        // line 25
        echo ($context["type"] ?? null);
        echo "-firstname\">";
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 26
        echo ($context["type"] ?? null);
        echo "_firstname\" type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-firstname\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 27
        echo ($context["type"] ?? null);
        echo "_firstname\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_firstname\"></span>
      </div>

      <div class=\"form-group required address-lastname\" v-if=\"customer_id || (!customer_id && '";
        // line 30
        echo ($context["type"] ?? null);
        echo "' === 'shipping')\">
        <label class=\"control-label\" for=\"input-";
        // line 31
        echo ($context["type"] ?? null);
        echo "-lastname\">";
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 32
        echo ($context["type"] ?? null);
        echo "_lastname\" type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-lastname\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 33
        echo ($context["type"] ?? null);
        echo "_lastname\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_lastname\"></span>
      </div>

      ";
        // line 37
        echo "
    <!-- <div class=\"form-group required account-firstname fname\"  v-if=\"customer_id || (!customer_id && '";
        // line 38
        echo ($context["type"] ?? null);
        echo "' !== 'shipping')\" style=\"width:48%;float:left; margin-right:11px;\">
        <label class=\"control-label\" for=\"input-firstname\">";
        // line 39
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
        <input v-model=\"order_data.payment_firstname\" type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 40
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\" v-bind:class = \"(error && error.payment_firstname)?'has-error':''\"/>
        <span class=\"text-danger\" v-if=\"error && error.payment_firstname\" v-html=\"error.payment_firstname\"></span>
      </div>
   -->
      ";
        // line 45
        echo "  
      <!-- <div class=\"form-group required account-lastname lname\"  v-if=\"customer_id || (!customer_id && '";
        // line 46
        echo ($context["type"] ?? null);
        echo "' !== 'shipping')\" >
        <label class=\"control-label\" for=\"input-lastname\">";
        // line 47
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
        <input v-model=\"order_data.payment_lastname\" type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 48
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.payment_lastname\" v-html=\"error.payment_lastname\"></span>
      </div> -->

     

      <div class=\"form-group address-company\">
        <label class=\"control-label\" for=\"input-";
        // line 55
        echo ($context["type"] ?? null);
        echo "-company\">";
        echo ($context["entry_company"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 56
        echo ($context["type"] ?? null);
        echo "_company\" type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-company\" class=\"form-control\"/>
      </div>

      <div class=\"form-group required address-address-1\">
        <label class=\"control-label\" for=\"input-";
        // line 60
        echo ($context["type"] ?? null);
        echo "-address-1\">";
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 61
        echo ($context["type"] ?? null);
        echo "_address_1\" type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-address-1\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 62
        echo ($context["type"] ?? null);
        echo "_address_1\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_address_1\"></span>
      </div>

      <div class=\"form-group required address-address-2\">
        <label class=\"control-label\" for=\"input-";
        // line 66
        echo ($context["type"] ?? null);
        echo "-address-2\">";
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 67
        echo ($context["type"] ?? null);
        echo "_address_2\" type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-address-2\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 68
        echo ($context["type"] ?? null);
        echo "_address_2\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_address_2\"></span>
      </div>

      <div class=\"form-group required address-city\" style=\"width:48%;float:left; margin-right:11px;\">
        <label class=\"control-label\" for=\"input-";
        // line 72
        echo ($context["type"] ?? null);
        echo "-city\">";
        echo ($context["entry_city"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 73
        echo ($context["type"] ?? null);
        echo "_city\" type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-city\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 74
        echo ($context["type"] ?? null);
        echo "_city\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_city\"></span>
      </div>

      <div class=\"form-group required address-postcode\" >
        <label class=\"control-label\" for=\"input-";
        // line 78
        echo ($context["type"] ?? null);
        echo "-postcode\">";
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 79
        echo ($context["type"] ?? null);
        echo "_postcode\" type=\"text\" name=\"postcode\" value=\"\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-postcode\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 80
        echo ($context["type"] ?? null);
        echo "_postcode\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_postcode\"></span>
      </div>

      <div class=\"form-group required address-country\" style=\"width:48%;float:left; margin-right:11px;\">
        <label class=\"control-label\" for=\"input-";
        // line 84
        echo ($context["type"] ?? null);
        echo "-country\">";
        echo ($context["entry_country"] ?? null);
        echo "</label>
        <select v-model=\"order_data.";
        // line 85
        echo ($context["type"] ?? null);
        echo "_country_id\" name=\"country_id\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-country\" class=\"form-control\">
          <option value=\"\">";
        // line 86
        echo ($context["text_select"] ?? null);
        echo "</option>
          <option v-for=\"country in countries\" v-bind:value=\"country.country_id\" v-html=\"country.name\"></option>
        </select>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 89
        echo ($context["type"] ?? null);
        echo "_country\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_country\"></span>
      </div>

      <div class=\"form-group required address-zone\">
        <label class=\"control-label\" for=\"input-";
        // line 93
        echo ($context["type"] ?? null);
        echo "-zone\">";
        echo ($context["entry_zone"] ?? null);
        echo "</label>
        <select v-model=\"order_data.";
        // line 94
        echo ($context["type"] ?? null);
        echo "_zone_id\" name=\"zone_id\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-zone\" class=\"form-control\">
          <option v-if=\"";
        // line 95
        echo ($context["type"] ?? null);
        echo "_zones.length > 0\" value=\"\">";
        echo ($context["text_select"] ?? null);
        echo "</option>
          <option v-if=\"";
        // line 96
        echo ($context["type"] ?? null);
        echo "_zones.length == 0\" value=\"\">";
        echo ($context["text_none"] ?? null);
        echo "</option>
          <option v-for=\"zone in ";
        // line 97
        echo ($context["type"] ?? null);
        echo "_zones\" v-bind:value=\"zone.zone_id\" v-html=\"zone.name\"></option>
        </select>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 99
        echo ($context["type"] ?? null);
        echo "_zone\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_zone\"></span>
      </div>

      <div class=\"form-group required account-telephone\">
        <label class=\"control-label\" for=\"input-telephone\">";
        // line 103
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
        <input v-model=\"order_data.telephone\" type=\"text\" name=\"telephone\" value=\"\" placeholder=\"";
        // line 104
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.telephone\" v-html=\"error.telephone\"></span>
      </div>

      ";
        // line 109
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'select'\" v-bind:id=\"'";
        // line 110
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 111
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <select v-model=\"order_data.";
        // line 112
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\">
          <option value=\"\">";
        // line 113
        echo ($context["text_select"] ?? null);
        echo "</option>
          <option v-for=\"custom_field_value in custom_field.custom_field_value\" v-bind:value=\"custom_field_value.custom_field_value_id\" v-html=\"custom_field_value.name\"></option>
        </select>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 116
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 120
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'radio'\" v-bind:id=\"'";
        // line 121
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-html=\"custom_field.name\"></label>
        <div v-bind:id=\"'input-";
        // line 123
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\">
          <div class=\"radio\" v-for=\"custom_field_value in custom_field.custom_field_value\">
            <label>
              <input type=\"radio\" v-model=\"order_data.";
        // line 126
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-bind:value=\"custom_field_value.custom_field_value_id\"/>
              <span v-html=\"custom_field_value.name\"></span></label>
          </div>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 130
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 134
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'checkbox'\" v-bind:id=\"'";
        // line 135
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-html=\"custom_field.name\"></label>
        <div v-bind:id=\"'input-";
        // line 137
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\"> ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_value", [], "any", false, false, false, 137));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
            // line 138
            echo "            <div class=\"checkbox\">
              <label>
                <input type=\"checkbox\" name=\"custom_field[";
            // line 140
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 140);
            echo "][";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 140);
            echo "][]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 140);
            echo "\"/>
                ";
            // line 141
            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 141);
            echo "</label>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo " </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 144
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 148
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'text'\" v-bind:id=\"'";
        // line 149
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 150
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <input type=\"text\" v-model=\"order_data.";
        // line 151
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 151);
        echo "\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 152
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 156
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'textarea'\" v-bind:id=\"'";
        // line 157
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 158
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <textarea v-model=\"order_data.";
        // line 159
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" rows=\"5\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\">";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 159);
        echo "</textarea>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 160
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 164
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'file'\" v-bind:id=\"'";
        // line 165
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 166
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <br/>
        <button type=\"button\" v-on:click=\"upload('";
        // line 168
        echo ($context["type"] ?? null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" v-bind:id=\"'button-account-custom-field' + custom_field.custom_field_id\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
        echo ($context["button_upload"] ?? null);
        echo "</button>
        <input type=\"hidden\" v-model=\"order_data.";
        // line 169
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" value=\"\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 170
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 174
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'date'\" v-bind:id=\"'";
        // line 175
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 176
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <div class=\"input-group date\">
          <input type=\"text\" v-model=\"order_data.";
        // line 178
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('";
        echo ($context["type"] ?? null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 178);
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"YYYY-MM-DD\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 181
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 185
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'time'\" v-bind:id=\"'";
        // line 186
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 187
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <div class=\"input-group time\">
          <input type=\"text\" v-model=\"order_data.";
        // line 189
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('";
        echo ($context["type"] ?? null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 189);
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"HH:mm\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 192
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 196
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'datetime'\" v-bind:id=\"'";
        // line 197
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 198
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <div class=\"input-group time\">
          <input type=\"text\" v-model=\"order_data.";
        // line 200
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('";
        echo ($context["type"] ?? null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 200);
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"YYYY-MM-DD HH:mm\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 203
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>
    </div>
    <div v-if=\"('";
        // line 206
        echo ($context["type"] ?? null);
        echo "' === 'payment') && shipping_required\" class=\"checkbox\">
      <label>
        <input v-model=\"same_address\" v-on:change=\"save()\" type=\"checkbox\"/>
        ";
        // line 209
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
        return array (  689 => 209,  683 => 206,  673 => 203,  661 => 200,  656 => 198,  652 => 197,  649 => 196,  639 => 192,  627 => 189,  622 => 187,  618 => 186,  615 => 185,  605 => 181,  593 => 178,  588 => 176,  584 => 175,  581 => 174,  571 => 170,  565 => 169,  559 => 168,  554 => 166,  550 => 165,  547 => 164,  537 => 160,  529 => 159,  525 => 158,  521 => 157,  518 => 156,  508 => 152,  500 => 151,  496 => 150,  492 => 149,  489 => 148,  479 => 144,  476 => 143,  467 => 141,  459 => 140,  455 => 138,  449 => 137,  444 => 135,  441 => 134,  431 => 130,  424 => 126,  418 => 123,  413 => 121,  410 => 120,  400 => 116,  394 => 113,  388 => 112,  384 => 111,  380 => 110,  377 => 109,  370 => 104,  366 => 103,  357 => 99,  352 => 97,  346 => 96,  340 => 95,  334 => 94,  328 => 93,  319 => 89,  313 => 86,  307 => 85,  301 => 84,  292 => 80,  284 => 79,  278 => 78,  269 => 74,  261 => 73,  255 => 72,  246 => 68,  238 => 67,  232 => 66,  223 => 62,  215 => 61,  209 => 60,  198 => 56,  192 => 55,  182 => 48,  178 => 47,  174 => 46,  171 => 45,  164 => 40,  160 => 39,  156 => 38,  153 => 37,  145 => 33,  137 => 32,  131 => 31,  127 => 30,  119 => 27,  111 => 26,  105 => 25,  101 => 24,  97 => 23,  91 => 20,  87 => 19,  77 => 14,  69 => 11,  63 => 10,  57 => 7,  53 => 6,  46 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/checkout/address.twig", "");
    }
}
