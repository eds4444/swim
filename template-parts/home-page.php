<?php
/*
Template Name: Home
*/ ?>


<?php get_header();  ?>

<?php the_title(); ?>

<?php the_content(); ?>

<?php

// Check value exists.
if( have_rows('header_contact') ):

	// Loop through rows.
    while ( have_rows('header_contact') ) : the_row();
    	
    	// Case: Paragraph layout.
    	if( get_row_layout() == 'contact' ):

			if( have_rows('header_phone') ):
                while( have_rows('header_phone') ) : the_row();                
                    $phone = get_sub_field('phone');
                    echo $phone;?> <br>      
                
                <?php endwhile;
            endif;                   
                
            if (have_rows('header_adr')) :
                while( have_rows('header_adr') ) : the_row();                
                    $adr = get_sub_field('adr');
                    echo $adr;?> <br>      
                
                <?php endwhile; 
            endif;
		
		// Case: Download layout.
        elseif( get_row_layout() == 'download' ): 
        	$file = get_sub_field('file');
        
    	// Do something...

endif;
endwhile;
    
    // End loop.

// No value.
else :
	// Do something...
endif; 


?>

<?php get_footer();  ?>
