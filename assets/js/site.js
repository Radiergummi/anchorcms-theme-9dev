/**
 * init function.
 * initializes the app
 * 
 * @access public
 * @return void
 */
function init() {
	app = getConfig();
	setupListeners();


	// store window width initially
	$('html').addClass('screen-' + app.client.windowWidth());

}


/**
 * getConfig function.
 * 
 * @access public
 * @return void
 */
function getConfig() {
	return {
		client : {
			windowWidth : function() {
				var width = $(window).width(),
						size;
				
				if (width !== undefined) {
					if			(width < 481)	{ size = 'xs'; }
					else if	(width > 480 && width < 769)	{ size = 'sm'; }
					else if	(width > 768 && width < 1201) { size = 'md'; }
					else if	(width > 1200)	{ size = 'lg'; }
				}
				
				return size;
			}
		},
		ui : {
			menu : {
				container : $('body > header'),
				header : $('body > header > .menu-header'),
				toggleMenu : function(event) {
					event.preventDefault();
					$('html').toggleClass('noscroll');
					app.ui.menu.container.toggleClass('open');
				},
				isOpen : function() {
					return app.ui.menu.container.hasClass('open') ? true : false;
				}
			},
			main : $('body > main'),
			search : {
				form : $('#search'),
				input : $('#term'),
				icon : $('#search > .icon')
			}
		},
		pjax : {
			selector : "a[data-pjax]",
			container : "main[role=main]",
			fragment : "main[role=main]",
			setup : function() {
				$().pjax(app.pjax.selector, app.pjax.container, {"fragment": app.pjax.fragment});
				
				// attach pjax click handler
				if ($.support.pjax) {
					$(document).on('click', app.pjax.selector, function(event) {
						// close menu if open
						$('body > header.open').removeClass('open');

						// update current highlighted menu item
						$(app.pjax.selector).removeClass('active');
						$(this).addClass('active');

						// finally call pjax
						$.pjax.click(event, {"container": app.pjax.container, "fragment": app.pjax.fragment});
					});
				}
			}
		},
		globals : {
			resizeTimer : 0
		}
	};
}


/**
 * setupListeners function.
 * 
 * @access public
 * @return void
 */
function setupListeners() {
	// set up a listener for window resizing
	$(window).on('resize', function(event) {
		clearTimeout(app.globals.resizeTimer);
		
		// create a timer
		app.globals.resizeTimer = setTimeout(function() {

			// change the respective class for the root html element
			$('html').attr('class', function(index, content){
				return content.replace(/(^|\s)screen-\S+/g, ' screen-' + app.client.windowWidth());
			});
		}, 250);
	});
	
	// toggle menu
	app.ui.menu.header.on('touchstart click', function(event){ app.ui.menu.toggleMenu(event); });
	
	// close menu if clicked/touched outside
	app.ui.main.on('touchstart click', function(event){
		if(app.ui.menu.isOpen() !== false) {
			app.ui.menu.toggleMenu(event);
		}
	});
	
	// search form hover/focus handling
	app.ui.search.form.hover(function(){
		$(this).addClass('active');
	}, function(){
		if (! app.ui.search.input.is(':focus')) {
			$(this).removeClass('active');
		}
	});

	app.ui.search.input.hover(function(){
		app.ui.search.form.addClass('active');
	}, function(){
		if ( ! $(this).is(':focus')) {
			app.ui.search.form.removeClass('active');
		}
	}).focus(function(){
		app.ui.search.form.addClass('active');
	}).blur(function(){
		app.ui.search.form.removeClass('active');
	});
}