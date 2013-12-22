<?php

/**
 * This is the model class for table "{{news_files}}".
 *
 * The followings are the available columns in table '{{news_files}}':
 * @property integer $id
 * @property integer $news_id
 * @property string $name
 * @property string $ext
 * @property string $type
 * @property integer $size
 * @property string $filesize
 * @property string $path
 * @property string $created
 *
 * The followings are the available model relations:
 * @property News $news
 */
class NewsFiles extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{news_files}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('news_id, name, ext, size, filesize, path', 'required'),
			array('news_id, size', 'numerical', 'integerOnly' => true),
			array('name, ext, type, filesize, path', 'length', 'max' => 255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, news_id, name, ext, type, size, filesize, path, created', 'safe', 'on' => 'search'),
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
			'news' => array(self::BELONGS_TO, 'News', 'news_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'name' => Yii::t('AdminModule.admin', 'File Name'),
			'ext' => Yii::t('AdminModule.admin', 'Extension'),
			'type' => Yii::t('AdminModule.admin', 'File Type'),
			'size' => Yii::t('AdminModule.admin', 'File Size'),
			'filesize' => Yii::t('AdminModule.admin', 'File Size'),
			'path' => Yii::t('AdminModule.admin', 'File Path'),
			'created' => Yii::t('AdminModule.admin', 'Created'),
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
		$criteria->compare('news_id', $this->news_id);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('ext', $this->ext, true);
		$criteria->compare('type', $this->type, true);
		$criteria->compare('size', $this->size);
		$criteria->compare('filesize', $this->filesize, true);
		$criteria->compare('path', $this->path, true);
		$criteria->compare('created', $this->created, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NewsFiles the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}

	public function beforeDelete()
	{
		$oldData = $this->findByPk($this->id);
		if (!empty($oldData->path)) {
			$webroot = YiiBase::getPathOfAlias('webroot');
			$oldFilePath = $webroot.$oldData->path;
			array_map('unlink', glob($oldFilePath));
		}
		return parent::beforeDelete();
	}
}
