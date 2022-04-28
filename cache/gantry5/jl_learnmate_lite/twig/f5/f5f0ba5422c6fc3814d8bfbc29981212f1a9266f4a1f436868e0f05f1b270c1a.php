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

/* @particles/jlnotification.html.twig */
class __TwigTemplate_e0f21af3a1a3a99f6b49c8564d4f115d0e6487091ff0d384d9d5b31940d0b63e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'particle' => [$this, 'block_particle'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/jlnotification.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 3
        echo "
<style>
";
        // line 5
        if (($this->getAttribute(($context["particle"] ?? null), "type", []) == "bar")) {
            // line 6
            echo ".jl-position-z-index {z-index: 9;}
";
        }
        // line 8
        echo "</style>

";
    }

    // line 12
    public function block_particle($context, array $blocks = [])
    {
        // line 13
        $pageblockVariables = [];
        if ($pageblockVariables && !is_array($pageblockVariables)) {
            throw new UnexpectedValueException('{% pageblock with x %}: x is not an array');
        }
        $location = "body_top";
        if ($location && !is_string($location)) {
            throw new UnexpectedValueException('{% pageblock in x %}: x is not a string');
        }
        $priority = isset($pageblockVariables['priority']) ? $pageblockVariables['priority'] : 0;
        ob_start();
        // line 14
        if (($this->getAttribute(($context["particle"] ?? null), "type", []) == "bar")) {
            // line 15
            echo "<div id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"jl-section jl-section-xsmall jl-section-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "bar_style", []), "html", null, true);
            if (($this->getAttribute(($context["particle"] ?? null), "bar_position", []) != "top")) {
                echo " jl-position-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "bar_position", []));
                echo " jl-position-fixed";
            }
            echo " jl-position-z-index\">
<div class=\"jl-container jl-container-expand jl-text-center\">
";
            // line 17
            echo $this->getAttribute(($context["particle"] ?? null), "message", []);
            echo "
";
            // line 18
            if (($this->getAttribute(($context["particle"] ?? null), "button_styles", []) == "icon")) {
                // line 19
                echo "<button type=\"button\" class=\"el-accept jl-close jl-position-center-right jl-position-medium jl-icon\" data-jl-close data-jl-toggle=\"target: !.jl-section; animation: true\"></button>
";
            } else {
                // line 21
                echo "<button type=\"button\" class=\"el-accept jl-button jl-button-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "button_styles", []), "html", null, true);
                echo " jl-margin-small-left\" data-jl-toggle=\"target: !.jl-section; animation: true\">";
                echo (($this->getAttribute(($context["particle"] ?? null), "button", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "button", []), "Ok")) : ("Ok"));
                echo "</button>
";
            }
            // line 23
            if ($this->getAttribute(($context["particle"] ?? null), "reject_button", [])) {
                // line 24
                echo "<button type=\"button\" class=\"el-reject jl-button jl-button-default jl-margin-small-left\" data-jl-toggle=\"target: !.jl-section; animation: true\">";
                echo $this->getAttribute(($context["particle"] ?? null), "reject_button", []);
                echo "</button>
";
            }
            // line 26
            echo "</div>
</div>
";
        } else {
            // line 29
            echo "<div id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"jl-notification jl-notification-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "position", []));
            echo "\">
<div class=\"jl-notification-message";
            // line 30
            if (($this->getAttribute(($context["particle"] ?? null), "style", []) != "default")) {
                echo " jl-notification-message-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "style", []), "html", null, true);
            }
            echo " jl-panel\">

";
            // line 32
            echo $this->getAttribute(($context["particle"] ?? null), "message", []);
            echo "

<p class=\"jl-margin-small-top\">
";
            // line 35
            if (($this->getAttribute(($context["particle"] ?? null), "button_styles", []) == "icon")) {
                // line 36
                echo "<button type=\"button\" class=\"el-accept jl-notification-close jl-close jl-icon\" data-jl-close data-jl-toggle=\"target: !.jl-notification; animation: jl-animation-fade\"></button>
";
            } else {
                // line 38
                echo "<button type=\"button\" class=\"el-accept jl-button jl-button-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "button_styles", []), "html", null, true);
                echo "\" data-jl-toggle=\"target: !.jl-notification; animation: jl-animation-fade\">";
                echo (($this->getAttribute(($context["particle"] ?? null), "button", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "button", []), "Ok")) : ("Ok"));
                echo "</button>
";
            }
            // line 40
            if ($this->getAttribute(($context["particle"] ?? null), "reject_button", [])) {
                // line 41
                echo "<button type=\"button\" class=\"el-reject jl-button jl-button-default";
                echo ((($this->getAttribute(($context["particle"] ?? null), "button_styles", []) != "icon")) ? (" jl-margin-small-left") : (""));
                echo "\" data-jl-toggle=\"target: !.jl-notification; animation: jl-animation-fade\">";
                echo $this->getAttribute(($context["particle"] ?? null), "reject_button", []);
                echo "</button>
";
            }
            // line 43
            echo "</p>

</div>
</div>
";
        }
        $content = ob_get_clean();
        Gantry\Framework\Gantry::instance()['document']->addHtml($content, $priority, $location);
    }

    // line 51
    public function block_javascript($context, array $blocks = [])
    {
        // line 52
        $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
        // line 53
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jlcomponents/notification.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 54
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addScript", [0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/js.cookie.min.js")], "method");
        // line 55
        echo "<script>
(function (\$) {
    \$(document).on('ready', function () {
        jlNotification()
    });
    if (Cookies.get('";
        // line 60
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_cookieAllowed') == 'true') {
        var el = '#";
        // line 61
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "';
        \$(el).hide();
    }
    function jlNotification() {
        \$('#";
        // line 65
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo " .el-accept').on('click', function () {
            Cookies.set('";
        // line 66
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_cookieAllowed', true, { expires: ";
        echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "expires", [])), "365"), "html", null, true);
        echo " }); // cookie will expire in 365 days
        });
    \$('#";
        // line 68
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo " .el-reject').on('click', function () {
      Cookies.set('";
        // line 69
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_cookieAllowed', false, { expires: ";
        echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "expires", [])), "365"), "html", null, true);
        echo " }); // cookie will expire in 365 days
      });      
    }
  
  }) (jQuery);
</script>

";
    }

    public function getTemplateName()
    {
        return "@particles/jlnotification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 69,  217 => 68,  210 => 66,  206 => 65,  199 => 61,  195 => 60,  188 => 55,  186 => 54,  181 => 53,  179 => 52,  176 => 51,  165 => 43,  157 => 41,  155 => 40,  147 => 38,  143 => 36,  141 => 35,  135 => 32,  127 => 30,  120 => 29,  115 => 26,  109 => 24,  107 => 23,  99 => 21,  95 => 19,  93 => 18,  89 => 17,  76 => 15,  74 => 14,  63 => 13,  60 => 12,  54 => 8,  50 => 6,  48 => 5,  44 => 3,  41 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/jlnotification.html.twig", "C:\\xampp\\htdocs\\joomla\\templates\\jl_learnmate_lite\\particles\\jlnotification.html.twig");
    }
}
