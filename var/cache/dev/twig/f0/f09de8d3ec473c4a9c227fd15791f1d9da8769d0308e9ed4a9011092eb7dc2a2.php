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

/* dashboard/articles/index.html.twig */
class __TwigTemplate_332358d0d75d046d9125d351e56929d7ab6a7031761a83d744c92e34b02ec310 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/articles/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/articles/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/articles/index.html.twig", 1);
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

        echo "Articles";
        
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
        $this->loadTemplate("includes/dashboard/sidebar.html.twig", "dashboard/articles/index.html.twig", 8)->display($context);
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
        $this->loadTemplate("includes/dashboard/navbar.html.twig", "dashboard/articles/index.html.twig", 11)->display($context);
        // line 12
        echo "            <div class=\"container-fluid\">
                <div class=\"d-sm-flex justify-content-between align-items-center mb-4\">
                    <h3 class=\"text-";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 14, $this->source); })()), "color", [], "any", false, false, false, 14), "html", null, true);
        echo " mb-0\">Gestion des articles</h3>
                    <a class=\"btn btn-primary btn-sm d-none d-sm-inline-block\" role=\"button\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_add");
        echo "\">
                        <i class=\"fas fa-plus fa-sm text-white-50\"></i>&nbsp;
                        Nouvel article
                    </a>
                </div>
                <div class=\"row\">
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 22
            echo "                        <div class=\"col-lg-4\">
                            <div class=\"card\">
                                <div class=\"card-header text-bold\">
                                    ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "subject", [], "any", false, false, false, 25), "html", null, true);
            echo "
                                </div>
                                <div class=\"card-body\">
                                    <blockquote class=\"blockquote mb-0\">
                                        <p class=\"text-truncate\">";
            // line 29
            echo twig_get_attribute($this->env, $this->source, (isset($context["containments"]) || array_key_exists("containments", $context) ? $context["containments"] : (function () { throw new RuntimeError('Variable "containments" does not exist.', 29, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["article"], "article", [], "any", false, false, false, 29), [], "array", false, false, false, 29);
            echo "</p>
                                        <footer class=\"blockquote-footer\">Rédigé par ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 30), "firstname", [], "any", false, false, false, 30), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 30), "lastname", [], "any", false, false, false, 30), "html", null, true);
            echo " le  
                                            <cite title=\"Source Title\">";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true);
            echo "</cite>
                                        </footer>
                                    </blockquote>
                                </div>
                                <div class=\"card-footer\">
                                    <div class=\"row\">
                                        <a class=\"btn btn-outline-primary m-1\" href=\"#\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a class=\"btn btn-outline-warning m-1\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_edit", ["article" => twig_get_attribute($this->env, $this->source, $context["article"], "article", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <button class=\"btn btn-outline-danger m-1\" onclick=\"\$('#modal-";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "-delete').modal();\">
                                            <i class=\"fas fa-trash\"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"modal fade\" id=\"modal-";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog modal-dialog-centered\">
                                <div class=\"modal-content bg-";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 52, $this->source); })()), "theme", [], "any", false, false, false, 52), "html", null, true);
            echo " text-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 52, $this->source); })()), "color", [], "any", false, false, false, 52), "html", null, true);
            echo "\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\">Confirmation de suppression</h5>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body\">
                                        <p>Êtes-vous sur de vouloir supprimer l'article nommé : \"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "subject", [], "any", false, false, false, 60), "html", null, true);
            echo "\" ?</p>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                        <a type=\"button\" class=\"btn btn-danger\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_delete", ["article" => twig_get_attribute($this->env, $this->source, $context["article"], "article", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">Supprimer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                </div>
            </div>
        </div>
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"text-center my-auto copyright text-";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 75, $this->source); })()), "color", [], "any", false, false, false, 75), "html", null, true);
        echo "\">
                    <span>Copyright © CEFC Developers Team ";
        // line 76
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
        return "dashboard/articles/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 76,  221 => 75,  214 => 70,  202 => 64,  195 => 60,  182 => 52,  177 => 50,  167 => 43,  161 => 40,  149 => 31,  143 => 30,  139 => 29,  132 => 25,  127 => 22,  123 => 21,  114 => 15,  110 => 14,  106 => 12,  104 => 11,  93 => 9,  91 => 8,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Articles{% endblock %}

{# Gestion de la page #}
{% block body %}
<div id=\"wrapper\">
    {% include \"includes/dashboard/sidebar.html.twig\" %}
    <div class=\"d-flex flex-column {% if not userSettings.medieval[0] %}bg-{{ userSettings.theme }}{% else %}bg-none{% endif %}\" id=\"content-wrapper\">
        <div id=\"content\">
            {% include \"includes/dashboard/navbar.html.twig\" %}
            <div class=\"container-fluid\">
                <div class=\"d-sm-flex justify-content-between align-items-center mb-4\">
                    <h3 class=\"text-{{ userSettings.color}} mb-0\">Gestion des articles</h3>
                    <a class=\"btn btn-primary btn-sm d-none d-sm-inline-block\" role=\"button\" href=\"{{ path(\"articles_add\") }}\">
                        <i class=\"fas fa-plus fa-sm text-white-50\"></i>&nbsp;
                        Nouvel article
                    </a>
                </div>
                <div class=\"row\">
                    {% for article in articles %}
                        <div class=\"col-lg-4\">
                            <div class=\"card\">
                                <div class=\"card-header text-bold\">
                                    {{ article.subject }}
                                </div>
                                <div class=\"card-body\">
                                    <blockquote class=\"blockquote mb-0\">
                                        <p class=\"text-truncate\">{{ containments[article.article]|raw }}</p>
                                        <footer class=\"blockquote-footer\">Rédigé par {{ article.author.firstname }} {{ article.author.lastname }} le  
                                            <cite title=\"Source Title\">{{ article.date|date(\"d/m/Y\") }}</cite>
                                        </footer>
                                    </blockquote>
                                </div>
                                <div class=\"card-footer\">
                                    <div class=\"row\">
                                        <a class=\"btn btn-outline-primary m-1\" href=\"#\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a class=\"btn btn-outline-warning m-1\" href=\"{{ path(\"articles_edit\", {\"article\" : article.article}) }}\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <button class=\"btn btn-outline-danger m-1\" onclick=\"\$('#modal-{{ article.id }}-delete').modal();\">
                                            <i class=\"fas fa-trash\"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"modal fade\" id=\"modal-{{ article.id }}-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog modal-dialog-centered\">
                                <div class=\"modal-content bg-{{ userSettings.theme }} text-{{ userSettings.color }}\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\">Confirmation de suppression</h5>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body\">
                                        <p>Êtes-vous sur de vouloir supprimer l'article nommé : \"{{ article.subject }}\" ?</p>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                        <a type=\"button\" class=\"btn btn-danger\" href=\"{{ path(\"articles_delete\", { \"article\" : article.article }) }}\">Supprimer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"text-center my-auto copyright text-{{ userSettings.color }}\">
                    <span>Copyright © CEFC Developers Team {{ date(\"Y\")|date(\"Y\") }}</span>
                </div>
            </div>
        </footer>
        {% endblock %}
{# Fin de la gestion de la page #}", "dashboard/articles/index.html.twig", "/Users/romainmunier/Documents/GitHub/ptuts3s4/templates/dashboard/articles/index.html.twig");
    }
}
