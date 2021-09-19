<?php
    include ("connection.php");
    session_start();
    if(!isset($_SESSION['email'])){
        header("Location: ../index.php");
    }

    if(isset($_POST['submit'])){


        $email=$_SESSION['email'];
        $loc = $_POST['location']; 
        $des= $_POST['destination'];
        $fare = $_POST['fare'];
        $date = date('y-m-d',strtotime($_POST['date']));
        

        if($loc == ''){
            echo "<script>alert('Please enter pickup location')</script>";
            echo "<script>window.open('./post.php','_self')</script>";
            exit();
        }

        if($des == ''){
            echo "<script>alert('Please enter the destination')</script>";
            echo "<script>window.open('./post.php','_self')</script>";
            exit();
        }
       
        if($date == ''){
            echo "<script>alert('Please enter date')</script>";
            echo "<script>window.open('./post.php','_self')</script>";
            exit();
        }

        $chk_post="select * from post where user='$email'";
        $run_query=mysqli_query($conn,$chk_post);
        if(mysqli_num_rows($run_query) > 0){
            echo "<script>alert('You already have a pending request!')</script>";
            echo "<script>window.open('./post.php','_self')</script>";
            // echo 'alert("You already have a pending request!")';
            // header("Location: ./post.php");
            
            exit();
        }

        $insert_post = "insert into post (user,location,destination,fare,date) values ('$email','$loc','$des','$fare','$date')";
        // echo "Hello";
        if(mysqli_query($conn,$insert_post)){
            
            echo "<script>alert('Your request has been posted')</script>";
            header("Location: ./user-profile.php");
        }
        else{
            header("Location: ./post.php");
        }


        
        
        
        
    }
    // else{
    //     echo "<script>window.open('./login.php','_self')</script>";
    //     exit();
    // }

    

?>