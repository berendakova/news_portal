<?php
/*
Template Name: page
Template Post Type: post, page 
*/
?>

<?php get_header(); ?>

<section class="main">
	
	<div class="content-container">
		
		<div class="row">
			<div class="col-lg-4 form-wrapper">
				<?php dynamic_sidebar('left-sidebar'); ?>
			</div>
			<div class="col-auto col-lg-8">
				<div class="content-title">
					<h1 class="title"><?php the_title(); ?></h1>
				</div>
				<?php
				the_content();
				?>
			</div>
		</div>

	</div>

</section>

<?php get_footer(); ?>