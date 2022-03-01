<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./css/all.css" />
  <link rel="stylesheet" href="main_style/style.css" />
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="bootstrapv5/css/bootstrap.min.css" />

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <link rel="stylesheet" href="main_style/block.css" />
  <style>
    *,
    a {
      text-decoration: none;
    }
  </style>

</head>

<body>
  <?php
    require_once('components/header.php');
  ?>


  <!--------Main------------->
  <div class="page_wrapper">
    <div class="container mt-4">
      <header>
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
          <h1 class="display-4 fw-normal">Pricing</h1>
          <p class="fs-5 text-muted">
            Quickly build an effective pricing table for your potential
            customers with this Bootstrap example. It’s built with default
            Bootstrap components and utilities with little customization.
          </p>
        </div>
      </header>

      <main>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Plan 1</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">
                  2000cfa<small class="text-muted fw-light">/24hrs</small>
                </h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>Add Post to Premium</li>
                  <li>2 GB of storage</li>
                  <li>Email support</li>
                  <li>Help center access</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-outline-primary">
                  Sign up for free
                </button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Plan 2</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">
                  4000cfa<small class="text-muted fw-light">/48hrs</small>
                </h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>Add Post to Premium</li>
                  <li>10 GB of storage</li>
                  <li>Priority email support</li>
                  <li>Help center access</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-primary">
                  Get started
                </button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-primary">
              <div class="card-header py-3 text-white bg-primary border-primary">
                <h4 class="my-0 fw-normal">Plan 3</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">
                  6000cfa<small class="text-muted fw-light">/72hrs</small>
                </h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>Add Post to Premium</li>
                  <li>15 GB of storage</li>
                  <li>Phone and email support</li>
                  <li>Help center access</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-primary">
                  Contact us
                </button>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <!--------Main End------------->

  <!----------Footer-------------->
    <?php
      require_once('components/footer.php')
    ?>
  <!----------Footer End-------------->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.bundle.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>

  <!------------------Go to Top Button---------- -->
  <a class="gotop123" href="#bool"><i style="color: white" class="fas fa-arrow-up"></i></a>

  <script src="js/script.js"></script>
  <script src="bootstrapv5/js/bootstrap.bundle.min.js"></script>
</body>

</html>