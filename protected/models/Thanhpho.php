<?php

/**
 * This is the model class for table "tbl_thanhpho".
 *
 * The followings are the available columns in table 'tbl_thanhpho':
 * @property integer $thanhpho_id
 * @property string $thanhpho_ten
 */
class Thanhpho extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Thanhpho the static model class
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
		return 'tbl_thanhpho';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('thanhpho_ten', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('thanhpho_id, thanhpho_ten', 'safe', 'on'=>'search'),
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
			'thanhpho_id' => 'ID',
			'thanhpho_ten' => 'Thành phố',
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

		$criteria->compare('thanhpho_id',$this->thanhpho_id);
		$criteria->compare('thanhpho_ten',$this->thanhpho_ten,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}