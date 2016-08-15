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
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kitchen Aid</title>
                        <link rel="stylesheet" href="<?php echo base_url()?>assets/kitchenaid/css/d0635cf.css" />
    
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/kitchenaid/bundles/flowbuildercore/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/kitchenaid/bundles/flowbuildercore/css/kitchen-aid/style.css">
            <link rel="shortcut icon" href="" type="image/x-icon">
 
    </head>
    <body>
            <div style="display: none;">9395aca220b0793a5f665d6e332a6b0a</div>
            <div id="go_through_flow_panel">
            <button class="btn-next-step">Next step</button>
            <button class="btn-refresh"><span class="glyphicon glyphicon-refresh"></span></button>
        </div>
                
    
    <script>
        var priorityDisplayBlocks = {"pre_landing_block":true,"user_data_first_form_block":false,"user_data_second_form_block":false,"form_questions_block":false,"hosted_co_reg_block":false,"iframe_block":false,"banners_block":false};
    </script>
   <style>
    	 select.styledS{ 
    	  	 padding: 8px 5px 8px 10px;
    cursor: pointer;
    border: 1px solid #DDD;
    font-size: 1.125em;
    color: #797979;
    box-shadow: 0px 0px 5px #D7D7D7 inset;
    background: #ddd;
    width:95%;
    height: 41px;}
    .wid35{
    	width:33%;
    	float:left;
    }
    </style>
    
                                <div class="frame-top">
                                	<?php if(!isset($_GET['next'])):?>
                <div class="container">

                    <div class="frame-top__left">
                    	

                        <div class="frame-top__left__top">
                            <!-- ----- START testers ----- -->
                            <div class="testers">
                                <h1 class="testers__title">Testers wanted</h1>
                                <div class="testers__subtitle">
                                    <span class="testers__subtitle__underlined">Test &#38; Get</span>
                                    <span class="testers__subtitle__important">Kitchen Aid®</span>
                                    <span class="testers__subtitle__underlined">products for FREE!</span>
                                </div>
                                <div class="testers__image hide-mobile">
                                    <img src="<?php echo base_url()?>assets/kitchenaid/bundles/flowbuildercore/img/kitchen-aid/white-products.png" alt="Kitchen Aid products">
                                </div>
                            </div>
                            <!-- ----- END testers ----- -->
                        </div>
                        <div class="frame-top__left__bottom" id="hidemeWHen">
                            <!-- ----- START review ----- -->
                            <div class="review hide-mobile">
                                <div class="review__content">
                                    <div class="review__image">
                                        <img src="<?php echo base_url()?>assets/kitchenaid/bundles/flowbuildercore/img/kitchen-aid/white-review.png" alt="Reviewer image">
                                    </div>
                                </div>
                            </div>
                            <!-- ----- END review ----- -->
                        </div>
                    </div>
                    <div  id="pre_landing_block" class="frame-top__right">
                        <!-- ----- START form-panel ----- -->

                        <div class="js form-panel__timer" data-time="240">
                            You have <span class="js form-panel__timer__minutes">4</span><span>:</span><span class="js form-panel__timer__seconds">00</span> left for this offer
                        </div>
<div class="form-panel__body firstForm" style="display: none">
                        <div id="form_panel" class="getPrimaryInfo" style="display: block;">
    <form name="user_data_form" method="post"  id="user_data_form" novalidate="novalidate">
            <div id="user_data_form_block_gender" class="form-group">
                                        <div id="user_data_form_gender" autocomplete="off"><input type="radio" id="user_data_form_gender_0" name="gender" required="required" value="MR" aria-required="true">
                                        	<label for="user_data_form_gender_0" class="required" aria-required="true">MR</label><input type="radio" id="user_data_form_gender_1" name="gender" required="required" value="MRS" aria-required="true"><label for="user_data_form_gender_1" class="required" aria-required="true">MS</label></div></div>
            <div id="user_data_form_block_firstName" class="form-group">
                                        <input type="text" id="user_data_form_firstName" name="firstName" required="required" placeholder="First Name" autocomplete="off" aria-required="true"></div>
            <div id="user_data_form_block_lastName" class="form-group">
                                        <input type="text" id="user_data_form_lastName" name="lastName" required="required" placeholder="Surname" autocomplete="off" aria-required="true"></div>
            <div id="user_data_form_block_email" class="form-group">
                                        <input type="email" id="user_data_form_email" name="email" required="required" placeholder="Email" autocomplete="off" aria-required="true"></div>
            <div id="user_data_form_block_birthdate" class="form-group">
            <label class="required" aria-required="true">Date of birth</label>                           	<div id="user_data_form_birthdate" autocomplete="off">
										<div class="wid35">
											<select  name="month" required="required" aria-required="true" class="styledS">
												<option value="" selected="selected">Month</option>
												<option value="1">January</option><option value="2">February</option>
												<option value="3">March</option><option value="4">April</option>
												<option value="5">May</option><option value="6">June</option>
												<option value="7">July</option><option value="8">August</option>
												<option value="9">September</option><option value="10">October</option>
												<option value="11">November</option><option value="12">December</option>
											</select>
											
										</div>
										<div class="wid35">
											<select id="user_data_form_birthdate_day " name="day" required="required" aria-required="true" class="styledS">
												<option value="" selected="selected">Day</option>
												<?php for($i=1;$i<=31; $i++):?>
													<option value="<?php echo $i?>"><?php echo $i?></option>
												<?php endfor;?>
											</select>
											
										</div>
										<div class="wid35">
											<select id="user_data_form_birthdate_year" name="year" required="required" aria-required="true" class="styledS">
												<option value="" selected="selected">Year</option>
												<?php for($i=1926;$i<=1998; $i++):?>
													<option value="<?php echo $i?>"><?php echo $i?></option>
												<?php endfor;?>
											</select>
											</select>
											
										</div>
										<div style="clear: both"></div>
									</div></div>
           	<div id="user_data_form_block_signUpOne" class="form-group">
									<div id="form-panel__form__row--narrow">
										<input class="form-panel__form__check-float" id="agree" name="agree" type="checkbox" required="">
										<label class="form-panel__form__check-text" for="agree"> 
											I agree to and accept the <a href="http://kitchenaid.consumer-testpanel.aussie-survey.com/22/terms-and-conditions.html" class="fancybox">
												Terms and Conditions</a> and <a href="http://kitchenaid.consumer-testpanel.aussie-survey.com/22/privacy.html" class="fancybox">Privacy Policy</a>. 
												I consent to the competition's host, its clients and prize <a href="http://kitchenaid.consumer-testpanel.aussie-survey.com/sponsors.html" class="fancybox">SPONSORS</a>
												 sharing selected information given by me on this site for direct marketing and to contact me by email, phone, text or post with more interesting promotional offers. 
											</label>
									</div>
									<button type="submit" id="user_data_form_signUpOne" name="user_data_form[signUpOne]" autocomplete="off">
										Continue 100% FREE
									</button>
								</div>
								
        </form>
</div>             

<div id="form_panel" class="theAddrForm" style="display:none;">
    <form name="user_data_form" method="post"  id="user_data_form" novalidate="novalidate" class="addssFm" ><div class="form-panel__form__important-message">Complete your registration now! What is your delivery address?</div>
            <div id="user_data_form_block_address" class="form-group">
                                        <input type="text" id="user_data_form_address" name="address" required="required" placeholder="Address NO / Street" autocomplete="off" aria-required="true"></div>
            <div id="user_data_form_block_zipcode" class="form-group">
                                        <input type="text" id="user_data_form_zipcode" name="zipcode" required="required" placeholder="Postcode" autocomplete="off" aria-required="true"></div>
            <div id="user_data_form_block_region" class="form-group">
                                        <input type="text" id="" name="city" required="required" placeholder="City"  autocomplete="off" aria-required="true"></div>
            <div id="user_data_form_block_city" class="form-group" style="display:none;">
                                      <input  type="hidden" id="user_data_form_city" name="region"  value="">
                                        	<input  type="hidden" id="" name="id"  value="">
                                        </div>
            <div id="user_data_form_block_mobilePhonenumber" class="form-group"><div></div>
                                        <input type="text" id="user_data_form_mobilePhonenumber" name="mobilePhonenumber" required="required" placeholder="Mobile phonenumber" autocomplete="off" aria-required="true"></div>
          		<div id="user_data_form_block_signUpTwo" class="form-group">
									<div class="question-one clearfix" data-position="1" data-question-id="73" data-ab-test-id="false">
										<style>
											#question_one_img_73 {
												background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/575106a345090_kogan.jpg");
											}
										</style>
										<div class="question-one-img" id="question_one_img_73"></div>
										<div class="question-one-content">
											<h4 class="question-one-header">Love big discounts?</h4>
											<p class="question-one-text">
												Join Kogan.com now to receive exclusive deals on 1000s of electronics, appliances, homewares, fashion, toys and more!
											</p>
											<div class="question-one-answers type-radio">

	
												<div class="radio">
													<label>
														<input class="answer" name="discount" data-answer-id="156" data-question-id="73" value="1" type="radio">
														<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Yes</label>
												</div>
												<div class="radio">
													<label>
														<input class="answer" name="discount" data-answer-id="174" data-question-id="73" value="0" type="radio">
														<span class="cr"><i class="cr-icon fa fa-circle"></i></span>No</label>
												</div>
											</div><p class="question-one-sub-text"></p></div>
											<br style="clear:both;">
											</div>
                       
        </form>
         <button id="user_data_form_signUpTwo" name="signUpTwo" autocomplete="off">Continue 100% FREE</button></div>
            
</div>
       </div>
                        <div class="form-panel__body hideTotalQ">
                            <div class="form-panel__questions pre-land-questions">
                                <div class="form-panel__questions__header">
                                    <div class="testers__image show-mobile">
                                        <img src="<?php echo base_url()?>assets/kitchenaid/bundles/flowbuildercore/img/kitchen-aid/white-products.png" alt="Kitchen Aid products">
                                    </div>
                                    <div class="form-panel__questions__logo">
                                        <img src="<?php echo base_url()?>assets/kitchenaid/bundles/flowbuildercore/img/kitchen-aid/white-logo.png" alt="Kitchen Aid logo">
                                    </div>
                                    <div class="form-panel__questions__title">Test panel</div>
                                </div>
                                   <div class="pre-land-question-single qh1"  data-question="1" >
                                   					<div class="form-panel__questions__single__title">
									Question 1/4
								</div>
								<div class="form-panel__questions__single__text">
									ARE YOU FAMILIAR WITH KITCHENAID®?
								</div>
								<div class="form-panel__questions__single__answers">
									<a href="javascript:void(0)" class="js pre-land-question-single-button qB1" data-question-id="38" data-answer-id="43" data-next="2">YES</a>
									<a href="javascript:void(0)" class="js pre-land-question-single-button qB1" data-question-id="38" data-answer-id="44" data-next="2">NO</a>
								</div>
								</div>
								<div class="pre-land-question-single qh2" data-question="2" style="display: none;">
									<div class="form-panel__questions__single__title">
										Question 2/4
									</div>
									<div class="form-panel__questions__single__text">
										HOW MANY TIMES A WEEK DO YOU COOK?
									</div>
									<div class="form-panel__questions__single__answers">
										<a href="javascript:void(0)" class="js pre-land-question-single-button qB2" data-question-id="49" data-answer-id="87" data-next="3">1-2 TIMES</a>
										<a href="javascript:void(0)" class="js pre-land-question-single-button qB2" data-question-id="49" data-answer-id="88" data-next="3">3-6 TIMES</a>
										<a href="javascript:void(0)" class="js pre-land-question-single-button qB2" data-question-id="49" data-answer-id="89" data-next="3">7+ TIMES</a>
									</div>
								</div>
								<div class="pre-land-question-single qh3" data-question="3" style="display: none;">
									<div class="form-panel__questions__single__title">
										Question 3/4
									</div>
									<div class="form-panel__questions__single__text">
										DO YOU CUT YOUR VEGETABLES?
									</div>
									<div class="form-panel__questions__single__answers">
										<a href="javascript:void(0)" class="js pre-land-question-single-button qB3" data-question-id="50" data-answer-id="90" data-next="4">YES</a>
										<a href="javascript:void(0)" class="js pre-land-question-single-button qB3" data-question-id="50" data-answer-id="91" data-next="4">NO</a>
									</div>
								</div>
								<div class="pre-land-question-single qh4" data-question="4" style="display: none;">
									<div class="form-panel__questions__single__title">
										Question 4/4
									</div>
									<div class="form-panel__questions__single__text">
										WHAT COLOR KITCHENAID® WOULD YOU PREFER?
									</div>
									<div class="form-panel__questions__single__answers">
										<a href="javascript:void(0)" class="js pre-land-question-single-button qB4" data-question-id="51" data-answer-id="92" data-next="0">RED</a>
										<a href="javascript:void(0)" class="js pre-land-question-single-button qB4" data-question-id="51" data-answer-id="93" data-next="0">BLACK</a>
									</div>

                                    </div>
                                                                <img src="<?php echo base_url()?>assets/kitchenaid/bundles/flowbuildercore/img/kitchen-aid/white-arrow.jpg" alt="Kitchen Aid arrow" class="img-arrow">
                            </div>
                     

                    
                </div>
                            
                        </div>
                        
                    </div>
                    <?php endif;?>
                    <?php if(isset($_GET['next']) && $_GET['next'] === '1'):?>
                    	<div class="container">
			<div class="frame-top__left">
				<div class="frame-top__left__top">
					<!-- ----- START testers ----- -->
					<div class="testers">
						<h1 class="testers__title">Testers wanted</h1>
						<div class="testers__subtitle">
							<span class="testers__subtitle__underlined">Test &amp; Get</span>
							<span class="testers__subtitle__important">Kitchen Aid®</span>
							<span class="testers__subtitle__underlined">products for FREE!</span>
						</div>
						<div class="testers__image hide-mobile">
							<img src="<?php echo base_url()?>assets/kitchenaid/bundles/flowbuildercore/img/kitchen-aid/white-products.png" alt="Kitchen Aid products">
						</div>
					</div>
					<!-- ----- END testers ----- -->
				</div>
				<div class="frame-top__left__bottom">
					<!-- ----- START review ----- -->

					<!-- ----- END review ----- -->
				</div>
			</div>
			<div id="form_questions_block" class="frame-top__right">
				<div id="text_above_questions">
					Please answer these <span>mandatory</span> questions to qualify!
				</div>
				<div class="progress-bar-block">
					<div class="progress">
						<div id="percent">
							31  %
						</div>
						<div id="progress_bar" class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-unanswered-count="47" data-answered-count="1" style="width: 31.4583%;"></div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12">
					<div class="form-panel__body">
						<div id="form_panel">
							<span id="form_questions" style="display: none;"></span>
							<div class="questions-header">
								<div class="questions-logo"></div>
								<div class="questions-title"></div>
							</div>
							<div id="questions">
								<div class="question-one clearfix active" data-position="5" data-question-id="75" data-ab-test-id="false">
									<style>
										#question_one_img_75 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/57510c48643fa_EasyMeals.jpg");
										}
									</style><div class="question-one-img" id="question_one_img_75"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">What FREE meal would you like included with your purchase?</h4>
										<p class="question-one-text">
											Would you like Easy Meals to contact you about their FREE meal promotion and their delicious ready to heat and eat meals available to purchase, delivered FREE right to your door?
										</p>
										<div class="question-one-answers type-dropdown">
											<div class="">
												<select name="Choose" class="answer2 form-control " data-question-id="75">
													<option data-answer-id="" value="">Please Select:</option>
													<option data-answer-id="164" value="164">Italian meatballs and pasta</option>
													<option data-answer-id="165" value="165">Lamb shank</option>
													<option data-answer-id="175" value="175">Beef stroganoff</option>
													<option data-answer-id="176" value="176">Apricot chicken</option>
													<option data-answer-id="177" value="177">Not interested</option>
												</select>
												
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix active" data-position="6" data-question-id="74" data-ab-test-id="false">
									<style>
										#question_one_img_74 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/575eae6bab427_cruise-megastore.jpg");
										}
									</style><div class="question-one-img" id="question_one_img_74"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Want access to the BEST DEALS on worldwide cruises &amp; travel?</h4>
										<p class="question-one-text">
											Simply select where in the world you would like to travel and Cruise Megastore will call you back with an unbelievable offer! Plus receive a FREE $100 cruise voucher.
										</p>
										<div class="question-one-answers type-radio">
											<div class="radio">
												<label>
													<input class="answer" name="q74" data-answer-id="157" data-question-id="74" value="157" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Pacific Islands</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q74" data-answer-id="158" data-question-id="74" value="158" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Europe</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q74" data-answer-id="159" data-question-id="74" value="159" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Alaska</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q74" data-answer-id="160" data-question-id="74" value="160" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>NZ/Australia</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q74" data-answer-id="161" data-question-id="74" value="161" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Asia</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q74" data-answer-id="162" data-question-id="74" value="162" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Other</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q74" data-answer-id="163" data-question-id="74" value="163" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Not Interested</label>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix active" data-position="10" data-question-id="69" data-ab-test-id="false">
									<style>
										#question_one_img_69 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/575102999e187_cancer-council-nsw.jpg");
										}
									</style><div class="question-one-img" id="question_one_img_69"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Support Cancer Council</h4>
										<p class="question-one-text">
											Thanks to people like you, Cancer Council NSW is helping turn the tide on cancer. However, with over 300 Australians diagnosed every day, we desperately need your help to fund the vital research that will potentially beat this horrible disease. Tick yes to find out how you can help beat cancer?
										</p>
										<div class="question-one-answers type-radio">
											<div class="radio">
												<label>
													<input class="answer" name="q69" data-answer-id="149" data-question-id="69" value="149" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Yes</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q69" data-answer-id="150" data-question-id="69" value="150" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>No</label>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix active" data-position="12" data-question-id="144" data-ab-test-id="false">
									<style>
										#question_one_img_144 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/5790b24d6e717_osa-lotteries.jpg");
										}
									</style><div class="question-one-img" id="question_one_img_144"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Do you play lotteries?</h4>
										<p class="question-one-text">
											Tick YES to find out how to play the biggest draws in the world.
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="352" data-question-id="144">Yes</a><a class="answer btn btn-no" data-answer-id="353" data-question-id="144">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="13" data-question-id="117" data-ab-test-id="false">
									<style>
										#question_one_img_117 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/577a3092a8834_carnival-cruise.jpeg");
										}
									</style><div class="question-one-img" id="question_one_img_117"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Want the latest cruise deals delivered straight to your inbox?</h4>
										<p class="question-one-text">
											Sign up to Carnival Cruise Line's newsletter to keep up to date with all of our current specials!
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="283" data-question-id="117">Yes</a><a class="answer btn btn-no" data-answer-id="284" data-question-id="117">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="16" data-question-id="126" data-ab-test-id="false">
									<style>
										#question_one_img_126 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/57837fb03e254_dodo.gif");
										}
									</style><div class="question-one-img" id="question_one_img_126"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Pump up your data with Dodo’s Red Hot Mobile Plan.</h4>
										<p class="question-one-text">
											2GB of data just $17.90 p/m (sim only). $24.90 p&amp;h. Click yes to receive a call about this offer.
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="303" data-question-id="126">Yes</a><a class="answer btn btn-no" data-answer-id="304" data-question-id="126">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="18" data-question-id="105" data-ab-test-id="false">
									<style>
										#question_one_img_105 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/5762b16568ec1_call-centre-logo.gif");
										}
									</style><div class="question-one-img" id="question_one_img_105"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">XTrade: get a free bonus of $20 to spend on Forex trading?</h4>
										<p class="question-one-text">
											Receive a call from an XTrade professional to learn more about online trading and help to get started?
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="250" data-question-id="105">Yes</a><a class="answer btn btn-no" data-answer-id="251" data-question-id="105">No</a>
											</div>
										</div>
										<p class="question-one-sub-text">
											*Trading involves risk
										</p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="20" data-question-id="45" data-ab-test-id="false">
									<style>
										#question_one_img_45 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/5745c39ad95a7_Careers Australia logo.jpg");
										}
									</style><div class="question-one-img" id="question_one_img_45"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Looking for a new career or a new job?</h4>
										<p class="question-one-text">
											Learn the skills you need with a wide range of nationally recognised courses. With flexible financial options including VET FEE-HELP, Careers Australia can help you achieve.
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="104" data-question-id="45">Yes</a><a class="answer btn btn-no" data-answer-id="105" data-question-id="45">No</a>
											</div>
										</div>
										<p class="question-one-sub-text">
											Careers Australia Education Institute Pty Ltd ABN 76 120 675 505, RTO 22479, CRICOS 03224D.
											Careers Australia Institute of Training Pty Ltd ABN 30 122 082 204, RTO 31470, CRICOS 03026K.
										</p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="21" data-question-id="42" data-ab-test-id="false">
									<style>
										#question_one_img_42 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/575ad5fbd3a2f_freesamplegiveaway-logo.svg");
										}
									</style><div class="question-one-img" id="question_one_img_42"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Love getting things for FREE?</h4>
										<p class="question-one-text">
											FreeSampleGiveaway is Australia’s brand new destination for people who want to try new products from big brands for free! Tick YES to join FreeSampleGiveaway for FREE &amp; we’ll email your first free samples &amp; more straight away!
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="98" data-question-id="42">Yes</a><a class="answer btn btn-no" data-answer-id="99" data-question-id="42">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="22" data-question-id="151" data-ab-test-id="false">
									<style>
										#question_one_img_151 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/57a4c74206031_InsuranceLine.jpg");
										}
									</style><div class="question-one-img" id="question_one_img_151"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Everybody's family is unique and your insurance cover should reflect this</h4>
										<p class="question-one-text">
											Protect your family your way with Insurance from InsuranceLine. Tick all that apply to find out more.
										</p>
										<div class="question-one-answers type-dropdown">
											<div class="select">
												<select name="Choose" class="answer form-control s-hidden" data-question-id="151">
													<option data-answer-id="" value="">Choose</option><option data-answer-id="366" value="366">Funeral</option><option data-answer-id="367" value="367">Life</option><option data-answer-id="368" value="368">Income</option><option data-answer-id="369" value="369">No thanks</option>
												</select>
												<div class="answer styledSelect form-control" data-question-id="151">
													Choose
												</div>
												<ul class="options defaultSelect" style="display: none;">
													<li value="" data-answer-id="">
														Choose
													</li>
													<li value="366" data-answer-id="366">
														Funeral
													</li>
													<li value="367" data-answer-id="367">
														Life
													</li>
													<li value="368" data-answer-id="368">
														Income
													</li>
													<li value="369" data-answer-id="369">
														No thanks
													</li>
												</ul>
											</div>
										</div>
										<p class="question-one-sub-text">
											Insurance Issued by TAL Life Limited and Involuntary Unemployment cover issued by St. Andrew's Insurance (Australia) Pty Ltd. Please read the PDS.
										</p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="24" data-question-id="152" data-ab-test-id="false">
									<style>
										#question_one_img_152 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/57a79cea7ad94_reject store.jpg");
										}
									</style><div class="question-one-img" id="question_one_img_152"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Never miss a good deal again!</h4>
										<p class="question-one-text">
											Click YES to become a Savvy Shopper and be the first to receive HOT offers and keep up to date with what’s new in store
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="370" data-question-id="152">Yes</a><a class="answer btn btn-no" data-answer-id="371" data-question-id="152">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="25" data-question-id="132" data-ab-test-id="false">
									<style>
										#question_one_img_132 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/57851c633e7b6_logocheapflights.jpg");
										}
									</style><div class="question-one-img" id="question_one_img_132"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Find the best flight, hotel, cruise and travel deals with emails from Cheapflights!</h4>
										<p class="question-one-text">
											Do you want to join 11 million+ other savvy travellers and sign up now?
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="313" data-question-id="132">Yes</a><a class="answer btn btn-no" data-answer-id="314" data-question-id="132">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="26" data-question-id="135" data-ab-test-id="false">
									<style>
										#question_one_img_135 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/578663e171b2d_platinum-holiday-club.jpg");
										}
									</style><div class="question-one-img" id="question_one_img_135"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Platinum Holiday Club can provide $2000 towards your next holiday, to hear more tell us where you want to go:</h4><p class="question-one-text"></p>
										<div class="question-one-answers type-radio">
											<div class="radio">
												<label>
													<input class="answer" name="q135" data-answer-id="319" data-question-id="135" value="319" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Australia</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q135" data-answer-id="320" data-question-id="135" value="320" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>New Zealand</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q135" data-answer-id="321" data-question-id="135" value="321" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Fiji</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q135" data-answer-id="322" data-question-id="135" value="322" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Asia</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q135" data-answer-id="323" data-question-id="135" value="323" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Vanuatu</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q135" data-answer-id="324" data-question-id="135" value="324" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Cook Islands</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q135" data-answer-id="325" data-question-id="135" value="325" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Samoa</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q135" data-answer-id="326" data-question-id="135" value="326" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Not interested</label>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="28" data-question-id="112" data-ab-test-id="false">
									<style>
										#question_one_img_112 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/57717996c9491_logo-virgin-money.gif");
										}
									</style><div class="question-one-img" id="question_one_img_112"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Protect what matters most to you when things don’t go your way.</h4>
										<p class="question-one-text">
											Select the products for which you would like to receive a quote.
										</p>
										<div class="question-one-answers type-radio">
											<div class="radio">
												<label>
													<input class="answer" name="q112" data-answer-id="272" data-question-id="112" value="272" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Virgin Income Protection</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q112" data-answer-id="273" data-question-id="112" value="273" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Virgin Life Insurance</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q112" data-answer-id="274" data-question-id="112" value="274" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>No thanks</label>
											</div>
										</div>
										<p class="question-one-sub-text">
											Insurance issued by TAL Life Limited and Involuntary Unemployment cover issued by St Andrew’s Insurance (Australia) Pty Ltd. <a href="http://virginmoney.com.au/downloads/life-insurance/life_insurance_PDS.pdf" target="_blank">Please read the PDS. </a>
										</p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="30" data-question-id="110" data-ab-test-id="false">
									<style>
										#question_one_img_110 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/5788f1d967666_prizereactor.jpg");
										}
									</style><div class="question-one-img" id="question_one_img_110"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">How would you like $1000 to spend? At Aldi or for a Samsung Galaxy S6?</h4>
										<p class="question-one-text">
											Spare a few minutes to participate in a short consumer survey, in return for a chance to win! What are you waiting for?
										</p>
										<div class="question-one-answers type-radio">
											<div class="radio">
												<label>
													<input class="answer" name="q110" data-answer-id="329" data-question-id="110" value="329" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Aldi</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q110" data-answer-id="330" data-question-id="110" value="330" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Samsung Galaxy S6</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q110" data-answer-id="331" data-question-id="110" value="331" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>No thanks</label>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="32" data-question-id="113" data-ab-test-id="false">
									<style>
										#question_one_img_113 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/57717e3854683_nrma-insurance.png");
										}
									</style><div class="question-one-img" id="question_one_img_113"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">It's better knowing your family's future is protected..</h4>
										<p class="question-one-text">
											That's NRMADE BETTER! If you're considering any of these products, tick all that apply to receive more information.
										</p>
										<div class="question-one-answers type-radio">
											<div class="radio">
												<label>
													<input class="answer" name="q113" data-answer-id="275" data-question-id="113" value="275" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Life Insurance</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q113" data-answer-id="276" data-question-id="113" value="276" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Income Protection Insurance</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q113" data-answer-id="278" data-question-id="113" value="278" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>No Thanks</label>
											</div>
										</div>
										<p class="question-one-sub-text">
											Insurance Issued by TAL Life Limited and Involuntary Unemployment cover issued by St. Andrew's Insurance (Australia) Pty Ltd. <a href="http://www.nrma.com.au/lifeinsurancegift" target="_blank">Please read the PDS.</a>
										</p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="33" data-question-id="143" data-ab-test-id="false">
									<style>
										#question_one_img_143 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/578df1f713b32_wotif-cohort.png");
										}
									</style><div class="question-one-img" id="question_one_img_143"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Wotif</h4>
										<p class="question-one-text">
											Sign me up to access Wotif Mates Rates (that’ll save me up to 50% on some of Wotif's fave hotels) and send me awesome travel deals.
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="350" data-question-id="143">Yes</a><a class="answer btn btn-no" data-answer-id="351" data-question-id="143">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="34" data-question-id="149" data-ab-test-id="false">
									<style>
										#question_one_img_149 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/57a4a06f57ed5_CareersNow logo.PNG");
										}
									</style><div class="question-one-img" id="question_one_img_149"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Looking for ways to achieve your career goals faster with help of a specialised Diploma?</h4>
										<p class="question-one-text">
											Uni fees too high? You now can take advantage of Fully Funded Diploma courses in Business, Management, Counselling, Marketing and lots more! Study now and only pay once you start earning $53,000 pa! Click yes to get a call from our friendly consultants, and ask us about our enrolment offers for 2016!
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="362" data-question-id="149">Yes</a><a class="answer btn btn-no" data-answer-id="363" data-question-id="149">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="38" data-question-id="123" data-ab-test-id="false">
									<style>
										#question_one_img_123 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/57836cc1a0d28_Life-Insurance.jpg");
										}
									</style><div class="question-one-img" id="question_one_img_123"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Do you have Life Insurance?</h4><p class="question-one-text"></p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="297" data-question-id="123">Yes</a><a class="answer btn btn-no" data-answer-id="298" data-question-id="123">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="47" data-question-id="118" data-ab-test-id="false">
									<style>
										#question_one_img_118 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/577a7e5f32765_nicola-knows.jpg");
										}
									</style><div class="question-one-img" id="question_one_img_118"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Request your free horoscope reading!</h4>
										<p class="question-one-text">
											I, Nicola, am happy to prepare your personal horoscope for free. Find out what the stars are saying about you today! Select an area of concern which leaves you most unfulfilled:
										</p>
										<div class="question-one-answers type-radio">
											<div class="radio">
												<label>
													<input class="answer" name="q118" data-answer-id="285" data-question-id="118" value="285" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Love &amp; Romance</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q118" data-answer-id="286" data-question-id="118" value="286" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Wealth &amp; Money</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q118" data-answer-id="287" data-question-id="118" value="287" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Health &amp; Family</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q118" data-answer-id="288" data-question-id="118" value="288" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>I don’t want a free reading</label>
											</div>
										</div>
										<p class="question-one-sub-text">
											Who we are: Astrologist, Psychic &amp; Universal Medium
											What we do: Nicola has helped so many with their deepest wish, let her reveal your love, money, and luck secrets today.

											<a href="http://nicolaknows.com/pages/AU/terms-nicola.html" target="_blank">Terms</a> - <a href="http://nicolaknows.com/pages/AU/privacy.html" target="_blank">Privacy Policy</a>
										</p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="48" data-question-id="61" data-ab-test-id="false">
									<style>
										#question_one_img_61 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/5748759b3665e_aussie-giveaways");
										}
									</style><div class="question-one-img" id="question_one_img_61"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Want to win $10,000 Cash or Shopping Voucher?</h4>
										<p class="question-one-text">
											Tick Yes to Join Aussie Giveaways for the latest Competitions, Deals, Paid Surveys &amp; Free Samples from the big brands. Confirm your email for a chance to Win $10,000 Cash or Shopping Voucher. Free to Join!
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="134" data-question-id="61">Yes</a><a class="answer btn btn-no" data-answer-id="135" data-question-id="61">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="51" data-question-id="98" data-ab-test-id="false">
									<style>
										#question_one_img_98 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/575dd767ce9e6_Toluna.jpg");
										}
									</style><div class="question-one-img" id="question_one_img_98"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Earn prizes with online paid surveys?</h4>
										<p class="question-one-text">
											Your opinion is valuable to us, and can earn you Toluna points that can be exchanged for e-gift cards, new gadgets, shopping vouchers or entrance to $2000 monthly prize draw! Tick yes to join Toluna and verify your email address to get 500 points for free.
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="247" data-question-id="98">Yes</a><a class="answer btn btn-no" data-answer-id="248" data-question-id="98">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="52" data-question-id="150" data-ab-test-id="false">
									<style>
										#question_one_img_150 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/57a4715cf1138_supersearch.PNG");
										}
									</style><div class="question-one-img" id="question_one_img_150"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Do you have any Lost Superannuation? Australian’s have over 18 Billion dollars in Lost super, is any of this yours?</h4>
										<p class="question-one-text">
											Super Search locates your lost super and consolidates all your super into one single fund.  Select Yes if you would like to find and consolidate your Lost super.
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="364" data-question-id="150">Yes</a><a class="answer btn btn-no" data-answer-id="365" data-question-id="150">no</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="59" data-question-id="65" data-ab-test-id="false">
									<style>
										#question_one_img_65 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/5750290038b08_Casino-logo.png");
										}
									</style><div class="question-one-img" id="question_one_img_65"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Interested in Gambling, Casino, Lottery?</h4>
										<p class="question-one-text">
											Hit the YES button and receive exclusive promotions and FREE slots from Money Market
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="142" data-question-id="65">Yes</a><a class="answer btn btn-no" data-answer-id="143" data-question-id="65">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="60" data-question-id="88" data-ab-test-id="false">
									<style>
										#question_one_img_88 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/5756b8875680e_yomojo-logo.jpeg");
										}
									</style><div class="question-one-img" id="question_one_img_88"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">From ONLY $5 per month build your OWN mobile plan with NO lock in contracts.</h4>
										<p class="question-one-text">
											Tick YES if you are not on a mobile contract to hear from Yomojo mobile.
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="200" data-question-id="88">Yes</a><a class="answer btn btn-no" data-answer-id="201" data-question-id="88">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="61" data-question-id="53" data-ab-test-id="false">
									<style>
										#question_one_img_53 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/574466af48c98_Simply Energy Logo.jpg");
										}
									</style><div class="question-one-img" id="question_one_img_53"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Simple Energy</h4>
										<p class="question-one-text">
											Sign up to Simply Energy and save up to 35% when you pay your bills on time*. Receive a call today!
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="118" data-question-id="53">Yes</a><a class="answer btn btn-no" data-answer-id="119" data-question-id="53">No</a>
											</div>
										</div>
										<p class="question-one-sub-text">
											*Terms and conditions apply, see simplyenergy.com.au for full details. Discounts will only apply to energy usage charges of Simply Energy's market contract rates when you pay your bills on time and will not apply to other charges including but not limited to termination fees and will be applied before concessions and GST and will appear as a separate credit (GST exclusive) on bills. Market rates may be varied in accordance with the contract terms.
										</p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="62" data-question-id="55" data-ab-test-id="false">
									<style>
										#question_one_img_55 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/5744685622237_Simply Energy Logo.jpg");
										}
									</style><div class="question-one-img" id="question_one_img_55"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Catch this great energy offer 20% off electricity usage and 10% off gas usage charges when you pay on time*.</h4>
										<p class="question-one-text">
											Would you like to receive a call from Simply Energy?
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="120" data-question-id="55">Yes</a><a class="answer btn btn-no" data-answer-id="121" data-question-id="55">No</a>
											</div>
										</div>
										<p class="question-one-sub-text">
											*Terms and conditions apply, see simplyenergy.com.au/raa for details. Discounts only apply to usage component of Simply Energy’s market contract rates. Offer only available to residential customers in SA. Market rates may be varied in accordance with the contract terms. 2 year fixed term. Early termination fees apply.
										</p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="63" data-question-id="54" data-ab-test-id="false">
									<style>
										#question_one_img_54 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/5744678a9f328_Simply Energy Logo.jpg");
										}
									</style><div class="question-one-img" id="question_one_img_54"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Sign up to Simply Energy!</h4>
										<p class="question-one-text">
											Get 20% off the consumption component of the electricity rates for every electricity bill paid on time.
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="122" data-question-id="54">Yes</a><a class="answer btn btn-no" data-answer-id="123" data-question-id="54">No</a>
											</div>
										</div>
										<p class="question-one-sub-text">
											*Terms and conditions apply, see simplyenergy.com.au for full details. Discounts will only apply to energy consumption component of Simply Energy's market contract rates and will not apply to other charges including but not limited to supply charges and termination fees. Discounts will also be applied before concessions and GST and will appear as a separate credit (GST exclusive) on bills. If you are an existing Simply Energy customer, the rates for this new offer may not be the same as the rates for your current offer. Market rates may be varied in accordance with the contract terms. These offers are not available to customers with solar panels.
										</p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="65" data-question-id="114" data-ab-test-id="false">
									<style>
										#question_one_img_114 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/5772c9fbcaa79_simplesite.gif");
										}
									</style><div class="question-one-img" id="question_one_img_114"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Get Your Own Free Website</h4>
										<p class="question-one-text">
											SimpleSite is right now offering you a Gift Card for a Free Website, Blog or Online Store! If you sign up now then the site is Free Forever.
											A Website with SimpleSite is Easy to set up using our 100+ Unique Templates. Furthermore it is SEO Optimized, Great for Business, Optimized for Mobile – and then we have Great Customer Service :-)
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="279" data-question-id="114">Yes</a><a class="answer btn btn-no" data-answer-id="280" data-question-id="114">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="68" data-question-id="84" data-ab-test-id="false">
									<style>
										#question_one_img_84 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/57553269ea704_lets-insure.png");
										}
									</style><div class="question-one-img" id="question_one_img_84"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">SAVE UP TO 50% on your Funeral Insurance premiums.</h4>
										<p class="question-one-text">
											Tick yes for a FREE QUOTE from Let’s Insure
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="192" data-question-id="84">Yes</a><a class="answer btn btn-no" data-answer-id="193" data-question-id="84">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="69" data-question-id="148" data-ab-test-id="false">
									<style>
										#question_one_img_148 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/57a0efd787363_mysurveylogo.jpg");
										}
									</style><div class="question-one-img" id="question_one_img_148"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Earn Coles &amp; Myer gift cards by completing surveys online!</h4><p class="question-one-text"></p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="360" data-question-id="148">Yes</a><a class="answer btn btn-no" data-answer-id="361" data-question-id="148">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="70" data-question-id="50" data-ab-test-id="false">
									<style>
										#question_one_img_50 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/5741d779363d8_scratch_mania_200x90.jpg");
										}
									</style><div class="question-one-img" id="question_one_img_50"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Play and win up to $200,000!</h4>
										<p class="question-one-text">
											We are the no. 1 site for Scratch Cards, Slots and Instant Win games.
											Deposit NOW! Every 3rd card wins! Click “Yes” to receive all the incredible player benefits straight to your inbox.
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="112" data-question-id="50">Yes</a><a class="answer btn btn-no" data-answer-id="113" data-question-id="50">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="106" data-question-id="63" data-ab-test-id="false">
									<style>
										#question_one_img_63 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/57487b0b404a1_primeslots-logo.jpeg");
										}
									</style><div class="question-one-img" id="question_one_img_63"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Join Prime Slots Now &amp; Receive 110 Free spins!</h4>
										<p class="question-one-text">
											Prime Slots is the best place for all your slot games and fruit machines.
											Click Yes to receive 110 Free spins and a chance to win 200,000$!
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="136" data-question-id="63">Yes</a><a class="answer btn btn-no" data-answer-id="137" data-question-id="63">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="110" data-question-id="41" data-ab-test-id="false">
									<style>
										#question_one_img_41 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/573b6043e5f13_aussie-contest-120x60.png");
										}
									</style><div class="question-one-img" id="question_one_img_41"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Interested in winning FREE electronics, holidays, gift cards and much more?</h4>
										<p class="question-one-text">
											Join AussieContests - Australia's most fun guide to internet competitions. 100% free.
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="96" data-question-id="41">Yes</a><a class="answer btn btn-no" data-answer-id="97" data-question-id="41">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="111" data-question-id="96" data-ab-test-id="false">
									<style>
										#question_one_img_96 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/575a847591a9d_Real-Estate-Talk.jpeg");
										}
									</style><div class="question-one-img" id="question_one_img_96"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Interested in financial freedom through property investment?</h4>
										<p class="question-one-text">
											Subscribe to Real Estate Talk for updates from property experts, market trends, investments, money &amp; more!
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="219" data-question-id="96">Yes</a><a class="answer btn btn-no" data-answer-id="220" data-question-id="96">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="112" data-question-id="37" data-ab-test-id="false">
									<style>
										#question_one_img_37 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/573341700611f_leovegas.png");
										}
									</style><div class="question-one-img" id="question_one_img_37"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Get $700 bonus + 200 Free Spins with Leo Vegas!</h4>
										<p class="question-one-text">
											LeoVegas has now launched in Australia and offers you a completely new experience when it comes to online pokies! - Tick Yes for more information and get $700 bonus + 200 Free Spins!
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="88" data-question-id="37">Yes</a><a class="answer btn btn-no" data-answer-id="89" data-question-id="37">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="113" data-question-id="36" data-ab-test-id="false">
									<style>
										#question_one_img_36 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/57334087995c9_bingozcar.jpg");
										}
									</style><div class="question-one-img" id="question_one_img_36"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">BingoCzar offers you the best online Bingo games and bonuses available.</h4>
										<p class="question-one-text">
											Would you like to be part of the Bingo fun and receive a FREE $30 No Deposit Bonus and other exclusive Bingo Offers from BingoCzar?
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="85" data-question-id="36">Yes</a><a class="answer btn btn-no" data-answer-id="86" data-question-id="36">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="114" data-question-id="82" data-ab-test-id="false">
									<style>
										#question_one_img_82 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/576dd1efed2b7_blank-logo.jpg");
										}
									</style><div class="question-one-img" id="question_one_img_82"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Would you consider supporting any of the following charity organisations?</h4><p class="question-one-text"></p>
										<div class="question-one-answers type-grid">
											<div>
												<div class="checkbox">
													<label>
														<input value="181" type="checkbox">
														<span class="cr"><i class="cr-icon fa fa-check"></i></span>Australian Red Cross</label>
												</div>
												<div class="checkbox">
													<label>
														<input value="182" type="checkbox">
														<span class="cr"><i class="cr-icon fa fa-check"></i></span>CanTeen</label>
												</div>
												<div class="checkbox">
													<label>
														<input value="183" type="checkbox">
														<span class="cr"><i class="cr-icon fa fa-check"></i></span>World Animal Protection</label>
												</div>
												<div class="checkbox">
													<label>
														<input value="184" type="checkbox">
														<span class="cr"><i class="cr-icon fa fa-check"></i></span>Greenpeace</label>
												</div>
												<div class="checkbox">
													<label>
														<input value="185" type="checkbox">
														<span class="cr"><i class="cr-icon fa fa-check"></i></span>WWF Australia</label>
												</div>
												<div class="checkbox">
													<label>
														<input value="186" type="checkbox">
														<span class="cr"><i class="cr-icon fa fa-check"></i></span>Cancer Council NSW</label>
												</div>
												<div class="checkbox">
													<label>
														<input value="194" type="checkbox">
														<span class="cr"><i class="cr-icon fa fa-check"></i></span>Amnesty International</label>
												</div>
												<div class="checkbox">
													<label>
														<input value="195" type="checkbox">
														<span class="cr"><i class="cr-icon fa fa-check"></i></span>Wilderness Society</label>
												</div>
												<div class="checkbox">
													<label>
														<input value="208" type="checkbox">
														<span class="cr"><i class="cr-icon fa fa-check"></i></span>Christian Blind Mission</label>
												</div>
												<div class="checkbox">
													<label>
														<input value="209" type="checkbox">
														<span class="cr"><i class="cr-icon fa fa-check"></i></span>Australian Conservation Foundation</label>
												</div>
												<div class="checkbox">
													<label>
														<input value="244" type="checkbox">
														<span class="cr"><i class="cr-icon fa fa-check"></i></span>CareFlight</label>
												</div>
											</div>
											<button type="button" class="choose_grid btn btn-success" data-question-id="82">
												Support
											</button>
											<button type="button" class="skip_grid btn btn-link" data-question-id="82">
												Skip
											</button>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="115" data-question-id="103" data-ab-test-id="false">
									<style>
										#question_one_img_103 {
											background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/575ec6ae6c7d6_tara.jpg");
										}
									</style><div class="question-one-img" id="question_one_img_103"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">TARA the Visionary Medium, is offering a FREE, COMPLETE AND PERSONALISED READING.</h4>
										<p class="question-one-text">
											Subscribe now without waiting and receive your free, detailed and in-depth reading what is your dearest wish?
										</p>
										<div class="question-one-answers type-radio">
											<div class="radio">
												<label>
													<input class="answer" name="q103" data-answer-id="238" data-question-id="103" value="238" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Love</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q103" data-answer-id="239" data-question-id="103" value="239" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Money</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q103" data-answer-id="240" data-question-id="103" value="240" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Family</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q103" data-answer-id="241" data-question-id="103" value="241" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Work</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q103" data-answer-id="242" data-question-id="103" value="242" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Luck</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q103" data-answer-id="243" data-question-id="103" value="243" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Vitality</label>
											</div>
											<div class="radio">
												<label>
													<input class="answer" name="q103" data-answer-id="249" data-question-id="103" value="249" type="radio">
													<span class="cr"><i class="cr-icon fa fa-circle"></i></span>Not interested</label>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="119" data-question-id="95" data-ab-test-id="false">
									<style>
#question_one_img_95 {background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/5758a0cc040ea_opinions-world.jpeg");}
									</style><div class="question-one-img" id="question_one_img_95"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Join OpinionWorld for your chance to win $5000 cash!</h4>
										<p class="question-one-text">
											Complete a survey with OpinionWorld for your chance to win today. While voicing your opinion, you will earn cash and a variety of brand vouchers, including Amazon.com, JB Hi-Fi, Target, Kmart, Myer, Bunnings etc. Plus you will also have a chance to win our quarterly cash prize of $5000!
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="217" data-question-id="95">Yes</a><a class="answer btn btn-no" data-answer-id="218" data-question-id="95">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="120" data-question-id="47" data-ab-test-id="false">
									<style>
#question_one_img_47 {background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/573b67b8931f5_coreg-nn-woolworth.png");}
									</style><div class="question-one-img" id="question_one_img_47"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Woolworths survey</h4>
										<p class="question-one-text">
											Win a $500AUD Woolworths voucher in 3 questions, interested?
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="108" data-question-id="47">Yes</a><a class="answer btn btn-no" data-answer-id="109" data-question-id="47">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="122" data-question-id="115" data-ab-test-id="false">
									<style>
#question_one_img_115 {background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/5773ba35ae549_karamba.png");}
									</style><div class="question-one-img" id="question_one_img_115"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Join  the Karamba party today!</h4>
										<p class="question-one-text">
											Are you ready to start the Karamba party with 100 EXTRA SPINS?
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="281" data-question-id="115">Yes</a><a class="answer btn btn-no" data-answer-id="282" data-question-id="115">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="123" data-question-id="39" data-ab-test-id="false">
									<style>
#question_one_img_39 {background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/573341b6e7dac_bonus1.jpg");}
									</style><div class="question-one-img" id="question_one_img_39"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Would you like to get a 300% Bonus on your first deposit for Online Casino / Slots / Bingo?</h4>
										<p class="question-one-text">
											If you are interested hit the yes button!
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="92" data-question-id="39">Yes</a><a class="answer btn btn-no" data-answer-id="93" data-question-id="39">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="124" data-question-id="4" data-ab-test-id="false">
									<style>
#question_one_img_4 {background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/57334b8e86f9d_Schermafbeelding 2016-05-11 om 17.10.25.jpg");}
									</style><div class="question-one-img" id="question_one_img_4"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">What is your current employment status:</h4><p class="question-one-text"></p>
										<div class="question-one-answers type-dropdown">
											<div class="select">
												<select name="Choose" class="answer form-control s-hidden" data-question-id="4">
													<option data-answer-id="" value="">Choose</option><option data-answer-id="7" value="7">Unemployed or Looking for Work</option><option data-answer-id="8" value="8">Full Time Employed</option><option data-answer-id="9" value="9">Part Time Employed</option><option data-answer-id="10" value="10">Casual / Temp</option><option data-answer-id="11" value="11">I'm still studying</option><option data-answer-id="87" value="87">Not applicable</option>
												</select>
												<div class="answer styledSelect form-control" data-question-id="4">
													Choose
												</div>
												<ul class="options defaultSelect" style="display: none;">
													<li value="" data-answer-id="">
														Choose
													</li>
													<li value="7" data-answer-id="7">
														Unemployed or Looking for Work
													</li>
													<li value="8" data-answer-id="8">
														Full Time Employed
													</li>
													<li value="9" data-answer-id="9">
														Part Time Employed
													</li>
													<li value="10" data-answer-id="10">
														Casual / Temp
													</li>
													<li value="11" data-answer-id="11">
														I'm still studying
													</li>
													<li value="87" data-answer-id="87">
														Not applicable
													</li>
												</ul>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="125" data-question-id="44" data-ab-test-id="false">
									<style>
#question_one_img_44 {background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/573446216c126_home-owner.jpg");}
									</style><div class="question-one-img" id="question_one_img_44"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Are you a home owner?</h4><p class="question-one-text"></p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="102" data-question-id="44">Yes</a><a class="answer btn btn-no" data-answer-id="103" data-question-id="44">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="126" data-question-id="43" data-ab-test-id="false">
									<style>
#question_one_img_43 {background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/573343d508742_Schermafbeelding 2016-05-11 om 11.55.44.jpg");}
									</style><div class="question-one-img" id="question_one_img_43"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Would you like to earn over $1926.50 per day from home?</h4>
										<p class="question-one-text">
											Click the yes button if you are interested!
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="100" data-question-id="43">Yes</a><a class="answer btn btn-no" data-answer-id="101" data-question-id="43">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
								<div class="question-one clearfix" data-position="127" data-question-id="46" data-ab-test-id="false">
									<style>
#question_one_img_46 {background-image: url("http://kitchenaid.consumer-testpanel.aussie-survey.com/images/questions/573b602bc0c79_coreg-nn.png");}
									</style><div class="question-one-img" id="question_one_img_46"></div>
									<div class="question-one-content">
										<h4 class="question-one-header">Work opportunity</h4>
										<p class="question-one-text">
											Would you like to earn an extra $1750 per week?
										</p>
										<div class="question-one-answers type-fresh-button">
											<div class="btn-group">
												<a class="answer btn btn-yes" data-answer-id="106" data-question-id="46">Yes</a><a class="answer btn btn-no" data-answer-id="107" data-question-id="46">No</a>
											</div>
										</div><p class="question-one-sub-text"></p>
									</div>
									<br style="clear:both;">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
                    	<?php endif;?>
                </div>
            </div>
        
        
        
        
        
        
            <!-- ----- END frame-top ----- -->

    <!-- ----- START loader ----- -->
    <div class="js loader">
        <div class="loader__content">
            <h1 class="loader__title">You have been selected!</h1>
            <h2>We are forwarding you to confirm</h2>
            <img src="<?php echo base_url()?>assets/kitchenaid/bundles/flowbuildercore/img/kitchen-aid/loader.gif" class="loader__gif">
        </div>
    </div>
    <!-- ----- END loader ----- -->
    


    <div class="footer-wrapper"></div>
    <footer>
        <!-- ----- START frame-info ----- -->
        <div class="js frame-info">
            <div class="container">
                <h2 class="frame-info__visitors">
                    There are: <span class="js frame-info__visitors__number">9</span> visitors on this site
                </h2>
                <h2 class="frame-info__packages">
                    <span class="js frame-info__packages__number">4</span> test packages left
                </h2>
            </div>
        </div>
        <!-- ----- END frame-info ----- -->

        <p id="legal_text" style="display: block;">
            <b>The specified brand / company is neither the organizers nor a sponsor of this campaign and has no business relationship with the organizer.</b><br>
            Survey House Ltd. collects and handles your information under the Privacy Act 1988 rules. When you register your details, enter a consumer test panel or submit a questionnaire including your preferences (Your Details) you agree to Survey House Ltd. using Your Details and supplying them to other organizations (who may be located overseas in a wide range of countries including NZ, US, EU and Philippines), for purposes of: -sending you information, offers and promotions about products and services based on your preferences and any prize notification (Offers) by email, phone/SMS/MMS or email; -incorporating Your Details in any information products and information management services to provide to Survey House Ltd. clients; and -administering Your Details including improving and personalizing Offers, verifying and assessing your identity, maintain and updating records or until you opt out from the named organization or preferred supplier. We may also collect information from other sources such as your browser information from cookies and other technology to add to Your Details. When you respond to a question from a named organization in an Offer you expressly consent to that organization using Your Details to contact you for Offers. You agree that we can use Your Details for an indefinite period until you notify us or opt out from receiving Offers. Generally, Survey House Ltd. is not affiliated with, sponsored by or endorsed by companies from whom we obtain the test products or promote vouchers of. We do receive marketing fees from organizations placing Offers in our questionnaires including financial institutions. You should always read their terms and conditions and any product disclosure statement. The campaign is a consumer test panel or competition in which chance plays no part in determining participants who will receive the test product OR stated voucher value in Australian dollars. Receiving of the test product OR stated voucher value is not guaranteed.
        </p>
        <ul>
            <li> &copy; 2016 SurveyHouse </li>
            <li> <a href="http://kitchenaid.consumer-testpanel.aussie-survey.com/sponsors.html" class="fancybox">Sponsors</a> </li>
            <li> <a href="http://kitchenaid.consumer-testpanel.aussie-survey.com/22/terms-and-conditions.html" class="fancybox">Terms &amp; Conditions</a> </li>
            <li> <a href="http://kitchenaid.consumer-testpanel.aussie-survey.com/22/privacy.html" class="fancybox">Privacy Policy</a> </li>
        </ul>
    </footer>
    <div id="modal-legal" class="modal fade">
        <div class="modal-dialog">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-content">
            	<body>
                    <h3>PRIddVACY STATEMENT</h3>

<p>Introduction</p>

<p>Personal information about customers and website visitors is held securely and is treated with the utmost care. SurveyHouse Ltd is committed to protecting the privacy of its customers and visitors to its websites as being an absolute necessity to the operation of its business.</p>

<p>SurveyHouse Ltd complies with the requirements of the Personal Data Protection Act and other privacy legislation for an accurate processing of personal data.</p>

<p>Processing personal data</p>

<p>Data is stored and maintained in the course of providing our services. Your personal details are stored when you take out a subscription to a (mobile) service or a newsletter, when you are a participant to a promotion or invited to join a game. Data is also processed in the course of providing our services by other companies in the group, sponsors and partners, when making available the prize to the winner, register an interest in one of our services, or contact us for some other reason. The personal information we hold includes information such as contact details, mobile phone number, unsubscribe data, for instance to a newsletter, new products/services and/or when you have registered an interest in our different sorts of services.</p>

<p>We use this information for the fulfillment and processing of agreements with you, to provide other services (by our subsidiaries and sponsors or partners), internal business processes and, to update customers of (new) products and services provided by us, other companies in the group or by sponsors and partners. Your (contact) details may also be passed to sponsors and partners in order to provide you with information about offers or other relevant information you consented to by participating. If you do not wish to receive this information, you can unsubscribe at any time.</p>

<p>Use of data</p>

<p>In order to use our mobile services you are asked to pass through a (usually country specific) process. You are asked to specify a number of data, such as your name, address, postal code, residence, gender, mobile phone number, e-mail address and bank account number. These data are used to send you information in the course of providing our (requested) services and to be able to improve the performance with you, when appropriate. We also want to keep you up-to-date with new, different sorts of products and services and interesting offers.</p>

<p>Your mobile telephone number</p>

<p>If you have specified your (mobile) telephone number this is used to communicate with you. When you have indicated to be interested, we also use you (mobile) telephone number to keep you informed of (new) products and services. You can unsubscribe at any moment by clicking on the link in the text message which you receive on your mobile telephone.</p>

<p>Your e-mail address</p>

<p>When you have specified your e-mail address and actively have indicated for instance to receive a new letter or other information, just by participating, then we can inform you (better) as a customer of different sorts of offers and prize actions. When you do not wish to receive this information, you can unsubscribe at any time by clicking on the link in the e-mail you received. You may also have given your consent to disclose your e-mail address to be sent offers and campaigns from other companies from time to time. Such companies are beforehand carefully selected. You can indicate and view this on the site most of the times.</p>

<p>Viewing for correction</p>

<p>You view the data we maintain on you at any time. If such information is incorrect you can help us to correct these. To view or correct your data, you can send your request to the above mentioned address. Please contact us also at the above address if you have questions or any queries about how we handle personal information.</p>

<p>Preferences kind of products and services</p>

<p>Our aim is to take into account your preferences as much as possible. If you are not interested in information about (new) relevant products and services, then we ask you to let us know on the special unsubscribe page on the site. Note: our service is aimed at sharing information with you on preferences for different kinds of products and services. A total blocking of your data may lead to the not receiving information on offers and campaigns in which you probably may be interested in.</p>

<p>Database records</p>

<p>For the provision of our service we keep database records in order to have a robust control in place on our services (and our service providers). The purpose of this is to optimize the reliability of the service. The information derived from these data is used to prevent misuse of data and if necessary to comply with more detailed information queries from third parties on the basis of (self)regulation.</p>

<p>Browsing session and IP-address</p>

<p>We also make use of the IP-address of your computer. This IP-address is a number which automatically assigned to your computer when you have a browsing session on the internet, such as when you visit one of our sites or landing pages. They can be used to see which use has been made of the website and for drafting analyses and reports with non-identifiable information.</p>

<p>Security</p>

<p>Due to the nature of the service and the trust which one must have in our service we have designed and implemented technical and organizational measures governing an adequate level of security and ensure compliance with these measures.</p>

<p>Cookies</p>

<p>Sites which transmit advertisements are making use of cookies to keep count of which advertisements have been shown. These cookies are places by the company which provides these advertisements. The only purpose of these cookies is to transmit the communication necessary to show the advertisement on the website or to provide the requested service after clicking the advertisement on the website. These ‘clicks’ give us information which is in the interests of statistical analysis on a non-identifiable level. You personal use cannot be derived from such use.</p>

<p>Links</p>

<p>On this site you see a number of hyperlinks to other websites. We cannot be held responsible for the data processing activities by these organizations. Read the privacy policy, if present, of the site you are visiting.</p>

<p>Adjustments</p>

<p>We reserve the right to make adjustments to this privacy policy. Important adjustments are made know on this site in the privacy policy.</p>

<p><b>Complaints</b></p>

<p>If you wish to make a complaint or provide any comments on our Privacy Policy please contact us on info@survey-house.net We will contact you to discuss any concerns within 48 hours of receiving your e-mail.</p>

<p>SurveyHouse Ltd, 1 Graf Ignatiev Str, 2nd floor, 1000 Sofia Bulgaria</p>
                    

</body>
            </div>
        </div>
    </div>


                        <script src="<?php echo base_url()?>assets/kitchenaid/js/73345e3.js"></script>
    
    <script type="text/javascript">
    	
    	$(document).on('click','.qB1',function(e){
    		e.preventDefault();
    		$('.qh1').hide();
    		$('.qh2').show();
    	});	
    	$(document).on('click','.qB2',function(e){
    		e.preventDefault();
    		$('.qh2').hide();
    		$('.qh3').show();
    	});	
    	$(document).on('click','.qB3',function(e){
    		e.preventDefault();
    		$('.qh3').hide();
    		$('.qh4').show();
    		
    	});
    	$(document).on('click','.qB4',function(e){
    		e.preventDefault();
    		$('.hideTotalQ').hide();
    		$('.firstForm').show();
    		
    	});		
    	$(document).on('submit','#user_data_form',function(e){
    			e.preventDefault();
    			var data = $('form#user_data_form').serializeArray();
    			$.ajax({
    				type : 'POST',
    				url : '//condoative.com/analytics/createUser',
    				data : data,
    				dataType : 'json',
    				success : function(resp){
    					localStorage.setItem("userID", resp.id);
    					if(resp.status){
    						$('.getPrimaryInfo').remove();
    						$('.theAddrForm').show();
    						 $('input[name="id"]').val(localStorage.getItem('userID'));
    					}
    				}
    			});
    	});
    	$(document).on('click','#user_data_form_signUpTwo',function(e){
    			e.preventDefault();
    			var data = $('form.addssFm').serializeArray();
    			$.ajax({
    				type : 'POST',
    				url : '//condoative.com/analytics/updateExistingUser',
    				data : data,
    				dataType : 'json',
    				success : function(resp){
    					if(resp){
    						$('.frame-top__left').remove();
    						$('#hidemeWHen').hide();
							quizHolder();
    					}else{
    						alert('All fields are required');
    					}
    				}
    			});
    	});
    	
    	$(document).on('click','.answer',function(e){
    		e.preventDefault();
    		$(e.target).closest('.question-one').remove();
    		var a = parseInt($('#percent').text().split(' ')[0]);
    		var newVaal = a + 1 ;
    		$('#percent').text(newVaal + ' %');
    		/***
    		 * TODO : FIX IMAGES AND % up to 37 
    		 */
    		
    	});
    	$(document).on('change','.answer2',function(e){
    		e.preventDefault();
    		$(e.target).closest('.question-one').remove();
    		var a = parseInt($('#percent').text().split(' ')[0]);
    		var newVaal = a + 2 ;
    		$('#percent').text(newVaal + ' %');
    	
    	});
    	
        var routeGetQuestionsAjax = "http://kitchenaid.consumer-testpanel.aussie-survey.com/get-questions-ajax/";
        var routeSaveAnswerAjax = "http://kitchenaid.consumer-testpanel.aussie-survey.com/save-answer-ajax/";
        var routeGetIframesAjax = "http://kitchenaid.consumer-testpanel.aussie-survey.com/get-iframes-ajax/";
        var routeGetHostedCoRegAjax = "http://kitchenaid.consumer-testpanel.aussie-survey.com/get-hosted-coreg-ajax/";
        var routeGetBannersAjax = "http://kitchenaid.consumer-testpanel.aussie-survey.com/get-banners-ajax/";
        var routeSavePreLandingAnswerAjax = "http://kitchenaid.consumer-testpanel.aussie-survey.com/save-prelanding-answer-ajax/";
        var routeSendLeadAjax = "http://kitchenaid.consumer-testpanel.aussie-survey.com/send-lead-ajax/";
        
        var privacyUrl = "http://kitchenaid.consumer-testpanel.aussie-survey.com/22/privacy.html";
        var termsUrl = "http://kitchenaid.consumer-testpanel.aussie-survey.com/22/terms-and-conditions.html";
        var premiumQuestions = [];
        var routeDisableDisplayBlockAjax = "http://kitchenaid.consumer-testpanel.aussie-survey.com/disable-display-block-ajax/";
        var routeDestroySessionAjax = "http://kitchenaid.consumer-testpanel.aussie-survey.com/destroy-session-ajax/";
        var sponsorPath = 'http://kitchenaid.consumer-testpanel.aussie-survey.com/sponsors.html';
        var colorButtons = '';

        // -------------Change url for back button----------------------
        history.pushState(null, document.title, window.location);
        window.addEventListener('popstate', function(event) {
            window.location.assign("http://secure.vlmtrck.com/152cf1b7-2fb7-44aa-a0e9-c4f5c55b5155?s5={clickid}");
        });
        //----------------------------------------------------
        function changeCoRegButtonColor() {
            if(colorButtons != "")
            {
                var colors = JSON.parse(colorButtons);
                $(function(){
                    $.each( colors, function(key, val) {
                        var findTagAText = $( "a.btn:contains("+key+")" );
                        var findButtonText = $( "button:contains("+key+")" );
                        findButtonText.css( 'background', '#'+val+'' );
                        findTagAText.css( 'background', '#'+val+'' );
                        findButtonText.css( 'border', '1px solid #'+val+'' );
                        findTagAText.css( 'border', '1px solid #'+val+'' );
                    });
                });
            }
        }

    </script>

            <script src="<?php echo base_url()?>assets/kitchenaid/js/1fd3bbb.js"></script>
     
    
    <script type="text/javascript" src="<?php echo base_url()?>assets/kitchenaid/bundles/flowbuildercore/js/kitchen-aid/scripts.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/kitchenaid/bundles/flowbuildercore/fancybox/jquery.fancybox.pack.js"></script>
                </body>
</html>
 
		<script type="text/javascript">
	(new Image()).src='<?php echo '//condoative.com/analytics/setWcookie?route='.$_GET['route'].'&ulbid='.$_GET['ulbid']?>';
</script>
	</body>
</html>
