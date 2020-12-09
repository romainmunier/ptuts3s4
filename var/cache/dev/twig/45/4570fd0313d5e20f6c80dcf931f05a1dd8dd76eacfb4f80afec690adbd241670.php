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

/* dashboard/settings/index.html.twig */
class __TwigTemplate_0bd71d6f9b7f4fa4f5cf451117b79fc815f09e1a8af62fde9b3369a47cfd7402 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/settings/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/settings/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/settings/index.html.twig", 1);
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

        echo "Paramètres";
        
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
        echo "    <script>
        function displaySettingsButtonOnChange() {
            document.getElementById(\"submitSettingsButton\").style.display = \"block\";
        }
    </script>

<div id=\"wrapper\">
    ";
        // line 14
        $this->loadTemplate("includes/dashboard/sidebar.html.twig", "dashboard/settings/index.html.twig", 14)->display($context);
        // line 15
        echo "    <div class=\"d-flex flex-column ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 15, $this->source); })()), "medieval", [], "any", false, false, false, 15), 0, [], "array", false, false, false, 15)) {
            echo "bg-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 15, $this->source); })()), "theme", [], "any", false, false, false, 15), "html", null, true);
        } else {
            echo "bg-none";
        }
        echo "\" id=\"content-wrapper\">
        <div id=\"content\">
            ";
        // line 17
        $this->loadTemplate("includes/dashboard/navbar.html.twig", "dashboard/settings/index.html.twig", 17)->display($context);
        // line 18
        echo "            <div class=\"container-fluid\">
                <h3 class=\"text-";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 19, $this->source); })()), "color", [], "any", false, false, false, 19), "html", null, true);
        echo " mb-0 text-center\">Paramètres</h3>
                <br>
                <form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings_save", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21)]), "html", null, true);
        echo "\" method=\"POST\">
                    <div class=\"settings-container\">
                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["setting"]) {
            // line 24
            echo "                            <button class=\"settings-button text-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 24, $this->source); })()), "color", [], "any", false, false, false, 24), "html", null, true);
            echo "\" type=\"button\" data-toggle=\"modal\" data-target=\"#modal-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["setting"], 0, [], "array", false, false, false, 24), "html", null, true);
            echo "\">
                                <i class=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["setting"], 1, [], "array", false, false, false, 25), "html", null, true);
            echo "\"></i>
                                <br>
                                ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["setting"], 0, [], "array", false, false, false, 27), "html", null, true);
            echo "
                                <br>
                                <small class=\"settings-small\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["setting"], 2, [], "array", false, false, false, 29), "html", null, true);
            echo "</small>
                            </button>
                            <hr>

                            <div class=\"modal fade\" id=\"modal-";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["setting"], 0, [], "array", false, false, false, 33), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["setting"], 2, [], "array", false, false, false, 33), "html", null, true);
            echo "\" aria-hidden=\"true\" style=\"height: 90% !important;\">
                                <div class=\"modal-dialog modal-dialog-centered modal-lg\" style=\"height: 90% !important;\">
                                    <div class=\"modal-content bg-";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 35, $this->source); })()), "theme", [], "any", false, false, false, 35), "html", null, true);
            echo "\" style=\"border: none; height: 90% !important;\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title text-";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 37, $this->source); })()), "color", [], "any", false, false, false, 37), "html", null, true);
            echo "\" id=\"exampleModalLabel\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["setting"], 0, [], "array", false, false, false, 37), "html", null, true);
            echo "</h5>
                                            <button type=\"button\" class=\"close text-";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 38, $this->source); })()), "color", [], "any", false, false, false, 38), "html", null, true);
            echo "\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">&times;</span>
                                            </button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <div class=\"settings-container\">
                                                ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["setting"], 3, [], "array", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 45
                echo "                                                    ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], 0, [], "array", false, false, false, 45), "switch"))) {
                    // line 46
                    echo "                                                        <div class=\"settings-button text-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 46, $this->source); })()), "color", [], "any", false, false, false, 46), "html", null, true);
                    echo " text-center\" style=\"width: 30% !important;\">
                                                            <i class=\"fas fa-laptop-code\"></i>
                                                            <br>
                                                            ";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], 2, [], "array", false, false, false, 49), "html", null, true);
                    echo "
                                                            <br>
                                                            <div class=\"custom-control custom-switch\">
                                                                <input name=\"";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], 1, [], "array", false, false, false, 52), "html", null, true);
                    echo "\" type=\"checkbox\" class=\"custom-control-input\" id=\"switch-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], 1, [], "array", false, false, false, 52), "html", null, true);
                    echo "\" ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "settings", [], "any", false, false, false, 52), 0, [], "array", false, false, false, 52), "Settings", [], "any", false, false, false, 52), twig_get_attribute($this->env, $this->source, $context["option"], 1, [], "array", false, false, false, 52), [], "array", false, false, false, 52), twig_get_attribute($this->env, $this->source, $context["option"], 3, [], "array", false, false, false, 52)))) {
                        echo "checked";
                    }
                    echo " onchange=\"displaySettingsButtonOnChange()\">
                                                                <label class=\"custom-control-label text-";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 53, $this->source); })()), "color", [], "any", false, false, false, 53), "html", null, true);
                    echo "\" for=\"switch-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], 1, [], "array", false, false, false, 53), "html", null, true);
                    echo "\">";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "settings", [], "any", false, false, false, 53), 0, [], "array", false, false, false, 53), "Settings", [], "any", false, false, false, 53), twig_get_attribute($this->env, $this->source, $context["option"], 1, [], "array", false, false, false, 53), [], "array", false, false, false, 53), twig_get_attribute($this->env, $this->source, $context["option"], 3, [], "array", false, false, false, 53)))) {
                        echo "Activé";
                    } else {
                        echo "Désactivé";
                    }
                    echo "</label>
                                                            </div>
                                                        </div>
                                                    ";
                }
                // line 57
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['setting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                    </div>
                    <br>
                    <button id=\"submitSettingsButton\" type=\"submit\" class=\"btn btn-success btn-block btn-lg\" style=\"width: 60%; margin: 0 20%; display: none;\">Enregistrer</button>
                </form>
            </div>
        </div>
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"text-center my-auto copyright text-";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 72, $this->source); })()), "color", [], "any", false, false, false, 72), "html", null, true);
        echo "\">
                    <span>Copyright © CEFC Developers Team ";
        // line 73
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
        return "dashboard/settings/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 73,  252 => 72,  242 => 64,  231 => 58,  225 => 57,  210 => 53,  200 => 52,  194 => 49,  187 => 46,  184 => 45,  180 => 44,  171 => 38,  165 => 37,  160 => 35,  153 => 33,  146 => 29,  141 => 27,  136 => 25,  129 => 24,  125 => 23,  120 => 21,  115 => 19,  112 => 18,  110 => 17,  99 => 15,  97 => 14,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Paramètres{% endblock %}

{# Gestion de la page #}
{% block body %}
    <script>
        function displaySettingsButtonOnChange() {
            document.getElementById(\"submitSettingsButton\").style.display = \"block\";
        }
    </script>

<div id=\"wrapper\">
    {% include \"includes/dashboard/sidebar.html.twig\" %}
    <div class=\"d-flex flex-column {% if not userSettings.medieval[0] %}bg-{{ userSettings.theme }}{% else %}bg-none{% endif %}\" id=\"content-wrapper\">
        <div id=\"content\">
            {% include \"includes/dashboard/navbar.html.twig\" %}
            <div class=\"container-fluid\">
                <h3 class=\"text-{{ userSettings.color }} mb-0 text-center\">Paramètres</h3>
                <br>
                <form action=\"{{ path(\"settings_save\", {\"id\" : app.user.id}) }}\" method=\"POST\">
                    <div class=\"settings-container\">
                        {% for setting in settings %}
                            <button class=\"settings-button text-{{ userSettings.color }}\" type=\"button\" data-toggle=\"modal\" data-target=\"#modal-{{ setting[0] }}\">
                                <i class=\"{{ setting[1] }}\"></i>
                                <br>
                                {{ setting[0] }}
                                <br>
                                <small class=\"settings-small\">{{ setting[2] }}</small>
                            </button>
                            <hr>

                            <div class=\"modal fade\" id=\"modal-{{ setting[0] }}\" tabindex=\"-1\" aria-labelledby=\"{{ setting[2] }}\" aria-hidden=\"true\" style=\"height: 90% !important;\">
                                <div class=\"modal-dialog modal-dialog-centered modal-lg\" style=\"height: 90% !important;\">
                                    <div class=\"modal-content bg-{{ userSettings.theme }}\" style=\"border: none; height: 90% !important;\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title text-{{ userSettings.color }}\" id=\"exampleModalLabel\">{{ setting[0] }}</h5>
                                            <button type=\"button\" class=\"close text-{{ userSettings.color }}\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">&times;</span>
                                            </button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <div class=\"settings-container\">
                                                {% for option in setting[3] %}
                                                    {% if option[0] == \"switch\" %}
                                                        <div class=\"settings-button text-{{ userSettings.color }} text-center\" style=\"width: 30% !important;\">
                                                            <i class=\"fas fa-laptop-code\"></i>
                                                            <br>
                                                            {{ option[2] }}
                                                            <br>
                                                            <div class=\"custom-control custom-switch\">
                                                                <input name=\"{{ option[1] }}\" type=\"checkbox\" class=\"custom-control-input\" id=\"switch-{{ option[1] }}\" {% if app.user.settings[0].Settings[option[1]] == option[3] %}checked{% endif %} onchange=\"displaySettingsButtonOnChange()\">
                                                                <label class=\"custom-control-label text-{{ userSettings.color }}\" for=\"switch-{{ option[1] }}\">{% if app.user.settings[0].Settings[option[1]] == option[3] %}Activé{% else %}Désactivé{% endif %}</label>
                                                            </div>
                                                        </div>
                                                    {% endif %}
                                                {% endfor %}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                    <br>
                    <button id=\"submitSettingsButton\" type=\"submit\" class=\"btn btn-success btn-block btn-lg\" style=\"width: 60%; margin: 0 20%; display: none;\">Enregistrer</button>
                </form>
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
        {# Fin de la gestion de la page #}", "dashboard/settings/index.html.twig", "/Users/romainmunier/Documents/Projets/Symfony/ptuts3s4/templates/dashboard/settings/index.html.twig");
    }
}
