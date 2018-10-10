var myVar;

function myFunction() {
	topbar.show();
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("carregar").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
  document.body.style.background = "none";
  topbar.hide();

	//Use a RegEx pattern to search for an id, if present
	var pattern = new RegExp('\#(.*)');
	var id = pattern.exec(window.location)[0].replace('#','');
	//Prevent the browser's default behavior of jumping to the id
	document.location = '#';
	//When the page finishes loading, smoothly scroll to the specified content
	$(document).ready(function() {
	    if(id != "") {
	        $('html, body').animate({
	            scrollTop: $('#' + id).offset().top - 75
	        }, 1000);
	    }
	});
	

}