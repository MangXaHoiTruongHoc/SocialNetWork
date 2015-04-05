<?php

/**
 * This is the model class for table "totnghiep".
 *
 * The followings are the available columns in table 'totnghiep':
 * @property integer $pf_ma_tn
 * @property string $pf_ten_truong_tn
 * @property string $pf_ngay_bat_dau
 * @property string $pf_ngay_ket_thuc
 * @property integer $pf_ma_ket_qua_tn
 * @property integer $ma_tai_khoan
 * @property integer $pf_ma_chuyen_nganh
 */
class PF_Totnghiep extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pf_totnghiep';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pf_ten_truong_tn, pf_ngay_bat_dau, pf_ngay_ket_thuc, pf_ma_ket_qua_tn, ma_tai_khoan, pf_ma_chuyen_nganh', 'required'),
			array('pf_ma_ket_qua_tn, ma_tai_khoan, pf_ma_chuyen_nganh', 'numerical', 'integerOnly'=>true),
			array('pf_ten_truong_tn', 'length', 'max'=>200),
			array('pf_ngay_bat_dau, pf_ngay_ket_thuc', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pf_ma_tn, pf_ten_truong_tn, pf_ngay_bat_dau, pf_ngay_ket_thuc, pf_ma_ket_qua_tn, ma_tai_khoan, pf_ma_chuyen_nganh', 'safe', 'on'=>'search'),
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
        'ketqua' =>array(self::HAS_ONE,'PF_Ketquatotnghiep','pf_ma_ket_qua_tn' ),
        'chuyennganh' =>array(self::HAS_ONE,'PF_Chuyennganh','pf_ma_chuyen_nganh' )
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pf_ma_tn' => 'Pf Ma Tn',
			'pf_ten_truong_tn' => 'Tên Trường',
			'pf_ngay_bat_dau' => 'Ngày Bắt Đầu',
			'pf_ngay_ket_thuc' => 'Ngày Kết Thúc',
			'pf_ma_ket_qua_tn' => 'Kết Quả Tốt Nghiệp',
			'ma_tai_khoan' => 'Ma Tai Khoan',
			'pf_ma_chuyen_nganh' => 'Chuyên Ngành',
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

		$criteria->compare('pf_ma_tn',$this->pf_ma_tn);
		$criteria->compare('pf_ten_truong_tn',$this->pf_ten_truong_tn,true);
		$criteria->compare('pf_ngay_bat_dau',$this->pf_ngay_bat_dau,true);
		$criteria->compare('pf_ngay_ket_thuc',$this->pf_ngay_ket_thuc,true);
		$criteria->compare('pf_ma_ket_qua_tn',$this->pf_ma_ket_qua_tn);
		$criteria->compare('ma_tai_khoan',$this->ma_tai_khoan);
		$criteria->compare('pf_ma_chuyen_nganh',$this->pf_ma_chuyen_nganh);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PF_Totnghiep the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
