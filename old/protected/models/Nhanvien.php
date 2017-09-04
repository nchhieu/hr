<?php

/**
 * This is the model class for table "tbl_nhanvien".
 *
 * The followings are the available columns in table 'tbl_nhanvien':
 * @property integer $nhanvien_id
 * @property integer $bophan_id
 * @property integer $chucdanh_id
 * @property integer $bacluong_id
 * @property string $nhanvien_ho
 * @property string $nhanvien_ten
 * @property string $nhanvien_mst
 * @property string $nhanvien_cmnd
 * @property string $nhanvien_cmnd_ngaycap
 * @property string $nhanvien_cmnd_noicap
 * @property string $nhanvien_ngaysinh
 * @property string $nhanvien_noisinh
 * @property integer $nhanvien_gioitinh
 * @property string $nhanvien_quoctich
 * @property integer $nhanvien_honnhan
 * @property string $nhanvien_tamtru
 * @property string $nhanvien_thuongtru
 * @property string $nhanvien_dienthoai
 * @property string $nhanvien_dienthoai_nhonhan
 * @property string $nhanvien_lylich
 * @property string $nhanvien_kinhnghiem
 * @property string $nhanvien_daotao
 * @property string $nhanvien_hinhanh
 * @property string $nhanvien_ngayvao
 * @property integer $nhanvien_ngaynghi_trongnam
 * @property integer $nhanvien_trangthai
 * @property integer $nhanvien_trangthai_nghiviec
 * @property integer $nhanvien_thoigianthu
 * @property string $nhanvien_ngayky_hdld
 * @property string $nhanvien_ngaydangky_baohiem
 * @property string $nhanvien_nganhang
 * @property string $nhanvien_sotaikhoan
 * @property string $nhanvien_ghichu
 * @property integer $nhanvien_phepnam
 * @property string $luong_coban
 * @property string $luong_trachnhiem
 * @property string $luong_chuyencan
 * @property string $luong_dochai
 * @property string $luong_xe
 * @property string $luong_dienthoai
 * @property string $luong_thuenha
 * @property string $luong_com
 * @property string $luong_taynghe
 * @property string $luong_congkhac
 * @property string $luong_thamnien
 * @property string $luong_baohiem
 * @property string $luong_tru_doanphi
 * @property string $luong_giamtru_giacanh
 * @property string $luong_ngaylamviec
 * @property string $nhanvien_ma
 * @property string $nhanvien_hoten_search
 * @property integer $nhanvien_hienthi
 * @property integer $nguoidung_id
 *
 * The followings are the available model relations:
 * @property Bophan $bophan
 * @property Chucdanh $chucdanh
 * @property NhanvienHopdong[] $nhanvienHopdongs
 * @property NhanvienLuong[] $nhanvienLuongs
 */
class Nhanvien extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Nhanvien the static model class
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
			array('bophan_id, chucdanh_id, nhanvien_ho, nhanvien_ten, nhanvien_thoigianthu, nhanvien_nganhang, nhanvien_sotaikhoan, nhanvien_phepnam, nhanvien_ma, nhanvien_hoten_search', 'required'),
			array('bophan_id, chucdanh_id, bacluong_id, nhanvien_gioitinh, nhanvien_honnhan, nhanvien_ngaynghi_trongnam, nhanvien_trangthai, nhanvien_trangthai_nghiviec, nhanvien_thoigianthu, nhanvien_phepnam, nhanvien_hienthi, nguoidung_id', 'numerical', 'integerOnly'=>true),
			array('nhanvien_ho, nhanvien_ten, nhanvien_cmnd_noicap, nhanvien_noisinh, nhanvien_hinhanh, nhanvien_nganhang, nhanvien_sotaikhoan', 'length', 'max'=>50),
			array('nhanvien_mst', 'length', 'max'=>32),
			array('nhanvien_cmnd, nhanvien_dienthoai, nhanvien_dienthoai_nhonhan', 'length', 'max'=>16),
			array('nhanvien_quoctich', 'length', 'max'=>20),
			array('nhanvien_tamtru, nhanvien_thuongtru', 'length', 'max'=>255),
			array('luong_coban, luong_trachnhiem, luong_chuyencan, luong_dochai, luong_xe, luong_dienthoai, luong_thuenha, luong_com, luong_taynghe, luong_congkhac, luong_thamnien, luong_baohiem, luong_tru_doanphi, luong_giamtru_giacanh, nhanvien_ma', 'length', 'max'=>10),
			array('luong_ngaylamviec, nhanvien_hoten_search', 'length', 'max'=>64),
			array('nhanvien_cmnd_ngaycap, nhanvien_ngaysinh, nhanvien_lylich, nhanvien_kinhnghiem, nhanvien_daotao, nhanvien_ngayvao, nhanvien_ngayky_hdld, nhanvien_ngaydangky_baohiem, nhanvien_ghichu', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nhanvien_id, bophan_id, chucdanh_id, bacluong_id, nhanvien_ho, nhanvien_ten, nhanvien_mst, nhanvien_cmnd, nhanvien_cmnd_ngaycap, nhanvien_cmnd_noicap, nhanvien_ngaysinh, nhanvien_noisinh, nhanvien_gioitinh, nhanvien_quoctich, nhanvien_honnhan, nhanvien_tamtru, nhanvien_thuongtru, nhanvien_dienthoai, nhanvien_dienthoai_nhonhan, nhanvien_lylich, nhanvien_kinhnghiem, nhanvien_daotao, nhanvien_hinhanh, nhanvien_ngayvao, nhanvien_ngaynghi_trongnam, nhanvien_trangthai, nhanvien_trangthai_nghiviec, nhanvien_thoigianthu, nhanvien_ngayky_hdld, nhanvien_ngaydangky_baohiem, nhanvien_nganhang, nhanvien_sotaikhoan, nhanvien_ghichu, nhanvien_phepnam, luong_coban, luong_trachnhiem, luong_chuyencan, luong_dochai, luong_xe, luong_dienthoai, luong_thuenha, luong_com, luong_taynghe, luong_congkhac, luong_thamnien, luong_baohiem, luong_tru_doanphi, luong_giamtru_giacanh, luong_ngaylamviec, nhanvien_ma, nhanvien_hoten_search, nhanvien_hienthi, nguoidung_id', 'safe', 'on'=>'search'),
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
			'chucdanh' => array(self::BELONGS_TO, 'Chucdanh', 'chucdanh_id'),
			'nhanvienHopdongs' => array(self::HAS_MANY, 'NhanvienHopdong', 'nhanvien_id'),
			'nhanvienLuongs' => array(self::HAS_MANY, 'NhanvienLuong', 'nhanvien_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nhanvien_id' => 'ID',
			'bophan_id' => 'Bộ phận',
			'chucdanh_id' => 'Chức danh',
			'bacluong_id' => 'Bậc lương',
			'nhanvien_ho' => 'Họ',
			'nhanvien_ten' => 'Tên',
			'nhanvien_mst' => 'MST',
			'nhanvien_cmnd' => 'CMND',
			'nhanvien_cmnd_ngaycap' => 'Ngày cấp',
			'nhanvien_cmnd_noicap' => 'Nơi cấp',
			'nhanvien_ngaysinh' => 'Ngày sinh',
			'nhanvien_noisinh' => 'Nơi sinh',
			'nhanvien_gioitinh' => 'Giới tính',
			'nhanvien_quoctich' => 'Quốc tịch',
			'nhanvien_honnhan' => 'Hôn nhân',
			'nhanvien_tamtru' => 'Tạm trú',
			'nhanvien_thuongtru' => 'Thường trú',
			'nhanvien_dienthoai' => 'Điện thoại',
			'nhanvien_dienthoai_nhonhan' => 'Điện thoại nhờ nhắn',
			'nhanvien_lylich' => 'Lý lịch',
			'nhanvien_kinhnghiem' => 'Kinh nghiệm',
			'nhanvien_daotao' => 'Đào tạo',
			'nhanvien_hinhanh' => 'Hình',
			'nhanvien_ngayvao' => 'Ngày vào làm việc',
			'nhanvien_ngaynghi_trongnam' => 'Ngày nghỉ trong năm',
			'nhanvien_trangthai' => 'Trạng thái làm việc',
			'nhanvien_trangthai_nghiviec' => 'Trạng thái nghỉ việc',
			'nhanvien_thoigianthu' => 'Thời gian thử việc',
			'nhanvien_ngayky_hdld' => 'Ngày ký HĐLĐ',
			'nhanvien_ngaydangky_baohiem' => 'Ngày đăng ký BHXH',
			'nhanvien_nganhang' => 'Ngân hàng',
			'nhanvien_sotaikhoan' => 'Số tài khoản',
			'nhanvien_ghichu' => 'Ghi chú',
			'nhanvien_phepnam' => 'Phép nam8',
			'luong_coban' => 'Lương cơ bản',
			'luong_trachnhiem' => 'Trách nhiệm',
			'luong_chuyencan' => 'Chuyên cần',
			'luong_dochai' => 'Độc hại',
			'luong_xe' => 'Xăng',
			'luong_dienthoai' => 'Điện thoại',
			'luong_thuenha' => 'Thuê nhà',
			'luong_com' => 'Cơm',
			'luong_taynghe' => 'Tay nghề',
			'luong_congkhac' => 'Cộng khác',
			'luong_thamnien' => 'Thâm niên',
			'luong_baohiem' => 'Bảo hiểm',
			'luong_tru_doanphi' => 'Trừ đoàn phí',
			'luong_giamtru_giacanh' => 'Giàm trừ gia cảnh',
			'luong_ngaylamviec' => 'Ngày làm việc',
			'nhanvien_ma' => 'Mã nhân viên',
			'nhanvien_hoten_search' => 'Họ tên tìm kiếm',
			'nhanvien_hienthi' => 'Hiện thị',
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

		$criteria->compare('nhanvien_id',$this->nhanvien_id);
		$criteria->compare('bophan_id',$this->bophan_id);
		$criteria->compare('chucdanh_id',$this->chucdanh_id);
		$criteria->compare('bacluong_id',$this->bacluong_id);
		$criteria->compare('nhanvien_ho',$this->nhanvien_ho,true);
		$criteria->compare('nhanvien_ten',$this->nhanvien_ten,true);
		$criteria->compare('nhanvien_mst',$this->nhanvien_mst,true);
		$criteria->compare('nhanvien_cmnd',$this->nhanvien_cmnd,true);

		$criteria->compare('nhanvien_ngaysinh',$this->nhanvien_ngaysinh,true);
		$criteria->compare('nhanvien_gioitinh',$this->nhanvien_gioitinh);
		$criteria->compare('nhanvien_ngayvao',$this->nhanvien_ngayvao,true);
		$criteria->compare('nhanvien_trangthai',$this->nhanvien_trangthai);
		$criteria->compare('nhanvien_trangthai_nghiviec',$this->nhanvien_trangthai_nghiviec);
		$criteria->compare('nhanvien_ngayky_hdld',$this->nhanvien_ngayky_hdld,true);
		$criteria->compare('nhanvien_ngaydangky_baohiem',$this->nhanvien_ngaydangky_baohiem,true);
		$criteria->compare('nhanvien_hienthi',$this->nhanvien_hienthi);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}