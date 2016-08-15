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

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
	
	<title>Retirement</title>
	
	<!-- Google fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,400italic,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	<!-- Styles -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/retirement/bootstrap/css/bootstrap.css">
    <link href="<?php echo base_url()?>assets/retirement/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/retirement/css/style.css">

	<!-- Media queries -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/retirement/css/media.css">
</head>

<body>
	<div id="wrapper">
		<section id="main-section">
			<div class="container pos-rel">
				<div class="heading" >
					<h1 style="font-size: 39px;">How To Retire Rich And Make Your Life One Big Holiday!
						 <span class="block">This free report will give you the freedom to travel whenever you want all the places of your dreams!</span> 
					</h1>
				</div>
				<div class="banner-content">
					<div class="product-img">
						<img src="<?php echo base_url()?>assets/retirement/images/book.png" alt="Book">
					</div>
					<div class="form-box">
						<h2>Get access today to this financial retirement report</h2>
						<form id="retire_form">
							<div class="form-group">
								<input type="email" value="<?php echo isset($_GET['email'])?$_GET['email']:'';?>" required="required" name="email" class="form-control" placeholder="Your Email Address">
							</div>
							
						</form>
						<div class="form-group">
								<button class="btn btn-primary btn-block ucase">Get Instant Access!</button>
							</div>
							<span class="small-text align-center"><i class="fa fa-lock"></i> 100% Secure. We respect your privacy.</span>
					</div>
				</div>
			</div>
		</section><!-- End of main section -->

		<section id="testimonial" class="section-container">
			<div class="container">
				<div class="testimonial-content">
					<p>“We travel for the last 4 years and we visited numbers of exotic destinations like Mumbai, Qatar, Great Wall of China and the most amazing places in New Zeland! It’s so lovely to travel all around the world in retirement with your soulmate.“</p>
					<div class="client-name">Mr. and Mrs. McCormack</div>
					<span class="client-img"><img src="<?php echo base_url()?>assets/retirement/images/client.png" alt="Client"></span>
				</div>
			</div>
		</section><!-- End of testimonial -->

		<div class="footer-container">
			<footer id="footer" class="container">
				<div class="row">
					<div class="col-md-12 align-center">
						<p>&copy; All right reserved.</p>
					</div>
				</div>
			</footer><!-- End of footer -->
		</div>

	</div><!-- End of wrapper -->
		<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/is.min.js')?>"></script>
	<script>
	
	document.addEventListener('DOMContentLoaded', function() {
		$(document).on('click','.ucase',function(e){
			e.preventDefault();
			var email = $('input[type="email"]').val();
			var f_name= '<?php echo isset($_GET['fname'])?$_GET['fname']:NULL;?>';
			var l_name= '<?php echo isset($_GET['lname'])?$_GET['lname']:NULL;?>';
			var city= '<?php echo isset($_GET['city'])?$_GET['city']:NULL;?>';
			var	campaign = '<?php echo isset($_GET['ulbid'])?$_GET['ulbid']:NULL;?>';
			var page = window.location.origin+window.location.pathname;
			var isEmail = is.email(email);
			if(isEmail){
				$.ajax({
					type: 'POST',
					url : 'http://condoative.com/analytics/opt_in',
					data: {
						'email':email,
						'f_name':f_name,
						'l_name':l_name,
						'city':city,
						'campaign':campaign,
						'page':page,
					},
					dataType: 'json',
					success: function(resp){
						if(resp){
							window.location.href='<?php echo $buttonURL;?>';
						}else{
							alert('Please add valid email');
						}
					}
				});
			}else{
				alert('Please add valid email');
			}
		})
	});
	</script>
		
		<script type="text/javascript">
	(new Image()).src='<?php echo '//condoative.com/analytics/setWcookie?route='.$_GET['route'].'&ulbid='.$_GET['ulbid']?>';
</script>
	</body>
</html>
