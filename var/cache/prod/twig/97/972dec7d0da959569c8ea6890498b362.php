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

/* @MailThemes/modern/components/order_layout.html.twig */
class __TwigTemplate_dca9b21c9dd8756a56de9cac9dee24e2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'styles' => [$this, 'block_styles'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer_content' => [$this, 'block_footer_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">

<head>
  <title> ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
  <!--[if !mso]><!-->
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <!--<![endif]-->
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  ";
        // line 11
        $context["direction"] = "ltr";
        // line 12
        echo "  ";
        $context["align_left"] = "left";
        // line 13
        echo "  ";
        $context["align_right"] = "right";
        // line 14
        echo "  ";
        if (((array_key_exists("languageIsRTL", $context)) ? (_twig_default_filter(($context["languageIsRTL"] ?? null), false)) : (false))) {
            // line 15
            echo "  ";
            $context["direction"] = "rtl";
            // line 16
            echo "  ";
            $context["align_left"] = "right";
            // line 17
            echo "  ";
            $context["align_right"] = "left";
            // line 18
            echo "  ";
        }
        // line 19
        echo "  ";
        $this->displayBlock('styles', $context, $blocks);
        // line 174
        echo "</head>

<body style=\"word-spacing:normal;background-color:#eeeeee;\">
  <div style=\"background-color:#eeeeee;\">
    <!--[if mso | IE]><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
    <div style=\"margin:0px auto;max-width:604px;\">
      <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
        <tbody>
          <tr>
            <td style=\"direction:";
        // line 183
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo ";font-size:0px;padding:0;text-align:center;\">
              <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:604px;\" ><![endif]-->
              <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 185
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                  <tbody>
                    <tr>
                      <td style=\"font-size:0px;word-break:break-word;\">
                        <div style=\"height:40px;line-height:40px;\"> </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--[if mso | IE]></td></tr></table><![endif]-->
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!--[if mso | IE]></td></tr></table><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"shadow-outlook wrapper-container-outlook\" role=\"presentation\" style=\"width:604px;\" width=\"604\" bgcolor=\"#ffffff\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
    <div class=\"shadow wrapper-container\" style=\"background:#ffffff;background-color:#ffffff;margin:0px auto;border-radius:4px;max-width:604px;\">
      <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"background:#ffffff;background-color:#ffffff;width:100%;border-radius:4px;\">
        <tbody>
          <tr>
            <td style=\"direction:";
        // line 207
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo ";font-size:0px;padding:0 0 30px;text-align:center;\">
              <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><![endif]--> 
                  ";
        // line 209
        $this->displayBlock('header', $context, $blocks);
        // line 212
        echo "
                  ";
        // line 213
        $this->displayBlock('content', $context, $blocks);
        // line 215
        echo "
                  ";
        // line 216
        $this->displayBlock('footer_content', $context, $blocks);
        // line 218
        echo "
              <!--[if mso | IE]></table><![endif]-->
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!--[if mso | IE]></td></tr></table><![endif]--> 
                  ";
        // line 226
        $this->displayBlock('footer', $context, $blocks);
        // line 229
        echo "
  </div>
</body>

</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Title";
    }

    // line 19
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "  <style type=\"text/css\">
    #outlook a {
      padding: 0;
    }

    body {
      margin: 0;
      padding: 0;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }

    table,
    td {
      border-collapse: collapse;
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    img {
      border: 0;
      height: auto;
      line-height: 100%;
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    p {
      display: block;
      margin: 13px 0;
    }
  </style>
  <!--[if mso]>
        <noscript>
        <xml>
        <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
        </xml>
        </noscript>
        <![endif]-->
  <!--[if lte mso 11]>
        <style type=\"text/css\">
          .mj-outlook-group-fix { width:100% !important; }
        </style>
        <![endif]-->
  <style type=\"text/css\">
    @media only screen and (min-width:480px) {
      .mj-column-per-100 {
        width: 100% !important;
        max-width: 100%;
      }
    }
  </style>
  <style media=\"screen and (min-width:480px)\">
    .moz-text-html .mj-column-per-100 {
      width: 100% !important;
      max-width: 100%;
    }
  </style>
  <style type=\"text/css\">
  </style>
  <style type=\"text/css\">
    .shadow {
      box-shadow: 0 20px 30px 0 rgba(0, 0, 0, 0.1);
    }

    .label {
      font-weight: 700;
    }

    .warning {
      font-weight: 700;
      font-size: 16px;
    }

    a {
      color: #25B9D7;
      text-decoration: underline;
      font-weight: 600;
    }

    a.light {
      font-weight: 400;
    }

    span.strong {
      font-weight: 600;
    }

    .box {
      width: 244px;
    }

    .margin {
      margin-";
        // line 117
        echo twig_escape_filter($this->env, ($context["align_right"] ?? null), "html", null, true);
        echo ": 16px
    }

    table {
      font-family: Open sans, Arial, sans-serif;
      font-size: 14px;
    }

    .products-table,
    .products-table th,
    .products-table td {
      font-family: Open sans, Arial, sans-serif;
      font-size: 12px;
      background-color: #FDFDFD;
      color: #353943;
    }

    .products-table th {
      font-weight: 600;
      padding: 10px 5px;
      border: 1px solid #DFDFDF;
    }

    .products-table .order_summary td {
      font-weight: 600;
      font-size: 14px;
      padding: 10px;
      border: 1px solid #DFDFDF;
    }

    .products-table.mail-alert td {
      border: 1px solid #DFDFDF;
    }

    @media only screen and (max-width: 480px) {

      body,
      .no-bg {
        background-color: #fff !important;
      }

      .left p {
        text-align: left;
        display: inline-block
      }

      .box {
        display: block !important;
        width: 100%
      }

      .space {
        display: none !important
      }
    }
  </style>
  ";
    }

    // line 209
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 210
        echo "                      ";
        $this->loadTemplate("@MailThemes/modern/components/header.html.twig", "@MailThemes/modern/components/order_layout.html.twig", 210)->display($context);
        // line 211
        echo "                  ";
    }

    // line 213
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 214
        echo "                  ";
    }

    // line 216
    public function block_footer_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 217
        echo "                  ";
    }

    // line 226
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 227
        echo "                      ";
        $this->loadTemplate("@MailThemes/modern/components/footer.html.twig", "@MailThemes/modern/components/order_layout.html.twig", 227)->display($context);
        // line 228
        echo "                  ";
    }

    public function getTemplateName()
    {
        return "@MailThemes/modern/components/order_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 228,  367 => 227,  363 => 226,  359 => 217,  355 => 216,  351 => 214,  347 => 213,  343 => 211,  340 => 210,  336 => 209,  275 => 117,  176 => 20,  172 => 19,  165 => 5,  156 => 229,  154 => 226,  144 => 218,  142 => 216,  139 => 215,  137 => 213,  134 => 212,  132 => 209,  127 => 207,  100 => 185,  95 => 183,  84 => 174,  81 => 19,  78 => 18,  75 => 17,  72 => 16,  69 => 15,  66 => 14,  63 => 13,  60 => 12,  58 => 11,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes/modern/components/order_layout.html.twig", "C:\\xampp\\htdocs\\prestashop\\mails\\themes\\modern\\components\\order_layout.html.twig");
    }
}
