<?php settings_errors(); ?>
<form method="post" action="options.php">
<?php settings_fields( 'jmr_postype_settings_group'); ?>
<?php do_settings_sections('error_report_settings_page'); ?>
<?php submit_button(); ?>
</form>