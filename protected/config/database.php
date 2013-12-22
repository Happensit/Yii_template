<?php
$host		= '';
$dbname		= '';
$username	= '';
$password	= '';

return array(
	'components' => array(
		'db' => array(
			'connectionString' => 'mysql:host='.$host.';dbname='.$dbname,
			'emulatePrepare' => true,
			'username' => $username,
			'password' => $password,
			'charset' => 'utf8',
			'tablePrefix' => 'yii_',
		),
	),
);