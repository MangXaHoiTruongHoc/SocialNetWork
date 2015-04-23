<?php

/**
 * This is the model class for table "pf_loaicongviec".
 *
 * The followings are the available columns in table 'pf_loaicongviec':
 * @property integer $pf_ma_loai_cv
 * @property string $pf_ten_loai_cv
 */
class PF_Loaicongviec extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pf_loaicongviec';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pf_ten_loai_cv', 'required'),
			array('pf_ten_loai_cv', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pf_ma_loai_cv, pf_ten_loai_cv', 'safe', 'on'=>'search'),
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
			'muctieu'=>array(self::BELONGS_TO,'PF_Muctieunghenghiep','pf_ma_loai_cv')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pf_ma_loai_cv' => 'Pf Ma Loai Cv',
			'pf_ten_loai_cv' => 'Pf Ten Loai Cv',
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

		$criteria->compare('pf_ma_loai_cv',$this->pf_ma_loai_cv);
		$criteria->compare('pf_ten_loai_cv',$this->pf_ten_loai_cv,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PF_Loaicongviec the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
