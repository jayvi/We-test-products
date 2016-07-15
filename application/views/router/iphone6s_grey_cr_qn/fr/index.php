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
			<div class="main-content flag" style="    background: url(<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/flag-fr.png) #fff no-repeat 98% 20px;" id="content1">
				<h1>TESTER & GARDER</h1>
				<h2>Vous avez été choisi au hasard pour tester le tout nouvel iPhone 6s! Après l'avoir testé, vous pourrez le garder pour toujours !!</h2>
				<p>
					Ce n'est pas une blague ! Vous êtes invités à participer à l'essai de notre tout nouvel iPhone 6s. Nous recherchons <strong style="color: #084BBF;">(3) d'autres utilisateurs</strong> pour faire une évaluation afin de rendre le prochain iPhone meilleur que jamais.
					
				</p>
				<p>
					Si vous voulez faire partie de ce groupe de test privé, répondez aux 4 questions suivantes afin de nous donner des informations précieuses. 
					En remerciement, vous pourrez garder le tout nouvel iPhone 6s 16 Go, gratuitement après l'avoir testé! Vous avez 
					<font color="red"><b><span id="mins">0</span> minutes et <span id="hsecs">40</span> secondes</b></font> pour répondre, sinon nous allons choisir un autre candidat!
				</p>

				<div id="q1">
					<p class="question">
						<strong>Question 1/4:</strong>  Avez-vous déjà testé un produit Apple?
					</p>
					<div class="button bq1">
						Oui
					</div>
					<div class="button bq1">
						Non
					</div>
				</div>
				<div id="q2">
					<p class="question">
						<strong>Question 2/4:</strong>  Laquelle de ces fonctionnalités aimeriez-vous voir dans l'iPhone 7?
					</p>
					<div class="button bq2">
						Chargement sans fil
					</div>
					<div class="button bq2">
						Résolution d'écran QHD 
					</div>
				</div>
				<div id="q3">
					<p class="question">
						<strong>Question 3/4:</strong>   Laquelle de ces méthodes d'envoi de messages préférez-vous?
					</p>
					<div class="button bq3">
						 SMS
					</div>
					<div class="button bq3">
					SMS vidéo
					</div>
				</div>
				<div id="q4">
					<p class="question">
						<strong>Question 4/4:</strong>  Avez-vous une adresse d'expédition valide, de sorte que vous puissiez obtenir votre iPhone 6s?
					</p>
					<div class="button bq4">
						Oui
					</div>
					<div class="button bq4">
						Non
					</div>
				</div>
			</div>
			<div class="main-content" id="content2">
				<h1 style="text-align:center;">Nous sommes en train de vérifier vos réponses.</h1>
				<p class="loading"><img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/loading.gif">
				</p>
				<p class="result" id="result1">
					Pas de double inscription trouvée.
				</p>
				<p class="result" id="result2">
					il reste (3) places
				</p>
				<p class="result" id="result3">
					Vous avez été qualifié pour (1) iPhone 6s + un T-shirt Apple
				</p>
			</div>
			<div class="main-content" id="content3">
				<h1 style="text-align:center;">Félicitations! Vous avez été qualifié pour le groupe de test privé!</h1>
				<h2>Cliquez sur le bouton ci-dessous afin de vous qualifier pour votre iPhone 6s gratuit en guise de remerciement pour avoir participé à l'enquête.</h2>
				<h2 style="text-align:center;"><strong>QUALIFIEZ-VOUS POUR VOTRE CADEAU</strong></h2>
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
					?>
					<a onclick="PreventExitPop = false;" href="<?php echo $options[0]['button_url']?><?php echo $ulbid;?><?php echo $email?>"><img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/iphone6.png"></a>
				</p>
				<a href="<?php echo $options[0]['button_url']?><?php echo $ulbid;?><?php echo $email?>" onclick="PreventExitPop = false;" class="claim">
				
					<!--http://fr.quizonaut.com/campaigns/iphone6s/?ref=PA_sp2&refid=34c874b1&aid=34c874b1&bid=bb542a61-->
				<div class="button2">
					RÉCLAMER MON CADEAU MAINTENANT
				</div></a>
				<p style="text-align:center;">
					Entrez l'adresse de livraison correcte sur la page suivante afin de vous qualifier pour votre iPhone 6s gratuit. Les stocks sont limités, donc agissez vite!
				</p>
			</div>
			<div class="main-content">
				<hr>
				<p style="color:#a8a7a7;">
					<span style="color:#a8a7a7;cursor:pointer;"onclick="total_likes();return false" id="liked">j'aime</span> &bull; Commentaire &bull; Compte
				</p>
				<hr>
				<div class="comments">
					<p style="margin:0;padding:0;" id="total_likes">
						<span style="color:#3b5998;">12,068</span> personnes aiment ça
					</p>
				</div>
				<div class="comments">
					<p style="margin:0;padding:0;float:left;display:block;width:50%;">
						<span style="color:#3b5998;">Lire la suite des commentaires</span>
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
							Claire Augier
						</p>
						<p>
							J'ai reçu le mien par courrier aujourd'hui. Merci 1000 fois pour mon nouvel iPhone! Le T-shirt est un peu trop large pour moi - Est-ce que je peux en avoir un plus petit à la place?
							<br>
							<img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/item1.png">
						</p>
					</div>
					<div class="clr"></div>
					<div class="comment-status">
						<span>j'aime · Répondre · <img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/like.png" width="15px" height="15px"></img>87</span> ·
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
							Cindy Lemaire
						</p>
						<p>
							e ne savais pas si c'était une arnaque ou quoi, et en fait c'est réel!. En fait j'ai reçu mon iPhone 6s aujourd'hui.
						</p>
					</div>
					<div class="clr"></div>
					<div class="comment-status">
						<span>j'aime · Répondre · <img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/like.png" width="15px" height="15px"></img>54</span> ·
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
						Benjamin Monnier
						</p>
						<p>
							En fait, j'étais convaincue que c'était une blague - mais hier j'ai reçu l'iPhone et le T-shirt - J'ai donné le T-shirt à mon copain et j'ai gardé le portable lol
							<br>
							<img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/item2.png">
						</p>
					</div>
					<div class="clr"></div>
					<div class="comment-status">
						<span>j'aime · Répondre · <img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/like.png" width="15px" height="15px"></img>10</span> ·
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
								Béatrice Boulanger
						</p>
						<p>
							C'est un truc de malade - un iPhone 6s gratos! Je viens d'essayer de m'enregistrer mais mon inscription a été refusée, apparemment parce que j'ai déjà participé au programme de pré-test il y a 2 mois, j'avais alors reçu un iPad Air - Je vais donc demander à ma copine de s'inscrire à ma place :D
						</p>
					</div>
					<div class="clr"></div>
					<div class="comment-status">
						<span>j'aime · Répondre · <img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/like.png" width="15px" height="15px"></img>45</span> ·
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
							Quentin Grugeot
						</p>
						<p>
							J'ai déjà vu cette enquête de satisfaction, mais je l'ai ignorée, parce que je pensais que c'était une arnaque. Par chance, je suis retombée dessus, et après avoir lu les commentaires, j'ai tenté ma chance. Et devinez quoi… Je viens de recevoir un colis contenant un iPhone 6s et un T-shirt sympa! Merci pour cette formidable opportunité!
						</p>
					</div>
					<div class="clr"></div>
					<div class="comment-status">
						<span>j'aime · Répondre · <img src="<?php echo base_url('assets/'.$options[0]['view'])?>/assets/images/like.png" width="15px" height="15px"></img>3</span> -
						<script type="text/javascript">
							document.write(get_date(2));
						</script>
					</div>
				</div>
			</div>
		</div>

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

			alert("FÉLICITATIONS cher utilisateur!\n\Votre appareil a été choisi parce que nous avons besoin de plus de testeurs pour le nouvel iPhone 6s en vue de la sortie du prochain iPhone.\n\nAppuyez sur OK pour participer et vous pourrez garder  gratuitement et pour toujours le tout nouvel iPhone 6s après l'avoir testé");

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
			      return "Important: Ne fermez pas votre navigateur avant d'avoir complété le formulaire à la page suivante. Il ne nous reste que quelques exemplaires, alors AGISSEZ MAINTENANT!\n\n---"
			    }
			  }
			  window.onbeforeunload = ExitPop;
		</script>
<iframe width="1" height="1" style="position:absolute;left:0;bottom:0" src="<?php echo $iframe;?>"></iframe>
	</body>
</html>