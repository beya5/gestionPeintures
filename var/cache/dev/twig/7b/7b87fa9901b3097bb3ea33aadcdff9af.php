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

/* registration/register.html.twig */
class __TwigTemplate_05a88884666aed7f99462be6f4402400 extends Template
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
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<div class=\"container vh-100 d-flex justify-content-center align-items-center\">
    <div class=\"card shadow-lg border-0\" style=\"max-width: 600px; width: 100%; border-radius: 10px; background-color: #e6f4ea; padding: 30px;\">
        <h2 class=\"text-center mb-2 text-primary fw-bold\" style=\"font-size: 2.5rem;\">Créer un compte</h2>

        ";
        // line 8
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 8, $this->source); })()), 'form_start');
        yield "

        <div class=\"mb-4\">
            <label class=\"form-label fw-semibold\">Adresse Email</label>
            ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 12, $this->source); })()), "eamillogin", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control custom-input"]]);
        yield "
        </div>

        <div class=\"mb-4\">
            <label class=\"form-label fw-semibold\">Mot de passe</label>
            ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), "plainPassword", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control custom-input"]]);
        yield "
        </div>

        <div class=\"mb-4 form-check\">
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), "agreeTerms", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
            <label class=\"form-check-label ms-2\">Accepter les conditions</label>
        </div>

        <h4 class=\"mt-5 mb-3 text-secondary\">Informations personnelles</h4>

        <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "cin", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "form-control custom-input"], "label" => "CIN"]);
        // line 32
        yield "
            </div>
            <div class=\"col-md-6 mb-3\">
                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "tel", [], "any", false, false, false, 35), 'row', ["attr" => ["class" => "form-control custom-input"], "label" => "Téléphone"]);
        // line 38
        yield "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "nom", [], "any", false, false, false, 44), 'row', ["attr" => ["class" => "form-control custom-input"], "label" => "Nom"]);
        // line 47
        yield "
            </div>
            <div class=\"col-md-6 mb-3\">
                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "prenom", [], "any", false, false, false, 50), 'row', ["attr" => ["class" => "form-control custom-input"], "label" => "Prénom"]);
        // line 53
        yield "
            </div>
        </div>

        <div class=\"d-grid\">
            <button type=\"submit\" class=\"btn btn-success btn-lg shadow-sm custom-input\">S'inscrire</button>
        </div>

        ";
        // line 61
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), 'form_end');
        yield "
    </div>
</div>
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
        return "registration/register.html.twig";
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
        return array (  151 => 61,  141 => 53,  139 => 50,  134 => 47,  132 => 44,  124 => 38,  122 => 35,  117 => 32,  115 => 29,  104 => 21,  97 => 17,  89 => 12,  82 => 8,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container vh-100 d-flex justify-content-center align-items-center\">
    <div class=\"card shadow-lg border-0\" style=\"max-width: 600px; width: 100%; border-radius: 10px; background-color: #e6f4ea; padding: 30px;\">
        <h2 class=\"text-center mb-2 text-primary fw-bold\" style=\"font-size: 2.5rem;\">Créer un compte</h2>

        {{ form_start(registrationForm) }}

        <div class=\"mb-4\">
            <label class=\"form-label fw-semibold\">Adresse Email</label>
            {{ form_widget(registrationForm.eamillogin, {'attr': {'class': 'form-control custom-input'}}) }}
        </div>

        <div class=\"mb-4\">
            <label class=\"form-label fw-semibold\">Mot de passe</label>
            {{ form_widget(registrationForm.plainPassword, {'attr': {'class': 'form-control custom-input'}}) }}
        </div>

        <div class=\"mb-4 form-check\">
            {{ form_widget(registrationForm.agreeTerms, {'attr': {'class': 'form-check-input'}}) }}
            <label class=\"form-check-label ms-2\">Accepter les conditions</label>
        </div>

        <h4 class=\"mt-5 mb-3 text-secondary\">Informations personnelles</h4>

        <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
                {{ form_row(registrationForm.cin, {
                    'attr': {'class': 'form-control custom-input'},
                    'label': 'CIN'
                }) }}
            </div>
            <div class=\"col-md-6 mb-3\">
                {{ form_row(registrationForm.tel, {
                    'attr': {'class': 'form-control custom-input'},
                    'label': 'Téléphone'
                }) }}
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
                {{ form_row(registrationForm.nom, {
                    'attr': {'class': 'form-control custom-input'},
                    'label': 'Nom'
                }) }}
            </div>
            <div class=\"col-md-6 mb-3\">
                {{ form_row(registrationForm.prenom, {
                    'attr': {'class': 'form-control custom-input'},
                    'label': 'Prénom'
                }) }}
            </div>
        </div>

        <div class=\"d-grid\">
            <button type=\"submit\" class=\"btn btn-success btn-lg shadow-sm custom-input\">S'inscrire</button>
        </div>

        {{ form_end(registrationForm) }}
    </div>
</div>
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\Beya\\OneDrive\\Bureau\\deuxlfac\\sem 2\\framework ctserv\\gestionPeintures\\templates\\registration\\register.html.twig");
    }
}
