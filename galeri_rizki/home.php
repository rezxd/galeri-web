<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Halaman Home</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f8f8;
    }
    
    p{
        text-align: center;
    }

    h1 {
        text-align: center;
        margin-top: 20px;
    }

    ul {
        list-style: none;
        padding: 0;
        margin: 20px 0;
        text-align: center;
    }

    ul li {
        display: inline;
        margin-right: 10px;
    }

    a {
        text-decoration: none;
        color: #333;
        margin-right: 5px;
    }

    a:hover {
        text-decoration: underline;
    }
</style>

</head>
<body>
    <h1>Halaman Home</h1>
    <p>Selamat datang <b><?=$_SESSION['namalengkap']?></b></p>
    
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="album.php">Album</a></li>
        <li><a href="foto.php">Foto</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>