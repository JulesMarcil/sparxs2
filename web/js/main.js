$(document).ready(function() { 

	/* Montrer la page active sur la top-nav */
	var url = document.URL.split("/"); /*get page name*/
	var activePage1 = url[url.length-1];
	var activePage2 = url[url.length-2]; /*get page name*/
	$("#navbar-"+activePage1).addClass("active");
	$("#navbar-"+activePage2).addClass("active");
});