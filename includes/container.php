<?php
// If this file is called directly, abort
if(!defined('ABSPATH'))  {
	exit;
}

function cfs_container()  {
	global $cfs_options;
	
?>
	<div id="pop_up_dialog">
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=529310164265252"></script>		

		<p id="msg">Share the link</p>
		
		<!-- Share the URL here -->

		<div class="fb-share-button" data-href="<?php echo $cfs_options['url']; ?>" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>		

	</div>
<?php
}

add_action('wp_footer', 'cfs_container');
?>