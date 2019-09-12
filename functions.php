/*Add-Shipping-Disclaimer*/
add_action('woocommerce_after_cart_table', 'shipping_disclaimer_message');

function shipping_disclaimer_message( ) {
echo '<div><span style="font-size: 12px;color: #666767;">Your message goes here</span>
</div>'; 
}
