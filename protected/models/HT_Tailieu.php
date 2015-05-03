<?php

/**
 * This is the model class for table "ht_tailieu".
 *
 * The followings are the available columns in table 'ht_tailieu':
 * @property integer $ht_ma_tai_lieu
 * @property string $gioi_thieu
 * @property string $ten_tai_lieu
 * @property string $tieu_de
 * @property integer $so_trang
 * @property string $tac_gia
 * @property string $nha_xuat_ban
 */
class HT_Tailieu extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ht_tailieu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tieu_de, ht_ma_nhom_tl, ht_ma_the_loai', 'required'),
			array('ht_ma_tai_lieu, so_trang', 'numerical', 'integerOnly'=>true),
			array('gioi_thieu', 'length', 'max'=>255),
			array('ten_tai_lieu, tieu_de', 'length', 'max'=>100),
			array('tac_gia, nha_xuat_ban', 'length', 'max'=>50),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ht_ma_tai_lieu, ht_ma_nhom_tl, ht_ma_the_loai, gioi_thieu, ten_tai_lieu, tieu_de, so_trang, tac_gia, nha_xuat_ban', 'safe', 'on'=>'search'),
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
			'theloai'=>array(self::BELONGS_TO, 'HT_Theloai', 'ht_ma_the_loai'),
                  
            'nhomtailieu'=>array(self::BELONGS_TO, 'HT_Nhomtailieu', 'ht_ma_nhom_tl')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			//'ht_ma_tai_lieu' => 'Ht Ma Tai Lieu',
			'gioi_thieu' => 'Giới Thiệu',
			'ten_tai_lieu' => 'Tên Tài Liệu',
			'tieu_de' => 'Tiêu Đề',
			'so_trang' => 'Số Trang',
			'tac_gia' => 'Tác Giả',
			'nha_xuat_ban' => 'Nhà Xuất Bản',
			'ht_ma_the_loai' => 'Thể loại',
			'ht_ma_nhom_tl' => 'Nhóm Tài Liệu',
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

		$criteria->compare('ht_ma_tai_lieu',$this->ht_ma_tai_lieu);
		$criteria->compare('gioi_thieu',$this->gioi_thieu,true);
		$criteria->compare('ten_tai_lieu',$this->ten_tai_lieu,true);
		$criteria->compare('tieu_de',$this->tieu_de,true);
		$criteria->compare('so_trang',$this->so_trang);
		$criteria->compare('tac_gia',$this->tac_gia,true);
		$criteria->compare('nha_xuat_ban',$this->nha_xuat_ban,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HT_Tailieu the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
