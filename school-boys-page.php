<?php
/*
Template Name: school-boys-news-page
Template Post Type: post, page, school_boys_news
*/
?>

<?php get_header(); ?>

<section class="main">
	
	<div class="content-container">
		
		<div class="row">
			<div class="col-lg-4 form-wrapper">
				<?php dynamic_sidebar('left-sidebar'); ?>
			</div>
			<div class="col-auto col-lg-8 news">
				
				<?php
					global $post;
					$args = array( 'post_type' => 'school_boys_news' );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
				?>

					<div class="news-item">
						<div class="news-illustration">
							<img src="<?php echo get_field('картинка'); ?>">
						</div>
						<div class="news-description">
							<a href="#" class="news-title-link">
								<h3 class="news-title">
									<span class="news-event"><?php echo get_field('заголовок'); ?></span>
								</h3>
							</a>
							<p class="news-event-description"><?php echo get_field('информация'); ?>
									<span class="contacts">
										Контакты: 
										<span class="contacts-name"><?php echo get_field('имя'); ?>, </span> 
										<a href="#" class="contacts-mail">
											<?php echo get_field('почта'); ?>
										</a>
										<span class="contacts-phone">, <?php echo get_field('телефон'); ?>.</span>
									</span>
							</p>
							<p class="classes">Классы: <?php echo get_field('классы'); ?></p>
							<p class="date">Дата проведения: <?php echo get_field('дата_проведения'); ?></p>
						</div>

					</div> <!-- news-item -->

				<?php
					}
					wp_reset_postdata();
				?>
			</div>
		</div>

	</div>

</section>

<?php get_footer(); ?>