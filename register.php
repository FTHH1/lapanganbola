<!DOCTYPE html>

<?php
$koneksi=mysqli_connect("localhost","root","","databola");
if(isset($_POST["rsubmit"])) {
    $nama=$_POST["rnama"];
    $email=$_POST["remail"];
    $password=$_POST["rpass"];
    $noktp=$_POST["rktp"];
$query= "INSERT INTO dataanggota VALUES('$nama','$email','$password','$noktp')";
mysqli_query($koneksi,$query);
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="register.css" rel="stylesheet">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
</head>  

<body>
    <form method="POST" action="">
 <div class="welcome_kotak">
    <img src="subur.png">
        <br>
        <p class="welcome"></br> Silahkan Masukan Info Untuk Membuat Akun Anggota</p> 
        <p class="nama">NAMA</p>
        <input type="text" name="rnama" required>
        <p class="pass">EMAIL</p>
        <input type="text" name="remail" required>
        <p class="pass">PASSWORD</p>
        <input type="password" name="rpass" required>
        <p class="pass">Nomor KTP</p>
        <input type="text" name="rktp" required>
        <br>
        <button type="Enter" name="rsubmit" required> Enter </button> 
       <a href="login.php"> <button type="button" required> Sudah Punya Akun? </button> </a>
       </form>
    </div>
</body>
</html>