<?php 

	include '../koneksi.php';

	if(isset($_GET['idpengguna'])){

		$delete = mysqli_query($conn, "DELETE FROM pengguna WHERE id_pengguna = '".$_GET['idpengguna']."' ");
		echo "<script>window.location = 'pengguna.php'</script>";
	}

	if(isset($_GET['idekstrakulikuler'])){

		$ekstrakulikuler = mysqli_query($conn, "SELECT gambar FROM ekstrakulikuler WHERE id = '".$_GET['idekstrakulikuler']."'");

		if(mysqli_num_rows($ekstrakulikuler) > 0){

			$p = mysqli_fetch_object($ekstrakulikuler);

			if(file_exists("../uploads/ekstrakulikuler/".$p->gambar)){

				unlink("../uploads/ekstrakulikuler/".$p->gambar);
			}
		}

		$delete = mysqli_query($conn, "DELETE FROM ekstrakulikuler WHERE id = '".$_GET['idekstrakulikuler']."' ");
		echo "<script>window.location = 'ekstrakulikuler.php'</script>";
	}

	if(isset($_GET['idgaleri'])){

		$galeri = mysqli_query($conn, "SELECT foto FROM galeri WHERE id = '".$_GET['idgaleri']."'");

		if(mysqli_num_rows($galeri) > 0){

			$p = mysqli_fetch_object($galeri);

			if(file_exists("../uploads/galeri/".$p->foto)){

				unlink("../uploads/galeri/".$p->foto);
			}
		}

		$delete = mysqli_query($conn, "DELETE FROM galeri WHERE id = '".$_GET['idgaleri']."' ");
		echo "<script>window.location = 'galeri.php'</script>";
	}

	if(isset($_GET['idinformasi'])){

		$informasi = mysqli_query($conn, "SELECT gambar FROM informasi WHERE id = '".$_GET['idinformasi']."'");

		if(mysqli_num_rows($informasi) > 0){

			$p = mysqli_fetch_object($informasi);

			if(file_exists("../uploads/informasi/".$p->gambar)){

				unlink("../uploads/informasi/".$p->gambar);
			}
		}

		$delete = mysqli_query($conn, "DELETE FROM informasi WHERE id = '".$_GET['idinformasi']."' ");
		echo "<script>window.location = 'informasi.php'</script>";
	}

 ?>