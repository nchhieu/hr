<?php

/**
 * This is the model class for table "tbl_nhanvien_hopdong".
 *
 * The followings are the available columns in table 'tbl_nhanvien_hopdong':
 * @property integer $hopdong_id
 * @property integer $nhanvien_id
 * @property integer $bophan_id
 * @property integer $chucdanh_id
 * @property string $hopdong_ma
 * @property string $hopdong_ngaybatdau
 * @property string $hopdong_ngayketthuc
 * @property string $hopdong_thuviec_tungay
 * @property string $hopdong_thuviec_denngay
 * @property integer $hopdong_thoihan
 * @property string $hopdong_mucluong_canban
 * @property string $hopdong_phucap
 * @property string $hopdong_chucdanh
 * @property string $hopdong_chucdanh_en
 * @property string $hopdong_thoigian_lamviec
 * @property string $hopdong_thoigian_lamviec_en
 * @property string $hopdong_mota_congviec
 * @property string $hopdong_mota_congviec_en
 * @property string $hopdong_diadiem_lamviec
 * @property string $hopdong_diadiem_lamviec_en
 * @property string $hopdong_ngaythem
 * @property integer $nguoidung_id
 *
 * The followings are the available model relations:
 * @property Nhanvien $nhanvien
 */
class NhanvienHopdong extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return NhanvienHopdong the static model class
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
		return 'tbl_nhanvien_hopdong';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nhanvien_id, bophan_id, chucdanh_id, hopdong_thoihan, nguoidung_id', 'numerical', 'integerOnly'=>true),
			array('hopdong_ma', 'length', 'max'=>15),
			array('hopdong_mucluong_canban, hopdong_phucap', 'length', 'max'=>9),
			array('hopdong_chucdanh, hopdong_chucdanh_en, hopdong_thoigian_lamviec, hopdong_thoigian_lamviec_en, hopdong_mota_congviec, hopdong_mota_congviec_en, hopdong_diadiem_lamviec_en', 'length', 'max'=>255),
			array('hopdong_diadiem_lamviec', 'length', 'max'=>64),
			array('hopdong_ngaybatdau, hopdong_ngayketthuc, hopdong_thuviec_tungay, hopdong_thuviec_denngay, hopdong_ngaythem', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('hopdong_id, nhanvien_id, bophan_id, chucdanh_id, hopdong_ma, hopdong_ngaybatdau, hopdong_ngayketthuc, hopdong_thuviec_tungay, hopdong_thuviec_denngay, hopdong_thoihan, hopdong_mucluong_canban, hopdong_phucap, hopdong_chucdanh, hopdong_chucdanh_en, hopdong_thoigian_lamviec, hopdong_thoigian_lamviec_en, hopdong_mota_congviec, hopdong_mota_congviec_en, hopdong_diadiem_lamviec, hopdong_diadiem_lamviec_en, hopdong_ngaythem, nguoidung_id', 'safe', 'on'=>'search'),
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
			'nhanvien' => array(self::BELONGS_TO, 'Nhanvien', 'nhanvien_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'hopdong_id' => 'Hợp đồng',
			'nhanvien_id' => 'Nhân viên',
			'bophan_id' => 'Bộ phận',
			'chucdanh_id' => 'Chức danh',
			'hopdong_ma' => 'Mã hợp đồng',
			'hopdong_ngaybatdau' => 'Ngày bắt đầu',
			'hopdong_ngayketthuc' => 'Ngày kết thúc',
			'hopdong_thuviec_tungay' => 'Thử việc từ ngày',
			'hopdong_thuviec_denngay' => 'Thử việc đến ngày',
			'hopdong_thoihan' => 'Thời hạn',
			'hopdong_mucluong_canban' => 'Lương căn bản',
			'hopdong_phucap' => 'Phụ cấp',
			'hopdong_chucdanh' => 'Chức danh',
			'hopdong_chucdanh_en' => 'Chức danh (English)',
			'hopdong_thoigian_lamviec' => 'Thời gian làm việc',
			'hopdong_thoigian_lamviec_en' => 'Thời gian làm việc (English)',
			'hopdong_mota_congviec' => 'Mô tả công việc',
			'hopdong_mota_congviec_en' => 'Mô tả công việc (English)',
			'hopdong_diadiem_lamviec' => 'Địa điểm làm việc',
			'hopdong_diadiem_lamviec_en' => 'Địa điểm làm việc (English)',
			'hopdong_ngaythem' => 'Ngày thêm',
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

		$criteria->compare('hopdong_id',$this->hopdong_id);
		$criteria->compare('nhanvien_id',$this->nhanvien_id);
		$criteria->compare('bophan_id',$this->bophan_id);
		$criteria->compare('chucdanh_id',$this->chucdanh_id);
		$criteria->compare('hopdong_ma',$this->hopdong_ma,true);
		$criteria->compare('hopdong_ngaybatdau',$this->hopdong_ngaybatdau,true);
		$criteria->compare('hopdong_ngayketthuc',$this->hopdong_ngayketthuc,true);
		$criteria->compare('nguoidung_id',$this->nguoidung_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}