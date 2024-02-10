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

/* baseClient.html.twig */
class __TwigTemplate_dbd77e684b06b6d8564656434d0ea0b9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseClient.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseClient.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

\t<head>

\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t\t<title>Client Dashboard</title>
\t\t<meta content=\"\" name=\"description\">
\t\t<meta
\t\tcontent=\"\" name=\"keywords\">

\t\t<!-- Favicons -->
\t\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
\t\t<link
\t\thref=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

\t\t<!-- Google Fonts -->
\t\t<link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

\t\t<!-- Vendor CSS Files -->
\t\t<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link
\t\thref=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<!-- Template Main CSS File -->
\t\t<link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "
\t\t</head>

\t\t<body>


\t\t\t<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">

\t\t\t\t\t<img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bank.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t<span class=\"d-none d-lg-block\">
\t\t\t\t\t\tE-bank   Client Dashboard</span>
\t\t\t\t</a>
\t\t\t\t<i class=\"bi bi-list toggle-sidebar-btn\"></i>
\t\t\t</div>
\t\t\t<!-- End Logo -->

\t\t\t<div class=\"search-bar\">
\t\t\t\t<form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
\t\t\t\t\t<input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
\t\t\t\t\t<button type=\"submit\" title=\"Search\">
\t\t\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!-- End Search Bar -->

\t\t\t<nav class=\"header-nav ms-auto\">
\t\t\t\t<ul class=\"d-flex align-items-center\">

\t\t\t\t\t<li class=\"nav-item d-block d-lg-none\">
\t\t\t\t\t\t<a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
\t\t\t\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Search Icon-->

\t\t\t\t\t<li class=\"nav-item dropdown\">

\t\t\t\t\t\t<a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t<i class=\"bi bi-bell\"></i>
\t\t\t\t\t\t\t<span class=\"badge bg-primary badge-number\">4</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!-- End Notification Icon -->

\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\tYou have 4 new notifications
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-exclamation-circle text-warning\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4>Lorem Ipsum</h4>
\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t<p>30 min. ago</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-x-circle text-danger\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4>Atque rerum nesciunt</h4>
\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t<p>1 hr. ago</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle text-success\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4>Sit rerum fuga</h4>
\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t<p>2 hrs. ago</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-info-circle text-primary\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4>Dicta reprehenderit</h4>
\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t<p>4 hrs. ago</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t<a href=\"#\">Show all notifications</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- End Notification Dropdown Items -->

\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Notification Nav -->

\t\t\t\t\t<li class=\"nav-item dropdown\">

\t\t\t\t\t\t<a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t<i class=\"bi bi-chat-left-text\"></i>
\t\t\t\t\t\t\t<span class=\"badge bg-success badge-number\">3</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!-- End Messages Icon -->

\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\tYou have 3 new messages
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h4>Maria Hudson</h4>
\t\t\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t\t\t<p>4 hrs. ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h4>Anna Nelson</h4>
\t\t\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t\t\t<p>6 hrs. ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h4>David Muldon</h4>
\t\t\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t\t\t<p>8 hrs. ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t<a href=\"#\">Show all messages</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- End Messages Dropdown Items -->

\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Messages Nav -->
\t\t\t\t\t<li class=\"nav-item dropdown pe-3\">
\t\t\t\t\t\t<a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t<img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile-img.jpg"), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">
\t\t\t\t\t\t\t<span class=\"d-none d-md-block dropdown-toggle ps-2\">Client</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!-- End Profile Iamge Icon -->

\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t<h6>Aministrator</h6>

\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\t\t\t\t<span>My Profile</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-question-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Need Help?</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 262
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t<span>Sign Out</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- End Profile Dropdown Items -->
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Profile Nav -->

\t\t\t\t</ul>
\t\t\t</nav><!-- End Icons Navigation --></body>
\t</html>
</header>
<!-- End Header -->

<aside id=\"sidebar\" class=\"sidebar\">

\t<ul class=\"sidebar-nav\" id=\"sidebar-nav\">

\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link \" href=\"";
        // line 284
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mainClient");
        echo "\">
\t\t\t\t<i class=\"bi bi-grid\"></i>
\t\t\t\t<span> Client Dashboard</span>
\t\t\t</a>
\t\t</li>
\t\t<!-- End Dashboard Nav -->

\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t<i class=\"bi bi-menu-button-wide\"></i>
\t\t\t\t<span>
\t\t\t\t\tles Comptes banquaires</span>
\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t</a>
\t\t\t<ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"components-alerts.html\">
\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\tComptes Courants</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 307
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_compteepargne");
        echo "\">
\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t<span>Comptes epargnes</span>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t</ul>
\t\t</li>
\t\t<!-- End Components Nav -->

\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t<i class=\"bi bi-journal-text\"></i>
\t\t\t\t<span>Les Virements</span>
\t\t\t</a>

\t\t</li>
\t\t<!-- End Forms Nav -->

\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t<i class=\"bi bi-layout-text-window-reverse\"></i>
\t\t\t\t<span>Les crédits</span>
\t\t\t</a>

\t\t</li>
\t\t<!-- End Tables Nav -->

\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t<i class=\"bi bi-bar-chart\"></i>
\t\t\t\t<span>Les assurances</span>
\t\t\t</a>

\t\t</li>
\t\t<!-- End Charts Nav -->

\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t<i class=\"bi bi-gem\"></i>
\t\t\t\t<span>Les cartes</span>
\t\t\t</a>

\t\t</li>
\t\t<!-- End Icons Nav -->

\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t<i class=\"bi bi-card-list\"></i>
\t\t\t\t<span>Les cheques</span>
\t\t\t</a>

\t\t</li>
\t\t<!-- End Icons Nav -->


\t</ul>

</aside>
<!-- End Sidebar-->


";
        // line 369
        $this->displayBlock('main', $context, $blocks);
        // line 386
        echo "

\t<script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

\t<!-- Template Main JS File -->
\t<script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

</body></html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 369
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 370
        echo "
\t<main id=\"main\" class=\"main\">

\t\t<div class=\"pagetitle\">
\t\t\t<h1>Dashboard Client</h1>
\t\t\t
\t\t</div>
\t\t<!-- End Page Title -->

\t\t

\t\t</main>
\t\t<!-- End #main -->


\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "baseClient.html.twig";
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
        return array (  544 => 370,  534 => 369,  516 => 35,  502 => 398,  496 => 395,  492 => 394,  488 => 393,  484 => 392,  480 => 391,  476 => 390,  472 => 389,  468 => 388,  464 => 386,  462 => 369,  397 => 307,  371 => 284,  346 => 262,  307 => 226,  124 => 46,  112 => 36,  108 => 35,  102 => 32,  97 => 30,  93 => 29,  89 => 28,  85 => 27,  81 => 26,  77 => 25,  66 => 17,  61 => 15,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

\t<head>

\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t\t<title>Client Dashboard</title>
\t\t<meta content=\"\" name=\"description\">
\t\t<meta
\t\tcontent=\"\" name=\"keywords\">

\t\t<!-- Favicons -->
\t\t<link href=\"{{ asset('assets/img/favicon.png') }}\" rel=\"icon\">
\t\t<link
\t\thref=\"{{ asset('assets/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

\t\t<!-- Google Fonts -->
\t\t<link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

\t\t<!-- Vendor CSS Files -->
\t\t<link href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset('assets/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset('assets/vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset('assets/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
\t\t<link
\t\thref=\"{{ asset('assets/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">

\t\t<!-- Template Main CSS File -->
\t\t<link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\"> {% block javascripts %}{% endblock %}

\t\t</head>

\t\t<body>


\t\t\t<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">

\t\t\t\t\t<img src=\"{{ asset('assets/img/bank.png') }}\" alt=\"\">
\t\t\t\t\t<span class=\"d-none d-lg-block\">
\t\t\t\t\t\tE-bank   Client Dashboard</span>
\t\t\t\t</a>
\t\t\t\t<i class=\"bi bi-list toggle-sidebar-btn\"></i>
\t\t\t</div>
\t\t\t<!-- End Logo -->

\t\t\t<div class=\"search-bar\">
\t\t\t\t<form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
\t\t\t\t\t<input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
\t\t\t\t\t<button type=\"submit\" title=\"Search\">
\t\t\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!-- End Search Bar -->

\t\t\t<nav class=\"header-nav ms-auto\">
\t\t\t\t<ul class=\"d-flex align-items-center\">

\t\t\t\t\t<li class=\"nav-item d-block d-lg-none\">
\t\t\t\t\t\t<a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
\t\t\t\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Search Icon-->

\t\t\t\t\t<li class=\"nav-item dropdown\">

\t\t\t\t\t\t<a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t<i class=\"bi bi-bell\"></i>
\t\t\t\t\t\t\t<span class=\"badge bg-primary badge-number\">4</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!-- End Notification Icon -->

\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\tYou have 4 new notifications
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-exclamation-circle text-warning\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4>Lorem Ipsum</h4>
\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t<p>30 min. ago</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-x-circle text-danger\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4>Atque rerum nesciunt</h4>
\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t<p>1 hr. ago</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle text-success\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4>Sit rerum fuga</h4>
\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t<p>2 hrs. ago</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-info-circle text-primary\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4>Dicta reprehenderit</h4>
\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t<p>4 hrs. ago</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t<a href=\"#\">Show all notifications</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- End Notification Dropdown Items -->

\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Notification Nav -->

\t\t\t\t\t<li class=\"nav-item dropdown\">

\t\t\t\t\t\t<a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t<i class=\"bi bi-chat-left-text\"></i>
\t\t\t\t\t\t\t<span class=\"badge bg-success badge-number\">3</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!-- End Messages Icon -->

\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\tYou have 3 new messages
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h4>Maria Hudson</h4>
\t\t\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t\t\t<p>4 hrs. ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h4>Anna Nelson</h4>
\t\t\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t\t\t<p>6 hrs. ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h4>David Muldon</h4>
\t\t\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t\t\t<p>8 hrs. ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t<a href=\"#\">Show all messages</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- End Messages Dropdown Items -->

\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Messages Nav -->
\t\t\t\t\t<li class=\"nav-item dropdown pe-3\">
\t\t\t\t\t\t<a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/profile-img.jpg') }}\" alt=\"Profile\" class=\"rounded-circle\">
\t\t\t\t\t\t\t<span class=\"d-none d-md-block dropdown-toggle ps-2\">Client</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!-- End Profile Iamge Icon -->

\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t<h6>Aministrator</h6>

\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\t\t\t\t<span>My Profile</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-question-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Need Help?</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_home') }}\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t<span>Sign Out</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- End Profile Dropdown Items -->
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Profile Nav -->

\t\t\t\t</ul>
\t\t\t</nav><!-- End Icons Navigation --></body>
\t</html>
</header>
<!-- End Header -->

<aside id=\"sidebar\" class=\"sidebar\">

\t<ul class=\"sidebar-nav\" id=\"sidebar-nav\">

\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link \" href=\"{{ path('app_mainClient') }}\">
\t\t\t\t<i class=\"bi bi-grid\"></i>
\t\t\t\t<span> Client Dashboard</span>
\t\t\t</a>
\t\t</li>
\t\t<!-- End Dashboard Nav -->

\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t<i class=\"bi bi-menu-button-wide\"></i>
\t\t\t\t<span>
\t\t\t\t\tles Comptes banquaires</span>
\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t</a>
\t\t\t<ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"components-alerts.html\">
\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\tComptes Courants</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('app_compteepargne')}}\">
\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t<span>Comptes epargnes</span>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t</ul>
\t\t</li>
\t\t<!-- End Components Nav -->

\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t<i class=\"bi bi-journal-text\"></i>
\t\t\t\t<span>Les Virements</span>
\t\t\t</a>

\t\t</li>
\t\t<!-- End Forms Nav -->

\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t<i class=\"bi bi-layout-text-window-reverse\"></i>
\t\t\t\t<span>Les crédits</span>
\t\t\t</a>

\t\t</li>
\t\t<!-- End Tables Nav -->

\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t<i class=\"bi bi-bar-chart\"></i>
\t\t\t\t<span>Les assurances</span>
\t\t\t</a>

\t\t</li>
\t\t<!-- End Charts Nav -->

\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t<i class=\"bi bi-gem\"></i>
\t\t\t\t<span>Les cartes</span>
\t\t\t</a>

\t\t</li>
\t\t<!-- End Icons Nav -->

\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t<i class=\"bi bi-card-list\"></i>
\t\t\t\t<span>Les cheques</span>
\t\t\t</a>

\t\t</li>
\t\t<!-- End Icons Nav -->


\t</ul>

</aside>
<!-- End Sidebar-->


{% block main %}

\t<main id=\"main\" class=\"main\">

\t\t<div class=\"pagetitle\">
\t\t\t<h1>Dashboard Client</h1>
\t\t\t
\t\t</div>
\t\t<!-- End Page Title -->

\t\t

\t\t</main>
\t\t<!-- End #main -->


\t{% endblock %}


\t<script src=\"{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/vendor/chart.js/chart.umd.js') }}\"></script>
\t<script src=\"{{ asset('assets/vendor/echarts/echarts.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/vendor/quill/quill.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}\"></script>
\t<script src=\"{{ asset('assets/vendor/tinymce/tinymce.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/vendor/php-email-form/validate.js') }}\"></script>

\t<!-- Template Main JS File -->
\t<script src=\"{{ asset('assets/js/main.js') }}\"></script>

</body></html>
", "baseClient.html.twig", "C:\\Users\\chemseddine\\Documents\\Projet\\templates\\baseClient.html.twig");
    }
}
