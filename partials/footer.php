			<footer>
				<!--<a href="http://anchorcms.com" title="Powered by Anchor CMS">Anchor CMS</a>-->
			</footer>
		</main>
		<!--<script src="http://code.jquery.com/jquery-latest.min.js"></script>-->
		<script src="<? echo theme_url('assets/js/jquery.min.js'); ?>"></script>
		<script src="<? echo theme_url('assets/js/modernizr.min.js'); ?>"></script>
		<script src="<? echo theme_url('assets/js/jquery.pjax.min.js'); ?>"></script>
		<script src="<? echo theme_url('assets/js/site.js'); ?>"></script>
		<script>
			$().ready(function() {
				// initialize the app
				init();				

				// initialize pjax
				app.pjax.setup();
			});
		</script>
	</body>
</html>