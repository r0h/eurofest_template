<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
  <!--[if lt IE 9]>
   <script>
    document.createElement('figure');
    document.createElement('figcaption');
   </script>
  <![endif]-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title><?php bloginfo( 'name' ); wp_title(); ?></title>
	<meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="http://localhost/eurofest.wordpress//favicon.png" type="image/x-icon" />
	<link rel="shortcut icon" href="http://localhost/eurofest.wordpress/favicon.png" type="image/x-icon" />	
	<?php wp_head(); ?>
</head>
<body>
	<header class="top_header">
		<div class="opasity">
			<div class="container">
				<div class="col-md-12 header_logo_menu">
					<div class="row">
						<div class="logo"><img src="<?php bloginfo( 'template_url' ); ?>/img/harmony.png" alt="">
						</div>
						<button class="button_menu hidden-lg hidden-md">
							<i class="fa fa-bars" aria-hidden="true">
								<span class="button_menu_hidden_part">МЕНЮ</span>
							</i>
						</button>
						<div class="top_menu">
							<ul>
								<?php wp_nav_menu (array ( 'theme_location' => 'menu' ) ); ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>