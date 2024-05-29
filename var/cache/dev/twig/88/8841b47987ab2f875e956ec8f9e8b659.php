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

/* black-jack/form.html.twig */
class __TwigTemplate_5bb19288aab4aedc936b20f2fc08c0cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "black-jack/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "black-jack/form.html.twig"));

        $this->parent = $this->loadTemplate("base4.html.twig", "black-jack/form.html.twig", 1);
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

        yield "Black Jack";
        
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
        yield "    <h4>Setup Players</h4>
    <form action=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_start");
        yield "\" method=\"post\">
        <h4>Player 1</h4>
        <label for=\"player1_name\">Name:</label>
        <input type=\"text\" id=\"player1_name\" name=\"players[0][name]\" required>
        <label for=\"player1_balance\">Balance:</label>
        <input type=\"number\" id=\"player1_balance\" name=\"players[0][balance]\" required>

        <h4>Player 2</h4>
        <label for=\"player2_name\">Name:</label>
        <input type=\"text\" id=\"player2_name\" name=\"players[1][name]\" required>
        <label for=\"player2_balance\">Balance:</label>
        <input type=\"number\" id=\"player2_balance\" name=\"players[1][balance]\" required>

        <h4>Player 3</h4>
        <label for=\"player3_name\">Name:</label>
        <input type=\"text\" id=\"player3_name\" name=\"players[2][name]\" required>
        <label for=\"player3_balance\">Balance:</label>
        <input type=\"number\" id=\"player3_balance\" name=\"players[2][balance]\" required>

        <button type=\"submit\">Start Game</button>
    </form>
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
        return "black-jack/form.html.twig";
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
        return array (  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base4.html.twig\" %}

{% block title %}Black Jack{% endblock %}

{% block main %}
    <h4>Setup Players</h4>
    <form action=\"{{ path('game_start') }}\" method=\"post\">
        <h4>Player 1</h4>
        <label for=\"player1_name\">Name:</label>
        <input type=\"text\" id=\"player1_name\" name=\"players[0][name]\" required>
        <label for=\"player1_balance\">Balance:</label>
        <input type=\"number\" id=\"player1_balance\" name=\"players[0][balance]\" required>

        <h4>Player 2</h4>
        <label for=\"player2_name\">Name:</label>
        <input type=\"text\" id=\"player2_name\" name=\"players[1][name]\" required>
        <label for=\"player2_balance\">Balance:</label>
        <input type=\"number\" id=\"player2_balance\" name=\"players[1][balance]\" required>

        <h4>Player 3</h4>
        <label for=\"player3_name\">Name:</label>
        <input type=\"text\" id=\"player3_name\" name=\"players[2][name]\" required>
        <label for=\"player3_balance\">Balance:</label>
        <input type=\"number\" id=\"player3_balance\" name=\"players[2][balance]\" required>

        <button type=\"submit\">Start Game</button>
    </form>
{% endblock %}", "black-jack/form.html.twig", "/Users/sarahabanakeh/dbwebb-kurser/mvc/me/report/templates/black-jack/form.html.twig");
    }
}
