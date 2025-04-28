<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="daftar-akun.css" rel="stylesheet">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

<body>



    <div class="welcome_kotak container-fluid">

        <img style="margin-left:30%;" src=" subur.png">
        <br>



        <table class="table table-striped" border="3px">

            <tr>
                <th style="border:1px solid;text-align: center;" class="table-primary ">
                    NAMA
                </th>

                <th style="border:1px solid;text-align: center;" class="table-primary ">
                    EMAIl
                </th>

                <th style="border:1px solid;text-align: center;" class="table-primary ">
                    NO KTP
                </th>

                <th style="border:1px solid;text-align: center;" class="table-primary ">
                    PASSWORD
                </th>


            </tr>

            <?php
            $koneksi = mysqli_connect("localhost", "root", "", "databola");


            // $sql = 'SELECT nama, email, password, noktp FROM dataanggota';
            // $result = mysqli_query($koneksi, $sql);

            $data = mysqli_query($koneksi, "SELECT * FROM dataanggota");

            while ($row = mysqli_fetch_array($data)) {
            ?>

                <tr>
                    <td style="border:1px solid; ">
                        <?= $row['nama'] ?>
                    </td>

                    <td style="border:1px solid; background-color: rgba(255, 255, 255, 0.21);">
                        <?= $row['email'] ?>
                    </td>

                    <td style="border:1px solid; background-color: rgba(255, 255, 255, 0.21);">
                        <?= $row['noktp'] ?>
                    </td>

                    <td style="border:1px solid; background-color: rgba(255, 255, 255, 0.21);">
                        <?= $row['password'] ?>
                    </td>
                </tr>



    </div>
<?php }; ?>
</table>

</body>

</html>