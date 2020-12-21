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

/* journal3/template/common/footer.twig */
class __TwigTemplate_4fb429e1b758ea86ba90e18d06253a7e2e1a552f722428c97ca42960739450a3 extends \Twig\Template
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
        if ( !(isset($context["j3"]) || array_key_exists("j3", $context))) {
            // line 2
            echo "  <style>
    body {
      display: none !important;
    }
  </style>
  <script>
    window.location = 'index.php?route=journal3/startup/error';
  </script>
";
        }
        // line 11
        if (($context["display"] ?? null)) {
            // line 12
            echo "<style>
  footer {
    display: none !important;
  }
</style>
";
        }
        // line 18
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "bottom"], "method", false, false, false, 18);
        echo "

";
        // line 20
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 20), "isPopup", [], "method", false, false, false, 20)) {
            // line 21
            echo "
<footer>
  ";
            // line 23
            echo ($context["footer_menu"] ?? null);
            echo "
</footer>

";
        }
        // line 27
        echo "</div><!-- .site-wrapper -->

";
        // line 29
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "bottom_menu"], "method", false, false, false, 29);
        echo "

";
        // line 31
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "side_menu"], "method", false, false, false, 31);
        echo "

";
        // line 33
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "notification"], "method", false, false, false, 33);
        echo "

";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 35), "getScripts", [0 => "footer"], "method", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 36
            echo "<script src=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 36), "staticUrl", [0 => $context["script"], 1 => false], "method", false, false, false, 36);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 36), "get", [0 => "performanceJSDefer"], "method", false, false, false, 36)) {
                echo " defer ";
            }
            echo "></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "canLiveReload", [], "method", false, false, false, 39)) {
            // line 40
            echo "<script src=\"http://";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "getHost", [], "method", false, false, false, 40);
            echo ":35729/livereload.js?snipver=1\" async></script>
";
        }
        // line 42
        echo "
";
        // line 43
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 43), "get", [0 => "customJS"], "method", false, false, false, 43)) {
            // line 44
            echo "<script type=\"text/javascript\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 44), "get", [0 => "customJS"], "method", false, false, false, 44);
            echo "</script>
";
        }
        // line 46
        echo "
";
        // line 47
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 47), "isPopup", [], "method", false, false, false, 47) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 47), "get", [0 => "customCodeFooter"], "method", false, false, false, 47))) {
            // line 48
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 48), "get", [0 => "customCodeFooter"], "method", false, false, false, 48);
            echo "
";
        }
        // line 50
        echo "
";
        // line 51
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 51), "isPopup", [], "method", false, false, false, 51) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 51), "get", [0 => "scrollTop"], "method", false, false, false, 51))) {
            // line 52
            echo "<div class=\"scroll-top\">
  <i class=\"fa fa-angle-up\"></i>
</div>
";
        }
        // line 56
        echo "
";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 57), "hasFonts", [], "method", false, false, false, 57) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 57), "get", [0 => "performanceAsyncFontsStatus"], "method", false, false, false, 57))) {
            // line 58
            echo "  <script>
    (function () {
      var wf = document.createElement('script');
      wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
  </script>
";
        }
        // line 69
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 69,  162 => 58,  160 => 57,  157 => 56,  151 => 52,  149 => 51,  146 => 50,  141 => 48,  139 => 47,  136 => 46,  130 => 44,  128 => 43,  125 => 42,  119 => 40,  117 => 39,  114 => 38,  101 => 36,  97 => 35,  92 => 33,  87 => 31,  82 => 29,  78 => 27,  71 => 23,  67 => 21,  65 => 20,  60 => 18,  52 => 12,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/footer.twig", "");
    }
}
