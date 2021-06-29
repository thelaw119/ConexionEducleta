<?php
/**
 * Autores: Pedro Gatica Guajardo, Kimberly Soazo Lara
 * Fecha Creacion: 28 junio 2021
 * Cliente
 */
session_start();

require_once '../../conexion/db.php';

if (!isset($_SESSION["nick_usuario"])) {
    header("Location: http://localhost:8000/views/academia.html");
}else{
    $codigo = $_SESSION["id_usuario"];
}
?>
<!doctype html>

<html class="no-js" lang="es-CL">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Productos y Servicios -</title>

        <meta name="description" content="Educleta es líder en seguridad vial" />
        <link rel="canonical" href="http://www.educleta.cl/" />
        <meta property="og:locale" content="es_ES" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Educleta -" />
        <meta property="og:description" content="Educleta es líder en seguridad vial" />
        <meta property="og:url" content="http://www.educleta.cl/" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="Educleta es líder en seguridad vial" />
        <meta name="twitter:title" content="Educleta -" />
        <meta name="twitter:site" content="@EducletaChile" />
        <meta name="twitter:creator" content="@andresantelices" />
        <script type='application/ld+json'
        class='yoast-schema-graph yoast-schema-graph--main'>{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"http://www.educleta.cl/#organization","name":"Educleta","url":"http://www.educleta.cl/","sameAs":["https://de-de.facebook.com/pages/category/Education/Educleta-267530389943085/","https://www.instagram.com/educletachile/","https://www.youtube.com/user/Educleta","https://twitter.com/EducletaChile"],"logo":{"@type":"ImageObject","@id":"http://www.educleta.cl/#logo","url":"http://www.educleta.cl/wp-content/uploads/2018/04/LOGO-Educleta-2017.jpg","width":1650,"height":1275,"caption":"Educleta"},"image":{"@id":"http://www.educleta.cl/#logo"}},{"@type":"WebSite","@id":"http://www.educleta.cl/#website","url":"http://www.educleta.cl/","name":"Educleta","publisher":{"@id":"http://www.educleta.cl/#organization"},"potentialAction":{"@type":"SearchAction","target":"http://www.educleta.cl/?s={search_term_string}","query-input":"required name=search_term_string"}},{"@type":"WebPage","@id":"http://www.educleta.cl/#webpage","url":"http://www.educleta.cl/","inLanguage":"es-CL","name":"Educleta -","isPartOf":{"@id":"http://www.educleta.cl/#website"},"about":{"@id":"http://www.educleta.cl/#organization"},"datePublished":"2018-04-11T09:38:03+00:00","dateModified":"2020-01-06T17:32:51+00:00","description":"Educleta es l\u00edder en seguridad vial"}]}</script>


        <link rel='dns-prefetch' href='//fonts.googleapis.com' />
        <link rel='dns-prefetch' href='//s.w.org' />
        <link rel="alternate" type="application/rss+xml" title=" &raquo; Feed" href="http://www.educleta.cl/?feed=rss2" />
        <link rel="alternate" type="application/rss+xml" title=" &raquo; Feed de comentarios"
              href="http://www.educleta.cl/?feed=comments-rss2" />

        <!--CSS-->
        <link rel='stylesheet' id='wtfdivi-user-css-css' href='' type='text/css' media='all' />
        <link rel='stylesheet' id='activello-bootstrap-css' href='../../css/bootstrap.min.css' type='text/css' media='all' />
        <link rel='stylesheet' id='activello-icons-css' href='../../css/font-awesome.min.css' type='text/css' media='all' />
        <link rel='stylesheet' id='activello-fonts-css'
              href='//fonts.googleapis.com/css?family=Lora%3A400%2C400italic%2C700%2C700italic%7CMontserrat%3A400%2C700%7CMaven+Pro%3A400%2C700&#038;ver=4.9.18'
              type='text/css' media='all' />
        <link rel='stylesheet' id='flexslider-css-css' href='../../css/flexslider.css' type='text/css' media='all' />
        <link rel='stylesheet' id='activello-style-css' href='../../css/style.css' type='text/css' media='all' />
        <link rel='stylesheet' id='js_composer_front-css' href='../../js/js_composer.min.css' type='text/css' media='all' />


        <!--JS-->
        <script type="text/javascript" src="../../js/jquery-3.6.0.min.js"></script>
        <script type='text/javascript' src='../../js/jquery.js'></script>
        <script type='text/javascript' src='../../js/jquery-migrate.min.js'></script>
        <script type='text/javascript' src='../../js/modernizr.min.js'></script>
        <script type='text/javascript' src='../../js/bootstrap.min.js'></script>
        <script type='text/javascript' src='../../js/functions.min.js'></script>
        <script type='text/javascript' src='../../js/menu_cliente.js'></script>
        

        <link rel="icon" href="../../img/cropped-FAV-32x32.png" sizes="32x32" />
        <link rel="icon" href="../../img/cropped-FAV-192x192.png" sizes="192x192" />
        <link rel="apple-touch-icon-precomposed" href="../../img/cropped-FAV-180x180.png" />
        <meta name="msapplication-TileImage" content="../../img/cropped-FAV-270x270.png" />


        <style type="text/css" id="wp-custom-css">
            .page .entry-title {
                margin-bottom: 0px !important;
                display: none !important;
            }

            .main-content-area {
                margin-top: 0px !important;
            }
        </style>
        <style type="text/css" data-type="vc_shortcodes-custom-css">
            .vc_custom_1578320659235 {
                background-color: #0b6b13 !important;
            }

            .vc_custom_1578321205860 {
                background-color: #5e0038 !important;
            }

            .vc_custom_1578321123971 {
                background-color: #0b6b13 !important;
            }

            .vc_custom_1578321285618 {
                background-color: #5e0038 !important;
            }

            .vc_custom_1578321139601 {
                background-color: #0b6b13 !important;
            }
        </style><noscript>
        <style type="text/css">
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
        </noscript>
    </head>

    <body
        class="page-template page-template-page-fullwidth page-template-page-fullwidth-php page page-id-159 wp-custom-logo desktop group-blog has-full-width wpb-js-composer js-comp-ver-5.5.4 vc_responsive">
        <div id="page" class="hfeed site">

            <header id="masthead" class="site-header" role="banner">
                <!--MENU-->
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="site-navigation-inner text-left alignleft">
                                <div class="navbar-header">
                                    <button type="button" class="btn navbar-toggle" data-toggle="collapse"
                                            data-target=".navbar-ex1-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse navbar-ex1-collapse">
                                    <ul id="menu-mainmenu" class="nav navbar-nav">
                                        <li id="menu-item-644"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-90 current_page_item menu-item-644 active">
                                            <a title="Inicio" href="#" onclick="javascript:inicio();">Inicio</a>
                                        </li>
                                        <li id="menu-item-644"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-90 current_page_item menu-item-644">
                                            <a title="Cursos" href="#" onclick="javascript:cursos();">Cursos</a>
                                        </li>
                                        <li id="menu-item-642"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-642">
                                            <a title="Mis Pedidos" href="#" onclick="javascript:pedidos();">Mis Pedidos</a>
                                        </li>
                                        <li id="menu-item-893"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-893">
                                            <a title="Foro" href="#" onclick="javascript:foro();">Foro</a>
                                        </li>
                                        <li id="menu-item-1038"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1038">
                                            <a title="Aportes" href="#" onclick="javascript:aporte();">Aportes</a>
                                        </li>
                                        

                                    </ul>
                                </div>
                            </div>
                            
                            <div class="site-navigation-inner text-right alignright">
                                <div class="navbar-header ">
                                    <button type="button" class="btn navbar-toggle" data-toggle="collapse"
                                            data-target=".navbar-ex2-collapse">
                                        <span><img src="../../img/user.png" width="30" alt=""/></span>

                                    </button>
                                </div>
                                <div class="collapse navbar-collapse navbar-ex2-collapse">
                                    <ul id="menu-mainmenu" class="nav navbar-nav">
                                        <li id="menu-item-644"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-90 current_page_item menu-item-644">
                                            <a href="#" onclick="javascript:perfil(<?php echo $codigo; ?>);">Mi Perfil</a>
                                        </li>
                                        <li id="menu-item-642"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-642 ">
                                            <a title="Soporte" href="#" onclick="javascript:soporte();">Soporte</a>
                                        </li>
                                        <li id="menu-item-642"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-642 ">
                                            <a title="Cerrar Sesion" href="http://192.168.100.2/conexioneducleta/vista/cliente/logout.php" >Cerrar Sesion</a>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                            <div class="site-navigation-inner text-right alignright">
                                <div class="navbar-header ">
                                    <button type="button" class="btn navbar-toggle" >
                                        <span><img src="../../img/carro.png" width="30" alt=""/></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!--MENU-->


                <div class="container">
                    <div id="logo">
                        <span class="site-name ">
                            <a href="http://www.educleta.cl/" class="custom-logo-link" rel="home" itemprop="url">
                                <img  width="400" height="200" src="../../img/logo_edu.png" class="custom-logo" alt="" 
                                      itemprop="logo"  sizes="(max-width: 400px) 100vw, 400px" /></a>
                        </span>
                    </div>

                    <div id="line"></div>
                    
                    <div class="bienvenida">
                        <div class="aligncenter text-center">
                            <!--Agregamos el nombre completo del usuario-->
                            <h2>Bienvenid@ <?php echo $_SESSION["nombre_completo"];?></h2>
                            <h4>Bienvenid@  al Sistema  de Educleta.</h4>
                            <h4>Cambiemos la forma de hacer clases</h4>
                            <h4>Generando comunidades entre profesor@s ;)</h4>
                        </div>
                    </div>
                </div>
            </header>
            <div>
                            <div class="content-header" id="contenido">

                            </div>
                        </div> 
        </div>

        <div id="footer-area">
            <footer id="colophon" class="site-footer" role="contentinfo">
                <div class="site-info container">
                    <div class="row">
                        <div class="copyright col-md-12">
                            <p>EDUCLETA</p>
                            <p>Contacto: <a href="mailto:educleta@gmail.com">
                                    educleta@gmail.com</a>.</p>
                        </div>
                    </div>
                </div>
                <div class="scroll-to-top"><i class="fa fa-angle-up"></i></div>
            </footer>
        </div>
    </div>

    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            if ($(window).width() >= 767) {
                $('.navbar-nav > li.menu-item > a').click(function () {
                    if ($(this).attr('target') !== '_blank') {
                        window.location = $(this).attr('href');
                    } else {
                        var win = window.open($(this).attr('href'), '_blank');
                        win.focus();
                    }
                });
            }
        });
    </script>

    <link rel='stylesheet' id='db121_socicons-css' href='../../css/icons.css' type='text/css' media='all' />
    <link rel='stylesheet' id='vc_google_fonts_montserratregular700-css' href='https://fonts.googleapis.com/css?family=Montserrat%3Aregular%2C700&#038;ver=4.9.18' type='text/css' media='all' />
    <script type='text/javascript' src='../../js/skip-link-focus-fix.js'></script>
    <script type='text/javascript' src='../../js/flexslider.min.js'></script>
    <script type='text/javascript' src='../../js/js_composer_front.min.js'></script>

</body>

</html>