<?php

/**
 * This is the model class for table "pf_ngoaingu".
 *
 * The followings are the available columns in table 'pf_ngoaingu':
 * @property integer $pf_ma_ngoai_ngu
 * @property string $pf_ten_ngoai_ngu
 * @property integer $pf_ma_muc_do_nn
 * @property integer $ma_tai_khoan
 */
class PF_Ngoaingu extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pf_ngoaingu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pf_ten_ngoai_ngu, pf_ma_muc_do_nn, ma_tai_khoan', 'required'),
			array('pf_ma_muc_do_nn, ma_tai_khoan', 'numerical', 'integerOnly'=>true),
			array('pf_ten_ngoai_ngu', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pf_ma_ngoai_ngu, pf_ten_ngoai_ngu, pf_ma_muc_do_nn, ma_tai_khoan', 'safe', 'on'=>'search'),
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
			'mucdo'=>array(self::HAS_ONE,'PF_Mucdongoaingu','pf_ma_muc_do_nn')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			//'pf_ma_ngoai_ngu' => 'Pf Ma Ngoai Ngu',
			'pf_ten_ngoai_ngu' => 'Tên ngoại ngữ',
			'pf_ma_muc_do_nn' => 'Mức độ ngoại ngữ',
			
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

		$criteria->compare('pf_ma_ngoai_ngu',$this->pf_ma_ngoai_ngu);
		$criteria->compare('pf_ten_ngoai_ngu',$this->pf_ten_ngoai_ngu,true);
		$criteria->compare('pf_ma_muc_do_nn',$this->pf_ma_muc_do_nn);
		$criteria->compare('ma_tai_khoan',$this->ma_tai_khoan);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PF_Ngoaingu the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
