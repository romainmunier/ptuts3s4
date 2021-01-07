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

/* dashboard/mailinglist/add.html.twig */
class __TwigTemplate_70fcbfe4269f1324db8dd0ae052c6b8b55a85cbe754fff6a00d12cf9134df028 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/mailinglist/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/mailinglist/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/mailinglist/add.html.twig", 1);
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
        $this->loadTemplate("includes/dashboard/sidebar.html.twig", "dashboard/mailinglist/add.html.twig", 8)->display($context);
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
        $this->loadTemplate("includes/dashboard/navbar.html.twig", "dashboard/mailinglist/add.html.twig", 11)->display($context);
        // line 12
        echo "            <div class=\"container-fluid\">
                <h3 class=\"text-";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 13, $this->source); })()), "color", [], "any", false, false, false, 13), "html", null, true);
        echo " mb-0\">Créer une nouvelle liste</h3>
                <br>
                <form action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mailing_add");
        echo "\" method=\"POST\" onsubmit=\"checkAddListForm(); return false;\" id=\"addListForm\">
                    <div class=\"row\">
                        <div class=\"col-lg-4\">
                            <div class=\"card shadow mb-3 border-";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 18, $this->source); })()), "color", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
                                <div class=\"card-header py-3 bg-";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 19, $this->source); })()), "theme", [], "any", false, false, false, 19), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 19, $this->source); })()), "color", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
                                    <p class=\"text-";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 20, $this->source); })()), "color", [], "any", false, false, false, 20), "html", null, true);
        echo " m-0 font-weight-bold\">Configuration</p>
                                </div>
                                <div class=\"card-body bg-";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 22, $this->source); })()), "theme", [], "any", false, false, false, 22), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 22, $this->source); })()), "color", [], "any", false, false, false, 22), "html", null, true);
        echo "\">
                                    <div class=\"form-group\">
                                        <label for=\"type\" class=\"text-";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 24, $this->source); })()), "color", [], "any", false, false, false, 24), "html", null, true);
        echo "\">
                                            <strong>Type de liste</strong>
                                        </label>
                                        <select class=\"form-control ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Type", [], "array", true, true, false, 27)) {
            echo "is-invalid";
        }
        echo "\" id=\"type\" name=\"Type\" required>
                                            <option value=\"\" readonly disabled selected>-- Sélectionner un type</option>
                                            <option value=\"HYBRID\" ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Type", [], "array", true, true, false, 29) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "Type", [], "array", false, false, false, 29), "HYBRID")))) {
            echo "selected";
        }
        echo ">Liste hybride</option>
                                            <option value=\"MAIL\" ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Type", [], "array", true, true, false, 30) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "Type", [], "array", false, false, false, 30), "MAIL")))) {
            echo "selected";
        }
        echo ">Liste d'adresses mail</option>
                                            <option value=\"PHONE\" ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Type", [], "array", true, true, false, 31) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "Type", [], "array", false, false, false, 31), "PHONE")))) {
            echo "selected";
        }
        echo ">Liste de numéros de téléphones</option>
                                        </select>
                                        <div class=\"invalid-feedback\">
                                            Le type sélectionné est invalide.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-8\">
                            <div class=\"card shadow mb-3 border-";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 41, $this->source); })()), "color", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
                                <div class=\"card-header py-3 bg-";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 42, $this->source); })()), "theme", [], "any", false, false, false, 42), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 42, $this->source); })()), "color", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
                                    <p class=\"text-";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 43, $this->source); })()), "color", [], "any", false, false, false, 43), "html", null, true);
        echo " m-0 font-weight-bold\">Informations sur la liste</p>
                                </div>
                                <div class=\"card-body bg-";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 45, $this->source); })()), "theme", [], "any", false, false, false, 45), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 45, $this->source); })()), "color", [], "any", false, false, false, 45), "html", null, true);
        echo "\">
                                    <div class=\"form-group\">
                                        <label for=\"name\" class=\"text-";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 47, $this->source); })()), "color", [], "any", false, false, false, 47), "html", null, true);
        echo "\">
                                            <strong>Nom de la liste</strong>
                                        </label>
                                        <input class=\"form-control ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Name", [], "array", true, true, false, 50)) {
            echo "is-invalid";
        }
        echo "\" type=\"text\" placeholder=\"Liste de diffusion ...\" id=\"name\" name=\"Name\" value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Name", [], "array", true, true, false, 50)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Name", [], "array", false, false, false, 50), "")) : ("")), "html", null, true);
        echo "\" required minlength=\"2\" maxlength=\"128\" oninput=\"checkRegExp(this.id, 'NAME')\">
                                        <div class=\"valid-feedback\">
                                            Ce nom semble correct !
                                        </div>
                                        <div class=\"invalid-feedback\">
                                            Le nom de la liste ne respecte pas les spécifications demandées.
                                        </div>
                                    </div>
                                    <div class=\"custom-control custom-switch\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"useSumup\" checked onchange=\"onSumupSwitcheChange(this.checked)\">
                                        <label class=\"custom-control-label text-";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 60, $this->source); })()), "color", [], "any", false, false, false, 60), "html", null, true);
        echo "\" for=\"useSumup\" name=\"useSumup\">Utiliser une description</label>
                                    </div>
                                    <br>
                                    <div class=\"form-group\" id=\"sumupDiv\">
                                        <label for=\"sumup\" class=\"text-";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 64, $this->source); })()), "color", [], "any", false, false, false, 64), "html", null, true);
        echo "\">
                                            <strong>Description de la liste</strong>
                                        </label>
                                        <textarea class=\"form-control ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Sumup", [], "array", true, true, false, 67)) {
            echo "is-invalid";
        }
        echo "\" name=\"Sumup\" id=\"sumup\" rows=\"3\" minlength=\"0\" maxlength=\"1024\">";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Sumup", [], "array", true, true, false, 67)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Sumup", [], "array", false, false, false, 67), "")) : ("")), "html", null, true);
        echo "</textarea>
                                        <div class=\"invalid-feedback\">
                                            La description semble éronnée.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card shadow mb-3 border-";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 76, $this->source); })()), "color", [], "any", false, false, false, 76), "html", null, true);
        echo "\">
                        <div class=\"card-header py-3 bg-";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 77, $this->source); })()), "theme", [], "any", false, false, false, 77), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 77, $this->source); })()), "color", [], "any", false, false, false, 77), "html", null, true);
        echo "\">
                            <p class=\"text-";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 78, $this->source); })()), "color", [], "any", false, false, false, 78), "html", null, true);
        echo " m-0 font-weight-bold\">Gestion des destinataires</p>
                        </div>
                        <div class=\"card-body bg-";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 80, $this->source); })()), "theme", [], "any", false, false, false, 80), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 80, $this->source); })()), "color", [], "any", false, false, false, 80), "html", null, true);
        echo "\">
                            ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Users", [], "array", true, true, false, 81)) {
            // line 82
            echo "                                <div class=\"alert alert-danger\" role=\"alert\">
                                    Votre liste d'utilisateur a mal été définie. Veuillez réessayer.
                                </div>
                            ";
        }
        // line 86
        echo "                            <div id=\"shared-lists\" class=\"row\">
                                <h4 class=\"col-12 text-";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 87, $this->source); })()), "color", [], "any", false, false, false, 87), "html", null, true);
        echo "\">Ajouter des utilisateurs à la liste</h4>
                                <div id=\"unassigned-user\" class=\"list-group col\" style=\"height: 20rem; overflow-y: scroll\">
                                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 89, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 90
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Users", [], "array", true, true, false, 90) && !twig_in_filter(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 90), twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 90, $this->source); })()), "Users", [], "array", false, false, false, 90)))) {
                // line 91
                echo "                                            <div class=\"list-group-item\" id=\"unsassigned-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 91), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 91), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 91), "html", null, true);
                echo "</div>
                                        ";
            } else {
                // line 93
                echo "                                            <div class=\"list-group-item\" id=\"unsassigned-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 93), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 93), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 93), "html", null, true);
                echo "</div>
                                        ";
            }
            // line 95
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                                </div>
                                <div id=\"assigned-user\" class=\"list-group col\">
                                    ";
        // line 98
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Users", [], "array", true, true, false, 98)) {
            // line 99
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 99, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 100
                echo "                                            ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 100), twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 100, $this->source); })()), "Users", [], "array", false, false, false, 100))) {
                    // line 101
                    echo "                                                <div class=\"list-group-item\" id=\"assigned-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 101), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 101), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 101), "html", null, true);
                    echo "</div>
                                            ";
                }
                // line 103
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                                    ";
        }
        // line 105
        echo "                                </div>
                                <div id=\"usersItem\">

                                </div>
                            </div>
                        </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-sm btn-primary\">Créer la liste</button>
                </form>
            </div>
        </div>
        <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard/Sortable.js"), "html", null, true);
        echo "\"></script>
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"text-center my-auto copyright text-";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 119, $this->source); })()), "color", [], "any", false, false, false, 119), "html", null, true);
        echo "\">
                    <span>Copyright © CEFC Developers Team ";
        // line 120
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
        return "dashboard/mailinglist/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 120,  378 => 119,  372 => 116,  359 => 105,  356 => 104,  350 => 103,  340 => 101,  337 => 100,  332 => 99,  330 => 98,  326 => 96,  320 => 95,  310 => 93,  300 => 91,  297 => 90,  293 => 89,  288 => 87,  285 => 86,  279 => 82,  277 => 81,  271 => 80,  266 => 78,  260 => 77,  256 => 76,  240 => 67,  234 => 64,  227 => 60,  210 => 50,  204 => 47,  197 => 45,  192 => 43,  186 => 42,  182 => 41,  167 => 31,  161 => 30,  155 => 29,  148 => 27,  142 => 24,  135 => 22,  130 => 20,  124 => 19,  120 => 18,  114 => 15,  109 => 13,  106 => 12,  104 => 11,  93 => 9,  91 => 8,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
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
                <h3 class=\"text-{{ userSettings.color}} mb-0\">Créer une nouvelle liste</h3>
                <br>
                <form action=\"{{ path(\"mailing_add\") }}\" method=\"POST\" onsubmit=\"checkAddListForm(); return false;\" id=\"addListForm\">
                    <div class=\"row\">
                        <div class=\"col-lg-4\">
                            <div class=\"card shadow mb-3 border-{{ userSettings.color }}\">
                                <div class=\"card-header py-3 bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                                    <p class=\"text-{{ userSettings.color }} m-0 font-weight-bold\">Configuration</p>
                                </div>
                                <div class=\"card-body bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                                    <div class=\"form-group\">
                                        <label for=\"type\" class=\"text-{{ userSettings.color }}\">
                                            <strong>Type de liste</strong>
                                        </label>
                                        <select class=\"form-control {% if errors[\"Type\"] is defined %}is-invalid{% endif %}\" id=\"type\" name=\"Type\" required>
                                            <option value=\"\" readonly disabled selected>-- Sélectionner un type</option>
                                            <option value=\"HYBRID\" {% if data[\"Type\"] is defined and data[\"Type\"] == \"HYBRID\" %}selected{% endif %}>Liste hybride</option>
                                            <option value=\"MAIL\" {% if data[\"Type\"] is defined and data[\"Type\"] == \"MAIL\" %}selected{% endif %}>Liste d'adresses mail</option>
                                            <option value=\"PHONE\" {% if data[\"Type\"] is defined and data[\"Type\"] == \"PHONE\" %}selected{% endif %}>Liste de numéros de téléphones</option>
                                        </select>
                                        <div class=\"invalid-feedback\">
                                            Le type sélectionné est invalide.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-8\">
                            <div class=\"card shadow mb-3 border-{{ userSettings.color }}\">
                                <div class=\"card-header py-3 bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                                    <p class=\"text-{{ userSettings.color }} m-0 font-weight-bold\">Informations sur la liste</p>
                                </div>
                                <div class=\"card-body bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                                    <div class=\"form-group\">
                                        <label for=\"name\" class=\"text-{{ userSettings.color }}\">
                                            <strong>Nom de la liste</strong>
                                        </label>
                                        <input class=\"form-control {% if errors[\"Name\"] is defined %}is-invalid{% endif %}\" type=\"text\" placeholder=\"Liste de diffusion ...\" id=\"name\" name=\"Name\" value=\"{{ data[\"Name\"]|default(\"\") }}\" required minlength=\"2\" maxlength=\"128\" oninput=\"checkRegExp(this.id, 'NAME')\">
                                        <div class=\"valid-feedback\">
                                            Ce nom semble correct !
                                        </div>
                                        <div class=\"invalid-feedback\">
                                            Le nom de la liste ne respecte pas les spécifications demandées.
                                        </div>
                                    </div>
                                    <div class=\"custom-control custom-switch\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"useSumup\" checked onchange=\"onSumupSwitcheChange(this.checked)\">
                                        <label class=\"custom-control-label text-{{ userSettings.color }}\" for=\"useSumup\" name=\"useSumup\">Utiliser une description</label>
                                    </div>
                                    <br>
                                    <div class=\"form-group\" id=\"sumupDiv\">
                                        <label for=\"sumup\" class=\"text-{{ userSettings.color }}\">
                                            <strong>Description de la liste</strong>
                                        </label>
                                        <textarea class=\"form-control {% if errors[\"Sumup\"] is defined %}is-invalid{% endif %}\" name=\"Sumup\" id=\"sumup\" rows=\"3\" minlength=\"0\" maxlength=\"1024\">{{ data[\"Sumup\"]|default(\"\") }}</textarea>
                                        <div class=\"invalid-feedback\">
                                            La description semble éronnée.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card shadow mb-3 border-{{ userSettings.color }}\">
                        <div class=\"card-header py-3 bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                            <p class=\"text-{{ userSettings.color }} m-0 font-weight-bold\">Gestion des destinataires</p>
                        </div>
                        <div class=\"card-body bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                            {% if errors[\"Users\"] is defined %}
                                <div class=\"alert alert-danger\" role=\"alert\">
                                    Votre liste d'utilisateur a mal été définie. Veuillez réessayer.
                                </div>
                            {% endif %}
                            <div id=\"shared-lists\" class=\"row\">
                                <h4 class=\"col-12 text-{{ userSettings.color }}\">Ajouter des utilisateurs à la liste</h4>
                                <div id=\"unassigned-user\" class=\"list-group col\" style=\"height: 20rem; overflow-y: scroll\">
                                    {% for user in users %}
                                        {% if data[\"Users\"] is defined and user.id not in data[\"Users\"] %}
                                            <div class=\"list-group-item\" id=\"unsassigned-{{ user.id }}\">{{ user.firstname }} {{ user.lastname }}</div>
                                        {% else %}
                                            <div class=\"list-group-item\" id=\"unsassigned-{{ user.id }}\">{{ user.firstname }} {{ user.lastname }}</div>
                                        {% endif %}
                                    {% endfor %}
                                </div>
                                <div id=\"assigned-user\" class=\"list-group col\">
                                    {% if data[\"Users\"] is defined %}
                                        {% for user in users %}
                                            {% if user.id in data[\"Users\"] %}
                                                <div class=\"list-group-item\" id=\"assigned-{{ user.id }}\">{{ user.firstname }} {{ user.lastname }}</div>
                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}
                                </div>
                                <div id=\"usersItem\">

                                </div>
                            </div>
                        </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-sm btn-primary\">Créer la liste</button>
                </form>
            </div>
        </div>
        <script src=\"{{ asset(\"js/dashboard/Sortable.js\") }}\"></script>
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"text-center my-auto copyright text-{{ userSettings.color }}\">
                    <span>Copyright © CEFC Developers Team {{ date(\"Y\")|date(\"Y\") }}</span>
                </div>
            </div>
        </footer>
        {% endblock %}
{# Fin de la gestion de la page #}", "dashboard/mailinglist/add.html.twig", "C:\\Users\\romainmunier\\Documents\\GitHub\\ptuts3s4\\templates\\dashboard\\mailinglist\\add.html.twig");
    }
}
