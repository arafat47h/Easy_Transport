
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Easy Tranport!</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>

  <body>

  <div class="main-block">
    <center>

    <div class="container">
      <form class="box" action="./login-auth.php" method="post">
        <h1>Login</h1>
        <input type="email" name="email" placeholder="username">
        <input type="password" name="pass" placeholder="password">
        <span>  User    </span><input type="radio" name="person" class="radio" value="user">
        <span>  Owner   </span><input type="radio" name="person" class="radio" value="owner">
        <span>  Driver  </span><input type="radio" name="person" class="radio" value="driver">
        <input type="submit" name="login" value="Login">
        <a href="./signup.php" class="signup">Signup</a> 
      </form>
    </div>

    </center>
  </div>

    

  </body>
</html>