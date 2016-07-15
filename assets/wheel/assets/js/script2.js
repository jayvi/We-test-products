
function startSpin(){
	
	var spinWin = document.getElementById("spin");
	var winWin = document.getElementById("win");
	var winWinP = document.getElementById("winP");
	var winWin2 = document.getElementById("win2");
	
	spinWin.className = spinWin.className + "spinAround";
		winWin.style.display = "none";
		winWinP.style.display = "block";
	setTimeout(function(){
		winWinP.style.display = "none";
		winWin2.style.display = "block";
		},150);
		
		setTimeout(function(){
		alert("Sorry... \n \nPlease try again , you have one extra spin!\n\n");
		},6500);
}

function spin2(){
	var spinWin = document.getElementById("spin");
	var winWin = document.getElementById("win");
	var winWinP = document.getElementById("winP");
	var winWin2 = document.getElementById("win2");
	var iphone = document.getElementById("iphone");
	
	spinWin.className = spinWin.className + " spinAround2";
	winWin.style.display = "none";
		winWinP.style.display = "block";
	setTimeout(function(){
		winWinP.style.display = "none";
		winWin2.style.display = "block";
		},150);
		
		setTimeout(function(){
		spinWin.className = spinWin.className + " Op";
			},6600);
		
		setTimeout(function(){
		iphone.style.display = "block";
		
		},6800);
		

		setTimeout(function(){
			var verf = document.getElementById("verf");
		verf.style.display = "block";},7000);

		setTimeout(function(){
			var html ='<img style="margin:0 auto; display: block;    width: 74px;" src="https://landing.quizawards.com/assets/lucky-wheel/images/apple.png"/><div class="progress"></div>';
          $('.brand').hide();
          		$('.loaderHere').html(html);   
		
		},8500);
		
		
}

