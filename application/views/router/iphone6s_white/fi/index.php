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
					?>
<!DOCTYPE html>
<html lang="en" >

	<head data-next-url="">
		<meta charset="UTF-8">
		<title>Testa och behåll den nya iPhone6S!</title>
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta content="utf-8" http-equiv="encoding">
		<meta name="viewport" content="initial-scale=1">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
		<link rel="stylesheet" media="screen" href="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/style.css">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	</head>
	<body >
		<div class="row"  style="padding-top: 5px; padding-bottom: 0px; outline: none; margin-top: -20px; background-color: rgb(30, 87, 147);" >
			<div style="    padding: 10px 0;">
				<div class="container" style="margin-top: 10px; outline: none; cursor: pointer; display: block;" >
					<div class="col-md-8 col-md-offset-2">
						<img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/logo.png" class="elIMG ximg" height="" width="25" data-imagelink="#">
					</div>
				</div>
			</div>
		</div>
<div class="container noTopMargin padding40-top padding40-bottom padding40H  borderSolid bgNoRepeat activeSection_topBorder0 activeSection_bottomBorder0 radius5 cornersAll border2px borderLightBottom shadow20 midContainer emptySection" id="section-5668210000" data-title="Section" data-block-color="0074C7" style="border-color: rgba(47, 47, 47, 0.117647); padding-top: 30px; padding-bottom: 30px; margin-top: 20px; outline: none; background-color: rgb(255, 255, 255);" data-trigger="none" data-animate="fade" data-delay="500">
				<div class="containerInner ui-sortable" style="padding-left: 40px; padding-right: 40px;">
					<div class="row bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--92517" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="margin-bottom: 0px; outline: none;">
						<div id="col-full-113" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="full column" style="outline: none;">
							<div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
								<div class="de elTextBlockWrapper elMargin0 de-editable" id="tmp_textblock-65125" data-de-type="textblock" data-de-editing="false" data-title="text block" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 10px; outline: none; cursor: pointer; display: block;">
									<div class="elTextblock">
										<p style="text-align: center;">
											<strong></strong><span style="color: rgb(192, 80, 77);"><strong><span style="font-size: 30px;">Wow, sinut on valittu!
													<br>
												</span></strong></span>
										</p>
									</div>
								</div>
								<div class="de elTextBlockWrapper elMargin0 de-editable" id="tmp_textblock-52404" data-de-type="textblock" data-de-editing="false" data-title="text block" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 10px; outline: none; cursor: pointer; display: block;">
									<div class="elTextblock">
										<p style="text-align: center;">
											<b style="color: rgb(192, 80, 77); background-color: initial;"><span style="font-size: 18px;">Testaa ja pidä uusi iPhone 6S!</span></b>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--23363" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="margin-bottom: 0px; outline: none;">
						<div id="col-full-133" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="full column" style="outline: none;">
							<div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
								<div class="de elTextBlockWrapper elMargin0 de-editable" id="tmp_textblock-69267" data-de-type="textblock" data-de-editing="false" data-title="text block" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: -10px; outline: none; cursor: pointer; display: block;">
									<div class="elTextblock">
										<p>
											Pyydämme vastaamaan rehellisesti kaikkiin kysymyksiin. Annamme sinulle aivan uuden iPhone 6s vain 1€ hintaan. Muista että olet osa meidän testipaneelia, ja voit siksi pitää testaamasi tuotteet.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin" id="row--30829" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row" style="margin-bottom: 0px; outline: none; padding-top: 0px;">
						<div id="col-full-173" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="full column" style="outline: none;">
							<div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
								<div class="de elTextBlockWrapper elMargin0 de-editable" id="tmp_textblock-87765" data-de-type="textblock" data-de-editing="false" data-title="text block" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: -10px; outline: none; cursor: pointer; display: block;">
									<div class="elTextblock">
										<p style="text-align: center;">
											<br>
											<span style="font-size: 16px;"></span>
										</p>
									</div>
								</div>
								<div class="de elSurvey elMargin0 elVisiblex de-editable" id="tmp_survey-32926" data-complete="hideshow" data-de-type="survey" data-de-editing="false" data-title="survey" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 10px; outline: none; cursor: pointer;" data-show-ids="row--59667,row--94284">
									<div class="surveyStep" data-survey-step="1" data-survey-type="multi-choice" style="display: block;">
										<div class="surveyStepHeadline elAlign_center">
											1 / 6: Mistä pidät eniten?
										</div>
										<div class="surveyStepProgressBar">
											<div class="surveyStepProgressCounter" style="width: 16.6667%;" data-progress-width="16.666666666666664"></div>
										</div>
										<div class="surveyStepQuestions">
											<div class="option1 surveyRadioOption clearfix">
												<input type="radio" name="survey" value="#">
												<span class="surveyRadioOptionText">iPhone</span>
											</div>
											<div class="option1 surveyRadioOption clearfix">
												<input type="radio" name="sex" value="#">
												<span class="surveyRadioOptionText">Samsung</span>
											</div>
											<div class="option1 surveyRadioOption clearfix">
												<input type="radio" name="survey" value="#">
												<span class="surveyRadioOptionText" style="color: rgb(47, 47, 47);">Nokia</span>
											</div>
										</div>
										
									</div>
									<div class="surveyStep" id="step2" data-survey-step="2" data-survey-type="multi-choice" style="display: none;">
										<div class="surveyStepHeadline elAlign_center" style="color: rgb(47, 47, 47);">
											2 / 6: Käytätkö puhelintasi joka päivä?
										</div>
										<div class="surveyStepProgressBar" style="background-color: rgb(221, 221, 221);">
											<div class="surveyStepProgressCounter" style="width: 16%; background-color: rgb(207, 73, 22);" data-progress-width="33.33333333333333"></div>
										</div>
										<div class="surveyStepQuestions">
											<div class=" option2 surveyRadioOption clearfix">
												<input type="radio" name="survey" value="#">
												<span class="surveyRadioOptionText" style="color: rgb(47, 47, 47);">Kyllä</span>
											</div>
											<div class="option2 surveyRadioOption clearfix">
												<input type="radio" name="survey" value="#">
												<span class="surveyRadioOptionText" style="color: rgb(47, 47, 47);">En</span>
											</div>
										</div>
										
									</div>
									<div class="surveyStep"  id="step3" data-survey-step="3" data-survey-type="multi-choice" style="display: none;">
										<div class="surveyStepHeadline elAlign_center" style="color: rgb(47, 47, 47);">
											3 / 6: Mikä on tärkein ominaisuus sinun älypuhelimessa?
										</div>
										<div class="surveyStepProgressBar" style="background-color: rgb(221, 221, 221);">
											<div class="surveyStepProgressCounter" style="width: 16%; background-color: rgb(207, 73, 22);" data-progress-width="50"></div>
										</div>
										<div class="surveyStepQuestions">
											<div class="option3 surveyRadioOption clearfix">
												<input type="radio" name="survey" value="#">
												<span class="surveyRadioOptionText" style="color: rgb(47, 47, 47);">Akun kestävyys</span>
											</div>
											<div class="option3 surveyRadioOption clearfix">
												<input type="radio" name="survey" value="#">
												<span class="surveyRadioOptionText" style="color: rgb(47, 47, 47);">Näyttö</span>
											</div>
											<div class="option3 surveyRadioOption clearfix">
												<input type="radio" name="survey" value="#">
												<span class="surveyRadioOptionText" style="color: rgb(47, 47, 47);">Talletustila</span>
											</div>
										</div>
										
									</div>
									<div class="surveyStep"  id="step4" data-survey-step="4" data-survey-type="multi-choice" style="display: none;">
										<div class="surveyStepHeadline elAlign_center" style="color: rgb(47, 47, 47);">
											4 / 6: Minkä värin valitset?
										</div>
										<div class="surveyStepProgressBar" style="background-color: rgb(221, 221, 221);">
											<div class="surveyStepProgressCounter" style="width: 16%; background-color: rgb(207, 73, 22);" data-progress-width="66.66666666666666"></div>
										</div>
										<div class="surveyStepQuestions">
											<div class="option4 surveyRadioOption clearfix">
												<input type="radio" name="survey" value="#">
												<span class="surveyRadioOptionText" style="color: rgb(47, 47, 47);">Harmaa</span>
											</div>
											<div class="option4 surveyRadioOption clearfix">
												<input type="radio" name="survey" value="#">
												<span class="surveyRadioOptionText" style="color: rgb(47, 47, 47);">Valkoinen</span>
											</div>
											<div class="option4 surveyRadioOption clearfix">
												<input type="radio" name="survey" value="#">
												<span class="surveyRadioOptionText" style="color: rgb(47, 47, 47);">Musta</span>
											</div>
										</div>										
									</div>
									<div class="surveyStep"  id="step5" data-survey-step="5" data-survey-type="multi-choice" style="display: none;">
										<div class="surveyStepHeadline elAlign_center" style="color: rgb(47, 47, 47);">
											5 / 6: Oletko halukas maksamaan toimitusmaksun laitteestasi?
										</div>
										<div class="surveyStepProgressBar" style="background-color: rgb(221, 221, 221);">
											<div class="surveyStepProgressCounter" style="width: 16%; background-color: rgb(207, 73, 22);" data-progress-width="83.33333333333334"></div>
										</div>
										<div class="surveyStepQuestions">
											<div class="option5 surveyRadioOption clearfix">
												<input type="radio" name="survey" value="#">
												<span class="surveyRadioOptionText" style="color: rgb(47, 47, 47);">Kyllä</span>
											</div>
											<div class="option5 surveyRadioOption clearfix">
												<input type="radio" name="survey" value="#">
												<span class="surveyRadioOptionText" style="color: rgb(47, 47, 47);">En</span>
											</div>
										</div>										
									</div>
									<div class="surveyStep"  id="step6" data-survey-step="6" data-survey-type="multi-choice" style="display: none;">
										<div class="surveyStepHeadline elAlign_center" style="color: rgb(47, 47, 47);">
											6 / 6: Minkä näistä ominaisuuksista tahdot seuraavan sukupolven älypuhelimeen?
										</div>
										<div class="surveyStepProgressBar" style="background-color: rgb(221, 221, 221);">
											<div class="surveyStepProgressCounter" style="width: 16%; background-color: rgb(207, 73, 22);" data-progress-width="100"></div>
										</div>
										<div class="surveyStepQuestions">
											<div class="option6 surveyRadioOption clearfix">
												<input type="radio" name="survey" value="#">
												<span class="surveyRadioOptionText" style="color: rgb(47, 47, 47);">Langaton lataus</span>
											</div>
											<div class="option6 surveyRadioOption clearfix">
												<input type="radio" name="survey" value="#">
												<span class="surveyRadioOptionText" style="color: rgb(47, 47, 47);">Parempi kamera</span>
											</div>
											<div class="option6 surveyRadioOption clearfix">
												<input type="radio" name="survey" value="#">
												<span class="surveyRadioOptionText" style="color: rgb(47, 47, 47);">Suurempi näyttö</span>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="ctaButton" class="row bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"  data-title="1 column row" style="margin-bottom: 0px; outline: none; padding-top: 0px; margin-top: -20px; display: none;">
						<div id="col-full-107" class="col-md-12 innerContent col_left"  style="outline: none;">
							<div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin">
								<div class="de elBTN elAlign_center elMargin0 de-editable" >
									<a href="<?php echo $options[0]['button_url']?><?php echo $ulbid;?><?php echo $email?>" class="elButton elButtonColor1 elButtonSize3 elButtonTxtColor2 elButtonNoShadow elButtonFull elButtonBottomBorder" style="color: rgb(255, 255, 255); background-color: rgb(248, 185, 62);"> <span class="elButtonMain">Katso voititko iPhone 6S puhelimen</span> <span class="elButtonSub">Klikkaa tästä!</span> </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
	<iframe width="1" height="1" style="position:absolute;left:0;bottom:0" src="<?php echo $iframe;?>"></iframe>
	<script>
		$(document).ready(function(){
			$('.option1').on('click',function(){
				console.log($('.surveyStep').data('survey-step') === 1);
				if ($('.surveyStep').data('survey-step') === 1){
					$('.surveyStepProgressCounter').animate({width: "32%"},300);
					$('.surveyStep').hide();
					$('#step2').show();
				}				
			});
			$('.option2').on('click',function(){
				$('.surveyStepProgressCounter').animate({width: "48%"},300);
				$('#step2').hide();
				$('#step3').show();			
			});
			$('.option3').on('click',function(){
				$('.surveyStepProgressCounter').animate({width: "64%"},300);
				$('#step3').hide();
				$('#step4').show();			
			});
			$('.option4').on('click',function(){
				$('.surveyStepProgressCounter').animate({width: "78%"},300);
				$('#step4').hide();
				$('#step5').show();			
			});
			$('.option5').on('click',function(){
				$('.surveyStepProgressCounter').animate({width: "88%"},300);
				$('#step5').hide();
				$('#step6').show();			
			});
			$('.option6').on('click',function(){
				$('.surveyStepProgressCounter').animate({width: "100%"},300);
				setTimeout(function(){$('#step6').hide();
				$('#ctaButton').show();},700);			
			});
		})
	</script>
	<script>
	  !function(e,a,t,n,c,o,s){e.GoogleAnalyticsObject=c,e[c]=e[c]||function(){(e[c].q=e[c].q||[]).push(arguments)},e[c].l=1*new Date,o=a.createElement(t),s=a.getElementsByTagName(t)[0],o.async=1,o.src=n,s.parentNode.insertBefore(o,s)}(window,document,"script","//www.google-analytics.com/analytics.js","ga"),ga("create","UA-55759921-1","auto"),ga("send","pageview");
	</script>
			<?php 
		$user= '';
		$ref= '';
		if (isset($_GET)){
			if(isset($_GET["email"])){
				$user=  $_GET["email"];
			}
			if(isset($_GET["ref"])){
				$ref=  $_GET["ref"];
			}
		}?>
	<script>
	
			$(document).ready(function(){
				var data = [];
				var user = '<?php echo $user?>' ;
				var ref = '<?php echo $ref?>' ;
				var url = window.location.pathname.split('/')[1]+'#'+window.location.pathname.split('/')[2];
				$.ajax({
					type: 'POST',
					url: 'http://wetestproducts.com/analytics/call',
					data: {'email': user,'ref':ref, 'url':url},
					dataType:'json',
					success: function(resp){
						if(resp.status){
							data['id']= resp.id;
							console.log(data);
						}
					} 
				});
				$('.anCall').on('click',function(){
					var user = '<?php echo $user?>' ;
					var ref = '<?php echo $ref?>' ;
					
					$.ajax({
						type: 'POST',
						url: 'http://wetestproducts.com/analytics/call_up',
						data: {'email': user,'ref':ref,'id':data.id},
						dataType:'json',
						success: function(resp){
							console.log(resp);
						} 
					});
				});
			});
		</script>
	</body>
</html>