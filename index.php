<?php
/*
*
Template Name:Homepage Template
*
*/
get_header(); ?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/buy-elec.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<!-- Contact Form JavaScript -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/buy-elec.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
</head>
<header>
  <nav class="navbar navbar-default navbar-expand-lg navbar-mainbg fixed-top"><img src="http://fastybuyer.sajangrover.com/wp-content/uploads/2021/03/logo-mobile.png" class="img-responsive mt-2" alt="logo"/><a class="navbar-brand navbar-logo" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars text-white"></i></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php wp_nav_menu(array('theme_location' => 'menu-1','container_class' => '','container' => '','menu_class' => '','items_wrap'=>'<ul class="navbar-nav ml-auto"><div class="hori-selector"><div class="left"></div><div class="right"></div></div>%3$s</ul>'));?>  
      <!--
      <ul class="navbar-nav ml-auto">
        <div class="hori-selector">
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <li class="nav-item"><a class="nav-link" href="buy-elec.html"><i class="fas fa-home"></i>Home</a></li>
        <li class="nav-item active"><a class="nav-link" href="javascript:void(0);"><i class="fas fa-address-card"></i>About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="products-page.html"><i class="fas fa-mobile-alt"></i>Sell Your Item</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact"><i class="fas fa-phone"></i>Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="faq.html"><i class="far fa-copy"></i>Faq and Help</a></li>
      </ul> -->
    </div>
  </nav>
</header>
<script>
            AOS.init();
          </script>
<?php wp_head(); ?>          
<body>
<div id="carouselExampleSlidesOnly " class="carousel slide" data-ride="carousel" data-interval="4000">
  <div class="carousel-inner jumbotron jumbotron-fluid">
  <?php $count=0;
if( have_rows('slider','option') ):
    while( have_rows('slider','option') ) : the_row();?>
  <div class="carousel-item <?php if ($count=="1") { echo "active"; } ?>">
  <img class="d-block w-100" src="<?php the_sub_field('slider_image','option');?>" alt="Third slide"> </div>
  <?php $count++; endwhile; else : endif;?>
  </div>
</div>
<div  class="service">
  <div class="container ">
    <div class="row">
      <div class="col-sm-12">
        <div class="main_service_area">
          <div class="main_service_content">
            <div class="service_tabe">
              <!-- Nav tabs -->
              <ul class="service_tabe_menu nav nav-tabs">
               <?php
if( have_rows('services_list') ):
    while( have_rows('services_list') ) : the_row();?>
                <li ><?php the_sub_field('icon');?> <br/>
                  <?php the_sub_field('title');?></li>
                 <?php  endwhile; else : endif;?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<section id="service">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title wow pulse" data-wow-delay=".5s">
          <h2 class="text-center"><?php the_field('steps_section_title');?></h2>
          <p class="text-center" > <?php the_field('steps_section_subtitle');?> </p>
        </div>
      </div>
    </div>
    <div class="row">
        <?php
if( have_rows('steps_list') ):
    while( have_rows('steps_list') ) : the_row();?>
      <div class="col-md-4 col-sm-4">
        <div class="block wow"  data-wow-delay=".7s"> <img src=" <?php the_sub_field('image');?>" alt="">
          <h3> <?php the_sub_field('title');?></h3>
          <p> <?php the_sub_field('content');?></p>
        </div>
      </div>
        <?php  endwhile; else : endif;?>
    </div>
  </div>
</section>
<div class="container">
  <div class="row">
    <div class="col-md-12 col-md-offset-12 text-center mb-5">
      <div class="button" id="button-3">
        <div id="circle"></div>
        <a href="<?php the_field('sell_button_link');?>"><?php the_field('sell_button_text');?></a> </div>
    </div>
  </div>
</div>
</div>
</div>
  <div class="para container-fluid" style="background-image: url(<?php the_field('parallax_fullwidth_image');?>);">
    <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-dark overflow-hidden">
      <div class="h3 text-white"><span class="h1" data-aos="zoom-in-down"></span></div>
    </div>
  </div>
<section class="main-section" id="service">
  <!--main-section-start-->
  <div class="container">
    <h2 class="text-center pb-8"><?php the_field('accept_section_title');?></h2>
    <div class="row">
      <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
        <div class="service-list">
          <div class="service-list-col1"> <i class="far fa-check-square"></i> </div>
          <div class="service-list-col2">
            <h3>Used Electronics</h3>
            <p>We accept most used or broken electronics get a qoute today </p>
          </div>
        </div>
         <?php
if( have_rows('list_of_goods') ):
    while( have_rows('list_of_goods') ) : the_row();?>
        <div class="service-list">
          <div class="service-list-col1"> <i class="far fa-check-square"></i> </div>
          <div class="service-list-col2">
            <h3><?php the_sub_field('title');?></h3>
            <p><?php the_sub_field('content');?></p>
          </div>
        </div>
         <?php  endwhile; else : endif;?>
      </div>
      <figure class="col-lg-8 col-sm-6 text-right" data-aos="fade-left"> <img  src="<?php the_field('accept_feature_image');?>" class="img-fluid"  alt=""> </figure>
    </div>
  </div>
</section>
<!--main-section-end-->
<section class="main-section alabaster">
  <!--main-section alabaster-start-->
  <div class="container">
    <div class="row">
      <figure class="pic2 col-lg-5 col-sm-4 wow" data-aos="fade-right"
            data-aos-offset="300"
            data-aos-easing="ease-in-sine"> <img  src="<?php the_field('offer_section_feature_image');?>" class="img-fluid" alt=""> </figure>
      <div class="col-lg-7 col-sm-8 featured-work">
        <h2><?php the_field('offer_section_title');?></h2>
        <?php
if( have_rows('offer_list') ):
    while( have_rows('offer_list') ) : the_row();?>
        <div class="featured-box">
          <div class="featured-box-col1 wow fadeInRight delay-04s"> <i class="far fa-check-square"></i> </div>
          <div class="featured-box-col2 wow fadeInRight delay-04s">
             <h3><?php the_sub_field('title');?></h3>
            <p><?php the_sub_field('content');?></p>
          </div>
        </div>
         <?php  endwhile; else : endif;?>
        <a class="Learn-More" href="#">Learn More</a> </div>
    </div>
  </div>
</section>
<!--main-section alabaster-end-->
<section id="sell1">
  <div class="pack-section">
    <ul class="pack-grig">
    <?php
if( have_rows('package_list') ):
    while( have_rows('package_list') ) : the_row();?>
      <li>
        <div class="pack-box pack-img-100" style="background: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.10)), url(<?php the_sub_field('image');?>); background-size: cover !important;">
          <div class="pack-info">
            <h3></h3>
            <p></p>
            <button>
            <a class="text-white" href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a>
            </button>
          </div>
        </div>
      </li>
       <?php  endwhile; else : endif;?>
    </ul>
  </div>
</section>
<!--Call to  action section-->
<section id="action">
  <div class="container">
    <div class="row">
      <div class="maine_action mx-auto mt-5">
        <div class="col-md-12">
          <div class="action_item text-center"> <img src="<?php the_field('package_feature_image');?>" class="img-fluid" alt="Responsive image">
            <!-- Modal Content: ends -->
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</section>
<div class="container">
  <h2>Our Partners</h2>
  <section class="customer-logos slider">
   <?php
if( have_rows('partner_slider') ):
    while( have_rows('partner_slider') ) : the_row();?>
    <div class="slide"><a href="<?php the_sub_field('link');?>"><img src="<?php the_sub_field('image');?>"></a></div>
       <?php  endwhile; else : endif;?>
  </section>
</div>
<footer class="mainfooter" role="contentinfo">
  <div class="footer-middle">
    <div class="container">
      <div class="row">
        <?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('First Footer Widget') ) :  endif; ?>
        <?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Second Footer Widget') ) :  endif; ?>
        <?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Third Footer Widget') ) :  endif; ?>
        <?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Fourth Footer Widget') ) :  endif; ?>
      </div>
      <div class="row">
        <div class="col-md-12 copy">
          <p class="text-center">&copy; Copyright 2018 - Company Name.  All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php get_footer(); ?>
<?php wp_footer(); ?>