<?php
	include_once'config.php';

	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$petName = $_POST['petName'];
	$breed = $_POST['breed'];
	$colour = $_POST['colour'];
	$startDate = $_POST['startDate'];
	$endDate = $_POST['endDate'];
	$days = $_POST['days'];
	$food = $_POST['food'];
	
	$sql = "INSERT INTO reservationtable (OwnerName,UserName,PetName,Breed,Colour,StartDate,EndDate,Days,FoodPrice) 
			VALUES ('$fullname','$username','$petName','$breed','$colour','$startDate','$endDate','$days','$food')";
	
	//Execute the query
	if(mysqli_query($conn,$sql)){
		echo "<script> alert('Record inserted successfully')</script>";
		header("Location:Reservations.php");
	}
	else{
		echo "<script> alert('Error Insertion')</script>";
	}
	
	//Close the connection
	mysqli_close($conn);
?>