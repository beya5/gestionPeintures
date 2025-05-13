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

/* peinture/index.html.twig */
class __TwigTemplate_4991482426b34663a88252133daf5a79 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "peinture/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "peinture/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "peinture/index.html.twig", 1);
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

        yield "Liste des peintures";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
function handleImageError(img) {
    img.onerror = null;
    img.src = \"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default.jpg"), "html", null, true);
        yield "\";
    img.classList.add('object-fit-contain');
    img.onerror = function() {
        img.style.display = 'none';
        const fallback = document.createElement('div');
        fallback.className = 'h-100 w-100 d-flex justify-content-center align-items-center bg-light';
        fallback.innerHTML = '<i class=\"bi bi-image text-muted fs-1\"></i>';
        img.parentNode.appendChild(fallback);
    };
}
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 23
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

        // line 24
        yield "<div class=\"container mt-4\">
    ";
        // line 26
        yield "    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1>Galerie des Peintures</h1>
        <div>
            <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_home");
        yield "\" class=\"btn btn-secondary me-2\">
                <i class=\"bi bi-house\"></i> Accueil
            </a>
            <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"btn btn-outline-danger\">
                <i class=\"bi bi-box-arrow-right\"></i> Déconnexion
            </a>
        </div>
    </div>
<div class=\"container mt-4\">
    

    ";
        // line 40
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 41
            yield "    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_peinture_new");
            yield "\" class=\"btn btn-primary mb-4\">
        <i class=\"bi bi-plus-circle me-2\"></i> Ajouter une peinture
    </a>
    ";
        }
        // line 45
        yield "
    <div class=\"row\">
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["peintures"]) || array_key_exists("peintures", $context) ? $context["peintures"] : (function () { throw new RuntimeError('Variable "peintures" does not exist.', 47, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["peinture"]) {
            // line 48
            yield "        <div class=\"col-md-4 mb-4\">
            <div class=\"card h-100 shadow-sm\">
                <div class=\"card-img-container\" style=\"height: 250px; background: #f8f9fa;\">
                    ";
            // line 51
            if (CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "imageUrl", [], "any", false, false, false, 51)) {
                // line 52
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "imageUrl", [], "any", false, false, false, 52), "html", null, true);
                yield "\" 
                             class=\"h-100 w-100 object-fit-contain\"
                             alt=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "nom", [], "any", false, false, false, 54), "html", null, true);
                yield "\">
                    ";
            } else {
                // line 56
                yield "                        <div class=\"h-100 d-flex justify-content-center align-items-center\">
                            <i class=\"bi bi-image text-muted fs-1\"></i>
                        </div>
                    ";
            }
            // line 60
            yield "                </div>

                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "nom", [], "any", false, false, false, 63), "html", null, true);
            yield "</h5>
                    
                    <div class=\"d-flex flex-wrap gap-2 mb-2\">
                        <span class=\"badge bg-dark\">
                            ";
            // line 67
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "dateRealisation", [], "any", false, false, false, 67)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "dateRealisation", [], "any", false, false, false, 67), "Y"), "html", null, true)) : ("Sans date"));
            yield "
                        </span>
                        <span class=\"badge bg-primary\">
                            ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "largeur", [], "any", false, false, false, 70), "html", null, true);
            yield "x";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "hauteur", [], "any", false, false, false, 70), "html", null, true);
            yield " cm
                        </span>
                        ";
            // line 72
            if (CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "enVente", [], "any", false, false, false, 72)) {
                // line 73
                yield "                            <span class=\"badge bg-success\">
                                ";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "prix", [], "any", false, false, false, 74), 2, ",", " "), "html", null, true);
                yield " TND
                            </span>
                        ";
            }
            // line 77
            yield "                    </div>

                    <div class=\"card-text text-muted mb-3\">
                        ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "description", [], "any", false, false, false, 80))), "truncate", [100, "..."], "method", false, false, false, 80), "html", null, true);
            yield "
                    </div>

                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a href=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_peinture_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "id", [], "any", false, false, false, 84)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-sm btn-outline-primary\">
                            <i class=\"bi bi-eye me-1\"></i> Voir
                        </a>
                        
                        ";
            // line 89
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 90
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_peinture_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["peinture"], "id", [], "any", false, false, false, 90)]), "html", null, true);
                yield "\" 
                           class=\"btn btn-sm btn-outline-warning\">
                            <i class=\"bi bi-pencil me-1\"></i> Éditer
                        </a>
                        ";
            }
            // line 95
            yield "                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 99
        if (!$context['_iterated']) {
            // line 100
            yield "        <div class=\"col-12\">
            <div class=\"alert alert-info text-center\">
                <i class=\"bi bi-info-circle me-2\"></i> Aucune peinture trouvée
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['peinture'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 110
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

        // line 111
        yield "<style>
    .card {
        transition: all 0.3s ease;
        border: 1px solid rgba(0,0,0,0.1);
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .card-img-container {
        position: relative;
        overflow: hidden;
    }
    .card-img-container img {
        transition: transform 0.5s ease;
    }
    .card:hover .card-img-container img {
        transform: scale(1.05);
    }
    .object-fit-cover {
        object-fit: cover;
        object-position: center;
    }
    .object-fit-contain {
        object-fit: contain;
        object-position: center;
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
        return "peinture/index.html.twig";
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
        return array (  327 => 111,  314 => 110,  301 => 106,  290 => 100,  288 => 99,  280 => 95,  271 => 90,  269 => 89,  261 => 84,  254 => 80,  249 => 77,  243 => 74,  240 => 73,  238 => 72,  231 => 70,  225 => 67,  218 => 63,  213 => 60,  207 => 56,  202 => 54,  196 => 52,  194 => 51,  189 => 48,  184 => 47,  180 => 45,  172 => 41,  170 => 40,  159 => 32,  153 => 29,  148 => 26,  145 => 24,  132 => 23,  109 => 10,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des peintures{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
function handleImageError(img) {
    img.onerror = null;
    img.src = \"{{ asset('images/default.jpg') }}\";
    img.classList.add('object-fit-contain');
    img.onerror = function() {
        img.style.display = 'none';
        const fallback = document.createElement('div');
        fallback.className = 'h-100 w-100 d-flex justify-content-center align-items-center bg-light';
        fallback.innerHTML = '<i class=\"bi bi-image text-muted fs-1\"></i>';
        img.parentNode.appendChild(fallback);
    };
}
</script>
{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    {# En-tête avec bouton retour vers l'accueil #}
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1>Galerie des Peintures</h1>
        <div>
            <a href=\"{{ path('app_user_home') }}\" class=\"btn btn-secondary me-2\">
                <i class=\"bi bi-house\"></i> Accueil
            </a>
            <a href=\"{{ path('app_logout') }}\" class=\"btn btn-outline-danger\">
                <i class=\"bi bi-box-arrow-right\"></i> Déconnexion
            </a>
        </div>
    </div>
<div class=\"container mt-4\">
    

    {% if is_granted('ROLE_ADMIN') %}
    <a href=\"{{ path('app_peinture_new') }}\" class=\"btn btn-primary mb-4\">
        <i class=\"bi bi-plus-circle me-2\"></i> Ajouter une peinture
    </a>
    {% endif %}

    <div class=\"row\">
        {% for peinture in peintures %}
        <div class=\"col-md-4 mb-4\">
            <div class=\"card h-100 shadow-sm\">
                <div class=\"card-img-container\" style=\"height: 250px; background: #f8f9fa;\">
                    {% if peinture.imageUrl %}
                        <img src=\"{{peinture.imageUrl}}\" 
                             class=\"h-100 w-100 object-fit-contain\"
                             alt=\"{{ peinture.nom }}\">
                    {% else %}
                        <div class=\"h-100 d-flex justify-content-center align-items-center\">
                            <i class=\"bi bi-image text-muted fs-1\"></i>
                        </div>
                    {% endif %}
                </div>

                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ peinture.nom }}</h5>
                    
                    <div class=\"d-flex flex-wrap gap-2 mb-2\">
                        <span class=\"badge bg-dark\">
                            {{ peinture.dateRealisation ? peinture.dateRealisation|date('Y') : 'Sans date' }}
                        </span>
                        <span class=\"badge bg-primary\">
                            {{ peinture.largeur }}x{{ peinture.hauteur }} cm
                        </span>
                        {% if peinture.enVente %}
                            <span class=\"badge bg-success\">
                                {{ peinture.prix|number_format(2, ',', ' ') }} TND
                            </span>
                        {% endif %}
                    </div>

                    <div class=\"card-text text-muted mb-3\">
                        {{ peinture.description|striptags|u.truncate(100, '...') }}
                    </div>

                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a href=\"{{ path('app_peinture_show', {'id': peinture.id}) }}\" 
                           class=\"btn btn-sm btn-outline-primary\">
                            <i class=\"bi bi-eye me-1\"></i> Voir
                        </a>
                        
                        {% if is_granted('ROLE_ADMIN') %}
                        <a href=\"{{ path('app_peinture_edit', {'id': peinture.id}) }}\" 
                           class=\"btn btn-sm btn-outline-warning\">
                            <i class=\"bi bi-pencil me-1\"></i> Éditer
                        </a>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
        {% else %}
        <div class=\"col-12\">
            <div class=\"alert alert-info text-center\">
                <i class=\"bi bi-info-circle me-2\"></i> Aucune peinture trouvée
            </div>
        </div>
        {% endfor %}
    </div>
</div>
{% endblock %}

{% block stylesheets %}
<style>
    .card {
        transition: all 0.3s ease;
        border: 1px solid rgba(0,0,0,0.1);
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .card-img-container {
        position: relative;
        overflow: hidden;
    }
    .card-img-container img {
        transition: transform 0.5s ease;
    }
    .card:hover .card-img-container img {
        transform: scale(1.05);
    }
    .object-fit-cover {
        object-fit: cover;
        object-position: center;
    }
    .object-fit-contain {
        object-fit: contain;
        object-position: center;
    }
</style>
{% endblock %}", "peinture/index.html.twig", "C:\\Users\\PC NOURHEN\\Documents\\peinture\\gestionPeintures\\templates\\peinture\\index.html.twig");
    }
}
