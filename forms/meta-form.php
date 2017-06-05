<?php
      wp_nonce_field( 'save_mail_settings', 'mail_metabox_nonce');
	$value = get_post_meta($post->ID, 'jmr_email_id', true );

      echo '<label for="email_field"> Email </label>';
      echo '<input type="email" id="email_field" name="email_field" value="'. $value .'" size="25"/>';
?>