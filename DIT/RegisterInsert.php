<?php
	include_once'config.php';
?>

<?php
	$fname = $_POST['FirstName'];
	$lname = $_POST['LastName'];
	$address = $_POST['Address'];
	$dob = $_POST['DOB'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$Password = $_POST['pass'];
	
	$sql = "INSERT INTO user (FirstName,LastName,Address,DateOfBirth,MobileNo,Email,Password) VALUES ('$fname','$lname','$address','$dob','$mobile','$email','$Password')";
	
	//Execute the query
	if(mysqli_query($conn,$sql)){
		echo "<script> alert('Record inserted successfully')</script>";
		header("Location:Home.php");
	}
	else{
		echo "<script> alert('Error Insertion')</script>";
	}
	
	//Close the connection
	mysqli_close($conn);
?>