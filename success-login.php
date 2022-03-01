<?php 
  require_once 'components/registration.php';
    
    if(!isset($_SESSION['id'])){
      header('location: login.php');
      exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrapv5/css/bootstrap.min.css">
  <link rel="stylesheet" href="main_style/registering.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="main_style/registering.css">
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper">
        <div class="row flex-grow px-md-3 px-md-3">
          <div class="col-lg-5 mx-auto">
            <div style="background-color: white;" class=" text-left p-5 shadow-sm">
              <div class="brand-logo">
                <a href="index.php" class="">
                  <img class="mb-2" width="150px" src="system_image/shop2.png">
                </a>
                <?php if(isset($_SESSION['message'])): ?>
                <div class="alert <?php echo $_SESSION['alert-class']; ?>">
                  <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                    unset($_SESSION['alert-class']);
                  ?>
                </div>
              <?php endif;?>
  
  
              <h3>Welcome, <?php echo $_SESSION['username']; ?></h3>
              <a href="index.php" class="logout text-success">Go To Home</a>
  
              <?php ?>
                <div class="alert alert-warning mt-3">
                  You need to verify your account.
                  Sign in to your email account and click on the
                  verification link we just emailed you at <strong><?php echo $_SESSION['email']; ?></strong>
                </div>
              <?php ?>

            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>

  <script src="bootstrapv5/js/bootstrap.bundle.min.js"></script>
</body>

</html>