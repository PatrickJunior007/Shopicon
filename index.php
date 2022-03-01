<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Posting your product and let it reach and wide variety of customers.">

  <!-- Facebook -->
  <meta property="og:url" content="https://shopiflex.000webhostapp.com/">
  <meta property="og:title" content="Home Page: Shopicon">
  <meta property="og:description" content="Posting your product and let it reach and wide variety of customers.">
  <meta property="og:type" content="article">
  <meta property="og:image" content="https://shopiflex.000webhostapp.com/system_image/shopiconlogo.jpg">
  <meta property="og:image:width" content="1000">
  <meta property="og:image:height" content="500">

  
  <title>Home Page: Shopicon</title>
  <link rel="stylesheet" href="./css/all.css" />

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <link rel="stylesheet"  href="main_style/main.css">
  <link rel="stylesheet" href="bootstrapv5/css/bootstrap.min.css" />
  <link rel="icon" href="system_image/shop2.png" sizes="16x16" type="image/png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  
  <style>
    *,
    a {
      text-decoration: none;
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="./main_style/carousel.css" rel="stylesheet">
  <link rel="stylesheet" href="main_style/block.css"/>
</head>

<body>
  <?php
    require_once('components/header.php');
  ?>

  <!--------Main------------->
  <div class="page_wrapper">
    <div id="myCarousel" class="carousel slide carousel_slider" style="z-index: 1;" data-bs-ride="carousel">
      <div id="carousel-indicators" class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div style="background-image: url(system_image/6029956.jpg); " class="first_banner">
            <div class="image_container pb-0 mb-0">
            </div>
          </div>

          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Sign Up For Free</h1>
              <p>Sign up for free in order to post your ads and product in the platform</p>
              <p><a class="btn btn-lg btn-primary" href="register.php">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div style="background-image: url(system_image/PlWDsd.jpg); " class="first_banner">
            <div class="image_container">
            </div>
          </div>
          <div class="container">
            <div class="carousel-caption">
              <h1>Get Premium </h1>
              <p>Add the premium pack to your ads so they can be found in premium page for sometime</p>
              <p><a class="btn btn-lg btn-primary" href="premium.php">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div style="background-image: url(system_image/6029974.jpg); " class="first_banner">
            <div class="image_container">
            </div>
          </div>
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Premium Advantage</h1>
              <p>Buy Premium pack so your Ads can be dinstinguished from other Ads </p>
              <p><a class="btn btn-lg btn-primary" href="premium.php">Choose Plan</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="popular_category">
      <div class="container">
        <div class="popular_text">
 
          <h3 class="text-center popular_heading" style="margin-top: -30px;">Explore Our Most Visited Categories</h3>
          <div style="display: flex; justify-content: center;">
            <div style="
              height: 2px;
              width: 100px;
              background-color: #0E5092;
              border-radius: 10px;

              ">
            </div>
          </div>

          <div class="p_text my-3">
            <p>Browse into our most visited category bu the users all over the world in our website. You can also sign in 
              for free and post your product or get premium to get advantages offered by our site.</p>
          </div>

          <div class="category_display">
            <div class="row d-flex justify-content-center">
              <div class="col-md-4">
                <div class="card box_category shadow-sm">
                  <a style="text-decoration: none; color: inherit;" href="video_games.php">
                    <div class="card-body d-flex justify-content-center align-items-center">
                      <div class="d-block review_content text-center">
                        <div style="padding: 40px 35px;" class="rounded_circle">
                          <i  class="fas fa-gamepad"></i>
                        </div>
                        <h4 class="">Games</h4>
                        <p class="">20+ Ads Posted</p>
                      </div>
                    </div>
                  </a>

                </div>
              </div>
              <div class="col-md-4">
                <div id="premium_card" class="card box_category shadow-sm ">
                  <a style="text-decoration: none; color: inherit;" href="premium_page.php">
                    <div class="card-body d-flex justify-content-center align-items-center">
                      <div class="d-block review_content text-center">
                        <div class="rounded_circle rounded_premium" style="">
                          <i class="fas fa-gift"></i>
                        </div>
                        <h4 class="">Premium</h4>
                        <p class="">10+ Ads Posted</p>
                      </div>
                    </div>
                  </a>

                </div>
              </div>
              <div class="col-md-4">
                <div class="card box_category shadow-sm">
                  <a style="text-decoration: none; color: inherit;" href="vehicles.php">
                    <div class="card-body d-flex justify-content-center align-items-center">
                      <div class="d-block review_content text-center">
                        <div class="rounded_circle">
                          <i class="fas fa-car"></i>
                        </div>
                        <h4 class="">Vehicles</h4>
                        <p class="">100+ Ads Posted</p>
                      </div>
                    </div>
                  </a>

                </div>
              </div>

            </div>
            <div class="d-flex justify-content-center">
              <a style="background-color: #0E5092;" class="btn btn_product text-white btn-lg" href="category.php">View All Products</a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!----Web Reiew----->
    <div class="review_main">
      <div class="review_bg">
        <div class="container h-100 d-flex align-items-center">

          <div class="row w-100 mx-auto">
            <div id="col_review" class="col-6 col-md-3 d-flex justify-content-center align-items-center ">
              <div class="d-block review_content text-center">
                <i class="fas fa-user-friends"></i>
                <h5 class="pt-2">2500+ Sellers</h5>
                <p class="">Join the Community</p>
              </div>

            </div>
            <div id="col_review" class="col-6 col-md-3 d-flex justify-content-center align-items-center ">
              <div class="d-block review_content text-center">
                <i class="far fa-star"></i>
                <h5 class="pt-2">9+ Categories</h5>
                <p class="">Request for more</p>
              </div>
            </div>
            <div id="col_review" class="col-6 col-md-3 d-flex justify-content-center align-items-center ">
              <div class="d-block review_content text-center">
                <i class="far fa-smile"></i>
                <h5 class="pt-2">7000+ Customers</h5>
                <p class="">Buy From Community</p>
              </div>

            </div>
            <div id="col_review" class="col-6 col-md-3 d-flex justify-content-center align-items-center ">
              <div class="d-block review_content text-center">
                <i class="far fa-comments"></i>
                <h5 class="pt-2">5000+ Products</h5>
                <p class="">Possibility to Bargain</p>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="container  py-2" id="hanging-icons">
      <h3 class="text-center popular_heading pt-4">Explore Our Features</h3>
      <div style="display: flex; justify-content: center;">
        <div style="
          height: 2px;
          width: 100px;
          background-color: #0E5092;
          border-radius: 10px;
          margin-bottom: 5px;
          ">
        </div>
      </div>
      <div class="row px-1 g-4 py-4 row-cols-1 row-cols-lg-3">
        <div class="col  d-flex align-items-start mb-2">
          <div class="rounded-circle text-dark flex-shrink-0 me-3" style="background-color: #0E5092; border: 1px solid #0E5092;">
            <i style="font-size: 30px; padding: 20px 24px; " class="fas fa-map-marker-alt text-white"></i>
          </div>
          <div>
            <h3>Find Product Nearer</h3>
            <p>This website offer you the possiblity to find and search product or ads that are nearer to where you live or your region thus facilitating your research and enjoy.</p>
            <a href="category.php" class="btn text-white" style="background-color: #0E5092;">
              Browse Ads 
            </a>
          </div>
        </div>
        <div class="col d-flex align-items-start mb-2">
          <div class="rounded-circle  text-dark flex-shrink-0 me-3"  style="background-color: #0E5092; border: 1px solid #0E5092;">
            <i style="font-size: 30px; padding: 20px;" class="fas fa-search text-white"></i>
          </div>
          <div>
            <h3>Search By Category</h3>
            <p>This website offer you a Search Bar in order to facilate your research in product and more. Also Product that are certified are distinguishable from the others. </p>
            <a href="#" class="btn text-white" style="background-color: #0E5092;">
              Search Ads
            </a>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <div class="rounded-circle text-dark flex-shrink-0 me-3 mb-2"   style="background-color: #0E5092; border: 1px solid #0E5092;">
            <i style="font-size: 30px; padding: 20px;" class="far fa-envelope text-white"></i>
          </div>
          <div>
            <h3>Chat And Bargain</h3>
            <p>This website offer you the possiblity to have your sellers number or details and bargain to a better price with privately in his email, phone or WhatsApp account.</p>
            <a href="category.php" class="btn text-white" style="background-color: #0E5092;">
              Browse Ads
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--------Main End------------->

  <!----------Footer-------------->
  <?php
    require_once('components/footer.php');
  ?>
  <!----------Footer End-------------->


  <!------------------Go to Top Button---------- -->
  <a class="gotop123" href="#bool"><i style="color: white;" class="fas fa-arrow-up"></i></a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>

  <script src="js/script.js"></script>
  <script src="bootstrapv5/js/bootstrap.bundle.min.js"></script>
</body>

</html>