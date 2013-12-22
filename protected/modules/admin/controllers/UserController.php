<?php

class UserController extends AdminController
{
	public $modelName2 = 'UserProfile';

	public $modelID2 = 'user_id';

	public $extraAccessRules = array(
		array('allow',
			'actions' => array('login'),
			'users' => array('*'),
		),
		array('allow',
			'actions' => array('logout'),
			'users' => array('@'),
		),
	);

	public $extraActionsPath = array(
		'login'		=> 'admin.controllers.user.LoginAction',
		'logout'	=> 'admin.controllers.user.LogoutAction',
	);

	public function actionCreate()
	{
		$model = new $this->modelName;
		$model2 = new $this->modelName2;

		if (isset($_POST[$this->modelName], $_POST[$this->modelName2])) {
			$model->attributes = $_POST[$this->modelName];
			$model2->attributes = $_POST[$this->modelName2];

			$valid = $model->validate();
			$valid = $model2->validate() && $valid;

			if ($valid) {
				$model->save();
				$model2->setAttribute($this->modelID2, $model->id);
				$model2->save();
				$this->redirect(array('view','id' => $model->id));
			}
		}
		$this->render($this->action->id, array(
			'model' => $model,
			'model2' => $model2,
		));
	}

	public function actionUpdate()
	{
		$model = $this->loadModel();
		$model2 = $this->loadModel($this->modelName2, $model->profile->id);

		if (isset($_POST[$this->modelName], $_POST[$this->modelName2])) {
			$model->attributes = $_POST[$this->modelName];
			$model2->attributes = $_POST[$this->modelName2];

			$valid = $model->validate();
			$valid = $model2->validate() && $valid;

			if ($valid) {
				$model->save();
				$model2->save();
				$this->redirect(array('view','id' => $model->id));
			}
		}
		$this->render($this->action->id,array(
			'model' => $model,
			'model2' => $model2,
		));
	}
}
