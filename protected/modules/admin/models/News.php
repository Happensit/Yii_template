<?php

/**
 * This is the model class for table "{{news}}".
 *
 * The followings are the available columns in table '{{news}}':
 * @property integer $id
 * @property string $date
 * @property string $title
 * @property string $content
 * @property integer $is_visible
 * @property string $created
 * @property integer $creator_id
 *
 * The followings are the available model relations:
 * @property Users $creator
 */
class News extends CActiveRecord
{
	public $messageFile = 'news';

	public $upload_file;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{news}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date, title, content, creator_id', 'required'),
			array('is_visible', 'numerical', 'integerOnly' => true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, date, title, content, is_visible, created, creator_id', 'safe', 'on'=>'search'),
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
			'creator' => array(self::BELONGS_TO, 'User', 'creator_id'),
			'files' => array(self::HAS_ONE, 'NewsFiles', 'news_id'),
		);
	}

	public function scopes()
	{
		return array(
			'is_visible' => array(
				'condition' => 'is_visible=1',
			),
		);
	}
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'date' => Yii::t('AdminModule.'.$this->messageFile, 'Date'),
			'title' => Yii::t('AdminModule.'.$this->messageFile, 'Title'),
			'content' => Yii::t('AdminModule.'.$this->messageFile, 'Content'),
			'is_visible' => Yii::t('AdminModule.'.$this->messageFile, 'Is Visible'),
			'created' => Yii::t('AdminModule.'.$this->messageFile, 'Created'),
			'creator_id' => Yii::t('AdminModule.'.$this->messageFile, 'Creator'),
			'creator.username' => Yii::t('AdminModule.'.$this->messageFile, 'Creator'),
			'upload_file' => Yii::t('AdminModule.'.$this->messageFile, 'Upload File'),
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
		$criteria->compare('date', $this->date,true);
		$criteria->compare('title', $this->title,true);
		$criteria->compare('content', $this->content,true);
		$criteria->compare('is_visible', $this->is_visible);
		$criteria->compare('created', $this->created,true);
		$criteria->compare('creator_id', $this->creator_id);
		$criteria->with = array('creator', 'files');

		if (empty(Yii::app()->controller->module)) {
			$criteria->scopes = 'is_visible';
		}
		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
			'pagination' => array(
				'pageSize' => Yii::app()->controller->pageSize,
				'pageVar' => 'page',
			),
			'sort' => array(
				'defaultOrder' => array(
					'date' => CSort::SORT_DESC,
				),
				'sortVar' => 'sort',
			),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return News the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function behaviors()
	{
		return array(
			'UploadBehavior' => array(
				'class' => 'andystrap.behaviors.UploadBehavior',
				'attribute' => 'upload_file',
				'mode' => 'two',
				'modelName' => 'NewsFiles',
				'deleteOptions' => array('files', 'path'),
			)
		);
	}
}
