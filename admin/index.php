 <?php
	session_start();
 ?>
 <html>
	<head>
		
		<link rel="stylesheet" href="css/style.css">
		
	</head>
	<body background="../design/bg.png"> 
		<table align="center">
			<tr>
				<td>
					<table width="800">
						<tr>
							<td id="areaku" background="../design/3.jpg">
								<font size="9" face ="Tempus Sans ITC" color="white" align="left"> 
									<stext> Synopsis.id</stext>
								</font>
								<ul class="float"> 
									<li><a href="index.php?page=beranda"><stext>Admin</stext></a></li>
									<li><a href="index.php?page=komik"><stext>List Komik</stext></a></li>
									<li><a href="index.php?page=novel"><stext>List Novel</stext></a></li>
									<li><a href="index.php?page=biografi"><stext>List Biografi<stext></a></li>
								</ul>
							</td>		
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table width="800" align="center">
			<tr>
		        <td align="right">
					<?php
						if(!isset($_SESSION['nama_lengkap']))
						{
								echo "<a href='index2.php?page=login'> LOG IN</a>";
						}
						else
						{
							echo "<a><stext>Selamat Datang, ".$_SESSION['nama_lengkap']."<stext></a>";
							echo "<br>";
							echo "<a href='index2.php?page=logout'> LOG OUT</a>";
						}
			
					?>
			    </td>
			</tr>
		</table>
		<table id="areaku" width="800" align="center">
			<tr align="center">
				<td align="center">			
					<?php
						if(!isset($_GET['page']))
						{
							include "page=login.php";
						}
						else if ($_GET['page']=='logout')
						{
							include "logout.php";
						}
						else if ($_GET['page']=='')
						{
							include "index2.php?page=login";
						}
						else if($_GET['page']=='beranda'){
						include('home.php');
						}
						else if($_GET['page']=='komik'){
						include('komik.php');
						}
						else if($_GET['page']=='novel'){
						include('novel.php');
						}
						else if($_GET['page']=='biografi'){
						include('biografi.php');
						}
						else if($_GET['page']=='edit'){
						include('edit_book.php');
						}
						else if($_GET['page']=='hapus'){
						include('hapus_bestseller.php');
						}
						else{
							$page=$_GET['page'].".php";
							include($page);
						}
					
					
					?>
				</td>							
			</tr>
		</table>
	</body>
	
</html>

