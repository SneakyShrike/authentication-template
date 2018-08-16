<?php

/* login.html.twig */
class __TwigTemplate_f2d988128a7a070cc42671320bc1b5871a249de0bd1cc3b66fc637a05706fa1e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("header_footer.html.twig", "login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "header_footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <h3>Login To An Existing Account</h3>

    <form action=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["action_login"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
        echo "\">
        <p>Username: <input type=\"text\" name=\"username\"><br></p>
        <p>Password: <input type=\"text\" name=\"password\"><br></p>
        <input type=\"submit\" title=\"Login To Account\">
    </form>
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login.html.twig", "C:\\xampp\\htdocs\\projects\\authentication\\private\\app\\templates\\login.html.twig");
    }
}
