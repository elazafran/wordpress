<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url) ?>">
</head>
<body>
	<header>
		<h1><?php bloginfo('name') ?></h1>
	</header>
	<section class="content">

		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>

				<article>
					<header>
						<h3>titulo</h3>
					</header>
					<p><?php the_excerpt(); ?></p>
					<a href="<?php 	the_permalink( ); ?>">asdfafds</a>
					<figure>
						<?php echo the_post_thumbnail('full' ); ?>
					</figure>
					<footer>
						<strong><?php the_author( $deprecated = '', $deprecated_echo = true ) ?></strong>
					</footer>
				</article>

			<?php endwhile; ?>

				<?php // Navigation ?>

			<?php else : ?>
				<h4>No hemos encontrado nada</h4>
		<?php endif; ?>

</body>
</html>
