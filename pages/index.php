<?php
require('system/main.php');

$layout = new HTML(title: 'PHP via Vite');
?>

<div class="flex flex-col items-center gap-10 text-2xl">
	<?php include('partials/nav.php'); ?>

	<div class="flex flex-col items-center">
		<?php include('partials/vite-name.php'); ?>

		<div>+</div>

		<img src="%BASE%/logo.svg" class="w-20" />
	</div>

	<div id="repos" class="text-base flex gap-10"></div>
</div>

<script src="/src/scripts/repos.ts" type="module"></script>
