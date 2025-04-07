<!DOCTYPE html>
<html>
<head>
	<title>KIDS TOYS</title>
</head>
<body>
	<center>
		<!-- Kesalahan ejaan "Baran" -->
		<h2>SENARAI BARANG MAINAN</h2>
<body style = "background-color:#D77EF0;">
   
		
		<table border="1" cellspacing="0" cellpadding="6">
		  <tr bgcolor="#eee">	

			<th>KOD PRODUK</th>
			<th>NAMA PRODUK</th>
        		<th>HARGA</th>
        		<th>KUANT</th>

<td></td>
			
		  </tr>

		  <?php
		  // kode yang betul adalah 'config.php'
		  	include 'config.php';

		  	$papar=mysqli_query($connect,"SELECT * FROM jadualmainan");

		  	while ($row=mysqli_fetch_array($papar)) {
		  		$totalRecord=mysqli_num_rows($papar);
		  		
		  echo "
		  <tr>	
			<td>".$row['kod_produk']."</td>
			<td>".$row['nama_produk']."</td>
        		<td>".$row['harga']."</td>
        		<td>".$row['kuantiti']."</td>
<td><a href='delete.php?kod_produk=".$row['kod_produk']."' onclick='myHapus()'> Hapus </a></td>
		  </tr>";
		}
		  ?>
		</table>
<!--kesalahan pada kode,sepatutnya "add.php"--> 
<p><a href="add.php">Tambah Rekod</a></p>
		
	</center>

	
</body>
</html>


