<?php
	
	
	if(isset($_SESSION['sinopsis']))
	{
		include('config.php');
		
		$query= "select * from buku where kategori='".$_GET['kategori']."'";
		
		$hasil=mysql_query($query) or die (mysql_error());
		
		if($hasil){
			$data = mysql_fetch_array($hasil);
?>
		<form action="proses_editbook.php" method="post">
		<table bgcolor="black" border="1" align="center">
	<tr>
		<td><font color="white">Judul</td>
		<td>:</td>
		<td><input name="judul" placeholder="judul" value="<?php echo $data['judul']; ?>"></input></td>
	</tr>
	<tr>
		<td><font color="white">ID_Buku</td>
		<td>:</td>
		<td><input name="id_buku" placeholder="id_buku" value="<?php echo $data['id_buku']; ?>"></input></td>
	</tr>
	<tr>
		<td><font color="white">Gambar </td>
		<td>:</td>
		<td width="400">
			<input name="gambar" type="file" id="gambar" size="30"></input>
		</td>
	</tr>
	<tr>
		<td><font color="white">ID_Kategori</td>
		<td>:</td>
		<td><input type="text" name="kategori" value="<?php echo $data['kategori']; ?>" size="12"></td>
	</tr>
	<tr>
		<td><font color="white">Sinopsis:</td>
		<td>:</td>
		<td>
		<textarea cols="30" name="sinopsis" value="<?php echo $data['sinopsis']; ?>" rows="6" ></textarea>
	</tr>
	<tr>
		<td><font color="white">Deskripsi:</td>
		<td>:</td>
		<td>
		<textarea cols="30" name="deskripsi" value="<?php echo $data['sinopsis']; ?>" rows="10" ></textarea></td>
	</tr>
	<tr>
		<td><font color="white">Best Seller</td>
		<td>:</td>
		<td><input type="text" name="best_seller" value="<?php echo $data['best_seller']; ?>" size="12"></td>
	</tr>
	<tr>
	</table>
		<table align="center">
			<tr>
				<td colspan="3" align="center"> 
					<input type="submit" value="Save" ></input>
				</td>
				
			</tr>
			</table>
<?php
			
		}
		else{
			echo "<script>alert('Edit buku gagal');  window.history.back();</script>";						}
		}
		
	else{
		echo "<script>alert('Anda belum login');  window.history.back();</script>";
	}
?>