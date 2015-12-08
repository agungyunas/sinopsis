<?php
		session_start();
		$host="localhost";
		$username="root";
		$password="";
		$database="sinopsis";
		
		
		$koneksi=mysql_connect("$host","$username","$password")or die(mysql_error("Internet anda tidak ada"));
		$db=mysql_select_db($database) or die(mysql_error());
		
		$query="select *from admin where username ='".$_POST['username']."' and password='".$_POST['password']."' and blokir='tidak di blokir'";
		$hasil=mysql_query($query)or die('query error');
		
		$hitung=mysql_num_rows($hasil);
		if ($hitung>0){
			$data = mysql_fetch_array($hasil);
			$_SESSION['sinopsis'] = 1;
			$_SESSION['nama_lengkap'] =$data['nama_lengkap'];			
			$_SESSION['status'] =$data['status'];
			
			echo "<script>alert('Login Berhasil');</script>";
			
			echo "<script>window.location='index.php?page=beranda'; </script>";
			
		}
		else{		
			echo "<script>alert('login gagal');
				window.history.back();
				  </script>";
		}
?>
		