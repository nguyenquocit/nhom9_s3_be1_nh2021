<?php

include "header.php"
?>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Products tab & slick -->
					<div class="col">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
                                    <?php
                                        if(isset($_GET['id'])):
                                        $id = $_GET['id'];
                                        //echo $id;
                                        $getProductById = $products->getProductById($id);
                                        foreach($getProductById as $value):
                                        ?>
										<!-- product -->
                                        <h3>PRODUCT DETAILS</h3>
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['image'] ?>" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#">Name : <?php echo $value['name'] ?></a></h3>
												<h4 class="product-price">Price : <?php echo number_format($value['price'])?> VND</h4>
                                                <h3 class="product-name"><a href="#">Manu ID : <?php echo $value['manu_id'] ?></a></h3>
                                                <h3 class="product-name"><a href="#">Type ID : <?php echo $value['type_id'] ?></a></h3>
                                                <h3 class="product-name"><a href="#">Description : <?php echo $value['descriotion'] ?></a></h3>
                                                <h3 class="product-name"><a href="#">Feature : <?php echo $value['feature'] ?></a></h3>
                                                <h3 class="product-name"><a href="#">Created at : <?php echo $value['created_at'] ?></a></h3>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->
                                        <?php 
                                        endforeach;
                                        endif;
                                         ?>
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
        <?php include "footer.html" ?>