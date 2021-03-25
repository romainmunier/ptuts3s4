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

/* dashboard/mailinglist/edit.html.twig */
class __TwigTemplate_0cc261684c461735235156e0cd329b295e4243d52ff53100aa686e6e1d20a811 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/mailinglist/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/mailinglist/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/mailinglist/edit.html.twig", 1);
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
        $this->loadTemplate("includes/dashboard/sidebar.html.twig", "dashboard/mailinglist/edit.html.twig", 8)->display($context);
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
        $this->loadTemplate("includes/dashboard/navbar.html.twig", "dashboard/mailinglist/edit.html.twig", 11)->display($context);
        // line 12
        echo "            <div class=\"container-fluid\">
                <h3 class=\"text-";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 13, $this->source); })()), "color", [], "any", false, false, false, 13), "html", null, true);
        echo " mb-0\">Modification de la liste : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mailing"]) || array_key_exists("mailing", $context) ? $context["mailing"] : (function () { throw new RuntimeError('Variable "mailing" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h3>
                <br>
                <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mailing_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["mailing"]) || array_key_exists("mailing", $context) ? $context["mailing"] : (function () { throw new RuntimeError('Variable "mailing" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
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
        if (((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Type", [], "array", true, true, false, 29) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "Type", [], "array", false, false, false, 29), "HYBRID"))) || (array_key_exists("mailing", $context) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["mailing"]) || array_key_exists("mailing", $context) ? $context["mailing"] : (function () { throw new RuntimeError('Variable "mailing" does not exist.', 29, $this->source); })()), "type", [], "any", false, false, false, 29), "HYBRID"))))) {
            echo "selected";
        }
        echo ">Liste hybride</option>
                                            <option value=\"MAIL\" ";
        // line 30
        if (((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Type", [], "array", true, true, false, 30) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "Type", [], "array", false, false, false, 30), "MAIL"))) || (array_key_exists("mailing", $context) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["mailing"]) || array_key_exists("mailing", $context) ? $context["mailing"] : (function () { throw new RuntimeError('Variable "mailing" does not exist.', 30, $this->source); })()), "type", [], "any", false, false, false, 30), "MAIL"))))) {
            echo "selected";
        }
        echo ">Liste d'adresses mail</option>
                                            <option value=\"PHONE\" ";
        // line 31
        if (((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Type", [], "array", true, true, false, 31) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "Type", [], "array", false, false, false, 31), "PHONE"))) || (array_key_exists("mailing", $context) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["mailing"]) || array_key_exists("mailing", $context) ? $context["mailing"] : (function () { throw new RuntimeError('Variable "mailing" does not exist.', 31, $this->source); })()), "type", [], "any", false, false, false, 31), "PHONE"))))) {
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
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Name", [], "array", true, true, false, 50)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Name", [], "array", false, false, false, 50), twig_get_attribute($this->env, $this->source, (isset($context["mailing"]) || array_key_exists("mailing", $context) ? $context["mailing"] : (function () { throw new RuntimeError('Variable "mailing" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50))) : (twig_get_attribute($this->env, $this->source, (isset($context["mailing"]) || array_key_exists("mailing", $context) ? $context["mailing"] : (function () { throw new RuntimeError('Variable "mailing" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50))), "html", null, true);
        echo "\" required minlength=\"2\" maxlength=\"128\" oninput=\"checkRegExp(this.id, 'NAME')\">
                                        <div class=\"valid-feedback\">
                                            Ce nom semble correct !
                                        </div>
                                        <div class=\"invalid-feedback\">
                                            Le nom de la liste ne respecte pas les spécifications demandées.
                                        </div>
                                    </div>
                                    <div class=\"custom-control custom-switch\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"useSumup\" ";
        // line 59
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["mailing"]) || array_key_exists("mailing", $context) ? $context["mailing"] : (function () { throw new RuntimeError('Variable "mailing" does not exist.', 59, $this->source); })()), "sumup", [], "any", false, false, false, 59))) {
            echo "checked";
        }
        echo " onchange=\"onSumupSwitcheChange(this.checked)\">
                                        <label class=\"custom-control-label text-";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 60, $this->source); })()), "color", [], "any", false, false, false, 60), "html", null, true);
        echo "\" for=\"useSumup\" name=\"useSumup\">Utiliser une description</label>
                                    </div>
                                    <br>
                                    <div class=\"form-group\" id=\"sumupDiv\" ";
        // line 63
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["mailing"]) || array_key_exists("mailing", $context) ? $context["mailing"] : (function () { throw new RuntimeError('Variable "mailing" does not exist.', 63, $this->source); })()), "sumup", [], "any", false, false, false, 63))) {
            echo "style=\"display: none\"";
        }
        echo ">
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
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Sumup", [], "array", true, true, false, 67)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Sumup", [], "array", false, false, false, 67), twig_get_attribute($this->env, $this->source, (isset($context["mailing"]) || array_key_exists("mailing", $context) ? $context["mailing"] : (function () { throw new RuntimeError('Variable "mailing" does not exist.', 67, $this->source); })()), "sumup", [], "any", false, false, false, 67))) : (twig_get_attribute($this->env, $this->source, (isset($context["mailing"]) || array_key_exists("mailing", $context) ? $context["mailing"] : (function () { throw new RuntimeError('Variable "mailing" does not exist.', 67, $this->source); })()), "sumup", [], "any", false, false, false, 67))), "html", null, true);
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
            if (array_key_exists("data", $context)) {
                // line 91
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Users", [], "array", true, true, false, 91) && !twig_in_filter(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 91), twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 91, $this->source); })()), "Users", [], "array", false, false, false, 91)))) {
                    // line 92
                    echo "                                                <div class=\"list-group-item\" id=\"unsassigned-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 92), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 92), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 92), "html", null, true);
                    echo "</div>
                                            ";
                }
                // line 94
                echo "                                        ";
            } else {
                // line 95
                echo "                                            ";
                if (!twig_in_filter(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 95), twig_get_attribute($this->env, $this->source, (isset($context["mailing"]) || array_key_exists("mailing", $context) ? $context["mailing"] : (function () { throw new RuntimeError('Variable "mailing" does not exist.', 95, $this->source); })()), "list", [], "any", false, false, false, 95))) {
                    // line 96
                    echo "                                                <div class=\"list-group-item\" id=\"unsassigned-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 96), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 96), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 96), "html", null, true);
                    echo "</div>
                                            ";
                }
                // line 98
                echo "                                        ";
            }
            // line 99
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                                </div>
                                <div id=\"assigned-user\" class=\"list-group col\">
                                    ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Users", [], "array", true, true, false, 102)) {
            // line 103
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 103, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 104
                echo "                                            ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 104), twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 104, $this->source); })()), "Users", [], "array", false, false, false, 104))) {
                    // line 105
                    echo "                                                <div class=\"list-group-item\" id=\"assigned-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 105), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 105), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 105), "html", null, true);
                    echo "</div>
                                            ";
                }
                // line 107
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                                    ";
        }
        // line 109
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "list", [], "any", true, true, false, 109)) {
            // line 110
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 110, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 111
                echo "                                            ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 111), twig_get_attribute($this->env, $this->source, (isset($context["mailing"]) || array_key_exists("mailing", $context) ? $context["mailing"] : (function () { throw new RuntimeError('Variable "mailing" does not exist.', 111, $this->source); })()), "list", [], "any", false, false, false, 111))) {
                    // line 112
                    echo "                                                <div class=\"list-group-item\" id=\"assigned-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 112), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 112), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 112), "html", null, true);
                    echo "</div>
                                            ";
                }
                // line 114
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                                    ";
        }
        // line 116
        echo "                                </div>
                                <div id=\"usersItem\">

                                </div>
                            </div>
                        </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-sm btn-primary\">Modifier la liste</button>
                </form>
            </div>
        </div>
        <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard/Sortable.js"), "html", null, true);
        echo "\"></script>
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"text-center my-auto copyright text-";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 130, $this->source); })()), "color", [], "any", false, false, false, 130), "html", null, true);
        echo "\">
                    <span>Copyright © CEFC Developers Team ";
        // line 131
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
        return "dashboard/mailinglist/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 131,  432 => 130,  426 => 127,  413 => 116,  410 => 115,  404 => 114,  394 => 112,  391 => 111,  386 => 110,  383 => 109,  380 => 108,  374 => 107,  364 => 105,  361 => 104,  356 => 103,  354 => 102,  350 => 100,  344 => 99,  341 => 98,  331 => 96,  328 => 95,  325 => 94,  315 => 92,  312 => 91,  309 => 90,  305 => 89,  300 => 87,  297 => 86,  291 => 82,  289 => 81,  283 => 80,  278 => 78,  272 => 77,  268 => 76,  252 => 67,  246 => 64,  240 => 63,  234 => 60,  228 => 59,  212 => 50,  206 => 47,  199 => 45,  194 => 43,  188 => 42,  184 => 41,  169 => 31,  163 => 30,  157 => 29,  150 => 27,  144 => 24,  137 => 22,  132 => 20,  126 => 19,  122 => 18,  116 => 15,  109 => 13,  106 => 12,  104 => 11,  93 => 9,  91 => 8,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
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
                <h3 class=\"text-{{ userSettings.color}} mb-0\">Modification de la liste : {{ mailing.name }}</h3>
                <br>
                <form action=\"{{ path(\"mailing_edit\", {\"id\" : mailing.id}) }}\" method=\"POST\" onsubmit=\"checkAddListForm(); return false;\" id=\"addListForm\">
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
                                            <option value=\"HYBRID\" {% if data[\"Type\"] is defined and data[\"Type\"] == \"HYBRID\" or mailing is defined and mailing.type == \"HYBRID\" %}selected{% endif %}>Liste hybride</option>
                                            <option value=\"MAIL\" {% if data[\"Type\"] is defined and data[\"Type\"] == \"MAIL\" or mailing is defined and mailing.type == \"MAIL\" %}selected{% endif %}>Liste d'adresses mail</option>
                                            <option value=\"PHONE\" {% if data[\"Type\"] is defined and data[\"Type\"] == \"PHONE\" or mailing is defined and mailing.type == \"PHONE\" %}selected{% endif %}>Liste de numéros de téléphones</option>
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
                                        <input class=\"form-control {% if errors[\"Name\"] is defined %}is-invalid{% endif %}\" type=\"text\" placeholder=\"Liste de diffusion ...\" id=\"name\" name=\"Name\" value=\"{{ data[\"Name\"]|default(mailing.name) }}\" required minlength=\"2\" maxlength=\"128\" oninput=\"checkRegExp(this.id, 'NAME')\">
                                        <div class=\"valid-feedback\">
                                            Ce nom semble correct !
                                        </div>
                                        <div class=\"invalid-feedback\">
                                            Le nom de la liste ne respecte pas les spécifications demandées.
                                        </div>
                                    </div>
                                    <div class=\"custom-control custom-switch\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"useSumup\" {% if mailing.sumup is not null %}checked{% endif%} onchange=\"onSumupSwitcheChange(this.checked)\">
                                        <label class=\"custom-control-label text-{{ userSettings.color }}\" for=\"useSumup\" name=\"useSumup\">Utiliser une description</label>
                                    </div>
                                    <br>
                                    <div class=\"form-group\" id=\"sumupDiv\" {% if mailing.sumup is null %}style=\"display: none\"{% endif %}>
                                        <label for=\"sumup\" class=\"text-{{ userSettings.color }}\">
                                            <strong>Description de la liste</strong>
                                        </label>
                                        <textarea class=\"form-control {% if errors[\"Sumup\"] is defined %}is-invalid{% endif %}\" name=\"Sumup\" id=\"sumup\" rows=\"3\" minlength=\"0\" maxlength=\"1024\">{{ data[\"Sumup\"]|default(mailing.sumup) }}</textarea>
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
                                        {% if data is defined %}
                                            {% if data[\"Users\"] is defined and user.id not in data[\"Users\"] %}
                                                <div class=\"list-group-item\" id=\"unsassigned-{{ user.id }}\">{{ user.firstname }} {{ user.lastname }}</div>
                                            {% endif %}
                                        {% else %}
                                            {% if user.id not in mailing.list %}
                                                <div class=\"list-group-item\" id=\"unsassigned-{{ user.id }}\">{{ user.firstname }} {{ user.lastname }}</div>
                                            {% endif %}
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
                                    {% if mailing.list is defined %}
                                        {% for user in users %}
                                            {% if user.id in mailing.list %}
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
                    <button type=\"submit\" class=\"btn btn-sm btn-primary\">Modifier la liste</button>
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
{# Fin de la gestion de la page #}", "dashboard/mailinglist/edit.html.twig", "/Users/romainmunier/Documents/GitHub/ptuts3s4/templates/dashboard/mailinglist/edit.html.twig");
    }
}
