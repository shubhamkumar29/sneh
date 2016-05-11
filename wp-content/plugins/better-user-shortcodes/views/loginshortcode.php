<div id="bus-loginform">
  <?php if ( isset($atts['admin']) || ! is_user_logged_in() ) { ?>
    <?php if ( isset($_GET['username']) || isset($_GET['password']) ) { ?>
      <div id="bus-loginform-errors">
        <?php if ( isset($_GET['username']) ) { ?>
          <p class="bus-loginform-error"><?php echo $_GET['username']; ?></p>
        <?php } ?>
        <?php if ( isset($_GET['password']) ) { ?>
          <p class="bus-loginform-error"><?php echo $_GET['password']; ?></p>
        <?php } ?>
      </div><!-- #bus-loginform-errors -->
    <?php } ?>
    
    <form method="post" action="<?php echo $config->getItem('plugin_handler_url'); ?>">
      <p>
        <?php if ( ! isset($atts['username_label']) ) { ?>
          <label for="bus-login-username">Username*</label>
        <?php } ?>
        <input type="text" name="username" id="bus-login-username" class="bus-login-input" value="<?php echo isset($atts['username_value']) ? $atts['username_value'] : ''; ?>" />
      </p>
      <p>
        <?php if ( ! isset($atts['password_label']) ) { ?>
          <label for="bus-login-password">Password*</label>
        <?php } ?>
        <input type="password" name="password" id="bus-login-password" class="bus-login-input" value="<?php echo isset($atts['password_value']) ? $atts['password_value'] : ''; ?>" />
      </p>
      <p>
        <input type="hidden" name="return_url" value="<?php echo isset($atts['return_url']) ? $atts['return_url'] : 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>" />
        <input type="hidden" name="embed_url" value="<?php echo isset($_GET['embed_url']) ? $_GET['embed_url'] : 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>" />
        <input type="hidden" name="for_bots" value="0" />
        <input type="hidden" name="action" value="login" />
        <input type="submit" id="bus-login-submit" class="bus-login-submit" value="<?php echo isset($atts['submit_value']) ? $atts['submit_value'] : 'Login'; ?>" />
      </p>
    </form>
  <?php } else { ?>
    <p>You are already logged in.</p>
  <?php } ?>
</div><!-- #bus-loginform -->