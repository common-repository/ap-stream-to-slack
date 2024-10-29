<?php
/**
 * Plugin Name: AP Stream to Slack
 * Plugin URI: https://wordpress.org/plugins/ap-stream-to-slack/
 * Description: Send Stream logs to slack.
 * Author: f.staude, stk_jj
 * Version: 0.0.6
 * Author URI: https://staude.net/
 * Text Domain: ap-stream-to-slack
 * Domain Path: /languages
 * GitHub Plugin URI: https://github.com/adminpress/ap-stream-to-slack
 * GitHub Branch: master
 */

require_once dirname( __FILE__ ) . '/inc/class-ap-stream-slack-api.php';

function register_stream_slack() {
	$ap_stream_slack = new AP_Stream_Slack_API();
}
add_action( 'init', 'register_stream_slack' );

