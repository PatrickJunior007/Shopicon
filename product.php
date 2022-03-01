<?php 
  session_start();
	require_once('components/connect.php');
	$get_product = $_GET['product_review'];
	$sql = "SELECT * FROM product_ads WHERE title = '$get_product'";
	$query = mysqli_query($conn, $sql);
	if($query){
		$row = mysqli_fetch_assoc($query);
		$image = $row['images'];
		$title = $row['title'];
		
		$category = $row['category'];
		$location = $row['location'];
		$price = $row['price'];
		$description = $row['description'];
		$number = $row['number'];
		$email= $row['user_email'];
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Product</title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="Little Closet template" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="bootstrapv5/css/bootstrap.min.css" />
	<link rel="stylesheet" href="./css/all.css" />
	<link rel="stylesheet" type="text/css" href="plugins/flexslider/flexslider.css" />
	<link rel="stylesheet" type="text/css" href="styles/product.css" />
	<link rel="stylesheet" type="text/css" href="styles/product_responsive.css" />
	<link rel="stylesheet" href="main_style/product_review.css" />
	<link rel="stylesheet" href="main_style/block.css" />

	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<style>
		*,
		a {
			text-decoration: none;
		}

		,
		.header_wrapper #product_review_class {
			position: relative;
			top: -7px;
		}
	</style>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
	<?php
    require_once('components/header.php');
  ?>

	<div class="page_wrapper">
		<div class="super_container">
			<!-- Header -->

			<div class="super_container_inner">
				<div class="super_overlay"></div>

				<div
					style="background-image: url(user_image/<?php echo $image ?>); background-repeat: no-repeat;  background-size: cover; background-position: center;"
					class="first_banner_1">
					<div class="image_container_1">
						<div class="text_area">
							<h1 class="text-heading" style="">Product Review</h1>
						</div>
					</div>
				</div>

				<!-- Product -->

				<div class="product pt-5 mb-4">
					<div class="container pt-3">
						<div class="row">
							<!-- Product Image -->
							<div class="col-lg-6">
								<div class="product_image_slider_container">
									<div id="slider" class="flexslider">
										<ul class="slides">
											<li>
												<div><img src="user_image/<?php echo $image ?>" /></div>
											</li>
										</ul>
									</div>

									<!---<div class="carousel_container">
										<div id="carousel" class="flexslider">
											<ul class="slides">
												<li>
													<div><img src="user_image/<?php echo $image?>" /></div>
												</li>

											</ul>
										</div>

									</div>-->
								</div>
							</div>

							<!-- Product Info -->
							<div class="col-lg-6 product_col">
								<div class="product_info">
									<div class="product_name">
										<?php echo $title?>
									</div>
									<div class="product_category">
										In <a href="#">
											<?php echo $category?>
										</a>
									</div>
									<div class="
                        product_rating_container
                        d-flex
                        flex-row
                        align-items-center
                        justify-content-start
												
                      ">
										<div class="product_reviews   mx-0">Found in</div>
										<div class="product_reviews_link">
											<a href="#">
												<?php echo $location?>
											</a>
										</div>
									</div>
									<div class="product_price">
										<?php echo $price?>F<span>cfa</span>
									</div>
									<div class="product_text">
										<p style="font-size: 25px; font-weight: 600; margin-bottom: -2px; margin-top: -15px;">Description:
										</p>
										<p>
											<?php echo $description?>
										</p>
									</div>
									<div class="product_buttons">
										<div class="
                          text-right
                          d-flex
                          flex-row
                          align-items-start
                          justify-content-start
                        ">

											<div class="
                            product_button product_fav
                            text-center
                            d-flex
                            flex-column
                            align-items-center
                            justify-content-center
                          ">
												<div>
													<div>
														<a style="color: inherit;" href="tel:<?php echo $number?>">
															<i style="font-size: 35px; color: rgb(0, 255, 128);" class="svg fas fa-phone"></i>
														</a>


													</div>
												</div>
											</div>
											<div class="
                            product_button product_fav
                            text-center
                            d-flex
                            flex-column
                            align-items-center
                            justify-content-center
                          ">
												<div>
													<div>
														<a style="color: inherit;" href="mailto:<?php echo $email?>?subject=SHOPICON Website Offers&body=Hey I'm interested in your product <?php echo $title?> from the SHOPICON Website can you tell me more about it?">
															<i style="font-size: 35px; color: red;" class="svg far fa-envelope"></i>


														</a>
														<div>+</div>
													</div>
												</div>
											</div>
											<div class="
                            product_button product_fav
                            text-center
                            d-flex
                            flex-column
                            align-items-center
                            justify-content-center
                          ">
												<div>
													<div>
														<a style="color: inherit;"
															href="https://wa.me/<?php echo $number?>?text=Hey I'm interested in your product <?php echo $title?> from the SHOPICON Website can you tell me more about it?">
															<i style="font-size: 35px; color: green;" class="svg fab fa-whatsapp"></i>
														</a>

														<div>+</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Boxes -->

				<!---<div class="boxes">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<div class="
                      box
                      d-flex
                      flex-row
                      align-items-center
                      justify-content-start
                    ">
									<div class="mt-auto">
										<div class="box_image">
											<img src="images/boxes_1.png" alt="" />
										</div>
									</div>
									<div class="box_content">
										<div class="box_title">Size Guide</div>
										<div class="box_text">
											Phasellus sit amet nunc eros sed nec tellus.
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 box_col">
								<div class="
                      box
                      d-flex
                      flex-row
                      align-items-center
                      justify-content-start
                    ">
									<div class="mt-auto">
										<div class="box_image">
											<img src="images/boxes_2.png" alt="" />
										</div>
									</div>
									<div class="box_content">
										<div class="box_title">Shipping</div>
										<div class="box_text">
											Phasellus sit amet nunc eros sed nec tellus.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>--->
			</div>
		</div>
	</div>

	<!----------Footer-------------->
  <?php
    require_once('components/footer.php');
  ?>
	  <a class="gotop123" href="#bool"><i style="color: white;" class="fas fa-arrow-up"></i></a>
	<!----------Footer End-------------->

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
		integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
		crossorigin="anonymous"></script>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="bootstrapv5/popper.js"></script>
	<script src="bootstrapv5/js/bootstrap.bundle.min.js"></script>
	<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/flexslider/jquery.flexslider-min.js"></script>
	<script src="js/product.js"></script>
	<script src="js/script.js"></script>
</body>

</html>