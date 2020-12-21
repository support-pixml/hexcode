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
class __TwigTemplate_15cbd19724bc1626dc9e012536e6db6e6910f247ebe6ca1af871e42cdf0d47a2 extends \Twig\Template
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
        echo "
";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "bottom"], "method", false, false, false, 12);
        echo "

";
        // line 14
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 14), "isPopup", [], "method", false, false, false, 14)) {
            // line 15
            echo "
<footer>
  ";
            // line 17
            echo ($context["footer_menu"] ?? null);
            echo "
</footer>

";
        }
        // line 21
        echo "</div><!-- .site-wrapper -->

";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "bottom_menu"], "method", false, false, false, 23);
        echo "

";
        // line 25
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "side_menu"], "method", false, false, false, 25);
        echo "

";
        // line 27
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "notification"], "method", false, false, false, 27);
        echo "

";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 29), "getScripts", [0 => "footer"], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 30
            echo "<script src=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 30), "staticUrl", [0 => $context["script"], 1 => false], "method", false, false, false, 30);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 30), "get", [0 => "performanceJSDefer"], "method", false, false, false, 30)) {
                echo " defer ";
            }
            echo "></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "canLiveReload", [], "method", false, false, false, 33)) {
            // line 34
            echo "<script src=\"http://";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "getHost", [], "method", false, false, false, 34);
            echo ":35729/livereload.js?snipver=1\" async></script>
";
        }
        // line 36
        echo "
";
        // line 37
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 37), "get", [0 => "customJS"], "method", false, false, false, 37)) {
            // line 38
            echo "<script type=\"text/javascript\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 38), "get", [0 => "customJS"], "method", false, false, false, 38);
            echo "</script>
";
        }
        // line 40
        echo "
";
        // line 41
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 41), "isPopup", [], "method", false, false, false, 41) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 41), "get", [0 => "customCodeFooter"], "method", false, false, false, 41))) {
            // line 42
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 42), "get", [0 => "customCodeFooter"], "method", false, false, false, 42);
            echo "
";
        }
        // line 44
        echo "
";
        // line 45
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 45), "isPopup", [], "method", false, false, false, 45) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 45), "get", [0 => "scrollTop"], "method", false, false, false, 45))) {
            // line 46
            echo "<div class=\"scroll-top\">
  <i class=\"fa fa-angle-up\"></i>
</div>
";
        }
        // line 50
        echo "
";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 51), "hasFonts", [], "method", false, false, false, 51) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 51), "get", [0 => "performanceAsyncFontsStatus"], "method", false, false, false, 51))) {
            // line 52
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
        // line 63
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
        return array (  168 => 63,  155 => 52,  153 => 51,  150 => 50,  144 => 46,  142 => 45,  139 => 44,  134 => 42,  132 => 41,  129 => 40,  123 => 38,  121 => 37,  118 => 36,  112 => 34,  110 => 33,  107 => 32,  94 => 30,  90 => 29,  85 => 27,  80 => 25,  75 => 23,  71 => 21,  64 => 17,  60 => 15,  58 => 14,  53 => 12,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/footer.twig", "");
    }
}
