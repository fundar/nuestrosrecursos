<?php 

//LOAD CSS
function load_css_styles(){
  if (!is_admin()){
    wp_register_style('css_main', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('css_main');
  }// if not admin ends
}// css_styles ends

add_action('wp_enqueue_scripts', 'load_css_styles');

//Agregar taxonomia
 function taxonomias() {
      register_taxonomy('industrias', 'entrevistas', array(
      'hierarchical' => true, 'label' => 'Industrias',
      'query_var' => true, 'rewrite' => array('slug' => 'industrias')));

      register_taxonomy('tipo-recurso', 'post', array(
      'hierarchical' => true, 'label' => 'Tipo de Recurso',
      'query_var' => true, 'rewrite' => array('slug' => 'tipo-recurso')));
    }
    
    add_action('init', 'taxonomias', 0);

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 100 );


 //Imagenes 
    add_theme_support( 'post-thumbnails' );

    add_action( 'after_setup_theme', 'setup' );  
    function setup() {  
        add_theme_support( 'post-thumbnails' ); 
        
        add_image_size( 'post', 450, 450, true ); // Unlimited Height Mode
        add_image_size( 'banner', 700, 300, true); //, true Hard Crop Mode
        add_image_size( 'preview', 220, 290, true ); // Soft Crop Mode
        add_image_size( 'releated', 200, 100,true ); // Soft Crop Mode
        add_image_size( 'carrucel', 71, 50); // Soft Crop Mode
    } 

    add_filter( 'image_size_names_choose', 'custom_image_sizes_choose' );  
    function custom_image_sizes_choose( $sizes ) {  
        $custom_sizes = array( 'post' => 'Post',  
                               'banner' => 'Banner',
                               'preview' => 'Preview',
                               'releated' => 'Releated'  );  
        return array_merge( $sizes, $custom_sizes );  
    }  

// ALERTAS
	//Agregar Post Types
	 add_action( 'init', 'create_post_type_alertas' );
	    function create_post_type_alertas() {
	        register_post_type( 'alerta',
	            array(
	                'labels' => array(
	                    'name' => __( 'Alertas' ),
	                    'singular_name' => __( 'Alerta' ),
	                    'singular_label' => __( 'Alerta' ),
	                    'all_items' => __('Alertas'),
	                    'add_new_item' => __('Add a new alerta'),
	                    'edit_item' => __('Edit alerta')
	                ),
	            'public' => true,
	            'has_archive' => true,
	            'capability_type' => 'post',
	            'hierarchical' => true,
	            'query_var' => true,
	            'menu_position' => 5,
	            'rewrite' => array('slug' => 'alertas'),
	            'supports' => array( 'title', "excerpt", 'custom-fields', 'thumbnail' )
	            //'taxonomies' => array('tags-pu', 'categorias', 'post_tag')
	            )
	        );
	    }

	//Metaboxes

	    //agregando custom fields//
	    add_action('admin_init','my_meta_init');
	    function my_meta_init(){
	        add_meta_box('alerta_link_meta', 'Link', 'my_meta_setup', 'alerta', 'normal', 'high');
	        add_action('save_post','my_meta_save');
	    }

	    function my_meta_setup(){
	        global $post;
	        $meta = get_post_meta($post->ID,'_my_meta',TRUE);
	        echo '<div class="my_meta_control">
	                <p> <input type="text" name="_my_meta[link]" value="';
	                        if(!empty($meta['link'])) echo $meta['link']; echo '"/>  
	                </p>
	            </div>';
	        // create a custom nonce for submit verification later
	        echo '<input type="hidden" name="my_meta_noncename" value="' . wp_create_nonce(__FILE__) . '" />';
	    }
	     
	    function my_meta_save($post_id){
	        if (!wp_verify_nonce($_POST['my_meta_noncename'],__FILE__)) return $post_id;

	        if ($_POST['post_type'] == 'alerta'){
	            if (!current_user_can('edit_page', $post_id)) return $post_id;
	        }else{
	            if (!current_user_can('edit_post', $post_id)) return $post_id;
	        }

	        $current_data = get_post_meta($post_id, '_my_meta', TRUE); 
	        $new_data = $_POST['_my_meta'];
	        my_meta_clean($new_data);

	        if ($current_data){
	            if (is_null($new_data)) delete_post_meta($post_id,'_my_meta');
	            else update_post_meta($post_id,'_my_meta',$new_data);

	        }elseif (!is_null($new_data)){
	            add_post_meta($post_id,'_my_meta',$new_data,TRUE);
	        }
	     
	        return $post_id;
	    }
	     
	    function my_meta_clean(&$arr){
	        if (is_array($arr)){
	            foreach ($arr as $i => $v){
	                if (is_array($arr[$i])){
	                    my_meta_clean($arr[$i]); if (!count($arr[$i])){ unset($arr[$i]); }
	                }else{ if (trim($arr[$i]) == ''){ unset($arr[$i]);  } }
	            }
	     
	            if (!count($arr)){ $arr = NULL;}
	        }
	    }

// ENTREVISTAS
	//Agregar Post Types
	 add_action( 'init', 'create_post_type_entrevistas' );
	    function create_post_type_entrevistas() {
	        register_post_type( 'entrevistas',
	            array(
	                'labels' => array(
	                    'name' => __( 'Entrevistas' ),
	                    'singular_name' => __( 'Entrevista' ),
	                    'singular_label' => __( 'Entrevista' ),
	                    'all_items' => __('Entrevistas'),
	                    'add_new_item' => __('Add a new entrevista'),
	                    'edit_item' => __('Edit entrevista')
	                ),
	            'public' => true,
	            'has_archive' => true,
	            'capability_type' => 'post',
	            'hierarchical' => true,
	            'query_var' => true,
	            'menu_position' => 5,
	            'rewrite' => array('slug' => 'entrevistas'),
	            'supports' => array( 'title' ),
	            'taxonomies' => array('post_tag','industria')
	            )
	        );
	    }

	//Metaboxes

	    //agregando custom fields//
	    
	    define('MY_WORDPRESS_FOLDER',$_SERVER['DOCUMENT_ROOT']);
	    define('MY_THEME_FOLDER',str_replace("\\",'/',dirname(__FILE__)));
	    define('MY_THEME_PATH','/' . substr(MY_THEME_FOLDER,stripos(MY_THEME_FOLDER,'wp-content')));
	    
	    add_action('admin_init','entrevistas_meta_init');
	    function entrevistas_meta_init(){
	        add_meta_box('entrevistas_link_meta', 'Datos', 'entrevistas_meta_setup', 'entrevistas', 'normal', 'high');
	        add_action('save_post','entrevistas_meta_save');
	    }

	    function entrevistas_meta_setup(){
	        global $post;
	        $meta = get_post_meta($post->ID,'_my_meta',TRUE);
	        echo '<label>Id del Video:</label> &nbsp &nbsp
	              <input type="text" name="_my_meta[video_id]" value="';
	                if(!empty($meta['video_id'])) echo $meta['video_id']; echo '"/>
	              <span style="color:#777; font-size:0.9em" > youtube.com/watch?v=<b>NTv9gqMMe48</b> </span>';
	     	echo '<p>
                    <label>Entrevistado(a):</label> &nbsp &nbsp
                    <input type="text" name="_my_meta[entrevistado]" value="';
                        if(!empty($meta['entrevistado'])) echo $meta['entrevistado']; echo '"/> <br>
                  
                  	<label>Lugar:</label> &nbsp &nbsp
                    <input type="text" name="_my_meta[lugar]" value="';
                        if(!empty($meta['lugar'])) echo $meta['lugar']; echo '"/> <br>

                    <label>Temática:</label> &nbsp &nbsp
                    <input type="text" name="_my_meta[tematica]" value="';
                        if(!empty($meta['tematica'])) echo $meta['tematica']; echo '"/> 
                  </p>';
	        // create a custom nonce for submit verification later
	        echo '<input type="hidden" name="entrevistas_meta_noncename" value="' . wp_create_nonce(__FILE__) . '" />';
	    }
	     
	    function entrevistas_meta_save($post_id){
	        if (!wp_verify_nonce($_POST['entrevistas_meta_noncename'],__FILE__)) return $post_id;

	        if ($_POST['post_type'] == 'entrevistas'){
	            if (!current_user_can('edit_page', $post_id)) return $post_id;
	        }else{
	            if (!current_user_can('edit_post', $post_id)) return $post_id;
	        }

	        $current_data = get_post_meta($post_id, '_my_meta', TRUE); 
	        $new_data = $_POST['_my_meta'];
	        entrevistas_meta_clean($new_data);

	        if ($current_data){
	            if (is_null($new_data)) delete_post_meta($post_id,'_my_meta');
	            else update_post_meta($post_id,'_my_meta',$new_data);

	        }elseif (!is_null($new_data)){
	            add_post_meta($post_id,'_my_meta',$new_data,TRUE);
	        }
	     
	        return $post_id;
	    }
	     
	    function entrevistas_meta_clean(&$arr){
	        if (is_array($arr)){
	            foreach ($arr as $i => $v){
	                if (is_array($arr[$i])){
	                    entrevistas_meta_clean($arr[$i]); if (!count($arr[$i])){ unset($arr[$i]); }
	                }else{ if (trim($arr[$i]) == ''){ unset($arr[$i]);  } }
	            }
	     
	            if (!count($arr)){ $arr = NULL;}
	        }
	    }

// PUBLICACIONES
	//Agregar Post Types
	 add_action( 'init', 'create_post_type_publicaciones' );
	    function create_post_type_publicaciones() {
	        register_post_type( 'publicacion',
	            array(
	                'labels' => array(
	                    'name' => __( 'Publicaciones' ),
	                    'singular_name' => __( 'Publicacion' ),
	                    'singular_label' => __( 'Publicacion' ),
	                    'all_items' => __('Publicaciones'),
	                    'add_new_item' => __('Add a new publicacion'),
	                    'edit_item' => __('Edit publicacion')
	                ),
	            'public' => true,
	            'has_archive' => true,
	            'capability_type' => 'post',
	            'hierarchical' => true,
	            'query_var' => true,
	            'menu_position' => 5,
	            'rewrite' => array('slug' => 'publicaciones'),
	            'supports' => array( 'title', 'custom-fields','excerpt', 'thumbnail'  ),
	            'taxonomies' => array('post_tag','industria')
	            )
	        );
	    }

	//Metaboxes

	    //agregando custom fields//
	    add_action('admin_init','publicacion_meta_init');
	    function publicacion_meta_init(){
	        add_meta_box('publicacion_link_meta', 'Link_pub', 'publicacion_meta_setup', 'publicacion', 'normal', 'high');
	        add_action('save_post','publicacion_meta_save');
	    }

	    function publicacion_meta_setup(){
	        global $post;
	        $meta = get_post_meta($post->ID,'_my_meta',TRUE);
	        echo '<div class="my_meta_control">
	                <p> <input type="text" name="_my_meta[link_pub]" value="';
	                        if(!empty($meta['link_pub'])) echo $meta['link_pub']; echo '"/>  
	                </p>
	            </div>';
	     
	        // create a custom nonce for submit verification later
	        echo '<input type="hidden" name="publicacion_meta_noncename" value="' . wp_create_nonce(__FILE__) . '" />';
	    }
	     
	    function publicacion_meta_save($post_id){
	        if (!wp_verify_nonce($_POST['publicacion_meta_noncename'],__FILE__)) return $post_id;

	        if ($_POST['post_type'] == 'publicacion'){
	            if (!current_user_can('edit_page', $post_id)) return $post_id;
	        }else{
	            if (!current_user_can('edit_post', $post_id)) return $post_id;
	        }

	        $current_data = get_post_meta($post_id, '_my_meta', TRUE); 
	        $new_data = $_POST['_my_meta'];
	        publicacion_meta_clean($new_data);

	        if ($current_data){
	            if (is_null($new_data)) delete_post_meta($post_id,'_my_meta');
	            else update_post_meta($post_id,'_my_meta',$new_data);

	        }elseif (!is_null($new_data)){
	            add_post_meta($post_id,'_my_meta',$new_data,TRUE);
	        }
	     
	        return $post_id;
	    }
	     
	    function publicacion_meta_clean(&$arr){
	        if (is_array($arr)){
	            foreach ($arr as $i => $v){
	                if (is_array($arr[$i])){
	                    publicacion_meta_clean($arr[$i]); if (!count($arr[$i])){ unset($arr[$i]); }
	                }else{ if (trim($arr[$i]) == ''){ unset($arr[$i]);  } }
	            }
	     
	            if (!count($arr)){ $arr = NULL;}
	        }
	    }

// RECURSOS
	//Agregar Post Types
	 add_action( 'init', 'create_post_type_recursos' );
	    function create_post_type_recursos() {
	        register_post_type( 'recurso',
	            array(
	                'labels' => array(
	                    'name' => __( 'Recursos' ),
	                    'singular_name' => __( 'Recurso' ),
	                    'singular_label' => __( 'Recurso' ),
	                    'all_items' => __('Recursos'),
	                    'add_new_item' => __('Add a new recurso'),
	                    'edit_item' => __('Edit recurso')
	                ),
	            'public' => true,
	            'has_archive' => true,
	            'capability_type' => 'post',
	            'hierarchical' => true,
	            'query_var' => true,
	            'menu_position' => 5,
	            'rewrite' => array('slug' => 'recursos'),
	            'supports' => array( 'title', 'editor', 'excerpt'  ),
	            'taxonomies' => array('post_tag','industria', 'tipo-recurso')
	            )
	        );
	    }
//// Pa
	
?>