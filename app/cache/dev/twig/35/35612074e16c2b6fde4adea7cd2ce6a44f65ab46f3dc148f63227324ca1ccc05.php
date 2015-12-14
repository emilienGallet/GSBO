<?php

/* base.html.twig */
class __TwigTemplate_24fcdaebea3e3898bec9703068d3019d88b17f1db8359ad60b8177273e3f7846 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56ce39a2df6a4ebd41d7ee60401c093ad8dd13bdf7a3f8ebeffd9e32233abb36 = $this->env->getExtension("native_profiler");
        $__internal_56ce39a2df6a4ebd41d7ee60401c093ad8dd13bdf7a3f8ebeffd9e32233abb36->enter($__internal_56ce39a2df6a4ebd41d7ee60401c093ad8dd13bdf7a3f8ebeffd9e32233abb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_56ce39a2df6a4ebd41d7ee60401c093ad8dd13bdf7a3f8ebeffd9e32233abb36->leave($__internal_56ce39a2df6a4ebd41d7ee60401c093ad8dd13bdf7a3f8ebeffd9e32233abb36_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_895583a062931139fbc76106e871d47005b71662bafa98dba0a34e7f695dea4f = $this->env->getExtension("native_profiler");
        $__internal_895583a062931139fbc76106e871d47005b71662bafa98dba0a34e7f695dea4f->enter($__internal_895583a062931139fbc76106e871d47005b71662bafa98dba0a34e7f695dea4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_895583a062931139fbc76106e871d47005b71662bafa98dba0a34e7f695dea4f->leave($__internal_895583a062931139fbc76106e871d47005b71662bafa98dba0a34e7f695dea4f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e11b71cf281fd63b80d208d69aae7a79800a421f267cc27c94a5aacd3b46705c = $this->env->getExtension("native_profiler");
        $__internal_e11b71cf281fd63b80d208d69aae7a79800a421f267cc27c94a5aacd3b46705c->enter($__internal_e11b71cf281fd63b80d208d69aae7a79800a421f267cc27c94a5aacd3b46705c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e11b71cf281fd63b80d208d69aae7a79800a421f267cc27c94a5aacd3b46705c->leave($__internal_e11b71cf281fd63b80d208d69aae7a79800a421f267cc27c94a5aacd3b46705c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_df224e1be9153ce172048875bad5857c7ab86678963a0a8ba9384abcc92eca73 = $this->env->getExtension("native_profiler");
        $__internal_df224e1be9153ce172048875bad5857c7ab86678963a0a8ba9384abcc92eca73->enter($__internal_df224e1be9153ce172048875bad5857c7ab86678963a0a8ba9384abcc92eca73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_df224e1be9153ce172048875bad5857c7ab86678963a0a8ba9384abcc92eca73->leave($__internal_df224e1be9153ce172048875bad5857c7ab86678963a0a8ba9384abcc92eca73_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_82c36c69dc06a69af169605480e1f12861d300bed1ed08dd547dd82ca5614068 = $this->env->getExtension("native_profiler");
        $__internal_82c36c69dc06a69af169605480e1f12861d300bed1ed08dd547dd82ca5614068->enter($__internal_82c36c69dc06a69af169605480e1f12861d300bed1ed08dd547dd82ca5614068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_82c36c69dc06a69af169605480e1f12861d300bed1ed08dd547dd82ca5614068->leave($__internal_82c36c69dc06a69af169605480e1f12861d300bed1ed08dd547dd82ca5614068_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
