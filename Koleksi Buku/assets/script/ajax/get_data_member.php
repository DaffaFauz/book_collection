<table>
              <tr>
                <th style="width: 5%">No</th>
                <th style="width: 10%">ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. HP</th>
                <th>E-mail</th>
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
                $data = mysqli_query ($koneksi, "SELECT * FROM anggota WHERE nama LIKE '%$keyword%' OR no_hp LIKE '%$keyword%'");
                $hitung = mysqli_num_rows($data);
                if($hitung > 0){
                while($d = mysqli_fetch_array($data)){?>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['no_hp']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td align="center">
                  <a class="edit" href="edit/edit_anggota.php?id=<?php echo $d['id'];?>"><i class="fa-solid fa-pen-to-square"></i></a> | <a class="delete" href="delete/delete_anggota.php?id=<?php echo $d['id'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')"><i class="fa-solid fa-trash"></i></a>
                </td>
              </tr>
              <?php } 
            } else { ?>
            <tr>
              <td colspan="7" style="text-align:center">Data tidak ditemukan!</td>
            </tr>
            <?php }?>
            </table>