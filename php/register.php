<?php

session_start();

if( isset($_SESSION["login"])){
    header("Location: home.php");
    exit;
}

require 'function.php';

if ( isset($_POST["register"])){

    if( registrasi($_POST) > 0){
        echo    "<script>
                    alert('user baru berhasil ditambahkan');
                </script>";
    } else{
        echo mysqli_error($conn);
    }
}
if ( isset($_POST["login"])){

    $loginUsername = $_POST["login-username"];
    $loginPassword = $_POST["login-password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$loginUsername'");

    // cek username
    if(mysqli_num_rows($result) === 1 ){
        // cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($loginPassword, $row["password"])){
            // set session
            $_SESSION["login"] = true; 
            // login sukses
            header("Location: home.php");
            exit;
        }
    }

    $error = true;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../new-css/register.css">
    <link rel="stylesheet" href="../new-css/style.css">
</head>
<body>
    <div class="container">
        <form action="" method="post" class="login-box">
            <h1>Login</h1>

            <?php if( isset($error)) : ?>
                <p style="color:red; font-style:italic;"> Username / Password salah</p> 
            <?php endif; ?>

            <input type="text" id="login-username" name="login-username" placeholder="Username" required />
            <input type="password" password="login-password" name="login-password" placeholder="Password" required="required" />
            <button type="submit" name="login" value="login" class="btn">Login</button>
            <p>Don't have an account?<a href="#" class="signup-link"> Sign Up</a></p>
        </form>
        <form action="" method="post" class="signup-box">
            <h1>Sign Up</h1>
            <input type="text" name="signup-username" placeholder="Username" required="required" />
            <input type="password" name="signup-password" placeholder="Password" required="required" />
            <input type="password" name="signup-cpassword" placeholder="Confirm Password" required="required" />
            <button type="submit" name="register" value="sign-up" class="btn">Sign Up</button>
        </form>
    </div>

    <div class="btn-b">
            <a href="home.php">BACK</a>
    </div>

    <script src="../js/login.js"></script>
</body>
</html>

