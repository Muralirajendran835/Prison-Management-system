<html>
<head>
  <title>View Announce Details by Officer </title>
   <link rel="stylesheet" media="screen" href="bg.css" >
   <style>
     .f3{
       padding-top:100px;
     }
     </style>
</head>
<body>
<div class="bg-primary" style="background-color:Gainsboro" ><font size="7"><center>PRISON MANAGEMENT SYSTEM</center></font></div>
	<table align='center' border='0'  class='f3'  width='800' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='cadetblue' valign='center'>

<?php

$host="localhost";
$username="root";
$password="";
$db_name="prisonpro";
$tbl_name="announce";

$connection =mysqli_connect("$host", "$username", "$password")or die("cannot connect server "); 
 mysqli_select_db($connection ,"$db_name")or die("cannot select DB");
$sel= mysqli_query($connection,"select * from $tbl_name");
echo"<table align='center' bgcolor='BLACK' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>ANNOUNCE  DETAILS</h3></caption>
<tr bgcolor='#CCCCCC'>
<th width='3%'>To</th>
<th width='10%'>Mobile</th>
<th width='15%'>Subject</th>
<th width='10%'>Message</th>
</tr>";

   while($row=mysqli_fetch_array ($sel,MYSQLI_ASSOC))
{
echo "<tr bgcolor='white'>";
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
			<td align="center" bgcolor='Gainsboro'><a href="officerpanel.php" target="_parent">Panel Officer <b>|</b></a>
			<a href="deleteannounce1.php" target="_parent">Delete</a>
		
		
          </tr>
         
	</table>
</body>
</head>
</htm