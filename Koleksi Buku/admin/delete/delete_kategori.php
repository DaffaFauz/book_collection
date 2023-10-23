<?php 
// koneksi database
include '../../koneksi.php';
session_start();
if(isset($_GET['id'])){
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
$data = mysqli_query($koneksi,"delete from kategori where id='$id'");
 
if($data){
    $_SESSION['hapus'] = 'hapus';
    // mengalihkan halaman kembali ke index.php
    header("location:../kategori.php");
}
}
?>