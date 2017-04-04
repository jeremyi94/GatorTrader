/* Author: Luis Zuno
   Web: luiszuno.com
*/


// Jquery with no conflict
jQuery(document).ready(function($) {

	//##########################################
	// POP IMAGE
	//##########################################
	
	$(".thumbnails a").fancybox({
		'transitionIn'	:'elastic',
		'transitionOut'	:'elastic',
		'speedIn'		:200,
		'speedOut'		:100,
		'overlayShow'	:false
	});
	
	//##########################################
	// TWITTER BOOTSTRAP
	//##########################################
	
	$('.dropdown-toggle').dropdown();
	
	$('#topbar').scrollspy();
	
	$('#information-tabs a:first').tab('show');
	
	
	
});

	


