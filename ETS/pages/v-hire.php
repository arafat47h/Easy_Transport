<?php
session_start();
if(!isset($_SESSION['email'])){
  header("Location: ../index.php");
}

include("connection.php");
  $user = $_GET['id'];
  $num = $_GET['num'];
  $phn = $_GET['phn'];

  
 
  $sql = "insert into vehicle_hire(number,phone,user) value ('$num',$phn,'$user')";
  $insert = mysqli_query($conn, $sql);
  
  if ($insert) {
    echo "<script>window.open('./vehicle-hire.php?del=Vehicle Hired!','_self')</script>";
    echo "$phn";
    echo "$user";
    echo "$num";
  }
  echo "<script>window.open('./vehicle-hire.php?','_self')</script>";
 
?>