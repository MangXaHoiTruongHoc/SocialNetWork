<?php

/**
 * This is the model class for table "pf_noilamviec".
 *
 * The followings are the available columns in table 'pf_noilamviec':
 * @property integer $pf_ma_noi_lm
 * @property string $ma_tinh_thanh
 * @property integer $pf_ma_muc_tieu
 */
class PF_Noilamviec extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pf_noilamviec';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ma_tinh_thanh, pf_ma_muc_tieu', 'required'),
			array('pf_ma_muc_tieu', 'numerical', 'integerOnly'=>true),
			array('ma_tinh_thanh', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pf_ma_noi_lm, ma_tinh_thanh, pf_ma_muc_tieu', 'safe', 'on'=>'search'),
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
			'tinhthanh'=>array(self::MANY_MANY,'DC_Tinhthanh','ma_tinh_thanh')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pf_ma_noi_lm' => 'Pf Ma Noi Lm',
			'ma_tinh_thanh' => 'Ma Tinh Thanh',
			'pf_ma_muc_tieu' => 'Pf Ma Muc Tieu',
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

		$criteria->compare('pf_ma_noi_lm',$this->pf_ma_noi_lm);
		$criteria->compare('ma_tinh_thanh',$this->ma_tinh_thanh,true);
		$criteria->compare('pf_ma_muc_tieu',$this->pf_ma_muc_tieu);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PF_Noilamviec the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
