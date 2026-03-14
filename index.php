<?php
/*
 * This Template is for displaying the header and main content.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- <div class="container mt-5">
        <h1>Hello Amit! Theme is working perfectly now. custom css is working</h1>
        <h1 class="text-danger">Bootstrap Working</h1>
        <button class="btn btn-primary">Click Me</button>
    </div> -->

    <div id="header_area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- <a href=""> -->
                    <!-- static logo calling -->
                    <!-- <img src=" <?php //echo get_template_directory_uri(); ?> /img/logo1.png" alt="Logo"> -->
                    <!-- <img src="<?php //echo get_theme_mod('amit_logo'); ?>" alt="Logo"> -->
                    <!-- </a> -->

                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_theme_mod('amit_logo', get_template_directory_uri() . '/img/logo1.png'); ?>"
                            alt="Logo" class="custom-logo">
                    </a>

                </div>
                <div class="col-md-9">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main_menu',
                        'menu_id' => 'nav',
                        'menu_class' => 'main-menu',
                        'container' => false,
                    ));
                    ?>
                    <!-- <ul id="nav">
                        <li><a href="">Home</a></li>
                        <li><a href="">About us</a></li>
                        <li><a href="">Download</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Services</a>
                            <ul>
                                <li><a href="">Service 1</a></li>
                                <li><a href="">Service 2</a></li>
                                <li><a href="">Service 3</a></li>
                                <li><a href="">Service 4</a></li>
                            </ul>
                        </li>
                        <li><a href="">Login</a></li>
                        <li><a href="">Register</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>

    <?php wp_footer(); ?>
</body>

</html>