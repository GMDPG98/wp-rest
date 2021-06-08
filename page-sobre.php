<?php
// Template Name: Sobre
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="container sobre">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-8">
				<?php 
				$imagem = wp_get_attachment_image_src(get_field('foto_rest_id'), 'medium')[0];
				?>

				<img src="<?php echo $imagem; ?>" alt="Fachada do Rest">
			</div>

			<div class="grid-8">
				<h2>História</h2>
				<p><?php echo get_post_meta(get_the_ID(), 'historia', true); ?></p>
				<h2>Visão</h2>
				<p><?php echo get_post_meta(get_the_ID(), 'visao', true); ?></p>
				<h2>Valores</h2>
				<p><?php echo get_post_meta(get_the_ID(), 'valores', true); ?></p>
			</div>
		</section>
<?php endwhile; else: endif;  ?>

<?php get_footer(); ?>