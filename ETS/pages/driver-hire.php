<?php
include('./connection.php');
session_start();
if(!isset($_SESSION['email'])){
  header("Location: ../index.php");
}

     $email=$_SESSION['email'];
    // $chk_user= "select * from drives where driver='$email'";
    // $chk_owner= "select * from owner where email='$email'";
    // $drives_query = mysqli_query($conn,$chk_user);
    // $owner_query = mysqli_query($conn,$chk_owner);
   
      

    // if(mysqli_num_rows($drives_query)<1){
    //   echo "<script>alert('You are not eligible!')</script>";
    //   echo "<script>window.open('./driver-profile.php','_self')</script>";
    //   exit();
    // }
    
    // else{
    //   echo "<script>alert('You are not assigned to any vehicle!')</script>";
    // echo "<script>window.open('./driver-profile.php','_self')</script>";
    // exit();
    // }


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/table.css">
    <title>Driver Hire</title>
  </head>
  <body>
    <div class="filter">
    <!-- <span><h1>Driver Hire</h1></span> -->
     <a href="#" onclick="javascript:window.history.back(-1);return false;">Back</a>
    <br>
    <!-- <a href="./driver-profile.php">Click here to go Home</a> -->
    <!-- <a href="#" onclick="javascript:window.history.back(-1);return false;">Back</a> -->
    </div>
        
      <center>
      <!-- <div>
        <input type="text" name="live_search" id="live_search" autocomplete="off"
          placeholder="Search user...">
      </div> -->
          
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <!-- <th>phone</th> -->
            <th></th>
            <!-- <th></th> -->
          </tr>
        </thead>
        <tbody id="tmp">
        <?php
        // $view_req= "select user,location,destination,fare,date from post";
        $d_find= "select name,email,phone from driver a
        join drives b where not a.email=b.driver order by name asc";
        $run = mysqli_query( $conn, $d_find);
        while ($row = mysqli_fetch_array($run)) {
            
            $name=$row[0];
            $mail =  $row[1];
            $phn =$row[2];
            

        ?>

        <tr>
          <td><?=$name;?></td> 
          <td><?=$mail;?></td>
          <td><?=$phn;?></td>
          <!-- <td><?=$date;?></td> -->
          
          <td>
            <a href="./v-hire.php?id=<?=$email;?>&num=<?=$num?>&phn=<?=$phn?>"><button onclick="return confirm('Confirm?');"> Hire </button></a>
          </td>
        </tr>

        <?php
        }


        ?>

        </tbody>
        <tbody id="search_result"></tbody>
        
      </table>

      
      </center>

  </body>
</html>
