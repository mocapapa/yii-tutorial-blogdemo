<?php

class Post extends CActiveRecord
{
	const STATUS_DRAFT=0;
	const STATUS_PUBLISHED=1;
	const STATUS_ARCHIVED=2;

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
			array('title, content, status', 'required'),
			array('title', 'length', 'max'=>128),
			array('status', 'in', 'range'=>array(0, 1, 2)),
		);
	}

	/**
	 * @return array attributes that can be massively assigned
	 */
	public function safeAttributes()
	{
		return array(
			'title',
			'content',
			'status',
			'authorId',
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'author'=>array(self::BELONGS_TO, 'User', 'authorId'),
		);
	}

	/**
	 * @return array post status names indexed by status IDs
	 */
	public function getStatusOptions()
	{
		return array(
			self::STATUS_DRAFT=>'Draft',
			self::STATUS_PUBLISHED=>'Published',
			self::STATUS_ARCHIVED=>'Archived',
		);
	}

	/**
	 * @return string the status display for the current post
	 */
	public function getStatusText()
	{
		$options=$this->statusOptions;
		return isset($options[$this->status]) ? $options[$this->status] : "unknown ({$this->status})";
	}

	/**
	 * Prepares attributes before performing validation.
	 */
	protected function beforeValidate($on)
	{
		$parser=new CMarkdownParser;
		$this->contentDisplay=$parser->safeTransform($this->content);
		if($this->isNewRecord)
		{
			$this->createTime=$this->updateTime=time();
			$this->authorId=Yii::app()->user->id;
			// print_r($this); exit;
			// print_r($_SESSION); exit;
		}
		else
			$this->updateTime=time();
		return true;
	}

}