<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_6e8a637b52a2eea58844e8afdb107290eeac99af5bc19feb684d0b146b55002d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68ffd790b8cc11b67b0e479b5e34e32d2eb5b6850031b4129b23c4c56f6def04 = $this->env->getExtension("native_profiler");
        $__internal_68ffd790b8cc11b67b0e479b5e34e32d2eb5b6850031b4129b23c4c56f6def04->enter($__internal_68ffd790b8cc11b67b0e479b5e34e32d2eb5b6850031b4129b23c4c56f6def04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68ffd790b8cc11b67b0e479b5e34e32d2eb5b6850031b4129b23c4c56f6def04->leave($__internal_68ffd790b8cc11b67b0e479b5e34e32d2eb5b6850031b4129b23c4c56f6def04_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d608a2c179e031b91b5df7478bda5fd112aca429c06ee365251fefa0eb579235 = $this->env->getExtension("native_profiler");
        $__internal_d608a2c179e031b91b5df7478bda5fd112aca429c06ee365251fefa0eb579235->enter($__internal_d608a2c179e031b91b5df7478bda5fd112aca429c06ee365251fefa0eb579235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d608a2c179e031b91b5df7478bda5fd112aca429c06ee365251fefa0eb579235->leave($__internal_d608a2c179e031b91b5df7478bda5fd112aca429c06ee365251fefa0eb579235_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ca8a8b27fca007785481e67e461cbc181a132f50f35bfb3a82adf1de5d85aec = $this->env->getExtension("native_profiler");
        $__internal_7ca8a8b27fca007785481e67e461cbc181a132f50f35bfb3a82adf1de5d85aec->enter($__internal_7ca8a8b27fca007785481e67e461cbc181a132f50f35bfb3a82adf1de5d85aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7ca8a8b27fca007785481e67e461cbc181a132f50f35bfb3a82adf1de5d85aec->leave($__internal_7ca8a8b27fca007785481e67e461cbc181a132f50f35bfb3a82adf1de5d85aec_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_95a30f9f93ca628f253b50e889a22ed6b5585813254ad375c2b71b804907159f = $this->env->getExtension("native_profiler");
        $__internal_95a30f9f93ca628f253b50e889a22ed6b5585813254ad375c2b71b804907159f->enter($__internal_95a30f9f93ca628f253b50e889a22ed6b5585813254ad375c2b71b804907159f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_95a30f9f93ca628f253b50e889a22ed6b5585813254ad375c2b71b804907159f->leave($__internal_95a30f9f93ca628f253b50e889a22ed6b5585813254ad375c2b71b804907159f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
