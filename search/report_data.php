
<?php  
require_once('filter.php');
 $connect = mysqli_connect("localhost", "root", "toor", "embassy_nigeria");  
 $query = "SELECT * FROM personal_info ORDER BY cardno desc";  
 $result = mysqli_query($connect, $query);  
 ?>  
 
 
 

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
	 
	  <script src="assets/js/jquery.min.js"></script>  
	  
            
           <script src="assets/js/jquery-ui.js"></script>  
		   
           <link rel="stylesheet" href="assets/css/jquery-ui.css">  
      </head>  
	 
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
 
 
 
 
 
  
     
           <div class="container" style="width:900px;">  
                <h2 align="center">ID Card Report</h2>  
                <h3 align="center">			 
	<?php  $row_cnt = mysqli_num_rows($result);
     printf("Total of ID Card (s) Registered: <font style='color:green;font-size:50px;font-weight:bolder;'>&nbsp;&nbsp;&nbsp;	%d</font>",$row_cnt); ?><br /> 
	 </h3> 
	
				
     
<br><br>			
                <div class="col-md-3">  
                     <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
                </div>  
                <div class="col-md-3">  
                     <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
                </div>  
                <div class="col-md-5">  
                     <input type="button" name="filter" id="filter" value="Filter" class="btn btn-success" />  
                </div>  
                <div style="clear:both"></div>                 
                <br />  
                <div id="order_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">ID</th>  
                               <th width="15%">Surname</th>  
                               <th width="15%">Other Names</th>  
                               <th width="10%">Gender</th>  
                               <th width="12%">Telephone</th> 
                                <th width="12%">Passport No</th> 							   
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["cardno"]; ?></td>  
                               <td><?php echo $row["surname"]; ?></td>  
                               <td><?php echo $row["other_names"]; ?></td>  
                               <td><?php echo $row["gender"]; ?></td>  
                               <td><?php echo $row["telephone_guinea"]; ?></td>  
							   <td><?php echo $row["passport_no"]; ?></td>  
                          </tr>  
                     <?php  
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
      $(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
           });  
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val();  
                if(from_date != '' && to_date != '')  
                {  
                     $.ajax({  
                          url:"filter.php",  
                          method:"POST",  
                          data:{from_date:from_date, to_date:to_date},  
                          success:function(data)  
                          {  
                               $('#order_table').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
      });  
 </script>
