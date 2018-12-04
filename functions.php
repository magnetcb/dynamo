<?php

// Social links
function custom_settings_add_menu() {
  add_menu_page( 'Social Links', 'Social Links', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
    <div class="wrap">
        <h1>Social Links</h1>
        <form method="post" action="options.php">
            <?php
                settings_fields( 'section' );
                do_settings_sections( 'theme-options' );      
                submit_button(); 
            ?>          
        </form>
    </div>
<?php }

// Facebook
function setting_facebook() { ?>
    <input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
<?php }

// Linkedin
function setting_linkedin() { ?>
    <input type="text" name="linkedin" id="linkedin" value="<?php echo get_option( 'linkedin' ); ?>" />
<?php }

function custom_settings_page_setup() {
    add_settings_section( 'section', null, null, 'theme-options' );

    add_settings_field( 'facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section' );
    add_settings_field( 'linkedin', 'Linkedin URL', 'setting_linkedin', 'theme-options', 'section' );

    register_setting('section', 'facebook');
    register_setting('section', 'linkedin');
}
add_action( 'admin_init', 'custom_settings_page_setup' );