<?php
	$site = array(
		'global' => array(
			'title' => 'East West University',
			'url' => 'index.php',
			'copyright' => '2017',
			'phone' => array(
				'number' => '312.939.0111',
				'calltoaction' => 'Contact our Admission Team'
			)
		),
		'page' => array(
			'title' => '',
			'articletitle' => '',                                   // to override article title if different than page title in browser tab
			'current' => array(
				'page' => basename($_SERVER['SCRIPT_NAME'], ".php"),// a unique key for current page (E.G. 'thankyou', 'businessadmin'). defaults to filename
				'section' => '',                                    // current menu section key. E.G. 'programs'
			),
			'classes' => array(                                     // each array filled with class names (strings)
				'html' => array(), 						            // ex: 'homepage' or 'programs' and 'bs-accounting'
				'body' => array(),
				'page' => array(),
				'header' => array(),
				'main' => array(),
				'article' => array(),
				'aside' => array(),
				'footer' => array(),
			)
		),
		'assets' => array(
			'js' => array(                                          // region can be set to header or footer. defaults to footer if omitted
				array('src' => 'assets/js/plugins.js'),
				array('src' => 'assets/js/script.js'),
				//array('src' => '', 'region' => 'header'),
			),
			'css' => array(                                         // each key in array creates an attribute in a link tag. E.G. href, media, rel
				array('href' => 'http://fonts.googleapis.com/css?family=Open+Sans:400,700,800|Roboto:300,400,900|Roboto+Condensed:700'),
				array('href' => 'https://fonts.googleapis.com/css?family=Montserrat%3Aregular%2C700%2Citalic%2C700italic%7CMerriweather%3A300%2C300italic%7CQuattrocento+Sans%3Aregular%2C700%2Citalic%7CNTR%3Aregular%7COpen+Sans%3A600%2C600italic%2C300%2C300italic%7CCrimson+Text%3Aregular%2Citalic&subset=latin%2Ccyrillic&ver=4.8.1'),
				array('href' => 'assets/css/form.css'),
				array('href' => 'assets/css/styles.css'),
				array('href' => 'assets/css/responsive.css'),
			)
		),
		'form' => array(
			'FormID' => '7716',
			'CampaignID' => '7388',
			'CurriculumCategoryID' => '8',
			'AffiliateLocationID' => '0',
			'VendorID' => '38999',
			'returntourl' => 'thankyou.php',
			'submit' => 'http://webservices.plattformpartners.com/ilm/default.ashx',
			'honeypot' => array(
				'enabled' => false,
				'email' => 'garrett.rathone@plattform.com',
				'subject' => 'Fake University - Spam Inquiry',
				'script' => 'assets/includes/post.php'
			)
		),
		'responsive' => array(
			'menu' => array(
				'expandable' => true,
			),
			'form' => array(
				'collapsible' => false,
				'abovecontent' => true,
			),
		),
		'menu' => array(                                            // keys: title, href, region. if 'region' omitted, defaults to both header and footer. attributes is keyed array.
			'home' => array('title' => 'About','href' => 'index.php'),
			'programs' => array('title' => 'Programs','href' => 'programs.php'),
			'locations' => array('title' => 'Locations', 'href' => 'locations.php', 'region' => 'both'),
			'privacy' => array('title' => 'Privacy Policy', 'href' => 'privacypolicy.php', 'region' => 'footer'),
			'accreditation' => array('title' => 'Accreditation', 'href' => 'accreditation.php', 'region' => 'footer'),
			//'' => array('title' => '', 'href' => '', 'region' => 'footer', 'attributes' => array('data-name'=>'')),
		),
		'featured' => array(
			'container' => '#page-feature',
			'breakpoints' => array(
				'tablet' => 959,
				'mobile' => 767,
			),
			'useFigures' => false,                                  // change useFigures to true if the content in the featured item is important
			'images' => array(                                      // accepts either string or array of strings with keys(desktop, tablet, mobile, caption)
				'default' => array(                                 // default is auto used as default featured image for every page
					'desktop' => 'assets/images/banner.jpg',
					//'tablet' => '../images/featured/tablet/.jpg',
					//'mobile' => '../images/featured/mobile/.jpg',
					'caption' => 'Find Your Way with East-West University!',
					'title' => 'Photo title',
					'alt' => 'Photo alt'
				),
				'programs' => 'http://placekitten.com/940/400',
				'programs_accounting' => 'http://placekitten.com/940/402',
				'programs_accounting1' => 'http://placekitten.com/941/400',
			),
			'pages' => array(                                       // uses keys in images array. accepts string or array of strings to create slideshow (1st item overrides default image)
				//'index' => 'default',
				'template' => array('default', 'programs', 'programs_accounting'),
				'programs' => array('programs', 'programs_accounting'),
				'programs_accounting' => 'programs_accounting',
			)
		)
	);

/* Universal Functions */
include_once('functions.php');

/* Page Initialization */

?>