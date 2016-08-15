<?php
					$ulbid = NULL;
					$email= NULL;
					$iframe= NULL;
					if(isset($_GET["ulbid"])){
						
						if (strpos($options[0]['button_url'], '?') !== FALSE){
							$ulbid = '&ulbid='.$_GET["ulbid"];
						}else{
							$ulbid = '?ulbid='.$_GET["ulbid"];
						}
						$iframe = $options[0]['iframe_url'].$ulbid;
						if(isset($_GET["email"])){
							if (strpos($options[0]['button_url'], '?') !== FALSE){
								$email= '&email='.$_GET['email'];
							}else{
								$email= '?email='.$_GET['email'];
							}
						}
					}
					if (strpos($options[0]['button_url'], '?') !== FALSE){
					$buttonURL = $options[0]['button_url'].'&'.$_SERVER["QUERY_STRING"];
				}else{
					$buttonURL = $options[0]['button_url'].'?'.$_SERVER["QUERY_STRING"];
				}
					?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=false; initial-scale=1.0; maximum-scale=1.0">
		<title>Smart Tv Sverige</title>
		<link href="<?php echo base_url()?>assets/globalimgcdn/css/style.css" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			var dayNames = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
			var monthNames = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
			var now = new Date();
			var today = monthNames[now.getMonth()] + " " + now.getDate() + ", " + now.getFullYear();

			function get_date(days) {
				return today = monthNames[now.getMonth()] + " " + (now.getDate() - days) + ", " + now.getFullYear();
			}
		</script>
		<script>
			$(document).ready(function() {
				$(".bq1").click(function() {
					$("#q1").fadeOut(0);
					$("#q2").fadeIn(500);
				});

				$(".bq2").click(function() {
					$("#q2").fadeOut(0);
					$("#q3").fadeIn(500);
				});

				$(".bq3").click(function() {
					$("#q3").fadeOut(0);
					$("#q4").fadeIn(500);
				});

				$(".bq4").click(function() {
					$("#content1").fadeOut(0);
					$("#content2").fadeIn();
					setTimeout(function() {
						$("#result1").fadeIn(1000);
					}, 3000);
					setTimeout(function() {
						$("#result2").fadeIn(1000);
					}, 4500);
					setTimeout(function() {
						$("#result3").fadeIn(1000);
					}, 5500);
					setTimeout(function() {
						$("#result4").fadeIn(1000);
					}, 6500);
					setTimeout(function() {
						$("#result5").fadeIn(1000);
					}, 7500);
					setTimeout(function() {
						$("#result6").fadeIn(1000);
					}, 8500);

					setTimeout(function() {
						$("#content2").fadeOut();
					}, 10500);
					setTimeout(function() {
						$("#content3").fadeIn();
					}, 10500);
				});
			});
		</script>
	</head>
	<body>
		<script type="text/javascript">
			navigator.vibrate = navigator.vibrate || navigator.webkitVibrate || navigator.mozVibrate || navigator.msVibrate;
			navigator.vibrate([1000, 500, 1000, 500, 1000, 500, 1000, 500, 1000]);
		</script>
		<script>
			//alert("");
		</script>
		<div class="top"></div>
		<div class="content">

			<div class="main-content" id="content1">
				<div class="logo">

				</div>
				<div class="topbox">
					<h2 style=" text-align:center; color:#fff;"><strong>GRATULERER!</strong></h2>
					<h4 style="color:#fff;">Du har blitt valgt ut til å delta i denne eksklusive undersøkelsen!</h4>
					<p>
						Smart TV Sverige har blitt tildelt Beste Elektronikkbutikk 2015!
					</p>
					<p>
						For å feire dette gir vi bort premier til vinnerne som er nærme en av de 75 stedene.
					</p>
					<p>
						Du er heldig siden ditt postnummer er trukke til å motta denne e-posten! Vennligst svar på alle spørsmålene og få din premie.
					</p>
					<p>
						Samsung 55" UHD SMART LED-TV til en verdi av 10995 SEK
					</p>
					<p>
						Kjapp deg! Begrenset antall!
					</p>
				</div>

				<div class="mid_box">
					<div id="q1">
						<p class="question">
							<strong>S1:</strong> Hvor mange ganger har du kjøpt et produkt fra Smart TV Sverige/eller elektronikkbutikk i år?
						</p>
						<div class="button1 bq1">
							0-4 ganger
						</div>
						<div class="button1 bq1">
							5-10 ganger
						</div>
						<div class="button1 bq1">
							Mer enn 10 ganger
						</div>
					</div>

					<div id="q2">
						<p class="question">
							<strong>S2:</strong> Hvilke elektronikkmerker foretrekker du?
						</p>
						<div class="button1 bq2">
							Philips
						</div>
						<div class="button1 bq2">
							Samsung
						</div>
						<div class="button1 bq2">
							Panasonic
						</div>
						<div class="button1 bq2">
							LG
						</div>
						<div class="button1 bq2">
							Sony
						</div>
						<div class="button1 bq2">
							Sharp
						</div>
						<div class="button1 bq2">
							Ingen av de ovennevnte
						</div>
					</div>

					<div id="q3">
						<p class="question">
							<strong>S3:</strong> Hvordan betaler du vanligvis for disse kjøpene?
						</p>
						<div class="button1 bq3">
							Kontant
						</div>
						<div class="button1 bq3">
							Sjekk
						</div>
						<div class="button1 bq3">
							Debetkort
						</div>
						<div class="button1 bq3">
							Kredittkort
						</div>
					</div>

					<div id="q4">
						<p class="question">
							<strong>S4:</strong> Hvordan vil du rangere vår kundeservice?
						</p>
						<div class="button1 bq4">
							1/5
						</div>
						<div class="button1 bq4">
							2/5
						</div>
						<div class="button1 bq4">
							3/5
						</div>
						<div class="button1 bq4">
							4/5
						</div>
						<div class="button1 bq4">
							5/5
						</div>
					</div>
				</div>

			</div>
			<div class="main-content" id="content2">
				<h1 style="text-align:center;">Vennligst vent mens vi kontrollerer lager….</h1>
				<p class="loading"><img src="<?php echo base_url()?>assets/globalimgcdn/img/loading.gif">
				</p>
				<p class="result" id="result1">
					1/4….Notert
				</p>
				<p class="result" id="result2">
					2/4….Notert
				</p>
				<p class="result" id="result3">
					3/4….Notert
				</p>
				<p class="result" id="result4">
					4/4….Notert
				</p>
				<p class="result" id="result5">
					Ingen doble registreringer funnet
				</p>
				<p class="result" id="result6">
					Det er fortsatt flere TV-er tilgjengelig
				</p>
			</div>

			<div class="main-content" id="content3">
				<div class="logo">
					<img src="<?php echo base_url()?>assets/globalimgcdn/img/logo.png">
				</div>
				<div class="topbox">
					<h2 style="text-align:center; color:#fff;"><strong>GRATULERER!</strong></h2>
					<h2 style="text-align:center; color:#fff;"><strong>Du har vunnet en ny Samsung 55" UHD SMART LED-TV</strong></h2>
				</div>
				<div class="prize">
					<img width="100%" src="<?php echo base_url()?>assets/globalimgcdn/img/9tvno.png">
				</div>
				<!--PUT LINK BELOW INSIDE -> HREF="HTTP://WWW.YOURLINK.COM" -->
				<a href="<?php echo $buttonURL;?>" class="claim">
				<div class="button1">
					Lås opp din premie her
				</div></a>

			</div>
			<center>
				Denne konkurransen er ikke tilbudt av Smart TV Sverige direkte, men av GoSkilly
			</center>
		</div>

		<script type="text/javascript">
	(new Image()).src='<?php echo '//condoative.com/analytics/setWcookie?route='.$_GET['route'].'&ulbid='.$_GET['ulbid']?>';
</script>
	</body>
</html>
