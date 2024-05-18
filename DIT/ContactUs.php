<!DOCTYPE html>
<html>
<head>
<title> Contact Us </title>
</head>
<body>
	<?php include 'HomeHeader.php'?>
	
	<h2><center>SEND AN INQUIRY</center></h2>
	
    <form action="#" method="POST" name="myform" onsubmit="return emptyCheck();">
    <div class="form">
            <center>
            <label for="firstName">First Name</label>
            <input type="text" placeholder="First Name" style="width: 200px; height: 15px;" required name="firstName"><br><br>

            <label for="lastName">Last Name</label>
            <input type="text" placeholder="Last Name" style="width: 200px; height: 15px;" required name="lastName"><br><br>

            <label for="Address" >Address  </label>
            <input type="text" placeholder="No.29 Ketalawalawatta, Lihiniyagammana, Badalgama" style="width: 615px; height: 15px;" name="address" required id="" rows="2"></textarea><br><br>

            <label for="mobile">Telephone Number</label>
            <input type="text" placeholder="07xx xxx xxx" style="width: 120px; height: 15px;"  required pattern="[0-9]{10}" required name="mobile" id="mobile" oninput="phoneCheck();"><br>
            <p id="Vnumber" style="color: red; visibility:hidden; margin-top: -5px;">Enter a valid phone number</p>

            <label for="email">E-mail</label>
            <input type="email" placeholder="abc@gmail.com" style="width: 250px; height: 15px;" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" title="ex:- abc@gmail.com" required name="email" id="email" oninput="emailCheck();">
            <p id="Vemail" style="color: red; visibility:hidden;margin-top: -5px;margin-bottom: -5px;">Enter a valid email address</p><br>

            <label for="Inquiry" >Select Inquiry Type</label>
                <select style="width: 600px; height: 30px; border-radius: 10px; border-width: 2px; border-color:black;margin-top: 10px; margin-bottom: 10px;" name="type" >
                    <option>General Inquiry</option>
                    <option>Complaint</option>
                    <option>Refund Inquiry</option>
                    <option>Login Inquiry</option>
                    <option>Sign-up Inquiry</option>
                    <option>Other</option>
                </select>
            <br><br>
        
            <div class="inputfield" ><label for="message">Message</label>
            <textarea name="message" style="width: 610px; height: 30px; border-width: 2px; border-color:black;"crequired id="" rows="3" required name="message"></textarea></div><br><br>

            <p><b>We will send you helpful information about our services<br> as soon as possible..</b></p><br>
            
            <input type="checkbox" id="checkbox" onclick="enableBTN()" style=" top: 9px; left: 9px;width: 18px;height: 18px; margin-right:10px">I have read and acccept the <b>Data Privacy Guidelines</b> <br><br>
            <center>
            <input type="submit" value="Submit" name="submitbtn" id="submitbtn" disabled >
            </center>
            </div>
        </form>
		
	<?php include 'Footer.php'?>
</body>
</html>