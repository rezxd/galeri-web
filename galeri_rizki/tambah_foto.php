<?php
    include "koneksi.php";
    session_start();

    $judulfoto = $_POST['judulfoto'];
    $deskripsifoto = $_POST['deskripsifoto'];
    $albumid = $_POST['albumid'];
    $tanggalunggah = date("Y-m-d");
    $userid = $_SESSION['userid'];

    $rand = rand();
    $ekstensi = array('png', 'jpg', 'jpeg', 'gif');
    $filename = $_FILES['lokasifile']['name'];
    $ukuran = $_FILES['lokasifile']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
    if (!in_array($ext, $ekstensi)) {
        header("location: foto.php");
        exit(); // tambahkan ini untuk menghentikan eksekusi skrip setelah pengalihan header
    }

    if ($ukuran < 1044070) {      
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['lokasifile']['tmp_name'], 'gambar/' . $rand . '_' . $filename);
        $query = "INSERT INTO foto (judulfoto, deskripsifoto, tanggalunggah, lokasifile, albumid, userid) VALUES ('$judulfoto', '$deskripsifoto', '$tanggalunggah', '$xx', '$albumid', '$userid')";
        if(mysqli_query($conn, $query)) {
            header("location: foto.php");
            exit(); // tambahkan ini untuk menghentikan eksekusi skrip setelah pengalihan header
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    } else {
        header("location: foto.php");
        exit(); // tambahkan ini untuk menghentikan eksekusi skrip setelah pengalihan header
    }
?>
