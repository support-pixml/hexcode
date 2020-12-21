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

/* default/template/mail/order_edit.twig */
class __TwigTemplate_37e891c15de5915154c77f4f8e1444ce655b8703c2a81520d0a5fcc24c57da98 extends \Twig\Template
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
\t<title></title>
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
\t\t\t\tdisplay: inline-block !important
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
                <v:background xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"t\">
                    <v:fill type=\"tile\" color=\"#eeeeee\"></v:fill>
                </v:background>
            <![endif]-->
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPut your preheader text
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\there<br></p>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:36px;font-style:normal;font-weight:bold;color:#FFFFFF\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBeretun</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--[if mso]></td><td style=\"width:20px\"></td><td style=\"width:170px\" valign=\"top\"><![endif]-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <table cellspacing=\"0\" cellpadding=\"0\" align=\"right\"
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"https://viewstripo.email/\">Shop</a>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table> -->
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"Margin:0;padding-bottom:35px;padding-left:35px;padding-right:35px;padding-top:40px;background-color:#F7F7F7\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tbgcolor=\"#f7f7f7\" align=\"left\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;padding-top:20px;padding-bottom:25px;padding-left:35px;padding-right:35px;font-size:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"https://viewstripo.email/\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:15px;text-decoration:none;color:#ED8E20\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://tlr.stripocdn.email/content/guids/CABINET_75694a6fc3c4633b3ee8e3c750851c02/images/83001522239333914.png\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"ship\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"ship\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"150\"></a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-bottom:15px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:30px;font-style:normal;font-weight:bold;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tYour Order Has ";
        // line 548
        echo ($context["order_status"] ?? null);
        echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"es-m-txt-l\" align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-top:20px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;font-style:normal;font-weight:bold;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tHello NAME,<br></h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-bottom:10px;padding-top:15px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 564
        echo ($context["text_order_id"] ?? null);
        echo ": #";
        echo ($context["order_id"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777\">
                                                                                            ";
        // line 568
        echo ($context["text_date_added"] ?? null);
        echo ": ";
        echo ($context["date_added"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
                                                                                </tr>
                                                                                
                                                                                ";
        // line 573
        if (($context["link"] ?? null)) {
            // line 574
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-bottom:10px;padding-top:15px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 579
            echo ($context["text_link"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
                                                                                </tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;padding-left:10px;padding-right:10px;padding-bottom:20px;padding-top:25px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"es-button-border\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-style:solid;border-color:transparent;background:#ED8E20 none repeat scroll 0% 0%;border-width:0px;display:inline-block;border-radius:5px;width:auto\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
            // line 588
            echo ($context["link"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;color:#FFFFFF;border-style:solid;border-color:#ED8E20;border-width:15px 30px;display:inline-block;background:#ED8E20 none repeat scroll 0% 0%;border-radius:5px;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView Order</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
                                                                                </tr>                                                                                
                                                                                ";
        }
        // line 596
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
                                                </tr>
                                                ";
        // line 604
        if (($context["comment"] ?? null)) {
            // line 605
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"left\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;padding-left:35px;padding-right:35px;padding-top:40px;padding-bottom:40px\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-top:20px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;line-height:24px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:20px;font-style:normal;font-weight:bold;color:#333333\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 623
            echo ($context["comment"] ?? null);
            echo "<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-bottom:10px;padding-top:15px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tJanuary 1, 2016 - 1:30PM EST
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;padding-left:10px;padding-right:10px;padding-bottom:15px;padding-top:20px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"es-button-border\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-style:solid;border-color:transparent;background:#ED8E20 none repeat scroll 0% 0%;border-width:0px;display:inline-block;border-radius:5px;width:auto\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"https://viewstripo.email\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;color:#FFFFFF;border-style:solid;border-color:#ED8E20;border-width:15px 30px;display:inline-block;background:#ED8E20 none repeat scroll 0% 0%;border-radius:5px;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center\">Track
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOrder</a></span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr> -->
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
        // line 656
        echo "\t\t\t\t\t\t\t\t\t\t\t</tbody>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;padding-top:30px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:24px;font-style:normal;font-weight:bold;color:#FFFFFF\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWhile you're waiting, enjoy
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t20% off your next purchase.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"Margin:0;padding-left:10px;padding-right:10px;padding-bottom:15px;padding-top:30px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"es-button-border\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-style:solid;border-color:transparent;background:#66B3B7 none repeat scroll 0% 0%;border-width:0px;display:inline-block;border-radius:5px;width:auto\"><a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"https://viewstripo.email\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"es-button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;color:#FFFFFF;border-style:solid;border-color:#66B3B7;border-width:15px 30px 15px 30px;display:inline-block;background:#66B3B7 none repeat scroll 0% 0%;border-radius:5px;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center\">Shop Now</a></span>
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
\t\t\t\t\t\t<table class=\"es-footer\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"
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
        // line 755
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td valign=\"top\" align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;width:560px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" role=\"presentation\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <tr style=\"border-collapse:collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"es-infoblock made_with\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"padding:0;Margin:0;line-height:120%;font-size:0;color:#CCCCCC\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"https://viewstripo.email/?utm_source=templates&amp;utm_medium=email&amp;utm_campaign=accessory&amp;utm_content=trigger_newsletter6\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:12px;text-decoration:none;color:#CCCCCC\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://tlr.stripocdn.email/content/guids/CABINET_9df86e5b6c53dd0319931e2447ed854b/images/64951510234941531.png\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\" width=\"125\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\"></a>
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
        return "default/template/mail/order_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  825 => 755,  724 => 656,  688 => 623,  668 => 605,  666 => 604,  656 => 596,  645 => 588,  633 => 579,  626 => 574,  624 => 573,  614 => 568,  605 => 564,  586 => 548,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/mail/order_edit.twig", "");
    }
}
