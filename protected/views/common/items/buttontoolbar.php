<?php
if (isset($extraMenus)) {
	$menuGroups = $extraMenus;
} else {
	$menuGroups = $this->menu;
}

if(!empty($menuGroups)) {
	echo AdHtml::buttonToolbar($menuGroups, array(
		'class' => 'pull-right buttonToolbarMenus',
		'size' => TbHtml::BUTTON_SIZE_SMALL,
		'color' => TbHtml::BUTTON_COLOR_INVERSE,
		'urlPager' => TRUE,
	));
}
?>