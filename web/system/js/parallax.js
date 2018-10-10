window.addEventListener('scroll', doParallax);
		function doParallax(){
 			  var positionY = window.pageYOffset/2;
  			 document.getElementById("blog").style.backgroundPosition = "0 -" + positionY + "px";
  			 document.getElementById("fox").style.backgroundPosition = "0 -" + positionY + "px";
				}