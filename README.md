# Smart Tags WPforms meta-users Checkout Field Editor (Checkout Manager) for WooCommerce PRO
Integración de smart tags de wp-form tomando metadatos de usuario de Checkout Field Editor (Checkout Manager) for WooCommerce

Esta biblioteca es una implementacion de los Smart Tags de WPforms + los meta datos de usuarios registrador por el Checkout Field Editor (Checkout Manager) for WooCommerce

Links de Documentación wpforms: https://wpforms.com/developers/how-to-create-a-custom-smart-tag/
Checkout Field Editor (Checkout Manager) for WooCommerce: https://www.themehigh.com/product/woocommerce-checkout-field-editor-pro/
Guia de ayuda para implementacion de Checkout Field Editor (Checkout Manager) for WooCommerce: 

#### You can retrieve the value of the custom field from the database by using the below function.
#### Puede recuperar el valor del campo personalizado de la base de datos utilizando la siguiente función.

    $order_meta = get_post_meta( $order_id, $field_name, true );

#### Where $order_id is the id of the order. For user metadata, you can use the below function.
#### Donde $ order_id es el id del pedido. Para los metadatos del usuario, puede utilizar la siguiente función.

    $user_meta = get_user_meta( $user_id, $field_name, true );
