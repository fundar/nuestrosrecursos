<!DOCTYPE HTML>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Nuestros Recursos - Inicio</title>
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/sources/css/base.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/sources/css/curtain.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/home.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/agile_carousel.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/slider-vertical.css">
  
  <link href='http://api.tiles.mapbox.com/mapbox.js/v0.6.7/mapbox.css' rel='stylesheet' />
  <style>
    body { margin:0; padding:0; }
    #map { position:absolute; top:0; bottom:0; width:100%; }
  </style>
</head>
<body>

<div id="menu" class="menu">
  <ul>
    <li> <a href="#inicio"  id="_inicio" class="curtain-links normal"> Inicio </a> </li>
    <li> <a href="#infografia"  id="_infografia" class="curtain-links normal"> Infografía </a> </li>
    <li> <a href="#afectaciones"  id="_afectaciones" class="curtain-links normal"> Afectaciones </a> </li>
    <!--li> <a href="#indpetrolera"  id="_indpetrolera" class="curtain-links normal"> Industria Petrolera  </a></li-->

    <li> <a href="#marcolegal"  id="_marcolegal" class="curtain-links normal"> Marco Legal </a></li>
    <li> <a href="#ingresos"  id="_ingresos" class="curtain-links normal"> Ingresos </a></li>
    <li> <a href="#mapainteractivo"  id="_mapainteractivo" class="curtain-links normal"> Mapa Interáctivo</a></li>
    <li> <a href="#transparencia"  id="_transparencia" class="curtain-links normal"> Transparencia</a></li>
    <li> <a href="#publicaciones"  id="_publicaciones" class="curtain-links normal"> Publicaciones</a></li>
    <li> <a href="#acerca"  id="_acerca" class="curtain-links normal"> Sobre Nosotros</a></li>
  </ul>
</div>

<ol class="curtains">
  <li id="inicio" class="section" >
    <div id="wrapper">
      <div id="back">
        <div id="filtro">
          <div id="banner"></div>
        </div>
      </div>
      <div id="mensaje"> 
        <div id="texto">
          Los recursos petroleros y mineros pertenecen a la sociedad mexicana. El uso y destino de los mismos debe de ser decidido
          por todas y todos, pero sobre todo por las comunidades que habitan cerca de los mismos. Infórmate y actúa
          para que decidamos como deben de ser utilizados estos recursos de tal manera que maximicemos los beneficios
          para todas y todos, al tiempo que minimizamos los daños de su explotación.
        </div>
      </div>

      <div id="video">
        <img src="<?php bloginfo('template_url');?>/img/video.png">
      </div>
      <div id="mapa">
        <img src="<?php bloginfo('template_url');?>/img/mapa.png">
      </div>
    </div>
  </li>

  <li id="infografia" class="section cover">
    <h1>Introducción a las Industrias Estractivas en México</h1>
    <div id="brief"></div>
    <div id="info">
      <div id="texto">
      </div>
    </div>
  </li>
 
  <li id="afectaciones" class="section cover">      
    <h1>Afectaciones socioespaciales de las industrias extractivas</h1>
    <div id="industrias">
      <div id="petrolera" class="ind">
        <h2> Industria Petrolera </h2>
        <div id="c1" class="circle2" ></div>
        <div id="c2" class="circle" ></div>
        México es un país rico en hidrocarburos. Sus reservas 3P se calculan en 
        43,100 millones de barriles de petróleo crudo equivalente (mbpce). Según 
        las previsiones esta reservas alcanzarán para seguir produciendo petróleo 
        durante los próximos 31 años, al ritmo actual de producción de 2.9 millones 
        de barriles diarios de hidrocarburos líquidos y 6.7 millones de pies cúbicos 
        diarios de gas natural. Nueve estados de la república concentran el 99.9% de 
        la producción nacional de crudo y el 99.6% de la de gas. De ellos, tres 
        estados son especialmente relevantes: Campeche concentra el 24.6% de la 
        actividad petrolera, Veracruz el 24 % y Tabasco el 12%.
        <div id="desc-back">
          <a id="pet" href=""></a>
        </div>
        <div id="desc-back2">
          <a id="pet" href="">
            <img src="<?php bloginfo('template_url');?>/img/desc.png">
          </a>
        </div>
      </div>

      <div id="minera" class="ind"> 
        <h2>Industria Minera</h2>
        <div id="c3" class="circle2" ></div>
        <div id="c4" class="circle" ></div>
        México es un país rico en hidrocarburos. Sus reservas 3P se calculan en 
        43,100 millones de barriles de petróleo crudo equivalente (mbpce). Según 
        las previsiones esta reservas alcanzarán para seguir produciendo petróleo 
        durante los próximos 31 años, al ritmo actual de producción de 2.9 millones 
        de barriles diarios de hidrocarburos líquidos y 6.7 millones de pies cúbicos 
        diarios de gas natural. Nueve estados de la república concentran el 99.9% de 
        la producción nacional de crudo y el 99.6% de la de gas. De ellos, tres 
        estados son especialmente relevantes: Campeche concentra el 24.6% de la 
        actividad petrolera, Veracruz el 24 % y Tabasco el 12%.
      </div>
    </div>

    <div class="line"></div>
    <ul id="campanias">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
    <div class="line"></div>
  </li>

  <li id="marcolegal" class="section cover">      
    <h1>Marco Legal</h1>

    <div id="marco-constitucion" class="marco">
      <h2> Constitución Política</h2>
    </div>

    <div id="marco-petrolera" class="marco">
      <h2> Industria Petrolera </h2>
    </div>

    <div id="marco-minera" class="marco"> 
      <h2>Industria Minera</h2>
    </div>

    <div id="marco-comun" class="marco">
      <h2> Marco Común Legal </h2>
    </div>

    <div id="marco-propuestas" class="marco">
      <h2> Propuestas de Reforma </h2>
    </div>
  </li>

  <li id="ingresos" class="section cover">
    <h1>Ingresos Públicos</h1>
    <div id="text-contr">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
    <div id="grafica-contr"></div>

    <!--div id="otros-datos"-->
      <h2>Otros datos de Interes</h2>
      <ul id="hidrocarburos" class="ing-ind">
        <h2>Hidrocarburos</h2>
        <li> 
          <img src="" class="min-graf">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.
            <p>  Download. 
              <a href="#pdf"> PDF </a> - 
              <a href="#excel"> Excel</a> 
            </p>
          </p> 
        </li>
      </ul>
      <ul id="mineria" class="ing-ind">
        <h2>Mineria</h2>
        <li> 
          <img src="" class="min-graf">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. 
            <p>  Download. 
              <a href="#pdf"> PDF </a> - 
              <a href="#excel" Excel></a>
            </p>
          </p> 
        </li>
      </ul>
    <!--/div-->

    <div id="ingr-propuestas" class="marco">
      <h2> Nuestras Propuestas </h2>
    </div>
  </li>

  <li id="mapainteractivo" class="section cover">
    <h1>Mapas</h1>
    <ul id="menu-mapas">
      <li><a href="fundarmexico.map-56rcfk4m" class="map_link">| Concesiones vs Lenguas |</a></li>
      <li><a href="fundarmexico.map-g5hv3yn0" class="map_link">| Consesiones vs ANP Federal |</a></li>
    </ul>
    
    <div id='map'></div>
  </li>

  <li id="transparencia" class="section cover">
    <h1>Transparencia y acceso</h1>
    <div id="left">
      <h2>Texto simulado</h2>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      <br>
      <br>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      <br>
      <br>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      <br>
      <br>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
    <ul id="right">
      <li>
        <h2>Sector Petrolero</h2>
        <br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </li>
      <li>
        <h2>Sector Minero</h2>
        <br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </li>
      <li>
        <h2>Política Social y ambiental</h2>
        <br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </li>
    </ul>
  </li>

  <li id="publicaciones" class="section cover">
    <h1>Publicaciones y Multimedia</h1>

    <div class="slideshow" id="multiple_slides_visible"></div>

    <div class="nivel slider-vertical cuad">
      <h2>Video</h2>
        <div class="contenedor-slider">

          <div class="bloque-slider">
              <div class="modulo-slider">
                  <br>
                  <iframe width="260" height="180" src="http://www.youtube.com/embed/Pxoo931bWcE" frameborder="0" allowfullscreen></iframe>
              </div>
          </div>

        </div>
    </div>
  
    <div class="nivel slider-vertical cuad">
      <h2>Audio</h2>
        <div class="contenedor-slider">

          <div class="bloque-slider">
              <div class="modulo-slider">
                  <br>
                  <object id="playerList373" width="260" height="180" type="application/x-shockwave-flash" data="http://www.ivoox.com/playeriVoox_em_241_373_1.html"><param name="movie" value="http://www.ivoox.com/playeriVoox_em_241_373_1.html"></param><param name="allowFullScreen" value="true"></param><param name="wmode" value="transparent"></param><param name="AllowScriptAccess" value="always"></param><embed src="http://www.ivoox.com/playeriVoox_em_241_373_1.html" type="application/x-shockwave-flash" allowfullscreen="true" wmode="transparent" allowscriptaccess="always" width="206" height="182"></embed></object>
              </div>
          </div>
        </div>
    </div>

    <div class="nivel slider-vertical cuad">
      <h2>Salidas en Medios</h2>
        <div class="contenedor-slider">

          <div class="bloque-slider">
              <div class="modulo-slider">
                  <br><br>
                  <img src="">
                  <p><a href="#">Lorem ipsum dolor sit amet</a></p><br>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.
              </div>
              <div class="modulo-slider">
          </div>
            <!-- fin bloque-slider -->
        </div>
          <p class="mover-slider-vertical"><a class="subir-slider" >Subir noticia</a> <a class="bajar-slider">Bajar noticia</a></p>
    </div>
  </li>

  <li id="acerca" class="section cover"> 
    <h1>Sobre nuestros recursos</h1>

    <h2>Texto fundar</h2>
    <div class="cuad ab-txt">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>

    <h2>Nuestros Recursos</h2>
    <div class="cuad ab-txt">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
    
    <div id="footer">
      <ol id="col1">
        <li>Quines somos</li>
        <li>Contacto</li>
        <li>Fundar, Centro de Análisis e Investigación</li>
      </ol>

      <ol id="col2">
        <li>Nuestros Recursos</li>
        <li>Mapa Interactivo</li>

        <li>Impactos</li>
        <li>Transparencia</li>

        <li>Marco Legal</li>
        <li>Publicaciones</li>

        <li>Ingresos</li>
        <li>Sobre Nosotros</li>
      </ol>

      <ol id="col3">
        <img src="<?php bloginfo('template_url');?>/img/fundar.png" id="logo">
      </ol>
    </div> 
  </li>

  <li id="indpetrolera" class="section cover">      
    <div id="min-head"></div>
    <h1>Oil Industry Impacts</h1>
    <div class="line"></div>

    <ul id="videos">
      <li>
        <video></video> <br> 
        <span> <b>Entrevisto/a: </b> John Smith </span>
        <span> <b>lugar: </b> México, D.F </span>
        <span> <b>Temática: </b> Transparencia en contratos </span>
      </li>
      
      <li>
        <video></video> <br> 
        <span> <b>Entrevisto/a: </b> John Smith </span>
        <span> <b>lugar: </b> México, D.F </span>
        <span> <b>Temática: </b> Transparencia en contratos </span>
      </li>

      <li>
        <video></video> <br> 
        <span> <b>Entrevisto/a: </b> John Smith </span>
        <span> <b>lugar: </b> México, D.F </span>
        <span> <b>Temática: </b> Transparencia en contratos </span>
      </li>
    </ul>
   
    <div id="footer">
      <ol id="col1">
        <li>Quines somos</li>
        <li>Contacto</li>
        <li>Fundar, Centro de Análisis e Investigación</li>
      </ol>

      <ol id="col2">
        <li>Nuestros Recursos</li>
        <li>Mapa Interactivo</li>

        <li>Impactos</li>
        <li>Transparencia</li>

        <li>Marco Legal</li>
        <li>Publicaciones</li>

        <li>Ingresos</li>
        <li>Sobre Nosotros</li>
      </ol>

      <ol id="col3">
        <img src="<?php bloginfo('template_url');?>/img/fundar.png" id="logo">
      </ol>
    </div> 
  </li>
</ol>
<script src="<?php bloginfo('template_url');?>/sources/js/libs/jquery.min.js"></script>
<script src="<?php bloginfo('template_url');?>/sources/js/libs/agile_carousel.js"></script>
<script src="<?php bloginfo('template_url');?>/sources/js/libs/slider-vertical.js"></script>
<script src="<?php bloginfo('template_url');?>/sources/js/libs/jquery.scrollTo-1.4.3.1-min.js"></script>
 
<script src='http://api.tiles.mapbox.com/mapbox.js/v0.6.7/mapbox.js'></script>

<script>  
  mapbox.auto('map', 'fundarmexico.map-56rcfk4m');
  $(".map_link").on("click", function(){
    map_id = $(this).attr("href")
    mapbox.auto('map', map_id);
    return false
  })

  $(".menu a").on("click", function(){
    section = $(this).attr("href")
    $.scrollTo(section, 1000)
    return false
  })
</script>
<!--script src="<?php bloginfo('template_url');?>/sources/js/libs/curtain.js"></script-->
<!--script src="<?php bloginfo('template_url');?>/sources/js/home.js"></script-->

<script>
    //$.getJSON("agile_carousel/agile_carousel_data.php", function(data) {
        $(document).ready(function(){
            $(".agile_carousel").css("min-width", "900px");
            content  = "<div class='slide_inner'>"
            content += "  <a href='#'>"
            content += "     <img src='<?php bloginfo('template_url');?>/img/portada.jpg'> <br> <br>  <p> Titulo </p> <span> Lorem ipsum dolor sit amet, consectetur adipisicing elit </span></a>"
            content += "   "
            content += " </div> "
            $("#multiple_slides_visible").agile_carousel({
                carousel_data: [{ "content": content}, { "content": content}, { "content": content}, { "content": content}, { "content": content},
                                { "content": content}, { "content": content}, { "content": content}, { "content": content}, { "content": content},
                                { "content": content}, { "content": content}, { "content": content}, { "content": content}, { "content": content}
                               ],
                carousel_outer_height: 230,
                carousel_height: 200,
                slide_height: 200,
                carousel_outer_width: 480,
                slide_width: 300,
                number_slides_visible: 3,
                transition_time:2500,
                control_set_1: "previous_button,next_button",
                control_set_2: "group_numbered_buttons",
                persistent_content: "<p class='persistent_content'>Agile Carousel Example: Multiple Slides Visible</p>"       
            });
        });

    //Verical Slider
    moverSlider();
    $(".bajar-slider").click(function(){
        bajarSlider();
    });

    $(".subir-slider").click(function(){
        subirSlider();
    });

    $(".slider-vertical").mouseover(function(){
        verificar = 0;
    });

    $(".slider-vertical").mouseout(function(){
        verificar = 1;
    });

    //});
</script>
</body>
</html>