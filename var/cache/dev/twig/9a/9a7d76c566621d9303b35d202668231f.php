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

/* home/me.html.twig */
class __TwigTemplate_2e892175fb83c998f54c54df9df18a76 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/me.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/me.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/me.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Magic number";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        yield "
    <h1>Hej!</h1>
    <div style=\"display: flex;\">
        <div style=\"flex: 1;\">
            <h2> Lite Om Mig Själv:</h2>
            <p style=\"width: 400px\">Mitt namn är Sara Habanakeh och för närvarande studerar jag Webbprogrammering på distans. Innan jag fördjupade mig i webbutveckling arbetade jag som barnskötare och lärarassistent inom matematik.Med dagens teknologiska framsteg spelar programmering en avgörande roll i våra liv, och jag blev nyfiken på att förstå mer om detta fascinerande ämne. Att lära mig programmering öppnar upp en helt ny värld av möjligheter och ger mig verktygen för att skapa innovativa lösningar på olika problem.
            På min fritid älskar jag att spendera tid med min familj och mina vänner. Att umgås och skapa minnen tillsammans är något som jag värdesätter högt. Utöver det tycker jag om att förlora mig i spännande böcker, utforska olika film- och seriegenrer och upptäcka nya berättelser som inspirerar mig.</p>
        </div>
        <div style=\"flex: 1;  margin-left: 50px;\">
            <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ss.JPG"), "html", null, true);
        yield "\" alt=\"Description of your image\" class='img1'>

        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/me.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  101 => 15,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Magic number{% endblock %}

{% block main %}

    <h1>Hej!</h1>
    <div style=\"display: flex;\">
        <div style=\"flex: 1;\">
            <h2> Lite Om Mig Själv:</h2>
            <p style=\"width: 400px\">Mitt namn är Sara Habanakeh och för närvarande studerar jag Webbprogrammering på distans. Innan jag fördjupade mig i webbutveckling arbetade jag som barnskötare och lärarassistent inom matematik.Med dagens teknologiska framsteg spelar programmering en avgörande roll i våra liv, och jag blev nyfiken på att förstå mer om detta fascinerande ämne. Att lära mig programmering öppnar upp en helt ny värld av möjligheter och ger mig verktygen för att skapa innovativa lösningar på olika problem.
            På min fritid älskar jag att spendera tid med min familj och mina vänner. Att umgås och skapa minnen tillsammans är något som jag värdesätter högt. Utöver det tycker jag om att förlora mig i spännande böcker, utforska olika film- och seriegenrer och upptäcka nya berättelser som inspirerar mig.</p>
        </div>
        <div style=\"flex: 1;  margin-left: 50px;\">
            <img src=\"{{ asset('img/ss.JPG') }}\" alt=\"Description of your image\" class='img1'>

        </div>
    </div>

{% endblock %}
", "home/me.html.twig", "/Users/sarahabanakeh/dbwebb-kurser/mvc/me/report/templates/home/me.html.twig");
    }
}
