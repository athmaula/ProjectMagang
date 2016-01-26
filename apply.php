<?php 
    include_once "header.php";
?>

		<div class="container">
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
                            <label for="sel1" class="control-label col-sm-2">Select list (select one):</label>
                            <div class="col-sm-5">
                                <select class="form-control" id="sel1">
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Kong Hu Cu</option>
                                </select>
                                <br>
                            </div>
                        </div>

            			<div class="form-group">
                			<label class="control-label col-sm-2" for="alamat">Alamat:</label>
                			<div class="col-sm-5">
                  				<input type="text" name="alamat" class="form-control" placeholder="Alamat">
                			</div>
              			</div>

            			<div class="form-group">
                			<label class="control-label col-sm-2" for="nomortelepon">Nomor Telepon:</label>
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

                        <div class="plus1">
            			     <div class="link"><a class="btn btn-link">Tambahkan Kemampuan</a></div>
                        </div>
                    </div>

            		<div class="experience">
            			<h3>D. Pengalaman Kerja</h3>

            			<div class="form-group">
                			<label class="control-label col-sm-2">Perusahaan:</label>
                			<div class="col-sm-5">
                  				<input type="text" name="namaperusahaan" class="form-control" placeholder="Perusahaan">
                			</div>
              			</div>
              			
              			<span class="start">
            				Mulai: <input type="text" name="mulai" placeholder=" Tahun Mulai">
            				Berhenti: <input type="text" name="berhenti" placeholder="Tahun Berhenti">
            			</span><br/><br/>
            		
            			<div class="form-group">
                			<label class="control-label col-sm-2">Perusahaan:</label>
                			<div class="col-sm-5">
                  				<input type="text" name="namaperusahaan" class="form-control" placeholder="Perusahaan">
                			</div>
              			</div>

              			<span class="start">
            				Mulai: <input type="text" name="mulai" placeholder="Tahun Mulai">
            				Berhenti: <input type="text" name="berhenti" placeholder="Tahun Berhenti">
            			</span><br><br>

                        <div class="plus2">
            			     <div class="link"><a class="btn btn-link">Tambahkan Pengalaman Kerja</a></div>
                        </div>
            		</div><br>


                    <div class="attactment">
                        <label class="control-label col-sm-2">File Foto:</label>
                        <div class="col-sm-5">
                            <input type="file" name="file">
                        </div>
                    </div><br><br><br>

                    <div class="submit">
                        <button class="btn btn-primary" name="submit">Submit</button><br>
                    </div><br><br>

                    </form>
                </div>
            </div>
        </div>


<?php
    include_once "footer.php";
?>