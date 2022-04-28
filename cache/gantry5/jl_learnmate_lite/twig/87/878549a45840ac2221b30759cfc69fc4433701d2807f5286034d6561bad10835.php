<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @particles/jlnavbar.html.twig */
class __TwigTemplate_995ffdfd17109d86cf5ffe0d61cf15722d6f9a8c6d1536f15eb83967de14de6d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        try {            // line 2
            $context["menu"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "menu", []), "instance", [0 => ($context["particle"] ?? null)], "method");
        } catch (\Exception $e) {
            if ($context['gantry']->debug()) throw $e;
            if (\GANTRY_DEBUGGER) \Gantry\Debugger::addException($e);
            $context['e'] = $e;
            // line 4
            echo "<div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["e"] ?? null), "getMessage", []), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
";
        // line 7
        if (($this->getAttribute(($context["particle"] ?? null), "sticky", []) || $this->getAttribute(($context["particle"] ?? null), "m_sticky", []))) {
            // line 8
            $context["sticky_navbar"] = ('' === $tmp = "html {height: auto;}") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 9
            $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addInlineStyle", [0 => ($context["sticky_navbar"] ?? null), 1 => 0], "method");
        }
        // line 11
        echo "
";
        // line 12
        ob_start(function () { return ''; });
        // line 13
        ob_start(function () { return ''; });
        // line 14
        if (($this->getAttribute(($context["particle"] ?? null), "main_nav_margin", []) && twig_test_empty($this->getAttribute(($context["particle"] ?? null), "navbar_style", [])))) {
            echo "#g-navigation .g-main-nav {margin: 0;}";
        }
        // line 15
        if ($this->getAttribute(($context["particle"] ?? null), "navbar_height", [])) {
            // line 16
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-navbar-item, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-navbar-nav>li>a,#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-navbar-nav>li>div.g-menu-item-container,#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-navbar-toggle {min-height: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_height", []));
            echo "}
";
        }
        // line 18
        if ($this->getAttribute(($context["particle"] ?? null), "navbar_style", [])) {
            // line 19
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_fontsize", [])) {
                // line 20
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-item, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-toggle { ";
                if ($this->getAttribute(($context["particle"] ?? null), "navbar_fontsize", [])) {
                    echo "font-size: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_fontsize", []), "html", null, true);
                    echo "; ";
                }
                echo " }
";
            }
            // line 22
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_color", [])) {
                // line 23
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a {color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_color", []), "html", null, true);
                echo ";}
";
            }
            // line 25
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_hover_color", [])) {
                // line 26
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li:hover>a, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a.jl-open, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a:focus {color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_hover_color", []), "html", null, true);
                echo ";}
";
            }
            // line 28
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_active_color", [])) {
                // line 29
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a:active,
#";
                // line 30
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li.jl-active>a { color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_active_color", []), "html", null, true);
                echo "; }
";
            }
            // line 32
            if (($this->getAttribute(($context["particle"] ?? null), "navbar_padding_top", []) || $this->getAttribute(($context["particle"] ?? null), "navbar_padding_bottom", []))) {
                // line 33
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-container { ";
                if ($this->getAttribute(($context["particle"] ?? null), "navbar_padding_top", [])) {
                    echo "padding-top: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_padding_top", []), "html", null, true);
                    echo ";";
                }
                if ($this->getAttribute(($context["particle"] ?? null), "navbar_padding_bottom", [])) {
                    echo "padding-bottom: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_padding_bottom", []), "html", null, true);
                    echo ";";
                }
                echo " }
";
            }
            // line 35
            if (((($this->getAttribute(($context["particle"] ?? null), "dropdown_bg", []) || $this->getAttribute(($context["particle"] ?? null), "dropdown_color", [])) || $this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", [])) || $this->getAttribute(($context["particle"] ?? null), "dropdown_padding", []))) {
                // line 36
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown { 
    ";
                // line 37
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_bg", [])) {
                    echo "background: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_bg", []), "html", null, true);
                    echo ";";
                }
                // line 38
                echo "    ";
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_color", [])) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_color", []), "html", null, true);
                    echo ";";
                }
                // line 39
                echo "    ";
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", [])) {
                    echo "border-radius: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", []), "html", null, true);
                    echo ";";
                }
                // line 40
                echo "    ";
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_padding", [])) {
                    echo "padding: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_padding", []), "html", null, true);
                    echo ";";
                }
                // line 41
                echo "}
";
            }
            // line 43
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_padding", [])) {
                // line 44
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-nav>li>a { padding: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_nav_padding", []));
                echo "; }
";
            }
            // line 46
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", [])) {
                // line 47
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li>a { ";
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", [])) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", []));
                    echo ";";
                }
                echo " }
";
            }
            // line 49
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", [])) {
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li>a { font-size: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", []), "html", null, true);
                echo ";} ";
            }
            echo " 
";
            // line 50
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_hover_color", [])) {
                // line 51
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li>a:focus,
#";
                // line 52
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li>a:hover{ color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_hover_color", []));
                echo "; }
";
            }
            // line 54
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_active_color", [])) {
                // line 55
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li.jl-active>a{ color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_active_color", []));
                echo ";}
";
            }
            // line 57
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_divider", [])) {
                // line 58
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-grid>:not(.jl-first-column)::before { border-left: 1px solid ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_divider", []), "html", null, true);
                echo ";}
";
            }
            // line 59
            echo " 
";
            // line 60
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_margin", [])) {
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " [class*=jl-dropdown-bottom] { margin-top: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_margin", []), "html", null, true);
                echo "; }";
            }
        } else {
            // line 62
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_fontsize", [])) {
                // line 63
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .jl-navbar-nav > li > .g-menu-item-container, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-toggle { ";
                if ($this->getAttribute(($context["particle"] ?? null), "navbar_fontsize", [])) {
                    echo "font-size: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_fontsize", []), "html", null, true);
                    echo "; ";
                }
                echo " }
";
            }
            // line 65
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_color", [])) {
                // line 66
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li>.g-menu-item-container,
#";
                // line 67
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-logo { color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_color", []), "html", null, true);
                echo "; }
";
            }
            // line 69
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_hover_color", [])) {
                // line 70
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li:hover>.g-menu-item-container,
#";
                // line 71
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li:hover>.g-menu-item-container {color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_hover_color", []), "html", null, true);
                echo ";}
";
            }
            // line 73
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_active_color", [])) {
                // line 74
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li.active>.g-menu-item-container { color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_active_color", []), "html", null, true);
                echo "; }
#";
                // line 75
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li.active>.g-separator { color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_active_color", []), "html", null, true);
                echo "; }
";
                // line 76
                if (twig_test_empty($this->getAttribute(($context["particle"] ?? null), "navbar_style", []))) {
                    // line 77
                    echo "#";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo " .g-main-nav .g-toplevel > li:not(.g-menu-item-type-particle):not(.g-menu-item-type-module).active > .g-menu-item-container {
    color: ";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_active_color", []), "html", null, true);
                    echo ";
}
";
                }
            }
            // line 82
            if (((($this->getAttribute(($context["particle"] ?? null), "dropdown_bg", []) || $this->getAttribute(($context["particle"] ?? null), "dropdown_color", [])) || $this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", [])) || $this->getAttribute(($context["particle"] ?? null), "dropdown_padding", []))) {
                // line 83
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-dropdown { 
";
                // line 84
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_bg", [])) {
                    // line 85
                    echo "    background: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_bg", []), "html", null, true);
                    echo ";
";
                }
                // line 87
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_color", [])) {
                    // line 88
                    echo "    color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_color", []), "html", null, true);
                    echo ";
";
                }
                // line 90
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", [])) {
                    // line 91
                    echo "    border-radius: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", []), "html", null, true);
                    echo ";
";
                }
                // line 93
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_padding", [])) {
                    // line 94
                    echo "    padding: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_padding", []), "html", null, true);
                    echo ";
";
                }
                // line 96
                echo " }
";
            }
            // line 98
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", [])) {
                // line 99
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container { ";
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", [])) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", []));
                    echo ";";
                }
                echo " }
";
            }
            // line 101
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", [])) {
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container { font-size: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", []), "html", null, true);
                echo ";} ";
            }
            echo " 
";
            // line 102
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_hover_color", [])) {
                // line 103
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container:focus,
#";
                // line 104
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container:hover { color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_hover_color", []));
                echo "; }
";
            }
            // line 106
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_active_color", [])) {
                // line 107
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li:not(.g-menu-item-type-particle):not(.g-menu-item-type-module).active .g-menu-item-container { color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_active_color", []));
                echo ";}
";
            }
            // line 109
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", [])) {
                // line 110
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container {font-size: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", []));
                echo ";}
";
            }
            // line 112
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_padding", [])) {
                // line 113
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container { padding: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_nav_padding", []));
                echo "; }
";
            }
        }
        // line 116
        if ((($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom") &&  !twig_test_empty($this->getAttribute(($context["particle"] ?? null), "ct_container_width", [])))) {
            // line 117
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .tm-header .g-container {
    max-width: ";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "ct_container_width", []));
            echo ";
}
";
        }
        // line 121
        if ($this->getAttribute(($context["particle"] ?? null), "nav_bg_color", [])) {
            // line 122
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-container:not(.jl-navbar-transparent) {
    background-color: ";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "nav_bg_color", []), "html", null, true);
            echo ";
}
";
        }
        // line 126
        if ($this->getAttribute(($context["particle"] ?? null), "logo_color", [])) {
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-logo { color: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "logo_color", []), "html", null, true);
            echo ";}";
        }
        // line 127
        if ($this->getAttribute(($context["particle"] ?? null), "mobile_text_color", [])) {
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .tm-header-mobile .jl-logo { color: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "mobile_text_color", []), "html", null, true);
            echo ";}";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        $context["inline_css"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 130
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addInlineStyle", [0 => ($context["inline_css"] ?? null), 1 => 0], "method");
        // line 131
        echo "
";
        // line 132
        ob_start(function () { return ''; });
        // line 133
        echo "<a class=\"jl-navbar-toggle mobile-toggle\" href=\"#mobile-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" jl-toggle=\"animation: true\">
";
        // line 134
        if (($this->getAttribute(($context["particle"] ?? null), "menu_text", []) && ($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "right"))) {
            echo "<span class=\"jl-margin-small-right\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "menu_text", []), "html", null, true);
            echo "</span>";
        }
        // line 135
        echo "<div jl-navbar-toggle-icon class=\"jl-icon jl-navbar-toggle-icon\"></div>
";
        // line 136
        if (($this->getAttribute(($context["particle"] ?? null), "menu_text", []) && ($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "left"))) {
            echo "<span class=\"jl-margin-small-left\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "menu_text", []), "html", null, true);
            echo "</span>";
        }
        // line 137
        echo "</a>
";
        $context["menu_toggle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 139
        echo "
";
        // line 141
        ob_start(function () { return ''; });
        // line 142
        echo "<ul class=\"jl-flex-inline jl-flex-middle jl-flex-nowrap";
        if ($this->getAttribute(($context["particle"] ?? null), "social_icon_gap", [])) {
            echo " jl-grid-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "social_icon_gap", []));
        }
        if ($this->getAttribute(($context["particle"] ?? null), "social_inverse", [])) {
            echo " jl-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "social_inverse", []), "html", null, true);
        }
        echo "\" jl-grid>
";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "social_items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["social_item"]) {
            // line 144
            echo "<li>
<a class=\"tm-icon";
            // line 145
            echo (($this->getAttribute(($context["particle"] ?? null), "sc_icon_button", [])) ? (" jl-icon-button") : (""));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["social_item"], "social_link", []));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["social_item"], "social_text", []));
            echo "\" target=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "sc_link_target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "sc_link_target", []), "_blank")) : ("_blank")));
            echo "\"><i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["social_item"], "social_icon", []), "html", null, true);
            echo "\" aria-hidden=\"true\"></i></a>
</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "</ul>
";
        $context["social_icons"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 150
        echo "

";
        // line 152
        $context["theme_container"] = ((($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom")) ? ("g-container") : (("jl-container" . ((twig_in_filter($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []), [0 => "small", 1 => "large", 2 => "xlarge", 3 => "expand"])) ? ((" jl-container-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])))) : ("")))));
        // line 153
        echo "
";
        // line 155
        ob_start(function () { return ''; });
        // line 156
        if (($this->getAttribute(($context["particle"] ?? null), "search_style", []) == "default")) {
            // line 157
            echo "  ";
            if ( !$this->getAttribute(($context["joomla"] ?? null), "checkVersion", [0 => "4.0"], "method")) {
                // line 158
                echo "    <form class=\"jl-search jl-search-default\" action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["joomla"] ?? null), "route", [0 => "index.php"], "method"), "html", null, true);
                echo "\" method=\"post\">
      <span jl-search-icon class=\"";
                // line 159
                echo (($this->getAttribute(($context["particle"] ?? null), "icon_flip", [])) ? ("jl-search-icon-flip") : ("jl-search-icon"));
                echo "\"></span>
      <input class=\"jl-search-input\" type=\"search\" name=\"searchword\" placeholder=\"";
                // line 160
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "placeholder", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "placeholder", []), "Search...")) : ("Search...")), "html", null, true);
                echo "\" value=\"\">
      <input type=\"hidden\" name=\"task\" value=\"search\" />
      <input type=\"hidden\" name=\"option\" value=\"com_search\" />
      <input type=\"hidden\" name=\"Itemid\" value=\"";
                // line 163
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->intFilter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "itemid", []));
                echo "\" />
    </form>
  ";
            } else {
                // line 166
                echo "    <form class=\"jl-search jl-search-default\" action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["joomla"] ?? null), "route", [0 => "index.php?option=com_finder&view=search"], "method"), "html", null, true);
                echo "\" method=\"get\" role=\"search\">
      <span jl-search-icon class=\"";
                // line 167
                echo (($this->getAttribute(($context["particle"] ?? null), "icon_flip", [])) ? ("jl-search-icon-flip") : ("jl-search-icon"));
                echo "\"></span>
      <input id=\"";
                // line 168
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" class=\"jl-search-input\" type=\"search\" name=\"q\" placeholder=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "placeholder", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "placeholder", []), "Search...")) : ("Search...")), "html", null, true);
                echo "\" value=\"\">
      <input type=\"hidden\" name=\"option\" value=\"com_finder\" />
      <input type=\"hidden\" name=\"Itemid\" value=\"";
                // line 170
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->intFilter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "itemid", []));
                echo "\" />
    </form>  
  ";
            }
        } else {
            // line 174
            echo "<a href=\"#js-search-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"jl-search-toggle\" jl-search-icon jl-toggle></a>
<div id=\"js-search-";
            // line 175
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"jl-modal-full jl-modal\" jl-modal>
  <div class=\"jl-modal-dialog jl-flex jl-flex-center jl-flex-middle\" jl-height-viewport>
    <button class=\"jl-modal-close-full jl-close-large\" type=\"button\" jl-close></button>
    ";
            // line 178
            if ( !$this->getAttribute(($context["joomla"] ?? null), "checkVersion", [0 => "4.0"], "method")) {
                // line 179
                echo "        <form class=\"jl-search jl-search-large\" action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["joomla"] ?? null), "route", [0 => "index.php"], "method"), "html", null, true);
                echo "\" method=\"post\">
        <input class=\"jl-search-input jl-text-center\" type=\"search\" name=\"searchword\" placeholder=\"";
                // line 180
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "placeholder", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "placeholder", []), "Search...")) : ("Search...")), "html", null, true);
                echo "\" value=\"\" autofocus>
        <input type=\"hidden\" name=\"task\" value=\"search\" />
        <input type=\"hidden\" name=\"option\" value=\"com_search\" />
        <input type=\"hidden\" name=\"Itemid\" value=\"";
                // line 183
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->intFilter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "itemid", []));
                echo "\" />
        </form>
    ";
            } else {
                // line 186
                echo "        <form class=\"jl-search jl-search-large\" action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["joomla"] ?? null), "route", [0 => "index.php?option=com_finder&view=search"], "method"), "html", null, true);
                echo "\" method=\"get\" role=\"search\">
        <input id=\"";
                // line 187
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" class=\"jl-search-input jl-text-center\" type=\"search\" name=\"q\" placeholder=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "placeholder", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "placeholder", []), "Search...")) : ("Search...")), "html", null, true);
                echo "\" value=\"\" autofocus>
        <input type=\"hidden\" name=\"option\" value=\"com_finder\" />
        <input type=\"hidden\" name=\"Itemid\" value=\"";
                // line 189
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->intFilter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "itemid", []));
                echo "\" />
        </form>  
    ";
            }
            // line 192
            echo "  </div>
</div>
";
        }
        $context["navbar_search"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 196
        echo "
";
        // line 204
        echo "
";
        // line 222
        echo "
";
        // line 233
        echo "
";
        // line 386
        echo "
";
        // line 410
        echo "
";
        // line 419
        echo "
";
        // line 443
        echo "
";
        // line 444
        $context["macro"] = $this;
        // line 445
        echo "
";
        // line 446
        $context["logo_init"] = ($this->getAttribute(($context["particle"] ?? null), "image", []) || $this->getAttribute(($context["particle"] ?? null), "text", []));
        // line 447
        echo "
";
        // line 448
        ob_start(function () { return ''; });
        // line 449
        echo "
    ";
        // line 450
        $context["class"] = (($this->getAttribute(($context["particle"] ?? null), "class", [])) ? ((("class=\"" . $this->getAttribute(($context["particle"] ?? null), "class", [])) . "\"")) : (""));
        // line 451
        echo "    ";
        $context["height"] = (($this->getAttribute(($context["particle"] ?? null), "height", [])) ? ((("style=\"max-height: " . $this->getAttribute(($context["particle"] ?? null), "height", [])) . "\"")) : (""));
        // line 452
        echo "
    ";
        // line 453
        if ($this->getAttribute(($context["particle"] ?? null), "image", [])) {
            // line 454
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", [])));
            echo "\" ";
            echo ((array_key_exists("height", $context)) ? (_twig_default_filter(($context["height"] ?? null), "")) : (""));
            echo " alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "text", []), "html", null, true);
            echo "\"";
            echo (($this->getAttribute(($context["particle"] ?? null), "svg_support", [])) ? (" jl-svg") : (""));
            echo ">
    ";
        } else {
            // line 456
            echo "        ";
            echo $this->getAttribute(($context["particle"] ?? null), "text", []);
            echo " 
    ";
        }
        // line 458
        echo "
";
        $context["logo_render"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 460
        echo "
";
        // line 461
        ob_start(function () { return ''; });
        // line 462
        echo "
    ";
        // line 463
        $context["class"] = (($this->getAttribute(($context["particle"] ?? null), "class", [])) ? ((("class=\"" . $this->getAttribute(($context["particle"] ?? null), "class", [])) . "\"")) : (""));
        echo "    
    ";
        // line 464
        $context["image_height"] = (($this->getAttribute(($context["particle"] ?? null), "image_height", [])) ? ((("style=\"max-height: " . $this->getAttribute(($context["particle"] ?? null), "image_height", [])) . "\"")) : (""));
        // line 465
        echo "
    ";
        // line 466
        if ($this->getAttribute(($context["particle"] ?? null), "mobile_logo_image", [])) {
            // line 467
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "mobile_logo_image", [])));
            echo "\" ";
            echo ((array_key_exists("image_height", $context)) ? (_twig_default_filter(($context["image_height"] ?? null), "")) : (""));
            echo " alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "text", []), "html", null, true);
            echo "\"";
            echo (($this->getAttribute(($context["particle"] ?? null), "svg_support", [])) ? (" jl-svg") : (""));
            echo ">
    ";
        } else {
            // line 469
            echo "        ";
            echo $this->getAttribute(($context["particle"] ?? null), "text", []);
            echo " 
    ";
        }
        // line 471
        echo "
";
        $context["mobile_logo_render"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 473
        echo "
";
        // line 475
        echo "
";
        // line 476
        if ($this->getAttribute($this->getAttribute(($context["menu"] ?? null), "root", []), "count", [], "method")) {
            // line 477
            echo "
<div id=\"";
            // line 478
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"tm-header";
            echo (($this->getAttribute(($context["particle"] ?? null), "navbar_style", [])) ? (" menu-extended") : (" menu-simple"));
            echo " jl-visible@";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "menu_visibility", []));
            if ($this->getAttribute(($context["particle"] ?? null), "transparent_header", [])) {
                echo " jl-header-overlay";
            }
            echo "\" jl-header>

";
            // line 480
            if (($this->getAttribute(($context["particle"] ?? null), "sticky", []) && twig_test_empty($this->getAttribute(($context["particle"] ?? null), "section", [])))) {
                // line 481
                echo "<div jl-sticky media=\"@";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "menu_visibility", []));
                echo "\"";
                echo ((($this->getAttribute(($context["particle"] ?? null), "sticky", []) == "stickyonscroll")) ? (" show-on-up animation=\"jl-animation-slide-top\"") : (""));
                if ($this->getAttribute(($context["particle"] ?? null), "top", [])) {
                    echo " top=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "top", []));
                    echo "\"";
                }
                if ($this->getAttribute(($context["particle"] ?? null), "offset", [])) {
                    echo " offset=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "offset", []));
                    echo "\"";
                }
                echo " cls-active=\"jl-navbar-sticky\"";
                if ($this->getAttribute(($context["particle"] ?? null), "transparent_header", [])) {
                    echo " cls-inactive=\"jl-navbar-transparent jl-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "transparent_header", []));
                    echo "\"";
                }
                echo " sel-target=\".jl-navbar-container\">
";
            }
            // line 483
            echo "
<div class=\"jl-navbar-container";
            // line 484
            if (($this->getAttribute(($context["particle"] ?? null), "transparent_header", []) &&  !$this->getAttribute(($context["particle"] ?? null), "sticky", []))) {
                echo " jl-navbar-transparent jl-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "transparent_header", []));
            }
            echo "\">

";
            // line 486
            if ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])) {
                // line 487
                echo "    <div class=\"";
                echo twig_escape_filter($this->env, ($context["theme_container"] ?? null), "html", null, true);
                echo "\">
        ";
                // line 488
                echo ((($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom")) ? ("<div class=\"navbar-wrapper\">") : (""));
                echo "
";
            }
            // line 490
            echo "
    <nav class=\"jl-navbar";
            // line 491
            echo (($this->getAttribute(($context["particle"] ?? null), "navbar_style", [])) ? (" jl-main-nav") : (" g-main-nav"));
            echo "\"";
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_style", [])) {
                echo " jl-navbar=\"boundary: #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo ";";
                echo (((($this->getAttribute(($context["particle"] ?? null), "hoverExpand", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "hoverExpand", []), "true")) : ("true"))) ? ("") : (" mode: click"));
                echo "\"";
            } else {
                echo (($this->getAttribute(($context["particle"] ?? null), "mobileTarget", [])) ? (" data-g-mobile-target") : (""));
                echo " data-g-hover-expand=\"";
                echo (((($this->getAttribute(($context["particle"] ?? null), "hoverExpand", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "hoverExpand", []), "true")) : ("true"))) ? ("true") : ("false"));
                echo "\"";
            }
            echo ">

        ";
            // line 493
            if ((($context["logo_init"] ?? null) || ($this->getAttribute(($context["particle"] ?? null), "layout", []) == "left"))) {
                // line 494
                echo "        <div class=\"jl-navbar-left\">

        ";
                // line 496
                if (($context["logo_init"] ?? null)) {
                    // line 497
                    echo "            <a class=\"jl-navbar-item jl-logo\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "siteUrl", [], "method"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
                    echo "\" aria-label=\"";
                    echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
                    echo "\" rel=\"home\" ";
                    echo ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : (""));
                    echo ">
                ";
                    // line 498
                    echo twig_escape_filter($this->env, ($context["logo_render"] ?? null), "html", null, true);
                    echo "
            </a>
        ";
                }
                // line 501
                echo "
        ";
                // line 502
                if (($this->getAttribute(($context["particle"] ?? null), "layout", []) == "left")) {
                    // line 503
                    echo "        <ul class=\"";
                    echo ((twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_style", []))) ? ("jl-navbar-nav") : ("g-toplevel"));
                    ((twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_text_transform", []))) ? (print (twig_escape_filter($this->env, (" jl-text-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_text_transform", []))), "html", null, true))) : (print ("")));
                    echo "\">
            ";
                    // line 504
                    echo $context["macro"]->getdisplayItems($this->getAttribute(($context["menu"] ?? null), "root", []), ($context["menu"] ?? null), $context);
                    echo "
        </ul>
        ";
                }
                // line 507
                echo "
        ";
                // line 508
                if ((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "left") && ($this->getAttribute(($context["particle"] ?? null), "search_pos", []) == "navbar"))) {
                    // line 509
                    echo "        <div class=\"jl-navbar-item\">
            ";
                    // line 510
                    echo twig_escape_filter($this->env, ($context["navbar_search"] ?? null), "html", null, true);
                    echo "
        </div>
        ";
                }
                // line 513
                echo "
        ";
                // line 514
                if (((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "left") && ($this->getAttribute(($context["particle"] ?? null), "social_pos", []) == "navbar")) && $this->getAttribute(($context["particle"] ?? null), "social_items", []))) {
                    // line 515
                    echo "        <div class=\"jl-navbar-item\">
            <div class=\"jl-margin-remove-last-child custom\">
                ";
                    // line 517
                    echo twig_escape_filter($this->env, ($context["social_icons"] ?? null), "html", null, true);
                    echo "
            </div>
        </div>
        ";
                }
                // line 521
                echo "
        </div>
        ";
            }
            // line 524
            echo "
        ";
            // line 525
            if (($this->getAttribute(($context["particle"] ?? null), "layout", []) == "center")) {
                // line 526
                echo "
        <div class=\"jl-navbar-center\">

        ";
                // line 529
                if (($this->getAttribute(($context["particle"] ?? null), "layout", []) == "center")) {
                    // line 530
                    echo "        <ul class=\"";
                    echo ((twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_style", []))) ? ("jl-navbar-nav") : ("g-toplevel"));
                    ((twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_text_transform", []))) ? (print (twig_escape_filter($this->env, (" jl-text-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_text_transform", []))), "html", null, true))) : (print ("")));
                    echo "\">
            ";
                    // line 531
                    echo $context["macro"]->getdisplayItems($this->getAttribute(($context["menu"] ?? null), "root", []), ($context["menu"] ?? null), $context);
                    echo "
        </ul>
        ";
                }
                // line 534
                echo "
        ";
                // line 535
                if ((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "center") && ($this->getAttribute(($context["particle"] ?? null), "search_pos", []) == "navbar"))) {
                    // line 536
                    echo "        <div class=\"jl-navbar-item\">
            ";
                    // line 537
                    echo twig_escape_filter($this->env, ($context["navbar_search"] ?? null), "html", null, true);
                    echo "
        </div>
        ";
                }
                // line 540
                echo "
        ";
                // line 541
                if (((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "center") && ($this->getAttribute(($context["particle"] ?? null), "social_pos", []) == "navbar")) && $this->getAttribute(($context["particle"] ?? null), "social_items", []))) {
                    // line 542
                    echo "        <div class=\"jl-navbar-item\">
            <div class=\"jl-margin-remove-last-child\">
                ";
                    // line 544
                    echo twig_escape_filter($this->env, ($context["social_icons"] ?? null), "html", null, true);
                    echo "
            </div>
        </div>
        ";
                }
                // line 548
                echo "
        </div>
        ";
            }
            // line 551
            echo "
        ";
            // line 552
            if ((((($this->getAttribute(($context["particle"] ?? null), "social_pos", []) == "header") || ($this->getAttribute(($context["particle"] ?? null), "search_pos", []) == "header")) || ($this->getAttribute(($context["particle"] ?? null), "html_pos", []) == "header")) || ($this->getAttribute(($context["particle"] ?? null), "layout", []) == "right"))) {
                // line 553
                echo "        <div class=\"jl-navbar-right\">

        ";
                // line 555
                if (($this->getAttribute(($context["particle"] ?? null), "layout", []) == "right")) {
                    // line 556
                    echo "        <ul class=\"";
                    echo ((twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_style", []))) ? ("jl-navbar-nav") : ("g-toplevel"));
                    ((twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_text_transform", []))) ? (print (twig_escape_filter($this->env, (" jl-text-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_text_transform", []))), "html", null, true))) : (print ("")));
                    echo "\">
            ";
                    // line 557
                    echo $context["macro"]->getdisplayItems($this->getAttribute(($context["menu"] ?? null), "root", []), ($context["menu"] ?? null), $context);
                    echo "
        </ul>
        ";
                }
                // line 560
                echo "
        ";
                // line 561
                if ((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "right") && ($this->getAttribute(($context["particle"] ?? null), "search_pos", []) == "navbar"))) {
                    // line 562
                    echo "        <div class=\"jl-navbar-item\">
            ";
                    // line 563
                    echo twig_escape_filter($this->env, ($context["navbar_search"] ?? null), "html", null, true);
                    echo "
        </div>
        ";
                }
                // line 566
                echo "
        ";
                // line 567
                if (((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "right") && ($this->getAttribute(($context["particle"] ?? null), "social_pos", []) == "navbar")) && $this->getAttribute(($context["particle"] ?? null), "social_items", []))) {
                    // line 568
                    echo "        <div class=\"jl-navbar-item\">
            <div class=\"jl-margin-remove-last-child\">
                ";
                    // line 570
                    echo twig_escape_filter($this->env, ($context["social_icons"] ?? null), "html", null, true);
                    echo "
            </div>
        </div>
        ";
                }
                // line 574
                echo "
        ";
                // line 575
                if (($this->getAttribute(($context["particle"] ?? null), "search_pos", []) == "header")) {
                    // line 576
                    echo "        <div class=\"jl-navbar-item\">
            ";
                    // line 577
                    echo twig_escape_filter($this->env, ($context["navbar_search"] ?? null), "html", null, true);
                    echo "
        </div>
        ";
                }
                // line 580
                echo "
        ";
                // line 581
                if ((($this->getAttribute(($context["particle"] ?? null), "social_pos", []) == "header") && $this->getAttribute(($context["particle"] ?? null), "social_items", []))) {
                    // line 582
                    echo "        <div class=\"jl-navbar-item\">
            <div class=\"jl-margin-remove-last-child\">
                ";
                    // line 584
                    echo twig_escape_filter($this->env, ($context["social_icons"] ?? null), "html", null, true);
                    echo "
            </div>
        </div>
        ";
                }
                // line 588
                echo "
        </div>
        ";
            }
            // line 591
            echo "
    </nav>

";
            // line 594
            if ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])) {
                // line 595
                echo "        ";
                echo ((($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom")) ? ("</div>") : (""));
                echo "
    </div>
";
            }
            // line 598
            echo "</div>

";
            // line 600
            if (($this->getAttribute(($context["particle"] ?? null), "sticky", []) && twig_test_empty($this->getAttribute(($context["particle"] ?? null), "section", [])))) {
                // line 601
                echo "</div>
";
            }
            // line 603
            echo "
</div>
";
        }
        // line 606
        echo "
";
        // line 608
        echo "
<div class=\"";
        // line 609
        if ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])) {
            echo "tm-header-mobile ";
        }
        echo "jl-hidden@";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "menu_visibility", []));
        echo "\">

";
        // line 611
        if ($this->getAttribute(($context["particle"] ?? null), "m_sticky", [])) {
            // line 612
            echo "<div jl-sticky";
            echo ((($this->getAttribute(($context["particle"] ?? null), "m_sticky", []) == "stickyonscroll")) ? (" show-on-up animation=\"jl-animation-slide-top\"") : (""));
            if ($this->getAttribute(($context["particle"] ?? null), "ms_top", [])) {
                echo " top=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "ms_top", []));
                echo "\"";
            }
            if ($this->getAttribute(($context["particle"] ?? null), "ms_offset", [])) {
                echo " offset=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "ms_offset", []));
                echo "\"";
            }
            echo " cls-active=\"jl-navbar-sticky\" sel-target=\".jl-navbar-container\">
";
        }
        // line 614
        echo "
<div class=\"jl-navbar-container\">

    ";
        // line 617
        if ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])) {
            // line 618
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, ($context["theme_container"] ?? null), "html", null, true);
            echo "\">
    ";
        }
        // line 620
        echo "
        <nav class=\"jl-navbar\" jl-navbar=\"container: .tm-header-mobile\">

            ";
        // line 623
        if ((($this->getAttribute(($context["particle"] ?? null), "mobile_logo", []) == "left") || ($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "left"))) {
            // line 624
            echo "
                <div class=\"jl-navbar-left\">

                    ";
            // line 627
            if (($this->getAttribute(($context["particle"] ?? null), "mobile_logo", []) == "left")) {
                // line 628
                echo "                    <a class=\"jl-navbar-item jl-logo\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "siteUrl", [], "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
                echo "\" aria-label=\"";
                echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
                echo "\" rel=\"home\" ";
                echo ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : (""));
                echo ">
                        ";
                // line 629
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "mobile_logo_image", [])) ? (($context["mobile_logo_render"] ?? null)) : (($context["logo_render"] ?? null))), "html", null, true);
                echo "
                    </a>
                    ";
            }
            // line 632
            echo "
                    ";
            // line 633
            if (($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "left")) {
                // line 634
                echo "                        ";
                echo twig_escape_filter($this->env, ($context["menu_toggle"] ?? null), "html", null, true);
                echo "
                    ";
            }
            // line 636
            echo "
                </div>
            ";
        }
        // line 639
        echo "
            ";
        // line 640
        if (($this->getAttribute(($context["particle"] ?? null), "mobile_logo", []) == "center")) {
            // line 641
            echo "                <div class=\"jl-navbar-center\">
                    <a class=\"jl-navbar-item jl-logo\" href=\"";
            // line 642
            echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "siteUrl", [], "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
            echo "\" aria-label=\"";
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
            echo "\" rel=\"home\" ";
            echo ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : (""));
            echo ">
                        ";
            // line 643
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "mobile_logo_image", [])) ? (($context["mobile_logo_render"] ?? null)) : (($context["logo_render"] ?? null))), "html", null, true);
            echo "
                    </a>
                </div>
            ";
        }
        // line 647
        echo "
            ";
        // line 648
        if ((($this->getAttribute(($context["particle"] ?? null), "mobile_logo", []) == "right") || ($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "right"))) {
            // line 649
            echo "                <div class=\"jl-navbar-right\">
                    ";
            // line 650
            if (($this->getAttribute(($context["particle"] ?? null), "mobile_logo", []) == "right")) {
                // line 651
                echo "                    <a class=\"jl-navbar-item jl-logo\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "siteUrl", [], "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
                echo "\" aria-label=\"";
                echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
                echo "\" rel=\"home\" ";
                echo ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : (""));
                echo ">
                        ";
                // line 652
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "mobile_logo_image", [])) ? (($context["mobile_logo_render"] ?? null)) : (($context["logo_render"] ?? null))), "html", null, true);
                echo "
                    </a>
                    ";
            }
            // line 655
            echo "
                    ";
            // line 656
            if (($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "right")) {
                // line 657
                echo "                        ";
                echo twig_escape_filter($this->env, ($context["menu_toggle"] ?? null), "html", null, true);
                echo "
                    ";
            }
            // line 659
            echo "                </div>
            ";
        }
        // line 661
        echo "
        </nav>

    ";
        // line 664
        if ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])) {
            // line 665
            echo "        </div>
    ";
        }
        // line 667
        echo "
</div>

";
        // line 670
        if (($this->getAttribute(($context["particle"] ?? null), "menu_animation", []) == "dropdown")) {
            // line 671
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
            try {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 $this->loadTemplate("@particles/jlnavcanvas.html.twig", "@particles/jlnavbar.html.twig", 671);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
            }
        }
        // line 673
        if ($this->getAttribute(($context["particle"] ?? null), "m_sticky", [])) {
            // line 674
            echo "</div>
";
        }
        // line 676
        echo "
";
        // line 677
        if (($this->getAttribute(($context["particle"] ?? null), "menu_animation", []) != "dropdown")) {
            // line 678
            $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = null;
            try {
                $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =                 $this->loadTemplate("@particles/jlnavcanvas.html.twig", "@particles/jlnavbar.html.twig", 678);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) {
                $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144->display($context);
            }
        }
        // line 680
        echo "
</div>
";
    }

    // line 197
    public function getgetCustomWidth($__item__ = null, $__menu__ = null, $__mode__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "mode" => $__mode__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 198
            if ((((($this->getAttribute(($context["item"] ?? null), "width", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "width", []), "auto")) : ("auto")) != "auto") &&  !((($context["dropdown_type"] ?? null) == "fullwidth") && ($this->getAttribute(($context["item"] ?? null), "level", []) > ($context["start_level"] ?? null))))) {
                // line 199
                if ((($context["mode"] ?? null) == "item")) {
                    echo " style=\"position: relative;\"";
                } elseif ((                // line 200
($context["mode"] ?? null) == "submenu")) {
                    echo " style=\"width:";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "width", []), "html", null, true);
                    echo ";\" data-g-item-width=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "width", []), "html", null, true);
                    echo "\"";
                }
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 205
    public function getdisplayParticle($__item__ = null, $__context__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "context" => $__context__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 206
            echo "    ";
            try {                // line 207
                echo "    ";
                $context["in_particle"] = (((($this->getAttribute(($context["context"] ?? null), "in_particle", [], "any", true, true) &&  !(null === $this->getAttribute(($context["context"] ?? null), "in_particle", [])))) ? ($this->getAttribute(($context["context"] ?? null), "in_particle", [])) : (0)) + 1);
                // line 208
                echo "    ";
                if ((($context["in_particle"] ?? null) > 5)) {
                    // line 209
                    echo "        ";
                    throw new \RuntimeException("Particle loop detected"                    ,                     500                    );
                    // line 210
                    echo "    ";
                }
                // line 211
                echo "
    ";
                // line 212
                $context["context"] = twig_array_merge(($context["context"] ?? null), ["particle" => $this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "particle", []), "in_particle" => ($context["in_particle"] ?? null)]);
                // line 213
                echo "    ";
                $context["classes"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "block", []), "class", []);
                // line 214
                echo "    <div class=\"menu-item-particle";
                ((($context["classes"] ?? null)) ? (print (twig_escape_filter($this->env, (" " . ($context["classes"] ?? null)), "html", null, true))) : (print ("")));
                echo "\">
        ";
                // line 215
                $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = null;
                try {
                    $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b =                     $this->loadTemplate([0 => (("particles/" . $this->getAttribute(($context["item"] ?? null), "particle", [])) . ".html.twig"), 1 => (("@particles/" . $this->getAttribute(($context["item"] ?? null), "particle", [])) . ".html.twig")], "@particles/jlnavbar.html.twig", 215);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) {
                    $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b->display(twig_to_array(                    // line 216
($context["context"] ?? null)));
                }
                // line 217
                echo "    </div>
    ";
            } catch (\Exception $e) {
                if ($context['gantry']->debug()) throw $e;
                if (\GANTRY_DEBUGGER) \Gantry\Debugger::addException($e);
                $context['e'] = $e;
                // line 219
                echo "        <div class=\"alert alert-error\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["e"] ?? null), "getMessage", []), "html", null, true);
                echo "</div>
    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 223
    public function getdisplayTitle($__item__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 224
            echo "    ";
            if (( !$this->getAttribute(($context["item"] ?? null), "icon_only", []) ||  !($this->getAttribute(($context["item"] ?? null), "image", []) || $this->getAttribute(($context["item"] ?? null), "icon", [])))) {
                // line 225
                echo "        ";
                if ($this->getAttribute(($context["item"] ?? null), "subtitle", [])) {
                    // line 226
                    echo "        <div>";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                    echo "
        <div class=\"jl-navbar-subtitle\">";
                    // line 227
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "subtitle", []), "html", null, true);
                    echo "</div></div>
        ";
                } else {
                    // line 229
                    echo "        ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                    echo "
        ";
                }
                // line 231
                echo "    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 234
    public function getdisplayItem($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 235
            echo "    ";
            $context["self"] = $this;
            // line 236
            echo "    ";
            if ((($this->getAttribute(($context["item"] ?? null), "type", []) == "particle") &&  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "particle", []), "enabled", []))) {
                // line 237
                echo "        ";
                $context["enabled"] = 0;
                // line 238
                echo "    ";
            }
            // line 239
            echo "    ";
            if ((($this->getAttribute(($context["item"] ?? null), "visible", []) && $this->getAttribute(($context["item"] ?? null), "enabled", [])) && ((array_key_exists("enabled", $context)) ? (_twig_default_filter(($context["enabled"] ?? null), 1)) : (1)))) {
                // line 240
                echo "        ";
                $context["title"] = ((($this->getAttribute(($context["item"] ?? null), "icon_only", []) || $this->getAttribute(($context["item"] ?? null), "link_title", []))) ? (((" title=\"" . twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "link_title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "link_title", []), $this->getAttribute(($context["item"] ?? null), "title", []))) : ($this->getAttribute(($context["item"] ?? null), "title", []))))) . "\"")) : (""));
                // line 241
                echo "        ";
                $context["label"] = ((($this->getAttribute(($context["item"] ?? null), "icon_only", []) && ($this->getAttribute(($context["item"] ?? null), "image", []) || $this->getAttribute(($context["item"] ?? null), "icon", [])))) ? (((" aria-label=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []))) . "\"")) : (""));
                // line 242
                echo "        ";
                if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_style", [])) {
                    // line 243
                    echo "        ";
                    $context["active"] = (($this->getAttribute(($context["menu"] ?? null), "isActive", [0 => ($context["item"] ?? null)], "method")) ? (" jl-active") : (""));
                    // line 244
                    echo "        ";
                } else {
                    // line 245
                    echo "        ";
                    $context["active"] = (($this->getAttribute(($context["menu"] ?? null), "isActive", [0 => ($context["item"] ?? null)], "method")) ? (" active") : (""));
                    // line 246
                    echo "        ";
                }
                // line 247
                echo "        ";
                $context["dropdown"] = ((($this->getAttribute(($context["item"] ?? null), "level", []) == ($context["start_level"] ?? null))) ? ((" g-" . $this->getAttribute(($context["item"] ?? null), "getDropdown", [], "method"))) : (""));
                // line 248
                echo "        ";
                if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_style", [])) {
                    // line 249
                    echo "        ";
                    $context["parent"] = ((($this->getAttribute(($context["item"] ?? null), "hasChildren", [], "method") &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) ? (" jl-parent") : (""));
                    // line 250
                    echo "        ";
                } else {
                    // line 251
                    echo "        ";
                    $context["parent"] = ((($this->getAttribute(($context["item"] ?? null), "hasChildren", [], "method") &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) ? (" g-parent") : (""));
                    // line 252
                    echo "        ";
                }
                echo "        
        
        ";
                // line 254
                $context["target"] = (((($this->getAttribute(($context["item"] ?? null), "target", []) != "_self") || $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "forceTarget", []))) ? (((" target=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "target", []))) . "\"")) : (""));
                // line 255
                echo "        ";
                $context["rel"] = $this->getAttribute(($context["item"] ?? null), "rel", []);
                // line 256
                echo "
        ";
                // line 257
                if (($this->getAttribute(($context["item"] ?? null), "target", []) == "_blank")) {
                    // line 258
                    echo "            ";
                    if (!twig_in_filter("noopener", ($context["rel"] ?? null))) {
                        // line 259
                        echo "                ";
                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                        // line 260
                        echo "                ";
                        $context["rel"] = (($context["rel"] ?? null) . "noopener");
                        // line 261
                        echo "            ";
                    }
                    // line 262
                    echo "            ";
                    if (!twig_in_filter("noreferrer", ($context["rel"] ?? null))) {
                        // line 263
                        echo "                ";
                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                        // line 264
                        echo "                ";
                        $context["rel"] = (($context["rel"] ?? null) . "noreferrer");
                        // line 265
                        echo "            ";
                    }
                    // line 266
                    echo "        ";
                }
                // line 267
                echo "
        ";
                // line 268
                $context["listAttributes"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->attributeArrayFilter($this->getAttribute(($context["item"] ?? null), "attributes", []));
                // line 269
                echo "        ";
                $context["linkAttributes"] = "";
                // line 270
                echo "
        ";
                // line 271
                if ($this->getAttribute(($context["item"] ?? null), "link_attributes", [])) {
                    // line 272
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? null), "link_attributes", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                        // line 273
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["attribute"]);
                        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                            // line 274
                            echo "                    ";
                            if (($context["key"] == "rel")) {
                                // line 275
                                echo "                        ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $context["value"], " "));
                                foreach ($context['_seq'] as $context["_key"] => $context["hVal"]) {
                                    // line 276
                                    echo "                            ";
                                    if (!twig_in_filter($context["hVal"], ($context["rel"] ?? null))) {
                                        // line 277
                                        echo "                                ";
                                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                                        // line 278
                                        echo "                                ";
                                        $context["rel"] = (($context["rel"] ?? null) . $context["hVal"]);
                                        // line 279
                                        echo "                            ";
                                    }
                                    // line 280
                                    echo "                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hVal'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 281
                                echo "                    ";
                            } else {
                                // line 282
                                echo "                        ";
                                $context["linkAttributes"] = (((((($context["linkAttributes"] ?? null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                                // line 283
                                echo "                    ";
                            }
                            // line 284
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 285
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 286
                    echo "        ";
                }
                // line 287
                echo "
        ";
                // line 289
                echo "        ";
                if (($this->getAttribute(($context["item"] ?? null), "target", []) == "_nonav")) {
                    // line 290
                    echo "            ";
                    $context["target"] = "target=\"_blank\"";
                    // line 291
                    echo "            ";
                    $context["linkAttributes"] = (($context["linkAttributes"] ?? null) . " onclick=\"window.open(this.href, 'targetWindow', 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes'); return false;\"");
                    // line 292
                    echo "        ";
                }
                // line 293
                echo "
        ";
                // line 294
                $context["rel"] = ((($context["rel"] ?? null)) ? (((" rel=\"" . twig_escape_filter($this->env, ($context["rel"] ?? null), "html_attr")) . "\"")) : (""));
                // line 295
                echo "        ";
                if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_style", [])) {
                    // line 296
                    echo "        <li class=\"item-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "id", []), "html", null, true);
                    if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                        echo twig_escape_filter($this->env, ($context["parent"] ?? null), "html", null, true);
                    }
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    if ($this->getAttribute(($context["item"] ?? null), "class", [])) {
                        echo " ";
                        echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "class", []), "")) : ("")), "html", null, true);
                    }
                    if ( !($context["parent"] ?? null)) {
                        if (($this->getAttribute(($context["item"] ?? null), "type", []) == "separator")) {
                            echo " jl-nav-divider";
                        } elseif (($this->getAttribute(($context["item"] ?? null), "type", []) == "heading")) {
                            echo " jl-nav-header";
                        }
                    }
                    echo "\"";
                    // line 297
                    echo $context["self"]->getgetCustomWidth(($context["item"] ?? null), ($context["menu"] ?? null), "item", ($context["dropdown"] ?? null));
                    // line 298
                    if ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", []), 0)) : (0))) {
                        echo " title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                        echo "\"";
                    }
                    echo ($context["listAttributes"] ?? null);
                    echo ">
                ";
                    // line 299
                    if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                        // line 300
                        echo "                <a";
                        if ($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) {
                            echo " class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "anchor_class", []), "html", null, true);
                            echo "\"";
                        }
                        echo " href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "url", []), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "hash", []), "html", null, true);
                        echo "\"";
                        echo ((((($context["title"] ?? null) . ($context["label"] ?? null)) . ($context["target"] ?? null)) . ($context["rel"] ?? null)) . ($context["linkAttributes"] ?? null));
                        echo ">
                ";
                        // line 301
                        if ($this->getAttribute(($context["item"] ?? null), "image", [])) {
                            // line 302
                            echo "                    <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["item"] ?? null), "image", [])), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                            echo "\" />
                ";
                        } elseif ($this->getAttribute(                        // line 303
($context["item"] ?? null), "icon", [])) {
                            // line 304
                            echo "                    <i class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "icon", []), "html", null, true);
                            echo "\" aria-hidden=\"true\"></i>
                ";
                        }
                        // line 306
                        echo "                ";
                        echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                        echo "
                </a>
                ";
                    } else {
                        // line 309
                        echo "                    ";
                        if (($this->getAttribute(($context["item"] ?? null), "type", []) == "particle")) {
                            // line 310
                            echo "                        ";
                            echo $context["self"]->getdisplayParticle(($context["item"] ?? null), ($context["context"] ?? null));
                            echo "
                    ";
                        } elseif (($this->getAttribute(                        // line 311
($context["item"] ?? null), "type", []) == "heading")) {
                            // line 312
                            echo "                        ";
                            if (twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "children", []))) {
                                // line 313
                                echo "                        <a";
                                if ($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) {
                                    echo " class=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "anchor_class", []), "html", null, true);
                                    echo "\"";
                                }
                                echo ((((($context["title"] ?? null) . ($context["label"] ?? null)) . ($context["target"] ?? null)) . ($context["rel"] ?? null)) . ($context["linkAttributes"] ?? null));
                                echo ">
                        ";
                                // line 314
                                if ($this->getAttribute(($context["item"] ?? null), "image", [])) {
                                    // line 315
                                    echo "                            <img src=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["item"] ?? null), "image", [])), "html", null, true);
                                    echo "\" alt=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                                    echo "\" />
                        ";
                                } elseif ($this->getAttribute(                                // line 316
($context["item"] ?? null), "icon", [])) {
                                    // line 317
                                    echo "                            <i class=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "icon", []), "html", null, true);
                                    echo "\" aria-hidden=\"true\"></i>
                        ";
                                }
                                // line 319
                                echo "                        ";
                                echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                                echo "
                        </a>
                        ";
                            } else {
                                // line 322
                                echo "                        ";
                                if ($this->getAttribute(($context["item"] ?? null), "image", [])) {
                                    // line 323
                                    echo "                            <img src=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["item"] ?? null), "image", [])), "html", null, true);
                                    echo "\" alt=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                                    echo "\" />
                        ";
                                } elseif ($this->getAttribute(                                // line 324
($context["item"] ?? null), "icon", [])) {
                                    // line 325
                                    echo "                            <i class=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "icon", []), "html", null, true);
                                    echo "\" aria-hidden=\"true\"></i>
                        ";
                                }
                                // line 327
                                echo "                        ";
                                echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                                echo "
                        ";
                            }
                            // line 329
                            echo "                    ";
                        } else {
                            // line 330
                            echo "                        ";
                            if (twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "children", []))) {
                                // line 331
                                echo "                        <a";
                                if ($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) {
                                    echo " class=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "anchor_class", []), "html", null, true);
                                    echo "\"";
                                }
                                echo ((((($context["title"] ?? null) . ($context["label"] ?? null)) . ($context["target"] ?? null)) . ($context["rel"] ?? null)) . ($context["linkAttributes"] ?? null));
                                echo ">
                        ";
                                // line 332
                                if ($this->getAttribute(($context["item"] ?? null), "image", [])) {
                                    // line 333
                                    echo "                            <img src=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["item"] ?? null), "image", [])), "html", null, true);
                                    echo "\" alt=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                                    echo "\" />
                        ";
                                } elseif ($this->getAttribute(                                // line 334
($context["item"] ?? null), "icon", [])) {
                                    // line 335
                                    echo "                            <i class=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "icon", []), "html", null, true);
                                    echo "\" aria-hidden=\"true\"></i>
                        ";
                                }
                                // line 337
                                echo "                        ";
                                echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                                echo "
                        </a>
                        ";
                            }
                            // line 340
                            echo "                    ";
                        }
                        // line 341
                        echo " 
                ";
                    }
                    // line 343
                    echo "
        ";
                } else {
                    // line 345
                    echo "        <li class=\"g-menu-item g-menu-item-type-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "type", []), "html", null, true);
                    echo " g-menu-item-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "id", []), "html", null, true);
                    if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                        echo twig_escape_filter($this->env, ($context["parent"] ?? null), "html", null, true);
                    }
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    echo twig_escape_filter($this->env, ($context["dropdown"] ?? null), "html", null, true);
                    echo " ";
                    if (($this->getAttribute(($context["item"] ?? null), "url", []) && ($context["parent"] ?? null))) {
                        if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                            echo "g-menu-item-link-parent";
                        }
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "class", []), "")) : ("")), "html", null, true);
                    echo "\"";
                    // line 346
                    echo $context["self"]->getgetCustomWidth(($context["item"] ?? null), ($context["menu"] ?? null), "item", ($context["dropdown"] ?? null));
                    // line 347
                    if ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", []), 0)) : (0))) {
                        echo " title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                        echo "\"";
                    }
                    echo ($context["listAttributes"] ?? null);
                    echo ">      
            ";
                    // line 348
                    if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                        // line 349
                        echo "                <a class=\"g-menu-item-container";
                        (($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) ? (print (twig_escape_filter($this->env, (" " . $this->getAttribute(($context["item"] ?? null), "anchor_class", [])), "html", null, true))) : (print ("")));
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "url", []), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "hash", []), "html", null, true);
                        echo "\"";
                        echo ((((($context["title"] ?? null) . ($context["label"] ?? null)) . ($context["target"] ?? null)) . ($context["rel"] ?? null)) . ($context["linkAttributes"] ?? null));
                        echo ">
            ";
                    } else {
                        // line 351
                        echo "                <div class=\"g-menu-item-container";
                        (($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) ? (print (twig_escape_filter($this->env, (" " . $this->getAttribute(($context["item"] ?? null), "anchor_class", [])), "html", null, true))) : (print ("")));
                        echo "\" data-g-menuparent=\"\"";
                        echo ($context["label"] ?? null);
                        echo ">";
                    }
                    // line 352
                    echo "                ";
                    if ($this->getAttribute(($context["item"] ?? null), "image", [])) {
                        // line 353
                        echo "                    <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["item"] ?? null), "image", [])), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                        echo "\" />
                ";
                    } elseif ($this->getAttribute(                    // line 354
($context["item"] ?? null), "icon", [])) {
                        // line 355
                        echo "                    <i class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "icon", []), "html", null, true);
                        echo "\" aria-hidden=\"true\"></i>
                ";
                    }
                    // line 357
                    echo "                ";
                    if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                        // line 358
                        echo "                    <span class=\"g-menu-item-content\">
                        ";
                        // line 359
                        echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                        echo "
                    </span>
                    ";
                        // line 361
                        if ((($context["parent"] ?? null) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) {
                            // line 362
                            echo "<span class=\"g-menu-parent-indicator\" data-g-menuparent=\"\"></span>";
                        }
                        // line 364
                        echo "                ";
                    } else {
                        // line 365
                        echo "                ";
                        if (($this->getAttribute(($context["item"] ?? null), "type", []) == "particle")) {
                            // line 366
                            echo "                    ";
                            echo $context["self"]->getdisplayParticle(($context["item"] ?? null), ($context["context"] ?? null));
                            echo "
                ";
                        } elseif (($this->getAttribute(                        // line 367
($context["item"] ?? null), "type", []) == "heading")) {
                            // line 368
                            echo "                    <span class=\"g-nav-header g-menu-item-content\"";
                            echo ($context["title"] ?? null);
                            echo ">";
                            echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                            echo "</span>
                ";
                        } else {
                            // line 370
                            echo "                    <span class=\"g-separator g-menu-item-content\"";
                            echo ($context["title"] ?? null);
                            echo ">";
                            echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                            echo "</span>
                ";
                        }
                        // line 372
                        echo "                ";
                        if ((($context["parent"] ?? null) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) {
                            // line 373
                            echo "<span class=\"g-menu-parent-indicator\"></span>";
                        }
                        // line 375
                        echo "
                ";
                    }
                    // line 377
                    echo "            ";
                    if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                        echo "</a>
            ";
                    } else {
                        // line 378
                        echo "</div>";
                    }
                    echo "                  
        ";
                }
                // line 379
                echo "        
            ";
                // line 380
                if (($context["parent"] ?? null)) {
                    // line 381
                    echo $context["self"]->getdisplaySubmenu(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                }
                // line 383
                echo "        </li>
    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 387
    public function getdisplayContainers($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 388
            echo "    ";
            $context["self"] = $this;
            // line 389
            echo "    ";
            $context["groups"] = ((($this->getAttribute(($context["item"] ?? null), "getDropdown", [], "method") == "standard")) ? ([0 => ($context["item"] ?? null)]) : ($this->getAttribute(($context["item"] ?? null), "groups", [])));
            // line 390
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_style", [])) {
                // line 391
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
                foreach ($context['_seq'] as $context["column"] => $context["items"]) {
                    // line 392
                    echo "        ";
                    if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) > 1)) {
                        echo "<div>";
                    }
                    // line 393
                    echo "            <ul class=\"jl-nav jl-navbar-dropdown-nav\">
                ";
                    // line 394
                    echo $context["self"]->getdisplayItems($context["items"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                    echo "
            </ul>
        ";
                    // line 396
                    if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) > 1)) {
                        echo "</div>";
                    }
                    // line 397
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['column'], $context['items'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "    
    ";
            } else {
                // line 399
                echo "        <div class=\"g-grid\">
        ";
                // line 400
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
                foreach ($context['_seq'] as $context["column"] => $context["items"]) {
                    // line 401
                    echo "        <div class=\"g-block ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('toGrid')->getCallable(), [$this->getAttribute(($context["item"] ?? null), "columnWidth", [0 => $context["column"]], "method")]), "html", null, true);
                    echo "\">
            <ul class=\"g-sublevel\">
                ";
                    // line 403
                    echo $context["self"]->getdisplayItems($context["items"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                    echo "
            </ul>
        </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['column'], $context['items'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 407
                echo "    </div>
    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 411
    public function getdisplayItems($__items__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 412
            echo "    ";
            $context["self"] = $this;
            // line 413
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 414
                echo "        ";
                $context["start_level"] = (($context["start_level"]) ?? ((($context["root_level"]) ?? ($this->getAttribute($context["item"], "level", [])))));
                // line 415
                echo "        ";
                $context["dropdown"] = (($context["dropdown_type"]) ?? ($this->getAttribute($context["item"], "dropdown", [])));
                // line 416
                echo "        ";
                echo $context["self"]->getdisplayItem($context["item"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown"] ?? null), ($context["start_level"] ?? null));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 420
    public function getdisplaySubmenu($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 421
            echo "    ";
            $context["self"] = $this;
            // line 422
            echo "    ";
            if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                // line 423
                echo "        ";
                $context["animation"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "gantry", [], "any", false, true), "config", [], "any", false, true), "get", [0 => "styles.menu.animation"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "gantry", [], "any", false, true), "config", [], "any", false, true), "get", [0 => "styles.menu.animation"], "method"), "g-fade")) : ("g-fade"));
                // line 424
                echo "        ";
                if (((((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) == 1) && ( !($context["dropdown_type"] ?? null) == "fullwidth")) || (($context["dropdown_type"] ?? null) == "standard")) || (((($this->getAttribute(($context["item"] ?? null), "width", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "width", []), "auto")) : ("auto")) != "auto") && (($context["dropdown_type"] ?? null) == "fullwidth")))) {
                    // line 425
                    echo "            ";
                    $context["dropdown_dir"] = ("g-dropdown-" . (($this->getAttribute(($context["item"] ?? null), "dropdown_dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "dropdown_dir", []), "right")) : ("right")));
                    // line 426
                    echo "        ";
                }
                // line 427
                echo "        ";
                if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_style", [])) {
                    // line 428
                    echo "        <div class=\"jl-navbar-dropdown";
                    if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) > 1)) {
                        echo " jl-navbar-dropdown-width-";
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])), "html", null, true);
                    }
                    echo "\"";
                    if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) > 3)) {
                        echo " jl-drop=\"boundary: #";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "id", []), "html", null, true);
                        echo " .jl-navbar; boundary-align: true; pos: bottom-justify;";
                        echo (((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "hoverExpand", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "hoverExpand", []), "true")) : ("true"))) ? ("") : (" mode: click"));
                        echo "\"";
                    }
                    echo $context["self"]->getgetCustomWidth(($context["item"] ?? null), ($context["menu"] ?? null), "submenu", ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                    echo ">
            ";
                    // line 429
                    if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) > 1)) {
                        echo "<div class=\"jl-navbar-dropdown-grid jl-child-width-1-";
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])), "html", null, true);
                        echo "\" jl-grid>";
                    }
                    // line 430
                    echo "                ";
                    echo $context["self"]->getdisplayContainers(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null));
                    echo "
            ";
                    // line 431
                    if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) > 1)) {
                        echo "</div>";
                    }
                    // line 432
                    echo "        </div>
        ";
                } else {
                    // line 434
                    echo "        <ul class=\"g-dropdown g-inactive ";
                    echo twig_escape_filter($this->env, ($context["animation"] ?? null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["dropdown_dir"] ?? null), "html", null, true);
                    if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_navbar_text_transform", [])) {
                        echo " jl-text-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_navbar_text_transform", []));
                    }
                    echo "\"";
                    echo $context["self"]->getgetCustomWidth(($context["item"] ?? null), ($context["menu"] ?? null), "submenu", ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                    echo ">
            <li class=\"g-dropdown-column\">
               ";
                    // line 436
                    echo $context["self"]->getdisplayContainers(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                    echo "
            </li>
        </ul>        
        ";
                }
                // line 440
                echo "
    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@particles/jlnavbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2338 => 440,  2331 => 436,  2317 => 434,  2313 => 432,  2309 => 431,  2304 => 430,  2298 => 429,  2281 => 428,  2278 => 427,  2275 => 426,  2272 => 425,  2269 => 424,  2266 => 423,  2263 => 422,  2260 => 421,  2244 => 420,  2222 => 416,  2219 => 415,  2216 => 414,  2211 => 413,  2208 => 412,  2192 => 411,  2175 => 407,  2165 => 403,  2159 => 401,  2155 => 400,  2152 => 399,  2143 => 397,  2139 => 396,  2134 => 394,  2131 => 393,  2126 => 392,  2121 => 391,  2118 => 390,  2115 => 389,  2112 => 388,  2096 => 387,  2079 => 383,  2076 => 381,  2074 => 380,  2071 => 379,  2065 => 378,  2059 => 377,  2055 => 375,  2052 => 373,  2049 => 372,  2041 => 370,  2033 => 368,  2031 => 367,  2026 => 366,  2023 => 365,  2020 => 364,  2017 => 362,  2015 => 361,  2010 => 359,  2007 => 358,  2004 => 357,  1998 => 355,  1996 => 354,  1989 => 353,  1986 => 352,  1979 => 351,  1968 => 349,  1966 => 348,  1957 => 347,  1955 => 346,  1936 => 345,  1932 => 343,  1928 => 341,  1925 => 340,  1918 => 337,  1912 => 335,  1910 => 334,  1903 => 333,  1901 => 332,  1891 => 331,  1888 => 330,  1885 => 329,  1879 => 327,  1873 => 325,  1871 => 324,  1864 => 323,  1861 => 322,  1854 => 319,  1848 => 317,  1846 => 316,  1839 => 315,  1837 => 314,  1827 => 313,  1824 => 312,  1822 => 311,  1817 => 310,  1814 => 309,  1807 => 306,  1801 => 304,  1799 => 303,  1792 => 302,  1790 => 301,  1776 => 300,  1774 => 299,  1765 => 298,  1763 => 297,  1744 => 296,  1741 => 295,  1739 => 294,  1736 => 293,  1733 => 292,  1730 => 291,  1727 => 290,  1724 => 289,  1721 => 287,  1718 => 286,  1712 => 285,  1706 => 284,  1703 => 283,  1700 => 282,  1697 => 281,  1691 => 280,  1688 => 279,  1685 => 278,  1682 => 277,  1679 => 276,  1674 => 275,  1671 => 274,  1666 => 273,  1661 => 272,  1659 => 271,  1656 => 270,  1653 => 269,  1651 => 268,  1648 => 267,  1645 => 266,  1642 => 265,  1639 => 264,  1636 => 263,  1633 => 262,  1630 => 261,  1627 => 260,  1624 => 259,  1621 => 258,  1619 => 257,  1616 => 256,  1613 => 255,  1611 => 254,  1605 => 252,  1602 => 251,  1599 => 250,  1596 => 249,  1593 => 248,  1590 => 247,  1587 => 246,  1584 => 245,  1581 => 244,  1578 => 243,  1575 => 242,  1572 => 241,  1569 => 240,  1566 => 239,  1563 => 238,  1560 => 237,  1557 => 236,  1554 => 235,  1538 => 234,  1522 => 231,  1516 => 229,  1511 => 227,  1506 => 226,  1503 => 225,  1500 => 224,  1488 => 223,  1469 => 219,  1462 => 217,  1459 => 216,  1451 => 215,  1446 => 214,  1443 => 213,  1441 => 212,  1438 => 211,  1435 => 210,  1432 => 209,  1429 => 208,  1426 => 207,  1424 => 206,  1411 => 205,  1389 => 200,  1386 => 199,  1384 => 198,  1368 => 197,  1362 => 680,  1351 => 678,  1349 => 677,  1346 => 676,  1342 => 674,  1340 => 673,  1329 => 671,  1327 => 670,  1322 => 667,  1318 => 665,  1316 => 664,  1311 => 661,  1307 => 659,  1301 => 657,  1299 => 656,  1296 => 655,  1290 => 652,  1279 => 651,  1277 => 650,  1274 => 649,  1272 => 648,  1269 => 647,  1262 => 643,  1252 => 642,  1249 => 641,  1247 => 640,  1244 => 639,  1239 => 636,  1233 => 634,  1231 => 633,  1228 => 632,  1222 => 629,  1211 => 628,  1209 => 627,  1204 => 624,  1202 => 623,  1197 => 620,  1191 => 618,  1189 => 617,  1184 => 614,  1168 => 612,  1166 => 611,  1157 => 609,  1154 => 608,  1151 => 606,  1146 => 603,  1142 => 601,  1140 => 600,  1136 => 598,  1129 => 595,  1127 => 594,  1122 => 591,  1117 => 588,  1110 => 584,  1106 => 582,  1104 => 581,  1101 => 580,  1095 => 577,  1092 => 576,  1090 => 575,  1087 => 574,  1080 => 570,  1076 => 568,  1074 => 567,  1071 => 566,  1065 => 563,  1062 => 562,  1060 => 561,  1057 => 560,  1051 => 557,  1045 => 556,  1043 => 555,  1039 => 553,  1037 => 552,  1034 => 551,  1029 => 548,  1022 => 544,  1018 => 542,  1016 => 541,  1013 => 540,  1007 => 537,  1004 => 536,  1002 => 535,  999 => 534,  993 => 531,  987 => 530,  985 => 529,  980 => 526,  978 => 525,  975 => 524,  970 => 521,  963 => 517,  959 => 515,  957 => 514,  954 => 513,  948 => 510,  945 => 509,  943 => 508,  940 => 507,  934 => 504,  928 => 503,  926 => 502,  923 => 501,  917 => 498,  906 => 497,  904 => 496,  900 => 494,  898 => 493,  880 => 491,  877 => 490,  872 => 488,  867 => 487,  865 => 486,  857 => 484,  854 => 483,  830 => 481,  828 => 480,  816 => 478,  813 => 477,  811 => 476,  808 => 475,  805 => 473,  801 => 471,  795 => 469,  783 => 467,  781 => 466,  778 => 465,  776 => 464,  772 => 463,  769 => 462,  767 => 461,  764 => 460,  760 => 458,  754 => 456,  742 => 454,  740 => 453,  737 => 452,  734 => 451,  732 => 450,  729 => 449,  727 => 448,  724 => 447,  722 => 446,  719 => 445,  717 => 444,  714 => 443,  711 => 419,  708 => 410,  705 => 386,  702 => 233,  699 => 222,  696 => 204,  693 => 196,  687 => 192,  681 => 189,  674 => 187,  669 => 186,  663 => 183,  657 => 180,  652 => 179,  650 => 178,  644 => 175,  639 => 174,  632 => 170,  625 => 168,  621 => 167,  616 => 166,  610 => 163,  604 => 160,  600 => 159,  595 => 158,  592 => 157,  590 => 156,  588 => 155,  585 => 153,  583 => 152,  579 => 150,  575 => 148,  558 => 145,  555 => 144,  551 => 143,  539 => 142,  537 => 141,  534 => 139,  530 => 137,  524 => 136,  521 => 135,  515 => 134,  510 => 133,  508 => 132,  505 => 131,  503 => 130,  493 => 127,  485 => 126,  479 => 123,  474 => 122,  472 => 121,  466 => 118,  461 => 117,  459 => 116,  450 => 113,  448 => 112,  440 => 110,  438 => 109,  430 => 107,  428 => 106,  421 => 104,  416 => 103,  414 => 102,  405 => 101,  393 => 99,  391 => 98,  387 => 96,  381 => 94,  379 => 93,  373 => 91,  371 => 90,  365 => 88,  363 => 87,  357 => 85,  355 => 84,  350 => 83,  348 => 82,  341 => 78,  336 => 77,  334 => 76,  328 => 75,  321 => 74,  319 => 73,  312 => 71,  307 => 70,  305 => 69,  298 => 67,  293 => 66,  291 => 65,  277 => 63,  275 => 62,  266 => 60,  263 => 59,  255 => 58,  253 => 57,  245 => 55,  243 => 54,  236 => 52,  231 => 51,  229 => 50,  219 => 49,  207 => 47,  205 => 46,  197 => 44,  195 => 43,  191 => 41,  184 => 40,  177 => 39,  170 => 38,  164 => 37,  159 => 36,  157 => 35,  140 => 33,  138 => 32,  131 => 30,  126 => 29,  124 => 28,  112 => 26,  110 => 25,  102 => 23,  100 => 22,  84 => 20,  82 => 19,  80 => 18,  66 => 16,  64 => 15,  60 => 14,  58 => 13,  56 => 12,  53 => 11,  50 => 9,  48 => 8,  46 => 7,  43 => 6,  37 => 4,  31 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/jlnavbar.html.twig", "C:\\xampp\\htdocs\\joomla\\templates\\jl_learnmate_lite\\particles\\jlnavbar.html.twig");
    }
}
