<html>
<head>
  <title>View comments Details </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='1' bgcolor='green' width='700' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='#999999' valign='center'>

<?php

$host="localhost";
$username="root";
$password="";
$db_name="prisonpro";
$tbl_name="announce";
$connection =mysqli_connect("$host", "$username", "$password")or die("cannot connect server "); 
 mysqli_select_db($connection ,"$db_name")or die("cannot select DB");

$sel= mysqli_query($connection,"select * from $tbl_name");
echo"<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='green'>
<caption><h3>ANNOUNCE  DETAILS</h3></caption>
<tr bgcolor='green'>
<th width='3%'>To</th>
<th width='10%'>Mobile</th>
<th width='15%'>Subject</th>
<th width='10%'>Message</th>
</tr>";

   while($row=mysqli_fetch_array ($sel))
{
echo "<tr bgcolor='grey'>";
echo  "<td width='3%'>".$row ['to']."</td>";
echo  "<td width='10%'>".$row ['Id']."</td>";
echo  "<td width='10%'>".$row ['subject']."</td>";
echo  "<td width='10%'>".$row ['message']. "</td>";



echo "</tr>";
}
echo"</table>";

?>

<br/>
			</td>
          </tr>
          <tr>
			<td align="center"><a href="adminpanel.php" target="_parent">Panel Admin <b>|</b></a>
			<a href="deleteannounce.php" target="_parent">delete</a></td>
		
			<a href="index.php" target="_parent">Log out</a></td>
		
		
          </tr>
          <tr>
            <td align='center' bgcolor='white' height='1'><?php
           include("footer.php");
                ?>
            </td>
          </tr>
	</table>
</body>
</head>
</htm