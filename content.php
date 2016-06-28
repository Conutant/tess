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
	    <div id="bloglist_title">
		<h2 class="entry-title"><?php the_title(); ?></h2>
        </div>
		
		<?php
		if ( is_home() || is_archive() ) {		
			$postDate = get_theme_mod('tesseract_blog_date');
			if ( $postDate == 'showdate' ) { ?>
				<span><i class="fa fa-calendar" aria-hidden="true"></i><?php the_time('F j, Y'); ?></span>
		    <?php }	?>
						
		<?php $postAuthor = get_theme_mod('tesseract_blog_author');
			if ( $postAuthor == 'showauthor' ) { ?>
				<span><i class="fa fa-user" aria-hidden="true"></i><?php the_author(); ?></span>
		<?php } ?>
		
        <?php		
			$mypostComment = get_theme_mod('tesseract_blog_comments');
			if ( ( $mypostComment == 'showcomment' ) && ( comments_open() ) ) { ?>
				<span><i class="fa fa-comments-o" aria-hidden="true"></i><?php comments_number('(No Comments)', '(1 Comment)', '(% Comments)' );?></span>
		<?php }
		}	
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
							the_excerpt(); ?>
							<!--<?php $blbutton_pos = get_theme_mod('tesseract_blog_button_pos'); 
							switch ( $blbutton_pos ) {
								case 'center':
									$button_classnw = 'rmbutton-center';

									break;
								case 'right':
									$button_classnw = 'rmbutton-right';

									break;
								default:
									// sidebar-left
									$button_classnw = 'rmbutton-left';
							}
							?>
							
							<div id="bloglist_morebutton">
							<div class="blmore <?php echo $button_classnw; ?>"><a href="<?php the_permalink(); ?>">Read more</a></div>
							</div>-->	
						<?php }
						
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
	<div style="clear:both"></div>
    
</article><!-- #post-## -->