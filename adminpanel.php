<html>
	
	<head>
		<title>Land Transportation Office - Unofficial Website</title>
		<link href="stylesheets/design.css" rel="stylesheet" type="text/css">
		<link rel="icon" type="image/png" href="images/favicon.ico">
	</head>
	
	<body id="position">
		<div id="wrapper">
		
			<div id="header"><img src="images/head.png">
				<div id="logo">
					<a href="index.php"><img src="images/LTO.png"></a>
				</div>
				
				<div>
				
				</div>
			</div>
			
			<div id="menubar">
				<div id="socials">
					<a id="rotation" target="_blank" title="Facebook" href="https://www.facebook.com/LTO.PUVREC"><img src="images/facebook.png"></a>
					<a id="rotation" target="_blank" title="Twitter" href="https://twitter.com/LTOPhilippines"><img src="images/twitter.png"></a>
				</div>
				<div>
					<a title="Home" href="index.php"><img id="home" src="images/home.png"></a>
					<a href="logout.php"> <input type="button" value="LOGOUT" class="logoutbutton"> </a>
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
if(!ISSET($_SESSION["newmember"])){
	header("Location: admin.php");
	exit();
}
?>
<?php
		mysql_connect('localhost','u2012101501','p2012101501','db2012101501');
		mysql_select_db('db2012101501');
		$query = "SELECT * FROM upgrade";
		$result = mysql_query($query);
		echo "<div class=tableUpg>";
		echo "<table border=1>";
		echo "<tr><th colspan=7>WILL UPGRADE</th></tr>";
		echo "<tr><th>firstName</th></th><th>lastName</th><th>Email</th><th>currentLicense</th><th>Voucher</th></tr>";
		while($row = mysql_fetch_array($result))
		echo"<tr><td>" .$row['firstName'] . "</td><td>" .$row['lastName']. "</td><td>" . $row['email'] . "</td><td>" . $row['currentLicense'] . "</td><td>" . $row['voucher'] . "</td></tr>";
		echo "</table>";
		echo "</div>";
?>
<?php
		$query = "SELECT * FROM register";
		$result = mysql_query($query);
		echo "<div class=tableReg>";
		echo "<table border=1>";
		echo "<tr><th colspan=8>REGISTERED</th></tr>";
		echo "<tr><th>firstName</th></th><th>lastName</th><th>Email</th><th>Bday Month</th><th>Bday Day</th><th>Bday Year</th><th>Voucher</th></tr>";
		while($row = mysql_fetch_array($result))
		echo"<tr><td>" .$row['firstName'] . "</td><td>" .$row['lastName']. "</td><td>" . $row['email'] . "</td><td>" . $row['bdaymonth'] . "</td><td>" . $row['bdayday'] . "</td><td>" . $row['bdayyear'] . "</td><td>" . $row['voucher'] . "</td></tr>";
		echo "</table>";
		echo "</div>";
		
		$query = "SELECT * FROM renew";
		$result = mysql_query($query);
		echo "<div class=tableRen>";
		echo "<table border=1>";
		echo "<tr><th colspan=5>RENEW</th></tr>";
		echo "<tr><th>firstName</th></th><th>lastName</th><th>Email</th><th>licenseNo</th><th>Voucher</th></tr>";
		while($row = mysql_fetch_array($result))
		echo"<tr><td>" .$row['firstName'] . "</td><td>" .$row['lastName']. "</td><td>" . $row['email'] . "</td><td>" . $row['licenseNo'] . "</td><td>" . $row['voucher'] . "</td><tr>";
		echo "</table>";
		echo "</div>";
		
		$query = "SELECT * FROM chats";
		$result = mysql_query($query);
		echo "<div class=tableChat>";
		echo "<table border=1>";
		echo "<tr><th colspan=5>CHATS or CONCERNS</th></tr>";
		echo "<tr><th>firstName</th></th><th>lastName</th><th>Email</th><th>Message</th></tr>";
		while($row = mysql_fetch_array($result))
		echo"<tr><td>" .$row['firstName'] . "</td><td>" .$row['lastName']. "</td><td>" . $row['email'] . "</td><td>" . $row['message'] . "</td><tr>";
		echo "</table>";
		echo "</div>";
?>