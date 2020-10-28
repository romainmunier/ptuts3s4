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

/* includes/dashboard/navbar.html.twig */
class __TwigTemplate_f84e6e1ac61e3505620f88076b24bfe3d9bc00466280bcf75d08e7f46d644c11 extends Template
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
        echo "<nav class=\"navbar navbar-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 1), "html", null, true);
        echo " navbar-expand ";
        if ( !(($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "medieval", [], "any", false, false, false, 1)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null)) {
            echo "bg-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 1), "html", null, true);
            echo " shadow";
        } else {
            echo "bg-none";
        }
        echo " mb-4 topbar static-top\">
    <div class=\"container-fluid\">
        <button class=\"btn btn-link d-md-none rounded-circle mr-3\" id=\"sidebarToggleTop\" type=\"button\">
            <i class=\"fas fa-bars\"></i>
        </button>
        <form class=\"form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
            <div class=\"input-group\">
                <input class=\"bg-";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 8), "html", null, true);
        echo " form-control border-0 small text-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 8), "html", null, true);
        echo "\" type=\"text\" placeholder=\"Rechercher ...\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 10), "html", null, true);
        echo " py-0\" type=\"button\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                </div>
            </div>
        </form>
        <ul class=\"nav navbar-nav flex-nowrap ml-auto\">
            <li class=\"nav-item dropdown d-sm-none no-arrow\">
                <a class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">
                    <i class=\"fas fa-search\"></i>
                </a>
                <div class=\"dropdown-menu dropdown-menu-right p-3 animated--grow-in\" aria-labelledby=\"searchDropdown\">
                    <form class=\"form-inline mr-auto navbar-search w-100\">
                        <div class=\"input-group\">
                            <input class=\"bg-";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 24), "html", null, true);
        echo " form-control border-0 small text-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 24), "html", null, true);
        echo "\" type=\"text\" placeholder=\"Rechercher ...\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 26), "html", null, true);
        echo " py-0\" type=\"button\">
                                    <i class=\"fas fa-search\"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            <li class=\"nav-item dropdown no-arrow mx-1\">
                <div class=\"nav-item dropdown no-arrow\">
                    <a class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">
                        <span class=\"badge badge-danger badge-counter text-light\">3+</span>
                        <i class=\"fas fa-bell fa-fw text-";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 38), "html", null, true);
        echo "\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in\">
                        <h6 class=\"dropdown-header border-";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 41), "html", null, true);
        echo "\">alerts center</h6>
                        <a class=\"d-flex align-items-center dropdown-item bg-";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 42), "html", null, true);
        echo "\" href=\"#\">
                            <div class=\"mr-3\">
                                <div class=\"bg-primary icon-circle\">
                                    <i class=\"fas fa-file-alt text-light\"></i>
                                </div>
                            </div>
                            <div>
                                <span class=\"small text-gray-500\">December 12, 2019</span>
                                <p class=\"text-";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 50), "html", null, true);
        echo "\">A new monthly report is ready to download!</p>
                            </div>
                        </a>
                        <a class=\"d-flex align-items-center dropdown-item bg-";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 53), "html", null, true);
        echo "\" href=\"#\">
                            <div class=\"mr-3\">
                                <div class=\"bg-success icon-circle\">
                                    <i class=\"fas fa-donate text-white\"></i>
                                </div>
                            </div>
                            <div>
                                <span class=\"small text-gray-500\">December 7, 2019</span>
                                <p class=\"text-";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 61), "html", null, true);
        echo "\">\$290.29 has been deposited into your account!</p>
                            </div>
                        </a>
                        <a class=\"d-flex align-items-center dropdown-item bg-";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 64), "html", null, true);
        echo "\" href=\"#\">
                            <div class=\"mr-3\">
                                <div class=\"bg-warning icon-circle\">
                                    <i class=\"fas fa-exclamation-triangle text-white\"></i>
                                </div>
                            </div>
                            <div>
                                <span class=\"small text-gray-500\">December 2, 2019</span>
                                <p class=\"text-";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 72), "html", null, true);
        echo "\">Spending Alert: We've noticed unusually high spending for your account.</p>
                            </div>
                        </a>
                        <a class=\"text-center dropdown-item small text-gray-500 bg-";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 75), "html", null, true);
        echo "\" href=\"#\">Show All Alerts</a>
                    </div>
                </div>
            </li>
            <li class=\"nav-item dropdown no-arrow mx-1\">
                <div class=\"nav-item dropdown no-arrow\">
                    <a class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">
                        <i class=\"fas fa-envelope fa-fw text-";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 82), "html", null, true);
        echo "\"></i>
                        <span class=\"badge badge-danger badge-counter\">10</span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in\">
                        <h6 class=\"dropdown-header border-";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 86), "html", null, true);
        echo "\">Messagerie</h6>
                            <a class=\"d-flex align-items-center dropdown-item bg-";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 87), "html", null, true);
        echo "\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"\">
                                    <div class=\"bg-danger status-indicator\"></div>
                                </div>
                                <div class=\"font-weight-bold\">
                                    <div class=\"text-truncate text-";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 93), "html", null, true);
        echo "\">
                                        <span>Message truncate</span>
                                    </div>
                                    <p class=\"small text-gray-500 mb-0\">User - 01/01/1970</p>
                                </div>
                            </a>
                        <a class=\"text-center dropdown-item small text-gray-500 bg-";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 99), "html", null, true);
        echo "\" href=\"#\">Tous les messages</a>
                    </div>
                </div>
                <div class=\"shadow dropdown-list dropdown-menu dropdown-menu-right\" aria-labelledby=\"alertsDropdown\"></div>
            </li>
            <div class=\"d-none d-sm-block topbar-divider\"></div>
            <li class=\"nav-item dropdown no-arrow\">
                <div class=\"nav-item dropdown no-arrow\">
                    <a class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">
                        <span class=\"d-none d-lg-inline mr-2 text-";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 108), "html", null, true);
        echo " small\">
                            ";
        // line 109
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 109), "firstname", [], "any", false, false, false, 109)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 109), "lastname", [], "any", false, false, false, 109)), "html", null, true);
        echo "
                        </span>
                        <img class=\"border rounded-circle img-profile\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/paladomas.jpg"), "html", null, true);
        echo "\">
                    </a>
                    <div class=\"dropdown-menu shadow dropdown-menu-right animated--grow-in bg-";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 113), "html", null, true);
        echo "\">
                        <a class=\"dropdown-item text-";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 114), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\">
                            <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>&nbsp;
                            Mon compte
                        </a>
                        <a class=\"dropdown-item text-";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 118), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings");
        echo "\">
                            <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>&nbsp;
                            Paramètres
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item text-";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 123), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\">
                            <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>&nbsp;
                            Déconnexion
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "includes/dashboard/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 123,  243 => 118,  234 => 114,  230 => 113,  225 => 111,  218 => 109,  214 => 108,  202 => 99,  193 => 93,  184 => 87,  180 => 86,  173 => 82,  163 => 75,  157 => 72,  146 => 64,  140 => 61,  129 => 53,  123 => 50,  112 => 42,  108 => 41,  102 => 38,  87 => 26,  80 => 24,  63 => 10,  56 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/dashboard/navbar.html.twig", "D:\\romainmunier\\Documents\\GitHub\\ptuts3s4\\templates\\includes\\dashboard\\navbar.html.twig");
    }
}
