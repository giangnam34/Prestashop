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

/* @PrestaShop/Admin/Module/Includes/action_menu.html.twig */
class __TwigTemplate_5daec72eb75ea4bc5cc4eef8a352806a extends Template
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
        list($context["url"], $context["priceRaw"], $context["priceDisplay"], $context["url_active"], $context["urls"], $context["name"], $context["transLabels"], $context["transDomains"]) =         [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 26
($context["module"] ?? null), "attributes", [], "any", false, false, false, 26), "url", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
($context["module"] ?? null), "attributes", [], "any", false, false, false, 27), "price", [], "any", false, false, false, 27), "raw", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 28
($context["module"] ?? null), "attributes", [], "any", false, false, false, 28), "price", [], "any", false, false, false, 28), "displayPrice", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
($context["module"] ?? null), "attributes", [], "any", false, false, false, 29), "url_active", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 30
($context["module"] ?? null), "attributes", [], "any", false, false, false, 30), "urls", [], "any", false, false, false, 30), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 31
($context["module"] ?? null), "attributes", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 32
($context["module"] ?? null), "attributes", [], "any", false, false, false, 32), "actionTranslationLabels", [], "any", false, false, false, 32), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 33
($context["module"] ?? null), "attributes", [], "any", false, false, false, 33), "actionTranslationDomains", [], "any", false, false, false, 33)];
        // line 35
        echo " <div class=\"btn-group module-actions\">
  ";
        // line 36
        if ((($context["url_active"] ?? null) == "buy")) {
            // line 37
            echo "    <a class=\"btn btn-primary btn-primary-reverse btn-block btn-outline-primary module_action_menu_go_to_addons\" href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" target=\"_blank\">
      ";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discover", [], "Admin.Modules.Feature"), "html", null, true);
            echo "
    </a>
  ";
        } elseif (twig_length_filter($this->env,         // line 40
($context["urls"] ?? null))) {
            // line 41
            echo "    ";
            $this->loadTemplate("@PrestaShop/Admin/Module/Includes/action_button.html.twig", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig", 41)->display(twig_array_merge($context, ["name" =>             // line 42
($context["name"] ?? null), "classes_form" => "btn-group form-action-button", "classes" => "btn btn-primary-reverse btn-outline-primary", "url" => (($__internal_compile_0 =             // line 45
($context["urls"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["url_active"] ?? null)] ?? null) : null), "action" =>             // line 46
($context["url_active"] ?? null), "transLabels" =>             // line 47
($context["transLabels"] ?? null), "transDomain" =>             // line 48
($context["transDomains"] ?? null)]));
            // line 50
            echo "    ";
            if ((twig_length_filter($this->env, ($context["urls"] ?? null)) > 1)) {
                // line 51
                echo "        <input type=\"hidden\" class=\"btn\" />
        <button type=\"button\" class=\"btn btn-outline-primary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          <span class=\"caret\"></span>
        </button>
        <span class=\"sr-only\">";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toggle dropdown", [], "Admin.Modules.Feature"), "html", null, true);
                echo "</span>
        <div class=\"dropdown-menu\">
          ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["urls"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["module_action"] => $context["module_url"]) {
                    // line 58
                    echo "            ";
                    if (($context["module_action"] != ($context["url_active"] ?? null))) {
                        // line 59
                        echo "                <li>
                  ";
                        // line 60
                        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/action_button.html.twig", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig", 60)->display(twig_array_merge($context, ["name" =>                         // line 61
($context["name"] ?? null), "classes" => "dropdown-item", "url" =>                         // line 63
$context["module_url"], "action" =>                         // line 64
$context["module_action"], "transLabels" =>                         // line 65
($context["transLabels"] ?? null), "transDomain" =>                         // line 66
($context["transDomains"] ?? null)]));
                        // line 68
                        echo "                </li>
            ";
                    }
                    // line 70
                    echo "          ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['module_action'], $context['module_url'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "        </div>
    ";
            }
            // line 73
            echo "  ";
        }
        // line 74
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/action_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 74,  138 => 73,  134 => 71,  120 => 70,  116 => 68,  114 => 66,  113 => 65,  112 => 64,  111 => 63,  110 => 61,  109 => 60,  106 => 59,  103 => 58,  86 => 57,  81 => 55,  75 => 51,  72 => 50,  70 => 48,  69 => 47,  68 => 46,  67 => 45,  66 => 42,  64 => 41,  62 => 40,  57 => 38,  52 => 37,  50 => 36,  47 => 35,  45 => 33,  44 => 32,  43 => 31,  42 => 30,  41 => 29,  40 => 28,  39 => 27,  38 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\action_menu.html.twig");
    }
}
