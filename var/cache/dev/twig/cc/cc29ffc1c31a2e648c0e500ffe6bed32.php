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

/* peinture/show.html.twig */
class __TwigTemplate_a7aaf0b3c6383303aa0dc71b2fc15ce0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "peinture/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "peinture/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "peinture/show.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        
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
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"card mb-4\">
                <div class=\"card-img-container\" style=\"height: 500px; background: #f8f9fa;\">
                    ";
        // line 29
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 29, $this->source); })()), "imageUrl", [], "any", false, false, false, 29)) {
            // line 30
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 30, $this->source); })()), "imageUrl", [], "any", false, false, false, 30), "html", null, true);
            yield "\" 
                             class=\"h-100 w-100 object-fit-contain\"
                             alt=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 32, $this->source); })()), "nom", [], "any", false, false, false, 32), "html", null, true);
            yield "\">
                    ";
        } else {
            // line 34
            yield "                        <div class=\"h-100 d-flex justify-content-center align-items-center\">
                            <i class=\"bi bi-image fs-1 text-muted\"></i>
                        </div>
                    ";
        }
        // line 38
        yield "                </div>
                
                <div class=\"card-body\">
                    <h1 class=\"card-title\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 41, $this->source); })()), "nom", [], "any", false, false, false, 41), "html", null, true);
        yield "</h1>
                    
                    <div class=\"mb-3\">
                        <span class=\"badge bg-secondary me-2\">
                            ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 45, $this->source); })()), "dateRealisation", [], "any", false, false, false, 45), "Y"), "html", null, true);
        yield "
                        </span>
                        <span class=\"badge bg-primary me-2\">
                            ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 48, $this->source); })()), "largeur", [], "any", false, false, false, 48), "html", null, true);
        yield "x";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 48, $this->source); })()), "hauteur", [], "any", false, false, false, 48), "html", null, true);
        yield " cm
                        </span>
                        ";
        // line 50
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 50, $this->source); })()), "enVente", [], "any", false, false, false, 50)) {
            // line 51
            yield "                        <span class=\"badge bg-success\">
                            ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 52, $this->source); })()), "prix", [], "any", false, false, false, 52), 2, ",", " "), "html", null, true);
            yield " TND
                        </span>
                        ";
        }
        // line 55
        yield "                    </div>
                    
                    <div class=\"mb-4\">
                        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 58, $this->source); })()), "categories", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 59
            yield "                        <span class=\"badge bg-info me-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "designation", [], "any", false, false, false, 59), "html", null, true);
            yield "</span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "                    </div>
                    
                    <div class=\"peinture-description\">
                        ";
        // line 64
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 64, $this->source); })()), "description", [], "any", false, false, false, 64);
        yield "
                    </div>
                </div>
            </div>
            
            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <h3>Commentaires</h3>
                </div>
                <div class=\"card-body\">
                    ";
        // line 74
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 74, $this->source); })()), "commentaires", [], "any", false, false, false, 74))) {
            // line 75
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 75, $this->source); })()), "commentaires", [], "any", false, false, false, 75));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 76
                yield "                        <div class=\"mb-3 pb-3 border-bottom\">
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <strong>";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "nom", [], "any", false, false, false, 78), "html", null, true);
                yield "</strong>
                                <small class=\"text-muted\">";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "date", [], "any", false, false, false, 79), "d/m/Y à H:i"), "html", null, true);
                yield "</small>
                            </div>
                            <p class=\"mt-2 mb-0\">";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "contenu", [], "any", false, false, false, 81), "html", null, true);
                yield "</p>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['commentaire'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            yield "                    ";
        } else {
            // line 85
            yield "                        <p class=\"text-muted\">Aucun commentaire pour cette peinture</p>
                    ";
        }
        // line 87
        yield "                    
                    ";
        // line 88
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 89
            yield "                    <div class=\"mt-4 pt-3 border-top\">
                        <h4 class=\"h5\">Ajouter un commentaire</h4>
                        ";
            // line 91
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 91, $this->source); })()), 'form_start', ["attr" => ["class" => "mt-3"]]);
            yield "
                            ";
            // line 92
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 92, $this->source); })()), 'widget');
            yield "
                            <button class=\"btn btn-primary mt-3\">Envoyer</button>
                        ";
            // line 94
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 94, $this->source); })()), 'form_end');
            yield "
                    </div>
                    ";
        }
        // line 97
        yield "                </div>
            </div>
        </div>
    </div>
    
    <div class=\"d-flex justify-content-between align-items-center mt-4\">
        <a href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_peinture_index");
        yield "\" class=\"btn btn-outline-secondary\">
            <i class=\"bi bi-arrow-left me-2\"></i> Retour à la liste
        </a>
        
        ";
        // line 107
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 108
            yield "        <div>
            <a href=\"";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_peinture_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 109, $this->source); })()), "id", [], "any", false, false, false, 109)]), "html", null, true);
            yield "\" class=\"btn btn-warning me-2\">
                <i class=\"bi bi-pencil me-2\"></i> Modifier
            </a>
            ";
            // line 112
            yield Twig\Extension\CoreExtension::include($this->env, $context, "peinture/_delete_form.html.twig");
            yield "
        </div>
        ";
        }
        // line 115
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 119
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

        // line 120
        yield "<style>
    .peinture-description {
        line-height: 1.6;
    }
    
    .peinture-description img {
        max-width: 100%;
        height: auto;
        margin: 1rem 0;
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
        return "peinture/show.html.twig";
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
        return array (  361 => 120,  348 => 119,  335 => 115,  329 => 112,  323 => 109,  320 => 108,  318 => 107,  311 => 103,  303 => 97,  297 => 94,  292 => 92,  288 => 91,  284 => 89,  282 => 88,  279 => 87,  275 => 85,  272 => 84,  263 => 81,  258 => 79,  254 => 78,  250 => 76,  245 => 75,  243 => 74,  230 => 64,  225 => 61,  216 => 59,  212 => 58,  207 => 55,  201 => 52,  198 => 51,  196 => 50,  189 => 48,  183 => 45,  176 => 41,  171 => 38,  165 => 34,  160 => 32,  154 => 30,  152 => 29,  145 => 24,  132 => 23,  109 => 10,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ peinture.nom }}{% endblock %}

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
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"card mb-4\">
                <div class=\"card-img-container\" style=\"height: 500px; background: #f8f9fa;\">
                    {% if peinture.imageUrl %}
                        <img src=\"{{peinture.imageUrl}}\" 
                             class=\"h-100 w-100 object-fit-contain\"
                             alt=\"{{ peinture.nom }}\">
                    {% else %}
                        <div class=\"h-100 d-flex justify-content-center align-items-center\">
                            <i class=\"bi bi-image fs-1 text-muted\"></i>
                        </div>
                    {% endif %}
                </div>
                
                <div class=\"card-body\">
                    <h1 class=\"card-title\">{{ peinture.nom }}</h1>
                    
                    <div class=\"mb-3\">
                        <span class=\"badge bg-secondary me-2\">
                            {{ peinture.dateRealisation|date('Y') }}
                        </span>
                        <span class=\"badge bg-primary me-2\">
                            {{ peinture.largeur }}x{{ peinture.hauteur }} cm
                        </span>
                        {% if peinture.enVente %}
                        <span class=\"badge bg-success\">
                            {{ peinture.prix|number_format(2, ',', ' ') }} TND
                        </span>
                        {% endif %}
                    </div>
                    
                    <div class=\"mb-4\">
                        {% for categorie in peinture.categories %}
                        <span class=\"badge bg-info me-1\">{{ categorie.designation }}</span>
                        {% endfor %}
                    </div>
                    
                    <div class=\"peinture-description\">
                        {{ peinture.description|raw }}
                    </div>
                </div>
            </div>
            
            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <h3>Commentaires</h3>
                </div>
                <div class=\"card-body\">
                    {% if peinture.commentaires is not empty %}
                        {% for commentaire in peinture.commentaires %}
                        <div class=\"mb-3 pb-3 border-bottom\">
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <strong>{{ commentaire.nom }}</strong>
                                <small class=\"text-muted\">{{ commentaire.date|date('d/m/Y à H:i') }}</small>
                            </div>
                            <p class=\"mt-2 mb-0\">{{ commentaire.contenu }}</p>
                        </div>
                        {% endfor %}
                    {% else %}
                        <p class=\"text-muted\">Aucun commentaire pour cette peinture</p>
                    {% endif %}
                    
                    {% if is_granted('ROLE_USER') %}
                    <div class=\"mt-4 pt-3 border-top\">
                        <h4 class=\"h5\">Ajouter un commentaire</h4>
                        {{ form_start(commentForm, {'attr': {'class': 'mt-3'}}) }}
                            {{ form_widget(commentForm) }}
                            <button class=\"btn btn-primary mt-3\">Envoyer</button>
                        {{ form_end(commentForm) }}
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"d-flex justify-content-between align-items-center mt-4\">
        <a href=\"{{ path('app_peinture_index') }}\" class=\"btn btn-outline-secondary\">
            <i class=\"bi bi-arrow-left me-2\"></i> Retour à la liste
        </a>
        
        {% if is_granted('ROLE_ADMIN') %}
        <div>
            <a href=\"{{ path('app_peinture_edit', {'id': peinture.id}) }}\" class=\"btn btn-warning me-2\">
                <i class=\"bi bi-pencil me-2\"></i> Modifier
            </a>
            {{ include('peinture/_delete_form.html.twig') }}
        </div>
        {% endif %}
    </div>
</div>
{% endblock %}

{% block stylesheets %}
<style>
    .peinture-description {
        line-height: 1.6;
    }
    
    .peinture-description img {
        max-width: 100%;
        height: auto;
        margin: 1rem 0;
    }
    
    .object-fit-contain {
        object-fit: contain;
        object-position: center;
    }
</style>
{% endblock %}", "peinture/show.html.twig", "C:\\Users\\PC NOURHEN\\Documents\\peinture\\gestionPeintures\\templates\\peinture\\show.html.twig");
    }
}
