<?php
/**
 * @package Tesseract
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <?php $featImg_pos = get_theme_mod('tesseract_blog_featimg_pos'); 
	
	if ( has_post_thumbnail() && ( !$featImg_pos || ( $featImg_pos == 'above' ) ) ) 
		tesseract_output_featimg_blog(); ?>
    
	<!--<header class="entry-header">-->
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php
		if ( is_home() || is_archive() ) {		
			$postDate = get_theme_mod('tesseract_blog_date');
			if ( $postDate == 'showdate' ) { ?>
				<span><i class="fa fa-calendar" aria-hidden="true"></i><?php the_time('F j, Y'); ?></span>
		    <?php }	?>
						
		
		<?php }	
		?>
		
	<!--</header>--><!-- .entry-header -->

	<?php if ( has_post_thumbnail() && ( $featImg_pos == 'below' ) ) 
		tesseract_output_featimg_blog(); ?>

	<div class="entry-content">
		<?php if ( has_post_thumbnail() && ( $featImg_pos == 'left' ) ) { ?>
			<div class="myleft">
				<?php tesseract_output_featimg_blog(); ?>
				<?php
				
					if ( is_home() || is_archive() ) {
						
						$contentType = get_theme_mod('tesseract_blog_content');
						if ( $contentType == 'content' ) {
							the_content();
						} else {
							the_excerpt();
						}
						
					} else {

					the_content( sprintf(
						__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'tesseract' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );
					
					 }
				?>
			
			</div>
		<?php } elseif ( has_post_thumbnail() && ( $featImg_pos == 'right' ) ){ ?>
			<div class="myright">
				<?php  tesseract_output_featimg_blog(); ?> 
				<?php //the_content(); ?>
				<?php
				
					if ( is_home() || is_archive() ) {
						
						$contentType = get_theme_mod('tesseract_blog_content');
						if ( $contentType == 'content' ) {
							the_content();
						} else {
							the_excerpt();
						}
						
					} else {

					the_content( sprintf(
						__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'tesseract' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );
					
					 }
				?>
			</div>
		<?php } else { ?>
		<?php the_content(); ?>
		<?php } ?>
	

	</div><!-- .entry-content -->
    
</article><!-- #post-## -->