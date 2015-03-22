<?php

/**
 * This is the model class for table "anpham".
 *
 * The followings are the available columns in table 'anpham':
 * @property integer $maanpham
 * @property string $tenanpham
 * @property string $ngayanhanh
 * @property string $url
 * @property string $mota
 * @property integer $matk
 */
class Anpham extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'anpham';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tenanpham, ngayanhanh, url, mota', 'required'),
			array('matk', 'numerical', 'integerOnly'=>true),
			array('tenanpham', 'length', 'max'=>50),
			array('ngayanhanh', 'length', 'max'=>10),
			array('url', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('maanpham, tenanpham, ngayanhanh, url, mota, matk', 'safe', 'on'=>'search'),
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
			'maanpham' => 'Maanpham',
			'tenanpham' => 'Tenanpham',
			'ngayanhanh' => 'Ngayanhanh',
			'url' => 'Url',
			'mota' => 'Mota',
			
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

		$criteria->compare('maanpham',$this->maanpham);
		$criteria->compare('tenanpham',$this->tenanpham,true);
		$criteria->compare('ngayanhanh',$this->ngayanhanh,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('mota',$this->mota,true);
		$criteria->compare('matk',$this->matk);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Anpham the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
