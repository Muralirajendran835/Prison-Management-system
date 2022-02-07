<!doctype html>
<html>
<head>
  <style>
    .f1{
      padding-top:100px;
    }
   
    body{
      background-image: url("prison2.jpg");
      opacity: 9;
    }
    a{
      color:white;
      
    }
    
    
    </style>
 
<link rel="stylesheet" media="screen"  >
</head>
<body>
<div class="bg-primary" style="background-color:Gainsboro" ><font size="7"><center>PRISON MANAGEMENT SYSTEM</center></font></div>
<div style="background-color:cadetblue;" >

          
          
             
        <center>
       <font size="5">   
            <a href="index.php">HOME</a>  |
            <a href="announce.php">COMPLAINT</a>|
            <a href="location.php">ABOUT</a>|
            </center> 
 
  </font>
            
  </div>      
    <div class="f1">
  <table align="center" border="0" width="250" cellpadding="30" cellspacing="0" height="250">
          
         
          <tr>
            <td width="25%" bgcolor="#FFFFFF" >&nbsp;&nbsp;<img src="login.jpg" width="200" height="179"  alt=""/></td>
            <td width="50%" align="center" bgcolor="#FFFFFF">
       

<form action="login1.php" method="post">
<h2>LOGIN</h2>
<table width="408" height="142"  style="background-color: cadetblue">
<tr>
<td height="36" bgcolor="#FFFFFF"><b>User Name:</b></td>
<td height="36" bgcolor="#FFFFFF"><input type="text" name="username" /></td>
</tr>

<tr>
<td height="36" bgcolor="#FFFFFF"><b>Password:</b></td>
<td height="36" bgcolor="#FFFFFF"><input type="password" name="password" /></td>
</tr>
<tr><td bgcolor="#FFFFFF"><b>Select User:</b></td>
       <td height="36" bgcolor="#FFFFFF"> <select name="cmbUser">
		 <option>User</option>
     <option>Police</option>
     <option>Admin</option></td></tr>
    
<tr ><td  height="36" align="right" ><input  type="submit" value="LOGIN" /></td></tr>
</form>

</table>
</table>
  </div> 
</body>
</html>