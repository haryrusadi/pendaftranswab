<?php

	include "koneksi.php";
	//Kirimkan Variabel
	$tanggal_kunjungan	= $_POST['tanggal_kunjungan'];
	$no_boking			= $_POST['no_boking'];
	$pemeriksaan		= $_POST['pemeriksaan'];
	$jenis_pasien			= $_POST['jenis_pasien'];
	$nomor_identitas	= $_POST['nomor_identitas'];
	$nama			= $_POST['nama'];
	$tanggal_lahir	= $_POST['tanggal_lahir'];
	$telpon	= $_POST['telpon'];
	$jenis_kelamin			= $_POST['jenis_kelamin'];
	$alamat		= $_POST['alamat'];
	$kecamatan			= $_POST['kecamatan'];
	$kelurahan		= $_POST['kelurahan'];
	$kota			= $_POST['kota'];
	$negara	=  $_POST['negara'];
	$datang	= $_POST['datang'];
	$tujuan			= $_POST['tujuan'];
	$keberangkatan		= $_POST['keberangkatan'];
	$jenis_kendaraan			= $_POST['jenis_kendaraan'];
	$maskapai		= $_POST['maskapai'];
	$awal_gejala			= $_POST['awal_gejala'];
	$demam	= $_POST['demam'];
	$menggigil			= $_POST['menggigil'];
	$sakit_kepala	= $_POST['sakit_kepala'];
	$abdomen	= $_POST['abdomen'];
	$batuk			= $_POST['batuk'];
	$pilek		= $_POST['pilek'];
	$sesak_nafas			= $_POST['sesak_nafas'];
	$tenggorokan		= $_POST['tenggorokan'];
	$diare			= $_POST['diare'];
	$lemas	= $_POST['lemas'];
	$nyeri_otot	= $_POST['nyeri_otot'];
	$mual			=  $_POST['mual'];
	$hamil		= $_POST['hamil'];
	$diabetes			= $_POST['diabetes'];
	$penyakit_jantung		= $_POST['penyakit_jantung'];
	$hipertensi			= $_POST['hipertensi'];
	$keganasan	=$_POST['keganasan'];
	$imunologi			= $_POST['imunologi'];
	$ginjal_kronis		= $_POST['ginjal_kronis'];
	$gagal_hati			= $_POST['gagal_hati'];
	$ppok		= $_POST['ppok'];
	$faktor1			= $_POST['faktor1'];
	$faktor2	= $_POST['faktor2'];
	$faktor3	= $_POST['faktor3'];
	$faktor4			= $_POST['faktor4'];
	$faktor5		= $_POST['faktor5'];
	$faktor6			= $_POST['faktor6'];
	$faktor7		= $_POST['faktor7'];

	//input data ke table registrasi dalam database pendaftaranswab
	$sql="INSERT INTO registrasi (tanggal_kunjungan, no_boking, pemeriksaan, jenis_pasien, nomor_identitas, nama, tanggal_lahir, telpon, jenis_kelamin, alamat, kecamatan, kelurahan, kota, negara, datang, tujuan, keberangkatan, jenis_kendaraan, maskapai, awal_gejala, demam, menggigil, sakit_kepala, abdomen, batuk, pilek, sesak_nafas, tenggorokan, diare, lemas, nyeri_otot, mual, hamil, diabetes, penyakit_jantung, hipertensi, keganasan, imunologi, ginjal_kronis, gagal_hati, ppok, faktor1, faktor2, faktor3, faktor4, faktor5, faktor6, faktor7)
			VALUES ('$tanggal_kunjungan', '$no_boking', '$pemeriksaan', '$jenis_pasien', '$nomor_identitas', '$nama', '$tanggal_lahir', '$telpon', '$jenis_kelamin', '$alamat', '$kecamatan', '$kelurahan', '$kota', '$negara', '$datang', '$tujuan', '$keberangkatan', '$jenis_kendaraan', '$maskapai', '$awal_gejala', '$demam', '$menggigil', '$sakit_kepala', '$abdomen', '$batuk', '$pilek', '$sesak_nafas', '$tenggorokan', '$diare', '$lemas', '$nyeri_otot', '$mual', '$hamil', '$diabetes', '$penyakit_jantung', '$hipertensi', '$keganasan', '$imunologi', '$ginjal_kronis', '$gagal_hati', '$ppok', '$faktor1', '$faktor2', '$faktor3', '$faktor4', '$faktor5', '$faktor6', '$faktor7')";
// echo $sql;
// $sql="INSERT INTO registrasi (tanggal_kunjungan, no_boking, pemeriksaan, jenis_pasien, nomor_identitas, nama, tanggal_lahir, telpon, jenis_kelamin, alamat, kecamatan, kelurahan, kota, negara, datang, tujuan, keberangkatan, jenis_kendaraan, maskapai, awal_gejala, demam, menggigil, sakit_kepala, abdomen, batuk, pilek, sesak_nafas, tenggorokan, diare, lemas, nyeri_otot, mual, hamil, diabetes, penyakit_jantung, hipertensi, keganasan, imunologi, ginjal_kronis, gagal_hati, ppok, faktor1, faktor2, faktor3, faktor4, faktor5, faktor6, faktor7)
			// VALUES ('2022-01-01', 'no_boking', 'pemeriksaan', 'jenis_pasien', 'nomor_identitas', 'nama', '2022-01-01', 'telpon', 'jenis_kelamin', 'alamat', 'kecamatan', 'kelurahan', 'kota', 'negara', 'datang', 'tujuan', 'keberangkatan', 'jenis_kendaraan', 'maskapai', '2022-01-01', 'demam', 'menggigil', 'sakit_kepala', 'abdomen', 'batuk', 'pilek', 'sesak_nafas', 'tenggorokan', 'diare', 'lemas', 'nyeri_otot', 'mual', 'hamil', 'diabetes', 'penyakit_jantung', 'hipertensi', 'keganasan', 'imunologi', 'ginjal_kronis', 'gagal_hati', 'ppok', 'faktor1', 'faktor2', 'faktor3', 'faktor4', 'faktor5', 'faktor6', 'faktor7')";
//Mengeksekusi/menjalankan query diatas	
	$hasil=mysqli_query($conn,$sql);

	//Kondisi apakah berhasil atau tidak
	if ($hasil) {

		echo "<script>alert('Data berhasil di tambahkan!');history.go(-1);</script>";
		header('Location: '.index.php);
	  }
	else {
	
		echo "<script>alert('Gagal di tambahkan!');history.go(-1);</script>";
	}  
	
	?>
