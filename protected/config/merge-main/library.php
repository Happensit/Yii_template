<?php
return array(
	// path aliases
	'aliases' => array(
		// for library
		'library' => 'application.modules.library',
	),
	// autoloading model and component classes
	'import' => array(
		// for library
		'library.*',
		'library.models.*',
		'library.components.*',
	),
	'modules' => array(
		'library',
	),
);