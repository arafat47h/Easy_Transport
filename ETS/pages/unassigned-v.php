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
            <th>Vehicle no.</th>
            <th>Category</th>
            <th>Fitness</th>
            <!-- <th>phone</th> -->
            <th>Tax Token</th>
            <!-- <th></th> -->
          </tr>
        </thead>
        <tbody id="tmp">
        <?php
        // $view_req= "select user,location,destination,fare,date from post";
        $v_find= "select * from vehicle 
        join drives 
        where not vehicle.number=drives.vehicle_no and owner='$email'";
        $run = mysqli_query( $conn, $v_find);
        while ($row = mysqli_fetch_array($run)) {
            
            $v_no=$row[1];
            $cat =  $row[2];
            $fit =$row[3];
            $tax_token =$row[4];
            

        ?>

        <tr>
          <td><?=$v_no;?></td> 
          <td><?=$cat;?></td>
          <td><?=$fit;?></td>
          <td><?=$tax_token;?></td>
          <!-- <td><?=$date;?></td> -->
          
          <!-- <td>
            <a href="./v-hire.php?id=<?=$email;?>&num=<?=$num?>&phn=<?=$phn?>"><button onclick="return confirm('Confirm?');"> Hire </button></a>
          </td> -->
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
