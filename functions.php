/*Add-Shipping-Disclaimer*/
add_action('woocommerce_after_cart_table', 'shipping_disclaimer_message');

function shipping_disclaimer_message( ) {
echo '<div><span style="font-size: 12px;color: #666767;"><strong>DISCLAIMER:</strong> Shipping costs displayed are an estimate and subject to change based upon weight, quantity of products being ordered, delivery zip code, and freight company selected. Actual shipping cost will be calculated at check-out once order quantities, delivery zip code, and freight company are determined. Please refer any questions regarding shipping costs to Customer Service at 913-401-3330.</span>
</div>'; 
}
