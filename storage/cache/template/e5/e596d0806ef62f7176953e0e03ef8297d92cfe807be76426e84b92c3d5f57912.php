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

/* default/template/mail/order_add.twig */
class __TwigTemplate_a6f7ad41afb84e9926c59ba0204c00a86732fc7cc9182be5d969cc2d611a2ae2 extends \Twig\Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd\">
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
<title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
</head>
<body style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000000;\">
<div style=\"width: 680px;\"><a href=\"";
        // line 8
        echo ($context["store_url"] ?? null);
        echo "\" title=\"";
        echo ($context["store_name"] ?? null);
        echo "\"><img src=\"";
        echo ($context["logo"] ?? null);
        echo "\" alt=\"";
        echo ($context["store_name"] ?? null);
        echo "\" style=\"margin-bottom: 20px; border: none;\" /></a>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
        // line 9
        echo ($context["text_greeting"] ?? null);
        echo "</p>
  ";
        // line 10
        if (($context["customer_id"] ?? null)) {
            // line 11
            echo "  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
            echo ($context["text_link"] ?? null);
            echo "</p>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\"><a href=\"";
            // line 12
            echo ($context["link"] ?? null);
            echo "\">";
            echo ($context["link"] ?? null);
            echo "</a></p>
  ";
        }
        // line 14
        echo "  ";
        if (($context["download"] ?? null)) {
            // line 15
            echo "  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
            echo ($context["text_download"] ?? null);
            echo "</p>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\"><a href=\"";
            // line 16
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["download"] ?? null);
            echo "</a></p>
  ";
        }
        // line 18
        echo "  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\" colspan=\"2\">";
        // line 21
        echo ($context["text_order_detail"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"><b>";
        // line 26
        echo ($context["text_order_id"] ?? null);
        echo "</b> ";
        echo ($context["order_id"] ?? null);
        echo "<br />
          <b>";
        // line 27
        echo ($context["text_date_added"] ?? null);
        echo "</b> ";
        echo ($context["date_added"] ?? null);
        echo "<br />
          <b>";
        // line 28
        echo ($context["text_payment_method"] ?? null);
        echo "</b> ";
        echo ($context["payment_method"] ?? null);
        echo "<br />
          ";
        // line 29
        if (($context["shipping_method"] ?? null)) {
            echo " <b>";
            echo ($context["text_shipping_method"] ?? null);
            echo "</b> ";
            echo ($context["shipping_method"] ?? null);
            echo "
          ";
        }
        // line 30
        echo "</td>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"><b>";
        // line 31
        echo ($context["text_email"] ?? null);
        echo "</b> ";
        echo ($context["email"] ?? null);
        echo "<br />
          <b>";
        // line 32
        echo ($context["text_telephone"] ?? null);
        echo "</b> ";
        echo ($context["telephone"] ?? null);
        echo "<br />
          <b>";
        // line 33
        echo ($context["text_ip"] ?? null);
        echo "</b> ";
        echo ($context["ip"] ?? null);
        echo "<br />
          <b>";
        // line 34
        echo ($context["text_order_status"] ?? null);
        echo "</b> ";
        echo ($context["order_status"] ?? null);
        echo "<br /></td>
      </tr>
    </tbody>
  </table>
  ";
        // line 38
        if (($context["comment"] ?? null)) {
            // line 39
            echo "  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
            // line 42
            echo ($context["text_instruction"] ?? null);
            echo "</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 47
            echo ($context["comment"] ?? null);
            echo "</td>
      </tr>
    </tbody>
  </table>
  ";
        }
        // line 52
        echo "  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 55
        echo ($context["text_payment_address"] ?? null);
        echo "</td>
        ";
        // line 56
        if (($context["shipping_address"] ?? null)) {
            // line 57
            echo "        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</td>
        ";
        }
        // line 58
        echo " </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
        // line 62
        echo ($context["payment_address"] ?? null);
        echo "</td>
        ";
        // line 63
        if (($context["shipping_address"] ?? null)) {
            // line 64
            echo "        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            echo ($context["shipping_address"] ?? null);
            echo "</td>
        ";
        }
        // line 65
        echo " </tr>
    </tbody>
  </table>
  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 71
        echo ($context["text_product"] ?? null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 72
        echo ($context["text_model"] ?? null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\">";
        // line 73
        echo ($context["text_quantity"] ?? null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\">";
        // line 74
        echo ($context["text_price"] ?? null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\">";
        // line 75
        echo ($context["text_total"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
    
    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 81
            echo "    <tr>
      <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 82
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 82);
            echo "
        ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 83));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo "<br />
        &nbsp;<small> - ";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 84);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 84);
                echo "</small>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
      <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 85
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 85);
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 86
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 86);
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 87
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 87);
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 88
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 88);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 92
            echo "    <tr>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 93);
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"></td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">1</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 96
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 96);
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 97
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 97);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "      </tbody>
    
    <tfoot>
    
    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 105
            echo "    <tr>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\" colspan=\"4\"><b>";
            // line 106
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 106);
            echo ":</b></td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 107
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 107);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "      </tfoot>
    
  </table>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
        // line 113
        echo ($context["text_footer"] ?? null);
        echo "</p>
</div>
</body>
</html>

<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\"
\tstyle=\"width: 100%; font-family: &quot;open sans&quot;, &quot;helvetica neue&quot;, helvetica, arial, sans-serif; text-size-adjust: 100%; padding: 0px; margin: 0px; overflow-x: visible !important;\">

<head>
\t<meta http-equiv=\"Content-Security-Policy\"
\t\tcontent=\"script-src 'none'; connect-src 'none'; object-src 'none'; form-action 'none';\">
\t<meta charset=\"UTF-8\">
\t<meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
\t<meta name=\"x-apple-disable-message-reformatting\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta content=\"telephone=no\" name=\"format-detection\">
\t<title>";
        // line 129
        echo ($context["title"] ?? null);
        echo "</title>
\t<!--[if (mso 16)]>
    <style type=\"text/css\">
    a {text-decoration: none;}
    </style>
    <![endif]-->
\t<!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
\t<!--[if gte mso 9]>
<xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml>
<![endif]-->
\t<style type=\"text/css\">
\t\t#outlook a {
\t\t\tpadding: 0;
\t\t}

\t\t.ExternalClass {
\t\t\twidth: 100%;
\t\t}

\t\t.ExternalClass,
\t\t.ExternalClass p,
\t\t.ExternalClass span,
\t\t.ExternalClass font,
\t\t.ExternalClass td,
\t\t.ExternalClass div {
\t\t\tline-height: 100%;
\t\t}

\t\t.es-button {
\t\t\tmso-style-priority: 100 !important;
\t\t\ttext-decoration: none !important;
\t\t}

\t\ta[x-apple-data-detectors] {
\t\t\tcolor: inherit !important;
\t\t\ttext-decoration: none !important;
\t\t\tfont-size: inherit !important;
\t\t\tfont-family: inherit !important;
\t\t\tfont-weight: inherit !important;
\t\t\tline-height: inherit !important;
\t\t}

\t\t.es-desk-hidden {
\t\t\tdisplay: none;
\t\t\tfloat: left;
\t\t\toverflow: hidden;
\t\t\twidth: 0;
\t\t\tmax-height: 0;
\t\t\tline-height: 0;
\t\t\tmso-hide: all;
\t\t}

\t\t@media only screen and (max-width:600px) {

\t\t\tp,
\t\t\tul li,
\t\t\tol li,
\t\t\ta {
\t\t\t\tfont-size: 16px !important;
\t\t\t\tline-height: 150% !important
\t\t\t}

\t\t\th1 {
\t\t\t\tfont-size: 32px !important;
\t\t\t\ttext-align: center;
\t\t\t\tline-height: 120% !important
\t\t\t}

\t\t\th2 {
\t\t\t\tfont-size: 26px !important;
\t\t\t\ttext-align: center;
\t\t\t\tline-height: 120% !important
\t\t\t}

\t\t\th3 {
\t\t\t\tfont-size: 20px !important;
\t\t\t\ttext-align: center;
\t\t\t\tline-height: 120% !important
\t\t\t}

\t\t\th1 a {
\t\t\t\tfont-size: 32px !important
\t\t\t}

\t\t\th2 a {
\t\t\t\tfont-size: 26px !important
\t\t\t}

\t\t\th3 a {
\t\t\t\tfont-size: 20px !important
\t\t\t}

\t\t\t.es-menu td a {
\t\t\t\tfont-size: 16px !important
\t\t\t}

\t\t\t.es-header-body p,
\t\t\t.es-header-body ul li,
\t\t\t.es-header-body ol li,
\t\t\t.es-header-body a {
\t\t\t\tfont-size: 16px !important
\t\t\t}

\t\t\t.es-footer-body p,
\t\t\t.es-footer-body ul li,
\t\t\t.es-footer-body ol li,
\t\t\t.es-footer-body a {
\t\t\t\tfont-size: 16px !important
\t\t\t}

\t\t\t.es-infoblock p,
\t\t\t.es-infoblock ul li,
\t\t\t.es-infoblock ol li,
\t\t\t.es-infoblock a {
\t\t\t\tfont-size: 12px !important
\t\t\t}

\t\t\t*[class=\"gmail-fix\"] {
\t\t\t\tdisplay: none !important
\t\t\t}

\t\t\t.es-m-txt-c,
\t\t\t.es-m-txt-c h1,
\t\t\t.es-m-txt-c h2,
\t\t\t.es-m-txt-c h3 {
\t\t\t\ttext-align: center !important
\t\t\t}

\t\t\t.es-m-txt-r,
\t\t\t.es-m-txt-r h1,
\t\t\t.es-m-txt-r h2,
\t\t\t.es-m-txt-r h3 {
\t\t\t\ttext-align: right !important
\t\t\t}

\t\t\t.es-m-txt-l,
\t\t\t.es-m-txt-l h1,
\t\t\t.es-m-txt-l h2,
\t\t\t.es-m-txt-l h3 {
\t\t\t\ttext-align: left !important
\t\t\t}

\t\t\t.es-m-txt-r img,
\t\t\t.es-m-txt-c img,
\t\t\t.es-m-txt-l img {
\t\t\t\tdisplay: inline !important
\t\t\t}

\t\t\t.es-button-border {
\t\t\t\tdisplay: inline-block !important
\t\t\t}

\t\t\ta.es-button {
\t\t\t\tfont-size: 16px !important;
\t\t\t\tdisplay: inline-block !important;
\t\t\t\tborder-width: 15px 30px 15px 30px !important
\t\t\t}

\t\t\t.es-btn-fw {
\t\t\t\tborder-width: 10px 0px !important;
\t\t\t\ttext-align: center !important
\t\t\t}

\t\t\t.es-adaptive table,
\t\t\t.es-btn-fw,
\t\t\t.es-btn-fw-brdr,
\t\t\t.es-left,
\t\t\t.es-right {
\t\t\t\twidth: 100% !important
\t\t\t}

\t\t\t.es-content table,
\t\t\t.es-header table,
\t\t\t.es-footer table,
\t\t\t.es-content,
\t\t\t.es-footer,
\t\t\t.es-header {
\t\t\t\twidth: 100% !important;
\t\t\t\tmax-width: 600px !important
\t\t\t}

\t\t\t.es-adapt-td {
\t\t\t\tdisplay: block !important;
\t\t\t\twidth: 100% !important
\t\t\t}

\t\t\t.adapt-img {
\t\t\t\twidth: 100% !important;
\t\t\t\theight: auto !important
\t\t\t}

\t\t\t.es-m-p0 {
\t\t\t\tpadding: 0px !important
\t\t\t}

\t\t\t.es-m-p0r {
\t\t\t\tpadding-right: 0px !important
\t\t\t}

\t\t\t.es-m-p0l {
\t\t\t\tpadding-left: 0px !important
\t\t\t}

\t\t\t.es-m-p0t {
\t\t\t\tpadding-top: 0px !important
\t\t\t}

\t\t\t.es-m-p0b {
\t\t\t\tpadding-bottom: 0 !important
\t\t\t}

\t\t\t.es-m-p20b {
\t\t\t\tpadding-bottom: 20px !important
\t\t\t}

\t\t\t.es-mobile-hidden,
\t\t\t.es-hidden {
\t\t\t\tdisplay: none !important
\t\t\t}

\t\t\ttr.es-desk-hidden,
\t\t\ttd.es-desk-hidden,
\t\t\ttable.es-desk-hidden {
\t\t\t\twidth: auto !important;
\t\t\t\toverflow: visible !important;
\t\t\t\tfloat: none !important;
\t\t\t\tmax-height: inherit !important;
\t\t\t\tline-height: inherit !important
\t\t\t}

\t\t\ttr.es-desk-hidden {
\t\t\t\tdisplay: table-row !important
\t\t\t}

\t\t\ttable.es-desk-hidden {
\t\t\t\tdisplay: table !important
\t\t\t}

\t\t\ttd.es-desk-menu-hidden {
\t\t\t\tdisplay: table-cell !important
\t\t\t}

\t\t\t.es-menu td {
\t\t\t\twidth: 1% !important
\t\t\t}

\t\t\ttable.es-table-not-adapt,
\t\t\t.esd-block-html table {
\t\t\t\twidth: auto !important
\t\t\t}

\t\t\ttable.es-social {
\t\t\t\tdisplay: inline-block !important
\t\t\t}

\t\t\ttable.es-social td {
\t\t\t\tdisplay: inline-block !important
\t\t\t}
\t\t}
\t</style>
\t<base target=\"_blank\">
</head>

<body
\tstyle=\"width: 100%; font-family: &quot;open sans&quot;, &quot;helvetica neue&quot;, helvetica, arial, sans-serif; text-size-adjust: 100%; padding: 0px; margin: 0px; overflow-y: scroll !important; visibility: visible !important;\">
\t<div class=\"es-wrapper-color\" style=\"background-color:#EEEEEE\">
\t\t<!--[if gte mso 9]>
\t\t\t<v:background xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"t\">
\t\t\t\t<v:fill type=\"tile\" color=\"#eeeeee\"></v:fill>
\t\t\t</v:background>
\t\t<![endif]-->
\t\t<table class=\"es-wrapper\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top\">
\t\t\t<tbody>
\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t<td valign=\"top\" style=\"padding:0;Margin:0\">
\t\t\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" class=\"es-content\" align=\"center\"
\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t<td align=\"center\" style=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t<table class=\"es-content-body\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px\"
\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\" cellpadding=\"0\" align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;padding-left:10px;padding-right:10px;padding-top:15px;padding-bottom:15px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--[if mso]><table style=\"width:580px\" cellpadding=\"0\" cellspacing=\"0\"><tr><td style=\"width:282px\" valign=\"top\"><![endif]-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"es-left\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;width:282px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" role=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"es-infoblock es-m-txt-c\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;line-height:14px;font-size:12px;color:#CCCCCC\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:12px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:14px;color:#CCCCCC\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPut your preheader text here
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--[if mso]></td><td style=\"width:20px\"></td><td style=\"width:278px\" valign=\"top\"><![endif]-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"es-right\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"right\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;width:278px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" role=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"right\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-infoblock es-m-txt-c\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;line-height:14px;font-size:12px;color:#CCCCCC\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:12px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:14px;color:#CCCCCC\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://viewstripo.email\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"view\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:12px;text-decoration:none;color:#CCCCCC\">View
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tin browser</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--[if mso]></td></tr></table><![endif]-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<table class=\"es-content\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"
\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\"></tr>
\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t<td align=\"center\" style=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t<table class=\"es-header-body\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#044767;width:600px\"
\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#044767\" align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;padding-top:35px;padding-bottom:35px;padding-left:35px;padding-right:35px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--[if mso]><table style=\"width:530px\" cellpadding=\"0\" cellspacing=\"0\"><tr><td style=\"width:340px\" valign=\"top\"><![endif]-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"es-left\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"es-m-p0r es-m-p20b\" valign=\"top\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;width:340px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" role=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"es-m-txt-c\" align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 519
        echo ($context["store_url"] ?? null);
        echo "\" title=\"";
        echo ($context["store_name"] ?? null);
        echo "\"><img src=\"";
        echo ($context["logo"] ?? null);
        echo "\" alt=\"";
        echo ($context["store_name"] ?? null);
        echo "\" style=\"width: 200px; border: none;\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--[if mso]></td><td style=\"width:20px\"></td><td style=\"width:170px\" valign=\"top\"><![endif]-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table cellspacing=\"0\" cellpadding=\"0\" align=\"right\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"es-hidden\" style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"es-m-p20b\" align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;width:170px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" role=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-bottom:5px;font-size:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\theight=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" border=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;border-bottom:1px solid #044767;background:#FFFFFFnone repeat scroll 0% 0%;height:1px;width:100%;margin:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"right\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"right\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#FFFFFF\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;text-decoration:none;color:#FFFFFF;line-height:22px\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"https://viewstripo.email\">Shop</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td valign=\"top\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-left:10px;font-size:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://viewstripo.email\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:14px;text-decoration:none;color:#FFFFFF\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://tlr.stripocdn.email/content/guids/CABINET_75694a6fc3c4633b3ee8e3c750851c02/images/77981522050090360.png\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"27\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--[if mso]></td></tr></table><![endif]-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<table class=\"es-content\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"
\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t<td align=\"center\" style=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t<table class=\"es-content-body\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ffffff\"
\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px\">
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-left:35px;padding-right:35px;padding-top:40px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td valign=\"top\" align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;width:530px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" role=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;padding-top:25px;padding-bottom:25px;padding-left:35px;padding-right:35px;font-size:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"https://viewstripo.email/\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:16px;text-decoration:none;color:#ED8E20\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://tlr.stripocdn.email/content/guids/CABINET_75694a6fc3c4633b3ee8e3c750851c02/images/67611522142640957.png\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"120\"></a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-bottom:10px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:30px;font-style:normal;font-weight:bold;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tThank You For Your Order!
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-top:15px;padding-bottom:20px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 671
        echo ($context["text_greeting"] ?? null);
        echo "<br></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
                                        </tr>
                                        ";
        // line 674
        if (($context["customer_id"] ?? null)) {
            // line 675
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-top:15px;padding-bottom:20px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 680
            echo ($context["text_link"] ?? null);
            echo "<br></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
                                        </tr>
                                        <tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;padding-left:10px;padding-right:10px;padding-bottom:15px;padding-top:30px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"es-button-border\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-style:solid;border-color:transparent;background:#66B3B7;border-width:0px;display:inline-block;border-radius:5px;width:auto\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
            // line 688
            echo ($context["link"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;color:#FFFFFF;border-style:solid;border-color:#66B3B7;border-width:15px 30px 15px 30px;display:inline-block;background:#66B3B7;border-radius:5px;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center\">View Order</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
                                        ";
        }
        // line 695
        echo "                                        ";
        if (($context["download"] ?? null)) {
            // line 696
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-top:15px;padding-bottom:20px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 701
            echo ($context["text_download"] ?? null);
            echo "<br></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
                                        </tr>
                                        <tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;padding-left:10px;padding-right:10px;padding-bottom:15px;padding-top:30px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"es-button-border\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-style:solid;border-color:transparent;background:#66B3B7;border-width:0px;display:inline-block;border-radius:5px;width:auto\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
            // line 709
            echo ($context["download"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;color:#FFFFFF;border-style:solid;border-color:#66B3B7;border-width:15px 30px 15px 30px;display:inline-block;background:#66B3B7;border-radius:5px;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center\">Download</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
                                        ";
        }
        // line 716
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<table class=\"es-content\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"
\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t<td align=\"center\" style=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t<table class=\"es-content-body\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ffffff\"
\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px\">
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-top:20px;padding-left:35px;padding-right:35px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td valign=\"top\" align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;width:530px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" role=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td bgcolor=\"#eeeeee\" align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:500px\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"cke_show_border\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"1\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"1\" border=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"100%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;line-height:120%;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 769
        echo ($context["text_order_detail"] ?? null);
        echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <td width=\"20%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;line-height:120%;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2345678</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-left:35px;padding-right:35px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td valign=\"top\" align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;width:530px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" role=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:275px\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"cke_show_border\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"1\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"1\" border=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 10px 5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"80%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 821
        echo ($context["text_date_added"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"20%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 828
        echo ($context["date_added"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 10px 5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"80%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 838
        echo ($context["text_payment_method"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"20%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 845
        echo ($context["payment_method"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
                                                </tr>
                                                ";
        // line 848
        if (($context["shipping_method"] ?? null)) {
            // line 849
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 10px 5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"80%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 856
            echo ($context["text_shipping_method"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"20%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 864
            echo ($context["shipping_method"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
                                                </tr>
                                                ";
        }
        // line 868
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td valign=\"top\" align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;width:530px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" role=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:210px\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"cke_show_border\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"1\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"1\" border=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 10px 5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"80%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 899
        echo ($context["text_email"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"20%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 906
        echo ($context["email"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 10px 5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"80%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 916
        echo ($context["text_telephone"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"20%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 923
        echo ($context["telephone"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 10px 5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"80%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 933
        echo ($context["text_order_status"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"20%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 941
        echo ($context["order_status"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-top:10px;padding-left:35px;padding-right:35px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td valign=\"top\" align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;width:530px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;border-top:3px solid #EEEEEE;border-bottom:3px solid #EEEEEE\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;padding-left:10px;padding-right:10px;padding-top:15px;padding-bottom:15px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:500px\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"cke_show_border\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"1\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"1\" border=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"80%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;line-height:120%;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTOTAL</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"20%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;line-height:120%;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$115.00</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;padding-left:35px;padding-right:35px;padding-top:40px;padding-bottom:40px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--[if mso]><table style=\"width:530px\" cellpadding=\"0\" cellspacing=\"0\"><tr><td style=\"width:255px\" valign=\"top\"><![endif]-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"es-left\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"es-m-p20b\" align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;width:255px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" role=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-bottom:15px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;line-height:120%;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDelivery Address</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-bottom:10px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t675 Massachusetts Avenue</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t11th Floor</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCambridge, MA 02139</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--[if mso]></td><td style=\"width:20px\"></td><td style=\"width:255px\" valign=\"top\"><![endif]-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"es-right\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"right\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;width:255px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" role=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-bottom:15px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;line-height:120%;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEstimated Delivery Date<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tJanuary 1st, 2016</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--[if mso]></td></tr></table><![endif]-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<table class=\"es-content\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"
\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t<td align=\"center\" style=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t<table class=\"es-content-body\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ffffff\"
\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px\">
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-top:20px;padding-left:35px;padding-right:35px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td valign=\"top\" align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;width:530px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" role=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td bgcolor=\"#eeeeee\" align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:500px\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"cke_show_border\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"1\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"1\" border=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"80%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;line-height:120%;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOrder
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tConfirmation
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t#</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"20%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;line-height:120%;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2345678</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-left:35px;padding-right:35px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td valign=\"top\" align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;width:530px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" role=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:500px\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"cke_show_border\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"1\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"1\" border=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 10px 5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"80%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPurchased
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tItem (1)</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"20%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$100.00</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 10px 5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"80%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tShipping +
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tHandling</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"20%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$10.00</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 10px 5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"80%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSales Tax
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"20%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$5.00</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-top:10px;padding-left:35px;padding-right:35px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td valign=\"top\" align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;width:530px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;border-top:3px solid #EEEEEE;border-bottom:3px solid #EEEEEE\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;padding-left:10px;padding-right:10px;padding-top:15px;padding-bottom:15px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:500px\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"cke_show_border\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"1\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"1\" border=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"80%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;line-height:120%;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTOTAL</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"20%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;line-height:120%;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$115.00</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;padding-left:35px;padding-right:35px;padding-top:40px;padding-bottom:40px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--[if mso]><table style=\"width:530px\" cellpadding=\"0\" cellspacing=\"0\"><tr><td style=\"width:255px\" valign=\"top\"><![endif]-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"es-left\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"es-m-p20b\" align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;width:255px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" role=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-bottom:15px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;line-height:120%;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDelivery Address</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-bottom:10px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t675 Massachusetts Avenue</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t11th Floor</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCambridge, MA 02139</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--[if mso]></td><td style=\"width:20px\"></td><td style=\"width:255px\" valign=\"top\"><![endif]-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"es-right\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"right\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;width:255px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" role=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-bottom:15px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;line-height:120%;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEstimated Delivery Date<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tJanuary 1st, 2016</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--[if mso]></td></tr></table><![endif]-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<table class=\"es-content\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"
\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t<td align=\"center\" style=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t<table class=\"es-content-body\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#1B9BA3;width:600px\"
\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#1b9ba3\" align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;padding-top:35px;padding-bottom:35px;padding-left:35px;padding-right:35px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td valign=\"top\" align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;width:530px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" role=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-top:25px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:24px;font-style:normal;font-weight:bold;color:#FFFFFF\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tGet 25% off your next order.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;padding-left:10px;padding-right:10px;padding-bottom:15px;padding-top:30px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"es-button-border\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-style:solid;border-color:transparent;background:#66B3B7;border-width:0px;display:inline-block;border-radius:5px;width:auto\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"https://viewstripo.email/\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;color:#FFFFFF;border-style:solid;border-color:#66B3B7;border-width:15px 30px 15px 30px;display:inline-block;background:#66B3B7;border-radius:5px;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center\">Awesome</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" class=\"es-footer\" align=\"center\"
\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t<td align=\"center\" style=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t<table class=\"es-footer-body\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px\">
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;padding-top:35px;padding-left:35px;padding-right:35px;padding-bottom:40px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td valign=\"top\" align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;width:530px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" role=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-bottom:15px;font-size:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://tlr.stripocdn.email/content/guids/CABINET_75694a6fc3c4633b3ee8e3c750851c02/images/12331522050090454.png\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Beretun logo\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Beretun logo\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"37\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-bottom:35px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>675 Massachusetts
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAvenue </strong></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Cambridge, MA
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t02139</strong></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td esdev-links-color=\"#777777\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\" class=\"es-m-txt-c\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-bottom:5px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#777777\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tIf you didn't create an
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\taccount using this email
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\taddress, please ignore this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\temail or&nbsp;<u><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:14px;text-decoration:none;color:#777777\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"unsubscribe\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"\">unsubscribe</a></u>.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<table class=\"es-content\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"
\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t<td align=\"center\" style=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t<table class=\"es-content-body\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px\"
\t\t\t\t\t\t\t\t\t\t\tcellspacing=\"0\" cellpadding=\"0\" align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;padding-left:20px;padding-right:20px;padding-top:30px;padding-bottom:30px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td valign=\"top\" align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;width:560px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" role=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"es-infoblock made_with\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;line-height:120%;font-size:0;color:#CCCCCC\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"https://viewstripo.email/?utm_source=templates&amp;utm_medium=email&amp;utm_campaign=accessory&amp;utm_content=trigger_newsletter3\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:12px;text-decoration:none;color:#CCCCCC\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://tlr.stripocdn.email/content/guids/CABINET_9df86e5b6c53dd0319931e2447ed854b/images/64951510234941531.png\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\" width=\"125\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</div>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "default/template/mail/order_add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1267 => 941,  1256 => 933,  1243 => 923,  1233 => 916,  1220 => 906,  1210 => 899,  1177 => 868,  1170 => 864,  1159 => 856,  1150 => 849,  1148 => 848,  1142 => 845,  1132 => 838,  1119 => 828,  1109 => 821,  1054 => 769,  999 => 716,  989 => 709,  978 => 701,  971 => 696,  968 => 695,  958 => 688,  947 => 680,  940 => 675,  938 => 674,  932 => 671,  771 => 519,  378 => 129,  359 => 113,  354 => 110,  345 => 107,  341 => 106,  338 => 105,  334 => 104,  328 => 100,  319 => 97,  315 => 96,  309 => 93,  306 => 92,  301 => 91,  292 => 88,  288 => 87,  284 => 86,  280 => 85,  269 => 84,  263 => 83,  259 => 82,  256 => 81,  252 => 80,  244 => 75,  240 => 74,  236 => 73,  232 => 72,  228 => 71,  220 => 65,  214 => 64,  212 => 63,  208 => 62,  202 => 58,  196 => 57,  194 => 56,  190 => 55,  185 => 52,  177 => 47,  169 => 42,  164 => 39,  162 => 38,  153 => 34,  147 => 33,  141 => 32,  135 => 31,  132 => 30,  123 => 29,  117 => 28,  111 => 27,  105 => 26,  97 => 21,  92 => 18,  85 => 16,  80 => 15,  77 => 14,  70 => 12,  65 => 11,  63 => 10,  59 => 9,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/mail/order_add.twig", "");
    }
}
