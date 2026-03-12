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

    <div class="container mt-5">
        <h1 class="text-danger">Bootstrap Working</h1>
        <button class="btn btn-primary">Click Me</button>
    </div>

    <?php wp_footer(); ?>
</body>

</html>