<?php
require('php/layouts/HTML.php');

$layout = new HTML(title: 'PHP via Vite');
?>

<div class="flex flex-col items-center text-2xl">
	<?php include('partials/vite-name.php'); ?>
	<div>+</div>
	<img src="/logo.svg" class="w-20" />
</div>
