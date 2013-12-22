<?php
class LibraryModule extends CWebModule
{
	public $defaultController = 'awesome';

	public function init()
	{
		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action)) {
			return true;
		} else {
			return false;
		}
	}
}
