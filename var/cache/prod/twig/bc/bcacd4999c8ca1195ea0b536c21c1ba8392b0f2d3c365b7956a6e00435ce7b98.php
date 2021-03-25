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

/* dashboard/mailinglist/edit.html.twig */
class __TwigTemplate_51cefed572710c42986b98d4af589d957f66aa9ac2da0954585ce2e83a79e867 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/mailinglist/edit.html.twig", 1);
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
        $this->loadTemplate("includes/dashboard/sidebar.html.twig", "dashboard/mailinglist/edit.html.twig", 8)->display($context);
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
        $this->loadTemplate("includes/dashboard/navbar.html.twig", "dashboard/mailinglist/edit.html.twig", 11)->display($context);
        // line 12
        echo "            <div class=\"container-fluid\">
                <h3 class=\"text-";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 13), "html", null, true);
        echo " mb-0\">Modification de la liste : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h3>
                <br>
                <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mailing_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "id", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\" method=\"POST\" onsubmit=\"checkAddListForm(); return false;\" id=\"addListForm\">
                    <div class=\"row\">
                        <div class=\"col-lg-4\">
                            <div class=\"card shadow mb-3 border-";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
                                <div class=\"card-header py-3 bg-";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 19), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
                                    <p class=\"text-";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 20), "html", null, true);
        echo " m-0 font-weight-bold\">Configuration</p>
                                </div>
                                <div class=\"card-body bg-";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 22), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 22), "html", null, true);
        echo "\">
                                    <div class=\"form-group\">
                                        <label for=\"type\" class=\"text-";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 24), "html", null, true);
        echo "\">
                                            <strong>Type de liste</strong>
                                        </label>
                                        <select class=\"form-control ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Type", [], "array", true, true, false, 27)) {
            echo "is-invalid";
        }
        echo "\" id=\"type\" name=\"Type\" required>
                                            <option value=\"\" readonly disabled selected>-- Sélectionner un type</option>
                                            <option value=\"HYBRID\" ";
        // line 29
        if (((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Type", [], "array", true, true, false, 29) && (0 === twig_compare((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["data"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["Type"] ?? null) : null), "HYBRID"))) || (array_key_exists("mailing", $context) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "type", [], "any", false, false, false, 29), "HYBRID"))))) {
            echo "selected";
        }
        echo ">Liste hybride</option>
                                            <option value=\"MAIL\" ";
        // line 30
        if (((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Type", [], "array", true, true, false, 30) && (0 === twig_compare((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["data"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["Type"] ?? null) : null), "MAIL"))) || (array_key_exists("mailing", $context) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "type", [], "any", false, false, false, 30), "MAIL"))))) {
            echo "selected";
        }
        echo ">Liste d'adresses mail</option>
                                            <option value=\"PHONE\" ";
        // line 31
        if (((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Type", [], "array", true, true, false, 31) && (0 === twig_compare((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["data"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["Type"] ?? null) : null), "PHONE"))) || (array_key_exists("mailing", $context) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "type", [], "any", false, false, false, 31), "PHONE"))))) {
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
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
                                <div class=\"card-header py-3 bg-";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 42), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
                                    <p class=\"text-";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 43), "html", null, true);
        echo " m-0 font-weight-bold\">Informations sur la liste</p>
                                </div>
                                <div class=\"card-body bg-";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 45), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 45), "html", null, true);
        echo "\">
                                    <div class=\"form-group\">
                                        <label for=\"name\" class=\"text-";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 47), "html", null, true);
        echo "\">
                                            <strong>Nom de la liste</strong>
                                        </label>
                                        <input class=\"form-control ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Name", [], "array", true, true, false, 50)) {
            echo "is-invalid";
        }
        echo "\" type=\"text\" placeholder=\"Liste de diffusion ...\" id=\"name\" name=\"Name\" value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Name", [], "array", true, true, false, 50)) ? (_twig_default_filter((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["data"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["Name"] ?? null) : null), twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "name", [], "any", false, false, false, 50))) : (twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "name", [], "any", false, false, false, 50))), "html", null, true);
        echo "\" required minlength=\"2\" maxlength=\"128\" oninput=\"checkRegExp(this.id, 'NAME')\">
                                        <div class=\"valid-feedback\">
                                            Ce nom semble correct !
                                        </div>
                                        <div class=\"invalid-feedback\">
                                            Le nom de la liste ne respecte pas les spécifications demandées.
                                        </div>
                                    </div>
                                    <div class=\"custom-control custom-switch\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"useSumup\" ";
        // line 59
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "sumup", [], "any", false, false, false, 59))) {
            echo "checked";
        }
        echo " onchange=\"onSumupSwitcheChange(this.checked)\">
                                        <label class=\"custom-control-label text-";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 60), "html", null, true);
        echo "\" for=\"useSumup\" name=\"useSumup\">Utiliser une description</label>
                                    </div>
                                    <br>
                                    <div class=\"form-group\" id=\"sumupDiv\" ";
        // line 63
        if ((null === twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "sumup", [], "any", false, false, false, 63))) {
            echo "style=\"display: none\"";
        }
        echo ">
                                        <label for=\"sumup\" class=\"text-";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 64), "html", null, true);
        echo "\">
                                            <strong>Description de la liste</strong>
                                        </label>
                                        <textarea class=\"form-control ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Sumup", [], "array", true, true, false, 67)) {
            echo "is-invalid";
        }
        echo "\" name=\"Sumup\" id=\"sumup\" rows=\"3\" minlength=\"0\" maxlength=\"1024\">";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Sumup", [], "array", true, true, false, 67)) ? (_twig_default_filter((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["data"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["Sumup"] ?? null) : null), twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "sumup", [], "any", false, false, false, 67))) : (twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "sumup", [], "any", false, false, false, 67))), "html", null, true);
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
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 76), "html", null, true);
        echo "\">
                        <div class=\"card-header py-3 bg-";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 77), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 77), "html", null, true);
        echo "\">
                            <p class=\"text-";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 78), "html", null, true);
        echo " m-0 font-weight-bold\">Gestion des destinataires</p>
                        </div>
                        <div class=\"card-body bg-";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "theme", [], "any", false, false, false, 80), "html", null, true);
        echo " border-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 80), "html", null, true);
        echo "\">
                            ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Users", [], "array", true, true, false, 81)) {
            // line 82
            echo "                                <div class=\"alert alert-danger\" role=\"alert\">
                                    Votre liste d'utilisateur a mal été définie. Veuillez réessayer.
                                </div>
                            ";
        }
        // line 86
        echo "                            <div id=\"shared-lists\" class=\"row\">
                                <h4 class=\"col-12 text-";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 87), "html", null, true);
        echo "\">Ajouter des utilisateurs à la liste</h4>
                                <div id=\"unassigned-user\" class=\"list-group col\" style=\"height: 20rem; overflow-y: scroll\">
                                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 90
            echo "                                        ";
            if (array_key_exists("data", $context)) {
                // line 91
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Users", [], "array", true, true, false, 91) && !twig_in_filter(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 91), (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["data"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["Users"] ?? null) : null)))) {
                    // line 92
                    echo "                                                <div class=\"list-group-item\" id=\"unsassigned-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 92), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 92), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 92), "html", null, true);
                    echo "</div>
                                            ";
                }
                // line 94
                echo "                                        ";
            } else {
                // line 95
                echo "                                            ";
                if (!twig_in_filter(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 95), twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "list", [], "any", false, false, false, 95))) {
                    // line 96
                    echo "                                                <div class=\"list-group-item\" id=\"unsassigned-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 96), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 96), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 96), "html", null, true);
                    echo "</div>
                                            ";
                }
                // line 98
                echo "                                        ";
            }
            // line 99
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                                </div>
                                <div id=\"assigned-user\" class=\"list-group col\">
                                    ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Users", [], "array", true, true, false, 102)) {
            // line 103
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 104
                echo "                                            ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 104), (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["data"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["Users"] ?? null) : null))) {
                    // line 105
                    echo "                                                <div class=\"list-group-item\" id=\"assigned-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 105), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 105), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 105), "html", null, true);
                    echo "</div>
                                            ";
                }
                // line 107
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                                    ";
        }
        // line 109
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "list", [], "any", true, true, false, 109)) {
            // line 110
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 111
                echo "                                            ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 111), twig_get_attribute($this->env, $this->source, ($context["mailing"] ?? null), "list", [], "any", false, false, false, 111))) {
                    // line 112
                    echo "                                                <div class=\"list-group-item\" id=\"assigned-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 112), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 112), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 112), "html", null, true);
                    echo "</div>
                                            ";
                }
                // line 114
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                                    ";
        }
        // line 116
        echo "                                </div>
                                <div id=\"usersItem\">

                                </div>
                            </div>
                        </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-sm btn-primary\">Modifier la liste</button>
                </form>
            </div>
        </div>
        <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard/Sortable.js"), "html", null, true);
        echo "\"></script>
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"text-center my-auto copyright text-";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 130), "html", null, true);
        echo "\">
                    <span>Copyright © CEFC Developers Team ";
        // line 131
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env, "Y"), "Y"), "html", null, true);
        echo "</span>
                </div>
            </div>
        </footer>
    ";
    }

    public function getTemplateName()
    {
        return "dashboard/mailinglist/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 131,  402 => 130,  396 => 127,  383 => 116,  380 => 115,  374 => 114,  364 => 112,  361 => 111,  356 => 110,  353 => 109,  350 => 108,  344 => 107,  334 => 105,  331 => 104,  326 => 103,  324 => 102,  320 => 100,  314 => 99,  311 => 98,  301 => 96,  298 => 95,  295 => 94,  285 => 92,  282 => 91,  279 => 90,  275 => 89,  270 => 87,  267 => 86,  261 => 82,  259 => 81,  253 => 80,  248 => 78,  242 => 77,  238 => 76,  222 => 67,  216 => 64,  210 => 63,  204 => 60,  198 => 59,  182 => 50,  176 => 47,  169 => 45,  164 => 43,  158 => 42,  154 => 41,  139 => 31,  133 => 30,  127 => 29,  120 => 27,  114 => 24,  107 => 22,  102 => 20,  96 => 19,  92 => 18,  86 => 15,  79 => 13,  76 => 12,  74 => 11,  63 => 9,  61 => 8,  58 => 7,  54 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/mailinglist/edit.html.twig", "/Users/romainmunier/Documents/Projets/Symfony/ptuts3s4/templates/dashboard/mailinglist/edit.html.twig");
    }
}
