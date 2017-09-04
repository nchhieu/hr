<?php

/**
 * This is the model class for table "tbl_phongban".
 *
 * The followings are the available columns in table 'tbl_phongban':
 * @property integer $phongban_id
 * @property integer $bophan_id
 * @property string $phongban_ten
 * @property string $phongban_trangthai
 * @property integer $admin_id
 *
 * The followings are the available model relations:
 * @property Bophan $bophan
 */
class Phongban extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Phongban the static model class
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
		return 'tbl_phongban';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('phongban_ten', 'required'),
			array('bophan_id, admin_id', 'numerical', 'integerOnly'=>true),
			array('phongban_ten', 'length', 'max'=>255),
			array('phongban_trangthai', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('bophan_id, phongban_ten, phongban_trangthai, admin_id', 'safe', 'on'=>'search'),
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
			'bophan' => array(self::BELONGS_TO, 'Bophan', 'bophan_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'phongban_id' => 'Phòng Ban',
			'bophan_id' => 'Bộ phận',
			'phongban_ten' => 'Phòng ban',
			'phongban_trangthai' => 'Trạng thái',
			'admin_id' => 'Người nhập',
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

		$criteria->compare('phongban_id',$this->phongban_id);
		$criteria->compare('bophan_id',$this->bophan_id);
		$criteria->compare('phongban_ten',$this->phongban_ten,true);
		$criteria->compare('phongban_trangthai',$this->phongban_trangthai,true);
		$criteria->compare('admin_id',$this->admin_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}