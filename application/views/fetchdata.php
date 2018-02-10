<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> How to retrieve data from mysql and display in codeigniter view?
</title>
<link rel="stylesheet" href="<?php echo base_url();?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>/css/bootstrap-theme.min.css">
<script src="<?php echo base_url();?>scripts/jquery-2.0.0.min.js"></script> 
<script src="<?php echo base_url();?>scripts/bootstrap.min.js"></script> 
</head>
<body >
<div>  
<input type="text"  class="form-control">
<table class="table table-hover">
<thead>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Email Id</th>
</tr>
</thead>
<tbody>
<?php foreach($fetchdata->result() as $row)
{ ?>    
<tr>
<td><?php echo $row->firstname;?></td>
<td><?php echo $row->lastname;?></td>
<td><?php echo $row->emailid;?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html>   