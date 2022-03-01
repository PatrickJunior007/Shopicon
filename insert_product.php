<?php 
  require_once 'components/registration.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./css/all.css" />

  <link rel="stylesheet" href="main_style/block.css" />
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <link rel="stylesheet" href="main_style/main.css">
  <link rel="stylesheet" href="bootstrapv5/css/bootstrap.min.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="main_style/registering.css">
  <link rel="stylesheet" href="main_style/insert.css">

  <style>
    *,
    a {
      text-decoration: none;
    }

    i {
      color: white;
    }

    .form-group input::placeholder,
    #exampleFormControlSelect1 {
      font-size: 14px;
    }
    .form-group input::-webkit-inner-spin-button{
      -webkit-appearance: none;
    }
    .form-group input[type=number]{
      -moz-appearance: textfield;
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="./main_style/carousel.css" rel="stylesheet">
</head>

<body style="background: rgb(248, 248, 248);">
  <?php
    
    require_once('components/header.php');
  ?>


  <!--------Main------------->
  <div class="page_wrapper">
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper">
          <div class="row flex-grow px-md-3 px-md-3">
            <div class="col-lg-6 mx-auto">
              <div style="background-color: white;" class=" text-left p-sm-5 p-4 py-5 shadow-sm main_card" >
                <h2 style="font-weight: 500;" class=" text-dark">Your Ads</h2>
                <div class="d-flex justify-content-between align-items-center">
                  <h6 style="font-size: 16px;" class="font-weight-light">Enter Info of your Ad</h6>
                  
                </div>

                <form class="pt-3" method="POST" action="insert_product.php" enctype="multipart/form-data"> 
                  <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                      <?php foreach ($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                      <?php endforeach; ?>
                    </div>
                  <?php endif; ?>
                  
                  <div class="form-group">
                    <label for="exampleInputUsername1">Title</label>
                    <input type="text" value="<?php echo $title;?>" class="form-control form-control-lg" id="exampleInputUsername1"
                      placeholder="Product name should be short and price" name="title">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNumber">Number</label>
                    <input type="number" class="form-control form-control-lg" id="exampleInputNumber"
                      placeholder="Example = 2376********" name="number">
                    <div class="px-1">
                      <div class="form-check">
                        <label class="form-check-label text-muted">
                          <input type="checkbox" name="wa_status" value="Yes. I'm on WhatsApp" class="form-check-input"> Are You On WhatsApp</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Category</label>
                    <select name="category" class="form-control form-control-lg" style="color: grey; padding: 10px 9px;"
                      id="exampleFormControlSelect1">
                      <option value="">Select Category</option>
                      <!-----------Category One > Electronics---------------->
                      <option style="font-weight: 600; font-size: 15px; color: #6990F2;" value="" disabled>Electronics</option>
                      <option value="phone_tablet">Phone_&_Tablet</option>
                      <option value="computers">Computers</option>
                      <option value="tv_video">TV & Videos</option>
                      <option value="video_games">Video Games</option>
                      <option value="electronics_access">Electronics Accessories</option>
                      <!-----------Category Two > Vehicles---------------->
                      <option style="font-weight: 600; font-size: 15px; color: #6990F2;" value="" disabled>Vehicles</option>
                      <option value="vehicles">New Vehicles</option>
                      <option value="second_hand">Second Hand</option>
                      <option value="bicycles_bikes">Bicycles & Bikes</option>
                      <option value="other_vehicles">Other Vehicles</option>
                      <option value="vechicles_access">Vehicles Accessories</option>
                      <!-----------Category Three > Dress and Fashion---------------->
                      <option style="font-weight: 600; font-size: 15px; color: #6990F2;" value="" disabled>Dress and Fashion</option>
                      <option value="men_fashion">Men Fashion</option>
                      <option value="women_fashion">Women Fashion</option>
                      <option value="children_fashion">Children Fashion</option>
                      <option value="bags_shoes">Bags & Shoes</option>
                      <option value="fashion_access">Fashion Accessories</option>
                      <!-----------Category Four > Leisure---------------->
                      <option style="font-weight: 600; font-size: 15px; color: #6990F2;" value="" disabled>Leisure</option>
                      <option value="toys_film_books">Toys, Film, Books</option>
                      <option value="sport_fitness">Sport & Fitness</option>
                      <option value="music_instruments">Music Instruments</option>
                      <option value="art_manga">Art & Manga</option>
                      <option value="voyage_tourism">Voyage & Tourism</option>
                      <!-----------Category Five > House Stuff---------------->
                      <option style="font-weight: 600; font-size: 15px; color: #6990F2;" value="" disabled>House Stuffs</option>
                      <option value="decoration">Decoration</option>
                      <option value="house_pets">House Pets</option>
                      <option value="home_appliance">Home Appliance</option>
                      <option value="furnitures">Furnitures</option>
                      <option value="home_access">Other Accessories</option>
                    </select>
                  </div>

                  
                  <div class="form-group">
                    <label for="">Images</label>
                    <div class="container_upload">
                      <input type="file" id="file-input" name="file[]" accept="image/png, image/jpeg, image/jpg" onchange="preview()">
                      <div class="main_box">
                          <label for="file-input">
                              <img src="system_image/2180658_add_add photo_upload_plus_icon.png" alt="">
                          </label>
                          <div style="display: block; text-align: start;">
                              <p style="margin: 15px 0px 5px 0px; color: #6990F2; font-weight: 600;">Enter A Picture</p>
                              <p style="margin: 0px; text-align: left;" id="num-of-files">No Files Chosen</p>
                          </div>
              
                      </div>
                      <div id="images"></div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Location</label>
                    <select name="location" class="form-control form-control-lg" style="color: grey; padding: 10px 9px;"
                      id="exampleFormControlSelect1">
                      <option value="">Select Location</option>
                      <option value="Yaounde">Yaounde</option>
                      <option value="Douala">Douala</option>
                      <option value="Bamenda">Bamenda</option>
                      <option value="Garoua">Garoua</option>
                      <option value="Bertoua">Bertoua</option>
                      <option value="Maroua">Maroua</option>
                      <option value="Ebolowa">Ebolowa</option>
                      <option value="Buea">Buea</option>
                      <option value="Bafoussam">Bafoussam</option>
                      <option value="Ngaoundere">Ngaoundere</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="">Price</label>
                    <div class="input-group">
                      <div class="input-group-prepend ">
                        <div class="input-group-text text-secondary" style="padding: 10px;">FCFA</div>
                      </div>

                      <input name="price" value="<?php echo $price;?>" type="number" inputmode="" placeholder="Price" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea name="description" value="<?php echo $description;?>" placeholder="Ad description" class="form-control" id="" rows="3"></textarea>
                  </div>

                  <input type="hidden" name="useremail" value="<?php echo $_SESSION['email'];?>">
                  <input type="hidden" name="user" value="<?php echo $_SESSION['username'];?>">

                  
                  
                  

                  <button class="btn btn-sm btn-danger restart_form" type="reset">Reset Form</button>

                  <div class="mt-4">
                    <button type="submit" name="post-ad" class="w-100 btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">POST</button>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  
  <!--------Main End------------->

  <!----------Footer-------------->
  <div class="footer-container shadow-lg mt-5">
    <footer class=" px-md-5 pt-md-4">
      <div class="row">
        <!--<div class="col-12 col-md">
              <img class="mb-2" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="24" height="19">
              <small class="d-block mb-3 text-muted">&copy; 2017–2021</small>
            </div>--->
        <div class="col-6 col-md">
          <h5>About</h5>
          <img class="mb-2" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="24" height="19">
          <small class="d-block mb-3 text-muted">&copy; 2017–2021</small>
          <ul class="list-unstyled text-small">

            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
          </ul>
        </div>

        <div class="col-6 col-md">
          <form>
            <h5>Write A Request To Us</h5>
            <p>Request Category</p>
            <div class="w-100">
              <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
              <input id="newsletter1" type="text" class="form-control my-2" placeholder="Request">
              <button class="btn btn-primary" type="button">Send</button>
            </div>
          </form>
        </div>
      </div>


      <div class="d-flex justify-content-between py-4 pb-0 mb-0 my-4 border-top">
        <p>&copy; 2021 Company, Inc. All rights reserved.</p>
      </div>
    </footer>

  </div>
  <!----------Footer End-------------->


  <!------------------Go to Top Button---------- -->
  <a class="gotop123" href="#bool"><i style="color: white;" class="fas fa-arrow-up"></i></a>

  <script src="js/upload.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>

  <script src="js/script.js"></script>
  <script src="bootstrapv5/js/bootstrap.bundle.min.js"></script>
</body>

</html>