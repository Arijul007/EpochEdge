<?php
    include '../db_connect.php';
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Image Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <h1 class="text-center my-3">Registration form</h1>
    <div class="container d-flex justify-content-center" >
        <form action="upload.php" method="post" class="w-50" enctype="multipart/form-data">
            <div class="form-group my-2">
                <input type="text" name="username"placeholder="Username"class="form-control">
            </div>

            <div class="form-group my-2">
                <input type="text" name="email"placeholder="email"class="form-control">
            </div>

            <div class="form-group my-2">
                <input type="file" name="file" class="form-control" multiple>
            </div>
            
            <button class="btn btn-dark" type="submit" name="submit">Submit</button>
        </form>
    </div>
    
  </body>
</html>