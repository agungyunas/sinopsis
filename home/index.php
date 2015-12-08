<!DOCTYPE html>
<?php session_start();
include('config.php');
  ?>

<html>
	<head>
		<link rel="stylesheet" href="../admin/css/style.css">
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
									<li><a href="index.php?page=home"><stext>Home</stext></a></li>
									<li><a href="index.php?page=komik"><stext>Komik</stext></a></li>
									<li><a href="index.php?page=novel"><stext>Novel</stext></a></li>
									<li><a href="index.php?page=biografi"><stext>Biografi<stext></a></li>
								</ul>
							</td>		
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table width="800" align="center">
			<tr align="center">
				<td align="center">			
						<?php
				if(!isset($_GET['page']))
				{
					include('home.php');
				}
				else
				{
					$page = $_GET['page'].".php";
					include($page);
				}
				?>
				</td>							
			</tr>
		</table>
	</body>
</html>