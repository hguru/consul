 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    
	 

 
<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
	 
  
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
  
<?php 
if($this->login_model->isLogged()){
    $name = $this->login_model->name();

}
else{
    redirect("/login");
}

?>

 
<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 14px;
}
a {
    color: green;
    text-decoration: none;
    font-size: 14px;
	font-weight:bold;
}

a.menu{
    color: #074c09;
    text-decoration: none;
    font-size: 16px;
	font-weight:bolder;
	margin-right:15%;
	padding
}

label.emb{
    color: #074c09;
    text-decoration: none;
    font-size: 20px;
	font-weight:bolder;
	margin-right:0%;
	padding-top:-5%;
	text-decoration:underline;
}


a.menu1{
    color: #fff;
    text-decoration: none;
    font-size: 16px;
	font-weight:bolder;
	padding-left:3px;
	float:left;
}

.menu1:hover{
    color: #fff;
    text-decoration: none;
    font-size: 16px;
	font-weight:bolder;
}

a.gen:hover {
text-decoration:none;
color:#fff;
}

a.gen{
text-decoration:none;
color:#fff;
}

a:hover
{
    text-decoration: underline;
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


.card{
    float:right;
	padding-right:1%;
	margin-right:4%;
	margin-top:-3%;
}



 
</style>


 <link href="/CodeIgniter/assets/grocery_crud/themes/flexigrid/css_custom_hghost/bootstrap.min.css" rel="stylesheet" />

 
</head>
<body>
<!-- Beginning header -->
<center><img src='/CodeIgniter/logo/flag.png' width='90' height='70' ></center>
<div><h3><center><label class='emb'>Embassy of the Federal Republic of  Nigeria <br>Republic of Guinea</label></center></h3>

</div>
    <div><br>
      <button type="button" class="btn btn-success btn-md"> <a class='menu1' href='<?php echo site_url('personal/personal/add')?>'>Add Record</a></button> | 
 <button type="button" class="btn btn-success btn-md"><a class='menu1' href='<?php echo site_url('personal/personal')?>'>View Records</a></button>
 <button type="button" class="btn btn-success btn-md"><a class='menu1' href='<?php echo site_url('/login/logout')?>'>Logout</a></button>
  <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Account Name: <b>$name</b>";?>
       
 
    </div>
	
	 <br>

	
	 <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-success btn-md pull-right card">
<a href="http://localhost/CodeIgniter/search/print_card_index.php" 	class="gen">
Other Operations</a></button>


         
	
<!-- End of header-->
    <div style='height:0px;'></div>  
	
    <div>
<?php echo $output; ?>
 
 


 
    </div>
<!-- Beginning footer -->

<br><br><span class="embfoot">EMBASSY OF NIGERIA <br> B.P. 54 <br>CONAKRY<br>REPUBLIC OF GUINEA</b></strong></span>
<!-- End of Footer -->
</body>
</html>

