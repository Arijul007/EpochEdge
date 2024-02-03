<?php
include '../db_connect.php';

if(isset($_POST["submit"]))
{
    $name = $_POST['name'];
    $totalFiles = count($_FILES['fileImg']['name']);
    $filesArray = array();
    
    for($i = 0; $i < $totalFiles; $i++)
    {
        $imageName = $_FILES["fileImg"]["name"][$i];
        $tmpName = $_FILES["fileImg"]["tmp_name"][$i];
        $imageExtension = explode('.', $imageName);
        $imageExtension = strtolower(end($imageExtension));
        $newImageName = uniqid() . '.' . $imageExtension;
        move_uploaded_file($tmpName, 'uploads/'.$newImageName);
        $filesArray[] = $newImageName;
    }

    $filesArray = json_encode($filesArray);
    
    // Assuming $conn is your database connection
    $query = "INSERT INTO images VALUES('', '$name', '$filesArray')";
    
    mysqli_query($conn, $query);
    
    echo "
        <script>
        alert('Successfully Added');
        document.location.href = 'index.php';
        </script>
    ";
}
?>
<html>
<head> </head>
<body>
<form enctype="multipart/form-data" action="" method="post">
    Name :
    <input type="text" name="name" required> <br>
    Image :
    <input type="file" name="fileImg[]" accept=".jpg, .jpeg, .png" required multiple> <br>
    <button type="submit" name="submit">Submit</button>
</form>
<br>
<a href="index.php">Index</a>
</body>
</html>