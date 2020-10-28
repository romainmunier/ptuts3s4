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

/* includes/stylesheets.html.twig */
class __TwigTemplate_31328fb850783ab974558bc212f26de1c19d5565b2c3abe99e5e0beea52a6c52 extends Template
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
        // line 1
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1), "pathInfo", [], "any", false, false, false, 1), [0 => "/401", 1 => "/404", 2 => "/501"])) {
            // line 2
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/dashboard/bootstrap.min.css"), "html", null, true);
            echo "\">
    <link rel=\"stylesheet\" href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/dashboard/style.css"), "html", null, true);
            echo "\">
";
        } elseif (!twig_in_filter("dashboard", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
($context["app"] ?? null), "request", [], "any", false, false, false, 4), "pathInfo", [], "any", false, false, false, 4))) {
            // line 5
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/home/bootstrap.min.css"), "html", null, true);
            echo "\">
    <link rel=\"stylesheet\" href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/home/style.css"), "html", null, true);
            echo "\">
";
        } else {
            // line 8
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/dashboard/bootstrap.min.css"), "html", null, true);
            echo "\">
    <link rel=\"stylesheet\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/dashboard/style.css"), "html", null, true);
            echo "\">
";
        }
    }

    public function getTemplateName()
    {
        return "includes/stylesheets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  60 => 8,  55 => 6,  50 => 5,  48 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/stylesheets.html.twig", "D:\\romainmunier\\Documents\\GitHub\\ptuts3s4\\templates\\includes\\stylesheets.html.twig");
    }
}
