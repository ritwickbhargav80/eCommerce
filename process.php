<?php
		session_start();
		$email = $_POST['user'];
		$password = $_POST['pass'];

		$link = mysqli_connect("localhost", "root", "", "project") or die("Cannot connect to the Database");

		$email = stripcslashes($email);
		$password = stripcslashes($password);
		$email = mysqli_real_escape_string($link, $email);
		$password = mysqli_real_escape_string($link, $password);

		$result = mysqli_query($link, "SELECT * FROM register Where password='$password' and email='$email'") or die("failed to query database".mysql_error());
		$row = mysqli_fetch_array($result);
		if($row['password'] == $password && $row['email'] == $email)
		{
	 			echo '<script type="text/javascript"> window.onload= function() { alert("Successfully Login!");}</script>';
	 			//echo '<p style="text-decoration:none; float: right; padding-right: 20px; font-size: 24px; color: #E2472F;">Hi,'.$row['username'].'</p>';
	 			//include("Homepage1.html");
	 			$_SESSION['username'] = $row['username'];
 				header('location:Homepage1.php');
		}
		else
		{
				echo '<script type="text/javascript"> window.onload= function() { alert("Failed to Login!");}</script>';
				include("index.html");
		}
?>