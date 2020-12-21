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

/* extension/module/d_social_login.twig */
class __TwigTemplate_db35155525c3476da02410ad27f479a4ec194c6a878753545e354a4ce88ee645 extends \Twig\Template
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
        // line 2
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"form-inline pull-right\">
                ";
        // line 7
        if (($context["stores"] ?? null)) {
            // line 8
            echo "                    <select id=\"store\" onChange=\"location = '";
            echo ($context["module_link"] ?? null);
            echo "&store_id=' + \$('#store').val()\"
                            class=\"form-control\">
                        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 11
                echo "                            <option value=\"";
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["store"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["store_id"] ?? null) : null);
                echo "\" ";
                echo ((((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["store"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["store_id"] ?? null) : null) == ($context["store_id"] ?? null))) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["store"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["name"] ?? null) : null);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "                    </select>
                ";
        }
        // line 15
        echo "                <button id=\"save_and_stay\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_save_and_stay"] ?? null);
        echo "\"
                        class=\"btn btn-success\"><i class=\"fa fa-save\"></i></button>
                <button type=\"submit\" form=\"form\" data-toggle=\"tooltip\" title=\"";
        // line 17
        echo ($context["button_save"] ?? null);
        echo "\"
                        class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 19
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i
                            class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 21
        echo ($context["heading_title"] ?? null);
        echo " ";
        echo ($context["version"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 24
            echo "                    <li><a href=\"";
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["breadcrumb"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["breadcrumb"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["text"] ?? null) : null);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </ul>
        </div>
    </div>

    <div class=\"container-fluid\">
        ";
        // line 31
        if (($context["setup"] ?? null)) {
            // line 32
            echo "        ";
            if ( !($context["pro"] ?? null)) {
                // line 33
                echo "            <div class=\"notify alert alert-info\">";
                echo ($context["text_pro"] ?? null);
                echo "</div>
        ";
            }
            // line 35
            echo "        ";
            if (($context["d_shopunity"] ?? null)) {
                // line 36
                echo "            <div class=\"d_shopunity_update\"></div>
            <script src=\"view/javascript/d_shopunity/d_shopunity_widget.js\" type=\"text/javascript\"></script>
            <script type=\"text/javascript\">
                var d_shopunity_update = jQuery.extend(true, {}, d_shopunity_widget);
                d_shopunity_update.init({
                    class: '.d_shopunity_update',
                    token: '";
                // line 42
                echo ($context["token"] ?? null);
                echo "',
                    extension_id: '";
                // line 43
                echo ($context["codename"] ?? null);
                echo "',
                    action: 'loadUpdate'
                });
            </script>
        ";
            }
            // line 48
            echo "        ";
        }
        // line 49
        echo "        ";
        if (($context["error_warning"] ?? null)) {
            // line 50
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 54
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 55
            echo "            <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 59
        echo "
        ";
        // line 60
        if ( !($context["pro"] ?? null)) {
            // line 61
            echo "        <div class=\"row\">
            <div class=\"col-md-9\">
                ";
        }
        // line 64
        echo "
                <div class=\"panel panel-default panel-resizable\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title \"><i class=\"fa fa-pencil\"></i> ";
        // line 67
        echo ($context["text_edit"] ?? null);
        echo "</h3>
                    </div>
                    ";
        // line 69
        if (($context["setup"] ?? null)) {
            // line 70
            echo "                        <div class=\"panel-body \">
                            <form action=\"";
            // line 71
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\"
                                  class=\"form-horizontal\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"active\"><a href=\"#social_login\" data-toggle=\"tab\">
                                            <i class=\"fa fa-bullhorn\"></i>
                                            ";
            // line 76
            echo ($context["text_social_login"] ?? null);
            echo "
                                        </a></li>
                                    <li><a href=\"#tab_setting\" data-toggle=\"tab\">
                                            <i class=\"fa fa-cog\"></i>
                                            ";
            // line 80
            echo ($context["text_setting"] ?? null);
            echo "
                                        </a></li>
                                    <li><a href=\"#registration_field\" data-toggle=\"tab\">
                                            <i class=\"fa fa-bars\"></i>
                                            ";
            // line 84
            echo ($context["text_registration_field"] ?? null);
            echo "
                                        </a></li>
                                    <li><a href=\"#instruction\" data-toggle=\"tab\">
                                            <i class=\"fa fa-graduation-cap\"></i>
                                            ";
            // line 88
            echo ($context["text_instruction"] ?? null);
            echo "
                                        </a></li>
                                    <li><a id=\"debug_btn\" href=\"#debug\" data-toggle=\"tab\"
                                           class=\"";
            // line 91
            echo (( !(($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["setting"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["debug_mode"] ?? null) : null)) ? ("hide") : (""));
            echo "\">
                                            <i class=\"fa fa-bug\"></i>
                                            ";
            // line 93
            echo ($context["text_debug"] ?? null);
            echo "
                                        </a></li>
                                </ul>

                                <div class=\"tab-content\">

                                    <div id=\"social_login\" class=\"tab-pane active\">
                                        <div class=\"form-group tour-step tour-step-one\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input_status\">";
            // line 102
            echo ($context["entry_status"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"hidden\" name=\"";
            // line 104
            echo ($context["codename"] ?? null);
            echo "_status\" value=\"0\"/>
                                                <input type=\"checkbox\" name=\"";
            // line 105
            echo ($context["codename"] ?? null);
            echo "_status\" class=\"switcher\"
                                                       id=\"input_status\" ";
            // line 106
            echo ((($context["d_social_login_status"] ?? null)) ? ("checked=\"checked\"") : (""));
            echo "
                                                       value=\"1\"/>
                                            </div>
                                        </div>
                                        <div class=\"bs-callout bs-callout-warning\">";
            // line 110
            echo ($context["entry_sort_order"] ?? null);
            echo "</div>
                                        <div class=\"panel-group sortable\" role=\"tablist\" aria-multiselectable=\"true\">
                                            ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["setting"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["providers"] ?? null) : null));
            foreach ($context['_seq'] as $context["key"] => $context["provider"]) {
                // line 113
                echo "                                                <div
                                                        class=\"panel panel-default sort-item\"
                                                        data-sort=\"";
                // line 115
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["provider"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["sort_order"] ?? null) : null);
                echo "\">
                                                    <input type=\"hidden\"
                                                           name=\"";
                // line 117
                echo ($context["codename"] ?? null);
                echo "_setting[providers][";
                echo $context["key"];
                echo "][id]\"
                                                           value=\"";
                // line 118
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["provider"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["id"] ?? null) : null);
                echo "\"/>
                                                    <input type=\"hidden\"
                                                           name=\"";
                // line 120
                echo ($context["codename"] ?? null);
                echo "_setting[providers][";
                echo $context["key"];
                echo "][sort_order]\"
                                                           class=\"sort-value\"
                                                           value=\"";
                // line 122
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["provider"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["sort_order"] ?? null) : null);
                echo "\"/>
                                                    <input type=\"hidden\"
                                                           name=\"";
                // line 124
                echo ($context["codename"] ?? null);
                echo "_setting[providers][";
                echo $context["key"];
                echo "][enabled]\"
                                                           value=\"0\"/>
                                                    <input type=\"hidden\"
                                                           name=\"";
                // line 127
                echo ($context["codename"] ?? null);
                echo "_setting[providers][";
                echo $context["key"];
                echo "][icon]\"
                                                           value=\"";
                // line 128
                echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["provider"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["icon"] ?? null) : null);
                echo "\"/>
                                                    <div
                                                            class=\"panel-heading collapse\"
                                                            role=\"tab\"
                                                            id=\"tab_";
                // line 132
                echo $context["key"];
                echo "\">
                                                        <h4 class=\"panel-title\">
                                                            <i class=\"fa fa-bars\"></i> ";
                // line 134
                echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["provider"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["name"] ?? null) : null);
                echo "
                                                            <span class=\"api-title label label-success\" role=\"button\"
                                                                  data-toggle=\"collapse\"
                                                                  data-parent=\"#accordion\"
                                                                  href=\"#";
                // line 138
                echo $context["key"];
                echo "\"
                                                                  aria-expanded=\"true\"> ";
                // line 139
                echo ($context["text_api"] ?? null);
                echo "</span>
                                                            <span class=\"api-title label label-default\" role=\"button\"
                                                                  data-toggle=\"collapse\"
                                                                  data-parent=\"#accordion\"
                                                                  href=\"#";
                // line 143
                echo $context["key"];
                echo "\"
                                                                  aria-expanded=\"true\"> ";
                // line 144
                echo ($context["text_no_api"] ?? null);
                echo "</span>
                                                        </h4>
                                                        <div class=\"status pull-right\">
                                                            <strong role=\"button\"
                                                                    data-toggle=\"collapse\"
                                                                    data-parent=\"#accordion\"
                                                                    href=\"#";
                // line 150
                echo $context["key"];
                echo "\"
                                                                    aria-expanded=\"true\"
                                                            ><i class=\"fa fa-caret-down\"></i> ";
                // line 152
                echo ($context["text_expend_to_edit"] ?? null);
                echo "
                                                            </strong>
                                                            <span for=\"d_social_login_modules_providers_";
                // line 154
                echo $context["key"];
                echo "_enabled\">
                                                    <input type=\"checkbox\"
                                                           name=\"";
                // line 156
                echo ($context["codename"] ?? null);
                echo "_setting[providers][";
                echo $context["key"];
                echo "][enabled]\" ";
                echo (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["provider"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["enabled"] ?? null) : null)) ? ("checked=\"checked\"") : (""));
                echo "
                                                           value=\"1\"
                                                           id=\"";
                // line 158
                echo ($context["codename"] ?? null);
                echo "_setting_providers_";
                echo $context["key"];
                echo "_enabled\"/>
                                                </span>
                                                        </div>

                                                    </div>
                                                    <div id=\"";
                // line 163
                echo $context["key"];
                echo "\"
                                                         class=\"panel-collapse collapse\"
                                                         role=\"tabpanel\"
                                                         aria-labelledby=\"tab_";
                // line 166
                echo $context["key"];
                echo "\">
                                                        <div class=\"panel-body\">
                                                            <div class=\"row provider-design\">
                                                                <div class=\"col-sm-3\">
                                                                    <label>";
                // line 170
                echo ($context["text_background_color"] ?? null);
                echo "</label>
                                                                    <div class=\"input-group color-picker\">
                                                                        <input type=\"text\"
                                                                               name=\"";
                // line 173
                echo ($context["codename"] ?? null);
                echo "_setting[providers][";
                echo $context["key"];
                echo "][background_color]\"
                                                                               class=\" form-control\"
                                                                               value=\"";
                // line 175
                echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["provider"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["background_color"] ?? null) : null);
                echo "\"/>
                                                                        <span class=\"input-group-addon\"><i></i></span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col-sm-3\">
                                                                    <label>";
                // line 180
                echo ($context["text_background_color_active"] ?? null);
                echo "</label>
                                                                    <div class=\"input-group color-picker\">
                                                                        <input type=\"text\"
                                                                               name=\"";
                // line 183
                echo ($context["codename"] ?? null);
                echo "_setting[providers][";
                echo $context["key"];
                echo "][background_color_active]\"
                                                                               class=\"form-control\"
                                                                               value=\"";
                // line 185
                echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["provider"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["background_color_active"] ?? null) : null);
                echo "\"/>
                                                                        <span class=\"input-group-addon\"><i></i></span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col-sm-3\">
                                                                    <label>";
                // line 190
                echo ($context["text_background_color_hover"] ?? null);
                echo "</label>
                                                                    <div class=\"input-group color-picker\">
                                                                        <input type=\"text\"
                                                                               name=\"";
                // line 193
                echo ($context["codename"] ?? null);
                echo "_setting[providers][";
                echo $context["key"];
                echo "][background_color_hover]\"
                                                                               class=\"form-control\"
                                                                               value=\"";
                // line 195
                echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["provider"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["background_color_hover"] ?? null) : null);
                echo "\"/>
                                                                        <span class=\"input-group-addon\"><i></i></span>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br/>
                                                            <div class=\"provider-api\">
                                                                <label><i class=\"";
                // line 203
                echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["provider"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["icon"] ?? null) : null);
                echo "\"></i> ";
                echo (((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["provider"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["name"] ?? null) : null) . " ") . ($context["text_app_settings"] ?? null));
                echo "
                                                                    <span class=\"info-window-item\"
                                                                          data-href=\"https://doc.99logins.com/";
                // line 205
                echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["provider"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["id"] ?? null) : null);
                echo "\"><i
                                                                                class=\"fa fa-question\"
                                                                                data-toggle=\"tooltip\"
                                                                                title=\"";
                // line 208
                echo ($context["text_instruction"] ?? null);
                echo "\"></i></span>
                                                                </label>
                                                                <div id=\"api_setting_";
                // line 210
                echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["provider"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["id"] ?? null) : null);
                echo "\">
                                                                    ";
                // line 211
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["provider"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["keys"] ?? null) : null));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 212
                    echo "                                                                        <div class=\"input-group clearfix\">
                                                                            <label class=\"input-group-addon\">
                                                                                ";
                    // line 214
                    echo twig_get_attribute($this->env, $this->source, $context, ("text_app_" . $context["k"]), [], "any", false, false, false, 214);
                    echo "
                                                                            </label>
                                                                            <input type=\"text\"
                                                                                   placeholder=\"";
                    // line 217
                    echo twig_get_attribute($this->env, $this->source, $context, ("text_app_" . $context["k"]), [], "any", false, false, false, 217);
                    echo "\"
                                                                                   name=\"";
                    // line 218
                    echo ($context["codename"] ?? null);
                    echo "_setting[providers][";
                    echo $context["key"];
                    echo "][keys][";
                    echo $context["k"];
                    echo "]\"
                                                                                   value=\"";
                    // line 219
                    echo $context["v"];
                    echo "\"
                                                                                   class=\"form-control credentials\"/>

                                                                        </div>
                                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 224
                echo "
                                                                    ";
                // line 225
                if ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["provider"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["scope"] ?? null) : null)) {
                    // line 226
                    echo "                                                                        <div class=\"input-group clearfix\">
                                                                            <label class=\"input-group-addon\">
                                                                                ";
                    // line 228
                    echo ($context["text_app_scope"] ?? null);
                    echo "
                                                                            </label>
                                                                            <input type=\"text\"
                                                                                   placeholder=\"";
                    // line 231
                    echo ($context["text_app_scope"] ?? null);
                    echo "\"
                                                                                   name=\"";
                    // line 232
                    echo ($context["codename"] ?? null);
                    echo "_setting[providers][";
                    echo $context["key"];
                    echo "][scope]\"
                                                                                   value=\"";
                    // line 233
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["provider"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["scope"] ?? null) : null);
                    echo "\"
                                                                                   class=\"form-control\"/>

                                                                        </div>
                                                                    ";
                }
                // line 238
                echo "
                                                                    <script>
                                                                        \$(\"#api_setting_";
                // line 240
                echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["provider"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["id"] ?? null) : null);
                echo " .credentials\").each(function (key, item) {
                                                                            if (item.value) {
                                                                                \$('#tab_";
                // line 242
                echo $context["key"];
                echo "').addClass('api-active');
                                                                            }
                                                                        })
                                                                    </script>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['provider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 252
            echo "                                            <script>
                                                \$(function () {
                                                    \$('.color-picker').colorpicker();
                                                });
                                            </script>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input_status\">";
            // line 260
            echo ($context["entry_support"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <a class=\"btn btn-success\" href=\"https://dreamvention.ee/support\"
                                                   target=\"_blank\">";
            // line 263
            echo ($context["text_support"] ?? null);
            echo "</a>
                                            </div>
                                        </div><!-- //support -->
                                        ";
            // line 266
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["setting"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["sizes"] ?? null) : null));
            foreach ($context['_seq'] as $context["key"] => $context["size"]) {
                // line 267
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["size"]);
                foreach ($context['_seq'] as $context["keyattr"] => $context["attrs"]) {
                    // line 268
                    echo "                                                <input type=\"hidden\"
                                                       name=\"";
                    // line 269
                    echo ($context["codename"] ?? null);
                    echo "_setting[sizes][";
                    echo $context["key"];
                    echo "][";
                    echo $context["keyattr"];
                    echo "]\"
                                                       value=\"";
                    // line 270
                    echo $context["attrs"];
                    echo "\"/>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['keyattr'], $context['attrs'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 272
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['size'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 273
            echo "                                    </div>

                                    <div id=\"tab_setting\" class=\"tab-pane \">

                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input_title\"><span data-toggle=\"tooltip\"
                                                                           title=\"";
            // line 280
            echo ($context["help_title"] ?? null);
            echo "\">";
            echo ($context["entry_title"] ?? null);
            echo "</span></label>
                                            <div class=\"col-sm-10\">
                                                ";
            // line 282
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 283
                echo "                                                    <div class=\"input-group clearfix\">
                                                        <label class=\"input-group-addon\">
                                                            <img src=\"";
                // line 285
                echo twig_get_attribute($this->env, $this->source, $context["language"], "flag", [], "any", false, false, false, 285);
                echo "\"/>
                                                        </label>
                                                        <input type=\"text\" id=\"input_title\"
                                                               name=\"";
                // line 288
                echo ($context["codename"] ?? null);
                echo "_setting[title][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 288);
                echo "]\"
                                                                ";
                // line 289
                if ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["setting"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["title"] ?? null) : null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 289)] ?? null) : null)) {
                    // line 290
                    echo "                                                                    value=\"";
                    echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["setting"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["title"] ?? null) : null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 290)] ?? null) : null);
                    echo "\"
                                                                ";
                } else {
                    // line 292
                    echo "                                                                    value=\"";
                    echo ($context["text_sign_in"] ?? null);
                    echo "\"
                                                                ";
                }
                // line 293
                echo " class=\"form-control\"/>

                                                    </div>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 297
            echo "                                            </div>
                                        </div>

                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"select_size\">";
            // line 302
            echo ($context["entry_size"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <select name=\"";
            // line 304
            echo ($context["codename"] ?? null);
            echo "_setting[size]\" class=\"form-control\">
                                                    ";
            // line 305
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["setting"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["sizes"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
                // line 306
                echo "                                                        <option value=\"";
                echo $context["size"];
                echo "\"
                                                                ";
                // line 307
                if (($context["size"] == (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["setting"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["size"] ?? null) : null))) {
                    echo "selected=\"selected\" ";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context, ("text_" . $context["size"]), [], "any", false, false, false, 307);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 309
            echo "                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"select_customer_group\">";
            // line 314
            echo ($context["entry_customer_group"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <select id=\"select_customer_group\"
                                                        name=\"";
            // line 317
            echo ($context["codename"] ?? null);
            echo "_setting[customer_group]\"
                                                        class=\"form-control\">
                                                    ";
            // line 319
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 320
                echo "                                                        <option value=\"";
                echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["customer_group"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["customer_group_id"] ?? null) : null);
                echo "\" ";
                echo ((((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["customer_group"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["customer_group_id"] ?? null) : null) == (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["setting"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["customer_group"] ?? null) : null))) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["customer_group"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["name"] ?? null) : null);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 322
            echo "                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input_newsletter\">";
            // line 327
            echo ($context["entry_newsletter"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"hidden\" name=\"";
            // line 329
            echo ($context["codename"] ?? null);
            echo "_setting[newsletter]\"
                                                       value=\"0\"/>
                                                <input type=\"checkbox\"
                                                       name=\"";
            // line 332
            echo ($context["codename"] ?? null);
            echo "_setting[newsletter]\" ";
            echo (((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["setting"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["newsletter"] ?? null) : null)) ? ("checked=\"checked\"") : (""));
            echo "
                                                       value=\"1\" id=\"input_newsletter\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input_header\">";
            // line 338
            echo ($context["entry_header"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-2\">
                                                <input type=\"hidden\" name=\"";
            // line 340
            echo ($context["codename"] ?? null);
            echo "_setting[header]\" value=\"0\"/>
                                                <input type=\"checkbox\"
                                                       name=\"";
            // line 342
            echo ($context["codename"] ?? null);
            echo "_setting[header]\" ";
            echo (((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["setting"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["header"] ?? null) : null)) ? ("checked=\"checked\"") : (""));
            echo "
                                                       value=\"1\" id=\"input_header\"/>
                                            </div>
                                            <div class=\"col-sm-8\">
                                                <div class=\"input-group\">
                                                    <label class=\"input-group-addon\">
                                                        ";
            // line 348
            echo ($context["text_header_placeholder"] ?? null);
            echo "
                                                    </label>
                                                    <input class=\"form-control\" type=\"text\"
                                                           value=\"";
            // line 351
            echo ($context["text_header_value"] ?? null);
            echo "\">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input_return_page_url\"><span data-toggle=\"tooltip\"
                                                                                     title=\"";
            // line 358
            echo ($context["help_return_page_url"] ?? null);
            echo "\">";
            echo ($context["entry_return_page_url"] ?? null);
            echo "</span></label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\" id=\"input_return_page_url\"
                                                       name=\"";
            // line 361
            echo ($context["codename"] ?? null);
            echo "_setting[return_page_url]\"
                                                       value=\"";
            // line 362
            echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["setting"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["return_page_url"] ?? null) : null);
            echo "\" class=\"form-control\"
                                                       placeholder=\"";
            // line 363
            echo ($context["placeholder_return_page_url"] ?? null);
            echo "\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input_debug_mode\">";
            // line 368
            echo ($context["entry_debug_mode"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"hidden\" name=\"";
            // line 370
            echo ($context["codename"] ?? null);
            echo "_setting[debug_mode]\"
                                                       value=\"0\"/>
                                                <input type=\"checkbox\"
                                                       name=\"";
            // line 373
            echo ($context["codename"] ?? null);
            echo "_setting[debug_mode]\" ";
            echo (((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["setting"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["debug_mode"] ?? null) : null)) ? ("checked=\"checked\"") : (""));
            echo "
                                                       value=\"1\" id=\"input_debug_mode\"/>
                                            </div>
                                        </div>

                                    </div>

                                    <div id=\"registration_field\" class=\"tab-pane\">
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input_iframe\">";
            // line 383
            echo ($context["entry_iframe"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"hidden\" name=\"";
            // line 385
            echo ($context["codename"] ?? null);
            echo "_setting[iframe]\" value=\"0\"/>
                                                <input type=\"checkbox\"
                                                       name=\"";
            // line 387
            echo ($context["codename"] ?? null);
            echo "_setting[iframe]\" ";
            echo (((($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["setting"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["iframe"] ?? null) : null)) ? ("checked=\"checked\"") : (""));
            echo "
                                                       value=\"1\" id=\"input_iframe\"/>
                                            </div>
                                        </div>
                                        <div id=\"iframe-img\" class=\"form-group  ";
            // line 391
            echo (((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["setting"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["iframe"] ?? null) : null)) ? ("hide") : (""));
            echo "\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"select_return_url\">";
            // line 393
            echo ($context["entry_background_img"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <a href=\"\" id=\"thumb-image\" data-toggle=\"image\"
                                                   class=\"img-thumbnail\"><img
                                                            src=\"";
            // line 397
            echo ($context["background_img_thumb"] ?? null);
            echo "\" alt=\"\" title=\"\"/></a>
                                                <input type=\"hidden\" name=\"";
            // line 398
            echo ($context["codename"] ?? null);
            echo "_setting[background_img]\"
                                                       value=\"";
            // line 399
            echo (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["setting"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["background_img"] ?? null) : null);
            echo "\" id=\"input-image\"/>
                                            </div>
                                        </div>
                                        <div class=\"bs-callout bs-callout-warning\">";
            // line 402
            echo ($context["entry_fields_sort_order"] ?? null);
            echo "</div>
                                        <div class=\"sortable tour-step tour-step-three\">
                                            ";
            // line 404
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = ($context["setting"] ?? null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["fields"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 405
                echo "                                                <div class=\"panel panel-default clearfix sort-item\"
                                                     data-sort=\"";
                // line 406
                echo (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["field"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["sort_order"] ?? null) : null);
                echo "\">
                                                    <div class=\"panel-heading\">

                                                        <input type=\"hidden\"
                                                               name=\"";
                // line 410
                echo ($context["codename"] ?? null);
                echo "_setting[fields][";
                echo (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["field"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["id"] ?? null) : null);
                echo "][id]\"
                                                               value=\"";
                // line 411
                echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["field"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["id"] ?? null) : null);
                echo "\"/>
                                                        <input type=\"hidden\"
                                                               name=\"";
                // line 413
                echo ($context["codename"] ?? null);
                echo "_setting[fields][";
                echo (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["field"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["id"] ?? null) : null);
                echo "][enabled]\"
                                                               value=\"0\"/>
                                                        <input type=\"hidden\"
                                                               name=\"";
                // line 416
                echo ($context["codename"] ?? null);
                echo "_setting[fields][";
                echo (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["field"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["id"] ?? null) : null);
                echo "][required]\"
                                                               value=\"0\"/>
                                                        <input type=\"hidden\"
                                                               name=\"";
                // line 419
                echo ($context["codename"] ?? null);
                echo "_setting[fields][";
                echo (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["field"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["id"] ?? null) : null);
                echo "][sort_order]\"
                                                               class=\"sort-value\"
                                                               value=\"";
                // line 421
                echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = $context["field"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["sort_order"] ?? null) : null);
                echo "\"/>
                                                        <input type=\"hidden\"
                                                               name=\"";
                // line 423
                echo ($context["codename"] ?? null);
                echo "_setting[fields][";
                echo (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = $context["field"]) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["id"] ?? null) : null);
                echo "][type]\"
                                                               value=\"";
                // line 424
                echo (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["field"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["type"] ?? null) : null);
                echo "\"/>

                                                        <label class=\"col-sm-3\"
                                                               for=\"";
                // line 427
                echo ($context["codename"] ?? null);
                echo "_setting_fields_";
                echo (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = $context["field"]) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["id"] ?? null) : null);
                echo "_enabled\">
                                                            <span class=\"fa fa-bars\"></span>
                                                            ";
                // line 429
                echo twig_get_attribute($this->env, $this->source, $context, ("text_" . (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = $context["field"]) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["id"] ?? null) : null)), [], "any", false, false, false, 429);
                echo "</label>

                                                        <div class=\"col-sm-5\">
                                                            <input type=\"checkbox\"
                                                                   class=\"col-sm-3\"
                                                                   name=\"";
                // line 434
                echo ($context["codename"] ?? null);
                echo "_setting[fields][";
                echo (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = $context["field"]) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["id"] ?? null) : null);
                echo "][enabled]\" ";
                echo (((($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = $context["field"]) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["enabled"] ?? null) : null)) ? ("checked=\"checked\"") : (""));
                echo "
                                                                   value=\"1\"
                                                                   data-label-text=\"";
                // line 436
                echo ($context["text_display"] ?? null);
                echo "\"
                                                                   id=\"";
                // line 437
                echo ($context["codename"] ?? null);
                echo "_setting_fields_";
                echo (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = $context["field"]) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["id"] ?? null) : null);
                echo "_enabled\"/>
                                                            <input type=\"checkbox\"
                                                                   class=\"col-sm-3\"
                                                                   name=\"";
                // line 440
                echo ($context["codename"] ?? null);
                echo "_setting[fields][";
                echo (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = $context["field"]) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["id"] ?? null) : null);
                echo "][required]\" ";
                echo (((($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = $context["field"]) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["required"] ?? null) : null)) ? ("checked=\"checked\"") : (""));
                echo "
                                                                   value=\"1\"
                                                                   data-label-text=\"";
                // line 442
                echo ($context["text_required"] ?? null);
                echo "\"
                                                                   id=\"";
                // line 443
                echo ($context["codename"] ?? null);
                echo "_setting_fields_";
                echo (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = $context["field"]) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["id"] ?? null) : null);
                echo "_required\"/>
                                                        </div>

                                                        <div class=\"col-sm-4\">
                                                            ";
                // line 447
                if (twig_get_attribute($this->env, $this->source, $context["field"], "mask", [], "array", true, true, false, 447)) {
                    // line 448
                    echo "                                                                <div class=\"input-group clearfix\">
                                                                    <label class=\"input-group-addon\">
                                                                        ";
                    // line 450
                    echo ($context["text_mask"] ?? null);
                    echo "
                                                                    </label>
                                                                    <input type=\"text\"
                                                                           name=\"";
                    // line 453
                    echo ($context["codename"] ?? null);
                    echo "_setting[fields][";
                    echo (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = $context["field"]) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["id"] ?? null) : null);
                    echo "][mask]\"
                                                                           value=\"";
                    // line 454
                    echo (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = $context["field"]) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["mask"] ?? null) : null);
                    echo "\"
                                                                           class=\"form-control\">
                                                                </div>
                                                            ";
                }
                // line 458
                echo "                                                        </div>
                                                    </div>
                                                </div>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 462
            echo "                                        </div>
                                    </div>

                                    <div class=\"tab-pane \" id=\"instruction\">
                                        <div class=\"tab-body\">
                                            <h1>";
            // line 467
            echo ($context["text_instruction_social_login"] ?? null);
            echo "</h1>

                                            <div>
                                                <!-- Nav tabs -->
                                                <ul class=\"nav nav-tabs\" role=\"tablist\">

                                                    <li role=\"presentation\" class=\"instruction-provider active\">
                                                        <a href=\"#instruction_";
            // line 474
            echo ($context["text_instruction"] ?? null);
            echo "\"
                                                           aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">
                                                            ";
            // line 476
            echo ($context["text_instruction"] ?? null);
            echo "
                                                        </a>
                                                    </li>

                                                    ";
            // line 480
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = ($context["setting"] ?? null)) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["providers"] ?? null) : null));
            foreach ($context['_seq'] as $context["key"] => $context["provider"]) {
                // line 481
                echo "                                                        <li role=\"presentation\" class=\"instruction-provider\"><a
                                                                    href=\"#instruction_";
                // line 482
                echo $context["key"];
                echo "\" aria-controls=\"home\"
                                                                    role=\"tab\" data-toggle=\"tab\"
                                                                    data-href=\"";
                // line 484
                echo (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = $context["provider"]) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["documentation_url"] ?? null) : null);
                echo "\">";
                echo $context["key"];
                echo "</a>
                                                        </li>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['provider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 487
            echo "                                                </ul>

                                                <!-- Tab panes -->
                                                <div class=\"tab-content\">

                                                    <div role=\"tabpanel\" class=\"tab-pane active\"
                                                         id=\"instruction_";
            // line 493
            echo ($context["text_instruction"] ?? null);
            echo "\">
                                                        <div class=\"instruction_full\"></div>
                                                    </div>

                                                    ";
            // line 497
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = ($context["setting"] ?? null)) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["providers"] ?? null) : null));
            foreach ($context['_seq'] as $context["key"] => $context["provider"]) {
                // line 498
                echo "                                                        <div role=\"tabpanel\" class=\"tab-pane\"
                                                             id=\"instruction_";
                // line 499
                echo $context["key"];
                echo "\">...
                                                        </div>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['provider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 502
            echo "                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class=\"tab-pane\" id=\"debug\">
                                        <div class=\"tab-body\">
                                            <div class=\"bs-callout bs-callout-warning\">";
            // line 510
            echo ($context["text_debug_file_into"] ?? null);
            echo "</div>
                                            <textarea wrap=\"off\" rows=\"15\" readonly=\"readonly\"
                                                      class=\"form-control\">";
            // line 512
            echo ($context["debug"] ?? null);
            echo "</textarea>
                                            <br/>
                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_debug_file\">";
            // line 516
            echo ($context["entry_debug_file"] ?? null);
            echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"text\" id=\"input_debug_file\"
                                                           name=\"";
            // line 519
            echo ($context["codename"] ?? null);
            echo "_setting[debug_file]\"
                                                           value=\"";
            // line 520
            echo (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = ($context["setting"] ?? null)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["debug_file"] ?? null) : null);
            echo "\" class=\"form-control\"/>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <div class=\"col-sm-10 col-sm-offset-2\">
                                                    <a class=\"btn btn-danger\"
                                                       id=\"clear_debug_file\"
                                                       data-value=\"";
            // line 527
            echo ($context["clear_debug_file"] ?? null);
            echo "\">";
            echo ($context["button_clear_debug_file"] ?? null);
            echo "</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div style=\"text-align: center; padding: 30px;\">";
            // line 534
            echo ($context["text_powered_by"] ?? null);
            echo "</div>
                            </form>
                        </div>
                    ";
        } else {
            // line 538
            echo "                        ";
            echo ($context["text_setup"] ?? null);
            echo "
                    ";
        }
        // line 540
        echo "                </div>
                <div class=\"info-window\">
                    <div class=\"info-window-wrap\">
                        <div class=\"info-window-block\">
                            <div class=\"info-window-close\"><i class=\"fa fa-close\"></i></div>
                            <div class=\"info-window-description\"></div>
                        </div>
                    </div>
                </div>
                ";
        // line 549
        if ( !($context["pro"] ?? null)) {
            // line 550
            echo "            </div>
            <div class=\"col-sm-3\">
                <div class=\"d_shopunity_widget\"></div>
                <script src=\"view/javascript/d_shopunity/d_shopunity_widget.js\" type=\"text/javascript\"></script>
                <script type=\"text/javascript\">
                    setTimeout(function () {
                        var d_shopunity_widget1 = jQuery.extend(true, {}, d_shopunity_widget);
                        d_shopunity_widget1.init({
                            class: '.d_shopunity_widget',
                            token: '";
            // line 559
            echo ($context["token"] ?? null);
            echo "',
                            extension_id: 'd_social_login_pro'
                        })
                    }, 1000);
                </script>
            </div>
        </div>
        ";
        }
        // line 567
        echo "
    </div>
</div>

<style>
    .instruction-provider.active {
        background: #d6d8e2;
    }

    /*.instruction-provider.active > a:after {*/
    /*    content: \"\";*/
    /*    position: absolute;*/
    /*    display: block;*/
    /*    background-color: #3573ee;*/
    /*    width: 25px;*/
    /*    height: 3px;*/
    /*    bottom: 10px;*/
    /*    left: 50%;*/
    /*    transform: translateX(-50%);*/
    /*}*/
</style>

<script type=\"text/javascript\">
    \$(document).on('click', '.setup', function () {
        window.location.href = '";
        // line 591
        echo ($context["setup_link"] ?? null);
        echo "';
    });

    \$(function () {
        ";
        // line 595
        if (($context["setup"] ?? null)) {
            // line 596
            echo "
        var tour = new Tour({
            //storage : false
        });

        tour.addSteps([
            {
                element: \"\",
                placement: \"top\",
                orphan: true,
                backdrop: true,
                title: \"";
            // line 607
            echo ($context["text_tour_title_1"] ?? null);
            echo "\",
                content: \"";
            // line 608
            echo ($context["text_tour_content_1"] ?? null);
            echo "\",
                template: \"<div class='popover tour'><div class='arrow'></div><h3 class='popover-title'></h3><div class='popover-content'></div><div class='popover-navigation'><button class='btn btn-default' data-role='end'>";
            // line 609
            echo ($context["text_end"] ?? null);
            echo "</button><button class='btn btn-success' data-role='next'>";
            echo ($context["text_start"] ?? null);
            echo "</button></div></div>\"

            },
            {
                element: \".tour-step.tour-step-one\",
                placement: \"auto bottom\",
                backdrop: true,
                title: \"";
            // line 616
            echo ($context["text_tour_title_2"] ?? null);
            echo "\",
                content: \"";
            // line 617
            echo ($context["text_tour_content_2"] ?? null);
            echo "\"

            },
            {
                element: \"#tab_Google .status\",
                placement: \"auto top\",
                backdrop: true,
                backdropPadding: 15,
                title: \"";
            // line 625
            echo ($context["text_tour_title_3"] ?? null);
            echo "\",
                content: \"";
            // line 626
            echo ($context["text_tour_content_3"] ?? null);
            echo "\",
                onNext: function (tour) {
                    \$('#Google').collapse('show')
                }
            },
            {
                element: \"#Google .provider-design\",
                placement: \"top\",
                backdrop: true,
                backdropPadding: 15,
                title: \"";
            // line 636
            echo ($context["text_tour_title_4"] ?? null);
            echo "\",
                content: \"";
            // line 637
            echo ($context["text_tour_content_4"] ?? null);
            echo "\"
            },
            {
                element: \"#Google .provider-api\",
                placement: \"top\",
                backdrop: true,
                backdropPadding: 15,
                title: \"";
            // line 644
            echo ($context["text_tour_title_5"] ?? null);
            echo "\",
                content: \"";
            // line 645
            echo ($context["text_tour_content_5"] ?? null);
            echo "\",
                onNext: function (tour) {
                    \$('.nav-tabs li:eq(1) a').tab('show')
                }
            },
            {
                element: \"#tab_setting\",
                placement: \"top\",
                backdrop: true,
                backdropPadding: 15,
                title: \"";
            // line 655
            echo ($context["text_tour_title_6"] ?? null);
            echo "\",
                content: \"";
            // line 656
            echo ($context["text_tour_content_6"] ?? null);
            echo "\",
                onNext: function (tour) {
                    \$('.nav-tabs li:eq(2) a').tab('show')
                }
            },
            {
                element: \"#registration_field\",
                placement: \"top\",
                backdrop: true,
                backdropPadding: 15,
                title: \"";
            // line 666
            echo ($context["text_tour_title_7"] ?? null);
            echo "\",
                content: \"";
            // line 667
            echo ($context["text_tour_content_7"] ?? null);
            echo "\",
                onNext: function (tour) {
                    \$('.nav-tabs li:eq(3) a').tab('show')
                }
            },
            {
                element: \"#instruction\",
                placement: \"top\",
                backdrop: true,
                backdropPadding: 15,
                title: \"";
            // line 677
            echo ($context["text_tour_title_8"] ?? null);
            echo "\",
                content: \"";
            // line 678
            echo ($context["text_tour_content_8"] ?? null);
            echo "\",
                onNext: function (tour) {
                    \$('.nav-tabs li:eq(0) a').tab('show')
                }
            },
            {
                element: \"\",
                placement: \"top\",
                orphan: true,
                backdrop: true,
                title: \"";
            // line 688
            echo ($context["text_tour_title_9"] ?? null);
            echo "\",
                content: \"";
            // line 689
            echo ($context["text_tour_content_9"] ?? null);
            echo "\"
            }

        ]);

        // Initialize the tour
        tour.init();

        // Start the tour
        tour.start();

        ";
        }
        // line 701
        echo "
        // sorting fields
        \$('#social_login .sortable > .sort-item').tsort({attr: 'data-sort'});
        \$('#registration_field .sortable > .sort-item').tsort({attr: 'data-sort'});

        \$(\"[type='checkbox']\").bootstrapSwitch({
            'onColor': 'success',
            'onText': 'YES',
            'offText': 'NO',
        });
        \$(\"#input_debug_mode\").on('switchChange.bootstrapSwitch', function (event, state) {
            if (state) {
                \$('#debug_btn').removeClass('hide');
            } else {
                \$('#debug_btn').addClass('hide');
            }
        });
        \$(\"#input_iframe\").on('switchChange.bootstrapSwitch', function (event, state) {
            if (!state) {
                \$('#iframe-img').removeClass('hide');
            } else {
                \$('#iframe-img').addClass('hide');
            }
        });

        \$(\".sortable\").sortable({
            itemPath: '',
            itemSelector: '.sort-item',
            distance: '1',
            pullPlaceholder: true,
            placeholder: '<div class=\"clearfix placeholder\"> </div>',
            onDragStart: function (item, container, _super) {
                var offset = item.offset(),
                    pointer = container.rootGroup.pointer;

                adjustment = {
                    left: pointer.left - offset.left,
                    top: pointer.top - offset.top
                };

                _super(item, container);
            },
            onDrag: function (item, position) {
                item.css({
                    left: position.left - adjustment.left,
                    top: position.top - adjustment.top
                });
            },
            onDrop: function (item, container, _super) {
                item.closest('.sortable').find('.sort-item').each(function (i, row) {
                    console.log(\$(row).find('.sort-value'));
                    \$(row).find('.sort-value').val(i);

                });

                _super(item);
            }
        });
    });

    var info_window = {
        'item': new Array(),
        'current_url': ''
    }

    \$.each(\$('.info-window-item'), function (key, value) {
        var url = \$(this).attr('data-href');

        if (url) {
            \$.getJSON(url + '?format=json&callback=?', function (data) {
                info_window.item[url] = data['description'];
            });
        }
    });

    \$('.info-window-item').on('click', function () {
        var url = \$(this).attr('data-href');
        if (url == info_window.current_url) {
            info_window.current_url = '';
            \$('.info-window .info-window-description').html('');
            \$('.info-window').removeClass('resized');
            \$('.panel-resizable').removeClass('resized');
        } else {
            info_window.current_url = url;
            \$('.info-window .info-window-description').html(info_window.item[url]);
            \$('.panel-resizable').addClass('resized');
            \$('.info-window').addClass('resized');
        }
    });

    \$('.instruction-provider').on('click', function () {
        var url = \$(this).find('a').attr('data-href');
        var id = \$(this).find('a').attr('href');
        var active = \$(this).hasClass('active') && \$(id).html();
        if (active) {
            \$(id).html('');
        } else {
            \$(id).html(info_window.item[url]);
        }

    });

    \$('.info-window .info-window-close').on('click', function () {
        info_window.current_url = '';
        \$('.info-window .info-window-description').html('');
        \$('.info-window').removeClass('resized');
        \$('.panel-resizable').removeClass('resized');
    });

    \$(function () {
        \$.getJSON('https://doc.99logins.com/documentation?format=json&callback=?', function (data) {
            \$('.instruction_full').html(data['description']);
        });
        \$('body').on('click', '#save_and_stay', function () {
            \$.ajax({
                type: 'post',
                url: \$('#form').attr('action') + '&save',
                data: \$('#form').serialize(),
                beforeSend: function () {
                    \$('#form').fadeTo('slow', 0.5);
                },
                complete: function () {
                    \$('#form').fadeTo('slow', 1);
                },
                success: function (response) {
                    //console.log(response);
                }
            });
        });

        \$('body').on('click', '#clear_debug_file', function (e) {
            console.log(e)
            \$.ajax({
                url: e.currentTarget.dataset.value,
                type: 'post',
                dataType: 'json',
                data: 'debug_file=";
        // line 837
        echo ($context["debug_file"] ?? null);
        echo "',
                beforeSend: function () {
                    \$('#form').fadeTo('slow', 0.5);
                },
                complete: function () {
                    \$('#form').fadeTo('slow', 1);
                },
                success: function (json) {
                    \$('.alert').remove();
                    if (json['error']) {
                        \$('#debug .tab-body').prepend('<div class=\"alert alert-danger\">' + json['error'] + '</div>');
                    }
                    if (json['success']) {
                        \$('#debug .tab-body').prepend('<div class=\"alert alert-success\">' + json['success'] + '</div>');
                        \$('#debug textarea').empty();
                    }
                },
            }).error(function (xth, e) {
                alert(e)
            });
        });
    });
</script>
";
        // line 860
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/d_social_login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1666 => 860,  1640 => 837,  1502 => 701,  1487 => 689,  1483 => 688,  1470 => 678,  1466 => 677,  1453 => 667,  1449 => 666,  1436 => 656,  1432 => 655,  1419 => 645,  1415 => 644,  1405 => 637,  1401 => 636,  1388 => 626,  1384 => 625,  1373 => 617,  1369 => 616,  1357 => 609,  1353 => 608,  1349 => 607,  1336 => 596,  1334 => 595,  1327 => 591,  1301 => 567,  1290 => 559,  1279 => 550,  1277 => 549,  1266 => 540,  1260 => 538,  1253 => 534,  1241 => 527,  1231 => 520,  1227 => 519,  1221 => 516,  1214 => 512,  1209 => 510,  1199 => 502,  1190 => 499,  1187 => 498,  1183 => 497,  1176 => 493,  1168 => 487,  1157 => 484,  1152 => 482,  1149 => 481,  1145 => 480,  1138 => 476,  1133 => 474,  1123 => 467,  1116 => 462,  1107 => 458,  1100 => 454,  1094 => 453,  1088 => 450,  1084 => 448,  1082 => 447,  1073 => 443,  1069 => 442,  1060 => 440,  1052 => 437,  1048 => 436,  1039 => 434,  1031 => 429,  1024 => 427,  1018 => 424,  1012 => 423,  1007 => 421,  1000 => 419,  992 => 416,  984 => 413,  979 => 411,  973 => 410,  966 => 406,  963 => 405,  959 => 404,  954 => 402,  948 => 399,  944 => 398,  940 => 397,  933 => 393,  928 => 391,  919 => 387,  914 => 385,  909 => 383,  894 => 373,  888 => 370,  883 => 368,  875 => 363,  871 => 362,  867 => 361,  859 => 358,  849 => 351,  843 => 348,  832 => 342,  827 => 340,  822 => 338,  811 => 332,  805 => 329,  800 => 327,  793 => 322,  780 => 320,  776 => 319,  771 => 317,  765 => 314,  758 => 309,  746 => 307,  741 => 306,  737 => 305,  733 => 304,  728 => 302,  721 => 297,  712 => 293,  706 => 292,  700 => 290,  698 => 289,  692 => 288,  686 => 285,  682 => 283,  678 => 282,  671 => 280,  662 => 273,  656 => 272,  648 => 270,  640 => 269,  637 => 268,  632 => 267,  628 => 266,  622 => 263,  616 => 260,  606 => 252,  590 => 242,  585 => 240,  581 => 238,  573 => 233,  567 => 232,  563 => 231,  557 => 228,  553 => 226,  551 => 225,  548 => 224,  537 => 219,  529 => 218,  525 => 217,  519 => 214,  515 => 212,  511 => 211,  507 => 210,  502 => 208,  496 => 205,  489 => 203,  478 => 195,  471 => 193,  465 => 190,  457 => 185,  450 => 183,  444 => 180,  436 => 175,  429 => 173,  423 => 170,  416 => 166,  410 => 163,  400 => 158,  391 => 156,  386 => 154,  381 => 152,  376 => 150,  367 => 144,  363 => 143,  356 => 139,  352 => 138,  345 => 134,  340 => 132,  333 => 128,  327 => 127,  319 => 124,  314 => 122,  307 => 120,  302 => 118,  296 => 117,  291 => 115,  287 => 113,  283 => 112,  278 => 110,  271 => 106,  267 => 105,  263 => 104,  258 => 102,  246 => 93,  241 => 91,  235 => 88,  228 => 84,  221 => 80,  214 => 76,  206 => 71,  203 => 70,  201 => 69,  196 => 67,  191 => 64,  186 => 61,  184 => 60,  181 => 59,  173 => 55,  170 => 54,  162 => 50,  159 => 49,  156 => 48,  148 => 43,  144 => 42,  136 => 36,  133 => 35,  127 => 33,  124 => 32,  122 => 31,  115 => 26,  104 => 24,  100 => 23,  93 => 21,  86 => 19,  81 => 17,  75 => 15,  71 => 13,  58 => 11,  54 => 10,  48 => 8,  46 => 7,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/d_social_login.twig", "");
    }
}
