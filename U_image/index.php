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
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="file">Upload Images:</label>
            <input type="file" class="form-control" id="file" name="file[]" multiple required>
        </div>
        <button type="submit" class="btn btn-dark">Submit</button>
      </form>
    </div>
    
  </body>
</html>