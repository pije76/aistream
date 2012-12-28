<?php
/*!
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2012, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

return 
	array(
		"base_url" => "http://localhost/viachore/blog/hybridauth/", 

		"providers" => array ( 
			// openid providers
			"OpenID" => array (
				"enabled" => true
			),

			"Yahoo" => array ( 
				"enabled" => true,
				"keys"    => array ( "key" => "dj0yJmk9SnlwMlFxVzk3dHN0JmQ9WVdrOVlVRldhRzgyTkRnbWNHbzlPREUxT1RVMk1nLS0mcz1jb25zdW1lcnNlY3JldCZ4PTNm", "secret" => "7e82c974c1f473e24ce41a3566afe74cd14d3ccf" ),
			),

			"AOL"  => array ( 
				"enabled" => true 
			),

			"Google" => array ( 
				"enabled" => true,
				"keys"    => array ( "id" => "AIzaSyCfXT_fi6Fd32sIYEm4K9C0t-G8_d4BoYM", "secret" => "" ), 
			),

			"Facebook" => array ( 
				"enabled" => true,
				"keys"    => array ( "id" => "246439525476878", "secret" => "6275c9e1aca92229b3478b260279ed78" ), 
			),

			"Twitter" => array ( 
				"enabled" => true,
				"keys"    => array ( "key" => "5tWCxVOdiOk0VfAYZzx0Q", "secret" => "A5CPakqhwwkWTGW0MXqYxksP7VmuJlwfwFzHrKAQJk" ) 
			),

			// windows live
			"Live" => array ( 
				"enabled" => true,
				"keys"    => array ( "id" => "", "secret" => "" ) 
			),

			"MySpace" => array ( 
				"enabled" => true,
				"keys"    => array ( "key" => "", "secret" => "" ) 
			),

			"LinkedIn" => array ( 
				"enabled" => false,
				"keys"    => array ( "key" => "", "secret" => "" ) 
			),

			"Foursquare" => array (
				"enabled" => false,
				"keys"    => array ( "id" => "", "secret" => "" ) 
			),
		),

		// if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
		"debug_mode" => true,

		"debug_file" => "/var/log/hybridauth.log",
	);
