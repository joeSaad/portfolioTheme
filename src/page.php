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

					<div class="entry-content">		

					<?php
						if( have_rows('panel') ):
							while ( have_rows('panel') ) : the_row(); ?>
								<?php if (trim(get_sub_field('panelheader')) === "projects" ) : ?>
									<div class="biopanel">
		                                <h2>
		                                	<span class="fa <?php the_sub_field('paneltype') ?>"></span>
		                                	<?php the_sub_field('panelheader'); ?>
		                                </h2>
										<?php if(have_rows('project')) : ?>
											<div class="panelcontent">
												<ul id="projects">
													<?php while (have_rows('project')) : the_row() ; ?>
													<li class="project">
														<h3><?php the_sub_field('project_title')?></h3>
														<div class="project-images">
                                            				<a href="#proj1" class="fancybox" rel="group">
                                                				<img src="http://placehold.it/80x70" alt="project 1">
                                                				<img src="<?php the_sub_field('project_thumbnail') ?>" alt="project 1">
                                            				</a>
                                        				</div>
                                    					<ul class="project-details">
                                            				<li><span class="plabel">Completed</span><span class="pdata"><?php the_sub_field('project_year') ?></span></li>
                                            				<li><span class="plabel">URL</span><span class="pdata url"><a href="<?php the_sub_field('project_url') ?>" target="_blank"><?php the_sub_field('project_url') ?></a></span></li>
                                            				<li><span class="plabel">Activities</span><span class="pdata">
                                                				<?php the_sub_field('project_activities')?>
                                            				</span></li>
                                        				</ul>
													</li>
								       			<?php endwhile; ?>
								       			</ul>
								        	</div>
								        <?php endif; ?>
								    </div>
								<?php else : ?>
									<div class="biopanel">
		                                <h2>
		                                	<span class="fa <?php the_sub_field('paneltype') ?>"></span>
		                                	<?php the_sub_field('panelheader'); ?>
		                                </h2>
								        <div class="panelcontent">
								        	<?php the_sub_field('panelcontent'); ?>							        	
								        </div>
								    </div>
									
								<?php endif; ?>
								
								
								

								
							
							<?php   endwhile;
								else :
								    // no rows found
								endif;
							?>


					</div><!-- .entry-content -->

		</div><!-- #content -->
	</div><!-- #primary -->

	<div id="projectImages">
		<?php while (have_rows('project')) : the_row() ; ?>
			<img src="<?php the_sub_field('project_image') ?>" />
		<?php endwhile; ?>
	</div>

<?php get_footer(); ?>