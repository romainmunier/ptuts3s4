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
class __TwigTemplate_13424a56e98c6b454e230cdc7b28caa8fa6af6b892025b50a67d661032f6fc72 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/user/account.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mon compte";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div id=\"wrapper\">
    ";
        // line 8
        $this->loadTemplate("includes/dashboard/sidebar.html.twig", "dashboard/user/account.html.twig", 8)->display($context);
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
        $this->loadTemplate("includes/dashboard/navbar.html.twig", "dashboard/user/account.html.twig", 11)->display($context);
        // line 12
        echo "            <div class=\"container-fluid\">
                <h3 class=\"text-";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 13), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 18), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 18), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 26), "html", null, true);
        echo "\">
                                <div class=\"card-header py-3 bg-";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 27), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 27), "html", null, true);
        echo "\">
                                    <h6 class=\"text-";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 28), "html", null, true);
        echo " font-weight-bold m-0\">Droits utilisateur</h6>
                                </div>
                                <div class=\"card-body bg-";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 30), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 30), "html", null, true);
        echo "\">
                                    <label>
                                        <strong>Gestion</strong>
                                    </label>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEADMIN\" name=\"Roles[]\" value=\"ROLE_ADMIN\" ";
        // line 35
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 35), "roles", [], "any", false, false, false, 35))) {
            echo "checked";
        }
        echo " readonly disabled>
                                        <label class=\"custom-control-label\" for=\"checkbox_ROLEADMIN\">Administrateur</label>
                                    </div>
                                    <div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"checkbox_ROLEDEVELOPERS\" name=\"Roles[]\" value=\"ROLE_DEVELOPERS\" ";
        // line 39
        if (twig_in_filter("ROLE_DEVELOPERS", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 39), "roles", [], "any", false, false, false, 39))) {
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
        if (twig_in_filter("ROLE_WRITER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 47), "roles", [], "any", false, false, false, 47))) {
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
        if (twig_in_filter("ROLE_MEMBER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 55), "roles", [], "any", false, false, false, 55))) {
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
        if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 63), "roles", [], "any", false, false, false, 63))) {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 72), "html", null, true);
        echo "\">
                                        <div class=\"card-header py-3 bg-";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 73), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 73), "html", null, true);
        echo "\">
                                            <p class=\"text-";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 74), "html", null, true);
        echo " m-0 font-weight-bold\">Informations de connexion</p>
                                        </div>
                                        <div class=\"card-body bg-";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 76), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 76), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 89), "username", [], "any", false, false, false, 89), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 103), "html", null, true);
        echo "\">
                                        <div class=\"card-header py-3 bg-";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 104), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 104), "html", null, true);
        echo "\">
                                            <p class=\"text-";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 105), "html", null, true);
        echo " m-0 font-weight-bold\">Informations de contact</p>
                                        </div>
                                        <div class=\"card-body bg-";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 107), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 107), "html", null, true);
        echo "\">
                                            <div class=\"form-row\">
                                                <div class=\"col-lg-6\">
                                                    <label for=\"firstname\">
                                                        <strong>Prénom</strong>
                                                    </label>
                                                    <input class=\"form-control ";
        // line 113
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Firstname", [], "array", true, true, false, 113)) ? (_twig_default_filter((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["errors"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["Firstname"] ?? null) : null), "")) : ("")), "html", null, true);
        echo "\" type=\"text\" placeholder=\"John\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 113), "firstname", [], "any", false, false, false, 113), "html", null, true);
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
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Lastname", [], "array", true, true, false, 122)) ? (_twig_default_filter((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["errors"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["Lastname"] ?? null) : null), "")) : ("")), "html", null, true);
        echo "\" type=\"text\" placeholder=\"DOE\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 122), "lastname", [], "any", false, false, false, 122), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 131), "html", null, true);
        echo "\">
                                        <div class=\"card-header py-3 bg-";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 132), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 132), "html", null, true);
        echo "\">
                                            <p class=\"text-";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 133), "html", null, true);
        echo " m-0 font-weight-bold\">Paramètres sur les forums</p>
                                        </div>
                                        <div class=\"card-body bg-";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 135), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 135), "html", null, true);
        echo "\">
                                            <div class=\"form-group\">
                                                <div class=\"custom-control custom-switch\">
                                                    <input class=\"custom-control-input\" type=\"checkbox\" name=\"usePseudo\" id=\"switch-usepseudo\" onchange=\"checkUsePseudo(this.checked)\" ";
        // line 138
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 138), "pseudo", [], "any", false, false, false, 138), null))) {
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
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Pseudo", [], "array", true, true, false, 148)) ? (_twig_default_filter((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["errors"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["Pseudo"] ?? null) : null), "")) : ("")), "html", null, true);
        echo "\" type=\"text\" placeholder=\"\" value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 148), "pseudo", [], "any", true, true, false, 148)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 148), "pseudo", [], "any", false, false, false, 148), "")) : ("")), "html", null, true);
        echo "\" name=\"Pseudo\" id=\"pseudo\" minlength=\"2\" maxlength=\"128\"  ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 148), "pseudo", [], "any", false, false, false, 148), null))) {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 167), "html", null, true);
        echo "\" style=\"border: none; height: 90% !important;\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title text-";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 169), "html", null, true);
        echo "\" id=\"exampleModalLabel\">Modifier mon mot de passe</h5>
                        <button type=\"button\" class=\"close text-";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 170), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 180), "id", [], "any", false, false, false, 180), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 219), "html", null, true);
        echo "\">
                    <span>Copyright © CEFC Developers Team ";
        // line 220
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env, "Y"), "Y"), "html", null, true);
        echo "</span>
                </div>
            </div>
        </footer>
        ";
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
        return array (  431 => 220,  427 => 219,  385 => 180,  372 => 170,  368 => 169,  363 => 167,  335 => 148,  320 => 138,  312 => 135,  307 => 133,  301 => 132,  297 => 131,  283 => 122,  269 => 113,  258 => 107,  253 => 105,  247 => 104,  243 => 103,  226 => 89,  208 => 76,  203 => 74,  197 => 73,  193 => 72,  179 => 63,  166 => 55,  153 => 47,  140 => 39,  131 => 35,  121 => 30,  116 => 28,  110 => 27,  106 => 26,  97 => 20,  90 => 18,  83 => 14,  79 => 13,  76 => 12,  74 => 11,  63 => 9,  61 => 8,  58 => 7,  54 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/user/account.html.twig", "D:\\romainmunier\\Documents\\GitHub\\ptuts3s4\\templates\\dashboard\\user\\account.html.twig");
    }
}
