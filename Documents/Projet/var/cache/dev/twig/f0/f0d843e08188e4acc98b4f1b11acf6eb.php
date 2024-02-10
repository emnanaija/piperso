<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* register/index.html.twig */
class __TwigTemplate_dff23aad6247b58d9b7acf5debc45477 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Pages / Register - NiceAdmin Bootstrap Template</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\"
        rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <main>
        <div class=\"container\">

            <section
                class=\"section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4\">
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center\">

                            <div class=\"d-flex justify-content-center py-4\">
                                <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"logo d-flex align-items-center w-auto\">
                                    <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                                    <span class=\"d-none d-lg-block\">NiceAdmin</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class=\"card mb-3\">

                                <div class=\"card-body\">

                                    <div class=\"pt-4 pb-2\">
                                        <h5 class=\"card-title text-center pb-0 fs-4\">Create an Account</h5>
                                        <p class=\"text-center small\">Enter your personal details to create account</p>
                                    </div>

                                    <form class=\"row g-3 needs-validation\" novalidate>
                                        <div class=\"col-12\">
                                            <label for=\"yourName\" class=\"form-label\">Your Name</label>
                                            <input type=\"text\" name=\"name\" class=\"form-control\" id=\"yourName\" required>
                                            <div class=\"invalid-feedback\">Please, enter your name!</div>
                                        </div>

                                        <div class=\"col-12\">
                                            <label for=\"yourEmail\" class=\"form-label\">Your Email</label>
                                            <input type=\"email\" name=\"email\" class=\"form-control\" id=\"yourEmail\" required>
                                            <div class=\"invalid-feedback\">Please enter a valid Email address!</div>
                                        </div>

                                        <div class=\"col-12\">
                                            <label for=\"yourUsername\" class=\"form-label\">Username</label>
                                            <div class=\"input-group has-validation\">
                                                <span class=\"input-group-text\" id=\"inputGroupPrepend\">@</span>
                                                <input type=\"text\" name=\"username\" class=\"form-control\" id=\"yourUsername\"
                                                    required>
                                                <div class=\"invalid-feedback\">Please choose a username.</div>
                                            </div>
                                        </div>

                                        <div class=\"col-12\">
                                            <label for=\"yourPassword\" class=\"form-label\">Password</label>
                                            <input type=\"password\" name=\"password\" class=\"form-control\" id=\"yourPassword\"
                                                required>
                                            <div class=\"invalid-feedback\">Please enter your password!</div>
                                        </div>

                                        <div class=\"col-12\">
                                            <div class=\"form-check\">
                                                <input class=\"form-check-input\" name=\"terms\" type=\"checkbox\" value=\"\"
                                                    id=\"acceptTerms\" required>
                                                <label class=\"form-check-label\" for=\"acceptTerms\">I agree and accept
                                                    the <a href=\"#\">terms and conditions</a></label>
                                                <div class=\"invalid-feedback\">You must agree before submitting.</div>
                                            </div>
                                        </div>
                                        <div class=\"col-12\">
                                            <button class=\"btn btn-primary w-100\" type=\"submit\">Create Account</button>
                                        </div>
                                        <div class=\"col-12\">
                                            <p class=\"small mb-0\">Already have an account? <a
                                                    href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mainAdmin");
        echo "\">Log in</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href=\"#\"
        class=\"back-to-top d-flex align-items-center justify-content-center\"><i
            class=\"bi bi-arrow-up-short\"></i></a>

    <!-- Vendor JS Files -->
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "register/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  235 => 140,  231 => 139,  227 => 138,  223 => 137,  219 => 136,  193 => 113,  132 => 55,  128 => 54,  102 => 31,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  72 => 22,  61 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Pages / Register - NiceAdmin Bootstrap Template</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"{{ asset('assets/img/favicon.png') }}\" rel=\"icon\">
    <link href=\"{{ asset('assets/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\"
        rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <main>
        <div class=\"container\">

            <section
                class=\"section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4\">
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center\">

                            <div class=\"d-flex justify-content-center py-4\">
                                <a href=\"{{ path('app_home') }}\" class=\"logo d-flex align-items-center w-auto\">
                                    <img src=\"{{ asset('assets/img/logo.png') }}\" alt=\"\">
                                    <span class=\"d-none d-lg-block\">NiceAdmin</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class=\"card mb-3\">

                                <div class=\"card-body\">

                                    <div class=\"pt-4 pb-2\">
                                        <h5 class=\"card-title text-center pb-0 fs-4\">Create an Account</h5>
                                        <p class=\"text-center small\">Enter your personal details to create account</p>
                                    </div>

                                    <form class=\"row g-3 needs-validation\" novalidate>
                                        <div class=\"col-12\">
                                            <label for=\"yourName\" class=\"form-label\">Your Name</label>
                                            <input type=\"text\" name=\"name\" class=\"form-control\" id=\"yourName\" required>
                                            <div class=\"invalid-feedback\">Please, enter your name!</div>
                                        </div>

                                        <div class=\"col-12\">
                                            <label for=\"yourEmail\" class=\"form-label\">Your Email</label>
                                            <input type=\"email\" name=\"email\" class=\"form-control\" id=\"yourEmail\" required>
                                            <div class=\"invalid-feedback\">Please enter a valid Email address!</div>
                                        </div>

                                        <div class=\"col-12\">
                                            <label for=\"yourUsername\" class=\"form-label\">Username</label>
                                            <div class=\"input-group has-validation\">
                                                <span class=\"input-group-text\" id=\"inputGroupPrepend\">@</span>
                                                <input type=\"text\" name=\"username\" class=\"form-control\" id=\"yourUsername\"
                                                    required>
                                                <div class=\"invalid-feedback\">Please choose a username.</div>
                                            </div>
                                        </div>

                                        <div class=\"col-12\">
                                            <label for=\"yourPassword\" class=\"form-label\">Password</label>
                                            <input type=\"password\" name=\"password\" class=\"form-control\" id=\"yourPassword\"
                                                required>
                                            <div class=\"invalid-feedback\">Please enter your password!</div>
                                        </div>

                                        <div class=\"col-12\">
                                            <div class=\"form-check\">
                                                <input class=\"form-check-input\" name=\"terms\" type=\"checkbox\" value=\"\"
                                                    id=\"acceptTerms\" required>
                                                <label class=\"form-check-label\" for=\"acceptTerms\">I agree and accept
                                                    the <a href=\"#\">terms and conditions</a></label>
                                                <div class=\"invalid-feedback\">You must agree before submitting.</div>
                                            </div>
                                        </div>
                                        <div class=\"col-12\">
                                            <button class=\"btn btn-primary w-100\" type=\"submit\">Create Account</button>
                                        </div>
                                        <div class=\"col-12\">
                                            <p class=\"small mb-0\">Already have an account? <a
                                                    href=\"{{ path('app_mainAdmin') }}\">Log in</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href=\"#\"
        class=\"back-to-top d-flex align-items-center justify-content-center\"><i
            class=\"bi bi-arrow-up-short\"></i></a>

    <!-- Vendor JS Files -->
    <script src=\"{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/chart.js/chart.umd.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/echarts/echarts.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/quill/quill.min.js') }}\"></
", "register/index.html.twig", "C:\\Users\\chemseddine\\Documents\\Projet\\templates\\register\\index.html.twig");
    }
}
