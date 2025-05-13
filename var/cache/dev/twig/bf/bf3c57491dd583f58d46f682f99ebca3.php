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

/* admin/dashboard.html.twig */
class __TwigTemplate_5099355b1a30a7d2a4dfd2bfbca7bbae extends Template
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
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@EasyAdmin/page/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("@EasyAdmin/page/content.html.twig", "admin/dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "<div class=\"container\">
    <h1 class=\"mb-4\">Bienvenue dans le back-office</h1>
    <p class=\"text-muted\">Utilisez le menu à gauche pour gérer les entités.</p>

    <div class=\"row mt-5\">
        <div class=\"col-md-6\">
            <h2 class=\"h4\">Statistiques</h2>
            <ul class=\"list-group\">
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    Peintures
                    <span class=\"badge bg-primary rounded-pill\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["peinturesCount"]) || array_key_exists("peinturesCount", $context) ? $context["peinturesCount"] : (function () { throw new RuntimeError('Variable "peinturesCount" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    Personnes
                    <span class=\"badge bg-secondary rounded-pill\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["personnesCount"]) || array_key_exists("personnesCount", $context) ? $context["personnesCount"] : (function () { throw new RuntimeError('Variable "personnesCount" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    Catégories
                    <span class=\"badge bg-success rounded-pill\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["categoriesCount"]) || array_key_exists("categoriesCount", $context) ? $context["categoriesCount"] : (function () { throw new RuntimeError('Variable "categoriesCount" does not exist.', 22, $this->source); })()), "html", null, true);
        yield "</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    Commentaires
                    <span class=\"badge bg-warning text-dark rounded-pill\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["commentairesCount"]) || array_key_exists("commentairesCount", $context) ? $context["commentairesCount"] : (function () { throw new RuntimeError('Variable "commentairesCount" does not exist.', 26, $this->source); })()), "html", null, true);
        yield "</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    Utilisateurs
                    <span class=\"badge bg-info text-dark rounded-pill\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["usersCount"]) || array_key_exists("usersCount", $context) ? $context["usersCount"] : (function () { throw new RuntimeError('Variable "usersCount" does not exist.', 30, $this->source); })()), "html", null, true);
        yield "</span>
                </li>
            </ul>
        </div>

        <div class=\"col-md-6\">
            <h2 class=\"h4\">Graphique</h2>
            <canvas id=\"statsChart\" width=\"100%\" height=\"300\"></canvas>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 43
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

        // line 44
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        const ctx = document.getElementById('statsChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Peintures', 'Personnes', 'Catégories', 'Commentaires', 'Utilisateurs'],
                datasets: [{
                    label: 'Nombre',
                    data: [
                        ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["peinturesCount"]) || array_key_exists("peinturesCount", $context) ? $context["peinturesCount"] : (function () { throw new RuntimeError('Variable "peinturesCount" does not exist.', 54, $this->source); })()), "html", null, true);
        yield ",
                        ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["personnesCount"]) || array_key_exists("personnesCount", $context) ? $context["personnesCount"] : (function () { throw new RuntimeError('Variable "personnesCount" does not exist.', 55, $this->source); })()), "html", null, true);
        yield ",
                        ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["categoriesCount"]) || array_key_exists("categoriesCount", $context) ? $context["categoriesCount"] : (function () { throw new RuntimeError('Variable "categoriesCount" does not exist.', 56, $this->source); })()), "html", null, true);
        yield ",
                        ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["commentairesCount"]) || array_key_exists("commentairesCount", $context) ? $context["commentairesCount"] : (function () { throw new RuntimeError('Variable "commentairesCount" does not exist.', 57, $this->source); })()), "html", null, true);
        yield ",
                        ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["usersCount"]) || array_key_exists("usersCount", $context) ? $context["usersCount"] : (function () { throw new RuntimeError('Variable "usersCount" does not exist.', 58, $this->source); })()), "html", null, true);
        yield "
                    ],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision:0
                        }
                    }
                }
            }
        });
        <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    </script>
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
        return "admin/dashboard.html.twig";
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
        return array (  181 => 58,  177 => 57,  173 => 56,  169 => 55,  165 => 54,  153 => 44,  140 => 43,  117 => 30,  110 => 26,  103 => 22,  96 => 18,  89 => 14,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@EasyAdmin/page/content.html.twig' %}

{% block content %}
<div class=\"container\">
    <h1 class=\"mb-4\">Bienvenue dans le back-office</h1>
    <p class=\"text-muted\">Utilisez le menu à gauche pour gérer les entités.</p>

    <div class=\"row mt-5\">
        <div class=\"col-md-6\">
            <h2 class=\"h4\">Statistiques</h2>
            <ul class=\"list-group\">
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    Peintures
                    <span class=\"badge bg-primary rounded-pill\">{{ peinturesCount }}</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    Personnes
                    <span class=\"badge bg-secondary rounded-pill\">{{ personnesCount }}</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    Catégories
                    <span class=\"badge bg-success rounded-pill\">{{ categoriesCount }}</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    Commentaires
                    <span class=\"badge bg-warning text-dark rounded-pill\">{{ commentairesCount }}</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    Utilisateurs
                    <span class=\"badge bg-info text-dark rounded-pill\">{{ usersCount }}</span>
                </li>
            </ul>
        </div>

        <div class=\"col-md-6\">
            <h2 class=\"h4\">Graphique</h2>
            <canvas id=\"statsChart\" width=\"100%\" height=\"300\"></canvas>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        const ctx = document.getElementById('statsChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Peintures', 'Personnes', 'Catégories', 'Commentaires', 'Utilisateurs'],
                datasets: [{
                    label: 'Nombre',
                    data: [
                        {{ peinturesCount }},
                        {{ personnesCount }},
                        {{ categoriesCount }},
                        {{ commentairesCount }},
                        {{ usersCount }}
                    ],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision:0
                        }
                    }
                }
            }
        });
        <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    </script>
{% endblock %}
", "admin/dashboard.html.twig", "C:\\Users\\PC NOURHEN\\Documents\\peinture\\gestionPeintures\\templates\\admin\\dashboard.html.twig");
    }
}
