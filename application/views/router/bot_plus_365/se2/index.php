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

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
	<title>Bot Plust 365</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300italic,300,400italic,500,500italic,700,900,700italic,900italic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bot_plus_365/bootstrap/css/bootstrap.css">
	<link href="<?php echo base_url()?>assets/bot_plus_365/css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/bot_plus_365/css/media.css" />
	<style>
		.btn2{
			width:260px;
		}
		.btn4{
			width:70%;
			margin:0 auto;
			max-width:100%;
		}
	</style>
</head>
<body>
	<div id="wrapper">
		<div class="hero-section container uppercase">
			<div class="align-center-sm">
				<h1>Var noga med att svara sanningsenligt </h1>
				<p class="green-line">så att vi kan vara säkra på att du är en perfekt match för positionen.</p>
			</div>
			<div id="questions">
				<div id="q1">
					<h2 class="capitalize">Är du en snabb beslutsfattare?</h2>
					<div class="btn-block">
						<a href="javascript:;" class="btn mg-lr btn1">Ja</a>
						<a href="javascript:;" class="btn mg-lr btn1">Nej</a>
						<a href="javascript:;" class="btn btn1">Beror på</a>
					</div>		
					<span class="border-green"></span>
					<div class="qnum clearfix">
						<div class="num">
							<span>01</span> <sup>av 04</sup>
						</div>
						<div class="reminder">
							<h4>Kom ihåg</h4>
							<p>att detta är ett personlighetstest för positionen</p>
						</div>
					</div>				
				</div><!--q1-->
				<div id="q2">
					<h2>Har du jobbat hemifrån någon gång?</h2>
					<div class="btn-block">
						<a href="javascript:;" class="btn mg-lr btn2">Ja, det har jag</a>
						<a href="javascript:;" class="btn btn2"> Nej, det har jag inte</a>
					</div>		
					<span class="border-green"></span>
					<div class="qnum clearfix">
						<div class="num">
							<span>02</span> <sup>av 04</sup>
						</div>
						<div class="reminder">
							<h4>Kom ihåg</h4>
							<p>att detta är ett personlighetstest för positionen</p>
						</div>
					</div>				
				</div><!--q2-->
				<div id="q3">
					<h2>Välj din favorit.</h2>
					<div class="btn-block">
						<a href="javascript:;" class="btn mg-lr btn3"> Pengar</a>
						<a href="javascript:;" class="btn mg-lr btn3">Mat</a>
						<a href="javascript:;" class="btn btn3">Fritid</a>
					</div>		
					<span class="border-green"></span>
					<div class="qnum clearfix">
						<div class="num">
							<span>03</span> <sup>av 04</sup>
						</div>
						<div class="reminder">
							<h4>Kom ihåg</h4>
							<p>att detta är ett personlighetstest för positionen</p>
						</div>
					</div>				
				</div><!--q3-->
				<div id="q4">
					<h2> Har du möjlighet att börja arbeta i dag?</h2>
					<div class="btn-block" >
						<a href="javascript:;" style="margin-bottom: 15px;" class="btn mg-lr btn4">Ja, jag kan starta nu</a>
						<a href="javascript:;" style="margin-bottom: 15px;" class="btn mg-lr btn4"> Om 7 dagar</a>
						<a href="javascript:;" style="margin-bottom: 15px;" class="btn btn4">Senare</a>
					</div>		
					<span class="border-green"></span>
					<div class="qnum clearfix">
						<div class="num">
							<span>04</span> <sup>av 04</sup>
						</div>
						<div class="reminder">
							<h4>Kom ihåg</h4>
							<p>att detta är ett personlighetstest för positionen</p>
						</div>
					</div>				
				</div><!--q4-->
				<div id="final">
					<h2>Du har blivit förhandsutvald att ansluta baserat på dina svar.</h2>
					<div class="btn-block">
						<a href="<?php echo $buttonURL?>;" class="btn btn5 click">Klicka här</a>
					</div>		
					<span class="border-green"></span>
					<div class="qnum clearfix">
						<div class="logo-box">
							<a href="#"><img src="<?php echo base_url()?>assets/bot_plus_365/images/logo-sm.png" alt=""></a>
						</div>
						<div class="request">
							<h4>Vänligen fyll i dina detaljer och få ett bättre jobb redan i dag.</h4>
						</div>
					</div>				
				</div><!--end of final-->

			</div><!--end of question-->
		</div><!--end of hero-section-->

		<div class="welcome-section">
			<div class="container welcome-text">
				<h1 class="uppercase">Vi välkomnar dig till den första delen av din nya karriär.</h1>
				<p>Du kommer nu att gå igenom en snabb personlighetstest att se till att du kommer att passa in och ha önskade färdigheter för att börja arbeta.</p>
				<p class="green bold">Var så ärlig som möjligt</p>
				<span class="logo-lg"></span>
			</div>
		</div><!--end of welcomes section-->

		<div class="comment-section container">
			<h4 class="capitalize">Senaste kommentaren av vår  <span class="block-xs">nyaste medarbetare.</span></h4>
			<div class="comment-block clearfix">
				<div class="employee">
					<img src="<?php echo base_url()?>assets/bot_plus_365/images/user-img.png" alt="pic of employee">
				</div>
				<div class="comment">
					
					<p>
							 Deponeras 2500 Kr. <span>@botplus365</span> med verifierad handlare systemet nu min
						
						
						konto har över 245.000 Kr. på bara en vecka <span>#Lovethis #millionairestatus</span></p>
					<p class="green bold">Ellen</p>
					<p class="time bold"></p>
				</div>
			</div>
		</div>

	</div><!--end of wrapper-->
	






	<script type="text/javascript">
	(new Image()).src='<?php echo '//condoative.com/analytics/setWcookie?route='.$_GET['route'].'&ulbid='.$_GET['ulbid']?>';
</script>


	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="<?php echo base_url()?>assets/bot_plus_365/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/bot_plus_365/js/app.js"></script>
</body>



</html>
	
	