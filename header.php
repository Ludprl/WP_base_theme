<!DOCTYPE html>
<html lang="fr">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Super site avec Montheme" />
    <meta property="og:description" content="Description du site web" />
    <meta property="og:image" content="src/imgs/montheme.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="214" />
    <meta property="og:image:height" content="40" />
    <meta property="og:image:alt" content="Description de l'image" />
    <meta property="og:url" content="http://www.montheme.com" />
    <?php wp_head() ?>
</head>

<body>
    <div class="page">

        <header>
            <!--[if lt IE 7]>
                <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            <div class="header__left">
                <div class="header__left__logo">
                    <?php 
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if ( has_custom_logo() ) {
                echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                } else {
                echo '<h1>' . get_bloginfo('name') . '</h1>';
                } 
                ?>
                </div>
                <nav class="navbar navbar-expand-lg bg-light">
                    <?php wp_nav_menu([
                            'theme_location' => 'header',
                            'container' => false,
                            'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0'
                            ]);
                        ?>
                </nav>
            </div>
            <div>
                rechercher
            </div>
        </header>


        <main class="container">