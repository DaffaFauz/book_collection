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

$data = mysqli_query($koneksi, "update buku set kategori_id='$kategori',judul='$judul',penulis='$penulis',penerbit='$penerbit',tahun_terbit='$tahun',sinopsis='$sinopsis',gambar='$imagePath' where id='$id'");


if($data){
    $_SESSION['ubah'] = 'ubah';
    // mengalihkan halaman kembali ke index.php
    header("location:../../buku.php");
}
}



 
?>