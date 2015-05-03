<?php

class PF_DanhgiahosoController extends Controller
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
		

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PF_Danhgiahoso']))
		{	// Thực hiện kiểm tra giá trị post của 3 trường đc đánh giá
			if(isset($_POST['PF_Danhgiahoso']['pf_ma_ky_nang'])){
			$updatekn = PF_Danhgiahoso::model()->findallbyAttributes(array('email'=>$_POST['PF_Danhgiahoso']['email'],
			'pf_ma_ky_nang'=>$_POST['PF_Danhgiahoso']['pf_ma_ky_nang']));
			}
			if(isset($_POST['PF_Danhgiahoso']['pf_ma_hdnk'])){
			$updatenk = PF_Danhgiahoso::model()->findallbyAttributes(array('email'=>$_POST['PF_Danhgiahoso']['email'],
			'pf_ma_hdnk'=>$_POST['PF_Danhgiahoso']['pf_ma_hdnk']));
			}
			if(isset($_POST['PF_Danhgiahoso']['pf_ma_hdht'])){
			$updateht = PF_Danhgiahoso::model()->findallbyAttributes(array('email'=>$_POST['PF_Danhgiahoso']['email'],
			'pf_ma_hdht'=>$_POST['PF_Danhgiahoso']['pf_ma_hdht']));
			}
			// Thực hiện kiểm tra để thực hiện đánh giá khi đã có giá trị trong csdl
			if(!empty($updatekn)||!empty($updatenk)||!empty($updateht)){
				if(!empty($updatekn)){
					foreach ($updatekn as $key) {
				    }
					$model=$this->loadModel($key->pf_ma_danh_gia_ho_so);
					$model->attributes=$_POST['PF_Danhgiahoso'];
					$model->ma_tai_khoan = yii::app()->session['matk2'];
					$model->update();
					$this->redirect(Yii::app()->request->urlReferrer);
				}
				if(!empty($updatenk)){
					foreach ($updatenk as $key2) {
				    }
					$model=$this->loadModel($key2->pf_ma_danh_gia_ho_so);
					$model->attributes=$_POST['PF_Danhgiahoso'];
					$model->ma_tai_khoan = yii::app()->session['matk2'];
					$model->update();
					$this->redirect(Yii::app()->request->urlReferrer);
				}
				if(!empty($updateht)){
					foreach ($updateht as $key3) {
				    }
					$model=$this->loadModel($key3->pf_ma_danh_gia_ho_so);
					$model->attributes=$_POST['PF_Danhgiahoso'];
					$model->ma_tai_khoan = yii::app()->session['matk2'];
					$model->update();
					$this->redirect(Yii::app()->request->urlReferrer);
				}			
			}else{ // Nếu chưa có thì tiến hành thêm mới vào csdl

			$model=new PF_Danhgiahoso;	
			$model->attributes=$_POST['PF_Danhgiahoso'];
			$model->ma_tai_khoan = yii::app()->session['matk2'];
				if($model->save()){
					// Chuyen ve trang hien tai
					$this->redirect(Yii::app()->request->urlReferrer);
				}
			}	
		}

		/*$this->render('create',array(
			'model'=>$model,
		));*/
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

		if(isset($_POST['PF_Danhgiahoso']))
		{
			$model->attributes=$_POST['PF_Danhgiahoso'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->pf_ma_danh_gia_ho_so));
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
		$dataProvider=new CActiveDataProvider('PF_Danhgiahoso');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new PF_Danhgiahoso('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PF_Danhgiahoso']))
			$model->attributes=$_GET['PF_Danhgiahoso'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PF_Danhgiahoso the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=PF_Danhgiahoso::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param PF_Danhgiahoso $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pf--danhgiahoso-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
