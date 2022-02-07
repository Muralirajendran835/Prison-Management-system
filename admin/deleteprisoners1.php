<html>
<head>
  <title>Delete prisoners</title>
  <link rel="stylesheet" media="screen" href="bg.css" >
  <style>
     .f3{
       padding-top:100px;
     }
     </style>
</head>
<body>
<div class="bg-primary" style="background-color:Gainsboro" ><font size="7"><center>PRISON MANAGEMENT SYSTEM</center></font></div>
	<table align='center' border='0' class='f3' width='1250' cellpadding='8' cellspacing='0' height='200'>
        
          <tr>
            <td colspan="3" bgcolor='cadetblue' valign='center'>

<?php
ob_start();
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"prisonpro");
$result=mysqli_query($link,"select * from registration");
?>


<?php

//To delete:
if(isset($_POST["delete"])){
$id=$_POST["id"];
$delete=mysqli_query($link,"delete from registration where id='$_POST[id]'");
if($delete){
print "<script language=\"javascript\">
	alert(\"Successfully deleted!...\")
	location.href=\"deleteprisoners1.php\"
	</script>";
}
else{
print "<script language=\"javascript\">
	alert(\"Not deleted!...\")
	location.href=\"deleteprisoners1.php\"
	</script>";
}
}
?>



<?php

print "<table width='100%' bgcolor='BLACK' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><b>DELETE PRISONER RECORD</b></caption>
<tr bgcolor='silver'>
<th>National id</th>
<th width='10%'>Full Name</th>
<th width='15%'>Date of Birth</th>
<th width='10%'>Date in</th>
<th width='10%'>Date out</th>
<th width='15%'>Address</th>
<th width='10%'>County</th>
<th width='10%'>Gender</th>
<th width='3%'>Education</th>
<th width='10%'>Status</th>
<th width='15%'>Offence</th>
<th width='10%'>File Number</th>
<th> </th>


</tr>";
$i=1;
while($row=mysqli_fetch_array($result)){
print "<form method=POST>";
print"<tr bgcolor='white'>
<td>$i<input type=\"hidden\" name=\"id\" value=\"$row[id]\"></td>
<td>$row[Full_Name]</td>
<td>$row[DOB]</td>
<td>$row[datein]</td>
<td>$row[dateout]</td>
<td>$row[Address]</td>
<td>$row[Country]</td>
<td>$row[Gender]</td>
<td>$row[Education]</td>
<td>$row[Marital]</td>
<td>$row[Offence]</td>

<td>$row[File_num]</td>

<td align='center'><input type=submit name=delete value=delete></td>
</tr>";
print "</form>";
$i++;
}
print"</table>";
?>

<br/>

			</td>
          </tr>
          <tr>
		  <td align="center" bgcolor='Gainsboro'><a href="adminpanel.php" target="_parent">Admin Panel <b>|</b></a>
			<a href="viewprisoners.php" target="_parent">View </a>
			
		
          
	</table>
</body>
</head>
</html>

