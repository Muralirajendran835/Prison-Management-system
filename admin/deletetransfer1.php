<html>
<head>
  <title>Delete prisoners by officier</title>
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
	<table align='center' border='0' class="f3" width='800' cellpadding='8' cellspacing='0' height='200'>
        
          <tr>
            <td colspan="3" bgcolor='cadetblue' valign='center'>

<?php
ob_start();
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"prisonpro");
$result=mysqli_query($link,"select * from transfer");
?>


<?php
//To delete:
if(isset($_POST["delete"])){
$id=$_POST["National_id"];
$delete=mysqli_query($link,"delete from transfer where National_id='$_POST[National_id]'");
if($delete){
print "<script language=\"javascript\">
	alert(\"Successfully deleted!...\")
	location.href=\"deletetransfer1.php\"
	</script>";
}
else{
print "<script language=\"javascript\">
	alert(\"Not deleted!...\")
	location.href=\"deletetransfer1.php\"
	</script>";
}
}
?>



<?php

print "<table width='100%' bgcolor='black' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><b>DELETE TRANSFER </b></caption>
<tr bgcolor='#CCCCCC'>

<th>National id</th>
<th>File Number</th>
<th>From Prison</th>
<th>To Prison</th>
<th>Date of Transfer</th>
<th> </th>


</tr>";
$i=1;
while($row=mysqli_fetch_array($result)){
print "<form method=POST>";
print"<tr bgcolor='white'>
<td>$i<input type=\"hidden\" name=\"National_id\" value=\"$row[National_id]\"></td>
<td>$row[File_num]</td>
<td>$row[From_prison]</td>
<td>$row[To_prison]</td>
<td>$row[Dateoftransfer]</td>

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
		  <td align="center" bgcolor='Gainsboro'><a href="adminpanel.php" target="_parent">Admin panel<b>|</b></a>
			<a href="viewtransfer1.php" target="_parent">View</a>

		
          </tr>
     
	</table>
</body>
</head>
</html>

