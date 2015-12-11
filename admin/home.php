<?php
	include('config.php');

?>

		<table align="center" width="700" >
			<tr>
			<td align="left"><a href="index.php?page=add_book"><img width="25" height="25" src=../design/addbook.png></img></a></td>
			</tr>

		</table>

<table border="1" bgcolor="black" align="center" width="700" height="170">
	<tr>
		<td colspan="2" align="center" width='250px'><font color='white'>Buku</td>
		<td align="center"><font color='white'>action</td>
	</tr>
<?php
	$query= "select * from buku";
	$hasil=mysql_query($query) or die ('query error');
	$baris = mysql_num_rows($hasil);
	
	$jumlah_record_per_page = 4;
	
	$jumlah_page = ceil($baris/$jumlah_record_per_page);
	
	if(!isset($_GET['page_num']) ){
		$page_num = 1; }
	else if ($_GET['page_num'] <1){
		$page_num = 1; }
	else if ($_GET['page_num'] > $jumlah_page){
		$page_num = $jumlah_page; }
	else{
		$page_num = $_GET['page_num'];}
	
	$start_num = ($page_num-1)*$jumlah_record_per_page;
	
	$query = "select * from buku LIMIT " .$start_num.",".$jumlah_record_per_page;
	$hasil=mysql_query($query) or die (mysql_error());
	
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
			<a href='index.php?page=edit_book&kategori=".$data['id_buku']."'>edit</a>
			<br>
			<a href='hapus_bestseller.php?sinopsis=".$data['sinopsis']."'>hapus </a>
		</td>
		</tr>";
	}
	
	echo "<tr><td align='center' colspan='7'>";

	echo "<a href='index.php?page=beranda&page_num=1'>First</a>";
	
	if($page_num==1)
	echo "<a href='index.php?page=beranda&page_num=1'>Prev</a>";
	else
	echo "<a href='index.php?page=beranda&page_num=".($page_num-1)."'>Prev</a>";
	
	if($page_num==$jumlah_page)
	echo "<a href='index.php?page=beranda&page_num=".$jumlah_page."'>Next</a>";
	else
	echo "<a href='index.php?page=beranda&page_num=".($page_num+1)."'>Next</a>";
	echo "<a href='index.php?page=beranda&page_num=".$jumlah_page."'>Last</a>";
	echo "</td></tr>";
	
?>
</table>
<?php
	
?>
