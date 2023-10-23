<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ubah Data Kategori</title>
    <link rel="stylesheet" href="../../assets/style/admin_tambah.css" />
  </head>
  <body>
    <header>
      <div class="sidebar">
        <div class="header">
          <h3>E-Library</h3>
        </div>
        <ul class="menu">
        <li>
            <a href="../admin.php"><i class="fa-solid fa-user fa-2xs"></i> Admin</a>
          </li>
          <li>
            <a href="../anggota.php"><i class="fa-solid fa-user fa-2xs"></i> Anggota</a>
          </li>
          <li>
            <a href="../buku.php"><i class="fa-solid fa-book fa-2xs"></i> Buku</a>
          </li>
          <li  class="active">
            <a href="../kategori.php"><i class="fa-solid fa-pen-nib fa-2xs"></i> Kategori</a>
          </li>
          <li>
          <a href="../profil.php"><i class="fa-solid fa-user fa-2xs"></i> Profil</a>
          </li>
          <li>
            <a href="../../logout.php"><i class="fa-solid fa-right-from-bracket fa-2xs"></i> Logout</a>
          </li>
        </ul>
      </div>
    </header>
    <main>
      <div id="content">
        <article>
          <header>
            <h2>Ubah Data Kategori</h2>
            <div class="search">
              <a href="../kategori.php">Kembali</a>
            </div>
          </header>
          <section>
          <?php 
          include '../../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from kategori where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
            <form action="method/update_kategori.php" method="post">
              <div class="row">
                <div class="col">
                  <input type="text" placeholder="ID Kategori" name="id" value="<?php echo $d['id']?>" readonly />
                  <input type="text" placeholder="Nama Kategori" name="nama" value="<?php echo $d['nama']?>"/>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <textarea placeholder="Deskripsi" rows="3" value="<?php echo $d['deskripsi']?>" name="deskripsi"><?php echo $d['deskripsi']?></textarea>
                </div>
                <button type="submit" name="submit">Ubah</button>
              </div>
            </form>
            <?php }?>
          </section>
        </article>
      </div>
    </main>
    <footer>Copyright<sup>&copy;</sup> 2023. Daffa Fauzul Hakim</footer>
    <script src="../../assets/script/admin.js"></script>
    <script src="https://kit.fontawesome.com/78363c6a06.js" crossorigin="anonymous"></script>
  </body>
</html>
