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
}

label.emb{
    color: #074c09;
    text-decoration: none;
    font-size: 20px;
	font-weight:bolder;
	margin-right:0%;
	padding-top:5%;
	text-decoration:underline;
}


a.menu1{
    color: #074c09;
    text-decoration: none;
    font-size: 16px;
	font-weight:bolder;
}


a:hover
{
    text-decoration: underline;
}
 
</style>
</head>
<body>
<!-- Beginning header -->
<center><img src='/CodeIgniter/logo/flag.png' width='90' height='70' ></center>
<div><h3><center><label class='emb'>Embassy of the Federal Republic of  Nigeria <br>Republic of Guinea</label></center></h3>
</div>
    <div><br><!--
        <a class='menu' href='<?php echo site_url('personal/personal')?>'>Personal Info</a> | 
        <a  class='menu' href='<?php echo site_url('passport/passport')?>'>Passport</a> |
        <a  class='menu' href='<?php echo site_url('address/address')?>'>Address</a> |-->
 
    </div>
<!-- End of header-->
    <div style='height:20px;'></div>  
    <div>
<?php echo $output; ?>



 
    </div>
<!-- Beginning footer -->
<br><br><br 
<div><b><strong>EMBASSY OF NIGERIA <br> B.P. 54 <br>CONAKRY<br>REPUBLIC DE GUINEA</b></strong></div>
<!-- End of Footer -->
</body>
</html>