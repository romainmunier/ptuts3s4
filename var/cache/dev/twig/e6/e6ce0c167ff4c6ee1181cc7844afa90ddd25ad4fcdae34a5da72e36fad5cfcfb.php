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

/* dashboard/user/add.html.twig */
class __TwigTemplate_372517c552e36b0824dc2a17ba90e8346decc7d000d09c8bba4606aed5e3f8cc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/user/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/user/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/user/add.html.twig", 1);
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

        echo "Nouvel utilisateur";
        
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
        $this->loadTemplate("includes/dashboard/sidebar.html.twig", "dashboard/user/add.html.twig", 8)->display($context);
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
        $this->loadTemplate("includes/dashboard/navbar.html.twig", "dashboard/user/add.html.twig", 11)->display($context);
        // line 12
        echo "            <div class=\"container-fluid\">
                <h3 class=\"text-";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 13, $this->source); })()), "color", [], "any", false, false, false, 13), "html", null, true);
        echo " mb-4\">Création d'un compte</h3>
                <form action=\"\" method=\"POST\" id=\"createAccountForm\">
                    <input type=\"hidden\" name=\"METHOD\" value=\"ADD\">
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
                        </div>
                        <div class=\"col-lg-8\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"card shadow mb-3 border-";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 30, $this->source); })()), "color", [], "any", false, false, false, 30), "html", null, true);
        echo "\">
                                        <div class=\"card-header py-3 bg-";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 31, $this->source); })()), "theme", [], "any", false, false, false, 31), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 31, $this->source); })()), "color", [], "any", false, false, false, 31), "html", null, true);
        echo "\">
                                            <p class=\"text-";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 32, $this->source); })()), "color", [], "any", false, false, false, 32), "html", null, true);
        echo " m-0 font-weight-bold\">Informations de connexion</p>
                                        </div>
                                        <div class=\"card-body bg-";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 34, $this->source); })()), "theme", [], "any", false, false, false, 34), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 34, $this->source); })()), "color", [], "any", false, false, false, 34), "html", null, true);
        echo "\">
                                            <div class=\"form-row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"form-group\">
                                                        <label for=\"username\">
                                                            <strong>Nom d'utilisateur</strong>
                                                        </label>
                                                        <input class=\"form-control ";
        // line 41
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Username", [], "array", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Username", [], "array", false, false, false, 41), "")) : ("")), "html", null, true);
        echo "\" type=\"text\" placeholder=\"username\" id=\"username\" name=\"Username\" value=\"\" required minlength=\"2\" maxlength=\"255\" oninput=\"checkAlreadyUsedUsername(this.value)\">
                                                        <div class=\"valid-feedback\">
                                                            Ce nom d'utilisateur semble valide !
                                                        </div>
                                                        <div class=\"invalid-feedback\">
                                                            Ce nom d'utilisateur est déjà utilisé ...
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6\">
                                                    <div class=\"form-group\">
                                                        <label for=\"passwordInput\">
                                                            <strong>Mot de passe</strong>
                                                        </label>
                                                        <button style=\"display: ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Password", [], "array", true, true, false, 55)) {
            echo "none";
        } else {
            echo "block";
        }
        echo ";\" type=\"button\" class=\"btn btn-block btn-primary\" id=\"passwordBtn\" onclick=\"\$('#modal-createpassword').modal();\">Créer un mot de passe</button>
                                                        <div id=\"editPasswordDiv\" style=\"display: ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Password", [], "array", true, true, false, 56)) {
            echo "flex";
        } else {
            echo "none";
        }
        echo "; flex-direction: row\">
                                                            <input class=\"form-control ";
        // line 57
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Password", [], "array", true, true, false, 57)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Password", [], "array", false, false, false, 57), "")) : ("")), "html", null, true);
        echo "\" type=\"password\" placeholder=\"\" id=\"passwordInput\" name=\"Password\" value=\"\" readonly required minlength=\"2\" maxlength=\"255\" style=\"border-radius: .35rem 0 0 .35rem; width: 85%;\">
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
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 67, $this->source); })()), "theme", [], "any", false, false, false, 67), "html", null, true);
        echo "\" style=\"border: none; height: 90% !important;\">
                                                        <div class=\"modal-header\">
                                                            <h5 class=\"modal-title text-";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 69, $this->source); })()), "color", [], "any", false, false, false, 69), "html", null, true);
        echo "\" id=\"exampleModalLabel\">Créer un mot de passe</h5>
                                                            <button type=\"button\" class=\"close text-";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 70, $this->source); })()), "color", [], "any", false, false, false, 70), "html", null, true);
        echo "\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            <form action=\"#\" method=\"POST\" id=\"createPasswordForm\" onsubmit=\"createPassword(); return false;\">
                                                                <div class=\"form-group\">
                                                                    <label for=\"createPassword\">
                                                                        <strong>Création du mot de passe</strong>
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
                                                                    <button class=\"btn btn-primary\" type=\"button\" onclick=\"createPassword();\">Créer mon mot de passe</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"card shadow border-";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 109, $this->source); })()), "color", [], "any", false, false, false, 109), "html", null, true);
        echo "\">
                                        <div class=\"card-header py-3 bg-";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 110, $this->source); })()), "theme", [], "any", false, false, false, 110), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 110, $this->source); })()), "color", [], "any", false, false, false, 110), "html", null, true);
        echo "\">
                                            <p class=\"text-";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 111, $this->source); })()), "color", [], "any", false, false, false, 111), "html", null, true);
        echo " m-0 font-weight-bold\">Informations de contact</p>
                                        </div>
                                        <div class=\"card-body bg-";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 113, $this->source); })()), "theme", [], "any", false, false, false, 113), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 113, $this->source); })()), "color", [], "any", false, false, false, 113), "html", null, true);
        echo "\">
                                            <div class=\"form-row\">
                                                <div class=\"col-lg-6\">
                                                    <label for=\"firstname\">
                                                        <strong>Prénom</strong>
                                                    </label>
                                                    <input class=\"form-control ";
        // line 119
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Firstname", [], "array", true, true, false, 119)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Firstname", [], "array", false, false, false, 119), "")) : ("")), "html", null, true);
        echo "\" type=\"text\" placeholder=\"John\" name=\"Firstname\" id=\"firstname\" minlength=\"2\" maxlength=\"128\" required oninput=\"checkRegExp(this.id)\">
                                                    <div class=\"invalid-feedback\">
                                                        Votre prénom doit faire entre 2 et 128 caractères et doit être composé de lettres uniquement
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6\">
                                                    <label for=\"lastname\">
                                                        <strong>Nom</strong>
                                                    </label>
                                                    <input class=\"form-control ";
        // line 128
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Lastname", [], "array", true, true, false, 128)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Lastname", [], "array", false, false, false, 128), "")) : ("")), "html", null, true);
        echo "\" type=\"text\" placeholder=\"DOE\" name=\"Lastname\" id=\"lastname\" minlength=\"2\" maxlength=\"128\" required oninput=\"checkRegExp(this.id)\">
                                                    <div class=\"invalid-feedback\">
                                                        Votre nom doit faire entre 2 et 128 caractères et doit être composé de lettres uniquement
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class=\"form-group\">
                                                <button class=\"btn btn-primary btn-sm\" type=\"submit\">Poursuivre la création</button>
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
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 149, $this->source); })()), "color", [], "any", false, false, false, 149), "html", null, true);
        echo "\">
                    <span>Copyright © CEFC Developers Team ";
        // line 150
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
        return "dashboard/user/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 150,  323 => 149,  299 => 128,  287 => 119,  276 => 113,  271 => 111,  265 => 110,  261 => 109,  219 => 70,  215 => 69,  210 => 67,  197 => 57,  189 => 56,  181 => 55,  164 => 41,  152 => 34,  147 => 32,  141 => 31,  137 => 30,  124 => 20,  117 => 18,  109 => 13,  106 => 12,  104 => 11,  93 => 9,  91 => 8,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvel utilisateur{% endblock %}

{# Gestion de la page #}
{% block body %}
<div id=\"wrapper\">
    {% include \"includes/dashboard/sidebar.html.twig\" %}
    <div class=\"d-flex flex-column {% if not userSettings.medieval[0] %}bg-{{ userSettings.theme }}{% else %}bg-none{% endif %}\" id=\"content-wrapper\">
        <div id=\"content\">
            {% include \"includes/dashboard/navbar.html.twig\" %}
            <div class=\"container-fluid\">
                <h3 class=\"text-{{ userSettings.color }} mb-4\">Création d'un compte</h3>
                <form action=\"\" method=\"POST\" id=\"createAccountForm\">
                    <input type=\"hidden\" name=\"METHOD\" value=\"ADD\">
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
                                                        <input class=\"form-control {{ errors[\"Username\"]|default(\"\") }}\" type=\"text\" placeholder=\"username\" id=\"username\" name=\"Username\" value=\"\" required minlength=\"2\" maxlength=\"255\" oninput=\"checkAlreadyUsedUsername(this.value)\">
                                                        <div class=\"valid-feedback\">
                                                            Ce nom d'utilisateur semble valide !
                                                        </div>
                                                        <div class=\"invalid-feedback\">
                                                            Ce nom d'utilisateur est déjà utilisé ...
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6\">
                                                    <div class=\"form-group\">
                                                        <label for=\"passwordInput\">
                                                            <strong>Mot de passe</strong>
                                                        </label>
                                                        <button style=\"display: {% if errors[\"Password\"] is defined %}none{% else %}block{% endif %};\" type=\"button\" class=\"btn btn-block btn-primary\" id=\"passwordBtn\" onclick=\"\$('#modal-createpassword').modal();\">Créer un mot de passe</button>
                                                        <div id=\"editPasswordDiv\" style=\"display: {% if errors[\"Password\"] is defined %}flex{% else %}none{% endif %}; flex-direction: row\">
                                                            <input class=\"form-control {{ errors[\"Password\"]|default(\"\") }}\" type=\"password\" placeholder=\"\" id=\"passwordInput\" name=\"Password\" value=\"\" readonly required minlength=\"2\" maxlength=\"255\" style=\"border-radius: .35rem 0 0 .35rem; width: 85%;\">
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
                                                            <h5 class=\"modal-title text-{{ userSettings.color }}\" id=\"exampleModalLabel\">Créer un mot de passe</h5>
                                                            <button type=\"button\" class=\"close text-{{ userSettings.color }}\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            <form action=\"#\" method=\"POST\" id=\"createPasswordForm\" onsubmit=\"createPassword(); return false;\">
                                                                <div class=\"form-group\">
                                                                    <label for=\"createPassword\">
                                                                        <strong>Création du mot de passe</strong>
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
                                                                    <button class=\"btn btn-primary\" type=\"button\" onclick=\"createPassword();\">Créer mon mot de passe</button>
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
                                                    <input class=\"form-control {{ errors[\"Firstname\"]|default(\"\") }}\" type=\"text\" placeholder=\"John\" name=\"Firstname\" id=\"firstname\" minlength=\"2\" maxlength=\"128\" required oninput=\"checkRegExp(this.id)\">
                                                    <div class=\"invalid-feedback\">
                                                        Votre prénom doit faire entre 2 et 128 caractères et doit être composé de lettres uniquement
                                                    </div>
                                                </div>
                                                <div class=\"col-lg-6\">
                                                    <label for=\"lastname\">
                                                        <strong>Nom</strong>
                                                    </label>
                                                    <input class=\"form-control {{ errors[\"Lastname\"]|default(\"\") }}\" type=\"text\" placeholder=\"DOE\" name=\"Lastname\" id=\"lastname\" minlength=\"2\" maxlength=\"128\" required oninput=\"checkRegExp(this.id)\">
                                                    <div class=\"invalid-feedback\">
                                                        Votre nom doit faire entre 2 et 128 caractères et doit être composé de lettres uniquement
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class=\"form-group\">
                                                <button class=\"btn btn-primary btn-sm\" type=\"submit\">Poursuivre la création</button>
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
{# Fin de la gestion de la page #}", "dashboard/user/add.html.twig", "D:\\romainmunier\\Documents\\GitHub\\ptuts3s4\\templates\\dashboard\\user\\add.html.twig");
    }
}
