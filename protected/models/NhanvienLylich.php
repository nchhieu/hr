<?php

/**
 * This is the model class for table "tbl_nhanvien_lylich".
 *
 * The followings are the available columns in table 'tbl_nhanvien_lylich':
 * @property integer $nhanvien_lylich_id
 * @property integer $nhanvien_id
 * @property string $nhanvien_quoctich
 * @property string $nhanvien_honnhan
 * @property string $nhanvien_tamtru
 * @property string $nhanvien_thuongtru
 * @property string $nhanvien_lylich
 * @property string $nhanvien_kinhnghiem
 * @property string $nhanvien_daotao
 * @property integer $admin_id
 *
 * The followings are the available model relations:
 * @property Nhanvien $nhanvien
 */
class NhanvienLylich extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return NhanvienLylich the static model class
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
		return 'tbl_nhanvien_lylich';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nhanvien_id, admin_id', 'numerical', 'integerOnly'=>true),
			array('nhanvien_quoctich, nhanvien_honnhan', 'length', 'max'=>255),
			array('nhanvien_tamtru, nhanvien_thuongtru, nhanvien_lylich, nhanvien_kinhnghiem, nhanvien_daotao', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nhanvien_lylich_id, nhanvien_id, nhanvien_quoctich, nhanvien_honnhan, nhanvien_tamtru, nhanvien_thuongtru, nhanvien_lylich, nhanvien_kinhnghiem, nhanvien_daotao, admin_id', 'safe', 'on'=>'search'),
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
			'nhanvien_lylich_id' => 'Nhanvien Lylich',
			'nhanvien_id' => 'Nhanvien',
			'nhanvien_quoctich' => 'Nhanvien Quoctich',
			'nhanvien_honnhan' => 'Nhanvien Honnhan',
			'nhanvien_tamtru' => 'Nhanvien Tamtru',
			'nhanvien_thuongtru' => 'Nhanvien Thuongtru',
			'nhanvien_lylich' => 'Nhanvien Lylich',
			'nhanvien_kinhnghiem' => 'Nhanvien Kinhnghiem',
			'nhanvien_daotao' => 'Nhanvien Daotao',
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

		$criteria->compare('nhanvien_lylich_id',$this->nhanvien_lylich_id);
		$criteria->compare('nhanvien_id',$this->nhanvien_id);
		$criteria->compare('nhanvien_quoctich',$this->nhanvien_quoctich,true);
		$criteria->compare('nhanvien_honnhan',$this->nhanvien_honnhan,true);
		$criteria->compare('nhanvien_tamtru',$this->nhanvien_tamtru,true);
		$criteria->compare('nhanvien_thuongtru',$this->nhanvien_thuongtru,true);
		$criteria->compare('nhanvien_lylich',$this->nhanvien_lylich,true);
		$criteria->compare('nhanvien_kinhnghiem',$this->nhanvien_kinhnghiem,true);
		$criteria->compare('nhanvien_daotao',$this->nhanvien_daotao,true);
		$criteria->compare('admin_id',$this->admin_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}