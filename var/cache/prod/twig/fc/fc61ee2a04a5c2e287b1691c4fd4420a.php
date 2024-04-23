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

/* @PrestaShop/Admin/layout.html.twig */
class __TwigTemplate_a46e5deaab86b56ab56fd0bf1254f332 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
            'content_header' => [$this, 'block_content_header'],
            'session_alert' => [$this, 'block_session_alert'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return $this->loadTemplate(twig_template_from_string($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getLegacyLayout(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
($context["app"] ?? null), "request", [], "any", false, false, false, 27), "attributes", [], "any", false, false, false, 27), "get", [0 => "_legacy_controller"], "method", false, false, false, 27), ((        // line 28
array_key_exists("layoutTitle", $context)) ? (($context["layoutTitle"] ?? null)) : ("")), ((        // line 29
array_key_exists("layoutHeaderToolbarBtn", $context)) ? (($context["layoutHeaderToolbarBtn"] ?? null)) : ([])), ((        // line 30
array_key_exists("layoutDisplayType", $context)) ? (($context["layoutDisplayType"] ?? null)) : ("")), ((        // line 31
array_key_exists("showContentHeader", $context)) ? (($context["showContentHeader"] ?? null)) : (true)), ((        // line 32
array_key_exists("headerTabContent", $context)) ? (($context["headerTabContent"] ?? null)) : ("")), ((        // line 33
array_key_exists("enableSidebar", $context)) ? (($context["enableSidebar"] ?? null)) : (false)), ((        // line 34
array_key_exists("help_link", $context)) ? (($context["help_link"] ?? null)) : ("")), $this->extensions['PrestaShopBundle\Twig\Extension\JsRouterMetadataExtension']->getJsRouterMetadata(), ((        // line 36
array_key_exists("meta_title", $context)) ? (($context["meta_title"] ?? null)) : ("")), ((        // line 37
array_key_exists("use_regular_h1_structure", $context)) ? (($context["use_regular_h1_structure"] ?? null)) : (true)), ((        // line 38
array_key_exists("legacyBaseLayout", $context)) ? (($context["legacyBaseLayout"] ?? null)) : ("layout.tpl")))), "@PrestaShop/Admin/layout.html.twig", 25);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 42
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/default.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/right-sidebar.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/form_popover_error.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 48
    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "  <script>
    var translate_javascripts = ";
        // line 50
        echo json_encode(($context["js_translatable"] ?? null));
        echo ";
    var PS_ALLOW_ACCENTED_CHARS_URL = ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_ALLOW_ACCENTED_CHARS_URL")), "html", null, true);
        echo ";
  </script>
";
    }

    // line 55
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "  ";
        $this->displayBlock("session_alert", $context, $blocks);
        echo "
";
    }

    // line 59
    public function block_session_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "  ";
        // line 80
        echo "  ";
        $macros["layout"] = $this;
        // line 81
        echo "
  ";
        // line 82
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 82), "flashbag", [], "any", false, false, false, 82), "peek", [0 => "error"], "method", false, false, false, 82)) > 0)) {
            // line 83
            echo "    ";
            echo twig_call_macro($macros["layout"], "macro_alert", ["danger", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 83), "flashbag", [], "any", false, false, false, 83), "get", [0 => "error"], "method", false, false, false, 83)], 83, $context, $this->getSourceContext());
            echo "
  ";
        }
        // line 85
        echo "  ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 85), "flashbag", [], "any", false, false, false, 85), "peek", [0 => "failure"], "method", false, false, false, 85)) > 0)) {
            // line 86
            echo "    ";
            echo twig_call_macro($macros["layout"], "macro_alert", ["danger", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 86), "flashbag", [], "any", false, false, false, 86), "get", [0 => "failure"], "method", false, false, false, 86)], 86, $context, $this->getSourceContext());
            echo "
  ";
        }
        // line 88
        echo "  ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 88), "flashbag", [], "any", false, false, false, 88), "peek", [0 => "success"], "method", false, false, false, 88)) > 0)) {
            // line 89
            echo "    ";
            echo twig_call_macro($macros["layout"], "macro_alert", ["success", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 89), "flashbag", [], "any", false, false, false, 89), "get", [0 => "success"], "method", false, false, false, 89)], 89, $context, $this->getSourceContext());
            echo "
  ";
        }
        // line 91
        echo "  ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 91), "flashbag", [], "any", false, false, false, 91), "peek", [0 => "warning"], "method", false, false, false, 91)) > 0)) {
            // line 92
            echo "    ";
            echo twig_call_macro($macros["layout"], "macro_alert", ["warning", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 92), "flashbag", [], "any", false, false, false, 92), "get", [0 => "warning"], "method", false, false, false, 92)], 92, $context, $this->getSourceContext());
            echo "
  ";
        }
        // line 94
        echo "  ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 94), "flashbag", [], "any", false, false, false, 94), "peek", [0 => "info"], "method", false, false, false, 94)) > 0)) {
            // line 95
            echo "    ";
            echo twig_call_macro($macros["layout"], "macro_alert", ["info", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 95), "flashbag", [], "any", false, false, false, 95), "get", [0 => "info"], "method", false, false, false, 95)], 95, $context, $this->getSourceContext());
            echo "
  ";
        }
    }

    // line 99
    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "  <nav
    id=\"right-sidebar\"
    role=\"navigation\"
    class=\"col-lg-3 sidebar sidebar-right sidebar-animate text-sm-center\"
  >
    <img
      src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/img/bundle/dashboard_loading.gif"), "html", null, true);
        echo "\"
      style=\"margin-top: 10em;\" alt=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading...", [], "Admin.Global"), "html", null, true);
        echo "\"
    />
  </nav>
";
    }

    // line 60
    public function macro_alert($__type__ = null, $__flashbagContent__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "type" => $__type__,
            "flashbagContent" => $__flashbagContent__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 61
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo " d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      ";
            // line 65
            if ((twig_length_filter($this->env, ($context["flashbagContent"] ?? null)) > 1)) {
                // line 66
                echo "        <ul class=\"alert-text\">
          ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["flashbagContent"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 68
                    echo "            <li>";
                    echo $context["flashMessage"];
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "        </ul>
      ";
            } else {
                // line 72
                echo "        <div class=\"alert-text\">
          ";
                // line 73
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["flashbagContent"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 74
                    echo "            <p>";
                    echo $context["flashMessage"];
                    echo "</p>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "        </div>
      ";
            }
            // line 78
            echo "    </div>
  ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 78,  251 => 76,  242 => 74,  238 => 73,  235 => 72,  231 => 70,  222 => 68,  218 => 67,  215 => 66,  213 => 65,  205 => 61,  191 => 60,  183 => 107,  179 => 106,  171 => 100,  167 => 99,  159 => 95,  156 => 94,  150 => 92,  147 => 91,  141 => 89,  138 => 88,  132 => 86,  129 => 85,  123 => 83,  121 => 82,  118 => 81,  115 => 80,  113 => 60,  109 => 59,  102 => 56,  98 => 55,  91 => 51,  87 => 50,  84 => 49,  80 => 48,  74 => 45,  70 => 44,  65 => 43,  61 => 42,  57 => 25,  50 => 38,  49 => 37,  48 => 36,  47 => 34,  46 => 33,  45 => 32,  44 => 31,  43 => 30,  42 => 29,  41 => 28,  40 => 27,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/layout.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\layout.html.twig");
    }
}
