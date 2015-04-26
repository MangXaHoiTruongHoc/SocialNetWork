<?php

class PF_GiaithuongController extends Controller
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
		$model=new PF_Giaithuong;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		
			$images = array();
            if(isset($_POST['PF_Giaithuong']))
            { 
	            $model->attributes=$_POST['PF_Giaithuong'];
	            $model->ma_tai_khoan = yii::app()->session['ma_tai_khoan'];
	            
	            $images = CUploadedFile::getInstancesByName('images');
	         
	            if (isset($images) && count($images) > 0) 
	            {
	          
		            // go through each uploaded image
		            foreach ($images as $image => $pic) 
		            {
		            
		            if ($pic->saveAs(Yii::getPathOfAlias('webroot').'/upload/giaithuong/'.$pic->name)) 
		            {
		            // add it to the main model now
		            $model->save();//save your gallery first
		            $img_add = new PF_Hinhanhgiaithuong();
		            $img_add->pf_hinh_anh_gt = $pic->name; //it might be $img_add->name for you, filename is just what I chose to call it in my model
		            $img_add->pf_ma_giai_thuong = $model->pf_ma_giai_thuong; // this links your picture model to the main model (like your user, or profile model)
		            //echo $model->id .' # '.$pic->name.'<br />';
		            $img_add->save(); // save your imagesDONE
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

		yii::app()->session['pf_ma_giai_thuong'] = $model->pf_ma_giai_thuong;

		$images = array();
            if(isset($_POST['PF_Giaithuong']))
            { 
	            $model->attributes=$_POST['PF_Giaithuong'];
	            $images = CUploadedFile::getInstancesByName('images');
	            if (isset($images) && count($images) > 0) 
	            {
	          
		            // go through each uploaded image
		            foreach ($images as $image => $pic) 
		            {
		            
		            if ($pic->saveAs(Yii::getPathOfAlias('webroot').'/upload/giaithuong/'.$pic->name)) 
		            {
		            // add it to the main model now
		            $img_add = new PF_Hinhanhgiaithuong();
		            $img_add->pf_hinh_anh_gt = $pic->name; //it might be $img_add->name for you, filename is just what I chose to call it in my model
		            $img_add->pf_ma_giai_thuong = $model->pf_ma_giai_thuong; // this links your picture model to the main model (like your user, or profile model)
		            //echo $model->id .' # '.$pic->name.'<br />';
		            $img_add->save(); // save your imagesDONE
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
		$this->loadModel($id)->delete();
		// delete mutilfile
		$image = PF_Hinhanhgiaithuong::model()->findallByAttributes(array('pf_ma_giai_thuong'=>$id));
		// var_dump($image);die;
		foreach ($image as $key => $value) {
			 // $deleteimg=PF_Hinhanhhdnk::model()->find($value->pf_ma_hinh_anh_hdnk); 
			// delete hình trong thư mục
			unlink(getcwd()."/upload/giaithuong/".$value->pf_hinh_anh_gt);	
			// delete hình trong csdl
    		$value->delete();
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
		$dataProvider=new CActiveDataProvider('PF_Giaithuong');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new PF_Giaithuong('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PF_Giaithuong']))
			$model->attributes=$_GET['PF_Giaithuong'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PF_Giaithuong the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=PF_Giaithuong::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param PF_Giaithuong $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pf--giaithuong-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
