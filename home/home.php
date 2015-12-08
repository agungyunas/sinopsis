<?php
		include('config.php');
?>
<html>
<head>
<link rel="stylesheet" href="../admin/css/style.css">
</head>
 <body> 
		<table width="800" align="center">
			<tr align="center">
				<td width="250">
				<br><br>
					<table width="200" height="300" align="left" >
						<tr>
							<td width="30" height="10">			
							<font size="4" face ="Tecno" color="white"><div><u><stext>Best Seller</stext></u></div></font>	
							</td>
						</tr>
						<tr>
							<td>
								<div style="border: 0px solid #999999; height: 250px; overflow: auto ; padding: 10px; width: 100%;">
								<img style="max-width: 50%; height: auto; " src =../design/shinchan.jpg align ='center'>
								<br>
								<img style="max-width: 50%; height: auto; " src =../design/naruto.jpg align ='center'>
								<img style="max-width: 50%; height: auto; " src =../design/doraemon.jpg align ='center'>
								<img style="max-width: 50%; height: auto; " src =../design/yourtheapple.jpg align ='center'>
								</div>
							</td>
						</tr>
						<tr>
							<td height="10" align="center">
								<a href='index.php?page=best&id_buku'><font size="5">Show</a>
							</td>
						</tr>
					</table>
				</td>
				<td width="500" height="250">
				<br><br>
					<div class="container">
						<input type="radio" name="slide" class="radio-nav" id="nav-1" checked/>
						<input type="radio" name="slide" class="radio-nav" id="nav-2"/>
						<input type="radio" name="slide" class="radio-nav" id="nav-3"/>
						
						<ul class="slide">
							<li class="slide-1">
								<img style="max-width: 50%; height: auto; "src="../design/naruto.jpg"/>
								<div  class="caption">Naruto</div>
							</li>
							<li class="slide-2">
								<img style="max-width: 50%; height: auto; " src="../design/doraemon.jpg"/>
								<div class="caption">Doraemon</div>
							</li>
							<li class="slide-3">
								<img style="max-width: 50%; height: auto; " src="../design/shinchan.jpg"/>
								<div class="caption">Shinchan</div>
							</li>
						</ul>

						<div class="nav-arrow nav-next">
							<label class="nav-1" for="nav-1">></label>
							<label class="nav-2" for="nav-2">></label>
							<label class="nav-3" for="nav-3">></label>
						</div>
						<div class="nav-arrow nav-prev">
							<label class="nav-1" for="nav-1"><</label>
							<label class="nav-2" for="nav-2"><</label>
							<label class="nav-3" for="nav-3"><</label>
						</div>
					</div>
				</td>
			</tr>
		</table>
	<link rel="stylesheet" href="css/style.css">
			<table>
			<tr>
				<td align="left" width="700" height="10">			
					<font size="4" face ="Tecno" color="white"><div><u><stext>New Books</stext></u></div></font>	
				</td>
			</tr></table>
		<table  align="center" width="700" height="170"><tr><td>
			<table border="1" bgcolor="#080808" align="center" width="700">
			<tr>
				<td width='150px' align="center" width="100px"><font color="white">Gambar</font></td>
				<td  align="center"><font color="white">Description</font></td>
			</tr>
		</table>
		<br>
			<table border="1" bgcolor="#080808" align="center" width="700" height="170">
				<?php
					$query= "select * from buku order by kategori desc limit 0,3";
					$hasil=mysql_query($query) or die (mysql_error());
										
					while($data = mysql_fetch_array($hasil))
					{
						echo  "<tr>
						<td width='150px'> 
							<img style='max-width: 100%; height: auto;  'src= '../design/".$data['gambar']."'	/> 
						</td>
						<td>
							<font color='white'>".$data['sinopsis']."<br><br> 
							<stext><a href='index.php?page=desc&id_buku=".$data['id_buku']."'>See More</a></stext>
					</td></tr>";
					}?>
				
</td></tr>
</table>
</table>
	</body>
</html>