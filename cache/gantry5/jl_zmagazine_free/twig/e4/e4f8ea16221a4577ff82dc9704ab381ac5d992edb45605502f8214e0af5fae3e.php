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

/* @particles/date.html.twig */
class __TwigTemplate_d0ce85706f08286698625be434936ef58cfc90f2fe71486e2f7fdaca027e9689 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/date.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"g-date\">
        <span>";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('date')->getCallable(), [$this->env, "now", (($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "date", [], "any", false, true), "formats", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "date", [], "any", false, true), "formats", []), "l, F d, Y")) : ("l, F d, Y"))]), "html", null, true);
        echo "</span>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/date.html.twig", "C:\\xampp\\htdocs\\joomla\\media\\gantry5\\engines\\nucleus\\particles\\date.html.twig");
    }
}
