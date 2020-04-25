<?php
/**
 * Template Name: AboutUs_gallery
 */

get_header(); ?>


<?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>

    <section class="section_single_page section_aboutUs_gallery">
        <div class="banner_img">
       
        </div>

<div class="container">

<div class="row">

 <div class="col-8-12 single_page_box">
     <div class="header_container">


        <?php if( get_field('name') ): ?>
 <header class="services_single_page section_header">
 <h3><?php the_field('name'); ?></h3>
        </header>
    <?php endif; ?>

</div>



    <?php if( get_field('description') ): ?>
 <div> <?php the_field('description'); ?> </div>
    <?php endif; ?>





<div class="gallery first_row">



 <a class="group" rel="group1" href="<?php echo get_template_directory_uri(); ?>/images/gallery1.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery1_small.jpg" alt="Wejście do kliniki"/></a>



 <a class="group" rel="group1" href="<?php echo get_template_directory_uri(); ?>/images/gallery2.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery2_small.jpg" alt="Recepcja"/></a>



 <a class="group" rel="group1" href="<?php echo get_template_directory_uri(); ?>/images/gallery3.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery3_small.jpg" alt="Poczekalnia"/></a>



 </div>


 <div class="gallery">



 <a class="group" rel="group1" href="<?php echo get_template_directory_uri(); ?>/images/gallery4.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery4_small.jpg" alt="Lekarze"/></a>



 <a class="group" rel="group1" href="<?php echo get_template_directory_uri(); ?>/images/gallery5.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery5_small.jpg" alt="Aparat rentgenowski"/></a>



 <a class="group" rel="group1" href="<?php echo get_template_directory_uri(); ?>/images/gallery6.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery6_small.jpg" alt="Pantomogram"/></a>



 </div>



 <div class="gallery">



 <a class="group" rel="group1" href="<?php echo get_template_directory_uri(); ?>/images/gallery7.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery7_small.jpg" alt="Unit stomatologiczny"/></a>



 <a class="group" rel="group1" href="<?php echo get_template_directory_uri(); ?>/images/gallery8.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery8_small.jpg" alt="Narzędzia stomatologiczne"/></a>



 <a class="group" rel="group1" href="<?php echo get_template_directory_uri(); ?>/images/gallery9.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery9_small.jpg" alt="Fotel dentystyczny"/></a>



 </div>

 <div class="gallery">



 <a class="group" rel="group1" href="<?php echo get_template_directory_uri(); ?>/images/gallery10.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery10_small.jpg" alt="Fotel dentystyczny"/></a>



 <a class="group" rel="group1" href="<?php echo get_template_directory_uri(); ?>/images/gallery11.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery11_small.jpg" alt="Fotel dentystyczny"/></a>



 <a class="group" rel="group1" href="<?php echo get_template_directory_uri(); ?>/images/gallery12.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery12_small.jpg" alt="Logo kliniki"/></a>



 </div>

 <div class="gallery last_row">



 <a class="group" rel="group1" href="<?php echo get_template_directory_uri(); ?>/images/gallery13.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery13_small.jpg" alt="Fotel dentystyczny"/></a>



 <a class="group" rel="group1" href="<?php echo get_template_directory_uri(); ?>/images/gallery14.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery14_small.jpg" alt="Fotel dentystyczny"/></a>



 <a class="group" rel="group1" href="<?php echo get_template_directory_uri(); ?>/images/gallery15.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery15_small.jpg" alt="Logo kliniki"/></a>



 </div>



</div>





                <div class="col-4-12">
                <?php get_sidebar(); ?>
                </div>
</div>
    </div>






</section>

</main>
    <?php endwhile; ?>
<?php endif; ?>



<?php get_footer(); ?>