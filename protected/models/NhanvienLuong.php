<?php

/**
 * This is the model class for table "tbl_nhanvien_luong".
 *
 * The followings are the available columns in table 'tbl_nhanvien_luong':
 * @property integer $nhanvien_luong_id
 * @property integer $nhanvien_id
 * @property integer $bacluong_id
 * @property string $luong_coban
 * @property string $luong_trachnhiem
 * @property string $luong_pt_chuyencan
 
 * @property string $luong_chuyencan
 * @property string $luong_xe
 * @property string $luong_dienthoai

 * @property string $luong_com_ngay
 * @property string $luong_taynghe
 * @property string $luong_cong_khac
 * @property string $luong_tru_khac
 * @property string $luong_tien_baohiem
 * @property string $luong_tru_doanphi
 * @property string $luong_phuthuoc_giacanh
 * @property string $luong_ngaynghi_chophep
 * @property string $luong_ditre_chophep
 * @property string $luong_ngaythem
 * @property integer $admin_id
 *
 * The followings are the available model relations:
 * @property Nhanvien $nhanvien
 * @property Bacluong $bacluong
 * @property Tinhluong[] $tinhluongs
 */
class NhanvienLuong extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return NhanvienLuong the static model class
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
		return 'tbl_nhanvien_luong';
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
			array('nhanvien_id, bacluong_id, luong_pt_chuyencan, admin_id,luong_ngaynghi_chophep,luong_ditre_chophep', 'numerical', 'integerOnly'=>true),
			array('luong_coban, luong_trachnhiem, luong_chuyencan, luong_xe, luong_dienthoai,luong_com_ngay, luong_taynghe, luong_cong_khac, luong_tru_khac, luong_tien_baohiem, luong_tru_doanphi, luong_phuthuoc_giacanh', 'length', 'max'=>10),
	

			array('luong_ngaythem', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nhanvien_luong_id, nhanvien_id, luong_pt_chuyencan,bacluong_id, luong_coban, luong_trachnhiem, luong_chuyencan, luong_xe, luong_dienthoai,luong_com_ngay, luong_taynghe,  luong_cong_khac, luong_tru_khac, luong_tien_baohiem, luong_tru_doanphi, luong_phuthuoc_giacanh, luong_ngaynghi_chophep, luong_ditre_chophep, luong_ngaythem, admin_id', 'safe', 'on'=>'search'),
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
			'bacluong' => array(self::BELONGS_TO, 'Bacluong', 'bacluong_id'),
			'tinhluongs' => array(self::HAS_MANY, 'Tinhluong', 'nhanvien_luong_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nhanvien_luong_id' => 'Lương',
			'nhanvien_id' => 'Nhân viên',
			'bacluong_id' => 'Bậc lương',
			'luong_coban' => 'Lương cơ bản',
			'luong_trachnhiem' => 'Trách nhiệm',
			'luong_chuyencan' => 'Chuyên cần',
			'luong_pt_chuyencan' => '% Chuyên cần',
			
			'luong_xe' => 'Xăng',
			'luong_dienthoai' => 'Điện thoại',
			
			
			'luong_com_ngay' => 'Cơm ngày',
			'luong_taynghe' => 'Tay nghề',
			
	
			'luong_cong_khac' => 'Cộng khác',
			'luong_tru_khac' => 'Trừ khác',
			'luong_tien_baohiem' => 'Trừ bảo hiểm',
			'luong_tru_doanphi' => 'Trừ đoàn phí',
			'luong_phuthuoc_giacanh' => 'Giảm trừ gia cảnh',
			'luong_ngaynghi_chophep' => 'Ngày làm việc/tháng',
			'luong_ditre_chophep' => 'Trạng thái',
			'luong_ngaythem' => 'Ngày nhập',
			'admin_id' => 'NV nhập',
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

		$criteria->compare('nhanvien_luong_id',$this->nhanvien_luong_id);
		$criteria->compare('nhanvien_id',$this->nhanvien_id);
		$criteria->compare('bacluong_id',$this->bacluong_id);
		$criteria->compare('luong_coban',$this->luong_coban,true);
		$criteria->compare('luong_trachnhiem',$this->luong_trachnhiem,true);
		$criteria->compare('luong_chuyencan',$this->luong_chuyencan,true);
		
		$criteria->compare('luong_xe',$this->luong_xe,true);
		$criteria->compare('luong_dienthoai',$this->luong_dienthoai,true);
		
	
		$criteria->compare('luong_com_ngay',$this->luong_com_ngay,true);
		$criteria->compare('luong_taynghe',$this->luong_taynghe,true);
	
		
		$criteria->compare('luong_cong_khac',$this->luong_cong_khac,true);
		$criteria->compare('luong_tru_khac',$this->luong_tru_khac,true);
		$criteria->compare('luong_tien_baohiem',$this->luong_tien_baohiem,true);
		$criteria->compare('luong_tru_doanphi',$this->luong_tru_doanphi,true);
		$criteria->compare('luong_phuthuoc_giacanh',$this->luong_phuthuoc_giacanh,true);
		$criteria->compare('luong_ngaynghi_chophep',$this->luong_ngaynghi_chophep,true);
		$criteria->compare('luong_ditre_chophep',$this->luong_ditre_chophep,true);
		$criteria->compare('luong_ngaythem',$this->luong_ngaythem,true);
		$criteria->compare('admin_id',$this->admin_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}