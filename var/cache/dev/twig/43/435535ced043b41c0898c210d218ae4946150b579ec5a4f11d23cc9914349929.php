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
        \$('collapse-admin-mailing').collapse(\"hide\");
    }
</script>

<nav class=\"navbar navbar-";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 8, $this->source); })()), "theme", [], "any", false, false, false, 8), "html", null, true);
        echo " align-items-start sidebar sidebar-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 8, $this->source); })()), "theme", [], "any", false, false, false, 8), "html", null, true);
        echo " accordion ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 8, $this->source); })()), "medieval", [], "any", false, false, false, 8), 0, [], "array", false, false, false, 8)) {
            echo "bg-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 8, $this->source); })()), "theme", [], "any", false, false, false, 8), "html", null, true);
        } else {
            echo "bg-none";
        }
        echo " p-0\">
    <div class=\"container-fluid d-flex flex-column p-0\">
        <a class=\"navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
";
        // line 14
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
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 25, $this->source); })()), "theme", [], "any", false, false, false, 25), "html", null, true);
        echo " accordion ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 25, $this->source); })()), "medieval", [], "any", false, false, false, 25), 0, [], "array", false, false, false, 25)) {
            echo "bg-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 25, $this->source); })()), "theme", [], "any", false, false, false, 25), "html", null, true);
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
        // line 35
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "pathinfo", [], "any", false, false, false, 35), "/dashboard"))) {
            echo "active";
        }
        echo " text-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 35, $this->source); })()), "color", [], "any", false, false, false, 35), "html", null, true);
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
                        <p class=\"mb-0\">ALBUMS</p>
                    </div>
                    <li class=\"nav-item\" role=\"presentation\">
                        <div class=\"nav-item dropdown\">
                            <a class=\"btn btn-link nav-link text-";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 49, $this->source); })()), "color", [], "any", false, false, false, 49), "html", null, true);
        echo " ";
        if (twig_in_filter("/dashboard/category", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "pathInfo", [], "any", false, false, false, 49))) {
            echo "active";
        }
        echo "\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-category\" href=\"#collapse-category\" role=\"button\" onclick=\"collapseAll();\">
                                <i class=\"fas fa-filter\"></i>&nbsp;
                                <span>Catégories</span>
                            </a>
                            <div class=\"collapse w-100 py-2\" id=\"collapse-category\" style=\"margin-left: 0; border-radius: 8px;\">
                                <div class=\"bg-";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 54, $this->source); })()), "color", [], "any", false, false, false, 54), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 54, $this->source); })()), "color", [], "any", false, false, false, 54), "html", null, true);
        echo " collapse-inner rounded\" style=\"width: 96%; margin: 0 2%;\">
                                    <h6 class=\"collapse-header text-";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 55, $this->source); })()), "theme", [], "any", false, false, false, 55), "html", null, true);
        echo "\">Actions rapides</h6>
                                    <a class=\"collapse-item text-";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 56, $this->source); })()), "theme", [], "any", false, false, false, 56), "html", null, true);
        echo "\" href=\"\">Ajouter une catégorie</a>
                                    <h6 class=\"collapse-header text-";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 57, $this->source); })()), "theme", [], "any", false, false, false, 57), "html", null, true);
        echo "\">Options</h6>
                                    <a class=\"collapse-item text-";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 58, $this->source); })()), "theme", [], "any", false, false, false, 58), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category");
        echo "\">Toutes les catégories</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <div class=\"nav-item dropdown\">
                            <a class=\"btn btn-link nav-link text-";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 65, $this->source); })()), "color", [], "any", false, false, false, 65), "html", null, true);
        echo " ";
        if (twig_in_filter("/dashboard/gallery", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "request", [], "any", false, false, false, 65), "pathInfo", [], "any", false, false, false, 65))) {
            echo "active";
        }
        echo "\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-gallery\" href=\"#collapse-gallery\" role=\"button\" onclick=\"collapseAll();\">
                                <i class=\"fas fa-images\"></i>&nbsp;
                                <span>Galerie</span>
                            </a>
                            <div class=\"collapse w-100 py-2\" id=\"collapse-gallery\" style=\"margin-left: 0; border-radius: 8px;\">
                                <div class=\"bg-";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 70, $this->source); })()), "color", [], "any", false, false, false, 70), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 70, $this->source); })()), "color", [], "any", false, false, false, 70), "html", null, true);
        echo " collapse-inner rounded\" style=\"width: 96%; margin: 0 2%;\">
                                    <h6 class=\"collapse-header text-";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 71, $this->source); })()), "theme", [], "any", false, false, false, 71), "html", null, true);
        echo "\">Actions rapides</h6>
                                    <a class=\"collapse-item text-";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 72, $this->source); })()), "theme", [], "any", false, false, false, 72), "html", null, true);
        echo "\" href=\"\">Ajouter des images</a>
                                    <h6 class=\"collapse-header text-";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 73, $this->source); })()), "theme", [], "any", false, false, false, 73), "html", null, true);
        echo "\">Options</h6>
                                    <a class=\"collapse-item text-";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 74, $this->source); })()), "theme", [], "any", false, false, false, 74), "html", null, true);
        echo "\" href=\"\">Toutes les images</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                ";
        // line 80
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_WRITER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DEVELOPERS"))) {
            // line 81
            echo "                    <ul class=\"nav navbar-nav text-light\" id=\"accordionSidebar\">
                        <li class=\"nav-item\" role=\"presentation\"></li>
                        <hr class=\"sidebar-divider\">
                        <div class=\"sidebar-heading\">
                            <p class=\"mb-0\">AUTEURS</p>
                        </div>
                        <li class=\"nav-item\" role=\"presentation\">
                            <div class=\"nav-item dropdown\">
                                <a class=\"btn btn-link nav-link text-";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 89, $this->source); })()), "color", [], "any", false, false, false, 89), "html", null, true);
            echo " ";
            if (twig_in_filter("/dashboard/articles", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "request", [], "any", false, false, false, 89), "pathInfo", [], "any", false, false, false, 89))) {
                echo "active";
            }
            echo "\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-writer-news\" href=\"#collapse-writer-news\" role=\"button\" onclick=\"collapseAll();\">
                                    <i class=\"fas fa-newspaper\"></i>&nbsp;
                                    <span>Articles</span>
                                </a>
                                <div class=\"collapse w-100 py-2\" id=\"collapse-writer-news\" style=\"margin-left: 0; border-radius: 8px;\">
                                    <div class=\"bg-";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 94, $this->source); })()), "color", [], "any", false, false, false, 94), "html", null, true);
            echo " border-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 94, $this->source); })()), "color", [], "any", false, false, false, 94), "html", null, true);
            echo " collapse-inner rounded\" style=\"width: 96%; margin: 0 2%;\">
                                        <h6 class=\"collapse-header text-";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 95, $this->source); })()), "theme", [], "any", false, false, false, 95), "html", null, true);
            echo "\">Actions rapides</h6>
                                        <a class=\"collapse-item text-";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 96, $this->source); })()), "theme", [], "any", false, false, false, 96), "html", null, true);
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_add");
            echo "\">Nouvel article</a>
                                        <h6 class=\"collapse-header text-";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 97, $this->source); })()), "theme", [], "any", false, false, false, 97), "html", null, true);
            echo "\">Options</h6>
                                        <a class=\"collapse-item text-";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 98, $this->source); })()), "theme", [], "any", false, false, false, 98), "html", null, true);
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles");
            echo "\">Tous les articles</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                ";
        }
        // line 105
        echo "                ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DEVELOPERS"))) {
            // line 106
            echo "                    <ul class=\"nav navbar-nav text-light\" id=\"accordionSidebar\">
                        <li class=\"nav-item\" role=\"presentation\"></li>
                        <hr class=\"sidebar-divider\">
                        <div class=\"sidebar-heading\">
                            <p class=\"mb-0\">GESTION</p>
                        </div>
                        <li class=\"nav-item\" role=\"presentation\">
                            <div class=\"nav-item dropdown\">
                                <a class=\"btn btn-link nav-link text-";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 114, $this->source); })()), "color", [], "any", false, false, false, 114), "html", null, true);
            echo " ";
            if (twig_in_filter("/dashboard/mailing", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "request", [], "any", false, false, false, 114), "pathInfo", [], "any", false, false, false, 114))) {
                echo "active";
            }
            echo "\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-admin-mailing\" href=\"#collapse-admin-mailing\" role=\"button\" onclick=\"collapseAll();\">
                                    <i class=\"fas fa-envelope-open-text\"></i>&nbsp;
                                    <span>Diffusion</span>
                                </a>
                                <div class=\"collapse w-100 py-2\" id=\"collapse-admin-mailing\" style=\"margin-left: 0; border-radius: 8px;\">
                                    <div class=\"bg-";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 119, $this->source); })()), "color", [], "any", false, false, false, 119), "html", null, true);
            echo " border-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 119, $this->source); })()), "color", [], "any", false, false, false, 119), "html", null, true);
            echo " collapse-inner rounded\" style=\"width: 96%; margin: 0 2%;\">
                                        <h6 class=\"collapse-header text-";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 120, $this->source); })()), "theme", [], "any", false, false, false, 120), "html", null, true);
            echo "\">Actions rapides</h6>
                                        <a class=\"collapse-item text-";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 121, $this->source); })()), "theme", [], "any", false, false, false, 121), "html", null, true);
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mailing_add");
            echo "\">Nouvelle liste</a>
                                        <h6 class=\"collapse-header text-";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 122, $this->source); })()), "theme", [], "any", false, false, false, 122), "html", null, true);
            echo "\">Options</h6>
                                        <a class=\"collapse-item text-";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 123, $this->source); })()), "theme", [], "any", false, false, false, 123), "html", null, true);
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mailing");
            echo "\">Listes de diffusion</a>
                                        <a class=\"collapse-item text-";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 124, $this->source); })()), "theme", [], "any", false, false, false, 124), "html", null, true);
            echo "\" href=\"#\">Envoyer un message</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <div class=\"nav-item dropdown\">
                                <a class=\"btn btn-link nav-link text-";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 131, $this->source); })()), "color", [], "any", false, false, false, 131), "html", null, true);
            echo " ";
            if (twig_in_filter("/dashboard/users", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "request", [], "any", false, false, false, 131), "pathInfo", [], "any", false, false, false, 131))) {
                echo "active";
            }
            echo "\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-admin-users\" href=\"#collapse-admin-users\" role=\"button\" onclick=\"collapseAll();\">
                                    <i class=\"fas fa-users\"></i>&nbsp;
                                    <span>Utilisateurs</span>
                                </a>
                                <div class=\"collapse w-100 py-2\" id=\"collapse-admin-users\" style=\"margin-left: 0; border-radius: 8px;\">
                                    <div class=\"bg-";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 136, $this->source); })()), "color", [], "any", false, false, false, 136), "html", null, true);
            echo " border-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 136, $this->source); })()), "color", [], "any", false, false, false, 136), "html", null, true);
            echo " collapse-inner rounded\" style=\"width: 96%; margin: 0 2%;\">
                                        <h6 class=\"collapse-header text-";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 137, $this->source); })()), "theme", [], "any", false, false, false, 137), "html", null, true);
            echo "\">Actions rapides</h6>
                                        <a class=\"collapse-item text-";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 138, $this->source); })()), "theme", [], "any", false, false, false, 138), "html", null, true);
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_add");
            echo "\">Nouvel utilisateur</a>
                                        <h6 class=\"collapse-header text-";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 139, $this->source); })()), "theme", [], "any", false, false, false, 139), "html", null, true);
            echo "\">Options</h6>
                                        <a class=\"collapse-item text-";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 140, $this->source); })()), "theme", [], "any", false, false, false, 140), "html", null, true);
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users");
            echo "\">Utilisateurs</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                ";
        }
        // line 147
        echo "            </div>
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
        return array (  368 => 147,  356 => 140,  352 => 139,  346 => 138,  342 => 137,  336 => 136,  324 => 131,  314 => 124,  308 => 123,  304 => 122,  298 => 121,  294 => 120,  288 => 119,  276 => 114,  266 => 106,  263 => 105,  251 => 98,  247 => 97,  241 => 96,  237 => 95,  231 => 94,  219 => 89,  209 => 81,  207 => 80,  198 => 74,  194 => 73,  190 => 72,  186 => 71,  180 => 70,  168 => 65,  156 => 58,  152 => 57,  148 => 56,  144 => 55,  138 => 54,  126 => 49,  103 => 35,  83 => 25,  70 => 14,  66 => 10,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    function collapseAll() {
        \$('collapse-admin-users').collapse(\"hide\");
        \$('collapse-admin-mailing').collapse(\"hide\");
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
                        <p class=\"mb-0\">ALBUMS</p>
                    </div>
                    <li class=\"nav-item\" role=\"presentation\">
                        <div class=\"nav-item dropdown\">
                            <a class=\"btn btn-link nav-link text-{{ userSettings.color }} {% if \"/dashboard/category\" in app.request.pathInfo %}active{% endif %}\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-category\" href=\"#collapse-category\" role=\"button\" onclick=\"collapseAll();\">
                                <i class=\"fas fa-filter\"></i>&nbsp;
                                <span>Catégories</span>
                            </a>
                            <div class=\"collapse w-100 py-2\" id=\"collapse-category\" style=\"margin-left: 0; border-radius: 8px;\">
                                <div class=\"bg-{{ userSettings.color }} border-{{ userSettings.color }} collapse-inner rounded\" style=\"width: 96%; margin: 0 2%;\">
                                    <h6 class=\"collapse-header text-{{ userSettings.theme }}\">Actions rapides</h6>
                                    <a class=\"collapse-item text-{{ userSettings.theme }}\" href=\"\">Ajouter une catégorie</a>
                                    <h6 class=\"collapse-header text-{{ userSettings.theme }}\">Options</h6>
                                    <a class=\"collapse-item text-{{ userSettings.theme }}\" href=\"{{ path(\"category\") }}\">Toutes les catégories</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <div class=\"nav-item dropdown\">
                            <a class=\"btn btn-link nav-link text-{{ userSettings.color }} {% if \"/dashboard/gallery\" in app.request.pathInfo %}active{% endif %}\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-gallery\" href=\"#collapse-gallery\" role=\"button\" onclick=\"collapseAll();\">
                                <i class=\"fas fa-images\"></i>&nbsp;
                                <span>Galerie</span>
                            </a>
                            <div class=\"collapse w-100 py-2\" id=\"collapse-gallery\" style=\"margin-left: 0; border-radius: 8px;\">
                                <div class=\"bg-{{ userSettings.color }} border-{{ userSettings.color }} collapse-inner rounded\" style=\"width: 96%; margin: 0 2%;\">
                                    <h6 class=\"collapse-header text-{{ userSettings.theme }}\">Actions rapides</h6>
                                    <a class=\"collapse-item text-{{ userSettings.theme }}\" href=\"\">Ajouter des images</a>
                                    <h6 class=\"collapse-header text-{{ userSettings.theme }}\">Options</h6>
                                    <a class=\"collapse-item text-{{ userSettings.theme }}\" href=\"\">Toutes les images</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                {% if is_granted(\"ROLE_WRITER\") or is_granted(\"ROLE_ADMIN\") or is_granted(\"ROLE_DEVELOPERS\") %}
                    <ul class=\"nav navbar-nav text-light\" id=\"accordionSidebar\">
                        <li class=\"nav-item\" role=\"presentation\"></li>
                        <hr class=\"sidebar-divider\">
                        <div class=\"sidebar-heading\">
                            <p class=\"mb-0\">AUTEURS</p>
                        </div>
                        <li class=\"nav-item\" role=\"presentation\">
                            <div class=\"nav-item dropdown\">
                                <a class=\"btn btn-link nav-link text-{{ userSettings.color }} {% if \"/dashboard/articles\" in app.request.pathInfo %}active{% endif %}\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-writer-news\" href=\"#collapse-writer-news\" role=\"button\" onclick=\"collapseAll();\">
                                    <i class=\"fas fa-newspaper\"></i>&nbsp;
                                    <span>Articles</span>
                                </a>
                                <div class=\"collapse w-100 py-2\" id=\"collapse-writer-news\" style=\"margin-left: 0; border-radius: 8px;\">
                                    <div class=\"bg-{{ userSettings.color }} border-{{ userSettings.color }} collapse-inner rounded\" style=\"width: 96%; margin: 0 2%;\">
                                        <h6 class=\"collapse-header text-{{ userSettings.theme }}\">Actions rapides</h6>
                                        <a class=\"collapse-item text-{{ userSettings.theme }}\" href=\"{{ path('articles_add') }}\">Nouvel article</a>
                                        <h6 class=\"collapse-header text-{{ userSettings.theme }}\">Options</h6>
                                        <a class=\"collapse-item text-{{ userSettings.theme }}\" href=\"{{ path(\"articles\") }}\">Tous les articles</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                {% endif %}
                {% if is_granted(\"ROLE_ADMIN\") or is_granted(\"ROLE_DEVELOPERS\") %}
                    <ul class=\"nav navbar-nav text-light\" id=\"accordionSidebar\">
                        <li class=\"nav-item\" role=\"presentation\"></li>
                        <hr class=\"sidebar-divider\">
                        <div class=\"sidebar-heading\">
                            <p class=\"mb-0\">GESTION</p>
                        </div>
                        <li class=\"nav-item\" role=\"presentation\">
                            <div class=\"nav-item dropdown\">
                                <a class=\"btn btn-link nav-link text-{{ userSettings.color }} {% if \"/dashboard/mailing\" in app.request.pathInfo %}active{% endif %}\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-admin-mailing\" href=\"#collapse-admin-mailing\" role=\"button\" onclick=\"collapseAll();\">
                                    <i class=\"fas fa-envelope-open-text\"></i>&nbsp;
                                    <span>Diffusion</span>
                                </a>
                                <div class=\"collapse w-100 py-2\" id=\"collapse-admin-mailing\" style=\"margin-left: 0; border-radius: 8px;\">
                                    <div class=\"bg-{{ userSettings.color }} border-{{ userSettings.color }} collapse-inner rounded\" style=\"width: 96%; margin: 0 2%;\">
                                        <h6 class=\"collapse-header text-{{ userSettings.theme }}\">Actions rapides</h6>
                                        <a class=\"collapse-item text-{{ userSettings.theme }}\" href=\"{{ path(\"mailing_add\") }}\">Nouvelle liste</a>
                                        <h6 class=\"collapse-header text-{{ userSettings.theme }}\">Options</h6>
                                        <a class=\"collapse-item text-{{ userSettings.theme }}\" href=\"{{ path(\"mailing\") }}\">Listes de diffusion</a>
                                        <a class=\"collapse-item text-{{ userSettings.theme }}\" href=\"#\">Envoyer un message</a>
                                    </div>
                                </div>
                            </div>
                        </li>
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
                {% endif %}
            </div>
        </nav>
    </div>
</nav>", "includes/dashboard/sidebar.html.twig", "C:\\Users\\alexi\\Documents\\GitHub\\ptuts3s4\\templates\\includes\\dashboard\\sidebar.html.twig");
    }
}
