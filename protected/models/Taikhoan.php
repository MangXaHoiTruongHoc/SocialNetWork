<?php

/**
 * This is the model class for table "taikhoan".
 *
 * The followings are the available columns in table 'taikhoan':
 * @property integer $ma_tai_khoan
 * @property string $email
 * @property string $ho_ten
 * @property string $ngay_sinh
 * @property string $gioi_tinh
 * @property string $hinh_dai_dien
 * @property integer $ma_chuyen_nganh
 * @property string $mat_khau
 * @property string $ngay_tao
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
			array('email, ho_ten,hinh_dai_dien, ngay_sinh, gioi_tinh,  mat_khau', 'required'),
            array('email','email'),
			array('email, ho_ten', 'length', 'max'=>50),
			array('ngay_sinh, ngay_tao', 'length', 'max'=>10),
			array('gioi_tinh', 'length', 'max'=>5),
			array('hinh_dai_dien', 'length', 'max'=>60),
			array('mat_khau', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ma_tai_khoan, email, ho_ten, ngay_sinh, gioi_tinh, hinh_dai_dien,  mat_khau, ngay_tao', 'safe', 'on'=>'search'),
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
			'ma_tai_khoan' => 'Ma Tai Khoan',
			'email' => 'Email',
			'ho_ten' => 'Họ Tên',
			'ngay_sinh' => 'Ngày Sinh',
			'gioi_tinh' => 'Giới Tính',
			'hinh_dai_dien' => 'Hình Đại Diện',
			'mat_khau' => 'Mật Khẩu',
			'ngay_tao' => 'Ngày Tạo',
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

		$criteria->compare('ma_tai_khoan',$this->ma_tai_khoan);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('ho_ten',$this->ho_ten,true);
		$criteria->compare('ngay_sinh',$this->ngay_sinh,true);
		$criteria->compare('gioi_tinh',$this->gioi_tinh,true);
		$criteria->compare('hinh_dai_dien',$this->hinh_dai_dien,true);
		$criteria->compare('mat_khau',$this->mat_khau,true);
		$criteria->compare('ngay_tao',$this->ngay_tao,true);

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
     // hash mat_khau
    public function hashPassword($mat_khau)
    {
        return ($mat_khau);
    }
            
    // mat_khau validation
    public function validatePassword($mat_khau)
    {
        return $this->hashPassword($mat_khau)===$this->mat_khau;
    }      
    public function beforeSave()
    {
        $this->mat_khau = $this->hashPassword($this->mat_khau);
        return parent::beforeSave();
    }
}
