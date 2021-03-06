<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body class="body">

    <?php 

if ( wp_is_mobile() ) {
    get_template_part("template-parts/mobile/header");
} else {
    get_template_part("template-parts/desktop/header");
}

?>