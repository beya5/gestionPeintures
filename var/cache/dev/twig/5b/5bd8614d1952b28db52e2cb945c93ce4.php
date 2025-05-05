<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* user/dashboard.html.twig */
class __TwigTemplate_b4377853fa6743f555478bec5d9a553f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Tableau de bord utilisateur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container mt-4\">
    ";
        // line 8
        yield "    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1>Galerie des Peintures</h1>
        <div>
            <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_commentaires");
        yield "\" class=\"btn btn-info\">
                <i class=\"bi bi-chat-left-text\"></i> Mes commentaires
            </a>
        </div>
    </div>

    ";
        // line 18
        yield "    <div class=\"row\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["peintures"]) || array_key_exists("peintures", $context) ? $context["peintures"] : (function () { throw new RuntimeError('Variable "peintures" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["peinture"]) {
            // line 20
            yield "        <div class=\"col-md-4 mb-4\">
            <div class=\"card h-100\">
                ";
            // line 23
            yield "                <div class=\"card-img-top-container\" style=\"height: 250px; overflow: hidden;\">
                    ";
            // line 24
            if (CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "imageUrl", [], "any", false, false, false, 24)) {
                // line 25
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "imageUrl", [], "any", false, false, false, 25), "html", null, true);
                yield "\" 
                             class=\"card-img-top h-100 w-100 object-fit-cover\" 
                             alt=\"";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "nom", [], "any", false, false, false, 27), "html", null, true);
                yield "\"
                             onerror=\"this.onerror=null;this.src='";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-artwork.jpg"), "html", null, true);
                yield "'\">
                    ";
            } else {
                // line 30
                yield "                        <div class=\"d-flex justify-content-center align-items-center h-100 bg-light\">
                            <i class=\"bi bi-image text-muted fs-1\"></i>
                        </div>
                    ";
            }
            // line 34
            yield "                </div>

                ";
            // line 37
            yield "                <div class=\"card-body d-flex flex-column\">
                    <h5 class=\"card-title\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "nom", [], "any", false, false, false, 38), "html", null, true);
            yield "</h5>
                    <div class=\"mb-2\">
                        <span class=\"badge bg-secondary\">
                            ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "dateRealisation", [], "any", false, false, false, 41), "Y"), "html", null, true);
            yield "
                        </span>
                        <span class=\"badge bg-success ms-2\">
                            ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "largeur", [], "any", false, false, false, 44), "html", null, true);
            yield "x";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "hauteur", [], "any", false, false, false, 44), "html", null, true);
            yield " cm
                        </span>
                        ";
            // line 46
            if (CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "enVente", [], "any", false, false, false, 46)) {
                // line 47
                yield "                            <span class=\"badge bg-primary ms-2\">
                               ";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "prix", [], "any", false, false, false, 48), "html", null, true);
                yield " TND
                            </span>
                        ";
            }
            // line 51
            yield "                    </div>
                    
                    <p class=\"card-text flex-grow-1\">
    ";
            // line 54
            if (CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "description", [], "any", false, false, false, 54)) {
                // line 55
                yield "        ";
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "description", [], "any", false, false, false, 55))) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source,                 // line 56
$context["peinture"], "description", [], "any", false, false, false, 56)), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source,                 // line 57
$context["peinture"], "description", [], "any", false, false, false, 57)), "html", null, true)));
                yield "
    ";
            } else {
                // line 59
                yield "        <span class=\"text-muted\">Aucune description disponible</span>
    ";
            }
            // line 61
            yield "</p>

                    ";
            // line 64
            yield "                    <div class=\"d-flex justify-content-between mt-auto\">
                        <a href=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_peinture_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-sm btn-outline-primary\">
                            <i class=\"bi bi-eye\"></i> Détails
                        </a>
                        <a href=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_commentaire_new", ["peintureId" => CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-sm btn-outline-success\">
                            <i class=\"bi bi-chat-left\"></i> Commenter
                        </a>
                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 77
        if (!$context['_iterated']) {
            // line 78
            yield "        <div class=\"col-12\">
            <div class=\"alert alert-info text-center\">
                <i class=\"bi bi-info-circle\"></i> Aucune peinture disponible
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['peinture'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 89
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .object-fit-cover {
        object-fit: cover;
    }
    .card-img-top-container {
        background-color: #f8f9fa;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/dashboard.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  278 => 89,  265 => 88,  252 => 84,  241 => 78,  239 => 77,  226 => 69,  219 => 65,  216 => 64,  212 => 61,  208 => 59,  203 => 57,  202 => 56,  200 => 55,  198 => 54,  193 => 51,  187 => 48,  184 => 47,  182 => 46,  175 => 44,  169 => 41,  163 => 38,  160 => 37,  156 => 34,  150 => 30,  145 => 28,  141 => 27,  135 => 25,  133 => 24,  130 => 23,  126 => 20,  121 => 19,  118 => 18,  109 => 11,  104 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableau de bord utilisateur{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    {# Header avec navigation #}
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1>Galerie des Peintures</h1>
        <div>
            <a href=\"{{ path('app_user_commentaires') }}\" class=\"btn btn-info\">
                <i class=\"bi bi-chat-left-text\"></i> Mes commentaires
            </a>
        </div>
    </div>

    {# Liste des peintures #}
    <div class=\"row\">
        {% for peinture in peintures %}
        <div class=\"col-md-4 mb-4\">
            <div class=\"card h-100\">
                {# Image de la peinture #}
                <div class=\"card-img-top-container\" style=\"height: 250px; overflow: hidden;\">
                    {% if peinture.imageUrl %}
                        <img src=\"{{ peinture.imageUrl }}\" 
                             class=\"card-img-top h-100 w-100 object-fit-cover\" 
                             alt=\"{{ peinture.nom }}\"
                             onerror=\"this.onerror=null;this.src='{{ asset('images/default-artwork.jpg') }}'\">
                    {% else %}
                        <div class=\"d-flex justify-content-center align-items-center h-100 bg-light\">
                            <i class=\"bi bi-image text-muted fs-1\"></i>
                        </div>
                    {% endif %}
                </div>

                {# Corps de la carte #}
                <div class=\"card-body d-flex flex-column\">
                    <h5 class=\"card-title\">{{ peinture.nom }}</h5>
                    <div class=\"mb-2\">
                        <span class=\"badge bg-secondary\">
                            {{ peinture.dateRealisation|date('Y') }}
                        </span>
                        <span class=\"badge bg-success ms-2\">
                            {{ peinture.largeur }}x{{ peinture.hauteur }} cm
                        </span>
                        {% if peinture.enVente %}
                            <span class=\"badge bg-primary ms-2\">
                               {{ peinture.prix }} TND
                            </span>
                        {% endif %}
                    </div>
                    
                    <p class=\"card-text flex-grow-1\">
    {% if peinture.description %}
        {{ peinture.description|striptags|length > 100 ? 
           peinture.description|striptags|slice(0, 100) ~ '...' : 
           peinture.description|striptags }}
    {% else %}
        <span class=\"text-muted\">Aucune description disponible</span>
    {% endif %}
</p>

                    {# Actions #}
                    <div class=\"d-flex justify-content-between mt-auto\">
                        <a href=\"{{ path('app_peinture_show', {'id': peinture.id}) }}\" 
                           class=\"btn btn-sm btn-outline-primary\">
                            <i class=\"bi bi-eye\"></i> Détails
                        </a>
                        <a href=\"{{ path('app_user_commentaire_new', {'peintureId': peinture.id}) }}\" 
                           class=\"btn btn-sm btn-outline-success\">
                            <i class=\"bi bi-chat-left\"></i> Commenter
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {% else %}
        <div class=\"col-12\">
            <div class=\"alert alert-info text-center\">
                <i class=\"bi bi-info-circle\"></i> Aucune peinture disponible
            </div>
        </div>
        {% endfor %}
    </div>
</div>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .object-fit-cover {
        object-fit: cover;
    }
    .card-img-top-container {
        background-color: #f8f9fa;
    }
</style>
{% endblock %}", "user/dashboard.html.twig", "C:\\Users\\Beya\\OneDrive\\Bureau\\deuxlfac\\sem 2\\framework ctserv\\gestionPeintures\\templates\\user\\dashboard.html.twig");
    }
}
