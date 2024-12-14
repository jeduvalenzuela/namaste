<?php 
/*
Template Name: Contacto
*/

get_header(); ?>

<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="<?php echo get_stylesheet_directory_uri();?>/assets/img/bg/breadcumb-bg-contacto.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title" style="color: darkcyan">Contactanos</h1>
            </div>
        </div>
    </div><!--==============================
Contact Area  
==============================-->
    <div class="space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Contactanos</span>
                <h2 class="sec-title">Estamos a tu disposición</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid style2">
                        <div class="about-contact-icon">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/location-dot2.svg" alt="">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="box-title">Nos encontramos en</h6>
                            <p class="about-contact-details-text"><strong>La Plata</strong> - Prov. de Buenos Aires</p>
                            <p class="about-contact-details-text">Argentina</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid">
                        <div class="about-contact-icon">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/call.svg" alt="">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="box-title">Nuestras lineas</h6>
                            <p class="about-contact-details-text"><a href="tel:+5492216824848">+54 9 221 682 4848</a></p>
                            <!--p class="about-contact-details-text"><a href="tel:01234567890">+54 9 221 4567 8901</a></p-->
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid">
                        <div class="about-contact-icon">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/mail.svg" alt="">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="box-title">Email Address</h6>
                            <p class="about-contact-details-text"><a href="mailto:mailinfo00@tourm.com">info@namaste.tur.ar</a></p>
                            <p class="about-contact-details-text"><a href="mailto:support24@tourm.com">ventas@namaste.tur.ar</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Video Area  
==============================-->
    <div class="space-extra2-top space-extra2-bottom" data-bg-src="<?php echo get_stylesheet_directory_uri();?>/assets/img/bg/video_bg_1.jpg">
        <div class="container">
            <div class="row flex-row-reverse justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="video-box1">
                        <a href="https://www.youtube.com/watch?v=cQfIUPw72Dk" class="play-btn style2 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div>
                        <form action="mail.php" method="POST" class="contact-form style2 ajax-contact">
                            <h3 class="sec-title mb-30 text-capitalize">Envianos tus inquietudes</h3>
                            <div class="row">
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control" name="name" id="name3" placeholder="Nombre completo">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/user.svg" alt="">
                                </div>
                                <div class="col-12 form-group">
                                    <input type="email" class="form-control" name="email3" id="email3" placeholder="Tu Mail">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/mail.svg" alt="">
                                </div>
                                <div class="form-group col-12">
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Dejanos tu consulta"></textarea>
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/chat.svg" alt="">
                                </div>
                                <div class="form-btn col-12 mt-24"><button type="submit" class="th-btn style3">Enviar mensaje
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/plane.svg" alt=""></button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Map Area  
==============================-->
    <div class="">
        <div class="container-fluid">
            <div class="contact-map style2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52343.08435776054!2d-57.994369756729434!3d-34.9204308694999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a2e62b1f0085a1%3A0xbcfc44f0547312e3!2sLa%20Plata%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1732020145199!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="contact-icon">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icon/location-dot3.svg" alt="">
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>