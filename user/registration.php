<html>
<head>
<title>registration  form</title>
<link rel="stylesheet" media="screen" href="bg.css">
</head>
<body>
<table border="1" bgcolor="#FFFFFF" align="center" width="54%">
<tr bgcolor='cadetblue'>
<td align="center">
<font size="5">
<a href="userpanel.php">HOME</a> 
</font>
</td>
</tr>
<tr>
<td>
	<h2 class="bg-primary" align="center">PRISONER REGISTRATION FORM</h2>
<div id="content">
<form action="validatereg.php" method="post">
<table bgcolor="white" height="450" border="0" align="center" width="65%">
<tr>
<tr>		
<td width="34%" bgcolor="#FFFFFF"><b>National Id:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Nid" size=8 maxlength=8 required   />


</tr>
<tr>
<td bgcolor="#FFFFFF"><b>Full Name:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="Fname" required/></td>
</tr>
	<tr><td><label for="on"><b>Date of Birth:</b></label>
		      	<td><select name="month" required>
				<option selected="selected" value="01">January</option>
				<option value="02">February</option>
				<option value="03">March</option>
				<option value="04">April</option>
				<option value="05">May</option>
				<option value="06">June</option>
				<option value="07">July</option>
				<option value="08">August</option>
				<option value="09">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>
				</select></td>
				<td>
				<input type="text" name="day" size=2 placeholder="DD" maxlength=2 required /></td>
			
		      	<td>
		      	  <input type="text" name="year"  size=2 placeholder="YYYY" maxlength=4 required />
				
			</td>
</tr>

<tr><td><label for="on"><b>Date of In:</b></label>
		      	<td><select name="dmonth" required>
				<option selected="selected" value="01">January</option>
				<option value="02">February</option>
				<option value="03">March</option>
				<option value="04">April</option>
				<option value="05">May</option>
				<option value="06">June</option>
				<option value="07">July</option>
				<option value="08">August</option>
				<option value="09">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>
				</select></td>
			    <td>
                        <input type="text" id="dday" name="dday" style="width: 40px;"  placeholder="DD" class="reg_fields"/>
                    </td>
                    <td>
                        <input type="text" id="dyear" name="dyear" style="width: 60px;" placeholder="YYYY" class="reg_fields"/>
                    </td>
                </td>
</tr>
   
				
</tr>
<tr>
	<tr><td><label for="on"><b>Date Out:</b></label>
		      	<td><select name="month" required>
				<option selected="selected" value="01">January</option>
				<option value="02">February</option>
				<option value="03">March</option>
				<option value="04">April</option>
				<option value="05">May</option>
				<option value="06">June</option>
				<option value="07">July</option>
				<option value="08">August</option>
				<option value="09">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>
				</select></td>
				
				<td>
				<input type="text" name="day" size=2 placeholder="DD" maxlength=2 required /></td>
			
		      	<td>
		      	  <input type="text" name="year" placeholder="YYYY" size=2 maxlength=4 required />
				
			</td>
</tr>
<tr>
<!-- <td bgcolor="#FFFFFF"><b>Date of Birth:</b></td> 
<td bgcolor="#FFFFFF"><input type="text" name="dob"/>
<span class="required_notification">YYYY-MM-DD</span</td>
</tr>-->
<tr>
<td bgcolor="#FFFFFF"><b>Address:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="address"  required placeholder="address"/></td>
</tr>
<tr><td bgcolor="#FFFFFF"><b>Country:</b></td>
        <td>  <input type="text" name="country">
		</td></tr>
		<tr>
 <td><b>Gender</b></td>
        <td><b><input type="radio" name="Gender" value="Male" checked="checked">
        Male <input type="radio" name="Gender" value="Female"></b>
	   <b>Female</b></td>
	      </tr>
		  
 <tr><td bgcolor="#FFFFFF"><b>Education Level:</b></td>
        <td> <select name="education">
		<option>Never</option>
		<option>O level</option>
		<option>Diploma</option>
        <option>Bachelor Degree</option>
		<option>Above</option></td></tr>
		
<tr><td bgcolor="#FFFFFF"><b>Marital Status:</b></td>
        <td> <select name="status">
		<option>Divorced</option>
		<option>Married</option>
		<option>Single</option></td></tr>

<tr><td bgcolor="#FFFFFF"><b>Offence</b></td>
     <td bgcolor="#FFFFFF"><font size="4">
     <textarea cols="17" rows="4" name="offence" required placeholder="fill this box"></textarea>
	 </tr>
		

<tr>
<td bgcolor="#FFFFFF"><b>Sentence:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="sentence"  maxlength=7 required placeholder="2 Years" /></td>
</tr>

<tr>
<td bgcolor="#FFFFFF"><b>File Number:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="Filenum"  maxlength=9 required placeholder="vcp-001" /></td>
</tr>

   <td height="26" bgcolor="#FFFFFF" align="center"><input type="submit" value="SAVE" /></td>
 </tr>
</table>
</form>
</td>
</tr>

</table>
</body>
</html>