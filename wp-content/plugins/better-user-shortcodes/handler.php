<?php
/**
 * Handling login, logout and password reminder
 */

require '../../../wp-load.php';
require ABSPATH.'wp-content/plugins/better-user-shortcodes/classes/config.php';

$config = HCCoder_BUSConfig::getInstance();

 
/**
 * Handling logins
 */
if ( isset($_POST['action']) && $_POST['action'] == 'login' ) {
  $errors = array();
  
  if ( ! validate_username($_POST['username']) )
    $errors['username'] = 'Username is invalid.';
  
  if ( strlen(trim($_POST['username'])) == 0 )
    $errors['username'] = 'Username is a required field.';
  
  if ( strlen(trim($_POST['password'])) == 0 )
    $errors['password'] = 'Password is a required field.';
  
  $creds = array();
  $creds['user_login'] = $_POST['username'];
  $creds['user_password'] = $_POST['password'];
  $user = wp_signon( $creds, false );
  
  if ( ! is_wp_error($user) ) {
    header('Location: '.$_POST['return_url']);
    exit;
  }
    
  if ( count($errors) > 0 || is_wp_error($user) ) {
    
    if ( count($errors) == 0 && is_wp_error($user) )
      $errors['username'] = 'Invalid username or password.';
    
    $error_string = '';
    
    foreach ( $errors as $key => $value )
      $error_string .= "$key=$value&";
    
    trim($error_string, '&');
    
    if ( strpos($_POST['embed_url'], '?') === FALSE )
      header('Location: '.$_POST['embed_url'].'?'.$error_string.'&embed_url='.$_POST['embed_url']);
    else
      header('Location: '.$_POST['embed_url'].'&'.$error_string.'&embed_url='.$_POST['embed_url']);
  }
  exit;
}

/**
 * Handling registrations
 */
if ( isset($_POST['action']) && $_POST['action'] == 'registration' ) {
  $errors = array();
  
  /* E-mail validation */
  if ( ! is_email($_POST['email']) )
    $errors['email'] = 'E-mail is invalid.';
  
  if ( email_exists($_POST['email']) )
    $errors['email'] = 'E-mail is already in use.';
  
  if ( strlen(trim($_POST['email'])) == 0 )
    $errors['email'] = 'E-mail is a required field.';
  
  /* username validation */
  if ( username_exists($_POST['username']) )
    $errors['username'] = 'Username is already in use.';
  
  if ( ! validate_username($_POST['username']) )
    $errors['username'] = 'Username is invalid.';
  
  if ( isset($_POST['username']) && strlen(trim($_POST['username'])) == 0 )
    $errors['username'] = 'Username is a required field.';
  
  /* password validation */
  if ( isset($_POST['password']) && isset($_POST['password-2']) && $_POST['password'] != $_POST['password-2'] )
    $errors['password'] = 'The two passwords does not match.';
  
  if ( isset($_POST['password']) && strlen(trim($_POST['password'])) < 5 )
    $errors['password'] = 'Password is too short, minimum 5 characters needed.';
  
  /* simpliest registration, only e-mail address provided */
  if ( count($errors) == 0 && ! isset($_POST['username']) && ! isset($_POST['password']) ) {
    $password = bus_generate_password();
    
    $user_data = array();
    $user_data['user_login'] = $_POST['email'];
    $user_data['user_email'] = $_POST['email'];
    $user_data['user_pass'] = $password;
    
    $message = get_option('bus_registration_email');
    $message = str_replace('%username%', $user_data['user_login'], $message);
    $message = str_replace('%password%', $user_data['user_pass'], $message);
    
    wp_mail($user_data['user_login'], 'Login credentials', $message);
    wp_insert_user( $user_data );
    
    if ( isset($_POST['return_url']) )
      header('Location: '.$_POST['return_url']);
    else
      header('Location: '.home_url());
    exit;
  }
  
  /* registration, e-mail address and username provided */
  if ( count($errors) == 0 && isset($_POST['username']) && ! isset($_POST['password']) ) {
    $password = bus_generate_password();
    
    $user_data = array();
    $user_data['user_login'] = $_POST['username'];
    $user_data['user_email'] = $_POST['email'];
    $user_data['user_pass'] = $password;
    
    $message = get_option('bus_registration_email');
    $message = str_replace('%username%', $user_data['user_login'], $message);
    $message = str_replace('%password%', $user_data['user_pass'], $message);
    
    wp_mail($user_data['user_login'], 'Login credentials', $message);
    wp_insert_user( $user_data );
    
    if ( isset($_POST['return_url']) )
      header('Location: '.$_POST['return_url']);
    else
      header('Location: '.home_url());
    exit;
  }
  
  /* registration, e-mail address and password provided, username is optional */
  if ( count($errors) == 0 && isset($_POST['password']) ) {
    $password = $_POST['password'];
    
    $user_data = array();
    $user_data['user_login'] = isset($_POST['username']) ? $_POST['username'] : $_POST['email'];
    $user_data['user_email'] = $_POST['email'];
    $user_data['user_pass'] = $password;
    
    $message = get_option('bus_registration_email');
    $message = str_replace('%username%', $user_data['user_login'], $message);
    $message = str_replace('%password%', $user_data['user_pass'], $message);
    
    wp_mail($user_data['user_login'], 'Login credentials', $message);
    wp_insert_user( $user_data );
    
    if ( isset($_POST['return_url']) )
      header('Location: '.$_POST['return_url']);
    else
      header('Location: '.home_url());
    exit;
  }
  
  if ( count($errors) > 0 ) {
    
    $error_string = '';
    
    foreach ( $errors as $key => $value )
      $error_string .= "$key=$value&";
    
    trim($error_string, '&');
    
    if ( strpos($_POST['embed_url'], '?') === FALSE )
      header('Location: '.$_POST['embed_url'].'?'.$error_string.'&embed_url='.$_POST['embed_url']);
    else
      header('Location: '.$_POST['embed_url'].'&'.$error_string.'&embed_url='.$_POST['embed_url']);
  }  
  exit;
}

/**
 * Handling logout
 */
if ( isset($_GET['logout']) && $_GET['logout'] == 1 && is_user_logged_in() ) {
  wp_logout();
  if ( isset($_GET['return_url']) )
    header('Location: '.$_GET['return_url']);
  else
    header('Location: '.home_url());
    
  exit;
}

/**
 * Handling lost passwords
 */
if ( isset($_POST['action']) && $_POST['action'] == 'password-reminder' ) {
  $errors = array();
  
  /* E-mail validation */
  if ( ! email_exists($_POST['email']) )
    $errors['email'] = 'E-mail does not exists in the system.';
  
  if ( ! is_email($_POST['email']) )
    $errors['email'] = 'E-mail is invalid.';
  
  if ( strlen(trim($_POST['email'])) == 0 )
    $errors['email'] = 'E-mail is a required field.';
  
  /* username validation */
  if ( isset($_POST['username']) && ! username_exists($_POST['username']) )
    $errors['username'] = 'Username does not exists in the system.';
  
  if ( isset($_POST['username']) && ! validate_username($_POST['username']) )
    $errors['username'] = 'Username is invalid.';
  
  if ( isset($_POST['username']) && strlen(trim($_POST['username'])) == 0 )
    $errors['username'] = 'Username is a required field.';
    
  /* only e-mail address provided */
  if ( count($errors) == 0 && ! isset($_POST['username']) ) {
    $password = bus_generate_password();
    $user_info = get_userdata(email_exists($_POST['email']));
    
    $user_data = array();
    $user_data['ID'] = $user_info->ID;
    $user_data['user_pass'] = $password;
    
    $message = get_option('bus_password_reminder_email');
    $message = str_replace('%username%', $user_info->user_login, $message);
    $message = str_replace('%password%', $user_data['user_pass'], $message);
    wp_mail($user_info->user_email , 'Login credentials', $message);
    
    wp_update_user( $user_data );
    
    if ( isset($_POST['return_url']) )
      header('Location: '.$_POST['return_url']);
    else
      header('Location: '.home_url());
    exit;
  }
  
  /* e-mail address and username required for new password */
  if ( count($errors) == 0 && isset($_POST['username']) ) {
    $password = bus_generate_password();
    $user_info = get_userdata(email_exists($_POST['email']));
    
    if ( $user_info->user_login == $_POST['username'] ) {
      $user_data = array();
      $user_data['ID'] = $user_info->ID;
      $user_data['user_pass'] = $password;
      
      $message = get_option('bus_password_reminder_email');
      $message = str_replace('%username%', $user_info->user_login, $message);
      $message = str_replace('%password%', $user_data['user_pass'], $message);
      wp_mail($user_info->user_email , 'Login credentials', $message);
      
      wp_update_user( $user_data );
    
      if ( isset($_POST['return_url']) )
        header('Location: '.$_POST['return_url']);
      else
        header('Location: '.home_url());
      exit;
    } else {
      $errors['username'] = 'Username and E-mail address not associated in the system.';
    }
    
  }
  
  if ( count($errors) > 0 ) {
    
    $error_string = '';
    
    foreach ( $errors as $key => $value )
      $error_string .= "$key=$value&";
    
    trim($error_string, '&');
    
    if ( strpos($_POST['embed_url'], '?') === FALSE )
      header('Location: '.$_POST['embed_url'].'?'.$error_string.'&embed_url='.$_POST['embed_url']);
    else
      header('Location: '.$_POST['embed_url'].'&'.$error_string.'&embed_url='.$_POST['embed_url']);
  }  
  exit;
  
}

/**
 * Generate random password
 */
function bus_generate_password($length = 8) {
  // start with a blank password
  $password = "";

  // define possible characters - any character in this string can be
  // picked for use in the password, so if you want to put vowels back in
  // or add special characters such as exclamation marks, this is where
  // you should do it
  $possible = "2346789bcdfghjkmnpqrtvwxyzBCDFGHJKLMNPQRTVWXYZ";

  // we refer to the length of $possible a few times, so let's grab it now
  $maxlength = strlen($possible);

  // check for length overflow and truncate if necessary
  if ($length > $maxlength) {
    $length = $maxlength;
  }

  // set up a counter for how many characters are in the password so far
  $i = 0; 
  
  // add random characters to $password until $length is reached
  while ($i < $length) { 

    // pick a random character from the possible ones
    $char = substr($possible, mt_rand(0, $maxlength-1), 1);
      
    // have we already used this character in $password?
    if (!strstr($password, $char)) { 
      // no, so it's OK to add it onto the end of whatever we've already got...
      $password .= $char;
      // ... and increase the counter by one
      $i++;
    }

  }

  // done!
  return $password;

}