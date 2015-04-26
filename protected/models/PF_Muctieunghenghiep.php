<?php

/**
 * This is the model class for table "pf_muctieunghenghiep".
 *
 * The followings are the available columns in table 'pf_muctieunghenghiep':
 * @property integer $pf_ma_muc_tieu
 * @property string $pf_ten_cong_ty
 * @property integer $ma_vi_tri
 * @property string $pf_muc_tieu
 * @property integer $ma_tai_khoan
 * @property integer $pf_ma_loai_cv
 * @property string $pf_noi_lam_viec
 */
class PF_Muctieunghenghiep extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pf_muctieunghenghiep';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pf_ten_cong_ty, ma_vi_tri, pf_muc_tieu, ma_tai_khoan, pf_ma_loai_cv', 'required'),
			array('ma_vi_tri, ma_tai_khoan, pf_ma_loai_cv', 'numerical', 'integerOnly'=>true),
			array('pf_ten_cong_ty', 'length', 'max'=>50),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pf_ma_muc_tieu, pf_ten_cong_ty, ma_vi_tri, pf_muc_tieu, ma_tai_khoan, pf_ma_loai_cv', 'safe', 'on'=>'search'),
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
			'loaicv'=>array(self::HAS_ONE,'PF_Loaicongviec','pf_ma_loai_cv')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			
			'pf_ten_cong_ty' => 'Tên công ty',
			'ma_vi_tri' => 'Vị trí',
			'pf_muc_tieu' => 'Mục tiêu',
			
			'pf_ma_loai_cv' => 'Loại công việc',
			'pf_noi_lam_viec' => 'Nơi làm việc',
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

		$criteria->compare('pf_ma_muc_tieu',$this->pf_ma_muc_tieu);
		$criteria->compare('pf_ten_cong_ty',$this->pf_ten_cong_ty,true);
		$criteria->compare('ma_vi_tri',$this->ma_vi_tri);
		$criteria->compare('pf_muc_tieu',$this->pf_muc_tieu,true);
		$criteria->compare('ma_tai_khoan',$this->ma_tai_khoan);
		$criteria->compare('pf_ma_loai_cv',$this->pf_ma_loai_cv);
		$criteria->compare('pf_noi_lam_viec',$this->pf_noi_lam_viec,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PF_Muctieunghenghiep the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
