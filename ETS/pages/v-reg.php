<?php
    include ("connection.php");

        session_start();
        $email=$_SESSION['email'];
        echo "$email";

    if(isset($_POST['submit'])){
        
        $number = $_POST['number'];
        $fitness = $_POST['fitness'];
        $tax_token = $_POST['tax_token'];
        $category = $_POST['category']; 

        if($number == ''){
            echo "<script>alert('Please enter the vehicle number')</script>";
            echo "<script>window.open('./vehicle-reg.php','_self')</script>";
            exit();
        }
        if($fitness == ''){
            echo "<script>alert('Please enter the fitness number')</script>";
            echo "<script>window.open('./vehicle-reg.php','_self')</script>";
            exit();
        }
        if($tax_token == ''){
            echo "<script>alert('Please enter tax token')</script>";
            echo "<script>window.open('./vehicle-reg.php','_self')</script>";
            exit();
        }
        if($category == ''){
            echo "<script>alert('Please enter the category')</script>";
            echo "<script>window.open('./vehicle-reg.php','_self')</script>";
            exit();
        }
        
        $v_chk = "select * from vehicle where number='$number'";
        $run_query = mysqli_query($conn,$v_chk);
        if(mysqli_num_rows($run_query) > 0){
            echo "<script>alert('Vehicle already resistered!')</script>";
            echo "<script>window.open('./vehicle-reg.php','_self')</script>";
            exit();
        }
        $v_reg = "insert into vehicle (owner,number,category,fitness,tax_token) value ('$email','$number','$category','$fitness','$tax_token')";
        if(mysqli_query($conn,$v_reg)){
            
            $_SESSION['number']=$number;
            echo "<script>alert('Vehicle resistered successfully!')</script>";
            header("Location: ./owner-profile.php");
        }
        
    }
    else{
        echo "<script>window.open('./owner-profile.php','_self')</script>";
    }

    

?>