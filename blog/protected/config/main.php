<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Ai - Instant Streams',
    /*'theme'=>'classic',*/

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'application.modules.user.models.*',
        'application.modules.user.components.*',
        'application.modules.message.models.*',
		'application.modules.message.components.*',
        'ext.esearch.*',
        'ext.usercounter.*',
	),

    'defaultController' => 'site',

	'modules'=>array(
        // uncomment the following to enable the Gii tool
        'gii'=>array(
            'generatorPaths'=>array(
                'bootstrap.gii',
            ),
            'class'=>'system.gii.GiiModule',
            'password'=>'tratap60',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters'=>array('127.0.0.1','::1'),
        ),

        'user' => array(
            'debug' => false,
            'userTable' => 'user',
            'translationTable' => 'translation',
        ),

        'usergroup' => array(
            'usergroupTable' => 'user_group',
            'usergroupMessagesTable' => 'user_group_message',
        ),

        'membership' => array(
            'membershipTable' => 'membership',
            'paymentTable' => 'payment',
        ),

        'friendship' => array(
            'friendshipTable' => 'friendship',
        ),

        'profile' => array(
            'privacySettingTable' => 'privacysetting',
            'profileFieldTable' => 'profile_field',
            'profileTable' => 'profile',
            'profileCommentTable' => 'profile_comment',
            'profileVisitTable' => 'profile_visit',
        ),

        'role' => array(
            'roleTable' => 'role',
            'userRoleTable' => 'user_role',
            'actionTable' => 'action',
            'permissionTable' => 'permission',
        ),

        'message' => array(
            'messageTable' => 'message',
        ),

        'avatar' => array(
            'avatarMaxWidth' => '0',
            'enableGravatar' => 'true',
        ),

        'hybridauth' => array(
            'baseUrl' => 'http://'. $_SERVER['SERVER_NAME'] . '/aistream/blog/hybridauth',
            'withYiiUser' => false, // Set to true if using yii-user
            "providers" => array (
                "openid" => array (
                    "enabled" => true
                ),

                "yahoo" => array (
                    "enabled" => true
                ),

                "google" => array (
                    "enabled" => true,
                    "keys"    => array ( "id" => "", "secret" => "" ),
                    "scope"   => ""
                ),

                "facebook" => array (
                    "enabled" => true,
                    "keys"    => array ( "id" => "", "secret" => "" ),
                    "scope"   => "email,publish_stream",
                    "display" => ""
                ),

                "twitter" => array (
                    "enabled" => true,
                    "keys"    => array ( "key" => "", "secret" => "" )
                )
            )
        ),
    ),

    // application components
	'components'=>array(
        'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap',
        ),

        'user'=>array(
            'class'=>'application.modules.user.components.YumWebUser',
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
            'loginUrl' => array('//user/user/login'),
            'returnUrl' => array('//user/user/index'),
            /*
            'returnUrl' => true,
            'returnAdminUrl' => true,
            */
		),

        'cache' => array('class' => 'system.caching.CDummyCache'),

        // UserCounter
        'counter' => array(
            'class' => 'UserCounter',
        ),

        /*
		'db'=>array(
			'connectionString' => 'sqlite:protected/data/blog.db',
			'tablePrefix' => 'tbl_',
		),
        */

		// uncomment the following to use a MySQL database
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=aistream',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'tratap60',
			'charset' => 'utf8',
			'tablePrefix' => '',
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),

        'urlManager'=>array(
        	'urlFormat'=>'path',
            /*'urlSuffix'=>'.html',*/
            'showScriptName'=>false,
        	'rules'=>array(
        		'post/<id:\d+>/<title:.*?>'=>'post/view',
        		'posts/<tag:.*?>'=>'post/index',
        		'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
        	),
        ),

        'authManager'=>array(
            'class'=>'RDbAuthManager',
            'connectionID'=>'db',
            'defaultRoles'=>array('Authenticated', 'Guest'),
            'assignmentTable'=>'authassignment',
        ),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),

				// uncomment the following to show log messages on web pages
				array(
					'class'=>'CWebLogRoute',
				),
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>require(dirname(__FILE__).'/params.php'),
);
