<?php
session_start();
if(!isset($_SESSION['email'])){
  header("Location: ../index.php");
}

include("connection.php");
  $user = $_GET['id'];
  $sql = "delete from post where user='$user'";
  $delete = mysqli_query($conn, $sql);
  
  if ($delete) {
    echo "<script>window.open('./request.php?del=Request has been accpted!','_self')</script>";
  }
?>
