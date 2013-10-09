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
}
 ?>
<div class="container">
	<h2><?php echo $category_title; ?> Products</h2>
	<ul class="products-list">

<?php 
	foreach ($category as $product) {
		if (isset($product['enabled'])) {
		?>
		<li class="row">
			<a href="/store/<?php echo $product['url']; ?>">
				<div class="col-xs-12 col-sm-3">
					<img src="<?php echo $product['thumbnailUrl']; ?>" alt="<?php $product['name'] ?>" />
				</div>
				<div class="col-xs-12 col-sm-9">
					<h3><?php echo $product['name']; ?></h3>
					<p>SKU# <?php echo $product['sku']; ?></p>
					<dl>
						<dt>Price: </dt>
						<dd><?php echo $product['price']; ?></dd>
						<dt>Retail: </dt>
						<dd><?php echo $product['compareToPrice']; ?></dd>
					</dl>
					<p><?php echo $product['description']; ?></p>
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