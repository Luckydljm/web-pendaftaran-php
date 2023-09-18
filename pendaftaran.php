<?php

session_start();
include('config.php');
include('layout/navbar.php');

if(isset($_POST['daftar'])){

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $semester = $_POST['semester'];
    $jenis_beasiswa = $_POST['jenis_beasiswa'];
    $ipk = $_POST['ipk'];
    $berkas_name = $_FILES['berkas']['name'];
    $berkas_size = $_FILES['berkas']['size'];

    // berkas
    $ext_file_accept = array('pdf');
    $pisahkan_ekstensi = explode('.', $berkas_name);
    $ekstensi_file = strtolower(end($pisahkan_ekstensi));
    $file_tmp_file = $_FILES['berkas']['tmp_name'];
    $tanggal = md5(date('Y-m-d h:i:s'));
    $berkas_name_new = $tanggal . '.' . $ekstensi_file;

    if (in_array($ekstensi_file, $ext_file_accept) === true) {
        move_uploaded_file($file_tmp_file, 'assets/file/' . $berkas_name_new);

        $sql = "INSERT INTO tb_daftar(nama, email, no_hp, semester, jenis_beasiswa, ipk, berkas) VALUES ('$nama','$email', '$no_hp', '$semester', '$jenis_beasiswa','$ipk', '$berkas_name_new')";
        $result = mysqli_query($conn, $sql);


        if ($result) {
            echo "<script>
              alert('Pendaftaran berhasil');
            </script>";
        } else {
            echo "<script>
              alert('Pendaftaran gagal');
            </script>";
        }

    } else {
        echo "<script>
              alert('File yang diupload bukan pdf');
        </script>";
    }

}

?>

    <h4 class="text-center mt-4">DAFTAR BEASISWA</h4>
    <div class="card my-4 w-50" style="margin: 0 auto;">
        <div class="card-header">
            Registrasi Beasiswa
        </div>
        <div class="card-body mt-4">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row g-2 align-items-center mb-4">
                    <div class="col-3">
                        <label for="inputNama" class="col-form-label">Masukkan Nama</label>
                    </div>
                    <div class="col-9">
                        <input type="text" name="nama" id="inputNama" class="form-control" required>
                    </div>
                </div>
                <div class="row g-2 align-items-center mb-4">
                    <div class="col-3">
                        <label for="inputEmail" class="col-form-label">Masukkan Email</label>
                    </div>
                    <div class="col-9">
                        <input type="email" name="email" id="inputEmail" class="form-control" required>
                    </div>
                </div>
                <div class="row g-2 align-items-center mb-4">
                    <div class="col-3">
                        <label for="inputHp" class="col-form-label">Nomor HP</label>
                    </div>
                    <div class="col-9">
                        <input type="text" name="no_hp" id="inputHp" class="form-control" required>
                    </div>
                </div>
                <div class="row g-2 align-items-center mb-4">
                    <div class="col-3">
                        <label for="inputSemester" class="col-form-label">Semester saat ini</label>
                    </div>
                    <div class="col-9">
                        <select class="form-select" name="semester">
                            <option selected>Pilih</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-4">
                    <div class="col-3">
                        <label for="inputIPK" class="col-form-label">IPK terakhir</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="ipk" id="inputIPK" value="" class="form-control" readonly>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-primary" onclick="myFunction()">Cek IPK</button>
                    </div>
                </div>
                <div class="row g-2 align-items-center mb-4">
                <div class="col-3">
                        <label for="inputBeasiswa" class="col-form-label">Pilihan Beasiswa</label>
                    </div>
                    <div class="col-9">
                        <select class="form-select" name="jenis_beasiswa" id="beasiswa">
                            <option selected>Pilihan Beasiswa</option>
                            <option value="Beasiswa Akademik">Beasiswa Akademik</option>
                            <option value="Beasiswa Non Akademik">Beasiswa Non Akademik</option>
                        </select>
                    </div>
                </div>
                <div class="row g-2 align-items-center mb-4">
                    <div class="col-3">
                        <label for="inputFile" class="col-form-label">Upload Berkas Syarat</label>
                    </div>
                    <div class="col-9">
                        <input type="file" name="berkas" id="inputFile" class="form-control" required>
                    </div>
                </div>
                <div class="row g-2 align-items-center text-center">
                    <div class="col-6">
                        <input type="submit" name="daftar" value="Daftar" class="btn btn-primary w-50" id="submit">
                    </div>
                    <div class="col-6">
                        <input type="reset" value="Batal" class="btn btn-danger w-50">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById("beasiswa").disabled = true;
        document.getElementById("inputFile").disabled = true;
        document.getElementById("submit").disabled = true;

        function myFunction(){
            const ipk = 3.7;
            document.getElementById("inputIPK").value = ipk;

            if(ipk >= 3.4){
                document.getElementById("beasiswa").disabled = false;
                document.getElementById("inputFile").disabled = false;
                document.getElementById("submit").disabled = false;
            }
        }
    </script>
