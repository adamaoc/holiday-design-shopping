<?php 
$local = dirname(__FILE__);
include('sharedviews/header.php');
$cats = $HDstore->get_all_categories();
$products = $HDstore->get_all_products();
 ?>
<div class="container">
	<h2>Testing API</h2>
	<pre>
<?php
	// echo "All Categories";
	// print_r($cats);
	echo "All Products";
	print_r($products);
?>
	</pre>

</div><?php // off categories container ?>
<?php include('sharedviews/footer.php'); ?>