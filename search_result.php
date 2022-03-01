<?php 
  session_start();
  require_once('components/connect.php');
  require_once('components/functions.php');
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
  <link rel="stylesheet" href="main_style/search_style.css">


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
    <div class="card-body">
      <h4 class="mt-2">Search Result</h4>
      <?php
        
        
        if(isset($_POST['search'])){
          
          $searchq = $_POST['search_content'];
          $query = "SELECT * FROM product_ads WHERE title LIKE '%$searchq%'";
          $result = mysqli_query($conn, $query);
          $num_rows = mysqli_num_rows($result);

          /*--if($count == 0){
            $output = 'no result';
          }--*/
          if(!isset($searchq)){
            echo "Not in our record";
          }
          else if($_POST['search_content'] !== ''){
            echo "  <p style=\"font-size: 18px; font-weight: 500;\">Result: <span style=\"font-weight: 200; font-size: 16px;\">$num_rows</span></p>";
            if($num_rows == 0){
              echo "<h5 style=\"padding-top: 20px;\">No Result Found</h5>";
            }
            while($row = mysqli_fetch_assoc($result)){
              if($row['premium_nature'] == 1){
                premiumResult($row['images'], $row['title'], $row['date'], $row['location'], $row['id'], $row['price']);
              }
              else{
                searchResult($row['images'], $row['title'], $row['date'], $row['location'], $row['id'], $row['price']);
              }
            
            }
            
          }

          if($_POST['search_content'] == ''){
            echo "<h5 style=\"padding-top: 20px;\">Nothing Found</h5>";
          }

        }

      ?>

    </div>
    
  </div>
  <!--------Main End------------->

  <!----------Footer-------------->
  <?php
    require_once('components/footer.php');
  ?>
  <!----------Footer End-------------->

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