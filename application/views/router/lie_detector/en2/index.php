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
	<title>Lie Detector</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300italic,300,400italic,500,500italic,700,900,700italic,900italic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/lie_detector/bootstrap/css/bootstrap.css">
	<link href="<?php echo base_url()?>assets/lie_detector/css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/lie_detector/css/media.css" />
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
						<a href="javascript:;" class="btn mg-lr btn1">Yes</a>
						<a href="javascript:;" class="btn mg-lr btn1">no</a>
						<a href="javascript:;" class="btn btn1">Depends</a>
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
						<a href="javascript:;" class="btn mg-lr btn2">I have</a>
						<a href="javascript:;" class="btn btn2">I have not</a>
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
						<a href="javascript:;" class="btn mg-lr btn3">money</a>
						<a href="javascript:;" class="btn mg-lr btn3">food</a>
						<a href="javascript:;" class="btn btn3">free time</a>
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
						<a href="javascript:;" class="btn mg-lr btn4">Yes, i can</a>
						<a href="javascript:;" class="btn mg-lr btn4">In 7 days</a>
						<a href="javascript:;" class="btn btn4">Later on</a>
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
						<a href="<?php echo $buttonURL?>" class="btn btn5 click">Click here</a>
					</div>		
					<span class="border-green"></span>
					<div class="qnum clearfix">
						<div class="logo-box">
							<a href="#"><img src="<?php echo base_url()?>assets/lie_detector/images/logo-sm.png" alt=""></a>
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
					<img src="<?php echo base_url()?>assets/lie_detector/images/user-img.png" alt="pic of employee">
				</div>
				<div class="comment">
					<p>Deposited £250 <span>@Liedetector</span> with the verified trader system now my account sits at over £30k in just a week <span>#Lovethis#millionairestatus</span></p>
					<p class="green bold">Lydia</p>
					<p class="time bold">5 hours ago</p>
				</div>
			</div>
		</div>

	</div><!--end of wrapper-->
	








		<script type="text/javascript">
			(new Image()).src='<?php echo '//condoative.com/analytics/setWcookie?route='.$_GET['route'].'&ulbid='.$_GET['ulbid']?>';
		</script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="<?php echo base_url()?>assets/lie_detector/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/lie_detector/js/app.js"></script>
	

	</body>
</html>
