<!doctype html>
<html style="margin-top: 0!important; padding-top: 0!important;">
<head>
  <meta charset="utf-8">
  <title><?php wp_title(''); ?></title>
  <meta name="keywords" content="HTML5 Template">
  <meta name="description" content="">
  <meta name="author" content="itembridge.com">
  <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/fav180.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/fav32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/fav16.png">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
  
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
  <?php if(is_user_logged_in()){ ?>
    <?php if(!current_user_can('administrator')){ ?>
      <style>
        #wpadminbar
        {
          display: none;
        }
        html
        {
          margin-top: 0!important;
          padding-top: 0!important; 
        }

        html { margin-top: 0 !important; }
        * html body { margin-top: 0 !important; }
        @media screen and ( max-width: 782px ) {
          html { margin-top: 0 !important; }
          * html body { margin-top: 0 !important; }
        }

      </style>
    <?php } ?>
  <?php } ?>

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <?php wp_head(); ?> 
</head>

<body>

<div class="preloader"><span></span></div>
<!-- .preloader -->

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
						<a href="/">
							<span class="hidden-xs hidden-sm">
								<i class="hover-label">MARAKATA</i>
								MARAKATA
							</span>
							<span class="hidden-md hidden-lg icon">
								M
							</span>
						</a>
					</li>
					<li>
						<a target="_blank" href="https://deviatochka.ru">
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
						<a class="lc" href="#contact">
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
						<?php if(is_user_logged_in()){ ?>
							<a href="<?php echo home_url(); ?>/wp-login.php?action=logout&amp;_wpnonce=a6cad512ba" id="enter">
								<span class="hidden-xs hidden-sm">
									<i class="hover-label">Выйти</i>
									Выйти
								</span>
								<span class="hidden-md hidden-lg icon">
									<svg aria-hidden="true" data-prefix="fas" data-icon="sign-out-alt" class="svg-inline--fa fa-sign-out-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="35" height="25"><path fill="#333333" d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"></path></svg>
								</span>
							</a>
						<?php } else { ?>
							<a href="#" id="enter" data-toggle="modal" data-target="#notify-my">
								<span class="hidden-xs hidden-sm">
									<i class="hover-label">Вход</i>
									Вход
								</span>
								<span class="hidden-md hidden-lg icon">
									<svg aria-hidden="true" data-prefix="fas" data-icon="sign-in-alt" class="svg-inline--fa fa-sign-in-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="35" height="25"><path fill="#333333" d="M416 448h-84c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h84c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32h-84c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h84c53 0 96 43 96 96v192c0 53-43 96-96 96zm-47-201L201 79c-15-15-41-4.5-41 17v96H24c-13.3 0-24 10.7-24 24v96c0 13.3 10.7 24 24 24h136v96c0 21.5 26 32 41 17l168-168c9.3-9.4 9.3-24.6 0-34z"></path></svg>
								</span>
							</a>
						<?php } ?>
					</li>
				</ul>
			</div>
		</div><!-- .header-box -->
  </div>
</header><!-- .site-header -->

<div class="main">
  <?php if(!is_user_logged_in()){ ?>
  	  <section id="home" class="section active">
  			<div class="section-wrap">
  				<div class="section-content">
  					<div class="container">
  						<div class="text-center">
  							<div class="clearfix"></div>
  							<h1 class="h1-section-title"
  								data-animation="fadeInDown"
  								data-out-animation="fadeOutUp"
  								data-out-animation-delay="300">MARAKATA</h1>
  							
  							<div class="row section-description">
  								<div class="col-sm-12">
  									<h3 data-animation="fadeInDown"
  										data-animation-delay="300"
  										data-out-animation="fadeOutUp"
  										data-out-animation-delay="300">
  									Метод работы с напряжениями телесного подсознания</h3>
  									<p class="lead"
  										data-animation="fadeInDown"
  										data-animation-delay="300"
  										data-out-animation="fadeOutUp"
  										data-out-animation-delay="300">
  										Данная программа представляет собой цифровую составляющую проектов <span style="color: #d94f5c;">"MARAKATA"</span> и <span style="color: #d94f5c;">"ДЕВЯТОЧКА".</span>
  										Пользователям доступны два нейрофизиологических оцифратора дисфункций, работающих на принципах феномена <span style="color: #d94f5c;">"Р300"</span>. Каждый из них предназначен для конкретного проекта и не может быть заменен другим.
  									</p>
  								</div>
  							</div>
  							<?php if(!is_user_logged_in()){ ?>
  							<a href="#"
  								class="btn btn-default btn-main"
  								data-hover='В "MARAKATA"'
  								data-animation="fadeInDown"
  								data-animation-delay="600"
  								data-out-animation="fadeOutUp"
  								data-out-animation-delay="600"
  								data-toggle="modal"
  								data-target="#notify-my"><span class="button-label">ВОЙТИ</span></a>
  							<?php } ?>
  						</div>
  					</div>
  				</div><!-- .section-content -->
  			</div><!-- .section-wrap -->
  	  </section><!-- #home.section -->
  <?php }?>
  <?php if(is_user_logged_in()){ ?>
  	<?php if(is_user_role('contributor') || is_user_role('administrator') || is_user_role('author')) { ?>
		  <section id="marakata" class="section active">
				<div class="section-wrap">
					<div class="section-content">
						<div class="container">
							<div class="row">
							  <div class="col-md-12 no_padding_wrap content" style="text-align: center; margin-bottom: 15px">
							    <div class="btn-group btn_mode_wrap" data-toggle="buttons">
							      <label class="btn btn-default btn_mode btn-lg active option1">
							        <input type="radio" name="options" id="option1">Личная история
							      </label>
							      <label class="btn btn-default btn_mode btn-lg option2">
							        <input type="radio" name="options" id="option3">Актуальность
							      </label>
							    </div>
							    <div class="personal hidden">
							      <h2 class="text-center section-title">Актуальность</h2>
							      <div class="bs-example col-md-6 col-md-offset-3">
							        <form role="form">
							          <textarea class="form-control personal_history" rows="3"></textarea>
							        </form>
							      </div>
							    </div>
							    <div class="actuality">
							      <h2 class="text-center section-title">Личная история</h2>
							      <div id="carousel-example-generic" class="carousel carousel_marakata slide">
							        <!-- Indicators -->
							        <ol class="carousel-indicators">
							          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
							          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
							          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
							          <li data-target="#carousel-example-generic" data-slide-to="4"></li>
							          <li data-target="#carousel-example-generic" data-slide-to="5"></li>
							          <li data-target="#carousel-example-generic" data-slide-to="6"></li>
							          <li data-target="#carousel-example-generic" data-slide-to="7"></li>
							          <li data-target="#carousel-example-generic" data-slide-to="8"></li>
							          <li data-target="#carousel-example-generic" data-slide-to="9"></li>
							          <li data-target="#carousel-example-generic" data-slide-to="10"></li>
							          <li data-target="#carousel-example-generic" data-slide-to="11"></li>
							        </ol>

							        <!-- Wrapper for slides -->
							        <div class="carousel-inner">
							          <div class="item active">
							            <div class="carousel-caption">
							              <h3>Физическое переживание непереносимости одиночества</h3>
							            </div>
							          </div>
							          <div class="item">
							            <div class="carousel-caption">
							              <h3>Состояние нехватки воздуха</h3>
							            </div>
							          </div>
							          <div class="item">
							            <div class="carousel-caption">
							              <h3>Переживание чувства вины</h3>
							            </div>
							          </div>
							          <div class="item">
							            <div class="carousel-caption">
							              <h3>Переживание обиды</h3>
							            </div>
							          </div>
							          <div class="item">
							            <div class="carousel-caption">
							              <h3>Самообман</h3>
							            </div>
							          </div>
							          <div class="item">
							            <div class="carousel-caption">
							              <h3>Переживание потери или неудачи</h3>
							            </div>
							          </div>
							          <div class="item">
							            <div class="carousel-caption">
							              <h3>Суета, беспокойства, страх</h3>
							            </div>
							          </div>
							          <div class="item">
							            <div class="carousel-caption">
							              <h3>Раздраженная злость</h3>
							            </div>
							          </div>
							          <div class="item">
							            <div class="carousel-caption">
							              <h3>Самоограничения и занижения самооценки</h3>
							            </div>
							          </div>
							          <div class="item">
							            <div class="carousel-caption">
							              <h3>Важность мнения чужих людей</h3>
							            </div>
							          </div>
							          <div class="item">
							            <div class="carousel-caption">
							              <h3>Моя правда</h3>
							            </div>
							          </div>
							          <div class="item">
							            <div class="carousel-caption">
							              <h3>Несправедливость и непримиримость</h3>
							            </div>
							          </div>
							        </div>
							        <!-- Controls -->
							        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
							          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 10 11" enable-background="new 0 0 10 11" xml:space="preserve" width="30">
					          		<path fill="#000" d="M10,6H0V5h10V6L10,6z M0,6V5l5-5l1,0L0,6z M5,11L0,6V5l6,6L5,11z"/>
					          	  </svg>
							        </a>
							        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
							          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 10 11" enable-background="new 0 0 10 11" xml:space="preserve" width="30">
					          		<path fill="#000" d="M0,6V5h10v1H0L0,6z M4,0h1l5,5v1L4,0z M4,11l6-6v1l-5,5L4,11z"/>
					          	  </svg>
							        </a>
							      </div>
							    </div>
							  </div>
							</div>
							<h2 class="text-center section-title">Исходные данные</h2>
							
							<div class="row section-description text-center no_padding_wrap">
								<div class="col-md-2 col-xs-2 marakata_sim-wrap">
									<div class="marakata_sim-inner">
										<div class="marakata_sim marakata_sim_prot marakata_sim_m marakata_sim-1 marakata_sim_from"></div>
									</div>
								</div>
								<div class="col-md-2 col-xs-2 marakata_sim-wrap">
									<div class="marakata_sim-inner">
										<div class="marakata_sim marakata_sim_prot marakata_sim_m marakata_sim-2 marakata_sim_from"></div>
									</div>
								</div>
								<div class="col-md-2 col-xs-2 marakata_sim-wrap">
									<div class="marakata_sim-inner">
										<div class="marakata_sim marakata_sim_prot marakata_sim_m marakata_sim-3 marakata_sim_from"></div>
									</div>
								</div>
								<div class="col-md-2 col-xs-2 marakata_sim-wrap">
									<div class="marakata_sim-inner">
										<div class="marakata_sim marakata_sim_prot marakata_sim_m marakata_sim-4 marakata_sim_from"></div>
									</div>
								</div>
								<div class="col-md-2 col-xs-2 marakata_sim-wrap">
									<div class="marakata_sim-inner">
										<div class="marakata_dot">.</div>
									</div>
								</div>
								<div class="col-md-2 col-xs-2 marakata_sim-wrap">
									<div class="marakata_sim-inner">
										<div class="marakata_sim marakata_sim_prot marakata_sim_m marakata_sim-5 marakata_sim_from"></div>
									</div>
								</div>
							</div>
							<h2 class="text-center section-title"
								data-animation="fadeInDown"
								data-animation-delay="300"
								data-out-animation="fadeOutUp"
								data-out-animation-delay="300">Результат</h2>
							<div class="row section-description text-center no_padding_wrap"
										data-animation="fadeInDown"
										data-animation-delay="400"
										data-out-animation="fadeOutUp"
										data-out-animation-delay="400">
								<div class="col-md-2 col-xs-2 marakata_sim-wrap">
									<div class="marakata_sim-inner">
										<div class="marakata_sim marakata_sim_prot marakata_sim_m marakata_sim-6"></div>
									</div>
								</div>
								<div class="col-md-2 col-xs-2 marakata_sim-wrap">
									<div class="marakata_sim-inner">
										<div class="marakata_sim marakata_sim_prot marakata_sim_m marakata_sim-7"></div>
									</div>
								</div>
								<div class="col-md-2 col-xs-2 marakata_sim-wrap">
									<div class="marakata_sim-inner">
										<div class="marakata_sim marakata_sim_prot marakata_sim_m marakata_sim-8"></div>
									</div>
								</div>
								<div class="col-md-2 col-xs-2 marakata_sim-wrap">
									<div class="marakata_sim-inner">
										<div class="marakata_sim marakata_sim_prot marakata_sim_m marakata_sim-9"></div>
									</div>
								</div>
								<div class="col-md-2 col-xs-2 marakata_sim-wrap">
									<div class="marakata_sim-inner">
										<div class="marakata_dot">.</div>
									</div>
								</div>
								<div class="col-md-2 col-xs-2 marakata_sim-wrap">
									<div class="marakata_sim-inner">
										<div class="marakata_sim marakata_sim_prot marakata_sim_m marakata_sim-10"></div>
									</div>
								</div>
							</div>
							<div class="row" style="text-align: center;">
							  <button type="button" class="btn btn-default btn-lg btn_reset btn_reset_prot">Начать с начала</button>
							  
							</div>
						</div>
					</div><!-- .section-content -->
				</div><!-- .section-wrap -->
		  </section><!-- #marakata.section --> 
  	<?php } ?>
  <?php } ?>
 
  <section id="contact" class="section">
		<div class="section-wrap">
			<div class="section-content">
				<div class="container">
					<div class="contact-wrap relative">
						<div class="row">
							<div class="col-xs-offset-0 col-sm-12">
								<h2 class="text-center section-title"
									data-animation="fadeInDown"
									data-animation-delay="500"
									data-out-animation="fadeOutUp"
									data-out-animation-delay="100">О проекте "Marakata"</h2>

								<p class="lead"
									data-animation="fadeInDown"
									data-animation-delay="700"
									data-out-animation="fadeOutUp"
									data-out-animation-delay="300">
									<p>Комплект состоит из органических носителей флюида стабилизированных золотом, рабочих полей -  <i>утилизатора</i> и <i>усилителя</i>, а также <i>нейрофизиологического оцифратора дисфункций</i>, работающего на принципах феномена Р300.</br>
									<b>Возможны три режима работы:</b></p>
									<p>
									<b>1.</b> утилизация негативного контента;<br>
									<b>2.</b> усиление позитивного контента; <br>
									<b>3.</b> инверсия (преобразование) проблемного контента в ресурс жизненной силы. 
									</p>
									<p>Цифровые ресурсные коды также можно переносить на водно-солевые среды и употреблять по назначению.</p>
									<p>
									Технология позволяет успешно работать с любыми напряжениями телесного подсознания, актуальными текущими переживаниями и проблемами здоровья клиентов, сновидениями, неблагоприятными ситуационными рядами, пересматривать личную историю, как в очной консультации клиента, так и дистантно.</p>
									<p>
									Технология <b>"Marakata"</b> может использоваться как самостоятельно, в рамках практической психосоматики, так и в сочетании с другими телесно ориентированными методами работы с клиентом, включая остеопатию, краниосакральную терапию, биодинамику, прикладную кинезиологию и прочая.</p>
									<p>
									Больше о проекте <b>"Marakata"</b> Вы можете узнать из одноименной главы в книге Юрия Чикурова <a class="body_link" target="_blank" href="https://chikurov.com/kniga/">"Биологическое Центрирование"</a>.</p>
									<div class="row"
										data-animation="fadeInDown"
										data-animation-delay="900"
										data-out-animation="fadeOutUp"
										data-out-animation-delay="500">
										<div class="col-xs-12 col-sm-6 col-md-6">
											<a target="_blank" href="<?php bloginfo('template_url'); ?>/img/98.png"><img src="<?php bloginfo('template_url'); ?>/img/98.png" alt="Игровое поле"></a>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6">
											<a target="_blank" href="<?php bloginfo('template_url'); ?>/img/99.png"><img src="<?php bloginfo('template_url'); ?>/img/99.png" alt="Фишки"></a>
										</div>
										<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
											<a target="_blank" href="<?php bloginfo('template_url'); ?>/img/patent.png"><img src="<?php bloginfo('template_url'); ?>/img/patent.png" alt="Патент"></a>
										</div>
									</div>
								</p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div><!-- .contact-wrap -->
				</div>
			</div><!-- .section-content -->
		</div><!-- .section-wrap -->
  </section><!-- #contact.section -->
</div><!-- .main -->


<div class="modal fade text-center notify-my" id="notify-my" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
			</div>
			
			<div class="modal-body">
				<h4 class="modal-title">Войти в программу</h4>
				<p>Для входи в программу введите ниже Ваши логин и пароль</p>				
				
				<form name="loginform" id="loginform" action="<?php echo esc_url( site_url( 'wp-login.php', 'login_post' ) ); ?>" method="post">
					<div id="mc_embed_signup_scroll">
						<div class="mc-field-group form-group">
							<input id="user_login" class="form-control email" type="text" name="log" placeholder="Логин" value="<?php echo esc_attr($user_login); ?>" size="20">
						</div>
						<div class="mc-field-group form-group">
							<input id="user_pass" class="form-control email" type="password" name="pwd" placeholder="Пароль" size="20">
						</div>
						<div class="clearfix">
				    <?php
				    /**
				     * Fires following the 'Password' field in the login form.
				     *
				     * @since 2.1.0
				     */
				    do_action( 'login_form' );
				    ?>
				    <!-- <p class="note_small">Что бы получить доступ </p> -->
				    <p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever" <?php checked( $rememberme ); ?> /> <?php esc_attr_e('Remember Me'); ?></label></p>
				        <input type="submit" name="wp-submit" id="wp-submit" class="button btn btn-default" value="<?php esc_attr_e('Log In'); ?>" />
				<?php   if ( $interim_login ) { ?>
				        <input type="hidden" name="interim-login" value="1" />
				<?php   } else { ?>
				        <input type="hidden" name="redirect_to" value="<?php echo esc_attr($redirect_to); ?>" />
				<?php   } ?>
				<?php   if ( $customize_login ) : ?>
				        <input type="hidden" name="customize-login" value="1" />
				<?php   endif; ?>
				        <input type="hidden" name="testcookie" value="1" />
				    </div>
				  </div>
				</form>
			</div>
		</div>
  </div>
</div>
<?php wp_footer(); ?>
<!--[if (!IE)|(gt IE 8)]><!-->
  <script src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.3.min.js"></script>
<!--<![endif]-->

<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap-select.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
<!-- <script src="<?php //bloginfo('template_url'); ?>/js/jquery.ajaxchimp.min.js"></script> -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.plugin.min.js"></script> 
<!-- <script src="<?php //bloginfo('template_url'); ?>/js/jquery.countdown.min.js"></script> -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.mCustomScrollbar.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.touchwipe.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/included-plagins.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/froogaloop2.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter35230195 = new Ya.Metrika({
                    id:35230195,
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
<noscript><div><img src="https://mc.yandex.ru/watch/35230195" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
