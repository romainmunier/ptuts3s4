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
class __TwigTemplate_d232f7e05c756329788b0c757db6177453b64502bdea1a93e4ee45374e18a2b8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/home/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/home/navbar.html.twig"));

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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "                    <li class=\"nav-item sidebar-nav-item\">
                        <a class=\"nav-link\" role=\"button\" onclick=\"\$('#collapse-usermenu').collapse('toggle')\">
                            <i class=\"fas fa-user\"></i>&nbsp;
                            ";
            // line 22
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "firstname", [], "any", false, false, false, 22)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "lastname", [], "any", false, false, false, 22)), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  101 => 41,  92 => 34,  84 => 29,  78 => 26,  69 => 22,  64 => 19,  62 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a class=\"menu-toggle rounded\" href=\"#\">
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

                {% if app.user %}
                    <li class=\"nav-item sidebar-nav-item\">
                        <a class=\"nav-link\" role=\"button\" onclick=\"\$('#collapse-usermenu').collapse('toggle')\">
                            <i class=\"fas fa-user\"></i>&nbsp;
                            {{ app.user.firstname|capitalize }} {{ app.user.lastname|upper }}
                        </a>
                        <div class=\"collapse\" id=\"collapse-usermenu\">
                            <div class=\"bg-white text-black-50 border rounded py-2 collapse-inner\" style=\"width: 96%; margin-left: 2%; margin-right: 2%; margin-top: 1%;\">
                                <a class=\"collapse-item collapse-btn\" href=\"{{ path(\"dashboard\") }}\">Tableau de bord</a>
                                <a class=\"collapse-item collapse-btn\" href=\"\">Mon compte</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"collapse-item collapse-btn\" href=\"{{ path(\"logout\") }}\">Déconnexion</a>
                            </div>
                        </div>
                    </li>
                {% else %}
                    <li class=\"nav-item sidebar-nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" role=\"button\" onclick=\"\$('#loginModal').modal();\">
                            <i class=\"fas fa-sign-in-alt\"></i>&nbsp;
                            Connexion
                        </a>
                    </li>
                {% endif %}

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
</nav>", "includes/home/navbar.html.twig", "/Users/romainmunier/Documents/GitHub/ptuts3s4/templates/includes/home/navbar.html.twig");
    }
}
