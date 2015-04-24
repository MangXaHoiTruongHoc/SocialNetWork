<?php

/**
 * This is the model class for table "pf_hinhanhgiaithuong".
 *
 * The followings are the available columns in table 'pf_hinhanhgiaithuong':
 * @property integer $pf_ma_hinh_anh_gt
 * @property string $pf_hinh_anh_gt
 * @property integer $pf_ma_gai_thuong
 */
class PF_Hinhanhgiaithuong extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pf_hinhanhgiaithuong';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pf_ma_giai_thuong', 'numerical', 'integerOnly'=>true),
			array('pf_hinh_anh_gt', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pf_ma_hinh_anh_gt, pf_hinh_anh_gt, pf_ma_giai_thuong', 'safe', 'on'=>'search'),
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
			'pf_ma_hinh_anh_gt' => 'Pf Ma Hinh Anh Gt',
			'pf_hinh_anh_gt' => 'Pf Hinh Anh Gt',
			'pf_ma_giai_thuong' => 'Pf Ma Gai Thuong',
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

		$criteria->compare('pf_ma_hinh_anh_gt',$this->pf_ma_hinh_anh_gt);
		$criteria->compare('pf_hinh_anh_gt',$this->pf_hinh_anh_gt,true);
		$criteria->compare('pf_ma_giai_thuong',$this->pf_ma_gai_thuong);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PF_Hinhanhgiaithuong the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
