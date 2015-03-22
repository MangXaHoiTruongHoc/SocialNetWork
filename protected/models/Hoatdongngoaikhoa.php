<?php

/**
 * This is the model class for table "hoatdongngoaikhoa".
 *
 * The followings are the available columns in table 'hoatdongngoaikhoa':
 * @property integer $mahdnk
 * @property string $tenhoatdong
 * @property string $ngaybatdau
 * @property string $ngayketthuc
 * @property string $vaitro
 * @property string $mota
 * @property integer $matk
 */
class Hoatdongngoaikhoa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hoatdongngoaikhoa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tenhoatdong, ngaybatdau, ngayketthuc, vaitro, mota', 'required'),
			array('matk', 'numerical', 'integerOnly'=>true),
			array('ngaybatdau, ngayketthuc', 'length', 'max'=>10),
			array('vaitro', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('mahdnk, tenhoatdong, ngaybatdau, ngayketthuc, vaitro, mota, matk', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'mahdnk' => 'Mahdnk',
			'tenhoatdong' => 'Tenhoatdong',
			'ngaybatdau' => 'Ngaybatdau',
			'ngayketthuc' => 'Ngayketthuc',
			'vaitro' => 'Vaitro',
			'mota' => 'Mota',
		
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('mahdnk',$this->mahdnk);
		$criteria->compare('tenhoatdong',$this->tenhoatdong,true);
		$criteria->compare('ngaybatdau',$this->ngaybatdau,true);
		$criteria->compare('ngayketthuc',$this->ngayketthuc,true);
		$criteria->compare('vaitro',$this->vaitro,true);
		$criteria->compare('mota',$this->mota,true);
		$criteria->compare('matk',$this->matk);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Hoatdongngoaikhoa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
