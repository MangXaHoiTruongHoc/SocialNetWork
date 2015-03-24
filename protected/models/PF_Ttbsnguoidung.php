<?php

/**
 * This is the model class for table "ttbsnguoidung".
 *
 * The followings are the available columns in table 'ttbsnguoidung':
 * @property integer $pf_ma_ttr_nguoi_dung
 * @property string $pf_dan_toc
 * @property string $pf_quoc_tich
 * @property string $pf_so_thich
 * @property string $pf_ton_giao
 * @property string $pf_slogan
 * @property integer $ma_tai_khoan
 * @property integer $pf_ma_chuyen_nganh
 */
class PF_Ttbsnguoidung extends CActiveRecord
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
			array('pf_dan_toc, pf_quoc_tich, pf_so_thich, pf_ton_giao, pf_slogan, pf_ma_chuyen_nganh,ma_tai_khoan', 'required'),
			array('ma_tai_khoan, pf_ma_chuyen_nganh', 'numerical', 'integerOnly'=>true),
			array('pf_dan_toc', 'length', 'max'=>10),
			array('pf_quoc_tich, pf_ton_giao', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pf_ma_ttr_nguoi_dung, pf_dan_toc, pf_quoc_tich, pf_so_thich, pf_ton_giao, pf_slogan, ma_tai_khoan, pf_ma_chuyen_nganh', 'safe', 'on'=>'search'),
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
        'chuyennganh'=>array(self::HAS_ONE,'PF_Chuyennganh','pf_ma_chuyen_nganh')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pf_ma_ttr_nguoi_dung' => 'Mã TTBS Người Dùng',
			'pf_dan_toc' => 'Dân Tộc',
			'pf_quoc_tich' => 'Quốc Tịch',
			'pf_so_thich' => 'Sở Thích',
			'pf_ton_giao' => 'Tôn Giáo',
			'pf_slogan' => 'Slogan',
			'ma_tai_khoan' => 'Mã tài Khoản',
			'pf_ma_chuyen_nganh' => 'Chuyên Ngành',
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

		$criteria->compare('pf_ma_ttr_nguoi_dung',$this->pf_ma_ttr_nguoi_dung);
		$criteria->compare('pf_dan_toc',$this->pf_dan_toc,true);
		$criteria->compare('pf_quoc_tich',$this->pf_quoc_tich,true);
		$criteria->compare('pf_so_thich',$this->pf_so_thich,true);
		$criteria->compare('pf_ton_giao',$this->pf_ton_giao,true);
		$criteria->compare('pf_slogan',$this->pf_slogan,true);
		$criteria->compare('ma_tai_khoan',$this->ma_tai_khoan);
		$criteria->compare('pf_ma_chuyen_nganh',$this->pf_ma_chuyen_nganh);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PF_Ttbsnguoidung the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
