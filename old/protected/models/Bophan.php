<?php

/**
 * This is the model class for table "tbl_bophan".
 *
 * The followings are the available columns in table 'tbl_bophan':
 * @property integer $bophan_id
 * @property string $bophan_ma
 * @property string $bophan_ten
 * @property string $bophan_batdau
 * @property string $bophan_gionghi
 * @property string $bophan_ngaylamviec
 * @property string $bophan_ghichu
 * @property integer $bophan_hienthi
 * @property string $nhanvien_id
 *
 * The followings are the available model relations:
 * @property Nhanvien[] $nhanviens
 */
class Bophan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bophan the static model class
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
		return 'tbl_bophan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bophan_hienthi', 'numerical', 'integerOnly'=>true),
			array('bophan_ma', 'length', 'max'=>20),
			array('bophan_ten, nhanvien_id', 'length', 'max'=>50),
			array('bophan_ngaylamviec', 'length', 'max'=>32),
			array('bophan_batdau, bophan_gionghi, bophan_ghichu', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('bophan_id, bophan_ma, bophan_ten, bophan_batdau, bophan_gionghi, bophan_ngaylamviec, bophan_ghichu, bophan_hienthi, nhanvien_id', 'safe', 'on'=>'search'),
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
			'nhanviens' => array(self::HAS_MANY, 'Nhanvien', 'bophan_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'bophan_id' => 'ID',
			'bophan_ma' => 'Mã bộ phận',
			'bophan_ten' => 'Tên bộ phận',
			'bophan_batdau' => 'Giờ làm việc',
			'bophan_gionghi' => 'Giờ nghỉ',
			'bophan_ngaylamviec' => 'Ngày làm việc',
			'bophan_ghichu' => 'Ghi chú',
			'bophan_hienthi' => 'Hiện thị',
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

		$criteria->compare('bophan_id',$this->bophan_id);
		$criteria->compare('bophan_ma',$this->bophan_ma,true);
		$criteria->compare('bophan_ten',$this->bophan_ten,true);
		$criteria->compare('bophan_hienthi',$this->bophan_hienthi);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}