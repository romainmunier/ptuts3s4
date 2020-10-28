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

/* dashboard/user/account.html.twig */
class __TwigTemplate_9bd4e39a111578e8bc73927e0ed1beedaddf98d9ad912b3c56475e61f90642ce extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/user/account.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/user/account.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/user/account.html.twig", 1);
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

        echo "Mon compte";
        
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
        $this->loadTemplate("includes/dashboard/sidebar.html.twig", "dashboard/user/account.html.twig", 8)->display($context);
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
        $this->loadTemplate("includes/dashboard/navbar.html.twig", "dashboard/user/account.html.twig", 11)->display($context);
        // line 12
        echo "            <div class=\"container-fluid\">
                <h3 class=\"text-";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 13, $this->source); })()), "color", [], "any", false, false, false, 13), "html", null, true);
        echo " mb-4\">Mon compte</h3>
                <form action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\" method=\"POST\">
                    <input type=\"hidden\" name=\"METHOD\" value=\"EDIT\">
                    <div class=\"row mb-3\">
                        <div class=\"col-lg-4\">
                            <div class=\"card mb-3 bg-";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 18, $this->source); })()), "theme", [], "any", false, false, false, 18), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 18, $this->source); })()), "color", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
                                <div class=\"card-body text-center shadow\">
                                    <img class=\"rounded-circle mb-3 mt-4\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/paladomas.jpg"), "html", null, true);
        echo "\" width=\"160\" height=\"160\">
                                    <div class=\"mb-3\">
                                        <button class=\"btn btn-primary btn-sm\" type=\"button\">Changer de photo</button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card shadow mb-4 border-";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 26, $this->source); })()), "color", [], "any", false, false, false, 26), "html", null, true);
        echo "\">
                                <div class=\"card-header py-3 bg-";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 27, $this->source); })()), "theme", [], "any", false, false, false, 27), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 27, $this->source); })()), "color", [], "any", false, false, false, 27), "html", null, true);
        echo "\">
                                    <h6 class=\"text-";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 28, $this->source); })()), "color", [], "any", false, false, false, 28), "html", null, true);
        echo " font-weight-bold m-0\">Droits utilisateur</h6>
                                </div>
                                <div class=\"card-body bg-";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 30, $this->source); })()), "theme", [], "any", false, false, false, 30), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 30, $this->source); })()), "color", [], "any", false, false, false, 30), "html", null, true);
        echo "\">
                                    <label>
                                        <strong>Gestion</strong>
                                    </label>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEADMIN\" name=\"Roles[]\" value=\"ROLE_ADMIN\" ";
        // line 35
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "roles", [], "any", false, false, false, 35))) {
            echo "checked";
        }
        echo " readonly disabled>
                                        <label class=\"custom-control-label\" for=\"checkbox_ROLEADMIN\">Administrateur</label>
                                    </div>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEDEVELOPERS\" name=\"Roles[]\" value=\"ROLE_DEVELOPERS\" ";
        // line 39
        if (twig_in_filter("ROLE_DEVELOPERS", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "roles", [], "any", false, false, false, 39))) {
            echo "checked";
        }
        echo " readonly disabled>
                                        <label class=\"custom-control-label\" for=\"checkbox_ROLEDEVELOPERS\">Développeur</label>
                                    </div>
                                    <br>
                                    <label>
                                        <strong>Édition</strong>
                                    </label>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEWRITER\" name=\"Roles[]\" value=\"ROLE_WRITER\" ";
        // line 47
        if (twig_in_filter("ROLE_WRITER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "roles", [], "any", false, false, false, 47))) {
            echo "checked";
        }
        echo " readonly disabled>
                                        <label class=\"custom-control-label\" for=\"checkbox_ROLEWRITER\">Écrivain</label>
                                    </div>
                                    <br>
                                    <label>
                                        <strong>Équipe</strong>
                                    </label>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEMEMBER\" name=\"Roles[]\" value=\"ROLE_MEMBER\" ";
        // line 55
        if (twig_in_filter("ROLE_MEMBER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "roles", [], "any", false, false, false, 55))) {
            echo "checked";
        }
        echo " readonly disabled>
                                        <label class=\"custom-control-label\" for=\"checkbox_ROLEMEMBER\">Adhérent</label>
                                    </div>
                                    <br>
                                    <label>
                                        <strong>Affichage</strong>
                                    </label>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEUSER\" name=\"Roles[]\" value=\"ROLE_USER\" ";
        // line 63
        if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "roles", [], "any", false, false, false, 63))) {
            echo "checked";
        }
        echo " readonly disabled>
                                        <label class=\"custom-control-label\" for=\"checkbox_ROLEUSER\">Utilisateur</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-8\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"card shadow mb-3 border-";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 72, $this->source); })()), "color", [], "any", false, false, false, 72), "html", null, true);
        echo "\">
                                        <div class=\"card-header py-3 bg-";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 73, $this->source); })()), "theme", [], "any", false, false, false, 73), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 73, $this->source); })()), "color", [], "any", false, false, false, 73), "html", null, true);
        echo "\">
                                            <p class=\"text-";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 74, $this->source); })()), "color", [], "any", false, false, false, 74), "html", null, true);
        echo " m-0 font-weight-bold\">Informations de connexion</p>
                                        </div>
                                        <div class=\"card-body bg-";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 76, $this->source); })()), "theme", [], "any", false, false, false, 76), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 76, $this->source); })()), "color", [], "any", false, false, false, 76), "html", null, true);
        echo "\">
                                            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\" id=\"SUCCESS_UPDATE_PASSWORD\" style=\"display: none;\">
                                                <strong>Information :</strong> Votre mot de passe a été mis à jour avec succès !
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">&times;</span>
                                                </button>
                                            </div>
                                            <div class=\"form-row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"form-group\">
                                                        <label for=\"username\">
                                                            <strong>Nom d'utilisateur</strong>
                                                        </label>
                                                        <input class=\"form-control\" type=\"text\" placeholder=\"\" id=\"username\" name=\"Username\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "username", [], "any", false, false, false, 89), "html", null, true);
        echo "\" readonly required>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6\">
                                                    <div class=\"form-group\">
                                                        <label for=\"password\">
                                                            <strong>Mot de passe</strong>
                                                        </label>
                                                        <button type=\"button\" class=\"btn btn-block btn-primary\" id=\"password\" onclick=\"\$('#modal-updatepassword').modal();\">Modifier mon mot de passe</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"card shadow border-";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 103, $this->source); })()), "color", [], "any", false, false, false, 103), "html", null, true);
        echo "\">
                                        <div class=\"card-header py-3 bg-";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 104, $this->source); })()), "theme", [], "any", false, false, false, 104), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 104, $this->source); })()), "color", [], "any", false, false, false, 104), "html", null, true);
        echo "\">
                                            <p class=\"text-";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 105, $this->source); })()), "color", [], "any", false, false, false, 105), "html", null, true);
        echo " m-0 font-weight-bold\">Informations de contact</p>
                                        </div>
                                        <div class=\"card-body bg-";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 107, $this->source); })()), "theme", [], "any", false, false, false, 107), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 107, $this->source); })()), "color", [], "any", false, false, false, 107), "html", null, true);
        echo "\">
                                            <div class=\"form-row\">
                                                <div class=\"col-lg-6\">
                                                    <label for=\"firstname\">
                                                        <strong>Prénom</strong>
                                                    </label>
                                                    <input class=\"form-control ";
        // line 113
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Firstname", [], "array", true, true, false, 113)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Firstname", [], "array", false, false, false, 113), "")) : ("")), "html", null, true);
        echo "\" type=\"text\" placeholder=\"John\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113), "firstname", [], "any", false, false, false, 113), "html", null, true);
        echo "\" name=\"Firstname\" id=\"firstname\" minlength=\"2\" maxlength=\"128\" required oninput=\"checkRegExp(this.id)\">
                                                    <div class=\"invalid-feedback\">
                                                        Votre prénom doit faire entre 2 et 128 caractères et doit être composé de lettres uniquement
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6\">
                                                    <label for=\"lastname\">
                                                        <strong>Nom</strong>
                                                    </label>
                                                    <input class=\"form-control ";
        // line 122
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Lastname", [], "array", true, true, false, 122)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Lastname", [], "array", false, false, false, 122), "")) : ("")), "html", null, true);
        echo "\" type=\"text\" placeholder=\"DOE\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "lastname", [], "any", false, false, false, 122), "html", null, true);
        echo "\" name=\"Lastname\" id=\"lastname\" minlength=\"2\" maxlength=\"128\" required oninput=\"checkRegExp(this.id)\">
                                                    <div class=\"invalid-feedback\">
                                                        Votre nom doit faire entre 2 et 128 caractères et doit être composé de lettres uniquement
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"card shadow border-";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 131, $this->source); })()), "color", [], "any", false, false, false, 131), "html", null, true);
        echo "\">
                                        <div class=\"card-header py-3 bg-";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 132, $this->source); })()), "theme", [], "any", false, false, false, 132), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 132, $this->source); })()), "color", [], "any", false, false, false, 132), "html", null, true);
        echo "\">
                                            <p class=\"text-";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 133, $this->source); })()), "color", [], "any", false, false, false, 133), "html", null, true);
        echo " m-0 font-weight-bold\">Paramètres sur les forums</p>
                                        </div>
                                        <div class=\"card-body bg-";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 135, $this->source); })()), "theme", [], "any", false, false, false, 135), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 135, $this->source); })()), "color", [], "any", false, false, false, 135), "html", null, true);
        echo "\">
                                            <div class=\"form-group\">
                                                <div class=\"custom-control custom-switch\">
                                                    <input class=\"custom-control-input\" type=\"checkbox\" name=\"usePseudo\" id=\"switch-usepseudo\" onchange=\"checkUsePseudo(this.checked)\" ";
        // line 138
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "user", [], "any", false, false, false, 138), "pseudo", [], "any", false, false, false, 138), null))) {
            echo "checked";
        }
        echo ">
                                                    <label class=\"custom-control-label\" for=\"switch-usepseudo\">
                                                        <strong>Utiliser un pseudo</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"pseudo\">
                                                    <strong>Pseudo utilisé</strong>
                                                </label>
                                                <input class=\"form-control ";
        // line 148
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Pseudo", [], "array", true, true, false, 148)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Pseudo", [], "array", false, false, false, 148), "")) : ("")), "html", null, true);
        echo "\" type=\"text\" placeholder=\"\" value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 148), "pseudo", [], "any", true, true, false, 148)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 148), "pseudo", [], "any", false, false, false, 148), "")) : ("")), "html", null, true);
        echo "\" name=\"Pseudo\" id=\"pseudo\" minlength=\"2\" maxlength=\"128\"  ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "user", [], "any", false, false, false, 148), "pseudo", [], "any", false, false, false, 148), null))) {
            echo "readonly";
        }
        echo ">
                                                <div class=\"invalid-feedback\">
                                                    Étant donné que vous avez choisi d'utiliser un pseudo, il faut le définir.
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <button class=\"btn btn-primary btn-sm\" type=\"submit\">Sauvegarder les informations</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"modal fade\" id=\"modal-updatepassword\" tabindex=\"-1\" aria-labelledby=\"UpdatePassword\" aria-hidden=\"true\" style=\"height: 90% !important;\">
            <div class=\"modal-dialog modal-dialog-centered modal-lg\">
                <div class=\"modal-content bg-";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 167, $this->source); })()), "theme", [], "any", false, false, false, 167), "html", null, true);
        echo "\" style=\"border: none; height: 90% !important;\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title text-";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 169, $this->source); })()), "color", [], "any", false, false, false, 169), "html", null, true);
        echo "\" id=\"exampleModalLabel\">Modifier mon mot de passe</h5>
                        <button type=\"button\" class=\"close text-";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 170, $this->source); })()), "color", [], "any", false, false, false, 170), "html", null, true);
        echo "\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <form action=\"#\" method=\"POST\" id=\"updatePasswordForm\" onsubmit=\"updatePassword(); return false;\">
                            <div class=\"form-group\">
                                <label for=\"oldPassword\">
                                    <strong>Ancien mot de passe</strong>
                                </label>
                                <input type=\"hidden\" name=\"id\" value=\"";
        // line 180
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 180, $this->source); })()), "user", [], "any", false, false, false, 180), "id", [], "any", false, false, false, 180), "html", null, true);
        echo "\">
                                <input type=\"password\" class=\"form-control\" placeholder=\"\" id=\"oldPassword\" name=\"oldPassword\" required>
                                <div class=\"invalid-feedback\" id=\"error_BADPASSWORD\">
                                    Votre ancien mot de passe est incorrect
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"newPassword\">
                                    <strong>Nouveau mot de passe</strong>
                                </label>
                                <input type=\"password\" class=\"form-control\" placeholder=\"\" id=\"newPassword\" name=\"newPassword\" required oninput=\"checkPasswordStrength(this.value); checkSamePasswordRegister(this.value, document.getElementById('confirmPassword').value)\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"confirmPassword\">
                                    <strong>Confirmation du mot de passe</strong>
                                </label>
                                <input type=\"password\" class=\"form-control\" placeholder=\"\" id=\"confirmPassword\" name=\"confirmPassword\" required oninput=\"checkSamePasswordRegister(document.getElementById('newPassword').value, this.value)\">
                                <div class=\"invalid-feedback\">
                                    Les deux mots de passe ne correspondent pas.
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"passwordStrength\">
                                    <strong>Solidité du mot de passe</strong>
                                </label>
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-striped progress-bar-animated progress-bar-danger\" id=\"passwordStrength\" role=\"progressbar\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%\"></div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <button class=\"btn btn-primary\" type=\"button\" onclick=\"updatePassword()\">Modifier mon mot de passe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"text-center my-auto copyright text-";
        // line 219
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 219, $this->source); })()), "color", [], "any", false, false, false, 219), "html", null, true);
        echo "\">
                    <span>Copyright © CEFC Developers Team ";
        // line 220
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
        return "dashboard/user/account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  461 => 220,  457 => 219,  415 => 180,  402 => 170,  398 => 169,  393 => 167,  365 => 148,  350 => 138,  342 => 135,  337 => 133,  331 => 132,  327 => 131,  313 => 122,  299 => 113,  288 => 107,  283 => 105,  277 => 104,  273 => 103,  256 => 89,  238 => 76,  233 => 74,  227 => 73,  223 => 72,  209 => 63,  196 => 55,  183 => 47,  170 => 39,  161 => 35,  151 => 30,  146 => 28,  140 => 27,  136 => 26,  127 => 20,  120 => 18,  113 => 14,  109 => 13,  106 => 12,  104 => 11,  93 => 9,  91 => 8,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon compte{% endblock %}

{# Gestion de la page #}
{% block body %}
<div id=\"wrapper\">
    {% include \"includes/dashboard/sidebar.html.twig\" %}
    <div class=\"d-flex flex-column {% if not userSettings.medieval[0] %}bg-{{ userSettings.theme }}{% else %}bg-none{% endif %}\" id=\"content-wrapper\">
        <div id=\"content\">
            {% include \"includes/dashboard/navbar.html.twig\" %}
            <div class=\"container-fluid\">
                <h3 class=\"text-{{ userSettings.color }} mb-4\">Mon compte</h3>
                <form action=\"{{ path(\"account\") }}\" method=\"POST\">
                    <input type=\"hidden\" name=\"METHOD\" value=\"EDIT\">
                    <div class=\"row mb-3\">
                        <div class=\"col-lg-4\">
                            <div class=\"card mb-3 bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                                <div class=\"card-body text-center shadow\">
                                    <img class=\"rounded-circle mb-3 mt-4\" src=\"{{ asset(\"assets/profile/paladomas.jpg\") }}\" width=\"160\" height=\"160\">
                                    <div class=\"mb-3\">
                                        <button class=\"btn btn-primary btn-sm\" type=\"button\">Changer de photo</button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card shadow mb-4 border-{{ userSettings.color }}\">
                                <div class=\"card-header py-3 bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                                    <h6 class=\"text-{{ userSettings.color }} font-weight-bold m-0\">Droits utilisateur</h6>
                                </div>
                                <div class=\"card-body bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                                    <label>
                                        <strong>Gestion</strong>
                                    </label>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEADMIN\" name=\"Roles[]\" value=\"ROLE_ADMIN\" {% if \"ROLE_ADMIN\" in app.user.roles %}checked{% endif %} readonly disabled>
                                        <label class=\"custom-control-label\" for=\"checkbox_ROLEADMIN\">Administrateur</label>
                                    </div>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEDEVELOPERS\" name=\"Roles[]\" value=\"ROLE_DEVELOPERS\" {% if \"ROLE_DEVELOPERS\" in app.user.roles %}checked{% endif %} readonly disabled>
                                        <label class=\"custom-control-label\" for=\"checkbox_ROLEDEVELOPERS\">Développeur</label>
                                    </div>
                                    <br>
                                    <label>
                                        <strong>Édition</strong>
                                    </label>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEWRITER\" name=\"Roles[]\" value=\"ROLE_WRITER\" {% if \"ROLE_WRITER\" in app.user.roles %}checked{% endif %} readonly disabled>
                                        <label class=\"custom-control-label\" for=\"checkbox_ROLEWRITER\">Écrivain</label>
                                    </div>
                                    <br>
                                    <label>
                                        <strong>Équipe</strong>
                                    </label>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEMEMBER\" name=\"Roles[]\" value=\"ROLE_MEMBER\" {% if \"ROLE_MEMBER\" in app.user.roles %}checked{% endif %} readonly disabled>
                                        <label class=\"custom-control-label\" for=\"checkbox_ROLEMEMBER\">Adhérent</label>
                                    </div>
                                    <br>
                                    <label>
                                        <strong>Affichage</strong>
                                    </label>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEUSER\" name=\"Roles[]\" value=\"ROLE_USER\" {% if \"ROLE_USER\" in app.user.roles %}checked{% endif %} readonly disabled>
                                        <label class=\"custom-control-label\" for=\"checkbox_ROLEUSER\">Utilisateur</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-8\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"card shadow mb-3 border-{{ userSettings.color }}\">
                                        <div class=\"card-header py-3 bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                                            <p class=\"text-{{ userSettings.color }} m-0 font-weight-bold\">Informations de connexion</p>
                                        </div>
                                        <div class=\"card-body bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                                            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\" id=\"SUCCESS_UPDATE_PASSWORD\" style=\"display: none;\">
                                                <strong>Information :</strong> Votre mot de passe a été mis à jour avec succès !
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">&times;</span>
                                                </button>
                                            </div>
                                            <div class=\"form-row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"form-group\">
                                                        <label for=\"username\">
                                                            <strong>Nom d'utilisateur</strong>
                                                        </label>
                                                        <input class=\"form-control\" type=\"text\" placeholder=\"\" id=\"username\" name=\"Username\" value=\"{{ app.user.username }}\" readonly required>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6\">
                                                    <div class=\"form-group\">
                                                        <label for=\"password\">
                                                            <strong>Mot de passe</strong>
                                                        </label>
                                                        <button type=\"button\" class=\"btn btn-block btn-primary\" id=\"password\" onclick=\"\$('#modal-updatepassword').modal();\">Modifier mon mot de passe</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"card shadow border-{{ userSettings.color }}\">
                                        <div class=\"card-header py-3 bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                                            <p class=\"text-{{ userSettings.color }} m-0 font-weight-bold\">Informations de contact</p>
                                        </div>
                                        <div class=\"card-body bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                                            <div class=\"form-row\">
                                                <div class=\"col-lg-6\">
                                                    <label for=\"firstname\">
                                                        <strong>Prénom</strong>
                                                    </label>
                                                    <input class=\"form-control {{ errors[\"Firstname\"]|default(\"\") }}\" type=\"text\" placeholder=\"John\" value=\"{{ app.user.firstname }}\" name=\"Firstname\" id=\"firstname\" minlength=\"2\" maxlength=\"128\" required oninput=\"checkRegExp(this.id)\">
                                                    <div class=\"invalid-feedback\">
                                                        Votre prénom doit faire entre 2 et 128 caractères et doit être composé de lettres uniquement
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6\">
                                                    <label for=\"lastname\">
                                                        <strong>Nom</strong>
                                                    </label>
                                                    <input class=\"form-control {{ errors[\"Lastname\"]|default(\"\") }}\" type=\"text\" placeholder=\"DOE\" value=\"{{ app.user.lastname }}\" name=\"Lastname\" id=\"lastname\" minlength=\"2\" maxlength=\"128\" required oninput=\"checkRegExp(this.id)\">
                                                    <div class=\"invalid-feedback\">
                                                        Votre nom doit faire entre 2 et 128 caractères et doit être composé de lettres uniquement
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"card shadow border-{{ userSettings.color }}\">
                                        <div class=\"card-header py-3 bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                                            <p class=\"text-{{ userSettings.color }} m-0 font-weight-bold\">Paramètres sur les forums</p>
                                        </div>
                                        <div class=\"card-body bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                                            <div class=\"form-group\">
                                                <div class=\"custom-control custom-switch\">
                                                    <input class=\"custom-control-input\" type=\"checkbox\" name=\"usePseudo\" id=\"switch-usepseudo\" onchange=\"checkUsePseudo(this.checked)\" {% if app.user.pseudo != NULL %}checked{% endif %}>
                                                    <label class=\"custom-control-label\" for=\"switch-usepseudo\">
                                                        <strong>Utiliser un pseudo</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"pseudo\">
                                                    <strong>Pseudo utilisé</strong>
                                                </label>
                                                <input class=\"form-control {{ errors[\"Pseudo\"]|default(\"\") }}\" type=\"text\" placeholder=\"\" value=\"{{ app.user.pseudo|default(\"\") }}\" name=\"Pseudo\" id=\"pseudo\" minlength=\"2\" maxlength=\"128\"  {% if app.user.pseudo == NULL %}readonly{% endif %}>
                                                <div class=\"invalid-feedback\">
                                                    Étant donné que vous avez choisi d'utiliser un pseudo, il faut le définir.
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <button class=\"btn btn-primary btn-sm\" type=\"submit\">Sauvegarder les informations</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"modal fade\" id=\"modal-updatepassword\" tabindex=\"-1\" aria-labelledby=\"UpdatePassword\" aria-hidden=\"true\" style=\"height: 90% !important;\">
            <div class=\"modal-dialog modal-dialog-centered modal-lg\">
                <div class=\"modal-content bg-{{ userSettings.theme }}\" style=\"border: none; height: 90% !important;\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title text-{{ userSettings.color }}\" id=\"exampleModalLabel\">Modifier mon mot de passe</h5>
                        <button type=\"button\" class=\"close text-{{ userSettings.color }}\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <form action=\"#\" method=\"POST\" id=\"updatePasswordForm\" onsubmit=\"updatePassword(); return false;\">
                            <div class=\"form-group\">
                                <label for=\"oldPassword\">
                                    <strong>Ancien mot de passe</strong>
                                </label>
                                <input type=\"hidden\" name=\"id\" value=\"{{ app.user.id }}\">
                                <input type=\"password\" class=\"form-control\" placeholder=\"\" id=\"oldPassword\" name=\"oldPassword\" required>
                                <div class=\"invalid-feedback\" id=\"error_BADPASSWORD\">
                                    Votre ancien mot de passe est incorrect
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"newPassword\">
                                    <strong>Nouveau mot de passe</strong>
                                </label>
                                <input type=\"password\" class=\"form-control\" placeholder=\"\" id=\"newPassword\" name=\"newPassword\" required oninput=\"checkPasswordStrength(this.value); checkSamePasswordRegister(this.value, document.getElementById('confirmPassword').value)\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"confirmPassword\">
                                    <strong>Confirmation du mot de passe</strong>
                                </label>
                                <input type=\"password\" class=\"form-control\" placeholder=\"\" id=\"confirmPassword\" name=\"confirmPassword\" required oninput=\"checkSamePasswordRegister(document.getElementById('newPassword').value, this.value)\">
                                <div class=\"invalid-feedback\">
                                    Les deux mots de passe ne correspondent pas.
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"passwordStrength\">
                                    <strong>Solidité du mot de passe</strong>
                                </label>
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-striped progress-bar-animated progress-bar-danger\" id=\"passwordStrength\" role=\"progressbar\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%\"></div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <button class=\"btn btn-primary\" type=\"button\" onclick=\"updatePassword()\">Modifier mon mot de passe</button>
                            </div>
                        </form>
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
{# Fin de la gestion de la page #}", "dashboard/user/account.html.twig", "D:\\romainmunier\\Documents\\GitHub\\ptuts3s4\\templates\\dashboard\\user\\account.html.twig");
    }
}
