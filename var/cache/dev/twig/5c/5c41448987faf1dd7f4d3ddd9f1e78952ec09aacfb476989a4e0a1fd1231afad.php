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

/* includes/icons.html.twig */
class __TwigTemplate_6960bb6b6101b55d0e5e56b6a410dd9ac235fd194f49d6252b93164eebffc507 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/icons.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/icons.html.twig"));

        // line 1
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "pathInfo", [], "any", false, false, false, 1), [0 => "/401", 1 => "/404", 2 => "/501"])) {
            // line 2
            echo "    <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/error.png"), "html", null, true);
            echo "\">
    <link rel=\"apple-touch-icon\" href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/error.png"), "html", null, true);
            echo "\">
    <link rel=\"shortcut icon\" href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/error.png"), "html", null, true);
            echo "\">
    <link rel=\"mask-icon\" href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/error.png"), "html", null, true);
            echo "\">
";
        } else {
            // line 7
            echo "    <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/icon.png"), "html", null, true);
            echo "\">
    <link rel=\"apple-touch-icon\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/icon.png"), "html", null, true);
            echo "\">
    <link rel=\"shortcut icon\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/icon.png"), "html", null, true);
            echo "\">
    <link rel=\"mask-icon\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/icon.png"), "html", null, true);
            echo "\">
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 10,  72 => 9,  68 => 8,  63 => 7,  58 => 5,  54 => 4,  50 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.request.pathInfo in [\"/401\", \"/404\", \"/501\"] %}
    <link rel=\"icon\" href=\"{{ asset(\"assets/icon/error.png\") }}\">
    <link rel=\"apple-touch-icon\" href=\"{{ asset(\"assets/icon/error.png\") }}\">
    <link rel=\"shortcut icon\" href=\"{{ asset(\"assets/icon/error.png\") }}\">
    <link rel=\"mask-icon\" href=\"{{ asset(\"assets/icon/error.png\") }}\">
{% else %}
    <link rel=\"icon\" href=\"{{ asset(\"assets/icon/icon.png\") }}\">
    <link rel=\"apple-touch-icon\" href=\"{{ asset(\"assets/icon/icon.png\") }}\">
    <link rel=\"shortcut icon\" href=\"{{ asset(\"assets/icon/icon.png\") }}\">
    <link rel=\"mask-icon\" href=\"{{ asset(\"assets/icon/icon.png\") }}\">
{% endif %}", "includes/icons.html.twig", "/Users/romainmunier/Documents/GitHub/ptuts3s4/templates/includes/icons.html.twig");
    }
}
