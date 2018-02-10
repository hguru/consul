<!DOCTYPE html>
<html>
<body>
<table border="1"> 
<thead> 
<th>Id</th> 
<th>First name</th>
<th>Last name</th>
<th>City name</th>
<th>Email</th> 
</thead> 
<tbody> 
<?php 
foreach($this->a->fetchtable() as $row) 
{ 
//name has to be same as in the database. 
echo "<tr> 
<td>$row->id</td> 
<td>$row->first_name</td>
<td>$row->last_name</td> 
<td>$row->city_name</td>
<td>$row->email</td> 
</tr>"; 
} 
?> 
</tbody> 
</table> 
</body>
</html>