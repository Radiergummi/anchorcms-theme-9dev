<!doctype html>
<html class="no-js" lang="de">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title><? echo page_title(); ?> | <? echo site_name(); ?></title>

		<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:300,400,700' rel='stylesheet' type='text/css'>
		<link href="http://fonts.googleapis.com/css?family=Roboto:400,700,900" rel="stylesheet" type="text/css" media="screen and (max-resolution:191dpi), screen and (max-resolution: 1.9dppx)">
		<link href="http://fonts.googleapis.com/css?family=Roboto:100,400,700" rel="stylesheet" type="text/css" media="screen and (min-resolution:192dpi), screen and (min-resolution: 2dppx)">
		<!--<link href="<? echo theme_url('assets/css/roboto.css'); ?>"  rel="stylesheet" media="screen" type="text/css" />-->

		<link href="<? echo theme_url('assets/css/style.css'); ?>"  rel="stylesheet" media="screen" type="text/css" />
		<link rel="shortcut icon" href="<? echo theme_url('assets/img/favicon.ico'); ?>" type="image/x-icon" />
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Add per-post CSS -->
		<? if(article_css()): ?>
			<style><? echo article_css(); ?></style>
		<? endif; ?>
		
		<!-- Add per-post JS -->
		<? if(article_js()): ?>
			<script><? echo article_js(); ?></script>
		<? endif; ?>
		
		<script>
			function x(t,e,a,n){t.attachEvent?t.attachEvent("on"+e,a):t.addEventListener(e,a,n)}function f(t,e,a,n,o){var c;op=e,c=setInterval(function(){op<=a?(t.style.opacity=a,t.style.filter="alpha(opacity = "+a+")",clearInterval(c),"function"==typeof o&&o(!0)):(op-=.1,t.style.opacity=op,t.style.filter="alpha(opacity = "+100*op+")")},n)}x(window,"load",function(){setTimeout(function(){f(document.getElementById("l"),1,0,40,function(){document.getElementById("l").remove()})},300)},!1);
		</script>
	</head>
	<body>
		<div id="l" style="position:fixed;top:0;right:0;bottom:0;left:0;display:table;width:100%;height:100%;background:#fff ;z-index:10000;opacity:1;filter:alpha(opacity=100);"></div>
		</div>
		<header id="menu">
   		<div class="menu-header">
	   		<span class="icon menu"></span><span>Menü</span><span class="icon close"></span>
	   	</div>
	    <nav role="navigation">
		    <ul>
			    <? for($i = 1; menu_items(); $i++) : ?>
						<li><a data-pjax href="<? echo menu_url(); ?>" title="<? echo menu_title(); ?>" <? if(menu_active()){echo 'class="active"';} ?>><span class="icon <? echo menu_relative_url(); ?>"></span><span><? echo menu_name(); ?></span></a></li>
			    <? endfor; ?>
			    <li>
			    	<form id="search" action="<? echo search_url(); ?>" method="post" autocomplete="off">
							<span class="icon search"></span><input type="search" role="search" id="term" name="term" placeholder="Suchen" aria-label="Suche" value="<? echo search_term(); ?>" />
						</form>
			    </li>
		    </ul>
	    </nav>
		</header>
		<main role="main" id="panel">