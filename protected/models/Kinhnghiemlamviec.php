<?php

/**
 * This is the model class for table "kinhnghiemlamviec".
 *
 * The followings are the available columns in table 'kinhnghiemlamviec':
 * @property integer $makinhnghiem
 * @property string $tencongty
 * @property string $tencongviec
 * @property string $ngaybatdau
 * @property string $ngayketthuc
 * @property string $chucvu
 * @property string $mota
 * @property integer $matk
 */
class Kinhnghiemlamviec extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kinhnghiemlamviec';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tencongty, tencongviec, ngaybatdau, ngayketthuc, chucvu, mota', 'required'),
			array('matk', 'numerical', 'integerOnly'=>true),
			array('tencongty, tencongviec, chucvu', 'length', 'max'=>50),
			array('ngaybatdau, ngayketthuc', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('makinhnghiem, tencongty, tencongviec, ngaybatdau, ngayketthuc, chucvu, mota, matk', 'safe', 'on'=>'search'),
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
			'makinhnghiem' => 'Makinhnghiem',
			'tencongty' => 'Tencongty',
			'tencongviec' => 'Tencongviec',
			'ngaybatdau' => 'Ngaybatdau',
			'ngayketthuc' => 'Ngayketthuc',
			'chucvu' => 'Chucvu',
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

		$criteria->compare('makinhnghiem',$this->makinhnghiem);
		$criteria->compare('tencongty',$this->tencongty,true);
		$criteria->compare('tencongviec',$this->tencongviec,true);
		$criteria->compare('ngaybatdau',$this->ngaybatdau,true);
		$criteria->compare('ngayketthuc',$this->ngayketthuc,true);
		$criteria->compare('chucvu',$this->chucvu,true);
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
	 * @return Kinhnghiemlamviec the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
