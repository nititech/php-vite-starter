<?php
require('system/main.php');

$layout = new HTML(title: 'PHP via Vite');
?>

<div class="flex flex-col items-center gap-10 text-2xl">
	<?php include('partials/nav.php'); ?>

	<div class="w-full max-w-lg text-base">
		This is a PHP-Vite starter repo.<br />
		<br />
		It contains all the basic needs to start developing modern PHP applications:
		<ul class="list-disc pl-10">
			<li>TypeScript/ JavaScript transpilation</li>
			<li>Tailwind CSS implementation</li>
			<li>Out of the box SASS/ SCSS support</li>
			<li>EJS template language support</li>
			<li>Image transform tools</li>
			<li>SVG loader</li>
		</ul>
	</div>
</div>
