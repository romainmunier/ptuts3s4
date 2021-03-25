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

/* dashboard/articles/edit.html.twig */
class __TwigTemplate_2b53b65788edf362262f0b0d6eb0ad77d19b3754ebcd415f330696f099abfaad extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/articles/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Articles";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div id=\"wrapper\">
    ";
        // line 8
        $this->loadTemplate("includes/dashboard/sidebar.html.twig", "dashboard/articles/edit.html.twig", 8)->display($context);
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
        $this->loadTemplate("includes/dashboard/navbar.html.twig", "dashboard/articles/edit.html.twig", 11)->display($context);
        // line 12
        echo "            <div class=\"container-fluid\">
                <div class=\"d-sm-flex justify-content-between align-items-center mb-4\">
                    <h3 class=\"text-";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 14), "html", null, true);
        echo " mb-0\">Modification d'un article</h3>
                    ";
        // line 16
        echo "                    ";
        // line 17
        echo "                    ";
        // line 18
        echo "                    ";
        // line 19
        echo "                </div>
            </div>
            <div style=\"width: 90%; margin: 0 5%;\">
                <div class=\"form-group\">
                    <label for=\"articleTitle\">
                        <strong>Titre de votre article</strong>
                    </label>
                    <input type=\"text\" name=\"Title\" id=\"articleTitle\" class=\"form-control\" placeholder=\"Un nouveau combat à l'affiche !\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "subject", [], "any", false, false, false, 26), "html", null, true);
        echo "\" required>
                    <div class=\"invalid-feedback\">
                        Le titre entré est incorrect ou inexistant. Veuillez réessayer.
                    </div>
                </div>
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" id=\"newParentCategory\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "category", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
        echo "\" readonly disabled>
                    <input type=\"hidden\" name=\"Category\" id=\"updateParentId\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "category", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33), "html", null, true);
        echo "\">
                    <br>
                    <button class=\"btn btn-block btn-outline-primary\" type=\"button\" onclick=\"toggleSlideCollapse()\">Rechercher une catégorie</button>
                </div>
                <div id=\"collapseSearchForm\" style=\"display: none;\">
                    <button type=\"button\" class=\"close\" aria-label=\"Close\" onclick=\"toggleSlideCollapse();\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <input class=\"form-control form-control-lg\" type=\"text\" placeholder=\"Rechercher une catégorie ...\" oninput=\"searchCategoryInDatabase(this.value)\">
                    <hr>
                    <div class=\"card pt-3\">
                        <div id=\"results\" style=\"width: 90%; max-height: 20rem; overflow-y: auto; margin-left: 5%; margin-right: 5%;\">

                        </div>
                    </div>
                </div>
            </div>
            <script>
                function toggleSlideCollapse() {
                    \$('#collapseEditForm').slideToggle();
                    \$('#collapseSearchForm').slideToggle();
                }
            </script>
            <input type=\"hidden\" id=\"articleByte\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "article", [], "any", false, false, false, 56), "html", null, true);
        echo "\">
            <div id=\"writeArticleContainer\" style=\"width: 90%; height: 70%; margin: 0 5%;\">
                <script src=\"https://cdn.tiny.cloud/1/i2h5rer3g2vr9z38cqattj8uoptnq5kldg8o0087o9sa8obm/tinymce/5/tinymce.min.js\" referrerpolicy=\"origin\"></script>
                <textarea id=\"commentText\" name=\"article\">
                    ";
        // line 60
        echo twig_escape_filter($this->env, ($context["containment"] ?? null), "html", null, true);
        echo "
                </textarea>
                <script>
                    tinymce.init({
                        selector: '#commentText',
                        plugins: 'image code',
                        width: document.getElementById(\"writeArticleContainer\").offsetWidth,
                        height: document.getElementById(\"writeArticleContainer\").offsetHeight,
                        toolbar: 'undo redo | link image | code',
                        images_upload_url: \"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("autoUploadTiny.php"), "html", null, true);
        echo "\",
                        directionality: \"fr_FR\",
                        /* enable title field in the Image dialog*/
                        image_title: true,
                        /* enable automatic uploads of images represented by blob or data URIs*/
                        automatic_uploads: true,
                        /*
                          URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
                          images_upload_url: 'postAcceptor.php',
                          here we add custom filepicker only to Image dialog
                        */
                        file_picker_types: 'image',
                        /* and here's our custom image picker*/
                        file_picker_callback: function (cb, value, meta) {
                            var input = document.createElement('input');
                            input.setAttribute('type', 'file');
                            input.setAttribute('accept', 'image/*');

                            /*
                              Note: In modern browsers input[type=\"file\"] is functional without
                              even adding it to the DOM, but that might not be the case in some older
                              or quirky browsers like IE, so you might want to add it to the DOM
                              just in case, and visually hide it. And do not forget do remove it
                              once you do not need it anymore.
                            */

                            input.onchange = function () {
                                var file = this.files[0];

                                var reader = new FileReader();
                                reader.onload = function () {
                                    /*
                                      Note: Now we need to register the blob in TinyMCEs image blob
                                      registry. In the next release this part hopefully won't be
                                      necessary, as we are looking to handle it internally.
                                    */
                                    var id = 'blobid' + (new Date()).getTime();
                                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                                    var base64 = reader.result.split(',')[1];
                                    var blobInfo = blobCache.create(id, file, base64);

                                    blobCache.add(blobInfo);

                                    /* call the callback and populate the Title field with the file name */
                                    cb(blobInfo.blobUri(), { title: file.name });
                                };
                                reader.readAsDataURL(file);
                            };

                            input.click();
                        },
                        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
                    });
                </script>
                <br>
                <button type=\"button\" class=\"btn btn-primary\" onclick=\"saveArticle()\">Enregistrer l'article</button>
            </div>
        </div>
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"text-center my-auto copyright text-";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSettings"] ?? null), "color", [], "any", false, false, false, 129), "html", null, true);
        echo "\">
                    <span>Copyright © CEFC Developers Team ";
        // line 130
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env, "Y"), "Y"), "html", null, true);
        echo "</span>
                </div>
            </div>
        </footer>
        ";
    }

    public function getTemplateName()
    {
        return "dashboard/articles/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 130,  220 => 129,  157 => 69,  145 => 60,  138 => 56,  112 => 33,  108 => 32,  99 => 26,  90 => 19,  88 => 18,  86 => 17,  84 => 16,  80 => 14,  76 => 12,  74 => 11,  63 => 9,  61 => 8,  58 => 7,  54 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/articles/edit.html.twig", "/Users/romainmunier/Documents/GitHub/ptuts3s4/templates/dashboard/articles/edit.html.twig");
    }
}
