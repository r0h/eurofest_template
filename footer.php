<section class="footer">
	<div class="container">
		<div class="row bottom_row">
			<div class="col-md-2 bottom_min">
				<div class="bottom_contacts">
					<div class="phone"><i class="fa fa-mobile" aria-hidden="true"></i> +38 050 563 4152</div>
					<div class="phone"><i class="fa fa-mobile" aria-hidden="true"></i> +48 888 760 818</div>
				</div>					
			</div>
			<div class="col-md-8 bottom_min">
				<div class="bottom_menu">
					<ul class="bot_menu">
						<?php wp_nav_menu (array ( 'theme_location' => 'menu_footer' ) ); ?>
					</ul>
				</div>
			</div>
			<div class="col-md-2 bottom_min">
				<div class="footer_logo"><img src="<?php bloginfo( 'template_url' ); ?>/img/harmony.png" alt=""></div>
			</div>
		</div>
	</div>
</section>

	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
<?php wp_footer(); ?>
</body>
</html>