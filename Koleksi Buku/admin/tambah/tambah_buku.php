<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Data Buku</title>
    <link rel="stylesheet" href="../../assets/style/admin_tambah.css" />
  </head>
  <body>
  <?php
 
 
 include '../../koneksi.php';
  
 
 $query = mysqli_query($koneksi, "SELECT max(id) as kodeTerbesar FROM buku");
 $data = mysqli_fetch_array($query);
 $kodeBuku = $data['kodeTerbesar'];
  
 $urutan = (int) substr($kodeBuku, 3, 3);
  
 $urutan++;
 $huruf = "BK-";
 $kodeBuku = $huruf . sprintf("%03s", $urutan);
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
          <li class="active">
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
            <h2>Tambah Data Buku</h2>
            <div class="search">
              <a href="../buku.php">Kembali</a>
            </div>
          </header>
          <section>
            <form action="method/tambah_buku.php" method="post" enctype = "multipart/form-data">
              <div class="row">
                <div class="col">
                  <input type="text" placeholder="ID Buku" value="<?php echo $kodeBuku;?>" name="id" readonly />
                  <input type="text" placeholder="Judul Buku" name="judul"/>
                  <input type="text" placeholder="Penulis" name="penulis"/>
                  <input type="file" placeholder="Gambar" name="gambar">
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input type="text" placeholder="Penerbit" name="penerbit"/>
                  <input type="text" placeholder="Tahun Terbit" onfocus="this.type='date'" name="tahun"/>
                  <textarea type="text" placeholder="Sinopsis" name="sinopsis"></textarea>
                  <select name="kategori" id="">
                    <option value="" disabled selected>Kategori</option>
                    <?php
                    $data = mysqli_query($koneksi, "select * from kategori");
                     while($d = mysqli_fetch_array($data)){ ?>
                    <option value="<?php echo $d['id']?>"><?php echo $d['nama']?></option>
                    <?php } ?>
                  </select>
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