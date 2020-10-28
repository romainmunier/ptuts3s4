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

/* includes/dashboard/sidebar.html.twig */
class __TwigTemplate_faf0dde732173d34d78888bbd0a1855007afca91a38b4fee34c528ca29d0bc62 extends Template
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
        echo "<script>
    function collapseAll() {
        \$('collapse-admin-users').collapse(\"hide\");
    }
</script>

<nav class=\"navbar navbar-";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 7), "html", null, true);
        echo " align-items-start sidebar sidebar-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 7), "html", null, true);
        echo " accordion ";
        if ( !(($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "medieval", [], "any", false, false, false, 7)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null)) {
            echo "bg-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 7), "html", null, true);
        } else {
            echo "bg-none";
        }
        echo " p-0\">
    <div class=\"container-fluid d-flex flex-column p-0\">
        <a class=\"navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
";
        // line 13
        echo "            <div class=\"sidebar-brand-text mx-3\">
                <span>Compagnie<br>Excalibur</span>
            </div>
        </a>
        <div class=\"text-center d-none d-md-inline\">
            <button class=\"btn rounded-circle border-0\" id=\"sidebarToggle\" type=\"button\"></button>
        </div>
        <ul class=\"nav navbar-nav text-light\" id=\"accordionSidebar\">
            <li class=\"nav-item\" role=\"presentation\"></li>
        </ul>
        <div class=\"text-center d-none d-md-inline\"></div>
        <nav class=\"navbar navbar-dark align-items-start sidebar sidebar-";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 24), "html", null, true);
        echo " accordion ";
        if ( !(($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "medieval", [], "any", false, false, false, 24)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null)) {
            echo "bg-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 24), "html", null, true);
        } else {
            echo "bg-none";
        }
        echo " p-0\" id=\"sidebarMiddleID\">
            <div class=\"container-fluid d-flex flex-column p-0\">
                <hr class=\"sidebar-divider my-0\">
                <ul class=\"nav navbar-nav text-light\" id=\"accordionSidebar\">
                    <li class=\"nav-item\" role=\"presentation\"></li>
                    <hr class=\"sidebar-divider\">
                    <div class=\"sidebar-heading\">
                        <p class=\"mb-0\">MENU</p>
                    </div>
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link ";
        // line 34
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 34), "pathinfo", [], "any", false, false, false, 34), "/dashboard"))) {
            echo "active";
        }
        echo " text-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 34), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">
                            <i class=\"fas fa-tachometer-alt\"></i>
                            <span>Tableau de bord</span>
                        </a>
                    </li>
                </ul>
                <ul class=\"nav navbar-nav text-light\" id=\"accordionSidebar\">
                    <li class=\"nav-item\" role=\"presentation\"></li>
                    <hr class=\"sidebar-divider\">
                    <div class=\"sidebar-heading\">
                        <p class=\"mb-0\">GESTION</p>
                    </div>
                    <li class=\"nav-item\" role=\"presentation\">
                        <div class=\"nav-item dropdown\">
                            <a class=\"btn btn-link nav-link text-";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 48), "html", null, true);
        echo " ";
        if (twig_in_filter("/dashboard/users", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 48), "pathInfo", [], "any", false, false, false, 48))) {
            echo "active";
        }
        echo "\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-admin-users\" href=\"#collapse-admin-users\" role=\"button\" onclick=\"collapseAll();\">
                                <i class=\"fas fa-users\"></i>&nbsp;
                                <span>Utilisateurs</span>
                            </a>
                            <div class=\"collapse w-100 py-2\" id=\"collapse-admin-users\" style=\"margin-left: 0; border-radius: 8px;\">
                                <div class=\"bg-";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 53), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 53), "html", null, true);
        echo " collapse-inner rounded\" style=\"width: 96%; margin: 0 2%;\">
                                    <h6 class=\"collapse-header text-";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 54), "html", null, true);
        echo "\">Actions rapides</h6>
                                    <a class=\"collapse-item text-";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 55), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_add");
        echo "\">Nouvel utilisateur</a>
                                    <h6 class=\"collapse-header text-";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 56), "html", null, true);
        echo "\">Options</h6>
                                    <a class=\"collapse-item text-";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 57), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users");
        echo "\">Utilisateurs</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "includes/dashboard/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 57,  147 => 56,  141 => 55,  137 => 54,  131 => 53,  119 => 48,  96 => 34,  76 => 24,  63 => 13,  59 => 9,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/dashboard/sidebar.html.twig", "D:\\romainmunier\\Documents\\GitHub\\ptuts3s4\\templates\\includes\\dashboard\\sidebar.html.twig");
    }
}
