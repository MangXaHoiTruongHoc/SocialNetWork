<?php

/**
 * This is the model class for table "dc_binhluan".
 *
 * The followings are the available columns in table 'dc_binhluan':
 * @property integer $ma_tai_khoan
 * @property string $noi_dung
 * @property integer $ht_ma_tai_lieu
 */
class DC_Binhluan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dc_binhluan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ma_tai_khoan, noi_dung, ht_ma_tai_lieu', 'required'),
			array('ma_tai_khoan, ht_ma_tai_lieu', 'numerical', 'integerOnly'=>true),
			array('noi_dung', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ma_tai_khoan, noi_dung, ht_ma_tai_lieu', 'safe', 'on'=>'search'),
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
			'ma_tai_khoan' => 'Ma Tai Khoan',
			'noi_dung' => 'Noi Dung',
			'ht_ma_tai_lieu' => 'Ht Ma Tai Lieu',
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

		$criteria->compare('ma_tai_khoan',$this->ma_tai_khoan);
		$criteria->compare('noi_dung',$this->noi_dung,true);
		$criteria->compare('ht_ma_tai_lieu',$this->ht_ma_tai_lieu);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DC_Binhluan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
