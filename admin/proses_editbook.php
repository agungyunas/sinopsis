<?php
	session_start();
	
	if(isset($_SESSION['sinopsis']))
	{
		include('config.php');
	
		$query= "update buku set judul='".$_POST['judul']."',id_buku='".$_POST['id_buku']."',gambar='".$_POST['gambar']."',kategori='".$_POST['kategori']."',sinopsis='".$_POST['sinopsis']."' 
				where id_buku='".$_POST['id_buku']."'";
		
		$hasil=mysql_query($query) or die (mysql_error());
		
		if($hasil){
					echo "<script>alert('Edit berhasil');  window.location='index.php?page=home';
							</script>";
		}
		else{
					echo "<script>alert('Edit gagal');  window.history.back();</script>";						}
		}
		
	else{
		echo "<script>alert('Anda belum login');  window.history.back();</script>";
	}
	
?>