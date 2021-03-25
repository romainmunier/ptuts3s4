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
class __TwigTemplate_90c0d6bb1fa32b89b20048387fd8b2ca8a6c54c50f6a40da2e66600b0b507586 extends Template
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
        \$('collapse-admin-mailing').collapse(\"hide\");
    }
</script>

<nav class=\"navbar navbar-";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 8), "html", null, true);
        echo " align-items-start sidebar sidebar-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 8), "html", null, true);
        echo " accordion ";
        if ( !(($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "medieval", [], "any", false, false, false, 8)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null)) {
            echo "bg-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 8), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 25), "html", null, true);
        echo " accordion ";
        if ( !(($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "medieval", [], "any", false, false, false, 25)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null)) {
            echo "bg-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 25), "html", null, true);
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
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 35), "pathinfo", [], "any", false, false, false, 35), "/dashboard"))) {
            echo "active";
        }
        echo " text-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 35), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 49), "html", null, true);
        echo " ";
        if (twig_in_filter("/dashboard/category", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 49), "pathInfo", [], "any", false, false, false, 49))) {
            echo "active";
        }
        echo "\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-category\" href=\"#collapse-category\" role=\"button\" onclick=\"collapseAll();\">
                                <i class=\"fas fa-filter\"></i>&nbsp;
                                <span>Catégories</span>
                            </a>
                            <div class=\"collapse w-100 py-2\" id=\"collapse-category\" style=\"margin-left: 0; border-radius: 8px;\">
                                <div class=\"bg-";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 54), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 54), "html", null, true);
        echo " collapse-inner rounded\" style=\"width: 96%; margin: 0 2%;\">
                                    <h6 class=\"collapse-header text-";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 55), "html", null, true);
        echo "\">Actions rapides</h6>
                                    <a class=\"collapse-item text-";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 56), "html", null, true);
        echo "\" href=\"\">Ajouter une catégorie</a>
                                    <h6 class=\"collapse-header text-";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 57), "html", null, true);
        echo "\">Options</h6>
                                    <a class=\"collapse-item text-";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 58), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 65), "html", null, true);
        echo " ";
        if (twig_in_filter("/dashboard/gallery", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 65), "pathInfo", [], "any", false, false, false, 65))) {
            echo "active";
        }
        echo "\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-gallery\" href=\"#collapse-gallery\" role=\"button\" onclick=\"collapseAll();\">
                                <i class=\"fas fa-images\"></i>&nbsp;
                                <span>Galerie</span>
                            </a>
                            <div class=\"collapse w-100 py-2\" id=\"collapse-gallery\" style=\"margin-left: 0; border-radius: 8px;\">
                                <div class=\"bg-";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 70), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 70), "html", null, true);
        echo " collapse-inner rounded\" style=\"width: 96%; margin: 0 2%;\">
                                    <h6 class=\"collapse-header text-";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 71), "html", null, true);
        echo "\">Actions rapides</h6>
                                    <a class=\"collapse-item text-";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 72), "html", null, true);
        echo "\" href=\"\">Ajouter des images</a>
                                    <h6 class=\"collapse-header text-";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 73), "html", null, true);
        echo "\">Options</h6>
                                    <a class=\"collapse-item text-";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 74), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 89), "html", null, true);
            echo " ";
            if (twig_in_filter("/dashboard/news", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 89), "pathInfo", [], "any", false, false, false, 89))) {
                echo "active";
            }
            echo "\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-writer-news\" href=\"#collapse-writer-news\" role=\"button\" onclick=\"collapseAll();\">
                                    <i class=\"fas fa-newspaper\"></i>&nbsp;
                                    <span>Articles</span>
                                </a>
                                <div class=\"collapse w-100 py-2\" id=\"collapse-writer-news\" style=\"margin-left: 0; border-radius: 8px;\">
                                    <div class=\"bg-";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 94), "html", null, true);
            echo " border-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 94), "html", null, true);
            echo " collapse-inner rounded\" style=\"width: 96%; margin: 0 2%;\">
                                        <h6 class=\"collapse-header text-";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 95), "html", null, true);
            echo "\">Actions rapides</h6>
                                        <a class=\"collapse-item text-";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 96), "html", null, true);
            echo "\" href=\"\">Nouvel article</a>
                                        <h6 class=\"collapse-header text-";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 97), "html", null, true);
            echo "\">Options</h6>
                                        <a class=\"collapse-item text-";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 98), "html", null, true);
            echo "\" href=\"\">Tous les articles</a>
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 114), "html", null, true);
            echo " ";
            if (twig_in_filter("/dashboard/mailing", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 114), "pathInfo", [], "any", false, false, false, 114))) {
                echo "active";
            }
            echo "\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-admin-mailing\" href=\"#collapse-admin-mailing\" role=\"button\" onclick=\"collapseAll();\">
                                    <i class=\"fas fa-envelope-open-text\"></i>&nbsp;
                                    <span>Diffusion</span>
                                </a>
                                <div class=\"collapse w-100 py-2\" id=\"collapse-admin-mailing\" style=\"margin-left: 0; border-radius: 8px;\">
                                    <div class=\"bg-";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 119), "html", null, true);
            echo " border-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 119), "html", null, true);
            echo " collapse-inner rounded\" style=\"width: 96%; margin: 0 2%;\">
                                        <h6 class=\"collapse-header text-";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 120), "html", null, true);
            echo "\">Actions rapides</h6>
                                        <a class=\"collapse-item text-";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 121), "html", null, true);
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mailing_add");
            echo "\">Nouvelle liste</a>
                                        <h6 class=\"collapse-header text-";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 122), "html", null, true);
            echo "\">Options</h6>
                                        <a class=\"collapse-item text-";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 123), "html", null, true);
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mailing");
            echo "\">Listes de diffusion</a>
                                        <a class=\"collapse-item text-";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 124), "html", null, true);
            echo "\" href=\"#\">Envoyer un message</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <div class=\"nav-item dropdown\">
                                <a class=\"btn btn-link nav-link text-";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 131), "html", null, true);
            echo " ";
            if (twig_in_filter("/dashboard/users", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 131), "pathInfo", [], "any", false, false, false, 131))) {
                echo "active";
            }
            echo "\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapse-admin-users\" href=\"#collapse-admin-users\" role=\"button\" onclick=\"collapseAll();\">
                                    <i class=\"fas fa-users\"></i>&nbsp;
                                    <span>Utilisateurs</span>
                                </a>
                                <div class=\"collapse w-100 py-2\" id=\"collapse-admin-users\" style=\"margin-left: 0; border-radius: 8px;\">
                                    <div class=\"bg-";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 136), "html", null, true);
            echo " border-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 136), "html", null, true);
            echo " collapse-inner rounded\" style=\"width: 96%; margin: 0 2%;\">
                                        <h6 class=\"collapse-header text-";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 137), "html", null, true);
            echo "\">Actions rapides</h6>
                                        <a class=\"collapse-item text-";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 138), "html", null, true);
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_add");
            echo "\">Nouvel utilisateur</a>
                                        <h6 class=\"collapse-header text-";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 139), "html", null, true);
            echo "\">Options</h6>
                                        <a class=\"collapse-item text-";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 140), "html", null, true);
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
        return array (  358 => 147,  346 => 140,  342 => 139,  336 => 138,  332 => 137,  326 => 136,  314 => 131,  304 => 124,  298 => 123,  294 => 122,  288 => 121,  284 => 120,  278 => 119,  266 => 114,  256 => 106,  253 => 105,  243 => 98,  239 => 97,  235 => 96,  231 => 95,  225 => 94,  213 => 89,  203 => 81,  201 => 80,  192 => 74,  188 => 73,  184 => 72,  180 => 71,  174 => 70,  162 => 65,  150 => 58,  146 => 57,  142 => 56,  138 => 55,  132 => 54,  120 => 49,  97 => 35,  77 => 25,  64 => 14,  60 => 10,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/dashboard/sidebar.html.twig", "/Users/romainmunier/Documents/Projets/Symfony/ptuts3s4/templates/includes/dashboard/sidebar.html.twig");
    }
}
