<?php
include 'koneksi.php';

$idkelas = $_POST['Fidkelas'];
$namakelas = $_POST['Fnamakelas'];
$walikelas = $_POST['Fwalikelas'];

mysqli_query($koneksi,"INSERT INTO tbkelas VALUES('$idkelas','$namakelas','$walikelas')");
header("location:index.php");

?>