<?php $newProducts = $HDstore->get_random_products(4); ?>

<section class="new-arivals col-xs-12">
	<div class="row inner-row">
		<h3 class="col-xs-12">New Arivals</h3>
		<?php 
		if (isset($newProducts)) {
            foreach ($newProducts as $product) { 
                setlocale(LC_MONETARY, 'en_US');
                $price = money_format('%i', $product['price']);
                $price = explode('USD', $price);
                $price = $price[1]; ?>
              	<div class="col-xs-6 col-sm-3 col-md-3 prod-wrap">
                	<div class="thumbnail">
                  		<div class="img-wrap">
                    		<img src="<?php echo $product['imageUrl']; ?>" alt="<?php echo $product['name']; ?>" />
                  		</div>
                  		<div class="caption">
                    		<div class="title">
                      			<h3><?php echo $product['name']; ?></h3>
                    		</div>
                    		<p class="item-num">Item ID: <?php echo $product['sku']; ?></p>
                    		<p class="price">$<?php echo $price; ?></p>
                    		<p>
								<a href="/store/#!/~/product/id=<?php echo $product['id']; ?>" class="btn btn-primary">
									View Item &rarr;
								</a>
                    		</p>
                  		</div>
                	</div>
              	</div>
          	<?php 
          	}; // end foreach
        }else{
          echo "<p>No Featured Products at this time.</p>";
        } // off IF data isset
          ?>
	</div>
</section>