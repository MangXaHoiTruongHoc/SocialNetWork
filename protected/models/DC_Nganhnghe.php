<?php

/**
 * This is the model class for table "dc_nganhnghe".
 *
 * The followings are the available columns in table 'dc_nganhnghe':
 * @property integer $ma_nganh_nghe
 * @property string $ten_nganh_nghe
 */
class DC_Nganhnghe extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dc_nganhnghe';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ten_nganh_nghe', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ma_nganh_nghe, ten_nganh_nghe', 'safe', 'on'=>'search'),
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
			'muctieu'=>array(self::BELONGS_TO,'PF_Muctieunghenghiep','ma_nganh_nghe')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ma_nganh_nghe' => 'Ma Nganh Nghe',
			'ten_nganh_nghe' => 'Ten Nganh Nghe',
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

		$criteria->compare('ma_nganh_nghe',$this->ma_nganh_nghe);
		$criteria->compare('ten_nganh_nghe',$this->ten_nganh_nghe,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DC_Nganhnghe the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
