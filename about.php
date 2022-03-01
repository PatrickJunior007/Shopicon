<?php 
  session_start();
  if(isset($_GET['path'])){
    $filename = $_GET['path'];
    if(file_exists($filename)){
      header("Cache-Control: no-cache, must-revalidate");
      header("Content-Description: FIle Transfer");
      header('Content-Disposition: attachment; filename="'.basename($filename).'"');
      header("Content-Type: application/octet-stream");
      header("Expires: 0");
      header('Content-Length: ' . filesize($filename));
      header('Pragma: public');

      flush();

      readfile($filename);

      die();
    }else{
      echo "File does not exist";
    }

  }

  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
  
  
    $email_form = 'ogambapatrickjunior@gmail.com';
    $email_subject = "Contact For Business";
    $email_body = "User Name: $name.\n".
        "User Email: $visitor_email.\n".
        "User Subject: $subject.\n".
        "User Phone Number: $phone.\n".
  
        "Here is the from the message from the Gaming Website that you created: $message.\n";
  
  
  
    $to = "ogambapatrickjunior@gmail.com";
    $headers = "From: $email_form \r\n";
    $headers = "Reply-To: $visitor_email \r\n";
      
    mail($to,$email_subject,$email_body,$headers);

    echo "<script>alert('Your Message has been sent')</script>";
    echo "<script> window.location = 'about.php'</script>";
  
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Me: Portfolio Web Page</title>
  <link rel="stylesheet" href="./css/all.css" />
  <link rel="stylesheet" href="main_style/about.css">

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <link rel="stylesheet" href="bootstrapv5/css/bootstrap.min.css" />
  <!------------About Start Link---------->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <!------------About End Link---------->

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
    <!-- home section start -->
    <section style="background-image: url(system_image/PJr.jpg);" class="home" id="home">
      <div class="max-width">
        <div class="home-content">
          <div class="text-1">Hello, my name is</div>
          <div class="text-2">Patrick Jr.</div>
          <div class="text-3">And I'm a <span class="typing"></span></div>
          <a href="#">Hire me</a>
        </div>
      </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
      <div class="max-width">
        <h2 class="title">About me</h2>
        <div class="about-content">
          <div class="column left">
            <img src="system_image/PhotoGrid_1553380048864.jpg" alt="">
          </div>
          <div class="column right">
            <div class="text">I'm Patrick Junior and I'm a <span class="typing-2"></span></div>
            <p>With a Year of experience and graduated from the University of Golf of Guinee having Bachelor of
              Techology in Software Engineering, I successfully combined my
              studies with work and other commitments showing myself to be self-
              motivated, organized and capable of working in collaboration with others.
              In addition to that I’m very hardworking and I also learn quickly and easily...</p>
            <a href="about.php?path=cv.pdf">Download CV</a>
          </div>
        </div>
      </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
      <div class="max-width">
        <h2 class="title">My services</h2>
        <div class="serv-content">
          <div class="card">
            <div class="box">
              <i class="fas fa-paint-brush"></i>
              <div class="text">Web Design</div>
              <p>Competent with web programming languages, or with CMS like WordPress and the Bootstrap framework.</p>
            </div>
          </div>
          <div class="card">
            <div class="box">
              <i class="fas fa-chart-line"></i>
              <div class="text">Graphic Design</div>
              <p>Got skills in development of flyers, logos and other graphic features</p>
            </div>
          </div>
          <div class="card">
            <div class="box">
              <i class="fas fa-code"></i>
              <div class="text">Apps Design</div>
              <p>UI and UX developer for application design. React Native developer in cross platform App Development.</p>
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>

  <!-- skills section start -->
  <section class="skills" id="skills">
    <div class="max-width">
      <h2 class="title">My skills</h2>
      <div class="skills-content">
        <div class="column left">
          <div class="text">My creative skills & experiences.</div>
          <p><span style="font-weight: 600;">1.</span> Competent Graphic Designing.
              <span style="font-weight: 600;">2.</span> Can draw Unified Modelling Diagrams, ER diagrams and Class
              Diagrams for given projects.
              <span style="font-weight: 600;">3.</span> Web Designer using web programming languages, or with CMS like
              WordPress and the Bootstrap framework.
              <span style="font-weight: 600;">4.</span> Can evaluate possible impact of a proposed project on a company
              and its members.
              <span style="font-weight: 600;">5.</span> Carry out quality assurance tests or testing to discover errors and
              optimize usability.
              <span style="font-weight: 600;">6.</span> Acquire skills in programming languages such as C, java, PHP,
              MySQL, and JavaScript.
              <span style="font-weight: 600;">7.</span> UI/UX Developer in both mobile application and web designing
              <span style="font-weight: 600;">8.</span> React Native developer in cross platform App Development
              <span style="font-weight: 600;">9.</span> Basic in Word Processing Software like Microsoft Word and Excel.</p>
          <a href="#contact">Contact for more</a>
        </div>
        <div class="column right">
          <div class="bars">
            <div class="info">
              <span>HTML</span>
              <span>95%</span>
            </div>
            <div class="line html"></div>
          </div>
          <div class="bars">
            <div class="info">
              <span>CSS</span>
              <span>80%</span>
            </div>
            <div class="line css"></div>
          </div>
          <div class="bars">
            <div class="info">
              <span>JavaScript</span>
              <span>60%</span>
            </div>
            <div class="line js"></div>
          </div>
          <div class="bars">
            <div class="info">
              <span>PHP</span>
              <span>70%</span>
            </div>
            <div class="line php"></div>
          </div>
          <div class="bars">
            <div class="info">
              <span>MySQL</span>
              <span>85%</span>
            </div>
            <div class="line mysql"></div>
          </div>
          <div class="bars">
            <div class="info">
              <span>Java</span>
              <span>70%</span>
            </div>
            <div class="line java"></div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- contact section start -->
  <section class="contact teams" id="contact">
    <div class="max-width">
      <h2 class="title">Contact me</h2>
      <div class="contact-content">
        <div class="column left">
          <div class="text">Get in Touch</div>
          <p>Contact me for your website design, logo, flyers and mobile app design at a very reasonable price Or to see some of my work samples.</p>
          <div class="icons">
            <div class="row">
              <i class="fas fa-user"></i>
              <div class="info" style="position: relative; top: -30px;">
                <div class="head">Name</div>
                <div class="sub-title">Ogamba Patrick</div>
              </div>
            </div>
            <div class="row">
              <i class="fas fa-map-marker-alt"></i>
              <div class="info" style="position: relative; top: -30px;">
                <div class="head">Address</div>
                <div class="sub-title">Cite-sic, Douala</div>
              </div>
            </div>
            <div class="row">
              <i class="fas fa-envelope"></i>
              <div class="info" style="position: relative; top: -30px;">
                <div class="head">Email</div>
                <div class="sub-title">ogambapatrickjunior@gmail.com</div>
              </div>
            </div>
          </div>
        </div>
        <div id="contact" class="column right">
          <div class="text">Message me</div>
          <form action="about.php" method="POST">
            <div class="fields">
              <div class="field name">
                <input type="text" name="name" placeholder="Name" required>
              </div>
              <div class="field email">
                <input type="email" name="email" placeholder="Email" required>
              </div>
            </div>
            <div class="fields">
              <div class="field name">
                <input type="text" name="phone" placeholder="Phone" required>
              </div>
              <div class="field email">
                <input type="text" name="subject" placeholder="Subject" required>
              </div>
            </div>
            <div class="field textarea">
              <textarea cols="30" rows="10" name="message" placeholder="Message.." required></textarea>
            </div>
            <div class="button-area">
              <button name="submit" type="submit">Send message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


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
  <script src="js/about.js"></script>
  <script src="bootstrapv5/js/bootstrap.bundle.min.js"></script>
</body>

</html>