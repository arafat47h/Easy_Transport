<?php
    include ("connection.php");
    if(isset($_POST['submit'])){
        
        $u_name = $_POST['name'];
        $u_phone = $_POST['phone'];
        $u_pass = $_POST['pass'];
        $u_email = $_POST['email']; 

        if($u_name == ''){
            echo "<script>alert('Please enter the name')</script>";
            echo "<script>window.open('./user-reg.php','_self')</script>";
            exit();
        }
        if($u_phone == ''){
            echo "<script>alert('Please enter the Phone number')</script>";
            echo "<script>window.open('./user-reg.php','_self')</script>";
            exit();
        }
        if($u_pass == ''){
            echo "<script>alert('Please enter the password')</script>";
            echo "<script>window.open('./user-reg.php','_self')</script>";
            exit();
        }
        if($u_email == ''){
            echo "<script>alert('Please enter the name')</script>";
            echo "<script>window.open('./user-reg.php','_self')</script>";
            exit();
        }
        $person="user";
        $chk_email = "select * from user where email='$u_email'";
        $run_query = mysqli_query($conn,$chk_email);
        if(mysqli_num_rows($run_query) > 0){
            echo "<script>alert('User already exist!')</script>";
            echo "<script>window.open('./user-reg.php','_self')</script>";
            exit();
        }
        $insert_user = "insert into user (name,email,phone,password) value ('$u_name','$u_email','$u_phone','$u_pass')";
        if(mysqli_query($conn,$insert_user)){
            session_start();
            $_SESSION['email']=$u_email;
            echo "<script>window.open('./user-profile.php','_self')</script>";
        }
        
    }
    else{
        echo "<script>window.open('./user-reg.php','_self')</script>";
    }

    

?>