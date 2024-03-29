<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Sign IN | QR CODE</title>
   <link rel="stylesheet" href="signup.css">
   <!-- <link rel="stylesheet" href="register.php"> -->
</head>

<body id="sign_up">
   <div class="allsingin">
      <div class="wrapper-singin">
         <div class="title-singin">
            Create an account
            <p>It's quick and easy</p>
         </div>
         <form class="form-singin" id="signup-form" name="signupForm" action="insert.php"  method="POST">
            <div class="field-singin">
               <input type="text" required name="name">
               <label for="">First Name</label>
            </div>

            <div class="field-singin">
               <input type="text" required name="surname">
               <label for="">Last Name</label>
            </div>

            <div class="field-singin">
               <input type="email" required name="email">
               <label for="">Email Address</label>
            </div>

            <div class="field-singin">
               <input type="password" required name="password">
               <label for="">Password</label>
            </div>
            <div class="content-singup">
               <!-- <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember Me</label>
               </div>
               <!-- <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div> -->
            </div> 
            <button type="submit" class="field-singin" id="BtnSubmit">Sign Up</button>

            <div class="signup-link">
               Already have a account?<a href="login.php"> Login Now</a>
            </div>
         </form>
      </div>
   </div>
   <script src="../QR.js"> </script>
   <script>
      document.addEventListener('DOMContentLoaded', function () {
         const BtnSubmit = document.getElementById('BtnSubmit');

         const emailValid = (email) => {
            const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
            return emailRegex.test(email.toLowerCase());
         };

         function validateForm() {
            const emrin = document.getElementById('userId').value;
            const Mbiemri = document.getElementById('LastName').value;
            const emailin = document.getElementById('Email').value;
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirm-password").value;

            if (password !== confirmPassword) {
               alert("Passwords do not match");
               return false;
            }

            if (emrin === "" || Mbiemri === "" || emailin === "" || password === "") {
               alert("Please fill in all the fields.");
               return false;
            }

            if (!emailValid(emailin)) {
               alert("Please enter a valid email.");
               document.getElementById('Email').focus();
               return false;
            }

            const myUrl = "login.php";
            window.location.href = myUrl;

            return true;
         }

         BtnSubmit.addEventListener('click', validateForm);
      });
   </script>
</body>

</html>


