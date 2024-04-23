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

/* @PrestaShop/Admin/Module/common.html.twig */
class __TwigTemplate_f10c54a46a0dcfed0eae584538f42f2c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        $context["js_translatable"] = twig_array_merge(["Bulk Action - One module minimum" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You need to select at least one module to use the bulk action.", [], "Admin.Modules.Notification"), "Bulk Action - Request not found" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The action \"[1]\" is not available, impossible to perform your request.", [], "Admin.Modules.Notification"), "Bulk Action - Request not available for module" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The action [1] is not available for module [2]. Skipped.", [], "Admin.Modules.Notification"), "An action is already in progress. Please wait for it to finish." => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("An action is already in progress. Please wait for it to finish.", [], "Admin.Modules.Notification")],         // line 59
($context["js_translatable"] ?? null));
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Module/common.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script>
    var moduleURLs = {
      'configurationPage': '";
        // line 31
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_module_configure_action", ["module_name" => ":number:"]), "js"), "html", null, true);
        echo "',
      'moduleImport': '";
        // line 32
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_module_import"), "js"), "html", null, true);
        echo "',
      'notificationsCount': '";
        // line 33
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_module_notification_count"), "js"), "html", null, true);
        echo "',
      'maintenancePage': '";
        // line 34
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenance"), "js"), "html", null, true);
        echo "',
    };

    var moduleTranslations = {
      'singleModuleModalUpdateTitle': '";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to upgrade this module?", [], "Admin.Modules.Notification"), "html", null, true);
        echo "',
      'multipleModuleModalUpdateTitle': '";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to upgrade these modules?", [], "Admin.Modules.Notification"), "html", null, true);
        echo "',
      'moduleModalUpdateCancel': '";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "',
      'moduleModalUpdateMaintenance': '";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Go to maintenance page", [], "Admin.Actions"), "html", null, true);
        echo "',
      'moduleModalUpdateUpgrade': '";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upgrade", [], "Admin.Actions"), "html", null, true);
        echo "',
      'upgradeAnywayButtonText': '";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upgrade anyway", [], "Admin.Actions"), "html", null, true);
        echo "',
      'moduleModalUpdateConfirmMessage': '";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("We strongly advise you to upgrade the modules on maintenance mode to avoid any cache issues.", [], "Admin.Modules.Notification"), "html", null, true);
        echo "',
    };

    // Need to come from the backend
    var isShopMaintenance = !";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_SHOP_ENABLE")), "html", null, true);
        echo ";
  </script>
  <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/plugins/jquery.pstagger.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/module.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 51,  116 => 50,  111 => 48,  104 => 44,  100 => 43,  96 => 42,  92 => 41,  88 => 40,  84 => 39,  80 => 38,  73 => 34,  69 => 33,  65 => 32,  61 => 31,  54 => 28,  50 => 27,  45 => 25,  43 => 59,  42 => 54,  35 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/common.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\common.html.twig");
    }
}
