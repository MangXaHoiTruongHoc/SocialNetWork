<?php

/**
 * This is the model class for table "pf_hinhanhhdnk".
 *
 * The followings are the available columns in table 'pf_hinhanhhdnk':
 * @property integer $pf_ma_hinh_anh_hdnk
 * @property string $pf_hinh_anh_hdnk
 * @property integer $pf_ma_hdnk
 */
class PF_Hinhanhhdnk extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pf_hinhanhhdnk';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pf_ma_hdnk', 'numerical', 'integerOnly'=>true),
			array('pf_hinh_anh_hdnk', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pf_ma_hinh_anh_hdnk, pf_hinh_anh_hdnk, pf_ma_hdnk', 'safe', 'on'=>'search'),
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
			'pf_ma_hinh_anh_hdnk' => 'Pf Ma Hinh Anh Hdnk',
			'pf_hinh_anh_hdnk' => 'Pf Hinh Anh Hdnk',
			'pf_ma_hdnk' => 'Pf Ma Hdnk',
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

		$criteria->compare('pf_ma_hinh_anh_hdnk',$this->pf_ma_hinh_anh_hdnk);
		$criteria->compare('pf_hinh_anh_hdnk',$this->pf_hinh_anh_hdnk,true);
		$criteria->compare('pf_ma_hdnk',$this->pf_ma_hdnk);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PF_Hinhanhhdnk the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
