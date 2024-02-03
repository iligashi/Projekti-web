<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />

  <title>Contact Us</title>
  <link rel="stylesheet" href="contact-us.css" />
  <link rel="stylesheet" href="header.css">
</head>

<body>
  <header>
    <div class="head_nav" id="head_nav">
      <div class="head_title">
        <span class="egoditor-logo__text" onclick="scanova()" id="scanova"
          ><a href="home-page.html" style="color: white; text-decoration: none;">SCANOVA</a></span
        >
        <div class="nav-login-signup" style="display: flex">
          <ul class="nav-list flexed">
            <li onclick="qr_codes()" id="qr_codes">QR CODES</li>
            <li>
              <a
                href="AboutUs.html"
                style="text-decoration: none; color: white"
                >ABOUT US</a
              >
            </li>
            <li>
              <a
                href="ContactUs.php"
                style="text-decoration: none; color: white"
                >CONTACT US</a
              >
            </li>
            <!-- <li> <a href="/Projekti-web/admin-dashboard/AdminDashboard.php" style="text-decoration: none; color: white;">DASHBOARD</a></li> -->
          </ul>

          <div style="display: flex">
            <button class="login_button">
              <a
                href="/Projekti-web/login-signup/login.php"
                style="text-decoration: none; color: white"
              >
                LOGIN</a
              >
            </button>

            <button
              class="signup_button"
              style="width:88px"
              onclick="sign_up_button()"
              id="sign_up_button"
            >
              <a
                href="/Projekti-web/login-signup/signup_1.php"
                style="text-decoration: none; color: white"
              >
                SIGN UP</a
              >
            </button>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="container-contactus" style=" margin-top: 110px;">
    <h2 style="color: rgb(255, 255, 255) ;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Contact Us</h2>
    <form name="contactUsForm" action="contactUsDB.php"  method="POST">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your email" required>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Your message" rows="6" required></textarea>
      </div>
      <button class="buton" type="submit">Send</button>
      <div style="text-align: center">
        <?php 
          if($_COOKIE['message']) {
            echo "Message sent successfully";
            setcookie('message', '', time() - 3600, '/');
          }
        ?>
      </div>
    </form>
  </div>

  <div class="footer-dark">
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3 item">
            <h3>Services</h3>
            <ul>
              <li><a href="#">QR generator</a></li>
              <li><a href="#">QR design</a></li>
              <li><a href="#">Qr container</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-3 item">
            <h3>About</h3>
            <ul>
              <li><a href="#">ilididi@gmail.com</a></li>
              <li><a href="#">+38349732127 </a></li>
              <li><a href="#">Kosova</a></li>
            </ul>
          </div>
          <div class="col-md-6 item text">
            <h3>Scanova</h3>
            <p>
              We make the best Qr codes in the simples way. We're on a mission
              to enable digital connections with every physical object and
              place on the planet.
            </p>
          </div>
          <div class="col item social">
            <a href="https://www.facebook.com/"><i class="icon ion-social-facebook"></i></a><a
              href="https://twitter.com/i/flow/login?redirect_after_login=%2Fhome"><i
                class="icon ion-social-twitter"></i></a><a href="https://www.snapchat.com/"><i
                class="icon ion-social-snapchat"></i></a><a href="https://www.instagram.com/"><i
                class="icon ion-social-instagram"></i></a>
          </div>
        </div>
        <p class="copyright">Scanova © 2023</p>
      </div>
    </footer>
  </div>
</body>

</html>