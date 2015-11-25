<html>
	
	<head>
		<title>Land Transportation Office - Unofficial Website</title>
		<link href="../stylesheets/design.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="../js/renewed.js"></script>
		<script type="text/javascript" src="../js/print.js"></script>
		<link rel="icon" type="image/png" href="../images/favicon.ico">
	</head>
	
	<body id="position">
		<div id="wrapper">
		
			<div id="header"><img src="../images/head.png">
				<div id="logo">
					<a href="../index.php"><img src="../images/LTO.png"></a>
				</div>
				
				<div>
					<img src="../images/bg.jpg" id="bg">
				
				<div>
					<p class="fonthead">You are one step away! To complete your license renewal, please go to the nearest LTO Branch and present the unique code below and pay the corresponding bill.</p>
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
$length = 4;
$vouch = substr(str_shuffle(md5(time())),0,$length);
echo "<p class=registersuccess>REN$vouch</p>";
echo "<a href=JavaScript:printer()><img src=../images/print.png id=printregister></a>";
?>
  <?php
	$bobo = "REN".$vouch;
	mysql_connect('localhost','u2012101501','p2012101501','db2012101501');
	mysql_select_db('db2012101501');
	mysql_query('CREATE TABLE renew(firstName varCHAR(100),lastName varChar(100), email varCHAR(100),licenseNo varCHAR(100),voucher varCHAR(100))');
	mysql_query("INSERT INTO renew VALUES('".$_POST['first1']."','".$_POST['last1']."','".$_POST['email1']."','".$_POST['licenseno1']."','".$bobo."')");
?>
<?php
	$pangalan = $_POST['first1'];
	$eemail = $_POST['email1'];
	$lisensya = $_POST['licenseno1'];
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
	$mail->FromName = "LTO Renew License";
	$mail->addAddress($eemail,$pangalan);
	$mail->Subject = "LTO License Registration Confirmation";
	$mail->Body = "Hi $pangalan, <br/>Your driver's license #$lisensya is now renewing. Please go to the nearest LTO Branch and present this unique code <h1>$bobo</h1>";
	$mail->Send();
?>