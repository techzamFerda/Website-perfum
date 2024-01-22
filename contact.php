<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Perfumewinkel</title>
<script src="https://kit.fontawesome.com/eca43c78f4.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/contactStyle.css" rel="stylesheet" type="text/css">
</head>
<body>
		<div class="main-menu">
	
		<span class="search"> 
			<img src="img/rojeeh200px.jpg">
			<div class="menu-items">
			<i class="fas fa-user account"><span class="iconText account">Account</span></i>
			<i class="fas fa-shopping-bag"><span class="iconText">shopping bag</span></i>
			<i class="fas fa-search"><span class="iconText">Search</span></i>
			<i class="fas fa-bars" id="hamburger-icon"></i>
			</div>
		</span>
		<nav class="navgatie">
		    <ul>
				<li><a href="index.html">Products</a></li>
				<li><a href="brands.html">Brands</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="contact.php">Contacts</a></li>
			    <li><a href="more.html">More<i class="fas fa-ellipsis-v" id="point"></i></a>
					<ul class="">
							<li><a href="#">Body care</a></li>
							<li><a href="#">Make up</a></li>
							<li><a href="#">Sales</a></li>
							<li><a href="#">face care</a></li>
						</ul>
					</li>
			</ul>
		</nav>
		</div>
		<div class="banner">
		 
		</div>
		
	<h1>Contact</h1>
		<div class="containerContent">
		<div class="listUren">
		
       <nav class="contactList">
		        <ul id="ulList"><img src="img/hour.png"> Openingsuren:</ul>
		       <li>Maandag : van 10:00 tot 17u</li>
		       <li>Dinsdag : van 10:00 tot 17u</li>
		       <li>Woensdag : van 10:00 tot 17u</li>
	           <li>Donderdag : van 10:00 tot 17u</li>
               <li>Vrijdag : van 10:00 tot 17u</li>
		        <li>Zaterdag :van 12:00u tot 17u</li>
				<li>Zondag : Gesloten</li>
		</nav>
		</div>	
	<div class="map">
    <div class="mapIframe">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.094873901994!2d4.730550483862793!3d50.8479273795322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c166bbf3c56429%3A0x6bca4ad2efca8496!2sInterleuvenlaan%205%2C%203001%20Leuven!5e0!3m2!1sar!2sbe!4v1578057264900!5m2!1sar!2sbe"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	
	        <p><img src="img/map.png" class="mainImg">:Interleuvenlaan 5 <br>3000 Leuven
		    <br><img src="img/telIcon.png" class="mainImg">:Tel: 016 22 44 245<br>
		    <img src="img/emailIcon.png" class="mainImg">: E-mail: info@rojeeh.be</p>
	
	
	</div>
	</div>
	
	<div class="table">
				<form action="contact.php" method="POST">
					<table class="form-table">
						<td><label for="naam">Naam:</label></td>
	                      <td><input id="naam" type="text" placeholder="Naam" placeholder="naam" name="naam"/></td>
						</tr>
						<tr>
							<td><label for="voornaam"> Voornaam: </label></td>
							<td><input type="text" id="voornaam" name="voornaam" placeholder="voornaam" name="voornaam"></td>
						</tr>
						<tr>	
							<td><label for="email" >Email:</label></td>
							<td><input id="email" type="email" placeholder="Email" name="email"/></td>
						</tr>
						<tr>
						 <td><label for="bericht">Bericht:</label> </td>
						  <td><textarea id="bericht" placeholder="Bericht" rows ="2" cols="30" name="bericht">  </textarea></td>
						</tr>
						<tr>
							<td colspan="2"> <input type="submit" value="verzenden"></td>
						</tr>
					</table>
				</form>
			</div>
	</div>
	
	<footer>
	<div class="bankKarten">
	<i class="fab fa-cc-paypal"></i>
	<i class="fab fa-cc-visa"></i>
	<i class="fab fa-cc-mastercard"></i>
	<i class="fas fa-credit-card"></i>
	<i class="fab fa-cc-diners-club"></i>
	</div>
		
	<div class="socialMedia">
		
	<p id="followparagraaf">Follow us</p>
	<a href="https://www.facebook.com/facebookapp" id="facebook"<i class="fab fa-facebook-square socialMedia "></i></a>
	<a href="https://www.instagram.com/" class="socialMedia"><i class="fab fa-instagram"></i></a>
	<a href="https://twitter.com/" class="socialMedia"><i class="fab fa-twitter"></i></a>
	<a href="https://www.snapchat.com/l/nl-nl/" class="socialMedia"><i class="fab fa-snapchat-ghost"></i></a>
	</div>
		
		<p id="copyRight">2019 &copy; Rojeeh Abduhannan</p>
	</footer>
	
	<script src="js/script.js"></script>
</body>
</html>
<?php /*Ik open php */
$naam = $voornaam = $email = $bericht = $error = ""; // Ik definieer enkele lege variabelen.
	if($_SERVER['REQUEST_METHOD'] == 'POST'){ // Ik controleer of er iets verzonden is geweest.
		if(isset($_POST['naam'])){ // Ik controleer of de naam goed is doorgestuurd.
			if(!empty($_POST['naam'])){ // Ik controleer of de gebruiker wel degelijk een naam heeft opgegeven.
				$naam = $_POST['naam']; // Ik schrijf de opgegeven naam over naar de variabele naam.
			}
			else {
			$error += "Gelieve een naam op te geven <br>";
		}
		} else {
			$error += "Er is iets misgelopen bij het verzenden van de gegevens <br>";
		}
		
		if(isset($_POST['voornaam'])){ // Ik controleer of de voornaam goed is doorgestuurd.
			if(!empty($_POST['voornaam'])){ // Ik controleer of de gebruiker wel degelijk een voornaam heeft opgegeven.
				$voornaam = $_POST['voornaam']; // Ik schrijf de opgegeven voornaam over naar de variabele voornaam.
			}
			else {
			$error += "Gelieve een voornaam op te geven <br>";
		}
		} else {
			$error += "Er is iets misgelopen bij het verzenden van de gegevens <br>";
		}
		
		if(isset($_POST['email'])){ // Ik controleer of het email-adres goed is doorgestuurd.
			if(!empty($_POST['email'])){ // Ik controleer of de gebruiker wel degelijk een email-adres heeft opgegeven.
				$email = $_POST['email']; // Ik schrijf het opgegeven email-adres over naar de variabele email.
			}
			else {
			$error += "Gelieve een e-mailadres op te geven <br>";
		}
		} else {
			$error += "Er is iets misgelopen bij het verzenden van de gegevens <br>";
		}
		
		
		if(isset($_POST['bericht'])){ // Ik controleer of het bericht goed is doorgestuurd.
			if(!empty($_POST['bericht'])){ // Ik controleer of de gebruiker wel degelijk een bericht heeft opgegeven.
				$bericht = $_POST['bericht']; // Ik schrijf het opgegeven bericht over naar de variabele email.
			}
			else {
			$error += "Gelieve een bericht op te geven <br>";
		}
		} else {
			$error += "Er is iets misgelopen bij het verzenden van de gegevens <br>";
		}
		
		
		if(empty($error)){
		
		$bericht = "Beste <br><br> $naam $voornaam heeft u het onderstaande bericht gestuurd. <br><br> <b>Bericht:</b> <br> $bericht <br><br> U kan deze persoon contacteren via volgend e-mailadres: $email";
		$ontvanger = "rojeeh8877@gmail.com"; //Geef hier het e-mailadres van de ontvanger op.
		$onderwerp = "Perfume Rojeeh - contact";
		$headers = "From: info@rojeeh.be " . "\r\n"; //Geef hier je eigen e-mailadres op dat waaruit de mail verzonden moet worden.
		$headers .= "Reply-To: rojeeh8877@gmail.com" . "\r\n"; //Geef hier je eigen e-mailadres op.
		$headers .= "CC: \r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		mail($ontvanger, $onderwerp, $bericht, $headers) or die ("De mail kon niet worden verstuurd."); //Hier wordt de mail verzonden.
		echo "Uw bericht werd verzonden.";
		} else {
		echo $error;
			
			
		}
		
	}

?>

