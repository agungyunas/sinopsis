<?php

include('config.php');
$namafolder="../design/"; //tempat menyimpan file
if (!empty($_FILES["gambar"]["tmp_name"]))
{
    $jenis_gambar=$_FILES['gambar']['type'];
    $judul_gambar=$_POST['judul'];
	$deskripsi=$_POST['sinopsis'];
	
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
    {           
        $gambar = $namafolder . basename($_FILES['gambar']['name']);       
        if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
            echo "Gambar berhasil dikirim ". $gambar;
            $sql="insert into post(judul_gambar,gambar,sinopsis) values ('$judul_gambar','$gambar','$deskripsi')";
            $res=mysql_query($sql) or die (mysql_error());
        } else {
           echo "Gambar gagal dikirim";
        }
   } else {
        echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
   }
} else {
    echo "Anda belum memilih gambar";
}
?> 

	
