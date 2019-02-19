<?php
declare(strict_types=1);

require get_template_directory().'/post-types/student.php';
require get_template_directory().'/taxonomies/skill.php';

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
});

// Hide admin bar on the front end
add_filter('show_admin_bar', '__return_false');
