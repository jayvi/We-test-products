<?php if(!isset($_GET['s'])){?>	

	

	
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

	<title>All Products Landing Page</title>
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- Latest compiled and minified CSS -->
	<!-- Custom styles for this template -->
	
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>	

	
	 

	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="//landing.quizawards.com/assets/lucky_wheel_qn/css/animate.css?v=1449487455">

	<link rel="stylesheet" href="//landing.quizawards.com/assets/lucky_wheel_qn/css/bootstrap.min.css?v=1449487455">
	<link href="//landing.quizawards.com/assets/lucky_wheel_qn/css/wheel-main.css?v=1449487455" rel="stylesheet"> 

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<style>
.arrPng{
	max-width: 100%;    position: absolute;top: 46px; left: -173px;
}
	#win, #win2, #win3, #winP, #winP1, #winP2 {
    position: relative;
    z-index: 3;
       width: 120px;
    top: -23px;
    left:0;
   }
   #iphone{
   	    width: 65%;
    text-align: center;
    margin: 0 auto;
    
    top: 0;
    left: 17.6%;
   }
   .userBrowserImg{ width: 64px; opacity: 0.7;margin-right: 20px;}
   .imgPos{
   	margin:8em 0;
   }
   .justP{position: absolute;z-index: 3;top: 38%;text-align: center;width: 100%;}
   #spin{
	    z-index: 2;    position: relative;    top: 0;    left: 0;    width: 65%;    display: block;    margin: 0 auto;    text-align: center;
}
   .secHolder{
	margin:8em 0;position: relative
}
   .fHolder{
   	    margin: 8em 0;
   }
@media(max-width:1700px){  
.justP {
    position: absolute;
    z-index: 3;
    top: 39%;
    text-align: center;
    width: 100%;
}
  }
@media(max-width:1400px){  
   	.arrPng{
	    max-width: 100%;
    position: absolute;
    top: 46px;
    left: -147px;
    width: 133px;
}
.justP {
    position: absolute;
    z-index: 3;
    top: 37%;
    text-align: center;
    width: 100%;
}
   }
   
   @media (max-width: 1242px){
.arrPng {
    max-width: 100%;
    position: absolute;
    top: 46px;
    left: -131px;
    width: 124px;
}}
@media (max-width: 1130px){
.arrPng {
    max-width: 100%;
    position: absolute;
    top: 46px;
    left: -112px;
    width: 104px;
}
}
@media (max-width: 1000px){
.arrPng {
    max-width: 100%;
    position: absolute;
    top: 46px;
    left: -97px;
    width: 97px;
}}
@media(max-width:1200px){
	#win, #win2, #win3, #winP, #winP1, #winP2 {
      width: 97px;
    top: -11px;
    }}
@media(max-width:1120px){
	.fHolderImg {
		width:61%;
	}
	.orangeImg{
		 width:100%;
	}
}       
   
@media(max-width:991px){
	 #spinner {
     margin-top: 0em; 
    margin-bottom: 2em;
    margin-left: 0px; 
}
.arrPng {
   display:none;
}
#iphone {
    width: 46%;
    text-align: center;
    margin: 0 auto;
    top: 0;
    left: 27%;
}
.orange {
    position: absolute;
    top: -100px;
    left: 39%;
}
.secHolder{
	margin:2em 0;position: relative
}
 #spin{
     width:46% 
}
#win, #win2, #win3, #winP, #winP1, #winP2 {
    width: 117px;
    top: -11px;
}
}
@media(max-width:760px){
	#win, #win2, #win3, #winP, #winP1, #winP2 {
    width: 113px;
}
#iphone {
    width: 73%;
    text-align: center;
    margin: 0 auto;
    top: 0;
    left: 13.5%;
}
#spin {
    width: 73%;
}
.justP{
	
    top: 49%;
}
}
@media(max-width:720px){
.justP{	
    top: 46%;
}
}
@media(max-width:700px){
.justP{	
    top: 44%;
}
}
@media(max-width:630px){
	#win, #win2, #win3, #winP, #winP1, #winP2 {
    width: 98px;
}
.justP {
    top: 41%;
}

}
@media(max-width:550px){
	#win, #win2, #win3, #winP, #winP1, #winP2 {
       width: 85px;
    top: 0;
}
.justP {
    top: 40%;
}
#userBrowser{
	font-size:25px;
}
}
@media(max-width:550px){

.justP {
    top: 38%;
}

}
@media(max-width:460px){
#userBrowser{
	font-size:20px;
}
.userBrowserImg{
	width: 46px;
}
.justP {
    top: 37%;
}

}
</style>
</head>
<body class="page1">

		<div class="row-fluid">
			<div class="container">
				<h2 class="text-center lato" style="color: #444444"><div id="userBrowser"><img class="userBrowserImg" src="../assets/images/chrome.png"/> Grattis Google Chrome användare</div></h2>
			</div>
			<div class="row-fluid gradient">
				<h1 style="padding: 11px 0 0;    font-size: 48px;padding: 11px 0 0;font-size: 48px;" class="text-center text-white">
					<span id="top-timer" class="opensans">02:19</span></h1>
				<p class="lato text-center text-white" style="font-weight: 300">
					
					TIME LEFT
				</p>
			</div>
			<div class="row-fluid" style="margin: 5em 0;">
				

				<div class="col-md-6 col-sm-12 ">

						<!-- <form class="iform" action="#" method="get">
							<label for="joiner"></label>
							<input id="joiner" maxlength="14" name="joiner" class="joiner" placeholder="Please Enter your name" />
							<button class="add">
								Add
							</button>
						</form> -->
<div >

			<section>
						<div id="spinner" style="text-align: center;  max-height: 440px;  display: block; position: relative;">
					<!-- <img id="spinBG" src="//landing.quizawards.com/assets/lucky_wheel_qn/images/spinBG.png?v=1449487455"> -->
					<img style="border: 3px solid #EAE9E9; border-radius: 50%;" id="spin" class="spiiin"  src="//landing.quizawards.com/assets/lucky_wheel_qn/images/spin.png?v=1449487455">
					<p class="justP">
					<img onclick="spinIt()" id="win" src="//landing.quizawards.com/assets/lucky_wheel_qn/images/win.png?v=1449487455">
					<img onclick="spinIt2()" id="win2" src="//landing.quizawards.com/assets/lucky_wheel_qn/images/win.png?v=1449487455">
					<img  id="win3" src="//landing.quizawards.com/assets/lucky_wheel_qn/images/win.png?v=1449487455">
					<img  id="winP" src="//landing.quizawards.com/assets/lucky_wheel_qn/images/winP.png?v=1449487455">
					<img  id="winP2" src="//landing.quizawards.com/assets/lucky_wheel_qn/images/winP.png?v=1449487455">
								</p>
					
				<img  id="iphone" class="animated rotateIn" src="//landing.quizawards.com/assets/lucky_wheel_qn/images/theiphone.png?v=1449487455">
					
				</div>
				</section>


		</div><!-- content-box -->

						<!-- <p class="winner">
							The winner is: <span>&nbsp;</span>
						</p> -->
						<ul style="display:none;" class="participants"></ul>

					
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="" style="    padding: 46px 0;">
						<img class="arrPng" src="//landing.quizawards.com/assets/lucky_wheel_qn/images/arrow.png?v=1449487455"/>
						<h4 class="opensans" style="color:#3c8fc8;font-weight: 700"> Snurra hjulet innan tiden tar slut för att se om du är den lyckliga vinnaren av sprillans nya Apple produkter </h4>
						<h5 class="opensans" style="font-weight: 700;color:#444444;    margin: 25px 0 15px;"> TIDIGARE VINNARE </h5>
						<img style="max-width: 100%;    box-shadow: 0px 0px 3px #ccc;    width:75%;" src="//landing.quizawards.com/assets/lucky_wheel_qn/images/prev-winners.png?v=1449487455"/>
						<img class="brand" style="max-width: 100%;    margin: 20px auto; display: block;" src="//landing.quizawards.com/assets/lucky_wheel_qn/images/appl.png?v=1449487455"/>
						<div class="loaderHere">
							
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="row-fluid" style="background: #222222">
				<h3 class="lato text-center text-white" style="    padding: 10px 0;"><strong>Produkter</strong> <span style="font-weight: 300">Som Du Kan Vinna</span></h3>
			</div>
			<div class="container mqC">
				<div class="col-md-12 theCenterInner">
					<div class="col-md-4">
						<h4 class="text-white lato"><b>VAD</b> <span style="font-weight: 300">SÄGER FOLK?</span></h4>
						<div class="row-fluid">
							<div class="clearfix">
								<img src="//landing.quizawards.com/assets/lucky_wheel_qn/images/noel.png?v=1449487455"/>
								<span style="color:#3c8fc8;font-weight: 700;margin-left: 20px;"> Robert Nyman</span>
								<p class="lato" style="color:#888888;    padding: 15px 0px;">
									Jag brukar aldrig fylla i såna här saker online, men jag snurrade hjulet på skoj, och gissa vad... mi iPad Air 2 kom med posten idag!								</p>
							</div>
							<hr />
								<div class="clearfix">
								<img src="//landing.quizawards.com/assets/lucky_wheel_qn/images/kenia.png?v=1449487455"/>
								<span style="color:#3c8fc8;font-weight: 700;margin-left: 20px;"> Monica Hagman</span>
								<p class="lato" style="color:#888888;    padding: 15px 0px;">
									Tusen tack för detta!! :) Men kan jag byta färg till Spacegrey på min iPhone 6?? Hur kan jag byta den?								</p>
							</div>
							<hr />
								<div class="clearfix">
								<img src="//landing.quizawards.com/assets/lucky_wheel_qn/images/randal.png?v=1449487455"/>
								<span style="color:#3c8fc8;font-weight: 700;margin-left: 20px;"> Tobias Sällebrant</span>
								<p class="lato" style="color:#888888;    padding: 15px 0px;">
									Jag hade sett det här tidigare, men jag bestämde mig för att strunta i det eftersom jag tänkte att det ändå var en bluff. En tråkig söndag så bestämde jag mig för att delta i brist  på annat att göra, och gissa om man blev överraskad!! Det finns hopp ibland.								</p>
							</div>
							<hr />
							
						</div>
					</div>
					<div class="col-md-8">
						<div class="row-fluid" class="imgPos">
							<div class="fHolder">
								<h3 class="lato" style="color:#1c97f6;"><b>iPhone</b> <span style="font-weight: 300">6s</span></h3>
							<img class="fHolderImg" src="//landing.quizawards.com/assets/lucky_wheel_qn/images/iphone.png?v=1449487455"/>
							</div>
							<div class="orange">
								<h3 class="lato" style="color:#ee6150"><b>iPhone</b> <span style="font-weight: 300">6s Plus</span></h3>
								<img class="orangeImg" src="//landing.quizawards.com/assets/lucky_wheel_qn/images/iphone6splus.png?v=1449487455"/>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="row-fluid secHolder">
							<div>
								<h3 class="lato" style="color:#2cde2f;"><b>Macbook</b> <span style="font-weight: 300">Air</span></h3>
							<img class="fHolderImg" src="//landing.quizawards.com/assets/lucky_wheel_qn/images/macbook.png?v=1449487455"/>
							</div>
							<div class="ipadd">
								<h3 class="lato" style="color:#ffce09"><b>iPad</b> <span style="font-weight: 300">2 Air</span></span></h3>
							<img class="orangeImg" src="//landing.quizawards.com/assets/lucky_wheel_qn/images/ipadd.png?v=1449487455"/>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<p class="text-center">
					<a href="javascript:void(0)" class="btn btn-info lato scrollup" style="background: #1c78f2;font-weight: 700;    padding: 18px 50px 18px 50px;"> SNURRA LYCKOHJULET NU</a>
					</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

	<!-- Placed at the end of the document so the pages load faster -->


<audio id="audio" src="//landing.quizawards.com/assets/lucky_wheel_qn/music/wheel.mp3?v=1449487455" ></audio>
<audio id="winnner" src="//landing.quizawards.com/assets/lucky_wheel_qn/music/prize-alert.mp3?v=1449487455" ></audio>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//landing.quizawards.com/assets/lucky_wheel_qn/js/bootstrap.min.js?v=1449487455"></script>
	<script src="//landing.quizawards.com/assets/lucky_wheel_qn/js/jQueryRotate.js?v=1449487455"></script>
	<script>
		
		var mq = window.matchMedia( "(max-width: 991px)" );
		console.log(mq);
		  if (mq.matches) {
		  	$('.mqC').removeClass('container');
				$('.mqC').addClass('container-fluid');
			}
			else {
				// window width is less than 500px
			}
     function spinIt(){
     				  var alertTxt = 'Tyvärr! Försök igen, du har ett extra spinn kvar!';
     				  var audio = document.getElementById("audio");
      				 audio.play();
                      $("#spin").rotate({
                          angle: 0,
                          animateTo: 3570,
                          duration: 40000
                      });
                      setTimeout(function(){                      	 
                          $("#spin").stopRotate();
                          
                          audio.pause();
                          audio.load();
                          $('#win').hide();
                          $('#win2').show();
                          console.log( $('#win').hide(),$('#win2').show());
                          alert(alertTxt);
                      }, 8000);
            }
           function spinIt2(){
           			  var audio = document.getElementById("audio");
      				 audio.play();
                    	console.log('second spiiin');
                      $("#spin").rotate({
                          angle: 0,
                          animateTo: 3820,
                          duration: 40000
                      });
                      $('#win2').hide();
                      $('#win3').show();
                      setTimeout(function(){
                          $("#spin").stopRotate();
                          audio.pause();                          
                          setTimeout(function(){$('#iphone').show();
                          var winnerr = document.getElementById("winnner");
      				 		winnerr.play();
                          },2500);
                          setTimeout(function(){
                          	// var checkinggg= 'Kontrollerar resultat...';
								// var html ='<p class="text-center"><b>'+checkinggg+'</b></p><img style="margin:15px auto 0; display: block;    width: 74px;" src="https://landing.quizawards.com/assets/lucky-wheel/images/apple.png"/><div class="progress"></div>';
					          // //$('.brand').hide();
					          		//$('.loaderHere').html(html);
					          		var str= window.location.pathname.split('/')[2];  
					          		//setTimeout(function(){
					          			window.location.href = 'http://wetestproducts.com/iphone6s_white_qn_wheel/se?s';
					          		//},3500)
							},3800);
                      }, 8000);
            }  
     
	</script>
		<script type="text/javascript">
		$( document ).ready(function() {
			
			var interval = setInterval(function() {
				var timer = $('#top-timer').html();
				timer = timer.split(':');
				var minutes = parseInt(timer[0], 10);
				var seconds = parseInt(timer[1], 10);
				seconds -= 1;
				if (minutes < 0) return clearInterval(interval);
				if (minutes < 10 && minutes.length != 2) minutes = '0' + minutes;
				if (seconds < 0 && minutes != 0) {
					minutes -= 1;
					seconds = 59;
				}
				else if (seconds < 10 && length.seconds != 2) seconds = '0' + seconds;
				$('#top-timer').html(minutes + ':' + seconds);

				if (minutes == 0 && seconds == 0)
					clearInterval(interval);
			}, 1000);

		});
		
		
		var isOpera = !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;
    // Opera 8.0+ (UA detection to detect Blink/v8-powered Opera)
var isFirefox = typeof InstallTrigger !== 'undefined';   // Firefox 1.0+
var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
    // At least Safari 3+: "[object HTMLElementConstructor]"
var isChrome = !!window.chrome && !isOpera;              // Chrome 1+
var isIE = /*@cc_on!@*/false || !!document.documentMode;   // At least IE6

if(isFirefox){
	var lang= "Grattis Firefox Användare";
	var ffhtml= '<img  class="userBrowserImg" src="http://wetestproducts.com/iphone6s_white_qn_wheel/assets/images/firefox.png"/>'+lang.toString();
	$('#userBrowser').html(ffhtml);
}
if(isChrome){
	var lang= "Grattis Chrome Användare";
	var ffhtml= '<img class="userBrowserImg" src="http://wetestproducts.com/iphone6s_white_qn_wheel/assets/images/chrome.png"/>'+lang.toString();
	$('#userBrowser').html(ffhtml);
}
if(isSafari){
	var lang= "Grattis Safari user";
	var ffhtml= '<img  class="userBrowserImg" src="http://wetestproducts.com/iphone6s_white_qn_wheel/assets/images/safari.png"/>'+lang.toString();
	$('#userBrowser').html(ffhtml);
}
if(isOpera){
	var lang= "Grattis Opera Användare";
	var ffhtml= '<img  class="userBrowserImg" src="http://wetestproducts.com/iphone6s_white_qn_wheel/assets/images/opera-128.png"/>'+lang.toString();
	$('#userBrowser').html(ffhtml);
}
if(isIE){
	var lang= "Grattis Internet Explorer användare";
	var ffhtml= '<img  class="userBrowserImg" src="http://wetestproducts.com/iphone6s_white_qn_wheel/assets/images/IE-128.png"/>'+lang.toString();
	$('#userBrowser').html(ffhtml);
}
// var output = 'Detecting browsers by ducktyping:<hr>';
// output += 'isFirefox: ' + isFirefox + '<br>';
// output += 'isChrome: ' + isChrome + '<br>';
// output += 'isSafari: ' + isSafari + '<br>';
// output += 'isOpera: ' + isOpera + '<br>';
// output += 'isIE: ' + isIE + '<br>';
// document.body.innerHTML = output;


 $('.scrollup').click(function () {
		        $("html, body").animate({
		            scrollTop: 0
		            
		        }, 600);
		        return false;
		    });
	</script>
	  <script>!function(e,a,t,n,c,o,s){e.GoogleAnalyticsObject=c,e[c]=e[c]||function(){(e[c].q=e[c].q||[]).push(arguments)},e[c].l=1*new Date,o=a.createElement(t),s=a.getElementsByTagName(t)[0],o.async=1,o.src=n,s.parentNode.insertBefore(o,s)}(window,document,"script","//www.google-analytics.com/analytics.js","ga"),ga("create","UA-55759921-1","auto"),ga("send","pageview");</script><!-- Facebook Code --><script>(function() {var _fbq = window._fbq || (window._fbq = []);if (!_fbq.loaded) {var fbds = document.createElement('script');fbds.async = true;fbds.src = '//connect.facebook.net/en_US/fbds.js';var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(fbds, s);_fbq.loaded = true;}_fbq.push(['addPixelId', '433467063472727']);})();window._fbq = window._fbq || [];window._fbq.push(['track', 'PixelInitialized', {}]);</script><noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=433467063472727&amp;ev=PixelInitialized" /></noscript><!-- /Facebook Code -->
<!-- Google Code for Remarketing Tag --><script type="text/javascript">/* <![CDATA[ */ var google_conversion_id = 965529730;var google_custom_params = window.google_tag_params;var google_remarketing_only = true;/* ]]> */</script><script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script><noscript><div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/965529730/?value=0&amp;guid=ON&amp;script=0"/></div></noscript><!-- /Google Code for Remarketing Tag -->
        <!-- start Mixpanel --><script type="text/javascript">(function(f,b){if(!b.__SV){var a,e,i,g;window.mixpanel=b;b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,e,d])};b.__SV=1.2;a=f.createElement("script");a.type="text/javascript";a.async=!0;a.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";e=f.getElementsByTagName("script")[0];e.parentNode.insertBefore(a,e)}})(document,window.mixpanel||[]);
mixpanel.init("2840ae5c7ec1eccfc0e4ea9ed8c0f11a");</script><!-- end Mixpanel -->        <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-65076641-2', 'auto');ga('send', 'pageview');</script>        
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
</body>
</html>



<?php }else{?>
	

	

	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
    
    <title>Mediatiorpage</title>
    
    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,800italic,800,700italic,700,600,600italic,400italic,400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    
    <!-- Styles -->
    <link rel="stylesheet" href="http://wetestproducts.com/iphone6s_white_qn_wheel/assets/s/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="//landing.quizawards.com/assets/lucky_wheel_qn/s/css/style.css?v=1449487455">

    <!-- Media queries -->
    <link rel="stylesheet" href="//landing.quizawards.com/assets/lucky_wheel_qn/s/css/media.css?v=1449487455">

</head>

<body>
    <div id="wrapper">
        <header id="header">
            <h1 class="hidden">Grattis Du Vann!</h1>
        </header>
        <!-- End of header -->

        <section id="answer-section">
            <div class="container">
                <section class="gift-content hidden">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h2 class="gift-title">Du har kvalifcerat dig för en <span>iPhone 6S</span></h2>
                            <p>Vi kontaktar dig så snart som möjligt. Klicka på länken nedan för att hämta din iPhone 6S.</p>
                        
                            <h3 class="iphone-txt">iPhone <span>6S</span></h3>
                           <a href="http://se.quizonaut.com/campaigns/iphone6s/?ref=PA_sp&refid=585a28f6&aid=585a28f6&bid=c140c6e9" > <img src="//landing.quizawards.com/assets/lucky_wheel_qn/s/images/iphone6.jpg?v=1449487455" alt="iPhone image" class="img-border mg-auto img-responsive"></a>
                            <p class="your-price">Ditt Pris: 5 SEK</p>
                            <p class="normal-price">Ord.pris: SEK 5.999</p>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <a href="http://se.quizonaut.com/campaigns/iphone6s/?ref=PA_sp&refid=585a28f6&aid=585a28f6&bid=c140c6e9" class="btn btn-submit btn-block">Hämta din gåva nu!</a>
                        </div>
                    </div>
                </section>
                <section id="answer-check">
                    <div class="row">
                        <div class="answer-block">
                            <h2>Kontrollerar resultat</h2>
                            <ul class="answer-list hidden">
                                <li>Inga dubletter funna</li>
                                <li>Vi har 7 platser kvar</li>
                                <li>Du har kvalificerat dig för en iPhone 6</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <!-- End of container -->
        </section>
        <!-- End of answer-section -->
        
        <section id="feedback" class="hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="feedback-wrap">
                            <h2><span>Vad </span>folk säger?</h2>
                            <ul class="feedback-list">
                                <li>
                                    <div class="feedback-header clearfix">
                                        <img src="//landing.quizawards.com/assets/lucky_wheel_qn/s/images/user1.jpg?v=1449487455" class="img-circle pull-left" alt="User image">
                                        <h4>Robert Nyman</h4>
                                    </div>
                                    <p>
                                        Jag brukar aldrig fylla i såna här saker online, men jag snurrade hjulet på skoj, och gissa vad... mi iPad Air 2 kom med posten idag!                                    </p>
                                </li>
                                <li>
                                    <div class="feedback-header clearfix">
                                        <img src="//landing.quizawards.com/assets/lucky_wheel_qn/s/images/user2.jpg?v=1449487455" class="img-circle pull-left" alt="User image">
                                        <h4>Monica Hagman</h4>
                                    </div>
                                    <p>
                                       Tusen tack för detta!! :) Men kan jag byta färg till Spacegrey på min iPhone 6?? Hur kan jag byta den?                                    </p>
                                </li>
                                <li>
                                    <div class="feedback-header clearfix">
                                        <img src="//landing.quizawards.com/assets/lucky_wheel_qn/s/images/user3.jpg?v=1449487455" class="img-circle pull-left" alt="User image">
                                        <h4>Tobias Sällebrant</h4>
                                    </div>
                                    <p>
                                        Jag hade sett det här tidigare, men jag bestämde mig för att strunta i det eftersom jag tänkte att det ändå var en bluff. En tråkig söndag så bestämde jag mig för att delta i brist  på annat att göra, och gissa om man blev överraskad!! Det finns hopp ibland.                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
    </div>
    <!-- End of wrapper -->
    
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//landing.quizawards.com/assets/lucky_wheel_qn/s/js/app.js?v=1449487455"></script>
</body>
</html>


<?php } ?>