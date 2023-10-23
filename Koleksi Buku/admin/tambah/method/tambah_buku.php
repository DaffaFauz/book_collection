<?php 
// koneksi database
include '../../../koneksi.php';
 
session_start();

if(isset($_POST['submit'])){
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];
$sinopsis = $_POST['sinopsis'];
$kategori = $_POST['kategori'];

$gambar = $_FILES['gambar']['name'];
$filetmp = $_FILES['gambar']['tmp_name'];
$imagePath = '../assets/img/cover/'.$gambar;

move_uploaded_file($filetmp, '../../../assets/img/cover/'.$gambar);

$data = mysqli_query($koneksi, "insert into buku values('$id','$kategori','$judul','$penulis','$penerbit','$tahun','$sinopsis','$imagePath')");

if($data){
    $_SESSION['alert'] = 'tambah';
    // mengalihkan halaman kembali ke index.php
    header("location:../../buku.php");
}


 
}
?>