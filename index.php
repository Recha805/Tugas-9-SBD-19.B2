<?php include "header.php";?>
   <head>
      <title>SHOWROOM LAPTOP PLATZ</title>
      <style>
         body {font-family:tahoma, arial}
         table {border-collapse: collapse}
         th, td {font-size: 18px; border: 3px solid #DEDEDE; width:25px; padding:5px}
         th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
      </style>
   </head>
   <body>
      <center><h1>Laptop Platz</h1></center>
      <center><h3>Tabel Petugas</h3></center>
      <table>
         <thead>
            <tr>
               <th>ID Petugas</th>
               <th>Nama</th>
               <th>Alamat</th>
               <th>No TLP</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM petugas';
            $query = mysqli_query($conn, $sql);	
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_petugas'] ?></td>
               <td><?php echo $row['nama_petugas'] ?></td>
               <td><?php echo $row['alamat'] ?></td>
               <td><?php echo $row['no_tlp'] ?></td>
               <td><a href="edit_petugas.php?id=<?= $row['id_petugas']; ?>">Edit</a>
                    <a href="delete.php?id=<?= $row['id_petugas']; ?>">Delete</a>
                </td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <center><h3>Tabel Pembeli</h3></center>
      <table>
         <thead>
            <tr>
               <th>ID Pembeli</th>
               <th>Nama</th>
               <th>Alamat</th>
               <th>No TLP</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM pembeli';
            $query = mysqli_query($conn, $sql);	
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_pembeli'] ?></td>
               <td><?php echo $row['nama_pembeli'] ?></td>
               <td><?php echo $row['alamat'] ?></td>
               <td><?php echo $row['no_tlp'] ?></td>
               <td><a href="edit_pembeli.php?id=<?= $row['id_pembeli']; ?>">Edit</a>
                    <a href="delete.php?id=<?= $row['id_pembeli']; ?>">Delete</a>
                </td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <center><h3>Tabel Laptop</h3></center>
      <table>
         <thead>
            <tr>
               <th>ID Laptop</th>
               <th>Merk</th>
               <th>Jenis</th>
               <th>Tahun</th>
               <th>Warna</th>
               <th>Harga</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';	
            $sql = 'SELECT  * FROM laptop';
            $query = mysqli_query($conn, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row[0] ?></td>
               <td><?php echo $row[1] ?></td>
               <td><?php echo $row[2] ?></td>
               <td><?php echo $row[3] ?></td>
               <td><?php echo $row[4] ?></td>
               <td><?php echo $row[5] ?></td>
               <td><a href="edit_produk.php?id=<?= $row['id_laptop']; ?>">Edit</a>
                    <a href="delete.php?id=<?= $row['id_laptop']; ?>">Delete</a>
                </td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>

      <center><h3>Tabel Kredit</h3></center>
      <table>
         <thead>
            <tr>
               <th>ID Kredit</th>
               <th>Petugas</th>
               <th>Pembeli</th>
               <th>Laptop</th>
               <th>Tanggal Kredit</th>
               <th>Tanggal Lunas</th>
               <th>Total Bayar</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';	
            $sql = "SELECT * FROM kredit
            INNER JOIN petugas ON kredit.id_petugas = petugas.id_petugas
            INNER JOIN pembeli ON kredit.id_pembeli = pembeli.id_pembeli
            INNER JOIN laptop ON kredit.id_laptop = laptop.id_laptop";
            $query = mysqli_query($conn, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_kredit'] ?></td>
               <td><?php echo $row['nama_petugas'] ?></td>
               <td><?php echo $row['nama_pembeli'] ?></td>
               <td><?php echo $row['merk'] ?></td>
               <td><?php echo $row['tgl_kredit'] ?></td>
               <td><?php echo $row['tgl_lunas'] ?></td>
               <td><?php echo $row['total_bayar'] ?></td>
               <td><a href="edit_transaksi.php?id=<?= $row['id_kredit']; ?>">Edit</a>
                    <a href="delete.php?id=<?= $row['id_kredit']; ?>">Delete</a>
                </td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table> 
   </body>
   <?php include "footer.php";?>
</html>