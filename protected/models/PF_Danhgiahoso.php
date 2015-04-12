<?php

/**
 * This is the model class for table "pf_danhgiahoso".
 *
 * The followings are the available columns in table 'pf_danhgiahoso':
 * @property integer $pf_ma_danh_gia_ho_so
 * @property integer $ma_tai_khoan
 * @property integer $pf_ma_ky_nang
 * @property integer $pf_ma_hdnk
 * @property integer $pf_ma_hdht
 * @property string $pf_noi_dung
 * @property string $email
 */
class PF_Danhgiahoso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pf_danhgiahoso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pf_ma_danh_gia_ho_so, ma_tai_khoan, pf_ma_ky_nang, pf_ma_hdnk, pf_ma_hdht', 'numerical', 'integerOnly'=>true),
			array('email', 'length', 'max'=>50),
			array('pf_noi_dung', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pf_ma_danh_gia_ho_so, ma_tai_khoan, pf_ma_ky_nang, pf_ma_hdnk, pf_ma_hdht, pf_noi_dung, email', 'safe', 'on'=>'search'),
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
			'pf_ma_danh_gia_ho_so' => 'Pf Ma Danh Gia Ho So',
			'ma_tai_khoan' => 'Ma Tai Khoan',
			'pf_ma_ky_nang' => 'Pf Ma Ky Nang',
			'pf_ma_hdnk' => 'Pf Ma Hdnk',
			'pf_ma_hdht' => 'Pf Ma Hdht',
			'pf_noi_dung' => 'Pf Noi Dung',
			'email' => 'Email',
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

		$criteria->compare('pf_ma_danh_gia_ho_so',$this->pf_ma_danh_gia_ho_so);
		$criteria->compare('ma_tai_khoan',$this->ma_tai_khoan);
		$criteria->compare('pf_ma_ky_nang',$this->pf_ma_ky_nang);
		$criteria->compare('pf_ma_hdnk',$this->pf_ma_hdnk);
		$criteria->compare('pf_ma_hdht',$this->pf_ma_hdht);
		$criteria->compare('pf_noi_dung',$this->pf_noi_dung,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PF_Danhgiahoso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
