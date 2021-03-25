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

/* dashboard/category/index.html.twig */
class __TwigTemplate_fa253ac8dc75bf719dc1dbf230cad323302b2dbc57a047c70979cf9b4d36a703 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/category/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Catégories";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div id=\"wrapper\">
    ";
        // line 8
        $this->loadTemplate("includes/dashboard/sidebar.html.twig", "dashboard/category/index.html.twig", 8)->display($context);
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
        $this->loadTemplate("includes/dashboard/navbar.html.twig", "dashboard/category/index.html.twig", 11)->display($context);
        // line 12
        echo "            <div class=\"container-fluid\">
                <div class=\"d-sm-flex justify-content-between align-items-center mb-4\">
                    <h3 class=\"text-";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 14), "html", null, true);
        echo " mb-0\">Catégories</h3>
                    <a class=\"btn btn-primary btn-sm d-none d-sm-inline-block\" role=\"button\" onclick=\"\$('#addCategoryModal').modal();\">
                        <i class=\"fas fa-plus fa-sm text-white-50\"></i>&nbsp;
                        Nouvelle catégorie
                    </a>
                </div>
                <div class=\"container\">
                    ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, true, false, 21), "CATEGORY", [], "array", true, true, false, 21)) {
            // line 22
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, true, false, 22), "CATEGORY", [], "array", true, true, false, 22)) ? (_twig_default_filter((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, true, false, 22)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["CATEGORY"] ?? null) : null), [])) : ([])));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 23
                echo "                            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                                ";
                // line 24
                echo $context["flash"];
                echo "
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                    ";
        }
        // line 31
        echo "                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => 0]);
        echo "\">(root)</a>
                            </li>
                            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["path"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["cat"]) {
            // line 37
            echo "                                <li class=\"breadcrumb-item ";
            if ((0 === twig_compare((twig_length_filter($this->env, ($context["path"] ?? null)) - 1), $context["key"]))) {
                echo "active";
            }
            echo "\">
                                    ";
            // line 38
            if ((0 === twig_compare((twig_length_filter($this->env, ($context["path"] ?? null)) - 1), $context["key"]))) {
                // line 39
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 39), "html", null, true);
                echo "
                                    ";
            } else {
                // line 41
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 41), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 43
            echo "                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                        </ol>
                    </nav>
                    <br>
                    <div class=\"row\">
                        <div class=\"col-lg-8\">
                            <h3>Détails de la catégorie courante</h3>
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 53), "html", null, true);
        echo "
                                </div>
                                <div class=\"card-body\">
                                    <blockquote class=\"blockquote mb-0\">
                                        <p>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "sumup", [], "any", false, false, false, 57), "html", null, true);
        echo "</p>
                                        <div class=\"row\">
                                            <a href=\"#\" class=\"btn btn-outline-primary btn-sm ml-1 mr-1\">Aller à la galerie</a>
                                            ";
        // line 60
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 60))) {
            // line 61
            echo "                                                <button class=\"btn btn-outline-warning btn-sm mr-1\" onclick=\"\$('#editCategoryModal').modal();\">
                                                    <i class=\"fas fa-edit\"></i>
                                                </button>
                                                <button class=\"btn btn-outline-danger btn-sm mr-1\" onclick=\"\$('#deleteCategoryModal').modal();\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </button>
                                            ";
        }
        // line 68
        echo "                                        </div>
                                        <br><br>
                                        <footer class=\"blockquote-footer\">Dernière modification le <cite title=\"Source Title\">";
        // line 70
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "date", [], "any", false, false, false, 70), "d/m/Y"), "html", null, true);
        echo "</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <h3>Descendant(s)</h3>
                            <div class=\"list-group\">
                                ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 79
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => twig_get_attribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\" class=\"list-group-item list-group-item-action\">
                                        <div class=\"d-flex w-100 justify-content-between\">
                                            <h5 class=\"mb-1\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 81), "html", null, true);
            echo "</h5>
                                            <small>";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "date", [], "any", false, false, false, 82), "d/m/Y"), "html", null, true);
            echo "</small>
                                        </div>
                                        <p class=\"mb-1\">
                                            ";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "sumup", [], "any", false, false, false, 85), "html", null, true);
            echo "
                                        </p>
                                        <small>
                                            <span class=\"badge badge-primary badge-pill\">";
            // line 88
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 88)), "html", null, true);
            echo "</span>
                                        </small>
                                    </a>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"modal fade\" id=\"addCategoryModal\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Nouvelle catégorie</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <form action=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 109)]), "html", null, true);
        echo "\" method=\"POST\">
                            <input type=\"hidden\" name=\"actualCategory\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 110), "html", null, true);
        echo "\">
                            <div class=\"form-group\">
                                <label for=\"newCategoryName\">
                                    <strong>Nom de la catégorie</strong>
                                </label>
                                <input type=\"text\" name=\"Name\" minlength=\"2\" maxlength=\"128\" id=\"newCategoryName\" class=\"form-control ";
        // line 115
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Name", [], "array", true, true, false, 115)) {
            echo "is-invalid";
        }
        echo "\" placeholder=\"Catégorie n°X - Dessins\" value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Name", [], "array", true, true, false, 115)) ? (_twig_default_filter((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["data"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["Name"] ?? null) : null), "")) : ("")), "html", null, true);
        echo "\" required>
                                <div class=\"invalid-feedback\">
                                    Le nom de la catégorie semble éronné.
                                </div>
                            </div>
                            <div class=\"custom-control custom-switch\">
                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"useSumup\" onchange=\"onSumupSwitcheChange(this.checked)\">
                                <label class=\"custom-control-label text-";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 122), "html", null, true);
        echo "\" for=\"useSumup\" name=\"useSumup\">Utiliser une description</label>
                            </div>
                            <br>
                            <div class=\"form-group\" id=\"sumupDiv\" style=\"display: none;\">
                                <label for=\"sumup\" class=\"text-";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 126), "html", null, true);
        echo "\">
                                    <strong>Description de la liste</strong>
                                </label>
                                <textarea class=\"form-control ";
        // line 129
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Sumup", [], "array", true, true, false, 129)) {
            echo "is-invalid";
        }
        echo "\" name=\"Sumup\" id=\"sumup\" rows=\"3\" minlength=\"0\" maxlength=\"1024\">";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "Sumup", [], "array", true, true, false, 129)) ? (_twig_default_filter((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["data"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["Sumup"] ?? null) : null), "")) : ("")), "html", null, true);
        echo "</textarea>
                                <div class=\"invalid-feedback\">
                                    La description semble éronné.
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"newCategoryParent\">
                                    <strong>Catégorie parente</strong>
                                </label>
                                <input type=\"text\" class=\"form-control\" name=\"Category\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 138), "html", null, true);
        echo "\" readonly disabled>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                <button type=\"submit\" class=\"btn btn-primary\">Ajouter cette catégorie</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"modal fade\" id=\"searchParentModal\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Sélectionner le parent</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">

                    </div>
                </div>
            </div>
        </div>

        ";
        // line 166
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 166))) {
            // line 167
            echo "            <div class=\"modal fade\" id=\"editCategoryModal\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">Modification de la catégorie</h5>
                        </div>
                        <div class=\"modal-body\">
                            <form action=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 174)]), "html", null, true);
            echo "\" method=\"POST\">
                                <input type=\"hidden\" name=\"_method\" value=\"PUT\">
                                <input type=\"hidden\" name=\"Parent\" id=\"updateParentId\" value=\"";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 176), "id", [], "any", false, false, false, 176), "html", null, true);
            echo "\">
                                <div id=\"collapseEditForm\">
                                    <div class=\"form-group\">
                                        <label for=\"newCategoryName\">
                                            <strong>Nom de la catégorie</strong>
                                        </label>
                                        <input type=\"text\" name=\"Name\" minlength=\"2\" maxlength=\"128\" id=\"newCategoryName\" class=\"form-control ";
            // line 182
            if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Name", [], "array", true, true, false, 182)) {
                echo "is-invalid";
            }
            echo "\" placeholder=\"Catégorie n°X - Dessins\" value=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", true, true, false, 182)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 182), "")) : ("")), "html", null, true);
            echo "\" required>
                                        <div class=\"invalid-feedback\">
                                            Le nom de la catégorie semble éronné.
                                        </div>
                                    </div>
                                    <div class=\"custom-control custom-switch\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"useEditSumup\" onchange=\"onSumupEditSwitch(this.checked)\" ";
            // line 188
            if ( !(null === twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "sumup", [], "any", false, false, false, 188))) {
                echo "checked";
            }
            echo ">
                                        <label class=\"custom-control-label text-";
            // line 189
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 189), "html", null, true);
            echo "\" for=\"useEditSumup\" name=\"useSumup\">Utiliser une description</label>
                                    </div>
                                    <br>
                                    <div class=\"form-group\" id=\"sumupEditDiv\" ";
            // line 192
            if ((null === twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "sumup", [], "any", false, false, false, 192))) {
                echo "style=\"display: none;\"";
            }
            echo ">
                                        <label for=\"sumupEdit\" class=\"text-";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 193), "html", null, true);
            echo "\">
                                            <strong>Description de la liste</strong>
                                        </label>
                                        <textarea class=\"form-control ";
            // line 196
            if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "Sumup", [], "array", true, true, false, 196)) {
                echo "is-invalid";
            }
            echo "\" name=\"Sumup\" id=\"sumupEdit\" rows=\"3\" minlength=\"0\" maxlength=\"1024\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "sumup", [], "any", true, true, false, 196)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "sumup", [], "any", false, false, false, 196), "")) : ("")), "html", null, true);
            echo "</textarea>
                                        <div class=\"invalid-feedback\">
                                            La description semble éronné.
                                        </div>
                                    </div>
                                    <script>
                                        function onSumupEditSwitch(state) {
                                            if (state) {
                                                \$(\"#sumupEditDiv\").slideDown(\"slow\");
                                                \$(\"#sumupEdit\").attr(\"required\", \"true\");
                                                document.getElementById(\"sumupEdit\").value = \"\";
                                            } else {
                                                \$(\"#sumupEditDiv\").slideUp(\"slow\");
                                                \$(\"#sumupEdit\").removeAttr(\"required\");
                                                document.getElementById(\"sumupEdit\").value = \"\";
                                            }
                                        }
                                    </script>
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" id=\"newParentCategory\" value=\"";
            // line 215
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 215), "name", [], "any", false, false, false, 215), "html", null, true);
            echo "\" readonly disabled>
                                        <br>
                                        <button class=\"btn btn-block btn-outline-primary\" type=\"button\" onclick=\"toggleSlideCollapse()\">Rechercher une catégorie</button>
                                    </div>
                                </div>
                                <div id=\"collapseSearchForm\" style=\"display: none;\">
                                    <button type=\"button\" class=\"close\" aria-label=\"Close\" onclick=\"toggleSlideCollapse();\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                    <input class=\"form-control form-control-lg\" type=\"text\" placeholder=\"Rechercher une catégorie ...\" oninput=\"searchCategoryInDatabase(this.value)\">
                                    <hr>
                                    <div id=\"results\" style=\"width: 100%; max-height: 20rem; overflow-y: auto;\">

                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                    <button type=\"submit\" class=\"btn btn-primary\">Modifier cette catégorie</button>
                                </div>
                            </form>

                            <script>
                                function toggleSlideCollapse() {
                                    \$('#collapseEditForm').slideToggle();
                                    \$('#collapseSearchForm').slideToggle();
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 247
        echo "
        ";
        // line 248
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 248))) {
            // line 249
            echo "            <div class=\"modal fade\" id=\"deleteCategoryModal\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Supprimer une catégorie</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <p>Voulez-vous supprimer cette catégorie ?</p>
                            ";
            // line 260
            if ( !(null === twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 260))) {
                // line 261
                echo "                                <div class=\"alert alert-danger\" role=\"alert\">
                                    Celle-ci contient <span class=\"badge bg-warning\">";
                // line 262
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 262)), "html", null, true);
                echo "</span> sous-catégories. Si vous supprimez cette catégorie, ces sous-catégories seront supprimées également.
                                </div>
                            ";
            }
            // line 265
            echo "                            <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 265), "id", [], "any", false, false, false, 265)]), "html", null, true);
            echo "\" method=\"POST\">
                                <input type=\"hidden\" name=\"actualCategory\" value=\"";
            // line 266
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 266), "html", null, true);
            echo "\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer cette catégorie</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 278
        echo "
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"text-center my-auto copyright text-";
        // line 281
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 281), "html", null, true);
        echo "\">
                    <span>Copyright © CEFC Developers Team ";
        // line 282
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env, "Y"), "Y"), "html", null, true);
        echo "</span>
                </div>
            </div>
        </footer>
        ";
    }

    public function getTemplateName()
    {
        return "dashboard/category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  530 => 282,  526 => 281,  521 => 278,  506 => 266,  501 => 265,  495 => 262,  492 => 261,  490 => 260,  477 => 249,  475 => 248,  472 => 247,  437 => 215,  411 => 196,  405 => 193,  399 => 192,  393 => 189,  387 => 188,  374 => 182,  365 => 176,  360 => 174,  351 => 167,  349 => 166,  318 => 138,  302 => 129,  296 => 126,  289 => 122,  275 => 115,  267 => 110,  263 => 109,  244 => 92,  234 => 88,  228 => 85,  222 => 82,  218 => 81,  212 => 79,  208 => 78,  197 => 70,  193 => 68,  184 => 61,  182 => 60,  176 => 57,  169 => 53,  159 => 45,  152 => 43,  144 => 41,  138 => 39,  136 => 38,  129 => 37,  125 => 36,  120 => 34,  115 => 31,  112 => 30,  100 => 24,  97 => 23,  92 => 22,  90 => 21,  80 => 14,  76 => 12,  74 => 11,  63 => 9,  61 => 8,  58 => 7,  54 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/category/index.html.twig", "/Users/romainmunier/Documents/Projets/Symfony/ptuts3s4/templates/dashboard/category/index.html.twig");
    }
}
