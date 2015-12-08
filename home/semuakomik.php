<?php
	include('config.php');
?>
	<link rel="stylesheet" href="css/style.css">
		<table  align="center" width="700" height="170"><tr><td>
			<table border="1" bgcolor="#080808" align="center" width="700">
			<tr>
				<td  align="center" width="100px"><font color="white">Gambar</font></td>
				<td  align="center"><font color="white">Description</font></td>
			</tr>
		</table>
		<br>
			<table border="1" bgcolor="#080808" align="center" width="700" height="170">
				<?php
					$query= "select * from buku where kategori='1'";
					$hasil=mysql_query($query) or die (mysql_error());
										
					while($data = mysql_fetch_array($hasil))
					{
						echo  "<tr>
						<td width='100px'> 
							<img src= '../design/".$data['gambar']."' width='100px' height='100px'/> 
						</td>
						<td>
							<font color='white'>".$data['sinopsis']."<br><br> 
							<stext><a href='index.php?page=desc&id_buku=".$data['id_buku']."'>See More</a></stext>
					</td></tr>";
					}?>
					</table>
</td></tr>
</table>
</table>
<?php
?>
