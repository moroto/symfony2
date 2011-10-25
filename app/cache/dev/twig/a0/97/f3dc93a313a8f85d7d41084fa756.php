<?php

/* AcmeTestBundle:Default:index.html.twig */
class __TwigTemplate_a097f3dc93a313a8f85d7d41084fa756 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "::base.html.twig";
        if ($parent instanceof Twig_Template) {
            $name = $parent->getTemplateName();
            $this->parent[$name] = $parent;
            $parent = $name;
        } elseif (!isset($this->parent[$parent])) {
            $this->parent[$parent] = $this->env->loadTemplate($parent);
        }

        return $this->parent[$parent];
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'name'), "html");
        echo "!
  <ul>
  ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'frameworks'));
        foreach ($context['_seq'] as $context['_key'] => $context['framework']) {
            // line 7
            echo "    <li>";
            echo twig_escape_filter($this->env, $this->getContext($context, 'framework'), "html");
            echo "</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['framework'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "  </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeTestBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
