<?php 
// koneksi database
include '../../../koneksi.php';
 
session_start();

if(isset($_POST['submit'])){
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$no = $_POST['no'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
 
// menginput data ke database
$data = mysqli_query($koneksi,"insert into anggota values('$id','$nama','$username','$no','$alamat','$email')");
 
if($data){
    $_SESSION['alert'] = "tambah";
    // mengalihkan halaman kembali ke index.php
    header("location:../../anggota.php");
}
}
?>