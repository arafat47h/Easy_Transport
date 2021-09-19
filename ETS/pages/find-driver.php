<?php
  include ("connection.php");
  session_start();
  if(!isset($_SESSION['email'])){
    header("Location: ../index.php");
  }
  $email=$_SESSION['email'];
  $query= "select * from driver where email='$email'";
  $run= mysqli_query($conn,$query);
  while ($row = mysqli_fetch_array($run)) {
            
    $name =  $row[0];
    $phn =$row[4];
    
  }

?>