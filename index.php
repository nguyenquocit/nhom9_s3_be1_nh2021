<?php

include "header.php"
?>


		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Laptop<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Accessories<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop02.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Cameras<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
								<?php
								foreach($getAllManu as $value):
								?>
								<li><a href="products.php?manu_id=<?php echo $value['manu_id'] ?>">
								<?php echo $value['manu_name'] ?> </a></li>
								<?php endforeach ?>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<?php
										foreach($getallproduct as $value):
										 ?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['image'] ?>" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#"><?php echo $value['name'] ?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price'])?> VND</h4>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<form action="details.php" method="GET">
													<a href="details.php?id=<?php echo $value['id'] ?>">PRODUCT DETAILS</a>
													</form>
												</div>
											</div>
											<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="addcart.php?id=<?php echo $value['id'] ?>">ADD TO CART</a></button>
											</div>
										</div>
										<!-- /product -->
										<?php endforeach ?>
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn" href="#">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Featured Products</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
								<?php
								foreach($getAllManu as $value):
								?>
								<li><a href="products.php?manu_id=<?php echo $value['manu_id'] ?>">
								<?php echo $value['manu_name'] ?> </a></li>
								<?php endforeach ?>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<?php foreach($getFeature as $value): ?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['image'] ?> " alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name" name="name"><a href="#"><?php echo $value['name'] ?></a></h3>
												<h4 class="product-price" name="price"><?php echo number_format($value['price'])?> VND</h4>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<form action="details.php" method="GET">
													<a href="details.php?id=<?php echo $value['id'] ?>">PRODUCT DETAILS</a>
													</form>
												</div>
											</div>
											<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="addcart.php?id=<?php echo $value['id'] ?>">ADD TO CART</a></button>
											</div>
										</div>
										<!-- /product -->
										<?php endforeach ?>
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<!-- product widget -->
								<?php 
								$getproductnofea = $products->getNoFeaturedProducts();
								foreach($getproductnofea as $value): 
								?>
								<div class="product-widget">
									<div class="product-img">
									<img src="./img/<?php echo $value['image'] ?> " alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price'] - 50000) ?>VNĐ <del class="product-old-price"><?php echo number_format($value['price'])?>VNĐ</del></h4>
									</div>
								</div>
								<?php endforeach ?>
								<!-- /product widget -->
							</div>
							<div>
								<!-- product widget -->
								<?php 
								$getproductnofea = $products->getNoFeaturedProducts();
								foreach($getproductnofea as $value): 
								?>
								<div class="product-widget">
									<div class="product-img">
									<img src="./img/<?php echo $value['image'] ?> " alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price'] - 50000) ?>VNĐ <del class="product-old-price"><?php echo number_format($value['price'])?>VNĐ</del></h4>
									</div>
								</div>
								<?php endforeach ?>
								<!-- /product widget -->
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<!-- product widget -->
								<?php 
								$getproductnofea = $products->getNoFeaturedProducts();
								foreach($getproductnofea as $value): 
								?>
								<div class="product-widget">
									<div class="product-img">
									<img src="./img/<?php echo $value['image'] ?> " alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price'] - 50000) ?>VNĐ <del class="product-old-price"><?php echo number_format($value['price'])?>VNĐ</del></h4>
									</div>
								</div>
								<?php endforeach ?>
								<!-- /product widget -->
							</div>
							<div>
								<!-- product widget -->
								<?php 
								$getproductnofea = $products->getNoFeaturedProducts();
								foreach($getproductnofea as $value): 
								?>
								<div class="product-widget">
									<div class="product-img">
									<img src="./img/<?php echo $value['image'] ?> " alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price'] - 50000) ?>VNĐ <del class="product-old-price"><?php echo number_format($value['price'])?>VNĐ</del></h4>
									</div>
								</div>
								<?php endforeach ?>
								<!-- /product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<!-- product widget -->
								<?php 
								$getproductnofea = $products->getNoFeaturedProducts();
								foreach($getproductnofea as $value): 
								?>
								<div class="product-widget">
									<div class="product-img">
									<img src="./img/<?php echo $value['image'] ?> " alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price'] - 50000) ?>VNĐ <del class="product-old-price"><?php echo number_format($value['price'])?>VNĐ</del></h4>
									</div>
								</div>
								<?php endforeach ?>
								<!-- /product widget -->
							</div>
							<div>
								<!-- product widget -->
								<?php 
								$getproductnofea = $products->getNoFeaturedProducts();
								foreach($getproductnofea as $value): 
								?>
								<div class="product-widget">
									<div class="product-img">
									<img src="./img/<?php echo $value['image'] ?> " alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price'] - 50000) ?>VNĐ <del class="product-old-price"><?php echo number_format($value['price'])?>VNĐ</del></h4>
									</div>
								</div>
								<?php endforeach ?>
								<!-- /product widget -->
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
<?php
include "footer.html"
?>
		
