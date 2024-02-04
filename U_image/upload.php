<?php
    include '../db_connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
       $username=$_POST['username'];
       $email=$_POST['email'];
       $image=$_FILES['file'];
       echo $username;
       echo $email; 
       print_r($image);
       $imagefilename=$image['name'];
       $imagefileerror=$image['error'];
       $imagefiletemp=$image['tmp_name'];
       $filename_separate=explode('.',$imagefilename);
       print_r($filename_separate);
       $file_extension=strtolower(end($filename_separate));
       print_r($file_extension);
       $extension=array('jpeg','png','jpg','pdf');
       if(in_array($file_extension,$extension))
       {
            $upload_image='uploads/'.$imagefilename;
            move_uploaded_file($imagefiletemp,$upload_image);
            $conn = db_connect();

            $sql = "insert into `images` (Username,email,image) values('$username','$email','$upload_image')";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                echo '<div class="alert alert-success" role="alert"><strong>success!</strong> Data inserted successfully </div>';
            }
            else
            {
                die(mysqli_error($conn));
            }
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
    
    <h1 class="text-center my-4">User data</h1>
    <div class="container mt-5 justify-content-center">
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

                $sql="Select * from `images`";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($result))
                {
                    $id=$row['id'];
                    $username=$row['Username'];
                    $email=$row['email'];
                    $image=$row['image'];
                    echo '<tr>
                            <td>'.$id.'</td>
                            <td>'.$username.'</td>
                            <td>'.$email.'</td>
                            <td><img src='.$image.' /></td>
                        </tr>';
                }


                ?>

                <table class="table"></table>
            </tbody>
        </table>
    </div>
    
</body>
</html>
