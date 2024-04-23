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

/* @PrestaShop/Admin/Module/Includes/card_list.html.twig */
class __TwigTemplate_16b9ac8c947a86ffd45c8d8f06a0707d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'addon_version' => [$this, 'block_addon_version'],
            'addon_description' => [$this, 'block_addon_description'],
            'addon_additional_description' => [$this, 'block_addon_additional_description'],
            'module_actions' => [$this, 'block_module_actions'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $context["isModuleActive"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "database", [], "any", false, true, false, 25), "active", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "database", [], "any", false, true, false, 25), "active", [], "any", false, false, false, 25), "0")) : ("0"));
        // line 26
        echo "
<div
  class=\"module-item module-item-list col-md-12 ";
        // line 28
        if (((($context["origin"] ?? null) == "manage") && (($context["isModuleActive"] ?? null) == "0"))) {
            echo "module-item-list-isNotActive";
        }
        echo "\"
  data-id=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
        echo "\"
  data-name=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 30), "displayName", [], "any", false, false, false, 30), "html", null, true);
        echo "\"
  data-scoring=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 31), "avgRate", [], "any", false, false, false, 31), "html", null, true);
        echo "\"
  data-logo=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 32), "img", [], "any", false, false, false, 32), "html", null, true);
        echo "\"
  data-author=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 33), "author", [], "any", false, false, false, 33), "html", null, true);
        echo "\"
  data-version=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 34), "version", [], "any", false, false, false, 34), "html", null, true);
        echo "\"
  data-description=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 35), "description", [], "any", false, false, false, 35), "html", null, true);
        echo "\"
  data-tech-name=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
        echo "\"
  data-child-categories=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 37), "categoryName", [], "any", false, false, false, 37), "html", null, true);
        echo "\"
  data-categories=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["category"] ?? null), "html", null, true);
        echo "\"
  data-type=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 39), "productType", [], "any", false, false, false, 39), "html", null, true);
        echo "\"
  data-price=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 40), "price", [], "any", false, false, false, 40), "raw", [], "any", false, false, false, 40), "html", null, true);
        echo "\"
  data-active=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["isModuleActive"] ?? null), "html", null, true);
        echo "\"
  data-installed=\"";
        // line 42
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "database", [], "any", false, true, false, 42), "installed", [], "any", true, true, false, 42)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "database", [], "any", false, true, false, 42), "installed", [], "any", false, false, false, 42), "0")) : ("0")), "html", null, true);
        echo "\"
  data-last-access=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "database", [], "any", false, false, false, 43), "last_access_date", [], "any", false, false, false, 43), "html", null, true);
        echo "\"
>
  <div class=\"container-fluid\">
    <div class=\"module-item-wrapper-list row\">
      <div class=\"col-lg-1 text-sm-center\">
        <div class=\"module-logo-thumb-list\">
          <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 49), "img", [], "any", false, false, false, 49), "html", null, true);
        echo "\" class=\"text-md-center\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 49), "displayName", [], "any", false, false, false, 49), "html", null, true);
        echo "\"/>
        </div>
      </div>
      <div class=\"col-lg-11 row\">
        <div class=\"col-md-10 col-lg-11\">
          <h3
            class=\"text-ellipsis module-name-list\"
            data-toggle=\"pstooltip\"
            data-placement=\"top\"
            title=\"";
        // line 58
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 58), "displayName", [], "any", false, false, false, 58);
        echo "\"
          >
            ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 60), "displayName", [], "any", false, false, false, 60)) {
            // line 61
            echo "              ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 61), "displayName", [], "any", false, false, false, 61);
            echo "

            ";
        } else {
            // line 64
            echo "              ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), "html", null, true);
            echo "
            ";
        }
        // line 66
        echo "          </h3>
        </div>
        <div class=\"col-md-2\">
          <div class=\"text-ellipsis small-text\">
            ";
        // line 70
        $this->displayBlock('addon_version', $context, $blocks);
        // line 77
        echo "          </div>
          <div>
            ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, true, false, 79), "urls", [], "any", false, true, false, 79), "upgrade", [], "any", true, true, false, 79)) {
            // line 80
            echo "                <span class=\"badge badge-success my-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upgrade available", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</span>
            ";
        }
        // line 82
        echo "          </div>
        </div>
        <div class=\"col-md-8 col-lg-7\">
          ";
        // line 85
        $this->displayBlock('addon_description', $context, $blocks);
        // line 91
        echo "          ";
        $this->displayBlock('addon_additional_description', $context, $blocks);
        // line 96
        echo "        </div>
        <div class=\"col-lg-3 text-md-right\">
          ";
        // line 98
        $this->displayBlock('module_actions', $context, $blocks);
        // line 109
        echo "        </div>
        ";
        // line 110
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig", "@PrestaShop/Admin/Module/Includes/card_list.html.twig", 110)->display(twig_array_merge($context, ["module" => ($context["module"] ?? null)]));
        // line 111
        echo "      </div>
    </div>
  </div>
</div>
";
    }

    // line 70
    public function block_addon_version($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "              ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 71), "productType", [], "any", false, false, false, 71) == "service")) {
            // line 72
            echo "                ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Service by %author%", ["%author%" => (("<b>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 72), "author", [], "any", false, false, false, 72)) . "</b>")], "Admin.Modules.Feature");
            echo "
              ";
        } else {
            // line 74
            echo "                ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("v%version% - by %author%", ["%version%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 74), "version", [], "any", false, false, false, 74), "%author%" => (("<b>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 74), "author", [], "any", false, false, false, 74)) . "</b>")], "Admin.Modules.Feature");
            echo "
              ";
        }
        // line 76
        echo "            ";
    }

    // line 85
    public function block_addon_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "            ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 86), "description", [], "any", false, false, false, 86);
        echo "
            ";
        // line 87
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 87), "description", [], "any", false, false, false, 87)) > 0) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 87), "description", [], "any", false, false, false, 87)) < twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 87), "fullDescription", [], "any", false, false, false, 87))))) {
            // line 88
            echo "              ...
            ";
        }
        // line 90
        echo "          ";
    }

    // line 91
    public function block_addon_additional_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, true, false, 92), "additional_description", [], "any", true, true, false, 92)) {
            // line 93
            echo "              ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 93), "additional_description", [], "any", false, false, false, 93);
            echo "
            ";
        }
        // line 95
        echo "          ";
    }

    // line 98
    public function block_module_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "            ";
        if ((array_key_exists("requireBulkActions", $context) && (($context["requireBulkActions"] ?? null) == true))) {
            // line 100
            echo "              <div class=\"module-checkbox-bulk-list md-checkbox\">
                <label>
                  <input type=\"checkbox\" data-name=\"";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 102), "displayName", [], "any", false, false, false, 102), "html", null, true);
            echo "\" data-tech-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 102), "name", [], "any", false, false, false, 102), "html", null, true);
            echo "\" />
                  <i class=\"md-checkbox-control\"></i>
                </label>
              </div>
            ";
        }
        // line 107
        echo "            ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/action_menu.html.twig", "@PrestaShop/Admin/Module/Includes/card_list.html.twig", 107)->display(twig_array_merge($context, ["module" => ($context["module"] ?? null)]));
        // line 108
        echo "          ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/card_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 108,  281 => 107,  271 => 102,  267 => 100,  264 => 99,  260 => 98,  256 => 95,  250 => 93,  247 => 92,  243 => 91,  239 => 90,  235 => 88,  233 => 87,  228 => 86,  224 => 85,  220 => 76,  214 => 74,  208 => 72,  205 => 71,  201 => 70,  193 => 111,  191 => 110,  188 => 109,  186 => 98,  182 => 96,  179 => 91,  177 => 85,  172 => 82,  166 => 80,  164 => 79,  160 => 77,  158 => 70,  152 => 66,  146 => 64,  139 => 61,  137 => 60,  132 => 58,  118 => 49,  109 => 43,  105 => 42,  101 => 41,  97 => 40,  93 => 39,  89 => 38,  85 => 37,  81 => 36,  77 => 35,  73 => 34,  69 => 33,  65 => 32,  61 => 31,  57 => 30,  53 => 29,  47 => 28,  43 => 26,  41 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/card_list.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\card_list.html.twig");
    }
}
