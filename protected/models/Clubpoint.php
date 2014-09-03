<?php

/**
 * This is the model class for table "clubpoint".
 *
 * The followings are the available columns in table 'clubpoint':
 * @property string $clubpointId
 * @property integer $clubId
 * @property integer $leagueId
 * @property integer $totalPlusGoal
 * @property integer $totalMinusGoal
 * @property integer $point
 * @property integer $appearance
 */
class Clubpoint extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clubpoint';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('clubId, leagueId, totalPlusGoal, totalMinusGoal, point, appearance', 'required'),
			array('clubId, leagueId, totalPlusGoal, totalMinusGoal, point, appearance', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('clubpointId, clubId, leagueId, totalPlusGoal, totalMinusGoal, point, appearance', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'clubpointId' => 'Clubpoint',
			'clubId' => 'Club',
			'leagueId' => 'League',
			'totalPlusGoal' => 'Total Plus Goal',
			'totalMinusGoal' => 'Total Minus Goal',
			'point' => 'Point',
			'appearance' => 'Appearance',
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

		$criteria->compare('clubpointId',$this->clubpointId,true);
		$criteria->compare('clubId',$this->clubId);
		$criteria->compare('leagueId',$this->leagueId);
		$criteria->compare('totalPlusGoal',$this->totalPlusGoal);
		$criteria->compare('totalMinusGoal',$this->totalMinusGoal);
		$criteria->compare('point',$this->point);
		$criteria->compare('appearance',$this->appearance);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Clubpoint the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
