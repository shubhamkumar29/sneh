<div class="wrap">
  <h2>Better User ShortCodes - Registration</h2>
  <p>
    Here you customize the registration shortcode. As you can see the forms has no CSS customizations, but all elements has CSS class and ID attributes, so you can easily style them.
  </p>
  
  <h3>Example #1:</h3>
  <p>
    [bus_registration]<br />
    <strong>Output:</strong>
  </p>
  <?php echo do_shortcode('[bus_registration admin=1]'); ?>
  <p>
    As you can see this is a really simple form, user enters the E-mail address and the plugin sends the password to login(the E-mail address will be the username).
  </p>
  
  <h3>Example #2:</h3>
  <p>
    [bus_registration username_enabled=1]<br />
    <strong>Output:</strong>
  </p>
  <?php echo do_shortcode('[bus_registration admin=1 username_enabled=1]'); ?>
  <p>
    As you can see here the user can enter the E-mail address and the username.
  </p>
  
  <h3>Example #3:</h3>
  <p>
    [bus_registration password_enabled=1 return_url="http://my-super-domain/sign-up-thank-you"]<br />
    <strong>Output:</strong>
  </p>
  <?php echo do_shortcode('[bus_registration admin=1 password_enabled=1 return_url="http://my-super-domain/sign-up-thank-you"]'); ?>
  <p>
    As you can see here the user can enter the E-mail address and can specify the password. Return URL added too.
  </p>
  
  <h3>Outgoing E-mail:</h3>
  <form method="post" action="<?php echo $config->getItem('plugin_registration_url'); ?>">
    <p>
      <textarea name="registration-email" rows="10" cols="100"><?php echo get_option('bus_registration_email'); ?></textarea>
    </p>
    <p class="success">
      <input type="submit" value="Save" class="button-primary" />
    </p>
  </form>
</div><!-- .wrap -->