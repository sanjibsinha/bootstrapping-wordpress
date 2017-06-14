<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laura Bootstrap Theme</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira+Sans|Roboto:300,400|Questrial|Satisfy">
     <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
<!--    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">-->
    
    <!-- =======================================================
        Theme Name: Laura
        Theme URL: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" onload="myFunction()">
  <div class="header">
      <div class="bg-color">
        <header id="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#lauraMenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Sanjib</a>
            </div>
            <div class="collapse navbar-collapse" id="lauraMenu">
              <ul class="nav navbar-nav navbar-right navbar-border">
                <li class="active"><a href="#main-header">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?>
              </ul>
            </div>
          </div>
        </nav>
        </header>
        <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-12 wow fadeIn delay-05s">
              <div class="banner-text">
                <h2>Hi, I am <span>Sanjib</span> Sinha,</h2>
                <p>An Author <br>An Ethical Hacker</p>
                <p>A Linux, Python <br>PHP & Wordpress Enthusiast</p>
              </div>
              <div class="overlay-detail text-center">
                  <a href="#about"><i class="fa fa-angle-down"></i></a>
              </div>
            </div>
          </div>
          </div>
        </div>
        </div>
      </div>
  <section id="about" class="section-padding wow fadeIn delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-right">
          <h2 class="title-text">
            Meet<br><span class="deco">Sanjib</span> Sinha
          </h2>
        </div>
        <div class="col-md-6 text-left">
          <div class="about-text">
            <p>Sanjib Sinha writes stories and code, not in the same order always..</p>
            <p>&nbsp;</p>
            <p>After winning Microsoft Community Contributor Award in 2011 he switched over to open source PHP, MySQL based LAMP technology and Python and since then he has been into Data Journalism and Ethical Hacking.</p>
            <p>&nbsp;</p>
            <ul class="abt-list">
              <li>- Scientific study of languages - human and machine - both, is his hobby..</li>
              <li>- All through his books he tries to help the beginners from their perspectives - as a beginner.</li>
              <li>- Let us see how the readers react!</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title text-center">Let's <span class="deco">See</span> My Work</h2>
        </div>
        <div class="col-md-12">
          <div id="myGrid" class="grid-padding">
          <div class="col-md-4 col-sm-4 padding-right-zero">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/portfolio01.jpg" class="img-responsive">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/port01.jpg" class="img-responsive">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/port02.jpg" class="img-responsive">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/portfolio01.jpg" class="img-responsive">
          </div>
          <div class="col-md-4 col-sm-4 padding-right-zero">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/portfolio02.jpg" class="img-responsive">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/port01.jpg" class="img-responsive">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/port02.jpg" class="img-responsive">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/portfolio01.jpg" class="img-responsive">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/port03.jpg" class="img-responsive">
          </div>
          <div class="col-md-4 col-sm-4 padding-right-zero">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/port01.jpg" class="img-responsive">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/portfolio01.jpg" class="img-responsive">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/portfolio02.jpg" class="img-responsive">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/port03.jpg" class="img-responsive">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/portfolio02.jpg" class="img-responsive">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/port02.jpg" class="img-responsive">
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  