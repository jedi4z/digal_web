<?php

/* WebBundle:Index:index.html.twig */
class __TwigTemplate_ff73a6d18c0601e05290c78ee8e899b296af8111be0148103542a4c150ae3a2f extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>Digal - Servicios Publicitarios</title>
        <meta name=\"keywords\" content=\"articulos publicitarios cordoba, diseño web cordoba, regalos empresariales, branding cordoba, diseño grafico para empresas, publicidad para empresas, estampados cordoba, sublimados cordoba, ploteados cordoba, vidrieras\"/> 
        <meta name=\"description\" content=\"Somos una estudio de diseño integral dedicado al diseño web, diseño grafico y  a la producción de artículos publicitarios en serigrafia, sublimación, rotulación, madera, etc \"/>
        <meta name=\"Robots\" content=\"all\">
        <link rel=\"icon\" href=\"images/favicon.ico\">
        <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/css/camera.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/css/form.css"), "html", null, true);
        echo "\">
        <link href='http://fonts.googleapis.com/css?family=Gafata' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Tauri' rel='stylesheet' type='text/css'>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-48718020-1', 'digal.com.ar');
            ga('send', 'pageview');

          </script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/js/jquery-migrate-1.1.1.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/js/superfish.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/js/forms.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/js/jquery.ui.totop.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/js/jquery.equalheights.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/js/jquery.ui.totop.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/js/tms-0.4.1.js"), "html", null, true);
        echo "\"></script>
        <script>
                \$(document).ready(function(){
                        \$('.slider_wrapper')._TMS({
                                show:0,
                                pauseOnHover:false,
                                prevBu:'.prev',
                                nextBu:'.next',
                                playBu:false,
                                duration:800,
                                preset:'fade',
                                pagination:true,//'.pagination',true,'<ul></ul>'
                                pagNums:false,
                                slideshow:8000,
                                numStatus:false,
                                banners: 'fade',
                                waitBannerAnimation:false,
                                progressBar:false
                        });
                });
                \$(document).ready(function(){
                        !function(){
                var map=[]
                 ,names=[]
                 ,win=\$(window)
                 ,header=\$('header')
                 ,currClass
                \$('.content').each(function(n){
                 map[n]=this.offsetTop
                 names[n]=\$(this).attr('id')
                })
                win
                 .on('scroll',function(){
                        var i=0
                        while(map[i++]<=win.scrollTop());
                        if(currClass!==names[i-2])
                        currClass=names[i-2]
                        header.removeAttr(\"class\").addClass(names[i-2])
                 })
                }(); });
                                function goToByScroll(id){
                        \$('html,body').animate({scrollTop: \$(\"#\"+id).offset().top},'slow');
                        }
                        \$(document).ready(function(){
                                \$().UItoTop({ easingType: 'easeOutQuart' });
                        });
            </script>
            <!--[if lt IE 8]>
                    <div style=' clear: both; text-align:center; position: relative;'>
                            <a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\">
                                    <img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" />
                            </a>
                    </div>
            <![endif]-->
            <!--[if lt IE 9]>
                    <script src=\"js/html5shiv.js\"></script>
                    <link rel=\"stylesheet\" media=\"screen\" href=\"css/ie.css\">
            <![endif]-->
        </head>
        <body class=\"\">
            <!--==============================header=================================-->
            <header class=\"page1\">
                <div class=\"container_12\">
                    <div class=\"grid_12\">
                        <h1>
                            <a href=\"#\" onClick=\"goToByScroll('page1'); return false;\">
                                <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/logo.png"), "html", null, true);
        echo "\" alt=\"digal logo\">
                            </a>
                        </h1>
                        <div class=\"menu_block\">
                            <nav class=\"\">
                                <ul class=\"sf-menu\">
                                    <li class=\"current men\"><a onClick=\"goToByScroll('page1'); return false;\" href=\"#\">Home </a> <strong class=\"hover\"></strong></li>
                                    <li class=\"men1\"><a onClick=\"goToByScroll('page2'); return false;\" href=\"#\">Nosotros</a><strong class=\"hover\"></strong></li>
                                    <li class=\" men2\"><a onClick=\"goToByScroll('page3'); return false;\" href=\"#\">Servicios</a> <strong class=\"hover\"></strong></li>
                                    <li class=\" men3\"><a onClick=\"goToByScroll('page4'); return false;\" href=\"#\">Clientes</a> <strong class=\"hover\"></strong></li>
                                    <li class=\" men4\"><a onClick=\"goToByScroll('page5'); return false;\" href=\"#\">Trabajos</a> <strong class=\"hover\"></strong></li>
                                    <li class=\" men5\"><a onClick=\"goToByScroll('page6'); return false;\" href=\"#\">Contacto</a> <strong class=\"hover\"></strong></li>
                                </ul>
                            </nav>
                            <div class=\"clear\"></div>
                        </div>
                    </div>
                    <div class=\"clear\"></div>
                </div>
            </header>
            <!--=======content================================-->
            <div id=\"page1\" class=\"content\">
                <div class=\"ic\">More Website Templates @ TemplateMonster.com - September 9, 2013!</div>
                <div class=\"container_12\">
                    <div class=\"grid_12\">
                        <div class=\"slider_wrapper\">
                            <ul class=\"items\">
                                <li>
                                    <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"caption banner\">
                                        <h2>Transformamos tus ideas en productos reales!</h2>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"caption banner\">
                                        <h2>Potenciamos el alcance de tu marca!</h2>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"caption banner\">
                                        <h2>Atraeremos la atención de más clientes</h2>
                                    </div>
                                </li> 
                            </ul>
                        </div>
                        <div class=\"socials\">
                            <a href=\"\"></a>
                            <a href=\"#\"></a>
                            <a href=\"#\"></a>
                            <a href=\"#\"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"page2\" class=\"content\">
                <div class=\"container_12\">
                    <div class=\"grid_12\">
                        <div class=\"slogan\">
                            <h3>Conocenos Mejor!</h3>
                            <div class=\"text1\">
                                <p>
                                    Comenzamos a fines del 2012 con la idea ofrecer distintos servicios
                                    publicitarios a empresas Cordobesas, hoy en día tenemos una amplia cartera 
                                    de clientes de todo el país con una importante misión; <strong>hacerlos felices</strong>.
                                </p>
                                <p>
                                    Para ello, brindamos un servicio de asesoramiento permanente sin cargo sobre \"ideas originales\" de acuerdo a cada promoción o evento, así como el desarrollo de productos exclusivos bajo pedido.
                                </p>
                                <p>
                                    Te invitamos a ver algo de lo que hacemos...
                                </p>
                            </div>

                            <iframe src=\"//player.vimeo.com/video/47077586\" width=\"700\" height=\"481\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
                        </div>
                    </div> 
                </div>
            </div>
            <div id=\"page3\" class=\"content\">
                <div class=\"container_12\">
                    <div class=\"grid_12\">
                        <div class=\"slogan\">
                            <h3>Nuestros Servicios</h3>
                            <div class=\"text1\">
                                Contamos una gran cantidad de productos y servicios publicitarios para que tu empresa
                                o negocio pueda atraer a nuevos clientes de forma economica y efectiva. Conoce nuestras opciones
                                y elige la que mas se adapte a tus necesidades.
                            </div>
                        </div>
                    </div>
                    <div class=\"grid_4\">                        
                        <img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/icon-ap.png"), "html", null, true);
        echo "\" alt=\"\">
                        <h4>Artículos Publicitarios</h4>
                        Artículos promocionales, llaveros, tickets, domes, remeras, buzos
                        pads, lapiceras, bolsas ecológicas, almohadones y mucho mas.                        
                    </div>
                    <div class=\"grid_4\">                        
                        <img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/icon-dw.png"), "html", null, true);
        echo "\" alt=\"\">
                        <h4>Diseño Web</h4>
                        Diseño y desarrollos web, sistemas de autogestión, tiendas online y web responsive que se adapta a todo tipo de dispositivos.                        
                    </div>
                    <div class=\"grid_4\">                        
                        <img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/icon-dg.png"), "html", null, true);
        echo "\" alt=\"\">
                        <h4>Diseño Grafico</h4>
                        Diseño de Identidad, diseño editorial, folletería, logos, carpetas, imanes, packaging, banners y diseño para redes sociales.                        
                    </div>
                </div>
            </div>
            <div id=\"page4\" class=\"content\">
                <div class=\"container_12\">
                    <div class=\"grid_12\">
                        <div class=\"slogan\">
                            <h3>Nuestros Clientes</h3>
                            <div class=\"text1\">
                                Creemos que el éxito en estas relaciones reflejan los servicios innovadores y nuestra capacidad de impactar positivamente en los negocios de nuestros clientes.
                            </div>
                        </div>
                    </div>
                    <div class=\"companies\">
                        <div class=\"grid_2\">
                            <img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/batistella.png"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"text1\">Batistella</div>
                        </div>
                        <div class=\"grid_2\">
                            <img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/startupweekendcordoba.png"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"text1\">Startup Weekend Córdoba</div>
                        </div>                        
                        <div class=\"grid_2\">
                            <img src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/wheellock.png"), "html", null, true);
        echo "\" alt=\"wheellock\">
                            <div class=\"text1\">Wheel Lock</div>
                        </div>
                        <div class=\"grid_2\">
                            <img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/weg.png"), "html", null, true);
        echo "\" alt=\"weg\">
                            <div class=\"text1\">Weg Argentina</div>
                        </div>
                        <div class=\"grid_2\">
                            <img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/allus_bpo_center.png"), "html", null, true);
        echo "\" alt=\"allus bpo center\">
                            <div class=\"text1\">Allus Bpo Center</div>
                        </div>
                        <div class=\"grid_2\">
                            <img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/holiday_inn.png"), "html", null, true);
        echo "\" alt=\"holiday inn\">
                            <div class=\"text1\">Holiday Inn Córdoba</div>    
                        </div>          
                        <div class=\"clear\"></div>                        
                        <div class=\"grid_2\">
                            <img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/ibm.png"), "html", null, true);
        echo "\" alt=\"instituto biblico mediterraneo cordoba\">
                            <div class=\"text1\">Instituto Bíblico Mediterráneo</div>
                        </div>  
                        <div class=\"grid_2\">
                            <img src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/tengo_raiz.png"), "html", null, true);
        echo "\" alt=\"tengo raiz\">
                            <div class=\"text1\">Tengo Raíz</div>
                        </div>
                        <div class=\"grid_2\">
                            <img src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/petreiza.png"), "html", null, true);
        echo "\" alt=\"petreiza combustibles\">
                            <div class=\"text1\">Petreiza Combustibles</div>
                        </div>
                        <div class=\"grid_2\">
                            <img src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/comsys.png"), "html", null, true);
        echo "\" alt=\"comsys\">
                            <div class=\"text1\">ComSys</div>
                        </div>
                        <div class=\"grid_2\">
                            <img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/supralife.png"), "html", null, true);
        echo "\" alt=\"cima supralife ecuador\">
                            <div class=\"text1\">Cima SupraLife</div>
                        </div>                
                        </div>
                    </div>
                </div>
            </div> 
            <div id=\"page5\" class=\"content\">
                <div class=\"container_12\">
                    <div class=\"grid_12\">
                        <div class=\"slogan\">
                            <h3>Trabajos realizados</h3>
                            <div class=\"text1\">
                                Podrás observar algunos de nuestros trabajos realizados.
                            </div>         
                            <div class=\"wrapper-work\">                                   
                                <div class=\"bw pic\">
                                    <img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/wk/wk-1.jpg"), "html", null, true);
        echo "\" alt=\"plan b\">
                                </div>
                                <div class=\"bw pic\">
                                    <img src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/wk/wk-2.jpg"), "html", null, true);
        echo "\" alt=\"moreno y asociados\">
                                </div>
                                <div class=\"bw pic\">
                                    <img src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/wk/wk-3.jpg"), "html", null, true);
        echo "\" alt=\"dropmovi\">
                                </div>        
                                <div class=\"bw pic\">
                                    <img src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/wk/wk-4.jpg"), "html", null, true);
        echo "\" alt=\"diseño web\">
                                </div>
                                <div class=\"bw pic\">
                                    <img src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/wk/wk-5.jpg"), "html", null, true);
        echo "\" alt=\"diseño web\">
                                </div>   
                                <div class=\"bw pic\">
                                    <img src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/wk/wk-6.jpg"), "html", null, true);
        echo "\" alt=\"agilecode\">
                                </div>
                                <div class=\"bw pic\">
                                    <img src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digal/images/wk/wk-7.jpg"), "html", null, true);
        echo "\" alt=\"llaveros estampados allus bpo center\">
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>                   
            <div id=\"page6\" class=\"content\">
                <div class=\"container_12\">
                    <div class=\"grid_12\">
                        <div class=\"slogan\">
                            <h3>Ponte en contacto!</h3>
                            <div class=\"text1\">
                                Podrás visitarnos o enviarnos una consulta a través de nuestro formulario web
                                que también te permite enviar el archivo de tu diseño para presupuestarlo!
                            </div>
                        </div>
                    </div>
                    <div class=\"clear\"></div>
                    <div class=\"map transp\">
                        <div class=\"grid_3\">
                            <div class=\"text1\">¿Donde estamos?</div>
                            <address>
                                <dl>
                                    <dt>Digal<br>
                                    Tunuyán 2287 Barrio Cabildo,<br>
                                    Córdoba, Argentina.
                                    </dt>
                                    <dd><span>Telefono:</span>+54 351 156 067958</dd>
                                    <dd><span>E-mail: </span><a href=\"#\" class=\"link-1\">info@digal.com.ar</a></dd>
                                    <dd><span>Skype: </span><a href=\"#\" class=\"link-1\">@digalcontacto</a></dd>
                                </dl>
                            </address>
                        </div>
                        <div class=\"grid_3\">
                            <div class=\"text1\">&nbsp;</div>
                            <figure class=\"\">
                                <iframe width=\"425\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com.ar/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=Tunuy%C3%A1n+2287,+C%C3%B3rdoba,+Argentina&amp;aq=t&amp;sll=-31.486851,-64.236127&amp;sspn=0.005279,0.010568&amp;ie=UTF8&amp;hq=&amp;hnear=Tunuy%C3%A1n,+C%C3%B3rdoba&amp;t=m&amp;z=14&amp;ll=-31.486246,-64.234489&amp;output=embed\"></iframe><br /><small><a href=\"https://maps.google.com.ar/maps?f=q&amp;source=embed&amp;hl=es-419&amp;geocode=&amp;q=Tunuy%C3%A1n+2287,+C%C3%B3rdoba,+Argentina&amp;aq=t&amp;sll=-31.486851,-64.236127&amp;sspn=0.005279,0.010568&amp;ie=UTF8&amp;hq=&amp;hnear=Tunuy%C3%A1n,+C%C3%B3rdoba&amp;t=m&amp;z=14&amp;ll=-31.486246,-64.234489\" style=\"color:#0000FF;text-align:left\">Ver mapa más grande</a></small>
                            </figure>
                        </div>
                        <div class=\"grid_5 prefix_1\">
                            <div class=\"text1\">Contáctanos</div>
                            
                            <form id=\"formContact\" method=\"post\" action=\"#\">                           
                                            <div>
                                                ";
        // line 344
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors');
        echo "
                                                ";
        // line 345
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget', array("attr" => array("placeholder" => "Nombre")));
        echo "
                                            </div>
                                            <div>
                                                ";
        // line 348
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
                                                ";
        // line 349
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("placeholder" => "Email")));
        echo "
                                            </div>
                                             <div>
                                                ";
        // line 352
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'errors');
        echo "
                                                ";
        // line 353
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("placeholder" => "Consulta")));
        echo "
                                            </div>
                                            ";
        // line 355
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
                                            <input type=\"submit\" value=\"Enviar\" class=\"btns\"/>
                                </form>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
            </div>
            <!--==============================footer=================================-->
            <footer>
                <div class=\"container_12\">
                    <div class=\"grid_12\">
                        <div class=\"copy\">
                            &copy; 2012 | <a href=\"#\">Digal Merchandising</a> 
                            <br> Website designed by <a href=\"http://www.digal.com.ar/\" rel=\"nofollow\">digal.com.ar</a>
                        </div>
                    </div>
                    <div class=\"clear\"></div>
                </div>
            </footer>
        </body>
    </html>";
    }

    public function getTemplateName()
    {
        return "WebBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 355,  502 => 353,  498 => 352,  492 => 349,  488 => 348,  482 => 345,  478 => 344,  430 => 299,  424 => 296,  418 => 293,  412 => 290,  406 => 287,  400 => 284,  394 => 281,  374 => 264,  367 => 260,  360 => 256,  353 => 252,  346 => 248,  338 => 243,  331 => 239,  324 => 235,  317 => 231,  310 => 227,  303 => 223,  282 => 205,  274 => 200,  265 => 194,  209 => 141,  200 => 135,  191 => 129,  160 => 101,  91 => 35,  87 => 34,  83 => 33,  79 => 32,  75 => 31,  71 => 30,  67 => 29,  63 => 28,  59 => 27,  42 => 13,  38 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
