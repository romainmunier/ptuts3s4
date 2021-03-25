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

/* dashboard/news/edit.html.twig */
class __TwigTemplate_2cf6e613b7d2832ecfd6b6305e5285cc47e7fb17fe5266477320c60304265641 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/news/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/news/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/news/edit.html.twig", 1);
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

        echo "Articles";
        
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
        $this->loadTemplate("includes/dashboard/sidebar.html.twig", "dashboard/news/edit.html.twig", 8)->display($context);
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
        $this->loadTemplate("includes/dashboard/navbar.html.twig", "dashboard/news/edit.html.twig", 11)->display($context);
        // line 12
        echo "            <div class=\"container-fluid\">
                <div class=\"d-sm-flex justify-content-between align-items-center mb-4\">
                    <h3 class=\"text-";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 14, $this->source); })()), "color", [], "any", false, false, false, 14), "html", null, true);
        echo " mb-0\">Modification d'un message</h3>
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
            <form id=\"formMessage\" method=\"POST\" action=\"\">
                <div style=\"width: 90%; margin: 0 5%;\">
                    <div class=\"form-group\">
                        <label for=\"articleTitle\">
                            <strong>Titre de votre message</strong>
                        </label>
                        <input type=\"text\" name=\"Title\" id=\"messageTitle\" class=\"form-control\" placeholder=\"Un nouveau combat à l'affiche !\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 27, $this->source); })()), "title", [], "any", false, false, false, 27), "html", null, true);
        echo "\" required>
                        <div class=\"invalid-feedback\">
                            Le titre entré est incorrect ou inexistant. Veuillez réessayer.
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"articleMailing\">
                            <strong>Liste de diffusion</strong>
                        </label>
                        <select class=\"form-control\" id=\"articleMailing\" name=\"Mailing\" onchange=\"switchTypeText()\">
                            <option value=\"#\" readonly disabled selected>-- Sélectionner une liste de diffusion</option>
                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mailings"]) || array_key_exists("mailings", $context) ? $context["mailings"] : (function () { throw new RuntimeError('Variable "mailings" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 39
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 39, $this->source); })()), "mailingList", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39), twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 39)))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "name", [], "any", false, false, false, 39), "html", null, true);
            echo " - <i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "type", [], "any", false, false, false, 39), "html", null, true);
            echo "</i></option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                        </select>
                        <div class=\"invalid-feedback\">
                            Veuillez sélectionner une liste de diffusion avant d'enregistrer
                        </div>
                    </div>
                    <div class=\"form-group\" style=\"display: ";
        // line 46
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 46, $this->source); })()), "mailingList", [], "any", false, false, false, 46), "type", [], "any", false, false, false, 46), [0 => "PHONE", 1 => "HYBRID"])) {
            echo "block";
        } else {
            echo "none";
        }
        echo "\" id=\"phonehybrid-textzone\">
                        <label for=\"inputTextAreaArticle\">
                            <strong>Message</strong>
                        </label>
                        <textarea class=\"form-control\" id=\"inputTextAreaArticle\" rows=\"5\">";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 50, $this->source); })()), "containment", [], "any", false, false, false, 50), "html", null, true);
        echo "</textarea>
                    </div>
                </div>
                <div id=\"writeArticleContainer\" style=\"width: 90%; height: 70%; margin: 0 5%; display: ";
        // line 53
        if (!twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 53, $this->source); })()), "mailingList", [], "any", false, false, false, 53), "type", [], "any", false, false, false, 53), [0 => "PHONE", 1 => "HYBRID"])) {
            echo "block";
        } else {
            echo "none";
        }
        echo "\">
                    <script src=\"https://cdn.tiny.cloud/1/i2h5rer3g2vr9z38cqattj8uoptnq5kldg8o0087o9sa8obm/tinymce/5/tinymce.min.js\" referrerpolicy=\"origin\"></script>
                    <textarea id=\"commentText\" name=\"Message\">
                        ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 56, $this->source); })()), "containment", [], "any", false, false, false, 56), "html", null, true);
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
        // line 65
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
                </div>
                <div class=\"btn-group ml-5\">
                    <button type=\"button\" class=\"btn btn-success\" onclick=\"submitMessageOption('send', 'edit', '";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 122, $this->source); })()), "id", [], "any", false, false, false, 122), "html", null, true);
        echo "')\">Envoyer le message</button>
                    <button type=\"button\" class=\"btn btn-warning\" onclick=\"submitMessageOption('save', 'edit', '";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 123, $this->source); })()), "id", [], "any", false, false, false, 123), "html", null, true);
        echo "')\">Enregistrer le message</button>
                </div>
            </form>
        </div>
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"text-center my-auto copyright text-";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userSettings"]) || array_key_exists("userSettings", $context) ? $context["userSettings"] : (function () { throw new RuntimeError('Variable "userSettings" does not exist.', 129, $this->source); })()), "color", [], "any", false, false, false, 129), "html", null, true);
        echo "\">
                    <span>Copyright © CEFC Developers Team ";
        // line 130
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
        return "dashboard/news/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 130,  284 => 129,  275 => 123,  271 => 122,  211 => 65,  199 => 56,  189 => 53,  183 => 50,  172 => 46,  165 => 41,  148 => 39,  144 => 38,  130 => 27,  120 => 19,  118 => 18,  116 => 17,  114 => 16,  110 => 14,  106 => 12,  104 => 11,  93 => 9,  91 => 8,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Articles{% endblock %}

{# Gestion de la page #}
{% block body %}
<div id=\"wrapper\">
    {% include \"includes/dashboard/sidebar.html.twig\" %}
    <div class=\"d-flex flex-column {% if not userSettings.medieval[0] %}bg-{{ userSettings.theme }}{% else %}bg-none{% endif %}\" id=\"content-wrapper\">
        <div id=\"content\">
            {% include \"includes/dashboard/navbar.html.twig\" %}
            <div class=\"container-fluid\">
                <div class=\"d-sm-flex justify-content-between align-items-center mb-4\">
                    <h3 class=\"text-{{ userSettings.color}} mb-0\">Modification d'un message</h3>
                    {#                    <a class=\"btn btn-primary btn-sm d-none d-sm-inline-block\" role=\"button\" href=\"#\">#}
                    {#                        <i class=\"fas fa-plus fa-sm text-white-50\"></i>&nbsp;#}
                    {#                        Nouvel article#}
                    {#                    </a>#}
                </div>
            </div>
            <form id=\"formMessage\" method=\"POST\" action=\"\">
                <div style=\"width: 90%; margin: 0 5%;\">
                    <div class=\"form-group\">
                        <label for=\"articleTitle\">
                            <strong>Titre de votre message</strong>
                        </label>
                        <input type=\"text\" name=\"Title\" id=\"messageTitle\" class=\"form-control\" placeholder=\"Un nouveau combat à l'affiche !\" value=\"{{ message.title }}\" required>
                        <div class=\"invalid-feedback\">
                            Le titre entré est incorrect ou inexistant. Veuillez réessayer.
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"articleMailing\">
                            <strong>Liste de diffusion</strong>
                        </label>
                        <select class=\"form-control\" id=\"articleMailing\" name=\"Mailing\" onchange=\"switchTypeText()\">
                            <option value=\"#\" readonly disabled selected>-- Sélectionner une liste de diffusion</option>
                            {% for list in mailings %}
                                <option value=\"{{ list.id }}\" {% if message.mailingList.id == list.id %}selected{% endif %}>{{ list.name }} - <i>{{ list.type }}</i></option>
                            {% endfor %}
                        </select>
                        <div class=\"invalid-feedback\">
                            Veuillez sélectionner une liste de diffusion avant d'enregistrer
                        </div>
                    </div>
                    <div class=\"form-group\" style=\"display: {% if message.mailingList.type in [\"PHONE\", \"HYBRID\"] %}block{% else %}none{% endif %}\" id=\"phonehybrid-textzone\">
                        <label for=\"inputTextAreaArticle\">
                            <strong>Message</strong>
                        </label>
                        <textarea class=\"form-control\" id=\"inputTextAreaArticle\" rows=\"5\">{{ message.containment }}</textarea>
                    </div>
                </div>
                <div id=\"writeArticleContainer\" style=\"width: 90%; height: 70%; margin: 0 5%; display: {% if message.mailingList.type not in [\"PHONE\", \"HYBRID\"] %}block{% else %}none{% endif %}\">
                    <script src=\"https://cdn.tiny.cloud/1/i2h5rer3g2vr9z38cqattj8uoptnq5kldg8o0087o9sa8obm/tinymce/5/tinymce.min.js\" referrerpolicy=\"origin\"></script>
                    <textarea id=\"commentText\" name=\"Message\">
                        {{ message.containment }}
                    </textarea>
                    <script>
                        tinymce.init({
                            selector: '#commentText',
                            plugins: 'image code',
                            width: document.getElementById(\"writeArticleContainer\").offsetWidth,
                            height: document.getElementById(\"writeArticleContainer\").offsetHeight,
                            toolbar: 'undo redo | link image | code',
                            images_upload_url: \"{{ asset(\"autoUploadTiny.php\") }}\",
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
                </div>
                <div class=\"btn-group ml-5\">
                    <button type=\"button\" class=\"btn btn-success\" onclick=\"submitMessageOption('send', 'edit', '{{ message.id }}')\">Envoyer le message</button>
                    <button type=\"button\" class=\"btn btn-warning\" onclick=\"submitMessageOption('save', 'edit', '{{ message.id }}')\">Enregistrer le message</button>
                </div>
            </form>
        </div>
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"text-center my-auto copyright text-{{ userSettings.color }}\">
                    <span>Copyright © CEFC Developers Team {{ date(\"Y\")|date(\"Y\") }}</span>
                </div>
            </div>
        </footer>
        {% endblock %}
{# Fin de la gestion de la page #}", "dashboard/news/edit.html.twig", "/Users/romainmunier/Documents/GitHub/ptuts3s4/templates/dashboard/news/edit.html.twig");
    }
}
