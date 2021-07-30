/** INTEGRACION DE SMART TAGS de WP-FORM TOMANDO METADATOS DE USUARIO de Checkout Field Editor (Checkout Manager) for WooCommerce */
/** DESARROLLADOR: ANDRES FERRER */
/** VESION: 1.0.0 */

/** FUNCION QUE TOMA LOS VALORES DEL META DATOS DEL USUARIO **/

function get_user_meta_rut($user_id) {
	$field_name = "billing_rut";
    $user_meta = get_user_meta( $user_id, $field_name, true );
    return $user_meta;
}

// FUNCION QUE REGISTRA EL SMART TAG EN WPFORMS
function wpf_dev_register_smarttag( $tags ) {

    // REGISTRO DE NOMBRE
    $tags['billing_rut'] = 'Faturación RUT';

    return $tags;
}
add_filter( 'wpforms_smart_tags', 'wpf_dev_register_smarttag' );

// FUNCION QUE EJECUTA EL SMART TAG 
function wpf_dev_process_smarttag( $content, $tag ) {
	// VERIFICADO DE SMART TAG
    if ( 'billing_rut' === $tag ) {
    	$current_user = wp_get_current_user();
        $current_user_id = $current_user->ID;
    // EJECUACION DE LA FUNCION DE METADATOS 
        if($current_user_id !== 0){
			$var = get_user_meta_rut($current_user_id);
	    }else{
	    	$var="";
	    }
     // COMPLETADOR DE CAMPO CON SMART TAGS
        $content = str_replace( '{billing_rut}', $var, $content );
    }

    return $content;
}
add_filter( 'wpforms_smart_tag_process', 'wpf_dev_process_smarttag', 10, 2 );
// FUNCION QUE EJECUTA EL SMART TAG 


