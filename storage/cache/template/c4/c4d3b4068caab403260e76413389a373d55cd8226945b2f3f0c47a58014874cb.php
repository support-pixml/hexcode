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

/* journal3/template/journal3/checkout/coupon_voucher_reward.twig */
class __TwigTemplate_e269a187e5c3c1675bb4aed7f19731506c4c5859800091d2f3e52fc4825430fc extends \Twig\Template
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
        echo "<div class=\"checkout-section section-cvr\" v-if=\"coupon_status || voucher_status || (reward_status && customer_id)\">
  <div class=\"title section-title\">";
        // line 2
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 2), "get", [0 => "sectionTitleCouponVoucherReward"], "method", false, false, false, 2);
        echo "</div>

  <div class=\"section-body\">
    <div class=\"form-group form-coupon\" v-if=\"coupon_status\">
      <label class=\"control-label\" for=\"input-coupon\">";
        // line 6
        echo ($context["entry_coupon"] ?? null);
        echo "</label>
      <div class=\"input-group\">
        <input type=\"text\" v-model=\"coupon\" placeholder=\"";
        // line 8
        echo ($context["entry_coupon"] ?? null);
        echo "\" id=\"input-coupon\" class=\"form-control\"/>
        <span class=\"input-group-btn\">
              <button type=\"button\" v-on:click=\"save()\" data-loading-text=\"";
        // line 10
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><span>";
        echo ($context["button_submit"] ?? null);
        echo "</span></button>
            </span>
      </div>
      <span class=\"text-danger\" v-if=\"error && error.coupon\" v-html=\"error.coupon\"></span>
    </div>

    <div class=\"form-group form-voucher\" v-if=\"voucher_status\">
      <label class=\"control-label\" for=\"input-voucher\">";
        // line 17
        echo ($context["entry_voucher"] ?? null);
        echo "</label>
      <div class=\"input-group\">
        <input type=\"text\" v-model=\"voucher\" placeholder=\"";
        // line 19
        echo ($context["entry_voucher"] ?? null);
        echo "\" id=\"input-voucher\" class=\"form-control\"/>
        <span class=\"input-group-btn\">
              <button type=\"button\" v-on:click=\"save()\" data-loading-text=\"";
        // line 21
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><span>";
        echo ($context["button_submit"] ?? null);
        echo "</span></button>
            </span>
      </div>
      <span class=\"text-danger\" v-if=\"error && error.voucher\" v-html=\"error.voucher\"></span>
    </div>

    <div class=\"form-group form-reward\" v-if=\"reward_status && customer_id\">
      <label class=\"control-label\" for=\"input-reward\">";
        // line 28
        echo ($context["entry_reward"] ?? null);
        echo "</label>
      <div class=\"input-group\">
        <input type=\"text\" v-model=\"reward\" placeholder=\"";
        // line 30
        echo ($context["entry_reward"] ?? null);
        echo "\" id=\"input-reward\" class=\"form-control\"/>
        <span class=\"input-group-btn\">
              <button type=\"button\" v-on:click=\"save()\" data-loading-text=\"";
        // line 32
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><span>";
        echo ($context["button_submit"] ?? null);
        echo "</span></button>
            </span>
      </div>
      <span class=\"text-danger\" v-if=\"error && error.reward\" v-html=\"error.reward\"></span>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/checkout/coupon_voucher_reward.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 32,  96 => 30,  91 => 28,  79 => 21,  74 => 19,  69 => 17,  57 => 10,  52 => 8,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/checkout/coupon_voucher_reward.twig", "");
    }
}
