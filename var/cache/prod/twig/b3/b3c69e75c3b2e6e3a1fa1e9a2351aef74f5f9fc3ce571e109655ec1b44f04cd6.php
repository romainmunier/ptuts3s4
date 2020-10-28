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

/* index/login.html.twig */
class __TwigTemplate_3813ebdff6120b1366283337f238692f41aac8d9763827530fdbcbfd694968b9 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "index/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-9 col-lg-12 col-xl-10\">
                <div class=\"card shadow-lg o-hidden border-0 my-5\">
                    <div class=\"card-body p-0\">
                        <div class=\"row text-center justify-content-center\">
                            <div class=\"col-lg-6 text-left\">
                                <div class=\"p-5\">
                                    <div class=\"text-center text-sm-center text-md-center text-lg-center text-xl-center d-flex justify-content-center align-items-center align-content-center align-self-center flex-wrap\">
                                        <img class=\"d-xl-flex bounce animated\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/background/banner3.png"), "html", null, true);
        echo "\">
                                        <br>
                                    </div>
                                    <div class=\"text-center\">
                                        <h4 class=\"text-dark mb-4\">Connectez-vous à votre compte</h4>
                                    </div>
                                    <form class=\"user\" action=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"POST\">
                                        <div class=\"form-group\">
                                            <input class=\"form-control form-control-user\" name=\"_username\" type=\"text\" id=\"inputUsername\" placeholder=\"Identifiant\" required autofocus>
                                        </div>
                                        <div class=\"form-group\">
                                            <input class=\"form-control form-control-user\" name=\"_password\" type=\"password\" id=\"inputPassword\" placeholder=\"Mot de passe\" required>
                                        </div>

                                        <div class=\"form-group\">
                                            <div class=\"custom-control custom-checkbox small\">
                                                <div class=\"form-check\">
                                                    <input class=\"form-check-input custom-control-input\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\">
                                                    <label class=\"form-check-label custom-control-label\" for=\"remember_me\">Se souvenir de moi</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button class=\"btn btn-primary btn-block text-white btn-user\" type=\"submit\">Connexion</button>
                                        <hr>
";
        // line 40
        echo "                                    </form>
                                </div>
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
        return "index/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 40,  70 => 19,  61 => 13,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index/login.html.twig", "D:\\romainmunier\\Documents\\GitHub\\ptuts3s4\\templates\\index\\login.html.twig");
    }
}
