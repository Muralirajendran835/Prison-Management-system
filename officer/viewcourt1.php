<html>
<head>
  <title>Case file Prisoners  </title>
   <link rel="stylesheet" media="screen" href="bg.css" >
   <style>
     .f3{
       padding-top:100px;
     }
     a{
      color:blue;
     }
     </style>
</head>
<body>
<div class="bg-primary" style="background-color:Gainsboro" ><font size="7"><center>PRISON MANAGEMENT SYSTEM</center></font></div>
	<table align='center' border='0' class='f3' width='800' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='cadetblue' valign='center'>

<?php

$host="localhost";
$username="root";
$password="";
$db_name="prisonpro";
$tbl_name="court";

$connection =mysqli_connect("$host", "$username", "$password")or die("cannot connect server "); 
 mysqli_select_db($connection ,"$db_name")or die("cannot select DB");

$sel= mysqli_query($connection,"select * from $tbl_name  ORDER BY National_id DESC LIMIT 0,7");
echo"<table align='center' width='100%'  bgcolor='BLACK' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>COURT INFORMATION</h3></caption>
<tr bgcolor='#CCCCCC'>
<th width='3%'>National id</th>
<th width='10%'>Fie Number</th>
<th width='10%'>Date of trial</th>
<th width='15%'>Sentence</th>
<th width='10%'>Location</th>
<th width='10%'>Judge</th>
</tr>";

   while($row=mysqli_fetch_array ($sel,MYSQLI_ASSOC))
{
echo "<tr bgcolor='white'>";

echo  "<td width='3%'>".$row ['National_id']."</td>";
echo  "<td width='7%'>".$row ['File_number']."</td>";
echo  "<td width='10%'>".$row ['Dateoftrial']."</td>";
echo  "<td width='10%'>".$row ['Sentence']. "</td>";
echo  "<td width='10%'>".$row ['Location']."</td>";
echo  "<td width='10%'>".$row ['judge']."</td>";



echo "</tr>";
}
echo"</table>";

?>

<br/>
			</td>
          </tr>
          <tr>
			<td align="center" bgcolor='Gainsboro'>
        <a href="officerpanel.php" target="_parent">Officer panel <b>|</b></a>
			<a href="deletecase1.php" target="_parent">Delete</a>
		
          
	</table>
</body>
</head>
</html>