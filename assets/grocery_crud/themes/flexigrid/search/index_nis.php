<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="ilmu-detil.blogspot.com">
	<title>Tutorial about searching NISN</title>
	<!-- Bagian css -->
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/ilmudetil.css">
	<!--<link rel='stylesheet' href='assets/css/jquery-ui-custom.css'>-->
	
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
	<!-- Akhir dari Bagian css -->
	<!-- Bagian js -->
	<script src='assets/js/jquery-1.10.1.min.js'></script>       
    
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- akhir dari Bagian js -->

</head>
<body>
<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="http://dtc-eng.blogspot.co.id/">
			Pusat Ilmu Secara Detil</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-left">
				<li class="clr1 active"><a href="index.html">Home</a></li>
				<li class="clr2"><a href="">Learn French</a></li>
				<li class="clr3"><a href="">English</a></li>
			</ul>
		</div>
	</div>
</div>
</br></br></br></br>
	
<!-- Part of search form -->
<div class ="container">
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Search Student By NISN</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-8" style="padding-top:25px">
						
						<form method="POST" action="getuser_nis.php">
							<div class="form-group">
								<label for="input_no_siswa">Enter NISN</label>
								<input type="text" class="form-control" required="required" name="inputnisn" maxlength="10" placeholder="No NISN">
								<span class="help-block"></span>
							</div>
							<div class="form-actions" style="padding-bottom:25px">
								<button type="submit" class="btn btn-primary" name="submit" >Search</button>
								
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end of part search form -->
</body>
</html>
