<div class="wrap">
  <h2>Better User ShortCodes - Login</h2>
  <p>
    Here you customize the logout shortcode. As you can see the forms has no CSS customizations, but all elements has CSS class and ID attributes, so you can easily style them.
  </p>
  
  <h3>Example #1:</h3>
  <p>
    [bus_logout]<br />
    <strong>Output:</strong>
  </p>
  <?php echo do_shortcode('[bus_logout]'); ?>
  
  <h3>Example #2:</h3>
  <p>
    [bus_logout return_url="http://www.google.com/"]<br />
    <strong>Output:</strong>
  </p>
  <?php echo do_shortcode('[bus_logout return_url="http://www.google.com/"]'); ?>
  
  <h3>Example #3:</h3>
  <p>
    [bus_logout link_title="Log me out!" link_value="Logout &raquo;" return_url="http://www.google.com/"]<br />
    <strong>Output:</strong>
  </p>
  <?php echo do_shortcode('[bus_logout link_title="Log me out!" link_value="Logout &raquo;" return_url="http://www.google.com/"]'); ?>
  
  <h3>Logout URL:</h3>
  <p>
    You can create logout link, button without shortcode here is your logout URL:<br /><br />
    <i><?php echo $config->getItem('plugin_handler_url').'?logout=1'; ?></i><br /><br />
    You can add return URL:<br /><br />
    <i><?php echo $config->getItem('plugin_handler_url').'?logout=1&return_url=http://your-super-domain'; ?></i>
  </p>
</div><!-- .wrap -->