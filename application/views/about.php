<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo lang('menu_about_us');?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Destino project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/assets/styles/bootstrap4/bootstrap.min.css">
<link href="/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/assets/styles/about_styles.css">
<link rel="stylesheet" type="text/css" href="/assets/styles/about_responsive.css">
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
								<!-- <div><?php echo lang('uzbekistan');?></div> -->
								<div class="logo_image"><img src="/assets/images/logo.png" alt=""></div>
							</div>
						</div>

						<!-- Main Navigation -->
						<nav class="main_nav ml-auto">
							<ul class="main_nav_list">

								<li class="main_nav_item "><a href="<?php echo site_url('/');?>"><?php echo lang('menu_home');?></a></li>
								<li class="main_nav_item active"><a href="<?php echo site_url('about');?>"><?php echo lang('menu_about_us');?></a></li> 
								<li class="main_nav_item "><a href="<?php echo site_url('news');?>"><?php echo lang('menu_news');?></a></li> 
                <li class="main_nav_item "><a href="<?php echo site_url('investicion');?>"><?php echo lang('menu_investicion');?></a></li> 
                <li class="main_nav_item "><a href="<?php echo site_url('vacancy');?>"><?php echo lang('menu_vacancy');?></a></li> 
								<li class="main_nav_item "><a href="<?php echo site_url('contact');?>"><?php echo lang('menu_contact');?></a></li>
				
								
								
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
							<div class="home_title"><?php echo lang('menu_about_us');?></div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="/"><?php echo lang('menu_home');?></a></li>
									<li class="home_breadcrumb"><?php echo lang('menu_about_us');?></li>
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
						<h2><?php echo lang('menu_about_us');?></h2>
						<div></div>
					</div>
				</div>
			</div>
      <div class="container">
			<div class="col-md-12">
         
			
           
                <h4 style='text-align:center;' ><?php echo lang('hak');?></h4>
            
            
               

<br>



<table  style="margin-left: 0.95pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 1pt solid rgb(204, 204, 204);" width="1000" cellspacing="1" cellpadding="0" border="1">
 <tbody><tr>
  <td rowspan="5" style="width:91.1pt;border:solid #CCCCCC 1.0pt;
  mso-border-alt:solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="121">
  <p style="text-align:center;line-height:normal;
  mso-outline-level:4;vertical-align:top" align="center"><span>­­­­­­­­<o:p></o:p></span></p>
  <p style="text-align:center;line-height:normal;
  mso-outline-level:4;vertical-align:top" align="center"><img src="/assets/images/about/1.jpg"  style="width: 100%;"><a href="http:///media/image/2018/7/f107e63a-f689-7454-bd9e-9dcc0d4563d3.jpg"></a><span><br></span></p><p style="text-align:center;line-height:normal;
  mso-outline-level:4;vertical-align:top" align="center"><span><b><?php echo lang('paraxat');?></b><o:p></o:p></span></p>
  </td>
  <td colspan="2" style="width:367.5pt;border:solid #CCCCCC 1.0pt;
  mso-border-alt:solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="490"><p style="background-image: initial; text-align:center; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"> <?php echo lang('hakim');?><o:p></o:p></p>
  <p style="margin-bottom: 8.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: top;"><o:p>&nbsp;</o:p></p>
  </td>
 </tr>
 <tr>
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('adr');?></span><span ><o:p></o:p></span></b></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="358">
  <p style="line-height:normal;mso-outline-level:4;vertical-align:
  top">&nbsp;&nbsp;&nbsp;<span> <?php echo lang('adress');?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('ph');?></span></b><span ><o:p></o:p></span></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="358">
  <p style="margin:0cm;margin-bottom:.0001pt"><span >&nbsp;&nbsp;&nbsp;0(361) 222-17-75<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('mail');?>:</span></b><span ><o:p></o:p></span></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="358">
  <p style="margin-bottom:0cm;margin-bottom:.0001pt"><span  >&nbsp;&nbsp;&nbsp;nukus.sh@exat.uz</span></a><span style="line-height: 115%;"><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4;mso-yfti-lastrow:yes;height:56.05pt">
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm;height:56.05pt" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('qabul');?></span><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm">:</span></b></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm;height:56.05pt" width="358">
  <p style="margin:0cm;margin-bottom:.0001pt"><span >&nbsp;&nbsp;&nbsp;<?php echo lang('5kun');?> </span>10:00-12:00</p>
  </td>
 </tr>
</tbody></table>

<p style="margin: 0cm 0cm 4pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">&nbsp;&nbsp;</p>

<p style="margin: 0cm 0cm 4pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><o:p>&nbsp;</o:p></p>

<table  style="margin-left: 0.95pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 1pt solid rgb(204, 204, 204);" width="1000" cellspacing="1" cellpadding="0" border="1">
 <tbody><tr>
  <td rowspan="5" style="width:91.1pt;border:solid #CCCCCC 1.0pt;
  mso-border-alt:solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="121">
  <p style="text-align:center;line-height:normal;
  mso-outline-level:4;vertical-align:top" align="center"><span>­­­­­­­­<o:p></o:p></span></p>
  <p style="text-align:center;line-height:normal;
  mso-outline-level:4;vertical-align:top" align="center"><img src="/assets/images/about/2.jpg"  style="width: 100%;"><a href="http:///media/image/2018/7/f107e63a-f689-7454-bd9e-9dcc0d4563d3.jpg"></a><span><br></span></p><p style="text-align:center;line-height:normal;
  mso-outline-level:4;vertical-align:top" align="center"><span><b><?php echo lang('qallibek');?></b><o:p></o:p></span></p>
  </td>
  <td colspan="2" style="width:367.5pt;border:solid #CCCCCC 1.0pt;
  mso-border-alt:solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="490"><p style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; text-align:center; background-origin: initial; background-clip: initial;">&nbsp;&nbsp;&nbsp; <?php echo lang('1zam');?><o:p></o:p></p>
  <p style="margin-bottom: 8.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: top;"><o:p>&nbsp;</o:p></p>
  </td>
 </tr>
 <tr>
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('adr');?></span><span ><o:p></o:p></span></b></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="358">
  <p style="line-height:normal;mso-outline-level:4;vertical-align:
  top">&nbsp;&nbsp;&nbsp;<span> <?php echo lang('adress');?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('ph');?></span></b><span ><o:p></o:p></span></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="358">
  <p style="margin:0cm;margin-bottom:.0001pt"><span >&nbsp;&nbsp;&nbsp;0(361) 222-51-65<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('mail');?>:</span></b><span ><o:p></o:p></span></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="358">
  <p style="margin-bottom:0cm;margin-bottom:.0001pt"><span  >&nbsp;&nbsp;&nbsp;a.ibragimov@exat.uz</span></a><span style="line-height: 115%;"><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4;mso-yfti-lastrow:yes;height:56.05pt">
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm;height:56.05pt" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('qabul');?></span><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm">:</span></b></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm;height:56.05pt" width="358">
  <p style="margin:0cm;margin-bottom:.0001pt"><span >&nbsp;&nbsp;&nbsp;<?php echo lang('3kun');?> </span>10:00-12:00</p>
  </td>
 </tr>
</tbody></table>


<p style="margin: 0cm 0cm 4pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">&nbsp;&nbsp;</p>

<p style="margin: 0cm 0cm 4pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><o:p>&nbsp;</o:p></p>

<table  style="margin-left: 0.95pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 1pt solid rgb(204, 204, 204);" width="1000" cellspacing="1" cellpadding="0" border="1">
 <tbody><tr>
  <td rowspan="5" style="width:91.1pt;border:solid #CCCCCC 1.0pt;
  mso-border-alt:solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="121">
  <p style="text-align:center;line-height:normal;
  mso-outline-level:4;vertical-align:top" align="center"><span>­­­­­­­­<o:p></o:p></span></p>
  <p style="text-align:center;line-height:normal;
  mso-outline-level:4;vertical-align:top" align="center"><img src="/assets/images/about/3.png"  style="width: 100%;"><a href="http:///media/image/2018/7/f107e63a-f689-7454-bd9e-9dcc0d4563d3.jpg"></a><span><br></span></p><p style="text-align:center;line-height:normal;
  mso-outline-level:4;vertical-align:top" align="center"><span><b><?php echo lang('madiyar');?></b><o:p></o:p></span></p>
  </td>
  <td colspan="2" style="width:367.5pt;border:solid #CCCCCC 1.0pt;
  mso-border-alt:solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="490"><p style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial;text-align:center; background-origin: initial; background-clip: initial;">&nbsp;&nbsp;&nbsp; <?php echo lang('2zam');?><o:p></o:p></p>
  <p style="margin-bottom: 8.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: top;"><o:p>&nbsp;</o:p></p>
  </td>
 </tr>
 <tr>
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('adr');?></span><span ><o:p></o:p></span></b></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="358">
  <p style="line-height:normal;mso-outline-level:4;vertical-align:
  top">&nbsp;&nbsp;&nbsp;<span> <?php echo lang('adress');?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('ph');?></span></b><span ><o:p></o:p></span></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="358">
  <p style="margin:0cm;margin-bottom:.0001pt"><span >&nbsp;&nbsp;&nbsp;0(361) 222-25-39<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('mail');?>:</span></b><span ><o:p></o:p></span></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="358">
  <p style="margin-bottom:0cm;margin-bottom:.0001pt"><span  >-</span><a href="mailto:nukus@customs.uz"><span style="line-height: 115%;" ></span></a><span style="line-height: 115%;"><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4;mso-yfti-lastrow:yes;height:56.05pt">
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm;height:56.05pt" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('qabul');?></span><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm">:</span></b></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm;height:56.05pt" width="358">
  <p style="margin:0cm;margin-bottom:.0001pt"><span >&nbsp;&nbsp;&nbsp;<?php echo lang('2kun');?> </span>15:00-17:00</p>
  </td>
 </tr>
</tbody></table>

<p style="margin: 0cm 0cm 4pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">&nbsp;&nbsp;</p>

<p style="margin: 0cm 0cm 4pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><o:p>&nbsp;</o:p></p>

<table  style="margin-left: 0.95pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 1pt solid rgb(204, 204, 204);" width="1000" cellspacing="1" cellpadding="0" border="1">
 <tbody><tr>
  <td rowspan="5" style="width:91.1pt;border:solid #CCCCCC 1.0pt;
  mso-border-alt:solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="121">
  <p style="text-align:center;line-height:normal;
  mso-outline-level:4;vertical-align:top" align="center"><span>­­­­­­­­<o:p></o:p></span></p>
  <p style="text-align:center;line-height:normal;
  mso-outline-level:4;vertical-align:top" align="center"><img src="/assets/images/about/4.jpg"  style="width: 100%;"><a href="http:///media/image/2018/7/f107e63a-f689-7454-bd9e-9dcc0d4563d3.jpg"></a><span><br></span></p><p style="text-align:center;line-height:normal;
  mso-outline-level:4;vertical-align:top" align="center"><span><b><?php echo lang('polat');?></b><o:p></o:p></span></p>
  </td>
  <td colspan="2" style="width:367.5pt;border:solid #CCCCCC 1.0pt;
  mso-border-alt:solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="490"><p style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial;text-align:center; background-clip: initial;">&nbsp;&nbsp;&nbsp; <?php echo lang('3zam');?><o:p></o:p></p>
  <p style="margin-bottom: 8.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: top;"><o:p>&nbsp;</o:p></p>
  </td>
 </tr>
 <tr>
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('adr');?></span><span ><o:p></o:p></span></b></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="358">
  <p style="line-height:normal;mso-outline-level:4;vertical-align:
  top">&nbsp;&nbsp;&nbsp;<span> <?php echo lang('adress');?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('ph');?></span></b><span ><o:p></o:p></span></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="358">
  <p style="margin:0cm;margin-bottom:.0001pt"><span >&nbsp;&nbsp;&nbsp;0(361) 222-17-75<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('mail');?>:</span></b><span ><o:p></o:p></span></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="358">
  <p style="margin-bottom:0cm;margin-bottom:.0001pt"><span>&nbsp;&nbsp;&nbsp;p.kudiyarov@exat.uz</span></a><span style="line-height: 115%;"><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4;mso-yfti-lastrow:yes;height:56.05pt">
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm;height:56.05pt" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('qabul');?></span><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm">:</span></b></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm;height:56.05pt" width="358">
  <p style="margin:0cm;margin-bottom:.0001pt"><span >&nbsp;&nbsp;&nbsp;<?php echo lang('5kun');?> </span>10:00-12:00</p>
  </td>
 </tr>
</tbody></table>

<p style="margin: 0cm 0cm 4pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">&nbsp;&nbsp;</p>

<p style="margin: 0cm 0cm 4pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><o:p>&nbsp;</o:p></p>

<table  style="margin-left: 0.95pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 1pt solid rgb(204, 204, 204);" width="1000" cellspacing="1" cellpadding="0" border="1">
 <tbody><tr>
  <td rowspan="5" style="width:91.1pt;border:solid #CCCCCC 1.0pt;
  mso-border-alt:solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="121">
  <p style="text-align:center;line-height:normal;
  mso-outline-level:4;vertical-align:top" align="center"><span>­­­­­­­­<o:p></o:p></span></p>
  <p style="text-align:center;line-height:normal;
  mso-outline-level:4;vertical-align:top" align="center"><img src="/assets/images/about/5.png"  style="width: 100%;"><a href="http:///media/image/2018/7/f107e63a-f689-7454-bd9e-9dcc0d4563d3.jpg"></a><span><br></span></p><p style="text-align:center;line-height:normal;
  mso-outline-level:4;vertical-align:top" align="center"><span><b><?php echo lang('erkinbay');?></b><o:p></o:p></span></p>
  </td>
  <td colspan="2" style="width:367.5pt;border:solid #CCCCCC 1.0pt;
  mso-border-alt:solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="490"><p style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial;text-align:center; background-origin: initial; background-clip: initial;">&nbsp;&nbsp;&nbsp; <?php echo lang('4zam');?><o:p></o:p></p>
  <p style="margin-bottom: 8.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: top;"><o:p>&nbsp;</o:p></p>
  </td>
 </tr>
 <tr>
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('adr');?></span><span ><o:p></o:p></span></b></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="358">
  <p style="line-height:normal;mso-outline-level:4;vertical-align:
  top">&nbsp;&nbsp;&nbsp;<span> <?php echo lang('adress');?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('ph');?></span></b><span ><o:p></o:p></span></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="358">
  <p style="margin:0cm;margin-bottom:.0001pt"><span >&nbsp;&nbsp;&nbsp;0(361) 222-17-75<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('mail');?>:</span></b><span ><o:p></o:p></span></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="358">
  <p style="margin-bottom:0cm;margin-bottom:.0001pt"><span  >&nbsp;&nbsp;&nbsp;e.allanov@exat.uz, &nbsp;&nbsp;&nbsp;allanov@umail.uz</span><span style="line-height: 115%;" ></span><span style="line-height: 115%;"><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4;mso-yfti-lastrow:yes;height:56.05pt">
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm;height:56.05pt" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('qabul');?></span><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm">:</span></b></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm;height:56.05pt" width="358">
  <p style="margin:0cm;margin-bottom:.0001pt"><span >&nbsp;&nbsp;&nbsp;<?php echo lang('1kun');?>  </span>15:00-17:00</p>
  </td>
 </tr>
</tbody></table>

<p style="margin: 0cm 0cm 4pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">&nbsp;&nbsp;</p>

<p style="margin: 0cm 0cm 4pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><o:p>&nbsp;</o:p></p>

<table  style="margin-left: 0.95pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 1pt solid rgb(204, 204, 204);" width="1000" cellspacing="1" cellpadding="0" border="1">
 <tbody><tr>
  <td rowspan="5" style="width:91.1pt;border:solid #CCCCCC 1.0pt;
  mso-border-alt:solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="121">
  <p style="text-align:center;line-height:normal;
  mso-outline-level:4;vertical-align:top" align="center"><span>­­­­­­­­<o:p></o:p></span></p>
  <p style="text-align:center;line-height:normal;
  mso-outline-level:4;vertical-align:top" align="center"><img src="/assets/images/about/6.jpg"  style="width: 100%;"><a href="http:///media/image/2018/7/f107e63a-f689-7454-bd9e-9dcc0d4563d3.jpg"></a><span><br></span></p><p style="text-align:center;line-height:normal;
  mso-outline-level:4;vertical-align:top" align="center"><span><b><?php echo lang('gulsara');?></b><o:p></o:p></span></p>
  </td>
  <td colspan="2" style="width:367.5pt;border:solid #CCCCCC 1.0pt;
  mso-border-alt:solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="490"><p style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial;text-align:center; background-origin: initial; background-clip: initial;">&nbsp;&nbsp;&nbsp; <?php echo lang('5zam');?><o:p></o:p></p>
  <p style="margin-bottom: 8.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: top;"><o:p>&nbsp;</o:p></p>
  </td>
 </tr>
 <tr>
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('adr');?></span><span ><o:p></o:p></span></b></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="358">
  <p style="line-height:normal;mso-outline-level:4;vertical-align:
  top">&nbsp;&nbsp;&nbsp;<span> <?php echo lang('adress');?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('ph');?></span></b><span ><o:p></o:p></span></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="358">
  <p style="margin:0cm;margin-bottom:.0001pt"><span >&nbsp;&nbsp;&nbsp;0(361) 222-17-75<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('mail');?>:</span></b><span ><o:p></o:p></span></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm" width="358">
  <p style="margin-bottom:0cm;margin-bottom:.0001pt"><span  >&nbsp;&nbsp;&nbsp;Abibullaeva1974@umail.uz</span></a><span style="line-height: 115%;"><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4;mso-yfti-lastrow:yes;height:56.05pt">
  <td style="width:98.55pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm;height:56.05pt" width="131">
  <p style="margin:0cm;margin-bottom:.0001pt"><b><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm;" >&nbsp;&nbsp;&nbsp;<?php echo lang('qabul');?></span><span style="border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
  padding:0cm">:</span></b></p>
  </td>
  <td style="width:268.25pt;border:solid #CCCCCC 1.0pt;mso-border-alt:
  solid #CCCCCC .25pt;padding:0cm 0cm 0cm 0cm;height:56.05pt" width="358">
  <p style="margin:0cm;margin-bottom:.0001pt"><span >&nbsp;&nbsp;&nbsp;<?php echo lang('4kun');?>  </span>15:00-17:00</p>
  </td>
 </tr>
</tbody></table>


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
 &copy;<script>document.write(new Date().getFullYear());</script> <?php echo lang('prava');?> Web Developer
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