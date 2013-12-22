<?php
class AdminModule extends CWebModule
{
	public function init()
	{
		$this->loadSidebarItems();

		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
		if (parent::beforeControllerAction($controller, $action)) {
			return true;
		} else {
			return false;
		}
	}

	public function loadSidebarItems()
	{
		if (empty(Yii::app()->params['sidebarItems'])) {
			$sidebarItems = require_once(Yii::getPathOfAlias('admin.config.sidebar-items').'.php');
			Yii::app()->params['sidebarItems'] = $sidebarItems;
		}
	}
}
