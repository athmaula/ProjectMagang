<?php 
    include_once "header.php";
?>

		<div class="container">

			<br><br><br><div>
				<h1 style="text-align: center">Halaman Admin</h1>
			</div>

			<div class="row">
				<div class="col-xs-12 col-md-12"> 
					<form class="form-horizontal" action=" formulir.html" method="get">

						<div>
							<h2 style="text-align: center">Tambahkan Perusahaan</h2>
						</div>

						<div class="form-group">
   							<label class="control-label col-sm-2" for="name">Nama Perusahaan : </label>
   							<div class="col-sm-5">
  								<input type="text" name="nama" class="form-control" placeholder="Nama Perusahaan">
   							</div>
						</div>

						<div class="form-group">
   							<label class="control-label col-sm-2" for="bidang">Bidang Perusahaan : </label>
   							<div class="col-sm-5">
  								<input type="text" name="bidang" class="form-control" placeholder="Bidang Perusahaan">
   							</div>
						</div>

						<div class="form-group">
   							<label class="control-label col-sm-2" for="address">Alamat : </label>
   							<div class="col-sm-5">
  								<input type="text" name="address" class="form-control" placeholder="Alamat">
   							</div>
						</div>

						<div class="form-group">
   							<label class="control-label col-sm-2" for="city">Kota : </label>
   							<div class="col-sm-5">
  								<input type="text" name="city" class="form-control" placeholder="Kota">
   							</div>
						</div>

						<div class="form-group">
   							<label class="control-label col-sm-2" for="bidang">Bidang Perusahaan : </label>
   							<div class="col-sm-5">
  								<input type="text" name="bidang" class="form-control" placeholder="Bidang Perusahaan">
   							</div>
						</div>

						<div class="form-group">
      						<label class="control-label col-sm-2" for="description">Deskripsi : </label>
      						<div class="col-sm-5">
	    						<textarea class="form-control" rows="5" id="description" placeholder="Deskripsi"></textarea>
    						</div>
    					</div>

    					<div class="form-group">
      						<label class="control-label col-sm-2" for="vacancy">Lowongan Pekerjaan : </label>
      						<div class="col-sm-5">
	    						<textarea class="form-control" rows="5" id="vacancy" placeholder="Lowongan Pekerjaan"></textarea>
    						</div>
    					</div>

    					<div class="plus3">
							<div class="link"><a class="btn btn-link">Tambahkan Perusahaan</a></div>
                        </div>

					</form>
				</div>
			</div>
		</div>

<?php
    include_once "footer.php";
?>