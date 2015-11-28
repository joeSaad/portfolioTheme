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
		                                <div class="panelheading">
		                                	<h2>
		                                		<span class="fa <?php the_sub_field('paneltype') ?>"></span>
		                                		<?php the_sub_field('panelheader'); ?>
		                                	</h2>
		                                </div>
										<?php if(have_rows('project')) : ?>
											<?php
                                        					$projectPictures = [];

                                        				?>
											<div class="panelcontent">
												<ul id="projects">
													<?php while (have_rows('project')) : the_row() ; ?>
													<li class="project">
														<h3><?php the_sub_field('project_title')?></h3>
														<div class="project-images">

																<?php while (have_rows('project_thumbnails')) : the_row() ; ?>
																	<?php $image = get_sub_field('project_thumbnail_img'); ?>														
	                                            					<a href="#<?php echo $image['title']; ?>" class="fancybox" rel="group">

	                                                					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" />
	                                                					<!-- <img src="<?php // the_sub_field('project_thumbnail') ?>" alt=""> -->
	                                            					</a>
	                                            					
	                                            				<?php endwhile; ?>

																<?php while (have_rows('project_images')) : the_row() ;
																	$projectPictures[] = get_sub_field('project_image');
																endwhile; ?>


                                        				</div>
                                        				

                                    					<ul class="project-details">
                                            				<li><span class="plabel">Completed</span><span class="pdata"><?php the_sub_field('project_year') ?></span></li>

															<?php 
																$number_of_hrefs = count( get_sub_field( 'project_url' ) );
																//echo the_sub_field('project_url');
																//echo the_sub_field('project_href');
																//echo count(get_sub_field('project_url'));
																//echo $number_of_hrefs;
																if($number_of_hrefs === 1 ) : ?>
																	<?php while (have_rows('project_url')) : the_row() ; ?>
                                            							<li><span class="plabel">URL</span><span class="pdata url"><a href="<?php the_sub_field('project_href') ?>" target="_blank"><?php the_sub_field('project_href') ?></a></span></li>
                                            						<?php endwhile; ?>
                                            					<?php else: ?>
                                            						<li>
                                            							<ul>
                                            								<?php while (have_rows('project_url')) : the_row() ; ?>
																				<li><span class="plabel">URL</span><span class="pdata url"><a href="<?php the_sub_field('project_href') ?>" target="_blank"><?php the_sub_field('project_href') ?></a></span></li>
                                            								<?php endwhile; ?>
                                            							</ul>
                                            						</li>
                                            					<?php endif; ?>
                                            				<li><span class="plabel">Description</span><span class="pdata"><?php the_sub_field('project_description') ?></span></li>
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
		                                <div class="panelheading">
		                                	<h2>
		                                		<span class="fa <?php the_sub_field('paneltype') ?>"></span>
		                                		<?php the_sub_field('panelheader'); ?>
		                                	</h2>
		                                </div>
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
			
		<?php
			foreach ($projectPictures as $pictureURL) {?>
				<img id="<?php echo $pictureURL['title'] ?>" src="<?php echo $pictureURL['url'] ?>" >
		<?php
		}
		?>


	</div>


	<?php
	//	print_r(array_values($projectPictures));
	 ?>

<?php get_footer(); ?>