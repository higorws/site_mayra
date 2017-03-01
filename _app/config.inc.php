<?php

define('HOME', 'http://localhost/site_maira');
define('THEMES', 'mayrahtml');
define('INCLUDE_PATH',HOME. '/themes/'.THEMES);
define('REQUIRE_PATH', 'themes/'.THEMES);

$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$setUrl = (empty($setUrl)? 'index' : $getUrl);
$Url = explode('/', $setUrl);

$pg_url = HOME;