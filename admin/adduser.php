<html>
<head>
   <head>
  
    <link href="style1.css" rel="stylesheet" type="text/css"/>
    <script src="jquery-1.7.1.min.js"></script>
    <script src="registration_script.js"></script>
	<link rel="stylesheet" media="screen" href="bg.css" >
</head>
<body> 

	<table align="center" border="0" bgcolor="white" width="400" cellpadding="9" cellspacing="0" height="525">
         
           <tr>
            <td colspan="3" bgcolor='cadetblue' height="1" align="center">
	     	   <font size="4">   
           <a href="adminpanel.php">HOME</a>
          </font>
            </td>
          </tr>
           <tr>
            <td width="25%" bgcolor="#FFFFFF" >&nbsp;&nbsp;
            <td width="50%" align="center" bgcolor="white">
            
<div id="content" class="ctrdiv">
	<form id="frmReg" method="POST" action="validateuser.php">
       <h2>Add user  </h2>
            <div class="control_input">
            <label for="User_Id" class="label">User Id</label><input type="text" id="User_Id" name="User_Id" size=14  maxlength=8 
                class="reg_fields" required   />
            </div>
            <div class="control_input">
                <label for="Name" class="label">Name</label><input type="text" id="Name" name="Name" class="reg_fields" required/>
            </div>
            <div class="control_input">
                <label for="Address" class="label">Address</label><input type="text" id="Address" name="Address" class="reg_fields" required/>
            </div>
            <div class="control_input">
                <label for="City" class="label">City</label><input type="text" id="City" name="City" class="reg_fields" required/>
            </div>
             <div class="control_input">
                <label for="Mobile" class="label">Mobile</label><input type="text" id="Mobile" name="Mobile" class="reg_fields" required/>
            </div>
             <div class="control_input">
                <label for="Email" class="label">Email</label><input type="email" id="Email" name="Email" class="reg_fields" required/>
            </div>
              <div class="control_input">
                <div style="display: inline-block;">
                <table>
                     <td>
                        <label for="Gender" class="label">Gender</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="Gender" name="Gender" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
                           <option>Male</option>
                           <option>Female</option>       
                        </select>
                    </td>
                </table>
                </div class="control_input">
            
            <div class="control_input">               
                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="BirthDate" class="label">BirthDate</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="lMonth" name="lMonth" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
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
                        </select>
                    </td>
                    <td>
                        <input type="text" id="txtDay" name="txtDay" style="width: 40px;" placeholder="DD" class="reg_fields"/>
                        <input type="text" id="txtYear" name="txtYear" style="width: 60px;" placeholder="YYYY" class="reg_fields"/>
                    </td>
                    </tr></table>
                </div>
            </div>
             <div class="control_input">
            <label for="UserName" class="label">UserName</label><input type="text" id="UserName" name="UserName" size=14  maxlength=8 
                class="reg_fields" required   />
            </div>
             <div class="control_input">
            <label for="Password" class="label">Password</label><input type="password" id="Password" name="Password" size=14  maxlength=8 
                class="reg_fields" required   />
            </div>
             <div class="control_input">
                <input type="submit" name="signup" value="Submit" title="" border="0">
             </div class="control_input">
            
            <div id="validation_msg">
                     </div>
    </form>
</td>
</tr>

</table>
</body>
</html>