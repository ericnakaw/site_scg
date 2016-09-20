$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	$('[data-toggle="popover"]').popover(); 
	/*Navbar events on scroll moviment*/
	$(window).scroll(function() {
		if($(window).scrollTop() === 0 ){
			$( "#custom-bootstrap-menu" ).removeClass( "navbar-fixed-top" ).addClass( "navbar-static-top" ).css('background-color', 'rgba(250, 250, 250, 0.8)');
			$(" #custom-bootstrap-menu ").css('border-radius', '5px');
		}else{
			$( "#custom-bootstrap-menu" ).removeClass( "navbar-static-top" ).addClass( "navbar-fixed-top" ).css('background-color', '#ffffff');
			$(" #custom-bootstrap-menu ").css('border-radius', '0px');
		}
	});
});
/*Navbar set active link*/
$(document).ready(function () {
	var url = window.location;
	$('ul.nav a[href="'+ url +'"]').parent().addClass('active');
	$('ul.nav a').filter(function() {
		return this.href == url;
	}).parent().addClass('active');
});