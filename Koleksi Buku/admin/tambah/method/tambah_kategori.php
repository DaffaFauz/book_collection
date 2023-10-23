<?php 
// koneksi database
include '../../../koneksi.php';
 
session_start();
if(isset($_POST['submit'])){
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
 
// menginput data ke database
$data = mysqli_query($koneksi,"insert into kategori values('$id','$nama','$deskripsi')");
 
if($data){
    $_SESSION['alert'] = 'tambah';
    // mengalihkan halaman kembali ke index.php
    header("location:../../kategori.php");
}
}
?>