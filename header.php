<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title><?php bloginfo('description'); ?></title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="<?php bloginfo(stylesheet_url ); ?>">
	</head>

<body>
	<header class="Header">
		<div class="Header-menu">
			<label class="Header-label" for="menu">
				<span class="icon-menu2"></span>
			</label>
			<input type="checkbox" class="check" id="menu">								
		</div>
		<div class="Header-title">
			<figure>
				<h1 class="Header-h1">F</h1>
			</figure>
			<h2><?php bloginfo('description' ); ?></h2>
		</div>
	</header>
	<?php include TEMPLATEPATH . '/nav.php' ?>
