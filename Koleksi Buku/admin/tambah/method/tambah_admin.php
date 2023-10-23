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
$data = mysqli_query($koneksi,"insert into administrator values('$id','$nama','$username','$password')");

if($data){
    $_SESSION['alert'] = "tambah";
    header("location:../../admin.php");
}
// mengalihkan halaman kembali ke index.php
} 
?>