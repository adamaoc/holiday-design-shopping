<?php 
  include('sharedviews/header.php'); 
  $products = $HDstore->get_random_products(8);
  
?>
  <!-- Begin page content -->
  <div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2>404 Not Found</h2>
			</div>
			<div class="col-xs-12 col-sm-6 col-sm-offset-3">
				<p>
					We're sorry. Looks like we've messed something up here. Maybe you'd like to start over at the <a href="/">Home Page</a>. Or maybe you want to get right into <a href="/store/categories/">shopping</a>!
				</p>
			</div>
		</div>
	</div><?php // off index container ?>
 <?php include('sharedviews/footer.php'); ?>