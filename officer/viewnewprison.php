<html>
<head>
  <title>View new  prison </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='green' width='1300' cellpadding='8' cellspacing='0' height='200'>

          <tr>
            <td bgcolor='#999999' valign='center'>

<?php

$host="localhost";
$username="root";
$password="";
$db_name="prisonpro";
$tbl_name="newprison";

$connection =mysqli_connect("$host", "$username", "$password")or die("cannot connect server "); 
 mysqli_select_db($connection ,"$db_name")or die("cannot select DB");

$sel= mysqli_query($connection,"select * from $tbl_name");
echo"<table align='center' width='100%' bgcolor='GREEN' border='0' bgcolor='green' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>NEW PRISON INFORMATION</h3></caption>
<tr bgcolor='#CCCCCC'>
<th width='3%'>Prison Nunber</th>
<th width='3%'>Prison Name</th>
<th width='10%'>Location</th>
<th width='15%'>Open Date</th>
<th width='10%'>Contact</th>
<th width='10%'>Capacity</th>



</tr>";

   while($row=mysqli_fetch_array ($sel,MYSQLI_ASSOC))
{
echo "<tr bgcolor='grey'>";

echo  "<td width='3%'>".$row ['pno']."</td>";
echo  "<td width='7%'>".$row ['pname']."</td>";
echo  "<td width='10%'>".$row ['location']."</td>";
echo  "<td width='10%'>".$row ['opendate']. "</td>";
echo  "<td width='10%'>".$row ['contact']. "</td>";
echo  "<td width='3%'>" .$row ['capacity']."</td>";

echo "</tr>";
}
echo"</table>";

?>

<br/>
			</td>
          </tr>
          <tr>
			<td align="center" bgcolor='green'><a href="officerpanel.php" target="_parent">Officer Panel <b>|</b></a>
     
			<a href="index.php" target="_parent">Log out</a></td>
		
          </tr>
          <tr>
            <td align='center' bgcolor='white' height='1'>
					<?php
           include("footer.php");
                ?>
            </td>
          </tr>
	</table>
</body>
</head>
</html>