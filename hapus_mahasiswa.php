<?php

session_start(); // Mulai session

$mysqli = new mysqli('localhost', 'root', '', 'tedc');

$nim = $_GET['nim'];
$delete = $mysqli->query("DELETE FROM `students` WHERE nim = '$nim'");

if ($delete) {
	$_SESSION['success_message'] = 'Data berhasil Dihapus!';
        header('Location: mahasiswa.php'); // Redirect ke halaman mahasiswa.php
        exit();
    } else {
        $_SESSION['error_message'] = 'Gagal menambahkan data: ' . $delete->error;
}
?>	