<div id="bus-registrationform">
  <?php if ( isset($atts['admin']) || ! is_user_logged_in() ) { ?>
  
    <?php if ( isset($_GET['email']) || isset($_GET['username']) || isset($_GET['password']) ) { ?>
      <div id="bus-registrationform-errors">
        <?php if ( isset($_GET['email']) ) { ?>
          <p class="bus-registrationform-error"><?php echo $_GET['email']; ?></p>
        <?php } ?>
        <?php if ( isset($_GET['username']) ) { ?>
          <p class="bus-registrationform-error"><?php echo $_GET['username']; ?></p>
        <?php } ?>
        <?php if ( isset($_GET['password']) ) { ?>
          <p class="bus-registrationform-error"><?php echo $_GET['password']; ?></p>
        <?php } ?>
      </div><!-- #bus-loginform-errors -->
    <?php } ?>
    
    <form method="post" action="<?php echo $config->getItem('plugin_handler_url'); ?>">
      <p>
        <?php if ( ! isset($atts['email_label']) ) { ?>
          <label for="bus-registration-email">E-mail*</label>
        <?php } ?>
        <input type="text" name="email" id="bus-registration-email" class="bus-registration-input" value="<?php echo isset($atts['email_value']) ? $atts['email_value'] : ''; ?>" />
      </p>
      
      <?php if ( isset($atts['username_enabled']) ) { ?>
        <p>
          <?php if ( ! isset($atts['username_label']) ) { ?>
            <label for="bus-registration-username">Username*</label>
          <?php } ?>
          <input type="text" name="username" id="bus-registration-username" class="bus-registration-input" value="<?php echo isset($atts['username_value']) ? $atts['username_value'] : ''; ?>" />
        </p>
      <?php } ?>
      
      <?php if ( isset($atts['password_enabled']) ) { ?>
        <p>
          <?php if ( ! isset($atts['password_label']) ) { ?>
            <label for="bus-registration-password">Password*</label>
          <?php } ?>
          <input type="password" name="password" id="bus-registration-password" class="bus-registration-input" value="<?php echo isset($atts['password_value']) ? $atts['password_value'] : ''; ?>" />
        </p>
        <p>
          <?php if ( ! isset($atts['password_confirm_label']) ) { ?>
            <label for="bus-registration-password-confirm">Confirm password*</label>
          <?php } ?>
          <input type="password" name="password-2" id="bus-registration-password-confirm" class="bus-registration-input" value="<?php echo isset($atts['password_confirm_value']) ? $atts['password_confirm_value'] : ''; ?>" />
        </p>
      <?php } ?>
      
      <p>
        <input type="hidden" name="return_url" value="<?php echo isset($atts['return_url']) ? $atts['return_url'] : 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>" />
        <input type="hidden" name="embed_url" value="<?php echo isset($_GET['embed_url']) ? $_GET['embed_url'] : 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>" />
        <input type="hidden" name="for_bots" value="0" />
        <input type="hidden" name="action" value="registration" />
        <input type="submit" id="bus-registration-submit" class="bus-registration-submit" value="<?php echo isset($atts['submit_value']) ? $atts['submit_value'] : 'Register'; ?>" />
      </p>
    </form>
  <?php } else { ?>
    <p>You are already logged in.</p>
  <?php } ?>
</div><!-- #bus-loginform -->