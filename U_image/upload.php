<?php
include '../db_connect.php';

if (isset($_FILES['file']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $files = $_FILES['file'];
    $uploaded_images = array();
    
    foreach ($files['name'] as $key => $image)
    {
        $imagefilename = $files['name'][$key];
        $imagefileerror = $files['error'][$key];
        $imagefiletemp = $files['tmp_name'][$key];
        $filename_separate = explode('.', $imagefilename);
        $file_extension = strtolower(end($filename_separate));
        $extension = array('jpeg', 'png', 'jpg', 'pdf');

        if (in_array($file_extension, $extension))
        {
            $upload_image = 'uploads/' . $username . '/' . $imagefilename;

            if (!file_exists('uploads/' . $username))
            {
                mkdir('uploads/' . $username, 0777, true);
            }

            move_uploaded_file($imagefiletemp, $upload_image);
            $conn = db_connect();

            $sql = "insert into images (Username, email, image) values('$username', '$email', '$upload_image')";
            $result = mysqli_query($conn, $sql);

            if ($result)
            {
                $uploaded_images[] = $upload_image;
            }
            else
            {
                die(mysqli_error($conn));
            }
        }
    }

    if (!empty($uploaded_images))
    {
        echo '<div class="alert alert-success" role="alert"><strong>success!</strong> Data inserted successfully </div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            img{
                width: 100px;
            }

        </style>
    </head>
    <body>
        
        <table class="table table-bordered ">
            <thead class="table-dark">
                <tr>
                    <th scope="col">SI no</th>
                    <th scope="col">Username</th>
                    <th scope="col">email</th>
                    <th scope="col">image</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $conn = db_connect();

                $sql = "Select * from images where Username = '$username'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result))
                {
                    $id = $row['id'];
                    $username = $row['Username'];
                    $email = $row['email'];
                    $image = $row['image'];
                    echo '<tr>
                            <td>'.$id.'</td>
                            <td>'.$username.'</td>
                            <td>'.$email.'</td>
                            <td><img src="'.$image.'" alt="Image"></td>
                        </tr>';
                }
                ?>

            </tbody>
        </table>
            
    </body>
</html>