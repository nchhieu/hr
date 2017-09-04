<?php

/**
 * This is the model class for table "tbl_nhanvien_luong".
 *
 * The followings are the available columns in table 'tbl_nhanvien_luong':
 * @property integer $luong_id
 * @property integer $nhanvien_id
 * @property integer $bacluong_id
 * @property integer $luong_thang
 * @property integer $luong_nam
 * @property integer $luong_ngaycong_thang
 * @property string $luong_ngaycong
 * @property string $luong_coban
 * @property string $luong_coban_thucte
 * @property string $luong_trachnhiem
 * @property string $luong_chuyencan_phantram
 * @property string $luong_chuyencan
 * @property string $luong_dochai
 * @property string $luong_xe
 * @property string $luong_guixe
 * @property string $luong_dienthoai
 * @property string $luong_thuenha
 * @property string $luong_com
 * @property string $luong_taynghe
 * @property string $luong_doanhso
 * @property string $luong_ngoaigio_150
 * @property string $luong_ngoaigio_195
 * @property string $luong_ngoaigio_200
 * @property string $luong_ngoaigio_300
 * @property string $luong_ngoaigio_thanhtien
 * @property string $luong_thamnien
 * @property string $luong_cong_khac
 * @property string $luong_baohiem
 * @property string $luong_tru_doanphi
 * @property string $luong_tru_thunhap
 * @property string $luong_tru_khac
 * @property string $luong_tongcong
 * @property string $luong_thuclanh
 * @property string $luong_ghichu
 * @property string $luong_ngaytinh
 * @property string $nguoidung_id
 *
 * The followings are the available model relations:
 * @property Nhanvien $nhanvien
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
			array('nhanvien_id, bacluong_id, luong_thang, luong_nam, luong_ngaycong_thang', 'numerical', 'integerOnly'=>true),
			array('luong_ngaycong, luong_coban, luong_coban_thucte, luong_trachnhiem, luong_chuyencan, luong_dochai, luong_xe, luong_guixe, luong_dienthoai, luong_thuenha, luong_com, luong_taynghe, luong_doanhso, luong_ngoaigio_150, luong_ngoaigio_195, luong_ngoaigio_200, luong_ngoaigio_300, luong_ngoaigio_thanhtien, luong_thamnien, luong_cong_khac, luong_baohiem, luong_tru_doanphi, luong_tru_thunhap, luong_tru_khac, luong_tongcong, luong_thuclanh', 'length', 'max'=>10),
			array('luong_chuyencan_phantram', 'length', 'max'=>4),
			array('luong_ghichu', 'length', 'max'=>64),
			array('nguoidung_id', 'length', 'max'=>50),
			array('luong_ngaytinh', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('luong_id, nhanvien_id, bacluong_id, luong_thang, luong_nam, luong_ngaycong_thang, luong_ngaycong, luong_coban, luong_coban_thucte, luong_trachnhiem, luong_chuyencan_phantram, luong_chuyencan, luong_dochai, luong_xe, luong_guixe, luong_dienthoai, luong_thuenha, luong_com, luong_taynghe, luong_doanhso, luong_ngoaigio_150, luong_ngoaigio_195, luong_ngoaigio_200, luong_ngoaigio_300, luong_ngoaigio_thanhtien, luong_thamnien, luong_cong_khac, luong_baohiem, luong_tru_doanphi, luong_tru_thunhap, luong_tru_khac, luong_tongcong, luong_thuclanh, luong_ghichu, luong_ngaytinh, nguoidung_id', 'safe', 'on'=>'search'),
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
			'luong_id' => 'ID',
			'nhanvien_id' => 'Nhân viên',
			'bacluong_id' => 'Bậc lương',
			'luong_thang' => 'Tháng',
			'luong_nam' => 'Năm',
			'luong_ngaycong_thang' => 'Ngày công tháng',
			'luong_ngaycong' => 'Ngày công',
			'luong_coban' => 'Cơ bản',
			'luong_coban_thucte' => 'cơ bản thực tế',
			'luong_trachnhiem' => 'Trách nhiệm',
			'luong_chuyencan_phantram' => 'Chuyên cần %',
			'luong_chuyencan' => 'Chuyên cần',
			'luong_dochai' => 'Độc hại',
			'luong_xe' => 'Xăng',
			'luong_guixe' => 'Gửi xe',
			'luong_dienthoai' => 'Điện thoại',
			'luong_thuenha' => 'Thuê nhà',
			'luong_com' => 'Cơm',
			'luong_taynghe' => 'Tay nghề',
			'luong_doanhso' => 'Doanh số',
			'luong_ngoaigio_150' => 'Ngoài giờ x 1.5',
			'luong_ngoaigio_195' => 'Ngoài giờ x 1.95',
			'luong_ngoaigio_200' => 'Ngoài giờ x 2',
			'luong_ngoaigio_300' => 'Ngoài giờ x 3',
			'luong_ngoaigio_thanhtien' => 'Ngoài giờ thành tiền',
			'luong_thamnien' => 'Thâm niên',
			'luong_cong_khac' => 'Cộng khác',
			'luong_baohiem' => 'Trừ bào hiểm',
			'luong_tru_doanphi' => 'Đoàn phí',
			'luong_tru_thunhap' => 'Trừ TNCN',
			'luong_tru_khac' => 'Trừ khác',
			'luong_tongcong' => 'Tổng cộng',
			'luong_thuclanh' => 'Thực lãnh',
			'luong_ghichu' => 'Ghi chú',
			'luong_ngaytinh' => 'Ngày tính',
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

		$criteria->compare('luong_id',$this->luong_id);
		$criteria->compare('nhanvien_id',$this->nhanvien_id);
		$criteria->compare('bacluong_id',$this->bacluong_id);
		$criteria->compare('luong_thang',$this->luong_thang);
		$criteria->compare('luong_nam',$this->luong_nam);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}