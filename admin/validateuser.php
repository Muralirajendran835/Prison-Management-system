/
<?php
$con=mysqli_connect("localhost","root","","prisonpro");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//escape variable for security here or problem
        $User_Id =$_POST['User_Id'];
        $Name = $_POST['Name'];
        $Address = $_POST['Address'];   
        $City = $_POST['City'];  
        $Mobile = $_POST['Mobile']; 
        $Email = $_POST['Email']; 
        $Gender =$_POST['Gender'];
        $month = $_POST['lMonth'];
        $dDay =  $_POST['txtDay'];
        $dYear = $_POST['txtYear'];
        $UserName =$_POST['UserName'];
        $Password=$_POST['Password'];
        $BirthDate = $month . '/' .$dDay . '/' . $dYear;
        $BirthDate = date('Y-m-d',strtotime($BirthDate));
        
        //we are using mysql_query function. it returns a resource on true else False on error
        $sql="insert into user_tbl set
                    User_Id = '$User_Id',
                    Name = '$Name',
                    Address = '$Address',
                    City = '$City',
                    Mobile = '$Mobile',
                    Email = '$Email',
                    Gender = '$Gender',
                    BirthDate = '$BirthDate',
                    UserName = '$UserName',
                    Password = '$Password'
                    ";
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
?>
	<script type="text/javascript">
						alert("you have succefully add the record !thank you");
						window.location = "adminpanel.php";
					</script>