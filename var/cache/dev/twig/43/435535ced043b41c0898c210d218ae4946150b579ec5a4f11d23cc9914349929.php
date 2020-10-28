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
class __TwigTemplate_5b02398a1698571237fd7139460c8dc0a0221a35e4db81b89cef431632400bc4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/dashboard/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/dashboard/sidebar.html.twig"));

        // line 1
        echo "<script>
    function collapseAll() {
        \$('collapse-admin-users').collapse(\"hide\");
    }
</script>

<nav class=\"navbar navbar-";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 7, $this->source); })()), "theme", [], "any", false, false, false, 7), "html", null, true);
        echo " align-items-start sidebar sidebar-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 7, $this->source); })()), "theme", [], "any", false, false, false, 7), "html", null, true);
        echo " accordion ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 7, $this->source); })()), "medieval", [], "any", false, false, false, 7), 0, [], "array", false, false, false, 7)) {
            echo "bg-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 7, $this->source); })()), "theme", [], "any", false, false, false, 7), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 24, $this->source); })()), "theme", [], "any", false, false, false, 24), "html", null, true);
        echo " accordion ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 24, $this->source); })()), "medieval", [], "any", false, false, false, 24), 0, [], "array", false, false, false, 24)) {
            echo "bg-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 24, $this->source); })()), "theme", [], "any", false, false, false, 24), "html", null, true);
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
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "request", [], "any", false, false, false, 34), "pathinfo", [], "any", false, false, false, 34), "/dashboard"))) {
            echo "active";
        }
        echo " text-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 34, $this->source); })()), "color", [], "any", false, false, false, 34), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 48, $this->source); })()), "color", [], "any", false, false, false, 48), "html", null, true);
        echo " ";
        if (twig_in_filter("/dashboard/users", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "pathInfo", [], "any", false, false, false, 48))) {
            echo "active";
        }
        echo "\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-admin-users\" href=\"#collapse-admin-users\" role=\"button\" onclick=\"collapseAll();\">
                                <i class=\"fas fa-users\"></i>&nbsp;
                                <span>Utilisateurs</span>
                            </a>
                            <div class=\"collapse w-100 py-2\" id=\"collapse-admin-users\" style=\"margin-left: 0; border-radius: 8px;\">
                                <div class=\"bg-";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 53, $this->source); })()), "color", [], "any", false, false, false, 53), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 53, $this->source); })()), "color", [], "any", false, false, false, 53), "html", null, true);
        echo " collapse-inner rounded\" style=\"width: 96%; margin: 0 2%;\">
                                    <h6 class=\"collapse-header text-";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 54, $this->source); })()), "theme", [], "any", false, false, false, 54), "html", null, true);
        echo "\">Actions rapides</h6>
                                    <a class=\"collapse-item text-";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 55, $this->source); })()), "theme", [], "any", false, false, false, 55), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_add");
        echo "\">Nouvel utilisateur</a>
                                    <h6 class=\"collapse-header text-";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 56, $this->source); })()), "theme", [], "any", false, false, false, 56), "html", null, true);
        echo "\">Options</h6>
                                    <a class=\"collapse-item text-";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 57, $this->source); })()), "theme", [], "any", false, false, false, 57), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  157 => 57,  153 => 56,  147 => 55,  143 => 54,  137 => 53,  125 => 48,  102 => 34,  82 => 24,  69 => 13,  65 => 9,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    function collapseAll() {
        \$('collapse-admin-users').collapse(\"hide\");
    }
</script>

<nav class=\"navbar navbar-{{ userSettings.theme }} align-items-start sidebar sidebar-{{ userSettings.theme }} accordion {% if not userSettings.medieval[0] %}bg-{{ userSettings.theme }}{% else %}bg-none{% endif %} p-0\">
    <div class=\"container-fluid d-flex flex-column p-0\">
        <a class=\"navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0\" href=\"{{ path(\"index\") }}\">
{#            <div class=\"sidebar-brand-icon rotate-n-0\">#}
{#                <i class=\"fas fa-laptop-code\"></i>#}
{#            </div>#}
            <div class=\"sidebar-brand-text mx-3\">
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
        <nav class=\"navbar navbar-dark align-items-start sidebar sidebar-{{ userSettings.theme }} accordion {% if not userSettings.medieval[0] %}bg-{{ userSettings.theme }}{% else %}bg-none{% endif %} p-0\" id=\"sidebarMiddleID\">
            <div class=\"container-fluid d-flex flex-column p-0\">
                <hr class=\"sidebar-divider my-0\">
                <ul class=\"nav navbar-nav text-light\" id=\"accordionSidebar\">
                    <li class=\"nav-item\" role=\"presentation\"></li>
                    <hr class=\"sidebar-divider\">
                    <div class=\"sidebar-heading\">
                        <p class=\"mb-0\">MENU</p>
                    </div>
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link {% if (app.request.pathinfo == \"/dashboard\") %}active{% endif %} text-{{ userSettings.color }}\" href=\"{{ path(\"dashboard\") }}\">
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
                            <a class=\"btn btn-link nav-link text-{{ userSettings.color }} {% if \"/dashboard/users\" in app.request.pathInfo %}active{% endif %}\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-admin-users\" href=\"#collapse-admin-users\" role=\"button\" onclick=\"collapseAll();\">
                                <i class=\"fas fa-users\"></i>&nbsp;
                                <span>Utilisateurs</span>
                            </a>
                            <div class=\"collapse w-100 py-2\" id=\"collapse-admin-users\" style=\"margin-left: 0; border-radius: 8px;\">
                                <div class=\"bg-{{ userSettings.color }} border-{{ userSettings.color }} collapse-inner rounded\" style=\"width: 96%; margin: 0 2%;\">
                                    <h6 class=\"collapse-header text-{{ userSettings.theme }}\">Actions rapides</h6>
                                    <a class=\"collapse-item text-{{ userSettings.theme }}\" href=\"{{ path(\"users_add\") }}\">Nouvel utilisateur</a>
                                    <h6 class=\"collapse-header text-{{ userSettings.theme }}\">Options</h6>
                                    <a class=\"collapse-item text-{{ userSettings.theme }}\" href=\"{{ path(\"users\") }}\">Utilisateurs</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</nav>", "includes/dashboard/sidebar.html.twig", "D:\\romainmunier\\Documents\\GitHub\\ptuts3s4\\templates\\includes\\dashboard\\sidebar.html.twig");
    }
}
