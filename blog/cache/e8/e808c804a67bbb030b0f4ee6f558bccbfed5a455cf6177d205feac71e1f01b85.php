<?php

/* list.html.twig */
class __TwigTemplate_135ced829da7268316009a3c02eda597aa986749ca8f13cc1341fcdd7901cfe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "list.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 6
            echo "    <h2><a href=\"";
            echo twig_escape_filter($this->env, ($context["SITE_URL"] ?? null), "html", null, true);
            echo "/post.php?slug=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "post_slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "post_title", array()), "html", null, true);
            echo "</a></h2>
    <p>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "post_date", array()), "html", null, true);
            echo "</p>
    ";
            // line 8
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "post_excerpt", array());
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
<<<<<<< HEAD
  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 12
            echo "
  <h2><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, ($context["SITE_URL"] ?? null), "html", null, true);
            echo "/category.php?slug=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "category_slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "post_title", array()), "html", null, true);
            echo "</a></h2>
  <p>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "post_date", array()), "html", null, true);
            echo "</p>
  ";
            // line 15
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "post_excerpt", array());
            echo "


  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
=======
>>>>>>> 53d3a3e8fa08336d3ba3ba32ecc6e7eaba278efa
";
    }

    public function getTemplateName()
    {
        return "list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  91 => 19,  81 => 15,  77 => 14,  69 => 13,  66 => 12,  62 => 11,  59 => 10,  51 => 8,  47 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
=======
        return array (  59 => 10,  51 => 8,  47 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
>>>>>>> 53d3a3e8fa08336d3ba3ba32ecc6e7eaba278efa
    }

    public function getSourceContext()
    {
<<<<<<< HEAD
        return new Twig_Source("", "list.html.twig", "C:\\MAMP\\htdocs\\mtm6331-group_project\\post\\blog\\templates\\list.html.twig");
=======
        return new Twig_Source("", "list.html.twig", "C:\\MAMP\\htdocs\\post\\blog\\templates\\list.html.twig");
>>>>>>> 53d3a3e8fa08336d3ba3ba32ecc6e7eaba278efa
    }
}
