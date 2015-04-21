<?php

/**
 * This is the model class for table "pf_hoatdonghoctap".
 *
 * The followings are the available columns in table 'pf_hoatdonghoctap':
 * @property integer $pf_ma_hdht
 * @property string $pf_ten_hoat_dong
 * @property string $pf_ngay_bat_dau
 * @property string $pf_ngay_ket_thuc
 * @property string $pf_mo_ta
 * @property string $pf_vai_tro
 * @property integer $ma_tai_khoan
 */
class PF_Hoatdonghoctap extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pf_hoatdonghoctap';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pf_ten_hoat_dong, pf_ngay_bat_dau, pf_ngay_ket_thuc, pf_mo_ta, pf_vai_tro, ma_tai_khoan', 'required'),
			array('ma_tai_khoan', 'numerical', 'integerOnly'=>true),
			array('pf_ten_hoat_dong', 'length', 'max'=>50),
			array('pf_ngay_bat_dau, pf_ngay_ket_thuc', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pf_ma_hdht, pf_ten_hoat_dong, pf_ngay_bat_dau, pf_ngay_ket_thuc, pf_mo_ta, pf_vai_tro, ma_tai_khoan', 'safe', 'on'=>'search'),
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
			//'pf_ma_hdht' => 'Pf Ma Hdht',
			'pf_ten_hoat_dong' => 'Tên hoạt động',
			'pf_ngay_bat_dau' => 'Ngày bắt đầu',
			'pf_ngay_ket_thuc' => 'Ngày kết thúc',
			'pf_mo_ta' => 'Mô tả',
			'pf_vai_tro' => 'Vai trò',
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

		$criteria->compare('pf_ma_hdht',$this->pf_ma_hdht);
		$criteria->compare('pf_ten_hoat_dong',$this->pf_ten_hoat_dong,true);
		$criteria->compare('pf_ngay_bat_dau',$this->pf_ngay_bat_dau,true);
		$criteria->compare('pf_ngay_ket_thuc',$this->pf_ngay_ket_thuc,true);
		$criteria->compare('pf_mo_ta',$this->pf_mo_ta,true);
		$criteria->compare('pf_vai_tro',$this->pf_vai_tro,true);
		$criteria->compare('ma_tai_khoan',$this->ma_tai_khoan);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PF_Hoatdonghoctap the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
