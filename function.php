<?php
    session_start();
	//membuat koneksi ke database
	$conn = mysqli_connect("localhost", "root", "", "dino'sbook");

    //Buku Kembali
	if(isset($_POST['addkembali'])){

        $bukunya = $_POST['kodebukunya'];
		$penerima = $_POST['namaorg'];
		$qty = $_POST['qty'];

		$cekstocksekarang = mysqli_query($conn, "select * from stockbuku where kodebuku='$bukunya'");
		$ambildata = mysqli_fetch_array($cekstocksekarang);

		$stocksekarang = $ambildata['jumlahbuku'];
		$tambahkan = $stocksekarang+$qty;
		
        $addtomasuk = mysqli_query($conn, "insert into kembalibuku (kodebuku, nama, jumlahkembali) values('$bukunya', '$penerima', '$qty')");
		$updatestockmasuk = mysqli_query($conn, "update stockbuku set jumlahbuku='$tambahkan' where kodebuku='$bukunya'");

		if($addtomasuk&&$updatestockmasuk){
			header('location:kembalibuku.php');
		}
		else{
			echo "gagal";
			header('location:kembalibuku.php');
		}
	}

    //Buku Pinjam
	if(isset($_POST['addpinjam'])){
		$bukunya = $_POST['kodebukunya'];
		$penerima = $_POST['namaorg'];
		$qty = $_POST['qty'];

		$cekstocksekarang = mysqli_query($conn, "select * from stockbuku where kodebuku='$bukunya'");
		$ambildata = mysqli_fetch_array($cekstocksekarang);

		$stocksekarang = $ambildata['jumlahbuku'];

		if($stocksekarang >= $qty){
			//Jika barang cukup
			$kurangkan = $stocksekarang-$qty;
			$addtomasuk = mysqli_query($conn, "insert into pinjambuku (kodebuku, nama, jumlahpinjam) values('$bukunya', '$penerima', '$qty')");
			$updatestockmasuk = mysqli_query($conn, "update stockbuku set jumlahbuku='$kurangkan' where kodebuku='$bukunya'");

			if($addtomasuk&&$updatestockmasuk){
				header('location:pinjambuku.php');
			}
			else{
				echo "gagal";
				header('location:pinjambuku.php');
			}
		}
		else{
			//Barang tidak cukup
			echo '
			<script>
				alert("Stock saat ini Tidak mencukupi, Proses Dibatalkan.");
				window.location.href="pinjambuku.php";
			</script>
			';
		}
	}



?>