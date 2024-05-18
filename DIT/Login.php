<?php
	include_once'config.php';
	
	session_start();
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		$sql = "SELECT * FROM user WHERE Email = '".$username."' AND Password = '".$password."'";
		
		$result = mysqli_query($conn,$sql);
		
		$row = mysqli_fetch_array($result);
		
		if($row["UserType"] == "User"){
			$_SESSION["Username"] = $username;
			header("Location:SearchDate.php");
		}
		else if($row["UserType"] == "Admin"){
			echo "admin";
		}else{
			echo "<script> alert('Invalid Username or Password')</script>";
		}
		
	}
?>

<!DOCTYPE html>
<html>
<head>
<title> Login </title>
	<link rel="stylesheet" href="RegisterStyle.css">
</head>
<body>
	<?php include 'Header.php' ?>
	<div class = "container1">
	<form action = "Login.php" method = "POST">
		<h1 align = "center"> Login </h1>
		<table>
			<tr>
				<td><label for="username"> Username :  </label></td>
				<td><input type="text" name="username" placeholder="abc@gmail.com" required></td>
			</tr>
			
			<tr>
				<td><label for="password"> Password :  </label></td>
				<td><input type="password" name="password" required></td>
			</tr>
			
		</table>
		<div align = center>
			<input type="submit" value="Login" id="LoginBtn">	
		</div>
	</form>
	</div>
	<?php include 'Footer.php' ?>
</body>
</html>