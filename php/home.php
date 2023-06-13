<?php 

session_start();

require 'function.php';

if( !isset($_SESSION["login"])){
    header("Location: ../index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusRecc</title>
    <link rel="stylesheet" href="../new-css/home.css">
    <link rel="stylesheet" href="../new-css/style.css">
</head>

<body>
<div class="container-home">
    <div class="menu">
        <h1><a href="../index.php" title="Back to" style="color:azure ">MusRecc</a></h1> <br>
        <button><a href="topchart.php">Top Chart</a></button><br font-size: 60px;>
        <button><a href="ourmr.php">Our Music Recc</a></button>
    </div>
    
</div>
</div>

<footer>
    <div class="kiri">
        <a href="ourteam.php">Our Team</a>
        <a href="dokumentasi.php">Documentation</a>
        <a href="feedback.php">FeedBack</a>
            
    </div>
    <div class="kanan">
        <a href="logout.php">LOG OUT</a>
    </div>
</footer>


</body>

</html>