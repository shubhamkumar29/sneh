<?php
/*
Plugin Name: Better User Shortcodes
Plugin URI: http://hccoder.info/
Description: Set up your custom registration form, add shortcodes into your posts, pages or sidebars and forget wp-login.php.
Author: hccoder - Sándor Fodor
Version: 1.0
Author URI: http://hccoder.info/
*/

require ABSPATH.'wp-content/plugins/better-user-shortcodes/classes/config.php';
require ABSPATH.'wp-content/plugins/better-user-shortcodes/classes/shortcode.php';
require ABSPATH.'wp-content/plugins/better-user-shortcodes/classes/bsu-admin.php';

/* Set base configuration */
$config = HCCoder_BUSConfig::getInstance();

/* Check default variables on startup */
HCCoder_BSUAdmin::checkVariables();

$config->addItem('plugin_id', 'better-user-shortcodes');
$config->addItem('plugin_login_id', 'better-user-shortcodes-login');
$config->addItem('plugin_logout_id', 'better-user-shortcodes-logout');
$config->addItem('plugin_registration_id', 'better-user-shortcodes-registration');
$config->addItem('plugin_password_reminder_id', 'better-user-shortcodes-password-reminder');
$config->addItem('plugin_help_id', 'better-user-shortcodes-help');

$config->addItem('plugin_path', plugin_dir_path(__FILE__));
$config->addItem('views_path', $config->getItem('plugin_path').'views/');

$config->addItem('plugin_url', home_url('/wp-admin/admin.php?page='.$config->getItem('plugin_id')));
$config->addItem('plugin_login_url', home_url('/wp-admin/admin.php?page='.$config->getItem('plugin_login_id')));
$config->addItem('plugin_logout_url', home_url('/wp-admin/admin.php?page='.$config->getItem('plugin_logout_id')));
$config->addItem('plugin_registration_url', home_url('/wp-admin/admin.php?page='.$config->getItem('plugin_registration_id')));
$config->addItem('plugin_password_reminder_url', home_url('/wp-admin/admin.php?page='.$config->getItem('plugin_password_reminder_id')));
$config->addItem('plugin_help_url', home_url('/wp-admin/admin.php?page='.$config->getItem('plugin_help_id')));

$config->addItem('plugin_handler_url', home_url('/wp-content/plugins/better-user-shortcodes/handler.php'));

$config->addItem('plugin_name', 'Better User Shortcodes');

/**
 * Create admin menus
 */
function better_user_shortcodes_admin_menu() {
  $config = HCCoder_BUSConfig::getInstance();
  
  add_menu_page($config->getItem('plugin_name'), $config->getItem('plugin_name'), 'level_10', $config->getItem('plugin_id'), array('HCCoder_BSUAdmin', 'adminIndex'), home_url('/wp-content/plugins/'.$config->getItem('plugin_id').'/static/images/icon.png'));
  add_submenu_page($config->getItem('plugin_id'), 'Login', 'Login', 'level_10', $config->getItem('plugin_login_id'), array('HCCoder_BSUAdmin', 'adminLogin'));
  add_submenu_page($config->getItem('plugin_id'), 'Logout', 'Logout', 'level_10', $config->getItem('plugin_logout_id'), array('HCCoder_BSUAdmin', 'adminLogout'));
  add_submenu_page($config->getItem('plugin_id'), 'Registration', 'Registration', 'level_10', $config->getItem('plugin_registration_id'), array('HCCoder_BSUAdmin', 'adminRegistration'));
  add_submenu_page($config->getItem('plugin_id'), 'Password reminder', 'Password reminder', 'level_10', $config->getItem('plugin_password_reminder_id'), array('HCCoder_BSUAdmin', 'adminPasswordReminder'));
  add_submenu_page($config->getItem('plugin_id'), 'Help', 'Help', 'level_10', $config->getItem('plugin_help_id'), array('HCCoder_BSUAdmin', 'adminHelp'));
}
add_action('admin_menu', 'better_user_shortcodes_admin_menu');

/**
 * Create shortcode for login
 */
add_shortcode('bus_login', array('HCCoder_BSUShortcode', 'frontendLogin'));

/**
 * Create shortcode for logout
 */
add_shortcode('bus_logout', array('HCCoder_BSUShortcode', 'frontendLogout'));

/**
 * Create shortcode for registration
 */
add_shortcode('bus_registration', array('HCCoder_BSUShortcode', 'frontendRegistration'));

/**
 * Create shortcode for password reminder
 */
add_shortcode('bus_password_reminder', array('HCCoder_BSUShortcode', 'frontendPasswordReminder'));