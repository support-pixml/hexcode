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

/* default/template/extension/module/oneall_widget.twig */
class __TwigTemplate_e81e937498214a5d2d19e111d3bccd90b1e05c084e6fceae46886738d6cb6772 extends \Twig\Template
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
        $context["oasl_container"] = ("oneall_social_login_" . twig_random($this->env, 99999, 9999999));
        // line 3
        echo "
";
        // line 5
        if ((twig_test_empty(($context["oasl_user_is_logged"] ?? null)) &&  !twig_test_empty(($context["oasl_subdomain"] ?? null)))) {
            // line 6
            echo "\t
\t";
            // line 7
            if ( !twig_test_empty(($context["oasl_heading_title"] ?? null))) {
                // line 8
                echo "\t\t<!-- <h3> ";
                echo ($context["oasl_heading_title"] ?? null);
                echo " </h3> -->
\t";
            }
            // line 9
            echo "                   
\t 

\t";
            // line 12
            if ((($context["oasl_display_modal"] ?? null) != "0")) {
                // line 13
                echo "\t\t<a id=\"";
                echo ($context["oasl_container"] ?? null);
                echo "\" class=\"button\">";
                echo ($context["oasl_login_button"] ?? null);
                echo "</a>
\t";
            } else {
                // line 14
                echo "  
\t\t<div id=\"";
                // line 15
                echo ($context["oasl_container"] ?? null);
                echo "\"></div>
\t";
            }
            // line 16
            echo "  

\t";
            // line 19
            echo "\t<script type='text/javascript'>
\t\t/* OneAll Social Login - http://www.oneall.com/ */
\t\tvar _oneall = _oneall || [];
\t\t_oneall.push(['social_login', 'set_providers', ['";
            // line 22
            echo ($context["oasl_providers"] ?? null);
            echo "']]);
\t\t_oneall.push(['social_login', 'set_callback_uri', '";
            // line 23
            echo ($context["oasl_callback_uri"] ?? null);
            echo "']);
\t\t
\t\t// alert(_oneall);
\t\t
\t\t";
            // line 27
            if ((($context["oasl_display_modal"] ?? null) != "0")) {
                // line 28
                echo "\t\t\t/* Modal Popup */
\t\t\t_oneall.push(['social_login', 'attach_onclick_popup_ui', '";
                // line 29
                echo ($context["oasl_container"] ?? null);
                echo "']);\t\t
\t\t";
            } else {
                // line 30
                echo "  
\t\t\t/* Inline Display */
\t\t\t// _oneall.push(['social_login', 'set_grid_size', 'x', '";
                // line 32
                echo ($context["oasl_grid_size_x"] ?? null);
                echo "']);
\t\t\t// _oneall.push(['social_login', 'set_grid_size', 'y', '";
                // line 33
                echo ($context["oasl_grid_size_y"] ?? null);
                echo "']);
\t\t\t// _oneall.push(['social_login', 'set_custom_css_uri', '";
                // line 34
                echo ($context["oasl_custom_css_uri"] ?? null);
                echo "']);
\t\t\t// _oneall.push(['social_login', 'do_render_ui', '";
                // line 35
                echo ($context["oasl_container"] ?? null);
                echo "']);
\t\t";
            }
            // line 37
            echo "
\t\t// alert(_oneall);
\t\t
\t\t";
            // line 40
            if ((($context["oasl_deferred_loading"] ?? null) != "0")) {
                // line 41
                echo "\t\t\t/* Library Loader */
\t\t\tvar have_oa_lib = (have_oa_lib || false);
\t\t\t(function(){
\t\t\t\tif (!have_oa_lib){
\t\t\t\t\tvar lib = document.createElement('script');
\t\t\t\t\tlib.type = 'text/javascript'; lib.async = true;
\t\t\t\t\tlib.src = '//";
                // line 47
                echo ($context["oasl_subdomain"] ?? null);
                echo ".api.oneall.com/socialize/library.js';
\t\t\t\t\tvar node = document.getElementsByTagName('script')[0];
\t\t\t\t\tnode.parentNode.insertBefore(lib, node); have_oa_lib = true;
\t\t\t\t}
\t\t\t})();
\t\t";
            }
            // line 53
            echo "
\t</script>

";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/oneall_widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 53,  144 => 47,  136 => 41,  134 => 40,  129 => 37,  124 => 35,  120 => 34,  116 => 33,  112 => 32,  108 => 30,  103 => 29,  100 => 28,  98 => 27,  91 => 23,  87 => 22,  82 => 19,  78 => 16,  73 => 15,  70 => 14,  62 => 13,  60 => 12,  55 => 9,  49 => 8,  47 => 7,  44 => 6,  42 => 5,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/oneall_widget.twig", "");
    }
}
