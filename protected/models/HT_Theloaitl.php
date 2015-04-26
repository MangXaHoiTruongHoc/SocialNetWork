<?php

/**
 * This is the model class for table "ht_theloaitl".
 *
 * The followings are the available columns in table 'ht_theloaitl':
 * @property integer $ht_ma_the_loai
 * @property string $ten_the_loai
 */
class HT_Theloaitl extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ht_theloaitl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ten_the_loai', 'required'),
			array('ten_the_loai', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ht_ma_the_loai, ten_the_loai', 'safe', 'on'=>'search'),
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
			'tailieu'=> array(self::HAS_MANY,'HT_Tailieu','ht_ma_the_loai'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ht_ma_the_loai' => 'Thể loại',
			'ten_the_loai' => 'Tên thể loại',
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

		$criteria->compare('ht_ma_the_loai',$this->ht_ma_the_loai);
		$criteria->compare('ten_the_loai',$this->ten_the_loai,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HT_Theloaitl the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	//select * from ht_theloaitl 
	public static function getAllTheLoai() {
 		$TheLoaiData = HT_Theloaitl::model()->findAll();
 		return $TheLoaiData;
	}
}
