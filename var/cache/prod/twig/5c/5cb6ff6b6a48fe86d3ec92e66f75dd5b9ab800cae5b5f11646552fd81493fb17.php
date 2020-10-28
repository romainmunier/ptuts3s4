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

/* base.html.twig */
class __TwigTemplate_646d4515745d886a6d6abd7e3fa7f3351eb2d8684802f01d848b541c1f295d95 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 8
        $this->loadTemplate("includes/stylesheets.html.twig", "base.html.twig", 8)->display($context);
        // line 9
        echo "        ";
        $this->loadTemplate("includes/fonts.html.twig", "base.html.twig", 9)->display($context);
        // line 10
        echo "        ";
        $this->loadTemplate("includes/icons.html.twig", "base.html.twig", 10)->display($context);
        // line 11
        echo "    </head>
    <body id=\"page-top\" ";
        // line 12
        if ((!twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 12), "pathInfo", [], "any", false, false, false, 12), [0 => "/", 1 => "/register", 2 => "/login"]) && (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "medieval", [], "any", false, false, false, 12)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "medieval", [], "any", false, false, false, 12)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null), "html", null, true);
            echo "\"";
        }
        echo ">
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('scripts', $context, $blocks);
        // line 16
        echo "        ";
        $this->loadTemplate("includes/scripts.html.twig", "base.html.twig", 16)->display($context);
        // line 17
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "CEFC";
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 15
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 15,  94 => 13,  87 => 6,  81 => 17,  78 => 16,  76 => 15,  73 => 14,  71 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  52 => 8,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "D:\\romainmunier\\Documents\\GitHub\\ptuts3s4\\templates\\base.html.twig");
    }
}
