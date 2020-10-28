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
class __TwigTemplate_3a0bdaac3f812e0ea1141a81ac3ebe233d6c1bb436ee8a22d53e9bf98e5854e8 extends Template
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
        }
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
        return array (  52 => 5,  48 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/icons.html.twig", "D:\\romainmunier\\Documents\\GitHub\\ptuts3s4\\templates\\includes\\icons.html.twig");
    }
}
