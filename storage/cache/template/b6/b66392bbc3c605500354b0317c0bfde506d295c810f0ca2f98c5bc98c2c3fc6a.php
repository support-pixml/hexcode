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

/* extension/module/order_tracking.twig */
class __TwigTemplate_2ee4b23350dd37cf29cdcc3f3892955259bead29645b6980f65497a026b77464 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-order_tracking\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 29
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_order_tracking_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 32
        if (($context["module_order_tracking_status"] ?? null)) {
            // line 33
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 34
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 36
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 37
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 39
        echo "              </select>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 44
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_order_tracking_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      <option value=\"\">";
        // line 47
        echo ($context["text_all"] ?? null);
        echo "</option>
                      ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 49
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 49) == ($context["module_order_tracking_order_status_id"] ?? null))) {
                // line 50
                echo "                      
                      <option value=\"";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 51);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 51);
                echo "</option>
                      
                      ";
            } else {
                // line 54
                echo "                      
                      <option value=\"";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 55);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 55);
                echo "</option>
                      
                      ";
            }
            // line 58
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    
                    </select>
            </div>
          </div>

          <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-module_order_tracking_custom_html\">";
        // line 65
        echo ($context["entry_custom_html"] ?? null);
        echo " </label>
              <div class=\"col-sm-10\">
                ";
        // line 67
        echo ($context["entry_custom_html_help"] ?? null);
        echo "
                <textarea name=\"module_order_tracking_custom_html\" placeholder=\"";
        // line 68
        echo ($context["entry_custom_html"] ?? null);
        echo "\" id=\"input-module_order_tracking_custom_html\" data-toggle=\"summernote\"  class=\"form-control\">";
        echo ($context["module_order_tracking_custom_html"] ?? null);
        echo "</textarea>
              </div>
            </div>


        </form>
      </div>
    </div>
  </div>
</div>
<link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
<link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script> 
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script> 
";
        // line 87
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/order_tracking.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 87,  204 => 68,  200 => 67,  195 => 65,  187 => 59,  181 => 58,  173 => 55,  170 => 54,  162 => 51,  159 => 50,  156 => 49,  152 => 48,  148 => 47,  142 => 44,  135 => 39,  130 => 37,  125 => 36,  120 => 34,  115 => 33,  113 => 32,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/order_tracking.twig", "");
    }
}
