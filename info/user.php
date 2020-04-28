<?php
 $conn=mysqli_connect("localhost","root","Admin1234#@","corona");
 if(isset($_POST['submit']))
 {
 	
 	$last_name=$_POST['last_name'];
 	$first_name=$_POST['first_name'];
 	$middle_name=$_POST['middle_name'];
 	$company_id=$_POST['company_id'];
 	$string=$_POST['string'];
 	$phone_no=$_POST['phone_no'];
 	   $email=$_POST['email'];
 	   $password=$_POST['password'];
 	   $sql="INSERT INTO 
 	   user(last_name,first_name,middle_name,company_id,string,email,password,phone_no)
	   values('$last_name',$first_name','$middle_name','$company_id','$string','$phone_no',$email','$password')";
 	   if(mysqli_query($conn,$sql))
 	   {
 	   	   echo "successfully Inserted";
 	   }
 	   else
 	   {
 	   	 echo "Error".$sql.$conn->error;
 	   }
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<label>last_name</label><br><br>
		<input type="text" name="last_name"><br>
		<label>first_name</label><br><br>
		<input type="text" name="first_name"><br>
		<label>middle_name</label><br><br>
		<input type="text" name="middle_name"><br>
		<label>company_id</label><br><br>
		<input type="text" name="company_id"><br>
		<label>string</label><br><br>
		<input type="text" name="string"><br>
		<label>phone_no</label><br><br>
		<input type="text" name="phone_no"><br>
<label>email</label><br><br>
			<input type="email" name="email"><br>
			<label>password</label><br><br>
	<input type="password" name="password"><br>
<br>
	<input type="submit" name="submit">
	</form>

	


</body>
</html>