<?php

/**
 * This is the model class for table "{{user_profile}}".
 *
 * The followings are the available columns in table '{{user_profile}}':
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $cid
 * @property string $birthday
 * @property string $sex
 * @property string $tel
 * @property string $email
 * @property string $address
 * @property string $image
 * @property string $about
 *
 * The followings are the available model relations:
 * @property Users $user
 */
class UserProfile extends CActiveRecord
{
	public $user_id;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user_profile}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id', 'numerical', 'integerOnly' => true),
			array('cid', 'length', 'max' => 10, 'min' => 10),
			array('cid', 'andystrap.validators.CheckIdentity', 'allowEmpty' => true, 'message' => Yii::t('AdminModule.user', 'Identity is incorrect.')),
			array('tel', 'match', 'pattern' => '/^[()0-9- ]+$/u', 'message' => Yii::t('AdminModule.admin', 'Incorrect symbols (0-9 brackets -).')),
			array('email', 'email'),
			array('image', 'file', 'types' => 'jpg, gif, png', 'allowEmpty' => true, 'wrongType' => Yii::t('AdminModule.admin', 'It is only to allow uploading jpg, png, and gif.')),
			array('user_id, name, sex, address, birthday, about, image', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, name, cid, birthday, sex, tel, email, address, image, about', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'name' => Yii::t('AdminModule.user', 'Name'),
			'cid' => Yii::t('AdminModule.user', 'Cid'),
			'birthday' => Yii::t('AdminModule.user', 'Birthday'),
			'sex' => Yii::t('AdminModule.user', 'Sex'),
			'tel' => Yii::t('AdminModule.user', 'Tel'),
			'email' => Yii::t('AdminModule.user', 'Email'),
			'address' => Yii::t('AdminModule.user', 'Address'),
			'image' => Yii::t('AdminModule.user', 'Image'),
			'about' => Yii::t('AdminModule.user', 'About'),
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

		$criteria=new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('user_id', $this->user_id);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('cid', $this->cid, true);
		$criteria->compare('birthday', $this->birthday, true);
		$criteria->compare('sex', $this->sex, true);
		$criteria->compare('tel', $this->tel, true);
		$criteria->compare('email', $this->email, true);
		$criteria->compare('address', $this->address, true);
		$criteria->compare('image', $this->image, true);
		$criteria->compare('about', $this->about, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserProfile the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function beforeSave()
	{
		$this->birthday = !empty($this->birthday) ? $this->birthday : NULL;
		return parent::beforeSave();
	}

	public function behaviors()
	{
		return array(
			'UploadBehavior' => array(
				'class' => 'andystrap.behaviors.UploadBehavior',
				'attribute' => 'image',
			)
		);
	}
}
