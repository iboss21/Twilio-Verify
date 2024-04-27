<?php
/*
Plugin Name: Twilio Verify Plugin
Description: Plugin to configure Twilio SID and authentication token for Twilio Verify service.
Version: 1.0
Author: Your Name
*/

// Include Twilio PHP SDK
require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';

use Twilio\Rest\Client;

// Add admin menu item
function twilio_verify_plugin_menu() {
    add_menu_page(
        'Twilio Verify Plugin Settings',
        'Twilio Verify',
        'manage_options',
        'twilio_verify_settings',
        'twilio_verify_settings_page',
        'dashicons-admin-generic',
        80
    );
}
add_action('admin_menu', 'twilio_verify_plugin_menu');

// Settings page callback
function twilio_verify_settings_page() {
    // Load the HTML content from admin-page.php
    include(plugin_dir_path(__FILE__) . 'admin-page.php');
}

// Handle form submission
if (isset($_POST['submit'])) {
    $sid = $_POST['twilio_sid'];
    $auth_token = $_POST['twilio_auth_token'];

    // Save Twilio credentials to options table
    update_option('twilio_sid', $sid);
    update_option('twilio_auth_token', $auth_token);
}
