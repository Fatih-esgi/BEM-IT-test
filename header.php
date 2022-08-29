<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Our vision is to provide convenience and help increase your sales business.">
    <title>Morent, car location</title>
</head>

<body <?php body_class();?>>
    <?php wp_body_open(); ?>
    <header class="c_header">
        <div class="c_brand">
            <?php   
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                
                if ( has_custom_logo() ) {
                    echo '<a class="c_brand__link--isLogo" href="/"><img class="c_brand__logo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
                } else {
                    echo '<a class="c_brand__link--isTxt" href="/"><h1>' . get_bloginfo('name') . '</h1></a>';
                }
                ?>
        </div>
        <div class="c_search">
            <?php get_search_form(); ?>
        </div>
        <?php
wp_nav_menu( array( 
    'theme_location' => 'header_menu', 
    'container'       => 'nav',
    'container_class' => 'mainMenu' ) ); 
    ?>

    </header>
    <div class="wrapper">