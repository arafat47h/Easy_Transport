<?php
include('./connection.php');
session_start();
if(!isset($_SESSION['email'])){
  header("Location: ../index.php");
}

    $email=$_SESSION['email'];
    $chk_user= "select * from drives where driver='$email'";
    $chk_owner= "select * from owner where email='$email'";
    $drives_query = mysqli_query($conn,$chk_user);
    $owner_query = mysqli_query($conn,$chk_owner);
    if(mysqli_num_rows($owner_query)<1){
      echo "<script>alert('You are not eligible!')</script>";
      echo "<script>window.open('./driver-profile.php','_self')</script>";
      exit();
      // else{
      //   echo "<script>alert('You are not assigned to any vehicle!')</script>";
      // echo "<script>window.open('./driver-profile.php','_self')</script>";
      // exit();
      // }
    }
   
      
    


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/table.css">
    <title></title>
  </head>
  <body>
    <div class="filter">
    <span><h1>Request</h1></span>
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
            <th>User</th>
            <th>Location</th>
            <th>Destination</th>
            <th>Fare</th>
            <th>Date</th>
            <th></th>
          </tr>
        </thead>
        <tbody id="tmp">
        <?php
        // $view_req= "select user,location,destination,fare,date from post";
        $view_req= "select * from post";
        $run = mysqli_query( $conn, $view_req);
        while ($row = mysqli_fetch_array($run)) {
            
            $user =  $row[1];
            $loc =$row[2];
            $des = $row[3];
            $fare = $row[4];
            $date = $row[5];

        ?>

        <tr>
          <td><?=$user;?></td> 
          <td><?=$loc;?></td>
          <td><?=$des;?></td>
          <td><?=$fare;?></td>
          <td><?=$date;?></td>
          
          <td>
            <a href="./request_auth.php?id=<?=$user;?>"><button onclick="return confirm('Confirm?');"> Accept </button></a>
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


      <script type="text/javascript">
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
    </script>
   
  </body>
</html>
