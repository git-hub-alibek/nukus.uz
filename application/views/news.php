<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo lang('news');?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Destino project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/assets/styles/bootstrap4/bootstrap.min.css">
<link href="/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/assets/styles/news_styles.css">
<link rel="stylesheet" type="text/css" href="/assets/styles/news_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_container d-flex flex-row align-items-center justify-content-start">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
							<div><?php echo lang('nukus');?></div>
							<!--	<div><?php echo lang('uzbekistan');?></div> -->
								<div class="logo_image"><img src="/assets/images/logo.png" alt=""></div>
							</div>
						</div>

						<!-- Main Navigation -->
						<nav class="main_nav ml-auto">
							<ul class="main_nav_list">
							<li class="main_nav_item "><a href="<?php echo site_url('/');?>"><?php echo lang('menu_home');?></a></li>
								<li class="main_nav_item"><a href="<?php echo site_url('about');?>"><?php echo lang('menu_about_us');?></a></li>
								<li class="main_nav_item"><a href="<?php echo site_url('investicion');?>"><?php echo lang('menu_investicion');?></a></li>
								<li class="main_nav_item active"><a href="<?php echo site_url('news');?>"><?php echo lang('menu_news');?></a></li>
								<li class="main_nav_item"><a href="<?php echo site_url('contact');?>"><?php echo lang('menu_contact');?></a></li>
								<div class="dropdown main_nav_item">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <?php echo lang('lang');?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		<a class="dropdown-item"><?php echo anchor($this->lang->switch_uri('en'), ' <img width="30"  src="/assets/images/eng-flag.png">English' ) ;?></a>
		<a class="dropdown-item"><?php echo anchor($this->lang->switch_uri('ru'), ' <img width="30"  src="/assets/images/ru-flag.png">Русский' ) ;?></a>
		<a class="dropdown-item"><?php echo anchor($this->lang->switch_uri('uz'), ' <img width="30"  src="/assets/images/uz-flag.png">Өзбек' ) ;?></a>
		<a class="dropdown-item"><?php echo anchor($this->lang->switch_uri('kk'), ' <img width="30"  src="/assets/images/kr-flag.png">Қарақалпақ' ) ;?></a>
		
  </div>
</div>


							</ul>
						</nav>

						<!-- Search -->
						<div class="search">
							<form action="#" class="search_form">
								
								<button type="submit" class="search_button ml-auto ctrl_class"><img src="/assets/images/search.png" width="30" alt=""></button>
							</form>
						</div>

						<!-- Hamburger -->
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>

					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<div class="menu_search_form_container">
					<form action="#" id="menu_search_form">
						<input type="search" class="menu_search_input menu_mm">
						<button id="menu_search_submit" class="menu_search_submit" type="submit"><img src="/assets/images/search_2.png" alt=""></button>
					</form>
				</div>
				<ul class="menu_list menu_mm"> 
				<a class="dropdown-item"><?php echo anchor($this->lang->switch_uri('en'), ' <img width="30"  src="/assets/images/eng-flag.png">English' ) ;?></a>
		<a class="dropdown-item"><?php echo anchor($this->lang->switch_uri('ru'), ' <img width="30"  src="/assets/images/ru-flag.png">Русский' ) ;?></a>
		<a class="dropdown-item"><?php echo anchor($this->lang->switch_uri('uz'), ' <img width="30"  src="/assets/images/uz-flag.png">Өзбек' ) ;?></a>
		<a class="dropdown-item"><?php echo anchor($this->lang->switch_uri('kk'), ' <img width="30"  src="/assets/images/kr-flag.png">Қарақалпақ' ) ;?></a> <br/>
			
								<li class="main_nav_item active"><a href="<?php echo site_url('/');?>"><?php echo lang('menu_home');?></a></li> <br/>
								<li class="main_nav_item active"><a href="<?php echo site_url('about');?>"><?php echo lang('menu_about_us');?></a></li> <br/>
								<li class="main_nav_item active"><a href="<?php echo site_url('news');?>"><?php echo lang('menu_news');?></a></li> <br/>
								<li class="main_nav_item active"><a href="<?php echo site_url('investicion');?>"><?php echo lang('menu_investicion');?></a></li> <br/>
								<li class="main_nav_item active"><a href="<?php echo site_url('contact');?>"><?php echo lang('menu_contact');?></a></li>
				
				</ul>

				<!-- Menu Social 
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="/assets/#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="/assets/#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="/assets/#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="/assets/#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="/assets/#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
					
				</div> -->

				<div class="menu_copyright menu_mm"><?php echo lang('prava');?></div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<!-- Image by https://unsplash.com/@peecho -->
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="/assets/images/news.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title"><?php echo lang('news');?></div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="/assets/index.html"><?php echo lang('menu_home');?></a></li>
									<li class="home_breadcrumb"><?php echo lang('news');?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Find Form -->

	<div class="find">
		<!-- Image by https://unsplash.com/@garciasaldana_ -->
		<div class="find_background_container prlx_parent">
			<div class="find_background prlx" style="background-image:url(images/find.jpg)"></div>
		</div>
		
<!-- News -->

<div class="news">
		<div class="container">
			<div class="row">

				<!-- News Posts -->
				<div class="col-lg-9">
					<div class="news_posts">
						
						<!-- News Post -->
						<div class="news_post">
						<div class="news">
		<div class="container">
			<div class="row">

				<!-- News Posts -->
				<div class="col-lg-10">
					<div class="news_posts">
						
						<!-- News Post -->
						<div class="news_post">
							<div class="post_title"><a href="#"><?php echo lang('news');?></a></div>
							<div class="post_meta">
								
							</div>
							<?php foreach($news as $n):?>
							<div class="post_image">
							<img width='800' src="/uploads/<?php echo $n->img;?> "  />
							</div>
							<div class="post_text">
							<?php if($this->uri->segment(1) == 'kk'): ?>
		        <div><h3><?php echo anchor('news/show/'.$n->id, $n->title_kk);?></h3>
		        <?php echo word_limiter($n->text_kk, 50);?>
		<?php endif; ?>
	    <?php if($this->uri->segment(1) == 'en'): ?>
		        <div><h3><?php echo anchor('news/show/'.$n->id, $n->title_en);?></h3>
		        <?php echo word_limiter($n->text_en, 50);?>
		<?php endif; ?>
	    <?php if($this->uri->segment(1) == 'ru'): ?>
		        <div><h3><?php echo anchor('news/show/'.$n->id, $n->title_ru);?></h3>
		        <?php echo word_limiter($n->text_ru, 50);?>
		<?php endif; ?>
	    <?php if($this->uri->segment(1) == 'uz'): ?>
		        <div><h3><?php echo anchor('news/show/'.$n->id, $n->title_uz);?></h3>
		        <?php echo word_limiter($n->text_uz, 50);?>
		<?php endif; ?>
							</div>
						</div>
						<?php endforeach;?>
						
						
					</div>
				</div>
						</div>

						
    
				<!-- Sidebar -->
				<div class="col-lg-2">
					<div class="sidebar">
						

						<!-- Featured Posts -->
						<div class="sidebar_featured">
						
							<!-- Featured Post -->
						
							<?php 
	$this->load->view('news_old');
	?>
							</div>

							

							

						</div>
	<!-- News -->
	
	
    
    </div>
	


	
				
				
				

	<!-- Newsletter -->

	<div class="newsletter">
		<!-- Image by https://unsplash.com/@garciasaldana_ -->
		<div class="newsletter_background" style="background-image:url(images/newsletter.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="newsletter_content">
						
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view('footer');?>
</div>

<script src="/assets/js/jquery-3.2.1.min.js"></script>
<script src="/assets/styles/bootstrap4/popper.js"></script>
<script src="/assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="/assets/plugins/greensock/TweenMax.min.js"></script>
<script src="/assets/plugins/greensock/TimelineMax.min.js"></script>
<script src="/assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="/assets/plugins/greensock/animation.gsap.min.js"></script>
<script src="/assets/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="/assets/plugins/easing/easing.js"></script>
<script src="/assets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="/assets/js/news_custom.js"></script>
</body>
</html>