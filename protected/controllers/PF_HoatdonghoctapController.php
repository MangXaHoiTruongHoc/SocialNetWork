<?php

class PF_HoatdonghoctapController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			//'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new PF_Hoatdonghoctap;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		
		   $images = array();
            if(isset($_POST['PF_Hoatdonghoctap']))
            { 
	            $model->attributes=$_POST['PF_Hoatdonghoctap'];
	            $model->ma_tai_khoan = yii::app()->session['ma_tai_khoan'];
	            
	            $images = CUploadedFile::getInstancesByName('images');
	         
	            if (isset($images) && count($images) > 0) 
	            {
	          
		            // Thực hiện vòng lặp
		            foreach ($images as $image => $pic) 
		            {
		            // đổi tên image
		              $random = rand(0,9999); 	
		              $ext = end(explode('.', $pic->name));// lấy phần mở rộng jpg,png...
		              $rename = $random.".".$ext;
		              //
		            if ($pic->saveAs(Yii::getPathOfAlias('webroot').'/upload/hdht/'.$rename)) 
		            {
		            
		            $model->save();
		            $img_add = new PF_Hinhanhhdht();
		            $img_add->pf_hinh_anh_hdht = $rename; 
		            $img_add->pf_ma_hdht = $model->pf_ma_hdht; 
		            
		            $img_add->save(); 
		            }
		            else
		            {
		            echo 'write your own';
		            }
		            }
	            }
	             if($model->save())
		         $this->redirect(array('create'));
            }
            
            $this->render('create',array(
            'model'=>$model,
            ));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		yii::app()->session['pf_ma_hdht'] = $model->pf_ma_hdht;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$images = array();
            if(isset($_POST['PF_Hoatdonghoctap']))
            { 
	            $model->attributes=$_POST['PF_Hoatdonghoctap'];
	            $images = CUploadedFile::getInstancesByName('images');
	            if (isset($images) && count($images) > 0) 
	            {
	          
		            // Thực hiện vòng lặp
		            foreach ($images as $image => $pic) 
		            {
		             // đổi tên image
		              $random = rand(0,9999); 	
		              $ext = end(explode('.', $pic->name));// lấy phần mở rộng jpg,png...
		              $rename = $random.".".$ext;
		              //	
		            if ($pic->saveAs(Yii::getPathOfAlias('webroot').'/upload/hdht/'.$rename)) 
		            {
		            
		            $model->save();
		            $img_add = new PF_Hinhanhhdht();
		            $img_add->pf_hinh_anh_hdht = $rename; 
		            $img_add->pf_ma_hdht = $model->pf_ma_hdht; 
		           
		            $img_add->save(); 
		            }
		            else
		            {
		            echo 'write your own';
		            }
		            }
	            }
	           if($model->save()){
					$temp = "";
					$this->redirect(array('create','temp'=>$temp));
					}
            }

			$temp = "Update";
			$this->render('create',array(
				'model'=>$model,'temp'=>$temp
			));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$mtk = yii::app()->session['ma_tai_khoan'];
		$this->loadModel($id)->delete();
		$image = PF_Hinhanhhdht::model()->findallByAttributes(array('pf_ma_hdht'=>$id));
		foreach ($image as $key => $value) {
			 // $deleteimg=PF_Hinhanhhdnk::model()->find($value->pf_ma_hinh_anh_hdnk); 
			unlink(getcwd()."/upload/hdht/".$value->pf_hinh_anh_hdht);	
    		$value->delete();

		}
		//Thuc hien xoa danh gia hdht
		$danhgiahdht = PF_Danhgiahoso::model()->findAllByAttributes(array('ma_tai_khoan'=>$mtk,'pf_ma_hdht'=>$id));
		foreach ($danhgiahdht as $key1 => $value1) {
			$value1->delete();
		}
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('PF_Hoatdonghoctap');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new PF_Hoatdonghoctap('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PF_Hoatdonghoctap']))
			$model->attributes=$_GET['PF_Hoatdonghoctap'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PF_Hoatdonghoctap the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=PF_Hoatdonghoctap::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param PF_Hoatdonghoctap $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pf--hoatdonghoctap-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
