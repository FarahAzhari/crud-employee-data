<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];

mysqli_query($koneksi,"update karyawan set nama='$nama', pekerjaan='$pekerjaan', alamat='$alamat' where id='$id'");
header("location:index.php");

?>