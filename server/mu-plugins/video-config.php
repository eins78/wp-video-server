<?php
/*
 * Configue the following constants for the open source video solution framework
 * If you have dedicated transcoder or file server, you can be more specific and config their hostname here
 */
define ( 'MY_VIDEO_SERVER',       get_option('siteurl') ); //server to load video player
define ( 'MY_VIDEO_STATS_SERVER', get_option('siteurl') ); //server to load stats beacon image
define ( 'MY_VIDEO_FILE_SERVER',  get_option('siteurl') ); //server accept transcoded files
define ( 'MY_VIDEO_TRANSCODER',   get_option('siteurl') ); //server to transcoder raw video clip


if ( !defined( 'VIDEO_AUTH_SECRET' ) )
	define ( 'VIDEO_AUTH_SECRET', '' ); 

define ( 'VIDEO_ADMIN_EMAIL', 'youraddress@example.com' ); 

/*
 * configure these binary locations to match your intalled locations 
 */
define( 'FFMPEG_BINARY', '/usr/bin/ffmpeg' );
define( 'FASTSTART', '/usr/bin/qt-faststart' );
define( 'FFMPEG2THEORY_BINARY', '/usr/local/bin/ffmpeg2theora' ); 
define( 'PHP_EXE', '/usr/local/bin/php' ); 

define( 'VIDEO_DEBUG', true );

?>
