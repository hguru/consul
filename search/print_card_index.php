

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="ilmu-detil.blogspot.com">
	<title>CONSULAR CARD ISSUE</title>
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

 
<style type='text/css'>
   .card{
    float:left;
	padding-left:1%;
	margin-left:46%;
	margin-top:2%;
	font-weight:bolder;
}


.embfoot{
    color: #9e2d28;
    text-decoration: none;
    font-size: 15px;
	font-weight:bolder;
	margin-right:0%;
	padding-top:5%;
	line-height:25px;
	text-decoration:none;
	float:right;
	padding-right:5%;
}


label.emb{
    color: #074c09;
    text-decoration: none;
    font-size: 20px;
	font-weight:bolder;
	margin-right:0%;
	padding-top:1%;
	line-height:34px;
	text-decoration:none;
}


.navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
color:#fff!important;
}

</style>
	
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
			</button>
			<span class="navbar-brand" href="#">CONSULAR CARD ISSUE</span>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-left">
				<li class="clr1 active"><a href="http://localhost/CodeIgniter/search/print_card_index.php">Card Issue</a></li>
				<li class="clr2"><a href="http://localhost/CodeIgniter/index.php/personal/personal/add">Add Record</a></li>
				<li class="clr3"><a href="http://localhost/CodeIgniter/index.php/personal/personal">View Record</a></li>
				<li class="clr3"><a href="http://localhost/CodeIgniter/search/report_data.php">Data Report</a></li>
			</ul>
		</div>
	</div>
</div>
</br></br></br></br>
	
<center><img src='/CodeIgniter/logo/flag.png' width='90' height='70' ></center>
<div><h3><center><label class='emb'>Embassy of the Federal Republic of  Nigeria <br>Republic of Guinea</label></center></h3>

</div>
	<button type="button" class="btn btn-success btn-md pull-left card" data-toggle="modal" data-target="#myModal">Generate ID Card</button>
	<hr>
 <!-- Modal -->
<div id="myModal" class="modal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Embassy of the Federal Republic of Nigeria Republic of Guinea
</h4>
      </div>
      <div class="modal-body">
	  
	  
   <!-- Part of search form -->
<div class ="container">
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Consular ID Card</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-8" style="padding-top:25px">
						
						<form method="POST" action="getcard_.php" target=_"blank">
							<div class="form-group">
								<label for="input_no_siswa">Enter CardNo</label>
								<input type="text" class="form-control" required="required" name="inputnisn" maxlength="10" placeholder="Card No">
								<span class="help-block"></span>
							</div>
							<div class="form-actions" style="padding-bottom:25px">
								<button type="submit" class="btn btn-sucess" name="submit">Search</button>
								
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default success" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> 

 
    </div>
<!-- Beginning footer -->

<br><br><span class="embfoot">EMBASSY OF NIGERIA <br> B.P. 54 <br>CONAKRY<br>REPUBLIC OF GUINEA</b></strong></span>
<!-- End of Footer -->


</body>
</html>



<!-- end of part search form -->
</body>
</html>
