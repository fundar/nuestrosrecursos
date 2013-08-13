<!DOCTYPE HTML>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Nuestros Recursos - Inicio</title>
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/sources/css/base.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/industrias.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/slider-vertical.css">
  
  <style>
    body { margin:0; padding:0; }
    #map { position:absolute; top:0; bottom:0; width:100%; }
  </style>
</head>
<body>
<ol class="curtains">
 <li id="entrevistas" class="section cover">      
    
    <a href="<?php bloginfo('url'); ?>"> <div id="min-head"></div> </a>
    <h1>Industria <?php	$term = $wp_query->queried_object; echo $term->name; ?>
	</h1>
			<?php echo $current_industria = single_tag_title( '', false ); ?> 
    <div class="line"></div>

    <ul id="videos">
        <?php 
          if (have_posts() ) : 
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                query_posts( array( 'post_type' => 'entrevistas', /*'posts_per_page' => 2,*/ 'paged' => $paged ) );

            while ( have_posts() ) : the_post(); 
    		    $meta = get_post_meta($post->ID,'_my_meta',TRUE); 
    		?>  
	        <li>
	          <iframe id="video" width="293px" height="182px" 
	          		  src="//www.youtube.com/embed/<?php echo $meta['video_id']; ?>" 
	          		  frameborder="0" allowfullscreen>
	          </iframe>
	          <span> <b> Entrevisto/a: </b> <?php  echo $meta['entrevistado']; ?> </span>
	          <span> <b> Lugar: </b> <?php echo $meta['lugar']; ?> </span>
	          <span> <b> Temática: </b> <?php echo $meta['tematica']; ?> </span>
	        </li>
		<?php endwhile; endif; ?>
    <?php next_posts_link(); ?>
<?php previous_posts_link(); ?>
    </ul>
   
    <div id="footer">
      <ol id="col1">
        <li>Quienes somos</li>
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
 </body>