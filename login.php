<?php
$host = "localhost";
$user = "root";
$password = '';
$dbname = 'user';

// Create connection
$data = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if ($data === false) {
    die("Connection error: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if "email" and "password" keys exist in $_POST
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $username = $_POST["email"];
        $password = $_POST["password"];

        // Use prepared statements to prevent SQL injection
        $sql = "SELECT * FROM login WHERE email=? AND password=?";
        $stmt = mysqli_prepare($data, $sql);

        // Check if the prepared statement was created successfully
        if ($stmt === false) {
            die("Prepared statement creation error: " . mysqli_error($data));
        }

        // Hash the password (use your preferred hashing method)
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPassword);

        // Execute query
        $result = mysqli_stmt_execute($stmt);

        if ($result === false) {
            die("Query execution error: " . mysqli_stmt_error($stmt));
        }

        // Get the result set
        $result_set = mysqli_stmt_get_result($stmt);

        // Check if there are rows in the result set
        if (mysqli_num_rows($result_set) > 0) {
            // Fetch the row
            $row = mysqli_fetch_array($result_set);

            if ($row["usertype"] == "user") {
                // Redirect to user dashboard or perform user-specific actions
                header("Location: user_dashboard.php");
                exit();
            } elseif ($row["usertype"] == "admin") {
                // Redirect to admin dashboard or perform admin-specific actions
                header("Location: admin_dashboard.php");
                exit();
            }
        } else {
            echo "Invalid Username or Password!";
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Email and password are required!";
    }
}
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Scanova Log in form</title>
  <link rel="stylesheet" href="login.css">
</head>

<body id="login">
  <div class="container flex">
    <div class="scannova-page flex">
      <div class="text-scanova-login">
        <h1>Scanova</h1>
        <p>Create the best QR-code ever </p>
        <p> Around Scanova</p>
      </div>
      <form action="#" class="form-login" id="login-form" method="POST" >
        <input id="email" type="email" placeholder="Email or phone number" required>
        <input id="password" type="password" placeholder="Password" required>
        <div class="link-scanova-login">
          <button type="submit" onclick="validateForm()" class="login">Login</button>
          <p id="invalid-username"></p>
          <a href="#" class="forgot">Forgot password?</a>
        </div>
        <hr>
        <div class="button-login1">
          <a href="signup_1.html">Create new account</a>
        </div>
      </form>
    </div>
  </div>
  <script src="js.js"></script>
</body>

</html>