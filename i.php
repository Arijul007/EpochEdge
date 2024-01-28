<?php

$login = false;
$showError = false;
$conn = new mysqli('localhost','root', '', 'details');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = $_POST["Username"];
    $password = $_POST["password"];
    $sql = "Select * from c_details where Username='$Username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: index.php");
    } else {
        header("location: login.php");

    }
}
?>