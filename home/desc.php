<?php
		include('config.php');
?>
		<link rel="stylesheet" href="css/style.css">
<?php			
	$query= "SELECT * FROM buku WHERE id_buku = '".$_GET['id_buku']."'";
	
	$hasil=mysql_query($query) or die (mysql_error());
	
	
	while($data = mysql_fetch_array($hasil))
	{
		echo  "
		<table bgcolor='#080808' align='center' width='210'>
				<tr>
					<td align='center'>
						<font color='white' size='5'> JUDUL : " .$data['judul']."
					</td>
				</tr>
		</table>
		<br>
		<table bgcolor='#080808' align='center' width='210' height='210' a>
			<tr>
				<td width='200px' align='center'> 
					<img src='../design/".$data['gambar']."' width='200px' height='200px'/> 
				</td>
		</tr>
		</table>
		<br>
		<table bgcolor='#080808' align='center' width='700' height='170'>
			<tr>
				<td colspan='2'>
					<font color='white'> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp" 
					.$data['deskripsi']."
				</td>
			</tr>";
	}	
	echo'</td></tr></table>';
?>
</td></tr>
</table>
</table>
<?php
?>