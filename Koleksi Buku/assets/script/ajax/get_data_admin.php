<table>
              <tr>
              <th style="width: 5%">No</th>
                <th style="width: 10%">ID Admin</th>
                <th>Nama</th>
                <th>Username</th>
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
                $data = mysqli_query ($koneksi, "SELECT * FROM administrator WHERE nama LIKE '%$keyword%' OR username LIKE '%$keyword%'");
                $hitung = mysqli_num_rows($data);
                if($hitung > 0){
                while($d = mysqli_fetch_array($data)){?>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['username']; ?></td>
                <td align="center">
                  <a class="edit" href="edit/edit_admin.php?id=<?php echo $d['id'];?>"><i class="fa-solid fa-pen-to-square"></i></a> | <a class="delete" href="delete/delete_admin.php?id=<?php echo $d['id'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')"><i class="fa-solid fa-trash"></i></a>
                </td>
              </tr>
              <?php } 
            } else { ?>
            <tr>
              <td colspan="5" style="text-align:center">Data tidak ditemukan!</td>
            </tr>
            <?php }?>
            </table>