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

/* dashboard/user/index.html.twig */
class __TwigTemplate_e4b36896e6fd606aa0c4c7e52524cd3948a76832d1f4aad7d2c3cda41a001db7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/user/index.html.twig", 1);
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

        echo "Utilisateurs";
        
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
        $this->loadTemplate("includes/dashboard/sidebar.html.twig", "dashboard/user/index.html.twig", 8)->display($context);
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
        $this->loadTemplate("includes/dashboard/navbar.html.twig", "dashboard/user/index.html.twig", 11)->display($context);
        // line 12
        echo "            <div class=\"container-fluid\">
                <h3 class=\"text-";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 13, $this->source); })()), "color", [], "any", false, false, false, 13), "html", null, true);
        echo " mb-4\">Utilisateurs</h3>
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", [0 => "user"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            echo "                    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                        <strong>Information :</strong> ";
            // line 16
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
        // line 22
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            echo "                    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                        <h4 class=\"alert-heading\">Une erreur est survenue</h4>
                        <p>";
            // line 25
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
        // line 33
        echo "                <div class=\"card shadow bg-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 33, $this->source); })()), "theme", [], "any", false, false, false, 33), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 33, $this->source); })()), "color", [], "any", false, false, false, 33), "html", null, true);
        echo "\">
                    <div class=\"card-header py-3 bg-";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 34, $this->source); })()), "theme", [], "any", false, false, false, 34), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 34, $this->source); })()), "color", [], "any", false, false, false, 34), "html", null, true);
        echo "\">
                        <p class=\"text-";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 35, $this->source); })()), "color", [], "any", false, false, false, 35), "html", null, true);
        echo " m-0 font-weight-bold\">Liste des utilisateurs</p>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-6 text-nowrap\">
                                <div id=\"dataTable_length\" class=\"dataTables_length text-";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 40, $this->source); })()), "color", [], "any", false, false, false, 40), "html", null, true);
        echo "\" aria-controls=\"dataTable\">
                                    <form action=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users");
        echo "\" method=\"POST\">
                                        <label>Affichage&nbsp;
                                            <select name=\"limit\" class=\"form-control form-control-sm custom-select custom-select-sm bg-";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 43, $this->source); })()), "color", [], "any", false, false, false, 43), "html", null, true);
        echo " text-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 43, $this->source); })()), "theme", [], "any", false, false, false, 43), "html", null, true);
        echo "\" onchange=\"this.form.submit()\">
                                                <option value=\"10\" ";
        // line 44
        if ((0 === twig_compare((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 44, $this->source); })()), "10"))) {
            echo "selected";
        }
        echo ">10</option>
                                                <option value=\"25\" ";
        // line 45
        if ((0 === twig_compare((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 45, $this->source); })()), "25"))) {
            echo "selected";
        }
        echo ">25</option>
                                                <option value=\"50\" ";
        // line 46
        if ((0 === twig_compare((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 46, $this->source); })()), "50"))) {
            echo "selected";
        }
        echo ">50</option>
                                                <option value=\"100\" ";
        // line 47
        if ((0 === twig_compare((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 47, $this->source); })()), "100"))) {
            echo "selected";
        }
        echo ">100</option>
                                            </select>&nbsp;
                                        </label>
                                    </form>

                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"text-md-right dataTables_filter\" id=\"dataTable_filter\">
                                    <form method=\"POST\" action=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users");
        echo "\">
                                        <label>
                                            <input type=\"search\" name=\"SEARCH\" id=\"searchBarUser\" class=\"form-control form-control-sm bg-";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 58, $this->source); })()), "color", [], "any", false, false, false, 58), "html", null, true);
        echo " text-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 58, $this->source); })()), "theme", [], "any", false, false, false, 58), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "request", [], "any", false, false, false, 58), "get", [0 => "SEARCH"], "method", false, false, false, 58), "html", null, true);
        echo "\" minlength=\"2\" aria-controls=\"dataTable\" placeholder=\"Rechercher ...\" required oninput=\"document.getElementById('searchButton').style.display = 'inline'; searchOnUsers(this.value)\">
                                        </label>
                                        <button id=\"searchButton\" class=\"btn btn-primary btn-sm\" style=\"display: none;\" type=\"button\" onclick=\"this.form.submit()\">
                                            <i class=\"fas fa-search text-white\"></i>
                                        </button>
                                        ";
        // line 63
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 63), "request", [], "any", false, true, false, 63), "get", [0 => "SEARCH"], "method", true, true, false, 63) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "request", [], "any", false, false, false, 63), "request", [], "any", false, false, false, 63), "get", [0 => "SEARCH"], "method", false, false, false, 63), "")))) {
            // line 64
            echo "                                            <a class=\"btn btn-danger btn-sm\" type=\"submit\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users");
            echo "\">
                                                <i class=\"fas fa-eraser text-white\"></i>
                                            </a>
                                        ";
        }
        // line 68
        echo "                                        <a class=\"btn btn-success btn-sm\" type=\"button\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_add");
        echo "\">
                                            <i class=\"fas fa-user-plus text-white\"></i>
                                        </a>
                                        <a class=\"btn btn-primary btn-sm\" type=\"button\" data-toggle=\"collapse\" href=\"#filterOptions\" aria-expanded=\"false\" aria-controls=\"filterOptions\">
                                            <i class=\"fas fa-filter text-white\"></i>
                                        </a>
                                        <a class=\"btn btn-warning btn-sm\" type=\"button\" onclick=\"\$('#modal-actionOnMany').modal();\">
                                            <i class=\"fas fa-th text-white\"></i>
                                        </a>
                                    </form>
                                </div>
                            </div>
                            <div class=\"collapse bg-";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 80, $this->source); })()), "theme", [], "any", false, false, false, 80), "html", null, true);
        echo " text-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 80, $this->source); })()), "color", [], "any", false, false, false, 80), "html", null, true);
        echo "\" id=\"filterOptions\" style=\"width: 100%;\">
                                <div class=\"card card-body bg-";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 81, $this->source); })()), "theme", [], "any", false, false, false, 81), "html", null, true);
        echo " text-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 81, $this->source); })()), "color", [], "any", false, false, false, 81), "html", null, true);
        echo "\">
                                    <h5>Filtrage des données</h5>
                                </div>
                            </div>
                        </div>
                        <script>
                            let tableCount = 0;
                            let activeTab = 1;
                            let usersId = [];

                            function moveArray(id, move) {
                                if (move === '-' && id>=1) {
                                    if (id.toString() === \"1\") {
                                        document.getElementById(\"btnPreviousTab\").removeAttribute(\"class\");
                                        document.getElementById(\"btnPreviousTab\").setAttribute(\"class\", \"page-item disabled\");
                                    } else {
                                        document.getElementById(\"btnPreviousTab\").removeAttribute(\"class\");
                                        document.getElementById(\"btnPreviousTab\").setAttribute(\"class\", \"page-item\");
                                        document.getElementById(\"btnNextTab\").removeAttribute(\"class\");
                                        document.getElementById(\"btnNextTab\").setAttribute(\"class\", \"page-item\");
                                    }
                                    showTable(id);
                                } else if (move === '+' && id<=tableCount) {
                                    if (id.toString() === tableCount.toString()) {
                                        document.getElementById(\"btnNextTab\").removeAttribute(\"class\");
                                        document.getElementById(\"btnNextTab\").setAttribute(\"class\", \"page-item disabled\");
                                    } else {
                                        document.getElementById(\"btnPreviousTab\").removeAttribute(\"class\");
                                        document.getElementById(\"btnPreviousTab\").setAttribute(\"class\", \"page-item\");
                                        document.getElementById(\"btnNextTab\").removeAttribute(\"class\");
                                        document.getElementById(\"btnNextTab\").setAttribute(\"class\", \"page-item\");
                                    }
                                    showTable(id);
                                }
                                \$('html').animate({scrollTop: 0}, \"slow\");
                            }

                            function showTable(id) {
                                for(let i=1; i<=tableCount; i++) {
                                    \$('#dataTable-' + i).slideUp(\"slow\");
                                    // document.getElementById(\"dataTable-\" + i).style.display = \"none\";
                                    if (tableCount <= 10) {
                                        document.getElementById(\"btnTab-\" + i).removeAttribute(\"class\");
                                        document.getElementById(\"btnTab-\" + i).setAttribute(\"class\", \"page-item\");
                                    }
                                }
                                \$('#dataTable-' + id).slideDown(\"slow\");
                                // document.getElementById(\"dataTable-\" + id).style.display = \"block\";
                                if (tableCount <= 10) {
                                    document.getElementById(\"btnTab-\" + id).setAttribute(\"class\", \"page-item active\");
                                }

                                if (id.toString() === \"1\") {
                                    document.getElementById(\"btnPreviousTab\").removeAttribute(\"class\");
                                    document.getElementById(\"btnPreviousTab\").setAttribute(\"class\", \"page-item disabled\");
                                } else if (id.toString() === tableCount.toString()) {
                                    document.getElementById(\"btnNextTab\").removeAttribute(\"class\");
                                    document.getElementById(\"btnNextTab\").setAttribute(\"class\", \"page-item disabled\");
                                } else {
                                    document.getElementById(\"btnPreviousTab\").removeAttribute(\"class\");
                                    document.getElementById(\"btnPreviousTab\").setAttribute(\"class\", \"page-item\");
                                    document.getElementById(\"btnNextTab\").removeAttribute(\"class\");
                                    document.getElementById(\"btnNextTab\").setAttribute(\"class\", \"page-item\");
                                }

                                activeTab = id;
                                \$('html').animate({scrollTop: 0}, \"slow\");
                            }

                            function actionOnAll(state) {
                                if (state) {
                                    usersId.forEach(function(user) {
                                        \$('#checkbox-' + user).prop(\"checked\", true);
                                    })
                                } else {
                                    usersId.forEach(function(user) {
                                        \$('#checkbox-' + user).prop(\"checked\", false);
                                    })
                                }
                            }
                        </script>
                        <form action=\"";
        // line 162
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_executeAction");
        echo "\" method=\"POST\">
                        ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 163, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["table"]) {
            // line 164
            echo "                            <script>tableCount = parseInt(\"";
            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
            echo "\")</script>
                            <div class=\"table-responsive table mt-2\" id=\"dataTable-";
            // line 165
            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
            echo "\" role=\"grid\" aria-describedby=\"dataTable_info\" style=\"display: ";
            if ((0 === twig_compare($context["key"], 0))) {
                echo "block";
            } else {
                echo "none";
            }
            echo "\">
                                <table class=\"table my-0 text-";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 166, $this->source); })()), "color", [], "any", false, false, false, 166), "html", null, true);
            echo "\" id=\"dataTable\">
                                    <thead>
                                        <tr>
                                            <th style=\"width: 5%; text-align: center\">
                                                <div class=\"custom-control custom-checkbox\">
                                                    <input type=\"checkbox\" class=\"custom-control-input\" name=\"all\" id=\"checkbox-all\" onchange=\"actionOnAll(this.checked)\">
                                                    <label class=\"custom-control-label\" for=\"checkbox-all\"></label>
                                                </div>
                                            </th>
                                            <th style=\"width: 10%;\">Identifiant</th>
                                            <th style=\"width: 15%;\">Pseudo</th>
                                            <th style=\"width: 20%;\">Prénom</th>
                                            <th style=\"width: 20%;\">Nom</th>
                                            <th style=\"width: 30%; text-align: center;\">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 183
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["table"]);
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 184
                echo "                                        ";
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 184), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 184, $this->source); })()), "user", [], "any", false, false, false, 184), "id", [], "any", false, false, false, 184)))) {
                    // line 185
                    echo "                                            <script>usersId.push(\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 185), "html", null, true);
                    echo "\")</script>
                                        ";
                }
                // line 187
                echo "                                        <tr>
                                            <td style=\"width: 5%; text-align: center\">
                                                <div class=\"custom-control custom-checkbox\">
                                                    <input type=\"checkbox\" class=\"custom-control-input\" name=\"selected[][";
                // line 190
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 190), "html", null, true);
                echo "]\" id=\"checkbox-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 190), "html", null, true);
                echo "\" ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 190), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 190, $this->source); })()), "user", [], "any", false, false, false, 190), "id", [], "any", false, false, false, 190)))) {
                    echo "disabled";
                }
                echo " onchange=\"\$('#checkbox-all').prop('indeterminate', true)\">
                                                    <label class=\"custom-control-label\" for=\"checkbox-";
                // line 191
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 191), "html", null, true);
                echo "\"></label>
                                                </div>
                                            </td>
                                            <td style=\"width: 10%;\">";
                // line 194
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 194), "html", null, true);
                echo "</td>
                                            <td style=\"width: 15%;\">";
                // line 195
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "pseudo", [], "any", false, false, false, 195), "html", null, true);
                echo "</td>
                                            <td style=\"width: 20%;\">";
                // line 196
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 196)), "html", null, true);
                echo "</td>
                                            <td style=\"width: 20%;\">";
                // line 197
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 197)), "html", null, true);
                echo "</td>
                                            <td style=\"width: 30%; text-align: center;\">
                                                <a class=\"btn btn-warning btn-sm\" href=\"";
                // line 199
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 199)]), "html", null, true);
                echo "\">
                                                    <i class=\"fas fa-user-edit text-white\"></i>
                                                </a>
                                                <a class=\"btn btn-danger btn-sm\" role=\"button\" onclick=\"\$('#modal-";
                // line 202
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 202), "html", null, true);
                echo "-delete').modal();\">
                                                    <i class=\"fas fa-user-minus text-white\"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <div class=\"modal fade\" id=\"modal-";
                // line 208
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 208), "html", null, true);
                echo "-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog modal-dialog-centered\">
                                                <div class=\"modal-content bg-";
                // line 210
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 210, $this->source); })()), "theme", [], "any", false, false, false, 210), "html", null, true);
                echo " text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 210, $this->source); })()), "color", [], "any", false, false, false, 210), "html", null, true);
                echo "\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title\">Confirmation de suppression</h5>
                                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                            <span aria-hidden=\"true\">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <p>Êtes-vous sur de vouloir supprimé l'utilisateur nommé : \"";
                // line 218
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 218)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 218)), "html", null, true);
                echo "\" ?</p>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                                        <a type=\"button\" class=\"btn btn-danger\" href=\"";
                // line 222
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 222)]), "html", null, true);
                echo "\">Supprimer</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "                                    </tbody>
                                </table>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "                        <div class=\"modal fade\" id=\"modal-actionOnMany\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog modal-dialog-centered\">
                                <div class=\"modal-content bg-";
        // line 234
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 234, $this->source); })()), "theme", [], "any", false, false, false, 234), "html", null, true);
        echo " text-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 234, $this->source); })()), "color", [], "any", false, false, false, 234), "html", null, true);
        echo "\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\">Sélectionner une action</h5>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body\">
                                        <div class=\"form-group\">
                                            <label for=\"actionOnAllSelect\">
                                                <strong>Action à effectuer</strong>
                                            </label>
                                            <select class=\"form-control\" id=\"actionOnAllSelect\" name=\"action\" required>
                                                <option value=\"\" disabled readonly=\"true\" selected>-- Sélectionner une option</option>
                                                <option value=\"DELETE\">Supprimer les utilisateurs</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                        <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                        <div class=\"row\">
                            <div class=\"col-md-6 align-self-center\">
                                <p id=\"dataTable_info\" class=\"dataTables_info text-";
        // line 262
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 262, $this->source); })()), "color", [], "any", false, false, false, 262), "html", null, true);
        echo "\" role=\"status\" aria-live=\"polite\">
                                    Affichage de ";
        // line 263
        echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 263, $this->source); })()), "html", null, true);
        echo " utilisateur";
        if ((1 === twig_compare((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 263, $this->source); })()), 1))) {
            echo "s";
        }
        // line 264
        echo "                                </p>
                            </div>
                            <div class=\"col-md-6\">
                                <nav class=\"d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers\">
                                    <ul class=\"pagination\">
                                        <li class=\"page-item disabled\" id=\"btnPreviousTab\" onclick=\"moveArray(activeTab-1, '-')\">
                                            <a class=\"page-link\" id=\"btnPreviousTab\" role=\"button\">
                                                <span aria-hidden=\"true\">«</span>
                                            </a>
                                        </li>
                                        ";
        // line 274
        if ((0 >= twig_compare(twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 274, $this->source); })())), 10))) {
            // line 275
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 275, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["table"]) {
                // line 276
                echo "                                                <li class=\"page-item ";
                if ((0 === twig_compare($context["key"], 0))) {
                    echo "active";
                }
                echo "\" id=\"btnTab-";
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\">
                                                    <a class=\"page-link\" role=\"button\" onclick=\"showTable('";
                // line 277
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "')\">";
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "</a>
                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['table'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "                                        ";
        }
        // line 281
        echo "                                        <li class=\"page-item\" id=\"btnNextTab\" onclick=\"moveArray(activeTab+1, '+')\">
                                            <a class=\"page-link\">
                                                <span aria-hidden=\"true\">»</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"text-center my-auto copyright text-";
        // line 296
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 296, $this->source); })()), "color", [], "any", false, false, false, 296), "html", null, true);
        echo "\">
                    <span>Copyright © CEFC Developers Team ";
        // line 297
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
        return "dashboard/user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  625 => 297,  621 => 296,  604 => 281,  601 => 280,  590 => 277,  581 => 276,  576 => 275,  574 => 274,  562 => 264,  556 => 263,  552 => 262,  519 => 234,  515 => 232,  506 => 228,  494 => 222,  485 => 218,  472 => 210,  467 => 208,  458 => 202,  452 => 199,  447 => 197,  443 => 196,  439 => 195,  435 => 194,  429 => 191,  419 => 190,  414 => 187,  408 => 185,  405 => 184,  401 => 183,  381 => 166,  371 => 165,  366 => 164,  362 => 163,  358 => 162,  272 => 81,  266 => 80,  250 => 68,  242 => 64,  240 => 63,  228 => 58,  223 => 56,  209 => 47,  203 => 46,  197 => 45,  191 => 44,  185 => 43,  180 => 41,  176 => 40,  168 => 35,  162 => 34,  155 => 33,  141 => 25,  137 => 23,  132 => 22,  120 => 16,  117 => 15,  113 => 14,  109 => 13,  106 => 12,  104 => 11,  93 => 9,  91 => 8,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Utilisateurs{% endblock %}

{# Gestion de la page #}
{% block body %}
<div id=\"wrapper\">
    {% include \"includes/dashboard/sidebar.html.twig\" %}
    <div class=\"d-flex flex-column {% if not userSettings.medieval[0] %}bg-{{ userSettings.theme }}{% else %}bg-none{% endif %}\" id=\"content-wrapper\">
        <div id=\"content\">
            {% include \"includes/dashboard/navbar.html.twig\" %}
            <div class=\"container-fluid\">
                <h3 class=\"text-{{ userSettings.color }} mb-4\">Utilisateurs</h3>
                {% for message in app.flashes(\"user\") %}
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
                <div class=\"card shadow bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                    <div class=\"card-header py-3 bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                        <p class=\"text-{{ userSettings.color }} m-0 font-weight-bold\">Liste des utilisateurs</p>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-6 text-nowrap\">
                                <div id=\"dataTable_length\" class=\"dataTables_length text-{{ userSettings.color }}\" aria-controls=\"dataTable\">
                                    <form action=\"{{ path(\"users\") }}\" method=\"POST\">
                                        <label>Affichage&nbsp;
                                            <select name=\"limit\" class=\"form-control form-control-sm custom-select custom-select-sm bg-{{ userSettings.color }} text-{{ userSettings.theme }}\" onchange=\"this.form.submit()\">
                                                <option value=\"10\" {% if limit == \"10\" %}selected{% endif %}>10</option>
                                                <option value=\"25\" {% if limit == \"25\" %}selected{% endif %}>25</option>
                                                <option value=\"50\" {% if limit == \"50\" %}selected{% endif %}>50</option>
                                                <option value=\"100\" {% if limit == \"100\" %}selected{% endif %}>100</option>
                                            </select>&nbsp;
                                        </label>
                                    </form>

                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"text-md-right dataTables_filter\" id=\"dataTable_filter\">
                                    <form method=\"POST\" action=\"{{ path(\"users\") }}\">
                                        <label>
                                            <input type=\"search\" name=\"SEARCH\" id=\"searchBarUser\" class=\"form-control form-control-sm bg-{{ userSettings.color }} text-{{ userSettings.theme }}\" value=\"{{ app.request.request.get(\"SEARCH\") }}\" minlength=\"2\" aria-controls=\"dataTable\" placeholder=\"Rechercher ...\" required oninput=\"document.getElementById('searchButton').style.display = 'inline'; searchOnUsers(this.value)\">
                                        </label>
                                        <button id=\"searchButton\" class=\"btn btn-primary btn-sm\" style=\"display: none;\" type=\"button\" onclick=\"this.form.submit()\">
                                            <i class=\"fas fa-search text-white\"></i>
                                        </button>
                                        {% if app.request.request.get(\"SEARCH\") is defined and app.request.request.get(\"SEARCH\") != \"\" %}
                                            <a class=\"btn btn-danger btn-sm\" type=\"submit\" href=\"{{ path(\"users\") }}\">
                                                <i class=\"fas fa-eraser text-white\"></i>
                                            </a>
                                        {% endif %}
                                        <a class=\"btn btn-success btn-sm\" type=\"button\" href=\"{{ path(\"users_add\") }}\">
                                            <i class=\"fas fa-user-plus text-white\"></i>
                                        </a>
                                        <a class=\"btn btn-primary btn-sm\" type=\"button\" data-toggle=\"collapse\" href=\"#filterOptions\" aria-expanded=\"false\" aria-controls=\"filterOptions\">
                                            <i class=\"fas fa-filter text-white\"></i>
                                        </a>
                                        <a class=\"btn btn-warning btn-sm\" type=\"button\" onclick=\"\$('#modal-actionOnMany').modal();\">
                                            <i class=\"fas fa-th text-white\"></i>
                                        </a>
                                    </form>
                                </div>
                            </div>
                            <div class=\"collapse bg-{{ userSettings.theme }} text-{{ userSettings.color }}\" id=\"filterOptions\" style=\"width: 100%;\">
                                <div class=\"card card-body bg-{{ userSettings.theme }} text-{{ userSettings.color }}\">
                                    <h5>Filtrage des données</h5>
                                </div>
                            </div>
                        </div>
                        <script>
                            let tableCount = 0;
                            let activeTab = 1;
                            let usersId = [];

                            function moveArray(id, move) {
                                if (move === '-' && id>=1) {
                                    if (id.toString() === \"1\") {
                                        document.getElementById(\"btnPreviousTab\").removeAttribute(\"class\");
                                        document.getElementById(\"btnPreviousTab\").setAttribute(\"class\", \"page-item disabled\");
                                    } else {
                                        document.getElementById(\"btnPreviousTab\").removeAttribute(\"class\");
                                        document.getElementById(\"btnPreviousTab\").setAttribute(\"class\", \"page-item\");
                                        document.getElementById(\"btnNextTab\").removeAttribute(\"class\");
                                        document.getElementById(\"btnNextTab\").setAttribute(\"class\", \"page-item\");
                                    }
                                    showTable(id);
                                } else if (move === '+' && id<=tableCount) {
                                    if (id.toString() === tableCount.toString()) {
                                        document.getElementById(\"btnNextTab\").removeAttribute(\"class\");
                                        document.getElementById(\"btnNextTab\").setAttribute(\"class\", \"page-item disabled\");
                                    } else {
                                        document.getElementById(\"btnPreviousTab\").removeAttribute(\"class\");
                                        document.getElementById(\"btnPreviousTab\").setAttribute(\"class\", \"page-item\");
                                        document.getElementById(\"btnNextTab\").removeAttribute(\"class\");
                                        document.getElementById(\"btnNextTab\").setAttribute(\"class\", \"page-item\");
                                    }
                                    showTable(id);
                                }
                                \$('html').animate({scrollTop: 0}, \"slow\");
                            }

                            function showTable(id) {
                                for(let i=1; i<=tableCount; i++) {
                                    \$('#dataTable-' + i).slideUp(\"slow\");
                                    // document.getElementById(\"dataTable-\" + i).style.display = \"none\";
                                    if (tableCount <= 10) {
                                        document.getElementById(\"btnTab-\" + i).removeAttribute(\"class\");
                                        document.getElementById(\"btnTab-\" + i).setAttribute(\"class\", \"page-item\");
                                    }
                                }
                                \$('#dataTable-' + id).slideDown(\"slow\");
                                // document.getElementById(\"dataTable-\" + id).style.display = \"block\";
                                if (tableCount <= 10) {
                                    document.getElementById(\"btnTab-\" + id).setAttribute(\"class\", \"page-item active\");
                                }

                                if (id.toString() === \"1\") {
                                    document.getElementById(\"btnPreviousTab\").removeAttribute(\"class\");
                                    document.getElementById(\"btnPreviousTab\").setAttribute(\"class\", \"page-item disabled\");
                                } else if (id.toString() === tableCount.toString()) {
                                    document.getElementById(\"btnNextTab\").removeAttribute(\"class\");
                                    document.getElementById(\"btnNextTab\").setAttribute(\"class\", \"page-item disabled\");
                                } else {
                                    document.getElementById(\"btnPreviousTab\").removeAttribute(\"class\");
                                    document.getElementById(\"btnPreviousTab\").setAttribute(\"class\", \"page-item\");
                                    document.getElementById(\"btnNextTab\").removeAttribute(\"class\");
                                    document.getElementById(\"btnNextTab\").setAttribute(\"class\", \"page-item\");
                                }

                                activeTab = id;
                                \$('html').animate({scrollTop: 0}, \"slow\");
                            }

                            function actionOnAll(state) {
                                if (state) {
                                    usersId.forEach(function(user) {
                                        \$('#checkbox-' + user).prop(\"checked\", true);
                                    })
                                } else {
                                    usersId.forEach(function(user) {
                                        \$('#checkbox-' + user).prop(\"checked\", false);
                                    })
                                }
                            }
                        </script>
                        <form action=\"{{ path(\"user_executeAction\") }}\" method=\"POST\">
                        {% for key,table in data %}
                            <script>tableCount = parseInt(\"{{ key+1 }}\")</script>
                            <div class=\"table-responsive table mt-2\" id=\"dataTable-{{ key+1 }}\" role=\"grid\" aria-describedby=\"dataTable_info\" style=\"display: {% if key == 0 %}block{% else %}none{% endif %}\">
                                <table class=\"table my-0 text-{{ userSettings.color }}\" id=\"dataTable\">
                                    <thead>
                                        <tr>
                                            <th style=\"width: 5%; text-align: center\">
                                                <div class=\"custom-control custom-checkbox\">
                                                    <input type=\"checkbox\" class=\"custom-control-input\" name=\"all\" id=\"checkbox-all\" onchange=\"actionOnAll(this.checked)\">
                                                    <label class=\"custom-control-label\" for=\"checkbox-all\"></label>
                                                </div>
                                            </th>
                                            <th style=\"width: 10%;\">Identifiant</th>
                                            <th style=\"width: 15%;\">Pseudo</th>
                                            <th style=\"width: 20%;\">Prénom</th>
                                            <th style=\"width: 20%;\">Nom</th>
                                            <th style=\"width: 30%; text-align: center;\">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    {% for user in table %}
                                        {% if user.id != app.user.id %}
                                            <script>usersId.push(\"{{ user.id }}\")</script>
                                        {% endif %}
                                        <tr>
                                            <td style=\"width: 5%; text-align: center\">
                                                <div class=\"custom-control custom-checkbox\">
                                                    <input type=\"checkbox\" class=\"custom-control-input\" name=\"selected[][{{ user.id }}]\" id=\"checkbox-{{ user.id }}\" {% if user.id == app.user.id %}disabled{% endif %} onchange=\"\$('#checkbox-all').prop('indeterminate', true)\">
                                                    <label class=\"custom-control-label\" for=\"checkbox-{{ user.id }}\"></label>
                                                </div>
                                            </td>
                                            <td style=\"width: 10%;\">{{ user.username }}</td>
                                            <td style=\"width: 15%;\">{{ user.pseudo }}</td>
                                            <td style=\"width: 20%;\">{{ user.firstname|capitalize }}</td>
                                            <td style=\"width: 20%;\">{{ user.lastname|upper }}</td>
                                            <td style=\"width: 30%; text-align: center;\">
                                                <a class=\"btn btn-warning btn-sm\" href=\"{{ path(\"users_edit\", {\"id\" : user.id}) }}\">
                                                    <i class=\"fas fa-user-edit text-white\"></i>
                                                </a>
                                                <a class=\"btn btn-danger btn-sm\" role=\"button\" onclick=\"\$('#modal-{{ user.id }}-delete').modal();\">
                                                    <i class=\"fas fa-user-minus text-white\"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <div class=\"modal fade\" id=\"modal-{{ user.id }}-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog modal-dialog-centered\">
                                                <div class=\"modal-content bg-{{ userSettings.theme }} text-{{ userSettings.color }}\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title\">Confirmation de suppression</h5>
                                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                            <span aria-hidden=\"true\">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <p>Êtes-vous sur de vouloir supprimé l'utilisateur nommé : \"{{ user.firstname|capitalize }} {{ user.lastname|upper }}\" ?</p>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                                        <a type=\"button\" class=\"btn btn-danger\" href=\"{{ path(\"user_delete\", { \"id\" : user.id }) }}\">Supprimer</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        {% endfor %}
                        <div class=\"modal fade\" id=\"modal-actionOnMany\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog modal-dialog-centered\">
                                <div class=\"modal-content bg-{{ userSettings.theme }} text-{{ userSettings.color }}\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\">Sélectionner une action</h5>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body\">
                                        <div class=\"form-group\">
                                            <label for=\"actionOnAllSelect\">
                                                <strong>Action à effectuer</strong>
                                            </label>
                                            <select class=\"form-control\" id=\"actionOnAllSelect\" name=\"action\" required>
                                                <option value=\"\" disabled readonly=\"true\" selected>-- Sélectionner une option</option>
                                                <option value=\"DELETE\">Supprimer les utilisateurs</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                        <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                        <div class=\"row\">
                            <div class=\"col-md-6 align-self-center\">
                                <p id=\"dataTable_info\" class=\"dataTables_info text-{{ userSettings.color }}\" role=\"status\" aria-live=\"polite\">
                                    Affichage de {{ count }} utilisateur{% if count > 1 %}s{% endif %}
                                </p>
                            </div>
                            <div class=\"col-md-6\">
                                <nav class=\"d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers\">
                                    <ul class=\"pagination\">
                                        <li class=\"page-item disabled\" id=\"btnPreviousTab\" onclick=\"moveArray(activeTab-1, '-')\">
                                            <a class=\"page-link\" id=\"btnPreviousTab\" role=\"button\">
                                                <span aria-hidden=\"true\">«</span>
                                            </a>
                                        </li>
                                        {% if data|length <= 10 %}
                                            {% for key,table in data %}
                                                <li class=\"page-item {% if key == 0 %}active{% endif %}\" id=\"btnTab-{{ key+1 }}\">
                                                    <a class=\"page-link\" role=\"button\" onclick=\"showTable('{{ key+1 }}')\">{{ key+1 }}</a>
                                                </li>
                                            {% endfor %}
                                        {% endif %}
                                        <li class=\"page-item\" id=\"btnNextTab\" onclick=\"moveArray(activeTab+1, '+')\">
                                            <a class=\"page-link\">
                                                <span aria-hidden=\"true\">»</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
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
{# Fin de la gestion de la page #}", "dashboard/user/index.html.twig", "/Users/romainmunier/Documents/GitHub/ptuts3s4/templates/dashboard/user/index.html.twig");
    }
}
