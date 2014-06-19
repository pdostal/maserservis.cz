<?php
    register_sidebar(array(
        'name' => 'Panel', 'id' => 'sidebar',
        'before_widget' => '<section class="widget" id="%2$s">', 'after_widget' => '</section>',
        'before_title' => '<h1>', 'after_title' => '</h1>'
    ));

    add_theme_support( 'custom-header', array( 'width' => 400, 'height' => 200, 'uploads' => true ) );

?>
