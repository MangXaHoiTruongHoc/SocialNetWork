<?php

/**
 * This is the model class for table "pf_giaithuong".
 *
 * The followings are the available columns in table 'pf_giaithuong':
 * @property integer $pf_ma_giai_thuong
 * @property string $pf_ten_giai_thuong
 * @property string $pf_ngay_nhan_giai
 * @property string $pf_mo_ta
 * @property integer $ma_tai_khoan
 */
class PF_Giaithuong extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pf_giaithuong';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pf_ten_giai_thuong, pf_ngay_nhan_giai, pf_mo_ta, ma_tai_khoan', 'required'),
			array('ma_tai_khoan', 'numerical', 'integerOnly'=>true),
			array('pf_ten_giai_thuong', 'length', 'max'=>50),
			array('pf_ngay_nhan_giai', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pf_ma_giai_thuong, pf_ten_giai_thuong, pf_ngay_nhan_giai, pf_mo_ta, ma_tai_khoan', 'safe', 'on'=>'search'),
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
			//'pf_ma_giai_thuong' => 'Pf Ma Giai Thuong',
			'pf_ten_giai_thuong' => 'Tên giải thưởng',
			'pf_ngay_nhan_giai' => 'Ngày nhận giải',
			'pf_mo_ta' => 'Mô tả',
			'ma_tai_khoan' => 'Ma Tai Khoan',

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

		$criteria->compare('pf_ma_giai_thuong',$this->pf_ma_giai_thuong);
		$criteria->compare('pf_ten_giai_thuong',$this->pf_ten_giai_thuong,true);
		$criteria->compare('pf_ngay_nhan_giai',$this->pf_ngay_nhan_giai,true);
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
	 * @return PF_Giaithuong the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
