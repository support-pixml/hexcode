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

/* extension/module/product_option_image_pro/product_option_image_pro.twig */
class __TwigTemplate_041415d92e1bb03021981c3ef002b4e440138c1b0f754eaff31d8c2d8746147c extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
\t
\t<div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-poip\" data-toggle=\"tooltip\" title=\"";
        // line 11
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 12
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 13
        echo ($context["module_name"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "\t\t\t\t\t<li><a href=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "      </ul>
    </div>
  </div>
\t
\t<div class=\"container-fluid\">
    ";
        // line 23
        if ((($context["error_warning"]) ?? (false))) {
            // line 24
            echo "\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
    ";
        }
        // line 28
        echo "    ";
        if ((($context["updated"]) ?? (false))) {
            // line 29
            echo "\t\t\t<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["updated"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
    ";
        }
        // line 33
        echo "\t\t";
        if ((($context["success"]) ?? (false))) {
            // line 34
            echo "\t\t\t<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
    ";
        }
        // line 38
        echo "\t\t
\t\t<script>
\t\t\t\$(document).on('change', ':checkbox[name^=\"poip_module[\"]', function(){
\t\t\t\t\$('#'+\$(this).attr('id')+'-details').toggle( \$(this).is(':checked') );
\t\t\t});
\t\t\t\$(document).on('change', 'input[id], select[id]', function(){
\t\t\t\tlet toggle_children = \$(this).val() && \$(this).val() != '0' && \$(this).is('select, :checked');
\t\t\t\t\$('[data-parent=\"'+\$(this).attr('id')+'\"]').toggle(toggle_children);
\t\t\t});
\t\t\t\$().ready(function(){
\t\t\t\t \$('input[id], select[id]').change();
\t\t\t});
\t\t</script>

\t\t";
        // line 112
        echo "\t\t
\t\t";
        // line 123
        echo "\t\t
\t\t";
        // line 124
        $macros["self_macro"] = $this->macros["self_macro"] = $this;
        // line 125
        echo "\t\t
\t\t<div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 128
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
\t\t\t\t
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li class=\"active\"><a href=\"#tab-settings\" data-toggle=\"tab\">";
        // line 133
        echo ($context["entry_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-import\" data-toggle=\"tab\">";
        // line 134
        echo ($context["entry_import"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-export\" data-toggle=\"tab\">";
        // line 135
        echo ($context["entry_export"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-about\" data-toggle=\"tab\" id=\"tab-about-button\">";
        // line 136
        echo ($context["entry_about"] ?? null);
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-settings\">
\t\t\t\t\t\t
\t\t\t\t\t\t<form action=\"";
        // line 142
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-ro\" class=\"form-horizontal\">
\t\t\t\t
\t\t\t\t\t\t\t";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 145
            echo "\t\t\t\t\t\t\t\t";
            echo twig_call_macro($macros["self_macro"], "macro_display_setting_row", [($context["modules"] ?? null), $context["field"]], 145, $context, $this->getSourceContext());
            echo "
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
        // line 149
        echo ($context["entry_custom_thumb_size_help"] ?? null);
        echo "\">";
        echo ($context["entry_custom_thumb_size"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\" >
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"poip_module[custom_thumb_width]\" value=\"";
        // line 151
        echo (((twig_get_attribute($this->env, $this->source, ($context["modules"] ?? null), "custom_thumb_width", [], "any", true, true, false, 151) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["modules"] ?? null), "custom_thumb_width", [], "any", false, false, false, 151)))) ? (twig_get_attribute($this->env, $this->source, ($context["modules"] ?? null), "custom_thumb_width", [], "any", false, false, false, 151)) : (""));
        echo "\" title=\"";
        echo ($context["entry_custom_thumb_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_custom_thumb_width"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\" >
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"poip_module[custom_thumb_height]\" value=\"";
        // line 154
        echo (((twig_get_attribute($this->env, $this->source, ($context["modules"] ?? null), "custom_thumb_height", [], "any", true, true, false, 154) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["modules"] ?? null), "custom_thumb_height", [], "any", false, false, false, 154)))) ? (twig_get_attribute($this->env, $this->source, ($context["modules"] ?? null), "custom_thumb_height", [], "any", false, false, false, 154)) : (""));
        echo "\" title=\"";
        echo ($context["entry_custom_thumb_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_custom_thumb_height"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
        // line 159
        echo ($context["entry_custom_theme_id_help"] ?? null);
        echo "\">";
        echo ($context["entry_custom_theme_id"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\" >
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"poip_module[custom_theme_id]\" value=\"";
        // line 161
        echo (((twig_get_attribute($this->env, $this->source, ($context["modules"] ?? null), "custom_theme_id", [], "any", true, true, false, 161) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["modules"] ?? null), "custom_theme_id", [], "any", false, false, false, 161)))) ? (twig_get_attribute($this->env, $this->source, ($context["modules"] ?? null), "custom_theme_id", [], "any", false, false, false, 161)) : (""));
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"tab-pane form-horizontal\" id=\"tab-import\">
\t\t\t\t\t\t<div class=\"form-group\" ><div class=\"col-sm-12\" >";
        // line 169
        echo ($context["entry_import_description"] ?? null);
        echo "</div></div>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 171
        if ((($context["import_export_is_possible"]) ?? (false))) {
            // line 172
            echo "\t\t\t\t\t\t
              <div class=\"form-group\" >
\t\t\t\t\t\t\t\t\t
                <label class=\"col-sm-2 control-label\"></label>
                
                <div class=\"col-sm-10\" >
                
                  <label class=\"radio\">
                    <input type=\"radio\" name=\"import_delete_before\" value=\"0\" checked>";
            // line 180
            echo ($context["entry_import_nothing_before"] ?? null);
            echo "
                  </label>
                  <label class=\"radio\">
                    <input type=\"radio\" name=\"import_delete_before\" value=\"1\">";
            // line 183
            echo ($context["entry_import_delete_before"] ?? null);
            echo "
                  </label>
                  
                </div>\t
               
              </div>
            
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"min-height: 50px;\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\"></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\" >
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload\" data-toggle=\"tooltip\" title=\"\" class='btn btn-primary' data-original-title=\"";
            // line 193
            echo ($context["button_upload"] ?? null);
            echo "\">";
            echo ($context["button_upload"] ?? null);
            echo "</button>
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
            // line 194
            echo ($context["button_upload_help"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        // line 199
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 200
        if ((($context["xlsx_lib_error"]) ?? (false))) {
            // line 201
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i> ";
            // line 202
            echo sprintf(($context["error_xlsx_lib_is_not_found"] ?? null), ($context["xlsx_lib_name"] ?? null));
            echo "</b>
\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn\" data-poip=\"button-install-xlsx-lib\">";
            // line 204
            echo sprintf(($context["button_install_xlsx_lib"] ?? null), ($context["xlsx_lib_name"] ?? null));
            echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 207
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t\t\t<div class=\"col-sm-12\" id=\"import_result_text\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-export\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div style=\"margin-bottom: 30px;\">";
        // line 215
        echo ($context["entry_export_description"] ?? null);
        echo "</div>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 217
        if ((($context["import_export_is_possible"]) ?? (false))) {
            // line 218
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<form id=\"form_export\" class=\"form-horizontal\" action=\"";
            // line 219
            echo ($context["action_export"] ?? null);
            echo "\" method=\"post\" target=\"export_frame\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"include_options_without_images\">
\t\t\t\t\t\t\t\t\t\t";
            // line 223
            echo ($context["entry_export_options_without_images"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\" >
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"include_options_without_images\" name=\"include_options_without_images\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"include_names\">
\t\t\t\t\t\t\t\t\t\t";
            // line 236
            echo ($context["entry_export_names"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\" >
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"include_names\" name=\"include_names\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">
\t\t\t\t\t\t\t\t\t\t";
            // line 249
            echo ($context["entry_export_first_product_id"] ?? null);
            echo " ( ";
            echo ($context["entry_export_min_product_id"] ?? null);
            echo " ";
            echo ($context["min_product_id"] ?? null);
            echo " )
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\" >
\t\t\t\t\t\t\t\t\t\t<input name=\"export_first_product_id\" class=\"form-control\" value=\"\">
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">
\t\t\t\t\t\t\t\t\t\t";
            // line 255
            echo ($context["entry_export_last_product_id"] ?? null);
            echo " ( ";
            echo ($context["entry_export_max_product_id"] ?? null);
            echo " ";
            echo ($context["max_product_id"] ?? null);
            echo " )
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\" >
\t\t\t\t\t\t\t\t\t\t<input name=\"export_last_product_id\" class=\"form-control\" value=\"\">
\t\t\t\t\t\t\t\t\t</div>\t
                </div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\"></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\" >
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-export\" onclick=\"\$('#form_export').submit();\" data-toggle=\"tooltip\" title=\"\" class='btn btn-primary' data-original-title=\"";
            // line 265
            echo ($context["button_export"] ?? null);
            echo "\">";
            echo ($context["button_export"] ?? null);
            echo "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        // line 272
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 273
        if ((($context["xlsx_lib_error"]) ?? (false))) {
            // line 274
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i> ";
            // line 275
            echo sprintf(($context["error_xlsx_lib_is_not_found"] ?? null), ($context["xlsx_lib_name"] ?? null));
            echo "</b>
\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn\" data-poip=\"button-install-xlsx-lib\">";
            // line 277
            echo sprintf(($context["button_install_xlsx_lib"] ?? null), ($context["xlsx_lib_name"] ?? null));
            echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 280
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<iframe name=\"export_frame\" src=\"\" id=\"export_frame\" style=\"display: none\"></iframe>
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-about\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"module_description\">
\t\t\t\t\t\t\t";
        // line 289
        echo ($context["module_description"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t";
        // line 293
        echo ($context["text_conversation"] ?? null);
        echo "
\t\t\t\t\t\t<hr>\t
\t\t\t\t\t\t
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<h4>";
        // line 297
        echo ($context["entry_we_recommend"] ?? null);
        echo "</h4><br>
\t\t\t\t\t\t<div id=\"we_recommend\">
\t\t\t\t\t\t\t";
        // line 299
        echo ($context["text_we_recommend"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<hr >
\t\t\t\t<span class=\"help-block\">";
        // line 307
        echo ($context["text_module_version"] ?? null);
        echo ": ";
        echo ($context["module_version"] ?? null);
        echo " | ";
        echo ($context["text_module_support"] ?? null);
        echo " | <span id=\"module_page\">";
        echo ($context["module_page"] ?? null);
        echo "</span></span><span class=\"help-block\" style=\"font-size: 80%; line-height: 130%;\">";
        echo ($context["module_copyright"] ?? null);
        echo "</span>
\t\t\t\t\t
      </div>
    </div>
  </div>
</div>
\t

<script type=\"text/javascript\"><!--
\$('#button-upload').on('click', function() {
\t
\t\$('#form-upload').remove();
\t
\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');
\t
\ttimer = setInterval(function() {
    
    if ( !\$('#form-upload input[name=\"file\"]').length ) {
      clearInterval(timer);
      return;
    }
    
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);
      
      var form_data = new FormData(\$('#form-upload')[0]);
      
      form_data.append(\"import_delete_before\", \$('input:radio[name=\"import_delete_before\"]:checked').val() );
\t\t\t
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/module/product_option_image_pro/import&user_token=";
        // line 339
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\ttype: 'post',\t\t
\t\t\t\tdataType: 'json',
\t\t\t\tdata: form_data,
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,\t\t
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-upload').button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-upload').button('reset');
\t\t\t\t},\t
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t
          \$('#import_result_text').html(\"";
        // line 354
        echo ($context["entry_server_response"] ?? null);
        echo ": \"+json);
          \t\t\t
\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);
\t\t\t\t\t}
        
          if (json['error']) {
            \$('#import_result_text').html('Error: '+json['error']);
\t\t\t\t\t\talert(json['error']);
          } else {
\t\t\t\t\t\tlet html = '';
\t\t\t\t\t\thtml+= '<table class=\"table table-hover\">';
\t\t\t\t\t\thtml+= '<thead>';
\t\t\t\t\t\thtml+= '<tr><th class=\"col-sm-2\">";
        // line 367
        echo ($context["entry_import_result_rows"] ?? null);
        echo "</th><th class=\"col-sm-1 text-right\">'+json['rows']+'</th><th>";
        echo ($context["entry_import_result_details"] ?? null);
        echo "</th>';
\t\t\t\t\t\thtml+= '</thead>';
\t\t\t\t\t\thtml+= '<tbody>';
\t\t\t\t\t\tlet json_result_keys = ['added', 'already_exist', 'not_found', 'no_image', 'skipped'];
\t\t\t\t\t\tlet json_result_names = ['";
        // line 371
        echo ($context["entry_import_result_added"] ?? null);
        echo "', '";
        echo ($context["entry_import_result_already_exist"] ?? null);
        echo "', '";
        echo ($context["entry_import_result_not_found"] ?? null);
        echo "', '";
        echo ($context["entry_import_result_no_image"] ?? null);
        echo "', '";
        echo ($context["entry_import_result_skipped"] ?? null);
        echo "'];
\t\t\t\t\t\tfor ( let i=0;i<json_result_keys.length;i++ ) {
\t\t\t\t\t\t\tlet result_key = json_result_keys[i];
\t\t\t\t\t\t\tlet result_name = json_result_names[i];
\t\t\t\t\t\t\tif ( json[result_key] ) {
\t\t\t\t\t\t\t\thtml+= '<tr><td>'+result_name+'</td><td class=\"text-right\">';
\t\t\t\t\t\t\t\thtml+= json[result_key].length;
\t\t\t\t\t\t\t\thtml+= '</td><td>';
\t\t\t\t\t\t\t\tif ( json[result_key].length ) {
\t\t\t\t\t\t\t\t\thtml+= '<button class=\"btn\" onclick=\"\$(this).next().toggle();\">";
        // line 380
        echo ($context["entry_import_result_toggle_details"] ?? null);
        echo "</button>';
\t\t\t\t\t\t\t\t\thtml+= '<div style=\"display:none\">';
\t\t\t\t\t\t\t\t\thtml+= json[result_key].join(', ');
\t\t\t\t\t\t\t\t\thtml+= '</div>';
\t\t\t\t\t\t\t\t}\t
\t\t\t\t\t\t\t\thtml+= '</td></tr>';
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\thtml+= '</tbody>';
\t\t\t\t\t\thtml+= '</table>';
\t\t\t\t\t\t\$('#import_result_text').html(html);
\t\t\t\t\t\talert('";
        // line 391
        echo ($context["entry_import_result_done"] ?? null);
        echo "');
          }
          
\t\t\t\t},\t\t\t
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
      
      \$('#form-upload').remove();
      
\t\t}
\t}, 500);
});
//--></script>


<script type=\"text/javascript\"><!--


\t\$('button[data-poip=\"button-install-xlsx-lib\"]').click(function(){
\t\t
\t\tlet \$button = \$(this);
\t\tlet install_texts = ";
        // line 414
        echo json_encode(["success_install_xlsx_lib" => sprintf(        // line 415
($context["success_install_xlsx_lib"] ?? null), ($context["xlsx_lib_name"] ?? null))]);
        // line 416
        echo ";
\t\t
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/product_option_image_pro/installXLSXLib&user_token=";
        // line 419
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\ttype: 'get',\t\t
\t\t\tdataType: 'json',
\t\t\t//data: form_data,
\t\t\tcache: false,
\t\t\t//contentType: false,
\t\t\t//processData: false,\t\t
\t\t\tbeforeSend: function() {
\t\t\t\t\$button.button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$button.button('reset');
\t\t\t},\t
\t\t\tsuccess: function(json) {
\t\t\t\t
\t\t\t\tif ( json.error ) {
\t\t\t\t\tconsole.debug(json);
\t\t\t\t\talert(json.error);
\t\t\t\t} else {
\t\t\t\t\talert(install_texts.success_install_xlsx_lib);
\t\t\t\t\t\$button.replaceWith(install_texts.success_install_xlsx_lib);
\t\t\t\t}
\t\t\t\t
\t\t\t},\t\t\t
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\tconsole.debug(xhr);
\t\t\t\tconsole.debug(thrownError);
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\tfunction checkUpdates() {
\t\t
\t\t\$.ajax({
\t\t\turl: '//update.liveopencart.com/upd.php',
\t\t\ttype: 'post',
\t\t\tdata: {module:'";
        // line 456
        echo ($context["extension_code"] ?? null);
        echo "', version:'";
        echo ($context["module_version"] ?? null);
        echo "', lang: '";
        echo ($context["config_admin_language"] ?? null);
        echo "'},
\t\t\tdataType: 'json',
\t
\t\t\tsuccess: function(data) {
\t\t\t\t
\t\t\t\tif (data) {
\t\t\t\t\t
\t\t\t\t\tif (data['recommend']) {
\t\t\t\t\t\t\$('#we_recommend').html(data['recommend']);
\t\t\t\t\t}
\t\t\t\t\tif (data['update']) {
\t\t\t\t\t\t\$('#tab-about-button').append('&nbsp;&nbsp;<font style=\"color:red;font-weight:normal;\">";
        // line 467
        echo twig_escape_filter($this->env, ($context["text_update_alert"] ?? null));
        echo "</font>');
\t\t\t\t\t\t\$('#module_description').after('<hr><div class=\"alert alert-info\" role=\"alert\">'+data['update']+'</div>');
\t\t\t\t\t}
\t\t\t\t\tif (data['product_pages']) {
\t\t\t\t\t\t\$('#module_page').html(data['product_pages']);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t});
\t\t
\t}

\tcheckUpdates();

//--></script>

";
        // line 483
        echo ($context["footer"] ?? null);
    }

    // line 52
    public function macro_display_setting_item($__modules__ = null, $__field__ = null, $__parent_name__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "modules" => $__modules__,
            "field" => $__field__,
            "parent_name" => $__parent_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 53
            echo "\t\t\t
\t\t\t<label class=\"col-sm-2 control-label\" for=\"";
            // line 54
            echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 54);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "parent", [], "any", false, false, false, 54)) {
                echo "\tstyle=\"display:none;\" data-parent=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "parent", [], "any", false, false, false, 54);
                echo "\" ";
            }
            echo ">
\t\t\t\t";
            // line 55
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 55)) {
                // line 56
                echo "\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 56);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "title", [], "any", false, false, false, 56);
                echo "</span>
\t\t\t\t";
            } else {
                // line 58
                echo "\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "title", [], "any", false, false, false, 58);
                echo "
\t\t\t\t";
            }
            // line 60
            echo "\t\t\t</label>
\t\t\t
\t\t\t";
            // line 62
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "values", [], "any", false, false, false, 62)) {
                // line 63
                echo "\t\t\t\t
\t\t\t\t";
                // line 65
                echo "\t\t\t\t<div class=\"col-sm-";
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "children", [], "any", true, true, false, 65) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "children", [], "any", false, false, false, 65)))) ? (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "children", [], "any", false, false, false, 65)) : (false)) || ($context["parent_name"] ?? null))) ? (4) : (10));
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "parent", [], "any", false, false, false, 65)) {
                    echo "\tstyle=\"display:none;\" data-parent=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "parent", [], "any", false, false, false, 65);
                    echo "\" ";
                }
                echo ">
\t\t\t\t\t<select name=\"poip_module[";
                // line 66
                echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 66);
                echo "]\" id=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 66);
                echo "\" class=\"form-control\">
\t\t\t\t\t
\t\t\t\t\t\t";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "values", [], "any", false, false, false, 68));
                foreach ($context['_seq'] as $context["val_id"] => $context["val_text"]) {
                    // line 69
                    echo "\t\t\t\t\t\t\t<option value=\"";
                    echo $context["val_id"];
                    echo "\" 
\t\t\t\t\t\t\t\t";
                    // line 70
                    if ((twig_get_attribute($this->env, $this->source, ($context["modules"] ?? null), twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 70), [], "array", true, true, false, 70) && ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["modules"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 70)] ?? null) : null) == $context["val_id"]))) {
                        // line 71
                        echo "\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t";
                    }
                    // line 73
                    echo "\t\t\t\t\t\t\t>";
                    echo $context["val_text"];
                    echo "</option>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['val_id'], $context['val_text'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t
\t\t\t";
            } else {
                // line 80
                echo "\t\t\t\t
\t\t\t\t";
                // line 82
                echo "\t\t\t
\t\t\t\t<div class=\"col-sm-1\" ";
                // line 83
                if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "parent", [], "any", false, false, false, 83)) {
                    echo "\tstyle=\"display:none;\" data-parent=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "parent", [], "any", false, false, false, 83);
                    echo "\" ";
                }
                echo ">
\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"";
                // line 86
                echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 86);
                echo "\" name=\"poip_module[";
                echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 86);
                echo "]\" value=\"1\"
\t\t\t\t\t\t\t\t";
                // line 87
                if ((((twig_get_attribute($this->env, $this->source, ($context["modules"] ?? null), twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 87), [], "array", true, true, false, 87) &&  !(null === (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["modules"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 87)] ?? null) : null)))) ? ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["modules"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 87)] ?? null) : null)) : (false))) {
                    // line 88
                    echo "\t\t\t\t\t\t\t\t\tchecked
\t\t\t\t\t\t\t\t";
                }
                // line 90
                echo "\t\t\t\t\t\t\t>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t";
                // line 94
                if ((((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "details", [], "any", true, true, false, 94) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "details", [], "any", false, false, false, 94)))) ? (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "details", [], "any", false, false, false, 94)) : (false))) {
                    // line 95
                    echo "\t\t\t\t\t<div class=\"col-sm-9\" ";
                    if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "parent", [], "any", false, false, false, 95)) {
                        echo "\tstyle=\"display:none;\" data-parent=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "parent", [], "any", false, false, false, 95);
                        echo "\" ";
                    }
                    echo ">
\t\t\t\t\t\t<span class=\"help-block\" id=\"";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 96);
                    echo "-details\" style=\"display:none;\">
\t\t\t\t\t\t\t";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "details", [], "any", false, false, false, 97);
                    echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\$('#";
                    // line 100
                    echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 100);
                    echo "').change();
\t\t\t\t\t\t</script>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 104
                echo "\t\t\t\t
\t\t\t";
            }
            // line 106
            echo "\t\t\t
\t\t\t";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "children", [], "any", false, false, false, 107));
            foreach ($context['_seq'] as $context["_key"] => $context["field_child"]) {
                // line 108
                echo "\t\t\t\t";
                echo twig_call_macro($macros["_self"], "macro_display_setting_item", [($context["modules"] ?? null), $context["field_child"], twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 108)], 108, $context, $this->getSourceContext());
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "\t\t\t
\t\t";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 113
    public function macro_display_setting_row($__modules__ = null, $__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "modules" => $__modules__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 114
            echo "\t\t\t
\t\t\t<div class=\"form-group\"
\t\t\t\t";
            // line 116
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "parent", [], "any", false, false, false, 116)) {
                // line 117
                echo "\t\t\t\t\tstyle=\"display:none;\" data-parent=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "parent", [], "any", false, false, false, 117);
                echo "\"
\t\t\t\t";
            }
            // line 119
            echo "\t\t\t>
\t\t\t\t";
            // line 120
            echo twig_call_macro($macros["_self"], "macro_display_setting_item", [($context["modules"] ?? null), ($context["field"] ?? null)], 120, $context, $this->getSourceContext());
            echo "
\t\t\t</div>
\t\t";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "extension/module/product_option_image_pro/product_option_image_pro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  932 => 120,  929 => 119,  923 => 117,  921 => 116,  917 => 114,  903 => 113,  893 => 110,  884 => 108,  880 => 107,  877 => 106,  873 => 104,  866 => 100,  860 => 97,  856 => 96,  847 => 95,  845 => 94,  839 => 90,  835 => 88,  833 => 87,  827 => 86,  817 => 83,  814 => 82,  811 => 80,  804 => 75,  795 => 73,  791 => 71,  789 => 70,  784 => 69,  780 => 68,  773 => 66,  762 => 65,  759 => 63,  757 => 62,  753 => 60,  747 => 58,  739 => 56,  737 => 55,  727 => 54,  724 => 53,  709 => 52,  705 => 483,  686 => 467,  668 => 456,  628 => 419,  623 => 416,  621 => 415,  620 => 414,  594 => 391,  580 => 380,  560 => 371,  551 => 367,  535 => 354,  517 => 339,  474 => 307,  463 => 299,  458 => 297,  451 => 293,  444 => 289,  433 => 280,  427 => 277,  422 => 275,  419 => 274,  417 => 273,  414 => 272,  402 => 265,  385 => 255,  372 => 249,  356 => 236,  340 => 223,  333 => 219,  330 => 218,  328 => 217,  323 => 215,  313 => 207,  307 => 204,  302 => 202,  299 => 201,  297 => 200,  294 => 199,  286 => 194,  280 => 193,  267 => 183,  261 => 180,  251 => 172,  249 => 171,  244 => 169,  233 => 161,  226 => 159,  214 => 154,  204 => 151,  197 => 149,  193 => 147,  184 => 145,  180 => 144,  175 => 142,  166 => 136,  162 => 135,  158 => 134,  154 => 133,  146 => 128,  141 => 125,  139 => 124,  136 => 123,  133 => 112,  117 => 38,  109 => 34,  106 => 33,  98 => 29,  95 => 28,  87 => 24,  85 => 23,  78 => 18,  67 => 16,  63 => 15,  58 => 13,  52 => 12,  48 => 11,  38 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/product_option_image_pro/product_option_image_pro.twig", "");
    }
}
