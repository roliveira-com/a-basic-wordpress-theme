<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <?php wp_head(); ?>
        <title><?php getCustomTitle(); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/normalize.min.css">
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">

        <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>

        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title">h1.title</h1>
                <nav>
                    <?php 
                    	$args = array(
                    		'theme_location' => 'header-menu'
                    	);
                    	wp_nav_menu( $args );
                     ?>
                </nav>
            </header>
        </div>
