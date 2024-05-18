<?php
	include_once'config.php';
	
	session_start();
	
	if(!isset($_SESSION["Username"])){
		header("Location:Login.php");
	}
	
	$name = $_SESSION["Username"];
	
	$sql = "SELECT * FROM user WHERE Email='$name'";
	
	$result = mysqli_query($conn,$sql);
	
	$row = mysqli_fetch_assoc($result);
	
	if(isset($_POST['EditBtn'])){
		$fname = $_POST['FirstName'];
		$lname = $_POST['LastName'];
		$address = $_POST['Address'];
		$dob = $_POST['DOB'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		
		$sql2="UPDATE user SET FirstName='$fname',LastName='$lname',Address='$address',DateOfBirth='$dob',MobileNo='$mobile',Email='$email' WHERE Email='$name'";
		
		$result2 = mysqli_query($conn,$sql2);
		
		if($result2){
			echo "<script> alert('Profile Updated Successfully')</script>";
		}
	}
	
	if(isset($_POST['DeleteBtn'])){
		$sql3="DELETE FROM user WHERE Email='$name'";
		
		$result3 = mysqli_query($conn,$sql3);
		
		if($result3){
			echo "<script> alert('Profile Delete Successfully')</script>";
			header("Location:Logout.php");
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<title> Login </title>
<style>
	input[type="text"],input[type="email"],input[type="password"],input[type="phone"],input[type="NIC"], input[type="date"], input[type="tel"]{
		width: 100%;
		padding: 10px;
		border-radius: 3px;
		border: 1px solid #ccc;
		box-sizing: border-box;
		margin-bottom: 20px;
	}
	
	.container1 {
		width: 400px;
		margin: 100px auto;
		padding: 20px;
	}
	
	input[type="submit"] {
		background-color: white;
		color: black;
		padding: 10px 20px;
		border: 2px solid black;
		border-radius: 3px;
		cursor: pointer;
	}

	input[type="submit"]:hover {
		background-color: #9AEAF0;
	}

</style>
</head>
<body>
	<?php include 'Header.php' ?>
	
	<div align = 'left'>
		<?php 
			echo "<h1>";
			echo "Hello!!";
			echo "<br>";
			echo $_SESSION["Username"];
			echo "</h1>"
		?>
	</div>
	
	<div align = 'center' class = 'container1'>
	<form action = "Profile.php" method = "POST">
		<h1 align = "center"> My Profile </h1>
		<Fieldset>
		<table>
			<tr>
				<td><label for="FirstName"> First Name </label></td>
				<td><input type="text" name="FirstName" placeholder="First Name" value=<?php echo"{$row['FirstName']}"?>></td>
			</tr>
			
			<tr>
				<td><label for="LastName"> Last Name </label></td>
				<td><input type="text" name="LastName" placeholder="Last Name" value=<?php echo"{$row['LastName']}"?>></td>
			</tr>
			
			<tr>
				<td><label for="Address"> Address </label></td>
				<td><input type="text" name="Address" placeholder="Address" value=<?php echo"{$row['Address']}"?>></td>
			</tr>
			
			<tr>
				<td><label for="DOB"> Date of Birth </label></td>
				<td><input type="date" name="DOB" placeholder="mm/dd/yyyy" value=<?php echo"{$row['DateOfBirth']}"?>></td>
			</tr>
			
			<tr>
				<td><label for="mobile"> Mobile Number </label></td>
				<td><input type="tel" name="mobile" placeholder="0777777777" pattern="[0-9]{10}" value=<?php echo"{$row['MobileNo']}"?>></td>
			</tr>
			
			<tr>
				<td><label for="email" >E-mail </label></td>
				<td><input type="email" name ="email" placeholder="abc@gmail.com" pattern="[a-z0-9.-+_%]+@[a-z0-9.-]+\.[a-z]{2,3} " value=<?php echo"{$row['Email']}"?>></td>
			</tr>
		</Fieldset>
		</table>
		<br>
		<div align = center>
			<input type="submit" value="Update Profile" name="EditBtn">
			<input type="submit" value="Delete Profile" name="DeleteBtn">
		</div>
		</form>
	</div>
	<?php include 'Footer.php' ?>
	
	
</body>
</html>