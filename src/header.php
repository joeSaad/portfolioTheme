<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Montserrat|Raleway|Arimo|Poiret+One|Dosis|Varela+Round|Questrial|Comfortaa|Varela|Mallanna' rel='stylesheet' type='text/css'> -->
    <link href='https://fonts.googleapis.com/css?family=Mallanna' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<style>
	
	</style>


    <!-- <link rel="stylesheet" href="css/scss/style.scss"> -->
    <link rel="author" href="humans.txt">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- fancybox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>

    
</head>

<body <?php body_class(); ?>>
    <div id="page" class="container-fluid">
    	<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <header>
                    <h1 class="site-title">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img src="/wp-content/uploads/2015/11/logo.png" alt="<?php the_title(); ?>">
                            </a>                
                    </h1>

                    <h1 class="site-description"><?php the_title(); ?></h1>
                     <p><?php bloginfo( 'description' ); ?></p>
					                        <?php
                                if( have_rows('connect') ): ?>
                                <div class="connect pull-right">
                                    <ul class="connect-list">
                                        <?php    while ( have_rows('connect') ) : the_row();
                                            ?>
                                                <li>
                                                    <a href="<?php the_sub_field('connectcontent'); ?>" target="_blank">
                                                        <span class="fa <?php the_sub_field('connecttype') ?>"></span>
                                                    </a>
                                                </li>
                                            <?php   endwhile; ?>
                                    </ul>
                                </div>
                                    <?php else :
                                    // no rows found
                                    endif;
                        ?>

                </header>

		<div id="main" class="site-main">
