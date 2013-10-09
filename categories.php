<?php 
$local = dirname(__FILE__);
include('sharedviews/header.php');
$cats = $HDstore->get_all_categories();
 ?>
<div class="container">
	<h2>Product Categories</h2>
	<ul class="categories-list row">
<?php
	foreach ($cats as $cat) {
		$catname = strtolower($cat['name']);
		$catname = preg_replace("/[\s_]/", "-", $catname);
		?>
			<li class="col-xs-6 col-sm-3 col-md-3 category-item">
				<a href="/store/category/<?php echo $catname; ?>/" class="category-link">
					<div class="img-wrap">
						<img src="<?php echo $cat['thumbnailUrl']; ?>" alt="<?php echo $cat['name']; ?>" />
					</div>
					<div class="title-wrap">
						<h2><?php echo $cat['name']; ?></h2>
					</div>
				</a>
			</li>
		<?php
	}
?>
	</ul>
</div><?php // off categories container ?>
<?php include('sharedviews/footer.php'); ?>