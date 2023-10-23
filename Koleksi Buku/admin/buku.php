<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Buku</title>
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

<?php 
		if(isset($_GET['alert'])){
			if($_GET['alert']=='gagal_ekstensi'){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
					Ekstensi Tidak Diperbolehkan
				</div>								
				<?php
			}elseif($_GET['alert']=="gagal_ukuran"){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Peringatan !</h4>
					Ukuran File terlalu Besar
				</div> 								
				<?php
			}elseif($_GET['alert']=="berhasil"){
				?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Success</h4>
					Berhasil Disimpan
				</div> 								
				<?php
			}
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
          <li class="active">
            <a href="buku.php"><i class="fa-solid fa-book fa-2xs"></i> Buku</a>
          </li>
          <li>
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
            <h2>Data Buku</h2>
            <div class="search">
              <input type="text" name="search" id="search" placeholder="Masukkan judul buku" />
              <a href="tambah/tambah_buku.php"><i class="fa-solid fa-plus"></i> Tambah Data Buku</a>
            </div>
          </header>
          <section id="hasil">
            <table>
              <tr>
                <th style="width: 5%">No</th>
                <th>Kode Buku</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Sinopsis</th>
                <th>Kategori</th>
                <th style="width: 15%">Aksi</th>
              </tr>
              <tr>
                <?php 
                include '../koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "select buku.*, kategori.nama from buku inner join kategori on buku.kategori_id=kategori.id");
                while($d = mysqli_fetch_array($data)){?>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id'];?></td>
                <td><img src="<?php echo $d['gambar']?>" style="width:70px" alt=""></td>
                <td><?php echo $d['judul'];?></td>
                <td><?php echo $d['penulis'];?></td>
                <td><?php echo $d['sinopsis'];?></td>
                <td><?php echo $d['nama']?></td>
                <td align="center">
                <a class="edit" href="edit/edit_buku.php?id=<?php echo $d['id'];?>"><i class="fa-solid fa-pen-to-square"></i></a> | <a class="delete" href="delete/delete_buku.php?id=<?php echo $d['id'];?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data? ')"><i class="fa-solid fa-trash"></i></a>
                </td>
              </tr>
              <?php } ?>
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
        url:"../assets/script/ajax/get_data_buku.php",
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
