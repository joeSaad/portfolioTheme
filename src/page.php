<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">		
					
					<?php
						// check if the repeater field has rows of data
						if( have_rows('panel') ):
						 	// loop through the rows of data
						    while ( have_rows('panel') ) : the_row();
							// display a sub field value							     
							?>							           
						        <h2><?php the_sub_field('panelheader'); ?></h2>
						        <div class="panelcontent">
						        	<?php the_sub_field('panelcontent'); ?>
						        </div>
						        </li>
					<?php   endwhile;
						else :
						    // no rows found
						endif;
					?>

<style>
	.techset {
		clear: both;
	}
	.techset li {float: left; clear: both; border: 1px solid #ccc; max-width: 530px;}
	.techset .tech-type {float: left;}
	.techset li div.tech-name {
		float: left;
	}
	.techset .tech-type {float: left; margin-right: 10px; border: 1px solid red;}

</style>
					
					<?php
						// check if the repeater field has rows of data
						if( have_rows('techset') ):
							?>
							<ul class="techset">
										<?php
									 	// loop through the rows of data
									    while ( have_rows('techset') ) : the_row();
										// display a sub field value							     
										?>
											
											<li>
										        <div class="tech-type"><?php the_sub_field('techType'); ?></div>
										        <div class="tech-name">
										        	<?php the_sub_field('techName'); ?>
										        </div>
									        </li>
								<?php   endwhile;					?>
							</ul>
					<?php
						    // no rows found
						endif;
					?>
					
					<div style="clear:both;"></div>
					<ul>						
						<?php
							// check if the repeater field has rows of data
							if( have_rows('project') ):
							 	// loop through the rows of data
							    while ( have_rows('project') ) : the_row();
								// display a sub field value							     
								?>							           
							        <li>
							        	<?php the_sub_field('title'); ?>
							        	<i><?php the_sub_field('year'); ?></i> 
							        </li>
						<?php   endwhile;
							else :
							    // no rows found
							endif;
						?>
					</ul>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>