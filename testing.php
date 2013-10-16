<?php 
$local = dirname(__FILE__);
include('sharedviews/header.php');
$cats = $HDstore->get_all_categories();
$products = $HDstore->get_all_products();
$product_id = 27711830;
$product = $HDstore->get_product($product_id);
 ?>
<div class="container">
	<h2>Testing API</h2>
	<pre>
<?php
	// echo "All Categories";
	// print_r($cats);
// 	echo "All Products";
// 	print_r($products);
    echo "1 Product";
    print_r($product);
?>
	</pre>

</div><?php // off categories container ?>
<?php include('sharedviews/footer.php'); ?>