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
class __TwigTemplate_3b03093572b135fb36857c56a8b0ab5f extends Template
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
        // line 2
        return "@EasyAdmin/page/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("@EasyAdmin/page/content.html.twig", "admin/dashboard.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
        yield "    <h1>Bienvenue dans le back-office</h1>
    <p>Utilisez le menu à gauche pour gérer les entités.</p>

    <h2>Statistiques</h2>
    <ul>
        <li><strong>Peintures :</strong> ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["peintureCount"]) || array_key_exists("peintureCount", $context) ? $context["peintureCount"] : (function () { throw new RuntimeError('Variable "peintureCount" does not exist.', 10, $this->source); })()), "html", null, true);
        yield "</li>
        <li><strong>Personnes :</strong> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["personneCount"]) || array_key_exists("personneCount", $context) ? $context["personneCount"] : (function () { throw new RuntimeError('Variable "personneCount" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "</li>
        <li><strong>Catégories :</strong> ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["categorieCount"]) || array_key_exists("categorieCount", $context) ? $context["categorieCount"] : (function () { throw new RuntimeError('Variable "categorieCount" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "</li>
        <li><strong>Commentaires :</strong> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["commentaireCount"]) || array_key_exists("commentaireCount", $context) ? $context["commentaireCount"] : (function () { throw new RuntimeError('Variable "commentaireCount" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "</li>
        <li><strong>Utilisateurs :</strong> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userCount"]) || array_key_exists("userCount", $context) ? $context["userCount"] : (function () { throw new RuntimeError('Variable "userCount" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "</li>
    </ul>

    <canvas id=\"statsChart\" width=\"600\" height=\"300\"></canvas>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 20
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

        // line 21
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
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["peintureCount"]) || array_key_exists("peintureCount", $context) ? $context["peintureCount"] : (function () { throw new RuntimeError('Variable "peintureCount" does not exist.', 31, $this->source); })()), "html", null, true);
        yield ",
                        ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["personneCount"]) || array_key_exists("personneCount", $context) ? $context["personneCount"] : (function () { throw new RuntimeError('Variable "personneCount" does not exist.', 32, $this->source); })()), "html", null, true);
        yield ",
                        ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["categorieCount"]) || array_key_exists("categorieCount", $context) ? $context["categorieCount"] : (function () { throw new RuntimeError('Variable "categorieCount" does not exist.', 33, $this->source); })()), "html", null, true);
        yield ",
                        ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["commentaireCount"]) || array_key_exists("commentaireCount", $context) ? $context["commentaireCount"] : (function () { throw new RuntimeError('Variable "commentaireCount" does not exist.', 34, $this->source); })()), "html", null, true);
        yield ",
                        ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userCount"]) || array_key_exists("userCount", $context) ? $context["userCount"] : (function () { throw new RuntimeError('Variable "userCount" does not exist.', 35, $this->source); })()), "html", null, true);
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
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });
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
        return array (  157 => 35,  153 => 34,  149 => 33,  145 => 32,  141 => 31,  129 => 21,  116 => 20,  100 => 14,  96 => 13,  92 => 12,  88 => 11,  84 => 10,  77 => 5,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/dashboard.html.twig #}
{% extends '@EasyAdmin/page/content.html.twig' %}

{% block content %}
    <h1>Bienvenue dans le back-office</h1>
    <p>Utilisez le menu à gauche pour gérer les entités.</p>

    <h2>Statistiques</h2>
    <ul>
        <li><strong>Peintures :</strong> {{ peintureCount }}</li>
        <li><strong>Personnes :</strong> {{ personneCount }}</li>
        <li><strong>Catégories :</strong> {{ categorieCount }}</li>
        <li><strong>Commentaires :</strong> {{ commentaireCount }}</li>
        <li><strong>Utilisateurs :</strong> {{ userCount }}</li>
    </ul>

    <canvas id=\"statsChart\" width=\"600\" height=\"300\"></canvas>
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
                        {{ peintureCount }},
                        {{ personneCount }},
                        {{ categorieCount }},
                        {{ commentaireCount }},
                        {{ userCount }}
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
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });
    </script>
{% endblock %}", "admin/dashboard.html.twig", "C:\\Users\\PC NOURHEN\\Documents\\peinture\\gestionPeintures\\templates\\admin\\dashboard.html.twig");
    }
}
