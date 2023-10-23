<link rel="stylesheet" href="../assets/style/book_users.css">
<article>
  <header>
        <h3>Daftar Buku</h3>
        <div class="search">
        <input type="text" name="search" id="search" placeholder="Masukkan judul buku"/>
        </div>
  </header>
  <section id="hasil">
        <?php 
        include "../koneksi.php";
        $data = mysqli_query($koneksi, "select * from buku");
        $hitung = mysqli_num_rows($data);
        if($hitung > 0){
        while($d = mysqli_fetch_array($data)){
            ?>
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
          <h2 align="center">Buku belum tersedia!</h2>
          <?php }?>

    </section>
</article>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    load_data();
    function load_data(search){
      $.ajax({
        url:"../assets/script/ajax/get_book.php",
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