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

/* black-jack/doc.html.twig */
class __TwigTemplate_9f63021eb0d852adfbf313e6dbe1ef90 extends Template
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
        return "base4.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "black-jack/doc.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "black-jack/doc.html.twig"));

        $this->parent = $this->loadTemplate("base4.html.twig", "black-jack/doc.html.twig", 1);
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

        yield "Card Game";
        
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
        yield "<h1>Black Jack Game:</h1>
<h3> Pseudokod:</h3>
<p>1.Skapa ett formulär för att mata in spelarnas namn och balans:<br>

Använd ett HTML-formulär för att samla in spelarnas namn och balans och skicka data till servern.<br></p>
<p>
2.Starta spelet:<br>

När spelarna har angett sina namn och balans, starta spelet genom att skapa en kortlek och blanda den.<br></p>
<p>
3.Implementera en funktion i Card-klassen för att beräkna kortens värde enligt Blackjack-spelet:<br>

Lägg till en funktion i Card-klassen som kan räkna värdet på ett kort baserat på Blackjack-reglerna.<br></p>

<p>
4.Skapa en spelarklass och implementera nödvändiga funktioner för att kontrollera spelarens status:<br>

Implementera funktioner i Player-klassen för att kontrollera om spelaren är busted eller har blackjack, få balansen, räkna totala handvärdet etc.<br></p>
<p>5.Skapa huvudkontrollern för spelet:<br>

Skapa en huvudkontroller för spelet som hanterar flödet av spelet.<br>
.Initialisera spelarna med sina namn och balans.<br>
.Distribuera kort till spelarna och dealern.<br>
.Låt spelarna göra sina drag (Hit eller Stay).<br>
.Låt dealern göra sina drag (dra kort tills totala värdet är minst 17).<br>
.Jämför händerna och deklarera en vinnare eller oavgjort.<br>
.Uppdatera spelarnas balans baserat på resultatet av rundan.<br>
.Tillåt spelare att starta en ny omgång eller avsluta spelet.<br></p>

<img src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/blackjack.png"), "html", null, true);
        yield "\" alt=\"Description of your image\" class='img4'>
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
        return "black-jack/doc.html.twig";
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
        return array (  121 => 35,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base4.html.twig\" %}

{% block title %}Card Game{% endblock %}

{% block main %}
<h1>Black Jack Game:</h1>
<h3> Pseudokod:</h3>
<p>1.Skapa ett formulär för att mata in spelarnas namn och balans:<br>

Använd ett HTML-formulär för att samla in spelarnas namn och balans och skicka data till servern.<br></p>
<p>
2.Starta spelet:<br>

När spelarna har angett sina namn och balans, starta spelet genom att skapa en kortlek och blanda den.<br></p>
<p>
3.Implementera en funktion i Card-klassen för att beräkna kortens värde enligt Blackjack-spelet:<br>

Lägg till en funktion i Card-klassen som kan räkna värdet på ett kort baserat på Blackjack-reglerna.<br></p>

<p>
4.Skapa en spelarklass och implementera nödvändiga funktioner för att kontrollera spelarens status:<br>

Implementera funktioner i Player-klassen för att kontrollera om spelaren är busted eller har blackjack, få balansen, räkna totala handvärdet etc.<br></p>
<p>5.Skapa huvudkontrollern för spelet:<br>

Skapa en huvudkontroller för spelet som hanterar flödet av spelet.<br>
.Initialisera spelarna med sina namn och balans.<br>
.Distribuera kort till spelarna och dealern.<br>
.Låt spelarna göra sina drag (Hit eller Stay).<br>
.Låt dealern göra sina drag (dra kort tills totala värdet är minst 17).<br>
.Jämför händerna och deklarera en vinnare eller oavgjort.<br>
.Uppdatera spelarnas balans baserat på resultatet av rundan.<br>
.Tillåt spelare att starta en ny omgång eller avsluta spelet.<br></p>

<img src=\"{{ asset('img/blackjack.png') }}\" alt=\"Description of your image\" class='img4'>
{% endblock %}", "black-jack/doc.html.twig", "/Users/sarahabanakeh/dbwebb-kurser/mvc/me/report/templates/black-jack/doc.html.twig");
    }
}
