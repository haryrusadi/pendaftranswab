
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Registrasi SWAB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script
src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js">
</script>
</head>
<body>
<div class="container">
  <div class="card">
    <div class="card-header bg-primary text-white" > <h2 align="center"> REGISTRASI FORM <h2></div>
    <div class="card-body">
      <form method="POST" action="action_input.php">
        <div class="form-group">
          <label for="tanggal_kunjungan">Tanggal Kunjungan</label> 
          <input type="date" class="form-control datepicker" name="tanggal_kunjungan">
        </div>
        <div class="form-group">
          <label for="no_boking">No Booking</label>
          <input type="text" class="form-control" name="no_boking" required>
        </div>
        <div class="form-group">
          <label for="pemeriksaan">Pemeriksaan</label>
		  <select class="form-control" name="pemeriksaan" required>
		  <option>Pilihan</option>	  
        <option>SWAB PCR</option>
		<option>SWAB Antigen</option>
</select>
        </div>
		<div class="form-group">
          <label for="jenis_pasien">Jenis Pasien</label>
		  <select class="form-control" name="jenis_pasien" required>
		  <option>Pilihan</option>	  
        <option>Citilink</option>
		<option>Garuda Indonesia</option>
		<option>Lion Air</option>
		<option>Batik Air</option>
		<option>Indonesia AirAsia</option>
		<option>NAM Air</option>
		<option>Super Air Jet </option>
		<option>Sriwijaya Air</option>
		<option>Super Air Jet </option>
		<option>Susi Air </option>
		<option>TransNusa </option>
		<option>Wings Air </option>
        <option>Aviastar</option>
		<option>Xpress Air</option>
      </select>
        </div>
		<div class="form-group">
          <label for="nomor_identitas">No Identitas</label>
          <input type="text" class="form-control" name="nomor_identitas" required>
        </div>
		<div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" name="nama" required>
        </div>
		<div class="form-group">
          <label for="tanggal_lahir">Tanggal Lahir</label> <br>
          <input type="date" class="form-control datepicker" name="tanggal_lahir" required>
        </div>
		<div class="form-group">
          <label for="telpon">No Telpon</label>
          <input type="text" class="form-control" name="telpon" required>
        </div>
		<div class="form-group">
          <label for="jenis_kelamin">jenis Kelamin</label> <br>
		<!-- <div class="custom-control custom-checkbox custom-control-inline"> -->
    <input type="radio" name="jenis_kelamin" value="laki-laki" required>laki-laki
    <input type="radio" name="jenis_kelamin " value="perempuan" required>perempuan
		<!-- <input type="CHECKBOX" class="custom-control-input" name="jenis_kelamin" value="laki-laki">laki-laki -->
    <!-- <input type="CHECKBOX" class="custom-control-input" name="jenis_kelamin"  value="perempuan">perempuan -->
		<!-- <label class="custom-control-label" for="jenis_kelamin">Laki - Laki</label> -->
    <!-- <label class="custom-control-label" for="jenis_kelamin">Perempuan</label> -->
	<!-- </div> -->
	<!-- <div class="custom-control custom-checkbox custom-control-inline"> -->
		
	
	<!-- </div> -->
</div>
		<div class="form-group">
          <label for="alamat">Alamat</label>
          <textarea type="text" class="form-control" name="alamat" required></textarea>
        </div>
		<div class="form-row">
		<div class="form-group col-md-4">
			<label for="kecamatan">Kecamatan</label>
			<input type="text" class="form-control" name="kecamatan" required>
		</div>
		<div class="form-group col-md-4">
			<label for="kelurahan">Kelurahan</label>
			<input type="text" class="form-control" name="kelurahan"  required>
		</div>
		<div class="form-group col-md-4">
			<label for="kota">Kabupaten/Kota</label>
			<input type="text" class="form-control" name="kota" required >
		</div>
	</div>
		<div class="form-group">
          <label for="negara">Negara</label>
          <input type="text" class="form-control" name="negara" required>
        </div>
		<div class="form-group">
          <label for="datang">Datang Dari</label>
          <input type="text" class="form-control" name="datang" required>
        </div>
		<div class="form-group">
          <label for="tujuan">Tujuan</label>
          <input type="text" class="form-control" name="tujuan" required>
        </div>
		<div class="form-group">
          <label for="keberangkatan">Tanggal Keberangkatan</label> <br>
          <input type="date" class="form-control datepicker" name="keberangkatan" required>
        </div>
		<div class="form-group">
          <label for="jenis_kendaraan">Jenis Kendaraan</label>
          <!-- <input type="text" class="form-control" id="nama"> -->
		  <select class="form-control" name="jenis_kendaraan" required>
		  <option>Pilihan</option>	  
        <option>Mobil</option>
		<option>Motor</option>
		<option>Pesawat</option>
		<option>Kapal</option>
</select>
        </div>
		<div class="form-group">
          <label for="maskapai">Maskapai</label>
          <!-- <input type="text" class="form-control" id="nama"> -->
		  <select class="form-control" name="maskapai" required>
		  <option>Pilihan</option>	  
        <option>Citilink</option>
		<option>Garuda Indonesia</option>
		<option>Lion Air</option>
		<option>Batik Air</option>
		<option>Indonesia AirAsia</option>
		<option>NAM Air</option>
		<option>Super Air Jet </option>
		<option>Sriwijaya Air</option>
		<option>Super Air Jet </option>
		<option>Susi Air </option>
		<option>TransNusa </option>
		<option>Wings Air </option>
        <option>Aviastar</option>
		<option>Xpress Air</option>
      </select>
        </div>
    </div>
  </div>
  <div class="card">
		<div class="card-header bg-primary text-white" > <h2 align="center"> INFORMASI KLINIS <h2></div>
		<div class="card-body">
		<div class="form-group">
          <label for="awal_gejala">Tanggal Awal Gejala</label> <br>
          <input type="date" class="form-control datepicker" name="awal_gejala" required>
        </div>
<div class="form-inline">
          <label for="demam">Demam</label>
		  <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="demam" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="demam" value="TIDAK" required>TIDAK
</div>
            </label>
</hr>
</div>	
<div class="form-inline">
          <label for="menggigil">Menggigil</label>
		  <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="menggigil" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="menggigil" value="TIDAK" required>TIDAK
</div>
            </label>
</hr>
</div>
<div class="form-inline">
          <label for="sakit_kepala">Sakit Kepala</label>
		  <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="sakit_kepala" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="sakit_kepala" value="TIDAK" required>TIDAK
</div>
            </label>
</hr>
</div>
<div class="form-inline">
          <label for="abdomen">Nyeri Abdomen</label>
		  <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="abdomen" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="abdomen" value="TIDAK" required>TIDAK
</div>
            </label>
</hr>
</div>
<div class="form-inline">
          <label for="batuk">Batuk</label>
		  <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="batuk" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="batuk" value="TIDAK" required>TIDAK
</div>
            </label>
</hr>
</div>
<div class="form-inline">
          <label for="pilek">Pilek</label>
		  <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="pilek" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="pilek" value="TIDAK" required>TIDAK
</div>
            </label>
</hr>
</div>
<div class="form-inline">
          <label for="sesak_nafas">Sesak Nafas</label>
		  <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="sesak_nafas" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="sesak_nafas" value="TIDAK" required>TIDAK
</div>
            </label>
</hr>
</div>
<div class="form-inline">
          <label for="tenggorokan">Sakit Tenggorokan</label>
		  <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="tenggorokan" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="tenggorokan" value="TIDAK" required>TIDAK
</div>
            </label>
</hr>
</div>
<div class="form-inline">
          <label for="diare">Diare</label>
		  <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="diare" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="diare" value="TIDAK" required>TIDAK
</div>
            </label>
</hr>
</div>
<div class="form-inline">
          <label for="lemas">Lemah/Lemas</label>
		  <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="lemas" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="lemas" value="TIDAK" required>TIDAK
</div>
            </label>
</hr>
</div>
<div class="form-inline">
          <label for="nyeri_otot">Nyeri Otot</label>
		  <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="nyeri_otot" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="nyeri_otot" value="TIDAK" required>TIDAK
</div>
            </label>
</hr>
</div>
<div class="form-inline">
          <label for="mual">Mual dan Muntah</label>
		  <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="mual" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="mual" value="TIDAK" required>TIDAK
</div>
            </label>
</hr>
</div>
</div>
</div>

<div class="card">
		<div class="card-header bg-primary text-white" > <h2 align="center"> KONDISI PENYERTA <h2></div>
		<div class="card-body">
    <div class="form-inline">
          <td for="hamil">Hamil</td>
          <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="hamil" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="hamil" value="TIDAK" required>TIDAK
</div>
            </label>
</hr> 
</div>
    <div class="form-inline">
          <span for="diabetes">Diabetes</span>
          <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="diabetes" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="diabetes" value="TIDAK" required>TIDAK
</div>
            </label>
</hr> 
</div>
<div class="form-inline">
          <label for="penyakit_jantung">Penyakit Jantung</label>
          <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="penyakit_jantung" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="penyakit_jantung" value="TIDAK" required>TIDAK
</div>
            </label>
</hr> 
</div>
<div class="form-inline">
          <label for="hipertensi">Hipertensi</label>
          <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="hipertensi" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="hipertensi" value="TIDAK" required>TIDAK
</div>
            </label>
</hr> 
</div>
<div class="form-inline">
          <label for="keganasan">Keganasan</label>
          <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="keganasan" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="keganasan" value="TIDAK" required>TIDAK
</div>
            </label>
</hr> 
</div>
<div class="form-inline">
          <label for="imunologi">Gangguan Imunologi</label>
          <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="imunologi" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="imunologi" value="TIDAK" required>TIDAK
</div>
            </label>
</hr> 
</div>
<div class="form-inline">
          <label for="ginjal_kronis">Gagal Ginjal Kronis</label>
          <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="ginjal_kronis" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="ginjal_kronis" value="TIDAK" required>TIDAK
</div>
            </label>
</hr> 
</div>
<div class="form-inline">
          <label for="gagal_hati">Gagal Hati</label>
          <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="gagal_hati" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="gagal_hati" value="TIDAK" required>TIDAK
</div>
            </label>
</hr> 
</div>
<div class="form-inline">
          <label for="ppok">PPOK</label>
          <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="ppok" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="ppok" value="TIDAK" required>TIDAK
</div>
            </label>
</hr> 
</div>

</div>
</div>

<div class="card">
		<div class="card-header bg-primary text-white" > <h2 align="center"> FAKTOR KONTAK <h2></div>
		<div class="card-body">
    <!-- <div class="kolom"> -->
    <!-- <div class="col-md-15"> -->
      <div class="form-inline">
          <label for="faktor1"> Apakah dalam 14 hari sebelum  
            ini, apakah memiliki riwayat perjalanan? 
</label>
          <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="faktor1" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="faktor1" value="TIDAK" required> TIDAK 
</div>
            </label>
</hr> 
</div>
    <div class="form-inline"> 
          <label for="faktor2">Apakah dalam 14 hari sebelum ini, apakah ada kontak eratkhusus suspect 2019-nCov?</label>
          <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="faktor2" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="faktor2" value="TIDAK" required>TIDAK
</div>
            </label>
</hr> 
</div>
<div class="form-inline">
          <label for="faktor3">Apakah dalam 14 hari sebelum ini, apakah ada kontak eratkhusus konfirmasi 2019-nCov?</label>
          <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="faktor3" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12"> 
              <input type="radio" name="faktor3" value="TIDAK" required>TIDAK
</div>
            </label>
</hr> 
</div>
<div class="form-inline">
          <label for="faktor4">Apakah dalam 14 sebelumini, mengunjung pasar hewan?</label>
          <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="faktor4" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="faktor4" value="TIDAK" required>TIDAK
</div>
            </label>
</hr> 
</div>
<div class="form-inline">
          <label for="faktor5">Apakah anda seorang petugas kesehatan?</label>
          <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="faktor5" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="faktor5" value="TIDAK" required>TIDAK
</div>
            </label>
</hr> 
</div>
<div class="form-inline">
          <label for="faktor6">Apakah anda 14 hari sebelum ini, apakah berkunjung ke fasilitas kesehatan?</label>
          <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="faktor6" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="faktor6" value="TIDAK" required>TIDAK
</div>
            </label>
</hr> 
</div>
<div class="form-inline">
          <label for="faktor7">Apakah anda termasuk cluster ISPA berat?</label>
          <hr>
        <label class="radio-inline">
     <div class="col-md-12">
              <input type="radio" name="faktor7" value="IYA" required>IYA
</div>
            </label>
            <label class="radio-inline">
			<div class="col-md-12">
              <input type="radio" name="faktor7" value="TIDAK" required>TIDAK
</div>
            </label>
</hr> 
</div>

</div>
<button type="submit" name="submit" class="btn btn-primary">Register</button>
</form>
</div>
</div>
</body>
</html>
