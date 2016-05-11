<?php

$piereg = get_option( 'pie_register_2' );





if( $_POST['notice'] ){

	echo '<div id="message" class="updated fade"><p><strong>' . $_POST['notice'] . '.</strong></p></div>';

}



?>

<script type="text/javascript" src="<?php echo plugins_url("../ckeditor/ckeditor.js",__FILE__);?>"></script>


<div id="container">

  <div class="right_section">

    <div class="notifications">

      <h2><?php _e("Notifications : Registration Form",'piereg');?></h2>

      <form method="post" action="">

        <ul>

          <li>

            <div class="fields">

              <h2><?php _e("Notifications to Administrator",'piereg');?></h2>

              <input name="enable_admin_notifications" <?php echo ($piereg['enable_admin_notifications']=="1")?'checked="checked"':''?> type="checkbox" class="checkbox" value="1" />

              <?php _e("Enable email notification to administrators",'piereg');?>

              <p><?php _e("Enter a message below to receive a notification email when users submit this form.",'piereg');?></p>

            </div>

          </li>

          <li>

            <div class="fields">

              <label><?php _e("Send To Email*",'piereg');?></label>

              <input name="admin_sendto_email" value="<?php echo $piereg['admin_sendto_email']?>" type="text" class="input_fields" />

            </div>

          </li>

          <li>

            <div class="fields">

              <label><?php _e("From Name",'piereg');?></label>

              <input name="admin_from_name" value="<?php echo $piereg['admin_from_name']?>" type="text" class="input_fields2" />

            </div>

          </li>

          <li>

            <div class="fields">

              <label><?php _e("From Email",'piereg');?></label>

              <input name="admin_from_email" value="<?php echo $piereg['admin_from_email']?>" type="text" class="input_fields2" />

            </div>

          </li>

          <li>

            <div class="fields">

              <label><?php _e("Reply To",'piereg');?></label>

              <input name="admin_to_email" value="<?php echo $piereg['admin_to_email']?>" type="text" class="input_fields2" />

            </div>

          </li>

          <li>

            <div class="fields">

              <label><?php _e("BCC",'piereg');?></label>

              <input  name="admin_bcc_email" value="<?php echo $piereg['admin_bcc_email']?>" type="text" class="input_fields" />

            </div>

          </li>

          <li>

            <div class="fields">

              <label><?php _e("Subject",'piereg');?></label>

              <input name="admin_subject_email" value="<?php echo $piereg['admin_subject_email']?>" type="text" class="input_fields" />

            </div>

          </li>

          <li>

            <div class="fields">
              <label style="width:auto;margin-right:20px;"><?php _e("Send HTML Formate",'piereg');?></label>
                <div class="radio_fields">
                    <input type="radio" id="admin_message_email_formate_yes" name="admin_message_email_formate" value="1" <?php echo ($piereg['admin_message_email_formate'] == "1")? ' checked="checked" ' : '' ?>>
                    <label for="admin_message_email_formate_yes" style="float:none;">Yes</label>
                    &nbsp;&nbsp;
                    <input type="radio" id="admin_message_email_formate_no" name="admin_message_email_formate" value="0" <?php echo ($piereg['admin_message_email_formate'] == "0")? ' checked="checked" ' : '' ?>>
                    <label for="admin_message_email_formate_no" style="float:none;">No</label>
                </div>
            </div>

          </li>

          <li>

            <div class="fields">

              <label><?php _e("Message",'piereg');?></label>

              <p><strong><?php _e("Replacement Keys","piereg"); ?>:</strong>
              
			<?php
				$fields = maybe_unserialize(get_option("pie_fields"));
				$replacement_fields = '';
				if(sizeof($fields ) > 0)

				{

					

					foreach($fields as $pie_fields)	

					{

						switch($pie_fields['type']) :

						case 'default' :

						case 'form' :					

						case 'submit' :

						case 'username' :

						case 'email' :

						case 'password' :

						case 'upload' :	

						case 'name' :

						case 'pagebreak' :

						case 'sectionbreak' :

						case 'hidden' :
						
						case 'captcha' :

						continue 2;

						break;
						endswitch;						

											
						if($pie_fields['type'] == "invitation")
							$meta_key = "invitation_code";
						else
							$meta_key	= "pie_".$pie_fields['type']."_".$pie_fields['id'];

						$replacement_fields .= '<option value="%'.$meta_key.'%">'.$pie_fields['type'].'</option>';	

					}

				}
				?>

				<select name="replacement_keys" id="replacement_keys" style="font-size:14px;">
                	<option value="select">Select</option>
                	<option value="%blogname%">Blog Name</option>
                	<option value="%blogname_url%">Blog Name With Site URL</option>
                	<option value="%user_login%">User Name</option>
                	<option value="%user_email%">User E-mail</option>
                    <option value="%user_ip%">User IP</option>
                	<option value="%siteurl%">Site URL</option>
                	<option value="%activationurl%">User Activation URL</option>
                	<option value="%firstname%">User First Name</option>
                	<option value="%lastname%">User Last Name</option>
                	<option value="%user_url%">User URL</option>
                	<option value="%user_aim%">User AIM</option>
                	<option value="%user_yim%">User YIM</option>
                	<option value="%user_jabber%">User Jabber</option>
                	<option value="%user_biographical_nfo%">User Biographical Info</option>
                	<option value="%user_registration_date%">User Registration Date</option>
                	<?php echo $replacement_fields; ?>
                </select>


			   </p>

              <textarea name="admin_message_email" id="piereg_text_editor"><?php echo $piereg['admin_message_email']?></textarea>
              
              
				<script type="text/javascript">
					CKEDITOR.replace('piereg_text_editor',{removeButtons: 'About'});
					jQuery(document).ready(function(){
						jQuery("#replacement_keys").change(function(){
							CKEDITOR.instances.piereg_text_editor.insertHtml(jQuery(this).val().trim());
							jQuery(this).val('select');
						});
					});
                </script>
              

              <div class="clear"></div>

            </div>

          </li>

        </ul>

        <input name="action" value="pie_reg_update" type="hidden" />

        <input type="hidden" name="admin_email_notification_page" value="1" />

        <p class="submit"><input style="background: #464646;color: #ffffff;border: 0;cursor: pointer;padding: 5px 0px 5px 0px;margin-top: 15px;

min-width: 113px;" class="submit_btn" name="Submit" value="<?php _e('Save Changes','piereg');?>" type="submit" /></p>

      </form>

    </div>

  </div>

</div>

