<?php
session_start();
$id = $_GET['id'];
include('config.php');
$sql = "DELETE FROM tb_daftar WHERE id='$id'";
$query = mysqli_query($conn, $sql);

header('location:hasil.php');
?>
