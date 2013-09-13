<?php

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Yii app template',
	'preload'=>array('log'),
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

    'theme'=>'classic',

	'modules'=>array(
        'site'=>array(
            'defaultController'=>'dashboard'
        ),
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'1',
		),
	),

	'components'=>array(
		'user'=>array(
			'allowAutoLogin'=>true,
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
			),
		),
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		'errorHandler'=>array(
			'errorAction'=>'site/system/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),
	),

	'params'=>array(
		'adminEmail'=>'webmaster@example.com',
	),
);