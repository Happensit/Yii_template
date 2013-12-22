<?php
class LoginAction extends CAction
{
	public function run()
	{
		$this->controller->layout = '//layouts/columns/front';
		if (!Yii::app()->user->isAdmin()) {
			$this->controller->model = new UserLogin;
			if(isset($_POST['UserLogin'])) { // collect user input data
				$this->controller->model->attributes = $_POST['UserLogin'];
				if ($this->controller->model->validate()) { // validate user input and redirect to previous page if valid
					$this->controller->model->lastLogin();
					$this->controller->redirect(Yii::app()->user->returnUrl);
				}
			}
			$this->controller->render('login');
		} else {
			$this->controller->redirect(Yii::app()->user->returnUrl);
		}
	}
}