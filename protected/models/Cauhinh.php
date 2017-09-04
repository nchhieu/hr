<?php

/**
 * This is the model class for table "tbl_cauhinh".
 *
 * The followings are the available columns in table 'tbl_cauhinh':
 * @property string $cauhinh_key
 * @property string $cauhinh_giatri
 * @property string $cauhinh_mota
 */
class Cauhinh extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cauhinh the static model class
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
		return 'tbl_cauhinh';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cauhinh_key, cauhinh_giatri', 'required'),
			array('cauhinh_key', 'length', 'max'=>64),
			array('cauhinh_giatri, cauhinh_mota', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cauhinh_key, cauhinh_giatri, cauhinh_mota', 'safe', 'on'=>'search'),
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
			'cauhinh_key' => 'Key',
			'cauhinh_giatri' => 'Giá trị',
			'cauhinh_mota' => 'Mô tả cài đặt',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('cauhinh_key',$this->cauhinh_key,true);
		$criteria->compare('cauhinh_giatri',$this->cauhinh_giatri,true);
		$criteria->compare('cauhinh_mota',$this->cauhinh_mota,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}