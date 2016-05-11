<?php
/**
 * Order details
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;

$order = new WC_Order( $order_id );


?>

<div class="titlewithborder"><?php _e( 'Order Details', 'woocommerce' ); ?> 
<span class="floatRight" style="font-size: 15px;">Order: <?php echo $order->get_order_number();?></span> </div>
<div class="blueTitle2">

<?php
		if ( sizeof( $order->get_items() ) > 0 ) {

			foreach( $order->get_items() as $item ) {
				$_product     = apply_filters( 'woocommerce_order_item_product', $order->get_product_from_item( $item ), $item );
				$item_meta    = new WC_Order_Item_Meta( $item['item_meta'], $_product );

							if ( $_product && ! $_product->is_visible() )
								echo apply_filters( 'woocommerce_order_item_name', $item['name'], $item );
								
							else
								echo apply_filters( 'woocommerce_order_item_name', sprintf( '<a href="%s">%s</a>', get_permalink( $item['product_id'] ), $item['name'] ), $item );

							//echo apply_filters( 'woocommerce_order_item_quantity_html', ' <strong class="product-quantity">' . sprintf( '&times; %s', $item['qty'] ) . '</strong>', $item );

							$item_meta->display();

							if ( $_product && $_product->exists() && $_product->is_downloadable() && $order->is_download_permitted() ) {

								$download_files = $order->get_item_downloads( $item );
								$i              = 0;
								$links          = array();

								foreach ( $download_files as $download_id => $file ) {
									$i++;

									$links[] = '<small><a href="' . esc_url( $file['download_url'] ) . '">' . sprintf( __( 'Download file%s', 'woocommerce' ), ( count( $download_files ) > 1 ? ' ' . $i . ': ' : ': ' ) ) . esc_html( $file['name'] ) . '</a></small>';
								}

								echo '<br/>' . implode( '<br/>', $links );
							}
					

			
			}
		}

		do_action( 'woocommerce_order_items_table', $order );
		?>
</div>
<div class="marginB20"><?php
echo $product_description = get_post($item['product_id'])->post_excerpt;
echo $product_description = get_post($item['product_id'])->post_content;
?></div>
<div class="clear"></div>
<div class="allPackages floatLeft fontSize14" style="width:300px">
    <div class="colLeft"><strong>Service Term:</strong></div>
    <div class="colRight"> Annual</div>
    <div class="colLeft"><strong>Start Date</strong></div>
    <div class="colRight">May 3, 2014</div>
    <div class="colLeft"><strong>End Date</strong></div>
    <div class="colRight">May 2, 2015</div>
</div>
<div class="allPackages fontSize14" style="width:300px">
   <?php
		if ( $totals = $order->get_order_item_totals() ) foreach ( $totals as $total ) :
			?>
		<div class="colLeft"><strong><?php 
		if($total['label'] == "Cart Subtotal:")
			echo 'Total';
		else	
			echo $total['label']; ?></strong></div>
				 <div class="colRight"><?php echo $total['value']; ?></div>
			</tr>
			<?php
		endforeach;
	?>
</div>
<div class="clear"></div>
<div class="space30"></div>


<?php do_action( 'woocommerce_order_details_after_order_table', $order ); ?>

<header>
	<h2><?php _e( 'Customer details', 'woocommerce' ); ?></h2>
</header>
<dl class="customer_details">
<?php
	if ( $order->billing_email ) echo '<dt>' . __( 'Email:', 'woocommerce' ) . '</dt><dd>' . $order->billing_email . '</dd>';
	if ( $order->billing_phone ) echo '<dt>' . __( 'Telephone:', 'woocommerce' ) . '</dt><dd>' . $order->billing_phone . '</dd>';

	// Additional customer details hook
	do_action( 'woocommerce_order_details_after_customer_details', $order );
?>
</dl>

<?php if ( get_option( 'woocommerce_ship_to_billing_address_only' ) === 'no' && get_option( 'woocommerce_calc_shipping' ) !== 'no' ) : ?>

<div class="col2-set addresses">

	<div class="col-1">

<?php endif; ?>

		<header class="title">
			<h3><?php _e( 'Billing Address', 'woocommerce' ); ?></h3>
		</header>
		<address><p>
			<?php
				if ( ! $order->get_formatted_billing_address() ) _e( 'N/A', 'woocommerce' ); else echo $order->get_formatted_billing_address();
			?>
		</p></address>

<?php if ( get_option( 'woocommerce_ship_to_billing_address_only' ) === 'no' && get_option( 'woocommerce_calc_shipping' ) !== 'no' ) : ?>

	</div><!-- /.col-1 -->

	<div class="col-2">

		<header class="title">
			<h3><?php _e( 'Service Address', 'woocommerce' ); ?></h3>
		</header>
		<address><p>
			<?php
				if ( ! $order->get_formatted_shipping_address() ) _e( 'N/A', 'woocommerce' ); else echo $order->get_formatted_shipping_address();
			?>
		</p></address>

	</div><!-- /.col-2 -->

</div><!-- /.col2-set -->

<?php endif; ?>

<div class="clear"></div>
