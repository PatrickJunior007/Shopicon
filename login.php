<?php require_once 'components/registration.php';?>
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
            <div style="background-color: white;" class=" text-left p-sm-5 p-4 py-5 shadow-sm">
              <div class="brand-logo">
                <a href="index.php">
                  <img width="150px" src="system_image/shop2.png">
                </a>

              </div>
              <h4 style="font-size: 15px;" class="pt-4 text-dark">Hello! let's get started</h4>
              <h6 style="font-size: 16px;" class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" method="POST" action="login.php">
                <?php if(count($errors) > 0):?>
                  <div class="alert alert-danger" style="margin-top: -10px;">
                    <?php foreach ($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                  </div>
                <?php endif;?>  
                <div class="form-group">
                  <label for="exampleInputUsername1">Username or Email</label>
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1"
                    placeholder="Username or Email" value="<?php echo $userinfo?>" name="userinfo">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
                    placeholder="Password" name="password">
                </div>
                <div class="mt-3">
                  <button type="submit" class=" w-100 btn btn-block btn-primary px-4 btn-lg font-weight-medium auth-form-btn"
                    name="login-btn">SIGN IN</button>
                </div>
                <div class="my-4 d-flex justify-content-between align-items-center" style="display: flex; justify-content: space-between;">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                  </div>
                  <a href="#" class="auth-link text-secondary">Forgot password?</a>
                </div>
                <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="register.php"
                    class="text-primary">Create</a>
                </div>
              </form>
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