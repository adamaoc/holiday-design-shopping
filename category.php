<?php 
$local = dirname(__FILE__);
include('sharedviews/header.php');
$category_id = $_GET['id'];
$category = $HDstore->get_products_by_category_id($category_id);
$category_title = "Unset";

if ($category_id == 6515126) {
	$category_title = "Thanksgiving and Fall";
}elseif ($category_id == 6634210) {
	$category_title = "Halloween";
}elseif ($category_id == 6515165) {
	$category_title = "Floral";
}elseif ($category_id == 6515127) {
	$category_title = "General Deals";
}elseif ($category_id == 6515114) {
	$category_title = "Christmas";
}
 ?>
<div class="container">
	<h2><?php echo $category_title; ?> Products</h2>
	<ul class="products-list">

<?php 
	foreach ($category as $product) {
		$url = explode(".com", $product['url']);
		$url = $url[1];
		setlocale(LC_MONETARY, 'en_US');
        $price = money_format('%i', $product['price']);
        $price = explode('USD', $price);
        $price = $price[1];

		if (isset($product['enabled'])) {
		?>
		<li class="row product-item">
			<a href="/store<?php echo $url; ?>">
				<div class="col-xs-12 col-sm-3 prod-img">
					<img src="<?php echo $product['imageUrl']; ?>" alt="<?php $product['name'] ?>" />
				</div>
				<div class="col-xs-12 col-sm-9 prod-details">
					<h3><?php echo $product['name']; ?></h3>
					<p class="sku-num">SKU# <?php echo $product['sku']; ?></p>
					<dl class="price-breakdown">
						<dt class="price-label our-price">Our Price: </dt>
						<dd class="price-output our-price">$<?php echo $price; ?></dd>
						<dt class="price-label">Suggested Retail: </dt>
						<dd class="price-output">$<?php echo $product['compareToPrice']; ?></dd>
					</dl>
					<div><?php echo $product['description']; ?></div>
				</div>
			</a>
		</li>
	<?php 
		} // off is product enabled
	} // off foreach
?>

	</ul>
</div><?php // off categories container ?>
<?php include('sharedviews/footer.php'); ?>