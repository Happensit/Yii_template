<?php
return array(
	// path aliases
	'aliases' => array(
		// for admin
		'admin' => 'application.modules.admin',
	),
	// autoloading model and component classes
	'import' => array(
		// for admin
		'admin.*',
		'admin.models.*',
		'admin.components.*',
	),
	'modules' => array(
		'admin',
	),
	// application components
	'components' => array(
		'user' => array(
			// for admin
			'class' => 'AdminWebUser',
		),
	),
);