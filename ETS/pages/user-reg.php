<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


     <!-- css link-->
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <link rel="stylesheet" type="text/css" href="../css/rresponse.css">
  

    <title>User Reg</title>
  </head>
  <body>
     <!-------------------------------
    --------------------------
    navigation section
    -------------------------
    ----------------------------->
  
 


  <section class="login">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="d-reg">
            <h1>User Register</h1>
            <p>sing in to trusted using your details</p>
                  <form action="./u-reg.php" method="post">
                    <input type="text" name="name" placeholder="Name" class="form-contro"><br>
                     <input type="email" name="email" placeholder="Email" class="form-contro"><br>
                    <input type="text" name="phone" placeholder="Phone" class="form-contro"><br>
                    <input type="password" name="pass" placeholder="Password" class="form-contro"><br>

                    <button name="submit" class="submit">Submit</button>   
                    <br><a href="./login.php" style="text-decoration:none;">Already Resistered?</a>                            
                  </form>
                  
          </div>
        </div>
        <div class="col-md-6">
          <div class="c-log">
            <h1>Hello</h1>
            <p>you can hire any vehicle and driver</p>
          </div>
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