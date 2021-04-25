<?php
include 'koneksi.php';
// menyimpan data ke dalam variabel
$nama=$_POST['Nama'];
$jkel=$_POST['jenis_kelamin'];
$email=$_POST['Email'];
$alamat=$_POST['Alamat'];
$kota=$_POST['Kota'];
$pesan=$_POST['Pesan'];
// query SQL untuk insert data
$query="INSERT INTO kontak SET nama='$nama', jkel='$jkel', email='$email', alamat='$alamat', kota='$kota', pesan='$pesan'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:tampilkontak.php");
?>