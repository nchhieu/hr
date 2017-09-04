<?php

/**
 * This is the model class for table "tbl_nhanvien_nghi".
 *
 * The followings are the available columns in table 'tbl_nhanvien_nghi':
 * @property string $nghi_id
 * @property string $nhanvien_id
 * @property integer $nghi_loai
 * @property string $nghi_ngay_xin_nghi
 * @property string $nghi_ngaybatdau
 * @property string $nghi_ngaydilamlai
 * @property integer $nghi_phep
 * @property integer $nghi_chedo
 * @property string $nghi_nv_the_viec
 * @property string $nghi_lydo
 * @property integer $nghi_so_buoi
 * @property string $nghi_ngay_them
 * @property integer $nguoidung_id
 */
class NhanvienNghi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return NhanvienNghi the static model class
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
		return 'tbl_nhanvien_nghi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nhanvien_id', 'required'),
			array('nghi_loai, nghi_phep, nghi_chedo, nghi_so_buoi, nguoidung_id', 'numerical', 'integerOnly'=>true),
			array('nhanvien_id', 'length', 'max'=>9),
			array('nghi_nv_the_viec, nghi_lydo', 'length', 'max'=>64),
			array('nghi_ngay_xin_nghi, nghi_ngaybatdau, nghi_ngaydilamlai, nghi_ngay_them', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nghi_id, nhanvien_id, nghi_loai, nghi_ngay_xin_nghi, nghi_ngaybatdau, nghi_ngaydilamlai, nghi_phep, nghi_chedo, nghi_nv_the_viec, nghi_lydo, nghi_so_buoi, nghi_ngay_them, nguoidung_id', 'safe', 'on'=>'search'),
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
			'nghi_id' => 'ID',
			'nhanvien_id' => 'Nhân viên',
			'nghi_loai' => 'Nghỉ',
			'nghi_ngay_xin_nghi' => 'Ngày xin nghỉ',
			'nghi_ngaybatdau' => 'Ngày bắt đầu',
			'nghi_ngaydilamlai' => 'Ngày đi làm lại',
			'nghi_phep' => 'Phép',
			'nghi_chedo' => 'Chế độ',
			'nghi_nv_the_viec' => 'Nhân viên thế việc',
			'nghi_lydo' => 'Lý do',
			'nghi_so_buoi' => 'Số buổi',
			'nghi_ngay_them' => 'Ngày nhập',
			'nguoidung_id' => 'Người dùng',
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

		$criteria->compare('nghi_id',$this->nghi_id,true);
		$criteria->compare('nhanvien_id',$this->nhanvien_id,true);
		$criteria->compare('nghi_loai',$this->nghi_loai);
		$criteria->compare('nghi_ngay_xin_nghi',$this->nghi_ngay_xin_nghi,true);
		$criteria->compare('nghi_ngaybatdau',$this->nghi_ngaybatdau,true);
		$criteria->compare('nghi_ngaydilamlai',$this->nghi_ngaydilamlai,true);
		$criteria->compare('nghi_phep',$this->nghi_phep);
		$criteria->compare('nghi_chedo',$this->nghi_chedo);
		$criteria->compare('nghi_nv_the_viec',$this->nghi_nv_the_viec,true);
		$criteria->compare('nghi_lydo',$this->nghi_lydo,true);
		$criteria->compare('nghi_so_buoi',$this->nghi_so_buoi);
		$criteria->compare('nghi_ngay_them',$this->nghi_ngay_them,true);
		$criteria->compare('nguoidung_id',$this->nguoidung_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}