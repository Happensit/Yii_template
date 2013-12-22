<?php

/**
 * This is the model class for table "{{users}}".
 *
 * The followings are the available columns in table '{{users}}':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property integer $role_id
 * @property integer $is_active
 * @property string $last_login
 * @property string $created
 */
class User extends CActiveRecord
{
	public $messageFile = 'user';

	public $confirm_password;

	public $new_password;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{users}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		$generalRules = array(
			array('username, password', 'required'),
			array('username', 'match', 'pattern' => '/^[A-Za-z0-9_]+$/u', 'message' => Yii::t('AdminModule.admin', 'Incorrect symbols (a-z A-Z 0-9).')),
			array('username', 'length', 'max' => 20, 'min' => 3),
			array('username', 'unique', 'message' => Yii::t('AdminModule.'.$this->messageFile, 'This user\'s name already exists.')),
			array('password', 'length', 'max'=> 128, 'min' => 4),
			array('role_id, is_active', 'required'),
			array('role_id, is_active', 'numerical', 'integerOnly' => true),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, role_id, is_active, last_login, created', 'safe', 'on' => 'search'),
		);

		$mergeRules['create'] = array(
			array('confirm_password', 'required'),
			array('confirm_password', 'compare', 'compareAttribute'=>'password', 'message' => Yii::t('AdminModule.'.$this->messageFile, 'Confirm Password is incorrect.')),
		);

		$mergeRules['update'] = array(
			array('new_password', 'length', 'max'=> 128, 'min' => 4),
			array('confirm_password', 'compare', 'compareAttribute'=>'new_password', 'message' => Yii::t('AdminModule.'.$this->messageFile, 'Confirm Password is incorrect.')),
		);

		foreach ($mergeRules as $key => $value) {
			if ($key === Yii::app()->controller->action->id) {
				$generalRules = TbArray::merge($generalRules, $value);
			}
		}
		return $generalRules;
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'role' => array(self::BELONGS_TO, 'UserRoles', 'role_id'),
			'profile' => array(self::HAS_ONE, 'UserProfile', 'user_id'),
		);
	}

	public function scopes()
	{
		return array(
			'is_active' => array(
				'condition' => 'is_active=1',
			),
			'not_active' => array(
				'condition' => 'is_active=0',
			),
			'is_admin' => array(
				'condition' => 'role_id=1',
			),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'username' => Yii::t('AdminModule.'.$this->messageFile, 'Username'),
			'password' => Yii::t('AdminModule.'.$this->messageFile, 'Password'),
			'confirm_password' => Yii::t('AdminModule.'.$this->messageFile, 'Confirm Password'),
			'new_password' => Yii::t('AdminModule.'.$this->messageFile, 'New Password'),
			'role_id' => Yii::t('AdminModule.'.$this->messageFile, 'Role'),
			'is_active' => Yii::t('AdminModule.'.$this->messageFile, 'Is Active'),
			'last_login' => Yii::t('AdminModule.'.$this->messageFile, 'Last Login'),
			'created' => Yii::t('AdminModule.'.$this->messageFile, 'Created'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('username', $this->username, true);
		$criteria->compare('password', $this->password, true);
		$criteria->compare('role_id', $this->role_id, true);
		$criteria->compare('is_active', $this->is_active);
		$criteria->compare('last_login', $this->last_login, true);
		$criteria->compare('created', $this->created, true);

		$criteria->with = array('role', 'profile');

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
			'pagination' => array(
				'pageSize' => Yii::app()->controller->pageSize,
				'pageVar' => 'page',
			),
			'sort' => array(
				'sortVar' => 'sort',
			),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function beforeSave()
	{
		if ($this->isNewRecord) {
			$this->password =  AdString::encrypting($this->password);
		}
		if (!empty($this->new_password)) {
			$this->password = AdString::encrypting($this->new_password);
		}
		return parent::beforeSave();
	}

	public function beforeDelete()
	{
		$oldData = $this->findByPk($this->id);
		if (!empty($oldData->profile->image)) {
			$webroot = YiiBase::getPathOfAlias('webroot');
			$oldFilePath = $webroot.$oldData->profile->image;
			array_map('unlink', glob($oldFilePath));
		}
		return parent::beforeDelete();
	}
}
