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

/* dashboard/user/edit.html.twig */
class __TwigTemplate_c9de0230c3eab25f29fda40615ff17e35a93dd0dc649251154d4ae92f835f7e9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/user/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/user/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/user/edit.html.twig", 1);
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

        echo "Mode édition";
        
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
        $this->loadTemplate("includes/dashboard/sidebar.html.twig", "dashboard/user/edit.html.twig", 8)->display($context);
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
        $this->loadTemplate("includes/dashboard/navbar.html.twig", "dashboard/user/edit.html.twig", 11)->display($context);
        // line 12
        echo "            <div class=\"container-fluid\">
                <h3 class=\"text-";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 13, $this->source); })()), "color", [], "any", false, false, false, 13), "html", null, true);
        echo " mb-4\">Modification de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "firstname", [], "any", false, false, false, 13), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "lastname", [], "any", false, false, false, 13), "html", null, true);
        echo "</h3>
                <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\" method=\"POST\" id=\"createAccountForm\">
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
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "roles", [], "any", false, false, false, 35))) {
            echo "checked";
        }
        echo ">
                                        <label class=\"custom-control-label\" for=\"checkbox_ROLEADMIN\">Administrateur</label>
                                    </div>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEDEVELOPERS\" name=\"Roles[]\" value=\"ROLE_DEVELOPERS\" ";
        // line 39
        if (twig_in_filter("ROLE_DEVELOPERS", twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "roles", [], "any", false, false, false, 39))) {
            echo "checked";
        }
        echo ">
                                        <label class=\"custom-control-label\" for=\"checkbox_ROLEDEVELOPERS\">Développeur</label>
                                    </div>
                                    <br>
                                    <label>
                                        <strong>Édition</strong>
                                    </label>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEWRITER\" name=\"Roles[]\" value=\"ROLE_WRITER\" ";
        // line 47
        if (twig_in_filter("ROLE_WRITER", twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "roles", [], "any", false, false, false, 47))) {
            echo "checked";
        }
        echo ">
                                        <label class=\"custom-control-label\" for=\"checkbox_ROLEWRITER\">Écrivain</label>
                                    </div>
                                    <br>
                                    <label>
                                        <strong>Équipe</strong>
                                    </label>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEMEMBER\" name=\"Roles[]\" value=\"ROLE_MEMBER\" ";
        // line 55
        if (twig_in_filter("ROLE_MEMBER", twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "roles", [], "any", false, false, false, 55))) {
            echo "checked";
        }
        echo ">
                                        <label class=\"custom-control-label\" for=\"checkbox_ROLEMEMBER\">Adhérent</label>
                                    </div>
                                    <br>
                                    <label>
                                        <strong>Affichage</strong>
                                    </label>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEUSER\" name=\"Roles[]\" value=\"ROLE_USER\" ";
        // line 63
        if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "roles", [], "any", false, false, false, 63))) {
            echo "checked";
        }
        echo ">
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
                                            <div class=\"form-row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"form-group\">
                                                        <label for=\"username\">
                                                            <strong>Nom d'utilisateur</strong>
                                                        </label>
                                                        <input class=\"form-control\" type=\"text\" placeholder=\"username\" id=\"username\" name=\"Username\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 83, $this->source); })()), "username", [], "any", false, false, false, 83), "html", null, true);
        echo "\" required readonly minlength=\"2\" maxlength=\"255\">
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6\">
                                                    <div class=\"form-group\">
                                                        <label for=\"passwordInput\">
                                                            <strong>Mot de passe</strong>
                                                        </label>
                                                        <button style=\"display: ";
        // line 91
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Password", [], "array", true, true, false, 91)) {
            echo "none";
        } else {
            echo "block";
        }
        echo ";\" type=\"button\" class=\"btn btn-block btn-primary\" id=\"passwordBtn\" onclick=\"\$('#modal-createpassword').modal();\">Modifier le mot de passe</button>
                                                        <div id=\"editPasswordDiv\" style=\"display: ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Password", [], "array", true, true, false, 92)) {
            echo "flex";
        } else {
            echo "none";
        }
        echo "; flex-direction: row\">
                                                            <input class=\"form-control ";
        // line 93
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Password", [], "array", true, true, false, 93)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Password", [], "array", false, false, false, 93), "")) : ("")), "html", null, true);
        echo "\" type=\"password\" placeholder=\"\" id=\"passwordInput\" name=\"Password\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 93, $this->source); })()), "password", [], "any", false, false, false, 93), "html", null, true);
        echo "\" readonly required minlength=\"2\" maxlength=\"255\" style=\"border-radius: .35rem 0 0 .35rem; width: 85%;\">
                                                            <button type=\"button\" class=\"btn btn-primary\" id=\"passwordEditBtn\" onclick=\"\$('#modal-createpassword').modal();\" style=\"border-radius: 0 .35rem .35rem 0; width: 15%;\">
                                                                <i class=\"fas fa-edit\"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"modal fade\" id=\"modal-createpassword\" tabindex=\"-1\" aria-labelledby=\"UpdatePassword\" aria-hidden=\"true\" style=\"height: 90% !important;\">
                                                <div class=\"modal-dialog modal-dialog-centered modal-lg\">
                                                    <div class=\"modal-content bg-";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 103, $this->source); })()), "theme", [], "any", false, false, false, 103), "html", null, true);
        echo "\" style=\"border: none; height: 90% !important;\">
                                                        <div class=\"modal-header\">
                                                            <h5 class=\"modal-title text-";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 105, $this->source); })()), "color", [], "any", false, false, false, 105), "html", null, true);
        echo "\" id=\"exampleModalLabel\">Modifier le mot de passe</h5>
                                                            <button type=\"button\" class=\"close text-";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 106, $this->source); })()), "color", [], "any", false, false, false, 106), "html", null, true);
        echo "\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            <form action=\"#\" method=\"POST\" id=\"createPasswordForm\" onsubmit=\"createPassword(); return false;\">
                                                                <div class=\"form-group\">
                                                                    <label for=\"createPassword\">
                                                                        <strong>Nouveau mot de passe</strong>
                                                                    </label>
                                                                    <input type=\"password\" class=\"form-control\" placeholder=\"\" id=\"newPassword\" name=\"newPassword\" oninput=\"checkPasswordStrength(this.value); checkSamePasswordRegister(this.value, document.getElementById('confirmPassword').value)\">
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <label for=\"confirmPassword\">
                                                                        <strong>Confirmation du mot de passe</strong>
                                                                    </label>
                                                                    <input type=\"password\" class=\"form-control\" placeholder=\"\" id=\"confirmPassword\" name=\"confirmPassword\" oninput=\"checkSamePasswordRegister(document.getElementById('newPassword').value, this.value)\">
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
                                                                    <button class=\"btn btn-primary\" type=\"button\" onclick=\"createPassword();\">Modifier le mot de passe</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"card shadow border-";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 145, $this->source); })()), "color", [], "any", false, false, false, 145), "html", null, true);
        echo "\">
                                        <div class=\"card-header py-3 bg-";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 146, $this->source); })()), "theme", [], "any", false, false, false, 146), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 146, $this->source); })()), "color", [], "any", false, false, false, 146), "html", null, true);
        echo "\">
                                            <p class=\"text-";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 147, $this->source); })()), "color", [], "any", false, false, false, 147), "html", null, true);
        echo " m-0 font-weight-bold\">Informations de contact</p>
                                        </div>
                                        <div class=\"card-body bg-";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 149, $this->source); })()), "theme", [], "any", false, false, false, 149), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 149, $this->source); })()), "color", [], "any", false, false, false, 149), "html", null, true);
        echo "\">
                                            <div class=\"form-row\">
                                                <div class=\"col-lg-6\">
                                                    <label for=\"firstname\">
                                                        <strong>Prénom</strong>
                                                    </label>
                                                    <input class=\"form-control ";
        // line 155
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Firstname", [], "array", true, true, false, 155)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Firstname", [], "array", false, false, false, 155), "")) : ("")), "html", null, true);
        echo "\" type=\"text\" placeholder=\"John\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 155, $this->source); })()), "firstname", [], "any", false, false, false, 155), "html", null, true);
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
        // line 164
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Lastname", [], "array", true, true, false, 164)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Lastname", [], "array", false, false, false, 164), "")) : ("")), "html", null, true);
        echo "\" type=\"text\" placeholder=\"DOE\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 164, $this->source); })()), "lastname", [], "any", false, false, false, 164), "html", null, true);
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
        // line 173
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 173, $this->source); })()), "color", [], "any", false, false, false, 173), "html", null, true);
        echo "\">
                                        <div class=\"card-header py-3 bg-";
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 174, $this->source); })()), "theme", [], "any", false, false, false, 174), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 174, $this->source); })()), "color", [], "any", false, false, false, 174), "html", null, true);
        echo "\">
                                            <p class=\"text-";
        // line 175
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 175, $this->source); })()), "color", [], "any", false, false, false, 175), "html", null, true);
        echo " m-0 font-weight-bold\">Paramètres sur les forums</p>
                                        </div>
                                        <div class=\"card-body bg-";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 177, $this->source); })()), "theme", [], "any", false, false, false, 177), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 177, $this->source); })()), "color", [], "any", false, false, false, 177), "html", null, true);
        echo "\">
                                            <div class=\"form-group\">
                                                <div class=\"custom-control custom-switch\">
                                                    <input class=\"custom-control-input\" type=\"checkbox\" name=\"usePseudo\" id=\"switch-usepseudo\" onchange=\"checkUsePseudo(this.checked)\" ";
        // line 180
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 180, $this->source); })()), "pseudo", [], "any", false, false, false, 180), null))) {
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
        // line 190
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Pseudo", [], "array", true, true, false, 190)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Pseudo", [], "array", false, false, false, 190), "")) : ("")), "html", null, true);
        echo "\" type=\"text\" placeholder=\"\" value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "pseudo", [], "any", true, true, false, 190)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "pseudo", [], "any", false, false, false, 190), "")) : ("")), "html", null, true);
        echo "\" name=\"Pseudo\" id=\"pseudo\" minlength=\"2\" maxlength=\"128\"  ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 190, $this->source); })()), "pseudo", [], "any", false, false, false, 190), null))) {
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
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"text-center my-auto copyright text-";
        // line 209
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 209, $this->source); })()), "color", [], "any", false, false, false, 209), "html", null, true);
        echo "\">
                    <span>Copyright © CEFC Developers Team ";
        // line 210
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
        return "dashboard/user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 210,  467 => 209,  439 => 190,  424 => 180,  416 => 177,  411 => 175,  405 => 174,  401 => 173,  387 => 164,  373 => 155,  362 => 149,  357 => 147,  351 => 146,  347 => 145,  305 => 106,  301 => 105,  296 => 103,  281 => 93,  273 => 92,  265 => 91,  254 => 83,  242 => 76,  237 => 74,  231 => 73,  227 => 72,  213 => 63,  200 => 55,  187 => 47,  174 => 39,  165 => 35,  155 => 30,  150 => 28,  144 => 27,  140 => 26,  131 => 20,  124 => 18,  117 => 14,  109 => 13,  106 => 12,  104 => 11,  93 => 9,  91 => 8,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mode édition{% endblock %}

{# Gestion de la page #}
{% block body %}
<div id=\"wrapper\">
    {% include \"includes/dashboard/sidebar.html.twig\" %}
    <div class=\"d-flex flex-column {% if not userSettings.medieval[0] %}bg-{{ userSettings.theme }}{% else %}bg-none{% endif %}\" id=\"content-wrapper\">
        <div id=\"content\">
            {% include \"includes/dashboard/navbar.html.twig\" %}
            <div class=\"container-fluid\">
                <h3 class=\"text-{{ userSettings.color }} mb-4\">Modification de {{ user.firstname }} {{ user.lastname }}</h3>
                <form action=\"{{ path(\"users_edit\", {\"id\" : user.id}) }}\" method=\"POST\" id=\"createAccountForm\">
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
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEADMIN\" name=\"Roles[]\" value=\"ROLE_ADMIN\" {% if \"ROLE_ADMIN\" in user.roles %}checked{% endif %}>
                                        <label class=\"custom-control-label\" for=\"checkbox_ROLEADMIN\">Administrateur</label>
                                    </div>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEDEVELOPERS\" name=\"Roles[]\" value=\"ROLE_DEVELOPERS\" {% if \"ROLE_DEVELOPERS\" in user.roles %}checked{% endif %}>
                                        <label class=\"custom-control-label\" for=\"checkbox_ROLEDEVELOPERS\">Développeur</label>
                                    </div>
                                    <br>
                                    <label>
                                        <strong>Édition</strong>
                                    </label>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEWRITER\" name=\"Roles[]\" value=\"ROLE_WRITER\" {% if \"ROLE_WRITER\" in user.roles %}checked{% endif %}>
                                        <label class=\"custom-control-label\" for=\"checkbox_ROLEWRITER\">Écrivain</label>
                                    </div>
                                    <br>
                                    <label>
                                        <strong>Équipe</strong>
                                    </label>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEMEMBER\" name=\"Roles[]\" value=\"ROLE_MEMBER\" {% if \"ROLE_MEMBER\" in user.roles %}checked{% endif %}>
                                        <label class=\"custom-control-label\" for=\"checkbox_ROLEMEMBER\">Adhérent</label>
                                    </div>
                                    <br>
                                    <label>
                                        <strong>Affichage</strong>
                                    </label>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEUSER\" name=\"Roles[]\" value=\"ROLE_USER\" {% if \"ROLE_USER\" in user.roles %}checked{% endif %}>
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
                                            <div class=\"form-row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"form-group\">
                                                        <label for=\"username\">
                                                            <strong>Nom d'utilisateur</strong>
                                                        </label>
                                                        <input class=\"form-control\" type=\"text\" placeholder=\"username\" id=\"username\" name=\"Username\" value=\"{{ user.username }}\" required readonly minlength=\"2\" maxlength=\"255\">
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6\">
                                                    <div class=\"form-group\">
                                                        <label for=\"passwordInput\">
                                                            <strong>Mot de passe</strong>
                                                        </label>
                                                        <button style=\"display: {% if errors[\"Password\"] is defined %}none{% else %}block{% endif %};\" type=\"button\" class=\"btn btn-block btn-primary\" id=\"passwordBtn\" onclick=\"\$('#modal-createpassword').modal();\">Modifier le mot de passe</button>
                                                        <div id=\"editPasswordDiv\" style=\"display: {% if errors[\"Password\"] is defined %}flex{% else %}none{% endif %}; flex-direction: row\">
                                                            <input class=\"form-control {{ errors[\"Password\"]|default(\"\") }}\" type=\"password\" placeholder=\"\" id=\"passwordInput\" name=\"Password\" value=\"{{ user.password }}\" readonly required minlength=\"2\" maxlength=\"255\" style=\"border-radius: .35rem 0 0 .35rem; width: 85%;\">
                                                            <button type=\"button\" class=\"btn btn-primary\" id=\"passwordEditBtn\" onclick=\"\$('#modal-createpassword').modal();\" style=\"border-radius: 0 .35rem .35rem 0; width: 15%;\">
                                                                <i class=\"fas fa-edit\"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"modal fade\" id=\"modal-createpassword\" tabindex=\"-1\" aria-labelledby=\"UpdatePassword\" aria-hidden=\"true\" style=\"height: 90% !important;\">
                                                <div class=\"modal-dialog modal-dialog-centered modal-lg\">
                                                    <div class=\"modal-content bg-{{ userSettings.theme }}\" style=\"border: none; height: 90% !important;\">
                                                        <div class=\"modal-header\">
                                                            <h5 class=\"modal-title text-{{ userSettings.color }}\" id=\"exampleModalLabel\">Modifier le mot de passe</h5>
                                                            <button type=\"button\" class=\"close text-{{ userSettings.color }}\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            <form action=\"#\" method=\"POST\" id=\"createPasswordForm\" onsubmit=\"createPassword(); return false;\">
                                                                <div class=\"form-group\">
                                                                    <label for=\"createPassword\">
                                                                        <strong>Nouveau mot de passe</strong>
                                                                    </label>
                                                                    <input type=\"password\" class=\"form-control\" placeholder=\"\" id=\"newPassword\" name=\"newPassword\" oninput=\"checkPasswordStrength(this.value); checkSamePasswordRegister(this.value, document.getElementById('confirmPassword').value)\">
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <label for=\"confirmPassword\">
                                                                        <strong>Confirmation du mot de passe</strong>
                                                                    </label>
                                                                    <input type=\"password\" class=\"form-control\" placeholder=\"\" id=\"confirmPassword\" name=\"confirmPassword\" oninput=\"checkSamePasswordRegister(document.getElementById('newPassword').value, this.value)\">
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
                                                                    <button class=\"btn btn-primary\" type=\"button\" onclick=\"createPassword();\">Modifier le mot de passe</button>
                                                                </div>
                                                            </form>
                                                        </div>
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
                                                    <input class=\"form-control {{ errors[\"Firstname\"]|default(\"\") }}\" type=\"text\" placeholder=\"John\" value=\"{{ user.firstname }}\" name=\"Firstname\" id=\"firstname\" minlength=\"2\" maxlength=\"128\" required oninput=\"checkRegExp(this.id)\">
                                                    <div class=\"invalid-feedback\">
                                                        Votre prénom doit faire entre 2 et 128 caractères et doit être composé de lettres uniquement
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6\">
                                                    <label for=\"lastname\">
                                                        <strong>Nom</strong>
                                                    </label>
                                                    <input class=\"form-control {{ errors[\"Lastname\"]|default(\"\") }}\" type=\"text\" placeholder=\"DOE\" value=\"{{ user.lastname }}\" name=\"Lastname\" id=\"lastname\" minlength=\"2\" maxlength=\"128\" required oninput=\"checkRegExp(this.id)\">
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
                                                    <input class=\"custom-control-input\" type=\"checkbox\" name=\"usePseudo\" id=\"switch-usepseudo\" onchange=\"checkUsePseudo(this.checked)\" {% if user.pseudo != NULL %}checked{% endif %}>
                                                    <label class=\"custom-control-label\" for=\"switch-usepseudo\">
                                                        <strong>Utiliser un pseudo</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"pseudo\">
                                                    <strong>Pseudo utilisé</strong>
                                                </label>
                                                <input class=\"form-control {{ errors[\"Pseudo\"]|default(\"\") }}\" type=\"text\" placeholder=\"\" value=\"{{ user.pseudo|default(\"\") }}\" name=\"Pseudo\" id=\"pseudo\" minlength=\"2\" maxlength=\"128\"  {% if user.pseudo == NULL %}readonly{% endif %}>
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
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"text-center my-auto copyright text-{{ userSettings.color }}\">
                    <span>Copyright © CEFC Developers Team {{ date(\"Y\")|date(\"Y\") }}</span>
                </div>
            </div>
        </footer>
        {% endblock %}
{# Fin de la gestion de la page #}", "dashboard/user/edit.html.twig", "D:\\romainmunier\\Documents\\GitHub\\ptuts3s4\\templates\\dashboard\\user\\edit.html.twig");
    }
}
