<?php
return array(
	'TMPL_CACHE_ON'         =>  true,        // 是否开启模板编译缓存,设为false则每次都会重新编译
	'URL_PATHINFO_DEPR'     =>  '-',	// PATHINFO模式下，各参数之间的分割符号
	'URL_ROUTE_RULES'=>array(     
	'index'  => 'index/index',
	'about'  => 'about/about',
	'fw'  => 'fw/fw',
	'al'  => 'al/al',
	'news'  => 'news/news',
	'contact'  => 'contact/contact',
	'newsinfo'  => 'news/info',
	'alinfo'  => 'al/info',
	'fwinfo'  => 'fw/info',
	)
);