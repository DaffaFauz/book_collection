<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Data Kategori</title>
    <link rel="stylesheet" href="../../assets/style/admin_tambah.css" />
  </head>
  <body>
    <?php 
 include '../../koneksi.php';
  
 
  $query = mysqli_query($koneksi, "SELECT max(id) as kodeTerbesar FROM kategori");
  $data = mysqli_fetch_array($query);
  $kodeKategori = $data['kodeTerbesar'];
   
  $urutan = (int) substr($kodeKategori, 4, 3);
   
  $urutan++;
  $huruf = "KTG-";
  $kodeKategori = $huruf . sprintf("%03s", $urutan);
 
   
  ?>
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
          <li class="active">
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
            <h2>Tambah Data Kategori</h2>
            <div class="search">
              <a href="../kategori.php">Kembali</a>
            </div>
          </header>
          <section>
            <form action="method/tambah_kategori.php" method="post">
              <div class="row">
                <div class="col">
                  <input type="text" placeholder="ID Kategori" value="<?php echo $kodeKategori; ?>" name="id" readonly />
                  <input type="text" placeholder="Nama Kategori" name="nama" required/>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <textarea placeholder="Deskripsi" rows="3" name="deskripsi" required></textarea>
                </div>
                <button type="submit" name="submit">Tambah</button>
              </div>
            </form>
          </section>
        </article>
      </div>
    </main>
    <footer>Copyright<sup>&copy;</sup> 2023. Daffa Fauzul Hakim</footer>
    <script src="../../assets/script/admin.js"></script>
    <script src="https://kit.fontawesome.com/78363c6a06.js" crossorigin="anonymous"></script>
  </body>
</html>
