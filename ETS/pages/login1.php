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
  

    <title>Login</title>
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
          <div class="log-cont">
            <h1>LOGIN</h1>
            <p>sing in to trusted using your details</p>
                  <form action="./login-auth.php" method="post">
                    <input type="email" name="email" placeholder="Email" class="form-contro"><br>
                    <input type="password" name="pass" placeholder="password" class="form-contro"><br>
                    <input type="text" name="person" placeholder="user/owner/driver" class="form-contro"><br>
                   

                    <button name="login">Login</button>
                   <a href="./signup.php" style="text-decoration:none;">Signup</a>    
                  </form>
                  <div class="row">
                      <div class="col-md-6">
                          
                      </div>
                      <div class="col-md-6">
                          
                      </div>
              </div>
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
<!-- 
<input type="radio" name="radio" value="user">
                    <label for="user">User</label><br>
                    <input type="radio" name="radio" value="owner">
                    <label for="owner">Owner</label><br>
                    <input type="radio" name="radio" value="driver">
                    <label for="driver">Driver</label><br> -->