<?php
    require '../db_connect.php';
?>
<html>
<head> </head>
<body>
    <table border = 1 cellspacing=0 cellpadding= 10>
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Image</td>
        </tr>
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM images");
        foreach($rows as $row) :
        ?>
        <tr>
        <td> <?php echo $i++; ?> </td>
        <td> <?php echo $row["name"]; ?> </td>
        <td>
            <?php

            foreach(json_decode($row["image"]) as $image) : 
            ?>
            <img src="uploads/<?php echo $image; ?>" width=200>
             <?php endforeach; ?>
        </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="upload.php">Upload Image</a>
</body>
</html>