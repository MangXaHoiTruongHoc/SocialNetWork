<?php
/* @var $this PF_KynangController */
/* @var $model PF_Kynang */

//$this->menu=array(
//  array('label'=>'List PF_Kynang', 'url'=>array('index')),
//  array('label'=>'Create PF_Kynang', 'url'=>array('create')),
//  array('label'=>'Update PF_Kynang', 'url'=>array('update', 'id'=>$model->pf_ma_ky_nang)),
//  array('label'=>'Delete PF_Kynang', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pf_ma_ky_nang),'confirm'=>'Are you sure you want to delete this item?')),
//  array('label'=>'Manage PF_Kynang', 'url'=>array('admin')),
//);
$this->menu= array(
     array('label'=>'Thông tin người dùng', 'url'=>array('taikhoan/create')),
     array('label'=>'Thông tin bổ sung', 'url'=>array('pf_ttbsnguoidung/create')),
     array('label'=>'Tốt nghiệp', 'url'=>array('pf_totnghiep/create')),
     array('label'=>'Ngoại ngữ', 'url'=>array('pf_ngoaingu/create')),
     array('label'=>'Giải thưởng', 'url'=>array('pf_giaithuong/create')),
     array('label'=>'Kỹ năng', 'url'=>array('pf_kynang/create')),
      array('label'=>'Hoạt động học tập', 'url'=>array('pf_hoatdonghoctap/create')),
     array('label'=>'Hoạt động ngoại khóa', 'url'=>array('pf_hoatdongngoaikhoa/create')),
     array('label'=>'Kinh nghiệm làm việc', 'url'=>array('pf_kinhnghiemlamviec/create')),
     array('label'=>'Mục tiêu nghề nghiệp', 'url'=>array('pf_muctieunghenghiep/create')),
     ); 
?>


<div class="kynang<?php echo $model->pf_ma_ky_nang?>">
         <?php  


         //Kiem tra nguoi xem để ẩn hiện action đánh giá.
           if(isset(yii::app()->session['matk2'])){
                $action = array('label'=>$model->getAttributeLabel('pf_ky_nang'),
                        'type'=>'raw',
                        'value'=>$model->pf_ky_nang."
                        <a style='float: right' href='#modal-danhgia{$model->pf_ma_ky_nang}'  data-toggle='modal'>Đánh giá</a>
                        ");
            }else{
                //Delete totnghiep      
                $deleteajax= CHtml::ajaxLink('Xóa',
                "index.php?r=pf_kynang/delete&id=$model->pf_ma_ky_nang",
                array(
                                'type'=>'post',
                                'data' => null,
                                'success' => 'function(){
                                    alert("Xóa thành công");
                                    $(".kynang'.$model->pf_ma_ky_nang.'").
                                    slideUp("slow",function(){$(".kynang'.$model->pf_ma_ky_nang.'").remove();});
                                }'
                ),
                array( 'confirm'=>'Ban muon xoa chu',));
                //Kiem tra nguoi dùng để ẩn hiện action
                $action =  array('label'=>$model->getAttributeLabel('pf_ky_nang'),
                            'type'=>'raw',
                            'value'=>$model->pf_ky_nang."<div class='re_up' style='float: right; display:display'>
                            
                            <a href='index.php?r=pf_kynang/update&id={$model->pf_ma_ky_nang}'>Sửa</a> 
                            {$deleteajax} </div>"
                            );
            }
          
        ?>
  
    <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'attributes'=>array(
             $action,
            'pf_so_nam_kinh_nghiem',
            'pf_mo_ta',
        ),
    )); ?>
    <p></p>
</div>
<!-- Modal -->
<div class="modal fade" id="modal-danhgia<?php echo $model->pf_ma_ky_nang?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal heading -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title">Đánh Giá Kỹ Năng</h3>
            </div>
            <!-- // Modal heading END -->
            <!-- Modal body -->
            <div class="modal-body">
                <div class="innerAll">
                    <div class="innerLR">
                        
                               <?php $form=$this->beginWidget('CActiveForm', array(
                                'id'=>'taikhoan-form',
                                // Please note: When you enable ajax validation, make sure the corresponding
                                // controller action is handling ajax validation correctly.
                                // There is a call to performAjaxValidation() commented in generated controller code.
                                // See class documentation of CActiveForm for details on this.
                                'action'=>Yii::app()->createUrl('//pf_danhgiahoso/create'),
                                'enableAjaxValidation'=>false,
                                'htmlOptions' => array(
                                    'enctype' => 'multipart/form-data',
                                    'class'=>'form-horizontal margin-none','autocomplete'=>'off'
                                ),
                                'enableClientValidation'=>true,
                                'clientOptions'=>array(
                                    'validateOnSubmit'=>true,
                                ),
                                )); 
                                ?>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Kỹ năng</label>
                                <div class="col-sm-10">
                                    <input type="email" name='PF_Danhgiahoso[pf_ma_ky_nang]' class="form-control" id="inputEmail3" value="<?php echo $model->pf_ma_ky_nang?>" placeholder="Email" readonly >
                                </div>
                            </div>
                            <?php
                            if(isset(yii::app()->session['matk2'])){
                                $email = Taikhoan::model()->findAllByAttributes(array('ma_tai_khoan'=>yii::app()->session['ma_tai_khoan']));
                                foreach ($email as $e) {
                                    $e->email;
                                }
                            ?>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name='PF_Danhgiahoso[email]' class="form-control" id="inputEmail3" value="<?php echo  $e->email;?>" placeholder="Email" readonly >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="NoiDung" class="col-sm-2 control-label">Nội Dung</label>
                                <div class="col-sm-10">
                                    <textarea name="PF_Danhgiahoso[pf_noi_dung]" rows="6" cols="50" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">Gửi</button>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                       <?php $this->endWidget(); ?>
                    </div>
                </div>
            </div>
            <!-- // Modal body END -->
        </div>
    </div>
</div>
<!-- // Modal END -->