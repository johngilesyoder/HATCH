<?php
/*
RS FeedBurner - uninstall.php
Version: 1.4.3

This script uninstalls RS FeedBurner and removes all options and traces of its existence.
*/

if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) { exit(); }

function rsfb_uninstall_plugin() {
	// Options to Delete
	$rsfb_option_names = array( 'rs_feedburner_version', 'rs_feedburner_settings', 'rs_feedburner_token', 'rsfb_admin_notices' );
	foreach( $rsfb_option_names as $i => $rsfb_option ) {
		delete_option( $rsfb_option );
		}
	}

rsfb_uninstall_plugin();

?>