<?php

/**
 * This is the model class for table "tbl_bacluong".
 *
 * The followings are the available columns in table 'tbl_bacluong':
 * @property integer $bacluong_id
 * @property string $bacluong_ma
 * @property string $bacluong_sotien
 * @property string $bacluong_ghichu
 * @property string $bacluong_hienthi
 * @property integer $admin_id
 *
 * The followings are the available model relations:
 * @property NhanvienLuong[] $nhanvienLuongs
 * @property Tinhluong[] $tinhluongs
 */
class Bacluong extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bacluong the static model class
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
		return 'tbl_bacluong';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bacluong_sotien', 'required'),
			array('admin_id', 'numerical', 'integerOnly'=>true),
			array('bacluong_ma', 'length', 'max'=>16),
			array('bacluong_sotien', 'length', 'max'=>10),
			array('bacluong_ghichu', 'length', 'max'=>255),
			array('bacluong_hienthi', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('bacluong_id, bacluong_ma, bacluong_sotien, bacluong_ghichu, bacluong_hienthi, admin_id', 'safe', 'on'=>'search'),
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
			'nhanvienLuongs' => array(self::HAS_MANY, 'NhanvienLuong', 'bacluong_id'),
			'tinhluongs' => array(self::HAS_MANY, 'Tinhluong', 'bacluong_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'bacluong_id' => 'Bậc lương',
			'bacluong_ma' => 'Mã bậc lương',
			'bacluong_sotien' => 'Số tiền',
			'bacluong_ghichu' => 'Ghi chú',
			'bacluong_hienthi' => 'Hiện thị',
			'admin_id' => 'Admin',
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

		$criteria->compare('bacluong_id',$this->bacluong_id);
		$criteria->compare('bacluong_ma',$this->bacluong_ma,true);
		$criteria->compare('bacluong_sotien',$this->bacluong_sotien,true);
		$criteria->compare('bacluong_ghichu',$this->bacluong_ghichu,true);
		$criteria->compare('bacluong_hienthi',$this->bacluong_hienthi,true);
		$criteria->compare('admin_id',$this->admin_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}