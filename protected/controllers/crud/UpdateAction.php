<?php
class UpdateAction extends CAction
{
	public function run()
	{
		$this->controller->model = $this->controller->loadModel();
		if (isset($_POST[$this->controller->modelName])) {
			$this->controller->model->attributes = $_POST[$this->controller->modelName];
			if ($this->controller->model->save()) {
				$this->controller->redirect(array('view','id' => $this->controller->model->id));
			}
		}
		$this->controller->render($this->id);
	}
}