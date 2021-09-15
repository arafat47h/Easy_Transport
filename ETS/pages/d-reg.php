<?php
    include ("connection.php");
    if(isset($_POST['submit'])){
        
        $u_name = $_POST['name'];
        $u_phone = $_POST['phone'];
        $u_pass = $_POST['pass'];
        $u_email = $_POST['email']; 
        // $u_nid = $_POST['nid']; 
        $u_lsn = $_POST['license']; 

        if($u_name == ''){
            echo "<script>alert('Please enter the name')</script>";
            echo "<script>window.open('./driver-reg.php','_self')</script>";
            exit();
        }
        if($u_phone == ''){
            echo "<script>alert('Please enter the Phone number')</script>";
            echo "<script>window.open('./driver-reg.php','_self')</script>";
            exit();
        }
        if($u_pass == ''){
            echo "<script>alert('Please enter the password')</script>";
            echo "<script>window.open('./driver-reg.php','_self')</script>";
            exit();
        }
        if($u_email == ''){
            echo "<script>alert('Please enter the name')</script>";
            echo "<script>window.open('./driver-reg.php','_self')</script>";
            exit();
        }
        // if($u_nid == ''){
        //     echo "<script>alert('Please enter the name')</script>";
        //     echo "<script>window.open('./driver-reg.php','_self')</script>";
        //     exit();
        // }
        if($u_lsn == ''){
            echo "<script>alert('Please enter the name')</script>";
            echo "<script>window.open('./driver-reg.php','_self')</script>";
            exit();
        }

        $chk_email = "select * from driver where email='$u_email'";
        $run_query = mysqli_query($conn,$chk_email);
        if(mysqli_num_rows($run_query) > 0){
            echo "<script>alert('User already exist!')</script>";
            echo "<script>window.open('./driver-reg.php','_self')</script>";
            exit();
        }
        $insert_user = "insert into driver (name,email,password,license,phone,) value ('$u_name','$u_email','$u_pass','$u_lsn','$u_phone')";
        if(mysqli_query($conn,$insert_user)){
            session_start();
            $_SESSION['email']=$u_email;
            echo "<script>window.open('./driver-profile.php','_self')</script>";
        }
        
    }
    else{
        echo "<script>window.open('./driver-reg.php','_self')</script>";
    }

    

?>