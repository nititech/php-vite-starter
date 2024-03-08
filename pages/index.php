<?php
require('php/main.php');

$layout = new HTML(title: 'PHP via Vite');
?>

<div class="flex flex-col items-center text-2xl">
	<?php include('partials/vite-name.php'); ?>

	<div>+</div>

	<img src="/logo.svg" class="w-20" />

	<a href="<%= BASE %>/" class="mt-10 text-base underline text-sky-800 hover:no-underline">Home</a>
</div>
