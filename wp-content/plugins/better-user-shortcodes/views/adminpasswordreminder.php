<div class="wrap">
  <h2>Better User ShortCodes - Password reminder</h2>
  <p>
    Here you customize the password reminder shortcode. As you can see the forms has no CSS customizations, but all elements has CSS class and ID attributes, so you can easily style them.
  </p>
  
  <h3>Example #1:</h3>
  <p>
    [bus_password_reminder]<br />
    <strong>Output:</strong>
  </p>
  <?php echo do_shortcode('[bus_password_reminder admin=1]'); ?>
  
  <h3>Example #2:</h3>
  <p>
    [bus_password_reminder username_required=1]<br />
    <strong>Output:</strong>
  </p>
  <?php echo do_shortcode('[bus_password_reminder username_required=1 admin=1]'); ?>
  
  <h3>Example #3:</h3>
  <p>
    [bus_password_reminder email_label=0 email_value="E-mail..."]<br />
    <strong>Output:</strong>
  </p>
  <?php echo do_shortcode('[bus_password_reminder email_label=0 email_value="E-mail..." admin=1]'); ?>
  
  <h3>Outgoing E-mail:</h3>
  <form method="post" action="<?php echo $config->getItem('plugin_registration_url'); ?>">
    <p>
      <textarea name="registration-email" rows="10" cols="100"><?php echo get_option('bus_password_reminder_email'); ?></textarea>
    </p>
    <p class="success">
      <input type="submit" value="Save" class="button-primary" />
    </p>
  </form>
</div><!-- .wrap -->