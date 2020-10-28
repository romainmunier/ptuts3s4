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

/* index/register.html.twig */
class __TwigTemplate_c18c824178a7ce4a28f163000d1c72589080790c94fdf9cfb4601191e713387b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("base.html.twig", "index/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"container\" style=\"max-width: none !important; width: 100% !important;\">
        <div class=\"card o-hidden border-0 my-5\" style=\"background: none !important;\">
            <div class=\"card-body p-0\">
                <div class=\"row text-center text-sm-center text-md-center text-lg-center text-xl-center d-flex justify-content-center align-items-center align-content-center\">
                    <div class=\"col-lg-12\">
                        <div class=\"cmpadding-51\">
                            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/background/banner3.png"), "html", null, true);
        echo "\" style=\"max-width: 100%;\">
                            <hr>
                            <div class=\"text-center\">
                                <h4 class=\"text-dark mb-4\">Créer mon compte</h4>
                            </div>
                            <div style=\"text-align: justify;\">
                                <form action=\"\" method=\"POST\">
                                    <div class=\"card shadow\">
                                        <div class=\"card-header py-3\">
                                            <p class=\"text-primary m-0 font-weight-bold\">Informations utilisateur</p>
                                        </div>
                                        <div class=\"card-body bg-light\">
                                            <div class=\"form-group\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-6\">
                                                        <label for=\"userFirstname\">
                                                            <strong>Prénom</strong>
                                                        </label>
                                                        <input type=\"text\" name=\"Firstname\" id=\"userFirstname\" class=\"form-control\" minlength=\"2\" maxlength=\"128\" required>
                                                    </div>
                                                    <div class=\"col-lg-6\">
                                                        <label for=\"userLastname\">
                                                            <strong>Nom</strong>
                                                        </label>
                                                        <input type=\"text\" name=\"Lastname\" id=\"userLastname\" class=\"form-control\" minlength=\"2\" maxlength=\"128\" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"userMail\">
                                                    <strong>Adresse mail</strong>
                                                </label>
                                                <input type=\"email\" name=\"Mail\" id=\"userMail\" class=\"form-control\" minlength=\"2\" maxlength=\"256\" required>
                                            </div>
                                        </div>
                                    </div>

                                    <br>

                                    <div class=\"card shadow\">
                                        <div class=\"card-header py-3\">
                                            <p class=\"text-primary m-0 font-weight-bold\">Informations du compte</p>
                                        </div>
                                        <div class=\"card-body\">
                                            <div class=\"form-group\">
                                                <label for=\"userLogin\">
                                                    <strong>Identifiant</strong>
                                                </label>
                                                <input type=\"text\" name=\"Username\" id=\"userLogin\" class=\"form-control\" minlength=\"2\" maxlength=\"256\" required>
                                            </div>
                                            <div class=\"form-group\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-6\">
                                                        <label for=\"userPassword\">
                                                            <strong>Mot de passe</strong>
                                                        </label>
                                                        <input type=\"password\" name=\"Password\" id=\"userPassword\" class=\"form-control\" minlength=\"2\" maxlength=\"256\" required oninput=\"checkPasswordStrength(this.value); checkSamePasswordRegister(this.value, document.getElementById('userCheckPassword').value)\">
                                                    </div>
                                                    <div class=\"col-lg-6\">
                                                        <label for=\"userCheckPassword\">
                                                            <strong>Confirmer le mot de passe</strong>
                                                        </label>
                                                        <input type=\"password\" name=\"CheckPassword\" id=\"userCheckPassword\" class=\"form-control\" minlength=\"2\" maxlength=\"256\" required oninput=\"checkSamePasswordRegister(document.getElementById('userPassword').value, this.value)\">
                                                    </div>
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

                                            <div class=\"alert alert-danger\" id=\"error_NOT_SAME_PASSWORD\" role=\"alert\" style=\"display: none\">
                                                Les deux mots de passe ne correspondent pas. Veuillez réessayer avant de valider l'inscription.
                                            </div>
                                        </div>
                                    </div>

                                    <br>

                                    <div class=\"card shadow\">
                                        <div class=\"card-header py-3\">
                                            <p class=\"text-primary m-0 font-weight-bold\">Valider la création du compte</p>
                                        </div>
                                        <div class=\"card-body\">
                                            <div class=\"custom-control custom-checkbox mb-3\">
                                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"approveCGU\" required>
                                                <label class=\"custom-control-label\" for=\"approveCGU\">J'accepte les <a href=\"\">CGU (Conditions Générales d'Utilisation)</a></label>
                                            </div>
                                            <div class=\"custom-control custom-checkbox mb-3\">
                                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"approveAccount\" required>
                                                <label class=\"custom-control-label\" for=\"approveAccount\">Je confirme avoir pris connaissance des CGU ainsi que des règles à respecter. Je souhaite créer mon compte dès maintenant</label>
                                            </div>
                                            <div class=\"form-group text-center\">
                                                <button type=\"submit\" class=\"btn btn-success\">Créer mon compte</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <br>

                            <div class=\"text-center\">
                                <a class=\"small\" href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Vous avez déjà un compte ? Connectez-vous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "index/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 117,  58 => 10,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index/register.html.twig", "D:\\romainmunier\\Documents\\GitHub\\ptuts3s4\\templates\\index\\register.html.twig");
    }
}
