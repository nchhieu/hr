<?php

/**
 * This is the model class for table "tbl_nhanvien_nghi".
 *
 * The followings are the available columns in table 'tbl_nhanvien_nghi':
 * @property integer $nhanvien_nghi_id
 * @property integer $nhanvien_id
 * @property string $nghiviec_tu
 * @property string $nghiviec_den
 * @property integer $nghiviec_loai
 * @property string $nghiviec_ghichu
 * @property string $ngaythem
 * @property integer $admin_id
 *
 * The followings are the available model relations:
 * @property Nhanvien $nhanvien
 */
class NhanvienNghi extends CActiveRecord
{
	
	const NGHIVIEC = 0;
	const THAISAN = 1;
	const NGHIBENH = 2;
	const VIECRIENG = 3;
	
	public function getTrangthai(){
		return array('0'=>'Nghỉ việc','1'=>'Thai sản','2'=>'Nghỉ bệnh','3'=>'Việc riêng');
	}
	
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
			array('nhanvien_id, nghiviec_loai, admin_id', 'numerical', 'integerOnly'=>true),
			array('nghiviec_ghichu', 'length', 'max'=>255),
			array('nghiviec_tu, nghiviec_den, ngaythem', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nhanvien_nghi_id, nhanvien_id, nghiviec_tu, nghiviec_den, nghiviec_loai, nghiviec_ghichu, ngaythem, admin_id', 'safe', 'on'=>'search'),
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
			'nhanvien_nghi_id' => 'ID',
			'nhanvien_id' => 'Nhân viên',
			'nghiviec_tu' => 'Nghỉ từ',
			'nghiviec_den' => 'Nghỉ đến',
			'nghiviec_loai' => 'Lý do',
			'nghiviec_ghichu' => 'Ghi chú',
			'ngaythem' => 'Ngày nhập',
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

		$criteria->compare('nhanvien_nghi_id',$this->nhanvien_nghi_id);
		$criteria->compare('nhanvien_id',$this->nhanvien_id);
		$criteria->compare('nghiviec_tu',$this->nghiviec_tu,true);
		$criteria->compare('nghiviec_den',$this->nghiviec_den,true);
		$criteria->compare('nghiviec_loai',$this->nghiviec_loai);
		$criteria->compare('nghiviec_ghichu',$this->nghiviec_ghichu,true);
		$criteria->compare('ngaythem',$this->ngaythem,true);
		$criteria->compare('admin_id',$this->admin_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}