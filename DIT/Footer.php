<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Footer</title>
<style>
		.body {
		    margin: 0;
		
		}
		.header {
		    
		    padding: 20px ;
		}
		img {
		    float: left;
		    margin-right: 0;
		   margin-right: 10px;
		
		}
		.header h1 {
		    text-align: left;
		    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
		    font-weight: 300;
		    letter-spacing: 0.2em;
		    font-size: 25px;
		
		}
		hr {
		    border: 2px solid black;
		}
		ul {
		    list-style: none;
		    margin: 0;
		    margin-right: 20px;
		    overflow: hidden; 
		    border-radius: 10px; 
		}
		li {
		    float: right;
		    
		}
		
		
		li a{
		    display: block;
		    padding: 16px 18px;
		    text-decoration: none;
		    border-radius: 10%;
		    color: black;
		    font-size: 18px;
		}
		li a:hover {
		    background-color:#9AEAF0;
		    text-decoration: underline;
		    color: black;
		    border-radius: 5%;
		  
		    
		}
		.reg:hover {
		    background-color: springgreen;
		}
		
		.clear {
		    clear: both;
		}
		.block h1 {
		    float: left;
		    text-align: left;
		    margin-left: 40px;
		    font-size: 25px;
		    text-decoration: underline;
		    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
		    letter-spacing: 0.2em;
		    margin-top: 34px;
		}
		.clear {
		    clear: both;
		}
		.block .social {
		  
		    float: left;
		    height: 28px;
		    width: 28px;
		    margin-left:40px ;
		  
		}
		.block .pay {
		  
		    float: left;
		    height: 48px;
		    width: 48px;
		    margin-left:40px ;
		    margin-top: 15px;
		  
		}
		.row {
		    width: 100%;
		    margin: auto;
		    padding: 0;
		}
		.block {
		    float: left;
		    width: 30%;
		    padding: 20px;
		    padding-top: 4px;
		}
		.block h3 {
		    letter-spacing: 0.1em;
		    padding-left: 5px;
		    margin-left: 35px;
		    font-size: 18px;
		}
		.block h3 a {
		    text-decoration: none;
		    color: black;
		    cursor: pointer;
		}
		.block h1 {
		    font-size: 22px;
		}
    </style>
</head>
<body>
<footer>
        <hr>
        <div class="row">
		    <div class="block">
                <h1>Services</h1>
                <div class="clear"></div>
                <p>
                    <h3><a href="">Make a Reservation </a></h3>            
                </p>
            </div>    
               
            <div class="block">
                <h1>Quick Links</h1>
                <div class="clear"></div>
                <p>
                    <h3><a href="AboutUs.php">About Us</a></h3>
                    <h3><a href="">Terms & Conditions</a></h3>
                    <h3><a href="ContactUs.php">Contact Us</a></h3>               
                    <h3><a href="">FAQ</a></h3>
                </p>
            </div>
 			<div class="block">
                <h1>Follow us</h1>
                <div class="clear"></div>
           
                <p>
                <img class="social" src="https://cdn-icons-png.flaticon.com/128/1051/1051309.png">
                <img class="social" src="https://cdn-icons-png.flaticon.com/128/1400/1400829.png">
                <img class="social" src="https://cdn-icons-png.flaticon.com/128/3536/3536569.png">
                <div class="clear"></div>
                <h1>Payments Via</h1>
                <div class="clear"></div>
                <img src="https://cdn-icons-png.flaticon.com/128/196/196566.png" class="pay">
                <img src="https://cdn-icons-png.flaticon.com/128/196/196578.png" class="pay">
                <img  src="https://cdn-icons-png.flaticon.com/128/5968/5968140.png" class="pay">
                </p>
            </div>
            
        </div>   

    </footer>
   
</body>
</html>