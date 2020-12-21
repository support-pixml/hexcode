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

/* default/template/extension/module/oneall_buttons.twig */
class __TwigTemplate_6c0e6fb45c6241256310fb4c0ae6a4411f168ec5419217ca03bc65e12c9d7c81 extends \Twig\Template
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
        if ((twig_test_empty(($context["oasl_user_is_logged"] ?? null)) &&  !twig_test_empty(($context["oasl_subdomain"] ?? null)))) {
            // line 3
            echo "    ";
            // line 4
            echo "    ";
            $context["oasl_container"] = ("oneall_social_login_" . twig_random($this->env, 99999, 9999999));
            // line 5
            echo "
    <div id=\"";
            // line 6
            echo ($context["oasl_container"] ?? null);
            echo "\"></div>
    <script type='text/javascript'>

        /* OneAll Social Login - http://www.oneall.com/ */
        var _oneall = _oneall || [];
        _oneall.push(['social_login', 'set_providers', ['";
            // line 11
            echo ($context["oasl_providers"] ?? null);
            echo "']]);
        _oneall.push(['social_login', 'set_callback_uri', '";
            // line 12
            echo ($context["oasl_callback_uri"] ?? null);
            echo "']);

        _oneall.push(['social_login', 'set_grid_size', 'x', '";
            // line 14
            echo ($context["oasl_grid_size_x"] ?? null);
            echo "']);
        _oneall.push(['social_login', 'set_grid_size', 'y', '";
            // line 15
            echo ($context["oasl_grid_size_y"] ?? null);
            echo "']);
        _oneall.push(['social_login', 'set_custom_css_uri', '";
            // line 16
            echo ($context["oasl_custom_css_uri"] ?? null);
            echo "']);
        _oneall.push(['social_login', 'do_render_ui', '";
            // line 17
            echo ($context["oasl_container"] ?? null);
            echo "']);


        ";
            // line 20
            if ((($context["oasl_deferred_loading"] ?? null) != "0")) {
                // line 21
                echo "        /* Library Loader */
        var have_oa_lib = (have_oa_lib || false);
        (function () {
            if (!have_oa_lib) {
                var lib = document.createElement('script');
                lib.type = 'text/javascript';
                lib.async = true;
                lib.src = '//";
                // line 28
                echo ($context["oasl_subdomain"] ?? null);
                echo ".api.oneall.com/socialize/library.js';
                var node = document.getElementsByTagName('script')[0];
                node.parentNode.insertBefore(lib, node);
                have_oa_lib = true;
            }
        })();
        ";
            }
            // line 35
            echo "
    </script>

";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/oneall_buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 35,  93 => 28,  84 => 21,  82 => 20,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  59 => 12,  55 => 11,  47 => 6,  44 => 5,  41 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/oneall_buttons.twig", "C:\\xampp\\htdocs\\hexcode\\catalog\\view\\theme\\default\\template\\extension\\module\\oneall_buttons.twig");
    }
}
