<!DOCTYPE html>

<?php
session_start();

    $koneksi=mysqli_connect("localhost","root","","databola");
        $nama = '';
        $password = '';
    if(isset($_POST["renter"])) {
        $nama=$_POST["rnama"];
        $password=$_POST["rpass"]; 
    }
    $sql = "SELECT * FROM dataanggota WHERE nama = '$nama' 
            AND password= '$password' ";

            $result=$koneksi->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['nama']= 'admin';
    header ("Location: daftar-akun.php");
    exit(); // Ensure no further code is executed after redirection
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="login.css" rel="stylesheet">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <div class="welcome_kotak">

    <form action="" method="post">
        <img src="subur.png">
        <br>
        <p class="welcome">Selamat Datang Di Pt. Subur Bola </br> Silahkan Masukan Info Anggota</p> 
        
        <p class="nama">NAMA</p>
        <input type="text" name="rnama" required>
        <p class="pass">PASSWORD</p>
        <input type="password" name="rpass" required>
        <br>
        <button type="Enter" name="renter"  required> Enter </button>
        <a href="register.php"><button type="button" required> Buat akun </button> </a>
        </form>
    </div>
</body>
</html>