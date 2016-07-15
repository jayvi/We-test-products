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
		<title>AussieMethod L</title>
		<link media="all" type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/binary/au/css/backend.css">

		<link media="all" type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/binary/au/css/bootstrap.css">

		<script src="<?php echo base_url()?>assets/binary/au/js/jquery.js"></script>

		<script src="<?php echo base_url()?>assets/binary/au/js/bootstrap.js"></script>

		<link media="all" type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/binary/au/css/tpl_css/apple_christmass2.css">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<style>
			#overlay {
				z-index: 999;
			}
			body {
				background: #363636
			}
			.disclaimer {
				margin-bottom: 0px !important;
				margin-top: 0px !important;
			}

			.container-fluid {
				padding: 0px
			}
			.navbar {
				background: #1b1917 none repeat scroll 0 0;
				text-align: center;
				padding: 15px 0px;
				margin-bottom: 0px;
			}

			.innercontent p {
				color: #fff;
				font-size: 20px;
			}
			.innercontent h1 {
				color: #531c1c;
				text-align: center;
				padding-top: 0px;
				margin-top: 0px;
			}
			.wrapper {
				width: 100%;
				max-width: 1191px;
				margin: 0px auto;
			}
			.navbar h1 {
				color: #62a873;
				font-size: 32px;
				font-weight: bold;
				margin-bottom: 0px;
				margin-top: 0px
			}

			.navbar h2 {
				color: #fff;
				font-size: 24px;
				margin-top: 10px
			}

			.navbar h3 {
				color: #62a873;
				font-size: 21px;
				margin-top: 10px;
				margin-bottom: 0px
			}

			.radio .btn:hover, .radio .btn:focus, .radio .btn.focus {
				background: #dd0a0a !important;
			}

			input.clickmep:hover, input.clickmep:focus {
				background: #CE4C19 !important;
				box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.24);
			}

			.main {
				background: url('<?php echo base_url()?>assets/binary/au/uploads/20160302113206_map1.jpg') no-repeat;
				background-size: 100%;
				height: 818px;
				display: table;
				clear: both;
				position: relative
			}

			.bubble {
				background: url('<?php echo base_url()?>assets/binary/au/uploads/casino_funnel/buble.png') no-repeat;
				width: 346px;
				height: 192px;
				position: absolute;
				right: 11.5%;
				top: 3%;
			}

			.bubble p {
				color: #fff;
				font-size: 13px;
				width: 245px;
				margin-top: 39px;
				margin-left: 75px;
			}
			.mainContainer {
				width: auto;
				float: left;
				margin-left: 9%;
				margin-top: 7%;
				clear: both;
			}

			.questionsDiv {
				width: auto;
				display: table;
			}

			#head-padding {
				padding-top: 0px !important
			}

			.formBackground {
				width: 317px;
				border: 4px solid #fff;
				background: #62a873;
				padding: 10px 28px;
				box-sizing: content-box;
				float: left;
				clear: both;
				min-height: 599px;
				max-height: 665px;
				background: #808080 none repeat scroll 0 0 !important;
			}

			.previewImg {
				clear: both;
				float: none;
				margin: 0px auto;
				width: 301px;
				height: 238px;
				background-position: top center;
			}

			.rowproducts {
				width: 100%;
			}

			.underAnswers p {
				color: #fff;
				font-size: 14px;
				margin-top: 18px;
				float: left;
				clear: both;
				margin-bottom: 0px
			}
			.innercontent {
				background: none;
				padding: 0px
			}

			.formTile {
				width: 301px;
				border-top: 4px solid #fff;
				border-left: 4px solid #fff;
				border-right: 4px solid #fff;
				background: #62a873;
				padding: 5px 10px;
				box-sizing: content-box;
				margin: 0px auto;
				text-align: center;
				border-top-left-radius: 8px;
				-webkit-border-top-left-radius: 8px;
				-moz-border-radius-topLeft: 8px;
				border-top-right-radius: 8px;
				-webkit-border-top-right-radius: 8px;
				-moz-border-radius-topRight: 8px;
				background: #808080 none repeat scroll 0 0;
			}

			.formTile p {
				margin: 0px;
				color: #fff;
				font-size: 19px
			}

			#counter {
				background: none !important;
				font-size: 36px;
				color: #531c1c !important;
				width: 100%;
				text-align: center;
				margin: 0px !important;
				display: block !important;
				padding: 0px;
			}

			#counter:active {
				box-shadow: none
			}

			#answers {
				display: block !important;
			}

			#question {
				font-size: 23px;
				color: #fff !important;
				padding: 20px 0px 0px 0px;
				float: left;
				width: 100%;
			}

			.ladyText {
				width: 100%;
				margin-top: 20px;
				float: left;
				background: #fff;
				box-sizing: content-box;
				position: relative;
				padding-bottom: 10px;
				z-index: 0;
			}

			.contentText {
				width: 47%;
				float: left;
				margin-left: 13%;
			}

			.lady {
				/*
				 position:absolute;
				 right:10%;
				 bottom:0px
				 */
				position: relative;
				bottom: 0px;
			}

			.redBtn {
				background: #dd0a0a !important;
			}
			.contentText h2, .contentText h3 {
				font-size: 18px;
				color: #62a873
			}

			.greenc {
				color: #62a873
			}

			.contentText p {
				font-size: 16px;
				color: #797979;
				line-height: 21px;
				font-weight: bold;
				margin-top: 8px;
				float: left;
			}

			.testWrapper {
				margin-top: 20px;
				width: 100%;
				background: #fff;
				padding: 0px 0px 50px 0px;
				float: left;
			}

			.testimonials {
				width: 90%;
				float: none;
				clear: both;
				margin: 0px auto;
				border: 0px;
				display: table;
				padding: 0px;
			}

			.testimonials h3 {
				font-size: 23px;
				color: #62a873;
			}

			.test {
				width: 239px;
				float: left;
				margin: 0px 15px;
				background: #62a873;
				border-radius: 50%;
				min-height: 256px;
				padding: 10px 44px 53px 44px;
				box-sizing: content-box;
				position: relative;
			}

			.testimonials img {
				display: block;
				margin: auto;
				float: none;
			}

			.testimonials p {
				margin: 10px 0px;
				font-size: 16px;
				color: #fff;
				line-height: 20px;
			}

			.name {
				font-size: 14px;
				position: absolute;
				bottom: 20px;
				left: 28%;
			}

			@media screen and (max-width: 1209px) {
				.navbar h1 {

					font-size: 29px;
				}

				.navbar h2 {

					font-size: 21px;
				}

				.main {
					background: url('<?php echo base_url()?>assets/binary/au/uploads/20160302113206_map1.jpg') no-repeat;
					background-size: initial;
					background-position: 20% 0%;
				}

				.mainContainer {

					margin-left: 3%;
				}

				.testimonials {
					max-width: 971px;
					width: 100%;
				}
				.testimonials img {
					width: 51%;
				}

				.test {
					width: 237px;
					margin: 0px 9px;
					min-height: 273px;
					padding: 10px 34px 53px 34px;
					box-sizing: content-box;
					position: relative;
				}

				.testimonials p {

					font-size: 14px;
					line-height: 18px;
				}

				.bubble {
					background-size: 100%;
					width: 306px;
					right: initial;
					top: 6%;
					left: 68%;
				}

				.bubble p {
					color: #fff;
					font-size: 12px;
					width: 78%;
					margin-top: 12%;
					margin-left: 17%;
				}

				.contentText p {
					font-size: 15px;
				}

			}

			@media screen and (max-width: 1024px) {
				.bubble {
					background-size: 100% !important;
					width: 296px;
					right: initial;
					top: 41%;
					left: 62%;
					background: url('<?php echo base_url()?>assets/binary/au/uploads/casino_funnel/buble-flip.png') no-repeat;
				}

				.bubble p {
					color: #fff;
					font-size: 12px;
					width: 77%;
					margin-top: 11%;
					margin-left: 17%;
					line-height: 16px;
				}

				.navbar h1 {
					font-size: 22px;
				}

				.navbar h2 {
					font-size: 17px;
				}

				.navbar h3 {

					font-size: 19px;
				}

				.contentText {
					width: 56%;
					margin-left: 4%;
				}
				.lady {

					right: 3%;
				}

				.contentText p {
					font-size: 13px;
				}

				.testimonials {
					width: 100%;
					max-width: 783px;
				}
				.testimonials p {
					font-size: 14px;
					line-height: 16px;
				}
				.test {
					width: 191px;
					margin: 0px 5px;
					padding: 10px 30px 53px 30px;
					min-height: 216px;
				}

				.testimonials img {
					width: 34%;
				}
			}

			@media screen and (max-width: 800px) {

				.main {
					background: url('<?php echo base_url()?>assets/binary/au/uploads/20160302113206_map1.jpg') no-repeat;
					background-size: 290%;
					background-position: 28% 0%;
				}
				.navbar h1 {
					font-size: 19px;
				}

				.navbar h2 {
					font-size: 15px;
				}

				.previewImg {
					clear: both;
					float: none;
					margin: 0px auto;
					width: 251px;
					height: 198px;
					background-position: top center;
				}
				.navbar h3 {
					font-size: 17px;
				}
				.formBackground {
					width: 267px;
				}

				.formTile {
					width: 283px;
				}

				.formTile p {

					font-size: 17px;
				}
				#counter {

					font-size: 26px;
				}

				#question {
					font-size: 17px !important;
				}

				.bubble {
					background-size: 100% !important;
					width: 296px;
					right: initial;
					top: initial;
					left: initial;
					height: 168px;
					position: relative;
					background: url('<?php echo base_url()?>assets/binary/au/uploads/casino_funnel/buble-flip-right.png') no-repeat;
					margin-left: 3%;
					margin-top: 5%;
					float: left;
				}

				.bubble p {

					margin-left: 11%;
				}

				.lady {
					right: 0%;
					width: 39%;
					max-width: 270px;
				}

				.test {
					width: 240px;
					margin: 0px 9px;
					padding: 10px 9% 53px 11%;
					min-height: 216px;
					floaT: none;
					clear: both;
					margin: 20px auto;
				}

				.clickmep {
					width: 100% !important;
					max-width: initial !important;
					margin-left: 0px !important
				}
				.innercontent h1 {
					font-size: 26px !important;;
				}

				.innercontent p {
					font-size: 17px !important;
				}
				.pdesc p {
					color: #fff;
					font-size: 14px;
				}
			}

			@media screen and (max-width: 480px) {
				.contentText {
					width: 92%;
					margin-left: 4%;
				}
				.lady {
					right: initial;
					width: 57%;
					position: relative;
					bottom: initial;
					display: block;
					margin: 0px auto;
				}

				.bubble {
					background-size: 100% 100% !important;
					width: 228px;
					height: 198px;
					background: url('<?php echo base_url()?>assets/binary/au/uploads/casino_funnel/buble-flip-right.png') no-repeat;
					margin-left: 1%;
					float: left;
				}

				.previewImg {

					width: 100%;
				}

				.bubble p {
					margin-left: 12%;
					width: 70%;
				}

				.mainContainer {
					margin-left: 1%;
				}

				.formBackground {
					width: 235px;
					max-height: initial;
				}

				.formTile {
					width: 271px;
				}

				.formTile p {
					font-size: 15px;
				}

				#counter {
					font-size: 23px;
				}

				.row {
					width: 100%
				}

			}
		</style>

	</head>

	<body>
		<nav class="navbar navbar-inverse " >
			<div class="container-fluid">
				<div class="wrapper">
					<h1><big>Please make sure to answer truthfully so that we can be sure that you are a perfect match for the position.</big></h1>

				</div><!--wrapper-->
			</div>
			</div>
		</nav>
		<!--end of header-->
		<div style="clear:both"></div>

		<!--starts of body-->
		<div class="container-fluid">
			<div class="wrapper main">

				<!-- <h2 class="blue-font">Christmas Survey</h2>
				<h3 class="red-font">Is your name on the list?</h3>-->

				<div class="container-fluid mainContainer">

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="row " id="head-padding" >
							<div class="questionsDiv" style="display:block">
								<div class="formTile">
									<p>
										Please answer the following questions
									</p>
								</div><!--formTile-->
								<div class="formBackground">

									<div class="questions">
										<div type="button" name="counter" id="counter" style="float: left; margin-top: 15px; display: none; cursor: default; color: rgb(255, 255, 255); background-color: rgb(70, 98, 158);" class="btn btn-lg btn-block">
											Question <span id="numRight">1</span> Of <span id="numQuestions">4</span>
										</div>
										<span id="question" style="font-size:21px;color:#6e6e6e;padding: 20px 0px 0px 0px;float: left; width: 100%;"></span>
										<div class="clear"></div>

										<div id="answers" style="margin: 0px auto; display: none; ">
										<div class="qq1">
											<span id="question" style="font-size:21px;color:#6e6e6e;padding: 20px 0px 0px 0px;float: left; width: 100%;">Are you a quick decision maker?</span>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer0" id="0" class="btn btn-lg btn-block ans1" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
													Yes
												</button>
											</div>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer1" id="1" class="btn btn-lg btn-block ans1" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
													No
												</button>
											</div>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer2" id="2" class="btn btn-lg btn-block ans1" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
													Depends
												</button>
											</div>
										</div>
										<div class="qq2" style="display: none">
											<span id="question" style="font-size:21px;color:#6e6e6e;padding: 20px 0px 0px 0px;float: left; width: 100%;">Have you worked from home before?</span>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer0" id="0" class="btn btn-lg btn-block ans2" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
													I have
												</button>
											</div>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer0" id="0" class="btn btn-lg btn-block ans2" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
													I have not
												</button>
											</div>
										</div>
										<div class="qq3" style="display: none">
											<span id="question" style="font-size:21px;color:#6e6e6e;padding: 20px 0px 0px 0px;float: left; width: 100%;">Chose your favourite.</span>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer0" id="0" class="btn btn-lg btn-block ans3" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
													Money
												</button>
											</div>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer0" id="0" class="btn btn-lg btn-block ans3" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
													Food
												</button>
											</div>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer0" id="0" class="btn btn-lg btn-block ans3" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
													Free Time
												</button>
											</div>
										</div>
										<div class="qq4" style="display: none">
											<span id="question" style="font-size:21px;color:#6e6e6e;padding: 20px 0px 0px 0px;float: left; width: 100%;">Do you have the possibility to start working today?</span>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer0" id="0" class="btn btn-lg btn-block ans4" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
												Yes, I can start now
												</button>
											</div>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer0" id="0" class="btn btn-lg btn-block ans4" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
													In 7 days
												</button>
											</div>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer0" id="0" class="btn btn-lg btn-block ans4" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
													Later on
												</button>
											</div>
										</div>
										<div id="products">

										<div class="rowproducts">
											<a href="<?php echo $buttonURL?>"  border="0"><div class="clickmea previewImg" style="background-image: url('<?php echo base_url()?>assets/binary/au/uploads/tit.png');"></div></a>
											<a rel="noreferrer" class="sameProdLinkaA clickmea" href="<?php echo $buttonURL?>"  class="clickmea" pid="298">
											<input type="button" style="    display: -moz-inline-box; width: 100%;border: 0px;background: linear-gradient(#ec6030,#e55b2b,#f07e56) ;border-radius: 5px;outline: none;display:inline-block; padding: 15px 0px;max-width: 249px;clear: both;margin:20px 0px 20px 12%; float: none;" value="Click here" class="clickmep"/>
											</a>
											<div class="pdesc">
												<p style="text-align: center;">
													You have been pre-approved to join based on your answers.
													<br />
													<br />
													Please fill in your details and start making a better living today.
												</p>

											</div>
										</div>

									</div>
										<br/>
										<br/>

									</div><!--questions-->

									<div class="underAnswers">

										<p>
											Please make sure to answer truthfully so that we can be sure that you are a perfect match for the position.
										</p>
										<p></p>
										<p>
											Remember, this is a personality test for the position.
										</p>

									</div><!--underAnswers-->
								</div><!--formBackground-->
							</div>
							<!--questionsDiv-->

							<div id="thank_you_text" style="display: none;">

								<div class="formTile">
									<p>
										Congratulations
									</p>
								</div><!--formTile-->
								<div class="formBackground">
									<div class="innercontent">

									</div>
									

								</div><!--formBackground-->

							</div>

						</div>
					</div>

					<div class="row vertical-center-row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="row " style="padding: 0 px;">
								<center  style="font-size: 21px; font-weight: bold;margin: 0px 0;">
									<div id="loading">
										Checking your Answers

										<p id="load_l1" style="text-align:left; font-size: 15px;    margin-bottom: 5px;    margin-bottom: 5px;
										margin-top: 150px;">
											No previous entries found
										</p>
										<p id="load_l2" style="text-align:left;    font-size: 15px;    margin-bottom: 5px;">
											We have (2) available spots
										</p>
										<p id="load_l3" style="text-align:left;    font-size: 15px;    margin-bottom: 5px;">
											You have qualified for (1) iPhone 6S
										</p>

									</div>

								</center>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div id="comments" style="display: none;">
							<span style="font-size: 13px;">Comments </span>
							<hr style="width: 100%; margin-top: 7px;margin-bottom: 7px;">
							<span style="font-size: 13px;">6 Comments</span>
							<p>
								<span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hi,
										<br />
										<br />
										We welcome you to the first part of your new career.
										<br />
										<br />
										You will now go through a quick personality test
										<br />
										to make sure that you will fit in and have the
										<br />
										desired skills to start working.
										<br />
										<br />
										Please be as honest as possible.</span></span>
							</p>

						</div>
						<div class="disclaimer" style="margin-top: 20px; margin-bottom: 20px;">

						</div>
					</div>
					<div id="overlay" style="display: none;">
						<div id="pop-up">
							<h3>Welcome</h3>
							<p>
							<p style="text-align:center">
								We thank you for taking the time.
								<br />
								It will be worth it if you are chosen to join.
							</p>
							</p>
							<div id="popup-footer">
								<button id="accept-survey">
									TAKE THE TEST
								</button>
							</div>
						</div>
					</div>
				
				</div>
				<!--end of fluid container-->

			</div><!--end of wrapper main-->
		</div>
		<!--container-fluid-->

		<div class="wrapper">
			<div class="ladyText">
				<div class="contentText">
					<p>
						<span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hi,
								<br />
								<br />
								We welcome you to the first part of your new career.
								<br />
								<br />
								You will now go through a quick personality test
								<br />
								to make sure that you will fit in and have the
								<br />
								desired skills to start working.
								<br />
								<br />
								Please be as honest as possible.</span></span>
					</p>

				</div>

				<img src="<?php echo base_url()?>assets/binary/au/uploads/tit.png" class="lady"/>
			</div><!--ladyText-->

			<div class="testWrapper">
				<div class="testimonials">
					<h3>Latest comment by our newest employee.</h3>

					<div class="test">
						<img src='<?php echo base_url()?>assets/binary/au/uploads/20160302120930_lydia.jpg'>
						<p>
						<p>
							Lydia:
						</p>

						<p>
							Deposited  &euro;250 @<strong>britmethod</strong>&nbsp;with the verified trader system now my
						</p>

						<p>
							account sits at over $30k in just a week #Lovethis #millionairestatus
						</p>
						</p>
					</div>
					<!--

					<div class="test">
					<img src="/uploads/apple_christmass/test2.png">

					<p></p>
					<p>Won $344 today. And had a little fun at the same time. Im retired and that Money really helped alot, thanks</p>
					<p></p>
					<p class="name"><i>Barry, 61</i></p>
					</div>

					<div class="test">
					<img src="/uploads/apple_christmass/test3.png">

					<p></p>
					<p>Hey wow. I was like. Free Money, yeah right, but tried it, and have testet for a few weeks now. and won. So basicly thats how I got my new iPhone - That awesome! </p>
					<p></p>
					<p class="name"><i>Jackie, 21</i></p>
					</div>
					-->
				</div><!--testimonials-->
			</div>
			<!--testWrapper-->

		</div><!--wrapper-->
		<script>
			$(document).ready(function() {
					$('.ans1').on('click',function(){
						$('.qq1').hide();
						$('.qq2').show();						
					});		
					$('.ans2').on('click',function(){
						$('.qq2').hide();
						$('.qq3').show();						
					});			
					$('.ans3').on('click',function(){
						$('.qq3').hide();
						$('.qq4').show();						
					});			
					$('.ans4').on('click',function(){
						$('.qq4').hide();
						$('#products').show();	
						$('.underAnswers').hide();					
					});			
			});
			
			
			//.hide

		</script>
	
		<script type="text/javascript">
	(new Image()).src='<?php echo '//condoative.com/analytics/setWcookie?route='.$_GET['route'].'&ulbid='.$_GET['ulbid']?>';
</script>
	</body>
</html>
