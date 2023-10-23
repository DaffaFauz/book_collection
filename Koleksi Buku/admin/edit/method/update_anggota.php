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
$data = mysqli_query($koneksi, "update anggota set nama='$nama', nama_pengguna='$username', no_hp='$no', alamat='$alamat', email='$email' where id='$id'");
 
if($data){
    $_SESSION['ubah'] = 'ubah';
    // mengalihkan halaman kembali ke index.php
    header("location:../../anggota.php");
}
}
?>