<?php
	include_once'config.php';
	
	session_start();
	
	if(!isset($_SESSION["Username"])){
		header("Location:Login.php");
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$startDate = $_POST["startDate"];
		$endDate = $_POST["endDate"];
		
		$sql = "SELECT * FROM tablecheckdate WHERE Date BETWEEN '".$startDate."' AND '".$endDate."' AND Status = 'Full'";
		
		$result = mysqli_query($conn,$sql);
		
		$row = mysqli_fetch_array($result);
		
		if($result->num_rows>0){
			echo "<script> alert('Reservation Cannot be made!!!')</script>";
		}else{
			echo "<script> alert('You can make your Reservation!!!')</script>";
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
	<form action = "SearchDate.php" method = "POST" onsubmit="return validateDate()">
		<fieldset>
		<h2 align = "center"> Check the Availabity </h2>
		<table>
			<tr>
				<td><label for="startDate"> From :  </label></td>
				<td><input type="date" name="startDate" id="startDate" required></td>
			</tr>
			
			<tr>
				<td><label for="endDate"> To :  </label></td>
				<td><input type="date" name="endDate" id="endDate" required></td>
			</tr>
			
		</table>
		<div align = center>
			<input type="submit" value="Check" id="CheckBtn">
		</div>
		</fieldset>
	</form>
	</div>
	<?php include 'Footer.php' ?>
	
<script>
    function validateDate() {
        var startDate = document.getElementById("startDate").value;
        var endDate = document.getElementById("endDate").value;

        var currentDate = new Date();
		currentDate.getFullYear(); // Get the current year
		currentDate.getMonth() + 1; // Get the current month (note: months are zero-based)
		currentDate.getDate();

        var selectedStartDate = new Date(startDate);
        var selectedEndDate = new Date(endDate);

        if (selectedStartDate < currentDate) {
            alert("Start date must be after the current date.");
            return false;
        }

        if (selectedEndDate < currentDate) {
            alert("End date must be after the current date.");
            return false;
        }

        if (selectedStartDate > selectedEndDate) {
            alert("Start date cannot be after end date.");
            return false;
        }

        return true;
    }
</script>
	
</body>
</html>