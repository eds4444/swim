<?php
/*
Template Name: Home
*/ ?>


<?php get_header();  ?>



<?php masterslider(1); ?>

<hr>
<section><a name="about" class="anchor"></a>
    <?php    
    if( have_rows('about') ):

        while ( have_rows('about') ) : the_row();
            
            if( get_row_layout() == 'about_text' ):
                $title = get_sub_field('title');
                $img = get_sub_field('img');
                $text = get_sub_field('text');?>

                <div class="about">
                    <div class="about-img">                            
                        <img src="<?php  echo $img; ?>" alt="swim" >
                    </div>
                    <div class="about-title-text">                
                        <p><h1><?php echo $title; ?></h1></p><br>
                    
                        <p><h3><?php echo $text; ?></h3></p>
                    </div>
                </div>   
                
            <?php endif;?>
    
        <?php endwhile;?>

    <?php endif;?>
</section>
<hr>


<section><a name="classes" class="anchor"></a>
    <?php
    if( have_rows('our_classes') ): ?>
        
        <h1><?php the_field('name_block_classes'); ?></h1><br>
        
        <div class="classes">     

            <?php while ( have_rows('our_classes') ) : the_row();    	
                
                if( get_row_layout() == 'classes' ):

                    if( have_rows('block_classes') ):?>
                    
                        <?php while( have_rows('block_classes') ) : the_row();                
                            $img_classes = get_sub_field('img_classes');
                            $title_classes = get_sub_field('title_classes');
                            $text_classes = get_sub_field('text_classes');?>
                            
                            <figure class="img">
                                <div class="scaled">
                                <?php echo wp_get_attachment_image( $img_classes['ID'], array( $img_classes['width'], $img_classes['height'] ) );?>
                                </div>
                                <figcaption>
                                <h1><?php echo $title_classes;?></h1>
                                <h3><?php echo $text_classes;?></h3>
                                </figcaption>
                                
                            </figure> 
                                                        
                        <?php endwhile; ?>
                    
                    <?php endif; ?>									
                <?php endif;?>
            <?php endwhile; ?>
        </div>
    <?php endif;?>
</section>	





<?php get_footer();  ?>










