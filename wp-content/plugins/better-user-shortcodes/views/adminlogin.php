<div class="wrap">
  <h2>Better User ShortCodes - Login</h2>
  <p>
    Here you customize the login shortcode. As you can see the forms has no CSS customizations, but all elements has CSS class and ID attributes, so you can easily style them.
  </p>
  
  <h3>Example #1:</h3>
  <p>
    [bus_login]<br />
    <strong>Output:</strong>
  </p>
  <?php echo do_shortcode('[bus_login admin=1]'); ?>
  
  <h3>Example #2:</h3>
  <p>
    [bus_login username_label=0 password_label=0 submit_value="Send" username_value="Username..." password_value="password" return_url="http://www.my-super-domain/return_url"]<br />
    <strong>Output:</strong>
  </p>
  <?php echo do_shortcode('[bus_login admin=1 username_label=0 password_label=0 submit_value="Send" username_value="Username..." password_value="password" return_url="http://www.my-super-domain/return_url"]'); ?>
  
</div><!-- .wrap -->