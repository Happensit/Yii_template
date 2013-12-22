<?php
if(!empty($this->menu)) {
	echo TbHtml::buttonDropdown(Yii::t('AdminModule.admin', 'Action'), $this->menu, array(
		'groupOptions' => array(
			'class' => 'pull-right menuDropdown',
		),
		'split' => true,
		'color' => TbHtml::BUTTON_COLOR_PRIMARY,
	));
}
?>