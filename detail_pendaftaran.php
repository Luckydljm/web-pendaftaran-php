<?php
session_start();
$id = $_GET['id'];
include('config.php');
$sql = "SELECT * FROM tb_daftar WHERE id='$id'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

include('layout/navbar.php');
?>


<div class="container px-5 my-5">
    <h4 class="mt-4 mb-3" style="font-family: 'Fira Sans', sans-serif;">Calon Siswa</h4>

    <div class="card mb-3 py-3 px-3" style="max-width: 100%">
        <div class="row g-0">
            <div class="col">
                <div class="card-body">
                    <h5 class="card-title">Detail Pendaftaran</h5>
                    <hr>
                    <p class="card-text">
                    <table style="width:100%">
                        <tbody>
                            <tr>
                                <td>Nama Mahasiswa</td>
                                <td>:</td>
                                <td><?= $data['nama']; ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?= $data['email']; ?></td>
                            </tr>
                            <tr>
                                <td>No.HP</td>
                                <td>:</td>
                                <td><?= $data['no_hp']; ?></td>
                            </tr>
                            <tr>
                                <td>Semester</td>
                                <td>:</td>
                                <td><?= $data['semester']; ?></td>
                            </tr>
                            <tr>
                                <td>IPK</td>
                                <td>:</td>
                                <td><?= $data['ipk']; ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Beasiswa</td>
                                <td>:</td>
                                <td><?= $data['jenis_beasiswa']; ?></td>
                            </tr>
                            <tr>
                                <td>Berkas</td>
                                <td>:</td>
                                <td><a href="assets/file/<?= $data['berkas']; ?>"><img src="assets/img/pdf-logo.png" style="width: 2rem; margin-right: 1rem">Download</a></td>
                            </tr>
                            <tr>
                                <td>Status Ajuan</td>
                                <td>:</td>
                                <td><?= $data['status_ajuan']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    </p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <a href="hasil.php" class="btn btn-primary mx-3 mb-3">Kembali</a>
        </div>

    </div>

</div>