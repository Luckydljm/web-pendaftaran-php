<?php
include('config.php');
include('layout/navbar.php');

session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>

<h3 class="text-center my-4">Hasil Pendaftaran</h3><hr>
<table class="table table-striped" style="margin: 0 auto; width: 90rem">
    <thead>
        <th>#</th>
        <th>Nama</th>
        <th>Email</th>
        <th>No.HP</th>
        <th>Semester</th>
        <th>IPK</th>
        <th>Jenis Beasiswa</th>
        <th>Berkas</th>
        <th>Status Ajuan</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php
            $sql = "SELECT * FROM tb_daftar";
            $query = mysqli_query($conn, $sql);
            $i = 1;
            while ($user = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $i++ . "</td>";
                echo "<td>" . $user['nama'] . "</td>";
                echo "<td>" . $user['email'] . "</td>";
                echo "<td>" . $user['no_hp'] . "</td>";
                echo "<td>" . $user['semester'] . "</td>";
                echo "<td>" . $user['ipk'] . "</td>";
                echo "<td>" . $user['jenis_beasiswa'] . "</td>";
                echo "<td>" . $user['berkas'] . "</td>";
                echo "<td>" . $user['status_ajuan'] . "</td>";
                echo "<td>
                        <a href='detail_pendaftaran.php?id=$user[id]' class='btn btn-warning btn-sm'><i class='bi bi-eye'></i></a>
                        <a href='hapus_pendaftaran.php?id=$user[id]' class='btn btn-danger btn-sm'><i class='bi bi-trash'></i></a>
                     </td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>