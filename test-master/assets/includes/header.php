<!DOCTYPE html>
<html lang="en" class="<?php print implode(' ', $site['page']['classes']['html']); ?>">
	<head>
		<!--<script src="//cdn.optimizely.com/js/.js"></script>-->
		<script type="text/javascript" src="assets/js/modernizr.js"></script>
		<meta charset="UTF-8" />
        <meta name="viewport" content="initial-scale=1">
		<title><?php echo ((!empty($site['page']['title']))?strip_tags($site['page']['title']).' | ':'').$site['global']['title']; ?></title>
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<style type="text/css"><?php print buildSlideshowCSS(); ?></style>
		<?php 
			if (!empty($site['assets']['css'])):
				foreach ($site['assets']['css'] as $css):
					echo '<link rel="stylesheet" type="text/css" href="'.$css['href'].'" />';
				endforeach;
			endif;
			if (!empty($site['assets']['js'])):
				foreach ($site['assets']['js'] as $js):
					if(!empty($js['region']) && $js['region'] == 'header'){
						echo '<script type="text/javascript" src="'.$js['src'].'"></script>';
					}
				endforeach;
			endif;
		?>
		<script type="text/javascript">var site = <?php echo json_encode($site); ?>;</script>
		<script src="https://cdn.optimizely.com/js/585800997.js"></script>

		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-56P6WNK');</script>
		<!-- End Google Tag Manager -->

		<!--[if IE 8]><script type="text/javascript" src="assets/js/respond.min.js"></script><![endif]-->
	</head>
	<body class="<?php print getClasses('body'); ?>">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-56P6WNK"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->	

		<div id="page" class="<?php print getClasses('page'); ?>">
			<header id="page-header" role="header" class="<?php print getClasses('header'); ?>">
				<div class="content">
					<?php if($site['responsive']['menu']['expandable']): ?>
						<nav id="page-navigation-mobile">
							<div class="content">
								<ul>
									<li class="function menu" data-open="menu"><a href="#page-navigation">Menu</a></li>
									<li class="function requestinfo" data-open="requestinfo"><a href="#requestinfo">Request Information</a></li>
									<li class="link callus"><a href="tel: <?php echo preg_replace("/[^0-9]/","", $site['global']['phone']['number']); ?>"><?php echo $site['global']['phone']['number']; ?></a></li>
								</ul>
							</div>
						</nav>
					<?php endif; ?>
					<a href="<?php echo $site['global']['url']; ?>" title="<?php echo $site['global']['title']; ?>" class="sitelogo"><?php echo $site['global']['title']; ?></a>
					<address class="phonenumber">
						<a href="tel: <?php echo preg_replace("/[^0-9]/","", $site['global']['phone']['number']); ?>">
							<span class="number"><?php echo $site['global']['phone']['number']; ?></span>
							<span class="callnow">CALL<br/>NOW</span>
						</a>
					</address>
				</div>
			</header>
			<nav id="page-navigation" role="navigation">
				<div class="content">
					<ul>
						<?php echo buildMenu($site['menu'], 'header'); ?>
					</ul>
				</div>
			</nav>
			<div id="page-feature">
				<!--<div class="content">-->
					<div class="slides">
						<?php print buildSlideshowHTML($site['page']['current']['page']); ?>

						<?php if($site['page']['current']['page'] !== 'thankyou'): ?>
							<section class="lower">
								<div class="content"><div class="banner_text">Find Your Way with <br/>East-West University!</div></div>
							</section>
						<?php endif; ?>
						<?php if($site['page']['current']['page'] === 'thankyou'): ?>
							<section class="lower">
								<div class="content"><div class="banner_text">Thank You</div></div>
							</section>
						<?php endif; ?>
						
					</div>
				<!--</div>-->
				<div class="content request_wrap">
					<?php if($site['responsive']['form']['abovecontent'] && $site['page']['current']['page'] !== 'thankyou'): ?>
						<aside class="asideupper">
							<div class="content">
								<?php include('section_form.php'); ?>
							</div>
						</aside>
					<?php endif; ?>
				</div>
				
			</div>
			<main id="page-content" role="main" class="<?php print getClasses('main'); ?>">
				<div class="content">
					
					
					<article id="page-article" class="<?php print getClasses('article'); ?>">
						<!--<header><h1><?php echo (!empty($site['page']['articletitle']))?$site['page']['articletitle']:$site['page']['title'];?></h1></header>-->
						<div class="content">