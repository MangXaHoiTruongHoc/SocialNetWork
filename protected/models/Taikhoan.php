<?php

/**
 * This is the model class for table "taikhoan".
 *
 * The followings are the available columns in table 'taikhoan':
 * @property integer $matk
 * @property string $email
 * @property string $hoten
 * @property string $ngaysinh
 * @property string $Gioitinh
 * @property string $avatar
 * @property integer $machuyennganh
 * @property string $password
 */
class Taikhoan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'taikhoan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, hoten, ngaysinh, Gioitinh, machuyennganh, password', 'required'),
			array('machuyennganh', 'numerical', 'integerOnly'=>true),
			array('email, hoten', 'length', 'max'=>50),
			array('ngaysinh', 'length', 'max'=>10),
			array('Gioitinh', 'length', 'max'=>5),
			array('avatar', 'length', 'max'=>60),
			array('password', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('matk, email, hoten, ngaysinh, Gioitinh, avatar, machuyennganh, password', 'safe', 'on'=>'search'),
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
			'matk' => 'Matk',
			'email' => 'Email',
			'hoten' => 'Họ Tên',
			'ngaysinh' => 'Ngày Sinh',
			'Gioitinh' => 'Giới Tính',
			'avatar' => 'Ảnh Minh Họa',
			'machuyennganh' => 'Chuyên Ngành',
			'password' => 'Mật Khẩu',
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

		$criteria->compare('matk',$this->matk);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('hoten',$this->hoten,true);
		$criteria->compare('ngaysinh',$this->ngaysinh,true);
		$criteria->compare('Gioitinh',$this->Gioitinh,true);
		$criteria->compare('avatar',$this->avatar,true);
		$criteria->compare('machuyennganh',$this->machuyennganh);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Taikhoan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
