<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN</title>
    <link rel="stylesheet" href="assets/style/login.css" />
  </head>
  <body>
    <div class="card">
      <h1>LOGIN</h1>
      <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "belum_login"){
      echo "Anda harus login untuk mengakses halaman admin";
    }
		}
	?>
      <form action="logina.php" method="post">
        <div class="input">
          <input type="text" placeholder="Username" name = "username" required/>
          <input type="Password" placeholder="Password" name ="password" required/>
        </div>
        <div class="button">
          <input type="submit" value="Log In" />
          <a href="index.php">Login sebagai Pengguna</a>
        </div>
      </form>
    </div>
  </body>
</html>
