<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo lang('rezume');?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Destino project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/assets/styles/bootstrap4/bootstrap.min.css">
<link href="/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/assets/styles/about_styles.css">
<link rel="stylesheet" type="text/css" href="/assets/styles/about_responsive.css">
<link rel="stylesheet" type="text/css" href="/assets/styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="/assets/styles/contact_responsive.css">
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
								<li class="main_nav_item "><a href="<?php echo site_url('about');?>"><?php echo lang('menu_about_us');?></a></li>
								<li class="main_nav_item active"><a href="<?php echo site_url('rezume');?>"><?php echo lang('rezume');?></a></li>
								<li class="main_nav_item"><a href="<?php echo site_url('news');?>"><?php echo lang('menu_news');?></a></li>
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
								<li class="main_nav_item active"><a href="<?php echo site_url('rezume');?>"><?php echo lang('rezume');?></a></li> <br/>
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
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="/assets/images/home.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title"><?php echo lang('rezume');?></div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="/"><?php echo lang('menu_home');?></a></li>
									<li class="home_breadcrumb"><?php echo lang('rezume');?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	
	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2><?php echo lang('rezume');?></h2>
						<div></div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-12">
					<div class="contact_form_container">
						<form action="Rezume" id="contact_form" class="clearfix">
							<input name="from" id="from" class="contact_input contact_input_name" type="text" placeholder="<?php echo lang('name');?>" required="required" data-error="Name is required.">
							<input name="email" id="email" class="contact_input contact_input_email" type="text" placeholder="<?php echo lang('email1');?>   *(Не обязательно) " required="required" data-error="E-mail is required.">
							<input name="phone" id="phone" class="contact_input contact_input_subject" type="text" placeholder="<?php echo lang('tel');?>">
							<div class="form-group row">
                  <label for="input-8" name='obiektiva' id='obektivka' class="col-sm-2 col-form-label">Обьективка <span style='color:blue;'>(doc,docx)</span></label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="input-8" name="image" required="">
                  </div>
				</div>
				<div class="form-group row">
                  <label for="input-8" name="trudovoy" id='trudovoy' class="col-sm-2 col-form-label">Трудовой книжка <span style='color:blue;'>(pdf,jpg,jpeg,png)</span></label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="input-8" name="image" required="">
                  </div>
				</div>
				<div class="form-group row">
                  <label for="input-8" name="diplom" id="diplom" class="col-sm-2 col-form-label">Диплом копия <span style='color:blue;'>(pdf,jpg,jpeg,png)</span></label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="input-8" name="image" required="">
                  </div>
				</div>
				<div class="form-group row">
                  <label for="input-8" name="passport" id="passport" class="col-sm-2 col-form-label">Паспорт копия <span style='color:blue;'>(pdf,jpg,jpeg,png)</span></label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="input-8" name="image" required="">
                  </div>
                </div>
							<input type="submit" name="Rezume" class="contact_send_btn trans_200" value="<?php echo lang('send');?>" />
							
						</form>
					</div>
				</div>
				
			
		</div>
	</div>
	
		
				
	

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-12 footer_col">
					<div class="footer_about">
						<!-- Logo -->
						<div class="logo_container">
							<div class="logo"> 
							<div>&nbsp;&nbsp;&nbsp;<?php echo lang('nukus');?></div>
								<!-- <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo lang('uzbekistan');?></div> -->
								
								<div class="logo_image"><img src="/assets/images/logo.png" alt=""></div> 
							</div>
						</div>
						<div class="footer_about_text"></div>
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 &copy;<script>document.write(new Date().getFullYear());</script> <?php echo lang('prava');?> <a href="https://texnopos.uz" target="_blank">SAIA DEV</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>

				
							


				
		</div>
	</footer>
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
<script src="/assets/js/about_custom.js"></script>
</body>
</html>