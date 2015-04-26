<?php

/**
 * This is the model class for table "pf_kinhnghiemlamviec".
 *
 * The followings are the available columns in table 'pf_kinhnghiemlamviec':
 * @property integer $pf_ma_kinh_nghiem
 * @property string $pf_ten_cong_ty
 * @property string $pf_ten_cong_viec
 * @property string $pf_ngay_bat_dau
 * @property string $pf_ngay_ket_thuc
 * @property string $pf_chuc_vu
 * @property string $pf_mo_ta
 * @property integer $ma_tai_khoan
 */
class PF_Kinhnghiemlamviec extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pf_kinhnghiemlamviec';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pf_ten_cong_viec, pf_chuc_vu, pf_mo_ta', 'required'),
			array('ma_tai_khoan', 'numerical', 'integerOnly'=>true),
			array('pf_ten_cong_ty, pf_ten_cong_viec, pf_chuc_vu', 'length', 'max'=>50),
			array('pf_ngay_bat_dau, pf_ngay_ket_thuc', 'length', 'max'=>10),
			array('pf_ngay_ket_thuc','compare','compareAttribute'=>'pf_ngay_bat_dau','operator'=>'>', 'allowEmpty'=>false , 'message'=>'{attribute} phải lớn hơn "{compareValue}".'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pf_ma_kinh_nghiem, pf_ten_cong_ty, pf_ten_cong_viec, pf_ngay_bat_dau, pf_ngay_ket_thuc, pf_chuc_vu, pf_mo_ta, ma_tai_khoan', 'safe', 'on'=>'search'),
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
			//'pf_ma_kinh_nghiem' => 'Pf Ma Kinh Nghiem',
			'pf_ten_cong_ty' => 'Tên công ty',
			'pf_ten_cong_viec' => 'Tên công việc',
			'pf_ngay_bat_dau' => 'Ngày bắt đầu',
			'pf_ngay_ket_thuc' => 'Ngày kết thúc',
			'pf_chuc_vu' => 'Chức vụ',
			'pf_mo_ta' => 'Mô tả',
			//'ma_tai_khoan' => 'Ma Tai Khoan',
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

		$criteria->compare('pf_ma_kinh_nghiem',$this->pf_ma_kinh_nghiem);
		$criteria->compare('pf_ten_cong_ty',$this->pf_ten_cong_ty,true);
		$criteria->compare('pf_ten_cong_viec',$this->pf_ten_cong_viec,true);
		$criteria->compare('pf_ngay_bat_dau',$this->pf_ngay_bat_dau,true);
		$criteria->compare('pf_ngay_ket_thuc',$this->pf_ngay_ket_thuc,true);
		$criteria->compare('pf_chuc_vu',$this->pf_chuc_vu,true);
		$criteria->compare('pf_mo_ta',$this->pf_mo_ta,true);
		$criteria->compare('ma_tai_khoan',$this->ma_tai_khoan);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PF_Kinhnghiemlamviec the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
