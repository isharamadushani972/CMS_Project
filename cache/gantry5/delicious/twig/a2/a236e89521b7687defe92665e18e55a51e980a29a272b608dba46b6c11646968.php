<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @particles/totop.html.twig */
class __TwigTemplate_6ad66c01715492ed020e7794b2c681f9d8544405681bf4e3df1ad9e57702ed00 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/totop.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", []));
        echo " g-particle\">
    <div class=\"g-totop\">
        <a href=\"#\" id=\"g-totop\" rel=\"nofollow\">
            ";
        // line 7
        if ($this->getAttribute(($context["particle"] ?? null), "icon", [])) {
            echo "<i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "icon", []), "html", null, true);
            echo "\"></i>";
        }
        // line 8
        echo "            ";
        if ($this->getAttribute(($context["particle"] ?? null), "content", [])) {
            echo $this->getAttribute(($context["particle"] ?? null), "content", []);
        }
        // line 9
        echo "            ";
        if (( !$this->getAttribute(($context["particle"] ?? null), "icon", []) &&  !$this->getAttribute(($context["particle"] ?? null), "content", []))) {
            echo "To Top";
        }
        // line 10
        echo "        </a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/totop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  60 => 9,  55 => 8,  49 => 7,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/totop.html.twig", "C:\\xampp\\htdocs\\ishara\\media\\gantry5\\engines\\nucleus\\particles\\totop.html.twig");
    }
}
