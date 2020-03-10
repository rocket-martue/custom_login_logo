<?php
/**
 * custom_login_logo
 *
* ログイン画面のロゴの背景・背景画像・リンク・titleの設定
*/
function custom_login_logo() {
	echo '<style type="text/css">
#login h1 {
	/*background-color: #111;*/
	padding: 8px;
}
#login h1 a {
	background: url('.get_stylesheet_directory_uri().'/images/common/logo-header@2x.png) no-repeat center bottom;
	background-size: contain!important;
	height: 110px;
	margin-bottom: 0;
	width: 100%;
}
</style>';
}
add_action('login_head', 'custom_login_logo');

function my_custom_login_url( $url ) {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_custom_login_url', 10, 1 );

function my_login_logo_url_title() {
	return get_bloginfo( 'name' );
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
