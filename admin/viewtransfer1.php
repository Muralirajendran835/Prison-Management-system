<html>
<head>
  <title>View transfer record  OFFICER </title>
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
	<table align='center' border='0'  class="f3" width='800' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='cadetblue' valign='center'>

<?php

$host="localhost";
$username="root";
$password="";
$db_name="prisonpro";
$tbl_name="transfer";

$connection =mysqli_connect("$host", "$username", "$password")or die("cannot connect server "); 
 mysqli_select_db($connection ,"$db_name")or die("cannot select DB");

$sel= mysqli_query($connection,"select * from $tbl_name");
echo"<table align='center'bgcolor='Black' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>PRISONER TRANSFER  INFORMATION</h3></caption>
<tr bgcolor='#CCCCCC'>
<th width='3%'>National id</th>
<th width='10%'>File Number</th>
<th width='15%'>From Prison</th>
<th width='10%'>To Prison</th>
<th width='10%'>Date of Transfer</th>
</tr>";

   while($row=mysqli_fetch_array ($sel))
{
echo "<tr bgcolor='white'>";

echo  "<td width='3%'>".$row ['National_id']."</td>";
echo  "<td width='10%'>".$row ['File_num']."</td>";
echo  "<td width='7%'>".$row ['From_prison']."</td>";
echo  "<td width='10%'>".$row ['To_prison']."</td>";
echo  "<td width='10%'>".$row ['Dateoftransfer']. "</td>";


echo "</tr>";
}
echo"</table>";
?>


<br/>
			</td>
          </tr>
          <tr>
			<td align="center" bgcolor='Gainsboro'><a href="adminpanel.php" target="_parent">admin panel<b>|</b></a>
			<a href="deletetransfer1.php" target="_parent">Delete</a>
			
		
          </tr>
        
	</table>
</body>
</head>
</html>