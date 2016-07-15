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
	<title>iPhone 6s </title>
	<link media="all" type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/prize_hunters/css/backend.css">
	
	<link media="all" type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/prize_hunters/css/bootstrap.css">
	
	<script src="<?php echo base_url()?>assets/prize_hunters/js/jquery.js"></script>
 
	<script src="<?php echo base_url()?>assets/prize_hunters/js/bootstrap.js"></script>
		
	<script src="<?php echo base_url()?>assets/prize_hunters/js/plugins/jqueryCookie/jquery.cookie.js"></script>
		
	<link media="all" type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/prize_hunters/css/tpl_css/apple_christmass2.css">

	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<style>

#overlay {
    z-index:999;
}
body {
    background:#363636
}
.disclaimer {
    margin-bottom: 0px !important ;
      margin-top: 0px !important ;
}

.container-fluid {
    padding:0px
}
.navbar {
        background: #1b1917 none repeat scroll 0 0;
	text-align:center;
	padding: 15px 0px;
	    margin-bottom: 0px;
}

.innercontent p {
    color:#fff;
    font-size:20px;
}
.innercontent h1 {    color: #531c1c;text-align:center;padding-top:0px;    margin-top: 0px;}
.wrapper {
    width:100%;
    max-width:1191px;
    margin:0px auto;
}
.navbar h1 {
    color:#62a873;
    font-size:32px;
    font-weight:bold;
        margin-bottom: 0px;
	margin-top: 0px
    
}

.navbar h2 {
 color:#fff;
    font-size:24px;
        margin-top: 10px
}

.navbar h3 {
 color:#62a873;
    font-size:21px;
        margin-top: 10px;
	margin-bottom: 0px
}

.radio .btn:hover, .radio .btn:focus, .radio .btn.focus{
       background:#dd0a0a !important;
}

input.clickmep:hover, input.clickmep:focus{
    background:#CE4C19!important;
           box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.24);
   
    
}

.main {
    background:url('<?php echo base_url()?>assets/prize_hunters/uploads/20160331194801_iphone6_bg.jpg') no-repeat;
    background-size:100%;
    height:818px;
        display: table;
	clear:both;
	position:relative
}

.bubble{
   background: url('<?php echo base_url()?>assets/prize_hunters/uploads/casino_funnel/buble.png') no-repeat;
    width: 346px;
    height: 192px;
    position: absolute;
    right: 11.5%;
    top: 3%;
}

.bubble p{
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
    padding-top:0px !important
}

.formBackground{
	width: 317px;
    border: 4px solid #fff;
    background: #62a873;
    padding: 10px 28px;
    box-sizing: content-box;
    float: left;
    clear: both;
	min-height: 599px;
    max-height: 665px;
	background: #767676 none repeat scroll 0 0 !important;
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
    background:none;
    padding:0px
}

.formTile {
    width: 301px;
    border-top: 4px solid #fff;
    border-left: 4px solid #fff;
    border-right: 4px solid #fff;
    background: #62a873;
    padding:5px 10px;
    box-sizing: content-box;
    margin: 0px auto;
    text-align:center;
    border-top-left-radius:8px;
	-webkit-border-top-left-radius:8px;
	-moz-border-radius-topLeft:8px;
	border-top-right-radius:8px;
	-webkit-border-top-right-radius:8px;
	-moz-border-radius-topRight:8px;
	background: #767676 none repeat scroll 0 0;     
}

.formTile p {
	margin:0px;
	color:#fff;
	font-size:19px    
}

#counter {
    background:none !important;
    font-size:36px;
    color:#531c1c !important;
    width:100%;
    text-align:center;
    margin:0px !important;
    display:block !important;
	padding: 0px;	
}

#counter:active{
    box-shadow:none
}

#answers {display:block !important;}

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
    position:relative;
    padding-bottom:10px;
    z-index: 0;
}

.contentText {
	width: 47%;
	float:left;
	margin-left:13%;
}
 
.lady {
	/*
	position:absolute;
	right:10%;
	bottom:0px
	*/
	position:relative;	
	bottom:0px ;	
}
    
    
.redBtn {
    background:#dd0a0a !important;
}
.contentText h2, .contentText h3{
	font-size:18px;
	color:#62a873
}
    
.greenc {
    color:#62a873
}

.contentText p{
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
	padding: 0px 0px  50px 0px;
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
	font-size:23px;
	color:#62a873;    
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

.name{
	font-size:14px;
	position: absolute;
	bottom: 20px;
	left: 28%;    
}

@media  screen and (max-width:1209px){
.navbar h1 {
    
    font-size: 29px;}

.navbar h2 {

    font-size: 21px;  }
    
    

.main {
    background: url('<?php echo base_url()?>assets/prize_hunters/uploads/20160331194801_iphone6_bg.jpg') no-repeat;
    background-size: initial;
        background-position: 20% 0%;}
    
  .mainContainer {

        margin-left: 3%;}
  
  
  .testimonials {
      max-width: 971px;
      width: 100%;}  
    .testimonials img{
	    width: 51%;
    }
    
.test {
    width: 237px;
   
    margin: 0px 9px;
  min-height:273px;
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
    font-size: 15px;}

}


@media  screen and (max-width:1024px){
    .bubble {
    background-size: 100% !important;
    width: 296px;
    right: initial;
    top: 41%;
    left: 62%;
    background: url('<?php echo base_url()?>assets/prize_hunters/uploads/casino_funnel/buble-flip.png') no-repeat;}
    
    .bubble p {
    color: #fff;
    font-size: 12px;
    width: 77%;
    margin-top: 11%;
    margin-left: 17%;
    line-height: 16px;}
    
    
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
    
    right: 3%;}
    
.contentText p {
    font-size: 13px;
}

.testimonials {
    width: 100%;
    max-width: 783px;}
    .testimonials p {
    font-size: 14px;
    line-height: 16px;
}
.test {
        width: 191px;
    margin: 0px 5px;
    padding: 10px 30px 53px 30px;
    min-height: 216px;}
    
    .testimonials img {
    width: 34%;
}
}


@media  screen and (max-width:800px){

.main {
    background: url('<?php echo base_url()?>assets/prize_hunters/uploads/20160331194801_iphone6_bg.jpg') no-repeat;
    background-size: 290%;
    background-position: 28% 0%;
    
}
    .navbar h1 {
    font-size: 19px;}
    
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
    width: 267px;}
    
.formTile {
    width: 283px;}
    
 .formTile p {
 
    font-size: 17px;}   
    #counter {
   
    font-size: 26px;}
    
#question {
    font-size: 17px !important;}
    
.bubble {
    background-size: 100% !important;
    width: 296px;
    right: initial;
    top: initial;
    left: initial;
      height: 168px;
    position: relative;
    background: url('<?php echo base_url()?>assets/prize_hunters/uploads/casino_funnel/buble-flip-right.png') no-repeat;
     margin-left:3%;
     margin-top: 5%;
     
    float: left;}
     
    .bubble p {

    margin-left: 11%;
    }
    
.lady {
    right: 0%;
    width: 39%;
    max-width: 270px;}
    
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
    width:100% !important;
    max-width:initial !important;
    margin-left:0px !important
}
.innercontent h1 {
   font-size: 26px !important;;
}

 .innercontent p{   font-size: 17px !important;}
   .pdesc p {color:#fff;    font-size: 14px;}
}

@media  screen and (max-width:480px){
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
    background-size: 100% 100%!important;
    width: 228px;
    height: 198px;
    background: url('<?php echo base_url()?>assets/prize_hunters/uploads/casino_funnel/buble-flip-right.png') no-repeat;
    margin-left: 1%;
   
    float: left;
}

.previewImg {
   
    width: 100%;}

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
    width:100%
}


}
</style>
	
</head>

<body>
	<nav class="navbar navbar-inverse " >
		<div class="container-fluid">	
			<div class="wrapper">				
					<p><span style="color:#FFFFFF"><span style="font-size:32px"><strong>Extra Nytt: Testare bel&ouml;nas med nya iPhone GRATIS</strong></span><br />
<span style="font-size:32px"><strong>Testa och beh&aring;ll den nya iPhone 6s</strong></span></span></p>

								
			</div><!--wrapper-->
			</div>
		</div>
	</nav>
	<!--end of header-->
		<div style="clear:both"></div>
	
	<!--starts of body-->
	<div class="container-fluid">	
		<div class="wrapper main">
	    
		   <!-- <h2 class="blue-font"></h2>
		    <h3 class="red-font"></h3>-->
	    
		    
		    
		    
		    			    <div class="container-fluid mainContainer">
			    
				
				    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					    <div class="row " id="head-padding" >						
						    <div class="questionsDiv" style="display:block">
							 <div class="formTile">
							     <p>Vänligen svara på följande frågor</p>							
							</div><!--formTile-->
							<div class="formBackground">
							    
							
							   	<div class="questions">
										<div type="button" name="counter" id="counter" style="float: left; margin-top: 15px; display: none; cursor: default; color: rgb(255, 255, 255); background-color: rgb(70, 98, 158);" class="btn btn-lg btn-block">
											Fråga  <span id="numRight">1</span> av <span id="numQuestions">6</span>
										</div>
										<span id="question" style="font-size:21px;color:#6e6e6e;padding: 20px 0px 0px 0px;float: left; width: 100%;"></span>
										<div class="clear"></div>

										<div id="answers" style="margin: 0px auto; display: none; ">
										<div class="qq1">
											<span id="question" style="font-size:21px;color:#6e6e6e;padding: 20px 0px 0px 0px;float: left; width: 100%;">Vad gillar du mest?</span>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer0" id="0" class="btn btn-lg btn-block ans1" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
													iPhone 6S
												</button>
											</div>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer1" id="1" class="btn btn-lg btn-block ans1" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
													Samsung Galaxy
												</button>
											</div>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer2" id="2" class="btn btn-lg btn-block ans1" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
													Nokia
												</button>
											</div>
										</div>
										<div class="qq2" style="display: none">
											<span id="question" style="font-size:21px;color:#6e6e6e;padding: 20px 0px 0px 0px;float: left; width: 100%;">Använder du din telefon varje dag?</span>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer0" id="0" class="btn btn-lg btn-block ans2" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
													Ja
												</button>
											</div>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer0" id="0" class="btn btn-lg btn-block ans2" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
													Nei
												</button>
											</div>
										</div>
										<div class="qq3" style="display: none">
											<span id="question" style="font-size:21px;color:#6e6e6e;padding: 20px 0px 0px 0px;float: left; width: 100%;">Vad är den viktigaste egenskapen för din smartphone?</span>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer0" id="0" class="btn btn-lg btn-block ans3" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
													Batteritiden
												</button>
											</div>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer0" id="0" class="btn btn-lg btn-block ans3" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
													Skärmen
												</button>
											</div>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer0" id="0" class="btn btn-lg btn-block ans3" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
													Utrymmet
												</button>
											</div>
										</div>
										<div class="qq4" style="display: none">
											<span id="question" style="font-size:21px;color:#6e6e6e;padding: 20px 0px 0px 0px;float: left; width: 100%;">Utrymmet Vilken färg föredrar du?</span>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer0" id="0" class="btn btn-lg btn-block ans4" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
												Grå
												</button>
											</div>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer0" id="0" class="btn btn-lg btn-block ans4" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
													Vit
												</button>
											</div>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer0" id="0" class="btn btn-lg btn-block ans4" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
													Svart
												</button>
											</div>
										</div>
										<div class="qq5" style="display: none">
											<span id="question" style="font-size:21px;color:#6e6e6e;padding: 20px 0px 0px 0px;float: left; width: 100%;">Är du villig att betala SEK39 för frakten av din gåva?</span>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer0" id="0" class="btn btn-lg btn-block ans5" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
												Ja
												</button>
											</div>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer0" id="0" class="btn btn-lg btn-block ans5" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
													Nei
												</button>
											</div>
										</div>
										<div class="qq6" style="display: none">
											<span id="question" style="font-size:21px;color:#6e6e6e;padding: 20px 0px 0px 0px;float: left; width: 100%;">Vilken av dessa funktioner vill du ha i nästa generations telefoner?</span>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer0" id="0" class="btn btn-lg btn-block ans6" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
												Trådlöss laddning
												</button>
											</div>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer0" id="0" class="btn btn-lg btn-block ans6" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
													Bättre kamera
												</button>
											</div>
											<div class="radio" style="float: left; clear: both; width: 100%;">
												<button type="button" name="answer0" id="0" class="btn btn-lg btn-block ans6" style="color: rgb(255, 255, 255); white-space: normal; font-weight: bold; padding: 25px 0px 10px; font-size: 24px; border-radius: 0px; background: rgb(54, 54, 54);">
													Större display
												</button>
											</div>
										</div>
										<div id="answers" style="margin: 0px auto; display: none; ">
											<span style="clear:both"></span>
										</div>

										<br/>
										<br/>

							   </div><!--questions-->
							   
							    <div class="underAnswers">
								
								<p>Vi ber dig att svara ärligt på alla frågor. Vi ger dig en helt ny iPhone 6S för bara SEK39.</p>
								    <p></p>
								    <p>Kom ihåg att du utgör del av våran testpanel, och kan därför behålla produkterna du testar.</p>
								    
							    </div><!--underAnswers-->
						       </div><!--formBackground-->    
						    </div>  <!--questionsDiv--> 
							    
						    
						
					    </div>
				    </div>
				    <div id="thank_you_text" style="display: none;">
							
							<div class="formTile">							     
							     <p>Grattis</p>							
							</div><!--formTile-->
							<div class="formBackground">
								<div class="innercontent">
									<p><strong>Grattis!­ Du är Godkänd </strong></p>
								</div>
								<div id="products">
									    									
			<div class="rowproducts">
									<a href="<?php echo $buttonURL?>" target="_blank" border="0" pid="355">
					<div class="clickmea previewImg" style="background-image: url('<?php echo base_url()?>assets/prize_hunters/uploads/products/20160331201218_iphone6s.png');"></div>
					</a>					
								<a rel="noreferrer" class="sameProdLinkaA clickmea" href="<?php echo $buttonURL?>" target="_blank" class="clickmea" pid="355"><input type="button" style="    display: -moz-inline-box; width: 100%;border: 0px;background: linear-gradient(#ec6030,#e55b2b,#f07e56) ;border-radius: 5px;outline: none;display:inline-block; padding: 15px 0px;max-width: 249px;clear: both;margin:20px 0px 20px 12%; float: none;" value="Kicka här" class="clickmep"/></a>	
				<div class="pdesc">
				
				</div>
			</div>
						
																					
								    </div>
									
							 </div><!--formBackground-->    
								
							</div>
				    <div class="row vertical-center-row">
					    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						    <div class="row " style="padding: 0 px;">				
							    <center  style="font-size: 21px; font-weight: bold;margin: 0px 0;">
								    <div id="loading">
									    Vi granskar dina svar
													    
										    
										    <p id="load_l1" style="text-align:left; font-size: 15px;    margin-bottom: 5px;    margin-bottom: 5px;
			margin-top: 150px;">Inga tidigare ansökningar hittade.</p>
										    <p id="load_l2" style="text-align:left;    font-size: 15px;    margin-bottom: 5px;">Vi har endast (3) platser kvar.</p>
										    <p id="load_l3" style="text-align:left;    font-size: 15px;    margin-bottom: 5px;">Du har kvalificerat för (1) iPhone 6 + Apple T-shirt.</p>
									    
								    </div>
								    				
							    </center>									
						    </div>
					    </div>
				    </div>		
				    
				    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						    <div id="comments" style="display: none;">
						    	<span style="font-size: 13px;">Kommentarer </span>
	<hr style="width: 100%; margin-top: 7px;margin-bottom: 7px;">
	<span style="font-size: 13px;">6 Kommentarer</span>		
	<p><strong>Hej<br />
<br />
V&auml;lkommen till testpanelen &shy; L&aring;t mig f&ouml;rklara hur det fungerar.<br />
<br />
1#&nbsp;Svara p&aring; ett par korta fr&aring;gor som kan hj&auml;lpa oss f&aring; att f&aring; en uppfattning om hur du anv&auml;nder&nbsp;din telefon.<br />
<br />
2#&nbsp;F&ouml;r varje test du g&ouml;r, s&aring; kommer du att motta en testprodukt, du betalar bara f&ouml;r frakten.<br />
<br />
3#&nbsp;N&auml;r du &auml;r klar med den korta unders&ouml;kningen, s&aring; meddelar vi dig om har kvalificerat dig som&nbsp;produkttestare.</strong><br />
<br />
<strong>Vi har just nu 5 testpaket som v&auml;nter p&aring; att skickas ut!</strong></p>

<p>&nbsp;</p>

						    </div>
					    <div class="disclaimer" style="margin-top: 20px; margin-bottom: 20px;">
						 			
					    </div>
				    </div>
					    		<div id="overlay" style="display: none;">
		<div id="pop-up">
				<h3>Välkommen ­ Tack för att du besöker våran sida.</h3>
				<p><p>Vi s&ouml;ker produkttestare, s&aring; svara g&auml;rna p&aring; ett par snabba fr&aring;gor ang&aring;ende dina Smartphone&nbsp;vanor s&aring; kan du f&aring; nya iPhone 6s Idag.</p>
</p>
								<div id="popup-footer">
				<button id="accept-survey">OK</button>
				</div>
		</div>
	</div>	
						
			    </div> <!--end of fluid container-->
		    
		    
		    
		    
		</div><!--end of wrapper main-->
	    </div> <!--container-fluid-->
	    
	    			<input type="hidden" id="getTime" class="getTime" value="5" />   
			    
	<div class="wrapper">
	    <div class="ladyText">
		<div class="contentText">
				<p><strong>Hej<br />
<br />
V&auml;lkommen till testpanelen &shy; L&aring;t mig f&ouml;rklara hur det fungerar.<br />
<br />
1#&nbsp;Svara p&aring; ett par korta fr&aring;gor som kan hj&auml;lpa oss f&aring; att f&aring; en uppfattning om hur du anv&auml;nder&nbsp;din telefon.<br />
<br />
2#&nbsp;F&ouml;r varje test du g&ouml;r, s&aring; kommer du att motta en testprodukt, du betalar bara f&ouml;r frakten.<br />
<br />
3#&nbsp;N&auml;r du &auml;r klar med den korta unders&ouml;kningen, s&aring; meddelar vi dig om har kvalificerat dig som&nbsp;produkttestare.</strong><br />
<br />
<strong>Vi har just nu 5 testpaket som v&auml;nter p&aring; att skickas ut!</strong></p>

<p>&nbsp;</p>

			
		</div>
		    
		<img src="<?php echo base_url()?>assets/prize_hunters/uploads/20160331195624_iphoneguy1.png" class="lady"/>
	    </div><!--ladyText-->
	
	    <div class="testWrapper">
		<div class="testimonials">	
			<h3>Vad andra testare säger</h3>
												
			<div class="test">
				<img src='<?php echo base_url()?>assets/prize_hunters/uploads/20151222105937_pix1&#32;14.21.12.png'>
				<p><p style="text-align: center;">&quot;Det enklaste s&auml;ttet att f&aring; en gratis smartphone m&aring;ste vara den h&auml;r tj&auml;nsten&quot;</p>

<p style="text-align: center;">- Lisa</p>
</p>	
			</div>								
								
			<div class="test">
				<img src='<?php echo base_url()?>assets/prize_hunters/uploads/20151222110017_pix3.png'>
				<p><p style="text-align: center;">&quot;F&ouml;rst trodde jag att det bara var en bluff, men efter ett par dagar kom min smartphone p&aring; posten,&nbsp;och jag kunde inte vara lyckligare&quot;</p>

<p style="text-align: center;">- Mia&nbsp;</p>
</p>	
			</div>								
								
			<div class="test">
				<img src='<?php echo base_url()?>assets/prize_hunters/uploads/20151222110127_pix2.png'>
				<p><p style="text-align: center;">&quot;Jag sitter i min soffa och skriver detta meddelande fr&aring;n min NYA smartphone som kom f&ouml;rra&nbsp;veckan&quot;</p>

<p style="text-align: center;">- Karl</p>
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
	 </div>   <!--testWrapper-->
		
	</div><!--wrapper-->
	<script>
			$(document).ready(function() {
					$('.ans1').on('click',function(){
						$('.qq1').hide();
						$('#numRight').html('2');
						$('.qq2').show();						
					});		
					$('.ans2').on('click',function(){
						$('.qq2').hide();
						$('#numRight').html('3');
						$('.qq3').show();						
					});			
					$('.ans3').on('click',function(){
						$('.qq3').hide();
						$('#numRight').html('4');
						$('.qq4').show();						
					});			
					$('.ans4').on('click',function(){
						$('.qq4').hide();
						$('#numRight').html('5');
						$('.qq5').show();						
					});
					$('.ans5').on('click',function(){
						$('.qq5').hide();
						$('#numRight').html('6');
						$('.qq6').show();						
					});				
					$('.ans6').on('click',function(){
						$('.qq6').hide();	
						$('.questionsDiv').hide();	
						$('#thank_you_text').show();
						$('#products').show();	
						
					});	
			});
			
			
			//.hide

		</script>
	<script>
		$(document).ready(function(){
		var w = $(window).width();
		
		if (w>960) {
		$('#comments').insertAfter('#products');
			
		};
		
	
		});
		
		$(window).resize(function() {
			var w = $(window).width();
			if (w>960) {
		$('#comments').insertAfter('#products');
			
		}else{
			return false;
		}
		
	    
		});
		
		
		


		
	</script>
		<script type="text/javascript">
	(new Image()).src='<?php echo '//condoative.com/analytics/setWcookie?route='.$_GET['route'].'&ulbid='.$_GET['ulbid']?>';
</script>
</body>
</html>
