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

/* @PrestaShop/Admin/Module/Includes/modal_import.html.twig */
class __TwigTemplate_a666d4f225c18a3452d1e89cde0567f7 extends Template
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
        echo "<div id=\"module-modal-import\" class=\"modal modal-vcenter fade\" role=\"dialog\" data-backdrop=\"static\" data-keyboard=\"false\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upload a module", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</h4>
        <button id=\"module-modal-import-closing-cross\" type=\"button\" class=\"close\">&times;</button>
      </div>
      <div class=\"modal-body\">
        ";
        // line 34
        if ((($context["level"] ?? null) <= twig_constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_UPDATE"))) {
            // line 35
            echo "          <div class=\"alert alert-danger\" role=\"alert\">
            <p class=\"alert-text\">
              ";
            // line 37
            echo twig_escape_filter($this->env, ($context["errorMessage"] ?? null), "html", null, true);
            echo "
            </p>
          </div>
        ";
        } else {
            // line 41
            echo "          <form action=\"#\" class=\"dropzone\" id=\"importDropzone\">
            <div class=\"module-import-start\">
              <i class=\"module-import-start-icon material-icons\">cloud_upload</i><br/>
              <p class=\"module-import-start-main-text\">
                ";
            // line 45
            echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Drop your module archive here or [1]select file[/1]", [], "Admin.Modules.Feature"), ["[1]" => "<a href=\"#\" class=\"module-import-start-select-manual\">", "[/1]" => "</a>"]);
            echo "
              </p>
              <p class=\"module-import-start-footer-text\">
                ";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please upload one file at a time, .zip or tarball format (.tar, .tar.gz or .tgz).", [], "Admin.Modules.Help"), "html", null, true);
            echo "
                ";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your module will be installed right after that.", [], "Admin.Modules.Help"), "html", null, true);
            echo "
              </p>
            </div>
            <div
              class=\"module-import-processing\">
              <!-- Loader -->
              <div class=\"spinner\"></div>
              <p class=\"module-import-processing-main-text\">";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Installing module...", [], "Admin.Modules.Notification"), "html", null, true);
            echo "</p>
              <p class=\"module-import-processing-footer-text\">
                ";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("It will close as soon as the module is installed. It won't be long!", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              </p>
            </div>
            <div class=\"module-import-success\">
              <i class=\"module-import-success-icon material-icons\">done</i><br/>
              <p class=\"module-import-success-msg\">";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module installed!", [], "Admin.Modules.Notification"), "html", null, true);
            echo "</p>
              <p class=\"module-import-success-details\"></p>
              <a class=\"module-import-success-configure btn btn-primary-reverse btn-outline-primary light-button\" href=\"#\">";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure", [], "Admin.Actions"), "html", null, true);
            echo "</a>
            </div>
            <div class=\"module-import-failure\">
              <i class=\"module-import-failure-icon material-icons\">error</i><br/>
              <p class=\"module-import-failure-msg\">";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Oops... Upload failed.", [], "Admin.Modules.Notification"), "html", null, true);
            echo "</p>
              <a href=\"#\" class=\"module-import-failure-details-action\">";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("What happened?", [], "Admin.Modules.Help"), "html", null, true);
            echo "</a>
              <div class=\"module-import-failure-details\"></div>
              <a class=\"module-import-failure-retry btn btn-tertiary\" href=\"#\">";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Try again", [], "Admin.Actions"), "html", null, true);
            echo "</a>
            </div>
            <div class=\"module-import-confirm\"></div>
          </form>
        ";
        }
        // line 77
        echo "      </div>
      <div class=\"modal-footer\"></div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/modal_import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 77,  124 => 72,  119 => 70,  115 => 69,  108 => 65,  103 => 63,  95 => 58,  90 => 56,  80 => 49,  76 => 48,  70 => 45,  64 => 41,  57 => 37,  53 => 35,  51 => 34,  44 => 30,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/modal_import.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\modal_import.html.twig");
    }
}
