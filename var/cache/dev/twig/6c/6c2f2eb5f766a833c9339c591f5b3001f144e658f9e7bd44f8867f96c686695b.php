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
class __TwigTemplate_57bf37de20f97586c34c6ce1bb345d9c074625a74db6ffd922a760a9c2ad0653 extends Template
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
                ";
        // line 14
        if ((array_key_exists("errors", $context) &&  !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 14, $this->source); })())))) {
            // line 15
            echo "                    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                        <strong>Avertissement : </strong> Des erreurs ont été trouvée dans votre formulaire. Veuillez les corriger avant de continuer.
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                ";
        }
        // line 22
        echo "                <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\" method=\"POST\">
                    <input type=\"hidden\" name=\"METHOD\" value=\"EDIT\">
                    <div class=\"row mb-3\">
                        <div class=\"col-lg-4\">
                            <div class=\"card mb-3 bg-";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 26, $this->source); })()), "theme", [], "any", false, false, false, 26), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 26, $this->source); })()), "color", [], "any", false, false, false, 26), "html", null, true);
        echo "\">
                                <div class=\"card-body text-center shadow\">
                                    <img class=\"rounded-circle mb-3 mt-4\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/paladomas.jpg"), "html", null, true);
        echo "\" width=\"160\" height=\"160\">
                                    <div class=\"mb-3\">
                                        <button class=\"btn btn-primary btn-sm\" type=\"button\">Changer de photo</button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card shadow mb-4 border-";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 34, $this->source); })()), "color", [], "any", false, false, false, 34), "html", null, true);
        echo "\">
                                <div class=\"card-header py-3 bg-";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 35, $this->source); })()), "theme", [], "any", false, false, false, 35), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 35, $this->source); })()), "color", [], "any", false, false, false, 35), "html", null, true);
        echo "\">
                                    <h6 class=\"text-";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 36, $this->source); })()), "color", [], "any", false, false, false, 36), "html", null, true);
        echo " font-weight-bold m-0\">Droits utilisateur</h6>
                                </div>
                                <div class=\"card-body bg-";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 38, $this->source); })()), "theme", [], "any", false, false, false, 38), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 38, $this->source); })()), "color", [], "any", false, false, false, 38), "html", null, true);
        echo "\">
                                    <label>
                                        <strong>Gestion</strong>
                                    </label>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEADMIN\" name=\"Roles[]\" value=\"ROLE_ADMIN\" ";
        // line 43
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "roles", [], "any", false, false, false, 43))) {
            echo "checked";
        }
        echo " readonly disabled>
                                        <label class=\"custom-control-label\" for=\"checkbox_ROLEADMIN\">Administrateur</label>
                                    </div>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEDEVELOPERS\" name=\"Roles[]\" value=\"ROLE_DEVELOPERS\" ";
        // line 47
        if (twig_in_filter("ROLE_DEVELOPERS", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "roles", [], "any", false, false, false, 47))) {
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
        // line 55
        if (twig_in_filter("ROLE_WRITER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "roles", [], "any", false, false, false, 55))) {
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
        // line 63
        if (twig_in_filter("ROLE_MEMBER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "roles", [], "any", false, false, false, 63))) {
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
        // line 71
        if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "roles", [], "any", false, false, false, 71))) {
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
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 80, $this->source); })()), "color", [], "any", false, false, false, 80), "html", null, true);
        echo "\">
                                        <div class=\"card-header py-3 bg-";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 81, $this->source); })()), "theme", [], "any", false, false, false, 81), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 81, $this->source); })()), "color", [], "any", false, false, false, 81), "html", null, true);
        echo "\">
                                            <p class=\"text-";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 82, $this->source); })()), "color", [], "any", false, false, false, 82), "html", null, true);
        echo " m-0 font-weight-bold\">Informations de connexion</p>
                                        </div>
                                        <div class=\"card-body bg-";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 84, $this->source); })()), "theme", [], "any", false, false, false, 84), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 84, $this->source); })()), "color", [], "any", false, false, false, 84), "html", null, true);
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
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "username", [], "any", false, false, false, 97), "html", null, true);
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
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 111, $this->source); })()), "color", [], "any", false, false, false, 111), "html", null, true);
        echo "\">
                                        <div class=\"card-header py-3 bg-";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 112, $this->source); })()), "theme", [], "any", false, false, false, 112), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 112, $this->source); })()), "color", [], "any", false, false, false, 112), "html", null, true);
        echo "\">
                                            <p class=\"text-";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 113, $this->source); })()), "color", [], "any", false, false, false, 113), "html", null, true);
        echo " m-0 font-weight-bold\">Informations de contact</p>
                                        </div>
                                        <div class=\"card-body bg-";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 115, $this->source); })()), "theme", [], "any", false, false, false, 115), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 115, $this->source); })()), "color", [], "any", false, false, false, 115), "html", null, true);
        echo "\">
                                            <div class=\"form-row\">
                                                <div class=\"col-lg-6\">
                                                    <label for=\"firstname\">
                                                        <strong>Prénom</strong>
                                                    </label>
                                                    <input class=\"form-control ";
        // line 121
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Firstname", [], "array", true, true, false, 121)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Firstname", [], "array", false, false, false, 121), "")) : ("")), "html", null, true);
        echo "\" type=\"text\" placeholder=\"John\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "user", [], "any", false, false, false, 121), "firstname", [], "any", false, false, false, 121), "html", null, true);
        echo "\" name=\"Firstname\" id=\"firstname\" minlength=\"2\" maxlength=\"128\" required oninput=\"checkRegExp(this.id, 'NAME')\">
                                                    <div class=\"invalid-feedback\">
                                                        Votre prénom doit faire entre 2 et 128 caractères et doit être composé de lettres uniquement
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6\">
                                                    <label for=\"lastname\">
                                                        <strong>Nom</strong>
                                                    </label>
                                                    <input class=\"form-control ";
        // line 130
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Lastname", [], "array", true, true, false, 130)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Lastname", [], "array", false, false, false, 130), "")) : ("")), "html", null, true);
        echo "\" type=\"text\" placeholder=\"DOE\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "user", [], "any", false, false, false, 130), "lastname", [], "any", false, false, false, 130), "html", null, true);
        echo "\" name=\"Lastname\" id=\"lastname\" minlength=\"2\" maxlength=\"128\" required oninput=\"checkRegExp(this.id, 'NAME')\">
                                                    <div class=\"invalid-feedback\">
                                                        Votre nom doit faire entre 2 et 128 caractères et doit être composé de lettres uniquement
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"card shadow border-";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 139, $this->source); })()), "color", [], "any", false, false, false, 139), "html", null, true);
        echo "\">
                                        <div class=\"card-header py-3 bg-";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 140, $this->source); })()), "theme", [], "any", false, false, false, 140), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 140, $this->source); })()), "color", [], "any", false, false, false, 140), "html", null, true);
        echo "\">
                                            <p class=\"text-";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 141, $this->source); })()), "color", [], "any", false, false, false, 141), "html", null, true);
        echo " m-0 font-weight-bold\">Informations de contact</p>
                                        </div>
                                        <div class=\"card-body bg-";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 143, $this->source); })()), "theme", [], "any", false, false, false, 143), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 143, $this->source); })()), "color", [], "any", false, false, false, 143), "html", null, true);
        echo "\">
                                            <div class=\"form-group\">
                                                <div class=\"custom-control custom-switch\">
                                                    <input class=\"custom-control-input\" type=\"checkbox\" name=\"useMail\" id=\"switch-usemaildiff\" onchange=\"checkUse('mail', this.checked, 'mail@domain.fr')\" ";
        // line 146
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "user", [], "any", false, false, false, 146), "mail", [], "any", false, false, false, 146), null))) {
            echo "checked";
        }
        echo ">
                                                    <label class=\"custom-control-label\" for=\"switch-usemaildiff\">
                                                        <strong>Autoriser l'utilisation de mon adresse mail dans des listes de diffusion</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=\"form-group\" id=\"mailDiv\">
                                                <label for=\"mail\">
                                                    <strong>Adresse mail</strong>
                                                </label>
                                                <input class=\"form-control ";
        // line 156
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Mail", [], "array", true, true, false, 156)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Mail", [], "array", false, false, false, 156), "")) : ("")), "html", null, true);
        echo "\" type=\"email\" placeholder=\"\" value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 156), "mail", [], "any", true, true, false, 156)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 156), "mail", [], "any", false, false, false, 156), "")) : ("")), "html", null, true);
        echo "\" name=\"Mail\" id=\"mail\" minlength=\"2\" maxlength=\"255\"  ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "user", [], "any", false, false, false, 156), "mail", [], "any", false, false, false, 156), null))) {
            echo "readonly";
        }
        echo " oninput=\"checkRegExp(this.id, 'MAIL')\">
                                                <div class=\"invalid-feedback\">
                                                    Étant donné que vous avez autorisé le site à utiliser votre adresse mail dans les listes de diffusion, il faut la définir.
                                                </div>
                                            </div>
                                            <hr>
                                            <div class=\"form-group\">
                                                <div class=\"custom-control custom-switch\">
                                                    <input class=\"custom-control-input\" type=\"checkbox\" name=\"usePhone\" id=\"switch-usephonediff\" onchange=\"checkUse('phone', this.checked, '+33 X XX XX XX XX')\" ";
        // line 164
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "user", [], "any", false, false, false, 164), "phone", [], "any", false, false, false, 164), null))) {
            echo "checked";
        }
        echo ">
                                                    <label class=\"custom-control-label\" for=\"switch-usephonediff\">
                                                        <strong>Autoriser l'utilisation de mon numéro de téléphone dans des listes de diffusion</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=\"form-group\" id=\"phoneDiv\">
                                                <label for=\"phone\">
                                                    <strong>Numéro de téléphone</strong>
                                                </label>
                                                <input class=\"form-control ";
        // line 174
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Phone", [], "array", true, true, false, 174)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Phone", [], "array", false, false, false, 174), "")) : ("")), "html", null, true);
        echo "\" type=\"tel\" placeholder=\"\" value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 174), "phone", [], "any", true, true, false, 174)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 174), "phone", [], "any", false, false, false, 174), "")) : ("")), "html", null, true);
        echo "\" name=\"Phone\" id=\"phone\" minlength=\"2\" maxlength=\"255\"  ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 174, $this->source); })()), "user", [], "any", false, false, false, 174), "phone", [], "any", false, false, false, 174), null))) {
            echo "readonly";
        }
        echo " oninput=\"checkRegExp(this.id, 'PHONE')\">
                                                <div class=\"invalid-feedback\">
                                                    Étant donné que vous avez autorisé le site à utiliser votre numéro de téléphone dans les listes de diffusion, il faut le définir.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"card shadow border-";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 182, $this->source); })()), "color", [], "any", false, false, false, 182), "html", null, true);
        echo "\">
                                        <div class=\"card-header py-3 bg-";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 183, $this->source); })()), "theme", [], "any", false, false, false, 183), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 183, $this->source); })()), "color", [], "any", false, false, false, 183), "html", null, true);
        echo "\">
                                            <p class=\"text-";
        // line 184
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 184, $this->source); })()), "color", [], "any", false, false, false, 184), "html", null, true);
        echo " m-0 font-weight-bold\">Paramètres sur les forums</p>
                                        </div>
                                        <div class=\"card-body bg-";
        // line 186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 186, $this->source); })()), "theme", [], "any", false, false, false, 186), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 186, $this->source); })()), "color", [], "any", false, false, false, 186), "html", null, true);
        echo "\">
                                            <div class=\"form-group\">
                                                <div class=\"custom-control custom-switch\">
                                                    <input class=\"custom-control-input\" type=\"checkbox\" name=\"usePseudo\" id=\"switch-usepseudo\" onchange=\"checkUse('pseudo', this.checked, 'LeCafarDu93')\" ";
        // line 189
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 189, $this->source); })()), "user", [], "any", false, false, false, 189), "pseudo", [], "any", false, false, false, 189), null))) {
            echo "checked";
        }
        echo ">
                                                    <label class=\"custom-control-label\" for=\"switch-usepseudo\">
                                                        <strong>Utiliser un pseudo</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=\"form-group\" id=\"pseudoDiv\">
                                                <label for=\"pseudo\">
                                                    <strong>Pseudo utilisé</strong>
                                                </label>
                                                <input class=\"form-control ";
        // line 199
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Pseudo", [], "array", true, true, false, 199)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Pseudo", [], "array", false, false, false, 199), "")) : ("")), "html", null, true);
        echo "\" type=\"text\" placeholder=\"\" value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 199), "pseudo", [], "any", true, true, false, 199)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 199), "pseudo", [], "any", false, false, false, 199), "")) : ("")), "html", null, true);
        echo "\" name=\"Pseudo\" id=\"pseudo\" minlength=\"2\" maxlength=\"128\"  ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 199, $this->source); })()), "user", [], "any", false, false, false, 199), "pseudo", [], "any", false, false, false, 199), null))) {
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
        // line 218
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 218, $this->source); })()), "theme", [], "any", false, false, false, 218), "html", null, true);
        echo "\" style=\"border: none; height: 90% !important;\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title text-";
        // line 220
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 220, $this->source); })()), "color", [], "any", false, false, false, 220), "html", null, true);
        echo "\" id=\"exampleModalLabel\">Modifier mon mot de passe</h5>
                        <button type=\"button\" class=\"close text-";
        // line 221
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 221, $this->source); })()), "color", [], "any", false, false, false, 221), "html", null, true);
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
        // line 231
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 231, $this->source); })()), "user", [], "any", false, false, false, 231), "id", [], "any", false, false, false, 231), "html", null, true);
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
        // line 270
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 270, $this->source); })()), "color", [], "any", false, false, false, 270), "html", null, true);
        echo "\">
                    <span>Copyright © CEFC Developers Team ";
        // line 271
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
        return array (  560 => 271,  556 => 270,  514 => 231,  501 => 221,  497 => 220,  492 => 218,  464 => 199,  449 => 189,  441 => 186,  436 => 184,  430 => 183,  426 => 182,  409 => 174,  394 => 164,  377 => 156,  362 => 146,  354 => 143,  349 => 141,  343 => 140,  339 => 139,  325 => 130,  311 => 121,  300 => 115,  295 => 113,  289 => 112,  285 => 111,  268 => 97,  250 => 84,  245 => 82,  239 => 81,  235 => 80,  221 => 71,  208 => 63,  195 => 55,  182 => 47,  173 => 43,  163 => 38,  158 => 36,  152 => 35,  148 => 34,  139 => 28,  132 => 26,  124 => 22,  115 => 15,  113 => 14,  109 => 13,  106 => 12,  104 => 11,  93 => 9,  91 => 8,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
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
                {% if errors is defined and errors is not empty %}
                    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                        <strong>Avertissement : </strong> Des erreurs ont été trouvée dans votre formulaire. Veuillez les corriger avant de continuer.
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                {% endif %}
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
                                                    <input class=\"form-control {{ errors[\"Firstname\"]|default(\"\") }}\" type=\"text\" placeholder=\"John\" value=\"{{ app.user.firstname }}\" name=\"Firstname\" id=\"firstname\" minlength=\"2\" maxlength=\"128\" required oninput=\"checkRegExp(this.id, 'NAME')\">
                                                    <div class=\"invalid-feedback\">
                                                        Votre prénom doit faire entre 2 et 128 caractères et doit être composé de lettres uniquement
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6\">
                                                    <label for=\"lastname\">
                                                        <strong>Nom</strong>
                                                    </label>
                                                    <input class=\"form-control {{ errors[\"Lastname\"]|default(\"\") }}\" type=\"text\" placeholder=\"DOE\" value=\"{{ app.user.lastname }}\" name=\"Lastname\" id=\"lastname\" minlength=\"2\" maxlength=\"128\" required oninput=\"checkRegExp(this.id, 'NAME')\">
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
                                            <p class=\"text-{{ userSettings.color }} m-0 font-weight-bold\">Informations de contact</p>
                                        </div>
                                        <div class=\"card-body bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                                            <div class=\"form-group\">
                                                <div class=\"custom-control custom-switch\">
                                                    <input class=\"custom-control-input\" type=\"checkbox\" name=\"useMail\" id=\"switch-usemaildiff\" onchange=\"checkUse('mail', this.checked, 'mail@domain.fr')\" {% if app.user.mail != NULL %}checked{% endif %}>
                                                    <label class=\"custom-control-label\" for=\"switch-usemaildiff\">
                                                        <strong>Autoriser l'utilisation de mon adresse mail dans des listes de diffusion</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=\"form-group\" id=\"mailDiv\">
                                                <label for=\"mail\">
                                                    <strong>Adresse mail</strong>
                                                </label>
                                                <input class=\"form-control {{ errors[\"Mail\"]|default(\"\") }}\" type=\"email\" placeholder=\"\" value=\"{{ app.user.mail|default(\"\") }}\" name=\"Mail\" id=\"mail\" minlength=\"2\" maxlength=\"255\"  {% if app.user.mail == NULL %}readonly{% endif %} oninput=\"checkRegExp(this.id, 'MAIL')\">
                                                <div class=\"invalid-feedback\">
                                                    Étant donné que vous avez autorisé le site à utiliser votre adresse mail dans les listes de diffusion, il faut la définir.
                                                </div>
                                            </div>
                                            <hr>
                                            <div class=\"form-group\">
                                                <div class=\"custom-control custom-switch\">
                                                    <input class=\"custom-control-input\" type=\"checkbox\" name=\"usePhone\" id=\"switch-usephonediff\" onchange=\"checkUse('phone', this.checked, '+33 X XX XX XX XX')\" {% if app.user.phone != NULL %}checked{% endif %}>
                                                    <label class=\"custom-control-label\" for=\"switch-usephonediff\">
                                                        <strong>Autoriser l'utilisation de mon numéro de téléphone dans des listes de diffusion</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=\"form-group\" id=\"phoneDiv\">
                                                <label for=\"phone\">
                                                    <strong>Numéro de téléphone</strong>
                                                </label>
                                                <input class=\"form-control {{ errors[\"Phone\"]|default(\"\") }}\" type=\"tel\" placeholder=\"\" value=\"{{ app.user.phone|default(\"\") }}\" name=\"Phone\" id=\"phone\" minlength=\"2\" maxlength=\"255\"  {% if app.user.phone == NULL %}readonly{% endif %} oninput=\"checkRegExp(this.id, 'PHONE')\">
                                                <div class=\"invalid-feedback\">
                                                    Étant donné que vous avez autorisé le site à utiliser votre numéro de téléphone dans les listes de diffusion, il faut le définir.
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
                                                    <input class=\"custom-control-input\" type=\"checkbox\" name=\"usePseudo\" id=\"switch-usepseudo\" onchange=\"checkUse('pseudo', this.checked, 'LeCafarDu93')\" {% if app.user.pseudo != NULL %}checked{% endif %}>
                                                    <label class=\"custom-control-label\" for=\"switch-usepseudo\">
                                                        <strong>Utiliser un pseudo</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=\"form-group\" id=\"pseudoDiv\">
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
{# Fin de la gestion de la page #}", "dashboard/user/account.html.twig", "/Users/romainmunier/Documents/Projets/Symfony/ptuts3s4/templates/dashboard/user/account.html.twig");
    }
}
