<?php

/**
 * This is the model class for table "pf_gioihan".
 *
 * The followings are the available columns in table 'pf_gioihan':
 * @property integer $pf_ma_trangthai
 * @property integer $pf_tt_totnghiep
 * @property integer $pf_tt_taikhoan
 * @property integer $pf_tt_ttbs
 * @property integer $pf_tt_ngoaingu
 * @property integer $pf_tt_kynang
 * @property integer $pf_tt_hdhoctap
 * @property integer $pf_tt_hdngoaikhoa
 * @property integer $pf_tt_knlamviec
 * @property integer $pf_tt_mtnghenghiep
 * @property integer $ma_tai_khoan
 */
class PF_Gioihan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pf_gioihan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pf_tt_totnghiep, pf_tt_taikhoan, pf_tt_ttbs, pf_tt_ngoaingu, pf_tt_kynang, pf_tt_hdhoctap, pf_tt_hdngoaikhoa, pf_tt_knlamviec, pf_tt_mtnghenghiep, ma_tai_khoan', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pf_ma_trangthai, pf_tt_totnghiep, pf_tt_taikhoan, pf_tt_ttbs, pf_tt_ngoaingu, pf_tt_kynang, pf_tt_hdhoctap, pf_tt_hdngoaikhoa, pf_tt_knlamviec, pf_tt_mtnghenghiep, ma_tai_khoan', 'safe', 'on'=>'search'),
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
			'pf_ma_trangthai' => 'Pf Ma Trangthai',
			'pf_tt_totnghiep' => 'Pf Tt Totnghiep',
			'pf_tt_taikhoan' => 'Pf Tt Taikhoan',
			'pf_tt_ttbs' => 'Pf Tt Ttbs',
			'pf_tt_ngoaingu' => 'Pf Tt Ngoaingu',
			'pf_tt_kynang' => 'Pf Tt Kynang',
			'pf_tt_hdhoctap' => 'Pf Tt Hdhoctap',
			'pf_tt_hdngoaikhoa' => 'Pf Tt Hdngoaikhoa',
			'pf_tt_knlamviec' => 'Pf Tt Knlamviec',
			'pf_tt_mtnghenghiep' => 'Pf Tt Mtnghenghiep',
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

		$criteria->compare('pf_ma_trangthai',$this->pf_ma_trangthai);
		$criteria->compare('pf_tt_totnghiep',$this->pf_tt_totnghiep);
		$criteria->compare('pf_tt_taikhoan',$this->pf_tt_taikhoan);
		$criteria->compare('pf_tt_ttbs',$this->pf_tt_ttbs);
		$criteria->compare('pf_tt_ngoaingu',$this->pf_tt_ngoaingu);
		$criteria->compare('pf_tt_kynang',$this->pf_tt_kynang);
		$criteria->compare('pf_tt_hdhoctap',$this->pf_tt_hdhoctap);
		$criteria->compare('pf_tt_hdngoaikhoa',$this->pf_tt_hdngoaikhoa);
		$criteria->compare('pf_tt_knlamviec',$this->pf_tt_knlamviec);
		$criteria->compare('pf_tt_mtnghenghiep',$this->pf_tt_mtnghenghiep);
		$criteria->compare('ma_tai_khoan',$this->ma_tai_khoan);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PF_Gioihan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
