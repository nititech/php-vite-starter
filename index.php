<?php

// Initial setup

define('ROOT', __DIR__);
define('MODE_DEV', in_array($_SERVER['REMOTE_ADDR'], ['::1', '127.0.0.1']));

function require_existing(string $path) {
	file_exists($path) && require_once($path);
}

require_existing('vendor/autoload.php');
require_existing('configs/env.php');

try {
	require_existing('configs/routes.php');
} catch (\Throwable $th) {
	die('Error: ' . $th->getMessage());
}
