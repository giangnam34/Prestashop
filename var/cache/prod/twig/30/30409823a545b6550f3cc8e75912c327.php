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

/* @PrestaShop/Admin/Module/manage.html.twig */
class __TwigTemplate_f0127dfa73e5d40dc9bfa157fd8faa66 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'catalog_categories_listing' => [$this, 'block_catalog_categories_listing'],
            'addon_card_see_more' => [$this, 'block_addon_card_see_more'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/common.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col-xl-10\">
      ";
        // line 31
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_confirm_bulk_action.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 31)->display($context);
        // line 32
        echo "      ";
        // line 33
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_import.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 33)->display(twig_array_merge($context, ["level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null)]));
        // line 34
        echo "      ";
        // line 35
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/menu_top.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 35)->display(twig_array_merge($context, ["topMenuData" => ($context["topMenuData"] ?? null), "bulkActions" => ($context["bulkActions"] ?? null)]));
        // line 36
        echo "
      ";
        // line 37
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_manage_recently_used.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 37)->display(twig_array_merge($context, ["display_type" => "list", "origin" => "manage"]));
        // line 38
        echo "
      ";
        // line 39
        $this->displayBlock('catalog_categories_listing', $context, $blocks);
        // line 58
        echo "    </div>
  </div>
";
    }

    // line 39
    public function block_catalog_categories_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "subMenu", [], "any", false, false, false, 40));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 41
            echo "          ";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["category"], "modules", [], "any", false, false, false, 41))) {
                // line 42
                echo "            ";
                $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_manage_empty.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 42)->display(twig_array_merge($context, ["category" => $context["category"], "display_type" => "list", "origin" => "manage"]));
                // line 43
                echo "          ";
            } else {
                // line 44
                echo "            <div class=\"module-short-list\">
              <span id=\"";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "refMenu", [], "any", false, false, false, 45), "html", null, true);
                echo "_modules\" class=\"module-search-result-title\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 45), [], "Admin.Modules.Feature"), "html", null, true);
                echo "</span>

              ";
                // line 47
                $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_manage_installed.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 47)->display(twig_array_merge($context, ["modules" => twig_get_attribute($this->env, $this->source, $context["category"], "modules", [], "any", false, false, false, 47), "display_type" => "list", "origin" => "manage", "id" => twig_get_attribute($this->env, $this->source, $context["category"], "refMenu", [], "any", false, false, false, 47)]));
                // line 48
                echo "
              ";
                // line 49
                $this->displayBlock('addon_card_see_more', $context, $blocks);
                // line 54
                echo "            </div>
          ";
            }
            // line 56
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "      ";
    }

    // line 49
    public function block_addon_card_see_more($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "modules", [], "any", false, false, false, 50)) > ($context["maxModulesDisplayed"] ?? null))) {
            // line 51
            echo "                  ";
            $this->loadTemplate("@PrestaShop/Admin/Module/Includes/see_more.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 51)->display(twig_array_merge($context, ["id" => twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "refMenu", [], "any", false, false, false, 51)]));
            // line 52
            echo "                ";
        }
        // line 53
        echo "              ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 53,  165 => 52,  162 => 51,  159 => 50,  155 => 49,  151 => 57,  137 => 56,  133 => 54,  131 => 49,  128 => 48,  126 => 47,  119 => 45,  116 => 44,  113 => 43,  110 => 42,  107 => 41,  89 => 40,  85 => 39,  79 => 58,  77 => 39,  74 => 38,  72 => 37,  69 => 36,  66 => 35,  64 => 34,  61 => 33,  59 => 32,  56 => 31,  52 => 28,  48 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/manage.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\manage.html.twig");
    }
}
