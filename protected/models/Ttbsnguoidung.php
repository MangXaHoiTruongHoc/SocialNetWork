<?php

/**
 * This is the model class for table "ttbsnguoidung".
 *
 * The followings are the available columns in table 'ttbsnguoidung':
 * @property integer $mattrnguoidung
 * @property string $dantoc
 * @property string $quoctich
 * @property string $sothich
 * @property string $tongiao
 * @property string $slogan
 * @property integer $matk
 */
class Ttbsnguoidung extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ttbsnguoidung';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dantoc, quoctich, sothich, tongiao, slogan', 'required'),
			array('matk', 'numerical', 'integerOnly'=>true),
			array('dantoc', 'length', 'max'=>10),
			array('quoctich, tongiao', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('mattrnguoidung, dantoc, quoctich, sothich, tongiao, slogan, matk', 'safe', 'on'=>'search'),
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
			'mattrnguoidung' => 'Mattrnguoidung',
			'dantoc' => 'Dantoc',
			'quoctich' => 'Quoctich',
			'sothich' => 'Sothich',
			'tongiao' => 'Tongiao',
			'slogan' => 'Slogan',
			
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

		$criteria->compare('mattrnguoidung',$this->mattrnguoidung);
		$criteria->compare('dantoc',$this->dantoc,true);
		$criteria->compare('quoctich',$this->quoctich,true);
		$criteria->compare('sothich',$this->sothich,true);
		$criteria->compare('tongiao',$this->tongiao,true);
		$criteria->compare('slogan',$this->slogan,true);
		$criteria->compare('matk',$this->matk);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ttbsnguoidung the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
