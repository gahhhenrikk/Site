<?php
$mensagem=0;
@$mensagem=$_REQUEST['mensagem'];

?>

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Bella Cor tamanhos especiais</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="shortcut icon" href="images/favicon.ico">
    
	<!-- CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" />
    
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
    
	<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>
	<script src="js/superfish.min.js" type="text/javascript"></script>
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/owl.carousel.js" type="text/javascript"></script>
	<script src="js/animate.js" type="text/javascript"></script>
	<script src="js/jquery.BlackAndWhite.js"></script>
	<script src="js/myscript.js" type="text/javascript"></script>
	<script>
		
		//PrettyPhoto
		jQuery(document).ready(function() {
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});
		
		//BlackAndWhite
		$(window).load(function(){
			$('.client_img').BlackAndWhite({
				hoverEffect : true, // default true
				// set the path to BnWWorker.js for a superfast implementation
				webworkerPath : false,
				// for the images with a fluid width and height 
				responsive:true,
				// to invert the hover effect
				invertHoverEffect: false,
				// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
				intensity:1,
				speed: { //this property could also be just speed: value for both fadeIn and fadeOut
					fadeIn: 300, // 200ms for fadeIn animations
					fadeOut: 300 // 800ms for fadeOut animations
				},
				onImageReady:function(img) {
					// this callback gets executed anytime an image is converted
				}
			});
		});
		
	</script>
	
</head>
<body>

<!-- PRELOADER -->
<img id="preloader" src="images/preloader.gif" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page">
	
		<!-- HEADER -->
		<header>
			
			<!-- MENU BLOCK -->
			<div class="menu_block">
			
				<!-- CONTAINER -->
				<div class="container clearfix">
					
					<!-- LOGO -->
					<div class="logo pull-left">
						<a href="index.html" ><span class="b1">bella </span> 
							<span class="b6">cor </span> </a>
					 </div><!-- //LOGO -->
					
					
					
					<!-- MENU -->
					<div class="pull-right">
						<nav class="navmenu center">
							<ul>
								<li class="first active scroll_btn"><a href="#home">Home</a></li>
								<li class="scroll_btn"><a href="#about" >Sobre Nós</a></li>
								<li class="sub-menu active">
									<a href="javascript:void(0);">Coleção</a>
									<ul>
										<li><a href="#colecao_feminina">Feminina</a></li>
										<li><a href="#colecao_masculina">Masculina</a></li>
									</ul>
								<li class="scroll_btn last"><a href="#contacts" >Contato</a></li>
							</ul>
						</nav>

					</div><!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->
		
		
		<!-- HOME -->
		<section id="home" class="padbot0">
				
			<!-- TOP SLIDER -->
			<div class="flexslider top_slider">
				<ul class="slides">
					<li class="slide1">
						<div class="flex_caption1">
							<p class="title2 captionDelay4 FromTop">Coleção</p>
							<p class="title1 captionDelay2 FromTop">Verão</p>
							<p class="title2 captionDelay4 FromTop">2018</p>	
							<p class="title4 captionDelay7 FromBottom">Nova coleção verão 2018 que chegou em nossa loja, muitas variedades de varias marcas, sempre com conforto e qualidade</p>
						</div>
						<a class="slide_btn FromRight" href="#colecao_feminina" >Confira</a>
					</li>
					<li class="slide2">
						<div class="flex_caption1">
							<p class="title2 captionDelay4 FromLeft">Curta nossa pagina no</p>
							<p class="title1 captionDelay6 FromLeft">Facebook</p>
							<p class="title4 captionDelay7 FromLeft">E fique por dentro de todas as novidades de nossa loja</p>
						</div>
						<a class="slide_btn FromRight" href="https://www.facebook.com/bellacortamanhosespeciais" target="_blank" >Curta nossa pagina</a>
					</li>
					<li class="slide3">
						<div class="flex_caption1">
							<p class="title2 captionDelay2 FromBottom">Nos siga no</p>
							<p class="title1 captionDelay1 FromBottom">Instagram</p>
							<p class="title4 captionDelay5 FromBottom">E fique por dentro de todas as novidades de nossa loja</p>
						</div>
						<a class="slide_btn FromRight" href="https://www.instagram.com/bellacortamanhosespeciais" target="_blank" >Nos siga</a>
						
						<!-- VIDEO BACKGROUND -->
						<a id="P2" class="player" data-property="{videoURL:'tDvBwPzJ7dY',containment:'.top_slider .slide3',autoPlay:true, mute:true, startAt:0, opacity:1}" ></a>
						<!-- //VIDEO BACKGROUND -->
					</li>
				</ul>
			</div>
			<div id="carousel">
				<ul class="slides">
					<li><img src="images/slider/slide1_bg.jpg" alt="" /></li>
					<li><img src="images/slider/slide2_bg.jpg" alt="" /></li>
					<li><img src="images/slider/slide3_bg.jpg" alt="" /></li>
				</ul>
			</div><!-- //TOP SLIDER -->
		</section><!-- //HOME -->
		
		
		<!-- ABOUT -->
		<section id="about">
			
			
			
			<!-- CLEAN CODE -->
			<div class="cleancode_block">
				
				<!-- CONTAINER -->
				<div class="container" data-appear-top-offset="-200" data-animated="fadeInUp">
					
					<!-- CASTOM TAB -->
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active clearfix" id="tab1">
							<p class="title"><b>Sobre</b></p>
							<br>
							<h4 class="sobre">A BELLA COR é uma loja de roupas masculinas e femininas de alta qualidade especializada em tamanhos especiais que está a 15 anos no mercado.
 
Foi fundada em 2000 na rua dona margarida no centro de Santa bárbara d'Oeste. 
​
Com sua honestidade,humildade e determinação a Bella Cor abriu mais 2 lojas, sendo uma em limeira/Sp feminina e uma em Santa Bárbara d'Oeste masculina.
 
Hoje é uma das principais lojas de Santa Bárbara d'Oeste. 
 
Que preza o atendimento e o bem estar do cliente</h4>
						</div>
						
						
						
					</div>
					
				</div><!-- //CONTAINER -->
			</div><!-- //CLEAN CODE -->
			
			
				
				
			
		</section><!-- //ABOUT -->
		
		
		<!-- PROJECTS -->
		<section id="colecao_feminina" class="padbot20">
		
			<!-- CONTAINER -->
			<div class="container">
				<div class="h1a"> Colecao </div> <div class="h1a"> Feminina </div> <div class="h1a"> Verao 2018</div>
			</div><!-- //CONTAINER -->
			
				
			<div class="projects-wrapper" data-appear-top-offset="-200" data-animated="fadeInUp">
				<!-- PROJECTS SLIDER -->
				<div class="owl-demo owl-carousel projects_slider">
					
					<!-- work1 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/1.jpg" alt="" />
								<a class="zoom" href="images/works/1.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
								<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Pianeta </div>
								</div>
							</div>
						</div>
					</div><!-- //work1 -->
					
					<!-- work2 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/2.jpg" alt="" />
								<a class="zoom" href="images/works/2.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Pianeta </div>
								</div>
							</div>
						</div>
					</div><!-- //work2 -->
					
					<!-- work3 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/3.jpg" alt="" />
								<a class="zoom" href="images/works/3.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Pianeta </div>
								</div>
							</div>
						</div>
					</div><!-- //work3 -->
					
					<!-- work4 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/4.jpg" alt="" />
								<a class="zoom" href="images/works/4.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Pianeta </div>
								</div>
							</div>
						</div>
					</div><!-- //work4 -->
					
					<!-- work5 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/5.jpg" alt="" />
								<a class="zoom" href="images/works/5.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Pianeta </div>
								</div>
							</div>
						</div>
					</div><!-- //work5 -->
					
					<!-- work6 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/6.jpg" alt="" />
								<a class="zoom" href="images/works/6.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Pianeta </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work6 -->
					
					<!-- work7 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/7.jpg" alt="" />
								<a class="zoom" href="images/works/7.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Seiki </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work7 -->
					
					<!-- work8 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/8.jpg" alt="" />
								<a class="zoom" href="images/works/8.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Seiki </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work8 -->
					
					<!-- work9 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/9.jpg" alt="" />
								<a class="zoom" href="images/works/9.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Seiki </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work9 -->
					
					<!-- work10 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/10.jpg" alt="" />
								<a class="zoom" href="images/works/10.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Seiki </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work10 -->
					
					<!-- work11 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/11.jpg" alt="" />
								<a class="zoom" href="images/works/11.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Seiki </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work11 -->
					
					<!-- work12 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/12.jpg" alt="" />
								<a class="zoom" href="images/works/12.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Seiki </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work12 -->
					
					<!-- work13 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/13.jpg" alt="" />
								<a class="zoom" href="images/works/13.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Realist </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work13 -->
					
					<!-- work14 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/14.jpg" alt="" />
								<a class="zoom" href="images/works/14.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Realist </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work14 -->
					
					<!-- work15 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/15.jpg" alt="" />
								<a class="zoom" href="images/works/15.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Realist </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work15 -->
					
					<!-- work16 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/16.jpg" alt="" />
								<a class="zoom" href="images/works/16.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Realist </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work16 -->
					
					<!-- work17 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/17.jpg" alt="" />
								<a class="zoom" href="images/works/17.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Realist </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work17 -->
					
					<!-- work18 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/18.jpg" alt="" />
								<a class="zoom" href="images/works/18.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Realist </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work18 -->
					
					<!-- work19 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/19.jpg" alt="" />
								<a class="zoom" href="images/works/19.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Fact Jeans </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work19 -->
					
					<!-- work20 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/20.jpg" alt="" />
								<a class="zoom" href="images/works/20.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Fact Jeans </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work20 -->
					
					<!-- work21 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/21.jpg" alt="" />
								<a class="zoom" href="images/works/21.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Fact Jeans </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work21 -->
					
					<!-- work22 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/22.jpg" alt="" />
								<a class="zoom" href="images/works/22.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Fact Jeans </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work22 -->
					
					<!-- work23 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/23.jpg" alt="" />
								<a class="zoom" href="images/works/23.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Fact Jeans </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work23 -->
					
					<!-- work24 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/24.jpg" alt="" />
								<a class="zoom" href="images/works/24.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Fact Jeans </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work24 -->
					
					<!-- work25 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/25.jpg" alt="" />
								<a class="zoom" href="images/works/25.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Program Plus </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work25 -->
					
					<!-- work26 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/26.jpg" alt="" />
								<a class="zoom" href="images/works/26.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Program Plus </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work26 -->
					
					<!-- work27 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/27.jpg" alt="" />
								<a class="zoom" href="images/works/27.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Program Plus </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work27 -->
					
					<!-- work28 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/28.jpg" alt="" />
								<a class="zoom" href="images/works/28.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Program Plus </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work28 -->
					
					<!-- work29 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/29.jpg" alt="" />
								<a class="zoom" href="images/works/29.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Program Plus </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work29 -->
					
					<!-- work30 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/30.jpg" alt="" />
								<a class="zoom" href="images/works/30.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Program Plus </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work30 -->
				</div><!-- //PROJECTS SLIDER -->
			</div>
			
			
			<!-- OUR CLIENTS -->
			<div class="our_clients">
			
				<!-- CONTAINER -->
				<div class="container" data-appear-top-offset="-200" data-animated="fadeInUp">
					
					<!-- ROW -->
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/1.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/2.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/3.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/4.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/5.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/6.jpg" alt="" />
						</div>
					</div><!-- //ROW -->
				</div><!-- CONTAINER -->
			</div><!-- //OUR CLIENTS -->
		</section><!-- //PROJECTS -->
		
		
		
		<!-- ************************COLEÇÃO MASCULINA ***************************** -->
		
		<!-- PROJECTS -->
		<section id="colecao_masculina" class="padbot20">
		
			<!-- CONTAINER -->
			<div class="container">
				<div class="h1a"> Colecao </div> <div class="h1a"> Masculina </div> <div class="h1a">Verao 2018</div>
			</div><!-- //CONTAINER -->
			
				
			<div class="projects-wrapper" data-appear-top-offset="-200" data-animated="fadeInUp">
				<!-- PROJECTS SLIDER -->
				<div class="owl-demo owl-carousel projects_slider">
					
					<!-- work31 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/31.jpg" alt="" />
								<a class="zoom" href="images/works/31.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
								<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Dihoffmann </div>
								</div>
							</div>
						</div>
					</div><!-- //work31 -->
					
					<!-- work32 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/32.jpg" alt="" />
								<a class="zoom" href="images/works/32.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Dihoffmann </div>
								</div>
							</div>
						</div>
					</div><!-- //work32 -->
					
					<!-- work33 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/33.jpg" alt="" />
								<a class="zoom" href="images/works/33.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Dihoffmann </div>
								</div>
							</div>
						</div>
					</div><!-- //work33 -->
					
					<!-- work34 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/34.jpg" alt="" />
								<a class="zoom" href="images/works/34.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Dihoffmann </div>
								</div>
							</div>
						</div>
					</div><!-- //work34 -->
					
					<!-- work35 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/35.jpg" alt="" />
								<a class="zoom" href="images/works/35.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Dihoffmann </div>
								</div>
							</div>
						</div>
					</div><!-- //work35 -->
					
					<!-- work36 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/36.jpg" alt="" />
								<a class="zoom" href="images/works/36.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Dihoffmann </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work36 -->
					
					<!-- work37 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/37.jpg" alt="" />
								<a class="zoom" href="images/works/37.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Nocaute </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work37 -->
					
					<!-- work38 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/38.jpg" alt="" />
								<a class="zoom" href="images/works/38.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Nocaute </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work38 -->
					
					<!-- work39 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/39.jpg" alt="" />
								<a class="zoom" href="images/works/39.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Nocaute </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work39 -->
					
					<!-- work40 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/40.jpg" alt="" />
								<a class="zoom" href="images/works/40.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Nocaute </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work40 -->
					
					<!-- work41 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/41.jpg" alt="" />
								<a class="zoom" href="images/works/41.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Nocaute </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work41 -->
					
					<!-- work42 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/42.jpg" alt="" />
								<a class="zoom" href="images/works/42.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a>Coleção Verão 2018</a>
									<br>
									<div class="h4a"> Nocaute </div>
								
								</div>
							</div>
						</div>
					</div><!-- //work42 -->
					
				</div><!-- //PROJECTS SLIDER -->
			</div>
			
			
			<!-- OUR CLIENTS -->
			<div class="our_clients">
			
				<!-- CONTAINER -->
				<div class="container" data-appear-top-offset="-200" data-animated="fadeInUp">
					
					<!-- ROW -->
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/7.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/8.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/9.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/10.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/11.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/12.jpg" alt="" />
						</div>
					</div><!-- //ROW -->
				</div><!-- CONTAINER -->
			</div><!-- //OUR CLIENTS -->
		</section><!-- //PROJECTS -->
		
		
		
		
		
		
		
		
		
		
		
		<!-- NEWS -->
		<section id="news">
		
			<!-- CONTAINER -->
			<div class="container">
				<h2>O que os clientes dizem sobre nós?</h2>
				
				<!-- TESTIMONIALS -->
				<div class="testimonials" data-appear-top-offset="-200" data-animated="fadeInUp">
						
					<!-- TESTIMONIALS SLIDER -->
					<div class="owl-demo owl-carousel testim_slider">
						
						<!-- TESTIMONIAL1 -->
						<div class="item">
							<div class="testim_content">"Se tem uma loja q eu amo comprar é na Bella cor, atendimento maravilhoso, começando pela dona loja q é uma simpatia de pessoa, e as roupas são perfeitas, é a melhor loja plus Size de Santa Bárbara D'Oeste."</div>
							<div class="testim_author"><b>Silvana Lino</b></div>
						</div><!-- TESTIMONIAL1 -->
						
						<!-- TESTIMONIAL2 -->
						<div class="item">
							<div class="testim_content">“Gosto muito de comprar nesta loja, o atendimento é perfeito, as meninas deixam a gente super a vontade, os modelos são lindos e é uma delicia usa-los. Recomendo!!.”</div>
							<div class="testim_author"> <b>
Dilmara Stigliani Helleno</b></div>
						</div><!-- TESTIMONIAL2 -->
						
						<!-- TESTIMONIAL3 -->
						<div class="item">
							<div class="testim_content">“Acho tudo que preciso, adorooo tenho roupa dessa loja que uso a 10 anos.perfeita.”</div>
							<div class="testim_author"><b>Alice Folster</b></div>
						</div><!-- TESTIMONIAL3 -->
					</div><!-- TESTIMONIALS SLIDER -->
				</div><!-- //TESTIMONIALS -->
				

			</div><!-- //CONTAINER -->
		</section><!-- //NEWS -->
	</div><!-- //PAGE -->
	
	<!-- CONTACTS -->
	<section id="contacts">
	</section><!-- //CONTACTS -->
	
	<!-- FOOTER -->
	<footer>
			
		<!-- CONTAINER -->
		<div class="container">
			
			<!-- ROW -->
			<div class="col-lg-4 col-md-4 col-sm-6 padbot30 foot_about_block">
				<div class="h4b">Sobre</div>
					<div class="p1">
A Bella cor é uma loja de roupas masculinas e femininas de alta qualidade especializada em tamanhos especiais que está a 15 anos no mercado.
 
Foi fundada em 2000 na rua dona margarida no centro de Santa bárbara d'Oeste. <br>
​
Com sua honestidade,humildade e determinação a Bella Cor abriu mais 2 lojas, sendo uma em limeira/Sp feminina e uma em Santa Bárbara d'Oeste masculina.
 
Hoje é uma das principais lojas de Santa Bárbara d'Oeste.
 
						Que preza o atendimento e o bem estar do cliente.</div>
					
					
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-6 padbot30 foot_about_block">
					<div class="h4b">Endereco</div>
					<div class="p1loja">Loja 1 (Feminina) </div>
					<div class="p1">Rua Santa Bárbara, nº650- Centro - SBO/SP</div>
					<div class="p1">(19) 3455-7071</div>
					<div class="p1loja">Loja 2 (Masculina)</div>
					<div class="p1">Rua Dona Margarida, nº701- Centro - SBO/SP</div>
					<div class="p1">(19) 3454-6511</div>
					<div class="p1loja">Loja 3 (Feminina)</div>
					<div class="p1">Rua Tiradentes, nº379- Centro - Limeira/SP</div>
					<div class="p1">(19) 3452-5839</div>
					<ul class="social">
						<li><a href="https://twitter.com/bellacorplus" target="_blank" ><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.facebook.com/bellacortamanhosespeciais" target="_blank" ><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://www.instagram.com/bellacortamanhosespeciais/" target="_blank" ><i class="fa fa-instagram"></i></a></li>
						<li><a href="javascript:void(0);"  ><i class="map_show fa fa-map-marker"></i></a></li>
					</ul>
				</div>
				
				<div class="respond_clear"></div>
				
				<div class="col-lg-4 col-md-4 padbot30">
					<div class="h4b">Contato </div>
					
					<!-- CONTACT FORM -->
					<?php if ($mensagem==enviado) {
							echo "Mensagem enviada com sucesso";
					}
					 ?>
					<div class="span9 contact_form">
						<div id="note"></div>
						<div id="fields">
							<form id="contact-form-face" class="clearfix" action="form.php" method="post">
								<input type="text" title="Informe seu nome" name="Nome" value="Nome" onFocus="if (this.value == 'Nome') this.value = '';" onBlur="if (this.value == '') this.value = 'Nome';" />
								
								<input type="email" title="Informe seu email" name="Email" value="Email" onFocus="if (this.value == 'Email') this.value = '';" onBlur="if (this.value == '') this.value = 'Email';" />
								
								<textarea name="Mensagem" title="Escreva uma mensagem" onFocus="if (this.value == 'Mensagem') this.value = '';" onBlur="if (this.value == '') this.value = 'Mensagem';">Mensagem</textarea>
								<input class="contact_btn" type="submit" value="Enviar" />
							</form>
						</div>
					</div><!-- //CONTACT FORM -->
				</div>
			</div><!-- //ROW -->
			<div class="row copyright">
				<div class="col-lg-12 text-center">
				
					<div class="p1">COPYRIGHT © 2017. TODOS OS DIREITOS RESERVADOS </div>
				</div>
			
			</div><!-- //ROW -->
		</div><!-- //CONTAINER -->
	</footer><!-- //FOOTER -->
	
	
	<!-- MAP -->
	<div id="map">
		<a class="map_hide" href="javascript:void(0);" ><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></a>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3679.294810598999!2d-47.41658842883606!3d-22.754438006178738!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c89db418b09941%3A0xe9deada44635c3c5!2sBella+Cor!5e0!3m2!1spt-BR!2sbr!4v1502668508810"></iframe>
	</div><!-- //MAP -->

</div>
</body>
</html>