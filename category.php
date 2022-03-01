<?php 
  session_start();
  require_once('components/connect.php');
  require_once('components/functions.php');

  $sql_price = "SELECT max(price) FROM product_ads";
  $query_price = mysqli_query($conn, $sql_price);


  if(mysqli_num_rows($query_price)>0){
    while($row = mysqli_fetch_array($query_price)){
      $price_new = $row[0];
    }
  }

  /*--function posts($page_num){
    $Per_page = 10;
    if(isset($page_num)){
      $page_num = $page_num;
    }else{
      $page_num = 1;
    }

    $Page_Start = ($page_num-1) * $Per_page;
  }--*/


  
 
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
  <link rel="stylesheet" href="./main_style/categoring.css" />
  <link rel="stylesheet" href="bootstrapv5/css/bootstrap.min.css" />


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <style>
    *,
    a {
      text-decoration: none;
      color: currentColor;
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet" />
</head>

<body>
  <?php
    require_once('components/header.php');
  ?>

  <!--------Main------------->
  <div class="page_wrapper">
    <div style="background-image: url(system_image/unsplash39-1-of-2.jpg);" class="first_banner_1">
      <div class="image_container_1">
        <div class="text_area">
          <h1 class="text-heading" style="">All Category</h1>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <div style="align-self: center" class="card border-0 bg-light mt-2 d-flex p-1">
            <ol class="breadcrumb pt-2">
              <li class="breadcrumb-item">
                <a class="" style="font-size: 16px" href="index.php">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <a style="font-size: 16px" href="category.php">Category</a>
              </li>
            </ol>
          </div>
        </nav>
        <div class="row my-4">
          <div class="col-md-4">
            <div class="filter_box px-lg-4">

              <form autocomplete="off" method="POST" action="search_result.php">
                <div class="form-group search_1">
                  <div class="d-flex justify-content-between align-item-center">
                    <h4 class="text-secondary">Search</h4>
                    <button type="button" class="btn btn-warning btn-sm"> <a style="color: inherit;" href="category.php">Refresh Normal</a></button>
                  </div>
                  <div style="
                          height: 2px;
                          width: 50px;
                          background-color: grey;
                          border-radius: 10px;
                          margin-top: -3px;
                        "></div>
                  <div class="input-group mt-3">
                    <input type="search" class="form-control" placeholder="Search Product"
                      aria-label="Recipient's username" aria-describedby="basic-addon2" name="search_content"
                      required />
                    <div class="input-group-append">
                      <button class="btn btn btn-primary" type="submit" name="search" style="padding: 8px">
                        <i class="fas fa-search px-2"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </form>

              <form action="category.php" method="POST">
                <div class="form-group search_1">
                  <h4 class="text-secondary mt-4">Filter by Location</h4>
                  <div style="
                          height: 2px;
                          width: 50px;
                          background-color: grey;
                          border-radius: 10px;
                          margin-top: -3px;
                        "></div>
                  <div class="form-group mt-3 d-flex">
                    <select name="locationing" class="form-control form-control-sm" style="color: grey"
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
                    <div class="input-group-append">
                      <button name="location" class="btn btn btn-danger" type="submit" style="padding: 8px">
                        <i class="fas fa-map-marker-alt px-2"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </form>

              <form action="category.php" method="post">
                <div class="form-group filter_1">
                  <h4 class="text-secondary mt-4">Filter By Price</h4>
                  <div style="
                          height: 2px;
                          width: 60px;
                          background-color: grey;
                          border-radius: 10px;
                          margin-top: -3px;
                        "></div>
                  <div class="range_box d-flex mt-1">
                    <input style="width: 100%" class="custom-range" type="range" step="1000" min="0" name="range"
                      max="<?php echo $price_new?>" oninput="this.nextElementSibling.value = this.value" id="customRange1" />
                    <output class="text-secondary" style="font-weight: 500; font-size: 18px"><?php echo $price_new?></output>
                    <p class="text-secondary" style="font-weight: 500">
                      fcfa
                    </p>
                  </div>
                  <button type="submit" name="ranging" class="btn btn-primary px-5 mt-2 rounded">
                    Filter
                  </button>
                </div>
              </form>

              <?php
                require('components/accordion.php');
              ?>

            </div>
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="btn_sorting d-flex mb-2">
                <?php

                  //this is location
                  if(isset($_POST['location'])){
                    require_once('components/connect.php');
                    $location = $_POST['locationing'];
                    $loc_sql = "SELECT * FROM product_ads WHERE location = '$location'";
                    $result = mysqli_query($conn, $loc_sql);
  
                    $num_rows = mysqli_num_rows($result);
                    echo "<p class=\"\">Showing all $num_rows results</p>";
                    
                  }//this for range
                  elseif(isset($_POST['ranging'])){
                    $range = $_POST['range'];
                    $loc_sql = "SELECT * FROM product_ads WHERE price <= '$range'";
                    $result = mysqli_query($conn, $loc_sql);
  
                    $num_rows = mysqli_num_rows($result);
                    echo "<p class=\"\">Showing all $num_rows results</p>";
                  }
                  else{
                    $sql = "SELECT * FROM product_ads";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    if($row['title'] !== ''){
                      $num_rows = mysqli_num_rows($result);
                      echo "<p class=\"\">Showing all $num_rows results</p>";
                    }
                    else{
                      echo "<p class=\"\">Showing all $num_rows results</p>";
                      
                      
                    }

                  }





                ?>


                <div class="modal_query">
                  <p id="italic_p" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight" style="height: 40px; width: 100%">
                    <i class="fas fa-bars italic_i"></i>
                    <span class="italic_span">Filter</span>
                  </p>

                  <div style="z-index: 7000;" class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                      <h5 id="offcanvasRightLabel">Filter</h5>
                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                    </div>
                    <div class="px-4" style="margin-bottom: -10px">
                      <hr width="100%" style="margin-top: -8px" />
                    </div>

                    <div class="offcanvas-body">

                      <div class="mb-3">
                        <div class="filter_box1 px-1">

                          <form autocomplete="off" method="POST" action="search_result.php">
                            <div class="form-group search_1">
                              <div class="d-flex justify-content-between align-item-center">
                                <h4 class="text-secondary">Search</h4>
                                <button type="button" class="btn btn-warning btn-sm"> <a href="category.php"> Refresh</a></button>
                              </div>
                              
                              
                              <div style="
                                          height: 2px;
                                          width: 50px;
                                          background-color: grey;
                                          border-radius: 10px;
                                          margin-top: -3px;
                                        "></div>
                              <div class="input-group mt-3">
                                <input type="search" class="form-control" placeholder="Search Product"
                                  aria-label="Recipient's username" aria-describedby="basic-addon2"
                                  name="search_content" required />
                                <div class="input-group-append">
                                  <button class="btn btn btn-primary" type="submit" name="search" style="padding: 8px">
                                    <i class="fas fa-search px-2"></i>
                                  </button>
                                </div>
                              </div>
                            </div>
                          </form>

                          <form action="category.php" method="POST">
                            <div class="form-group search_1">
                              <h4 class="text-secondary mt-4">Filter by Location</h4>
                              <div style="
                          height: 2px;
                          width: 50px;
                          background-color: grey;
                          border-radius: 10px;
                          margin-top: -3px;
                        "></div>
                              <div class="form-group mt-3 d-flex">
                                <select name="locationing" class="form-control form-control-sm" style="color: grey"
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
                                <div class="input-group-append">
                                  <button name="location" class="btn btn btn-danger" type="submit" style="padding: 8px">
                                    <i class="fas fa-map-marker-alt px-2"></i>
                                  </button>
                                </div>
                              </div>
                            </div>
                          </form>


                          <form action="category.php" method="post">
                            <div class="form-group filter_1">
                              <h4 class="text-secondary mt-4">Filter By Price</h4>
                              <div style="
                          height: 2px;
                          width: 60px;
                          background-color: grey;
                          border-radius: 10px;
                          margin-top: -3px;
                        "></div>

                              <div class="range_box d-flex mt-1">
                                <input style="width: 100%" class="custom-range" type="range" step="1000" min="0"
                                  name="range" max="<?php echo $price_new?>" oninput="this.nextElementSibling.value = this.value"
                                  id="customRange1" />
                                <output class="text-secondary" style="font-weight: 500; font-size: 18px"><?php echo $price_new?></output>
                                <p class="text-secondary" style="font-weight: 500">
                                  fcfa
                                </p>
                              </div>
                              <button type="submit" name="ranging" class="btn btn-primary px-5 mt-2 rounded">
                                Filter
                              </button>
                            </div>
                          </form>

                          <?php
                            require('components/accordion.php');
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="
                        btn btn-secondary
                        dropdown-toggle
                        btn-md-sm
                        isotope_sorting_text
                      " type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" style="margin-top: -5px">
                    <span>Sorting Method</span>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <ul id="dropdown_menu1" class="mx-0 px-0 py-0 ul_drop">
                      <li style="cursor: pointer" class="dropdown-item mx-0 px-2 item_sorting_btn"
                        data-isotope-option='{ "sortBy": "date" }'>
                        Default Sorting
                      </li>
                      <li style="cursor: pointer" class="dropdown-item mx-0 px-2 item_sorting_btn"
                        data-isotope-option='{ "sortBy": "date" }'>
                        Sort By Latest
                      </li>
                      <li style="cursor: pointer;" class="dropdown-item mx-0 px-2 item_sorting_btn"
                        data-isotope-option='{ "sortBy": "maxprice" }'>
                        Sort By Price: High To Low
                      </li>
                      <li style="cursor: pointer; margin-bottom: -11px"
                        class="dropdown-item mx-0 px-2 pb-0 item_sorting_btn"
                        data-isotope-option='{ "sortBy": "price" }'>
                        Sort By Price: Low To High
                      </li>

                    </ul>
                  </div>
                </div>
              </div>

              <div class="row px-0 mx-0 grid">
                <?php

                  if(isset($_POST['location'])){
                    require_once('components/connect.php');
                    $location = $_POST['locationing'];
                    $sql = "SELECT * FROM product_ads WHERE location = '$location'";
                    $result = mysqli_query($conn, $sql);
  
                    if ($result){
                      if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){
                          
                          if($row['title'] !== ''){
                            if($row['premium_nature'] == 1 ){
                              $date = $row['date'];
                              $date_exact = date('Y-m-d', strtotime($date));
                              premiumcard($row['images'], $row['title'], $row['price'], $date_exact, $row['location'], $row['id']);
                            }
                            elseif($row['premium_nature'] == 0){
                              $date = $row['date'];
                              $date_exact = date('Y-m-d', strtotime($date));
                              normalcard($row['images'], $row['title'], $row['price'], $date_exact, $row['location'], $row['id']);
                            }
                          }
  
                        }
                      }
                    }

                  }
                  elseif(isset($_POST['ranging'])){
                    $range = $_POST['range'];
                    $rng_sql = "SELECT * FROM product_ads WHERE price <= '$range'";
                    $result = mysqli_query($conn, $rng_sql);
                    if ($result){
                      if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){
                          
                          if($row['title'] !== ''){
                            if($row['premium_nature'] == 1 ){
                              $date = $row['date'];
                              $date_exact = date('Y-m-d', strtotime($date));
                              premiumcard($row['images'], $row['title'], $row['price'], $date_exact, $row['location'], $row['id']);
                            }
                            elseif($row['premium_nature'] == 0){
                              $date = $row['date'];
                              $date_exact = date('Y-m-d', strtotime($date));
                              normalcard($row['images'], $row['title'], $row['price'], $date_exact, $row['location'], $row['id']);
                            }
                          }
  
                        }
                      }
                    }

                  }
                  else{
                    $sql = "SELECT * FROM product_ads";
                    $result = mysqli_query($conn, $sql);
  
                    if ($result){
                      if(mysqli_num_rows($result)>0){

                        while($row = mysqli_fetch_assoc($result)){
                            
                          if($row['title'] !== ''){
                            if($row['premium_nature'] == 1 ){
                              $date = $row['date'];
                              $date_exact = date('Y-m-d', strtotime($date));
                              premiumcard($row['images'], $row['title'], $row['price'], $date_exact, $row['location'], $row['id']);
                            }
                            elseif($row['premium_nature'] == 0){
                              $date = $row['date'];
                              $date_exact = date('Y-m-d', strtotime($date));
                              normalcard($row['images'], $row['title'], $row['price'], $date_exact, $row['location'], $row['id']);
                            }
                          }

                        }
                        
                        


                      }
                    }
                  }

                ?>
              </div>
            </div>
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
  <script>
    function myButton(){
      location.onload();
    }
  </script>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>

  <!------------------Go to Top Button---------- -->
  <a class="gotop123" href="#bool"><i style="color: white" class="fas fa-arrow-up"></i></a>
  <script src="bootstrapv5/js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="plugins/Isotope/isotope.pkgd.min.js"></script>
  <script src="plugins/Isotope/fitcolumns.js"></script>
  <script src="js/category.js"></script>
 





  <script src="js/script.js"></script>

</body>

</html>