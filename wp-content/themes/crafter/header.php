<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Crafter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- WP_Head -->
<?php wp_head(); ?>
<!-- End WP_Head -->

<!-- GA -->
<script>
     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
     ga('create', 'UA-92168848-1', 'auto', {allowLinker: true});
     ga('require', 'linker');
     ga('linker:autoLink', ['triggers.com.br', 'inscrevase.triggers.com.br']);
     ga('send', 'pageview');
</script>
<!-- [end] GA -->

</head>

<body <?php body_class(); ?>>
    <?php
    $header_image = "";
    if ( get_header_image() ){
        $header_image = 'style="background-image: url(' . get_header_image() . ');"';
    }
    ?>

    <?php
    if ( is_front_page() ) {
        get_template_part('menu-home');
    }else {
        get_template_part('menu-pages');
    }
    ?>

  <header id="header" class="site-header" role="banner" <?php echo $header_image; ?>>
        <div class="container">
          <div class="row">
            <div class="logo_container col-md-2 col-sm-2 col-xs-5">
                    <?php
                    if (is_front_page()){
                      $logo = '<a href="' . esc_url( home_url( '/' ) ) . '"><img style="margin-left: 10px; width: 120px; margin-top: 12px;" src="http://www.triggers.com.br/wp-content/uploads/2017/02/logo-triggers-2.png" alt="" /></a>';
                      //$logo = '<a href="' . esc_url( home_url( '/' ) ) . '"><span class="betriggers">#BeTriggers</span></a>';//<img style="width: 245px;" src="/wp-content/uploads/2017/02/logo-triggers-6.png" alt="" />
                    }else{
                      $logo = '<a href="' . esc_url( home_url( '/' ) ) . '"><img style="margin-left: 10px; width: 120px; margin-top: 12px;" src="http://www.triggers.com.br/wp-content/uploads/2017/02/logo-triggers-2.png" alt="" /></a>';
                    }
                    if ( has_custom_logo() ) {
                        $logo = get_custom_logo();
                    }
                    ?>
                    <?php if ( is_front_page() && is_home() ) : ?>
          						<h1 class="site-title"><?php echo $logo; ?></h1>
          					<?php else : ?>
          						<p class="site-title"><?php echo $logo; ?></p>
          					<?php endif; ?>
                </div><!-- /logo_container -->
                <?php
                if( is_front_page() ){
                  $mobilemenu = "hide";
                }else{
                  $mobilemenu = "";
                }
                ?>
                <!-- <button id="ql_nav_btn" type="button" class="navbar-toggle collapsed <?php //echo $mobilemenu; ?>" data-toggle="collapse" data-target="#ql_nav_collapse" aria-expanded="false">
                    <i class="fa fa-navicon"></i>
                </button> -->

                <?php
                if( is_front_page() ){
                  $hamburguer = "";
                }else{
                  $hamburguer = "hide";
                }
                ?>
                <?php if ( is_front_page() ) :?>
                  <div class="col-md-8 col-sm-8 col-xs-5 text-center">
                    <p class="head-text hidden-xs">Desafio de educação e aceleração de startups</p>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="pull-right <?php echo $hamburguer; ?>">
                      <button id="open-full-menu" class="hamburger hamburger--slider" type="button">
                        <span class="hamburger-box">
                          <span class="hamburger-inner"></span>
                        </span>
                      </button>
                    </div>
                    <?php
                    //if ( !is_front_page() ) {
                    //    get_template_part('menu-pages');
                    //}
                    ?>
                  </div><!-- /col-md-7 -->

                  <div class="clearfix"></div>
                  <div class="col-xs-12 text-center hidden-lg hidden-sm hidden-md">
                    <p class="head-text-mobile">Desafio de educação e pré-aceleração de startups</p>
                  </div>
                <?php else : ?>
                  <div class="col-md-10 col-sm-10 col-xs-2 pull-right">
                    <div class="pull-right">
                      <button id="open-full-menu" class="hamburger hamburger--slider" type="button">
                        <span class="hamburger-box">
                          <span class="hamburger-inner"></span>
                        </span>
                      </button>
                    </div>
                    <?php

                    ///if ( !is_front_page() ) {
                    //    get_template_part('menu-pages');
                    //}
                    ?>
                  </div><!-- /col-md-7 -->

                  <div class="clearfix"></div>
                <?php endif ?>


                <?php
                  if(!is_front_page()){
                    echo '<div class="green-line"></div>';
                  }
                ?>

        	</div><!-- row-->
        </div>
	</header>
	<div class="clearfix"></div>

    <?php if ( get_option( 'show_on_front' ) == 'posts' || !is_front_page() ) : ?>
    <div id="container" class="container">
        <div class="row">
    <?php endif; ?>
