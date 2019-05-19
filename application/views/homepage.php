<!DOCTYPE html>
<html lang="en">
<head>
<title>Nukus</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Destino project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/styles/bootstrap4/bootstrap.min.css">
<link rel="prefetch" href="assets/styles/bootstrap4/bootstrap.min.css" as="style" />
<link rel="preload" href="assets/styles/bootstrap4/bootstrap.min.css" as="style" />

<link href="assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="prefetch" href="assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" as="style" />
<link rel="preload" href="assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" as="style" />

<link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="prefetch" href="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css" as="style" />
<link rel="preload" href="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css" as="style" />

<link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="prefetch" href="assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css" as="style" />
<link rel="preload" href="assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css" as="style" />

<link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="prefetch" href="assets/plugins/OwlCarousel2-2.2.1/animate.css" as="style" />
<link rel="preload" href="assets/plugins/OwlCarousel2-2.2.1/animate.css" as="style" />

<link href="assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
<link rel="prefetch" href="assets/plugins/magnific-popup/magnific-popup.css" as="style" />
<link rel="preload" href="assets/plugins/magnific-popup/magnific-popup.css" as="style" />

<link rel="stylesheet" type="text/css" href="assets/styles/main_styles.css">
<link rel="prefetch" href="assets/styles/main_styles.css" as="style" />
<link rel="preload" href="assets/styles/main_styles.css" as="style" />

<link rel="stylesheet" type="text/css" href="assets/styles/responsive.css">
<link rel="prefetch" href="assets/styles/responsive.css" as="style" />
<link rel="preload" href="assets/styles/responsive.css" as="style" />


    <style>
      ul.carousel {
        display: flex;
        width: 720px;
        margin: 20px auto;
        padding: 0;
        justify-content: center;
        overflow: auto;
      }

      /* MOBILE */
      @media screen and (max-width: 700px) {
        ul.carousel {
          width: 100%;
          justify-content: flex-start;
        }

          ul.carousel li:first-child {
            padding-left: 0;
          }

          ul.carousel li:last-child {
            padding-right: 0;
          }
      }

        ul.carousel li {
          list-style: none;
          margin: 0;
          padding: 0 10px;
          display: inline-block;
        }
          ul.carousel li a {
            display: inline-block;
            text-align: center;
            margin: 0;
            padding: 0;
            color: #999;
            text-decoration: none;
          }
            ul.carousel li a.current {
              color: blue;
              text-decoration: underline;
            }
            ul.carousel li a img {
              width: 124px;
              height: 80px;
            }
            ul.carousel li a small {
              display: block;
            }
    </style>

    
    
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
								<div>Nukus</div>
								<div>Uzbekistan</div>
								<div class="logo_image"><img src="assets/images/logo.png" alt=""></div>
							</div>
						</div>

						<!-- Main Navigation -->
						<nav class="main_nav ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item active"><a href="/">Homepage</a></li>
								<li class="main_nav_item"><a href="about">About Us</a></li>
								<li class="main_nav_item"><a href="#">News</a></li>
							
								<!--<li class="main_nav_item"><a href="#">News</a></li> -->
								<li class="main_nav_item"><a href="#">Contact</a></li>
								<li class="main_nav_item"><a href="#">Sign-in</a></li>
								
								<div class="dropdown main_nav_item">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Language
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#"><img width="30" src="/assets/images/eng-flag.png">English</a>
    <a class="dropdown-item" href="#"><img width="30" src="/assets/images/ru-flag.png">Russian</a>
    <a class="dropdown-item" href="#"><img width="30" src="/assets/images/uz-flag.png">Uzbek</a>
    <a class="dropdown-item" href="#"><img width="30" src="/assets/images/kr-flag.png">Karakalpak</a>
  </div>
</div>


							</ul>
						</nav>

						

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
						<button id="menu_search_submit" class="menu_search_submit" type="submit"><img src="assets/images/search_2.png" alt=""></button>
					</form>
				</div>
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="#">Homepage</a></li>
					<li class="menu_item menu_mm"><a href="#">About Us</a></li>
					<li class="menu_item menu_mm"><a href="#">Gallery</a></li>
					<!--<li class="menu_item menu_mm"><a href="news.html">News</a></li>-->
					<li class="menu_item menu_mm"><a href="#">Contact</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background" style="background-image:url(assets/images/home.jpg)"></div>
		<div class="home_content">
			<div class="home_content_inner">
				<div class="home_text_large">Nukus</div>
				<div class="home_text_small">Republic of Karakalpakstan</div>
			</div>
		</div>
	</div>

	
	
<br>
	<!-- Video -->

	<div class="video_section d-flex flex-column align-items-center justify-content-center">
		<!-- Image by https://unsplash.com/@peecho -->
		<div class="video_background parallax-window" data-parallax="scroll" data-image-src="assets/images/video.jpg" data-speed="0.8"></div>
		<div class="video_content">
			<div class="video_title">1 day in Nukus</div>
			<div class="video_subtitle">Video made with ....</div>
			<div class="video_play">
				<a  class="video" href="assets/images/videoplayback.mp4">
					<svg version="1.1" id="Layer_1" class="play_button" xmlns="assets/images/videoplayback.mp4" xmlns:xlink="assets/images/videoplayback.mp4" x="0px" y="0px"
						 width="140px" height="140px" viewBox="0 0 140 140" enable-background="new 0 0 140 140" xml:space="preserve">
						<g id="Layer_2">
							<circle class="play_circle" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" cx="70.333" cy="69.58" r="68.542"/>
							<polygon class="play_triangle" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" points="61.583,56 61.583,84.417 84.75,70 	"/>
						</g>
					</svg>
				</a>
			</div>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Beautiful places in Nukus</h2>
						<div>Come to us and see for yourself</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="popular_content d-flex flex-md-row flex-column flex-wrap align-items-md-center align-items-start justify-content-md-between justify-content-start">
						
						<!-- Popular Item -->
						<div class="popular_item">
							<a href="#">
								<img src="assets/images/popular_1.jpg" alt="image by Egzon Bytyqi">
								<div class="popular_item_content">
									<div class="popular_item_price"></div>
									<div class="popular_item_title"></div>
								</div>
							</a>	
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="#">
								<img src="assets/images/popular_2.jpg" alt="https://unsplash.com/@michael75">
								<div class="popular_item_content">
									<div class="popular_item_price"></div>
									<div class="popular_item_title"></div>
								</div>
							</a>	
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="#">
								<img src="assets/images/popular_3.jpg" alt="https://unsplash.com/@sapegin">
								<div class="popular_item_content">
									<div class="popular_item_price"></div>
									<div class="popular_item_title"></div>
								</div>
							</a>	
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="#">
								<img src="assets/images/popular_4.jpg" alt="https://unsplash.com/@kensuarez">
								<div class="popular_item_content">
									<div class="popular_item_price"></div>
									<div class="popular_item_title"></div>
								</div>
							</a>
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="#">
								<img src="assets/images/popular_5.jpg" alt="https://unsplash.com/@noahbasle">
								<div class="popular_item_content">
									<div class="popular_item_price"></div>
									<div class="popular_item_title"></div>
								</div>
							</a>
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="#">
								<img src="assets/images/popular_6.jpg" alt="https://unsplash.com/@seb">
								<div class="popular_item_content">
									<div class="popular_item_price"></div>
									<div class="popular_item_title"></div>
								</div>
							</a>
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="#">
								<img src="assets/images/popular_7.jpg" alt="https://unsplash.com/@nevenkrcmarek">
								<div class="popular_item_content">
									<div class="popular_item_price"></div>
									<div class="popular_item_title"></div>
								</div>
							</a>	
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="#">
								<img src="assets/images/popular_8.jpg" alt="https://unsplash.com/@bergeryap87">
								<div class="popular_item_content">
									<div class="popular_item_price"></div>
									<div class="popular_item_title"></div>
								</div>
							</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Special -->

	<div class="special">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Popular place in Nukus</h2>
						<div>Come to us and see for yourself</div>
					</div>
				</div>
			</div>
		</div>
		<div class="special_content">
			<div class="special_slider_container">
				<div class="owl-carousel owl-theme special_slider">
					
					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item">
							<div class="special_item_background"><img src="assets/images/special_1.jpg" alt="https://unsplash.com/@garciasaldana_"></div>
							<div class="special_item_content text-center">
								<div class="special_category"></div>
								<div class="special_title"><a href="#"></a></div>
							</div>
						</div>
					</div>

					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item d-flex flex-column align-items-center justify-content-center">
							<div class="special_item_background"><img src="assets/images/special_2.jpg" alt="https://unsplash.com/@varshesh"></div>
							<div class="special_item_content text-center">
								<div class="special_category"></div>
								<div class="special_title"><a href="#"></a></div>
							</div>
						</div>
					</div>

					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item d-flex flex-column align-items-center justify-content-center">
							<div class="special_item_background"><img src="assets/images/special_3.jpg" alt="https://unsplash.com/@paulgilmore_"></div>
							<div class="special_item_content text-center">
								<div class="special_category"></div>
								<div class="special_title"><a href="#"></a></div>
							</div>
						</div>
					</div>

					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item d-flex flex-column align-items-center justify-content-center">
							<div class="special_item_background"><img src="assets/images/special_4.jpg" alt="https://unsplash.com/@hellolightbulb"></div>
							<div class="special_item_content text-center">
								<div class="special_category"></div>
								<div class="special_title"><a href="#"></a></div>
							</div>
						</div>
					</div>

					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item d-flex flex-column align-items-center justify-content-center">
							<div class="special_item_background"><img src="assets/images/special_5.jpg" alt="https://unsplash.com/@dnevozhai"></div>
							<div class="special_item_content text-center">
								<div class="special_category"></div>
								<div class="special_title"><a href="#"></a></div>
							</div>
						</div>
					</div>

				</div>

				<div class="special_slider_nav d-flex flex-column align-items-center justify-content-center">
					<img src="assets/images/special_slider.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<br/>
	<br/>
	<br/>
	<br/>

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
								<div>Nukus</div>
								<div>Uzbekistan</div>
								<div class="logo_image"><img src="assets/images/logo.png" alt=""></div>
							</div>
						</div>
						<div class="footer_about_text"></div>
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="http://alibek.uz" target="_blank">Web Developer</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>

				

				

			</div>
		</div>
	</footer>
</div>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/styles/bootstrap4/popper.js"></script>
<script src="assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="assets/plugins/easing/easing.js"></script>
<script src="assets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/language.js"></script>

</body>
</html>