<?php
  include ("connection.php");
  session_start();
  if(!isset($_SESSION['email'])){
    header("Location: ../index.php");
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- font-awesome cdm link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <!-- css link-->
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <link rel="stylesheet" type="text/css" href="../css/rresponse.css">
  

    <title>Owner Profile</title>
  </head>
  <body>
     <!-------------------------------
    --------------------------
    navigation section
    -------------------------
    ----------------------------->
  <header >   
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light ">
          <div class="container-fluid">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="./vehicle-reg.php">Vehicle Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Request</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#"> Support</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#cilrclle">Driver hire</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="#Testimonials"> Massage</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="#Contact">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#Contact">Notification</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./logout.php">Logout</a>
                </li>
                
              </ul>
      </div>
    </div>
  </div>
    </nav>
        
      </div>
    </div>
   
  </header>
  
 <section>
   <div class="container">
     <div class="row">
       <div class="col-md-4">
        <div class="prof-1">
          <img src="../image/images.jpg" class="container-fluid" style="width: 200px;margin-top: 30px;">
          <h4>owner name</h4>
          <div class="bar"></div>
          <h4>About</h4>
          <p>
            ext ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMak
          </p>
          <div class="bar"></div>

          <div class="row">
            <div class="col-md-4">
              <img src="../image/profile1.png" class="container-fluid" style="width: 100px;margin-top: 30px;">
            </div>
            <div class="col-md-8">
               <h5 style="margin: 35px 0 0 -166px;">Robin singh</h5>
          <div style="color: #ffc107; margin: -24px 0 0 87px;">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p style="text-align: left; margin-left: -21px;">when an unknown printer took a galley of type and scrambled it to make a  </p>
            </div>
          </div>
        </div>
         
       </div>
        <div class="col-md-8">

         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233668.38704183287!2d90.27923688469745!3d23.78057325530601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1630306526034!5m2!1sen!2sbd" width="800" height="380" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
       </div>
     </div>
   </div>
 </section>


  </header>
  <section class="par">
     <div id="particles-js"></div>
  </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
    
  </body>
</html>