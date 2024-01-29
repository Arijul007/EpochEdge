<?php
include 'db_connect.php';

$Username = $_POST['Username'];
$email = $_POST['email'];
$password = $_POST['password'];
//Database connection
$conn = db_connect();
$stmt = $conn->prepare("insert into c_details(Username, email, password)values(?, ?, ?)");
$stmt->bind_param("sss", $Username, $email, $password);
$stmt->execute();
$stmt->close();
db_close($conn);
echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong>Your account is now created and you can <a href="auth.php">login</a>.
    </div>';
?>