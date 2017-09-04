<?php

/**
 * This is the model class for table "tbl_nguoidung".
 *
 * The followings are the available columns in table 'tbl_nguoidung':
 * @property integer $nguoidung_id
 * @property string $nguoidung_tendangnhap
 * @property string $nguoidung_matkhau
 * @property string $nguoidung_hoten
 * @property string $nguoidung_dienthoai
 * @property string $nguoidung_nhom
 * @property string $nguoidung_phanquyen
 * @property string $nguoidung_ghichu
 * @property string $nguoidung_quantri
 * @property integer $nguoidung_hienthi
 */
class Nguoidung extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Nguoidung the static model class
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
		return 'tbl_nguoidung';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nguoidung_ghichu', 'required'),
			array('nguoidung_hienthi', 'numerical', 'integerOnly'=>true),
			array('nguoidung_tendangnhap, nguoidung_matkhau, nguoidung_hoten, nguoidung_dienthoai', 'length', 'max'=>50),
			array('nguoidung_quantri', 'length', 'max'=>1),
			array('nguoidung_nhom, nguoidung_phanquyen', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nguoidung_id, nguoidung_tendangnhap, nguoidung_matkhau, nguoidung_hoten, nguoidung_dienthoai, nguoidung_nhom, nguoidung_phanquyen, nguoidung_ghichu, nguoidung_quantri, nguoidung_hienthi', 'safe', 'on'=>'search'),
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
			'nguoidung_id' => 'ID',
			'nguoidung_tendangnhap' => 'Tên đăng nhập',
			'nguoidung_matkhau' => 'Mật khẩu',
			'nguoidung_hoten' => 'Họ tên',
			'nguoidung_dienthoai' => 'Điện thoại',
			'nguoidung_nhom' => 'Nhóm',
			'nguoidung_phanquyen' => 'Phân quyền',
			'nguoidung_ghichu' => 'Ghi chú',
			'nguoidung_quantri' => 'Quản trị',
			'nguoidung_hienthi' => 'Hiện thị',
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

		$criteria->compare('nguoidung_id',$this->nguoidung_id);
		$criteria->compare('nguoidung_tendangnhap',$this->nguoidung_tendangnhap,true);
		$criteria->compare('nguoidung_hoten',$this->nguoidung_hoten,true);
		$criteria->compare('nguoidung_nhom',$this->nguoidung_nhom,true);
		$criteria->compare('nguoidung_phanquyen',$this->nguoidung_phanquyen,true);
		$criteria->compare('nguoidung_quantri',$this->nguoidung_quantri,true);
		$criteria->compare('nguoidung_hienthi',$this->nguoidung_hienthi);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}