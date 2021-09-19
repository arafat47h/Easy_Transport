<?php

  session_start();
  if(!isset($_SESSION['email'])){
    header("Location: ../index.php");
  }
  $email=$_SESSION['email'];
  

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Post</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/post.css">
    <!-- <style>
     

    </style> -->
  </head>
  <body>
    <div class="main-block">

      
      <center>
      <form action="post_auth.php" method="post">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Post here </h2>
          
        </div>
        <div class="info">
        <select name="location">
            <option value="" selected>Destination*</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Chittagong">Chittagong</option>
            <option value="Comilla">Comilla</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Barishal">Barishal</option>
            <option value="Khulna">Khulna</option>
            <option value="Sylhet">Sylhet</option>
          </select>
          <select name="destination">
            <option value="" selected>Destination*</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Chittagong">Chittagong</option>
            <option value="Comilla">Comilla</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Barishal">Barishal</option>
            <option value="Khulna">Khulna</option>
            <option value="Sylhet">Sylhet</option>
          </select>
          <input type="number" name="fare" placeholder="Fare">
          <input type="date" name="date" id="">

        </div>
        
        <button name="submit">Submit</button>
      </form>
      </center>

    </div>
  </body>
</html>