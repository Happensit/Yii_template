<?php
return array(
	// path aliases
	'aliases' => array(
		// for Yiistrap
		'bootstrap' => 'ext.bootstrap',
	),
	// autoloading model and component classes
	'import' => array(
		// for yiistrap
		'bootstrap.helpers.*',
	),
	'modules' => array(
		// uncomment the following to enable the Gii tool
		'gii' => array(
			'generatorPaths' => array('bootstrap.gii'),
		),
	),
	// application components
	'components' => array(
		// for Yiistrap
		'bootstrap' => array(
			'class' => 'bootstrap.components.TbApi',
		),
	),
);