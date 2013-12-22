<?php

return CMap::mergeArray(
	require_once('merge-main.php'),
	array(
		'extensionPath' => Yii::getPathOfAlias('system').'/../extensions',
        //'defaultController' => '',             // контроллер по умолчанию
        'name' => 'Yii Web Application Base',    // название приложения
        'language'          => 'ru',             // язык по умолчанию
        'sourceLanguage'    => 'en',
        'theme'             => 'default',        // тема оформления по умолчанию
        'charset'           => 'UTF-8',
		'preload' => array('log'),
		'aliases' => array(
		),

		// autoloading model and component classes
		'import' => array(
			'application.models.*',
			'application.components.*',
		),

		'modules' => array(
			'gii' => array(
				'class' => 'system.gii.GiiModule',
				'password' => 'happensit',
				'ipFilters' => array('127.0.0.1','::1'),
			),
		),

		// application components
		'components' => array(
			'urlManager' => array(
				'showScriptName' => false,
				'caseSensitive' => false,
			),
			'errorHandler' => array(
				'errorAction'=>'site/error',
			),
			'log' => array(
				'class' => 'CLogRouter',
				'routes' => array(
					array(
						'class' => 'CFileLogRoute',
						'levels' => 'error, warning',
					),
					// uncomment the following to show log messages on web pages
					/*
					array(
						'class'=>'CWebLogRoute',
					),
					*/
				),
			),
		),

		// application-level parameters that can be accessed
		// using Yii::app()->params['paramName']
		'params' => array(
			// this is used in contact page
			'adminEmail' => 'antonybizov@gmail.com',
		),
	)
);