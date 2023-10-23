<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ubah Data Anggota</title>
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
          <li class="active">
            <a href="../anggota.php"><i class="fa-solid fa-user fa-2xs"></i> Anggota</a>
          </li>
          <li>
            <a href="../buku.php"><i class="fa-solid fa-book fa-2xs"></i> Buku</a>
          </li>
          <li>
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
            <h2>Ubah Data Anggota</h2>
            <div class="search">
              <a href="../anggota.php">Kembali</a>
            </div>
          </header>
          <section>
          <?php
	include '../../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from anggota where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
            <form action="method/update_anggota.php" method="post">
              <div class="row">
                <div class="col">
                  <input type="text" placeholder="ID Anggota" value="<?php echo $d['id']?>" name="id" readonly />
                  <input type="text" placeholder="Nama" value="<?php echo $d['nama']?>" name="nama"/>
                  <input type="text" placeholder="Nama" value="<?php echo $d['nama_pengguna']?>" name="username"/>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input type="number" placeholder="No. Hp" value="<?php echo $d['no_hp']?>" name="no"/>
                  <textarea placeholder="Alamat" rows="3" name="alamat" value="<?php echo $d['alamat']?>"><?php echo $d['alamat']?></textarea>
                  <input type="email" placeholder="No. Hp" value="<?php echo $d['email']?>" name="email"/>
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
