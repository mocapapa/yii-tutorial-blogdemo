<?php

class Post extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'Post':
	 * @var integer $id
	 * @var string $title
	 * @var string $content
	 * @var string $contentDisplay
	 * @var integer $status
	 * @var integer $createTime
	 * @var integer $updateTime
	 * @var integer $authorId
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('title','length','max'=>128),
			array('title, content, status', 'required'),
			array('status, createTime, updateTime', 'numerical', 'integerOnly'=>true),
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
			'author' => array(self::BELONGS_TO, 'User', 'authorId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'title' => 'Title',
			'content' => 'Content',
			'contentDisplay' => 'Content Display',
			'status' => 'Status',
			'createTime' => 'Create Time',
			'updateTime' => 'Update Time',
			'authorId' => 'Author',
		);
	}
}