<?php
/*
*
Template Name:Sell Item Template
*
*/
get_header(); ?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/buy-elec.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<!-- Contact Form JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/buy-elec.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
<?php wp_head(); ?> 
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
<div class="pack-section">
  <ul class="pack-grig">
  <?php
if( have_rows('products_list') ):
    while( have_rows('products_list') ) : the_row();?>
    <li>
      <div class="pack-box pack-img-1" style="background: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.10)), url(<?php the_sub_field('image');?>); background-size: cover !important;">
        <div class="pack-info">
          <h3><?php the_sub_field('title');?></h3>
          <p></p>
          <button>
          <a class="text-white" href="<?php the_sub_field('button_link');?>"><?php the_sub_field('button_text');?></a>
          </button>
        </div>
      </div>
    </li>
    <?php  endwhile; else : endif;?>
  </ul>
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