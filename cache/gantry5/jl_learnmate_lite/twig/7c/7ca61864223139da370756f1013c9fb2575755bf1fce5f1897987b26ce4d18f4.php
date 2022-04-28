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

/* @nucleus/layout/container.html.twig */
class __TwigTemplate_5883564adfc8f72e21d7892e039f880c7924f1cd32bf051431ab32afa6b159ad extends \Twig\Template
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
        ob_start(function () { return ''; });
        // line 2
        echo "    ";
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
            // line 3
            echo "        ";
            $this->loadTemplate((("@nucleus/layout/" . $this->getAttribute($context["segment"], "type", [])) . ".html.twig"), "@nucleus/layout/container.html.twig", 3)->display(twig_array_merge($context, ["segments" => $this->getAttribute($context["segment"], "children", [])]));
            // line 4
            echo "    ";
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
        $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 6
        echo "
";
        // line 7
        if (($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "sticky", []) || twig_trim_filter(($context["html"] ?? null)))) {
            // line 8
            echo "    ";
            $context["attr_id"] = (($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "id", [])) ? ($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "id", [])) : (("g-" . $this->getAttribute(($context["segment"] ?? null), "id", []))));
            // line 9
            echo "    ";
            $context["boxed"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "boxed", []);
            // line 10
            echo "    ";
            if ( !(null === ($context["boxed"] ?? null))) {
                // line 11
                echo "        ";
                $context["boxed"] = (((twig_trim_filter(($context["boxed"] ?? null)) == "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "page", []), "body", []), "layout", []), "sections", [])) : (($context["boxed"] ?? null)));
                // line 12
                echo "    ";
            }
            // line 13
            echo "
    ";
            // line 14
            $context["maxwidth"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "maxwidth", []);
            // line 15
            echo "    ";
            if ( !(null === ($context["maxwidth"] ?? null))) {
                // line 16
                echo "        ";
                $context["maxwidth"] = (((twig_trim_filter(($context["maxwidth"] ?? null)) == "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "page", []), "body", []), "layout", []), "maxwidth", [])) : (($context["maxwidth"] ?? null)));
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    ";
            // line 19
            $context["class"] = ("g-wrapper" . (($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "class", [])) ? ((" " . $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "class", []))) : ("")));
            // line 20
            echo "    ";
            $context["attr_extra"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->attributeArrayFilter($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "extra", []));
            // line 22
            if ((($context["maxwidth"] ?? null) == 0)) {
                // line 23
                echo "        ";
                $context["container_class"] = "";
                // line 24
                echo "    ";
            } elseif ((($context["maxwidth"] ?? null) == 1)) {
                // line 25
                echo "        ";
                $context["container_class"] = " jl-container-small";
                // line 26
                echo "    ";
            } elseif ((($context["maxwidth"] ?? null) == 2)) {
                // line 27
                echo "        ";
                $context["container_class"] = " jl-container-large";
                // line 28
                echo "    ";
            } elseif ((($context["maxwidth"] ?? null) == 3)) {
                // line 29
                echo "        ";
                $context["container_class"] = " jl-container-xlarge";
                echo " 
    ";
            } elseif ((            // line 30
($context["maxwidth"] ?? null) == 4)) {
                // line 31
                echo "        ";
                $context["container_class"] = " jl-container-expand";
                echo "                       
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if (( !(null === ($context["boxed"] ?? null)) && (($context["boxed"] ?? null) == 0))) {
                // line 35
                echo "        ";
                ob_start(function () { return ''; });
                // line 36
                echo "        <div class=\"jl-container";
                echo twig_escape_filter($this->env, ($context["container_class"] ?? null), "html", null, true);
                echo "\">";
                echo ($context["html"] ?? null);
                echo "</div>
        ";
                $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 38
                echo "    ";
            }
            // line 39
            echo "
    ";
            // line 40
            ob_start(function () { return ''; });
            // line 41
            echo "    <section id=\"";
            echo twig_escape_filter($this->env, ($context["attr_id"] ?? null), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\"";
            echo ($context["attr_extra"] ?? null);
            echo ">
        ";
            // line 42
            echo ($context["html"] ?? null);
            echo "
    </section>
    ";
            $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 45
            echo "
    ";
            // line 46
            if ((($context["boxed"] ?? null) == 1)) {
                // line 47
                echo "        <div class=\"jl-container";
                echo twig_escape_filter($this->env, ($context["container_class"] ?? null), "html", null, true);
                echo "\">";
                echo ($context["html"] ?? null);
                echo "</div>
    ";
            } else {
                // line 49
                echo "        ";
                echo ($context["html"] ?? null);
                echo "
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "@nucleus/layout/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 49,  187 => 47,  185 => 46,  182 => 45,  176 => 42,  167 => 41,  165 => 40,  162 => 39,  159 => 38,  151 => 36,  148 => 35,  146 => 34,  143 => 33,  137 => 31,  135 => 30,  130 => 29,  127 => 28,  124 => 27,  121 => 26,  118 => 25,  115 => 24,  112 => 23,  110 => 22,  107 => 20,  105 => 19,  102 => 18,  99 => 17,  96 => 16,  93 => 15,  91 => 14,  88 => 13,  85 => 12,  82 => 11,  79 => 10,  76 => 9,  73 => 8,  71 => 7,  68 => 6,  53 => 4,  50 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@nucleus/layout/container.html.twig", "C:\\xampp\\htdocs\\joomla\\templates\\jl_learnmate_lite\\common\\engine\\templates\\layout\\container.html.twig");
    }
}
