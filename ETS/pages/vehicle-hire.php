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
    <title>Vehicle Hire</title>
  </head>
  <body>
    <div class="filter">
    <span><h1>Vehicle Hire</h1></span>
    <br>
    <!-- <a href="./driver-profile.php">Click here to go Home</a> -->
    <a href="#" onclick="javascript:window.history.back(-1);return false;">Back</a>
    </div>
        
      <center>
      <!-- <div>
        <input type="text" name="live_search" id="live_search" autocomplete="off"
          placeholder="Search user...">
      </div> -->
          
      <table>
        <thead>
          <tr>
            <th>Category</th>
            <th>number</th>
            <th>Owner</th>
            <th>phone</th>
            <th></th>
            <!-- <th></th> -->
          </tr>
        </thead>
        <tbody id="tmp">
        <?php
        // $view_req= "select user,location,destination,fare,date from post";
        $vehicle= "select category, number,name,phone from vehicle v
        join owner o 
        on v.owner=o.email";
        $run = mysqli_query( $conn, $vehicle);
        while ($row = mysqli_fetch_array($run)) {
            
            $category=$row[0];
            $num =  $row[1];
            $owner =$row[2];
            $phn = $row[3];
            

        ?>

        <tr>
          <td><?=$category;?></td> 
          <td><?=$num;?></td>
          <td><?=$owner;?></td>
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

      <!-- <h4><a href="./logout.php">Logout</a></h4> -->


      <!-- <script type="text/javascript">
        $(document).ready(function () {
            $("#live_search").keyup(function () {
                var query = $(this).val();
                if (query != "") {
                  $(document).click(function(data) {
                      $("#tmp").hide();
                    });
                    $.ajax({
                        url: 'live_search.php',
                        method: 'POST',
                        data: {
                            query: query
                        },
                        success: function (data) {

                            $('#tmp').html("");
                            $('#search_result').html(data);



                        }
                    });
                } else {
                   $('#tmp').css('display', 'none');
                }
            });
        });
    </script> -->
   
  </body>
</html>
