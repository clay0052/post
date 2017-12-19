<?php

/* form.html.twig */
class __TwigTemplate_770cf5f4a667fc1a2ec42f6b1f855c17b3e35157d23f414152188a9440e588d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "form.html.twig", 1);
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
        echo "<form method=\"post\">
  <div>
    <label>Title</label>
    <input type=\"text\" name=\"title\" placeholder=\"Title\" value=\"\" required>
  </div>
  <div>
    <label>Slug</label>
    <input type=\"text\" name=\"slug\" placeholder=\"Slug\" value=\"\" required>
  </div>
  <div>
      <select name=\"category\" required>
        <option>Select a Category</option>
      </select>
  </div>
  <div>
    <label>Excerpt</label>
    <textarea name=\"excerpt\" rows=\"8\" cols=\"80\" required></textarea>
  </div>
  <div>
    <label>Body</label>
    <textarea name=\"body\" rows=\"8\" cols=\"80\" required></textarea>
  </div>
  <div>
    <input type=\"submit\" name=\"submit\" value=\"Submit\">
  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form.html.twig", "/Users/meisenbraun/Sites/edumedia/mtm6331/blog/templates/form.html.twig");
    }
}
