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

<hr>

<section><a name="gallery" class="anchor"></a>
   

        <?php

        if( have_rows('gallery') ): ?>

           <h1><?php the_field('name_gallery')  ?></h1>

            <h3><p><?php the_field('title_gallery')  ?></p></h3>
        

            <div class="gallery"> 
                  

                <?php while( have_rows('gallery') ) : the_row();      
                

                    $singlе_gallery = get_sub_field('singlе_gallery');?>

                    
                        <figure class="single-gallery">                          
                                                
                                        
                            <?php echo wp_get_attachment_image( $singlе_gallery['ID'], array( $singlе_gallery['width'], $singlе_gallery['height'] ) );?>                           
                            
                        </figure>
                
                
                <?php endwhile;?>
                        

            </div>
           
            
        <?php endif; ?>    
    
</section>


<hr>


<section><a name="instructors" class="anchor"></a>


    <?php     

    if( have_rows('instructors') ):?>

        <h1><?php the_field('name_block_instructors') ?></h1>

        <h3><p><?php the_field('title_instructors') ?></h3></p>


    <div class="instructors">   
       <?php while ( have_rows('instructors') ) : the_row();
            
            if( get_row_layout() == 'instr' ):

                if( have_rows('instructor') ):
                    
                    while( have_rows('instructor') ) : the_row();                
                        
                        $instr_img = get_sub_field('instr_img');
                        $instr_name = get_sub_field('instr_name');
                        $major = get_sub_field('major'); ?>
                        
                        <?php echo wp_get_attachment_image( $instr_img['ID'], array( $instr_img['width'], $instr_img['height'] ) );?> 

                        <?php echo $instr_name; ?>

                        <?php
                        if( have_rows('instr_achievements') ):
                    
                            while( have_rows('instr_achievements') ) : the_row();                
                                
                                $instr_achievement = get_sub_field('instr_achievement');
                                
                                echo $instr_achievement;
        
                            endwhile;                        
                        
                        endif;
                
                        echo $major;                     
                
                    
                    endwhile;           
                
                endif;

            endif;

        endwhile; ?>

    </div>     
    
    <?php endif; ?>

</section>







<?php get_footer();  ?>










