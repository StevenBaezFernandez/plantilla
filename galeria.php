<!DOCTYPE html>
 <html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:300,400,600,700|Montserrat:400,700,900|Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="shortcut icon" href="https://web-asonaema.000webhostapp.com/img/logo_prueba.svg" type="image/x-icon">
    <title>Home - proctos para el pelo</title>
</head>
<body>
    <header class="header-father">
        <div class="header1">
            <div class="left">
                <i class="fa fa-bars btn-menu" id="btn_show_movil"></i>
                <h1>¡Puedes tener un pelo natural y sin quimicos!</h1>
            </div>
            

            <div class="menu_social">
                <div class="social">
                    <a href="#">
                        <i class="fab fa-facebook-f">
                            <span class="tooltips facebook">Facebook</span>
                        </i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram">
                            <span class="tooltips instagram">Instagram</span>
                        </i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter">
                            <span class="tooltips twitter">Twitter</span>
                        </i>
                    </a>
                    <a href="#">
                        <i class="fab fa-google-plus">
                            <span class="tooltips google_plus">Google plus</span>
                        </i>
                    </a>
                </div>
                

                <div class="search_btn">
                    <img src="img/search_icon.svg" alt="button search">
                </div>
            </div>
            
        </div>
        <div class="header2">
            <a href="/asonaema" class="contenedor_img_logo">
            <img src="https://web-asonaema.000webhostapp.com/img/logo_prueba.svg" alt="logotipo">
            </a>
            
            <ul class="menu principal">
                <li><a href="http://localhost/asonaema" class="activo enlace_inicio">INICIO</a></li>
                <li class=" activo enlace_produsctos"><a href="https://web-asonaema.000webhostapp.com/tienda">PRODUCTOS</a></li>
                <li class="enlace_sobre_nosotros"><a href="https://web-asonaema.000webhostapp.com/nosotros" >SOBRE NOSOTROS</a></li>
                <li class="enlace_galeria"><a href="https://web-asonaema.000webhostapp.com/galeria">GALERIA</a></li>
                <li><a href="">MÁS <i class="fas fa-angle-down"></i></a>
                    <ul class="submenu">
                        <li><a href="https://web-asonaema.000webhostapp.com/galeria" class="mas_galeria">Galeria</a></li>
                        <li><a href="https://web-asonaema.000webhostapp.com/nosotros" class="mas_sobre_nosotros">sobre nosotros</a></li>
                        <li><a href="https://web-asonaema.000webhostapp.com/tienda" class="mas_productos">productos</a></li>
                        <li><a href=""></a></li>
                    </ul>
                </li>
            </ul>
            <a href="https://web-asonaema.000webhostapp.com/contacto"><button role="button" class="btn-main"><i class="fas fa-envelope"></i> CONTACTO</button></a>
            
        </div>
    </header>
    <div class="menu_scroll">
        <ul class="menu scroll">
            <li><a href="http://localhost/asonaema" class="activo enlace_inicio">INICIO</a></li>
            <li class=" activo enlace_produsctos"><a href="tienda">PRODUCTOS</a></li>
            <li class="enlace_sobre_nosotros"><a href="nosotros" >SOBRE NOSOTROS</a></li>
            <li class="enlace_galeria"><a href="galeria">GALERIA</a></li>
            <li class="enlace_galeria"><a href="contacto">CONTACTO</a></li>
            
        </ul>
    </div>
    <div class="menu_movil">
        <div class="header_menu_movil">
            <h3>Menu</h3>
            <button id="btn_hide_movil" role="button">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <ul class="menu movil">
            <li><a href="http://localhost/asonaema" class="activo enlace_inicio"><span class="icon_movil fa fa-home"></span> INICIO</a></li>
            <li class=" activo enlace_produsctos"><a href="tienda"><span class="icon_movil fa fa-box"></span> PRODUCTOS</a></li>
            <li class="enlace_sobre_nosotros"><a href="nosotros" ><span class="icon_movil fa fa-users"></span> SOBRE NOSOTROS</a></li>
            <li class="enlace_galeria"><a href="galeria"><span class="icon_movil fa fa-image"></span> GALERIA</a></li>
            <li class="enlace_galeria"><a href="contacto"><span class="icon_movil fa fa-envelope"></span> CONTACTO</a></li>
            
        </ul>
    </div>
    <div class="panel_busqueda">
        <div class="cuadro_busqueda">
            <input type="text" placeholder="Buscar..." class="input_busqueda" id="input_busqueda">
            <img src="img/cancel_icon.svg" class="cerrar_busqueda" alt="">
        </div>
        <div class="resultado_busqueda">
            <h3 class="alerta_no_funciona"> <i class="fa fa-exclamation-triangle"></i> El buscador no esta listo todavia estamos trabando en ello.</h3>
        </div>
    </div>

    <div class="overlay">
        <div class="main_newsletter">
            <div class="header_news">
                <h3>Suscribete</h3>
                <p>¡Para estar al tanto de todos nuestros productos!</p>
            </div>
            <div class="body_news">
                <form action="">
                    <input type="text" name="correo_electonico" placeholder="Correo electronico">
                    <input type="submit" value="Suscribirse" role="button">
                </form>
            </div>
        </div>
    </div>


    <script id="dsq-count-scr" src="//dilorenst-1.disqus.com/count.js" async></script>
    <div id="disqus_thread"></div>
    <script>

    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://dilorenst-1.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>






                            
    <div class="blanco">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
        <p class="cargando">Cargando la página</p>
    </div>

    <button role="button" class="btn_ir_arriba"><i class="fas fa-angle-up"></i></button>

    <footer class="pie_pagina">
        <div class="cuerpo">

            <div class="newsletter">
                <h2>Lorem, ipsum dolor.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="news">
                    <div class="input_group">
                        <i class="fa fa-envelope"></i>
                        <input type="text" placeholder="Digita tu correo">
                    </div>
                </div>
                <button role="button">Suscribete</button>
            </div>
            
            <div class="contenedor_social">
                <ul>                
                    
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                            <span>Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                            <span>Instagram</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                            <span>Tiwtter</span>
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <span>809-456-4565</span>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <span>laura.contacto@gmail.com</span>
                    </li>
                </ul>
            </div>
        </div>
            
        </div>
        <div class="pie">
            <ul class="menu foot">
                <li><a href="http://localhost/asonaema" class="activo enlace_inicio">INICIO</a></li>
                <li class=" activo enlace_produsctos"><a href="tienda">PRODUCTOS</a></li>
                <li class="enlace_sobre_nosotros"><a href="nosotros" >SOBRE NOSOTROS</a></li>
                <li class="enlace_galeria"><a href="galeria">GALERIA</a></li>
                <li class="enlace_contacto"><a href="contacto">CONTACTO</a></li>
            </ul>
            <p>© Steven báez fernández - 2020</p>
        </div>
    </footer>

    <script src="js/main.js"></script>
    
</body>
</html>