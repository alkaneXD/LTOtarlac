<html>
	
	<head>
		<title>Land Transportation Office - Unofficial Website</title>
		<link href="stylesheets/design.css" rel="stylesheet" type="text/css">
		<link rel="icon" type="image/png" href="images/favicon.ico">
		<script type="text/javascript" src="js/adminval.js"></script>
	</head>
	
	<body id="position">
		<div id="wrapper">
		
			<div id="header"><img src="images/head.png">
				<div id="logo">
					<a href="index.php"><img src="images/LTO.png"></a>
				</div>
				
				<div>
					<img src="images/bg.jpg" id="bg">
				
				<div>
					<h1 class="admin"> USERNAME: PASSWORD: </h1>
					<form method="post" action="admin.php">
						<input type="text" class="username" name="user" id="usr">
						<input type="password" class="password" name="pass" id="psw">
						<input type="submit" class="loginadmin" value="LOGIN" onClick="return adminval();">
					</form>
				</div>
				
				
				</div>
			</div>
			
			<div id="menubar">
				<div id="socials">
					<a id="rotation" target="_blank" title="Facebook" href="https://www.facebook.com/LTO.PUVREC"><img src="images/facebook.png"></a>
					<a id="rotation" target="_blank" title="Twitter" href="https://twitter.com/LTOPhilippines"><img src="images/twitter.png"></a>
				</div>
				<div>
					<a title="Home" href="index.php"><img id="home" src="images/home.png"></a>
				</div>
			</div>
			
			<div id="footer"><img src="images/foot.png">
				<h2 id="footext">Copyright 2014 Land Transportation Office. All Rights Reserved.</h2>
				
				<div>
					<a title="PNP" id="rotation" target="_blank" href="http://www.pnp.gov.ph/"><img id="pnp" src="images/pnp.png"></a>
				</div>
				
				<div>
					<a title="DOTC" id="rotation" target="_blank" href="http://www.dotc.gov.ph/"><img id="dotc" src="images/dotc.png"></a>
				</div>
				
				<div>
					<a title="BIR" id="rotation" target="_blank" href="http://www.bir.gov.ph/"><img id="bir" src="images/bir.png"></a>
				</div>
				
				<div>
					<a title="PhilGEPS" id="rotation" target="_blank" href="http://www.philgeps.gov.ph/"><img id="phil" src="images/phil.png"></a>
				</div>
				
				<div>
					<a title="DBM" id="rotation" target="_blank" href="http://www.dbm.gov.ph/"><img id="dbm" src="images/dbm.png"></a>
				</div>
				
				<div>
					<a title="Insurance Commission" id="rotation" target="_blank" href="http://www.insurance.gov.ph/"><img id="is" src="images/is.png"></a>
				</div>
				
				<div>
					<a title="Bureau of Customs" id="rotation" target="_blank" href="http://customs.gov.ph/"><img id="df" src="images/df.png"></a>
				</div>
				
				<div>
					<a title="DOH" id="rotation" target="_blank" href="http://www.doh.gov.ph/"><img id="doh" src="images/doh.png"></a>
				</div>
				
				<div>
					<a title="LTFRB" id="rotation" target="_blank" href="http://www.ltfrb.gov.ph/"><img id="ltfrb" src="images/ltfrb.png"></a>
				</div>
			
			</div>
			
		</div>
	</body>
 
 </html>
 
 <?php
 session_start();
 if(ISSET($_SESSION["newmember"])){
	header("Location: adminpanel.php");
	exit();
}
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$username = $_POST["user"];
			$password = $_POST["pass"];
				if($username == "alkane" && $password == "2012101501"){
					$_SESSION["newmember"] = $username;
					header("Location: adminpanel.php");
					}
					else{
					header("Location: invalid.php");
					exit();
				}
			}
?>