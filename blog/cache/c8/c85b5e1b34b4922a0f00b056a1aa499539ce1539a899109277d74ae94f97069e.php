<?php

/* base.html.twig */
class __TwigTemplate_c45fa6747ab834abb7bdd0e11db53730f6201e049847d1213dd5f51780ce3247 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["SITE_URL"] ?? null), "html", null, true);
        echo "/css/style.css\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["page"] ?? null), "title", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, ($context["BLOG_TITLE"] ?? null), "html", null, true);
        echo "</title>
  </head>
  <body>
    ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "  </body>
</html>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  41 => 11,  39 => 10,  31 => 7,  27 => 6,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/Users/meisenbraun/Sites/edumedia/mtm6331/blog/templates/base.html.twig");
    }
}
