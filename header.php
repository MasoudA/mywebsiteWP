<!doctype html>
<html lan="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A software geek personal website">
    <meta name="author" content="Masoud Ahmadi">

    <title>Masoud's</title>

    
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <!-- Bootstrap Core CSS -->

    <!-- <link rel="stylesheet" href="css/creative.css" type="text/css"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body>
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
            </div>

            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php //wp_list_pages(array('title_li' => '')); 
                          //wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
                    ?>
                    <?php if (is_page( 'Home' )) : ?>
                        <li>
                            <a class="page-scroll" href="#about">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#profile">Profile</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a class="page-scroll" href="<?php echo site_url(); ?>#about">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="<?php echo site_url(); ?>#profile">Profile</a>
                        </li>
                    <?php endif; ?>
                    <li>
                        <a class="page-scroll" href="<?php echo site_url(); ?>/index.php/blog">Blog</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo site_url(); ?>/index.php/gallery">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo site_url(); ?>/index.php/contact">Contact</a>
                    </li>
                </ul>
            </div>
            
        </div>
        <!-- /.container-fluid -->
    </nav>
