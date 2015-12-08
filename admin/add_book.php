<?php
include("config.php");
?>
	<title>ADD BOOK</title></head>
	<body>
	<table><tr><td>
	<h3><p align="center"><font color="white">Add Book</p></h3>
	<form method="post" action="proses_addbook.php" >

	<table bgcolor="black" border="1" align="center">
	<tr>
		<td><font color="white">Judul</td>
		<td>:</td>
		<td><input type="text" name="judul" size="30"></td>
	</tr>
	<tr>
		<td><font color="white">ID_Buku</td>
		<td>:</td>
		<td><input type="text" name="id_buku" size="12"></td>
	</tr>
	<tr>
		<td><font color="white">Gambar </td>
		<td>:</td>
		<td width="400">
			<input color ="white" name="gambar" type="file" id="gambar" size="30"></input>
		</td>
	</tr>
	<tr>
		<td><font color="white">ID_Kategori</td>
		<td>:</td>
		<td><input type="text" name="kategori" size="12"></td>
	</tr>
	<tr>
		<td><font color="white">Sinopsis:</td>
		<td>:</td>
		<td>
		<textarea cols="30" name="sinopsis" rows="6" ></textarea></td>
	</tr>
	<tr>
		<td><font color="white">Deskripsi:</td>
		<td>:</td>
		<td>
		<textarea cols="30" name="deskripsi" rows="10" ></textarea></td>
	</tr>
	<tr>
		<td><font color="white">Best Seller</td>
		<td>:</td>
		<td><input type="text" name="best_seller" size="12"></td>
	</tr>
	<tr>
	</table>
	<table  width="510" align="center"><tr>
	<td>
	<table bgcolor="white" width="50" border="1">
	<tr>
	<td colspan='2' >
		Keterangan
	</td>
	</tr>
	<tr>
	<td>
		<table >
			<tr>
				<td colspan="3">ID_Kategori</td>
			</tr>
				<tr><td>Komik </td><td>:</td> <td>1</td>
			</tr>
			<tr>
				<tr><td>Novel </td><td>:</td> <td>2</td>			
				</tr>
			<tr>
				<td>Biografi </td><td>:</td> <td>3</td>
			</tr>
	</td>
	</tr>
	</table>
	</td>
	<td>
	<table width="100">
			<tr>
				<td colspan="3" >ID Best Seller</td>
			</tr>
				<tr><td>Yes </td><td>:</td> <td>1</td>
			</tr>
			<tr>
				<tr><td>NO </td><td>:</td> <td>0</td>			
			</tr>
			<tr>
				<tr><td>&nbsp </td><td></td> <td></td>			
			</tr>
		
	</td>
	</tr>
	</table>
	</td></tr>
	</table>
	</td>
	<td>
	<table align="center" align="right">
		<tr><td colspan="3" align="right"><input value="Simpan" name="submit" type="submit" /></td></tr>
		<tr><td colspan="3" align="right"><input value="Reset" type="reset" /></td></tr>
		<tr><td colspan="3" align="right"><input value="Kembali" type="button"  onClick="self.history.back()"></td></tr>
	</table>
	</td>
	</form>
	
	
	

