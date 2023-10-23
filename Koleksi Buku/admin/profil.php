<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil Pengembang</title>
    <link rel="stylesheet" href="../assets/style/admin_profil.css" />
  </head>
  <body>
  <?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../login_admin.php?pesan=belum_login");
	}?>
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
          <li>
            <a href="kategori.php"><i class="fa-solid fa-pen-nib fa-2xs"></i> Kategori</a>
          </li>
          <li class="active">
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
        <article class="profile">
          <header align=center>
            <h2>Tentang Pengembang</h2>
            <img src="../assets/img/profile.jpg" alt="Foto profil">
            <h4>Daffa Fauzul Hakim</h4>
          </header>
          <section>
          <h3>Lainnya</h3>
            <table>
              <tr>
                <td>Jurusan / semester</td>
                <td>:</td>
                <td>Sisem Informasi / 2</td>
              </tr>
              <tr>
                <td><a href="https://www.Instagram.com/daffa_fauzul" target="_blank">Instagram</a></td>
                <td>:</td>
                <td><a href="https://www.Instagram.com/daffa_fauzul" target="_blank">@daffa_fauzul</a></td>
              </tr>
              <tr>
                <td><a href="https://www.facebook.com/daffa.fauzulhakim" target="_blank">Facebook</a></td>
                <td>:</td>
                <td><a href="https://www.facebook.com/daffa.fauzulhakim" target="_blank">Fauz</a></td>
              </tr>
              <tr>
                <td><a href="https://www.github.com/DaffaFauz" target="_blank">Github</a></td>
                <td>:</td>
                <td><a href="https://www.github.com/DaffaFauz" target="_blank">DaffaFauz</a></td>
              </tr>
            </table>
          </section>
        </article>
      </div>
    </main>
    <footer>Copyright<sup>&copy;</sup> 2023. Daffa Fauzul Hakim</footer>
    <script src="../assets/script/admin.js"></script>
    <script src="https://kit.fontawesome.com/78363c6a06.js" crossorigin="anonymous"></script>
  </body>
</html>
