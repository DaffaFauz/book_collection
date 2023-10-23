<?php 
// koneksi database
include '../../../koneksi.php';
 
session_start();

if(isset($_POST['submit'])){

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
 
// menginput data ke database
$data = mysqli_query($koneksi,"update administrator set id='$id',nama='$nama',username='$username',password='$password' where id='$id'");

if($data){
    $_SESSION['ubah'] = 'ubah';
    // mengalihkan halaman kembali ke index.php
    header("location:../../admin.php");
}
}
?>