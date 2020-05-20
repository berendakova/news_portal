<?php
/*
Template Name: Главная
Template Post Type: page
*/
?>

<?php get_header(); ?>

<section class="home-page-intro-wrapper" style="background-image:url(' <?php the_field( 'баннер',479 );  ?> ');">
	<div class="content-container">
		<div class="home-page-intro">
			<div class="top-content">
				<div class="greeting">
					<h1 class="title"><?php the_field( 'заголовок',479 );  ?></h1>
				</div>
				<?php
				    $buttons = CFS()->get( 'кнопки' );
				    if(sizeof($buttons) != 0) {
				?>
				<div class="buttons">
					<?php
						foreach( $buttons as $button ){
					?>
					<button type="button" class="button">
						<?php echo $button['кнопка']; ?>
					</button>
					<?php 
					} 
					?>
				</div> 
				<?php 
				} 
				?>
			</div>
			<div class="bottom-content">
				<h6>Узнать больше</h6>
				<div class="icon-scroll">
					<div class="scroller"></div>
				</div>
			</div>
		</div>
	</div>

</section>

<?php
    $args = array(
		'post_type' => 'university-admission',
		'publish' => true,
		'numberposts' => 0,
		'orderby' => 'date',
		'order' => 'ASC',
	 );

    $myposts = get_posts( $args );
    if(sizeof($myposts) != 0) {
?>

<section class="university-admission-wrapper">
	<div class="content-container">
		<div class="university-admission">
			<div class="block-slider faculty-slider">
				<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="false">
					<h5>Прием в университет</h5>
					<ol class="carousel-indicators">
						<?php
        
							$myposts = get_posts( $args );
							$index = 0;
							foreach( $myposts as $post ){
						?>
						<li class="names-item" data-target="#carousel" data-slide-to="<?php echo $index ?>" class="active">
							<?php
								setup_postdata( $post );
								$location = CFS()->get( 'расположение' );
								echo $location;
							?>
						</li>
						<?php 
							$index = $index + 1;
							}
							wp_reset_postdata();
						?>
					</ol>
					<div class="carousel-inner">
						<?php 
        
						$myposts = get_posts( $args );
						$i = 0;
						foreach( $myposts as $post ){
							setup_postdata( $post );
							$fields = CFS()->get( 'направления' ); 
						?>
						<div class="carousel-item">
						  	<h5 class="text-center mt-4 mb-4"><?php echo CFS()->get( 'вид_образования' ); ?></h5>
						  	<?php
						  		$j = 0;
								foreach ( $fields as $field ) { 
								$collapseID ="collapse" . $i . "" .$j;
							?>
						  	<div class="subjects">
								<button class="courusel-header" type="button" data-toggle="collapse" data-target="<?php echo '#' . $collapseID ?>" aria-expanded="false" aria-controls="collapseExample">
								    <?php echo $field['направление']; ?>
								</button>
								<div class="collapse" id="<?php echo $collapseID ?>">
								    <div class="card card-body">
								    	<div class="d-flex flex-wrap">
								    		<?php 
								    		$subFields = $field['предметы'];;
								    		foreach ( $subFields as $subField ) { 
							    			?>
									        <p class="collapse-item">
									        	<?php echo $subField['предмет']; ?>
									        </p>
			        						<?php 
											}
											?>
								    	</div>
								    </div>
								</div>
							</div>
							<?php
								$j = $j + 1;
								}
							?>
						</div>
						<?php 
						$i = $i + 1;
						}
						wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	}
?>

<section class="home-page-registration">
	<div class="content-container">

		<div class="title">
			<h2>хочешь быть с нами? Присоединяйся!</h2>
		</div>
		
		<div class="row">
			<div class="col form-wrapper">
					<?php
						the_field( 'форма_регистрации',479 ); 
					?>
			</div>
			<?php if ( get_field( 'описание_регистрации',479 ) ) { ?>
			<div class="col-lg-6 info">
				<?php
					the_field( 'описание_регистрации',479 ); 
				?>
			</div>
			<?php } ?>
		</div>

	</div>
</section>

<?php get_footer(); ?>

</html>