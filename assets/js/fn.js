/////////////////////////////////////////////////////
//
// Functions for moritzfriedrich.com
// Copyright 2014, Moritz Friedrich
//


////////////////////////////////////////////////////
//// functions
//

// Switch language
function switchLanguage()
{
	$('[data-translation]').each(function ()
	{
		var text = $(this).attr('data-translation');
		var oldText = $(this).text();
		$(this).attr('data-translation', oldText);
		$(this).text(text);
	});
}


// Handle header icon animation
function headerAnimation(thisObj){
	var thisClass = $(thisObj).attr('class');
	switch (thisClass) {
		case 'theme':
			$(thisObj).addClass('dark-enabled');
			$('html').addClass('theme-dark');
		break;

		case 'theme dark-enabled':
			$(thisObj).removeClass('dark-enabled');
			$('html').removeClass('theme-dark');

			break;

		case 'font-size':
			$(thisObj).addClass('larger');
			$('html').addClass('font-large');
		break;

		case 'font-size larger':
			$(thisObj).removeClass('larger');
			$(thisObj).addClass('smaller');
			$('html').removeClass('font-large');
			$('html').addClass('font-small');
		break;

		case 'font-size smaller':
			$(thisObj).removeClass('smaller');
			$('html').removeClass('font-small');
		break;
		
		case 'language german':
			$(thisObj).addClass('english');
			$(thisObj).removeClass('german');
			switchLanguage();
		break;
				
		case 'language english':
			$(thisObj).addClass('german');
			$(thisObj).removeClass('english');
			switchLanguage();
		break;
	};
}

////////////////////////////////////////////////////
//// click handlers
//

$(document).ready(function (){
	$('.page-settings button').click(function(){
		headerAnimation(this);
	});
});

