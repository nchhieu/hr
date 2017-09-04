<?php

/**
 * This is the model class for table "tbl_chucdanh".
 *
 * The followings are the available columns in table 'tbl_chucdanh':
 * @property integer $chucdanh_id
 * @property integer $bophan_id
 * @property string $chucdanh_ma
 * @property string $chucdanh_ten
 * @property string $chucdanh_ghichu
 * @property string $chucdanh_hienthi
 * @property integer $admin_id
 *
 * The followings are the available model relations:
 * @property Bophan $bophan
 * @property Nhanvien[] $nhanviens
 * @property NhanvienHopdong[] $nhanvienHopdongs
 */
class Chucdanh extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Chucdanh the static model class
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
		return 'tbl_chucdanh';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bophan_id, admin_id', 'numerical', 'integerOnly'=>true),
			array('chucdanh_ma', 'length', 'max'=>16),
			array('chucdanh_ten, chucdanh_ghichu', 'length', 'max'=>255),
			array('chucdanh_hienthi', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('chucdanh_id, bophan_id, chucdanh_ma, chucdanh_ten, chucdanh_ghichu, chucdanh_hienthi, admin_id', 'safe', 'on'=>'search'),
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
			'nhanviens' => array(self::HAS_MANY, 'Nhanvien', 'chucdanh_id'),
			'nhanvienHopdongs' => array(self::HAS_MANY, 'NhanvienHopdong', 'chucdanh_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'chucdanh_id' => 'Chức danh',
			'bophan_id' => 'Bộ phận',
			'chucdanh_ma' => 'Chức danh',
			'chucdanh_ten' => 'Tên chức danh',
			'chucdanh_ghichu' => 'Ghi chú',
			'chucdanh_hienthi' => 'Hiện thị',
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

		$criteria->compare('chucdanh_id',$this->chucdanh_id);
		$criteria->compare('bophan_id',$this->bophan_id);
		$criteria->compare('chucdanh_ma',$this->chucdanh_ma,true);
		$criteria->compare('chucdanh_ten',$this->chucdanh_ten,true);
		$criteria->compare('chucdanh_ghichu',$this->chucdanh_ghichu,true);
		$criteria->compare('chucdanh_hienthi',$this->chucdanh_hienthi,true);
		$criteria->compare('admin_id',$this->admin_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}