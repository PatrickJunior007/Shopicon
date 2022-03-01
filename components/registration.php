<?php
  session_start();

  require 'connect.php';

  $errors = array();
  $username = "";
  $email = "";
  $title = "";
  $price = "";
  $description = "";
  $userinfo = "";



  //Register Uxer
  if(isset($_POST['signup-btn'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $wa_status = isset($_POST['wa_status']);
    $password = $_POST['password'];
    $agreement = isset($_POST['agreement']);
    $passwordConf = $_POST['conf_password'];
    

    //validation
    if(empty($username)){
      $errors['username'] = "UserName Required";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL )){
      $errors['email'] = "Email Address is invalid";
    }
    if(empty($email)){
      $errors['email'] = "Email Required";
    }
    if(empty($agreement)){
      $errors['agreement'] = "Agree to our Terms";
    }
    if(empty($password)){
      $errors['password'] = "Password Required";
    }
    if($password !== $passwordConf){
      $errors['password'] = "The Two Password do not match";
    }

    $email_exist = "SELECT * FROM registration WHERE email = '$email'";
    $res = mysqli_query($conn, $email_exist);

    if(mysqli_num_rows($res)>0){
      $errors['email'] = "Email Already Exist";
    }

    $name_exist = "SELECT * FROM registration WHERE username = '$username'";
    $res = mysqli_query($conn, $name_exist);

    if(mysqli_num_rows($res)>0){
      $errors['username'] = "User Name already taken";
    }

    if(count($errors) ===0 ){
      $password = password_hash($password, PASSWORD_DEFAULT);

      $sql = "INSERT INTO registration (username, number, wa_status, email, password)
        VALUES ('$username', '$number', '$wa_status', '$email', '$password')"
      ;
      $setquery = mysqli_query($conn, $sql);
      if($setquery){
        $user_id = $conn->insert_id;
        $_SESSION['id'] = $user_id;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['number'] = $wa_number;
        //flash message
        $_SESSION['message'] = "You are now logged in!";
        $_SESSION['alert-class'] = "alert-success";
        header('location: success-login.php');
        exit();
      }
      else{
        $errors['db_error'] = "Database error: failed to register"; 
      }
    }
  }


  //Login User
  if(isset($_POST['login-btn'])){
    $userinfo = $_POST['userinfo'];
    $password = $_POST['password'];

    //validation
    if(empty($userinfo)){
      $errors['username'] = "Info Required";
    }
    if(empty($password)){
      $errors['password'] = "Password Required";
    }

    if(count($errors)===0){
      $sql = "SELECT * FROM registration WHERE email = '$userinfo' OR username = '$userinfo' LIMIT 1";
      $query = mysqli_query($conn, $sql);
      if(mysqli_num_rows($query)>0){
        $fetch = mysqli_fetch_assoc($query);
        if(password_verify($password, $fetch['password'])){
          //login sucess
          $_SESSION['id'] = $fetch['id'];
          $_SESSION['username'] = $fetch['username'];
          $_SESSION['email'] = $fetch['email'];
          $_SESSION['verified'] = $fetch['verified'];
          
          //flash message
          $_SESSION['message'] = "You are now logged in!";
          $_SESSION['alert-class'] = "alert-success";
          header('location: index.php');
          exit();
        }
        else{
          $errors['login_fail'] = "Wrong Credentials";
        }
      }
      else{
        $errors['login_credidential'] = "You're not net a Member";
      }
    }

  }

  //If User Wants To Chamge Password
  if(isset($_SESSION['email'])){
    if(isset($_POST['change-password'])){
      $password = $_POST['password'];
      $passwordConf = $_POST['passwordConf'];
      if(empty($password)){
        $errors['password'] = "Password Required";
      }
      if($password !== $passwordConf){
        $errors['password'] = "The Two Password do not match";
      }
      if(count($errors) === 0){
        $email = $_SESSION['email'];
        $username = $_SESSION['username'];
        $encpass = password_hash($password, PASSWORD_DEFAULT);
        $update_password = "UPDATE registration SET password = '$encpass' WHERE email = '$email' OR username = '$username'";
        
        $run_query = mysqli_query($conn, $update_password);

        if($run_query){
          echo "<script>alert('Your Password Has Changed')</script>";
          echo "<script> window.location = 'index.php'</script>";
        }
        else{
          $errors['db-error'] = "Failed To Change Password";
        }
      }
    }    
  }



  //logout user
  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['verified']);
    header('location: index.php');
    exit();
  }

  //Add Product
  if(isset($_POST['post-ad'])){
    $title = $_POST['title'];
    $number = $_POST['number'];
    $wa_status = isset($_POST['wa_status']);
    $category = $_POST['category'];
    $location = $_POST['location'];
    $images = $_FILES['file'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $user_email = $_POST['useremail'];
    $user_name = $_POST['user'];

    

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
    if(empty($description)){
      $errors['description'] = "Description Required";
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
  
          $sql = "INSERT INTO product_ads (title, number, wa_status, category, location, images, price, description, user_email, user_name, premium_nature) 
            VALUES ('$title', '$number', '$wa_status', '$category', '$location', '$new_img_name', '$price', '$description', '$user_email', '$user_name' 0)"
          ;
          $qury = mysqli_query($conn, $sql);
          move_uploaded_file($tmp_n, $img_upload_path);

          if($qury){
            echo "<script>alert('Your Ad Has Been Posted')</script>";
            echo "<script> window.location = 'update_ads.php'</script>";
          }
          else{
            $errors['input_failed'] = "Failure to register product";
          }
          

        }
        else{
          $errors['upload'] = "You can't upload this type of file";
        }
  
      }
   
    }


      
  }


  




?>