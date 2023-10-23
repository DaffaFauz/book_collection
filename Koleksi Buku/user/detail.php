<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
    <link rel="stylesheet" href="../assets/style/detail_user.css">
</head>
<body>
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}?>
    <header>
        <div class="navbar">
            <h3>E-Library</h3>
            <ul class="menu">
                <li><a href="index.php?page=beranda">Beranda</a></li>
                <li><a href="index.php?page=buku">Buku</a></li>
                <li><a href="index.php?page=tentang">Tentang</a></li>
                <li><a href="../logout.php">Logout</a></li>
            </ul>
        </div>
    </header>
    <main>
      <?php
      include '../koneksi.php';
      $id = $_GET['id'];
      $data = mysqli_query($koneksi, "select buku.*, kategori.* from buku inner join kategori on buku.kategori_id=kategori.id where buku.id='$id'");
      while($d = mysqli_fetch_array($data)){
      ?>
      <section>
        <div class="cover">
        <img src="<?= $d['gambar'];?>" alt="">
      </div>
      <div class="detail">
        <table>
          <tr>
            <th>Judul</th>
            <td><?= $d['judul'];?></td>
          </tr>
          <tr>
            <th>Penulis</th>
            <td><?= $d['penulis'];?></td>
          </tr>
          <tr>
            <th>Kategori</th>
            <td><?= $d['nama'];?></td>
          </tr>
          <tr>
            <th>Sinopsis</th>
            <td><?= $d['sinopsis'];?></td>
          </tr>
          <tr>
            <th>Penerbit</th>
            <td><?= $d['penerbit'];?></td>
          </tr>
          <tr>
            <th>Tahun Terbit</th>
            <td><?= $d['tahun_terbit'];?></td>
          </tr>
        </table>
        <div class="link">
        <a href="index.php?page=buku">Kembali</a>
        </div>
      </div>
      </section>
      <?php }?>
    </main>
    <footer>Copyright<sup>&copy;</sup> 2023. Daffa Fauzul Hakim</footer>
    <script src="../assets/script/script.js"></script>
    <script>

		
window.onscroll = function () {
  myFunction();
};

		var navbar = document.querySelector('.navbar');
		var sticky = navbar.offsetTop;

		function myFunction() {
		if (window.pageYOffset >= sticky) {
			navbar.classList.add('sticky');
		} else {
			navbar.classList.remove('sticky');
		}
		}

	</script>
</body>
</html>