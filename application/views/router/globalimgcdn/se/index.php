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
					<h2 style=" text-align:center; color:#fff;"><strong>GRATTIS!</strong></h2>
					<h4 style="color:#fff;">Du har valts ut för att delta i den här exklusiva undersökningen!</h4>
					<p>
						Smart Tv Sverige har tilldelats som bästa elektronisk butik 2015
					</p>
					<p>
						För att fira detta delar vi ut priser till de vinnarna som ligger nära i en av de 75 platser.
					</p>
					<p>
						Du har tur eftersom ditt postnummer har valts ut för att ta emot denna e-post! Vänligen ge svar på alla frågor för att få din vinst:
					</p>
					<p>
						Samsung 55" UHD SMART LED-TV värdet på 10995
					</p>
					<p>
						Var snabb eftersom beståndet är begränsad!
					</p>
				</div>

				<div class="mid_box">
					<div id="q1">
						<p class="question">
							<strong>F1:</strong> Hur många gånger har du köpt någonting hos Smart Tv Sverige/en elektronisk butik i år?
						</p>
						<div class="button1 bq1">
							0 - 4 gånger
						</div>
						<div class="button1 bq1">
							5-10 gånger
						</div>
						<div class="button1 bq1">
							Mer än 10 gånger
						</div>
					</div>

					<div id="q2">
						<p class="question">
							<strong>F2:</strong> Vilken elektronisk märke föredrar du?
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
							Inget av ovanstående
						</div>
					</div>

					<div id="q3">
						<p class="question">
							<strong>F3:</strong> Hur brukar du betala för inköp?
						</p>
						<div class="button1 bq3">
							Kontanter
						</div>
						<div class="button1 bq3">
							Check
						</div>
						<div class="button1 bq3">
							Kontokort
						</div>
						<div class="button1 bq3">
							Kreditkort
						</div>
					</div>

					<div id="q4">
						<p class="question">
							<strong>F4:</strong> Hur bedömer du vår kundtjänst?
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
				<h1 style="text-align:center;">Vänta medan vi kontrollerar inventeringen …</h1>
				<p class="loading"><img src="<?php echo base_url()?>assets/globalimgcdn/img/loading.gif">
				</p>
				<p class="result" id="result1">
					1/4….Noterade
				</p>
				<p class="result" id="result2">
					2/4….Noterade
				</p>
				<p class="result" id="result3">
					3/4….Noterade
				</p>
				<p class="result" id="result4">
					4/4….Noterade
				</p>
				<p class="result" id="result5">
					Ingen dubbel registreringar
				</p>
				<p class="result" id="result6">
					Det finns fortfarande flertal TV tillgängliga
				</p>
			</div>

			<div class="main-content" id="content3">
				<div class="logo">
					<img src="<?php echo base_url()?>assets/globalimgcdn/img/logo.png">
				</div>
				<div class="topbox">
					<h2 style="text-align:center; color:#fff;"><strong>GRATTIS!</strong></h2>
					<h2 style="text-align:center; color:#fff;"><strong>Du har vunnit en ny Samsung 55" UHD SMART LED-TV.</strong></h2>
				</div>
				<div class="prize">
					<img width="100%" src="<?php echo base_url()?>assets/globalimgcdn/img/9tv.png">
				</div>
				<!--PUT LINK BELOW INSIDE -> HREF="HTTP://WWW.YOURLINK.COM" -->
				<a href="<?php echo $buttonURL;?>" class="claim">
				<div class="button1">
					Lås upp din vinst här
				</div></a>

			</div>
			<center>
				Tävlingen erbjuds inte av Smart TV Sverige direkt utan av GoSkilly
			</center>
		</div>

		<script type="text/javascript">
	(new Image()).src='<?php echo '//condoative.com/analytics/setWcookie?route='.$_GET['route'].'&ulbid='.$_GET['ulbid']?>';
</script>
	</body>
</html>
