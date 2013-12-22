<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class UserLogin extends CFormModel
{
	public $username;

	public $password;

	public $rememberMe;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			array('username, password', 'required'), // username and password are required
			array('rememberMe', 'boolean'), // rememberMe needs to be a boolean
			array('password', 'authenticate'), // password needs to be authenticated
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'rememberMe'=> Yii::t('AdminModule.user', 'Remember me next time'),
			'username' => Yii::t('AdminModule.user', 'username'),
			'password' => Yii::t('AdminModule.user', 'password'),
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute, $params)
	{
		if(!$this->hasErrors())
		{
			$identity = new UserIdentity($this->username, $this->password);
			$identity->authenticate();
			switch ($identity->errorCode)
			{
				case UserIdentity::ERROR_NONE:
					$duration = $this->rememberMe ? Yii::app()->user->rememberMeTime : 0;
					Yii::app()->user->login($identity, $duration);
					break;

				case UserIdentity::ERROR_USERNAME_INVALID:
					$this->addError('username', Yii::t('AdminModule.user', 'Username or Password is incorrect.'));
					$this->addError('password', Yii::t('AdminModule.user', 'Username or Password is incorrect.'));
					break;

				case UserIdentity::ERROR_STATUS_NOT_ACTIVE:
					$this->addError('username', Yii::t('AdminModule.user', 'You account is not activated.'));
					break;

				case UserIdentity::ERROR_PASSWORD_INVALID:
					$this->addError('username', Yii::t('AdminModule.user', 'Username or Password is incorrect.'));
					$this->addError('password', Yii::t('AdminModule.user', 'Username or Password is incorrect.'));
					break;
			}
		}
	}

	public function lastLogin() {
		$loginUser = User::model()->findByPk(Yii::app()->user->id);
		$loginUser->last_login = date('Y-m-d H:i:s');
		$loginUser->save();
	}
}
