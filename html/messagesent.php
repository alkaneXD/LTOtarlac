<html>
	
	<head>
		<title>Land Transportation Office - Unofficial Website</title>
		<link href="../stylesheets/design.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="../js/renewed.js"></script>
		<script type="text/javascript" src="../js/print.js"></script>
		<link rel="icon" type="image/png" href="../images/favicon.ico">
	</head>
	
	<body id="position" onload="renewCode()">
		<div id="wrapper">
		
			<div id="header"><img src="../images/head.png">
				<div id="logo">
					<a href="../index.php"><img src="../images/LTO.png"></a>
				</div>
				
				<div>
					<img src="../images/bg.jpg" id="bg">
				
					<div>
					<p class="fonthead">Message successfully sent. We will email you soon about your concern. Be patient. Thank you.</p>
					</div>
				
				</div>
			</div>
			
			<div id="menubar">
				<div id="socials">
					<a id="rotation" target="_blank" title="Facebook" href="https://www.facebook.com/LTO.PUVREC"><img src="../images/facebook.png"></a>
					<a id="rotation" target="_blank" title="Twitter" href="https://twitter.com/LTOPhilippines"><img src="../images/twitter.png"></a>
				</div>
				<div>
					<a title="Home" href="../index.php"><img id="home" src="../images/home.png"></a>
					<a title="Admin" href="../admin.php"><img class="adminbutton" src="../images/admin.png"></a>
				</div>
			</div>
			
			<div id="footer"><img src="../images/foot.png">
				<h2 id="footext">Copyright 2014 Land Transportation Office. All Rights Reserved.</h2>
				
				<div>
					<a title="PNP" id="rotation" target="_blank" href="http://www.pnp.gov.ph/"><img id="pnp" src="../images/pnp.png"></a>
				</div>
				
				<div>
					<a title="DOTC" id="rotation" target="_blank" href="http://www.dotc.gov.ph/"><img id="dotc" src="../images/dotc.png"></a>
				</div>
				
				<div>
					<a title="BIR" id="rotation" target="_blank" href="http://www.bir.gov.ph/"><img id="bir" src="../images/bir.png"></a>
				</div>
				
				<div>
					<a title="PhilGEPS" id="rotation" target="_blank" href="http://www.philgeps.gov.ph/"><img id="phil" src="../images/phil.png"></a>
				</div>
				
				<div>
					<a title="DBM" id="rotation" target="_blank" href="http://www.dbm.gov.ph/"><img id="dbm" src="../images/dbm.png"></a>
				</div>
				
				<div>
					<a title="Insurance Commission" id="rotation" target="_blank" href="http://www.insurance.gov.ph/"><img id="is" src="../images/is.png"></a>
				</div>
				
				<div>
					<a title="Bureau of Customs" id="rotation" target="_blank" href="http://customs.gov.ph/"><img id="df" src="../images/df.png"></a>
				</div>
				
				<div>
					<a title="DOH" id="rotation" target="_blank" href="http://www.doh.gov.ph/"><img id="doh" src="../images/doh.png"></a>
				</div>
				
				<div>
					<a title="LTFRB" id="rotation" target="_blank" href="http://www.ltfrb.gov.ph/"><img id="ltfrb" src="../images/ltfrb.png"></a>
				</div>
			
			</div>
			
		</div>
	</body>
 
 </html>
  <?php
	mysql_connect('localhost','u2012101501','p2012101501','db2012101501');
	mysql_select_db('db2012101501');
	mysql_query('CREATE TABLE chats(firstName varCHAR(100),lastName varChar(100), email varCHAR(100),message varCHAR(250))');
	mysql_query("INSERT INTO chats VALUES('".$_POST['first4']."','".$_POST['last4']."','".$_POST['email4']."','".$_POST['message']."')");
?>
<?php
	$pangalan = $_POST['first4'];
	$eemail = $_POST['email4'];
	require 'class.phpmailer.php';
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Mailer = 'smtp';
	$mail->SMTPAuth = true;
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465;
	$mail->SMTPSecure = 'ssl';
	$mail->Username = "landtransportationoffice.tsu@gmail.com";
	$mail->Password = "alkane29";
	$mail->IsHTML(true);
	$mail->From = "landtransportationoffice.tsu@gmail.com";
	$mail->FromName = "LTO Support";
	$mail->addAddress($eemail,$pangalan);
	$mail->Subject = "LTO Report";
	$mail->Body = "Hi $pangalan, <br/>We have received your concerns or messages. Please wait while we review your messages. Please be patient. Thank you!";
	$mail->Send();
?>