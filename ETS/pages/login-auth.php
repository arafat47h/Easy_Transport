<?php
    include ("connection.php");
    if(isset($_POST['login'])){
       
        $u_email = $_POST['email']; 
        $u_pass = $_POST['pass'];
        $person = $_POST['person'];

        if($u_email == ''){
            echo "<script>alert('Please enter your email')</script>";
            echo "<script>window.open('./login.php','_self')</script>";
            exit();
        }

        if($u_pass == ''){
            echo "<script>alert('Please enter the password')</script>";
            echo "<script>window.open('./login.php','_self')</script>";
            exit();
        }
       
        if($person == ''){
            echo "<script>alert('Please enter category')</script>";
            echo "<script>window.open('./login.php','_self')</script>";
            exit();
        }
        
        if($person=='user'){
           
    
            $chk_user = "select * from user where email='$u_email' and password='$u_pass'";
            $run_query = mysqli_query($conn,$chk_user);
            if(mysqli_num_rows($run_query)){
                session_start();
                $_SESSION['email']=$u_email;
                echo "<script>window.open('./user-profile.php','_self')</script>";
            }
            else{
                echo "<script>alert('Email or Password is incorrect!')</script>";
                // echo "<script>window.open('./login.php','_self')</script>";
                header("Location: ./login.php");
                exit();
            }
        }
        if($person=='owner'){
               
            $chk_user = "select * from owner where email='$u_email' and password='$u_pass'";
            $run_query = mysqli_query($conn,$chk_user);
            if(mysqli_num_rows($run_query)){
                session_start();
                $_SESSION['email']=$u_email;
                echo "<script>window.open('./owner-profile.php','_self')</script>";
            }
            else{
                echo "<script>alert('Email or Password is incorrect!')</script>";
                // echo "<script>window.open('./login.php','_self')</script>";
                header("Location: ./login.php");
                exit();
            }
        }
        if($person=='driver'){
    
            $chk_user = "select * from driver where email='$u_email' and password='$u_pass'";
            $run_query = mysqli_query($conn,$chk_user);
            if(mysqli_num_rows($run_query)){
                session_start();
                $_SESSION['email']=$u_email;
                echo "<script>window.open('./driver-profile.php','_self')</script>";
            }
            else{
                echo "<script>alert('Email or Password is incorrect!')</script>";
                // echo "<script>window.open('./login.php','_self')</script>";
                header("Location: ./login.php");
                exit();
            }
        }
        
        
    }
    else{
        echo "<script>window.open('./login.php','_self')</script>";
        exit();
    }

    

?>