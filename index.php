<?php include('sharedviews/header.php'); ?>
  <!-- Begin page content -->
  <div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2>Featured Products</h2>
				<div class="row">
          <?php 
          if (isset($data)) {
            foreach ($data as $product) { 
              if ($product->enabled == true) { ?>
              <div class="col-xs-12 col-sm-6 col-md-3" style="padding-bottom: 20px;">
                <div class="thumbnail">
                  <div class="img-wrap">
                    <img src="/img/pid<?php echo $product->sku; ?>.jpg" alt="<?php echo $product->name; ?>" />
                  </div>
                  <div class="caption">
                    <div class="title">
                      <h3><?php echo $product->name; ?></h3>
                    </div>
                    <p class="item-num">Item ID: <?php echo $product->sku; ?></p>
                    <p class="price">$<?php echo $product->price; ?>.00</p>
                    <p>
                      <a href="/store/#!/~/product/id=<?php echo $product->id; ?>" class="btn btn-primary">
                        View Item &rarr;
                      </a>
                    </p>
                  </div>
                </div>
              </div>
          <?php 
            } // end IF
          } // end foreach
        }// off IF data isset
          ?>
			</div><?php // off product row ?>
		</div><?php // off col 12 ?>
  </div><?php // off row ?>
		
		<div class="row">
			<div class="jumbotron">
				<div class="container">
					<h3>Welcome to Holiday Design</h3>
					<p>At Holiday Design we specialize in year around holiday or seasonal decorations and gifts. We pride ourselves on being able to offer these at great prices with a versatile online experience. We are adding inventory all the time but it doesn't last long as most of our products are one and done deals! So get started shopping today and check out our interactive store!</p>
					<p><a class="btn btn-primary btn-lg" href="/store/">Go Shopping &rarr;</a></p>
				</div><?php // off jumbo container ?>
			</div><?php // off jumbotron ?>
		</div><?php // off jumbo row ?>

	</div><?php // off index container ?>
 <?php include('sharedviews/footer.php'); ?>
