<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Data Admin</title>
    <link rel="stylesheet" href="../../assets/style/admin_tambah.css" />
  </head>
  <body>
  <?php
 
 // https://www.malasngoding.com
 // menghubungkan dengan koneksi database
 include '../../koneksi.php';
  
 // mengambil data barang dengan kode paling besar
 $query = mysqli_query($koneksi, "SELECT max(id) as kodeTerbesar FROM administrator");
 $data = mysqli_fetch_array($query);
 $kodeAdmin = $data['kodeTerbesar'];
  
 // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
 // dan diubah ke integer dengan (int)
 $urutan = (int) substr($kodeAdmin, 4, 3);
  
 // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
 $urutan++;
  
 // membentuk kode barang baru
 // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
 // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
 // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
 $huruf = "ADM-";
 $kodeAdmin = $huruf . sprintf("%03s", $urutan);
?>
    <header>
      <div class="sidebar">
        <div class="header">
          <h3>E-Library</h3>
        </div>
        <ul class="menu">
        <li class="active">
            <a href="../admin.php"><i class="fa-solid fa-user fa-2xs"></i> Admin</a>
          </li>
          <li>
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
            <h2>Tambah Data Admin</h2>
            <div class="search">
              <a href="../admin.php">Kembali</a>
            </div>
          </header>
          <section>
            <form action="method/tambah_admin.php" method="post">
              <div class="row">
                <div class="col">
                  <input type="text" placeholder="ID Admin" value="<?php echo $kodeAdmin ?>" name="id" readonly />
                  <input type="text" placeholder="Nama" name="nama" required/>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input type="text" placeholder="Nama Pengguna" name="username" required/>
                  <input type="password" placeholder="Password" name="password" required/>
                </div>
                <button type="submit" name="submit">Tambah</button>
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
