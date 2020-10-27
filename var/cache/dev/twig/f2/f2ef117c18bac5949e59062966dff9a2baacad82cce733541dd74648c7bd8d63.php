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
                <div class=\"row mb-3\">
                    <div class=\"col-lg-4\">
                        <div class=\"card mb-3 bg-";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 16, $this->source); })()), "theme", [], "any", false, false, false, 16), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 16, $this->source); })()), "color", [], "any", false, false, false, 16), "html", null, true);
        echo "\">
                            <div class=\"card-body text-center shadow\">
                                <img class=\"rounded-circle mb-3 mt-4\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profile/paladomas.jpg"), "html", null, true);
        echo "\" width=\"160\" height=\"160\">
                                <div class=\"mb-3\">
                                    <button class=\"btn btn-primary btn-sm\" type=\"button\">Changer de photo</button>
                                </div>
                            </div>
                        </div>
                        <div class=\"card shadow mb-4 border-";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 24, $this->source); })()), "color", [], "any", false, false, false, 24), "html", null, true);
        echo "\">
                            <div class=\"card-header py-3 bg-";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 25, $this->source); })()), "theme", [], "any", false, false, false, 25), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 25, $this->source); })()), "color", [], "any", false, false, false, 25), "html", null, true);
        echo "\">
                                <h6 class=\"text-";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 26, $this->source); })()), "color", [], "any", false, false, false, 26), "html", null, true);
        echo " font-weight-bold m-0\">Projects</h6>
                            </div>
                            <div class=\"card-body bg-";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 28, $this->source); })()), "theme", [], "any", false, false, false, 28), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 28, $this->source); })()), "color", [], "any", false, false, false, 28), "html", null, true);
        echo "\">
                                <h4 class=\"small font-weight-bold\">
                                    Server migration
                                    <span class=\"float-right\">20%</span>
                                </h4>
                                <div class=\"progress progress-sm mb-3\">
                                    <div class=\"progress-bar bg-danger\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%;\">
                                        <span class=\"sr-only\">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-8\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"card shadow mb-3 border-";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 44, $this->source); })()), "color", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
                                    <div class=\"card-header py-3 bg-";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 45, $this->source); })()), "theme", [], "any", false, false, false, 45), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 45, $this->source); })()), "color", [], "any", false, false, false, 45), "html", null, true);
        echo "\">
                                        <p class=\"text-";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 46, $this->source); })()), "color", [], "any", false, false, false, 46), "html", null, true);
        echo " m-0 font-weight-bold\">Informations de connexion</p>
                                    </div>
                                    <div class=\"card-body bg-";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 48, $this->source); })()), "theme", [], "any", false, false, false, 48), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 48, $this->source); })()), "color", [], "any", false, false, false, 48), "html", null, true);
        echo "\">
                                        <form action=\"\" method=\"POST\">
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
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "username", [], "any", false, false, false, 62), "html", null, true);
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
                                        </form>
                                        <div class=\"modal fade\" id=\"modal-updatepassword\" tabindex=\"-1\" aria-labelledby=\"UpdatePassword\" aria-hidden=\"true\" style=\"height: 90% !important;\">
                                            <div class=\"modal-dialog modal-dialog-centered modal-lg\">
                                                <div class=\"modal-content bg-";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 77, $this->source); })()), "theme", [], "any", false, false, false, 77), "html", null, true);
        echo "\" style=\"border: none; height: 90% !important;\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title text-";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 79, $this->source); })()), "color", [], "any", false, false, false, 79), "html", null, true);
        echo "\" id=\"exampleModalLabel\">Modifier mon mot de passe</h5>
                                                        <button type=\"button\" class=\"close text-";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 80, $this->source); })()), "color", [], "any", false, false, false, 80), "html", null, true);
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
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90), "html", null, true);
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
                                    </div>
                                </div>
                                <div class=\"card shadow border-";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 129, $this->source); })()), "color", [], "any", false, false, false, 129), "html", null, true);
        echo "\">
                                    <div class=\"card-header py-3 bg-";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 130, $this->source); })()), "theme", [], "any", false, false, false, 130), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 130, $this->source); })()), "color", [], "any", false, false, false, 130), "html", null, true);
        echo "\">
                                        <p class=\"text-";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 131, $this->source); })()), "color", [], "any", false, false, false, 131), "html", null, true);
        echo " m-0 font-weight-bold\">Informations de contact</p>
                                    </div>
                                    <div class=\"card-body bg-";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 133, $this->source); })()), "theme", [], "any", false, false, false, 133), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 133, $this->source); })()), "color", [], "any", false, false, false, 133), "html", null, true);
        echo "\">
                                        <form>
                                            <div class=\"form-group\">
                                                <label for=\"address\">
                                                    <strong>Address</strong>
                                                </label>
                                                <input class=\"form-control\" type=\"text\" placeholder=\"Sunset Blvd, 38\" name=\"address\">
                                            </div>
                                            <div class=\"form-row\">
                                                <div class=\"col\">
                                                    <div class=\"form-group\">
                                                        <label for=\"city\">
                                                            <strong>City</strong>
                                                        </label>
                                                        <input class=\"form-control\" type=\"text\" placeholder=\"Los Angeles\" name=\"city\">
                                                    </div>
                                                </div>
                                                <div class=\"col\">
                                                    <div class=\"form-group\">
                                                        <label for=\"country\">
                                                            <strong>Country</strong>
                                                        </label>
                                                        <input class=\"form-control\" type=\"text\" placeholder=\"USA\" name=\"country\">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <button class=\"btn btn-primary btn-sm\" type=\"submit\">Save Settings</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card shadow mb-5 border-";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 169, $this->source); })()), "color", [], "any", false, false, false, 169), "html", null, true);
        echo "\">
                    <div class=\"card-header py-3 bg-";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 170, $this->source); })()), "theme", [], "any", false, false, false, 170), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 170, $this->source); })()), "color", [], "any", false, false, false, 170), "html", null, true);
        echo "\">
                        <p class=\"text-";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 171, $this->source); })()), "color", [], "any", false, false, false, 171), "html", null, true);
        echo " m-0 font-weight-bold\">Paramètres sur les forums</p>
                    </div>
                    <div class=\"card-body bg-";
        // line 173
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 173, $this->source); })()), "theme", [], "any", false, false, false, 173), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 173, $this->source); })()), "color", [], "any", false, false, false, 173), "html", null, true);
        echo "\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <form>
                                    <div class=\"form-group\">
                                        <label for=\"signature\">
                                            <strong>Signature</strong>
                                            <br>
                                        </label>
                                        <textarea class=\"form-control\" rows=\"4\" name=\"signature\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"custom-control custom-switch\">
                                            <input class=\"custom-control-input\" type=\"checkbox\" id=\"formCheck-1\">
                                            <label class=\"custom-control-label\" for=\"formCheck-1\">
                                                <strong>Notify me about new replies</strong>
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <button class=\"btn btn-primary btn-sm\" type=\"submit\">Save Settings</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"text-center my-auto copyright text-";
        // line 204
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 204, $this->source); })()), "color", [], "any", false, false, false, 204), "html", null, true);
        echo "\">
                    <span>Copyright © CEFC Developers Team ";
        // line 205
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
        return array (  394 => 205,  390 => 204,  354 => 173,  349 => 171,  343 => 170,  339 => 169,  298 => 133,  293 => 131,  287 => 130,  283 => 129,  241 => 90,  228 => 80,  224 => 79,  219 => 77,  201 => 62,  182 => 48,  177 => 46,  171 => 45,  167 => 44,  146 => 28,  141 => 26,  135 => 25,  131 => 24,  122 => 18,  115 => 16,  109 => 13,  106 => 12,  104 => 11,  93 => 9,  91 => 8,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
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
                                <h6 class=\"text-{{ userSettings.color }} font-weight-bold m-0\">Projects</h6>
                            </div>
                            <div class=\"card-body bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                                <h4 class=\"small font-weight-bold\">
                                    Server migration
                                    <span class=\"float-right\">20%</span>
                                </h4>
                                <div class=\"progress progress-sm mb-3\">
                                    <div class=\"progress-bar bg-danger\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%;\">
                                        <span class=\"sr-only\">20%</span>
                                    </div>
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
                                        <form action=\"\" method=\"POST\">
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
                                        </form>
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
                                    </div>
                                </div>
                                <div class=\"card shadow border-{{ userSettings.color }}\">
                                    <div class=\"card-header py-3 bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                                        <p class=\"text-{{ userSettings.color }} m-0 font-weight-bold\">Informations de contact</p>
                                    </div>
                                    <div class=\"card-body bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                                        <form>
                                            <div class=\"form-group\">
                                                <label for=\"address\">
                                                    <strong>Address</strong>
                                                </label>
                                                <input class=\"form-control\" type=\"text\" placeholder=\"Sunset Blvd, 38\" name=\"address\">
                                            </div>
                                            <div class=\"form-row\">
                                                <div class=\"col\">
                                                    <div class=\"form-group\">
                                                        <label for=\"city\">
                                                            <strong>City</strong>
                                                        </label>
                                                        <input class=\"form-control\" type=\"text\" placeholder=\"Los Angeles\" name=\"city\">
                                                    </div>
                                                </div>
                                                <div class=\"col\">
                                                    <div class=\"form-group\">
                                                        <label for=\"country\">
                                                            <strong>Country</strong>
                                                        </label>
                                                        <input class=\"form-control\" type=\"text\" placeholder=\"USA\" name=\"country\">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <button class=\"btn btn-primary btn-sm\" type=\"submit\">Save Settings</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card shadow mb-5 border-{{ userSettings.color }}\">
                    <div class=\"card-header py-3 bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                        <p class=\"text-{{ userSettings.color }} m-0 font-weight-bold\">Paramètres sur les forums</p>
                    </div>
                    <div class=\"card-body bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <form>
                                    <div class=\"form-group\">
                                        <label for=\"signature\">
                                            <strong>Signature</strong>
                                            <br>
                                        </label>
                                        <textarea class=\"form-control\" rows=\"4\" name=\"signature\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"custom-control custom-switch\">
                                            <input class=\"custom-control-input\" type=\"checkbox\" id=\"formCheck-1\">
                                            <label class=\"custom-control-label\" for=\"formCheck-1\">
                                                <strong>Notify me about new replies</strong>
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <button class=\"btn btn-primary btn-sm\" type=\"submit\">Save Settings</button>
                                    </div>
                                </form>
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
{# Fin de la gestion de la page #}", "dashboard/user/account.html.twig", "D:\\romainmunier\\Documents\\GitHub\\ptuts3s4\\templates\\dashboard\\user\\account.html.twig");
    }
}
