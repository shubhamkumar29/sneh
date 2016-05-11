<div id="bus-password-reminderform">
  <?php if ( isset($atts['admin']) || ! is_user_logged_in() ) { ?>
    
    <?php if ( isset($_GET['email']) || isset($_GET['username']) ) { ?>
      <div id="bus-registrationform-errors">
        <?php if ( isset($_GET['email']) ) { ?>
          <p class="bus-registrationform-error"><?php echo $_GET['email']; ?></p>
        <?php } ?>
        <?php if ( isset($_GET['username']) ) { ?>
          <p class="bus-registrationform-error"><?php echo $_GET['username']; ?></p>
        <?php } ?>
      </div><!-- #bus-loginform-errors -->
    <?php } ?>
    
    <form method="post" action="<?php echo $config->getItem('plugin_handler_url'); ?>">
      <p>
        <?php if ( ! isset($atts['email_label']) ) { ?>
          <label for="bus-password-reminder-email">E-mail*</label>
        <?php } ?>
        <input type="text" name="email" id="bus-password-reminder-email" class="bus-password-reminder-input" value="<?php echo isset($atts['email_value']) ? $atts['email_value'] : ''; ?>" />
      </p>
      
      <?php if ( isset($atts['username_required']) ) { ?>
        <p>
          <?php if ( ! isset($atts['username_label']) ) { ?>
            <label for="bus-password-reminder-username">Username*</label>
          <?php } ?>
          <input type="text" name="username" id="bus-password-reminder-username" class="bus-password-reminder-input" value="<?php echo isset($atts['username_value']) ? $atts['username_value'] : ''; ?>" />
        </p>
      <?php } ?>
      
      <p>
        <input type="hidden" name="return_url" value="<?php echo isset($atts['return_url']) ? $atts['return_url'] : 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>" />
        <input type="hidden" name="embed_url" value="<?php echo isset($_GET['embed_url']) ? $_GET['embed_url'] : 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>" />
        <input type="hidden" name="for_bots" value="0" />
        <input type="hidden" name="action" value="password-reminder" />
        <input type="submit" id="bus-password-reminder-submit" class="bus-password-reminder-submit" value="<?php echo isset($atts['submit_value']) ? $atts['submit_value'] : 'Send my new password'; ?>" />
      </p>
    </form>
  <?php } else { ?>
    <p>You are already logged in.</p>
  <?php } ?>
</div><!-- #bus-loginform -->