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
				<div class="footer_logo">
					<div class="footer_center">
						<img src="<?php bloginfo( 'template_url' ); ?>/img/harmony.png" alt="">
					</div>
				</div>
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
	<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter43151849 = new Ya.Metrika({
                    id:43151849,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/43151849" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92773965-1', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_footer(); ?>
</body>
</html>