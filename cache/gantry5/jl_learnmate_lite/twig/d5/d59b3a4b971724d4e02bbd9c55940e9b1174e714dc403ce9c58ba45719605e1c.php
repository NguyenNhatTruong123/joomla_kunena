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

/* @nucleus/layout/section.html.twig */
class __TwigTemplate_2a2b264012584e08c81eea1f571b065e4c6899ccbc8ae254cbdb7f8499c6e1c0 extends \Twig\Template
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
        $context["tag_type"] = (($this->getAttribute(($context["segment"] ?? null), "subtype", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["segment"] ?? null), "subtype", []), "section")) : ("section"));
        // line 2
        $context["attr_id"] = (($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "id", [])) ? ($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "id", [])) : (("g-" . $this->getAttribute(($context["segment"] ?? null), "id", []))));
        // line 3
        $context["attr_class"] = ($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "class", []) . (($this->getAttribute($this->getAttribute(        // line 4
($context["segment"] ?? null), "attributes", []), "variations", [])) ? ((" " . twig_join_filter($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "variations", []), " "))) : ("")));
        // line 5
        $context["attr_extra"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->attributeArrayFilter($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "extra", []));
        // line 6
        $context["boxed"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "boxed", []);
        // line 7
        if ( !(null === ($context["boxed"] ?? null))) {
            // line 8
            echo "    ";
            $context["boxed"] = (((twig_trim_filter(($context["boxed"] ?? null)) == "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "page", []), "body", []), "layout", []), "sections", [])) : (($context["boxed"] ?? null)));
        }
        // line 10
        echo "
";
        // line 11
        $context["maxwidth"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "maxwidth", []);
        // line 12
        if ( !(null === ($context["maxwidth"] ?? null))) {
            // line 13
            echo "    ";
            $context["maxwidth"] = (((twig_trim_filter(($context["maxwidth"] ?? null)) == "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "page", []), "body", []), "layout", []), "maxwidth", [])) : (($context["maxwidth"] ?? null)));
        }
        // line 16
        ob_start(function () { return ''; });
        // line 17
        echo "    ";
        if ($this->getAttribute(($context["segment"] ?? null), "children", [])) {
            // line 18
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["segments"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
                // line 19
                echo "            ";
                $this->loadTemplate((("@nucleus/layout/" . $this->getAttribute($context["segment"], "type", [])) . ".html.twig"), "@nucleus/layout/section.html.twig", 19)->display(twig_array_merge($context, ["segments" => $this->getAttribute($context["segment"], "children", [])]));
                // line 20
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    ";
        }
        $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        if (($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "sticky", []) || twig_trim_filter(($context["html"] ?? null)))) {
            // line 26
            if ((($context["maxwidth"] ?? null) == 0)) {
                // line 27
                echo "        ";
                $context["container_class"] = "";
                // line 28
                echo "    ";
            } elseif ((($context["maxwidth"] ?? null) == 1)) {
                // line 29
                echo "        ";
                $context["container_class"] = " jl-container-small";
                // line 30
                echo "    ";
            } elseif ((($context["maxwidth"] ?? null) == 2)) {
                // line 31
                echo "        ";
                $context["container_class"] = " jl-container-large";
                // line 32
                echo "    ";
            } elseif ((($context["maxwidth"] ?? null) == 3)) {
                // line 33
                echo "        ";
                $context["container_class"] = " jl-container-xlarge";
                echo " 
    ";
            } elseif ((            // line 34
($context["maxwidth"] ?? null) == 4)) {
                // line 35
                echo "        ";
                $context["container_class"] = " jl-container-expand";
                echo "                       
    ";
            }
            // line 38
            if (( !(null === ($context["boxed"] ?? null)) && (($context["boxed"] ?? null) == 0))) {
                // line 39
                echo "        ";
                ob_start(function () { return ''; });
                // line 40
                echo "        <div class=\"jl-container";
                echo twig_escape_filter($this->env, ($context["container_class"] ?? null), "html", null, true);
                echo "\">";
                echo ($context["html"] ?? null);
                echo "</div>
        ";
                $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 42
                echo "    ";
            }
            // line 43
            echo "
    ";
            // line 44
            ob_start(function () { return ''; });
            // line 45
            echo "    ";
            $context["attr_class"] = ((($context["attr_class"] ?? null)) ? (((" class=\"" . twig_trim_filter(($context["attr_class"] ?? null))) . "\"")) : (""));
            // line 46
            echo "<";
            echo twig_escape_filter($this->env, ($context["tag_type"] ?? null), "html", null, true);
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["attr_id"] ?? null), "html", null, true);
            echo "\"";
            echo ($context["attr_class"] ?? null);
            echo ($context["attr_extra"] ?? null);
            echo ">
        ";
            // line 47
            echo ($context["html"] ?? null);
            echo "
    </";
            // line 48
            echo twig_escape_filter($this->env, ($context["tag_type"] ?? null), "html", null, true);
            echo ">";
            $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 51
            if ((($context["boxed"] ?? null) == 1)) {
                // line 52
                echo "    <div class=\"jl-container";
                echo twig_escape_filter($this->env, ($context["container_class"] ?? null), "html", null, true);
                echo "\">";
                echo ($context["html"] ?? null);
                echo "</div>
    ";
            } else {
                // line 54
                echo "    ";
                echo ($context["html"] ?? null);
                echo "
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "@nucleus/layout/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 54,  181 => 52,  179 => 51,  175 => 48,  171 => 47,  161 => 46,  158 => 45,  156 => 44,  153 => 43,  150 => 42,  142 => 40,  139 => 39,  137 => 38,  131 => 35,  129 => 34,  124 => 33,  121 => 32,  118 => 31,  115 => 30,  112 => 29,  109 => 28,  106 => 27,  104 => 26,  102 => 24,  98 => 21,  84 => 20,  81 => 19,  63 => 18,  60 => 17,  58 => 16,  54 => 13,  52 => 12,  50 => 11,  47 => 10,  43 => 8,  41 => 7,  39 => 6,  37 => 5,  35 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@nucleus/layout/section.html.twig", "C:\\xampp\\htdocs\\joomla\\templates\\jl_learnmate_lite\\common\\engine\\templates\\layout\\section.html.twig");
    }
}
