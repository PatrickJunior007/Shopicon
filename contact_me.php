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

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <link rel="stylesheet" href="main_style/main.css">
  <link rel="stylesheet" href="bootstrapv5/css/bootstrap.min.css" />


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <link rel="stylesheet" href="main_style/block.css" />
  <link rel="stylesheet" href="main_style/registering.css">
  <link rel="stylesheet" href="main_style/contact.css">
  <style>
    *,
    a {
      text-decoration: none;
    }
    i{
      color: white;
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="./main_style/carousel.css" rel="stylesheet">
</head>

<body style="background-color: rgb(248, 248, 248);">
  <?php
    require_once('components/header.php');
  ?>

  <!--------Main------------->
  <div class="page_wrapper">
    <div class="first_banner_contact">
      <div class="image_container_contact">
        <div class="text_area">
          <h1 style="color: white; font-weight: 600;">Get in touch</h1>
          <p style="color: white" class="description pt-2">
            Contact me for your website design, logo, flyers and mobile app design at a very reasonable price
          </p>
        </div>
      </div>
    </div>

    <div class="second_banner_contact">
      <div class="block_one shadow-sm">
        <div class="card_text">
          <h3 style="color: #555555; font-weight: 600;">My WhatsApp</h3>
          <p style="color: grey">
            Interested in contacting me for my services in promoting your business? copy this number
          </p>
          <button class="btn btn-primary btn-lg text-white mt-4">+237670157564</button>
        </div>
      </div>
      <div class="block_one shadow-sm">
        <div class="card_text">
          <h3 style="color: #555555; font-weight: 600;">My Email</h3>
          <p style="color: grey">
            You can leave a message in my email box by filling the form under and I'll respond as soon as possible
          </p>
          <button class="btn btn-danger btn-lg text-white mt-4"><a class="text-white" href="#contact_us">Scrolldown</a></button>
        </div>
      </div>
    </div>

    <div class="contact_us shadow-sm" id="contact_us">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="text-center for_margin pb-4 " style="color: #555555; font-weight: 600;">CONTACT US</h2>
        </div>
        <div class="col-md-10 offset-md-1">
          <div class="col-md-12">
            <form class="form-contact contact_form" action="sent.php" method="post" id="contactForm">
              <div class="row">
                <div class="col-sm-6 mb-4">
                  <div class="form-group">
                    <label> Name </label>
                    <input class="form-control" name="name" id="name" type="text" required />
                  </div>
                </div>
                <div class="col-sm-6 mb-4">
                  <div class="form-group">
                    <label> Email Address </label>
                    <input class="form-control" value="" name="email" id="email" type="email" required />
                  </div>
                </div>
                <div class="col-sm-6 mb-4">
                  <div class="form-group">
                    <label> Phone number </label>
                    <input class="form-control" value="" name="phone" type="text" required />
                  </div>
                </div>
                <div class="col-sm-6 mb-4" >
                  <div class="form-group">
                    <label> City </label>
                    <input class="form-control" value="" name="city" type="text" required />
                  </div>
                </div>
                <div class="col-12 ">
                  <div class="form-group">
                    <label> Message: </label>
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                      required></textarea>
                  </div>
                </div>
              </div>
              <div class="form-group mt-3 text-center">
                <button type="submit" name="submit" class="genric-btn info circle arrow btn btn-success mb-md-4"
                  style="font-size: 1.2rem">
                  Send Message
                </button>
                
              </div>
            </form>
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