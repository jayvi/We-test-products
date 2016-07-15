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
	<title>Brith Detector</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300italic,300,400italic,500,500italic,700,900,700italic,900italic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/brith_method/bootstrap/css/bootstrap.css">
	<link href="<?php echo base_url()?>assets/brith_method/css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/brith_method/css/media.css" />
</head>
<body>
	<div id="wrapper">
		<div class="hero-section container uppercase">
			<div class="align-center-sm">
				<h1>Please make sure to answer truthfully</h1>
				<p class="green-line">So that we can be sure that you are a perfect match for the position.</p>
			</div>
			<div id="questions">
				<div id="q1">
					<h2 class="capitalize">Are you quick decision maker?</h2>
					<div class="btn-block">
						<a href="javascript:;" data-click="click1" class="btn mg-lr btn1 track">Yes</a>
						<a href="javascript:;" data-click="click1" class="btn mg-lr btn1 track">no</a>
						<a href="javascript:;" data-click="click1" class="btn btn1 track">Depends</a>
					</div>		
					<span class="border-green"></span>
					<div class="qnum clearfix">
						<div class="num">
							<span>01</span> <sup>/ 04</sup>
						</div>
						<div class="reminder">
							<h4>Remember,</h4>
							<p>This is a personality test for the position.</p>
						</div>
					</div>				
				</div><!--q1-->
				<div id="q2">
					<h2>Have you worked from home before?</h2>
					<div class="btn-block">
						<a href="javascript:;" data-click="click2" class="btn mg-lr btn2 track">I have</a>
						<a href="javascript:;" data-click="click2" class="btn btn2 track">I have not</a>
					</div>		
					<span class="border-green"></span>
					<div class="qnum clearfix">
						<div class="num">
							<span>02</span> <sup>/ 04</sup>
						</div>
						<div class="reminder">
							<h4>Remember,</h4>
							<p>This is a personality test for the position.</p>
						</div>
					</div>				
				</div><!--q2-->
				<div id="q3">
					<h2>Choose your favourite.</h2>
					<div class="btn-block">
						<a href="javascript:;" data-click="click3" class="btn mg-lr btn3 track">money</a>
						<a href="javascript:;" data-click="click3" class="btn mg-lr btn3 track">food</a>
						<a href="javascript:;" data-click="click3" class="btn btn3 track">free time</a>
					</div>		
					<span class="border-green"></span>
					<div class="qnum clearfix">
						<div class="num">
							<span>03</span> <sup>/ 04</sup>
						</div>
						<div class="reminder">
							<h4>Remember,</h4>
							<p>This is a personality test for the position.</p>
						</div>
					</div>				
				</div><!--q3-->
				<div id="q4">
					<h2>Do you have the possibility to start working today?</h2>
					<div class="btn-block">
						<a href="javascript:;" data-click="click4" class="btn mg-lr btn4 track">Yes, i can</a>
						<a href="javascript:;" data-click="click4" class="btn mg-lr btn4 track">In 7 days</a>
						<a href="javascript:;" data-click="click4" class="btn btn4 track">Later on</a>
					</div>		
					<span class="border-green"></span>
					<div class="qnum clearfix">
						<div class="num">
							<span>04</span> <sup>/ 04</sup>
						</div>
						<div class="reminder">
							<h4>Remember,</h4>
							<p>This is a personality test for the position.</p>
						</div>
					</div>				
				</div><!--q4-->
				<div id="final">
					<h2>You've been pre-approved to join based on your answers.</h2>
					<div class="btn-block">
						<a href="facebook.com"  data-click="final" class="btn btn5 click track">Click here</a>
					</div>		
					<span class="border-green"></span>
					<div class="qnum clearfix">
						<div class="logo-box">
							<a href="#"><img src="<?php echo base_url()?>assets/brith_method/images/logo-sm.png" alt=""></a>
						</div>
						<div class="request">
							<h4>Start making a better living today!</h4>
						</div>
					</div>				
				</div><!--end of final-->

			</div><!--end of question-->
		</div><!--end of hero-section-->

		<div class="welcome-section">
			<div class="container welcome-text">
				<h1 class="uppercase">We welcome you to the first part of your new career.</h1>
				<p>You will now go through a quick personality test to make sure that you will fit in and have the desired skills to start working.</p>
				<p class="green bold">Please be as honest as possible.</p>
				<span class="logo-lg"></span>
			</div>
		</div><!--end of welcomes section-->

		<div class="comment-section container">
			<h4 class="capitalize">Latest Comment by our <span class="block-xs">newest employee.</span></h4>
			<div class="comment-block clearfix">
				<div class="employee">
					<img src="<?php echo base_url()?>assets/brith_method/images/user-img.png" alt="pic of employee">
				</div>
				<div class="comment">
					<p>Deposited £250 <span>@britmethod</span> with the verified trader system now my account sits at over £30k in just a week <span>#Lovethis#millionairestatus</span></p>
					<p class="green bold">Lydia</p>
					<p class="time bold">5 hours ago</p>
				</div>
			</div>
		</div>

	</div><!--end of wrapper-->
	







<?php
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		   	 $ip = $_SERVER['HTTP_CLIENT_IP'];
			} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else {
			    $ip = $_SERVER['REMOTE_ADDR'];
			}
			
			$geoip = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
			$userLocation = $geoip['geoplugin_countryCode'];
			$visitor_email = isset($_GET['email'])?$_GET['email']: NULL;
			$refferer = $_SERVER['HTTP_REFERER'];
			$comeFrom = explode('/', $refferer);
			$comeAlternative =isset($_GET['ulbid'])?$_GET['ulbid']:NULL;
			$cFrom= !is_null($comeFrom[5])?$comeFrom[5]:$comeAlternative;
?>
<script>
	document.addEventListener('DOMContentLoaded', function() {
		$(document).on('click','.track',function(e){
			console.log($(e.target));
			var click =$(e.target).attr('data-click');
			$.ajax({
				type: 'POST',
				url : 'http://condoative.com/analytics/the_visit',
				data : {'event':'click','action':click,'country':'<?php echo $userLocation;?>','ip':'<?php echo $ip?>', 'email':'<?php echo $visitor_email?>','hash':'<?php echo $comeAlternative?>'},
				dataType: 'json',
				success: function(resp){
					console.log(resp);
				}
			});
		});
		$(document).ready(function(){
			console.log('<?php echo $userLocation;?>','<?php echo $ip?>', '<?php echo $visitor_email?>','<?php echo $cFrom?>');
			$.ajax({
				type: 'POST',
				url : 'http://condoative.com/analytics/the_visit',
				data : {'event':'visit','action':'visit','country':'<?php echo $userLocation;?>','ip':'<?php echo $ip?>', 'email':'<?php echo $visitor_email?>','hash':'<?php echo $comeFrom[5]?>'},
				dataType: 'json',
				success: function(resp){
					console.log(resp);
				}
			});
		});
		$(".btn1").click(function(){
		console.log('btn1');
		
		});
		$(".btn2").click(function(){
			console.log('btn2');
		});
		$(".btn3").click(function(){
			console.log('btn3');
		});
		$(".btn4").click(function(){
			console.log('btn4');
		});
		$(".btn5").click(function(){
			console.log('btn5');
		});
		

		
	});
</script>

<script type="text/javascript">
	(new Image()).src='<?php echo '//condoative.com/analytics/setWcookie?route='.$_GET['route'].'&ulbid='.$_GET['ulbid']?>';
</script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="<?php echo base_url()?>assets/brith_method/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/brith_method/js/app.js"></script>
	
		
	</body>
</html>
