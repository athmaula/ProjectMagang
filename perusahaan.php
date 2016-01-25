<!--header-->
    <?php
      include_once 'header.php';
    ?>
<!--ends of header-->
<!--container-->
<div class="container">
		<div class="container-fluid">
			<form class="navbar-right">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="search">
			</div>
			</form>	
		</div>
		<!--dropdown-->
		<div class="dropdown">
  			<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
    			Cari Berdasarkan
    			<span class="caret"></span>
  			</button>
  			<ul class="dropdown-menu">
    			<li role="presentation"><a href="perusahaan">Perusahaan</a></li>
			    <li role="presentation"><a href="pekerjaan">Pekerjaan</a></li>
			  </ul>
		</div>
		<!--end of dropdown-->
		<hr>
		<!--content-->
		<div class="container">
			<div class="col-sm-4 col-md-3">
				<div class="row">
					<div class="col-md-10">
						<a href="#" class="thumbnail">
							<img src="img/logo.png">
						</a>
					</div>
				</div>
				<p><h3>	Klasifikasi</h3></p>
				<ol>
					<li>persyaratan 1</li>
					<li>persyaratan 2</li>
					<li>persyaratan 3</li>
					<li>persyaratan 4</li>
					<li>persyaratan 5</li>
					<li>persyaratan 6</li>
					<li>persyaratan 7</li>
					<li>persyaratan 8</li>
					<li>persyaratan 9</li>
					<li>persyaratan 10</li>
				</ol>
			</div>
			<div class="col-md-9">
				<div class="text-justify">
					<p><h1>Website Description</h1>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.	
					</p>
				</div>
				<div class="container">
					<a class="btn btn-success" href="apply.php">Apply</a>
				</div>
				<hr>
			</div>			
		</div>
		<!--end of content-->
</div>
<!--end of container-->
<!--footer-->
   <?php
    include_once 'footer.php';
   ?>
<!--end footer--> 