<?php

/* header_footer.html.twig */
class __TwigTemplate_4ddc373d5fe3fa34317c79e38b19cfb508e8d9f8dc2fd163d4da98ce6d81419a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "header_footer.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["page_title"] ?? null), "html", null, true);
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "    <header>
        <h1>Login App</h1>

        <p class=\"curr_page\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["landing_page"] ?? null), "html", null, true);
        echo "\">Home</a></p>

        <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["register_form"] ?? null), "html", null, true);
        echo "\" method=\"get\">
            <input type=\"submit\" value=\"Sign Up\" />
        </form>

        <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["login_form"] ?? null), "html", null, true);
        echo "\" method=\"get\">
            <input type=\"submit\" value=\"Login\" />
        </form>

        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\" method=\"get\">
            <input type=\"submit\" value=\"Log Out\" />
        </form>
    </header>
";
    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        // line 23
        echo "    <footer> <!--FOOTER START-->
        <p>Created By GR412 2018</p>

        <div class=\"icons\">\t<!--FOOTER ICONS START-->
            <a title=\"GR412's Youtube channel\" href=\"https://www.youtube.com/user/GR412\" target=\"_blank\">
                <img src=\"images/youtube-icon.png\" alt=\"youtube-icon\"/>
            </a>

            <a title=\"GR412's Twitch channel\" href=\"http://www.twitch.tv/gr412\" target=\"_blank\">
                <img src=\"images/twitch-icon.png\" alt=\"twitch-icon\"/>
            </a>

            <a title=\"GR412's Github\" href=\"https://github.com/GR412\" target=\"_blank\">
                <img src=\"images/github-icon.png\" alt=\"github-icon\"/>
            </a>
        </div> <!--FOOTER ICONS END-->
    </footer> <!--FOOTER END-->
";
    }

    public function getTemplateName()
    {
        return "header_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 23,  76 => 22,  67 => 17,  60 => 13,  53 => 9,  48 => 7,  43 => 4,  40 => 3,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "header_footer.html.twig", "C:\\xampp\\htdocs\\projects\\authentication\\private\\app\\templates\\header_footer.html.twig");
    }
}
