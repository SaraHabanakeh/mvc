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

/* home/about.html.twig */
class __TwigTemplate_2d2623b503fe773149cd702f4b7c4f44 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/about.html.twig", 1);
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

        yield "Om MVC";
        
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
        yield "<div style=\"display: flex;\">
    <div style=\"flex: 1; margin-top: 80px;\">
        <a href=\"https://github.com/dbwebb-se/mvc/tree/main/example/symfony\">
            <i class=\"fab fa-github\"></i> kursens Git-repo
        </a><br>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
                <a href=\"https://github.com/SaraHabanakeh\">
            <i class=\"fab fa-github\"></i> Mitt Git-repo
        </a>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">

    </div>
    <div style=\"flex: 1; margin-right: 50px;\">
        <h2>Om MVC:</h2>
        <p style=\"width: 400px\">
            MVC står för Model-View-Controller och är en vanlig arkitekturdesign för att organisera kod i många mjukvaruapplikationer, inklusive webbapplikationer. Här är en kort förklaring av varje del:<br><br>

            <strong>Model (Modell):</strong><br>
            Modellen representerar applikationens data och affärslogik.
            Den hanterar läsning, skrivning och validering av data.
            Modellen är oberoende av användargränssnittet och hanterar inte presentationen av data.<br><br>

            <strong>View (Vy):</strong><br>
            Vyn är ansvarig för att visa information för användaren.
            Den presenterar data från modellen på ett sätt som är läsbart och användbart för användaren.
            Vyn ska vara passiv och inte direkt interagera med modellen eller utföra någon affärslogik.<br><br>

            <strong>Controller (Kontrollant):</strong><br>
            Kontrollanten fungerar som mellanhand mellan modellen och vyn.
            Den tar emot användaråtgärder från vyn och vidarebefordrar dem till modellen för bearbetning.
            Kontrollanten kan uppdatera modellen baserat på användaråtgärder och bestämmer vilken vy som ska visas för användaren som svar på dessa åtgärder.
        </p>
    </div>
  
</div>
        <img src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/mvc.png"), "html", null, true);
        yield "\" alt=\"Description of your image\" class='img2'>

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
        return "home/about.html.twig";
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
        return array (  127 => 41,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Om MVC{% endblock %}

{% block main %}
<div style=\"display: flex;\">
    <div style=\"flex: 1; margin-top: 80px;\">
        <a href=\"https://github.com/dbwebb-se/mvc/tree/main/example/symfony\">
            <i class=\"fab fa-github\"></i> kursens Git-repo
        </a><br>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
                <a href=\"https://github.com/SaraHabanakeh\">
            <i class=\"fab fa-github\"></i> Mitt Git-repo
        </a>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">

    </div>
    <div style=\"flex: 1; margin-right: 50px;\">
        <h2>Om MVC:</h2>
        <p style=\"width: 400px\">
            MVC står för Model-View-Controller och är en vanlig arkitekturdesign för att organisera kod i många mjukvaruapplikationer, inklusive webbapplikationer. Här är en kort förklaring av varje del:<br><br>

            <strong>Model (Modell):</strong><br>
            Modellen representerar applikationens data och affärslogik.
            Den hanterar läsning, skrivning och validering av data.
            Modellen är oberoende av användargränssnittet och hanterar inte presentationen av data.<br><br>

            <strong>View (Vy):</strong><br>
            Vyn är ansvarig för att visa information för användaren.
            Den presenterar data från modellen på ett sätt som är läsbart och användbart för användaren.
            Vyn ska vara passiv och inte direkt interagera med modellen eller utföra någon affärslogik.<br><br>

            <strong>Controller (Kontrollant):</strong><br>
            Kontrollanten fungerar som mellanhand mellan modellen och vyn.
            Den tar emot användaråtgärder från vyn och vidarebefordrar dem till modellen för bearbetning.
            Kontrollanten kan uppdatera modellen baserat på användaråtgärder och bestämmer vilken vy som ska visas för användaren som svar på dessa åtgärder.
        </p>
    </div>
  
</div>
        <img src=\"{{ asset('img/mvc.png') }}\" alt=\"Description of your image\" class='img2'>

{% endblock %}
", "home/about.html.twig", "/Users/sarahabanakeh/dbwebb-kurser/mvc/me/report/templates/home/about.html.twig");
    }
}
