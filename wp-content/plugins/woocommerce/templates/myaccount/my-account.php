<?php
/**
 * My Account page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

wc_print_notices(); ?>

<p class="myaccount_user">
	<?php
	 $current_user = wp_get_current_user();
     $user_first = get_user_meta( $current_user->ID, 'pie_text_7', true ); 	
	 $user_last = get_user_meta( $current_user->ID, 'pie_text_8', true ); 	
	 $user_name = $user_first.' '.$user_last; 
	printf(
		__( 'Hello <strong>%1$s</strong>,', 'woocommerce' ) . ' ',
		ucwords($user_name),
		wp_logout_url( get_permalink( wc_get_page_id( 'myaccount' ) ) )
	);
    echo '<br />';
	printf( __( 'From your account dashboard you can view your recent orders, manage your shipping and billing addresses and <br /><a href="%s">edit your password and account details</a>.', 'woocommerce' ),
		wc_customer_edit_account_url()
	);
	?>
</p>

<?php do_action( 'woocommerce_before_my_account' ); ?>

<?php wc_get_template( 'myaccount/my-downloads.php' ); ?>

<?php wc_get_template( 'myaccount/my-orders.php', array( 'order_count' => $order_count ) ); ?>

<?php wc_get_template( 'myaccount/my-address.php' ); ?>

<?php do_action( 'woocommerce_after_my_account' ); ?>
