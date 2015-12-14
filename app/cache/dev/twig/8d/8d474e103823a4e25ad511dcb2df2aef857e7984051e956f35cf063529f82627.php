<?php

/* PgGsbFraisBundle::layout.html.twig */
class __TwigTemplate_f7415b62879b87dbfb8965119ba56e066b044ac65a8550618f0bae317c11b0b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6bac09b9793e9679106b68568651c1f23b15bdf396029b3d36820414911630d = $this->env->getExtension("native_profiler");
        $__internal_f6bac09b9793e9679106b68568651c1f23b15bdf396029b3d36820414911630d->enter($__internal_f6bac09b9793e9679106b68568651c1f23b15bdf396029b3d36820414911630d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
       \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
  <head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gsbfrais/styles/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./images/favicon.ico\" />
  </head>
  <body>
    <div id=\"page\">
      <div id=\"entete\">
        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gsbfrais/images/logo.jpg"), "html", null, true);
        echo "\" id=\"logoGSB\" alt=\"Laboratoire Galaxy-Swiss Bourdin\" title=\"Laboratoire Galaxy-Swiss Bourdin\" />
        <h1>Suivi du remboursement des frais</h1>
      </div>
     </div>
          ";
        // line 17
        $this->displayBlock('menu', $context, $blocks);
        // line 19
        echo "          ";
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "    </body>
  </html>

          
          
";
        
        $__internal_f6bac09b9793e9679106b68568651c1f23b15bdf396029b3d36820414911630d->leave($__internal_f6bac09b9793e9679106b68568651c1f23b15bdf396029b3d36820414911630d_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0833576eef96a5fdda3ca0be131c26e56edf1df95ff3065fda36f6ba621adc20 = $this->env->getExtension("native_profiler");
        $__internal_0833576eef96a5fdda3ca0be131c26e56edf1df95ff3065fda36f6ba621adc20->enter($__internal_0833576eef96a5fdda3ca0be131c26e56edf1df95ff3065fda36f6ba621adc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "          ";
        
        $__internal_0833576eef96a5fdda3ca0be131c26e56edf1df95ff3065fda36f6ba621adc20->leave($__internal_0833576eef96a5fdda3ca0be131c26e56edf1df95ff3065fda36f6ba621adc20_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9f5f95a25c0d25296ea48853d0f154e72c98e6379ac7c592d3a54d8d6a9ebe9 = $this->env->getExtension("native_profiler");
        $__internal_d9f5f95a25c0d25296ea48853d0f154e72c98e6379ac7c592d3a54d8d6a9ebe9->enter($__internal_d9f5f95a25c0d25296ea48853d0f154e72c98e6379ac7c592d3a54d8d6a9ebe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
                 ";
        // line 20
        $this->displayBlock('bloc1', $context, $blocks);
        // line 22
        echo "          ";
        
        $__internal_d9f5f95a25c0d25296ea48853d0f154e72c98e6379ac7c592d3a54d8d6a9ebe9->leave($__internal_d9f5f95a25c0d25296ea48853d0f154e72c98e6379ac7c592d3a54d8d6a9ebe9_prof);

    }

    // line 20
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_afea1a1cead6996e13037a850e16977989fca9e0d1d7799c54f6b453d64f5a82 = $this->env->getExtension("native_profiler");
        $__internal_afea1a1cead6996e13037a850e16977989fca9e0d1d7799c54f6b453d64f5a82->enter($__internal_afea1a1cead6996e13037a850e16977989fca9e0d1d7799c54f6b453d64f5a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 21
        echo "                 ";
        
        $__internal_afea1a1cead6996e13037a850e16977989fca9e0d1d7799c54f6b453d64f5a82->leave($__internal_afea1a1cead6996e13037a850e16977989fca9e0d1d7799c54f6b453d64f5a82_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  96 => 20,  89 => 22,  87 => 20,  79 => 19,  72 => 18,  66 => 17,  54 => 23,  51 => 19,  49 => 17,  42 => 13,  33 => 7,  25 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"*/
/*        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">*/
/*   <head>*/
/*     <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8" />*/
/*     <link href="{{ asset('bundles/gsbfrais/styles/styles.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />*/
/*   </head>*/
/*   <body>*/
/*     <div id="page">*/
/*       <div id="entete">*/
/*         <img src="{{ asset('bundles/gsbfrais/images/logo.jpg')}}" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" />*/
/*         <h1>Suivi du remboursement des frais</h1>*/
/*       </div>*/
/*      </div>*/
/*           {% block menu %}*/
/*           {% endblock %}*/
/*           {% block body %} */
/*                  {% block bloc1 %}*/
/*                  {% endblock %}*/
/*           {% endblock %}*/
/*     </body>*/
/*   </html>*/
/* */
/*           */
/*           */
/* */
