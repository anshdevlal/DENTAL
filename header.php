<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Header Section -->
    <header class="header">
        <div class="container header-container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                <i class="fa-solid fa-tooth text-primary"></i> BrightSmile
            </a>
            <nav class="navbar">
                <ul class="nav-list">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#home">Home</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#about">About</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#services">Services</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#dentist">Dentist</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#testimonials">Reviews</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">Contact</a></li>
                </ul>
            </nav>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>#appointment" class="btn btn-primary d-none-mobile">Book Appointment</a>
            <button class="mobile-toggle" aria-label="Toggle Navigation"><i class="fa-solid fa-bars"></i></button>
        </div>
    </header>
