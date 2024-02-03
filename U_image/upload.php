<?php
include '../db_connect.php';

if (isset($_POST['upload'])) {
    $username = $_FILES['username'];
    $moblie = $_FILES['mobile'];
    $images = $_FILES['images'];
    $num_of_imgs = count($images['name']);
    # Number of images $num_of_imgs = count($images['name']);

    for ($i = 0; $i < $num_of_imgs; $i++) {
        # get the image info and store them in var
        $image_name = $images['name'][$i];
        $tmp_name = $images['tmp_name'][$i];
        $error = $images['error'][$i];

        if ($error === 0) {
            $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);

            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array('jpg', 'jpeg', 'png');

            if (in_array($img_ex_lc, $allowed_exs)) {
                /*renaming the image name with with random string*/
                $new_img_name = uniqid('IMG-', true) . '.' . $img_ex_lc;
                # crating upload path on root directory
                # create upload folder if not exists
                if (!is_dir('uploads')) {
                    mkdir('uploads');
                }
                $img_upload_path = 'uploads/' . $new_img_name;
                # inserting image name into database
                $conn = db_connect();
                $sql = "INSERT INTO `images` (`username`, `mobile`, `image`) VALUES ($username', $moblie, (?)";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$new_image]);
                # move uploaded image to 'uploads' folder 
                move_uploaded_file($tmp_name, $img_upload_path);

                header("Location: index.php");

            } else {
                $em = "You can't upload this type of file";

                header("Location: index.php?error=$em");
            }

        }
    }
}
?>