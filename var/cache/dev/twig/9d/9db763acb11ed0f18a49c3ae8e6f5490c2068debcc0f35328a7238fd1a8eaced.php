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
                            <button type=\"submit\" class=\"btn btn-primary\">Connexion</button>
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
        return array (  53 => 8,  45 => 2,  43 => 1,);
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
                            <button type=\"submit\" class=\"btn btn-primary\">Connexion</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endif %}", "includes/home/modal.html.twig", "C:\\Users\\romainmunier\\Documents\\GitHub\\ptuts3s4\\templates\\includes\\home\\modal.html.twig");
    }
}
