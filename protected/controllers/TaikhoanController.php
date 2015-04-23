<?php

class TaikhoanController extends Controller
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
				'actions'=>array('index','view','create'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('de@gmail.com'),
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
	    
		$model=new Taikhoan;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Taikhoan']))
		{
		    // Thực hiện upload ảnh .
            $random = rand(0,9999); 
			$model->attributes=$_POST['Taikhoan'];
            $uploadFile=CUploadedFile::getInstance($model,'hinh_dai_dien');
            $fileName = "{$random}-{$uploadFile}";
            $model->hinh_dai_dien = $fileName;
			if($model->save()){
                $uploadFile->saveAs(Yii::app()->basePath.'/../upload/'.$fileName);
				$this->redirect(array('//site/login','email'=>$model->email,'mat_khau'=>$model->mat_khau));
                }
		} 
		$this->render('create',array(
			'model'=>$model,
		));
	}
	public function actionRegister(){
	$model=new Taikhoan;	
	if(isset($_POST['Taikhoan']))
		{
		    // Thực hiện upload ảnh .
            $random = rand(0,9999); 
			$model->attributes=$_POST['Taikhoan'];
			$model->ngay_tao = new CDbExpression('NOW()');
            $uploadFile=CUploadedFile::getInstance($model,'hinh_dai_dien');
            $fileName = "{$random}-{$uploadFile}";
            $model->hinh_dai_dien = $fileName;
			if($model->save()){
                $uploadFile->saveAs(Yii::app()->basePath.'/../upload/'.$fileName);
                $gioihan = new PF_gioihan;
                $gioihan->ma_tai_khoan = $model->ma_tai_khoan;
                $gioihan->pf_tt_totnghiep = 0;
                $gioihan->pf_tt_taikhoan = 0;
                $gioihan->pf_tt_ttbs = 0;
                $gioihan->pf_tt_ngoaingu = 0;
                $gioihan->pf_tt_kynang = 0;
                $gioihan->pf_tt_hdhoctap = 0;
                $gioihan->pf_tt_hdngoaikhoa = 0;
                $gioihan->pf_tt_knlamviec = 0;
                $gioihan->pf_tt_mtnghenghiep = 0;
                $gioihan->save();
				$this->redirect(array('//site/login'));
			}
		}
	}
	public function actionCheckemail(){
		if(isset($_POST['email'])){
			$email = Taikhoan::model()->findAllByAttributes(array('email'=>$_POST['email']));
			$count = count($email);
			
			if($count > 0){
				echo "NO";
			}else{
				echo "YES";
			}
		}
	}
    //action about
     public function actionAbout(){
            // Lấy session email từ SiteController
            $email = Yii::app()->session['email'];
            if(isset($email)){
            // Thực hiện lấy mã tài khoản của người dùng khi đăng nhập vào
            $taikhoan = Taikhoan::model()->findAllByAttributes(array('email'=>$email)); 
            /*$taikhoan = Taikhoan::model()->findAll(array('condition'=>'email LIKE :email',
            'params'=>array(':email'=>"%$email%")));*/
                foreach($taikhoan as $tk){
                      $tk->ma_tai_khoan;
                }
            // Lưu mã tài khoản vào session['ma_tai_khoan']
            Yii::app()->session['ma_tai_khoan'] = $tk->ma_tai_khoan;
            $model = new Taikhoan;
            $matk = Yii::app()->session['ma_tai_khoan'];
            if(isset(yii::app()->session['matk2'])){
            	$matk = yii::app()->session['matk2'];
            }
            $model = $this->loadModel($matk);
            $this->render('about',array('model'=>$model));
        	}
        	else{
        		$this->redirect(array('//site/login'));
        	}
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

		if(isset($_POST['Taikhoan']))
		{
		    $_POST['Taikhoan']['hinh_dai_dien'] = $model->hinh_dai_dien;
           
			$model->attributes=$_POST['Taikhoan'];
            $uploadFile = CUploadedFile::getInstance($model,'hinh_dai_dien');
            $model->hinh_dai_dien = $uploadFile;
			if($model->save()){
			  
			     if(!empty($uploadFile)){
			         $uploadFile->saveAs(Yii::app()->basePath.'/../upload/'.$model->hinh_dai_dien);
			     }
                 $temp="";                                  
				 $this->redirect(array('create','temp'=>$temp));
                }
		}
        $temp = 'Update';    
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

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Taikhoan');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Taikhoan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Taikhoan']))
			$model->attributes=$_GET['Taikhoan'];
		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Taikhoan the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Taikhoan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Taikhoan $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='taikhoan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
   
}
