<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Шлюз | Пивной ресторан</title>
    
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href="css/main.css" rel="stylesheet">


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	
	<div id="site" class="container-fluid">
  	
	  	<!-- Header -->
	  	
		<header id="header" class="row">
			<div class="wrapper">
			  	<div id="top" class="row">
				  	<div id="logo" class="col-xs-12 col-sm-4 col-md-3">
					  	<a href="#" title="Шлюз"><img src="img/logo.png" width="230" height="58" alt="Шлюз" /></a>
					 </div>
				  	<div id="top-menu" class="col-xs-12 col-sm-8 col-md-6">
					  	<ul class="menu">
						  	<li><a href="#">Главная</a></li>
						  	<li><a href="#menu">Меню</a></li>
						  	<li><a href="#decor">Интерьер</a></li>
						  	<li><a href="#">Афиша</a></li>
						  	<li><a href="#">Контакты</a></li>
						  	<li><a href="#">Вакансии</a></li>
					  	</ul>
				  	</div>
				  	<div id="mobile-icon"><a href="#"><i class="fa fa-bars fa-2x"></i></a></div>
				  	<ul id="mobile-menu" class="menu">
					  	<li><a href="#">Главная</a></li>
					  	<li><a href="#menu">Меню</a></li>
					  	<li><a href="#decor">Интерьер</a></li>
					  	<li><a href="#">Афиша</a></li>
					  	<li><a href="#">Контакты</a></li>
					  	<li><a href="#">Вакансии</a></li>
				  	</ul>
				  	<div id="rent" class="col-xs-12 col-sm-12 col-md-3">
					  	<p class="main-capture">Забронировать столик</p>
					  	<p class="description">8 800 123 45 67</p>
				  	</div>
				  	<div class="clear"></div>
			  	</div>
			  	<div id="social" class="row">
				  	<ul class="social">
				  		<li><a href="#"><i class="vk"></i></a></li>
				  		<li><a href="#"><i class="facebook"></i></a></li>
				  		<li><a href="#"><i class="instagram"></i></a></li>
				  		<li><a href="#"><i class="youtube"></i></a></li>
				  	</ul>
			  	</div>
			</div>
		</header>
		
		<!-- Events -->
		
		<div id="events" class="row">
			<div class="wood"></div>
			<div class="wrapper">
				<div class="header-wrapper row">
					<h2 class="heading">События</h2>
					<span class="desc-events">Спортивные трансляции</span>
				</div>
				<div id="events-list" class="row">
					<?php
					include 'events.php';
					?>
					<?php
					foreach ( $events as $k=>$v ) {
						if ( $v['type'] == 'Событие' ) { 	
					?>
					<div class="event col-sm-4">
						<p class="date"><?php echo $v['date']; ?></p>
						<h3 class="event-name"><?php echo $v['name']; ?></h3>
						<div class="img-wrapper">
							<img src="<?php echo $v['image']; ?>" alt="" />
						</div>
					</div>
					<?php }} ?>
				</div>
			</div>
		</div>
		
		<!-- Menu -->
		
		<div id="menu" class="row">
			<div class="wrapper">
				<div class="header-wrapper row">
					<div class="col-md-4 col-md-offset-4">
						<h2 class="heading">Меню</h2>
					</div>
				</div>
				<div id="menu-list" class="row">
					<?php
					include 'menu.php';
					?>
					<div id="foto-menu-slider">
						<?php	
						foreach( $menu as $k=>$v ) { ?>

							<div><img src="<?php echo $v['image']; ?>" /></div>
							
						<?php } ?>
					</div>
					<div id="main-menu">

						<div id="menu-tabs" class="chooser">
							<ul>
							<?php
							foreach( $menu as $k=>$v ) { ?>
								
								<li><a class="choose-for-menu" href="#<?php echo $v['id']; ?>"><?php echo $v['name']; ?></a></li> 
								
							<?php } ?>
							</ul>
							<?php
							foreach( $menu as $k=>$v ) { ?>
							<div class="text-menu-slider" id="<?php echo $v['id']; ?>">
								<div class="eat-page">
									<ul>
									<?php
									foreach( $v['fields'] as $k2=>$v2 ) {
										
										$t = ($k2) % 4;
										
										if ( $t == 0 && $k2 != 0 ) { ?>
									</ul>
								</div>
								<div class="eat-page">
									<ul>
								<?php } ?>
										<li>
											<p class="eat-name"><?php echo $v2['name']; ?></p>
											<div class="eat-details">
												<?php if ( $v2['desc'] != '' ) { ?>
												<span class="eat-desc"><?php echo $v2['desc']; ?></span>
												<?php } ?>
												<span class="eat-price"><?php echo $v2['price']; ?></span>
											</div>
										</li>
									<?php } ?>
									</ul>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>	
	
		<!-- Plates -->
	
		<div id="plates" class="row">
			<div class="wrapper">
				
				<div id="tabs">
					<ul>
						<li><a class="choose-for-plate" href="#business">Бизнес-ланч</a></li>
						<li><a class="choose-for-plate" href="#sport">Спорт</a></li>
						<li><a class="choose-for-plate" href="#family">Семейное меню</a></li>
						<li><a class="choose-for-plate" href="#corporate">Банкетное меню</a></li>
					</ul>
					<div id="business" class="plate-content">
						<p>Бизнес-ланч из пяти позиций. Недорогой, но сытный обед.</p>
						<p>Во все ланчи входят два напитка: холодный и горячий!</p>
						<p>Бизнес-ланч из пяти позиций. Недорогой, но сытный обед.</p>
						<p>Во все ланчи входят два напитка: холодный и горячий!</p>
					</div>
					<div id="sport" class="plate-content">
						<p>Спорт.</p>
					</div>
					<div id="family" class="plate-content">
						<p>Семейное меню.</p>
					</div>
					<div id="corporate" class="plate-content">
						<p>Банкетное меню.</p>
					</div>
				</div>

			</div>
		</div>
		
		<!-- Decor -->
		
		<div id="decor" class="row">
		
			<div id="decor-slider">
				<?php
				include 'slider.php';
				?>
				<?php
				foreach ( $slider as $k=>$v ) {
				?>
				<div class="decor-slide">
					<div class="wrapper">
						<div class="row">
							<h2 class="heading"><?php echo $v['name']; ?></h2>
							<p class="decor-desc"><?php echo $v['desc']; ?></p>
						</div>
					</div>
					<img src="<?php echo $v['image']; ?>" alt="<?php echo $v['alt']; ?>" />
				</div>
				<?php } ?>
			</div>
						
		</div>
		
		<!-- Partners -->
		
		<div id="partners" class="row">
			<div class="chips"></div>
			<div class="wrapper">
				<div class="header-wrapper row">
					<h2 class="heading">Наши партнеры</h2>
				</div>
			</div>
			<div id="partners-list">
				<div class="wrapper">
					<ul>
						<li><div class="brand-wrapper"><i class="center"><img src="img/p1.png" alt="" /></i></div></li>
						<li><div class="brand-wrapper"><i class="center"><img src="img/p2.png" alt="" /></i></div></li>
						<li><div class="brand-wrapper"><i class="center"><img src="img/p3.png" alt="" /></i></div></li>
						<li><div class="brand-wrapper"><i class="center"><img src="img/p4.png" alt="" /></i></div></li>
						<li><div class="brand-wrapper"><i class="center"><img src="img/p5.png" alt="" /></i></div></li>
						<li><div class="brand-wrapper"><i class="center"><img src="img/p6.png" alt="" /></i></div></li>
						<li><div class="brand-wrapper"><i class="center"><img src="img/p7.png" alt="" /></i></div></li>
						<li><div class="brand-wrapper"><i class="center"><img src="img/p8.png" alt="" /></i></div></li>
						<li><div class="brand-wrapper"><i class="center"><img src="img/p9.png" alt="" /></i></div></li>
					</ul>
				</div>
			</div>
		</div>
		
		<!-- Events -->
		
		<div id="press" class="row">
			<div class="wrapper">
				<div class="header-wrapper row">
					<h2 class="heading">Пресса о нас</h2>
				</div>
				<div class="testimonial">
					<p>Мы — современные люди, хотим есть на простых деревянных столах, в демо-кратической атмосфере.</p>
				</div>
				<div class="opinion">
					<p>Будучи уже опытным критиком — целых три месяца я самозабвенно шлялся по московским 
ресторанам, прежде чем посетить вышеозначенный, — я внимательно изучила не так давно 
вышедшую книгу шефа «Вокруг света с борщом и фуа-гра». Для тех, кто не читал: Комм там сыплет именами всемирно известных шефов, рассказывает о сокрушительных успехах за рубежом и весьма холодно отзывается о гастрономической критике в России — по его словам, 
её у нас попросту нет.</p>
					<div class="censor">
						<img src="img/censor.png" alt="Катя Калина" />
						<div class="censor-desc">
							<h4>Катя Калина</h4>
							<span>ресторанный обозреватель радио Business FM</span>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>	
		
		<!-- Gallery -->
		
		<div id="gallery" class="row">
			<div class="wood"></div>
			<div class="wrapper">
				<div class="header-wrapper row">
					<h2 class="heading">Галерея</h2>
				</div>
				<div id="gallery-list" class="row">
					<?php
					include 'gallery.php';
					?>
					<?php
					foreach ( $gallery as $k=>$v ) {
					?>
					<div class="event col-sm-4">
						<p class="date"><?php echo $v['date']; ?></p>
						<h3 class="event-name"><?php echo $v['name']; ?></h3>
						<div class="img-wrapper">
							<img src="<?php echo $v['image']; ?>" alt="" />
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
        <div id="contacts" class="row">
        
        </div>
		
	</div>
			
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript" src="js/jquery.easing.js"></script>
    <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

  </body>
</html>