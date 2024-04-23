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

/* @MailThemes\modern\core\order_conf.html.twig */
class __TwigTemplate_a3668f85a0c7a2e88a5a3f7c89baa6cd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'styles' => [$this, 'block_styles'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@MailThemes/modern/components/order_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MailThemes/modern/components/order_layout.html.twig", "@MailThemes\\modern\\core\\order_conf.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order confirmation", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 11
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo ";font-size:0px;padding:0 25px;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 13
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td style=\"vertical-align:top;padding:0;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
                                    <tbody>
                                      <!-- TITLE BEGINING -->
                                      <tr>
                                        <td align=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;padding-top:0;padding-bottom:20px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:20px;font-weight:600;line-height:25px;text-align:";
        // line 23
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";color:#363A41;\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Hi {firstname} {lastname},", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
        echo "</div>
                                        </td>
                                      </tr>
                                      <!-- TITLE ENDING -->
                                      <!-- H2 TITLE BEGINING -->
                                      <tr>
                                        <td align=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:25px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:";
        // line 30
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";color:#363A41;\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Thank you for shopping on [1]{shop_name}[/1]!", ["[1]" => "<span class=\"label\">", "[/1]" => "</span>"], "Emails.Body", ($context["locale"] ?? null));
        echo "</div>
                                        </td>
                                      </tr>
                                      <!-- H2 TITLE ENDING -->
                                    </tbody>
                                  </table>
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- BORDER BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 54
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo ";font-size:0px;padding:0 50px 40px;text-align:";
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:25px;\" ><![endif]-->
                        <div class=\"mj-column-px-25 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 56
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"center\" class=\"left\" style=\"font-size:0px;padding:10px 25px;padding-top:0;padding-right:0;padding-left:0;word-break:break-word;\">
                                  <p style=\"border-top:solid 3px #505050;font-size:1px;margin:0px auto;width:25px;\">
                                  </p>
                                  <!--[if mso | IE]><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-top:solid 3px #505050;font-size:1px;margin:0px auto;width:25px;\" role=\"presentation\" width=\"25px\" ><tr><td style=\"height:0;line-height:0;\"> &nbsp;
</td></tr></table><![endif]-->
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- BORDER ENDING -->
              <!-- SUBTITLE BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 84
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo ";font-size:0px;padding:0 25px 0;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 86
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td style=\"vertical-align:top;padding:0;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
                                    <tbody>
                                      <tr>
                                        <td align=\"";
        // line 94
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;font-weight:600;line-height:25px;text-align:";
        // line 95
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";color:#363A41;\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order details", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- SUBTITLE ENDING -->
              <!-- BOX BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 119
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo ";font-size:0px;padding:15px 50px 40px;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:504px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 121
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td style=\"background-color:#fefefe;border:1px solid #DFDFDF;vertical-align:top;padding-top:10px;padding-bottom:10px;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
                                    <tbody>
                                      <tr>
                                        <td align=\"";
        // line 129
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:";
        // line 130
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";color:#363A41;\"><span class=\"label\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</span> {order_name} ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Placed on", [], "Emails.Body", ($context["locale"] ?? null));
        echo " {date}</div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td align=\"";
        // line 134
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;padding-top:0;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:";
        // line 135
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";color:#363A41;\"><span class=\"label\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</span> {payment}</div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- BOX ENDING -->
              <!-- TABLE BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 159
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo ";font-size:0px;padding:20px 0;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:604px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 161
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"";
        // line 165
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo "\" class=\"products-table\" style=\"font-size:0px;padding:10px 25px;padding-right:50px;padding-left:50px;word-break:break-word;\">
                                  <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" style=\"color:#000000;font-family:Open sans, arial, sans-serif;font-size:14px;line-height:22px;table-layout:auto;width:100%;border:none;\">
                                    <colgroup>
                                      <col span=\"1\" style=\"width: 15%;\">
                                      <col span=\"1\" style=\"width: 40%;\">
                                      <col span=\"1\" style=\"width: 15%;\">
                                      <col span=\"1\" style=\"width: 15%;\">
                                      <col span=\"1\" style=\"width: 15%;\">
                                    </colgroup>
                                    <tr>
                                      <th bgcolor=\"#FDFDFD\">";
        // line 175
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reference", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</th>
                                      <th bgcolor=\"#FDFDFD\">";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</th>
                                      <th bgcolor=\"#FDFDFD\">";
        // line 177
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unit price", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</th>
                                      <th bgcolor=\"#FDFDFD\">";
        // line 178
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</th>
                                      <th bgcolor=\"#FDFDFD\">";
        // line 179
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total price", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</th>
                                    </tr>
                                    ";
        // line 181
        if ((($context["templateType"] ?? null) == "html")) {
            // line 182
            echo "{products}
";
        }
        // line 184
        echo "                                    ";
        if ((($context["templateType"] ?? null) == "txt")) {
            // line 185
            echo "{products_txt}
";
        }
        // line 187
        echo "                                    ";
        if ((($context["templateType"] ?? null) == "html")) {
            // line 188
            echo "{discounts}
";
        }
        // line 190
        echo "                                    ";
        if ((($context["templateType"] ?? null) == "txt")) {
            // line 191
            echo "{discounts_txt}
";
        }
        // line 193
        echo "                                    <tr class=\"order_summary\">
                                      <td bgcolor=\"#FDFDFD\" colspan=\"3\" align=\"";
        // line 194
        echo twig_escape_filter($this->env, ($context["align_right"] ?? null), "html", null, true);
        echo "\">
                                        ";
        // line 195
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products", [], "Emails.Body", ($context["locale"] ?? null));
        echo "
                                      </td>
                                      <td bgcolor=\"#FDFDFD\" colspan=\"3\"> {total_products} </td>
                                    </tr>
                                    <tr class=\"order_summary\">
                                      <td bgcolor=\"#FDFDFD\" colspan=\"3\" align=\"";
        // line 200
        echo twig_escape_filter($this->env, ($context["align_right"] ?? null), "html", null, true);
        echo "\">
                                        ";
        // line 201
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discounts", [], "Emails.Body", ($context["locale"] ?? null));
        echo "
                                      </td>
                                      <td bgcolor=\"#FDFDFD\" colspan=\"3\"> {total_discounts} </td>
                                    </tr>
                                    
";
        // line 206
        if ((($context["giftWrapping"] ?? null) == 1)) {
            // line 207
            echo "
                                      <tr class=\"order_summary\">
                                        <td bgcolor=\"#FDFDFD\" colspan=\"3\" align=\"";
            // line 209
            echo twig_escape_filter($this->env, ($context["align_right"] ?? null), "html", null, true);
            echo "\">
                                          ";
            // line 210
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gift-wrapping", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
                                        </td>
                                        <td bgcolor=\"#FDFDFD\" colspan=\"3\"> {total_wrapping} </td>
                                      </tr>
                                    
";
        }
        // line 216
        echo "
                                    <tr class=\"order_summary\">
                                      <td bgcolor=\"#FDFDFD\" colspan=\"3\" align=\"";
        // line 218
        echo twig_escape_filter($this->env, ($context["align_right"] ?? null), "html", null, true);
        echo "\">
                                        ";
        // line 219
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shipping", [], "Emails.Body", ($context["locale"] ?? null));
        echo "
                                      </td>
                                      <td bgcolor=\"#FDFDFD\" colspan=\"3\"> {total_shipping} </td>
                                    </tr>
                                    <tr class=\"order_summary\">
                                      <td bgcolor=\"#FDFDFD\" colspan=\"3\" align=\"";
        // line 224
        echo twig_escape_filter($this->env, ($context["align_right"] ?? null), "html", null, true);
        echo "\">
                                        ";
        // line 225
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Including total tax", [], "Emails.Body", ($context["locale"] ?? null));
        echo "
                                      </td>
                                      <td bgcolor=\"#FDFDFD\" colspan=\"3\"> {total_tax_paid} </td>
                                    </tr>
                                    <tr class=\"order_summary\">
                                      <td bgcolor=\"#FDFDFD\" colspan=\"3\" align=\"";
        // line 230
        echo twig_escape_filter($this->env, ($context["align_right"] ?? null), "html", null, true);
        echo "\">
                                        ";
        // line 231
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total paid", [], "Emails.Body", ($context["locale"] ?? null));
        echo "
                                      </td>
                                      <td bgcolor=\"#FDFDFD\" colspan=\"3\"> {total_paid} </td>
                                    </tr>
                                  </table>
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- TABLE ENDING -->
              <!-- SUBTITLE BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 255
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo ";font-size:0px;padding:0 50px 0;text-align:";
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:504px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 257
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td style=\"vertical-align:top;padding:0;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
                                    <tbody>
                                      <tr>
                                        <td align=\"";
        // line 265
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo "\" style=\"font-size:0px;padding:0;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;font-weight:600;line-height:25px;text-align:";
        // line 266
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";color:#363A41;\"><img src=\"";
        echo twig_escape_filter($this->env, ($context["mailThemesUrl"] ?? null), "html", null, true);
        echo "/modern/assets/baseline-local_shipping-24px.png\" style=\"margin-";
        echo twig_escape_filter($this->env, ($context["align_right"] ?? null), "html", null, true);
        echo ":10px\">
                                            ";
        // line 267
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shipping", [], "Emails.Body", ($context["locale"] ?? null));
        echo "
                                          </div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- SUBTITLE ENDING -->
              <!-- BOX BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 292
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo ";font-size:0px;padding:15px 50px 40px;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:504px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 294
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td style=\"background-color:#fefefe;border:1px solid #DFDFDF;vertical-align:top;padding-top:10px;padding-bottom:10px;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
                                    <tbody>
                                      <tr>
                                        <td align=\"";
        // line 302
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:";
        // line 303
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";color:#363A41;\"><span class=\"label\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carrier:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</span> {carrier}</div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td align=\"";
        // line 307
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;padding-top:0;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:";
        // line 308
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";color:#363A41;\"><span class=\"label\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</span> {payment}</div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td align=\"";
        // line 312
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;padding-top:0;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:";
        // line 313
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";color:#363A41;\"><span class=\"label\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Recycled packaging:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</span> {recycled_packaging_label}</div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- BOX ENDING -->
              <!-- 2 COLUMNS BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 337
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo ";font-size:0px;padding:0 25px 0;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 339
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"";
        // line 343
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                  <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" style=\"color:#000000;font-family:Open sans, arial, sans-serif;font-size:14px;line-height:22px;table-layout:auto;width:100%;border:none;\">
                                    <tr>
                                      <td class=\"box\">
                                        <table class=\"table\" style=\"width:100%\">
                                          <tbody>
                                            <tr>
                                              <td>
                                                <p style=\"font-weight:600;\">
                                                  <img src=\"";
        // line 352
        echo twig_escape_filter($this->env, ($context["mailThemesUrl"] ?? null), "html", null, true);
        echo "/modern/assets/baseline-location_on-24px.png\" style=\"width:15px;margin-";
        echo twig_escape_filter($this->env, ($context["align_right"] ?? null), "html", null, true);
        echo ":10px\">
                                                  ";
        // line 353
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delivery address", [], "Emails.Body", ($context["locale"] ?? null));
        echo "
                                                </p>
                                                <p style=\"border: 1px solid #DFDFDF;background-color: #FEFEFE;padding:20px;font-size:14px\">
                                                  ";
        // line 356
        if ((($context["templateType"] ?? null) == "html")) {
            // line 357
            echo "{delivery_block_html}
";
        }
        // line 359
        echo "                                                  ";
        if ((($context["templateType"] ?? null) == "txt")) {
            // line 360
            echo "{delivery_block_txt}
";
        }
        // line 362
        echo "                                                </p>
                                              </td>
                                              <td width=\"10\" class=\"space\" style=\"padding:7px 0\"> </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                      <td class=\"box\">
                                        <table class=\"table\" style=\"width:100%\">
                                          <tbody>
                                            <tr>
                                              <td>
                                                <p style=\"font-weight:600;\">
                                                  <img src=\"";
        // line 375
        echo twig_escape_filter($this->env, ($context["mailThemesUrl"] ?? null), "html", null, true);
        echo "/modern/assets/baseline-credit_card-24px.png\" style=\"width:25px;margin-";
        echo twig_escape_filter($this->env, ($context["align_right"] ?? null), "html", null, true);
        echo ":10px\">
                                                  ";
        // line 376
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Billing address", [], "Emails.Body", ($context["locale"] ?? null));
        echo "
                                                </p>
                                                <p style=\"border: 1px solid #DFDFDF;background-color: #FEFEFE;padding:20px;font-size:14px\">
                                                  ";
        // line 379
        if ((($context["templateType"] ?? null) == "html")) {
            // line 380
            echo "{invoice_block_html}
";
        }
        // line 382
        echo "                                                  ";
        if ((($context["templateType"] ?? null) == "txt")) {
            // line 383
            echo "{invoice_block_txt}
";
        }
        // line 385
        echo "                                                </p>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </table>
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- 2 COLUMNS ENDING -->
              <!-- FIRST TEXT BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 412
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo ";font-size:0px;padding:0 25px 20px;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 414
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"";
        // line 418
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                  <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:";
        // line 419
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";color:#363A41;\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Follow your order and download your invoice on our store, go to the <a href=\"{history_url}\" target=\"_blank\">%order_history_label%</a> section of your customer account.", ["%order_history_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order history and details", [], "Shop.Theme.Customeraccount", ($context["locale"] ?? null))], "Emails.Body", ($context["locale"] ?? null));
        echo "</div>
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- FIRST TEXT ENDING -->
              <!-- SECOND TEXT BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 439
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo ";font-size:0px;padding:0 25px;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 441
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"";
        // line 445
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;padding-top:0;word-break:break-word;\">
                                  <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:";
        // line 446
        echo twig_escape_filter($this->env, ($context["align_left"] ?? null), "html", null, true);
        echo ";color:#363A41;\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If you have a guest account, you can follow your order via the <a href=\"{guest_tracking_url}\" target=\"_blank\">%guest_tracking_label%</a> section on our shop.", ["%guest_tracking_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Guest Tracking", [], "Shop.Theme.Customeraccount", ($context["locale"] ?? null))], "Emails.Body", ($context["locale"] ?? null));
        echo "</div>
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- SECOND TEXT ENDING -->
              

";
    }

    // line 464
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 465
        echo "<style type=\"text/css\">
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
  <!--[if !mso]><!-->
  <style type=\"text/css\">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,700);
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i);
  </style>
  <!--<![endif]-->
  <style type=\"text/css\">
    @media only screen and (min-width:480px) {
      .mj-column-per-100 {
        width: 100% !important;
        max-width: 100%;
      }

      .mj-column-px-25 {
        width: 25px !important;
        max-width: 25px;
      }
    }
  </style>
  <style media=\"screen and (min-width:480px)\">
    .moz-text-html .mj-column-per-100 {
      width: 100% !important;
      max-width: 100%;
    }

    .moz-text-html .mj-column-px-25 {
      width: 25px !important;
      max-width: 25px;
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
        // line 578
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

    public function getTemplateName()
    {
        return "@MailThemes\\modern\\core\\order_conf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  930 => 578,  815 => 465,  811 => 464,  788 => 446,  784 => 445,  775 => 441,  770 => 439,  745 => 419,  741 => 418,  732 => 414,  727 => 412,  698 => 385,  694 => 383,  691 => 382,  687 => 380,  685 => 379,  679 => 376,  673 => 375,  658 => 362,  654 => 360,  651 => 359,  647 => 357,  645 => 356,  639 => 353,  633 => 352,  621 => 343,  612 => 339,  607 => 337,  578 => 313,  574 => 312,  565 => 308,  561 => 307,  552 => 303,  548 => 302,  535 => 294,  530 => 292,  502 => 267,  494 => 266,  490 => 265,  477 => 257,  470 => 255,  443 => 231,  439 => 230,  431 => 225,  427 => 224,  419 => 219,  415 => 218,  411 => 216,  402 => 210,  398 => 209,  394 => 207,  392 => 206,  384 => 201,  380 => 200,  372 => 195,  368 => 194,  365 => 193,  361 => 191,  358 => 190,  354 => 188,  351 => 187,  347 => 185,  344 => 184,  340 => 182,  338 => 181,  333 => 179,  329 => 178,  325 => 177,  321 => 176,  317 => 175,  304 => 165,  295 => 161,  290 => 159,  261 => 135,  257 => 134,  246 => 130,  242 => 129,  229 => 121,  224 => 119,  195 => 95,  191 => 94,  178 => 86,  173 => 84,  140 => 56,  133 => 54,  104 => 30,  100 => 29,  89 => 23,  85 => 22,  71 => 13,  66 => 11,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes\\modern\\core\\order_conf.html.twig", "C:\\xampp\\htdocs\\prestashop\\mails\\themes\\modern\\core\\order_conf.html.twig");
    }
}
