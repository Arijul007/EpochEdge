<?php
require_once __DIR__ . '/vendor/autoload.php'; // Load Composer's autoloader
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


$Username = $_POST['Username'];
$email = $_POST['email'];
$password = $_POST['password'];
//Database connection

$conn = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], $_ENV['DB_NAME']);

if ($conn->connect_error) {

    die('Connection Failed:' . $conn->connect_error);

} else {

    $stmt = $conn->prepare("insert into c_details(Username, email, password)values(?, ?, ?)");

    $stmt->bind_param("sss", $Username, $email, $password);

    $stmt->execute();

    echo '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Success!</strong>
                    Your account is now created and you can login 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span>
                    </button>
                </div>';



    $stmt->close();

    $conn->close();
}
?>