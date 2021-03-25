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

/* dashboard/errors/404.html.twig */
class __TwigTemplate_5462e1547fcd8d1f8958965814c2b22d45641bde8267530c783fe20aa08b2d58 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/errors/404.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Paramètres";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div style=\"width: 100%; height: 100%;\">
    <div class=\"container-fluid\">
        <div class=\"text-center mt-5\">
            <div class=\"error mx-auto\" data-text=\"404\">
                <p class=\"m-0\">404</p>
            </div>
            <p class=\"text-dark mb-5 lead\">Élément introuvable</p>
            <p class=\"text-black-50 mb-0\">Il semblerait que vous cherchiez n'existe pas ou n'existe plus ...</p>
            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">← Retourner à l'accueil</a>
        </div>
    </div>
</div>
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"text-center my-auto copyright text-";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 21), "html", null, true);
        echo "\">
                    <span>Copyright © CEFC Developers Team ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env, "Y"), "Y"), "html", null, true);
        echo "</span>
                </div>
            </div>
        </footer>
        ";
    }

    public function getTemplateName()
    {
        return "dashboard/errors/404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  77 => 21,  68 => 15,  58 => 7,  54 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/errors/404.html.twig", "/Users/romainmunier/Documents/Projets/Symfony/ptuts3s4/templates/dashboard/errors/404.html.twig");
    }
}
