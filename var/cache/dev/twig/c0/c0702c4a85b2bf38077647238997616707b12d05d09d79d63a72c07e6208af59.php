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

/* dashboard/mailinglist/index.html.twig */
class __TwigTemplate_01aedc264df346d983e3ec9da9152fbb77d50b21b98a6022f7abe72dbd48df96 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/mailinglist/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/mailinglist/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/mailinglist/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Diffusion";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div id=\"wrapper\">
    ";
        // line 8
        $this->loadTemplate("includes/dashboard/sidebar.html.twig", "dashboard/mailinglist/index.html.twig", 8)->display($context);
        // line 9
        echo "    <div class=\"d-flex flex-column ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 9, $this->source); })()), "medieval", [], "any", false, false, false, 9), 0, [], "array", false, false, false, 9)) {
            echo "bg-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 9, $this->source); })()), "theme", [], "any", false, false, false, 9), "html", null, true);
        } else {
            echo "bg-none";
        }
        echo "\" id=\"content-wrapper\">
        <div id=\"content\">
            ";
        // line 11
        $this->loadTemplate("includes/dashboard/navbar.html.twig", "dashboard/mailinglist/index.html.twig", 11)->display($context);
        // line 12
        echo "            <div class=\"container-fluid\">
                <div class=\"d-sm-flex justify-content-between align-items-center mb-4\">
                    <h3 class=\"text-";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 14, $this->source); })()), "color", [], "any", false, false, false, 14), "html", null, true);
        echo " mb-0\">Listes de diffusion</h3>
                    <a class=\"btn btn-primary btn-sm d-none d-sm-inline-block\" role=\"button\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mailing_add");
        echo "\">
                        <i class=\"fas fa-plus fa-sm text-white-50\"></i>&nbsp;
                        Créer une liste
                    </a>
                </div>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", [0 => "info-mailing"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            echo "                    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                        <strong>Information :</strong> ";
            // line 22
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            echo "                    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                        <h4 class=\"alert-heading\">Une erreur est survenue</h4>
                        <p>";
            // line 31
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
                        <hr>
                        <p class=\"mb-0\">Vérifiez les informations fournies puis réessayez.</p>
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                <ul class=\"nav nav-pills mb-3\" id=\"pills-tab\" role=\"tablist\">
                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mailingList"]) || array_key_exists("mailingList", $context) ? $context["mailingList"] : (function () { throw new RuntimeError('Variable "mailingList" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["type"]) {
            // line 41
            echo "                        <li class=\"nav-item\" role=\"presentation\">
                            <a class=\"nav-link ";
            // line 42
            if ((0 === twig_compare($context["key"], "HYBRID"))) {
                echo "active";
            }
            echo "\" id=\"pills-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "-tab\" data-toggle=\"pill\" href=\"#pills-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" role=\"tab\" aria-controls=\"pills-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" aria-selected=\"true\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], 0, [], "array", false, false, false, 42), "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </ul>
                <div class=\"tab-content\" id=\"pills-tabContent\">
                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mailingList"]) || array_key_exists("mailingList", $context) ? $context["mailingList"] : (function () { throw new RuntimeError('Variable "mailingList" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["type"]) {
            // line 48
            echo "                        <div class=\"tab-pane fade show ";
            if ((0 === twig_compare($context["key"], "HYBRID"))) {
                echo "active";
            }
            echo "\" id=\"pills-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"pills-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "-tab\">
                            <div class=\"row\">
                                ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["type"], 1, [], "array", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 51
                echo "                                    <div class=\"col-lg-4 text-center\">
                                        <div class=\"card border-";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "Color", [], "any", false, false, false, 52), "html", null, true);
                echo " mb-3 bg-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 52, $this->source); })()), "theme", [], "any", false, false, false, 52), "html", null, true);
                echo "\" style=\"width: 100%;\">
                                            <div class=\"card-header text-bold bg-";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 53, $this->source); })()), "theme", [], "any", false, false, false, 53), "html", null, true);
                echo " text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 53, $this->source); })()), "color", [], "any", false, false, false, 53), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "Name", [], "any", false, false, false, 53), "html", null, true);
                echo "</div>
                                            <div class=\"card-body text-";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "Color", [], "any", false, false, false, 54), "html", null, true);
                echo " text-left bg-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 54, $this->source); })()), "theme", [], "any", false, false, false, 54), "html", null, true);
                echo "\">
                                                <h5 class=\"card-title\">Nombre d'utilisateur : ";
                // line 55
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "List", [], "any", false, false, false, 55)), "html", null, true);
                echo "</h5>
                                                <p class=\"card-text text-";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 56, $this->source); })()), "color", [], "any", false, false, false, 56), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "Sumup", [], "any", false, false, false, 56), "html", null, true);
                echo "</p>
                                                <hr>
                                                <div class=\"row\">
                                                    <a class=\"btn btn-primary btn-sm ml-2 mr-2\" href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mailing_show", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\">
                                                        <i class=\"fas fa-eye text-white\"></i>
                                                    </a>
                                                    <a class=\"btn btn-warning btn-sm mr-2\" href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mailing_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                echo "\">
                                                        <i class=\"fas fa-edit text-white\"></i>
                                                    </a>
                                                    <button class=\"btn btn-danger btn-sm mr-2\" type=\"button\" onclick=\"\$('#modal-";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 65), "html", null, true);
                echo "-delete').modal();\">
                                                        <i class=\"fas fa-eraser text-white\"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"modal fade\" id=\"modal-";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 73), "html", null, true);
                echo "-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-dialog-centered\">
                                            <div class=\"modal-content bg-";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 75, $this->source); })()), "theme", [], "any", false, false, false, 75), "html", null, true);
                echo " text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 75, $this->source); })()), "color", [], "any", false, false, false, 75), "html", null, true);
                echo "\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title\">Confirmation de suppression</h5>
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                        <span aria-hidden=\"true\">&times;</span>
                                                    </button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <p>Êtes-vous sur de vouloir supprimé la liste nommée : \"";
                // line 83
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "Name", [], "any", false, false, false, 83)), "html", null, true);
                echo "\" ?</p>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                                    <a type=\"button\" class=\"btn btn-danger\" href=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mailing_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 87)]), "html", null, true);
                echo "\">Supprimer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                </div>
            </div>
        </div>
        <script>
            // Example 2 - Shared lists
            new Sortable(unassignedUser, {
                group: 'shared', // set both lists to same group
                animation: 150
            });

            new Sortable(assignedUser, {
                group: 'shared',
                animation: 150
            });
        </script>
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"text-center my-auto copyright text-";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 113, $this->source); })()), "color", [], "any", false, false, false, 113), "html", null, true);
        echo "\">
                    <span>Copyright © CEFC Developers Team ";
        // line 114
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env, "Y"), "Y"), "html", null, true);
        echo "</span>
                </div>
            </div>
        </footer>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/mailinglist/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 114,  339 => 113,  320 => 96,  312 => 93,  300 => 87,  293 => 83,  280 => 75,  275 => 73,  264 => 65,  258 => 62,  252 => 59,  244 => 56,  240 => 55,  234 => 54,  226 => 53,  220 => 52,  217 => 51,  213 => 50,  201 => 48,  197 => 47,  193 => 45,  174 => 42,  171 => 41,  167 => 40,  164 => 39,  150 => 31,  146 => 29,  141 => 28,  129 => 22,  126 => 21,  122 => 20,  114 => 15,  110 => 14,  106 => 12,  104 => 11,  93 => 9,  91 => 8,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Diffusion{% endblock %}

{# Gestion de la page #}
{% block body %}
<div id=\"wrapper\">
    {% include \"includes/dashboard/sidebar.html.twig\" %}
    <div class=\"d-flex flex-column {% if not userSettings.medieval[0] %}bg-{{ userSettings.theme }}{% else %}bg-none{% endif %}\" id=\"content-wrapper\">
        <div id=\"content\">
            {% include \"includes/dashboard/navbar.html.twig\" %}
            <div class=\"container-fluid\">
                <div class=\"d-sm-flex justify-content-between align-items-center mb-4\">
                    <h3 class=\"text-{{ userSettings.color}} mb-0\">Listes de diffusion</h3>
                    <a class=\"btn btn-primary btn-sm d-none d-sm-inline-block\" role=\"button\" href=\"{{ path(\"mailing_add\") }}\">
                        <i class=\"fas fa-plus fa-sm text-white-50\"></i>&nbsp;
                        Créer une liste
                    </a>
                </div>
                {% for message in app.flashes(\"info-mailing\") %}
                    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                        <strong>Information :</strong> {{ message }}
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                {% endfor %}
                {% for message in app.flashes(\"error\") %}
                    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                        <h4 class=\"alert-heading\">Une erreur est survenue</h4>
                        <p>{{ message }}</p>
                        <hr>
                        <p class=\"mb-0\">Vérifiez les informations fournies puis réessayez.</p>
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                {% endfor %}
                <ul class=\"nav nav-pills mb-3\" id=\"pills-tab\" role=\"tablist\">
                    {% for key,type in mailingList %}
                        <li class=\"nav-item\" role=\"presentation\">
                            <a class=\"nav-link {% if key == \"HYBRID\" %}active{% endif %}\" id=\"pills-{{ key }}-tab\" data-toggle=\"pill\" href=\"#pills-{{ key }}\" role=\"tab\" aria-controls=\"pills-{{ key }}\" aria-selected=\"true\">{{ type[0] }}</a>
                        </li>
                    {% endfor %}
                </ul>
                <div class=\"tab-content\" id=\"pills-tabContent\">
                    {% for key,type in mailingList %}
                        <div class=\"tab-pane fade show {% if key == \"HYBRID\" %}active{% endif %}\" id=\"pills-{{ key }}\" role=\"tabpanel\" aria-labelledby=\"pills-{{ key }}-tab\">
                            <div class=\"row\">
                                {% for t in type[1] %}
                                    <div class=\"col-lg-4 text-center\">
                                        <div class=\"card border-{{ t.Color }} mb-3 bg-{{ userSettings.theme }}\" style=\"width: 100%;\">
                                            <div class=\"card-header text-bold bg-{{ userSettings.theme }} text-{{ userSettings.color }}\">{{ t.Name }}</div>
                                            <div class=\"card-body text-{{ t.Color }} text-left bg-{{ userSettings.theme }}\">
                                                <h5 class=\"card-title\">Nombre d'utilisateur : {{ t.List|length }}</h5>
                                                <p class=\"card-text text-{{ userSettings.color }}\">{{ t.Sumup }}</p>
                                                <hr>
                                                <div class=\"row\">
                                                    <a class=\"btn btn-primary btn-sm ml-2 mr-2\" href=\"{{ path(\"mailing_show\", {\"id\" : t.id}) }}\">
                                                        <i class=\"fas fa-eye text-white\"></i>
                                                    </a>
                                                    <a class=\"btn btn-warning btn-sm mr-2\" href=\"{{ path(\"mailing_edit\", {\"id\" : t.id}) }}\">
                                                        <i class=\"fas fa-edit text-white\"></i>
                                                    </a>
                                                    <button class=\"btn btn-danger btn-sm mr-2\" type=\"button\" onclick=\"\$('#modal-{{ t.id }}-delete').modal();\">
                                                        <i class=\"fas fa-eraser text-white\"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"modal fade\" id=\"modal-{{ t.id }}-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-dialog-centered\">
                                            <div class=\"modal-content bg-{{ userSettings.theme }} text-{{ userSettings.color }}\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title\">Confirmation de suppression</h5>
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                        <span aria-hidden=\"true\">&times;</span>
                                                    </button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <p>Êtes-vous sur de vouloir supprimé la liste nommée : \"{{ t.Name|capitalize }}\" ?</p>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                                    <a type=\"button\" class=\"btn btn-danger\" href=\"{{ path(\"mailing_delete\", {\"id\" : t.id}) }}\">Supprimer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
        <script>
            // Example 2 - Shared lists
            new Sortable(unassignedUser, {
                group: 'shared', // set both lists to same group
                animation: 150
            });

            new Sortable(assignedUser, {
                group: 'shared',
                animation: 150
            });
        </script>
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"text-center my-auto copyright text-{{ userSettings.color }}\">
                    <span>Copyright © CEFC Developers Team {{ date(\"Y\")|date(\"Y\") }}</span>
                </div>
            </div>
        </footer>
        {% endblock %}
{# Fin de la gestion de la page #}", "dashboard/mailinglist/index.html.twig", "/Users/romainmunier/Documents/GitHub/ptuts3s4/templates/dashboard/mailinglist/index.html.twig");
    }
}
