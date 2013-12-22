<?php
class AdminController extends Controller
{
	public $layout = '//layouts/columns/admin'; // setting module layout.

	public $indexModel = TRUE;

	public $roles = array('admin');

	public $extraAccessRules = array();

	public $pageUrl = TRUE;

	public function filters()
	{
		return CMap::mergeArray(parent::filters(), array(
			'accessControl', // perform access control for CRUD operations
		));
	}

	public function accessRules()
	{
		$accessRules = array();

		/* extra access rules */
		if (!empty($this->extraAccessRules)) {
			foreach ($this->extraAccessRules as $value) {
				$accessRules[] = $value;
			}
		}

		/* CRUD access rules */
		$crudAccessRules = array('allow', // allow authenticated user
			'actions' => $this->crudActions,
			'roles' => $this->roles,
		);
		$accessRules[] = $crudAccessRules;

		/* extra actions access rules */
		if (!empty($this->extraActions)) {
			$extraActionsAccessRules = array('allow',
				'actions' => $this->extraActions,
				'roles' => $this->roles,
			);
			$accessRules[] = $extraActionsAccessRules;
		}

		/* deny access rules */
		$denyAccessRules = array('deny',  // deny all users
			'users'=>array('*'),
		);
		$accessRules[] = $denyAccessRules;

		return $accessRules;
	}
}