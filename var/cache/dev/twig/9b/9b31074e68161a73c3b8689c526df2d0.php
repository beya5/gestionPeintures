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
class __TwigTemplate_6407f52a895d3e6fa8a5cfc5627ac5e5 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        yield "<div class=\"container mt-4\">
    <h1>Register</h1>

    ";
        // line 4
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 4, $this->source); })()), 'form_start');
        yield "
        <div class=\"mb-3\">
            ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 6, $this->source); })()), "eamillogin", [], "any", false, false, false, 6), 'row', ["attr" => ["class" => "form-control"]]);
        // line 8
        yield "
        </div>
        
        <div class=\"mb-3\">
            ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 12, $this->source); })()), "plainPassword", [], "any", false, false, false, 12), 'row', ["attr" => ["class" => "form-control"]]);
        // line 14
        yield "
        </div>
        
        <div class=\"mb-3 form-check\">
            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 18, $this->source); })()), "agreeTerms", [], "any", false, false, false, 18), 'row', ["attr" => ["class" => "form-check-input"]]);
        // line 20
        yield "
        </div>
        
        <h3 class=\"mt-4\">Personal Information</h3>
        
        <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "cin", [], "any", false, false, false, 27), 'row', ["attr" => ["class" => "form-control"], "label" => "CIN"]);
        // line 30
        yield "
            </div>
            <div class=\"col-md-6 mb-3\">
                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "tel", [], "any", false, false, false, 33), 'row', ["attr" => ["class" => "form-control"], "label" => "Phone Number"]);
        // line 36
        yield "
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "nom", [], "any", false, false, false, 42), 'row', ["attr" => ["class" => "form-control"], "label" => "Last Name"]);
        // line 45
        yield "
            </div>
            <div class=\"col-md-6 mb-3\">
                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "prenom", [], "any", false, false, false, 48), 'row', ["attr" => ["class" => "form-control"], "label" => "First Name"]);
        // line 51
        yield "
            </div>
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">Register</button>
    ";
        // line 56
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), 'form_end');
        yield "
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  118 => 56,  111 => 51,  109 => 48,  104 => 45,  102 => 42,  94 => 36,  92 => 33,  87 => 30,  85 => 27,  76 => 20,  74 => 18,  68 => 14,  66 => 12,  60 => 8,  58 => 6,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container mt-4\">
    <h1>Register</h1>

    {{ form_start(registrationForm) }}
        <div class=\"mb-3\">
            {{ form_row(registrationForm.eamillogin, {
                'attr': {'class': 'form-control'}
            }) }}
        </div>
        
        <div class=\"mb-3\">
            {{ form_row(registrationForm.plainPassword, {
                'attr': {'class': 'form-control'}
            }) }}
        </div>
        
        <div class=\"mb-3 form-check\">
            {{ form_row(registrationForm.agreeTerms, {
                'attr': {'class': 'form-check-input'}
            }) }}
        </div>
        
        <h3 class=\"mt-4\">Personal Information</h3>
        
        <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
                {{ form_row(registrationForm.cin, {
                    'attr': {'class': 'form-control'},
                    'label': 'CIN'
                }) }}
            </div>
            <div class=\"col-md-6 mb-3\">
                {{ form_row(registrationForm.tel, {
                    'attr': {'class': 'form-control'},
                    'label': 'Phone Number'
                }) }}
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
                {{ form_row(registrationForm.nom, {
                    'attr': {'class': 'form-control'},
                    'label': 'Last Name'
                }) }}
            </div>
            <div class=\"col-md-6 mb-3\">
                {{ form_row(registrationForm.prenom, {
                    'attr': {'class': 'form-control'},
                    'label': 'First Name'
                }) }}
            </div>
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">Register</button>
    {{ form_end(registrationForm) }}
</div>", "registration/register.html.twig", "C:\\Users\\Beya\\OneDrive\\Bureau\\deuxlfac\\sem 2\\framework ctserv\\gestionPeintures\\templates\\registration\\register.html.twig");
    }
}
