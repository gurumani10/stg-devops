<?php

function buildMenu($menu, $region){
	$html = '';
	foreach($menu as $key => $menuitem){
		if(!isset($menuitem['region']) || (isset($menuitem['region']) && in_array($menuitem['region'], array($region, 'both')))){
			$html .= '<li class="'.$key.((!empty($GLOBALS['site']['page']['current']['section']) && $key == $GLOBALS['site']['page']['current']['section'])?' active':'').'">';
			$html .= '<a href="'.$menuitem['href'].'">'.$menuitem['title'].'</a>';
			$html .= '</li>';
		}
	}
	return $html;
}

function buildSlideshowCSS(){
	$return = '';
	$images = array(
		'desktop' => array(),
		'tablet' => array(),
		'mobile' => array(),
	);
	foreach($GLOBALS['site']['featured']['images'] as $key => $image){
		if(is_string($image)){
			$images['desktop'][$key] = $image;
		}else{
			foreach(array_keys($images) as $version){
				if(!empty($image[$version])){ $images[$version][$key] = $image[$version]; }
			}
		}
	}
	foreach($images as $version => $versionImages){
		if($version == 'tablet'){
			$maxwidth = $GLOBALS['site']['featured']['breakpoints']['tablet'];
			$minwidth = $GLOBALS['site']['featured']['breakpoints']['mobile']+1;
		}else if($version == 'mobile'){
			$maxwidth = $GLOBALS['site']['featured']['breakpoints']['mobile'];
			$minwidth = 0;
		}

		if(!empty($maxwidth)){ $return .= '@media all and (max-width: '.$maxwidth.'px) and (min-width: '.$minwidth.'px){'; }
		foreach($images[$version] as $key => $src){
			$return .= buildSlideshowCSSStyle($GLOBALS['site']['featured']['container'], $key, $src);
		}
		if(!empty($maxwidth)){ $return .= '}'; }
	}
	//list($imgWidth, $imgHeight) = getimagesize($imgFile);
	return $return;
}

function buildSlideshowCSSStyle($container, $style, $img){
	$css = '';
	if($GLOBALS['site']['featured']['useFigures']){
		$css .= $container.' .'.$style.' img {background-image: url(\''.$img.'\');} ';
	}else{
		$caption = (!empty($GLOBALS['site']['featured']['images'][$style]['caption']))?$GLOBALS['site']['featured']['images'][$style]['caption']:'';
		$css .= $container.' .'.$style.' {background-image: url(\''.$img.'\');} ';
		if (!empty($caption)){
			$css .= $container.' .'.$style.':after {content: \''.$caption.'\';} ';
		}
	}
	return $css;
}

function buildSlideshowHTML($pageid){
	$html = '';
	if(!empty($pageid) && !empty($GLOBALS['site']['featured']['pages'][$pageid])){
		if(is_array($GLOBALS['site']['featured']['pages'][$pageid])){
			foreach($GLOBALS['site']['featured']['pages'][$pageid] as $class){
				$html .= buildSlideshowHTMLSlide($class);
			}
		}else{
			$html .= buildSlideshowHTMLSlide($GLOBALS['site']['featured']['pages'][$pageid]);
		}
	}else{
		$html .= buildSlideshowHTMLSlide('default');
	}
	return $html;
}

function buildSlideshowHTMLSlide($key){
	if($GLOBALS['site']['featured']['useFigures']){
		$caption = (!empty($GLOBALS['site']['featured']['images'][$key]['caption']))?$GLOBALS['site']['featured']['images'][$key]['caption']:'';
		$title = (!empty($GLOBALS['site']['featured']['images'][$key]['title']))?$GLOBALS['site']['featured']['images'][$key]['title']:'';
		$alt = (!empty($GLOBALS['site']['featured']['images'][$key]['alt']))?$GLOBALS['site']['featured']['images'][$key]['alt']:'';
		return '<figure class="'.$key.' slide"><img title="'.$title.'" alt="'.$alt.'"/><figcaption>'.$caption.'</figcaption></figure>';
	}else{
		$title = (!empty($GLOBALS['site']['featured']['images'][$key]['title']))?$GLOBALS['site']['featured']['images'][$key]['title']:'';
		return '<div class="'.$key.' slide" title="'.$title.'"></div>';
	}
}

function getClasses($section){
	$classes = '';
	if($section == 'body'){
		$classes .= implode(' ', $GLOBALS['site']['page']['current']).' ';
		$classes .= str_replace('_', ' ', $GLOBALS['site']['page']['current']['page']).' ';
		$classes .= ($GLOBALS['site']['responsive']['menu']['expandable'])?'mobile-menu ':'';
	}
	if(!empty($GLOBALS['site']['classes'][$section])){
		$classes .= implode(' ', $GLOBALS['site']['page']['classes'][$section]);
	}
	return $classes;
}

function honeypotUrl(){
	return ($GLOBALS['site']['form']['honeypot']['enabled'])? $GLOBALS['site']['form']['honeypot']['script'] : $GLOBALS['site']['form']['submit'];
}

function honeypotField(){
	if($GLOBALS['site']['form']['honeypot']['enabled']){
		return '<input type="text" id="hcomments" name="hcomments" value="" style="display: none;" />';
	}
	else{
		return '';
	}
}
?>