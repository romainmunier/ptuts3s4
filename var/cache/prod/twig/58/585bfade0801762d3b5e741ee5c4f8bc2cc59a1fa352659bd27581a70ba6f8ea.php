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
class __TwigTemplate_7d3acb70e071755f92aec87d61de99de46328e1c973ff89004698ce0d0e7022d extends Template
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
        // line 1
        if ( !twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1)) {
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
        return array (  47 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/home/modal.html.twig", "/Users/romainmunier/Documents/Projets/Symfony/ptuts3s4/templates/includes/home/modal.html.twig");
    }
}
