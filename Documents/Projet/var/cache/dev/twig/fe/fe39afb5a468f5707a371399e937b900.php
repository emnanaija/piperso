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

/* home/index.html.twig */
class __TwigTemplate_93879270d60a1815f9f93a6f4690deaa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset=\"utf-8\" />
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
  <!-- Mobile Metas -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
  <!-- Site Metas -->
  <meta name=\"keywords\" content=\"\" />
  <meta name=\"description\" content=\"\" />
  <meta name=\"author\" content=\"\" />
  <link rel=\"shortcut icon\" href=\"images/favicon.png\" type=\"\">

  <title> ";
        // line 16
        $this->displayBlock('title', $context, $blocks);
        echo " </title>

  <!-- bootstrap core css -->
  ";
        // line 19
        $this->displayBlock('css', $context, $blocks);
        // line 36
        echo "
</head>

<body>

  <div class=\"hero_area\">

    <div class=\"hero_bg_box\">
      <div class=\"bg_img_box\">
        <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/hero-bg.png"), "html", null, true);
        echo "\" alt=\"\">
      </div>
    </div>

    <!-- header section strats -->
    <header class=\"header_section\">
      <div class=\"container-fluid\">
        <nav class=\"navbar navbar-expand-lg custom_nav-container \">
          <a class=\"navbar-brand\" href=\"index.html\">
            <span>
              E-Bank
            </span>
          </a>

          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"\">  </span>
          </button>

          <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav  \">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\"> <i class=\"fa fa-user\" aria-hidden=\"true\"></i> S'inscrire</a>
              </li>
             
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"> <i class=\"fa fa-user\" aria-hidden=\"true\"></i> Se connecter</a>
              </li>
              
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    ";
        // line 80
        $this->displayBlock('body', $context, $blocks);
        // line 387
        echo "

  <!-- info section -->

  <section class=\"info_section layout_padding2\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6 col-lg-3 info_col\">
          <div class=\"info_contact\">
            <h4>
              Address
            </h4>
            <div class=\"contact_link_box\">
              <a href=\"\">
                <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                <span>
                  Location
                </span>
              </a>
              <a href=\"\">
                <i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
                <span>
                  Call +216 55347204
                </span>
              </a>
              <a href=\"\">
                <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                <span>
                  E-Bank@gmail.com.tn
                </span>
              </a>
            </div>
          </div>
          <div class=\"info_social\">
            <a href=\"\">
              <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"\">
              <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"\">
              <i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"\">
              <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
            </a>
          </div>
        </div>
        
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <section class=\"footer_section\">
    <div class=\"container\">
      <p>
        &copy; <span id=\"displayYear\"></span> All Rights Reserved 
        <a href=\"https://html.design/\"></a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  ";
        // line 452
        $this->displayBlock('js', $context, $blocks);
        // line 466
        echo "  <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap\">
  </script>
  <!-- End Google Map -->
  

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " E-Bank ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 20
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />

  <!-- fonts style -->
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900display=swap\" rel=\"stylesheet\">

  <!--owl slider stylesheet -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" />

  <!-- font awesome style -->
  <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

  <!-- Custom styles for this template -->
  <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <!-- responsive style -->
  <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 80
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 81
        echo "    <section class=\"slider_section \">
      <div id=\"customCarousel1\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active\">
            <div class=\"container \">
              <div class=\"row\">
                <div class=\"col-md-6 \">
                  <div class=\"detail-box\">
                    <h1>
                      Bienvenue <br> à notre banque en ligne E-Bank
                    </h1>
                    <p>
                      Découvrez notre banque qui évolue avec vous. Rejoignez E-Bank aujourd'hui et commencez à profiter d'une expérience bancaire simplifiée, sécurisée et personnalisée, conçue pour le monde moderne.


                    </p>
                    
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"img-box\">
                    <img src=\"images/slider-img.png\" alt=\"\">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"carousel-item \">
            <div class=\"container \">
              <div class=\"row\">
                <div class=\"col-md-6 \">
                  <div class=\"detail-box\">
                    <h1>
                     Carte de credit
                    </h1>
                    <p>
                     Avec notre carte de crédit numérique, effectuez vos achats en ligne et en magasin en toute sécurité, et gérez vos dépenses avec facilité.

                    </p>
                    
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"img-box\">
                    <img src=\"images/slider-img.png\" alt=\"\">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"carousel-item\">
            <div class=\"container \">
              <div class=\"row\">
                <div class=\"col-md-6 \">
                  <div class=\"detail-box\">
                    <h1>
                     Transaction fluide
                    </h1>
                    <p>
                      Envoyer de l'argent à vos proches ou payer vos factures n'a jamais été aussi simple. Notre plateforme de virements vous permet d'effectuer des transactions rapides et fluides, où que vous soyez et à tout moment.
                    </p>
                    
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"img-box\">
                    <img src=\"images/slider-img.png\" alt=\"\">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class=\"carousel-indicators\">
          <li data-target=\"#customCarousel1\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#customCarousel1\" data-slide-to=\"1\"></li>
          <li data-target=\"#customCarousel1\" data-slide-to=\"2\"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- service section -->

  <section class=\"service_section layout_padding\">
    <div class=\"service_container\">
      <div class=\"container \">
        <div class=\"heading_container heading_center\">
          <h2>
           Nos <span>Services</span>
          </h2>
         
        </div>
        <div class=\"row\">
          <div class=\"col-md-4 \">
            <div class=\"box \">
              <div class=\"img-box\">
                <img src=\"images/s1.png\" alt=\"\">
              </div>
              <div class=\"detail-box\">
                <h5>
                 compte bancaire et compte courant
                </h5>
                
                
              </div>
            </div>
          </div>
          <div class=\"col-md-4 \">
            <div class=\"box \">
              <div class=\"img-box\">
                <img src=\"images/s2.png\" alt=\"\">
              </div>
              <div class=\"detail-box\">
                <h5>
                 Securite
                </h5>
               
              </div>
            </div>
          </div>
          <div class=\"col-md-4 \">
            <div class=\"box \">
              <div class=\"img-box\">
                <img src=\"images/s3.png\" alt=\"\">
              </div>
              <div class=\"detail-box\">
                <h5>
                 Solutions d'experts
                </h5>
                
              </div>
            </div>
          </div>
        </div>
        <div class=\"btn-box\">
          
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->


  <!-- about section -->

  <section class=\"about_section layout_padding\">
    <div class=\"container  \">
      <div class=\"heading_container heading_center\">
        <h2>
         A PROPOS DE <span>NOUS</span>
        </h2>
       
      </div>
      <div class=\"row\">
        <div class=\"col-md-6 \">
          <div class=\"img-box\">
            <img src=\"images/about-img.png\" alt=\"\">
          </div>
        </div>
        <div class=\"col-md-6\">
          <div class=\"detail-box\">
            <h3>
              Nous Sommes E-bank
            </h3>
           
            <p>
              Notre équipe de service client est là pour vous aider avec toute question ou préoccupation que vous pourriez avoir. Disponibles 24/7 par  email ou téléphone, nous sommes dédiés à vous fournir un service exceptionnel et à vous accompagner dans votre parcours financier.
            </p>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- why section -->

  <section class=\"why_section layout_padding\">
    <div class=\"container\">
      <div class=\"heading_container heading_center\">
        <h2>
         Pourquoi Nous <span>Choisir</span>
        </h2>
      </div>
      <div class=\"why_container\">
        <div class=\"box\">
          <div class=\"img-box\">
            <img src=\"images/w1.png\" alt=\"\">
          </div>
          <div class=\"detail-box\">
            <h5>
              Gestion experte
            </h5>
            
          </div>
        </div>
        <div class=\"box\">
          <div class=\"img-box\">
            <img src=\"images/w2.png\" alt=\"\">
          </div>
          <div class=\"detail-box\">
            <h5>
             Votre epargne est en toute securité 
            </h5>
           
          </div>
        </div>
        <div class=\"box\">
          <div class=\"img-box\">
            <img src=\"images/w3.png\" alt=\"\">
          </div>
          <div class=\"detail-box\">
            <h5>
             Solutions d d'assurance 
            </h5>
           
          </div>
        </div>
        <div class=\"box\">
          <div class=\"img-box\">
            <img src=\"images/w4.png\" alt=\"\">
          </div>
          <div class=\"detail-box\">
            <h5>
             Service disponible
            </h5>
            
          </div>
        </div>
      </div>
      
    </div>
  </section>

  <!-- end why section -->

  


  <!-- client section -->

  <section class=\"client_section layout_padding\">
    <div class=\"container\">
      <div class=\"heading_container heading_center psudo_white_primary mb_45\">
        <h2>
         L'avis de nos <span>Clients</span>
        </h2>
      </div>
      <div class=\"carousel-wrap \">
        <div class=\"owl-carousel client_owl-carousel\">
          <div class=\"item\">
            <div class=\"box\">
              <div class=\"img-box\">
                <img src=\"images/client1.jpg\" alt=\"\" class=\"box-img\">
              </div>
              <div class=\"detail-box\">
                <div class=\"client_id\">
                  <div class=\"client_info\">
                    <h6>
                    salah othmani
                    </h6>
                    <p>
                     entrepreneur
                    </p>
                  </div>
                  <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
                </div>
                <p>
                  le soutien de E-bank a été un vertiable propulseur dans mon parcours de jeune entrepreneure </p>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"box\">
              <div class=\"img-box\">
                <img src=\"images/client2.jpg\" alt=\"\" class=\"box-img\">
              </div>
              <div class=\"detail-box\">
                <div class=\"client_id\">
                  <div class=\"client_info\">
                    <h6>
                     salma guesmi
                    </h6>
                    <p>
                      entrpreneure
                    </p>
                  </div>
                  <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
                </div>
                <p>
                  les equipes de E-Bank  ont assuré des operations dans un delai record pendant une periode de crise</p>
              </div>
            </div>
          </div>
          
  </section>

  <!-- end client section -->
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 452
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 453
        echo "  <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
  <!-- popper js -->
  <script src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"), "html", null, true);
        echo "\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\">
  </script>
  <!-- bootstrap js -->
  <script type=\"text/javascript\" src=\"js/bootstrap.js\"></script>
  <!-- owl slider -->
  <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\">
  </script>
  <!-- custom js -->
  <script type=\"text/javascript\" src=\"js/custom.js\"></script>
  <!-- Google Map -->
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
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
        return array (  624 => 455,  618 => 453,  608 => 452,  293 => 81,  283 => 80,  271 => 34,  266 => 32,  260 => 29,  254 => 26,  244 => 20,  234 => 19,  215 => 16,  198 => 466,  196 => 452,  129 => 387,  127 => 80,  114 => 70,  107 => 66,  83 => 45,  72 => 36,  70 => 19,  64 => 16,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset=\"utf-8\" />
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
  <!-- Mobile Metas -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
  <!-- Site Metas -->
  <meta name=\"keywords\" content=\"\" />
  <meta name=\"description\" content=\"\" />
  <meta name=\"author\" content=\"\" />
  <link rel=\"shortcut icon\" href=\"images/favicon.png\" type=\"\">

  <title> {% block title %} E-Bank {% endblock %} </title>

  <!-- bootstrap core css -->
  {% block css %}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/bootstrap.css')}}\" />

  <!-- fonts style -->
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900display=swap\" rel=\"stylesheet\">

  <!--owl slider stylesheet -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css')}}\" />

  <!-- font awesome style -->
  <link href=\"{{asset('css/font-awesome.min.css')}}\" rel=\"stylesheet\" />

  <!-- Custom styles for this template -->
  <link href=\"{{asset('css/style.css')}}\" rel=\"stylesheet\" />
  <!-- responsive style -->
  <link href=\"{{asset('css/responsive.css')}}\" rel=\"stylesheet\" />
  {% endblock %}

</head>

<body>

  <div class=\"hero_area\">

    <div class=\"hero_bg_box\">
      <div class=\"bg_img_box\">
        <img src=\"{{asset('images/hero-bg.png')}}\" alt=\"\">
      </div>
    </div>

    <!-- header section strats -->
    <header class=\"header_section\">
      <div class=\"container-fluid\">
        <nav class=\"navbar navbar-expand-lg custom_nav-container \">
          <a class=\"navbar-brand\" href=\"index.html\">
            <span>
              E-Bank
            </span>
          </a>

          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"\">  </span>
          </button>

          <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav  \">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_register') }}\"> <i class=\"fa fa-user\" aria-hidden=\"true\"></i> S'inscrire</a>
              </li>
             
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_login') }}\"> <i class=\"fa fa-user\" aria-hidden=\"true\"></i> Se connecter</a>
              </li>
              
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    {% block body %}
    <section class=\"slider_section \">
      <div id=\"customCarousel1\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active\">
            <div class=\"container \">
              <div class=\"row\">
                <div class=\"col-md-6 \">
                  <div class=\"detail-box\">
                    <h1>
                      Bienvenue <br> à notre banque en ligne E-Bank
                    </h1>
                    <p>
                      Découvrez notre banque qui évolue avec vous. Rejoignez E-Bank aujourd'hui et commencez à profiter d'une expérience bancaire simplifiée, sécurisée et personnalisée, conçue pour le monde moderne.


                    </p>
                    
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"img-box\">
                    <img src=\"images/slider-img.png\" alt=\"\">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"carousel-item \">
            <div class=\"container \">
              <div class=\"row\">
                <div class=\"col-md-6 \">
                  <div class=\"detail-box\">
                    <h1>
                     Carte de credit
                    </h1>
                    <p>
                     Avec notre carte de crédit numérique, effectuez vos achats en ligne et en magasin en toute sécurité, et gérez vos dépenses avec facilité.

                    </p>
                    
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"img-box\">
                    <img src=\"images/slider-img.png\" alt=\"\">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"carousel-item\">
            <div class=\"container \">
              <div class=\"row\">
                <div class=\"col-md-6 \">
                  <div class=\"detail-box\">
                    <h1>
                     Transaction fluide
                    </h1>
                    <p>
                      Envoyer de l'argent à vos proches ou payer vos factures n'a jamais été aussi simple. Notre plateforme de virements vous permet d'effectuer des transactions rapides et fluides, où que vous soyez et à tout moment.
                    </p>
                    
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"img-box\">
                    <img src=\"images/slider-img.png\" alt=\"\">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class=\"carousel-indicators\">
          <li data-target=\"#customCarousel1\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#customCarousel1\" data-slide-to=\"1\"></li>
          <li data-target=\"#customCarousel1\" data-slide-to=\"2\"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- service section -->

  <section class=\"service_section layout_padding\">
    <div class=\"service_container\">
      <div class=\"container \">
        <div class=\"heading_container heading_center\">
          <h2>
           Nos <span>Services</span>
          </h2>
         
        </div>
        <div class=\"row\">
          <div class=\"col-md-4 \">
            <div class=\"box \">
              <div class=\"img-box\">
                <img src=\"images/s1.png\" alt=\"\">
              </div>
              <div class=\"detail-box\">
                <h5>
                 compte bancaire et compte courant
                </h5>
                
                
              </div>
            </div>
          </div>
          <div class=\"col-md-4 \">
            <div class=\"box \">
              <div class=\"img-box\">
                <img src=\"images/s2.png\" alt=\"\">
              </div>
              <div class=\"detail-box\">
                <h5>
                 Securite
                </h5>
               
              </div>
            </div>
          </div>
          <div class=\"col-md-4 \">
            <div class=\"box \">
              <div class=\"img-box\">
                <img src=\"images/s3.png\" alt=\"\">
              </div>
              <div class=\"detail-box\">
                <h5>
                 Solutions d'experts
                </h5>
                
              </div>
            </div>
          </div>
        </div>
        <div class=\"btn-box\">
          
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->


  <!-- about section -->

  <section class=\"about_section layout_padding\">
    <div class=\"container  \">
      <div class=\"heading_container heading_center\">
        <h2>
         A PROPOS DE <span>NOUS</span>
        </h2>
       
      </div>
      <div class=\"row\">
        <div class=\"col-md-6 \">
          <div class=\"img-box\">
            <img src=\"images/about-img.png\" alt=\"\">
          </div>
        </div>
        <div class=\"col-md-6\">
          <div class=\"detail-box\">
            <h3>
              Nous Sommes E-bank
            </h3>
           
            <p>
              Notre équipe de service client est là pour vous aider avec toute question ou préoccupation que vous pourriez avoir. Disponibles 24/7 par  email ou téléphone, nous sommes dédiés à vous fournir un service exceptionnel et à vous accompagner dans votre parcours financier.
            </p>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- why section -->

  <section class=\"why_section layout_padding\">
    <div class=\"container\">
      <div class=\"heading_container heading_center\">
        <h2>
         Pourquoi Nous <span>Choisir</span>
        </h2>
      </div>
      <div class=\"why_container\">
        <div class=\"box\">
          <div class=\"img-box\">
            <img src=\"images/w1.png\" alt=\"\">
          </div>
          <div class=\"detail-box\">
            <h5>
              Gestion experte
            </h5>
            
          </div>
        </div>
        <div class=\"box\">
          <div class=\"img-box\">
            <img src=\"images/w2.png\" alt=\"\">
          </div>
          <div class=\"detail-box\">
            <h5>
             Votre epargne est en toute securité 
            </h5>
           
          </div>
        </div>
        <div class=\"box\">
          <div class=\"img-box\">
            <img src=\"images/w3.png\" alt=\"\">
          </div>
          <div class=\"detail-box\">
            <h5>
             Solutions d d'assurance 
            </h5>
           
          </div>
        </div>
        <div class=\"box\">
          <div class=\"img-box\">
            <img src=\"images/w4.png\" alt=\"\">
          </div>
          <div class=\"detail-box\">
            <h5>
             Service disponible
            </h5>
            
          </div>
        </div>
      </div>
      
    </div>
  </section>

  <!-- end why section -->

  


  <!-- client section -->

  <section class=\"client_section layout_padding\">
    <div class=\"container\">
      <div class=\"heading_container heading_center psudo_white_primary mb_45\">
        <h2>
         L'avis de nos <span>Clients</span>
        </h2>
      </div>
      <div class=\"carousel-wrap \">
        <div class=\"owl-carousel client_owl-carousel\">
          <div class=\"item\">
            <div class=\"box\">
              <div class=\"img-box\">
                <img src=\"images/client1.jpg\" alt=\"\" class=\"box-img\">
              </div>
              <div class=\"detail-box\">
                <div class=\"client_id\">
                  <div class=\"client_info\">
                    <h6>
                    salah othmani
                    </h6>
                    <p>
                     entrepreneur
                    </p>
                  </div>
                  <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
                </div>
                <p>
                  le soutien de E-bank a été un vertiable propulseur dans mon parcours de jeune entrepreneure </p>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"box\">
              <div class=\"img-box\">
                <img src=\"images/client2.jpg\" alt=\"\" class=\"box-img\">
              </div>
              <div class=\"detail-box\">
                <div class=\"client_id\">
                  <div class=\"client_info\">
                    <h6>
                     salma guesmi
                    </h6>
                    <p>
                      entrpreneure
                    </p>
                  </div>
                  <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
                </div>
                <p>
                  les equipes de E-Bank  ont assuré des operations dans un delai record pendant une periode de crise</p>
              </div>
            </div>
          </div>
          
  </section>

  <!-- end client section -->
  {% endblock %}


  <!-- info section -->

  <section class=\"info_section layout_padding2\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6 col-lg-3 info_col\">
          <div class=\"info_contact\">
            <h4>
              Address
            </h4>
            <div class=\"contact_link_box\">
              <a href=\"\">
                <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                <span>
                  Location
                </span>
              </a>
              <a href=\"\">
                <i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
                <span>
                  Call +216 55347204
                </span>
              </a>
              <a href=\"\">
                <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                <span>
                  E-Bank@gmail.com.tn
                </span>
              </a>
            </div>
          </div>
          <div class=\"info_social\">
            <a href=\"\">
              <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"\">
              <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"\">
              <i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"\">
              <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
            </a>
          </div>
        </div>
        
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <section class=\"footer_section\">
    <div class=\"container\">
      <p>
        &copy; <span id=\"displayYear\"></span> All Rights Reserved 
        <a href=\"https://html.design/\"></a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  {% block js%}
  <script type=\"text/javascript\" src=\"{{asset('js/jquery-3.4.1.min.js')}}\"></script>
  <!-- popper js -->
  <script src=\"{{asset('https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js')}}\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\">
  </script>
  <!-- bootstrap js -->
  <script type=\"text/javascript\" src=\"js/bootstrap.js\"></script>
  <!-- owl slider -->
  <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\">
  </script>
  <!-- custom js -->
  <script type=\"text/javascript\" src=\"js/custom.js\"></script>
  <!-- Google Map -->
  {% endblock %}
  <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap\">
  </script>
  <!-- End Google Map -->
  

</body>

</html>", "home/index.html.twig", "C:\\Users\\chemseddine\\Documents\\Projet\\templates\\home\\index.html.twig");
    }
}
