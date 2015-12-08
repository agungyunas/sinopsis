<?php
	session_start();
	
	if(isset($_SESSION['sinopsis']))
	{
		include('config.php');
		
		$query= "delete from buku where sinopsis='".$_GET['sinopsis']."'";
		
		$hasil=mysql_query($query) or die (mysql_query);
		
		if($hasil){
					echo "<script>alert('Hapus buku berhasil');  window.location='index.php?page=home';
							</script>";
				}
				else{
					echo "<script>alert('Hapus buku gagal');  window.history.back();</script>";
				}
	}
	else{
		echo "<script>alert('Anda belum login');  window.history.back();</script>";
	}
	
?>