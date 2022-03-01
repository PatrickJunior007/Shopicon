<?php
  require_once('components/connect.php');

  if(isset($_GET['deleteId'])){
    $id = $_GET['deleteId'];

    $sql = "DELETE FROM product_ads WHERE id = '$id'";
    $query = mysqli_query($conn, $sql);
    if($query){
      echo "<script>alert('Your Ad Has Been Posted')</script>";
      echo "<script> window.location = 'update_ads.php'</script>";
    }
    else{
      echo "not Deleted";
    }
  }
?>