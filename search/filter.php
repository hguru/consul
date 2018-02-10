<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "toor", "embassy_nigeria");  
      $output = '';  
      $query = "  
           SELECT * FROM personal_info 
           WHERE date_issue_card BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
	  
	  $row_cnt = mysqli_num_rows($result);
      printf("<b>%d</b> &nbsp;ID Card (s) Registered\n\n", $row_cnt); 
    
	

    /* close result set */
 
	  
      $output .= '  
           <br><table class="table table-bordered">  
                <tr>  
				   
                     <th width="5%">ID</th>  
                     <th width="30%">Surname</th>  
                     <th width="43%">Other Names</th>  
                     <th width="10%">Gender</th>  
                     <th width="12%">Telephone</th> 
                     <th width="12%">Passport No</th> 					 
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                       <tr>      
					       
                          <td>'. $row["cardno"] .'</td>  
                          <td>'. $row["surname"] .'</td>  
                          <td>'. $row["other_names"] .'</td>  
                          <td>'. $row["gender"] .'</td>  
                          <td>'. $row["telephone"] .'</td> 
                           <td>'. $row["passport_no"] .'</td> 						  
                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No was Card Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>
