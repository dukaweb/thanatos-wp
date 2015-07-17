<!-- <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
<title><?php echo get_bloginfo('name') ?> | <?php echo get_bloginfo ( 'description' );  ?> </title>

<link rel="author" href="https://plus.google.com/+C%E1%BA%A3nhTr%E1%BA%A7nDuy">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />

</head> -->


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" id="rapid-icons-css" href="http://wpthemes.iweb-studio.com/james/wp-content/themes/james/css/rapid-icons.css?ver=4.2.2" type="text/css" media="all">

    <title>Duka Thanatos</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header-panel">

        <div class="navbar navbar-warning navbar-fixed-top">
            <div class="container-fluid navbar-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-warning-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="javascript:void(0)">Duka { Web }</a>
                </div>
                <div class="navbar-collapse collapse navbar-warning-collapse">
                    <?php wp_nav_menu( array(
                      'theme_location' => 'header-menu',
                      'container' => 'none',
                      'menu_class' => 'nav navbar-nav'
                    ) ); ?>
                </div>
            </div>
        </div>
    </header>
