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

/* includes/home/modal.html.twig */
class __TwigTemplate_09a737aea6fa17bba1680e702d392dd41a9b403fe6cfb14b7132326d5c6d2675 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/home/modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/home/modal.html.twig"));

        // line 1
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <div class=\"modal fade\" id=\"loginModal\" tabindex=\"-1\" aria-labelledby=\"loginModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\" style=\"background: #AE8F42\">
                <div class=\"modal-body\" id=\"loginCollapse\">
                    <h4 class=\"text-white\">Connectez-vous à votre compte</h4>
                    <hr>
                    <form action=\"";
            // line 8
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" id=\"loginForm\" method=\"POST\">
                        <div class=\"alert alert-success\" role=\"alert\" style=\"display: none\" id=\"SUCCESSFULL_CREATION_ACCOUNT\">
                            Votre compte a été créé avec succès ! Vous pouvez vous connecter dès maintenant !
                        </div>
                        <div class=\"form-group\">
                            <label for=\"usernameLoginInput\" class=\"text-white\">
                                <strong>Identifiant</strong>
                            </label>
                            <input type=\"text\" class=\"form-control\" id=\"usernameLoginInput\" name=\"_username\" minlength=\"4\" maxlength=\"128\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"passwordLoginInput\" class=\"text-white\">
                                <strong>Mot de passe</strong>
                            </label>
                            <input type=\"password\" class=\"form-control\" id=\"passwordLoginInput\" name=\"_password\" minlength=\"4\" maxlength=\"128\" required>
                        </div>
                        <div class=\"form-group form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"ssdmInput\" name=\"remember_me\">
                            <label class=\"form-check-label\" for=\"ssdmInput\">Se souvenir de moi</label>
                        </div>
                        <div class=\"modal-footer\" style=\"justify-content: left\">
                            <button type=\"button\" class=\"btn btn-dark\" onclick=\"\$('#registerModal').modal();\">Inscription</button>
                            <button type=\"submit\" class=\"btn btn-primary\">Connexion</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 38
        echo "
";
        // line 39
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39)) {
            // line 40
            echo "    <div class=\"modal fade\" id=\"registerModal\" tabindex=\"-1\" aria-labelledby=\"registerModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg modal-dialog-centered\">
            <div class=\"modal-content\" style=\"background: #AE8F42\">
                <div class=\"modal-body\" id=\"loginCollapse\">
                    <h4 class=\"text-white\">Rejoignez notre communauté !</h4>
                    <hr>
                    <form action=\"#\" method=\"POST\" id=\"registerForm\" onsubmit=\"onRegister(); return false;\">
                        <div class=\"form-row\">
                            <div class=\"col-lg-6\">
                                <label for=\"firstnameRegisterInput\" class=\"text-white\">
                                    <strong>Prénom</strong>
                                </label>
                                <input type=\"text\" class=\"form-control\" id=\"firstnameRegisterInput\" name=\"Firstname\" minlength=\"2\" maxlength=\"128\" required>
                            </div>
                            <div class=\"col-lg-6\">
                                <label for=\"lastnameRegisterInput\" class=\"text-white\">
                                    <strong>NOM</strong>
                                </label>
                                <input type=\"text\" class=\"form-control\" id=\"lastnameRegisterInput\" name=\"Lastname\" minlength=\"2\" maxlength=\"128\" required>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"usernameRegisterInput\" class=\"text-white\">
                                <strong>Identifiant</strong>
                            </label>
                            <input type=\"text\" class=\"form-control\" id=\"usernameRegisterInput\" name=\"Username\" minlength=\"4\" maxlength=\"128\" required oninput=\"checkRegisterUsername(this.value)\">
                        </div>
                        <div class=\"alert alert-danger\" role=\"alert\" style=\"display: none\" id=\"USERNAME_ALREADY_USED\">
                            L'identifiant renseigné est déjà utilisé. Veuillez en choisir un autre.
                        </div>
                        <div class=\"form-group\">
                            <label for=\"passwordRegisterInput\" class=\"text-white\">
                                <strong>Mot de passe</strong>
                            </label>
                            <input type=\"password\" class=\"form-control\" id=\"passwordRegisterInput\" name=\"Password\" minlength=\"4\" maxlength=\"128\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"passwordRegisterConfirmationInput\" class=\"text-white\">
                                <strong>Confirmation</strong>
                            </label>
                            <input type=\"password\" class=\"form-control\" id=\"passwordRegisterConfirmationInput\" name=\"PasswordConfirmation\" minlength=\"4\" maxlength=\"128\" required>
                        </div>
                        <div class=\"alert alert-danger\" role=\"alert\" style=\"display: none\" id=\"PASSWORD_NOT_EQUAL\">
                            Les deux mots de passe entrés ne correspondent pas. Veuillez réessayer.
                        </div>
                        <div class=\"modal-footer\" style=\"justify-content: left\">
                            <button type=\"button\" class=\"btn btn-dark\" onclick=\"\$('#registerModal').modal('hide')\">Annuler</button>
                            <button type=\"submit\" class=\"btn btn-primary\">M'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/home/modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 40,  89 => 39,  86 => 38,  53 => 8,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not app.user %}
    <div class=\"modal fade\" id=\"loginModal\" tabindex=\"-1\" aria-labelledby=\"loginModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\" style=\"background: #AE8F42\">
                <div class=\"modal-body\" id=\"loginCollapse\">
                    <h4 class=\"text-white\">Connectez-vous à votre compte</h4>
                    <hr>
                    <form action=\"{{ path('login') }}\" id=\"loginForm\" method=\"POST\">
                        <div class=\"alert alert-success\" role=\"alert\" style=\"display: none\" id=\"SUCCESSFULL_CREATION_ACCOUNT\">
                            Votre compte a été créé avec succès ! Vous pouvez vous connecter dès maintenant !
                        </div>
                        <div class=\"form-group\">
                            <label for=\"usernameLoginInput\" class=\"text-white\">
                                <strong>Identifiant</strong>
                            </label>
                            <input type=\"text\" class=\"form-control\" id=\"usernameLoginInput\" name=\"_username\" minlength=\"4\" maxlength=\"128\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"passwordLoginInput\" class=\"text-white\">
                                <strong>Mot de passe</strong>
                            </label>
                            <input type=\"password\" class=\"form-control\" id=\"passwordLoginInput\" name=\"_password\" minlength=\"4\" maxlength=\"128\" required>
                        </div>
                        <div class=\"form-group form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"ssdmInput\" name=\"remember_me\">
                            <label class=\"form-check-label\" for=\"ssdmInput\">Se souvenir de moi</label>
                        </div>
                        <div class=\"modal-footer\" style=\"justify-content: left\">
                            <button type=\"button\" class=\"btn btn-dark\" onclick=\"\$('#registerModal').modal();\">Inscription</button>
                            <button type=\"submit\" class=\"btn btn-primary\">Connexion</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endif %}

{% if not app.user %}
    <div class=\"modal fade\" id=\"registerModal\" tabindex=\"-1\" aria-labelledby=\"registerModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg modal-dialog-centered\">
            <div class=\"modal-content\" style=\"background: #AE8F42\">
                <div class=\"modal-body\" id=\"loginCollapse\">
                    <h4 class=\"text-white\">Rejoignez notre communauté !</h4>
                    <hr>
                    <form action=\"#\" method=\"POST\" id=\"registerForm\" onsubmit=\"onRegister(); return false;\">
                        <div class=\"form-row\">
                            <div class=\"col-lg-6\">
                                <label for=\"firstnameRegisterInput\" class=\"text-white\">
                                    <strong>Prénom</strong>
                                </label>
                                <input type=\"text\" class=\"form-control\" id=\"firstnameRegisterInput\" name=\"Firstname\" minlength=\"2\" maxlength=\"128\" required>
                            </div>
                            <div class=\"col-lg-6\">
                                <label for=\"lastnameRegisterInput\" class=\"text-white\">
                                    <strong>NOM</strong>
                                </label>
                                <input type=\"text\" class=\"form-control\" id=\"lastnameRegisterInput\" name=\"Lastname\" minlength=\"2\" maxlength=\"128\" required>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"usernameRegisterInput\" class=\"text-white\">
                                <strong>Identifiant</strong>
                            </label>
                            <input type=\"text\" class=\"form-control\" id=\"usernameRegisterInput\" name=\"Username\" minlength=\"4\" maxlength=\"128\" required oninput=\"checkRegisterUsername(this.value)\">
                        </div>
                        <div class=\"alert alert-danger\" role=\"alert\" style=\"display: none\" id=\"USERNAME_ALREADY_USED\">
                            L'identifiant renseigné est déjà utilisé. Veuillez en choisir un autre.
                        </div>
                        <div class=\"form-group\">
                            <label for=\"passwordRegisterInput\" class=\"text-white\">
                                <strong>Mot de passe</strong>
                            </label>
                            <input type=\"password\" class=\"form-control\" id=\"passwordRegisterInput\" name=\"Password\" minlength=\"4\" maxlength=\"128\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"passwordRegisterConfirmationInput\" class=\"text-white\">
                                <strong>Confirmation</strong>
                            </label>
                            <input type=\"password\" class=\"form-control\" id=\"passwordRegisterConfirmationInput\" name=\"PasswordConfirmation\" minlength=\"4\" maxlength=\"128\" required>
                        </div>
                        <div class=\"alert alert-danger\" role=\"alert\" style=\"display: none\" id=\"PASSWORD_NOT_EQUAL\">
                            Les deux mots de passe entrés ne correspondent pas. Veuillez réessayer.
                        </div>
                        <div class=\"modal-footer\" style=\"justify-content: left\">
                            <button type=\"button\" class=\"btn btn-dark\" onclick=\"\$('#registerModal').modal('hide')\">Annuler</button>
                            <button type=\"submit\" class=\"btn btn-primary\">M'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endif %}", "includes/home/modal.html.twig", "D:\\romainmunier\\Documents\\GitHub\\ptuts3s4\\templates\\includes\\home\\modal.html.twig");
    }
}
