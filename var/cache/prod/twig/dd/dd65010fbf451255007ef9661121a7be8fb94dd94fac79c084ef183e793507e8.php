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

/* includes/scripts.html.twig */
class __TwigTemplate_da1aee15a9a448f111d8ea49f2188bb6be3ab7d3034d0bf42b7dd73ccb18c43f extends Template
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
        if (!twig_in_filter("dashboard", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1), "pathInfo", [], "any", false, false, false, 1))) {
            // line 2
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/home/jquery.min.js"), "html", null, true);
            echo "\"></script>
    <script src=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/home/bootstrap.bundle.min.js"), "html", null, true);
            echo "\"></script>
    <script src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/home/jquery.easing.min.js"), "html", null, true);
            echo "\"></script>
    <script src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/home/external.min.js"), "html", null, true);
            echo "\"></script>
    <script src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/home/axios.min.js"), "html", null, true);
            echo "\"></script>
    <script src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/home/script.js"), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 9
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard/jquery.min.js"), "html", null, true);
            echo "\"></script>
    <script src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
    <script src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard/chart.min.js"), "html", null, true);
            echo "\"></script>
    <script src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/home/axios.min.js"), "html", null, true);
            echo "\"></script>
    <script src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard/script.min.js"), "html", null, true);
            echo "\"></script>
    <script src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard/script.js"), "html", null, true);
            echo "\"></script>
";
        }
    }

    public function getTemplateName()
    {
        return "includes/scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 14,  82 => 13,  78 => 12,  74 => 11,  70 => 10,  65 => 9,  60 => 7,  56 => 6,  52 => 5,  48 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/scripts.html.twig", "D:\\romainmunier\\Documents\\GitHub\\ptuts3s4\\templates\\includes\\scripts.html.twig");
    }
}
