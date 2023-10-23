<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pengguna</title>
    <link rel="stylesheet" href="../assets/style/index_users.css">
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
		<div class="content">
    <?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'beranda':
				include "home.php";
				break;
			case 'buku':
				include "book.php";
				break;
			case 'tentang':
				include "about.php";
				break;
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "home.php";
	}
 
	 ?>
	 </div>
    </main>
    <footer>Copyright<sup>&copy;</sup> 2023. Daffa Fauzul Hakim</footer>
	<script src="../assets/script/script.js"></script>
</body>
</html>