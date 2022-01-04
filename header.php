<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<title><?php the_field('title_name'); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	<?php endif; ?>

   

	<?php wp_head(); 	?>
</head>
<body <?php body_class(); ?>>

<div id="page" class="site">
	<!-- Head Top -->
	<div class='top-head'>
		<div class='container'>
			<div id="header-widget-area" class="head-left chw-widget-area widget-area" role="complementary">
				<div class="widget_text head-left-custom">
					<div class="textwidget custom-html-widget">
						<ul>
							<?php
							if( have_rows('header_contact') ):

								while ( have_rows('header_contact') ) : the_row();    	
									
									if( get_row_layout() == 'contact' ):

										if( have_rows('header_phone') ):?>
											<?php while( have_rows('header_phone') ) : the_row();                
												$phone = get_sub_field('phone');?>
												<li class="fa fa-phone"><a><?php echo $phone;?></a></li>													
													
											
											<?php endwhile; ?>
										<?php endif; ?><br><br>															
											
										<?php if (have_rows('header_adr')) :
											while( have_rows('header_adr') ) : the_row();                
												$adr = get_sub_field('adr');?>
												<li class="fa fa-map"><a><?php echo $adr;?></a></li>														      
											
											<?php endwhile; ?>
										<?php endif; ?>

									<?php endif;?>
								<?php endwhile; ?>
							<?php endif;?>	
														
						</ul>
					</div>
				</div>				 
			</div>

			<div id="header-widget-area" class="head-right chw-widget-area widget-area" role="complementary">
				<div class="widget_text head-left-custom">
					<div class="textwidget custom-html-widget">
						<ul>
						    <?php if(get_field ('instagram')) : ?>   
						    <li><a href="<?php the_field('instagram') ?>" target = "_blanc" class="fa fa-instagram fa-2x"></a></li>
							<?php endif; ?>
							<?php if(get_field ('you_tube')) : ?>
							<li><a href="<?php the_field('you_tube') ?>" target = "_blanc" class="fa fa-youtube fa-2x"></a></li>
							<?php endif; ?>
							<?php if(get_field ('facebook')) : ?>
							<li><a href="<?php the_field('facebook') ?>" target = "_blanc" class="fa fa-facebook fa-2x"></a></li>
							<?php endif; ?>
							<?php 
							if(get_field ('social_text')) : ?><br>
                                 <li><a class="lick-right"><?php echo the_field('social_text'); ?></a></li>								
						    <?php endif;?> 
							
                        </ul>
					</div>
				</div>
			 </div>
		</div>
	</div>
	<!-- End Top menu -->

	<header class="site-header">	

		<div class="site-header-main">
		
			<div class="site-branding">
				<?php if(get_field ('logo')) : ?>
					<img src="<?php the_field('logo'); ?>">
					<h1 style="color:#ffffff"><?php echo the_field('name_school');?></h1>
				<?php endif; ?>
			</div>	

			<div class="anchor-button">
			     <a href="#about">about</a>   <a href="#classes">classes</a>    <a href="#gallery">gallery</a> 
		    </div>
			
		</div>
		
		
	</header>
	

			
