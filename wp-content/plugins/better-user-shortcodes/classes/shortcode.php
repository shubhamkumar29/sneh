<?php
/**
 * Shortcode class
 *
 * usage:
 * add_shortcode('your_shortcode_name', array('HCCoder_BSUShortcode', 'frontendLogin'));
 */
if ( ! class_exists('HCCoder_BSUShortcode') ) {

  class HCCoder_BSUShortcode {
  
    /**
     * Login shortcode
     */
    public function frontendLogin($atts) {
      ob_start();
      
      $config = HCCoder_BUSConfig::getInstance();
      
      require $config->getItem('views_path').'loginshortcode.php';
      
      return ob_get_clean();
    }
    
    /**
     * Logout shortcode
     */
    public function frontendLogout($atts) {
      ob_start();
      
      $config = HCCoder_BUSConfig::getInstance();
      
      require $config->getItem('views_path').'logoutshortcode.php';
      
      return ob_get_clean();
    }
    
    /**
     * Registration shortcode
     */
    public function frontendRegistration($atts) {
      ob_start();
      
      $config = HCCoder_BUSConfig::getInstance();
      
      require $config->getItem('views_path').'registrationshortcode.php';
      
      return ob_get_clean();
    }
    
    /**
     * Registration shortcode
     */
    public function frontendPasswordReminder($atts) {
      ob_start();
      
      $config = HCCoder_BUSConfig::getInstance();
      
      require $config->getItem('views_path').'passwordremindershortcode.php';
      
      return ob_get_clean();
    }
  }
  
}