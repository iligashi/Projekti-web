<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="AdminDashboard.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">Scanova Dashboard</h3>
  <a href="#" class="w3-bar-item w3-button" onclick="showUsers()">Users</a>
  <a href="#" class="w3-bar-item w3-button" onclick="showUserMessages()">User Messages</a>
  <a href="#" class="w3-bar-item w3-button" onclick="showBlogForm()">Blog</a>
</div>

<!-- Page Content -->
<div style="margin-left:25%">

<div class="w3-container w3-teal users-header">
  <h1>Scanova</h1>
 <a href="/Projekti-web/home-page.html" style="text-decoration: none; color: white;">Back to Homepage</a>
</div>

<div id="usersView" class="w3-container p-20" style="display:none">
<h2>Users</h2>
<table class="w3-table-all">
    <tr class="w3-light-grey">
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
    </tr>
    <?php 
      $host = "localhost";
      $dbUsername = "root";
      $dbPassword = "";
      $dbname = "db";
      
      $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      
      $sql = "SELECT * FROM user";
      $result = $conn->query($sql);
      if ($result) {
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "
              <tr>
                <td>" . $row['name'] . "</td>
                <td>" . $row['surname'] . "</td>
                <td>" . $row['email'] . "</td>
              </tr>";
          }
        } else {
            echo "No results found.";
        }
        
          $result->free();
      } else {
          $error_message = "Error: " . $sql . "<br>" . $conn->error;
          error_log($error_message); // Log the error
          die($error_message);
      }
      
      $conn->close();
    
    ?>
    <!-- <tr>
      <td>Jill</td>
      <td>Smith</td>
      <td>jill@gmail.com</td>
    </tr>
    <tr>
      <td>Eve</td>
      <td>Jackson</td>
      <td>eve@gmial.com</td>
    </tr>
    <tr>
      <td>Adam</td>
      <td>Johnson</td>
      <td>adam@gmail.com</td>
    </tr> -->
  </table>
</div>

<div id="userMessagesView" class="w3-container p-20" style="display:none">
<h2>User Messages</h2>
<table class="w3-table-all">
    <tr class="w3-light-grey">
      <th>Name</th>
      <th>Email</th>
      <th>Message</th>
    </tr>
    <?php 
      $host = "localhost";
      $dbUsername = "root";
      $dbPassword = "";
      $dbname = "db";
      
      $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      
      $sql = "SELECT * FROM messages";
      $result = $conn->query($sql);
      if ($result) {
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "
              <tr>
                <td>" . $row['name'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['message'] . "</td>
              </tr>";
          }
        } else {
            echo "No results found.";
        }
        
          $result->free();
      } else {
          $error_message = "Error: " . $sql . "<br>" . $conn->error;
          error_log($error_message); // Log the error
          die($error_message);
      }
      
      $conn->close();
    
    ?>
  </table>
</div>

<div class="w3-container p-20" id="blogView" style="display:none">
  <h2>Blog Form</h2>
  <form class="w3-container w3-card-4 p-20">
    <label class="w3-text-teal"><b>Name</b></label>
    <input class="w3-input w3-border w3-light-grey" type="text" name="name" required>

    <label class="w3-text-teal"><b>Content</b></label>
    <textarea class="w3-input w3-border w3-light-grey" name="content" rows="4" required></textarea>

    <label class="w3-text-teal"><b>Image</b></label>
    <input class="w3-input w3-border w3-light-grey" type="file" name="image" accept="image/*" required>

    <button class="w3-btn w3-teal w3-margin-top" type="submit">Submit</button>
  </form>
</div>

</div>

<script>
function showUsers() {
  document.getElementById('usersView').style.display = 'block';
  document.getElementById('userMessagesView').style.display = 'none';
  document.getElementById('blogView').style.display = 'none';
}

function showUserMessages() {
  document.getElementById('usersView').style.display = 'none';
  document.getElementById('userMessagesView').style.display = 'block';
  document.getElementById('blogView').style.display = 'none';
}

function showBlogForm() {
  document.getElementById('usersView').style.display = 'none';
  document.getElementById('userMessagesView').style.display = 'none';
  document.getElementById('blogView').style.display = 'block';
}
document.addEventListener('DOMContentLoaded', function() {
  showUsers();
});
</script>

</body>
</html>
