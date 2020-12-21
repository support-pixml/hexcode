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
class __TwigTemplate_aac926667ce30f83e5b5cf5ab0be783cf3e3bdb7ed00ba44d19c2151d1144b17 extends \Twig\Template
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
        echo "_address_type === 'new'))\">
      <div class=\"form-group required address-firstname\" v-if=\"customer_id || (!customer_id && '";
        // line 24
        echo ($context["type"] ?? null);
        echo "' === 'shipping')\">
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
      <div class=\"form-group required account-firstname\">
        <label class=\"control-label\" for=\"input-firstname\">";
        // line 39
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
        <input v-model=\"order_data.payment_firstname\" type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 40
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.payment_firstname\" v-html=\"error.payment_firstname\"></span>
      </div>
  
      ";
        // line 45
        echo "  
      <div class=\"form-group required account-lastname\">
        <label class=\"control-label\" for=\"input-lastname\">";
        // line 47
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
        <input v-model=\"order_data.payment_lastname\" type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 48
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.payment_lastname\" v-html=\"error.payment_lastname\"></span>
      </div>

      <div class=\"form-group required account-telephone\">
        <label class=\"control-label\" for=\"input-telephone\">";
        // line 53
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
        <input v-model=\"order_data.telephone\" type=\"text\" name=\"telephone\" value=\"\" placeholder=\"";
        // line 54
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.telephone\" v-html=\"error.telephone\"></span>
      </div>

      <div class=\"form-group address-company\">
        <label class=\"control-label\" for=\"input-";
        // line 59
        echo ($context["type"] ?? null);
        echo "-company\">";
        echo ($context["entry_company"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 60
        echo ($context["type"] ?? null);
        echo "_company\" type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-company\" class=\"form-control\"/>
      </div>

      <div class=\"form-group required address-address-1\">
        <label class=\"control-label\" for=\"input-";
        // line 64
        echo ($context["type"] ?? null);
        echo "-address-1\">";
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 65
        echo ($context["type"] ?? null);
        echo "_address_1\" type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-address-1\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 66
        echo ($context["type"] ?? null);
        echo "_address_1\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_address_1\"></span>
      </div>

      <div class=\"form-group required address-address-2\">
        <label class=\"control-label\" for=\"input-";
        // line 70
        echo ($context["type"] ?? null);
        echo "-address-2\">";
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 71
        echo ($context["type"] ?? null);
        echo "_address_2\" type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-address-2\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 72
        echo ($context["type"] ?? null);
        echo "_address_2\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_address_2\"></span>
      </div>

      <div class=\"form-group required address-city\">
        <label class=\"control-label\" for=\"input-";
        // line 76
        echo ($context["type"] ?? null);
        echo "-city\">";
        echo ($context["entry_city"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 77
        echo ($context["type"] ?? null);
        echo "_city\" type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-city\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 78
        echo ($context["type"] ?? null);
        echo "_city\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_city\"></span>
      </div>

      <div class=\"form-group required address-postcode\">
        <label class=\"control-label\" for=\"input-";
        // line 82
        echo ($context["type"] ?? null);
        echo "-postcode\">";
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 83
        echo ($context["type"] ?? null);
        echo "_postcode\" type=\"text\" name=\"postcode\" value=\"\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-postcode\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 84
        echo ($context["type"] ?? null);
        echo "_postcode\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_postcode\"></span>
      </div>

      <div class=\"form-group required address-country\">
        <label class=\"control-label\" for=\"input-";
        // line 88
        echo ($context["type"] ?? null);
        echo "-country\">";
        echo ($context["entry_country"] ?? null);
        echo "</label>
        <select v-model=\"order_data.";
        // line 89
        echo ($context["type"] ?? null);
        echo "_country_id\" name=\"country_id\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-country\" class=\"form-control\">
          <option value=\"\">";
        // line 90
        echo ($context["text_select"] ?? null);
        echo "</option>
          <option v-for=\"country in countries\" v-bind:value=\"country.country_id\" v-html=\"country.name\"></option>
        </select>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 93
        echo ($context["type"] ?? null);
        echo "_country\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_country\"></span>
      </div>

      <div class=\"form-group required address-zone\">
        <label class=\"control-label\" for=\"input-";
        // line 97
        echo ($context["type"] ?? null);
        echo "-zone\">";
        echo ($context["entry_zone"] ?? null);
        echo "</label>
        <select v-model=\"order_data.";
        // line 98
        echo ($context["type"] ?? null);
        echo "_zone_id\" name=\"zone_id\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-zone\" class=\"form-control\">
          <option v-if=\"";
        // line 99
        echo ($context["type"] ?? null);
        echo "_zones.length > 0\" value=\"\">";
        echo ($context["text_select"] ?? null);
        echo "</option>
          <option v-if=\"";
        // line 100
        echo ($context["type"] ?? null);
        echo "_zones.length == 0\" value=\"\">";
        echo ($context["text_none"] ?? null);
        echo "</option>
          <option v-for=\"zone in ";
        // line 101
        echo ($context["type"] ?? null);
        echo "_zones\" v-bind:value=\"zone.zone_id\" v-html=\"zone.name\"></option>
        </select>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 103
        echo ($context["type"] ?? null);
        echo "_zone\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_zone\"></span>
      </div>

      ";
        // line 107
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'select'\" v-bind:id=\"'";
        // line 108
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 109
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <select v-model=\"order_data.";
        // line 110
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\">
          <option value=\"\">";
        // line 111
        echo ($context["text_select"] ?? null);
        echo "</option>
          <option v-for=\"custom_field_value in custom_field.custom_field_value\" v-bind:value=\"custom_field_value.custom_field_value_id\" v-html=\"custom_field_value.name\"></option>
        </select>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 114
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 118
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'radio'\" v-bind:id=\"'";
        // line 119
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-html=\"custom_field.name\"></label>
        <div v-bind:id=\"'input-";
        // line 121
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\">
          <div class=\"radio\" v-for=\"custom_field_value in custom_field.custom_field_value\">
            <label>
              <input type=\"radio\" v-model=\"order_data.";
        // line 124
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-bind:value=\"custom_field_value.custom_field_value_id\"/>
              <span v-html=\"custom_field_value.name\"></span></label>
          </div>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 128
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 132
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'checkbox'\" v-bind:id=\"'";
        // line 133
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-html=\"custom_field.name\"></label>
        <div v-bind:id=\"'input-";
        // line 135
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\"> ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_value", [], "any", false, false, false, 135));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
            // line 136
            echo "            <div class=\"checkbox\">
              <label>
                <input type=\"checkbox\" name=\"custom_field[";
            // line 138
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 138);
            echo "][";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 138);
            echo "][]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 138);
            echo "\"/>
                ";
            // line 139
            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 139);
            echo "</label>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo " </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 142
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 146
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'text'\" v-bind:id=\"'";
        // line 147
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 148
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <input type=\"text\" v-model=\"order_data.";
        // line 149
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 149);
        echo "\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 150
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 154
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'textarea'\" v-bind:id=\"'";
        // line 155
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 156
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <textarea v-model=\"order_data.";
        // line 157
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" rows=\"5\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\">";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 157);
        echo "</textarea>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 158
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 162
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'file'\" v-bind:id=\"'";
        // line 163
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 164
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <br/>
        <button type=\"button\" v-on:click=\"upload('";
        // line 166
        echo ($context["type"] ?? null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" v-bind:id=\"'button-account-custom-field' + custom_field.custom_field_id\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
        echo ($context["button_upload"] ?? null);
        echo "</button>
        <input type=\"hidden\" v-model=\"order_data.";
        // line 167
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" value=\"\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 168
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 172
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'date'\" v-bind:id=\"'";
        // line 173
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 174
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <div class=\"input-group date\">
          <input type=\"text\" v-model=\"order_data.";
        // line 176
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('";
        echo ($context["type"] ?? null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 176);
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"YYYY-MM-DD\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 179
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 183
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'time'\" v-bind:id=\"'";
        // line 184
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 185
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <div class=\"input-group time\">
          <input type=\"text\" v-model=\"order_data.";
        // line 187
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('";
        echo ($context["type"] ?? null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 187);
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"HH:mm\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 190
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 194
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'datetime'\" v-bind:id=\"'";
        // line 195
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 196
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <div class=\"input-group time\">
          <input type=\"text\" v-model=\"order_data.";
        // line 198
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('";
        echo ($context["type"] ?? null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 198);
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"YYYY-MM-DD HH:mm\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 201
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>
    </div>
    <div v-if=\"('";
        // line 204
        echo ($context["type"] ?? null);
        echo "' === 'payment') && shipping_required\" class=\"checkbox\">
      <label>
        <input v-model=\"same_address\" v-on:change=\"save()\" type=\"checkbox\"/>
        ";
        // line 207
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
        return array (  681 => 207,  675 => 204,  665 => 201,  653 => 198,  648 => 196,  644 => 195,  641 => 194,  631 => 190,  619 => 187,  614 => 185,  610 => 184,  607 => 183,  597 => 179,  585 => 176,  580 => 174,  576 => 173,  573 => 172,  563 => 168,  557 => 167,  551 => 166,  546 => 164,  542 => 163,  539 => 162,  529 => 158,  521 => 157,  517 => 156,  513 => 155,  510 => 154,  500 => 150,  492 => 149,  488 => 148,  484 => 147,  481 => 146,  471 => 142,  468 => 141,  459 => 139,  451 => 138,  447 => 136,  441 => 135,  436 => 133,  433 => 132,  423 => 128,  416 => 124,  410 => 121,  405 => 119,  402 => 118,  392 => 114,  386 => 111,  380 => 110,  376 => 109,  372 => 108,  369 => 107,  361 => 103,  356 => 101,  350 => 100,  344 => 99,  338 => 98,  332 => 97,  323 => 93,  317 => 90,  311 => 89,  305 => 88,  296 => 84,  288 => 83,  282 => 82,  273 => 78,  265 => 77,  259 => 76,  250 => 72,  242 => 71,  236 => 70,  227 => 66,  219 => 65,  213 => 64,  202 => 60,  196 => 59,  188 => 54,  184 => 53,  176 => 48,  172 => 47,  168 => 45,  161 => 40,  157 => 39,  153 => 37,  145 => 33,  137 => 32,  131 => 31,  127 => 30,  119 => 27,  111 => 26,  105 => 25,  101 => 24,  97 => 23,  91 => 20,  87 => 19,  77 => 14,  69 => 11,  63 => 10,  57 => 7,  53 => 6,  46 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/checkout/address.twig", "");
    }
}
