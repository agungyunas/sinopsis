<?php
		$host = "br-cdbr-azure-south-a.cloudapp.net";
		$username ="b69145928abe4f";
		$password ="a9d64695";
		$data_base="sinopsis";
		
		$koneksi = mysql_connect($host,$username,$password) or die ("koneksi error");
		$db = mysql_select_db($data_base) or die( mysql_error());
		
?>