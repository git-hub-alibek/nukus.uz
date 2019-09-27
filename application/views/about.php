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
			<div class="row about_row">
				<div class="col-lg-6 about_col order-lg-1 order-2">
					<div class="about_content">
						<p>Qala hákiminiń investiciyalar, innovaciyalar, menshiklestirilgen 
kárxanalarǵa kómeklesiw, erkin ekonomikalıq hám kishi sanaat zonaları 
hámde turizmdi rawajlandırıw máseleleri boyınsha orınbasarınıń 
funkcional wazıypaları
(P.A.Kudiyarov)

a) investiciya máseleleri boyınsha:
sırt el investiciyaların jalp etiw, ekonomika tarmaqlarına investiciyalar kólemin keńeyttiriwdi xoshametlewge qaratılǵan birden-bir mámleket investiiicion siyasattı qáliplestiriw hám ámelge asırıw jumıslarında qatnasıw, aymaqta investicion sharayattı jánede jetilistiriw, sırt el kapitalı qatnasındaǵı kárxanalardıń rawajlanıwın qollap-quwatlaw;
 sırt el investiciyaların jalp etiw tarawında hám aymaqta investicion jumıslardı keńeytiw ushın jánede qolay sharayatlar jaratıw boyınsha normativ-huqıqıy bazanı jetilistiriwge qaratılǵan usınıslar kiritiw;
aymaqtıń ekonomikasına sırt el investiciyaların jalp etiw hám qolay investicion sharayat jaratıwǵa kómeklesiw, investicion joybarlardıń monitoring jumısların alıp barıw, sırt el investiciyalar qatnasındaǵı kárxanalardı shólkemlestiriwde hám nátiyjeli jumıs alıp barıwda kómeklesiw; 
sırt el investiciyaların jalp etiwdiń tiykarǵı jónelislerin belgilew hám ámelge engiziwde, sonday-aq xalıq aralıq finans institutları hám sırt el investorları menen investiciyalıq sheriklikti ámelge asırıwda kárxanalar hám shólkemler, Ózbekstan Respublikasınıń sırt eldegi diplomatik elshixanaları hám Ózbekstan Respublikasınınń xalıq aralıq shólkemlerdegi turaqlı wákilleriniń sawda-ekonomikalıq máseleler boyınsha másláhátshileri menen keń jumıslardı jolǵa qoyıw;   
Ózbekstan Respublikasında hám sırt ellerde sırt el investorlarına mámlekettiń ekonomikalıq hám investiciyalıq qábileti haqqında keń xabar (katalog, broshyura, flaer,videorolik) beriw maqsetinde xalıq aralıq konferenciyalar, seminarlar, investiciya forumların shólkemlestiriw hám qatnasıw arqalı óz-ara mápli jaqın sheriklikti jolǵa qoyıw;   
bul processlerde qatnasıwdı qálewshi isbilermenlik subektleriniń sırt el mámleketlerine maqsetli saparlar (joqarı dárejedegi rásmiy delegaciyalar, xalıq aralıq kórgizbe, biznes forum hám basqalar) jámlestiriwdi shólkemlestiredi;  
hár jılǵı aymaqlıq hám zonalıq investiciya dástúrlerin, sonnan sırt el investiciyalar qatnasındaǵı joybarlar bólimi boyınsha qáliplestiriw hám monitoring qılıwda qatnasıw;
aymaqlıq investiciya dástúrleriniń ámelge asırılıwın, qala ekonomikasın rawajlandırıwdıń ortasha hám uzaq múddetli dástúrlerge kiritilgen iri investiciya joybarların ámelge asırıwǵa kómeklesiw; 
sanaat tarawındaǵı investiciya dástúrleri, aymaqlardı sociallıq-ekonomikalıq rawajlandırıw kompleks dástúrleri, islep shıǵarıw, transpor hám baylanıs, sociallıq infrastrukturanı rawajlandırıw kompleks dástúrleri menen birge sırt el investiciyaların, ásirese tuwrıdan-tuwrı kreditlerdi jalp etiw hám finans-texnikalıq járdem kórsetiw;
sırt el investiciyaların jalp etiwdi sistemalı monitoring qılıw arqalı aymaq ekonomikasına jalp etilgen sırt el investiciyalardan paydalanıw nátiyjeliligin asırıw, sırt el kapital qatnasındaǵı kárxanalar jumısların, sonday-aq investor tárepinen investiciya májbúriyatlarınıń orınlanıwın analiz etiw, sırt el investiciyaları qatnasındaǵı investiciya joybarlarınıń óz waqtında hám nátiyjeli ámelge asırılıwına tosqınlıq etiwshi sebeplerdi anıqlaw, kárxanalar hám shólkemlerde tez qarar qabıl etiw boyınsha usınıslardı usınıw;  
Aymaqtıń resurs bazasın esapqa alǵan halda investiciya usınısların islep shıǵıw.
b) innovacion iskerlik boyınsha
kárxanalar hám shólkemlerde innovacion iskerlikti jetilistiriw boyınsha usınıslardı jıynaydı hám ulıwmalastıradı;
aldıńǵı texnologiyalardı birinshi dárejede engiziwdi talap etetuǵın tiyisli tarmaq hám tarawlardı rawajlandırıwdıń tiykarǵı jónelislerin belgiledi; 
aymaqlıq ekonomikanı modernizaciya ete alatuǵın ilimiy, joybar hám ilimiy-texnologiyalıq shólkemlerdiń sistemasın rawajlandırıw, sonday-aq, ǵárezsiz ilimiy-texnikalıq qábiletti túrlendiriw boyınsha dástúrlerdi islep shıǵadı; 
ekonomikanıń energiya hám resurs sarpı kólemin qısqartıw, energiya tejeytuǵın texnologiyalardı islep shıǵarıwǵa keń engiziw, janılǵı energiya dereklerinen paydalanıwdı keńeytiw boyınsha is-ilájlardı islep shıǵadı;
qorshaǵan ortalıqtıń pataslanıw dárejesin kemeytetuǵın ekologiyalıq taza texnologiyalardı qollaǵan halda islep shıǵarıw qábiletin asırıwdı názerde tutıwshı “jasıl ekonomika” texnologiyaların engiziwge kómeklesedi; 
xızmetler tarawın jedel rawajlandırıw hám onıń dúzilmesin túpten ózgertiwge, eń áwele, innovacion islenbeler hám texnologiyalardı engiziw esabına onın sıpatın hám jalpı aymaqlıq ónimdi túrlendiriwdegi rolin asırıwǵa kómeklesiwge;  
innovacion jandasıwlardı islep shıǵıw hám engiziw arqalı turizm tarawınıń básekeliligin asırıwǵa kómeklesedi;
agrar sektorda kárxanalardıń finanslıq kórsetkishlerin jaqsılaw, sonday-aq, mámleket azıq-awqat qáwipsizligin támiyinlew imkánın beriwshi innovacion ideyalar, islenbeler hám texnologiyalardı engiziwge kómeklesiw; 
mápdar kárxanalar hám shólkemler menen óz-ara sheriklikte úzliksiz tálim, ásirese injener-texnik kadrlardı tayarlaw tarawındaǵı sistemanı túten jetilistiriw, tálim xızmetleriniń ulıwmalılıǵın hám sıpatın hámde texnik jónelistegi qániygelerdiń mártebesin asırıw boyınsha usınıslardı tayarlaydı;    
tálim sistemasında innovaciyalardı, sonnan oqıtıwdıń zamanagóy hám interaktiv metodların engiziw arqalı járiyalaydı, raqamlı texnologiyalardan keń paydalanıwdı názerde tutıwshı innovacion oqıw dástúrlerin islep shıǵıwdı támiyinleydi;    
den sawlıqtı saqlaw sistemasın jáhán standartların esapqa alǵan halda, sonnan keselliklerdi erte anıqlaw ham aralıqtan profilaktika qılıw, sonday-aq, xalıqtıń uzaq ómir kóriwi ushın qosımsha sharayatlar jaratıw hámde kesellik hám ólim kórsetkishlerin páseytiwdi támiyinleytuǵın aldıńǵı texnologiyalar, “Aqıllı medicina” hám “Birden-bir medicina málimleme orayı” koncepciyaların engiziw arqalı jedel rawajlandırıwǵa kómeklesiw; 
bul koncepciyalardı islep shıǵıwda xalıqaralıq shólkem hám sırt el mekemeleriniń grand qarjıların jalp etiwge itibar qaratıw; 
insan ómirinde ekologiyalıq qolaylı sharayatlar hám aymaqtı qorshaǵan ortalıqtıń transshegaralıq pataslanıwınan qorǵaw sistemasın jaratıw máselelerin sistemalı hám kompleks úyreniwlerdi shólkemlestiredi;
innovacion ideyalar, islenbeler hám texnologiyalardıń hár jılǵı aymaqlıq yarmarkaların shólkemlestiredi hám ótkeredi, sonday-aq olar sheńberinde dúzilgen shártnamalardıń orınlanıwın monitoring qıladı;
intellektual múlk obektine bolǵan huqıqtı tastıyıqlaytuǵın patent hám basqa hújjetlerdi alıw tártip-qaǵıydaların ápiwayılastırıw hám jedellestiriw imkánın beriwshi nızam hám normativ-huqıqıy hújjetlerdi islep shıǵıwda qatnasadı;
v) menshiklestirilgen kárxanalarǵa kómeklesiw boyınsha:
menshiklestirilgen kárxanalar jumıslarınıń finans-ekonomikalıq hám islep shıǵarıw kórsetkishleri, báseki komiteti, ekonomika, kadastr, statistika hám salıq organları maǵlıwmatları tiykarında turaqlı túrde analiz etip barıw, usı tiykardı jumıs alıp barmay atırǵan, pás rentabelli hám zıyan kórip islep atırǵan kárxanalardı, bos turǵan hám nátiyjesiz paylananılıp atırǵan obektler hámde jer uchastkaların anıqlaw;
jańa jumıs orınların jaratıw, islep shıǵarıw jumıslarınıń nátijeliligin asırıw hám modernizaciyalaw hámde básekeles ónip islep shıǵarıwdı jolǵa qoyıw, ruxsat beriwshi hújjetlerin alıwda, kommunikaciyalarǵa jalǵanıwda hám kommerciyalıq banklerden kreditler hámde menshiklestirilgen kárxanalarǵa kómeklesiw qorı qarjıları ajıratılıwında olarǵa kómeklesiw maqsetinde menshiklestirilgen kárxanalardı rawajlandırıwdıń “jol kartaları”n islep shıǵıw hám olardı ámelge asırılıwın támiyinlew;  
bul jol kartaların islep shıǵıwda xalıq aralıq shólkem hám sırt el mekemeleriniń grant qarjıların jalp etiw esabınan menshiklestirilgen kárxanalarǵa kómeklesiw máselelerine itibar qaratıw;
menshiklestirilgen obektler negizinde investiciya joybarların ámelge asırıp atırǵan isbilermenlerge biznem júritiw hám biznes-rejelerin islep shıǵıw tiykarları, isbilermenlik jumısları tarawındaǵı nızamshılıq, menejment, finans basqarıw hám basqa pánlerdi kásip-óner kolledjleri bazasında ótkeriletuǵın kurslarda oqıtıwdı shólkemlestiriw, bunda tájriybe almasıw ushın qalamızda islep atırǵan, úlken jetiskenliklgen erisken isbilermenler hám sırt el qánigelerin jalp etiwge kómeklesiw;
jumısın jańadan baslap atırǵan isbilermenlik subektlerine biznes-reje tayarlaw, isbilermenlik jumısın ámelge asırıw menen baylanıslı ámeliy máselelerdi sheshiw hám kerekli maǵlıwmatlardı alıwda ekspertlik, huqıqıy hám másláhát kómegin kórsetiw ushın biznes-inkubatorlardı qamtıydı;   
burın menshiklestirilgen bos turǵan, nátiyjesiz paydalanılıp atırǵan obektler hám islep shıǵarıw maydanlar negizinde isbilermenlikti rawajlandırıw tarawındaǵı processlerdiń analizi tiykarında Qaraqalpaqstan Respublikası Ministrler Keńesine usınıslar kiritedi;
 “jol kartaları”n islep shıǵıw hám ámelge asırıwda payda bolatuǵın mashqalalardı olardıń wákilligi sheńberinde sheshiw júzesinen orınlanıwı májbúriy bolǵan talaplar jiberiw jolı menen menshiklestirilgen kárxanalarǵa kómeklesiw;
g) erkin ekonomikalıq hám kishi sanat zonaları boyınsha:
erkin ekonomikalıq hám kishi sanaat zonalar aymaǵında, birinshi náwbette, klaster jandasıwlardan keń paydalanǵan halda erkin ekonomikalıq hám kishi sanaat zonalar qatnasıwshılar ortasında jaqın kooperaciya baylanısların jolǵa qoyıw, jergilikli shiyki zat hám materiallar tiykarında básekilik tayar ónimler hám qadaqlawshı buyımlardı islep shıǵarıwdı jergiliklestiriw boyınsha joqarı texnologiyalı zamanagóy kárxanalar shólkemlestiriwdi támiyinlew;  
erkin ekonomikalıq hám kishi sanaat zonaları aymaǵında jaylasqan sanaat kárxanaları hám infrastruktura obektlerinde jańa tájriybeli jumıs orınların shólkemlestiriwdi támiyinlew, sol tiykarda qala halqınıń bántlik dárejesin hám dáramatların asırıw;   
jergilikli mineral-shiyki zat resursların tereń qayta islew hám dúnyada tanılǵan brendler astında joqarı qosılǵan qunlı básekilik ónimler islep shıǵarıw ushın aymaqta erkin ekonomikalıq hám kishi sanaat zonaları shólkemlesken zonalar islep shıǵarıw hám resurs qábiletinen kompleks hám nátiyjeli paydalanıwdı támiyinlew;
jetekshi shel el kompaniya hám korporaciyalar qatnasında joqarı texnologiyalı zamanagóy innovacion islep shıǵarıwlardı shólkemlestiriw ushın sırt el investiciyalar, asirese, tuwrıdan-tuwrı shel el investiciyaların jalp etiw boyınsha eń qolaylı sharayatlar jaratıw;
islep shıǵarıw, injenerlik-kommunikaciya, jol-transport hám sociallıq infrastrukturanı jánede rawajlandırıw, sonday-aq, sıpatlı logistika xızmetlerin kórsetiw ushın zamanagóy infrastrukturanı qáliplestiriw boyınsha zárúr is-ilájlardı ámelge asırıw; 
erkin ekonomikalıq hám kishi sanaat zonaları jónelisleri boyınsha kadrlarǵa bolǵan ámeldegi hám kelesheklegi zárúrliklerden kelip shıǵıp hám olardıń erkin ekonomikalıq hám kishi sanaat zonaları aymaǵında jaylasqan sanaat kárxanaları hám infrastruktura obktlerinde islep shıǵarıw ámeliyatın ótiwdi názerde tutqan halda, joqarı hám orta arnawlı kásip-óner tálimi mekemelerinde joqarı tájriybeli qániygeler tayarlawdı jolǵa qoyıwga buyırtpalardı qáliplestiriwdi támiyinlew; 
kárxanalar hám shólkemler, kommerciyalıq bankler hámde erkin ekonomikalıq hám kishi sanaat zonaları direkciyasınıń erkin ekonomikalıq hám kishi sanaat zonalırınıń nátiyjeli jumıs kórsetiwi hám olardı rawajlandırıw menen baylanıslı máseleler boyınsha jumısların ámeliy muwapıqlastırıwdı támiyinlewge baylanıslı kompleks shólkemlesken is-ilájlardı ámelge asırıw; 
barlıq mámleket basqarıwı organları, qadaǵalawgı organlar, kommerciyalıq banklerdiń erkin ekonomikalıq hám kishi sanaat zonaları aymaǵında belgilengen ayrıqsha salıq, bajıxana hám valyuta tártip-qaǵıydalarınıń qollanılıwı boyınsha huqıqıy normalar hám nızamshılıq qaǵıydalarınıń sózsiz orınlanıwın, investiciya joybarların tez pátte ilgeri súriw, byurokratik tosıq hám mashqalalardıń saplastırılıwın sistemalı kadaǵalaw;  
erkin ekonomikalıq hám kishi sanaat zonalar aymaǵında investiciya joybarların ámelge asırılıwın, erkin ekonomikalıq hám kishi sanaat zonaları qatnasıwshısı bolǵan xojalıq subektleriniń finans-xojalıq jumısları nátiyjeliligin turaqlı monitoring qılıw, kárxanalar hám shólkemler, kommerciyalıq bankler, erkin ekonomikalıq hám kishi sanaat zonaları direkciyasınıń olar juwapkershiligine júkletilgen wazıypalarǵa muwapıq ámelge asırılıp atırǵan jumıslar boyınsha esabatlardı turaqlı esitiw;
hár bir erkin ekonomikalıq hám kishi sanaat zonalarınıń tarmaq qániygelesiwin esapqa alǵan halda bul zonalarǵa sırt el investorların jalp etiw boyınsha “jol kartaları”n islep shıǵıw; 
d) turizmdi rawajlandırıw máseleleri boyınsha:
aymaqta turizm tarawında mámleket siyasatın ámelge asırıw, taraw boyınsha qabıl etilgen koncepciya hám dástúrlerdiń orınlanıwın támiyinlewge qaratılǵan ilájlardı belgilew hám ámelge asırılıwın monitoring qılıw hámde ulıwmalastırıwdı támiyinlew;
sırt el mámleketleri menen turizm tarawında, ásirese, turistler aǵımın kóbeytiw hámde olardı jalp etiw boyınsha sheriklik hám kelisiwlerdi wákillikli organlar menen birgelikte ámelge asırıw;
turizm tarawınıń ekonomikalıq, ekologiyalıq, sociallıq, mádeniy hám basqa jónelislerdegi infrastrukturasın jetilistiriw hám turizm jónelisindegi dıqqatqa ılayıq orınlar, olardıń jaǵdayın jaqsılaw boyınsha anıq is-ilájlardı belgilew, islep shıǵıp, tastıyıqlawǵa kiritiw hám ámelge asırılıwın qadaǵalaw (monitoring) qılıw; 
qosımsha turizm mashrutların islep shıǵıu, sırt el jasların keń jalp etiw maqsetinde kewilashar kompleksler jaratıw, mádeniy miyras obektlerinde xalqımızdıń tariyxıy, turmıs tárizi, úrp-ádetleri, dástúrlerin ózinde sáwlelendirgen ekspoziciyalardı shólkemlestiriw boyınsha is-ilájlardı belgilew;   
turizm tarawında turizmdi rawajlandırıwdıń aymaqlıq dástúrlerin islep shıǵıw hám ámelge asırıwdı muwapıqlastırıw;
turizm tarawındaǵı joybarlarǵa investiciya jalp etiw ushın joybarlardıń pasportların qáliplestiriw hám tiyisli kórgizbeli materiallardı mámleket hám zárúr shet tillerde tayarlaw hámde investiciya jalp etiw boyınsha basqa sharalardı kóriw; 
juwapker kárxanalar hám shólkemlerdiń jumısların turizmdi rawajlandırıw máseleleri boyınsha muwapıqlastırıw;
Turizm tarawına zamanagóy málimleme-kommunikaciya quralların jalp etiw, sırt el turoperatorlar hám ǵalaba-xabar quralları menen sheriklik arqalı aymaqtıń turistlik qábiletin keń jarıtıw boyınsha usınıslar tayarlaw hám ámelge asırıw ilájların kóredi. </p>
					</div>
				</div>
				<div class="col-lg-6 about_col order-lg-2 order-1">
					<div class="about_image">
						<img src="/assets/images/about.jpg" >
					</div>
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
 &copy;<script>document.write(new Date().getFullYear());</script> <?php echo lang('prava');?> <a href="http://alibek.uz" target="_blank">Web Developer</a>
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