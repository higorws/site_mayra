<?php

define('HOME', 'http://localhost/site_maira');
define('THEMES', 'mayrahtml');
define('INCLUDE_PATH',HOME. '/themes/'.THEMES);
define('REQUIRE_PATH', 'themes/'.THEMES);

$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$setUrl = (empty($setUrl)? 'index' : $getUrl);
$Url = explode('/', $setUrl);

$pg_url = HOME;

$pg_google_autor = '100519100972081928290';
$pg_google_publisher = '117773561253560120253';
$pg_site = 'Mayra Silva - psicóloga comportamental';

$pg_fb_author = '100005260125769';
$pg_fb_page = 'Mayra-Silva-Psicóloga-comportamental-1864049407169141';
$pg_fb_app = '1833523263554387';