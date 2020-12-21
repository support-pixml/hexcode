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

/* extension/module/onealltpl.twig */
class __TwigTemplate_58561e0dc8189cf2e26a4bd72e65aa0082b3810789f4e265cb643d70ba22e29f extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "

";
        // line 3
        echo ($context["column_left"] ?? null);
        echo "

<div id=\"content\">

\t";
        // line 7
        if ((($context["do_oa"] ?? null) == "settings")) {
            // line 8
            echo "\t\t<form id=\"form-layout\" action=\"";
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t<div class=\"page-header\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t<button type=\"submit\" form=\"form-account\" data-toggle=\"tooltip\" title=\"";
            // line 12
            echo ($context["button_save"] ?? null);
            echo "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a href=\"";
            // line 15
            echo ($context["cancel"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_cancel"] ?? null);
            echo "\" class=\"btn btn-default\"><i\tclass=\"fa fa-reply\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t\t<h1>
\t\t\t\t\t\t";
            // line 18
            echo ($context["heading_title"] ?? null);
            echo "
\t\t\t\t\t</h1>
\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 22
                echo "\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 22);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 22);
                echo "</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t          <li class=\"active\">
\t\t          \t<a href=\"";
            // line 30
            echo ($context["action"] ?? null);
            echo "\">
\t\t          \t\t<i class=\"fa fa-wrench\"></i> ";
            // line 31
            echo ($context["oa_text_settings"] ?? null);
            echo "
\t\t          \t</a>
\t\t          </li>
\t\t          <li class=\"\">
\t\t          \t<a href=\"";
            // line 35
            echo ($context["action"] ?? null);
            echo "&amp;do=positions\">
\t\t          \t\t<i class=\"fa fa-puzzle-piece\"></i> ";
            // line 36
            echo ($context["oa_text_positions"] ?? null);
            echo "
\t\t          \t</a>
\t\t          </li>
\t\t        </ul>


\t\t\t\t";
            // line 43
            echo "\t\t\t\t";
            if ( !twig_test_empty(($context["oa_success_message"] ?? null))) {
                // line 44
                echo "\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t<i class=\"fa fa-cogs\"></i> ";
                // line 45
                echo ($context["oa_success_message"] ?? null);
                echo "
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 49
            echo "
\t\t\t\t";
            // line 51
            echo "\t\t\t\t";
            if ( !twig_test_empty(($context["oa_error_message"] ?? null))) {
                // line 52
                echo "\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i>";
                // line 53
                echo ($context["oa_error_message"] ?? null);
                echo "
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 57
            echo "
\t\t\t\t";
            // line 58
            if (twig_test_empty(($context["module_oneall_subdomain"] ?? null))) {
                // line 59
                echo "\t\t\t\t\t<div role=\"alert\" class=\"alert alert-success\">";
                echo ($context["oa_text_api_setup_welcome"] ?? null);
                echo "</div>
\t\t\t\t";
            }
            // line 61
            echo "

\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t<i class=\"fa fa-plug\"></i>
\t\t\t\t\t\t\t";
            // line 67
            echo ($context["oa_text_api_communication"] ?? null);
            echo "
\t\t\t\t\t\t</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">

\t\t\t\t\t\t";
            // line 72
            if (twig_test_empty(($context["module_oneall_subdomain"] ?? null))) {
                // line 73
                echo "\t\t\t\t\t\t\t<div role=\"alert\" class=\"alert alert-info\">";
                echo ($context["oa_text_api_setup"] ?? null);
                echo "</div>
\t\t\t\t\t\t";
            }
            // line 75
            echo "
\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t<label for=\"input-name\" class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t";
            // line 80
            echo ($context["oa_text_api_handler"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<select name=\"module_oneall_api_handler\" id=\"module_oneall_api_handler\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"crl\" ";
            // line 83
            if ((($context["module_oneall_api_handler"] ?? null) != "fso")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["oa_text_api_curl"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"fso\" ";
            // line 84
            if ((($context["module_oneall_api_handler"] ?? null) == "fso")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["oa_text_api_fsockopen"] ?? null);
            echo "</option>
\t\t\t\t\t              </select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t<label for=\"input-model\" class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t";
            // line 89
            echo ($context["oa_text_api_protocol"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<select name=\"module_oneall_api_port\" id=\"module_oneall_api_port\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"443\" ";
            // line 92
            if ((($context["module_oneall_api_port"] ?? null) != "80")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["oa_text_api_port_443"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"80\" ";
            // line 93
            if ((($context["module_oneall_api_port"] ?? null) == "80")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["oa_text_api_port_80"] ?? null);
            echo "</option>
\t\t\t\t\t              </select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t <div class=\"row\">
\t\t\t\t\t\t\t \t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t \t\t<div id=\"module_oneall_api_autodetect_result\"></div>
\t\t\t\t\t\t\t \t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t \t\t<button type=\"button\" class=\"btn btn-success\" id=\"module_oneall_api_autodetect\">";
            // line 104
            echo ($context["oa_text_api_autodetect"] ?? null);
            echo "</button>
\t\t\t\t\t\t\t \t</div>
\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<a href=\"https://app.oneall.com/\" target=\"_blank\">";
            // line 112
            echo ($context["oa_text_api_create_view"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t<label for=\"input-name\" class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t";
            // line 119
            echo ($context["oa_text_api_subdomain"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label> <input type=\"text\" class=\"form-control\" value=\"";
            // line 120
            echo ($context["module_oneall_subdomain"] ?? null);
            echo "\" id=\"module_oneall_subdomain\" name=\"module_oneall_subdomain\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t<label for=\"input-model\" class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t";
            // line 126
            echo ($context["oa_text_api_public_key"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label> <input type=\"text\" class=\"form-control\" value=\"";
            // line 127
            echo ($context["module_oneall_public"] ?? null);
            echo "\" id=\"module_oneall_public\" name=\"module_oneall_public\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t<label for=\"input-model\" class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t";
            // line 133
            echo ($context["oa_text_api_private_key"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label> <input type=\"text\" class=\"form-control\" value=\"";
            // line 134
            echo ($context["module_oneall_private"] ?? null);
            echo "\" id=\"module_oneall_private\" name=\"module_oneall_private\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t <div class=\"row\">
\t\t\t\t\t\t\t \t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t \t\t<div id=\"module_oneall_api_verify_result\"></div>
\t\t\t\t\t\t\t \t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success\" id=\"module_oneall_api_verify\">";
            // line 144
            echo ($context["oa_text_api_verify"] ?? null);
            echo "</button>
\t\t\t\t\t\t\t \t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t<i class=\"fa fa-cog\"></i>
\t\t\t\t\t\t\t";
            // line 153
            echo ($context["oa_text_settings"] ?? null);
            echo "
\t\t\t\t\t\t</h3>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t<label for=\"input-name\" class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t";
            // line 162
            echo ($context["oa_text_plugin_status"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<select name=\"module_oneall_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 165
            if ((($context["module_oneall_status"] ?? null) == "1")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["oa_text_plugin_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
            // line 166
            if ((($context["module_oneall_status"] ?? null) == "0")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["oa_text_plugin_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t              </select>
\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t<label for=\"input-name\" class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t";
            // line 171
            echo ($context["oa_text_plugin_language"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<select name=\"module_oneall_store_lang\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
            // line 174
            if ((($context["module_oneall_store_lang"] ?? null) == "0")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["oa_text_plugin_language_app"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 175
            if ((($context["module_oneall_store_lang"] ?? null) == "1")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["oa_text_plugin_language_opc"] ?? null);
            echo "</option>
\t\t\t\t\t              </select>
\t\t\t\t\t            </div>
\t\t\t\t\t         </div>
\t\t\t\t\t         <div class=\"row\">
\t\t\t\t\t         \t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<label for=\"input-name\" class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t";
            // line 182
            echo ($context["oa_text_loading"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<select name=\"module_oneall_deferred_loading\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
            // line 185
            if ((($context["module_oneall_deferred_loading"] ?? null) == "0")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["oa_text_loading_head"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 186
            if ((($context["module_oneall_deferred_loading"] ?? null) == "1")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["oa_text_loading_deferred"] ?? null);
            echo "</option>
\t\t\t\t\t              </select>
\t\t\t\t\t              <small class=\"form-text text-muted\">";
            // line 188
            echo ($context["oa_text_loading_help"] ?? null);
            echo "</small>
\t\t\t\t\t            </div>
\t\t\t\t\t         </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t";
            // line 197
            echo ($context["oa_text_account_creation"] ?? null);
            echo "
\t\t\t\t\t\t</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<label for=\"input-name\" class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t";
            // line 205
            echo ($context["oa_text_account_creation_desc"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<select name=\"module_oneall_auto_account\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
            // line 208
            if ((($context["module_oneall_auto_account"] ?? null) == "0")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["oa_text_account_creation_form"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 209
            if ((($context["module_oneall_auto_account"] ?? null) == "1")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["oa_text_account_creation_auto"] ?? null);
            echo "</option>
\t\t\t\t\t              </select>
\t\t\t\t\t            </div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<label for=\"input-name\" class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t";
            // line 217
            echo ($context["oa_text_account_creation_address"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<select name=\"module_oneall_ask_address\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
            // line 220
            if ((($context["module_oneall_ask_address"] ?? null) == "0")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["oa_text_account_creation_address_no"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 221
            if ((($context["module_oneall_ask_address"] ?? null) == "1")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["oa_text_account_creation_address_yes"] ?? null);
            echo "</option>
\t\t\t\t\t              </select>
\t\t\t\t\t            </div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<label for=\"input-name\" class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t";
            // line 229
            echo ($context["oa_text_account_link_desc"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<select name=\"module_oneall_auto_link\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 232
            if ((($context["module_oneall_auto_link"] ?? null) == "1")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["oa_text_account_link_on"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
            // line 233
            if ((($context["module_oneall_auto_link"] ?? null) == "0")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["oa_text_account_link_off"] ?? null);
            echo "</option>
\t\t\t\t\t              </select>
\t\t\t\t\t            </div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<label for=\"input-name\" class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t";
            // line 241
            echo ($context["oa_text_account_customer_group"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<select name=\"module_oneall_customer_group\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"store_config\" ";
            // line 244
            if ((($context["oa_customer_group_selected"] ?? null) == "store_config")) {
                echo "selected=\"selected\"";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 245
            echo ($context["oa_text_account_customer_group_default"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
            // line 247
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oa_customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 248
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 248);
                echo "\" ";
                if ((($context["oa_customer_group_selected"] ?? null) == twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 248))) {
                    echo "selected=\"selected\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 249
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 249);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 252
            echo "\t\t\t\t\t              </select>
\t\t\t\t\t            </div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t<i class=\"fa fa-users\"></i>
\t\t\t\t\t\t\t";
            // line 262
            echo ($context["oa_text_social_networks"] ?? null);
            echo "
\t\t\t\t\t\t</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div role=\"alert\" class=\"alert alert-info\">";
            // line 266
            echo ($context["oa_text_social_network_icons"] ?? null);
            echo "</div>

\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t";
            // line 270
            $context["oa_enabled_social_networks"] = twig_split_filter($this->env, ($context["module_oneall_socials"] ?? null), ",");
            // line 271
            echo "

\t\t\t\t\t \t\t\t";
            // line 274
            echo "\t\t\t\t\t \t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oa_social_networks"] ?? null));
            foreach ($context['_seq'] as $context["oa_key"] => $context["oa_name"]) {
                // line 275
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 276
                $context["oa_social_network_enabled"] = ((twig_in_filter($context["oa_key"], ($context["oa_enabled_social_networks"] ?? null))) ? (true) : (false));
                // line 277
                echo "
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 oa_social_login_provider_toggle ";
                // line 278
                if (($context["oa_social_network_enabled"] ?? null)) {
                    echo "enabled";
                } else {
                    echo "disabled";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"oa_social_login_provider oa_social_login_provider_";
                // line 282
                echo $context["oa_key"];
                echo "\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"oa_social_login_provider_label\">";
                // line 285
                echo $context["oa_name"];
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"oa_social_login_provider_label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"1\" name=\"module_oneall_social_networks[";
                // line 289
                echo $context["oa_key"];
                echo "]\" class=\"form-control\" ";
                if (($context["oa_social_network_enabled"] ?? null)) {
                    echo "checked=\"checked\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['oa_key'], $context['oa_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 297
            echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<input type=\"hidden\" name=\"area\" value=\"settings\">
\t\t\t\t\t<button type=\"submit\" form=\"form-account\" class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"fa fa-save\"></i> ";
            // line 304
            echo ($context["oa_text_save"] ?? null);
            echo "
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>

\t";
        } else {
            // line 311
            echo "\t\t\t<div class=\"page-header\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t<a href=\"";
            // line 314
            echo ($context["cancel"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_cancel"] ?? null);
            echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t\t<h1>
\t\t\t\t\t\t";
            // line 317
            echo ($context["heading_title"] ?? null);
            echo "
\t\t\t\t\t</h1>
\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t";
            // line 320
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 321
                echo "\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 321);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 321);
                echo "</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 323
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li><a href=\"";
            // line 328
            echo ($context["action"] ?? null);
            echo "\"> <i class=\"fa fa-wrench\"></i> ";
            echo ($context["oa_text_settings"] ?? null);
            echo "</a></li>
\t\t\t\t\t<li class=\"active\"><a href=\"";
            // line 329
            echo ($context["action"] ?? null);
            echo "&amp;do=positions\"> <i class=\"fa fa-puzzle-piece\"></i> ";
            echo ($context["oa_text_positions"] ?? null);
            echo "</a></li>
\t\t\t\t</ul>

\t\t\t\t";
            // line 333
            echo "\t\t\t\t";
            if ( !twig_test_empty(($context["oa_success_message"] ?? null))) {
                // line 334
                echo "\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t<i class=\"fa fa-cogs\"></i> ";
                // line 335
                echo ($context["oa_success_message"] ?? null);
                echo "
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 339
            echo "
\t\t\t\t";
            // line 341
            echo "\t\t\t\t";
            if ( !twig_test_empty(($context["oa_error_message"] ?? null))) {
                // line 342
                echo "\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i> ";
                // line 343
                echo ($context["oa_error_message"] ?? null);
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 346
            echo "
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t<i class=\"fa fa-plus-square\"></i>
\t\t\t\t\t\t\t";
            // line 351
            echo ($context["oa_text_add_to_a_position"] ?? null);
            echo "
\t\t\t\t\t\t</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<form id=\"form-layout\" action=\"";
            // line 355
            echo ($context["action"] ?? null);
            echo "&amp;do=positions\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center col-sm-3\">";
            // line 361
            echo ($context["oa_text_layout"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center col-sm-3\">";
            // line 362
            echo ($context["oa_text_position"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center col-sm-3\">";
            // line 363
            echo ($context["oa_text_sort_order"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center col-sm-3\">&nbsp;</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"oa_layout_id\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 372
            $context["oa_i"] = 1;
            // line 373
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oa_oc_layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oa_oc_layout"]) {
                // line 374
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 375
                echo twig_get_attribute($this->env, $this->source, $context["oa_oc_layout"], "layout_id", [], "any", false, false, false, 375);
                echo "\" ";
                if ((($context["oa"] ?? null) == "1")) {
                    echo "selected=\"selected\"";
                }
                echo "> ";
                echo twig_get_attribute($this->env, $this->source, $context["oa_oc_layout"], "name", [], "any", false, false, false, 375);
                echo "</option>
\t \t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oa_oc_layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 377
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"oa_position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"content_top\" selected=\"selected\">Content Top</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"content_bottom\">Content Bottom</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"column_left\">Colum Left</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"column_right\">Colum Right</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"oa_sort_order\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 389
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 99));
            foreach ($context['_seq'] as $context["_key"] => $context["oa_i"]) {
                // line 390
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["oa_i"];
                echo "\" ";
                if (($context["oa_i"] == "1")) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo $context["oa_i"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oa_i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 392
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i> ";
            // line 396
            echo ($context["oa_text_add_position"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t<i class=\"fa fa-check-square\"></i>
\t\t\t\t\t\t\t";
            // line 411
            echo ($context["oa_text_current_positions"] ?? null);
            echo "
\t\t\t\t\t\t</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center col-sm-3\">";
            // line 420
            echo ($context["oa_text_layout"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center col-sm-3\">";
            // line 421
            echo ($context["oa_text_position"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center col-sm-3\">";
            // line 422
            echo ($context["oa_text_sort_order"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center col-sm-3\">&nbsp;</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
            // line 427
            if ((( !twig_test_empty(($context["oa_oc_positions"] ?? null)) && twig_test_iterable(($context["oa_oc_positions"] ?? null))) && (twig_length_filter($this->env, ($context["oa_oc_positions"] ?? null)) > 0))) {
                // line 428
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oa_oc_positions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["oa_oc_position"]) {
                    // line 429
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 431
                    echo twig_get_attribute($this->env, $this->source, $context["oa_oc_position"], "name", [], "any", false, false, false, 431);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 434
                    echo twig_capitalize_string_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["oa_oc_position"], "position", [], "any", false, false, false, 434), ["_" => " "]));
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 437
                    echo twig_get_attribute($this->env, $this->source, $context["oa_oc_position"], "sort_order", [], "any", false, false, false, 437);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 440
                    echo ($context["action"] ?? null);
                    echo "&amp;do=positions&remove=";
                    echo twig_get_attribute($this->env, $this->source, $context["oa_oc_position"], "layout_module_id", [], "any", false, false, false, 440);
                    echo "\" class=\"btn btn-danger\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i> ";
                    // line 441
                    echo ($context["oa_text_remove_position"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oa_oc_position'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 446
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 447
            echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-code\"></i>
\t\t\t\t\t\t\t\t";
            // line 457
            echo ($context["oa_text_position_manual"] ?? null);
            echo "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
            // line 464
            echo ($context["oa_text_position_add_widget"] ?? null);
            echo "</label><br/>

\t\t\t\t\t\t\t\t\t\t";
            // line 466
            echo ($context["oa_text_position_add_widget_example"] ?? null);
            echo "<br>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
            // line 471
            echo ($context["oa_text_position_add_button"] ?? null);
            echo "</label><br/>

\t\t\t\t\t\t\t\t\t\t";
            // line 473
            echo ($context["oa_text_position_add_button_example"] ?? null);
            echo "<br>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t";
        }
        // line 486
        echo "</div>


<script type=\"text/javascript\">
\tvar oaL10n = {};
\toaL10n.token =  '";
        // line 491
        echo ($context["user_token"] ?? null);
        echo "';
\toaL10n.working = '";
        // line 492
        echo ($context["oa_text_ajax_working"] ?? null);
        echo "';
</script>


";
        // line 496
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/onealltpl.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1033 => 496,  1026 => 492,  1022 => 491,  1015 => 486,  999 => 473,  994 => 471,  986 => 466,  981 => 464,  971 => 457,  959 => 447,  956 => 446,  945 => 441,  939 => 440,  933 => 437,  927 => 434,  921 => 431,  917 => 429,  912 => 428,  910 => 427,  902 => 422,  898 => 421,  894 => 420,  882 => 411,  864 => 396,  858 => 392,  843 => 390,  839 => 389,  825 => 377,  811 => 375,  808 => 374,  803 => 373,  801 => 372,  789 => 363,  785 => 362,  781 => 361,  772 => 355,  765 => 351,  758 => 346,  752 => 343,  749 => 342,  746 => 341,  743 => 339,  736 => 335,  733 => 334,  730 => 333,  722 => 329,  716 => 328,  709 => 323,  698 => 321,  694 => 320,  688 => 317,  680 => 314,  675 => 311,  665 => 304,  656 => 297,  638 => 289,  631 => 285,  625 => 282,  614 => 278,  611 => 277,  609 => 276,  606 => 275,  601 => 274,  597 => 271,  595 => 270,  588 => 266,  581 => 262,  569 => 252,  560 => 249,  551 => 248,  547 => 247,  542 => 245,  536 => 244,  530 => 241,  515 => 233,  507 => 232,  501 => 229,  486 => 221,  478 => 220,  472 => 217,  457 => 209,  449 => 208,  443 => 205,  432 => 197,  420 => 188,  411 => 186,  403 => 185,  397 => 182,  383 => 175,  375 => 174,  369 => 171,  357 => 166,  349 => 165,  343 => 162,  331 => 153,  319 => 144,  306 => 134,  302 => 133,  293 => 127,  289 => 126,  280 => 120,  276 => 119,  266 => 112,  255 => 104,  237 => 93,  229 => 92,  223 => 89,  211 => 84,  203 => 83,  197 => 80,  190 => 75,  184 => 73,  182 => 72,  174 => 67,  166 => 61,  160 => 59,  158 => 58,  155 => 57,  148 => 53,  145 => 52,  142 => 51,  139 => 49,  132 => 45,  129 => 44,  126 => 43,  117 => 36,  113 => 35,  106 => 31,  102 => 30,  94 => 24,  83 => 22,  79 => 21,  73 => 18,  65 => 15,  59 => 12,  51 => 8,  49 => 7,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/onealltpl.twig", "");
    }
}
