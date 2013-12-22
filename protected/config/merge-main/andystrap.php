<?php
return array(
	// path aliases
	'aliases' => array(
		// for andystrap
		'andystrap' => 'ext.andystrap',
	),
	// autoloading model and component classes
	'import' => array(
		// for andystrap
		'andystrap.helpers.*',
	),

	// application components
	'components' => array(
		// for Andystrap
		'andystrap' => array(
			'class' => 'andystrap.components.Andystrap',
		),
	),
);