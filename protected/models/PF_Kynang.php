<?php

/**
 * This is the model class for table "pf_kynang".
 *
 * The followings are the available columns in table 'pf_kynang':
 * @property integer $pf_ma_ky_nang
 * @property string $pf_ky_nang
 * @property integer $pf_so_nam_kinh_nghiem
 * @property string $pf_mo_ta
 * @property integer $ma_tai_khoan
 * @property integer $pf_ma_muc_do_kn
 */
class PF_Kynang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pf_kynang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pf_ky_nang, pf_so_nam_kinh_nghiem, pf_mo_ta, ma_tai_khoan', 'required'),
			array('pf_so_nam_kinh_nghiem, ma_tai_khoan, pf_ma_muc_do_kn', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pf_ma_ky_nang, pf_ky_nang, pf_so_nam_kinh_nghiem, pf_mo_ta, ma_tai_khoan, pf_ma_muc_do_kn', 'safe', 'on'=>'search'),
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
			'pf_ma_ky_nang' => 'Mã kỹ năng',
			'pf_ky_nang' => 'Kỹ năng',
			'pf_so_nam_kinh_nghiem' => 'Số năm kinh nghiệm',
			'pf_mo_ta' => 'Mô tả',
			'pf_ma_muc_do_kn' => 'Mức độ kỹ năng',
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

		$criteria->compare('pf_ma_ky_nang',$this->pf_ma_ky_nang);
		$criteria->compare('pf_ky_nang',$this->pf_ky_nang,true);
		$criteria->compare('pf_so_nam_kinh_nghiem',$this->pf_so_nam_kinh_nghiem);
		$criteria->compare('pf_mo_ta',$this->pf_mo_ta,true);
		$criteria->compare('ma_tai_khoan',$this->ma_tai_khoan);
		$criteria->compare('pf_ma_muc_do_kn',$this->pf_ma_muc_do_kn);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PF_Kynang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
