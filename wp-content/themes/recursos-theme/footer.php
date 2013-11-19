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
				<a href="http://fundar.org.mx" title="Fundar, Centro de Análisis e investigación"target="_blank">
					<img src="<?php bloginfo('template_url');?>/img/logo.png" id="logo">
				</a>
			</ol>
		</div>
	</ol>

	<script src="<?php bloginfo('template_url');?>/sources/js/libs/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url');?>/sources/js/libs/agile_carousel.js"></script>
	<script src="<?php bloginfo('template_url');?>/sources/js/libs/slider-vertical.js"></script>
	<script src="<?php bloginfo('template_url');?>/sources/js/libs/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script src='http://api.tiles.mapbox.com/mapbox.js/v0.6.7/mapbox.js'></script>

	<script>
		//$.getJSON("agile_carousel/agile_carousel_data.php", function(data) {
		$(document).ready(function(){

			if (!Array.prototype.indexOf){
			  Array.prototype.indexOf = function(elt /*, from*/){
				var len = this.length;

				var from = Number(arguments[1]) || 0;
				from = (from < 0)
					 ? Math.ceil(from)
					 : Math.floor(from);
				if (from < 0)
				  from += len;

				for (; from < len; from++)
				{
				  if (from in this &&
					  this[from] === elt)
					return from;
				}
				return -1;
			  };
			}

			secciones = ["#inicio", "#infografia", "#afectaciones", "#marcolegal", "#ingresos", "#mapainteractivo", "#transparencia", "#publicaciones", "#acerca"]
			sec_idx = 0;   

			function sections_elevator(action) {
			  if (action == "up"){ 
				if (sec_idx >= 1 ) { seccion = secciones[ --sec_idx] }
			  }else if (action == "down"){ 
				if (sec_idx <= secciones.length - 1 ) { seccion = secciones[ ++sec_idx] }
			  }else{ seccion = secciones[sec_idx = 0]  }

			  $.scrollTo(seccion, 1000)
			}

			mapbox.auto('map', 'fundarmexico.map-56rcfk4m');

			$(window).on('keyup', function(e){
			  switch(e.which){
				case 40: sections_elevator("down"); break;
				case 38: sections_elevator("up"); break;
				case 36: sections_elevator("home"); break;
				default: break;
			  }
			});

			$(".agile_carousel").css("min-width", "900px");
				var content  = "<div class='slide_inner'>"
					content += "  <a href='#'>"
					content += "     <img src='<?php bloginfo('template_url');?>/img/portada.jpg'> <br> <br>  <p> Titulo </p> <span> Lorem ipsum dolor sit amet, consectetur adipisicing elit </span></a>"
					content += "   "
					content += " </div> "

			populate_carousel = function(carousel){
			  <?php query_posts( array( 'paged' => get_query_var('page'), 'posts_per_page'=>8, 'post_type'=>'publicacion')); 
				if (have_posts() ) {
				  while ( have_posts() ) : the_post(); 
					global $post;
					$meta = get_post_meta($post->ID,'_my_meta',TRUE);   
					$link =  $meta['link'];
					?>  
					//<?php  if ( has_post_thumbnail() ) {  the_post_thumbnail('full');  }?>          
					var content  = "<div class='slide_inner'>"
						content += "  <a href='<?php echo $link;?>'>"
						//content += "     <?php if ( has_post_thumbnail() ) { the_post_thumbnail('carrucel'); } ?> "
						content += "     <p>  <?php the_title(); ?>  </p>"
						content += "     <span> <?php echo get_the_excerpt(); ?></span>"
						content += "  </a>"
						content += "</div> "

					carousel.push({ "content": content})
				  <?php endwhile; 
				}
			  ?> 
			  return carousel;
			}

			//console.log(populate_carousel([]))

			$("#multiple_slides_visible").agile_carousel({

				carousel_data: populate_carousel([]),
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

			$(".map_link").on("click", function(){
			  map_id = $(this).attr("href")
			  mapbox.auto('map', map_id);
			  return false
			})

			$(".menu a").on("click", function(){
			  seccion = $(this).attr("href")
			  sec_idx = secciones.indexOf(seccion);     
			  $.scrollTo(seccion, 1000)
			  return false
			})
			
			$(".nav_controls a").on("click", function(e){
			  action = $(this).attr("id")
			  sections_elevator(action);
			  return false
			})
			
			//Verical Slider
			moverSlider();
			$(".bajar-slider").click(function(){ bajarSlider(); });
			$(".subir-slider").click(function(){ subirSlider();});
			$(".slider-vertical").mouseover(function(){ verificar = 0; });
			$(".slider-vertical").mouseout(function(){ verificar = 1;   });
			
			$("#marco-petrolera a").hover(function(e){
			   $("#res-marco-petrolera").empty()
			   $("#res-marco-petrolera").text( $(this).attr("href") )
			   $("#res-marco-petrolera").fadeIn();
			   return false;
			})

			$("#marco-comun a").hover(function(e){
			   $("#res-marco-comun").empty()
			   $("#res-marco-comun").text( $(this).attr("href") )
			   $("#res-marco-comun").fadeIn();
			   return false;
			})

			$("#marco-minera a").hover(function(e){
			   $("#res-marco-minera").empty()
			   $("#res-marco-minera").text( $(this).attr("href") )
			   $("#res-marco-minera").fadeIn();
			   return false;
			})

			$(".marco a").click(function(e){
			   return false;
			})
		});
	</script>
	
	</body>
</html>
