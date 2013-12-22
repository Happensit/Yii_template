<?php

class DownController extends FrontController
{
	public $crudActions = array();
	
	public function actionIndex() {
		$m = $_GET['m'];
		$id = $_GET['id'];
		if (empty($id) || empty($m)) {
			throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
		} else {
			if (@include($m.'.php')) {
				$webroot = YiiBase::getPathOfAlias('webroot');
				$fileModel = call_user_func(strtoupper($m).'::model')->findByPk($id);
				switch ($m) {
					case 'author':
						$path = $webroot.$fileModel->path;
						$name = '';
						break;
					
					default:
						$path = $webroot.$fileModel->files->path;
						$name = $fileModel->files->name;
						break;
				}
				AdDownload::download($path, $name);
			} else {
				throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
			}
		}
	}
}
