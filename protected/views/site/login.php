<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

/*$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);*/
?>
<!-- 
<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p> -->

<div class="innerLR ">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); 
?>
	<!-- <p class="note">Fields with <span class="required">*</span> are required.</p> -->

	
		
		<?php echo $form->textField($model,'email',array ('placeholder'=>'Your Email','class' => 'form-control text-center bg-gray ')); ?>
		<?php echo $form->error($model,'email'); ?>
	

		
		<?php echo $form->passwordField($model,'mat_khau',array ('placeholder'=>'Your Password','class' => 'form-control text-center bg-gray ')); ?>
		<?php echo $form->error($model,'mat_khau',array('style'=>'padding-top:0')); ?>
		
	
	<!-- <div class="form-control text-center bg-gray " style="height:40px;width:260px">
		<?php //echo $form->checkBox($model,'rememberMe'); ?>
		<?php //echo $form->label($model,'rememberMe'); ?>
		<?php //echo $form->error($model,'rememberMe'); ?>
	</div> -->

	<div class="innerT  ">
		<?php echo CHtml::submitButton('Login',array('class'=>'btn btn-primary ')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
