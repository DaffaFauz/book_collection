<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Kategori</title>
    <link rel="stylesheet" href="../assets/style/admin.css" />
  </head>
  <body>
  <?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../login_admin.php?pesan=belum_login");
	}

  if(isset($_SESSION['alert'])){
    echo "<script>alert('Data berhasil ditambahkan!')</script>";
    unset($_SESSION['alert']);
  }else if(isset($_SESSION['ubah'])){
    echo "<script>alert('Data berhasil diubah!')</script>";
    unset($_SESSION['ubah']);
  }else if(isset($_SESSION['hapus'])){
    echo "<script>alert('Data berhasil dihapus!')</script>";
    unset($_SESSION['hapus']);
  }
	?>
    <header>
      <div class="sidebar">
        <div class="header">
          <h3>E-Library</h3>
        </div>
        <ul class="menu">
        <li>
            <a href="admin.php"><i class="fa-solid fa-user fa-2xs"></i> Admin</a>
          </li>
          <li>
            <a href="anggota.php"><i class="fa-solid fa-user fa-2xs"></i> Anggota</a>
          </li>
          <li>
            <a href="buku.php"><i class="fa-solid fa-book fa-2xs"></i> Buku</a>
          </li>
          <li class="active">
            <a href="kategori.php"><i class="fa-solid fa-pen-nib fa-2xs"></i> Kategori</a>
          </li>
          <li>
          <a href="profil.php"><i class="fa-solid fa-user fa-2xs"></i> Profil</a>
          </li>
          <li>
            <a href="../logout.php"><i class="fa-solid fa-right-from-bracket fa-2xs"></i> Logout</a>
          </li>
        </ul>
      </div>
    </header>
    <main>
      <div id="content">
        <article>
          <header>
            <h2>Data Kategori</h2>
            <div class="search">
              <input type="text" name="search" id="search" placeholder="Masukkan nama kategori" />
              <a href="tambah/tambah_kategori.php"><i class="fa-solid fa-plus"></i> Tambah Data Kategori</a>
            </div>
          </header>
          <section id="hasil">
            <table>
              <tr>
                <th style="width: 5%">No</th>
                <th>ID Kategori</th>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
                <th style="width: 15%">Aksi</th>
              </tr>
              <tr>
                <?php
                include '../koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "select * from kategori");
                while($d = mysqli_fetch_array($data)){?>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['deskripsi']; ?></td>
                <td align="center">
                <a class="edit" href="edit/edit_kategori.php?id=<?php echo $d['id'];?>"><i class="fa-solid fa-pen-to-square"></i></a> | <a class="delete" href="delete/delete_kategori.php?id=<?php echo $d['id'];?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data? ')"><i class="fa-solid fa-trash"></i></a>
                </td>
              </tr>
              <?php }?>
            </table>
          </section>
        </article>
      </div>
    </main>
    <footer>Copyright<sup>&copy;</sup> 2023. Daffa Fauzul Hakim</footer>
    <script src="../assets/script/admin.js"></script>
    <script src="https://kit.fontawesome.com/78363c6a06.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    load_data();
    function load_data(search){
      $.ajax({
        url:"../assets/script/ajax/get_data_kategori.php",
        method:"POST",
        data: {
          search: search
        },
        success:function(data){
          $('#hasil').html(data);
        }
      });
    }
    $('#search').keyup(function(){
      var search = $("#search").val();
      load_data(search);
    });
  });
  </script>
  </body>
</html>
