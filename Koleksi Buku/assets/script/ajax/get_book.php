<?php 
  include '../../../koneksi.php';
  $no = 1;
  $keyword ="";
  if (isset($_POST['search'])) {
    $keyword = $_POST['search'];
  }
  $data = mysqli_query ($koneksi, "SELECT buku.*, kategori.nama FROM buku inner join kategori on buku.kategori_id = kategori.id WHERE judul LIKE '%$keyword%' OR penulis LIKE '%$keyword%'");
  $hitung = mysqli_num_rows($data);
  if($hitung > 0){
  while($d = mysqli_fetch_array($data)){?>
  <div class="card">
    <div class="img">
      <img src="<?php echo $d['gambar']?>" alt="" />
    </div>
    <div class="content">
      <h5><?php echo $d['judul']?></h5>
      <p class="author"><?php echo $d['penulis']?></p>
      <p class="sinopsis"><?php echo substr($d['sinopsis'], 0 , 100).' ...'?></p>
      <a href="detail.php?id=<?php echo $d['id'];?>">Detail</a>
    </div>
  </div>
    <?php }}else{?>
    <h2 align="center">Buku tidak ditemukan!</h2>
    <?php }?>
