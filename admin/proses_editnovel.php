<?php
	session_start();
	
	if(isset($_SESSION['sinopsis']))
	{
		include('config.php');
		
		$query= "update buku set id_kategori='".$_POST['id_kategori']."',sinopsis='".$_POST['sinopsis']."',gambar='".$_POST['gambar']."',judul='".$_POST['judul']."',id_buku='".$_POST['id_buku']."',best_seller='".$_POST['best_seller']."' where id_kategori='".$_POST['id_kategori']."'";
		
		$hasil=mysql_query($query) or die (mysql_error());
		
		if($hasil){
					echo "<script>alert('Edit berhasil');  window.location='home.php?page=list_novel';
							</script>";
		}
		else{
					echo "<script>alert('Edit gagal');  window.history.back();</script>";						}
		}
		
	else{
		echo "<script>alert('Anda belum login');  window.history.back();</script>";
	}
	
?>