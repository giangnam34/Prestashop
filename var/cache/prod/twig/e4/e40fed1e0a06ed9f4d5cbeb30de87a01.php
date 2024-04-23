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

/* @PrestaShop/Admin/Multistore/header.html.twig */
class __TwigTemplate_a9debc7c05147e56838286905027326d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'multistore_header' => [$this, 'block_multistore_header'],
            'multishop_header_right' => [$this, 'block_multishop_header_right'],
            'search_shops' => [$this, 'block_search_shops'],
            'all_shops_item' => [$this, 'block_all_shops_item'],
            'shop_group_item' => [$this, 'block_shop_group_item'],
            'shop_item' => [$this, 'block_shop_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $this->displayBlock('multistore_header', $context, $blocks);
    }

    public function block_multistore_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "  ";
        if ((($context["isMultistoreUsed"] ?? null) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 26)))) {
            // line 27
            echo "    <div
        id=\"header-multishop\"
        class=\"header-multishop";
            // line 29
            if (($context["isAllShopContext"] ?? null)) {
                echo " header-multishop-allshops";
            } elseif (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentContext"] ?? null), "color", [], "any", false, false, false, 29))) {
                echo " header-multishop-default";
            }
            if ((($context["isTitleDark"] ?? null) === true)) {
                echo " header-multishop-dark";
            } else {
                echo " header-multishop-bright";
            }
            echo "\"
        ";
            // line 30
            if (($context["isShopContext"] ?? null)) {
                echo "data-shop-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentContext"] ?? null), "id", [], "any", false, false, false, 30), "html", null, true);
                echo "\"";
            } elseif (($context["isGroupContext"] ?? null)) {
                echo "data-group-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentContext"] ?? null), "id", [], "any", false, false, false, 30), "html", null, true);
                echo "\"";
            } else {
                echo "data-all-shops=\"1\"";
            }
            // line 31
            echo "        ";
            if (($context["colorConfigLink"] ?? null)) {
                echo "data-header-color-notification=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customize your multistore header, [1]pick a color[/1] for this store context.", ["[1]" => (("<a href=\"" . ($context["colorConfigLink"] ?? null)) . "\">"), "[/1]" => "</a>"], "Admin.Navigation.Header"), "html", null, true);
                echo "\"";
            }
            // line 32
            echo "        data-checkbox-notification=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To apply specific settings to a store or a group of stores, select the parameter to modify, make your changes and save.", [], "Admin.Navigation.Header") . " "), "html", null, true);
            echo "\"
    >
      <div class=\"header-multishop-top-bar\"";
            // line 34
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentContext"] ?? null), "color", [], "any", false, false, false, 34))) {
                echo " style=\"background-color: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentContext"] ?? null), "color", [], "any", false, false, false, 34), "html", null, true);
                echo ";\"";
            }
            echo ">
        <div class=\"header-multishop-center js-header-multishop-open-modal\">
          ";
            // line 36
            if (($context["isShopContext"] ?? null)) {
                // line 37
                echo "            ";
                $this->loadTemplate("@PrestaShop/Admin/Multistore/shop_icon.html.twig", "@PrestaShop/Admin/Multistore/header.html.twig", 37)->display($context);
                // line 38
                echo "          ";
            } else {
                // line 39
                echo "            ";
                $this->loadTemplate("@PrestaShop/Admin/Multistore/multi_shops_icon.html.twig", "@PrestaShop/Admin/Multistore/header.html.twig", 39)->display($context);
                // line 40
                echo "          ";
            }
            // line 41
            echo "
          <h2 class=\"header-multishop-title\">
            ";
            // line 43
            if (($context["isGroupContext"] ?? null)) {
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global") . " "), "html", null, true);
                echo " ";
            }
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentContext"] ?? null), "name", [], "any", false, false, false, 43), "html", null, true);
            echo "
          </h2>

          <button class=\"header-multishop-button\">
            <i class=\"material-icons\">expand_more</i>
          </button>
        </div>
      </div>

      ";
            // line 52
            if (($context["isShopContext"] ?? null)) {
                // line 53
                echo "        <div class=\"header-multishop-right\">
          ";
                // line 54
                $this->displayBlock('multishop_header_right', $context, $blocks);
                // line 57
                echo "        </div>
      ";
            }
            // line 59
            echo "
      <div id=\"multishop-modal\" class=\"multishop-modal multishop-modal-hidden js-multishop-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"multishop-modal\" aria-hidden=\"true\">
        <div class=\"multishop-modal-dialog js-multishop-modal-dialog\" role=\"document\">
          <div class=\"multishop-modal-body\">
            ";
            // line 63
            $this->displayBlock('search_shops', $context, $blocks);
            // line 71
            echo "
            <ul class=\"multishop-modal-group-list js-multishop-scrollbar\">
                ";
            // line 73
            $this->displayBlock('all_shops_item', $context, $blocks);
            // line 85
            echo "
              ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["groupList"] ?? null), function ($__group__) use ($context, $macros) { $context["group"] = $__group__; return  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["group"], "shops", [], "any", false, false, false, 86)); }));
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 87
                echo "                <li class=\"multishop-modal-group-item multishop-modal-item";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 87)) {
                    echo " first-group-item";
                }
                echo "\">
                  ";
                // line 88
                $this->displayBlock('shop_group_item', $context, $blocks);
                // line 95
                echo "                </li>

                ";
                // line 97
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "shops", [], "any", false, false, false, 97));
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
                foreach ($context['_seq'] as $context["_key"] => $context["shop"]) {
                    // line 98
                    echo "                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                    ";
                    // line 99
                    $this->displayBlock('shop_item', $context, $blocks);
                    // line 113
                    echo "                  </li>
                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shop'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "              ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "            </ul>
          </div>
        </div>
      </div>
    </div>

    <script src=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/multistore_header.bundle.js"), "html", null, true);
            echo "\"></script>
  ";
        }
    }

    // line 54
    public function block_multishop_header_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "          <a class=\"header-multishop-view-action\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "getBaseLink", [0 => twig_get_attribute($this->env, $this->source, ($context["currentContext"] ?? null), "id", [], "any", false, false, false, 55)], "method", false, false, false, 55), "html", null, true);
        echo "\" target=\"_blank\" rel=\"nofollow\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View my store", [], "Admin.Navigation.Header"), "html", null, true);
        echo " <i class=\"material-icons\">visibility</i></a>
          ";
    }

    // line 63
    public function block_search_shops($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "            ";
        if ((($context["lockedToAllShopContext"] ?? null) == false)) {
            // line 65
            echo "            <div class=\"multishop-modal-search-container\">
              <i class=\"material-icons\">search</i>
              <input type=\"text\" class=\"form-control multishop-modal-search js-multishop-modal-search\" placeholder=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search store name", [], "Admin.Navigation.Header"), "html", null, true);
            echo "\" data-no-results=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No results found for", [], "Admin.Global"), "html", null, true);
            echo "\" data-searching=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Searching for", [], "Admin.Global"), "html", null, true);
            echo "\">
            </div>
            ";
        }
        // line 70
        echo "            ";
    }

    // line 73
    public function block_all_shops_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "                <li class=\"multishop-modal-all multishop-modal-item\">
                  ";
        // line 75
        if (($context["isAllShopContext"] ?? null)) {
            // line 76
            echo "                    <i class=\"material-icons\">check</i>
                  ";
        } else {
            // line 78
            echo "                    <span class=\"multishop-modal-color\" style=\"background-color:#25b9d7;\"></span>
                  ";
        }
        // line 80
        echo "                  <a class=\"multishop-modal-all-name\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateUrl(), "html", null, true);
        echo "\">
                    <span>";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All stores", [], "Admin.Global"), "html", null, true);
        echo "</span>
                  </a>
                </li>
                ";
    }

    // line 88
    public function block_shop_group_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "                  <span class=\"multishop-modal-color-container";
        if ((($context["isGroupContext"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["currentContext"] ?? null), "id", [], "any", false, false, false, 89) == twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "id", [], "any", false, false, false, 89)))) {
            echo " multishop-modal-color-check";
        }
        echo "\">
                    <i class=\"material-icons\">check</i>
                    <a class=\"multishop-modal-color\"";
        // line 91
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "color", [], "any", false, false, false, 91))) {
            echo " style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "color", [], "any", false, false, false, 91), "html", null, true);
            echo ";\"";
        }
        echo " href=\"";
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminShopGroup", true, ["id_shop_group" => twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "id", [], "any", false, false, false, 91), "updateshop_group" => true]), "html", null, true);
        echo "\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit color", [], "Admin.Global"), "html", null, true);
        echo "\" data-original-title=\"\" title=\"\"></a>
                  </span>
                  <a class=\"multishop-modal-group-name\" href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateGroupUrl(($context["group"] ?? null)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global") . " ") . twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "name", [], "any", false, false, false, 93)), "html", null, true);
        echo "</a>
                  ";
    }

    // line 99
    public function block_shop_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "                    <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container";
        // line 101
        if ((($context["isShopContext"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["currentContext"] ?? null), "id", [], "any", false, false, false, 101) == twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 101)))) {
            echo " multishop-modal-color-check";
        }
        echo "\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\"";
        // line 103
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "color", [], "any", false, false, false, 103))) {
            echo " style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "color", [], "any", false, false, false, 103), "html", null, true);
            echo ";\"";
        }
        echo " href=\"";
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminShop", true, ["shop_id" => twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 103), "updateshop" => true]), "html", null, true);
        echo "\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit color", [], "Admin.Global"), "html", null, true);
        echo "\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name";
        // line 105
        if ((twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "hasMainUrl", [], "method", false, false, false, 105) == false)) {
            echo " multishop-modal-no-url\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "name", [], "any", false, false, false, 105), "html", null, true);
            echo "</a>";
        } else {
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateShopUrl(($context["shop"] ?? null)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "name", [], "any", false, false, false, 105), "html", null, true);
            echo "</a>";
        }
        // line 106
        echo "                    </div>
                    ";
        // line 107
        if (twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "hasMainUrl", [], "method", false, false, false, 107)) {
            // line 108
            echo "                      <a class=\"multishop-modal-shop-view\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "getBaseLink", [0 => twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 108)], "method", false, false, false, 108), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noreferrer\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View my store", [], "Admin.Navigation.Header"), "html", null, true);
            echo " <i class=\"material-icons\">visibility</i></a>
                    ";
        } else {
            // line 110
            echo "                      <a class=\"multishop-modal-shop-view\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminShopUrl", true, ["shop_id" => twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 110), "addshop_url" => 1]), "html", null, true);
            echo "\" rel=\"noreferrer\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure URL", [], "Admin.Actions"), "html", null, true);
            echo " <i class=\"material-icons\">visibility</i></a>
                    ";
        }
        // line 112
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Multistore/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  423 => 112,  415 => 110,  407 => 108,  405 => 107,  402 => 106,  390 => 105,  377 => 103,  370 => 101,  367 => 100,  363 => 99,  355 => 93,  342 => 91,  334 => 89,  330 => 88,  322 => 81,  317 => 80,  313 => 78,  309 => 76,  307 => 75,  304 => 74,  300 => 73,  296 => 70,  286 => 67,  282 => 65,  279 => 64,  275 => 63,  266 => 55,  262 => 54,  255 => 122,  247 => 116,  233 => 115,  218 => 113,  216 => 99,  213 => 98,  196 => 97,  192 => 95,  190 => 88,  183 => 87,  166 => 86,  163 => 85,  161 => 73,  157 => 71,  155 => 63,  149 => 59,  145 => 57,  143 => 54,  140 => 53,  138 => 52,  122 => 43,  118 => 41,  115 => 40,  112 => 39,  109 => 38,  106 => 37,  104 => 36,  95 => 34,  89 => 32,  82 => 31,  70 => 30,  57 => 29,  53 => 27,  50 => 26,  43 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Multistore/header.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Multistore\\header.html.twig");
    }
}
