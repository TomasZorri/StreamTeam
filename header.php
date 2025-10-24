<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css?id=1.02">


    <!-- Agrega jQuery y Slick.js -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	
    <?php wp_head(); ?>
</head>
<body>

<?php
if (post_password_required()) {
    // Si la página tiene contraseña y no se ha ingresado, muestra el formulario de contraseña
    echo get_the_password_form();
    exit;
}
?>



<header id="header">
    <div class="container">
        <?php if (is_active_sidebar('header-widget')) : ?>
            <?php dynamic_sidebar('header-widget'); ?>
        <?php else : ?>
            <h1 class="site-title"><?php bloginfo('name'); ?></h1>
        <?php endif; ?>
    </div>
</header>

