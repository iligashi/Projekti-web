<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Scanova Log in form</title>
  <link rel="stylesheet" href="login.css">
  <style>
    .h1{
      text-decoration: none;
    }
  </style>
</head>

<body id="login">
  <div class="container flex">
    <div class="scannova-page flex">
      <div class="text-scanova-login">
      <a href="../home-page.html" class="h1"><h1>Scanova</h1></a> 
        <p>Create the best QR-code ever </p>
        <p> Around Scanova</p>
      </div>
      <form class="form-login" id="login-form" name="loginForm" action="logindata.php" method="POST">
        <input id="email" name="email" type="email" placeholder="Email or phone number" required>
        <input id="password" type="password" name="password" placeholder="Password" required>
        <div class="link-scanova-login">
          <button type="submit"  class="login">Login</button>
          <p id="invalid-username"></p>
         
        </div>
        <hr>
        <div class="button-login1">
          <a href="signup_1.php">Create new account</a>
        </div>
      </form>
    </div>
  </div>
  <script src="login.js"></script>
</body>

</html>