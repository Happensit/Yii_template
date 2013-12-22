<?php
$items = array();

/********** USERS **********/
$items[] = array(
	'name'			=> 'manage-users',
	'label'			=> Yii::t('AdminModule.user', 'Manage Users'),
	'controller'	=> 'user',
	'url'			=> array('/admin/user/'),
);

/********** NEWS **********/
$items[] = array(
	'name'			=> 'manage-news',
	'label'			=> Yii::t('AdminModule.news', 'Manage News'),
	'controller'	=> 'news',
	'url'			=> array('/admin/news/'),
);

/********** SYSTEM-MENUS **********/
$items[] = array(
	'name'			=> 'system-menus',
	'label'			=> Yii::t('AdminModule.admin', 'System Menus'),
	'color'			=> TbHtml::BUTTON_COLOR_SUCCESS,
	'collapse'		=> TRUE,
	'subitems'		=> array(
		array('label' => Yii::t('AdminModule.admin', 'Logout'), 'url' => array('/admin/user/logout')),
	),
);

return $items;