<?php
session_start();
header('location:Homepage1.php');
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$phoneCode = $_POST['phoneCode'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
if(!empty($username) || !empty($password) || !empty($gender) || !empty($email) || !empty($phoneCode) || !empty($phone) || !empty($password2))
{
 	$host = "localhost";
 	$dbUsername = "root";
 	$dbPassword = "";
 	$dbname = "project";
 	$conn =new mysqli($host, $dbUsername, $dbPassword, $dbname);
 	if(mysqli_connect_error())
 	{
 		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
 	}
 	else
 	{
 		if($password == $password2)
 		{
 			$SELECT = "SELECT email From register Where email = ? Limit 1";
			$INSERT = "INSERT Into register (username, password, gender, email, phoneCode, phone) values (?,?,?,?,?,?)";
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s",$email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum=$stmt->num_rows;

			if($rnum==0)
			{
 				$stmt->close();
 				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ssssii",$username, $password, $gender, $email, $phoneCode, $phone);
				$stmt->execute();
				echo '<script type="text/javascript"> window.onload= function() { alert("New record entered successfully");}</script>';
				//echo '<p style="text-decoration:none; float: right; padding-right: 20px; font-size: 24px; color: #E2472F;">Hi,'.$username.'</p>';
				//include("Homepage1.html");
				$_SESSION['username'] = $username;
 				include('location:Homepage1.php');
			}
			else
			{
				echo '<script type="text/javascript"> window.onload= function() { alert("Already registered Email Address");}</script>';
				include("register.html");
			}
			$stmt->close();
			$conn->close();
		}
		else
		{
			echo '<script type="text/javascript"> window.onload= function() { alert("Both Passwords didnt match");}</script>';
			include("register.html");
		}
 	}
}
else
{
	echo "All field are required";
	die();
}
?>