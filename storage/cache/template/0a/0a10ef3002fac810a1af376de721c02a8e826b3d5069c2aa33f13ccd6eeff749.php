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
class __TwigTemplate_5a7b4d068773c3af090c4f93c63eceed464f70d3cbb71f99a614f1c092062eba extends \Twig\Template
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

      <div class=\"form-group required account-telephone\">
        <label class=\"control-label\" for=\"input-telephone\">";
        // line 37
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
        <input v-model=\"order_data.telephone\" type=\"text\" name=\"telephone\" value=\"\" placeholder=\"";
        // line 38
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.telephone\" v-html=\"error.telephone\"></span>
      </div>
      
      <div class=\"form-group address-company\">
        <label class=\"control-label\" for=\"input-";
        // line 43
        echo ($context["type"] ?? null);
        echo "-company\">";
        echo ($context["entry_company"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 44
        echo ($context["type"] ?? null);
        echo "_company\" type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-company\" class=\"form-control\"/>
      </div>

      <div class=\"form-group required address-address-1\">
        <label class=\"control-label\" for=\"input-";
        // line 48
        echo ($context["type"] ?? null);
        echo "-address-1\">";
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 49
        echo ($context["type"] ?? null);
        echo "_address_1\" type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-address-1\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 50
        echo ($context["type"] ?? null);
        echo "_address_1\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_address_1\"></span>
      </div>

      <div class=\"form-group required address-address-2\">
        <label class=\"control-label\" for=\"input-";
        // line 54
        echo ($context["type"] ?? null);
        echo "-address-2\">";
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 55
        echo ($context["type"] ?? null);
        echo "_address_2\" type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-address-2\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 56
        echo ($context["type"] ?? null);
        echo "_address_2\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_address_2\"></span>
      </div>

      <div class=\"form-group required address-city\">
        <label class=\"control-label\" for=\"input-";
        // line 60
        echo ($context["type"] ?? null);
        echo "-city\">";
        echo ($context["entry_city"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 61
        echo ($context["type"] ?? null);
        echo "_city\" type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-city\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 62
        echo ($context["type"] ?? null);
        echo "_city\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_city\"></span>
      </div>

      <div class=\"form-group required address-postcode\">
        <label class=\"control-label\" for=\"input-";
        // line 66
        echo ($context["type"] ?? null);
        echo "-postcode\">";
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 67
        echo ($context["type"] ?? null);
        echo "_postcode\" type=\"text\" name=\"postcode\" value=\"\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-postcode\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 68
        echo ($context["type"] ?? null);
        echo "_postcode\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_postcode\"></span>
      </div>

      <div class=\"form-group required address-country\">
        <label class=\"control-label\" for=\"input-";
        // line 72
        echo ($context["type"] ?? null);
        echo "-country\">";
        echo ($context["entry_country"] ?? null);
        echo "</label>
        <select v-model=\"order_data.";
        // line 73
        echo ($context["type"] ?? null);
        echo "_country_id\" name=\"country_id\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-country\" class=\"form-control\">
          <option value=\"\">";
        // line 74
        echo ($context["text_select"] ?? null);
        echo "</option>
          <option v-for=\"country in countries\" v-bind:value=\"country.country_id\" v-html=\"country.name\"></option>
        </select>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 77
        echo ($context["type"] ?? null);
        echo "_country\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_country\"></span>
      </div>

      <div class=\"form-group required address-zone\">
        <label class=\"control-label\" for=\"input-";
        // line 81
        echo ($context["type"] ?? null);
        echo "-zone\">";
        echo ($context["entry_zone"] ?? null);
        echo "</label>
        <select v-model=\"order_data.";
        // line 82
        echo ($context["type"] ?? null);
        echo "_zone_id\" name=\"zone_id\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-zone\" class=\"form-control\">
          <option v-if=\"";
        // line 83
        echo ($context["type"] ?? null);
        echo "_zones.length > 0\" value=\"\">";
        echo ($context["text_select"] ?? null);
        echo "</option>
          <option v-if=\"";
        // line 84
        echo ($context["type"] ?? null);
        echo "_zones.length == 0\" value=\"\">";
        echo ($context["text_none"] ?? null);
        echo "</option>
          <option v-for=\"zone in ";
        // line 85
        echo ($context["type"] ?? null);
        echo "_zones\" v-bind:value=\"zone.zone_id\" v-html=\"zone.name\"></option>
        </select>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 87
        echo ($context["type"] ?? null);
        echo "_zone\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_zone\"></span>
      </div>

      ";
        // line 91
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'select'\" v-bind:id=\"'";
        // line 92
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 93
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <select v-model=\"order_data.";
        // line 94
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\">
          <option value=\"\">";
        // line 95
        echo ($context["text_select"] ?? null);
        echo "</option>
          <option v-for=\"custom_field_value in custom_field.custom_field_value\" v-bind:value=\"custom_field_value.custom_field_value_id\" v-html=\"custom_field_value.name\"></option>
        </select>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 98
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 102
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'radio'\" v-bind:id=\"'";
        // line 103
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-html=\"custom_field.name\"></label>
        <div v-bind:id=\"'input-";
        // line 105
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\">
          <div class=\"radio\" v-for=\"custom_field_value in custom_field.custom_field_value\">
            <label>
              <input type=\"radio\" v-model=\"order_data.";
        // line 108
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-bind:value=\"custom_field_value.custom_field_value_id\"/>
              <span v-html=\"custom_field_value.name\"></span></label>
          </div>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 112
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 116
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'checkbox'\" v-bind:id=\"'";
        // line 117
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-html=\"custom_field.name\"></label>
        <div v-bind:id=\"'input-";
        // line 119
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\"> ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_value", [], "any", false, false, false, 119));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
            // line 120
            echo "            <div class=\"checkbox\">
              <label>
                <input type=\"checkbox\" name=\"custom_field[";
            // line 122
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 122);
            echo "][";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 122);
            echo "][]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 122);
            echo "\"/>
                ";
            // line 123
            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 123);
            echo "</label>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo " </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 126
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 130
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'text'\" v-bind:id=\"'";
        // line 131
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 132
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <input type=\"text\" v-model=\"order_data.";
        // line 133
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 133);
        echo "\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 134
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 138
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'textarea'\" v-bind:id=\"'";
        // line 139
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 140
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <textarea v-model=\"order_data.";
        // line 141
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" rows=\"5\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\">";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 141);
        echo "</textarea>
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
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'file'\" v-bind:id=\"'";
        // line 147
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 148
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <br/>
        <button type=\"button\" v-on:click=\"upload('";
        // line 150
        echo ($context["type"] ?? null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" v-bind:id=\"'button-account-custom-field' + custom_field.custom_field_id\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
        echo ($context["button_upload"] ?? null);
        echo "</button>
        <input type=\"hidden\" v-model=\"order_data.";
        // line 151
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" value=\"\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-";
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
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'date'\" v-bind:id=\"'";
        // line 157
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 158
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <div class=\"input-group date\">
          <input type=\"text\" v-model=\"order_data.";
        // line 160
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('";
        echo ($context["type"] ?? null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 160);
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"YYYY-MM-DD\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 163
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 167
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'time'\" v-bind:id=\"'";
        // line 168
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 169
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <div class=\"input-group time\">
          <input type=\"text\" v-model=\"order_data.";
        // line 171
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('";
        echo ($context["type"] ?? null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 171);
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"HH:mm\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 174
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 178
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'datetime'\" v-bind:id=\"'";
        // line 179
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 180
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <div class=\"input-group time\">
          <input type=\"text\" v-model=\"order_data.";
        // line 182
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('";
        echo ($context["type"] ?? null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 182);
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"YYYY-MM-DD HH:mm\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 185
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>
    </div>
    <div v-if=\"('";
        // line 188
        echo ($context["type"] ?? null);
        echo "' === 'payment') && shipping_required\" class=\"checkbox\">
      <label>
        <input v-model=\"same_address\" v-on:change=\"save()\" type=\"checkbox\"/>
        ";
        // line 191
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
        return array (  651 => 191,  645 => 188,  635 => 185,  623 => 182,  618 => 180,  614 => 179,  611 => 178,  601 => 174,  589 => 171,  584 => 169,  580 => 168,  577 => 167,  567 => 163,  555 => 160,  550 => 158,  546 => 157,  543 => 156,  533 => 152,  527 => 151,  521 => 150,  516 => 148,  512 => 147,  509 => 146,  499 => 142,  491 => 141,  487 => 140,  483 => 139,  480 => 138,  470 => 134,  462 => 133,  458 => 132,  454 => 131,  451 => 130,  441 => 126,  438 => 125,  429 => 123,  421 => 122,  417 => 120,  411 => 119,  406 => 117,  403 => 116,  393 => 112,  386 => 108,  380 => 105,  375 => 103,  372 => 102,  362 => 98,  356 => 95,  350 => 94,  346 => 93,  342 => 92,  339 => 91,  331 => 87,  326 => 85,  320 => 84,  314 => 83,  308 => 82,  302 => 81,  293 => 77,  287 => 74,  281 => 73,  275 => 72,  266 => 68,  258 => 67,  252 => 66,  243 => 62,  235 => 61,  229 => 60,  220 => 56,  212 => 55,  206 => 54,  197 => 50,  189 => 49,  183 => 48,  172 => 44,  166 => 43,  158 => 38,  154 => 37,  145 => 33,  137 => 32,  131 => 31,  127 => 30,  119 => 27,  111 => 26,  105 => 25,  101 => 24,  97 => 23,  91 => 20,  87 => 19,  77 => 14,  69 => 11,  63 => 10,  57 => 7,  53 => 6,  46 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/checkout/address.twig", "");
    }
}
