<?php
include 'db_connect.php';

$login = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = $_POST["Username"];
    $password = $_POST["password"];
    $conn = db_connect();
    $sql = "Select * from c_details where Username='$Username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    db_close($conn);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: index.php");
    } else {
        header("location: authentication.php");

    }
}
?>