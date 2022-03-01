<?php
  session_start();

  require 'components/connect.php';

  $get_id = $_GET['updateIdAd'];

  $errors = array();


  
  $new_sql = "SELECT * FROM product_ads WHERE id = '$get_id'";
  $result = mysqli_query($conn, $new_sql);
  $row = mysqli_fetch_assoc($result);

  $old_title = $row['title'];
  $old_number = $row['number'];
  $old_wa_status = isset($_POST['wa_status']);
  $old_category = $row['category'];
  $old_location = $row['location'];
  $old_price = $row['price'];
  $old_description = $row['description'];
  


  //Add Product
    if(isset($_POST['update-ad'])){
      $title = $_POST['title'];
      $number = $_POST['number'];
      $wa_status = isset($_POST['wa_status']);
      $category = $_POST['category'];
      $location = $_POST['location'];
      $images = $_FILES['file'];
      $price = $_POST['price'];
      $description = $_POST['description'];
      
  
      //getting file name
      $file_name =  $_FILES['file']['name'];
      $tmp_name = $_FILES['file']['tmp_name'];
  
      if(empty($title)){
        $errors['title'] = "Title Required";
      }
      if(empty($number)){
        $errors['number'] = "Number Required";
      }
      if(empty($category)){
        $errors['category'] = "Category Required";
      }
      if(count($images)==1){
        $errors['file'] = "Image Required";
      }
      if(empty($location)){
        $errors['location'] = "Location Required";
      }
      if(empty($price)){
        $errors['price'] = "Price Required";
      }
      if(empty($category)){
        $errors['title'] = "Category Required";
      }
  
      $num_of_imgs = count($file_name);
      for ($i=0; $i < $num_of_imgs; $i++){
        $image_name = $file_name[$i];
        $tmp_n = $tmp_name[$i];
  
        if(count($errors)===0){
          $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);
          $img_ex_lc = strtolower($img_ex);
          $allowed_exs = array('jpg', 'jpeg', 'png');
          if (in_array($img_ex_lc, $allowed_exs)){
            $new_img_name = uniqid('IMG-', true).'.'.$img_ex_lc;
            $img_upload_path = 'user_image/'.$new_img_name;
    
            $sql = "UPDATE product_ads SET id=$get_id, title='$title', number='$number', wa_status='$wa_status', category = '$category', 
              location = '$location', images = '$new_img_name', price = '$price', description = '$description' WHERE id=$get_id";
            $query = mysqli_query($conn, $sql);
            move_uploaded_file($tmp_n, $img_upload_path);
  
            if($query){
              echo "<script>alert('Your Ad Has Been Updated')</script>";
              echo "<script> window.location = 'update_ads.php'</script>";
            }
            else{
              $errors['upload_erroe'] = "Ads not posted try again";
            }
            

          }
          else{
            $errors['upload'] = "You can't upload this type of file";
          }
    
        }
     
      }
  
  
        
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Update Ad Page</title>
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
                <h2 style="font-weight: 500;" class=" text-dark">Update Your Ad</h2>
                <div class="d-flex justify-content-between align-items-center">
                  <h6 style="font-size: 16px;" class="font-weight-light">Enter New Info of your Ad</h6>
                  
                </div>

                <form class="pt-3" method="POST" autocomplete="off" enctype="multipart/form-data" > 
                  <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                      <?php foreach ($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                      <?php endforeach; ?>
                    </div>
                  <?php endif; ?>
                  
                  <div class="form-group">
                    <label for="exampleInputUsername1">Title</label>
                    <input type="text" value="<?php echo $old_title;?>" class="form-control form-control-lg" id="exampleInputUsername1"
                      placeholder="Product name should be short and precise" name="title">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNumber">Number</label>
                    <input type="text" class="form-control form-control-lg" id="exampleInputNumber"
                      placeholder="Example = 2376*********"  name="number">
                    <div class="px-1">
                      <div class="form-check">
                        <label class="form-check-label text-muted">
                          <input type="checkbox" name="wa_status" value="Yes. I'm on WhatsApp" class="form-check-input"> Are You On WhatsApp</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Category</label>
                    <select  name="category" class="form-control form-control-lg" style="color: grey; padding: 10px 9px;"
                      id="exampleFormControlSelect1">
                      <option  value="">Select Category</option>
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
                      <option value="child_fashion">Children Fashion</option>
                      <option value="bags_shoes">Bags & Shoes</option>
                      <option value="fashion_access">Fashion Accessories</option>
                      <!-----------Category Four > Leisure---------------->
                      <option style="font-weight: 600; font-size: 15px; color: #6990F2;" value="" disabled>Leisure</option>
                      <option value="toys_film_books">Toys, Film, Books</option>
                      <option value="sport_fitness">Sport & Fitness</option>
                      <option value="music_instruments">Music Instruments</option>
                      <option value="art_manga">Art & Manga</option>
                      <option value="voyage_tourism">Voyage & Tourism</option>
                      <!-----------Category Five > Dress and Fashion---------------->
                      <option style="font-weight: 600; font-size: 15px; color: #6990F2;" value="" disabled>House Stuffs</option>
                      <option value="decoration">Decoration</option>
                      <option value="house_pets">House Pets</option>
                      <option value="home_appliance">Home Appliance</option>
                      <option value="furnitures">Furnitures</option>
                      <option value="home_access">Home Accessories</option>
                    </select>
                  </div>

                  
                  <div class="form-group">
                    <label for="">Images</label>
                    <div class="container_upload">
                      <input  type="file" id="file-input" name="file[]" accept="image/png, image/jpeg, image/jpg" onchange="preview()">
                      <div class="main_box">
                          <label for="file-input">
                              <img  src="system_image/2180658_add_add photo_upload_plus_icon.png" alt="">
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
                    <select value="<?php echo $old_location;?>" name="location" class="form-control form-control-lg" style="color: grey; padding: 10px 9px;"
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

                      <input value="<?php echo $old_price;?>" name="price" type="number" inputmode="" placeholder="Price" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea name="description" placeholder="<?php echo $old_description;?>" class="form-control" id="" rows="3"></textarea>
                  </div>

                  <button class="btn btn-sm btn-danger restart_form" type="reset">Reset Form</button>

                  <div class="mt-4">
                    <button type="submit" name="update-ad" class="w-100 btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Update</button>
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
  <?php
    require_once('components/footer.php');
  ?>
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