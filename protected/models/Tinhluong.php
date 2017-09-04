<?php

/**
 * This is the model class for table "tbl_tinhluong".
 *
 * The followings are the available columns in table 'tbl_tinhluong':
 * @property integer $luong_id
 * @property integer $nhanvien_luong_id
 * @property integer $nhanvien_id
 * @property integer $bacluong_id
 * @property integer $luong_thang
 * @property integer $luong_nam
 * @property string $luong_congthuc
 * @property double $luong_ngaycong_thang
 * @property double $luong_ngaycong_thucte
 * @property double $luong_nghi_cophpep
 * @property double $luong_nghi_khongphep
 * @property double $luong_ngay_ditre
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
 * @property string $luong_com_ngay
 * @property string $luong_com_thanhtien
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
 * @property integer $luong_ngaytinh
 * @property integer $admin_id
 *
 * The followings are the available model relations:
 * @property Nhanvien $nhanvien
 * @property Bacluong $bacluong
 * @property NhanvienLuong $nhanvienLuong
 */
class Tinhluong extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tinhluong the static model class
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
		return 'tbl_tinhluong';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nhanvien_id, bacluong_id', 'required'),
			array('nhanvien_luong_id, nhanvien_id, bacluong_id, luong_thang, luong_nam, luong_ngaytinh, admin_id', 'numerical', 'integerOnly'=>true),
			array('luong_ngaycong_thang, luong_ngaycong_thucte, luong_nghi_cophpep, luong_nghi_khongphep, luong_ngay_ditre', 'numerical'),
			array('luong_congthuc, luong_ghichu', 'length', 'max'=>255),
			array('luong_coban, luong_coban_thucte, luong_trachnhiem, luong_chuyencan_phantram, luong_chuyencan, luong_dochai, luong_xe, luong_guixe, luong_dienthoai, luong_thuenha, luong_com_ngay, luong_com_thanhtien, luong_taynghe, luong_doanhso, luong_ngoaigio_150, luong_ngoaigio_195, luong_ngoaigio_200, luong_ngoaigio_300, luong_ngoaigio_thanhtien, luong_thamnien, luong_cong_khac, luong_baohiem, luong_tru_doanphi, luong_tru_thunhap, luong_tru_khac, luong_tongcong, luong_thuclanh', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('luong_id, nhanvien_luong_id, nhanvien_id, bacluong_id, luong_thang, luong_nam, luong_congthuc, luong_ngaycong_thang, luong_ngaycong_thucte, luong_nghi_cophpep, luong_nghi_khongphep, luong_ngay_ditre, luong_coban, luong_coban_thucte, luong_trachnhiem, luong_chuyencan_phantram, luong_chuyencan, luong_dochai, luong_xe, luong_guixe, luong_dienthoai, luong_thuenha, luong_com_ngay, luong_com_thanhtien, luong_taynghe, luong_doanhso, luong_ngoaigio_150, luong_ngoaigio_195, luong_ngoaigio_200, luong_ngoaigio_300, luong_ngoaigio_thanhtien, luong_thamnien, luong_cong_khac, luong_baohiem, luong_tru_doanphi, luong_tru_thunhap, luong_tru_khac, luong_tongcong, luong_thuclanh, luong_ghichu, luong_ngaytinh, admin_id', 'safe', 'on'=>'search'),
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
			'nhanvienLuong' => array(self::BELONGS_TO, 'NhanvienLuong', 'nhanvien_luong_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'luong_id' => 'Luong',
			'nhanvien_luong_id' => 'Nhanvien Luong',
			'nhanvien_id' => 'Nhanvien',
			'bacluong_id' => 'Bacluong',
			'luong_thang' => 'Luong Thang',
			'luong_nam' => 'Luong Nam',
			'luong_congthuc' => 'Luong Congthuc',
			'luong_ngaycong_thang' => 'Luong Ngaycong Thang',
			'luong_ngaycong_thucte' => 'Luong Ngaycong Thucte',
			'luong_nghi_cophpep' => 'Luong Nghi Cophpep',
			'luong_nghi_khongphep' => 'Luong Nghi Khongphep',
			'luong_ngay_ditre' => 'Luong Ngay Ditre',
			'luong_coban' => 'Luong Coban',
			'luong_coban_thucte' => 'Luong Coban Thucte',
			'luong_trachnhiem' => 'Luong Trachnhiem',
			'luong_chuyencan_phantram' => 'Luong Chuyencan Phantram',
			'luong_chuyencan' => 'Luong Chuyencan',
			'luong_dochai' => 'Luong Dochai',
			'luong_xe' => 'Luong Xe',
			'luong_guixe' => 'Luong Guixe',
			'luong_dienthoai' => 'Luong Dienthoai',
			'luong_thuenha' => 'Luong Thuenha',
			'luong_com_ngay' => 'Luong Com Ngay',
			'luong_com_thanhtien' => 'Luong Com Thanhtien',
			'luong_taynghe' => 'Luong Taynghe',
			'luong_doanhso' => 'Luong Doanhso',
			'luong_ngoaigio_150' => 'Luong Ngoaigio 150',
			'luong_ngoaigio_195' => 'Luong Ngoaigio 195',
			'luong_ngoaigio_200' => 'Luong Ngoaigio 200',
			'luong_ngoaigio_300' => 'Luong Ngoaigio 300',
			'luong_ngoaigio_thanhtien' => 'Luong Ngoaigio Thanhtien',
			'luong_thamnien' => 'Luong Thamnien',
			'luong_cong_khac' => 'Luong Cong Khac',
			'luong_baohiem' => 'Luong Baohiem',
			'luong_tru_doanphi' => 'Luong Tru Doanphi',
			'luong_tru_thunhap' => 'Luong Tru Thunhap',
			'luong_tru_khac' => 'Luong Tru Khac',
			'luong_tongcong' => 'Luong Tongcong',
			'luong_thuclanh' => 'Luong Thuclanh',
			'luong_ghichu' => 'Luong Ghichu',
			'luong_ngaytinh' => 'Luong Ngaytinh',
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

		$criteria->compare('luong_id',$this->luong_id);
		$criteria->compare('nhanvien_luong_id',$this->nhanvien_luong_id);
		$criteria->compare('nhanvien_id',$this->nhanvien_id);
		$criteria->compare('bacluong_id',$this->bacluong_id);
		$criteria->compare('luong_thang',$this->luong_thang);
		$criteria->compare('luong_nam',$this->luong_nam);
		$criteria->compare('luong_congthuc',$this->luong_congthuc,true);
		$criteria->compare('luong_ngaycong_thang',$this->luong_ngaycong_thang);
		$criteria->compare('luong_ngaycong_thucte',$this->luong_ngaycong_thucte);
		$criteria->compare('luong_nghi_cophpep',$this->luong_nghi_cophpep);
		$criteria->compare('luong_nghi_khongphep',$this->luong_nghi_khongphep);
		$criteria->compare('luong_ngay_ditre',$this->luong_ngay_ditre);
		$criteria->compare('luong_coban',$this->luong_coban,true);
		$criteria->compare('luong_coban_thucte',$this->luong_coban_thucte,true);
		$criteria->compare('luong_trachnhiem',$this->luong_trachnhiem,true);
		$criteria->compare('luong_chuyencan_phantram',$this->luong_chuyencan_phantram,true);
		$criteria->compare('luong_chuyencan',$this->luong_chuyencan,true);
		$criteria->compare('luong_dochai',$this->luong_dochai,true);
		$criteria->compare('luong_xe',$this->luong_xe,true);
		$criteria->compare('luong_guixe',$this->luong_guixe,true);
		$criteria->compare('luong_dienthoai',$this->luong_dienthoai,true);
		$criteria->compare('luong_thuenha',$this->luong_thuenha,true);
		$criteria->compare('luong_com_ngay',$this->luong_com_ngay,true);
		$criteria->compare('luong_com_thanhtien',$this->luong_com_thanhtien,true);
		$criteria->compare('luong_taynghe',$this->luong_taynghe,true);
		$criteria->compare('luong_doanhso',$this->luong_doanhso,true);
		$criteria->compare('luong_ngoaigio_150',$this->luong_ngoaigio_150,true);
		$criteria->compare('luong_ngoaigio_195',$this->luong_ngoaigio_195,true);
		$criteria->compare('luong_ngoaigio_200',$this->luong_ngoaigio_200,true);
		$criteria->compare('luong_ngoaigio_300',$this->luong_ngoaigio_300,true);
		$criteria->compare('luong_ngoaigio_thanhtien',$this->luong_ngoaigio_thanhtien,true);
		$criteria->compare('luong_thamnien',$this->luong_thamnien,true);
		$criteria->compare('luong_cong_khac',$this->luong_cong_khac,true);
		$criteria->compare('luong_baohiem',$this->luong_baohiem,true);
		$criteria->compare('luong_tru_doanphi',$this->luong_tru_doanphi,true);
		$criteria->compare('luong_tru_thunhap',$this->luong_tru_thunhap,true);
		$criteria->compare('luong_tru_khac',$this->luong_tru_khac,true);
		$criteria->compare('luong_tongcong',$this->luong_tongcong,true);
		$criteria->compare('luong_thuclanh',$this->luong_thuclanh,true);
		$criteria->compare('luong_ghichu',$this->luong_ghichu,true);
		$criteria->compare('luong_ngaytinh',$this->luong_ngaytinh);
		$criteria->compare('admin_id',$this->admin_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}