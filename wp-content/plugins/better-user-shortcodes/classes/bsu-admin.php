<?php
/**
 * Our main class
 */
if ( ! class_exists('HCCoder_BSUAdmin') ) {
  class HCCoder_BSUAdmin {
  
    /**
     * Admin interface > overview
     */
    public function adminIndex() {
      $config = HCCoder_BUSConfig::getInstance();
      require $config->getItem('views_path').'adminindex.php';
    }
    
    /**
     * Admin interface > login management
     */
    public function adminLogin() {
      $config = HCCoder_BUSConfig::getInstance();
      require $config->getItem('views_path').'adminlogin.php';
    }
    
    /**
     * Admin interface > logout management
     */
    public function adminLogout() {
      $config = HCCoder_BUSConfig::getInstance();
      require $config->getItem('views_path').'adminlogout.php';
    }
    
    /**
     * Admin interface > registration management
     */
    public function adminRegistration() {
      $config = HCCoder_BUSConfig::getInstance();
      require $config->getItem('views_path').'adminregistration.php';
    }
    
    /**
     * Admin interface > password reminder management
     */
    public function adminPasswordReminder() {
      $config = HCCoder_BUSConfig::getInstance();
      require $config->getItem('views_path').'adminpasswordreminder.php';
    }
    
    /**
     * Admin interface > help
     */
    public function adminHelp() {
      $config = HCCoder_BUSConfig::getInstance();
      require $config->getItem('views_path').'adminhelp.php';
    }
    
    /**
     * Check default variables
     */
    public static function checkVariables() {
      if ( get_option('bus_registration_email') === FALSE ) {
       update_option('bus_registration_email', "Dear User,

thank you for registering our site. Your login credentials:

Username: %username%
Password: %password%

Best regards.");
      }
      
      if ( get_option('bus_password_reminder_email') === FALSE ) {
       update_option('bus_password_reminder_email', "Dear User,

Your login credentials:

Username: %username%
Password: %password%

Best regards.");
      }  
    }
    
    
  }
}