<?php

// Register Custom Post Type MM_Swim
if ( ! function_exists('mm_swim_post_type') ) {

// Register Custom Post Type
function mm_swim_post_type() {

	$labels = array(
		'name'                  => _x( 'Colecciones Swim', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Colección Swim', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'MM Swim', 'text_domain' ),
		'name_admin_bar'        => __( 'MM Swim', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_iteSM'             => __( 'Colecciones', 'text_domain' ),
		'add_new_item'          => __( 'Nueva colección Swim', 'text_domain' ),
		'add_new'               => __( 'Nueva', 'text_domain' ),
		'new_item'              => __( 'Nueva colección', 'text_domain' ),
		'edit_item'             => __( 'Editar colección', 'text_domain' ),
		'update_item'           => __( 'Actualizar colección', 'text_domain' ),
		'view_item'             => __( 'Ver colección', 'text_domain' ),
		'search_iteSM'          => __( 'Buscar colección', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen principal', 'text_domain' ),
		'set_featured_image'    => __( 'Imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Remover imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'insertar dentro de una colección', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subir a esta colección', 'text_domain' ),
		'iteSM_list'            => __( 'Listado de IteSM', 'text_domain' ),
		'iteSM_list_navigation' => __( 'Lista de navegación de iteSM', 'text_domain' ),
		'filter_iteSM_list'     => __( 'filtrar por item', 'text_domain' ),
        
	);
	$args = array(
		'label'                 => __( 'Colección S', 'text_domain' ),
		'description'           => __( 'Mariana meneses Swim', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-palmtree',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
        'show_in_nav_menus'   => true,
        'hierarchical'        => true,
	);
	register_post_type( 'swim', $args );

}
add_action( 'init', 'mm_swim_post_type', 0 );

}


// Register Custom Post Type MM_Electra
if ( ! function_exists('mm_electra_post_type') ) {

// Register Custom Post Type
function mm_electra_post_type() {

	$labels = array(
		'name'                  => _x( 'Colecciones Electra', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Colección Electra', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'MM Electra', 'text_domain' ),
		'name_admin_bar'        => __( 'MM Electra', 'text_domain' ),
		'archives'              => __( 'Archivos Electra', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_iteSM'             => __( 'Colecciones', 'text_domain' ),
		'add_new_item'          => __( 'Nueva colección Electra', 'text_domain' ),
		'add_new'               => __( 'Nueva', 'text_domain' ),
		'new_item'              => __( 'Nueva colección', 'text_domain' ),
		'edit_item'             => __( 'Editar colección', 'text_domain' ),
		'update_item'           => __( 'Actualizar colección', 'text_domain' ),
		'view_item'             => __( 'Ver colección', 'text_domain' ),
		'search_iteSM'          => __( 'Buscar colección', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen principal', 'text_domain' ),
		'set_featured_image'    => __( 'Imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Remover imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'insertar dentro de una colección', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subir a esta colección', 'text_domain' ),
		'iteSM_list'            => __( 'Listado de IteSM', 'text_domain' ),
		'iteSM_list_navigation' => __( 'Lista de navegación de iteSM', 'text_domain' ),
		'filter_iteSM_list'     => __( 'filtrar por item', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Colección E', 'text_domain' ),
		'description'           => __( 'Mariana meneses Electra', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-star-half',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'electra', $args );

}
add_action( 'init', 'mm_electra_post_type', 0 );

}

//Cambiar Entradas por noticias
function edit_admin_menus() {
    global $menu;
    global $submenu;
     
    $menu[5][0] = 'Noticias'; // Change Posts to Recipes
    $submenu['edit.php'][5][0] = 'Lista de noticias';
    $submenu['edit.php'][10][0] = 'Agregar noticia';
}
add_action( 'admin_menu', 'edit_admin_menus' );

//añadir capacidad de woocommerce a usuarios editores 

function add_theme_caps() {
    // gets the author role
    $role = get_role( 'editor' );

    // This only works, because it accesses the class instance.
    // would allow the author to edit others' posts for current theme only
    //$role = get_role( 'editor' );
    $role->add_cap( 'edit_products' );
    $role->add_cap( 'manage_woocommerce' );
    $role->add_cap( 'view_woocommerce_reports' );
    $role->add_cap( 'manage_woocommerce_products' );
    $role->add_cap( 'edit_others_products' );



    
    //quitar capacidad de manejo de paginas a usuarios editores
    if( current_user_can('editor')){
        $remove_menu_iteSM = array(__('Pages'), __('Comments'));
        global $menu;
        end ($menu);
        while (prev($menu)){
            $item = explode(' ',$menu[key($menu)][0]);
            if(in_array($item[0] != NULL?$item[0]:"" , $remove_menu_iteSM)){
            unset($menu[key($menu)]);}
        }
    }
}
//add_action( 'admin_init', 'add_theme_caps');

/* Disable WordPress Admin Bar for all users but admins. */
  //show_admin_bar(false);

//limitar el extracto
function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


// CUSTOM ADMIN LOGIN HEADER LOGO
 
function my_custom_login_logo()
{
    echo '<style  type="text/css"> h1 a {  background-image:url(' . get_bloginfo('template_directory') . '/img/logo_admin.png)  !important;} </style>';
}
add_action('login_head',  'my_custom_login_logo');


/*function add_last_nav_item($items) {
  return $items .= '<li><a data-toggle="modal" href="#custom-modal-0" >This is my modal</a></li>';
}
add_filter('wp_nav_menu_items','add_last_nav_item');*/


?>