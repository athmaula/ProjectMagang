<!DOCTYPE html>
<html>
	<head>
		<title>Apply</title>
   		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>

	<body>
		<div class="container">
			<div class="head">
				
					<h2>Daftar Magang</h2>
				
			</div>

			<div class="row">
				<div class="col-xs-12 col-md-12"> 
					<form class="form-horizontal" action=" formulir.html" method="get">
						<h3>A. Data Diri</h3>
						<div class="form-group">
    						<label class="control-label col-sm-2" for="name">Nama:</label>
    						<div class="col-sm-5">
      							<input type="text" name="nama" class="form-control" placeholder="Nama">
    						</div>
  						</div>

  						<div class="form-group">
    						<label class="control-label col-sm-2" for="tempat lahir">Tempat Lahir:</label>
    						<div class="col-sm-5">
      							<input type="text" name="tempatlahir" class="form-control" placeholder="Tempat Lahir">
    						</div>
  						</div>

  			<div class="form-group">
  				<label class="control-label col-sm-2" for="email">Tanggal Lahir:</label>
  				<div class="col-sm-5">
  					<input type="date" name="bday" class="form-control" placeholder="Tanggal Lahir">
  				</div>
  			</div>

  			<div class="form-group">
  				<label class="control-label col-sm-2">Jenis Kelamin:</label>
  				<div class="col-sm-5">
					<input type="radio" name="gmale" value="male"> Male<br>
					<input type="radio" name="gfamale" value="female"> Female<br>
				</div>
			</div>

			<div class="form-group">
    			<label class="control-label col-sm-2" for="agama">Agama:</label>
    			<div class="col-sm-5">
      				<input type="text" name="agama" class="form-control" placeholder="Agama">
    			</div>
  			</div>

			<div class="form-group">
    			<label class="control-label col-sm-2" for="agama">Alamat:</label>
    			<div class="col-sm-5">
      				<input type="text" name="alamat" class="form-control" placeholder="Alamat">
    			</div>
  			</div>

			<div class="form-group">
    			<label class="control-label col-sm-2" for="agama">Nomor Telepon:</label>
    			<div class="col-sm-5">
      				<input type="tel" name="usrtel" class="form-control" placeholder="Nomor Telepon">
    			</div>
  			</div>

			<div class="form-group">
    			<label class="control-label col-sm-2" for="email">Email:</label>
    			<div class="col-sm-5">
      				<input type="email" name="email" class="form-control" placeholder="Email">
    			</div>
  			</div>


		<div class="history">
			<h3>B. Riwayat Pendidikan</h3>
			<div class="form-group">
    			<label class="control-label col-sm-2">Taman Kanak-kanak:</label>
    			<div class="col-sm-5">
      				<input type="text" name="tk" class="form-control" placeholder="Taman Kanak-kanak">
    			</div>
  			</div>

			<div class="form-group">
    			<label class="control-label col-sm-2">Sekolah Dasar:</label>
    			<div class="col-sm-5">
      				<input type="text" name="sd" class="form-control" placeholder="Sekolah Dasar">
    			</div>
  			</div>

			<div class="form-group">
    			<label class="control-label col-sm-2">Sekolah Menengah Pertama:</label>
    			<div class="col-sm-5">
      				<input type="text" name="smp" class="form-control" placeholder="Sekolah Menengah Pertama">
    			</div>
  			</div>

			<div class="form-group">
    			<label class="control-label col-sm-2">Sekolah Menengah Atas:</label>
    			<div class="col-sm-5">
      				<input type="text" name="sma" class="form-control" placeholder="Sekolah Menengah Atas">
    			</div>
  			</div>

			<div class="form-group">
    			<label class="control-label col-sm-2">Perguruan Tinggi:</label>
    			<div class="col-sm-5">
      				<input type="text" name="pt" class="form-control" placeholder="Perguruan Tinggi">
    			</div>
  			</div>
 
		<div class="ability">
			<h3>C. Kemampuan</h3>
			<div class="form-group">
    			<label class="control-label col-sm-2">Bidang:</label>
    			<div class="col-sm-5">
      				<input type="text" name="bidang" class="form-control" placeholder="Bidang">
    			</div>
  			</div>
			
			<div class="form-group">
    			<label class="control-label col-sm-2">Deskripsi:</label>
    			<div class="col-sm-5">
      				<input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi">
    			</div>
  			</div>

			<div class="form-group">
    			<label class="control-label col-sm-2">Bidang:</label>
    			<div class="col-sm-5">
      				<input type="text" name="bidang" class="form-control" placeholder="Bidang">
    			</div>
  			</div>

			<div class="form-group">
    			<label class="control-label col-sm-2">Deskripsi:</label>
    			<div class="col-sm-5">
      				<input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi">
    			</div>
  			</div>

			<div class="link"><a class="btn btn-link">Tambahkan Kemampuan</a></div>

		<div class="experience">
			<h3>D. Pengalaman Kerja</h3>
			<div class="form-group">
    			<label class="control-label col-sm-2">Perusahaan:</label>
    			<div class="col-sm-5">
      				<input type="text" name="namaperusahaan" class="form-control" placeholder="Perusahaan">
    			</div>
  			</div>
  			

  			<span>
				Mulai: <input type="text" name="mulai" placeholder=" Tahun Mulai">
				Berhenti: <input type="text" name="berhenti" placeholder="Tahun Berhenti">
			</span><br/><br/>
		
			<div class="form-group">
    			<label class="control-label col-sm-2">Perusahaan:</label>
    			<div class="col-sm-5">
      				<input type="text" name="namaperusahaan" class="form-control" placeholder="Perusahaan">
    			</div>
  			</div>

  			<span>
				Mulai: <input type="text" name="mulai" placeholder="Tahun Mulai">
				Berhenti: <input type="text" name="berhenti" placeholder="Tahun Berhenti">
			</span><br><br>

			<div class="link"><a class="btn btn-link">Tambahkan Pengalaman Kerja</a></div>
		</div>

		<div class="footer">
				<h2>Contact Us</h2>
		</div>

	</body>
</html>