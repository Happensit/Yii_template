<?php

class NewsController extends AdminController
{
	public $extraActions = array('deletefile');

	public function actionDeleteFile()
	{
		$id = $this->getModelID();
		$fileModelName = 'NewsFiles';
		$foreignKey = 'news_id';

		$fileModel = call_user_func($fileModelName.'::model')->find(array(
			'condition' => $foreignKey.'=:foreignKey',
			'params' => array(':foreignKey' => $id),
		));

		$fileModel->delete();
		if(!isset($_POST['ajax'])) {
			$this->redirect(array('view','id' => $id));
		}
	}
}
