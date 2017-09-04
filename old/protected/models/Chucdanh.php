<?php

/**
 * This is the model class for table "tbl_chucdanh".
 *
 * The followings are the available columns in table 'tbl_chucdanh':
 * @property integer $chucdanh_id
 * @property string $chucdanh_ma
 * @property string $chucdanh_ten
 * @property string $chucdanh_ghichu
 * @property integer $chucdanh_hienthi
 * @property string $nhanvien_id
 *
 * The followings are the available model relations:
 * @property Nhanvien[] $nhanviens
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
			array('chucdanh_hienthi', 'numerical', 'integerOnly'=>true),
			array('chucdanh_ma', 'length', 'max'=>20),
			array('chucdanh_ten, nhanvien_id', 'length', 'max'=>50),
			array('chucdanh_ghichu', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('chucdanh_id, chucdanh_ma, chucdanh_ten, chucdanh_ghichu, chucdanh_hienthi, nhanvien_id', 'safe', 'on'=>'search'),
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
			'nhanviens' => array(self::HAS_MANY, 'Nhanvien', 'chucdanh_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'chucdanh_id' => 'ID',
			'chucdanh_ma' => 'Mã',
			'chucdanh_ten' => 'Tên chức danh',
			'chucdanh_ghichu' => 'Ghi chú',
			'chucdanh_hienthi' => 'Hiện thị',
			'nhanvien_id' => 'Nhân viên',
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
		$criteria->compare('chucdanh_ma',$this->chucdanh_ma,true);
		$criteria->compare('chucdanh_ten',$this->chucdanh_ten,true);
		$criteria->compare('chucdanh_ghichu',$this->chucdanh_ghichu,true);
		$criteria->compare('chucdanh_hienthi',$this->chucdanh_hienthi);
		$criteria->compare('nhanvien_id',$this->nhanvien_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}