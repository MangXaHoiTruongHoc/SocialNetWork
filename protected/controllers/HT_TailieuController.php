<?php

class HT_TailieuController extends Controller
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
		$model= new HT_Tailieu;
		$files = array();
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['HT_Tailieu']))
		{
			$random = rand(0,9999); 
			$model->attributes=$_POST['HT_Tailieu'];
			$files = CUploadedFile::getInstancesByName('files');
			//$fileName = "{$random}-{$files}";

			if (isset($files) && count($files) > 0) 
	            {
	          
		            // go through each uploaded file
		            foreach ($files as $file => $fl) 
		            {
		            
		            if ($fl->saveAs(Yii::getPathOfAlias('webroot').'/upload/files/'.$fl->name.$random)) 
		            {
		            // add it to the main model now
		            $model->save();//save your gallery first
		            $fil_add = new HT_TapTin();
		            $fil_add->ten_tap_tin = $fl->name.$random; //it might be $img_add->name for you, filename is just what I chose to call it in my model
		            $fil_add->ht_ma_tai_lieu = $model->ht_ma_tai_lieu; // this links your picture model to the main model (like your user, or profile model)
		            //echo $model->id .' # '.$pic->name.'<br />';
		            $fil_add->save(); // save your imagesDONE
		            }
		            else
		            {
		            echo 'write your own';
		            }
		            }
	            }
			if($model->save())
				$this->redirect(array('view','id'=>$model->ht_ma_tai_lieu));
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
		// var_dump($id);die;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['HT_Tailieu']))
		{
			$model->attributes=$_POST['HT_Tailieu'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ht_ma_tai_lieu));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		// var_dump($id);die;
		$this->loadModel($id)->delete();
		$file = HT_Taptin::model()->findallByAttributes(array('ht_ma_tai_lieu'=>$id));
		foreach ($file as $key => $value) 
		{
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
		$dataProvider=new CActiveDataProvider('HT_Tailieu');
		
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new HT_Tailieu('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['HT_Tailieu']))
			$model->attributes=$_GET['HT_Tailieu'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return HT_Tailieu the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=HT_Tailieu::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param HT_Tailieu $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='ht--tailieu-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
