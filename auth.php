<?php
session_start();
if (isset($_SESSION['loggedin'])) 
{
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/icon" href="images/88.gif">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/login_style.css">
    <title>Login page</title>
</head>

<body>
    <div class="wrapper">
        <div class="form-wrapper sign-in">
            <form action="login.php" method="post">
                <h2>Login</h2>
                <div class="input-group">
                    <input type="text" id="Username" name="Username" required>
                    <label for="Username">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="password" required>
                    <label for="password">password</label>
                </div>
                <div class="remember">
                    <label><input type="checkbox">Remember me</label>
                </div>
                <button type="submit">Login</button>
                <div class="signUp-link">
                    <p>Don't have an account? <a href="#" class="signUpBtn-link">sign Up</a></p>
                </div>
            </form>
        </div>



        <div class="form-wrapper sign-up">
            <form action="signup.php" method="post">
                <h2>Sign Up</h2>
                <div class="input-group">
                    <input type="text" id="Username" name="Username" required>
                    <label for="Username">Username</label>
                </div>
                <div class="input-group">
                    <input type="email" id="email" name="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="password" required>
                    <label for="password">password</label>
                </div>
                <div class="remember">
                    <label><input type="checkbox">I agree to the terms & condition</label>
                </div>
                <button type="submit">Sign Up</button>
                <div class="signUp-link">
                    <p>Already have an account? <a href="#" class="signInBtn-link">Sign In</a></p>
                </div>
            </form>
        </div>
    </div>



    <script src="js/login_script.js"></script>
</body>

</html>