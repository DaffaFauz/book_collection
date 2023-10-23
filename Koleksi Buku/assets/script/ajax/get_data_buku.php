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
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id'];?></td>
                <td><img src="<?php echo $d['gambar']?>" style="width:70px" alt=""></td>
                <td><?php echo $d['judul'];?></td>
                <td><?php echo $d['penulis'];?></td>
                <td><?php echo $d['sinopsis'];?></td>
                <td><?php echo $d['nama']?></td>
                <td align="center">
                <a class="edit" href="edit/edit_buku.php?id=<?php echo $d['id'];?>"><i class="fa-solid fa-pen-to-square"></i></a> | <a class="delete" href="delete/delete_buku.php?id=<?php echo $d['id'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')"><i class="fa-solid fa-trash"></i></a>
                </td>
              </tr>
              <?php }} else { ?>
            <tr>
              <td colspan="8" style="text-align:center">Data tidak ditemukan!</td>
            </tr>
            <?php }?>
            </table>