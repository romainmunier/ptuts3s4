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
class __TwigTemplate_f7f77ad8a0f6702bd493d6f68071cfa7e8bde25bd26c1b37f74a842a038c9790 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/user/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mode édition";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div id=\"wrapper\">
    ";
        // line 8
        $this->loadTemplate("includes/dashboard/sidebar.html.twig", "dashboard/user/edit.html.twig", 8)->display($context);
        // line 9
        echo "    <div class=\"d-flex flex-column ";
        if ( !(($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "medieval", [], "any", false, false, false, 9)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null)) {
            echo "bg-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 9), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 13), "html", null, true);
        echo " mb-4\">Modification de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 13), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastname", [], "any", false, false, false, 13), "html", null, true);
        echo "</h3>
                ";
        // line 14
        if ((array_key_exists("errors", $context) &&  !twig_test_empty(($context["errors"] ?? null)))) {
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 22)]), "html", null, true);
        echo "\" method=\"POST\" id=\"createAccountForm\">
                    <input type=\"hidden\" name=\"METHOD\" value=\"EDIT\">
                    <div class=\"row mb-3\">
                        <div class=\"col-lg-4\">
                            <div class=\"card mb-3 bg-";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 26), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 26), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 34), "html", null, true);
        echo "\">
                                <div class=\"card-header py-3 bg-";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 35), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 35), "html", null, true);
        echo "\">
                                    <h6 class=\"text-";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 36), "html", null, true);
        echo " font-weight-bold m-0\">Droits utilisateur</h6>
                                </div>
                                <div class=\"card-body bg-";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 38), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 38), "html", null, true);
        echo "\">
                                    <label>
                                        <strong>Gestion</strong>
                                    </label>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEADMIN\" name=\"Roles[]\" value=\"ROLE_ADMIN\" ";
        // line 43
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", false, false, false, 43))) {
            echo "checked";
        }
        echo ">
                                        <label class=\"custom-control-label\" for=\"checkbox_ROLEADMIN\">Administrateur</label>
                                    </div>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEDEVELOPERS\" name=\"Roles[]\" value=\"ROLE_DEVELOPERS\" ";
        // line 47
        if (twig_in_filter("ROLE_DEVELOPERS", twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", false, false, false, 47))) {
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
        // line 55
        if (twig_in_filter("ROLE_WRITER", twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", false, false, false, 55))) {
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
        // line 63
        if (twig_in_filter("ROLE_MEMBER", twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", false, false, false, 63))) {
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
        // line 71
        if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", false, false, false, 71))) {
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
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 80), "html", null, true);
        echo "\">
                                        <div class=\"card-header py-3 bg-";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 81), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 81), "html", null, true);
        echo "\">
                                            <p class=\"text-";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 82), "html", null, true);
        echo " m-0 font-weight-bold\">Informations de connexion</p>
                                        </div>
                                        <div class=\"card-body bg-";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 84), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 84), "html", null, true);
        echo "\">
                                            <div class=\"form-row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"form-group\">
                                                        <label for=\"username\">
                                                            <strong>Nom d'utilisateur</strong>
                                                        </label>
                                                        <input class=\"form-control\" type=\"text\" placeholder=\"username\" id=\"username\" name=\"Username\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 91), "html", null, true);
        echo "\" required readonly minlength=\"2\" maxlength=\"255\">
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6\">
                                                    <div class=\"form-group\">
                                                        <label for=\"passwordInput\">
                                                            <strong>Mot de passe</strong>
                                                        </label>
                                                        <button style=\"display: ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Password", [], "array", true, true, false, 99)) {
            echo "none";
        } else {
            echo "block";
        }
        echo ";\" type=\"button\" class=\"btn btn-block btn-primary\" id=\"passwordBtn\" onclick=\"\$('#modal-createpassword').modal();\">Modifier le mot de passe</button>
                                                        <div id=\"editPasswordDiv\" style=\"display: ";
        // line 100
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Password", [], "array", true, true, false, 100)) {
            echo "flex";
        } else {
            echo "none";
        }
        echo "; flex-direction: row\">
                                                            <input class=\"form-control ";
        // line 101
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Password", [], "array", true, true, false, 101)) ? (_twig_default_filter((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["errors"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["Password"] ?? null) : null), "")) : ("")), "html", null, true);
        echo "\" type=\"password\" placeholder=\"\" id=\"passwordInput\" name=\"Password\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "password", [], "any", false, false, false, 101), "html", null, true);
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
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 111), "html", null, true);
        echo "\" style=\"border: none; height: 90% !important;\">
                                                        <div class=\"modal-header\">
                                                            <h5 class=\"modal-title text-";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 113), "html", null, true);
        echo "\" id=\"exampleModalLabel\">Modifier le mot de passe</h5>
                                                            <button type=\"button\" class=\"close text-";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 114), "html", null, true);
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
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 153), "html", null, true);
        echo "\">
                                        <div class=\"card-header py-3 bg-";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 154), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 154), "html", null, true);
        echo "\">
                                            <p class=\"text-";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 155), "html", null, true);
        echo " m-0 font-weight-bold\">Informations sur l'utilisateur</p>
                                        </div>
                                        <div class=\"card-body bg-";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 157), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 157), "html", null, true);
        echo "\">
                                            <div class=\"form-row\">
                                                <div class=\"col-lg-6\">
                                                    <label for=\"firstname\">
                                                        <strong>Prénom</strong>
                                                    </label>
                                                    <input class=\"form-control ";
        // line 163
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Firstname", [], "array", true, true, false, 163)) ? (_twig_default_filter((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["errors"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["Firstname"] ?? null) : null), "")) : ("")), "html", null, true);
        echo "\" type=\"text\" placeholder=\"John\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 163), "html", null, true);
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
        // line 172
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Lastname", [], "array", true, true, false, 172)) ? (_twig_default_filter((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["errors"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["Lastname"] ?? null) : null), "")) : ("")), "html", null, true);
        echo "\" type=\"text\" placeholder=\"DOE\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastname", [], "any", false, false, false, 172), "html", null, true);
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
        // line 181
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 181), "html", null, true);
        echo "\">
                                        <div class=\"card-header py-3 bg-";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 182), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 182), "html", null, true);
        echo "\">
                                            <p class=\"text-";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 183), "html", null, true);
        echo " m-0 font-weight-bold\">Informations de contact</p>
                                        </div>
                                        <div class=\"card-body bg-";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 185), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 185), "html", null, true);
        echo "\">
                                            <div class=\"form-group\">
                                                <div class=\"custom-control custom-switch\">
                                                    <input class=\"custom-control-input\" type=\"checkbox\" name=\"useMail\" id=\"switch-usemaildiff\" onchange=\"checkUse('mail', this.checked, 'mail@domain.fr')\" ";
        // line 188
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mail", [], "any", false, false, false, 188), null)) || twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Mail", [], "array", true, true, false, 188))) {
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
        // line 198
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Mail", [], "array", true, true, false, 198)) ? (_twig_default_filter((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["errors"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["Mail"] ?? null) : null), "")) : ("")), "html", null, true);
        echo "\" type=\"email\" placeholder=\"\" value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mail", [], "any", true, true, false, 198)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mail", [], "any", false, false, false, 198), "")) : ("")), "html", null, true);
        echo "\" name=\"Mail\" id=\"mail\" minlength=\"2\" maxlength=\"255\"  ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mail", [], "any", false, false, false, 198), null))) {
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
        // line 206
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 206), null))) {
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
        // line 216
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Phone", [], "array", true, true, false, 216)) ? (_twig_default_filter((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["errors"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["Phone"] ?? null) : null), "")) : ("")), "html", null, true);
        echo "\" type=\"tel\" placeholder=\"\" value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", true, true, false, 216)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 216), "")) : ("")), "html", null, true);
        echo "\" name=\"Phone\" id=\"phone\" minlength=\"2\" maxlength=\"255\"  ";
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 216), null)) || twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Phone", [], "array", true, true, false, 216))) {
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
        // line 224
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 224), "html", null, true);
        echo "\">
                                        <div class=\"card-header py-3 bg-";
        // line 225
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 225), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 225), "html", null, true);
        echo "\">
                                            <p class=\"text-";
        // line 226
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 226), "html", null, true);
        echo " m-0 font-weight-bold\">Paramètres sur les forums</p>
                                        </div>
                                        <div class=\"card-body bg-";
        // line 228
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 228), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 228), "html", null, true);
        echo "\">
                                            <div class=\"form-group\">
                                                <div class=\"custom-control custom-switch\">
                                                    <input class=\"custom-control-input\" type=\"checkbox\" name=\"usePseudo\" id=\"switch-usepseudo\" onchange=\"checkUse('pseudo', this.checked, 'LeCafarDu93')\" ";
        // line 231
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "pseudo", [], "any", false, false, false, 231), null))) {
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
        // line 241
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Pseudo", [], "array", true, true, false, 241)) ? (_twig_default_filter((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["errors"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["Pseudo"] ?? null) : null), "")) : ("")), "html", null, true);
        echo "\" type=\"text\" placeholder=\"\" value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "pseudo", [], "any", true, true, false, 241)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "pseudo", [], "any", false, false, false, 241), "")) : ("")), "html", null, true);
        echo "\" name=\"Pseudo\" id=\"pseudo\" minlength=\"2\" maxlength=\"128\"  ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "pseudo", [], "any", false, false, false, 241), null))) {
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
        // line 260
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 260), "html", null, true);
        echo "\">
                    <span>Copyright © CEFC Developers Team ";
        // line 261
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env, "Y"), "Y"), "html", null, true);
        echo "</span>
                </div>
            </div>
        </footer>
        ";
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
        return array (  540 => 261,  536 => 260,  508 => 241,  493 => 231,  485 => 228,  480 => 226,  474 => 225,  470 => 224,  453 => 216,  438 => 206,  421 => 198,  406 => 188,  398 => 185,  393 => 183,  387 => 182,  383 => 181,  369 => 172,  355 => 163,  344 => 157,  339 => 155,  333 => 154,  329 => 153,  287 => 114,  283 => 113,  278 => 111,  263 => 101,  255 => 100,  247 => 99,  236 => 91,  224 => 84,  219 => 82,  213 => 81,  209 => 80,  195 => 71,  182 => 63,  169 => 55,  156 => 47,  147 => 43,  137 => 38,  132 => 36,  126 => 35,  122 => 34,  113 => 28,  106 => 26,  98 => 22,  89 => 15,  87 => 14,  79 => 13,  76 => 12,  74 => 11,  63 => 9,  61 => 8,  58 => 7,  54 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/user/edit.html.twig", "/Users/romainmunier/Documents/Projets/Symfony/ptuts3s4/templates/dashboard/user/edit.html.twig");
    }
}
