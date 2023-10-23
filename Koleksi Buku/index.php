<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN</title>
    <link rel="stylesheet" href="assets/style/login_user.css" />
  </head>
  <body>
    <div class="card">
      <h1>Login</h1>
      <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<script>alert('Login gagal! username salah!')</script>";
		}else if($_GET['pesan'] == "belum_login"){
      echo "<script>alert('Anda harus login untuk mengakses halaman')</script>";}
	}
	?>
      <form action="loginu.php" method="post">
        <div class="input">
          <input type="text" placeholder="Username" name = "username" required/>
        </div>
        <div class="button">
          <input type="submit" value="Log In" />
          <a href="login_admin.php">Login sebagai Admin</a>
        </div>
      </form>
    </div>
  </body>
</html>
