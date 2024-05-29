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

/* black-jack/home.html.twig */
class __TwigTemplate_c87ea2ee1b491d6f64121e7ab7534ea4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "black-jack/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "black-jack/home.html.twig"));

        $this->parent = $this->loadTemplate("base4.html.twig", "black-jack/home.html.twig", 1);
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
        yield "<h2>Players</h2>
    <ul>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 8, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 9
            yield "            <li class=\"player\">
                <strong>";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "getName", [], "method", false, false, false, 10), "html", null, true);
            yield "</strong><br>
                Balance: ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "getBalance", [], "method", false, false, false, 11), "html", null, true);
            yield " <div class=\"coin\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "getBalanceGraphic", [], "method", false, false, false, 11), "html", null, true);
            yield "</div><br>
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["player"], "getHand", [], "method", false, false, false, 12), "getCards", [], "method", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 13
                yield "                    <span class=\"card ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "getSuitClass", [], "method", false, false, false, 13), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "getAsString", [], "method", false, false, false, 13), "html", null, true);
                yield "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "                <br>
                Total Value: ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "getHandValue", [], "method", false, false, false, 16), "html", null, true);
            yield "
                <br>
                ";
            // line 18
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["player"], "getStatus", [], "method", false, false, false, 18) != "done")) {
                // line 19
                yield "                    <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_hit", ["playerIndex" => CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 19)]), "html", null, true);
                yield "\" method=\"post\" style=\"display:inline;\">
                        <button class=\"button\" type=\"submit\">Hit</button>
                    </form>
                    <form action=\"";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_stay", ["playerIndex" => CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 22)]), "html", null, true);
                yield "\" method=\"post\" style=\"display:inline;\">
                        <button class=\"button\" type=\"submit\">Stay</button>
                    </form>
                ";
            } else {
                // line 26
                yield "                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["player"], "isBusted", [], "method", false, false, false, 26)) {
                    // line 27
                    yield "                        <p>Busted!</p>
                    ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 28
$context["player"], "hasBlackJack", [], "method", false, false, false, 28)) {
                    // line 29
                    yield "                        <p>Blackjack!</p>
                    ";
                }
                // line 31
                yield "                ";
            }
            // line 32
            yield "            </li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "    </ul>

    ";
        // line 36
        $context["allPlayersDone"] = true;
        // line 37
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 38
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["player"], "getStatus", [], "method", false, false, false, 38) != "done")) {
                // line 39
                yield "            ";
                $context["allPlayersDone"] = false;
                // line 40
                yield "        ";
            }
            // line 41
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "
    ";
        // line 43
        if ((isset($context["allPlayersDone"]) || array_key_exists("allPlayersDone", $context) ? $context["allPlayersDone"] : (function () { throw new RuntimeError('Variable "allPlayersDone" does not exist.', 43, $this->source); })())) {
            // line 44
            yield "        <form action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_dealer");
            yield "\" method=\"post\" style=\"display:inline;\">
            ";
            // line 45
            yield Twig\Extension\CoreExtension::include($this->env, $context, "black-jack/flash.html.twig");
            yield "
        </form>
        <form action=\"";
            // line 47
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_reset");
            yield "\" method=\"post\">
            <button type=\"submit\">Play Again</button>
        </form>
    ";
        }
        // line 51
        yield "    <div class=\"bank\">
    <h2>Bank</h2>
    <ul>
        <li>
            Balance: ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bank"]) || array_key_exists("bank", $context) ? $context["bank"] : (function () { throw new RuntimeError('Variable "bank" does not exist.', 55, $this->source); })()), "getBalance", [], "method", false, false, false, 55), "html", null, true);
        yield " <span class=\"coin\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bank"]) || array_key_exists("bank", $context) ? $context["bank"] : (function () { throw new RuntimeError('Variable "bank" does not exist.', 55, $this->source); })()), "getBalanceGraphic", [], "method", false, false, false, 55), "html", null, true);
        yield "</span><br>
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bank"]) || array_key_exists("bank", $context) ? $context["bank"] : (function () { throw new RuntimeError('Variable "bank" does not exist.', 56, $this->source); })()), "getHand", [], "method", false, false, false, 56), "getCards", [], "method", false, false, false, 56));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 57
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 57) || (isset($context["allPlayersDone"]) || array_key_exists("allPlayersDone", $context) ? $context["allPlayersDone"] : (function () { throw new RuntimeError('Variable "allPlayersDone" does not exist.', 57, $this->source); })()))) {
                // line 58
                yield "                    <span class=\"card ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "getSuitClass", [], "method", false, false, false, 58), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "getAsString", [], "method", false, false, false, 58), "html", null, true);
                yield "</span>
                ";
            } else {
                // line 60
                yield "                    <span class=\"card back\"></span>
                ";
            }
            // line 62
            yield "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "            <br>
            Total Value: ";
        // line 64
        (((isset($context["allPlayersDone"]) || array_key_exists("allPlayersDone", $context) ? $context["allPlayersDone"] : (function () { throw new RuntimeError('Variable "allPlayersDone" does not exist.', 64, $this->source); })())) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bank"]) || array_key_exists("bank", $context) ? $context["bank"] : (function () { throw new RuntimeError('Variable "bank" does not exist.', 64, $this->source); })()), "getHandValue", [], "method", false, false, false, 64), "html", null, true)) : (yield "🂠"));
        yield "
        </li>
    </ul>
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
        return "black-jack/home.html.twig";
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
        return array (  302 => 64,  299 => 63,  285 => 62,  281 => 60,  273 => 58,  270 => 57,  253 => 56,  247 => 55,  241 => 51,  234 => 47,  229 => 45,  224 => 44,  222 => 43,  219 => 42,  213 => 41,  210 => 40,  207 => 39,  204 => 38,  199 => 37,  197 => 36,  193 => 34,  178 => 32,  175 => 31,  171 => 29,  169 => 28,  166 => 27,  163 => 26,  156 => 22,  149 => 19,  147 => 18,  142 => 16,  139 => 15,  128 => 13,  124 => 12,  118 => 11,  114 => 10,  111 => 9,  94 => 8,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base4.html.twig\" %}

{% block title %}Black Jack{% endblock %}

{% block main %}
<h2>Players</h2>
    <ul>
        {% for player in players %}
            <li class=\"player\">
                <strong>{{ player.getName() }}</strong><br>
                Balance: {{ player.getBalance() }} <div class=\"coin\">{{ player.getBalanceGraphic() }}</div><br>
                {% for card in player.getHand().getCards() %}
                    <span class=\"card {{ card.getSuitClass() }}\">{{ card.getAsString() }}</span>
                {% endfor %}
                <br>
                Total Value: {{ player.getHandValue() }}
                <br>
                {% if player.getStatus() != 'done' %}
                    <form action=\"{{ path('game_hit', {'playerIndex': loop.index0}) }}\" method=\"post\" style=\"display:inline;\">
                        <button class=\"button\" type=\"submit\">Hit</button>
                    </form>
                    <form action=\"{{ path('game_stay', {'playerIndex': loop.index0}) }}\" method=\"post\" style=\"display:inline;\">
                        <button class=\"button\" type=\"submit\">Stay</button>
                    </form>
                {% else %}
                    {% if player.isBusted() %}
                        <p>Busted!</p>
                    {% elseif player.hasBlackJack() %}
                        <p>Blackjack!</p>
                    {% endif %}
                {% endif %}
            </li>
        {% endfor %}
    </ul>

    {% set allPlayersDone = true %}
    {% for player in players %}
        {% if player.getStatus() != 'done' %}
            {% set allPlayersDone = false %}
        {% endif %}
    {% endfor %}

    {% if allPlayersDone %}
        <form action=\"{{ path('game_dealer') }}\" method=\"post\" style=\"display:inline;\">
            {{ include('black-jack/flash.html.twig') }}
        </form>
        <form action=\"{{ path('game_reset') }}\" method=\"post\">
            <button type=\"submit\">Play Again</button>
        </form>
    {% endif %}
    <div class=\"bank\">
    <h2>Bank</h2>
    <ul>
        <li>
            Balance: {{ bank.getBalance() }} <span class=\"coin\">{{ bank.getBalanceGraphic() }}</span><br>
            {% for card in bank.getHand().getCards() %}
                {% if loop.first or allPlayersDone %}
                    <span class=\"card {{ card.getSuitClass() }}\">{{ card.getAsString() }}</span>
                {% else %}
                    <span class=\"card back\"></span>
                {% endif %}
            {% endfor %}
            <br>
            Total Value: {{ allPlayersDone ? bank.getHandValue() : '🂠' }}
        </li>
    </ul>
    </div>
{% endblock %}
", "black-jack/home.html.twig", "/Users/sarahabanakeh/dbwebb-kurser/mvc/me/report/templates/black-jack/home.html.twig");
    }
}
