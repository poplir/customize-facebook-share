<?php
// If this file is called directly, abort
if(!defined('ABSPATH'))  {
	exit;
}

// Create admin tab for the plugin
function cfs_admin_tab()  {
	
	add_menu_page('Customize Share API', 'Customize Share API', 'manage_options', __FILE__, 'cfs_admin_page');
}

add_action('admin_menu', 'cfs_admin_tab');

// Calling jquery and css
function cfs_js_css()  {

	wp_enqueue_script('jquery');  // Call jquery
	wp_enqueue_script('jquery-ui-dialog');  // Call jquery ui
	wp_enqueue_script('my_pop_up_js', plugin_dir_url(__FILE__).'js/pop-up.js');

	wp_enqueue_style('my_jquery_ui_css', plugin_dir_url(__FILE__).'css/jquery-ui.css');	

	wp_enqueue_style('pop_up_style', plugin_dir_url(__FILE__).'css/style.css');
}

add_action('wp_enqueue_scripts', 'cfs_js_css');
add_action('wp_enqueue_styles', 'cfs_js_css');

// Create admin page
function cfs_admin_page()  {
	global $cfs_options;
	ob_start(); ?>	

	<div class="wrap">
		<h2><?php _e('Customize Share API', 'cfs'); ?></h2>
		<br>
		<?php settings_errors(); ?>

		<form name="cfs_form" action="options.php" method="POST">

			<?php settings_fields('cfs_settings_group'); ?>

			<label>Type the URL that you want visitors to share:</label>			
			<br><br>
			<input type="text" size="80" id="cfs_settings[url]" name="cfs_settings[url]" value="<?php echo $cfs_options['url']; ?>" />
			<br><br>
			<input type="submit" name="cfs-submit" class="button-primary" value="<?php _e('Save', 'cfs_domain'); ?>" />
			
		</form>
	</div>	
		
	<?php
	echo ob_get_clean();
	
}

// Register settings
function cfs_register_settings()	{	
	register_setting('cfs_settings_group', 'cfs_settings');
}

add_action('admin_init', 'cfs_register_settings');
?>