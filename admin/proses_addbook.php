 <?php
include("config.php");

     $judul= $_POST['judul'];
	 $id_buku = $_POST['id_buku'];
     $gambar = $_POST['gambar'];
	 $kategori = $_POST['kategori'];
     $sinopsis = $_POST['sinopsis'];
	 $deskripsi = $_POST['deskripsi'];
	 $best_seller = $_POST['best_seller'];
                 
		$query ="insert into buku (judul,id_buku,gambar,kategori,sinopsis,deskripsi,best_seller) values('$judul','$id_buku','$gambar','$kategori','$sinopsis','$deskripsi','$best_seller')";
		$hasil=mysql_query($query);
			if($hasil){
				echo "<font color='white'>Data Telah disimpan<br>";
			}
			else{
				echo "<font color='white'>Data gagal disimpan<br>";
				echo "<script>window.history.back(); </script>";
			}

			echo "<script> window.location='index.php?page=home' </script>";

?>

