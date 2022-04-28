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

/* @particles/jlnavcanvas.html.twig */
class __TwigTemplate_833dc55e6d801444a153e416c37028cd23b23923939537a032083a06a5f0fc34 extends \Twig\Template
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
            echo "    ";
            $context["menu"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "menu", []), "instance", [0 => ($context["particle"] ?? null)], "method");
        } catch (\Exception $e) {
            if ($context['gantry']->debug()) throw $e;
            if (\GANTRY_DEBUGGER) \Gantry\Debugger::addException($e);
            $context['e'] = $e;
            // line 4
            echo "    <div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["e"] ?? null), "getMessage", []), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
";
        // line 7
        ob_start(function () { return ''; });
        // line 8
        if ($this->getAttribute(($context["particle"] ?? null), "offcanvas_minheight", [])) {
            // line 9
            echo "\t#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-toggle {min-height:";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "offcanvas_minheight", []), "html", null, true);
            echo "px; }
";
        }
        // line 11
        if ($this->getAttribute(($context["particle"] ?? null), "toggle_color", [])) {
            // line 12
            echo "\t#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-toggle {color:";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "toggle_color", []), "html", null, true);
            echo "; }
";
        }
        // line 14
        if ($this->getAttribute(($context["particle"] ?? null), "toggle_color_hover", [])) {
            // line 15
            echo "\t#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-toggle:focus,#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-toggle:hover {color:";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "toggle_color_hover", []), "html", null, true);
            echo ";}
";
        }
        // line 17
        if ($this->getAttribute(($context["particle"] ?? null), "customize_bar_background", [])) {
            // line 18
            echo "\t#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .tm-nav-mobile { background: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "customize_bar_background", []), "html", null, true);
            echo "; }
";
        }
        // line 20
        if ($this->getAttribute(($context["particle"] ?? null), "nav_cv_color", [])) {
            // line 21
            echo "#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo (($this->getAttribute(($context["particle"] ?? null), "nav_style", [])) ? ("primary") : ("default"));
            echo ">li>a,#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo (($this->getAttribute(($context["particle"] ?? null), "nav_style", [])) ? ("primary") : ("default"));
            echo " .jl-nav-sub a {color: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "nav_cv_color", []), "html", null, true);
            echo ";}
";
        }
        // line 23
        if ($this->getAttribute(($context["particle"] ?? null), "nav_color_active", [])) {
            // line 24
            echo "\t#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo (($this->getAttribute(($context["particle"] ?? null), "nav_style", [])) ? ("primary") : ("default"));
            echo ">li>a:focus,#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo (($this->getAttribute(($context["particle"] ?? null), "nav_style", [])) ? ("primary") : ("default"));
            echo ">li>a:hover,#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo (($this->getAttribute(($context["particle"] ?? null), "nav_style", [])) ? ("primary") : ("default"));
            echo ">li.jl-active>a,#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo (($this->getAttribute(($context["particle"] ?? null), "nav_style", [])) ? ("primary") : ("default"));
            echo " .jl-nav-sub a:focus,#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo (($this->getAttribute(($context["particle"] ?? null), "nav_style", [])) ? ("primary") : ("default"));
            echo " .jl-nav-sub a:hover {color: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "nav_color_active", []));
            echo ";}
";
        }
        // line 26
        if ($this->getAttribute(($context["particle"] ?? null), "nav_color_header", [])) {
            // line 27
            echo "#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo (($this->getAttribute(($context["particle"] ?? null), "nav_style", [])) ? ("primary") : ("default"));
            echo " .jl-nav-header {color: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "nav_color_header", []), "html", null, true);
            echo ";}
";
        }
        // line 29
        if ($this->getAttribute(($context["particle"] ?? null), "toggle_text_fontsize", [])) {
            // line 30
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-toggle { font-size: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "toggle_text_fontsize", []), "html", null, true);
            echo "px; }
";
        }
        $context["inline_mc_style"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addInlineStyle", [0 => ($context["inline_mc_style"] ?? null), 1 => 0], "method");
        // line 34
        echo "
";
        // line 52
        echo "
";
        // line 63
        echo "
";
        // line 189
        echo "
";
        // line 199
        echo "
";
        // line 208
        echo "
";
        // line 219
        echo "
";
        // line 221
        $context["attrs_menu"] = (("tm-nav-mobile jl-offcanvas-bar" . (($this->getAttribute(($context["particle"] ?? null), "nav_center", [])) ? (" jl-text-center") : (""))) . (($this->getAttribute(($context["particle"] ?? null), "offcanvas_inverse", [])) ? ((" jl-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "offcanvas_inverse", [])))) : ("")));
        // line 222
        echo "
";
        // line 223
        $context["attrs_menu"] = ((($context["attrs_menu"] ?? null)) ? (((" class=\"" . twig_trim_filter(($context["attrs_menu"] ?? null))) . "\"")) : (""));
        // line 224
        echo "
";
        // line 225
        $context["macro"] = $this;
        // line 226
        echo "
";
        // line 227
        if (($this->getAttribute(($context["particle"] ?? null), "menu_animation", []) == "offcanvas")) {
            // line 228
            $pageblockVariables = [];
            if ($pageblockVariables && !is_array($pageblockVariables)) {
                throw new UnexpectedValueException('{% pageblock with x %}: x is not an array');
            }
            $location = "body_bottom";
            if ($location && !is_string($location)) {
                throw new UnexpectedValueException('{% pageblock in x %}: x is not a string');
            }
            $priority = isset($pageblockVariables['priority']) ? $pageblockVariables['priority'] : 0;
            ob_start();
            // line 229
            echo "<div id=\"mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" jl-offcanvas=\"mode: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "animation_mode", []), "html", null, true);
            echo ";";
            echo (($this->getAttribute(($context["particle"] ?? null), "flip_offcanvas", [])) ? (" flip: true;") : (""));
            echo (($this->getAttribute(($context["particle"] ?? null), "overlay", [])) ? (" overlay: true;") : (""));
            echo "\">
    <div";
            // line 230
            echo ($context["attrs_menu"] ?? null);
            echo ">

    ";
            // line 232
            if ($this->getAttribute(($context["particle"] ?? null), "close_button", [])) {
                // line 233
                echo "        <button class=\"jl-offcanvas-close\" type=\"button\" jl-close></button>
    ";
            }
            // line 235
            echo "
        ";
            // line 236
            if ($this->getAttribute(($context["particle"] ?? null), "modal_vertically", [])) {
                // line 237
                echo "            <div class=\"jl-margin-auto-vertical jl-width-1-1\">
        ";
            }
            // line 239
            echo "
            <div class=\"jl-child-width-1-1\" jl-grid>
                
                ";
            // line 242
            if ($this->getAttribute($this->getAttribute(($context["menu"] ?? null), "root", []), "count", [], "method")) {
                // line 243
                echo "                <div>
                    <ul class=\"jl-nav jl-nav-";
                // line 244
                echo (($this->getAttribute(($context["particle"] ?? null), "nav_style", [])) ? ("primary") : ("default"));
                echo (($this->getAttribute(($context["particle"] ?? null), "nav_center", [])) ? (" jl-nav-center") : (" jl-text-left"));
                echo (($this->getAttribute(($context["particle"] ?? null), "nav_divider", [])) ? (" jl-nav-divider") : (""));
                echo " jl-nav-parent-icon\" jl-nav=\"targets: > .js-accordion;\">
                        ";
                // line 245
                echo $context["macro"]->getdisplayItems($this->getAttribute(($context["menu"] ?? null), "root", []), ($context["menu"] ?? null), $context);
                echo "
                    </ul>
                </div>
                ";
            }
            // line 249
            echo "                
                ";
            // line 250
            if ($this->getAttribute(($context["particle"] ?? null), "module_id", [])) {
                // line 251
                echo "                    <div>
                    ";
                // line 252
                echo $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "displayModule", [0 => $this->getAttribute(($context["particle"] ?? null), "module_id", []), 1 => ["style" => (($this->getAttribute(($context["particle"] ?? null), "chrome", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "chrome", []), "gantry")) : ("gantry")), "position" => "particle"]], "method");
                echo "
                    </div>
                ";
            }
            // line 255
            echo "
            </div>

        ";
            // line 258
            if ($this->getAttribute(($context["particle"] ?? null), "modal_vertically", [])) {
                // line 259
                echo "            </div>
        ";
            }
            // line 261
            echo "
    </div>
</div>
";
            $content = ob_get_clean();
            Gantry\Framework\Gantry::instance()['document']->addHtml($content, $priority, $location);
        }
    }

    // line 35
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
            // line 36
            echo "    ";
            try {                // line 37
                echo "    ";
                $context["in_particle"] = (((($this->getAttribute(($context["context"] ?? null), "in_particle", [], "any", true, true) &&  !(null === $this->getAttribute(($context["context"] ?? null), "in_particle", [])))) ? ($this->getAttribute(($context["context"] ?? null), "in_particle", [])) : (0)) + 1);
                // line 38
                echo "    ";
                if ((($context["in_particle"] ?? null) > 5)) {
                    // line 39
                    echo "        ";
                    throw new \RuntimeException("Particle loop detected"                    ,                     500                    );
                    // line 40
                    echo "    ";
                }
                // line 41
                echo "
    ";
                // line 42
                $context["context"] = twig_array_merge(($context["context"] ?? null), ["particle" => $this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "particle", []), "in_particle" => ($context["in_particle"] ?? null)]);
                // line 43
                echo "    ";
                $context["classes"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "block", []), "class", []);
                // line 44
                echo "    <div class=\"menu-item-particle";
                ((($context["classes"] ?? null)) ? (print (twig_escape_filter($this->env, (" " . ($context["classes"] ?? null)), "html", null, true))) : (print ("")));
                echo "\">
        ";
                // line 45
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
                try {
                    $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                     $this->loadTemplate([0 => (("particles/" . $this->getAttribute(($context["item"] ?? null), "particle", [])) . ".html.twig"), 1 => (("@particles/" . $this->getAttribute(($context["item"] ?? null), "particle", [])) . ".html.twig")], "@particles/jlnavcanvas.html.twig", 45);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                    $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display(twig_to_array(                    // line 46
($context["context"] ?? null)));
                }
                // line 47
                echo "    </div>
    ";
            } catch (\Exception $e) {
                if ($context['gantry']->debug()) throw $e;
                if (\GANTRY_DEBUGGER) \Gantry\Debugger::addException($e);
                $context['e'] = $e;
                // line 49
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

    // line 53
    public function getdisplayTitle($__item__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 54
            echo "    ";
            if (( !$this->getAttribute(($context["item"] ?? null), "icon_only", []) ||  !($this->getAttribute(($context["item"] ?? null), "image", []) || $this->getAttribute(($context["item"] ?? null), "icon", [])))) {
                // line 55
                echo "        ";
                if ($this->getAttribute(($context["item"] ?? null), "subtitle", [])) {
                    // line 56
                    echo "        <div>";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                    echo "
        <div class=\"jl-navbar-subtitle\">";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "subtitle", []), "html", null, true);
                    echo "</div></div>
        ";
                } else {
                    // line 59
                    echo "        ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                    echo "
        ";
                }
                // line 61
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

    // line 64
    public function getdisplayItem($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 65
            echo "    ";
            $context["self"] = $this;
            // line 66
            echo "    ";
            if ((($this->getAttribute(($context["item"] ?? null), "type", []) == "particle") &&  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "particle", []), "enabled", []))) {
                // line 67
                echo "        ";
                $context["enabled"] = 0;
                // line 68
                echo "    ";
            }
            // line 69
            echo "    ";
            if ((($this->getAttribute(($context["item"] ?? null), "visible", []) && $this->getAttribute(($context["item"] ?? null), "enabled", [])) && ((array_key_exists("enabled", $context)) ? (_twig_default_filter(($context["enabled"] ?? null), 1)) : (1)))) {
                // line 70
                echo "        ";
                $context["title"] = ((($this->getAttribute(($context["item"] ?? null), "icon_only", []) || $this->getAttribute(($context["item"] ?? null), "link_title", []))) ? (((" title=\"" . twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "link_title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "link_title", []), $this->getAttribute(($context["item"] ?? null), "title", []))) : ($this->getAttribute(($context["item"] ?? null), "title", []))))) . "\"")) : (""));
                // line 71
                echo "        ";
                $context["label"] = ((($this->getAttribute(($context["item"] ?? null), "icon_only", []) && ($this->getAttribute(($context["item"] ?? null), "image", []) || $this->getAttribute(($context["item"] ?? null), "icon", [])))) ? (((" aria-label=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []))) . "\"")) : (""));
                // line 72
                echo "        ";
                $context["active"] = (($this->getAttribute(($context["menu"] ?? null), "isActive", [0 => ($context["item"] ?? null)], "method")) ? (" jl-active") : (""));
                // line 73
                echo "        ";
                $context["dropdown"] = ((($this->getAttribute(($context["item"] ?? null), "level", []) == 1)) ? ((" g-" . $this->getAttribute(($context["item"] ?? null), "getDropdown", [], "method"))) : (""));
                // line 74
                echo "        ";
                $context["parent"] = ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "children", []))) ? (" jl-parent") : (""));
                // line 75
                echo "        ";
                $context["target"] = (((($this->getAttribute(($context["item"] ?? null), "target", []) != "_self") || $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "forceTarget", []))) ? (((" target=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "target", []))) . "\"")) : (""));
                // line 76
                echo "        ";
                $context["rel"] = $this->getAttribute(($context["item"] ?? null), "rel", []);
                // line 77
                echo "
        ";
                // line 78
                if (($this->getAttribute(($context["item"] ?? null), "target", []) == "_blank")) {
                    // line 79
                    echo "            ";
                    if (!twig_in_filter("noopener", ($context["rel"] ?? null))) {
                        // line 80
                        echo "                ";
                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                        // line 81
                        echo "                ";
                        $context["rel"] = (($context["rel"] ?? null) . "noopener");
                        // line 82
                        echo "            ";
                    }
                    // line 83
                    echo "            ";
                    if (!twig_in_filter("noreferrer", ($context["rel"] ?? null))) {
                        // line 84
                        echo "                ";
                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                        // line 85
                        echo "                ";
                        $context["rel"] = (($context["rel"] ?? null) . "noreferrer");
                        // line 86
                        echo "            ";
                    }
                    // line 87
                    echo "        ";
                }
                // line 88
                echo "
        ";
                // line 89
                $context["listAttributes"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->attributeArrayFilter($this->getAttribute(($context["item"] ?? null), "attributes", []));
                // line 90
                echo "        ";
                $context["linkAttributes"] = "";
                // line 91
                echo "        
        ";
                // line 92
                if ($this->getAttribute(($context["item"] ?? null), "link_attributes", [])) {
                    // line 93
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? null), "link_attributes", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                        // line 94
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["attribute"]);
                        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                            // line 95
                            echo "                    ";
                            if (($context["key"] == "rel")) {
                                // line 96
                                echo "                        ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $context["value"], " "));
                                foreach ($context['_seq'] as $context["_key"] => $context["hVal"]) {
                                    // line 97
                                    echo "                            ";
                                    if (!twig_in_filter($context["hVal"], ($context["rel"] ?? null))) {
                                        // line 98
                                        echo "                                ";
                                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                                        // line 99
                                        echo "                                ";
                                        $context["rel"] = (($context["rel"] ?? null) . $context["hVal"]);
                                        // line 100
                                        echo "                            ";
                                    }
                                    // line 101
                                    echo "                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hVal'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 102
                                echo "                    ";
                            } else {
                                // line 103
                                echo "                        ";
                                $context["linkAttributes"] = (((((($context["linkAttributes"] ?? null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                                // line 104
                                echo "                    ";
                            }
                            // line 105
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 106
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 107
                    echo "        ";
                }
                // line 108
                echo "
        ";
                // line 110
                echo "        ";
                if (($this->getAttribute(($context["item"] ?? null), "target", []) == "_nonav")) {
                    // line 111
                    echo "            ";
                    $context["target"] = "target=\"_blank\"";
                    // line 112
                    echo "            ";
                    $context["linkAttributes"] = (($context["linkAttributes"] ?? null) . " onclick=\"window.open(this.href, 'targetWindow', 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes'); return false;\"");
                    // line 113
                    echo "        ";
                }
                // line 114
                echo "
        ";
                // line 115
                $context["rel"] = ((($context["rel"] ?? null)) ? (((" rel=\"" . twig_escape_filter($this->env, ($context["rel"] ?? null), "html_attr")) . "\"")) : (""));
                // line 116
                echo "        ";
                $context["item_element"] = ((($this->getAttribute(($context["item"] ?? null), "url", []) || ( !$this->getAttribute(($context["item"] ?? null), "url", []) && ($context["parent"] ?? null)))) ? ("a") : ("div"));
                // line 117
                echo "
        ";
                // line 118
                if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                    // line 119
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
                    echo "\"";
                    // line 120
                    if ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", []), 0)) : (0))) {
                        echo " title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                        echo "\"";
                    }
                    echo ($context["listAttributes"] ?? null);
                    echo ">
            <";
                    // line 121
                    echo ($context["item_element"] ?? null);
                    if ($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) {
                        echo " class=\"";
                        (($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) ? (print (twig_escape_filter($this->env, ("" . $this->getAttribute(($context["item"] ?? null), "anchor_class", [])), "html", null, true))) : (print ("")));
                        echo "\"";
                    }
                    if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                        echo " href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "url", []), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "hash", []), "html", null, true);
                        echo "\"";
                        echo ((((($context["title"] ?? null) . ($context["label"] ?? null)) . ($context["target"] ?? null)) . ($context["rel"] ?? null)) . ($context["linkAttributes"] ?? null));
                    }
                    if ($this->getAttribute(($context["item"] ?? null), "hash", [])) {
                        echo " jl-scroll";
                    }
                    echo ">
                ";
                    // line 122
                    if ($this->getAttribute(($context["item"] ?? null), "image", [])) {
                        // line 123
                        echo "<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["item"] ?? null), "image", [])), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                        echo "\" />
                ";
                    } elseif ($this->getAttribute(                    // line 124
($context["item"] ?? null), "icon", [])) {
                        // line 125
                        echo "                    <i class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "icon", []), "html", null, true);
                        echo "\" aria-hidden=\"true\"></i>";
                    }
                    // line 127
                    echo "               ";
                    echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                    echo "
            </";
                    // line 128
                    echo ($context["item_element"] ?? null);
                    echo ">
            ";
                    // line 129
                    if (twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "children", []))) {
                        // line 130
                        echo $context["self"]->getdisplaySubmenu(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null));
                    }
                    // line 132
                    echo "        </li>";
                }
                // line 134
                echo "
    ";
                // line 135
                if (($this->getAttribute(($context["item"] ?? null), "type", []) == "particle")) {
                    // line 136
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
                    echo "\"";
                    // line 137
                    if ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", []), 0)) : (0))) {
                        echo " title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                        echo "\"";
                    }
                    echo ($context["listAttributes"] ?? null);
                    echo ">
            ";
                    // line 138
                    echo $context["self"]->getdisplayParticle(($context["item"] ?? null), ($context["context"] ?? null));
                    echo "
        </li>
    ";
                }
                // line 141
                echo "
    ";
                // line 142
                if ((($this->getAttribute(($context["item"] ?? null), "type", []) == "heading") && ($this->getAttribute(($context["item"] ?? null), "level", []) != 1))) {
                    // line 143
                    echo "        <li class=\"jl-nav-header\">
        ";
                    // line 144
                    if ($this->getAttribute(($context["item"] ?? null), "image", [])) {
                        // line 145
                        echo "<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["item"] ?? null), "image", [])), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                        echo "\" />
        ";
                    } elseif ($this->getAttribute(                    // line 146
($context["item"] ?? null), "icon", [])) {
                        // line 147
                        echo "            <i class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "icon", []), "html", null, true);
                        echo "\" aria-hidden=\"true\"></i>";
                    }
                    // line 148
                    echo "        
        ";
                    // line 149
                    echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                    echo "</li>
    ";
                }
                // line 151
                echo "
    ";
                // line 152
                if (((($this->getAttribute(($context["item"] ?? null), "type", []) == "heading") && ($this->getAttribute(($context["item"] ?? null), "level", []) == 1)) && ($context["parent"] ?? null))) {
                    // line 153
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
                    echo "\"";
                    // line 154
                    if ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", []), 0)) : (0))) {
                        echo " title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                        echo "\"";
                    }
                    echo ($context["listAttributes"] ?? null);
                    echo ">
        <a";
                    // line 155
                    if ($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) {
                        echo " class=\"";
                        (($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) ? (print (twig_escape_filter($this->env, ("" . $this->getAttribute(($context["item"] ?? null), "anchor_class", [])), "html", null, true))) : (print ("")));
                        echo "\"";
                    }
                    echo " href=\"#";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "hash", []), "html", null, true);
                    echo "\"";
                    echo ((((($context["title"] ?? null) . ($context["label"] ?? null)) . ($context["target"] ?? null)) . ($context["rel"] ?? null)) . ($context["linkAttributes"] ?? null));
                    if ($this->getAttribute(($context["item"] ?? null), "hash", [])) {
                        echo " jl-scroll";
                    }
                    echo ">
                ";
                    // line 156
                    if ($this->getAttribute(($context["item"] ?? null), "image", [])) {
                        // line 157
                        echo "                    <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["item"] ?? null), "image", [])), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                        echo "\" />
                ";
                    } elseif ($this->getAttribute(                    // line 158
($context["item"] ?? null), "icon", [])) {
                        // line 159
                        echo "                    <i class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "icon", []), "html", null, true);
                        echo "\" aria-hidden=\"true\"></i>
                ";
                    }
                    // line 160
                    echo "        
        ";
                    // line 161
                    echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                    echo "
        </a>
        ";
                    // line 163
                    if (twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "children", []))) {
                        // line 164
                        echo $context["self"]->getdisplaySubmenu(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null));
                    }
                    // line 166
                    echo "        </li>
    ";
                }
                // line 167
                echo "  

    ";
                // line 169
                if ((($this->getAttribute(($context["item"] ?? null), "type", []) == "separator") && ($this->getAttribute(($context["item"] ?? null), "level", []) != 1))) {
                    // line 170
                    echo "    <li class=\"item-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "id", []), "html", null, true);
                    echo ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "separator_title", []) == false)) ? (" jl-nav-divider") : (""));
                    if ($this->getAttribute(($context["item"] ?? null), "class", [])) {
                        echo " ";
                        echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "class", []), "")) : ("")), "html", null, true);
                    }
                    echo "\"";
                    if ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", []), 0)) : (0))) {
                        echo " title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                        echo "\"";
                    }
                    echo ($context["listAttributes"] ?? null);
                    echo ">";
                    echo (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "separator_title", [])) ? ($context["self"]->getdisplayTitle(($context["item"] ?? null))) : (""));
                    echo "</li>
    ";
                }
                // line 172
                echo "
    ";
                // line 173
                if (((($this->getAttribute(($context["item"] ?? null), "type", []) == "separator") && ($this->getAttribute(($context["item"] ?? null), "level", []) == 1)) && ($context["parent"] ?? null))) {
                    // line 174
                    echo "    <li class=\"item-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "id", []), "html", null, true);
                    if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                        echo twig_escape_filter($this->env, ($context["parent"] ?? null), "html", null, true);
                        echo " js-accordion";
                    }
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    if ($this->getAttribute(($context["item"] ?? null), "class", [])) {
                        echo " ";
                        echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "class", []), "")) : ("")), "html", null, true);
                    }
                    echo "\"";
                    // line 175
                    if ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", []), 0)) : (0))) {
                        echo " title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                        echo "\"";
                    }
                    echo ($context["listAttributes"] ?? null);
                    echo ">
    <a";
                    // line 176
                    if ($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) {
                        echo " class=\"";
                        (($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) ? (print (twig_escape_filter($this->env, ("" . $this->getAttribute(($context["item"] ?? null), "anchor_class", [])), "html", null, true))) : (print ("")));
                        echo "\"";
                    }
                    echo " href=\"#";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "hash", []), "html", null, true);
                    echo "\"";
                    echo ((((($context["title"] ?? null) . ($context["label"] ?? null)) . ($context["target"] ?? null)) . ($context["rel"] ?? null)) . ($context["linkAttributes"] ?? null));
                    if ($this->getAttribute(($context["item"] ?? null), "hash", [])) {
                        echo " jl-scroll";
                    }
                    echo ">
        ";
                    // line 177
                    if ($this->getAttribute(($context["item"] ?? null), "image", [])) {
                        // line 178
                        echo "            <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["item"] ?? null), "image", [])), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                        echo "\" />
        ";
                    } elseif ($this->getAttribute(                    // line 179
($context["item"] ?? null), "icon", [])) {
                        // line 180
                        echo "            <i class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "icon", []), "html", null, true);
                        echo "\" aria-hidden=\"true\"></i>
        ";
                    }
                    // line 182
                    echo "    ";
                    echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                    echo "</a>
    ";
                    // line 183
                    echo $context["self"]->getdisplaySubmenu(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null));
                    echo "
    </li>
    ";
                }
                // line 186
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

    // line 190
    public function getdisplayContainers($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 191
            echo "\t";
            $context["self"] = $this;
            // line 192
            echo "\t";
            $context["groups"] = ((($this->getAttribute(($context["item"] ?? null), "getDropdown", [], "method") == "standard")) ? ([0 => ($context["item"] ?? null)]) : ($this->getAttribute(($context["item"] ?? null), "groups", [])));
            // line 193
            echo "\t<ul class=\"jl-nav-sub\">
\t\t";
            // line 194
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
            foreach ($context['_seq'] as $context["column"] => $context["items"]) {
                // line 195
                echo "\t\t\t";
                echo $context["self"]->getdisplayItems($context["items"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null));
                echo "
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['column'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "\t</ul>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 200
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
            // line 201
            echo "    ";
            $context["self"] = $this;
            // line 202
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 203
                echo "        ";
                $context["start_level"] = (($context["start_level"]) ?? ((($context["root_level"]) ?? ($this->getAttribute($context["item"], "level", [])))));
                // line 204
                echo "        ";
                $context["dropdown"] = (($context["dropdown_type"]) ?? ($this->getAttribute($context["item"], "dropdown", [])));
                // line 205
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

    // line 209
    public function getdisplaySubmenu($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 210
            echo "\t";
            $context["self"] = $this;
            // line 211
            echo "\t";
            if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                // line 212
                echo "\t\t";
                $context["animation"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "gantry", [], "any", false, true), "config", [], "any", false, true), "get", [0 => "styles.menu.animation"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "gantry", [], "any", false, true), "config", [], "any", false, true), "get", [0 => "styles.menu.animation"], "method"), "g-fade")) : ("g-fade"));
                // line 213
                echo "\t\t";
                if (((((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) == 1) && ( !($context["dropdown_type"] ?? null) == "fullwidth")) || (($context["dropdown_type"] ?? null) == "standard")) || (((($this->getAttribute(($context["item"] ?? null), "width", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "width", []), "auto")) : ("auto")) != "auto") && (($context["dropdown_type"] ?? null) == "fullwidth")))) {
                    // line 214
                    echo "\t\t\t";
                    $context["dropdown_dir"] = ("g-dropdown-" . (($this->getAttribute(($context["item"] ?? null), "dropdown_dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "dropdown_dir", []), "right")) : ("right")));
                    // line 215
                    echo "\t\t";
                }
                // line 216
                echo "\t\t";
                echo $context["self"]->getdisplayContainers(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null));
                echo "
\t";
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
        return "@particles/jlnavcanvas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1071 => 216,  1068 => 215,  1065 => 214,  1062 => 213,  1059 => 212,  1056 => 211,  1053 => 210,  1038 => 209,  1016 => 205,  1013 => 204,  1010 => 203,  1005 => 202,  1002 => 201,  986 => 200,  970 => 197,  961 => 195,  957 => 194,  954 => 193,  951 => 192,  948 => 191,  933 => 190,  916 => 186,  910 => 183,  905 => 182,  899 => 180,  897 => 179,  890 => 178,  888 => 177,  873 => 176,  864 => 175,  851 => 174,  849 => 173,  846 => 172,  826 => 170,  824 => 169,  820 => 167,  816 => 166,  813 => 164,  811 => 163,  806 => 161,  803 => 160,  797 => 159,  795 => 158,  788 => 157,  786 => 156,  771 => 155,  762 => 154,  750 => 153,  748 => 152,  745 => 151,  740 => 149,  737 => 148,  732 => 147,  730 => 146,  723 => 145,  721 => 144,  718 => 143,  716 => 142,  713 => 141,  707 => 138,  698 => 137,  686 => 136,  684 => 135,  681 => 134,  678 => 132,  675 => 130,  673 => 129,  669 => 128,  664 => 127,  659 => 125,  657 => 124,  650 => 123,  648 => 122,  629 => 121,  620 => 120,  608 => 119,  606 => 118,  603 => 117,  600 => 116,  598 => 115,  595 => 114,  592 => 113,  589 => 112,  586 => 111,  583 => 110,  580 => 108,  577 => 107,  571 => 106,  565 => 105,  562 => 104,  559 => 103,  556 => 102,  550 => 101,  547 => 100,  544 => 99,  541 => 98,  538 => 97,  533 => 96,  530 => 95,  525 => 94,  520 => 93,  518 => 92,  515 => 91,  512 => 90,  510 => 89,  507 => 88,  504 => 87,  501 => 86,  498 => 85,  495 => 84,  492 => 83,  489 => 82,  486 => 81,  483 => 80,  480 => 79,  478 => 78,  475 => 77,  472 => 76,  469 => 75,  466 => 74,  463 => 73,  460 => 72,  457 => 71,  454 => 70,  451 => 69,  448 => 68,  445 => 67,  442 => 66,  439 => 65,  424 => 64,  408 => 61,  402 => 59,  397 => 57,  392 => 56,  389 => 55,  386 => 54,  374 => 53,  355 => 49,  348 => 47,  345 => 46,  337 => 45,  332 => 44,  329 => 43,  327 => 42,  324 => 41,  321 => 40,  318 => 39,  315 => 38,  312 => 37,  310 => 36,  297 => 35,  287 => 261,  283 => 259,  281 => 258,  276 => 255,  270 => 252,  267 => 251,  265 => 250,  262 => 249,  255 => 245,  249 => 244,  246 => 243,  244 => 242,  239 => 239,  235 => 237,  233 => 236,  230 => 235,  226 => 233,  224 => 232,  219 => 230,  209 => 229,  198 => 228,  196 => 227,  193 => 226,  191 => 225,  188 => 224,  186 => 223,  183 => 222,  181 => 221,  178 => 219,  175 => 208,  172 => 199,  169 => 189,  166 => 63,  163 => 52,  160 => 34,  158 => 33,  149 => 30,  147 => 29,  137 => 27,  135 => 26,  109 => 24,  107 => 23,  93 => 21,  91 => 20,  83 => 18,  81 => 17,  71 => 15,  69 => 14,  61 => 12,  59 => 11,  51 => 9,  49 => 8,  47 => 7,  44 => 6,  38 => 4,  31 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/jlnavcanvas.html.twig", "C:\\xampp\\htdocs\\joomla\\templates\\jl_learnmate_lite\\particles\\jlnavcanvas.html.twig");
    }
}
