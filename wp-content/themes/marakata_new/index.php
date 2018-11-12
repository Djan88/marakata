<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php wp_title(''); ?></title>
  <meta name="keywords" content="HTML5 Template">
  <meta name="description" content="">
  <meta name="author" content="itembridge.com">
  <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.ico">
  
  <!-- Fonts -->
 <!--  <link href="//fdonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900" rel="stylesheet"> -->

  <!-- Plugins CSS -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.mCustomScrollbar.min.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <?php wp_head(); ?> 
</head>

<body>

<div class="preloader"><span></span></div><!-- .preloader -->

<div class="background">
  <div class="layer background-image page-bg-1"></div>
  
  <div class="layer clouds">
		<div class="cloud cloud-1">
			<img src="<?php bloginfo('template_url'); ?>/img/cloud-1.png" width="1600" height="850" alt="#">
		</div>
		
		<div class="cloud cloud-2">
			<img src="<?php bloginfo('template_url'); ?>/img/cloud-2.png" width="1600" height="850" alt="#">
		</div>
		
		<div class="cloud cloud-3">
			<img src="<?php bloginfo('template_url'); ?>/img/cloud-1.png" width="1600" height="850" alt="#">
		</div>
  </div>
</div><!-- .background -->

<header class="site-header">
  <div class="row header-wrap">
		<div class="col-sm-5 header-box">
			<div id="main-menu" class="main-menu">
				<ul>
					<li>
						<a href="#marakata">
							<span class="hidden-xs hidden-sm">
								<i class="hover-label">MARAKATA</i>
								MARAKATA
							</span>
							<span class="hidden-md hidden-lg icon">
								M
							</span>
						</a>
					</li><!--
			--> <li>
						<a href="#deviatochka">
							<span class="hidden-xs hidden-sm">
								<i class="hover-label">Девяточка</i>
								Девяточка
							</span>
							<span class="hidden-md hidden-lg icon">
								9
							</span>
						</a>
					</li>
				</ul>
			</div>
		</div><!-- .header-box -->
		
		<div class="col-sm-2 header-box logo-box text-center">
			<!-- <a href="index.html"><img src="img/logo.svg" width="108" height="78" alt="#"></a> -->
			<a href="index-1.html"><img src="<?php bloginfo('template_url'); ?>/img/logo_mara.svg" width="108" height="78" alt="#"></a>
			<!-- <a href="index.html"><img src="img/mara.png" alt="#"></a> -->
		</div><!-- .header-box -->
		
		
		<div class="col-sm-5 header-box">
			<div id="main-menu" class="main-menu pull-right">
				<ul>
					<li>
						<a href="#contact">
							<span class="hidden-xs hidden-sm">
								<i class="hover-label">О проекте</i>
								О проекте
							</span>
							<span class="hidden-md hidden-lg icon">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 25 25" enable-background="new 0 0 25 25" xml:space="preserve" width="25" height="25">
									<path fill="#333333" d="M12.5,25C5.6,25,0,19.4,0,12.5C0,5.6,5.6,0,12.5,0C19.4,0,25,5.6,25,12.5C25,19.4,19.4,25,12.5,25L12.5,25z
									M12.5,0.9C6.1,0.9,0.9,6.1,0.9,12.5c0,6.4,5.2,11.6,11.6,11.6c6.4,0,11.6-5.2,11.6-11.6C24.1,6.1,18.9,0.9,12.5,0.9L12.5,0.9z
									M11.6,20.2V9.3h1.8v10.9H11.6L11.6,20.2z M12.5,7.5c-0.8,0-1.4-0.6-1.4-1.4c0-0.8,0.6-1.4,1.4-1.4c0.8,0,1.4,0.6,1.4,1.4
									C13.9,6.9,13.3,7.5,12.5,7.5L12.5,7.5z"/>
								</svg>
							</span>
						</a>
					</li><!--
					--><li>
						<a href="#enter" id="enter">
							<span class="hidden-xs hidden-sm">
								<i class="hover-label">Войти</i>
								Войти
							</span>
							<span class="hidden-md hidden-lg icon">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 29 18" enable-background="new 0 0 29 18" xml:space="preserve" width="29" height="18">
									<path fill="#333333" d="M26.4,0H2.6C1.2,0,0,1.2,0,2.6v12.9C0,16.8,1.2,18,2.6,18h23.7c1.5,0,2.6-1.1,2.6-2.6V2.6
									C29,1.2,27.8,0,26.4,0L26.4,0z M26.4,1c0.2,0,0.3,0,0.4,0.1l-12.3,9.5L2.2,1.1C2.3,1.1,2.5,1,2.6,1H26.4L26.4,1z M2.6,17
									c-0.2,0-0.3,0-0.4-0.1l8.4-6.5L9.8,9.7l-8.4,6.5c-0.2-0.2-0.3-0.5-0.3-0.8V2.6c0-0.3,0.1-0.6,0.3-0.8l13.2,10.2L27.7,1.7
									c0.2,0.2,0.3,0.5,0.3,0.8v12.9c0,0.3-0.1,0.6-0.3,0.8l-8.5-6.5l-0.8,0.7l8.4,6.5c-0.1,0-0.3,0.1-0.4,0.1H2.6L2.6,17z"/>
								</svg>
							</span>
						</a>
					</li>
				</ul>
			</div>
		</div><!-- .header-box -->
  </div>
</header><!-- .site-header -->


</body>
</html>
