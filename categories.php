<?php 
$local = dirname(__FILE__);
include('sharedviews/header.php');
$cats = $HDstore->get_all_categories();
// [0] => Array
//         (
//             [id] => 6634210
//             [thumbnailUrl] => http://images-cdn.ecwid.com/images/2557029/168252263.jpg
//             [originalImageUrl] => http://images-cdn.ecwid.com/images/2557029/168252263.jpg
//             [name] => Halloween Decorations
//             [url] => http://holiday-design.com#!/~/category/id=6634210
//             [description] => 
//             [productCount] => 9
//         )

 ?>
<div class="container">
	<h2>Product Categories</h2>
	<ul class="categories-list row">
<?php
	foreach ($cats as $cat) {
		$catURL = $cat['url'];
		$catURL = explode('.com', $catURL);
		$catURL = $catURL[1];
		?>
			<li class="col-xs-6 col-sm-3 col-md-3 category-item">
				<a href="/store/<?php echo $catURL; ?>" class="category-link">
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