<html>
<head>
  <title>Delete the case officer</title>
  <link rel="stylesheet" media="screen" href="bg.css" >
  <style>
     .f3{
       padding-top:100px;
     }
     a{
      color:Blue;
      
    }
     </style>
</head>
<body>
<div class="bg-primary" style="background-color:Gainsboro" ><font size="7"><center>PRISON MANAGEMENT SYSTEM</center></font></div>
	<table align='center' border='0' class='f3' width='1200' cellpadding='8' cellspacing='0' height='200'>
        
          <tr>
            <td colspan="3" bgcolor='cadetblue' valign='center'>

<?php
ob_start();
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"prisonpro");
$result=mysqli_query($link,"select * from court");
?>


<?php

//To delete:
if(isset($_POST["delete"])){
$National_id=$_POST["National_id"];
$delete=mysqli_query($link,"delete from court where National_id='$_POST[National_id]'");
if($delete){
print "<script language=\"javascript\">
	alert(\"Successfully deleted!...\")
	location.href=\"deletecase1.php\"
	</script>";
}
else{
print "<script language=\"javascript\">
	alert(\"Not deleted!...\")
	location.href=\"deletecase1.php\"
	</script>";
}
}
?>



<?php

print "<table width='100%' bgcolor='BLACK' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><b>DELETE COURT RECORD</b></caption>
<tr bgcolor='silver'>
<th>National id</th>
<th width='10%'>File Number</th>
<th width='15%'>Date of Trial</th>
<th width='15%'>Sentence</th>
<th width='10%'>Location</th>
<th width='10%'>Judge</th>
<th> </th>


</tr>";
$i=1;
while($row=mysqli_fetch_array($result)){
print "<form method=POST>";
print"<tr bgcolor='white'>
<td>$i<input type=\"hidden\" name=\"National_id\" value=\"$row[National_id]\"></td>
<td>$row[File_number]</td>
<td>$row[Dateoftrial]</td>
<td>$row[Sentence]</td>
<td>$row[Location]</td>
<td>$row[judge]</td>

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
		  <td align="center" bgcolor='Gainsboro'><a href="officerpanel.php" target="_parent">Panel officer <b>|</b></a>
			<a href="viewcourt1.php" target="_parent">View Case <b>|</b></a>
			</td>
		
          </tr>
         
	</table>
</body>
</head>
</html>

