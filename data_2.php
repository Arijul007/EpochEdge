<?php
    
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "details";
    $conn = mysqli_connect($server, $username, $password, $database);
    if ($conn)
    {
        echo "success";
    }
    else
    {
        die("Error". mysqli_connect_error());
    }
?>



<?php
if($showAlert)
{
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Success!</strong>
                Your account is now created and you can login 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span>
                </button>
            </div>';
}
?>