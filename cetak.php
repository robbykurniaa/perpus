<html>
<head>
	<title>PRINT DATA ANGGOTA</title>
</head>
<body>
	<?php 
	include "inc/koneksi.php";
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">ID Anggota</th>
			<th>Nama Anggota</th>
		</tr>
		<?php 
		 $no=1;
         $q=mysqli_query($con,"SELECT * FROM buku");
         while($b=mysqli_fetch_assoc($q)){
		?>
		<tr>
			
			<td><?php echo $b['idbuku'];?></td></td>
            <td><?php echo $b['judulbuku'];?></td></td>
            <td><?php echo $b['penerbit'];?></td></td>
            <td><?php echo $b['norak'];?></td></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>