<?php

/**
 * This is the model class for table "muctieunghenghiep".
 *
 * The followings are the available columns in table 'muctieunghenghiep':
 * @property integer $mamuctieu
 * @property string $tencongty
 * @property string $vitri
 * @property string $muctieu
 * @property integer $matk
 * @property integer $maloaicv
 * @property integer $matinhthanh
 */
class Muctieunghenghiep extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'muctieunghenghiep';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tencongty, vitri, muctieu, maloaicv, matinhthanh', 'required'),
			array('matk, maloaicv, matinhthanh', 'numerical', 'integerOnly'=>true),
			array('tencongty, vitri', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('mamuctieu, tencongty, vitri, muctieu, matk, maloaicv, matinhthanh', 'safe', 'on'=>'search'),
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
			'mamuctieu' => 'Mamuctieu',
			'tencongty' => 'Tencongty',
			'vitri' => 'Vitri',
			'muctieu' => 'Muctieu',
			
			'maloaicv' => 'Maloaicv',
			'matinhthanh' => 'Matinhthanh',
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

		$criteria->compare('mamuctieu',$this->mamuctieu);
		$criteria->compare('tencongty',$this->tencongty,true);
		$criteria->compare('vitri',$this->vitri,true);
		$criteria->compare('muctieu',$this->muctieu,true);
		$criteria->compare('matk',$this->matk);
		$criteria->compare('maloaicv',$this->maloaicv);
		$criteria->compare('matinhthanh',$this->matinhthanh);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Muctieunghenghiep the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
