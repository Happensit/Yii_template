<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return CMap::mergeArray(
	require_once('merge-console.php'),
	array(
		'extensionPath' => Yii::getPathOfAlias('system').'/../extensions',

		'name' => 'My Console Application',

		// preloading 'log' component
		'preload' => array('log'),

		// application components
		'components' => array(
			'log' => array(
				'class' => 'CLogRouter',
				'routes' => array(
					array(
						'class' => 'CFileLogRoute',
						'levels' => 'error, warning',
					),
				),
			),
		),
	)
);