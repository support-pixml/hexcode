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
class __TwigTemplate_3b47d0234138cd2e27ab732e63c9d1b7020ef39e3bb54e675600db3316220c48 extends \Twig\Template
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




  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 16
        echo ($context["text_product"] ?? null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 17
        echo ($context["text_model"] ?? null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\">";
        // line 18
        echo ($context["text_quantity"] ?? null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\">";
        // line 19
        echo ($context["text_price"] ?? null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\">";
        // line 20
        echo ($context["text_total"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
    
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 26
            echo "    <tr>
      <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 27);
            echo "
        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo "<br />
        &nbsp;<small> - ";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 29);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 29);
                echo "</small>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
      <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 30);
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 31);
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 32);
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 33);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 37
            echo "    <tr>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 38);
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"></td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">1</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 41);
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 42);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "      </tbody>
    
    <tfoot>
    
    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 50
            echo "    <tr>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\" colspan=\"4\"><b>";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 51);
            echo ":</b></td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 52);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "      </tfoot>
    
  </table>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
        // line 58
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
        // line 74
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
        // line 464
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
        // line 616
        echo ($context["text_greeting"] ?? null);
        echo "<br></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
                                        </tr>
                                        ";
        // line 619
        if (($context["customer_id"] ?? null)) {
            // line 620
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-top:15px;padding-bottom:20px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 625
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
            // line 633
            echo ($context["link"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;color:#FFFFFF;border-style:solid;border-color:#66B3B7;border-width:15px 30px 15px 30px;display:inline-block;background:#66B3B7;border-radius:5px;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center\">View Order</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
                                        ";
        }
        // line 640
        echo "                                        ";
        if (($context["download"] ?? null)) {
            // line 641
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-top:15px;padding-bottom:20px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 646
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
            // line 654
            echo ($context["download"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;color:#FFFFFF;border-style:solid;border-color:#66B3B7;border-width:15px 30px 15px 30px;display:inline-block;background:#66B3B7;border-radius:5px;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center\">Download</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
                                        ";
        }
        // line 661
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
        // line 714
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
        // line 766
        echo ($context["text_date_added"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"20%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 773
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
        // line 783
        echo ($context["text_payment_method"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"20%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 790
        echo ($context["payment_method"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
                                                </tr>
                                                ";
        // line 793
        if (($context["shipping_method"] ?? null)) {
            // line 794
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 10px 5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"80%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 801
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
            // line 809
            echo ($context["shipping_method"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
                                                </tr>
                                                ";
        }
        // line 813
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
        // line 844
        echo ($context["text_email"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"20%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 851
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
        // line 861
        echo ($context["text_telephone"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"20%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 868
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
        // line 878
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
        // line 886
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
                        </tr>
                        ";
        // line 901
        if (($context["comment"] ?? null)) {
            // line 902
            echo "                        <tr style=\"border-collapse:collapse\">
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
            // line 932
            echo ($context["text_instruction"] ?? null);
            echo "</h4>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 978
            echo ($context["comment"] ?? null);
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
                        </tr>
                        ";
        }
        // line 994
        echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1014
        echo ($context["text_payment_address"] ?? null);
        echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
                                            style=\"padding:0;Margin:0;padding-bottom:10px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
                                              ";
        // line 1022
        echo ($context["payment_address"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
                            <!--[if mso]></td><td style=\"width:20px\"></td><td style=\"width:255px\" valign=\"top\"><![endif]-->
                              ";
        // line 1032
        if (($context["shipping_address"] ?? null)) {
            // line 1033
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"es-right\" cellspacing=\"0\" cellpadding=\"0\"
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1049
            echo ($context["text_shipping_address"] ?? null);
            echo "<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1058
            echo ($context["shipping_address"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
                            </table>
                            ";
        }
        // line 1068
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--[if mso]></td></tr></table><![endif]-->
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"0%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;line-height:120%;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1116
        echo ($context["text_product"] ?? null);
        echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"20%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;line-height:120%;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1122
        echo ($context["text_total"] ?? null);
        echo "</h4>
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
                                                ";
        // line 1161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 1162
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 10px 5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"80%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1169
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 1169);
            echo " x ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 1169);
            echo "
                                                      ";
            // line 1170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 1170));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo "<br />
                                                      &nbsp;<small> - ";
                // line 1171
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1171);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1171);
                echo "</small>
                                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1173
            echo "                                                    </p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"20%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1180
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 1180);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
                                                </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1184
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
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
                                                ";
        // line 1220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 1221
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 10px 5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"80%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1228
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 1228);
            echo ":
                                                    </p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding:5px 0;Margin:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"20%\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1236
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 1236);
            echo ":</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
                                                </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1240
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
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
\t\t\t\t\t\t\t\t\t\t\t
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  Made with &#10084; in India.
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;color:#FFFFFF;border-style:solid;border-color:#66B3B7;border-width:15px 30px 15px 30px;display:inline-block;background:#66B3B7;border-radius:5px;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center\">Shop Now</a></span>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
        // line 1350
        echo ($context["store_name"] ?? null);
        echo " </strong></p>
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
        return array (  1655 => 1350,  1543 => 1240,  1533 => 1236,  1522 => 1228,  1513 => 1221,  1509 => 1220,  1471 => 1184,  1461 => 1180,  1452 => 1173,  1442 => 1171,  1436 => 1170,  1430 => 1169,  1421 => 1162,  1417 => 1161,  1375 => 1122,  1366 => 1116,  1316 => 1068,  1303 => 1058,  1291 => 1049,  1273 => 1033,  1271 => 1032,  1258 => 1022,  1247 => 1014,  1225 => 994,  1206 => 978,  1157 => 932,  1125 => 902,  1123 => 901,  1105 => 886,  1094 => 878,  1081 => 868,  1071 => 861,  1058 => 851,  1048 => 844,  1015 => 813,  1008 => 809,  997 => 801,  988 => 794,  986 => 793,  980 => 790,  970 => 783,  957 => 773,  947 => 766,  892 => 714,  837 => 661,  827 => 654,  816 => 646,  809 => 641,  806 => 640,  796 => 633,  785 => 625,  778 => 620,  776 => 619,  770 => 616,  609 => 464,  216 => 74,  197 => 58,  192 => 55,  183 => 52,  179 => 51,  176 => 50,  172 => 49,  166 => 45,  157 => 42,  153 => 41,  147 => 38,  144 => 37,  139 => 36,  130 => 33,  126 => 32,  122 => 31,  118 => 30,  107 => 29,  101 => 28,  97 => 27,  94 => 26,  90 => 25,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/mail/order_add.twig", "");
    }
}
