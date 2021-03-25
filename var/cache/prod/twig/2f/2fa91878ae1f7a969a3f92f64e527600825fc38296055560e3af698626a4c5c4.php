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

/* includes/home/navbar.html.twig */
class __TwigTemplate_0a2f6089f7700896d483dd580e02c9d72dd1e9aa7beba7e0970f1607bff99e3d extends Template
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
        echo "<a class=\"menu-toggle rounded\" href=\"#\">
    <i class=\"fa fa-bars\"></i>
</a>

<nav class=\"navbar navbar-light navbar-expand\" id=\"sidebar-wrapper\" style=\"background: #B66B23\">
    <div class=\"container\">
        <button data-toggle=\"collapse\" class=\"navbar-toggler d-none\" data-target=\"#\"></button>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav sidebar-nav\" id=\"sidebar-nav\">
                <li class=\"nav-item sidebar-brand\">
                    <a class=\"nav-link active js-scroll-trigger\" href=\"#page-top\" style=\"text-align: center\">
                            <span style=\"font-weight: bold\">
                                Compagnie Excalibur
                            </span>
                    </a>
                </li>

                ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "                    <li class=\"nav-item sidebar-nav-item\">
                        <a class=\"nav-link\" role=\"button\" onclick=\"\$('#collapse-usermenu').collapse('toggle')\">
                            <i class=\"fas fa-user\"></i>&nbsp;
                            ";
            // line 22
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22), "firstname", [], "any", false, false, false, 22)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22), "lastname", [], "any", false, false, false, 22)), "html", null, true);
            echo "
                        </a>
                        <div class=\"collapse\" id=\"collapse-usermenu\">
                            <div class=\"bg-white text-black-50 border rounded py-2 collapse-inner\" style=\"width: 96%; margin-left: 2%; margin-right: 2%; margin-top: 1%;\">
                                <a class=\"collapse-item collapse-btn\" href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\">Tableau de bord</a>
                                <a class=\"collapse-item collapse-btn\" href=\"\">Mon compte</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"collapse-item collapse-btn\" href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Déconnexion</a>
                            </div>
                        </div>
                    </li>
                ";
        } else {
            // line 34
            echo "                    <li class=\"nav-item sidebar-nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" role=\"button\" onclick=\"\$('#loginModal').modal();\">
                            <i class=\"fas fa-sign-in-alt\"></i>&nbsp;
                            Connexion
                        </a>
                    </li>
                ";
        }
        // line 41
        echo "
                <li class=\"nav-item sidebar-nav-item\">
                    <a class=\"nav-link js-scroll-trigger\" href=\"#page-top\">
                        <i class=\"fas fa-home\"></i>&nbsp;
                        Accueil
                    </a>
                </li>
                <li class=\"nav-item sidebar-nav-item\">
                    <a class=\"nav-link js-scroll-trigger\" href=\"#about\">
                        <i class=\"fas fa-info-circle\"></i>&nbsp;
                        Présentation
                    </a>
                </li>
                <li class=\"nav-item sidebar-nav-item\">
                    <a class=\"nav-link js-scroll-trigger\" href=\"\">
                        <i class=\"fas fa-folder\"></i>&nbsp;
                        Ressources
                    </a>
                </li>
                <li class=\"nav-item sidebar-nav-item\">
                    <a class=\"nav-link js-scroll-trigger\" href=\"\">
                        <i class=\"fas fa-camera\"></i>&nbsp;
                        Trombinoscope
                    </a>
                </li>
                <li class=\"nav-item sidebar-nav-item\">
                    <a class=\"nav-link js-scroll-trigger\" href=\"\">
                        <i class=\"fas fa-comments\"></i>&nbsp;
                        Forum
                    </a>
                </li>
                <li class=\"nav-item sidebar-nav-item\">
                    <a class=\"nav-link js-scroll-trigger\" href=\"\">
                        <i class=\"fas fa-images\"></i>&nbsp;
                        Galeries
                    </a>
                </li>
                <li class=\"nav-item sidebar-nav-item\">
                    <a class=\"nav-link js-scroll-trigger\" href=\"\">
                        <i class=\"fas fa-link\"></i>&nbsp;
                        Liens
                    </a>
                </li>
                <li class=\"nav-item sidebar-nav-item\">
                    <a class=\"nav-link js-scroll-trigger\" href=\"\">
                        <i class=\"fas fa-envelope\"></i>&nbsp;
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "includes/home/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 41,  86 => 34,  78 => 29,  72 => 26,  63 => 22,  58 => 19,  56 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/home/navbar.html.twig", "/Users/romainmunier/Documents/Projets/Symfony/ptuts3s4/templates/includes/home/navbar.html.twig");
    }
}
