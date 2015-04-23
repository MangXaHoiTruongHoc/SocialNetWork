<?php

class PF_GioihanController extends Controller
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
			'accessControl', // perform access control for CRUD operations
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
		$model=new PF_Gioihan;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PF_Gioihan']))
		{
			$model->attributes=$_POST['PF_Gioihan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->pf_ma_trangthai));
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

		
			//$model->attributes=$_POST['PF_Gioihan'];
			if(isset($_POST['tt_totnghiep'])){
			$model->pf_tt_totnghiep = $_POST['tt_totnghiep'];
			}
			if(isset($_POST['tt_kynang'])){
			$model->pf_tt_kynang = $_POST['tt_kynang'];
			}
			if(isset($_POST['tt_ttbs'])){
			$model->pf_tt_ttbs = $_POST['tt_ttbs'];
			}
			if(isset($_POST['tt_taikhoan'])){
			$model->pf_tt_taikhoan = $_POST['tt_taikhoan'];
			}
			if(isset($_POST['tt_hdnk'])){
				$model->pf_tt_hdngoaikhoa = $_POST['tt_hdnk'];
			}
			if(isset($_POST['tt_hdht'])){
				$model->pf_tt_hdhoctap = $_POST['tt_hdht'];
			}
			if(isset($_POST['tt_ngoaingu'])){
				$model->pf_tt_ngoaingu = $_POST['tt_ngoaingu'];
			}
			if(isset($_POST['tt_knlamviec'])){
				$model->pf_tt_knlamviec = $_POST['tt_knlamviec'];
			}
			if(isset($_POST['tt_mtnghenghiep'])){
				$model->pf_tt_mtnghenghiep = $_POST['tt_mtnghenghiep'];
			}
			if($model->save()){

			}

		

	
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('PF_Gioihan');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new PF_Gioihan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PF_Gioihan']))
			$model->attributes=$_GET['PF_Gioihan'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PF_Gioihan the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=PF_Gioihan::model()->findByAttributes(array('ma_tai_khoan'=>$id));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param PF_Gioihan $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pf--gioihan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
