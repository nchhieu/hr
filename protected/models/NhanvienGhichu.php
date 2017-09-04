<?php

/**
 * This is the model class for table "tbl_nhanvien_ghichu".
 *
 * The followings are the available columns in table 'tbl_nhanvien_ghichu':
 * @property integer $ghichu_id
 * @property integer $nhanvien_id
 * @property integer $chude_id
 * @property string $ghichu_tieude
 * @property string $ghichu_noidung
 * @property integer $ghichu_ngay
 * @property integer $admin_id
 *
 * The followings are the available model relations:
 * @property Nhanvien $nhanvien
 */
class NhanvienGhichu extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return NhanvienGhichu the static model class
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
		return 'tbl_nhanvien_ghichu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ghichu_id, nhanvien_id', 'required'),
			array('ghichu_id, nhanvien_id, chude_id, ghichu_ngay, admin_id', 'numerical', 'integerOnly'=>true),
			array('ghichu_tieude', 'length', 'max'=>255),
			array('ghichu_noidung', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ghichu_id, nhanvien_id, chude_id, ghichu_tieude, ghichu_noidung, ghichu_ngay, admin_id', 'safe', 'on'=>'search'),
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
			'ghichu_id' => 'Ghichu',
			'nhanvien_id' => 'Nhanvien',
			'chude_id' => 'Chude',
			'ghichu_tieude' => 'Ghichu Tieude',
			'ghichu_noidung' => 'Ghichu Noidung',
			'ghichu_ngay' => 'Ghichu Ngay',
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

		$criteria->compare('ghichu_id',$this->ghichu_id);
		$criteria->compare('nhanvien_id',$this->nhanvien_id);
		$criteria->compare('chude_id',$this->chude_id);
		$criteria->compare('ghichu_tieude',$this->ghichu_tieude,true);
		$criteria->compare('ghichu_noidung',$this->ghichu_noidung,true);
		$criteria->compare('ghichu_ngay',$this->ghichu_ngay);
		$criteria->compare('admin_id',$this->admin_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}