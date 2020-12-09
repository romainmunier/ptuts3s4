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
class __TwigTemplate_fe478f4a9fa2bc1d673f2a0f20ad9ec9e2403bff2f262476523325efedebd64c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/mailinglist/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Diffusion";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div id=\"wrapper\">
    ";
        // line 8
        $this->loadTemplate("includes/dashboard/sidebar.html.twig", "dashboard/mailinglist/show.html.twig", 8)->display($context);
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
        $this->loadTemplate("includes/dashboard/navbar.html.twig", "dashboard/mailinglist/show.html.twig", 11)->display($context);
        // line 12
        echo "            <div class=\"container-fluid\">
                <h3 class=\"text-";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 13), "html", null, true);
        echo " mb-0\">Modification de la liste : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h3>
                <br>
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"card shadow mb-3 border-";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 17), "html", null, true);
        echo "\">
                            <div class=\"card-header py-3 bg-";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 18), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
                                <p class=\"text-";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 19), "html", null, true);
        echo " m-0 font-weight-bold\">Configuration</p>
                            </div>
                            <div class=\"card-body bg-";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 21), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 21), "html", null, true);
        echo "\">
                                <div class=\"form-group\">
                                    <label for=\"type\" class=\"text-";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
                                        <strong>Type de liste</strong>
                                    </label>
                                    <select class=\"form-control\" id=\"type\" name=\"Type\" required readonly disabled>
                                        <option value=\"\" readonly disabled selected>-- Sélectionner un type</option>
                                        <option value=\"HYBRID\" ";
        // line 28
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "type", [], "any", false, false, false, 28), "HYBRID"))) {
            echo "selected";
        }
        echo ">Liste hybride</option>
                                        <option value=\"MAIL\" ";
        // line 29
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "type", [], "any", false, false, false, 29), "MAIL"))) {
            echo "selected";
        }
        echo ">Liste d'adresses mail</option>
                                        <option value=\"PHONE\" ";
        // line 30
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "type", [], "any", false, false, false, 30), "PHONE"))) {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 40), "html", null, true);
        echo "\">
                            <div class=\"card-header py-3 bg-";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 41), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
                                <p class=\"text-";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 42), "html", null, true);
        echo " m-0 font-weight-bold\">Informations sur la liste</p>
                            </div>
                            <div class=\"card-body bg-";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 44), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
                                <div class=\"form-group\">
                                    <label for=\"name\" class=\"text-";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 46), "html", null, true);
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
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "sumup", [], "any", false, false, false, 58))) {
            echo "checked";
        }
        echo " disabled>
                                    <label class=\"custom-control-label text-";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 59), "html", null, true);
        echo "\" for=\"useSumup\" name=\"useSumup\">Utilise une description</label>
                                </div>
                                <br>
                                <div class=\"form-group\" id=\"sumupDiv\" ";
        // line 62
        if ((null === twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "sumup", [], "any", false, false, false, 62))) {
            echo "style=\"display: none\"";
        }
        echo ">
                                    <label for=\"sumup\" class=\"text-";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 63), "html", null, true);
        echo "\">
                                        <strong>Description de la liste</strong>
                                    </label>
                                    <textarea class=\"form-control\" name=\"Sumup\" id=\"sumup\" rows=\"3\" minlength=\"0\" maxlength=\"1024\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "sumup", [], "any", false, false, false, 66), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 75), "html", null, true);
        echo "\">
                    <div class=\"card-header py-3 bg-";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 76), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 76), "html", null, true);
        echo "\">
                        <p class=\"text-";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 77), "html", null, true);
        echo " m-0 font-weight-bold\">Gestion des destinataires</p>
                    </div>
                    <div class=\"card-body bg-";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 79), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 79), "html", null, true);
        echo "\">
                        <div id=\"shared-lists\" class=\"row\">
                            <h4 class=\"col-12 text-";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 81), "html", null, true);
        echo "\">Utilisateurs dans la liste</h4>
                            <div id=\"assigned-user\" class=\"list-group col\">
                                ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 84
            echo "                                    ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 84), twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "list", [], "any", false, false, false, 84))) {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 97), "html", null, true);
        echo "\">
                    <span>Copyright © CEFC Developers Team ";
        // line 98
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env, "Y"), "Y"), "html", null, true);
        echo "</span>
                </div>
            </div>
        </footer>
    ";
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
        return array (  289 => 98,  285 => 97,  279 => 94,  271 => 88,  265 => 87,  255 => 85,  252 => 84,  248 => 83,  243 => 81,  236 => 79,  231 => 77,  225 => 76,  221 => 75,  209 => 66,  203 => 63,  197 => 62,  191 => 59,  185 => 58,  173 => 49,  167 => 46,  160 => 44,  155 => 42,  149 => 41,  145 => 40,  130 => 30,  124 => 29,  118 => 28,  110 => 23,  103 => 21,  98 => 19,  92 => 18,  88 => 17,  79 => 13,  76 => 12,  74 => 11,  63 => 9,  61 => 8,  58 => 7,  54 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/mailinglist/show.html.twig", "/Users/romainmunier/Documents/Projets/Symfony/ptuts3s4/templates/dashboard/mailinglist/show.html.twig");
    }
}
