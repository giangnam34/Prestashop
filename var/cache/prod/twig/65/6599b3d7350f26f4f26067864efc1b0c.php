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

/* @PrestaShop/Admin/Module/Includes/modal_confirm.html.twig */
class __TwigTemplate_4b9c7e1f11dac8c93a63f595d47ee6bd extends Template
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
        // line 25
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 25), "urls", [], "any", false, false, false, 25)) >= 1)) {
            // line 26
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 26), "urls", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["module_action"] => $context["module_url"]) {
                // line 27
                echo "    ";
                if (twig_in_filter($context["module_action"], [0 => "disable", 1 => "uninstall", 2 => "reset"])) {
                    // line 28
                    echo "      <div id=\"module-modal-confirm-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                    echo "\" class=\"modal modal-vcenter fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <!-- Modal content-->
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h4 class=\"modal-title module-modal-title\">
                ";
                    // line 34
                    if (($context["module_action"] == "disable")) {
                        // line 35
                        echo "                  ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable module?", [], "Admin.Modules.Feature"), "html", null, true);
                        echo "
                ";
                    }
                    // line 37
                    echo "                ";
                    if (($context["module_action"] == "uninstall")) {
                        // line 38
                        echo "                  ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uninstall module?", [], "Admin.Modules.Feature"), "html", null, true);
                        echo "
                ";
                    }
                    // line 40
                    echo "                ";
                    if (($context["module_action"] == "reset")) {
                        // line 41
                        echo "                  ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset module?", [], "Admin.Modules.Feature"), "html", null, true);
                        echo "
                ";
                    }
                    // line 43
                    echo "              </h4>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            <div class=\"modal-body\">
              <p>
                ";
                    // line 50
                    if (($context["module_action"] == "disable")) {
                        // line 51
                        echo "                  ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to disable %moduleName% module.", ["%moduleName%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 51), "displayName", [], "any", false, false, false, 51)], "Admin.Modules.Notification"), "html", null, true);
                        echo "
                  <br>
                  <br>
                  ";
                        // line 54
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your current settings will be saved, but the module will no longer be active.", [], "Admin.Modules.Notification"), "html", null, true);
                        echo "
                ";
                    }
                    // line 56
                    echo "                ";
                    if (($context["module_action"] == "uninstall")) {
                        // line 57
                        echo "                  ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to uninstall %moduleName% module.", ["%moduleName%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 57), "displayName", [], "any", false, false, false, 57)], "Admin.Modules.Notification"), "html", null, true);
                        echo "
                  <br>
                  ";
                        // line 59
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 59), "confirmUninstall", [], "any", false, false, false, 59), "html", null, true);
                        echo "
                  <br>
                  <br>
                  ";
                        // line 62
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This will disable the module and delete all its files. For good.", [], "Admin.Modules.Notification"), "html", null, true);
                        echo "
                  <br>
                  <label>
                    <input type=\"checkbox\" id=\"force_deletion\" name=\"force_deletion\" data-tech-name=\"";
                        // line 65
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 65), "name", [], "any", false, false, false, 65), "html", null, true);
                        echo "\">
                    ";
                        // line 66
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional: delete module folder after uninstall.", [], "Admin.Modules.Feature"), "html", null, true);
                        echo "
                  </label>
                  <br>
                  <span class=\"italic red\">
                    ";
                        // line 70
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This action cannot be undone.", [], "Admin.Modules.Notification"), "html", null, true);
                        echo "
                  </span>
                ";
                    }
                    // line 73
                    echo "                ";
                    if (($context["module_action"] == "reset")) {
                        // line 74
                        echo "                  ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You're about to reset %moduleName% module.", ["%moduleName%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 74), "displayName", [], "any", false, false, false, 74)], "Admin.Modules.Notification"), "html", null, true);
                        echo "
                  <br>
                  <br>
                  ";
                        // line 77
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This will restore the defaults settings.", [], "Admin.Modules.Notification"), "html", null, true);
                        echo "
                  <br>
                  <span class=\"italic red\">
                    ";
                        // line 80
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This action cannot be undone.", [], "Admin.Modules.Notification"), "html", null, true);
                        echo "
                  </span>
                ";
                    }
                    // line 83
                    echo "              </p>
            </div>
            <div class=\"modal-footer\">
              <input type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\" value=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
                    echo "\"/>
              ";
                    // line 87
                    if (($context["module_action"] == "disable")) {
                        // line 88
                        echo "                <a class=\"btn btn-primary uppercase module_action_modal_";
                        echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $context["module_url"], "html", null, true);
                        echo "\" 
                data-dismiss=\"modal\" data-tech-name=\"";
                        // line 89
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 89), "name", [], "any", false, false, false, 89), "html", null, true);
                        echo "\">
                  ";
                        // line 90
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes, disable it", [], "Admin.Modules.Feature"), "html", null, true);
                        echo "
                </a>
              ";
                    }
                    // line 93
                    echo "              ";
                    if (($context["module_action"] == "uninstall")) {
                        // line 94
                        echo "                <a class=\"btn btn-primary uppercase module_action_modal_";
                        echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $context["module_url"], "html", null, true);
                        echo "\" 
                data-dismiss=\"modal\" data-tech-name=\"";
                        // line 95
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95), "html", null, true);
                        echo "\">
                  ";
                        // line 96
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes, uninstall it", [], "Admin.Modules.Feature"), "html", null, true);
                        echo "
                </a>
              ";
                    }
                    // line 99
                    echo "              ";
                    if (($context["module_action"] == "reset")) {
                        // line 100
                        echo "                <a class=\"btn btn-primary uppercase module_action_modal_";
                        echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $context["module_url"], "html", null, true);
                        echo "\" 
                data-dismiss=\"modal\" data-tech-name=\"";
                        // line 101
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 101), "name", [], "any", false, false, false, 101), "html", null, true);
                        echo "\">
                  ";
                        // line 102
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes, reset it", [], "Admin.Modules.Feature"), "html", null, true);
                        echo "
                </a>
              ";
                    }
                    // line 105
                    echo "            </div>
          </div>
        </div>
      </div>
    ";
                }
                // line 110
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['module_action'], $context['module_url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 110,  236 => 105,  230 => 102,  226 => 101,  219 => 100,  216 => 99,  210 => 96,  206 => 95,  199 => 94,  196 => 93,  190 => 90,  186 => 89,  179 => 88,  177 => 87,  173 => 86,  168 => 83,  162 => 80,  156 => 77,  149 => 74,  146 => 73,  140 => 70,  133 => 66,  129 => 65,  123 => 62,  117 => 59,  111 => 57,  108 => 56,  103 => 54,  96 => 51,  94 => 50,  85 => 43,  79 => 41,  76 => 40,  70 => 38,  67 => 37,  61 => 35,  59 => 34,  47 => 28,  44 => 27,  39 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\modal_confirm.html.twig");
    }
}
