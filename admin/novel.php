<?php	include('config.php');

?>

<table border="1" bgcolor="black" align="center" width="700" height="170">
	<tr>
		<td colspan="2" align="center" width='250px'><font color='white'>Buku</td>
		<td align="center"><font color='white'>action</td>
	</tr>
<?php
	$query= "select * from buku where kategori = 2 ";
	$hasil=mysql_query($query) or die ('query error');
	$baris = mysql_num_rows($hasil);
	
	while($data = mysql_fetch_array($hasil))
	{
		echo "
		<tr>
			<td width='100px' height='100px'><img src=../design/".$data['gambar']." width='100px' height='100px'></td>
			<td>
				<table>
					<tr>
						<td><font color='white'>Judul</td>
						<td><font color='white'>:</td>
						<td><font color='white'>".$data['judul']."</td>
					</tr>
					<tr>
						<td><font color='white'>ID_Buku</td>
						<td><font color='white'>:</td>
						<td><font color='white'>".$data['id_buku']."</td>
					</tr>
					<tr>
						<td><font color='white'>Kategori</td>
						<td><font color='white'>:</td>
						<td><font color='white'>".$data['kategori']."</td>
					</tr>
					<tr>
						<td><font color='white'>Best Seller</td>
						<td><font color='white'>:</td>
						<td><font color='white'>".$data['best_seller']."</td>
					</tr>
				</table>
			</td>
		<td>
			<a href='index.php?page=edit_bestseller&kategori=".$data['id_buku']."'>edit</a>
			<br>
			<a href='hapus_bestseller.php?sinopsis=".$data['sinopsis']."'>hapus </a>
		</td>
		</tr>";
	}
	
?>
</table>
<?php
	
?>
