<?php
/*
Plugin Name: Simple Site Info
Description: Displays the site name and URL in the footer.
Version: 1.0
Author: Your Name
*/

function display_site_info_footer() {
    echo '<p style="text-align:center; font-size:14px;">Powered by <strong>' . get_bloginfo('name') . '</strong> - <a href="' . home_url() . '">' . home_url() . '</a></p>';
}
add_action('wp_footer', 'display_site_info_footer');
