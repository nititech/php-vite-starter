<?php
define('ROOT', dirname(__DIR__));

ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . ROOT);

function require_existing(string $path) {
	file_exists($path) && require_once($path);
}

require_existing('vendor/autoload.php');

require_once('partials/layouts/HTML.php');
