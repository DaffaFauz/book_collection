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
$data = mysqli_query($koneksi,"update kategori set id='$id',nama='$nama',deskripsi='$deskripsi' where id='$id'");
 
if($data){
    $_SESSION['ubah'] = 'ubah';
    // mengalihkan halaman kembali ke index.php
    header("location:../../kategori.php");
}
}
?>