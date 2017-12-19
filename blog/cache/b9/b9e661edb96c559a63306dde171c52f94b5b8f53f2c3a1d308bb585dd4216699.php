<?php

/* base.html.twig */
class __TwigTemplate_42e37102682a1d4697b68dcef35cd11e0d0e1d229d7b2f02afd9006acbdab9db extends Twig_Template
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
<<<<<<< HEAD
        return new Twig_Source("", "base.html.twig", "C:\\MAMP\\htdocs\\mtm6331-group_project\\post\\blog\\templates\\base.html.twig");
=======
        return new Twig_Source("", "base.html.twig", "C:\\MAMP\\htdocs\\post\\blog\\templates\\base.html.twig");
>>>>>>> 53d3a3e8fa08336d3ba3ba32ecc6e7eaba278efa
    }
}
