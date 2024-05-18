<!DOCTYPE html>
<html>
<head>
<title> Services </title>
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
	<?php include 'HomeHeader.php' ?>
	<br><br><br>
	<h2 align = "center">Food Package Prices per Day </h2>
	<div class="responsive">
		<div class="gallery">
			<img src="Images/package1.jpeg" alt="package1">
		<div class="desc"><font size="11px">Rs.1000/=</font></div>
		</div>
	</div>

	<div class="responsive">
	<div class="gallery">
			<img src="Images/package2.jpg" alt="Forest">
	<div class="desc"><font size="11px">Rs.1500/=</font></div>
	</div>
	</div>

	<div class="responsive">
	<div class="gallery">
		<img src="Images/package3.jpeg" alt="Northern Lights">
		<div class="desc"><font size="11px">Rs.2000/=</font></div>
	</div>
	</div>

	<div class="clearfix"></div>
	<br><br><br>
	
	<?php include 'Footer.php' ?>
</body>
</html>