<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_d64ac0169bb523b27e0943400915de311541bbf1db7c0833720a7523264ad075 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_ba9b2a809bfd16f7c790faee2d8d104e5b421c01d5df7225b2896fa595afc219 = ($context["php_version"] ?? null)) && is_string($__internal_3da5dfcbc015c788f7200d4842cca76d3942882940bc608812ef4e68272a158d = "5.4") && ('' === $__internal_3da5dfcbc015c788f7200d4842cca76d3942882940bc608812ef4e68272a158d || 0 === strpos($__internal_ba9b2a809bfd16f7c790faee2d8d104e5b421c01d5df7225b2896fa595afc219, $__internal_3da5dfcbc015c788f7200d4842cca76d3942882940bc608812ef4e68272a158d)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", ($context["php_version"] ?? null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "C:\\Bitnami\\wordpress-4.5.3-0\\apps\\wordpress\\htdocs\\wp-content\\plugins\\gantry5\\admin\\templates\\partials\\php_unsupported.html.twig");
    }
}
