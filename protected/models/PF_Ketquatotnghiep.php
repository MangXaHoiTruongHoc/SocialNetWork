<?php

/**
 * This is the model class for table "ketquatotnghiep".
 *
 * The followings are the available columns in table 'ketquatotnghiep':
 * @property integer $pf_ma_ket_qua_tn
 * @property string $pf_ket_qua
 */
class PF_Ketquatotnghiep extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ketquatotnghiep';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pf_ket_qua', 'required'),
			array('pf_ket_qua', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pf_ma_ket_qua_tn, pf_ket_qua', 'safe', 'on'=>'search'),
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
        'totnghiep'=>array(self::BELONGS_TO,'PF_Totnghiep','pf_ma_ket_qua_tn')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pf_ma_ket_qua_tn' => 'Pf Ma Ket Qua Tn',
			'pf_ket_qua' => 'Pf Ket Qua',
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

		$criteria->compare('pf_ma_ket_qua_tn',$this->pf_ma_ket_qua_tn);
		$criteria->compare('pf_ket_qua',$this->pf_ket_qua,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PF_Ketquatotnghiep the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
