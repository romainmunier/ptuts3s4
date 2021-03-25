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

/* dashboard/mailinglist/show.html.twig */
class __TwigTemplate_f11ac8c858506c68c9bef4af0bd4768483efe012704656816e3147784921da82 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/mailinglist/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/mailinglist/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/mailinglist/show.html.twig", 1);
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

        echo "Diffusion";
        
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
        $this->loadTemplate("includes/dashboard/sidebar.html.twig", "dashboard/mailinglist/show.html.twig", 8)->display($context);
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
        $this->loadTemplate("includes/dashboard/navbar.html.twig", "dashboard/mailinglist/show.html.twig", 11)->display($context);
        // line 12
        echo "            <div class=\"container-fluid\">
                <h3 class=\"text-";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 13, $this->source); })()), "color", [], "any", false, false, false, 13), "html", null, true);
        echo " mb-0\">Modification de la liste : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mailing"]) || array_key_exists("mailing", $context) ? $context["mailing"] : (function () { throw new RuntimeError('Variable "mailing" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h3>
                <br>
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"card shadow mb-3 border-";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 17, $this->source); })()), "color", [], "any", false, false, false, 17), "html", null, true);
        echo "\">
                            <div class=\"card-header py-3 bg-";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 18, $this->source); })()), "theme", [], "any", false, false, false, 18), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 18, $this->source); })()), "color", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
                                <p class=\"text-";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 19, $this->source); })()), "color", [], "any", false, false, false, 19), "html", null, true);
        echo " m-0 font-weight-bold\">Configuration</p>
                            </div>
                            <div class=\"card-body bg-";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 21, $this->source); })()), "theme", [], "any", false, false, false, 21), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 21, $this->source); })()), "color", [], "any", false, false, false, 21), "html", null, true);
        echo "\">
                                <div class=\"form-group\">
                                    <label for=\"type\" class=\"text-";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 23, $this->source); })()), "color", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
                                        <strong>Type de liste</strong>
                                    </label>
                                    <select class=\"form-control\" id=\"type\" name=\"Type\" required readonly disabled>
                                        <option value=\"\" readonly disabled selected>-- Sélectionner un type</option>
                                        <option value=\"HYBRID\" ";
        // line 28
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["mailing"]) || array_key_exists("mailing", $context) ? $context["mailing"] : (function () { throw new RuntimeError('Variable "mailing" does not exist.', 28, $this->source); })()), "type", [], "any", false, false, false, 28), "HYBRID"))) {
            echo "selected";
        }
        echo ">Liste hybride</option>
                                        <option value=\"MAIL\" ";
        // line 29
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["mailing"]) || array_key_exists("mailing", $context) ? $context["mailing"] : (function () { throw new RuntimeError('Variable "mailing" does not exist.', 29, $this->source); })()), "type", [], "any", false, false, false, 29), "MAIL"))) {
            echo "selected";
        }
        echo ">Liste d'adresses mail</option>
                                        <option value=\"PHONE\" ";
        // line 30
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["mailing"]) || array_key_exists("mailing", $context) ? $context["mailing"] : (function () { throw new RuntimeError('Variable "mailing" does not exist.', 30, $this->source); })()), "type", [], "any", false, false, false, 30), "PHONE"))) {
            echo "selected";
        }
        echo ">Liste de numéros de téléphones</option>
                                    </select>
                                    <div class=\"invalid-feedback\">
                                        Le type sélectionné est invalide.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-8\">
                        <div class=\"card shadow mb-3 border-";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 40, $this->source); })()), "color", [], "any", false, false, false, 40), "html", null, true);
        echo "\">
                            <div class=\"card-header py-3 bg-";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 41, $this->source); })()), "theme", [], "any", false, false, false, 41), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 41, $this->source); })()), "color", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
                                <p class=\"text-";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 42, $this->source); })()), "color", [], "any", false, false, false, 42), "html", null, true);
        echo " m-0 font-weight-bold\">Informations sur la liste</p>
                            </div>
                            <div class=\"card-body bg-";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 44, $this->source); })()), "theme", [], "any", false, false, false, 44), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 44, $this->source); })()), "color", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
                                <div class=\"form-group\">
                                    <label for=\"name\" class=\"text-";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 46, $this->source); })()), "color", [], "any", false, false, false, 46), "html", null, true);
        echo "\">
                                        <strong>Nom de la liste</strong>
                                    </label>
                                    <input class=\"form-control\" type=\"text\" placeholder=\"Liste de diffusion ...\" id=\"name\" name=\"Name\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "name", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "name", [], "any", false, false, false, 49), "")) : ("")), "html", null, true);
        echo "\" required readonly minlength=\"2\" maxlength=\"128\" oninput=\"checkRegExp(this.id, 'NAME')\">
                                    <div class=\"valid-feedback\">
                                        Ce nom semble correct !
                                    </div>
                                    <div class=\"invalid-feedback\">
                                        Le nom de la liste ne respecte pas les spécifications demandées.
                                    </div>
                                </div>
                                <div class=\"custom-control custom-switch\">
                                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"useSumup\" ";
        // line 58
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["mailing"]) || array_key_exists("mailing", $context) ? $context["mailing"] : (function () { throw new RuntimeError('Variable "mailing" does not exist.', 58, $this->source); })()), "sumup", [], "any", false, false, false, 58))) {
            echo "checked";
        }
        echo " disabled>
                                    <label class=\"custom-control-label text-";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 59, $this->source); })()), "color", [], "any", false, false, false, 59), "html", null, true);
        echo "\" for=\"useSumup\" name=\"useSumup\">Utilise une description</label>
                                </div>
                                <br>
                                <div class=\"form-group\" id=\"sumupDiv\" ";
        // line 62
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["mailing"]) || array_key_exists("mailing", $context) ? $context["mailing"] : (function () { throw new RuntimeError('Variable "mailing" does not exist.', 62, $this->source); })()), "sumup", [], "any", false, false, false, 62))) {
            echo "style=\"display: none\"";
        }
        echo ">
                                    <label for=\"sumup\" class=\"text-";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 63, $this->source); })()), "color", [], "any", false, false, false, 63), "html", null, true);
        echo "\">
                                        <strong>Description de la liste</strong>
                                    </label>
                                    <textarea class=\"form-control\" name=\"Sumup\" id=\"sumup\" rows=\"3\" minlength=\"0\" maxlength=\"1024\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mailing"]) || array_key_exists("mailing", $context) ? $context["mailing"] : (function () { throw new RuntimeError('Variable "mailing" does not exist.', 66, $this->source); })()), "sumup", [], "any", false, false, false, 66), "html", null, true);
        echo "</textarea>
                                    <div class=\"invalid-feedback\">
                                        La description semble éronnée.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card shadow mb-3 border-";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 75, $this->source); })()), "color", [], "any", false, false, false, 75), "html", null, true);
        echo "\">
                    <div class=\"card-header py-3 bg-";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 76, $this->source); })()), "theme", [], "any", false, false, false, 76), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 76, $this->source); })()), "color", [], "any", false, false, false, 76), "html", null, true);
        echo "\">
                        <p class=\"text-";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 77, $this->source); })()), "color", [], "any", false, false, false, 77), "html", null, true);
        echo " m-0 font-weight-bold\">Gestion des destinataires</p>
                    </div>
                    <div class=\"card-body bg-";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 79, $this->source); })()), "theme", [], "any", false, false, false, 79), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 79, $this->source); })()), "color", [], "any", false, false, false, 79), "html", null, true);
        echo "\">
                        <div id=\"shared-lists\" class=\"row\">
                            <h4 class=\"col-12 text-";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 81, $this->source); })()), "color", [], "any", false, false, false, 81), "html", null, true);
        echo "\">Utilisateurs dans la liste</h4>
                            <div id=\"assigned-user\" class=\"list-group col\">
                                ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 83, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 84
            echo "                                    ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 84), twig_get_attribute($this->env, $this->source, (isset($context["mailing"]) || array_key_exists("mailing", $context) ? $context["mailing"] : (function () { throw new RuntimeError('Variable "mailing" does not exist.', 84, $this->source); })()), "list", [], "any", false, false, false, 84))) {
                // line 85
                echo "                                        <div class=\"list-group-item\" id=\"assigned-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 85), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 85), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 85), "html", null, true);
                echo "</div>
                                    ";
            }
            // line 87
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard/Sortable.js"), "html", null, true);
        echo "\"></script>
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"text-center my-auto copyright text-";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 97, $this->source); })()), "color", [], "any", false, false, false, 97), "html", null, true);
        echo "\">
                    <span>Copyright © CEFC Developers Team ";
        // line 98
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
        return "dashboard/mailinglist/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 98,  315 => 97,  309 => 94,  301 => 88,  295 => 87,  285 => 85,  282 => 84,  278 => 83,  273 => 81,  266 => 79,  261 => 77,  255 => 76,  251 => 75,  239 => 66,  233 => 63,  227 => 62,  221 => 59,  215 => 58,  203 => 49,  197 => 46,  190 => 44,  185 => 42,  179 => 41,  175 => 40,  160 => 30,  154 => 29,  148 => 28,  140 => 23,  133 => 21,  128 => 19,  122 => 18,  118 => 17,  109 => 13,  106 => 12,  104 => 11,  93 => 9,  91 => 8,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Diffusion{% endblock %}

{# Gestion de la page #}
{% block body %}
<div id=\"wrapper\">
    {% include \"includes/dashboard/sidebar.html.twig\" %}
    <div class=\"d-flex flex-column {% if not userSettings.medieval[0] %}bg-{{ userSettings.theme }}{% else %}bg-none{% endif %}\" id=\"content-wrapper\">
        <div id=\"content\">
            {% include \"includes/dashboard/navbar.html.twig\" %}
            <div class=\"container-fluid\">
                <h3 class=\"text-{{ userSettings.color}} mb-0\">Modification de la liste : {{ mailing.name }}</h3>
                <br>
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"card shadow mb-3 border-{{ userSettings.color }}\">
                            <div class=\"card-header py-3 bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                                <p class=\"text-{{ userSettings.color }} m-0 font-weight-bold\">Configuration</p>
                            </div>
                            <div class=\"card-body bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                                <div class=\"form-group\">
                                    <label for=\"type\" class=\"text-{{ userSettings.color }}\">
                                        <strong>Type de liste</strong>
                                    </label>
                                    <select class=\"form-control\" id=\"type\" name=\"Type\" required readonly disabled>
                                        <option value=\"\" readonly disabled selected>-- Sélectionner un type</option>
                                        <option value=\"HYBRID\" {% if mailing.type == \"HYBRID\" %}selected{% endif %}>Liste hybride</option>
                                        <option value=\"MAIL\" {% if mailing.type == \"MAIL\" %}selected{% endif %}>Liste d'adresses mail</option>
                                        <option value=\"PHONE\" {% if mailing.type == \"PHONE\" %}selected{% endif %}>Liste de numéros de téléphones</option>
                                    </select>
                                    <div class=\"invalid-feedback\">
                                        Le type sélectionné est invalide.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-8\">
                        <div class=\"card shadow mb-3 border-{{ userSettings.color }}\">
                            <div class=\"card-header py-3 bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                                <p class=\"text-{{ userSettings.color }} m-0 font-weight-bold\">Informations sur la liste</p>
                            </div>
                            <div class=\"card-body bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                                <div class=\"form-group\">
                                    <label for=\"name\" class=\"text-{{ userSettings.color }}\">
                                        <strong>Nom de la liste</strong>
                                    </label>
                                    <input class=\"form-control\" type=\"text\" placeholder=\"Liste de diffusion ...\" id=\"name\" name=\"Name\" value=\"{{ mailing.name|default(\"\") }}\" required readonly minlength=\"2\" maxlength=\"128\" oninput=\"checkRegExp(this.id, 'NAME')\">
                                    <div class=\"valid-feedback\">
                                        Ce nom semble correct !
                                    </div>
                                    <div class=\"invalid-feedback\">
                                        Le nom de la liste ne respecte pas les spécifications demandées.
                                    </div>
                                </div>
                                <div class=\"custom-control custom-switch\">
                                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"useSumup\" {% if mailing.sumup is not null %}checked{% endif%} disabled>
                                    <label class=\"custom-control-label text-{{ userSettings.color }}\" for=\"useSumup\" name=\"useSumup\">Utilise une description</label>
                                </div>
                                <br>
                                <div class=\"form-group\" id=\"sumupDiv\" {% if mailing.sumup is null %}style=\"display: none\"{% endif %}>
                                    <label for=\"sumup\" class=\"text-{{ userSettings.color }}\">
                                        <strong>Description de la liste</strong>
                                    </label>
                                    <textarea class=\"form-control\" name=\"Sumup\" id=\"sumup\" rows=\"3\" minlength=\"0\" maxlength=\"1024\">{{ mailing.sumup }}</textarea>
                                    <div class=\"invalid-feedback\">
                                        La description semble éronnée.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card shadow mb-3 border-{{ userSettings.color }}\">
                    <div class=\"card-header py-3 bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                        <p class=\"text-{{ userSettings.color }} m-0 font-weight-bold\">Gestion des destinataires</p>
                    </div>
                    <div class=\"card-body bg-{{ userSettings.theme }} border-{{ userSettings.color }}\">
                        <div id=\"shared-lists\" class=\"row\">
                            <h4 class=\"col-12 text-{{ userSettings.color }}\">Utilisateurs dans la liste</h4>
                            <div id=\"assigned-user\" class=\"list-group col\">
                                {% for user in users %}
                                    {% if user.id in mailing.list %}
                                        <div class=\"list-group-item\" id=\"assigned-{{ user.id }}\">{{ user.firstname }} {{ user.lastname }}</div>
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src=\"{{ asset(\"js/dashboard/Sortable.js\") }}\"></script>
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"text-center my-auto copyright text-{{ userSettings.color }}\">
                    <span>Copyright © CEFC Developers Team {{ date(\"Y\")|date(\"Y\") }}</span>
                </div>
            </div>
        </footer>
    {% endblock %}
{# Fin de la gestion de la page #}", "dashboard/mailinglist/show.html.twig", "C:\\Users\\romainmunier\\Documents\\GitHub\\ptuts3s4\\templates\\dashboard\\mailinglist\\show.html.twig");
    }
}
