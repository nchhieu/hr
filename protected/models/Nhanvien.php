<?php

/**
 * This is the model class for table "tbl_nhanvien".
 *
 * The followings are the available columns in table 'tbl_nhanvien':
 * @property integer $nhanvien_id
 * @property string $nhanvien_ma
 * @property integer $bophan_id
 * @property integer $chucdanh_id
 * @property string $nhanvien_ho
 * @property string $nhanvien_ten
 * @property string $nhanvien_mst
 * @property string $nhanvien_cmnd
 * @property string $nhanvien_cmnd_ngaycap
 * @property string $nhanvien_cmnd_noicap
 * @property string $nhanvien_ngaysinh
 * @property string $nhanvien_noisinh
 * @property string $nhanvien_gioitinh
 * @property string $nhanvien_dienthoai
 * @property string $nhanvien_dienthoai_nhonhan
 * @property string $nhanvien_hinhanh
 * @property string $nhanvien_ngayvao
 * @property integer $nhanvien_trangthai
 * @property integer $nhanvien_trangthai_nghiviec
 * @property string $nhanvien_thoigianthu
 * @property string $nhanvien_ngayky_hdld
 * @property string $nhanvien_ngaydangky_baohiem
 * @property string $nhanvien_nganhang
 * @property string $nhanvien_sotaikhoan
 * @property string $nhanvien_ghichu
 * @property string $nhanvien_phepnam
 * @property string $nhanvien_hoten_search
 * @property integer $admin_id
 *
 * The followings are the available model relations:
 * @property Bophan $bophan
 * @property Chucdanh $chucdanh
 * @property NhanvienGhichu[] $nhanvienGhichus
 * @property NhanvienHopdong[] $nhanvienHopdongs
 * @property NhanvienLuong[] $nhanvienLuongs
 * @property NhanvienLylich[] $nhanvienLyliches
 * @property NhanvienNghi[] $nhanvienNghis
 * @property Tinhluong[] $tinhluongs
 */
class Nhanvien extends CActiveRecord
{
	const NGHIVIEC = 0;
	const LAMVIEC = 1;
	const THAISAN = 2;
	
	const CHINHTHUC = 1;
	const THUVIEC = 2;
	const THOIVU = 3;
	const NGHITAM  = 4;

		
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Nhanvien the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function getTrangthai(){
		return array('1'=>'Chính thức','2'=>'Thử việc','3'=>'Thời vụ','4'=>'Nghỉ tạm');
	}
	
	public function getTrangthainghiviec(){
		return array('0'=>'Nghỉ việc','1'=>'Làm việc','2'=>'Thai sản');
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_nhanvien';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bophan_id, chucdanh_id,nhanvien_trangthai, nhanvien_ho, nhanvien_ten,nhanvien_trangthai_nghiviec,nhanvien_ngayvao,nhanvien_cmnd,nhanvien_cmnd_ngaycap,nhanvien_cmnd_noicap,trinhdo_id', 'required'),
			array('nhanvien_id, bophan_id, chucdanh_id, nhanvien_trangthai, nhanvien_trangthai_nghiviec, nhanvien_cmnd_noicap, nhanvien_noisinh,trinhdo_id,admin_id, phongban_id', 'numerical', 'integerOnly'=>true),
			array('nhanvien_ma, nhanvien_mst, nhanvien_cmnd', 'length', 'max'=>16),
			array('nhanvien_ho, nhanvien_ten, nhanvien_hinhanh, nhanvien_thoigianthu, nhanvien_phepnam, nhanvien_hoten_search', 'length', 'max'=>255),
			array('nhanvien_dienthoai, nhanvien_dienthoai_nhonhan, nhanvien_nganhang, nhanvien_sotaikhoan', 'length', 'max'=>32),
			
			array('nhanvien_gioitinh', 'length', 'max'=>3),
			array('nhanvien_cmnd_ngaycap, nhanvien_ngaysinh, nhanvien_ngayvao, nhanvien_ngayky_hdld, nhanvien_ngaydangky_baohiem, nhanvien_ghichu', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nhanvien_id, nhanvien_ma, bophan_id, chucdanh_id,phongban_id, nhanvien_ho, nhanvien_ten, nhanvien_mst, nhanvien_cmnd, nhanvien_cmnd_ngaycap, nhanvien_cmnd_noicap, nhanvien_ngaysinh, nhanvien_noisinh, nhanvien_gioitinh, nhanvien_dienthoai, nhanvien_dienthoai_nhonhan, nhanvien_hinhanh, nhanvien_ngayvao, nhanvien_trangthai, nhanvien_trangthai_nghiviec, nhanvien_thoigianthu, nhanvien_ngayky_hdld, nhanvien_ngaydangky_baohiem, nhanvien_nganhang, nhanvien_sotaikhoan, nhanvien_ghichu, nhanvien_phepnam, nhanvien_hoten_search, admin_id', 'safe', 'on'=>'search'),
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
			'phongban' => array(self::BELONGS_TO, 'Phongban', 'phongban_id'),
			'chucdanh' => array(self::BELONGS_TO, 'Chucdanh', 'chucdanh_id'),
			'nhanvienGhichus' => array(self::HAS_MANY, 'NhanvienGhichu', 'nhanvien_id'),
			'nhanvienHopdongs' => array(self::HAS_MANY, 'NhanvienHopdong', 'nhanvien_id'),
			'nhanvienLuongs' => array(self::BELONGS_TO, 'NhanvienLuong', 'nhanvien_id'),
			'nhanvienLyliches' => array(self::HAS_MANY, 'NhanvienLylich', 'nhanvien_id'),
			'nhanvienNghis' => array(self::HAS_MANY, 'NhanvienNghi', 'nhanvien_id'),
			'tinhluongs' => array(self::HAS_MANY, 'Tinhluong', 'nhanvien_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nhanvien_id' => 'ID',
			'nhanvien_ma' => 'Mã NV',
			'bophan_id' => 'Bộ phận',
			'phongban_id' => 'Phòng Ban',
			'chucdanh_id' => 'Chức danh',
			'trinhdo_id' => 'Trình độ',
			'nhanvien_ho' => 'Họ',
			'nhanvien_ten' => 'Tên',
			'nhanvien_mst' => 'MST',
			'nhanvien_cmnd' => 'CMND',
			'nhanvien_cmnd_ngaycap' => 'Ngày cấp',
			'nhanvien_cmnd_noicap' => 'Nơi cấp',
			'nhanvien_ngaysinh' => 'Ngày sinh',
			'nhanvien_noisinh' => 'Nơi sinh',
			'nhanvien_gioitinh' => 'Giới tính',
			'nhanvien_dienthoai' => 'Điện thoại',
			'nhanvien_dienthoai_nhonhan' => 'Điện thoại 2',
			'nhanvien_hinhanh' => 'Hình ảnh',
			'nhanvien_ngayvao' => 'Ngày vào',
			'nhanvien_trangthai' => 'Trạng thái',
			'nhanvien_trangthai_nghiviec' => 'Nghỉ việc',
			'nhanvien_thoigianthu' => 'Thời gian thử việc',
			'nhanvien_ngayky_hdld' => 'HĐLĐ',
			'nhanvien_ngaydangky_baohiem' => 'Ngày đăng ký BHXH',
			'nhanvien_nganhang' => 'Ngân hàng',
			'nhanvien_sotaikhoan' => 'Số tài khoản',
			'nhanvien_ghichu' => 'Ghi chú',
			'nhanvien_phepnam' => 'Phép năm',
			'nhanvien_hoten_search' => 'Họ tên',
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

		$criteria->compare('nhanvien_id',$this->nhanvien_id);
		$criteria->compare('nhanvien_ma',$this->nhanvien_ma,true);
		$criteria->compare('bophan_id',$this->bophan_id);
		$criteria->compare('phongban_id',$this->phongban_id);
		$criteria->compare('chucdanh_id',$this->chucdanh_id);
		$criteria->compare('nhanvien_ho',$this->nhanvien_ho,true);
		$criteria->compare('nhanvien_ten',$this->nhanvien_ten,true);
		$criteria->compare('nhanvien_mst',$this->nhanvien_mst,true);
		$criteria->compare('nhanvien_cmnd',$this->nhanvien_cmnd,true);
		$criteria->compare('nhanvien_cmnd_ngaycap',$this->nhanvien_cmnd_ngaycap,true);
		$criteria->compare('nhanvien_cmnd_noicap',$this->nhanvien_cmnd_noicap,true);
		$criteria->compare('nhanvien_ngaysinh',$this->nhanvien_ngaysinh,true);
		$criteria->compare('nhanvien_noisinh',$this->nhanvien_noisinh,true);
		$criteria->compare('nhanvien_gioitinh',$this->nhanvien_gioitinh,true);
		$criteria->compare('nhanvien_dienthoai',$this->nhanvien_dienthoai,true);
		$criteria->compare('nhanvien_dienthoai_nhonhan',$this->nhanvien_dienthoai_nhonhan,true);
		$criteria->compare('nhanvien_hinhanh',$this->nhanvien_hinhanh,true);
		$criteria->compare('nhanvien_ngayvao',$this->nhanvien_ngayvao,true);
		$criteria->compare('nhanvien_trangthai',$this->nhanvien_trangthai);
		$criteria->compare('nhanvien_trangthai_nghiviec',$this->nhanvien_trangthai_nghiviec);
		$criteria->compare('nhanvien_thoigianthu',$this->nhanvien_thoigianthu,true);
		$criteria->compare('nhanvien_ngayky_hdld',$this->nhanvien_ngayky_hdld,true);
		$criteria->compare('nhanvien_ngaydangky_baohiem',$this->nhanvien_ngaydangky_baohiem,true);
		$criteria->compare('nhanvien_nganhang',$this->nhanvien_nganhang,true);
		$criteria->compare('nhanvien_sotaikhoan',$this->nhanvien_sotaikhoan,true);
		$criteria->compare('nhanvien_ghichu',$this->nhanvien_ghichu,true);
		$criteria->compare('nhanvien_phepnam',$this->nhanvien_phepnam,true);
		$criteria->compare('nhanvien_hoten_search',$this->nhanvien_hoten_search,true);
		$criteria->compare('admin_id',$this->admin_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function searchluong()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
		$criteria->with = array( 'nhanvienLuongs' );
		$criteria->compare('nhanvien_id',$this->nhanvien_id);
		$criteria->compare('nhanvien_ma',$this->nhanvien_ma,true);
		$criteria->compare('bophan_id',$this->bophan_id);
		$criteria->compare('phongban_id',$this->phongban_id);
		$criteria->compare('chucdanh_id',$this->chucdanh_id);
		$criteria->compare('nhanvien_hoten_search',$this->nhanvien_hoten_search,true);
		$criteria->compare('admin_id',$this->admin_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
}