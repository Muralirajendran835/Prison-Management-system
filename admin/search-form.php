<html>
<head>
  
  <title>PRISONERS SEARCH RECORD</title>
   <link rel="stylesheet" media="screen" href="bg.css" >
   <style>
     .f3{
       padding-top:100px;
     }
     </style>
</head>
<body>
<div class="bg-primary" style="background-color:Gainsboro" ><font size="7"><center>PRISON MANAGEMENT SYSTEM</center></font></div>
<table align="center" border="1" class="f3" width="600" cellpadding="8" cellspacing="0" height="415">
         
          <tr>
            <td colspan="8" bgcolor='cadetblue' height="3" align="center">
			
			
		<font size="5">  
         <a href="adminpanel.php">Admin Panel</a>
          </font>
            </td>
</tr>
<tr>
<td align="center" bgcolor='cadetblue'><h1> Seacrh Prisoners By ID</h1>
        <form action="search.php" method="get">
           <label>ID:
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor='cadetblue'></td>

    <tr>
     <td align="center" bgcolor='cadetblue'><h1> Seacrh Officer By ID</h1>
        <form action="search1.php" method="get">
           <label> Officer ID:
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor='cadetblue'></td></td></tr>
<tr>
     
      <td align="center" bgcolor='cadetblue'><h1> Seacrh Visitor By ID</h1>
        <form action="search3.php" method="get">
           <label> Visitors ID:
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor='cadetblue'></td></tr>

    <tr>
     
      <td align="center" bgcolor='cadetblue'><h1> Seacrh Transfer By ID</h1>
        <form action="search2.php" method="get">
           <label> National  Id :
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor='cadetblue'></td></tr>

<td width="7%" bgcolor='cadetblue'></td>
<td width="2%" bgcolor='cadetblue'></td>


</table>
</body>
</html>