<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */
$this->layout="//layouts/index"; //dua layout theo muon
$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);

     $this->menu= array(
     array('label'=>'Thông Tin Người Dùng', 'url'=>array('taikhoan/create')),
     array('label'=>'Học Tập', 'url'=>array('contact')),
     array('label'=>'Kỹ năng', 'url'=>array('#')),
     array('label'=>'Nghề Nghiệp', 'url'=>array('#')),
     array('label'=>'Hoạt Động', 'url'=>array('site/page&view=about')),
     );

?>

<h1>Contact Us</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
</p>

 

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
	'validateOnSubmit'=>true,
	),
)); ?>
<div class="widget">
	<!-- Widget heading -->
    <div class="widget-head">
        <h4 class="heading">Validate a form with jQuery</h4>
    </div>
    <!-- // Widget heading END -->
      <div class="widget-body innerAll inner-2x">
        <!-- Row -->
        <div class="row innerLR">

			<?php echo $form->errorSummary($model); ?>
			 
			<div class="form-group">
				<?php echo $form->labelEx($model,'name',array('class'=>'col-md-4 control-label')); ?>
				<div  class="col-md-8">
				<?php echo $form->textField($model,'name',array('class'=>'form-control')); ?>
				</div>
				<?php echo $form->error($model,'name'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'email'); ?>
				<?php echo $form->textField($model,'email'); ?>
				<?php echo $form->error($model,'email'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'subject'); ?>
				<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
				<?php echo $form->error($model,'subject'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'body'); ?>
				<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
				<?php echo $form->error($model,'body'); ?>
			</div>

			<?php if(CCaptcha::checkRequirements()): ?>
			<div class="row">
				<?php echo $form->labelEx($model,'verifyCode'); ?>
				<div>
				<?php $this->widget('CCaptcha'); ?>
				<?php echo $form->textField($model,'verifyCode'); ?>
				</div>
				<div class="hint">Please enter the letters as they are shown in the image above.
				<br/>Letters are not case-sensitive.</div>
				<?php echo $form->error($model,'verifyCode'); ?>
			</div>
			<?php endif; ?>

			<div class="row buttons">
				<?php echo CHtml::submitButton('Submit'); ?>
			</div>
		</div>
	</div>
</div>
<?php $this->endWidget(); ?>

<?php endif; ?>