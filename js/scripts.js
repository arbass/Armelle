

$('.open_fast').click(function(){
	$('.popup_fast').css({'top':$(window).scrollTop() +100}).addClass('active');
	$('.bg_popup').fadeIn();
	
});