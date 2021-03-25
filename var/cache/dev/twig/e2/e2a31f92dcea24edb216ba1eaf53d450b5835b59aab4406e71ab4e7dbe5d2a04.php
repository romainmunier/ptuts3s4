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
class __TwigTemplate_9d98e59997a4d1c2309fc489fe78756c821f2bd062c44607331e7db9014e7027 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/scripts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/scripts.html.twig"));

        // line 1
        if (!twig_in_filter("dashboard", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "pathInfo", [], "any", false, false, false, 1))) {
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  92 => 14,  88 => 13,  84 => 12,  80 => 11,  76 => 10,  71 => 9,  66 => 7,  62 => 6,  58 => 5,  54 => 4,  50 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if \"dashboard\" not in app.request.pathInfo %}
    <script src=\"{{ asset(\"js/home/jquery.min.js\") }}\"></script>
    <script src=\"{{ asset(\"js/home/bootstrap.bundle.min.js\") }}\"></script>
    <script src=\"{{ asset(\"js/home/jquery.easing.min.js\") }}\"></script>
    <script src=\"{{ asset(\"js/home/external.min.js\") }}\"></script>
    <script src=\"{{ asset(\"js/home/axios.min.js\") }}\"></script>
    <script src=\"{{ asset(\"js/home/script.js\") }}\"></script>
{% else %}
    <script src=\"{{ asset(\"js/dashboard/jquery.min.js\") }}\"></script>
    <script src=\"{{ asset(\"js/dashboard/bootstrap.min.js\") }}\"></script>
    <script src=\"{{ asset(\"js/dashboard/chart.min.js\") }}\"></script>
    <script src=\"{{ asset(\"js/home/axios.min.js\") }}\"></script>
    <script src=\"{{ asset(\"js/dashboard/script.min.js\") }}\"></script>
    <script src=\"{{ asset(\"js/dashboard/script.js\") }}\"></script>
{% endif %}", "includes/scripts.html.twig", "/Users/romainmunier/Documents/Projets/Symfony/ptuts3s4/templates/includes/scripts.html.twig");
    }
}
