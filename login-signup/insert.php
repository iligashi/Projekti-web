<?php
$name = $_POST['name'];
$surname = $_POST ['surname'];
$email = $_POST['email'];
$password = $_POST['password'];
// $role = $_POST['role'];

function guidv4($data = null) {
    $data = $data ?? random_bytes(16);
    assert(strlen($data) == 16);
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
} 

if (!empty($name) || !empty($email) || !empty($surname) || !empty($password) || !empty($role)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "db";
    
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $uuid = guidv4();
        $INSERT = "INSERT INTO user (id, name, surname, email, password) VALUES ('$uuid', '$name', '$surname','$email', '$password')";
        if ($conn->query($INSERT) === TRUE) {
            setcookie("logedInUser", $uuid, time()+3600, '/');
            header('Location: ../home-page.html');
        } else {
            echo "Error: " . $INSERT . "<br>" . $conn->error;
        }
        $conn->close();
    }
}
?>

