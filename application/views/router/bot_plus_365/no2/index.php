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
	<title>Bot Plus 365</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300italic,300,400italic,500,500italic,700,900,700italic,900italic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bot_plus_365/bootstrap/css/bootstrap.css">
	<link href="<?php echo base_url()?>assets/bot_plus_365/css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/bot_plus_365/css/media.css" />
</head>
<body>
	<div id="wrapper">
		<div class="hero-section container uppercase">
			<div class="align-center-sm">
				<h1>Vennligst svar ærlig </h1>
				<p class="green-line">så vi kan være sikre på at du er den perfekte matchen for stillingen.</p>
			</div>
			<div id="questions">
				<div id="q1">
					<h2 class="capitalize">Er du rask til å ta avgjørelser?</h2>
					<div class="btn-block">
						<a href="javascript:;" class="btn mg-lr btn1">Ja</a>
						<a href="javascript:;" class="btn mg-lr btn1">Nei</a>
						<a href="javascript:;" class="btn btn1" style="width:185px;">Kommer an på</a>
					</div>		
					<span class="border-green"></span>
					<div class="qnum clearfix">
						<div class="num">
							<span>01</span> <sup>av 04</sup>
						</div>
						<div class="reminder">
							<h4>Husk,</h4>
							<p> dette er en personalitets-test for stillingen.</p>
						</div>
					</div>				
				</div><!--q1-->
				<div id="q2">
					<h2>Har du jobbet hjemmefra før?</h2>
					<div class="btn-block">
						<a href="javascript:;" class="btn mg-lr btn2" style="width:270px;">Det har jeg</a>
						<a href="javascript:;" class="btn btn2" style="width:270px;">Det har jeg ikke</a>
					</div>		
					<span class="border-green"></span>
					<div class="qnum clearfix">
						<div class="num">
							<span>02</span> <sup>av 04</sup>
						</div>
						<div class="reminder">
								<h4>Husk,</h4>
							<p> dette er en personalitets-test for stillingen.</p>
						</div>
					</div>				
				</div><!--q2-->
				<div id="q3">
					<h2>Velg din favoritt.</h2>
					<div class="btn-block">
						<a href="javascript:;" class="btn mg-lr btn3">Penger</a>
						<a href="javascript:;" class="btn mg-lr btn3">Mat</a>
						<a href="javascript:;" class="btn btn3">Fritid</a>
					</div>		
					<span class="border-green"></span>
					<div class="qnum clearfix">
						<div class="num">
							<span>03</span> <sup>av 04</sup>
						</div>
						<div class="reminder">
								<h4>Husk,</h4>
							<p> dette er en personalitets-test for stillingen.</p>
						</div>
					</div>				
				</div><!--q3-->
				<div id="q4">
					<h2>Har du muligheten til å begynne å jobbe i dag?</h2>
					<div class="btn-block">
						<a href="javascript:;" class="btn mg-lr btn4" style="width: 80%;max-width:100%;    margin: 0 auto;margin-bottom: 15px;">Ja, jeg kan starte nå</a>
						<a href="javascript:;" class="btn mg-lr btn4" style="width: 80%;max-width:100%;    margin: 0 auto;margin-bottom: 15px;">Om 7 dager</a>
						<a href="javascript:;" class="btn btn4" style="width: 80%;max-width:100%;    margin: 0 auto;margin-bottom: 15px;">Senere</a>
					</div>		
					<span class="border-green"></span>
					<div class="qnum clearfix">
						<div class="num">
							<span>04</span> <sup>av 04</sup>
						</div>
						<div class="reminder">
								<h4>Husk,</h4>
							<p> dette er en personalitets-test for stillingen.</p>
						</div>
					</div>				
				</div><!--q4-->
				<div id="final">
					<h2>Du har blitt forhåndsgodkjent til å bli med basert på dine svar.</h2>
					<div class="btn-block">
						<a href="<?php echo $buttonURL?>"  class="btn btn5 click"> Klikk her</a>
					</div>		
					<span class="border-green"></span>
					<div class="qnum clearfix">
						<div class="logo-box">
							<a href="#"><img src="<?php echo base_url()?>assets/bot_plus_365/images/logo-sm.png" alt=""></a>
						</div>
						<div class="request">
							<h4>Vennligst fyll ut informasjonen og begynn på et bedre liv i dag.</h4>
						</div>
					</div>				
				</div><!--end of final-->

			</div><!--end of question-->
		</div><!--end of hero-section-->

		<div class="welcome-section">
			<div class="container welcome-text">
				<h1 class="uppercase">Vi ønsker deg velkommen til den første delen av din nye karierre.	</h1>
				<p>Du vil nå gjennomgå en kjapp personalitets-test for å sikre at du vil passe inn og ha den ønskede kompetansen for å starte å jobbe.</p>
				<p class="green bold">Vær så ærlig som mulig.</p>
				<span class="logo-lg"></span>
			</div>
		</div><!--end of welcomes section-->

		<div class="comment-section container">
			<h4 class="capitalize"> Siste kommentar av  <span class="block-xs">vår nyeste ansatte.</span></h4>
			<div class="comment-block clearfix">
				<div class="employee">
					<img src="<?php echo base_url()?>assets/bot_plus_365/images/user-img.png" alt="pic of employee">
				</div>
				<div class="comment">
					<p> Satte inn 1900 Kr.  <span>@botplus365</span> med det verifiserte trader-systemet og nå er kontoen på over 245.000 Kr. innen en uke <span>#Lovethis#millionairestatus</span></p>
					<p class="green bold">Lydia</p>
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
