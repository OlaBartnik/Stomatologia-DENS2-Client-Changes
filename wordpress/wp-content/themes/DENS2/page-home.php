<?php
/**
 * Template Name: Home
 */

get_header('home');

 ?>




<?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>

<section id="services" class="section_sevices">
    <div class="container">
                 <div class="row">
                <div class="col-12-12 header_container_main">
            <header class="section_header">
                <h2>Nasze usługi</h2>
            </header>
                </div>
                </div>

            <div class="row">
                <div class="col-4-12">
                    <div class="box">
                        <a href="http://localhost/stomatologia-zachowacza" class="box_photo">
                            <div class="box_photo_container"><img src="<?php echo get_template_directory_uri(); ?>/images/Stomatologia.jpg" alt="Stomatologia Zachowawcza">
                            </div>

                            <h3 class="box_tittle">Stomatologia Zachowawcza</h3>
                        </a>

                    </div>
                </div>
   <div class="col-4-12">
                    <div class="box">
                        <a href="http://localhost/endodoncja" class="box_photo">
                            <div class="box_photo_container">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/Endodoncja.jpg" alt="Endodoncja">
                            </div>
                            <h3 class=" box_tittle">Endodoncja</h3>
                        </a>
                    </div>
                </div>
                <div class="col-4-12">
                    <div class="box">
                        <a href="http://localhost/ortodoncja" class="box_photo">
                            <div class="box_photo_container">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/Ortodoncja.jpg" alt="Ortodoncja">
                            </div>
                            <h3 class="box_tittle">Ortodoncja</h3>
                        </a>
                    </div>
                </div>

             


            </div>


            <div class="row">

    <div class="col-4-12">
                    <div class="box">
                        <a href="http://localhost/chirurgia_implantologia" class="box_photo">
                            <div class="box_photo_container">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/Implanty.jpg" alt="Chirurgia Stomatologiczna Implantologia">
                            </div>
                            <h3 class=" box_tittle">Chirurgia Stomatologiczna Implantologia</h3>
                        </a>
                    </div>
                </div>


                <div class="col-4-12">
                    <div class="box">
                        <a href="http://localhost/protetyka" class="box_photo">
                            <div class="box_photo_container">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/Protetyka.jpg" alt="Protetyka">
                            </div>
                            <h3 class="box_tittle">Protetyka</h3>
                        </a>
                    </div>
                </div>

                <div class="col-4-12">
                    <div class="box">
                        <a href="http://localhost/zdjecia_rtg" class="box_photo">
                            <div class="box_photo_container">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/RTG.jpg" alt="Zdjęcia RTG">
                            </div>
                            <h3 class="box_tittle">Zdjęcia RTG</h3>
                        </a>
                    </div>
                </div>

            


            </div>


            <div class="row">
                <div class="col-4-12">
                    <div class="box">
                        <a href="http://localhost/profilaktyka" class="box_photo">
                            <div class="box_photo_container">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/Profilaktyka.jpg" alt="Profilaktyka">
                            </div>
                            <h3 class="box_tittle">Profilaktyka</h3>
                        </a>
                    </div>
                </div>

                <div class="col-4-12">
                    <div class="box">
                        <a href="http://localhost/wybielanie" class="box_photo">
                            <div class="box_photo_container">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/Wybielanie.jpg" alt="Wybielanie">
                            </div>
                            <h3 class="box_tittle">Wybielanie</h3>
                        </a>
                    </div>
                </div>

                <div class="col-4-12">
                    <div class="box">
                        <a href="http://localhost/nfz/" class="box_photo">
                            <div class="box_photo_container">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/NFZ.jpg" alt="Narodowy Fundusz Zdrowia">
                            </div>
                            <h3 class=" box_tittle">Narodowy Fundusz Zdrowia</h3>
                        </a>
                    </div>
                </div>




            </div>
        </div>
</section>


<section id="aboutUs" class="section_aboutUs">

<div class="container">
            <div class="row">


                <div class="col-12-12 header_container_main">
                     <header class="section_header">
                        <h2>Nasza Klinika</h2>
                    </header>
                </div>
            </div>



            <div class="row">
                <div class="col-4-12">
                    <div class="aboutUs box">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/wizytowka.jpg" alt="Dens2 Klinika" class="section_aboutUS_photo"></div>
                </div>

                <div class="col-8-12 section_aboutUs_article">
                        <div class="section_aboutUs_text">
                            <p>W trosce o satysfakcję i komfort naszych pacjentów oferujemy pełen zakres zabiegów stomatologicznych. Zaczynając od stomatologii zachowawczej, stomatologii estetycznej, poprzez, endodoncję implantologię, protetykę, ortodoncję nie zapominając o stomatologii dziecięcej.</p>
                            <p>Dysponujemy nowocześnie wyposażonymi gabinetami oraz wykwalifikowanym personelem  </p>
                            <p>Świadczymy usługi z zakresu stomatologi zachowawczej, stomatologi dziecięcej, endodoncji, chirurgi, protetyki i ortodoncji.</p>
                        </div>


                    <div class="aboutUs_button_container">
                        <a href="http://localhost/klinika/" class="button">Więcej</a>
                    </div>
                </div>

        </div>
</div>

</section>


<section id="contact" class="section_contact">
<div class="container" >
        <div class="row">
                <div class="col-12-12 header_container_main">
            <header class="section_header">
                <h2>Kontakt</h2>
            </header>
            </div>
        </div>

            <div class="contact_form">
          <?php the_content();?>
            </div>

    <div class="contact_adress">

            <div class="row">



                <div class="col-4-12 address_container">
                    <div class="image_box">
<img src="<?php echo get_template_directory_uri(); ?>/images/address.svg" alt="Adres" class="contact_address address">
 <!-- Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> -->
</div>



                    <div class="address_box">
                    <p class="address_address"><strong>DENS 2</strong><br>
                    ul. Jaktorowska 8 U7<br>
                    01-202 Warszawa <br>
                    <strong>Wejście od ul. Karolkowej</strong>

                    </div>


        </div>

        <div class="col-4-12 phone_container">
        <div class="image_box">
<img src="<?php echo get_template_directory_uri(); ?>/images/calendar.svg" alt="zapisy" class="contact_address calendar">
 <!-- Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> -->
</div>

<div class="phone_box">
            <div class="address_phone">
                <a href="tel: 22 632 99 11">Tel. (22) 632 99 11</a> <br>
                <a href="tel: 664 474 996">Tel. 664 474 996 </a>
            </div>


            <p class="address_hours"><strong>Godziny otwarcia:</strong><br>pon. – piąt.:  09:00 – 20:00
        </p>


</div>



</div>

        <div class="col-4-12 contact_container">


            <div class="mail_box">
                <a href="mailto:ortodoncja.budel@gmail.com" class="mail_link" target ="_blank">
             <img src="<?php echo get_template_directory_uri(); ?>/images/envelope.svg" alt="mail" class="contact_address mail">ortodoncja.budel@gmail.com</a>
              <!-- Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> -->
            </div>


            <div class="fb_box">
             <a href="https://www.facebook.com/Dens2-Prywatna-Przychodnia-Dentystyczno-Lekarska-842138229254599/" class="fb_link" target ="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/facebook_logo.svg" alt="Facebook" class="contact_address fb">Stomatologia DENS2</a>
             <!-- Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> -->
            </div>


            <div class="job_box">
            <a href="http://localhost/oferty-pracy/" class="job_link">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hiring.svg" alt="ofety pracy" class="contact_address job">Oferty pracy</a>
             <!-- Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> -->
            </div>


        </div>


</div>
</div>


</section>

    <div id='map' class="map" style='width: 100%; height: 400px;'></div>



</main>
    <?php endwhile; ?>
<?php endif; ?>



<?php get_footer(); ?>
