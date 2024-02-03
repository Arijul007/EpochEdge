<?php
include '../db_connect.php';

$sName = $_ENV['DB_HOST'];
$uName = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASSWORD'];
$db_name = $_ENV['DB_NAME'];

try 
{
    $conn = new PDO("mysql:host=$sName; dbname=$db_name", $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) 
{
    echo "Connection failed: " . $e->getMessage();
}

# fetching images
$sql = "SELECT image FROM images ORDER BY id DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();
$images = $stmt->fetchAll();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Image Upload</title>
    
</head>

<body>
    <form method="post" action="upload.php" enctype="multipart/form-data">

        <?php
        if (isset($_GET['error'])) 
        {
            echo "<p class='error'>";
            echo htmlspecialchars($_GET['error']);
            echo "</p>";
        }
        ?>

                    <div class="input-group">
                        <input type="text" id="Username" name="Username" required>
                        <label for="Username">Username</label>
                    </div>
                    <div class="input-group">
                        <input type="text" id="mobile" name="mobile" required>
                        <label for="mobile">mobile</label>
                    </div>
                    <input type="file" name="images[]" multiple ><br>
                    <button class=" btn btn-dark" type="submit" name="submit">submit</button>
    </form>
    

</body>

</html>